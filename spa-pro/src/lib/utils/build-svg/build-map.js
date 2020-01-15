function buildMap(racks, drawer) {
    racks.forEach((r) => {
        if (r.label === 'Старт'){
            let group = drawer.group();
            let circle = drawer.rect(r.width+60,r.width)
            // let circle = drawer.circle(r.width+30)
                .move(r.position.x, r.position.y)
                .fill(r.fill);
            let label = drawer.text(r.label+' #'+r.top).move(r.position.x, r.position.y).fill('white');
            group.add(circle);
            group.add(label);
        }else{
            let group = drawer.group();
            let rect = drawer.rect(r.width+30, r.height)
                .move(r.position.x, r.position.y)
                .fill(r.fill);
            let label = drawer.text(r.label+' #'+r.top).move(r.position.x, r.position.y).fill('white');
            group.add(rect);
            group.add(label);
        }
    });
}

export {buildMap};