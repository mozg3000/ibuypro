<template>
    <div id="c-container">
        <div id="svg-container"></div>
        <div id="svg-controls">
            <button id="addRectH" @click="addRectHHandler">
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
          rectHTemplate: '',
          dragStartPosition: { x: 0, y: 0},
        }),
        methods:{

            addRectHHandler(e){

                this.dragStartPosition = { x: e.clientX, y: e.clientY};
                let newRect = this.rectHTemplate.clone();

                $("#svg-container")
                    .mousemove((event) => {
                        newRect.position(e.clientX, e.clientY);
                        newRect.attr('./display', 'block');
                        newRect.addTo(this.graph);
                        newRect.translate(
                                event.offsetX - this.dragStartPosition.x,
                                event.offsetY - this.dragStartPosition.y
                        );
                        this.paper.on('cell:pointerclick', (e)=>{
                            $("#svg-container").off('mousemove');
                            this.paper.off('cell:pointerclick');
                        })
                    });

            }
        },
        mounted() {
            const graph = new joint.dia.Graph;

            const paper = new joint.dia.Paper({
                el: document.getElementById('svg-container'),
                model: graph,
                width: 600,
                height: 400,
                gridSize: 6,
                drawGrid: {
                    name: 'doubleMesh',
                    args: [
                        { color: 'green', thickness: 1 }, // settings for the primary mesh
                        { color: 'blue', scaleFactor: 3, thickness: 2 } //settings for the secondary mesh
                    ]}
            });

            const rect = new joint.shapes.standard.Rectangle();
            rect.position(0, 0);
            rect.resize(200, 20);
            rect.attr({
                body: {
                    fill: 'blue',
                    class: 'newRack'
                },
                label: {
                    text: 'Стеллаж',
                    fill: 'white'
                    ,
                    class: 'newRack_l'
                },
            });
            rect.attr('./display', 'none');
            rect.addTo(graph);

            this.graph = graph;
            this.paper = paper;
            this.rectHTemplate = rect;
        }
    }
</script>

<style scoped lang="sass">
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
            border: #0d47a1 solid 2px
            height: 12px
            width: 15px
            margin: 0 auto
</style>