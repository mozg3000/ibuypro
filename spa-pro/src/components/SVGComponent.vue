<template>
    <div id="c-container">
        <div id="svg-container"></div>
        <div id="svg-controls">
            <button id="addRectH" @click.prevent.stop="addRectHHandler">
                <div ></div>
            </button>
            <button id="addRectVR" @click.prevent.stop="addRectVRHandler">
                <div ></div>
            </button>
            <button id="addRectVL" @click.prevent.stop="addRectVLHandler">
                <div ></div>
            </button>
        </div>

    </div>
</template>

<script>
    window.$ = require('../../node_modules/jquery/dist/jquery.js');
    window.lodash = require('../../node_modules/lodash/lodash.js');
    window._ = require('../../node_modules/backbone/backbone.js');
    window.joint = require('../../node_modules/jointjs/dist/joint.js');

    export default {
        name: "SVGComponent",
        props: {

        },
        data: ()=>({
          graph: '',
          paper: '',
          rectTemplate: '',
        }),
        methods:{
            addRectHHandler(e){

                moveRect(this.rectTemplate, 0, this.graph, this.paper, {x:0,y:0}, {x:0,y:0});
            },
            addRectVRHandler(e) {

                moveRect(this.rectTemplate, 90, this.graph, this.paper, {x:-198,y:-9}, {x:90,y:99});
            },
            addRectVLHandler(e) {

                moveRect(this.rectTemplate, -90, this.graph, this.paper, {x:-198,y:-9}, {x:90,y:99});
            }
        },
        mounted() {
            this.graph = new joint.dia.Graph;
            this.paper =  new joint.dia.Paper({
                el: document.getElementById('svg-container'),
                model: this.graph,
                width: 600,
                height: 400,
                gridSize: 2,
                drawGrid: {
                    name: 'doubleMesh',
                    args: [
                        { color: 'green', thickness: 0.5 }, // settings for the primary mesh
                        { color: 'blue', scaleFactor: 3, thickness: 1 } //settings for the secondary mesh
                    ]}
            });
            this.rectTemplate = makeRectTemplate();
            this.rectTemplate.addTo(this.graph);
        }
    }
    function proceedNewElementMovement(paper, newElement, dragStartCorrection, positionCorrection) {
        $("#svg-container")
            .mousemove((e)=>{
                let dragStartPosition = { x: e.clientX, y: e.clientY};
                newElement.position(e.clientX+positionCorrection.x, e.clientY+positionCorrection.y);
                newElement.translate(
                    e.offsetX- dragStartPosition.x+dragStartCorrection.x,
                    e.offsetY- dragStartPosition.y+dragStartCorrection.y
                );
                newElement.attr('./display', 'block');
                paper.on('cell:pointerclick', (e)=>{
                    $("#svg-container").off('mousemove');
                    paper.off('cell:pointerclick');
                });
                dragStartPosition = { x: e.clientX, y: e.clientY};
            });
    }
    function makeRectTemplate() {

        let rect = new joint.shapes.standard.Rectangle();
        rect.resize(198,18);
        rect.attr('./display', 'none');

        return rect;
    }
    function moveRect(rectTemplate, degree, graph, paper, dragStartPosition, dragStartCorrection, positionCorrection) {

        let newVRect = rectTemplate.clone();
        newVRect.attr({
            body:{
                fill: 'blue',
                'strokeWidth': 0.5,
            },
            label:{
                text: 'Стеллаж',
                fill: 'white'
            }
        });
        newVRect.rotate(degree);
        newVRect.addTo(graph);
        proceedNewElementMovement(paper, newVRect, dragStartPosition, dragStartCorrection, positionCorrection);
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

    #addRectH
        background-color: greenyellow
        border: #0d3349 solid 0.5px
        height: 30px
        width: 30px
        &>div
            border: #0d47a1 solid 1.5px
            height: 8px
            width: 15px
            margin: 0 auto
    #addRectVR, #addRectVL
        background-color: greenyellow
        border: #0d3349 solid 0.5px
        height: 30px
        width: 30px
        &>div
            border: #0d47a1 solid 1.5px
            height: 15px
            width: 8px
            margin: 0 auto
    #addRectVL
        background-color: #a8d
</style>