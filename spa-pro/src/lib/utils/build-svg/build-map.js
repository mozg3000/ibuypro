function buildMap(racks, drawer) {
    racks.forEach((r) => {
        if (r.label === 'Старт'){
            let group = drawer.group();
            let circle = drawer.circle(r.width)
                .move(r.position.x, r.position.y)
                .fill(r.fill);
            let label = drawer.text(r.label).move(r.position.x, r.position.y).fill('white');
            group.add(circle);
            group.add(label);
        }else{
            let group = drawer.group();
            let rect = drawer.rect(r.width, r.height)
                .move(r.position.x, r.position.y)
                .fill(r.fill);
            let label = drawer.text(r.label).move(r.position.x, r.position.y).fill('white');
            group.add(rect);
            group.add(label);
        }
    });
}

export {buildMap};