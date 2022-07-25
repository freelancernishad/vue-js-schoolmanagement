import Vue from "vue";
import Vuex from 'vuex';
Vue.use(Vuex)



const store = new Vuex.Store({
    state:{
        // bookList:['Book 1','Book 2','Book 3','Book 4']


    },// as like data(){return:{}}
    mutations:{


    },
    getters:{



    },// as like computed:{}
    actions:{
        Fb_Parse(){
            setTimeout(() => {
                // console.log(window.FB.XFBML.parse())
                window.FB.XFBML.parse()


                // window.fbAsyncInit = function() {
                //     FB.init({
                //       xfbml            : true,
                //       version          : 'API-VERSION'
                //     });
                //   };

            },2000);
        }
    },// as like methods:{}

});



export default store;
