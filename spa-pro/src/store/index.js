import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);
import axios from 'axios';
import router from "../router";

export default new Vuex.Store({
    state: {
        token: localStorage.getItem('user-token') || '',
        status: '',
        errorMsg: '',
        admin: localStorage.getItem('user-isAdmin') || false,
    },
    getters: {
        // isAuthenticated: state => true,
        isAuthenticated: state => !!state.token,
        authStatus: state => state.status,
        getErrorMsg: state => state.errorMsg,
        // isAdmin: state => true,
        isAdmin: state => state.admin,
        getToken: state => `Bearer ${state.token}`,
    },
    mutations: {
        AUTH_REQUEST: (state) => {

            state.status = 'loading'
        },

        AUTH_SUCCESS: (state, {token, isAdmin}) => {
            console.log('success');
            console.log(isAdmin);
            console.log(token);
            state.admin = isAdmin;
            state.status = 'success';
            state.token = token;

        },

        AUTH_ERROR: (state, msg) => {

            state.status = 'error';
            state.errorMsg = msg;

        },

        LOGOUT: (state) => {

            state.status = '';
            state.token = ''

        },
    },
    actions: {
        signIn: ({commit, dispatch, getters}, bodyFormData)=>{
            return  axios({
                    method: 'post',
                    url: '/auth/sign-in',
                    data: bodyFormData,
                    headers: {'Content-Type': 'multipart/form-data' }
                    // }).then(response => console.log(response.data))
                }).then(response => {
                    console.log(response);
                    if (response.data !== ''){
                        // let data = response.data;
                        let data = JSON.parse(response.data);
                        console.log(data.status);
                        if(data.status === 'OK'){
                            console.log(data);
                            let token = data.token,
                                isAdmin = data.admin;
                            console.log(isAdmin);
                            console.log(token);
                            localStorage.setItem('user-token', token); // store the token in localstorage
                            localStorage.setItem('user-isAdmin', isAdmin);
                            console.log(axios.defaults.headers.common);
                            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                            commit('AUTH_SUCCESS', {token, isAdmin});
                            // this.error = false;
                            // this.$router.push('/').then();

                        }else if(data.status === 'deny'){
                            console.log(data.msg);
                            let msg = data.msg;
                            // this.error = true;
                            commit('AUTH_ERROR', msg);
                            localStorage.removeItem('user-token'); // if the request fails, remove any possible user token if possible
                            localStorage.removeItem('user-isAdmin');
                        }
                    }
                }).catch(e =>{
                    console.log(e.message);
                });
        },
        logout({commit, dispatch}) {
            return new Promise((resolve, reject)=>{
                commit('LOGOUT');
                localStorage.removeItem('user-token');
                localStorage.removeItem('user-isAdmin');
                // remove the axios default header;
                delete axios.defaults.headers.common['Authorization'];
                resolve()
            })
        }
    },
    modules: {}
});
