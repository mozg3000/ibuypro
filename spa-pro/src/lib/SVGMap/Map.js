import Rack from './Rack';

export default class Map {

    racks= [];

    constructor(graph) {

        let racks = graph.getElements().slice(1);

        racks.forEach((el)=>{
            this.racks.push(new Rack(el));
        });
    }
}