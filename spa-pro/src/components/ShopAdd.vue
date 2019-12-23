<template lang="html">
<v-app id="inspire">
    <v-container fluid>
        <v-row align="center">

            <v-col height="600px">
                <v-select
                        :items="chain"
                        multiple
                        chips
                        hint="Воспользуйтесь фильтром"
                        persistent-hint
                        v-on:change="getSelectSearch($event)"
                ></v-select>
            </v-col>
        </v-row>
    </v-container>
    <v-simple-table>
        <template v-slot:default>
            <thead>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Address</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in desserts" :key="item.name">
                <td>{{ item.name }}</td>
                <td>{{ item.calories }}</td>
            </tr>
            </tbody>
        </template>
    </v-simple-table>
</v-app>
</template>

<script>
    import axios from 'axios';

    export default {
        name: 'ShopAdd',

        data() {
            return {
                shop: null,
                post: null,
                chain: [],
                endpoint: 'db.json',
            }
        },
        methods: {
            getPost() {
                axios(this.endpoint)
                    .then(response => {
                        console.log("axios");
                        this.post = response.data;
                        this.getChain();
                    })
                    .catch( error => {
                        console.log('-----errorChain-------');
                        console.log(error)
                    })
            },

            getChain() {
                console.log("chains");
                let chainArr = [];
                for (let item of this.post.Сhain){
                    chainArr.push(item.Name);
                }
                this.chain = chainArr;
            },

            getSelectSearch(event) {
                console.log(event.target);
            }

        },

        created() {
            console.log("created");
            this.getPost(this.id);
        },

        watch: {

        }
    }
</script>
