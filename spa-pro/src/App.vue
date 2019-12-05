<template>
  <v-app>
    <v-content>
<!--      <AuthComponent/>-->
      <RegistrationComponent/>
    </v-content>/
  </v-app>
</template>

<script>
import AuthComponent from './components/AuthComponent';
import RegistrationComponent from './components/RegistrationComponent';

export default {
  name: 'App',

  components: {
      AuthComponent,
      RegistrationComponent,
  },

  data: () => ({
    //
  }),
};
</script>
