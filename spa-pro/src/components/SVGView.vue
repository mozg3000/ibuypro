<template>
  <div class="cv-container">

  </div>
</template>

<script>
    import { SVG } from '@svgdotjs/svg.js';
    import axios from 'axios';
    export default {
        name: "SVGView",
        data: ()=>({
            draw: '',
            racks: 'hfghgfh'
        }),
        methods: {
            drawMap(){

            },
            // async  getData(){
            //     return axios({
            //         method: 'get',
            //         url: '/racks/1',
            //         headers: {'Content-Type': 'application/json'}
            //     });
            // }
        },
        async mounted() {
            console.group('mounted');

            let res = await getData();
            this.racks = res.data.Racks;
            console.group('Полученные данные');
            console.log(this.racks);
            console.groupEnd('getData');
            this.draw = SVG().addTo('.cv-container').size(600, 400);
            this.racks.forEach((r) => {
                if (r.label === 'Старт'){
                    let group = this.draw.group();
                    let rect = this.draw.circle(r.width)
                        .move(r.position.x, r.position.y)
                        .fill(r.fill);
                    let label = this.draw.text(r.label).move(r.position.x, r.position.y).fill('white');
                    group.add(rect);
                    group.add(label);
                }else{
                    let group = this.draw.group();
                    let rect = this.draw.rect(r.width, r.height)
                        .move(r.position.x, r.position.y)
                        .fill(r.fill);
                    let label = this.draw.text(r.label).move(r.position.x, r.position.y).fill('white');
                    group.add(rect);
                    group.add(label);
                }
            });
            console.groupEnd('mounted');
        }
    }

    function getData(){
        return axios({
            method: 'get',
            url: '/racks/1',
            headers: {'Content-Type': 'application/json'}
        });
    }
</script>

<style scoped>

</style>