require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)




import {routes} from './frontroutes';
import User from './helpers/User';
window.User = User

import Rightsidebar from './components/themes/default/sidebar';
Vue.component('rightsidebar', Rightsidebar);

import Input from './components/themes/default/form/input';
Vue.component('vueInput', Input);

window.RootUrl = window.location.origin;
window.ASSETURL = '/public/';
// window.ASSETURL = '/';
import store from './store'
import loader from "vue-ui-preloader";

import common from './common'
Vue.mixin(common)

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
            import '@fortawesome/fontawesome-free/js/all.js';

            const router = new VueRouter({
              routes,
              mode: 'history'
            })
            Vue.use({ router })
            const app = new Vue({
                el: '#wrapper',
                created:function(){
                    (function(d,s,id){
                        var js;
                        var fjs= d.getElementsByTagName(s)[0];
                        if(d.getElementById(id)) return
                        js = d.createElement(s)
                        js.id = id
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=950733182430544&autoLogAppEvents=1"
                        fjs.parentNode.insertBefore(js,fjs)
                    }(document,'script','facebook-jssdk'))


                    // (function(d, s, id) {
                    //     var js, fjs = d.getElementsByTagName(s)[0];
                    //     if (d.getElementById(id)) return;
                    //     js = d.createElement(s); js.id = id;
                    //     js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                    //     fjs.parentNode.insertBefore(js, fjs);
                    //   }(document, 'script', 'facebook-jssdk'));


                },
                base: process.env.APP_URL,
                router,
                store
            });
