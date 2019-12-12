<template>
  <v-app>
      <v-content>
            <MapComponent></MapComponent>
            <AuthComponent/>
            <RegistrationComponent/>
            <GoodsCategoryList/>
    </v-content>
  </v-app>
<!--    <GoodsCategoryList/>-->
<!--    <div class="svg-container"></div>-->
</template>

<script>
import AuthComponent from './components/AuthComponent';
import RegistrationComponent from './components/RegistrationComponent';
import GoodsCategoryList from './components/GoodsCategoryList';
import SVGComponent from './components/SVGComponent';
import MapComponent from './components/MapComponent'

export default {
name: 'App',

  components: {
      AuthComponent,
      RegistrationComponent,
      GoodsCategoryList,
      SVGComponent,
      MapComponent,
  },
    mounted() {
    },

  data: () => ({
    //
  }),
};
</script>
