require('./bootstrap');

import Vue from 'vue'
// import * as Vue from 'vue'
// import * as Vue from "vue";
// import pagination from "vuejs-uib-pagination";

// Vue.use(pagination);

// Vue.config.devtools = false;
// Vue.config.debug = false;
// Vue.config.silent = true;

import VueRouter from 'vue-router'
Vue.use(VueRouter)


import VueRouterBackButton from 'vue-router-back-button'







// import VueQRCodeComponent from 'vue-qrcode-component'
// Vue.component('qr-code', VueQRCodeComponent)

// import VueBarcode from 'vue-barcode';
// Vue.component('barcode', VueBarcode)

// import { BModal , BButton  } from 'bootstrap-vue'
// Vue.component('b-modal', BModal)
// Vue.component('b-button', BButton)


// Router Imported
import {routes} from './routes';

// Import helper class
import User from './helpers/User';
window.User = User

// Import helper class


Vue.prototype.$localStorage = localStorage;

// Import helper class
// import Dashboard from './components/layouts/Dashboard'
// Vue.component('dashboardlayout', Dashboard);

// // Import helper class
// import loginlayout from './components/layouts/login'
// Vue.component('loginlayout', loginlayout);

window.RootUrl = window.location.origin;
window.ASSETURL = '/public/';
// window.ASSETURL = '/';
// window.preloader = true;


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

            // if (User.loggedIn()) {
            //     // this.$router.push({ name: "/" });
            //     window.location.href ="/school";
            // }else{
            //     window.location.href ="/";

            // }





// import Noty from "noty";
// new Noty({
//     text: "Notification text"
//   }).show();
// Import Notification class
import Notification from './helpers/Notification';
window.Notification = Notification

// import { Bar } from 'vue-chartjs'
import { Bar } from 'vue-chartjs/legacy'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
Vue.component('Bar', Bar);




// import VueLazyload from 'vue-lazyload'

// Vue.use(VueLazyload)


import VueUploadMultipleImage from 'vue-upload-multiple-image'
Vue.component('VueUploadMultipleImage', VueUploadMultipleImage);

import FlipCountdown from 'vue2-flip-countdown'
Vue.component('FlipCountdown', FlipCountdown);

// import VModal from 'vue-js-modal'
// Vue.use(VModal)



// import studentimage from './components/studentimage.vue'
// Vue.component('studentimage', studentimage);
/* import the fontawesome core */
// import { library } from '@fortawesome/fontawesome-svg-core'

// /* import specific icons */
// import { faUserSecret } from '@fortawesome/free-solid-svg-icons'

// /* import font awesome icon component */
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// /* add icons to the library */
// library.add(faUserSecret)

// /* add font awesome icon component */
// Vue.component('font-awesome-icon', FontAwesomeIcon)

// Vue.config.productionTip = false

import '@fortawesome/fontawesome-free/js/all.js';




// import vueselect from 'vue-select2';

// Vue.component('vue-select', vueselect)



Vue.component('pagination', require('laravel-vue-semantic-ui-pagination'));

//Swee alert 2 start
import Swal from 'sweetalert2'
window.Swal = Swal;

// const Toast = Swal.mixin({
//   toast: true,
//   position: 'top-end',
//   showConfirmButton: false,
//   timer: 3000,
//   timerProgressBar: true,
//   didOpen: (toast) => {
//     toast.addEventListener('mouseenter', Swal.stopTimer)
//     toast.addEventListener('mouseleave', Swal.resumeTimer)
//   }
// });
// window.Toast = Toast;
//Sweet alert 2 end

window.Reload = new Vue();

const router = new VueRouter({
  routes,
  mode: 'history'
})
Vue.use(VueRouterBackButton, { router })
const app = new Vue({
    el: '#wrapper',
    base: process.env.APP_URL,
    router
});
