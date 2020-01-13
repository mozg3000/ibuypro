<template>
  <div class="cv-container">

  </div>
</template>

<script>
    import { SVG } from '@svgdotjs/svg.js';
    import {getData} from '../lib/utils/rest-api/api-request';
    import {buildMap} from "../lib/utils/build-svg/build-map";

    export default {
        name: "SVGView",
        data: ()=>({
            draw: '',
            racks: 'hfghgfh'
        }),
        methods: {
        },
        async mounted() {
            console.group('mounted');

            let res = await getData('/racks/1');
            this.racks = res.data.Racks;

            console.group('Полученные данные');
            console.log(this.racks);
            console.groupEnd('getData');

            this.draw = SVG().addTo('.cv-container').size(600, 400);
            buildMap(this.racks, this.draw);

            console.groupEnd('mounted');
        }
    }
</script>

<style scoped>

</style>