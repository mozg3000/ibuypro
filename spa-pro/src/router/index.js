import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home.vue'
import Shop from '../components/Shop.vue'

Vue.use(VueRouter)

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
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
