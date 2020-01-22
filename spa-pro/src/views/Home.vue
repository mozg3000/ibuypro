<template>
  <v-container
      fluid
      fill-height
  >
    <v-layout
        flex-column
        align-center=""
    >
      <img alt="Vue logo" src="../assets/logo.png">

    <Home />
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
