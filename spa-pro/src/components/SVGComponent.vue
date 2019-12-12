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

    import Map from '../lib/SVGMap/Map.js';
    import {moveRect} from '../lib/utils/elementMoveEventAssistent';
    import mapInit from "../lib/utils/mapInit";

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

                moveRect(this.rectTemplate, 0, this.graph, this.paper, {x:-99,y:-9}, {x:0,y:0});
            },
            addRectVRHandler(e) {

                moveRect(this.rectTemplate, 90, this.graph, this.paper, {x:-189,y:-99}, {x:90,y:99});
            },
            addRectVLHandler(e) {

                moveRect(this.rectTemplate, -90, this.graph, this.paper, {x:-189,y:-99}, {x:90,y:99});
            },
            saveMap(e){

                let map = new Map(this.graph);
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
    #save_btn
        background-color: greenyellow
        border: #0d3349 solid 0.5px

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