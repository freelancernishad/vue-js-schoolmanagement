let login = require('./components/auth/login.vue').default;
  //fronent Routes
  let fronthome = require('./components/themes/default/index.vue').default;
  let frontteachers = require('./components/themes/default/teachers.vue').default;
  let frontstudent_at_a_glance = require('./components/themes/default/student_at_a_glance.vue').default;
  let frontstudent_list = require('./components/themes/default/student_list.vue').default;
  let frontroutine = require('./components/themes/default/routine.vue').default;

  let frontresult = require('./components/themes/default/result.vue').default;
  let frontweakly_result = require('./components/themes/default/weakly_result.vue').default;
  let frontnotice = require('./components/themes/default/notice.vue').default;
  let frontblogs = require('./components/themes/default/blogs.vue').default;
  let frontblogsingle = require('./components/themes/default/blogsingle.vue').default;
  let frontcontact_us = require('./components/themes/default/contact_us.vue').default;
  let student_register = require('./components/themes/default/register.vue').default;


///////////////////////////////////////////////////////////////





export const routes = [

    { path: '/login', component: login, name:'/login' },
    //fronent Routes
    { path: '/', component: fronthome, name:'/' },
    { path: '/teachers', component: frontteachers, name:'frontteachers' },
    { path: '/student_at_a_glance', component: frontstudent_at_a_glance, name:'frontstudent_at_a_glance' },
    { path: '/student_list/', component: frontstudent_list, name:'frontstudent_list' },
    { path: '/student_list/:classname', component: frontstudent_list, name:'frontstudent_listsearch' },
    { path: '/routine', component: frontroutine, name:'frontroutine' },

    { path: '/result', component: frontresult, name:'frontresult' },
    { path: '/result/:studentclass/:group/:examType/:subject/:religion/:year/:roll/:school_id', component: frontresult, name:'frontresultsearch' },

    { path: '/weakly_result', component: frontweakly_result, name:'frontweakly_result' },
    { path: '/notice', component: frontnotice, name:'frontnotice' },
    { path: '/blogs', component: frontblogs, name:'frontblogs' },
    { path: '/blogs/:slug', component: frontblogsingle, name:'frontblogsingle' },
    { path: '/contact-us', component: frontcontact_us, name:'frontcontact_us' },
    { path: '/student/register', component: student_register, name:'student_register' },



  ]
