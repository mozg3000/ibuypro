<template>
  <div id="c-container">
    <div id="svg-container"></div>
    <div id="svg-controls">
      <button id="addRectH" @click.prevent.stop="addRectHHandler">
        <div></div>
      </button>
      <button id="addRectVR" @click.prevent.stop="addRectVRHandler">
        <div></div>
      </button>
      <button id="addRectVL" @click.prevent.stop="addRectVLHandler">
        <div></div>
      </button>
      <button id="point_btn" @click.prevent.stop="addPoint">
        <div></div>
      </button>
      <button id="terminal_btn" @click.prevent.stop="addTerminalPoint">
        <div></div>
      </button>
      <button id="start_btn" @click.prevent.stop="addStartPoint">
        <div></div>
      </button>
      <button id="link_btn" @click.prevent.stop="linking">
        <div>Link</div>
      </button>
      <button id="save_btn" @click.prevent.stop="saveMap">
        <div>Save</div>
      </button>
    </div>
  </div>
</template>

<script>
    window.$ = require('../../node_modules/jquery/dist/jquery.js');
    window.lodash = require('../../node_modules/lodash/lodash.js');
    window._ = require('../../node_modules/backbone/backbone.js');
    window.joint = require('../../node_modules/jointjs/dist/joint.js');
    // window.g = require('../../node_modules/jointjs/dist/joint.js');

    import Map from '../lib/MapObject/Map.js';
    import {moveRect} from '../lib/utils/draw-svg/elementMoveEventAssistent';
    import mapInit from "../lib/utils/draw-svg/mapInit";
    import {buildTails} from "../lib/utils/tails";
    import {postData} from "../lib/utils/rest-api/api-request";

    export default {
        name: "SVGComponent",
        props: {},
        data: () => ({
            graph: '',
            paper: '',
            rectTemplate: '',
            isLinking: false
        }),
        methods: {
            buildTails() {
                let map = new Map(this.graph);
                let tails = buildTails(map);
                console.log(tails);
            },
            addRectHHandler(e) {

                let attrs = {
                    body: {
                        fill: 'blue'
                    },
                    label: {
                        fill: '#ECF0F1',
                        text: 'Стеллаж'
                    }
                };
                moveRect(this.rectTemplate, attrs, 0, this.graph, this.paper, {x: -99, y: -9}, {x: 0, y: 0});
            },
            addRectVRHandler(e) {
                let attrs = {
                    body: {
                        fill: 'blue'
                    },
                    label: {
                        fill: '#ECF0F1',
                        text: 'Стеллаж'
                    }
                };
                moveRect(this.rectTemplate, attrs, 90, this.graph, this.paper, {x: -189, y: -99}, {x: 90, y: 99});
            },
            addRectVLHandler(e) {
                let attrs = {
                    body: {
                        fill: 'blue'
                    },
                    label: {
                        fill: '#ECF0F1',
                        text: 'Стеллаж'
                    }
                };
                moveRect(this.rectTemplate, attrs, -90, this.graph, this.paper, {x: -189, y: -99}, {x: 90, y: 99});
            },
            async saveMap(e) {
                let map = new Map(this.graph);
                console.log(map);
                let res = await postData('/racks/1', map.racks);
                console.group('ответ от сервера после сохранения');
                console.log(res);
                console.groupEnd()
            },
            addStartPoint(e) {
                let startPoint = this.rectTemplate.clone();
                startPoint.resize(30, 30);
                startPoint.attr({
                    body: {
                        rx: 20,
                        ry: 20,
                        strokeWidth: 0
                    },
                    label: {
                        fontSize: 11,
                        fontVariant: 'small-caps'
                    }
                });
                let attrs = {
                    body: {
                        fill: '#E74C3C'
                    },
                    label: {
                        fill: '#ECF0F1',
                        text: 'Старт'
                    }
                };
                moveRect(startPoint, attrs, 0, this.graph, this.paper, {x: -15, y: -15}, {x: 0, y: 0});
            },
            addPoint(e) {
                let point = this.rectTemplate.clone();
                point.resize(15, 15);
                point.attr({
                    body: {
                        rx: 5,
                        ry: 5,
                        strokeWidth: 0
                    },
                    label: {
                        fontSize: 11,
                        fontVariant: 'small-caps'
                    }
                });
                let attrs = {
                    body: {
                        fill: 'black'
                    },
                    label: {
                        fill: 'black',
                        text: ''
                    }
                };
                moveRect(point, attrs, 0, this.graph, this.paper, {x: -5, y: -5}, {x: 0, y: 0});
            },
            addTerminalPoint(e) {

                let point = this.rectTemplate.clone();
                point.resize(15, 15);
                point.attr({
                    body: {
                        rx: 5,
                        ry: 5,
                        strokeWidth: 0
                    },
                    label: {
                        fontSize: 11,
                        fontVariant: 'small-caps'
                    }
                });
                let attrs = {
                    body: {
                        fill: 'green'
                    },
                    label: {
                        fill: 'black',
                        text: ''
                    }
                };
                moveRect(point, attrs, 0, this.graph, this.paper, {x: -5, y: -5}, {x: 0, y: 0});
            },
            linking() {
                if(!this.isLinking){
                    this.isLinking = true;
                    let graph = this.graph;
                    this.paper.on({
                        'element:pointerdown': function (elementView, evt) {

                            evt.data = elementView.model.position();
                        },

                        'element:pointerup':  function(elementView, evt, x, y) {

                            let coordinates = new joint.g.Point(x, y);
                            let elementAbove = elementView.model;
                            let elementBelow = this.model.findModelsFromPoint(coordinates).find(function (el) {
                                return (el.id !== elementAbove.id);
                            });

                            // If the two elements are connected already, don't
                            // connect them again (this is application-specific though).
                            if (elementBelow && graph.getNeighbors(elementBelow).indexOf(elementAbove) === -1) {

                                // Move the element to the position before dragging.
                                elementAbove.position(evt.data.x, evt.data.y);

                                // Create a connection between elements.
                                let link = new joint.shapes.standard.Link();
                                link.source(elementAbove);
                                link.target(elementBelow);
                                link.addTo(graph);

                                // Add remove button to the link.
                                let tools = new joint.dia.ToolsView({
                                    tools: [new joint.linkTools.Remove()]
                                });
                                link.findView(this).addTools(tools);
                                // console.log(this);
                            }
                        }
                    });
                }else{

                    this.isLinking = false;
                    this.paper.off('element:pointerdown');
                    this.paper.off('element:pointerup');
                }

            },
        },
        mounted() {

            let {graph, paper, rectTemplate} = mapInit(this.graph, this.paper, this.rectTemplate);

            this.graph = graph;
            this.paper = paper;
            this.rectTemplate = rectTemplate;
        }
    }
</script>

<style scoped lang="sass">
  button
    margin-left: 1.5px

  #svg-container
    position: relative
    margin: 0 auto

  #svg-controls
    display: flex
    justify-content: center
    margin-top: 15px

  #addRectH
    background-color: greenyellow
    border: #0d3349 solid 0.5px
    height: 30px
    width: 30px

    > div
      border: #0d47a1 solid 1.5px
      height: 8px
      width: 15px
      margin: 0 auto

  #save_btn, #link_btn
    background-color: greenyellow
    border: #0d3349 solid 0.5px

  #addRectVR, #addRectVL
    background-color: greenyellow
    border: #0d3349 solid 0.5px
    height: 30px
    width: 30px

    > div
      border: #0d47a1 solid 1.5px
      height: 15px
      width: 8px
      margin: 0 auto

  #addRectVL
    background-color: #a8d

  #start_btn
    width: 30px
    height: 30px
    border: 1px solid black

    > div
      width: 10px
      height: 10px
      margin: 0 auto
      border: 0.5px solid red
      border-radius: 50%

  #point_btn
    width: 30px
    height: 30px
    border: 1px solid black

    > div
      width: 10px
      height: 10px
      margin: 0 auto
      border: 0.5px solid red
      border-radius: 50%
      background-color: black

  #terminal_btn
    width: 30px
    height: 30px
    border: 1px solid black

    > div
      width: 10px
      height: 10px
      margin: 0 auto
      border: 0.5px solid red
      border-radius: 50%
      background-color: green
</style>