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
                                <v-toolbar-title>Зарегистрироваться</v-toolbar-title>
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
                                    <v-text-field
                                            id="password"
                                            label="Ещё раз пароль"
                                            name="password-confirm"
                                            prepend-icon="lock"
                                            type="password"
                                            v-model="passwordConfirm"
                                            :counter="8"
                                            required
                                            :rules="passwordConfirmRule"
                                    />
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer />
                                <v-btn
                                        color="primary"
                                        @click="signUp"
                                        :disabled="!valid"
                                >Сделать</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: 'AuthComponent',

        data: () => ({
            username:'',
            password:'',
            passwordConfirm:'',
            valid: false,
            usernameRules:[
                v => !!v || 'Необходимое поле',
                v => v.length <= 50 || 'Имя максимально 50 символов',
            ],
            passwordRule:[
                v => !!v || 'Необходимое поле',
                v => (v&&v.length >= 8) || 'Пароль больше 8 символов',
            ],
            passwordConfirmRule: [
                v => (v&&!!v) || 'Надо повторить пароль',
                // v => (v && v === password) || 'Пароли не совпадают'
            ]
        }),
        methods:{
            signUp(){
                if (this.$refs.form.validate()) {
                    const  user = {
                        username: this.username,
                        password: this.password
                    }
                    console.log(user);
                }
            },

        }
    };
</script>
