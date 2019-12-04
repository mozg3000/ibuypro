<template>
    <v-container>
        <v-layout
                text-center
                wrap
        >
            <v-container
                    class="fill-height"
                    fluid
            >
                <v-row
                        align="center"
                        justify="center"
                >
                    <v-col
                            cols="12"
                            sm="8"
                            md="4"
                    >
                        <v-card class="elevation-12">
                            <v-toolbar
                                    color="primary"
                                    dark
                                    flat
                            >
                                <v-toolbar-title>Авторизоваться</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form
                                v-model="valid"
                                ref="form"
                                validation
                                >
                                    <v-text-field
                                            label="Пользователь"
                                            name="username"
                                            prepend-icon="person"
                                            type="text"
                                            v-model="username"
                                            :counter="50"
                                            required
                                            :rules="usernameRules"
                                    />
                                    <v-text-field
                                            id="password"
                                            label="Пароль"
                                            name="password"
                                            prepend-icon="lock"
                                            type="password"
                                            v-model="password"
                                            :counter="8"
                                            required
                                            :rules="passwordRule"
                                    />
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer />
                                <v-btn
                                        color="primary"
                                        @click="signIn"
                                        :disabled="!valid"
                                >Войти</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-layout>
    </v-container>
</template>

<script>
    import axios from 'axios';
    // const service = axios.create({
    //     baseURL: 'http://ibuypro.inshop.online/',
    //     timeout: 5000
    // })
    export default {
        name: 'AuthComponent',

        data: () => ({
            username:'',
            password:'',
            valid: false,
            usernameRules:[
                v => !!v || 'Необходимое поле',
                v => v.length <= 50 || 'Имя максимально 50 символов',
            ],
            passwordRule:[
                v => !!v || 'Необходимое поле',
                v => (v&&v.length >= 8) || 'Пароль больше 8 символов',
            ]
        }),
        methods:{
            signIn(){
                if (this.$refs.form.validate()) {
                    const  user = {
                        'username': this.username,
                        'password': this.password
                    };
                    let bodyFormData = new FormData();
                    bodyFormData.set('Users[username]', this.username);
                    bodyFormData.set('Users[password]', this.password);

                    axios({
                        method: 'post',
                        url: '/auth/sign-in',
                        data: bodyFormData,
                        headers: {'Content-Type': 'multipart/form-data' }
                    }).then(response => console.log(JSON.parse(response.data).token))
                      .catch(e =>{
                           console.log(e.message);
                    });
                    //console.log(user);
                }
            },

        }
    };
</script>
