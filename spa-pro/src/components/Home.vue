<template>
    <v-app id="inspire">
        <v-card
                class="mx-auto"
                max-width="500"
        >
            <v-container fluid>

                <v-row dense>
                    <v-col
                            v-for="card in shops"
                            :key="card.id"
                            :cols="card.Flex"
                    >
                        <v-card>
                            <router-link :to="{name:'shop', params: {id: card.id}}">
                                <v-img
                                    src="https://via.placeholder.com/400x200"
                                    class="white--text align-end"
                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                    height="200px"
                                >
                                    <v-card-title v-text="card.ShopName+' ' +card.ShopAddress"></v-card-title>
                                </v-img>
                            </router-link>
                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn icon>
                                    <v-icon>mdi-heart</v-icon>
                                </v-btn>

                                <v-btn icon>
                                    <v-icon>mdi-bookmark</v-icon>
                                </v-btn>

                                <v-btn icon>
                                    <v-icon>mdi-share-variant</v-icon>
                                </v-btn>
                            </v-card-actions>

                        </v-card>
                    </v-col>
                </v-row>
              <router-link :to="{ name: 'shopAdd', parapms:{id:null}}">
                <v-btn
                    bottom
                    color="pink"
                    dark
                    fab
                    fixed
                    right
                >
                  <v-icon>add</v-icon>
                </v-btn>
              </router-link>
            </v-container>
        </v-card>
    </v-app>
</template>

<script>

    // import axios from 'axios';
    import {getData} from '../lib/utils/rest-api/api-request'

    export default {
        name: 'Home',

        data: () => ({
            shops: [],
            endpoint: 'db.json',
        }),

        created() {
            this.getAllPosts();

        },

        methods: {
            getImgUrl(pic) {
                return require('../assets/home/' + pic);
            },

            getAllPosts() {

                getData('/shops').then(res=>{
                    console.log(res.data);
                    this.shops = res.data
                });
                // var self = this
                // axios.get(this.endpoint)
                //     .then(response => {
                //         this.shops = response.data.Shops;
                //         console.log(this.shops[0]);
                //         console.log(this.shops[0].Src);
                //     })
                //     .catch(error => {
                //         console.log('-----error-------');
                //         console.log(error);
                //     })
            }
        }
    };
</script>