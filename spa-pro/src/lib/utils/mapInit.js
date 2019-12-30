import {makeRectTemplate} from '../../lib/utils/makeElementTemplate';

export default function(graph, paper, rectTemplate){
    graph = new joint.dia.Graph;
    paper =  new joint.dia.Paper({
        el: document.getElementById('svg-container'),
        model: graph,
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
    rectTemplate = makeRectTemplate();
    rectTemplate.addTo(graph);

    return {graph, paper, rectTemplate}
}