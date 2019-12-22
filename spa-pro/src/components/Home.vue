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
                            :key="card.Name"
                            :cols="card.Flex"
                    >
                        <v-card>
                            <a href="/shop/`${card.Id}`">
                                <v-img
                                    :src="`${getImgUrl(card.Src)}`"
                                    class="white--text align-end"
                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                    height="200px"
                                >
                                    <v-card-title v-text="card.title"></v-card-title>
                                </v-img>
                            </a>
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
            </v-container>
        </v-card>
    </v-app>
</template>

<script>

    import axios from 'axios';

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

                var self = this
                axios.get(this.endpoint)
                    .then(response => {
                        this.shops = response.data.Shops;
                        console.log(this.shops[0]);
                        console.log(this.shops[0].Src);
                    })
                    .catch(error => {
                        console.log('-----error-------');
                        console.log(error);
                    })
            }
        }
    };
</script>