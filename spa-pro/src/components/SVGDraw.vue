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
            <button id="start_btn" @click.prevent.stop="addStartPoint">
                <div></div>
            </button>
            <button id="save_btn" @click.prevent.stop="saveMap">
                <div >Save</div>
            </button>
        </div>
    </div>
</template>

<script>
    window.$ = require('../../node_modules/jquery/dist/jquery.js');
    window.lodash = require('../../node_modules/lodash/lodash.js');
    window._ = require('../../node_modules/backbone/backbone.js');
    window.joint = require('../../node_modules/jointjs/dist/joint.js');

    import axios from 'axios';

    import Map from '../lib/SVGMap/Map.js';
    import {moveRect} from '../lib/utils/elementMoveEventAssistent';
    import mapInit from "../lib/utils/mapInit";
    import {buildTails} from "../lib/utils/tails";

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
            buildTails(){
                let map = new Map(this.graph);
                let tails = buildTails(map);
                console.log(tails);
            },
            addRectHHandler(e){

                let attrs = {
                    body: {
                        fill: 'blue'
                    },
                    label: {
                        fill: '#ECF0F1',
                        text: 'Стеллаж'
                    }
                };
                moveRect(this.rectTemplate, attrs, 0, this.graph, this.paper, {x:-99,y:-9}, {x:0,y:0});
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
                moveRect(this.rectTemplate, attrs, 90, this.graph, this.paper, {x:-189,y:-99}, {x:90,y:99});
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
                moveRect(this.rectTemplate, attrs, -90, this.graph, this.paper, {x:-189,y:-99}, {x:90,y:99});
            },
            saveMap(e){

                let map = new Map(this.graph);
                // console.log(JSON.stringify(map.racks));
                // let res = await axios.post('/racks', map.racks);
                axios({
                    method: 'post',
                    url: '/racks/1',
                    data:  map.racks,
                    headers: {'Content-Type': 'application/json' }
                    // }).then(response => console.log(response.data))
                }).then(res=>{
                    console.log(res.data);
                });

                // this.buildTails();
            },
            addStartPoint(e){
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
                moveRect(startPoint, attrs, 0, this.graph, this.paper, {x:-15,y:-15}, {x:0,y:0});
            }
        },
        mounted() {

            let map = mapInit(this.graph,this.paper, this.rectTemplate);

            this.graph = map.graph;
            this.paper = map.paper;
            this.rectTemplate = map.rectTemplate;
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
        >div
            border: #0d47a1 solid 1.5px
            height: 8px
            width: 15px
            margin: 0 auto
    #save_btn
        background-color: greenyellow
        border: #0d3349 solid 0.5px

    #addRectVR, #addRectVL
        background-color: greenyellow
        border: #0d3349 solid 0.5px
        height: 30px
        width: 30px
        >div
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
        >div
            width: 10px
            height: 10px
            margin: 0 auto
            border: 0.5px solid red
            border-radius: 50%
</style>