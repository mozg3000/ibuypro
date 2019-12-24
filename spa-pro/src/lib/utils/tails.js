function buildTails(map) {
    let occupied = findOccupied(map);
    let tails = [];
    for(let i=0;i<600;i+=6){
        for (let j=0;j<400;j+=6){
            if(!isOccupied([i,j], occupied)){
                tails.push([i,j]);
            }
        }
    }
    return tails;
}
function findOccupied(map) {
    let occupied = [];
    map.racks.forEach((r)=>{
        if(r.label !== 'Старт'){
            let x = r.position.x,
                y = r.position.y;
            occupied.push([x,y]);
        }
    });
    return occupied;
}
function isOccupied(position, occupied) {
    for (let i=0;i<occupied.length;++i){
        let x = occupied[i][0],
            y = occupied[i][1];
        if((position[0]>=x&&position[0]<x+198)&&(position[1]>=y&&position[1]<y+18)){
            return true;
        }
    }
    return false;
}

export {isOccupied, buildTails};