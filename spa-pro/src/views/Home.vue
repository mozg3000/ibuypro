<template>
  <v-container
  >
    <v-layout
        flex-column
        align-center
    >
      <img alt="Vue logo" src="../assets/logo.png">
<!--      <p>Демовидео</p>-->
<!--      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLzN&#45;&#45;9kyrlVCpdXrdl0KHwQeYNsFngMSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen-->
<!--      style="box-shadow: 0 0 20px #0d3349"-->
<!--      ></iframe>-->
    <Home />
      <div class="d-flex  align-center flex-column mt-8" >
        <p><strong>Демовидео</strong></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLzN--9kyrlVCpdXrdl0KHwQeYNsFngMSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                style="box-shadow: 0 0 20px #0d3349"
        ></iframe>
      </div>
    </v-layout>
  </v-container>
</template>

<script>
// @ is an alias to /src
import Home from '../components/Home.vue'

export default {
  name: 'home',
  components: {
    Home
  }
}
</script>
