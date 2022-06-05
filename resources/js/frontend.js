require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)




import {routes} from './frontroutes';
import User from './helpers/User';
window.User = User

import Rightsidebar from './components/themes/default/sidebar';
Vue.component('rightsidebar', Rightsidebar);

window.RootUrl = window.location.origin;
window.ASSETURL = '/public/';
// window.ASSETURL = '/';

import loader from "vue-ui-preloader";

Vue.use(loader);
// var datas = {};
function schoolid(){


    axios.get("/api/school_id")
        .then(({ data }) => {
            // datas.push(data)
            // datas['dd'] = data;
            // console.log(data.school_id)
            localStorage.setItem('getschoolid', data.school_id);
        })

        window.getschoolid  = localStorage.getItem('getschoolid');

        }

            schoolid();

            import Notification from './helpers/Notification';
            window.Notification = Notification
            Vue.component('pagination', require('laravel-vue-semantic-ui-pagination'));
            window.Reload = new Vue();

            const router = new VueRouter({
              routes,
              mode: 'history'
            })

            Vue.use({ router })
            const app = new Vue({
                el: '#wrapper',
                base: process.env.APP_URL,
                router
            });
