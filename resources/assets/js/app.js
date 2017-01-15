
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
import NavBar from './components/NavBar.vue'
Vue.component('navbar', NavBar)

import Home from './pages/Home.vue'
import Login from './pages/Login.vue'
import Register from './pages/Register.vue'


const routes = [
  { path: '/', component: Home },
  { path: '/login', component: Login },
  { path: '/register', component: Register },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

const store = new Vuex.Store({
  state,
  mutations: {
    setUser(state, user) { state.user = user },
    setFeed(state, feed) { state.feed = feed },
    setProfile(state, profile) { state.profile = profile }
  }
})

const app = new Vue({
    el: '#app',
    router,
    store
})
