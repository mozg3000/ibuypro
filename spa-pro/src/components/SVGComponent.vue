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
                let dragStartPosition = { x: e.clientX, y: e.clientY};

                moveRect(this.rectTemplate, 0, this.graph, this.paper, dragStartPosition, {x:0,y:0}, {x:0,y:0});
            },
            addRectVRHandler(e) {

                let dragStartPosition = {x: e.clientX, y: e.clientY};

                moveRect(this.rectTemplate, 90, this.graph, this.paper, dragStartPosition, {x:-200,y:-10}, {x:90,y:100});
            },
            addRectVLHandler(e) {

                let dragStartPosition = {x: e.clientX, y: e.clientY};

                moveRect(this.rectTemplate, -90, this.graph, this.paper, dragStartPosition, {x:-200,y:-10}, {x:90,y:100});
            }
        },
        mounted() {
            this.graph = new joint.dia.Graph;
            this.paper =  new joint.dia.Paper({
                el: document.getElementById('svg-container'),
                model: this.graph,
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
            this.rectTemplate = makeRectTemplate();
            this.rectTemplate.addTo(this.graph);
        }
    }
    function proceedNewElementMovement(paper, newElement, dragStartPosition, dragStartCorrection, positionCorrection) {
        $("#svg-container")
            .mousemove((e)=>{
                newElement.position(e.clientX+positionCorrection.x/*90*/, e.clientY+positionCorrection.y /*100*/);
                newElement.translate(
                    e.offsetX - dragStartPosition.x+dragStartCorrection.x,//200,
                    e.offsetY - dragStartPosition.y+dragStartCorrection.y//10
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
        rect.resize(200,20);
        rect.attr('./display', 'none');

        return rect;
    }
    function moveRect(rectTemplate, degree, graph, paper, dragStartPosition, dragStartCorrection, positionCorrection) {

        let newVRect = rectTemplate.clone();
        newVRect.attr({
            body:{
                fill: 'blue',
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