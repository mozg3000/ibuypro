<template lang="html">
    <v-app id="inspire">
        <v-card>
            <v-toolbar flat>

                <v-app-bar-nav-icon v-on:click="refreshCategories(); setHidden();"></v-app-bar-nav-icon>

                <v-text-field
                        flat
                        solo-inverted
                        hide-details
                        prepend-inner-icon="search"
                        label="Search"
                        class="hidden-sm-and-down"
                        v-model="search"
                        id="search"
                        v-on:click="refreshCategories"
                ></v-text-field>

                <v-spacer></v-spacer>


                <template v-slot:extension>
                    <v-tabs
                            v-model="tabs"
                            fixed-tabs
                    >
                        <v-tabs-slider></v-tabs-slider>
                        <v-tab
                                href="#mobile-tabs-5-1"
                                class="primary--text"
                        >
                            <v-icon>map</v-icon>
                        </v-tab>

                        <v-tab
                                href="#mobile-tabs-5-2"
                                class="primary--text"
                        >
                            <v-icon>mdi-heart</v-icon>
                        </v-tab>

                        <v-tab
                                href="#mobile-tabs-5-3"
                                class="primary--text"
                        >
                            <v-icon>info</v-icon>
                        </v-tab>
                    </v-tabs>
                </template>
            </v-toolbar>

            <v-tabs-items v-model="tabs" v-if="isHidden === false">
                <v-tab-item
                        v-for="i in 3"
                        :key="i"
                        :value="'mobile-tabs-5-' + i"
                >
                    <v-card flat>
                        <v-card-text v-text="text[i-1]"></v-card-text>
                    </v-card>
                </v-tab-item>
            </v-tabs-items>


        </v-card>

        <v-list v-if="isHidden === true">
            <v-list-group
                    v-for="item in categories"
                    :key="item.Name"
                    :prepend-icon="item.Icon"
                    no-action
                    @click = "setCategories"
            >
                <template v-slot:activator>
                    <v-list-item-content :data-parent="item.Id">
                        <v-list-item-title v-text="item.Name"></v-list-item-title>
                    </v-list-item-content>
                </template>
            </v-list-group>
        </v-list>
    </v-app>

</template>

<script>
    import axios from 'axios';
    export default {
        name: 'Shop',
        props: ['id'],
        data() {
            return {
                shop: null,
                post: null,
                categories: null,
                categoriesId: 0,
                endpoint: '../db.json',
                isHidden: false,
                tabs: null,
                text: ['Здесь будет карта!!!', 'Здесь будут избранные маршруты', 'Здесь будет информация'],
                search: ''
            }
        },
        methods: {
            getPost(id) {
                axios(this.endpoint)
                    .then(response => {
                        console.log("axios");
                        this.post = response.data;
                        let shops = this.post.Shops;
                        this.shop = shops.find(shop => shop.Id === id);
                        this.categories = this.getCategories();
                    })
                    .catch( error => {
                        console.log('-----errorShop-------');
                        console.log(error)
                    })
            },
            setCategories(event) {
                console.log("setCategories");

                this.categoriesId = event.target.getAttribute("data-parent");
                this.categories = this.getCategories();
            },
            getCategories() {
                console.log("getCategories");
                let categoriesShops = this.post.Categories;
                let categoriesFilter = categoriesShops.filter(item => item.ParentId == this.categoriesId);
                if (categoriesFilter.length === 0) {
                    this.isHidden = false;
                    this.refreshCategories();
                    this.getRoute();
                } else return categoriesFilter;
            },
            refreshCategories() {
                console.log("refreshCategories");
                this.categoriesId = 0;
                document.getElementById("search").value = "";
                this.categories = this.getCategories();
            },
            setHidden() {
                this.isHidden = !this.isHidden;
            },
            getRoute() {
                console.log("Строим маршрут");
            },
            searcher() {
                console.log("search");
                this.isHidden = true;
                this.categories = this.post.Categories.filter(item => item.Name.indexOf(this.search) !== -1);
                console.log(this.categories);
            }
        },

        created() {
            console.log("created");
            this.getPost(this.id);
        },

        watch: {
            search(after, before) {
                this.searcher();
            }
        }
    }
</script>
