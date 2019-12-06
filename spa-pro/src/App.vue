<template>
  <v-app>
    <v-content>
<!--      <AuthComponent/>-->
<!--      <RegistrationComponent/>-->
        <GoodsCategoryList/>
    </v-content>
  </v-app>
<!--    <GoodsCategoryList/>-->
</template>

<script>
import AuthComponent from './components/AuthComponent';
import RegistrationComponent from './components/RegistrationComponent';
import GoodsCategoryList from './components/GoodsCategoryList';

export default {
name: 'App',

  components: {
      AuthComponent,
      RegistrationComponent,
      GoodsCategoryList,
  },

  data: () => ({
    //
  }),
};
</script>
