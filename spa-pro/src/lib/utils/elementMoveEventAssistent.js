
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

export {moveRect, makeRectTemplate};