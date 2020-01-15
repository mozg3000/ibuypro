<template>
  <div>
    <div class="cv-container">

    </div>
    <button id="find_btn" @click.prevent="findPath">
      Найти путь
    </button>
  </div>
</template>

<script>
    import { SVG } from '@svgdotjs/svg.js';
    import {getData, postData} from '../lib/utils/rest-api/api-request';
    import {buildMap} from "../lib/utils/build-svg/build-map";
    import {buildTails} from "../lib/utils/tails";

    // let body = {"Categories": ["Макароны"]};
    let body = ["Макароны","Шашлык","Вода"];

    export default {
        name: "SVGView",
        data: ()=>({
            draw: '',
            racks: ''
        }),
        methods: {
            async findPath(){
                let res = await postData('/find-path/3', body);
                console.group('Нахождение пути');
                console.log(res.data);
                console.groupEnd('Нахождение пути');
            }
        },
        async mounted() {
            console.group('mounted');

            let res = await getData('/racks/3');
            this.racks = res.data.Racks;

            console.group('Полученные данные');
            console.log(this.racks);
            console.groupEnd('getData');

            this.draw = SVG().addTo('.cv-container').size(600, 400);
            buildMap(this.racks, this.draw);
            // buildMap(this.racks.filter(x => x.label != ''), this.draw);

            console.groupEnd('mounted');

            // console.log(JSON.stringify(body));
        }
    }
</script>

<style scoped lang="sass">
#find_btn
  width: 100%
  height: 22px
  background-color: forestgreen
  border: 1px solid black
</style>