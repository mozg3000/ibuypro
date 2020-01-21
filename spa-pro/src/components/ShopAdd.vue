<template lang="html">
  <v-app id="inspire">
    <v-card>
      <form action="#" name="addShop">
        <input type="text" placeholder="Название" v-model="ShopName"/><br>
        <input type="text" placeholder="Адресс" v-model="ShopAddress"/><br>
        <input type="email" placeholder="Почта" v-model="ShopEmail"/><br>
        <input type="number" placeholder="Телефон" v-model="ShopPhone"/><br>
        <textarea placeholder="Описание" v-model="description"/><br>
        <input type="submit" value="Добавить" @click.prevent.stop="addShop">
      </form>


    </v-card>

  </v-app>

</template>

<script>
    // import axios from 'axios';
    import {getData, postData, putData} from "../lib/utils/rest-api/api-request";
    import SVGDraw from "../components/SVGDraw"

    export default {
        name: 'ShopAdd',
        props: ['shop'],
        components: {SVGDraw},
        data: () => ({
            ShopName: '',
            ShopAddress: '',
            ShopEmail: '',
            ShopPhone: '',
            description: '',

        }),
        methods: {
            async addShop() {
                console.log(this.shop == undefined);
                if (this.shop != undefined){
                    let res = await putData('shops/'+this.shop.id, {
                        ShopName: this.ShopName,
                        ShopAddress: this.ShopAddress,
                        ShopEmail: this.ShopEmail,
                        ShopPhone: this.ShopPhone,
                        description: this.description
                    });
                    this.$router.push({name: 'shop', params: {id: this.shop.id}});
                    // console.log(res);
                }else{
                    let res = await postData('shops', {
                        ShopName: this.ShopName,
                        ShopAddress: this.ShopAddress,
                        ShopEmail: this.ShopEmail,
                        ShopPhone: this.ShopPhone,
                        description: this.description
                    });
                    console.log(res);
                    this.$router.push({name: 'shop', params: {id: res.data.id}});
                }

            },

        },
        created() {
            if (this.shop) {
                this.ShopName = this.shop.ShopName;
                this.ShopAddress = this.shop.ShopAddress;
                this.ShopEmail = this.shop.ShopEmail;
                this.ShopPhone = this.shop.ShopPhone;
                this.description = this.shop.description;
            }
        }
    }
</script>
<style scoped lang="sass">
  input, textarea
    border: 1px solid black
    margin: 5px auto
    width: 300px

    &[type='submit']
      background-color: green
  textarea
    height: 200px
</style>
