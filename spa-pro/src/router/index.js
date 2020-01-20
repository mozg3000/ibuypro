import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home.vue'
import Shop from '../components/Shop.vue'
import ShopAdd from '../components/ShopAdd.vue'
import Map from "../views/Map";
import MapView from "../views/MapView";
import AuthComponent from "../components/AuthComponent";
import RegistrationComponent from "../components/RegistrationComponent";
import store from '../store/index'

Vue.use(VueRouter);

const ifNotAuthenticated = (to, from, next) => {
    if (!store.getters.isAuthenticated) {
        next();
        return;
    }
    next('/');
};

const ifAuthenticated = (to, from, next) => {
    if (store.getters.isAuthenticated && store.getters.isAdmin) {
        next();
        return
    }
    next('/sign-in');
};

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/shop/:id',
        name:'shop',
        component: Shop,
        props: true
    },
    {
        path: '/shop-add',
        name:'shopAdd',
        component: ShopAdd
    },
    {
        path: '/map/draw',
        name:'mapdraw',
        component: Map,
        beforeEnter: ifAuthenticated,
    },
    {
        path: '/map/view',
        name:'mapview',
        component: MapView
    },
    {
        path: '/sign-in',
        name:'signin',
        component: AuthComponent,
        beforeEnter: ifNotAuthenticated,
    },
    {
        path: '/sign-up',
        name:'signup',
        component: RegistrationComponent,
        beforeEnter: ifNotAuthenticated,
    }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
