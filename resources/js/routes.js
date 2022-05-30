// Auth Components
let login = require('./components/auth/login.vue').default;
// let register = require('./components/auth/register.vue').default;
// let forget = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;

let home = require('./components/home.vue').default;

// Students Components
let students = require('./components/students/index.vue').default;
let studentCard = require('./components/students/card.vue').default;
let studentedit = require('./components/students/form.vue').default;
let studentview = require('./components/students/view.vue').default;
let studentsform = require('./components/students/form.vue').default;
let studentsattendance = require('./components/students/attendance/index.vue').default;
let students_attendance_daily = require('./components/students/attendance/daily.vue').default;
let students_attendance_edit = require('./components/students/attendance/edit.vue').default;
let students_attendance_monthly = require('./components/students/attendance/monthly.vue').default;


// Staffs Components
let staffs = require('./components/staffs/index.vue').default;
let staffsedit = require('./components/staffs/form.vue').default;
let staffsview = require('./components/staffs/view.vue').default;
let staffsform = require('./components/staffs/form.vue').default;
let staffsattendance = require('./components/staffs/attendance/index.vue').default;
let staffs_attendance_daily = require('./components/staffs/attendance/daily.vue').default;
let staffs_attendance_edit = require('./components/staffs/attendance/edit.vue').default;
let staffs_attendance_monthly = require('./components/staffs/attendance/monthly.vue').default;
// let staffsattendanceview = require('./components/staffs/attendance.vue').default;


// payment Components
let payment = require('./components/payments/index.vue').default;
let paymentsearch = require('./components/payments/list.vue').default;
let paymentcreate = require('./components/payments/create.vue').default;


// routines Components
let routines = require('./components/routines/index.vue').default;
let routineslist = require('./components/routines/list.vue').default;
let routinescreateupdate = require('./components/routines/create.vue').default;


// results Components
let results = require('./components/results/index.vue').default;
let resultfilter = require('./components/results/list.vue').default;
let resultview = require('./components/results/fullsheet.vue').default;



// gallerys Components
let gallerys = require('./components/gallerys/index.vue').default;
let gallerysView = require('./components/gallerys/view.vue').default;
let gallerynew = require('./components/gallerys/form.vue').default;
let withcategory = require('./components/gallerys/withcategory.vue').default;

let categorys = require('./components/gallerys/category/index.vue').default;


// blogs Components
let blogs = require('./components/blogs/index.vue').default;
let blogsView = require('./components/blogs/view.vue').default;
let blognew = require('./components/blogs/form.vue').default;
let blogscategorylist = require('./components/blogs/withcategory.vue').default;

let blogcategorys = require('./components/blogs/category/index.vue').default;



// event Components
let events = require('./components/events/index.vue').default;
let eventsView = require('./components/events/view.vue').default;
let eventnew = require('./components/events/form.vue').default;



let smsNotice = require('./components/notice/sms.vue').default;


let settings = require('./components/settings/index.vue').default;
let seoSettings = require('./components/settings/seo.vue').default;
let sliderSettings = require('./components/settings/slider.vue').default;










export const routes = [

  //Auth Routes
  { path: '/login', component: login, name:'/' },
//   { path: '/register', component: register, name:'register' },
//   { path: '/forget', component: forget, name:'forget' },
  { path: '/school/logout', component: logout, name:'logout' },

  { path: '/home', component: home, name:'home' },

  // students Routes
  { path: '/school/students', component: students, name:'students' },
  { path: '/school/students/card', component: studentCard, name:'studentCard' },
  { path: '/school/students/:classname/:status', component: students, name:'studentssearch' },
  { path: '/school/students/edit/:id', component: studentedit, name:'studentedit' },
  { path: '/school/students/view/:id', component: studentview, name:'studentview' },
  { path: '/school/students/form', component: studentsform, name:'studentsform' },
  { path: '/school/students/attendance', component: studentsattendance, name:'studentsattendance' },
  { path: '/school/students/attendance/Daily/:classname/:date', component: students_attendance_daily, name:'students_attendance_daily' },
  { path: '/school/students/attendance/edit/:classname/:date/:id', component: students_attendance_edit, name:'students_attendance_edit' },
  { path: '/school/students/attendance/Monthly/:classname/:date', component: students_attendance_monthly, name:'students_attendance_monthly' },

  // Staffs Routes
  { path: '/school/staffs', component: staffs, name:'staffs' },
  { path: '/school/staffs/edit/:id', component: staffsedit, name:'Staffsedit' },
  { path: '/school/staffs/view/:id', component: staffsview, name:'Staffsview' },
  { path: '/school/staffs/form', component: staffsform, name:'staffsform' },
  { path: '/school/staffs/attendance', component: staffsattendance, name:'staffsattendance' },
  { path: '/school/staffs/attendance/Daily/:date', component: staffs_attendance_daily, name:'staffs_attendance_daily' },
  { path: '/school/staffs/attendance/edit/:date/:id', component: staffs_attendance_edit, name:'staffs_attendance_edit' },

  { path: '/school/staffs/attendance/Monthly/:date', component: staffs_attendance_monthly, name:'staffs_attendance_monthly' },



  // payment Routes
  { path: '/school/payment', component: payment, name:'payment' },
  { path: '/school/payment/:classname/:year/:month/:type', component: paymentsearch, name:'paymentsearch' },
  { path: '/school/payment/:create/:classname/:year/:month/:type/:id', component: paymentcreate, name:'paymentcreate' },
  { path: '/school/payment/:create/:id', component: paymentcreate, name:'paymentedit' },




  // routne Routes
  { path: '/school/routines', component: routines, name:'routines' },
  { path: '/school/routines/:classname/:school_id', component: routineslist, name:'routineslist' },
  { path: '/school/routines/:create/:classname/:school_id/:year', component: routinescreateupdate, name:'routinescreateupdate' },




  // result Routes
  { path: '/school/results', component: results, name:'results' },
  { path: '/school/results/:school_id/:student_class/:group/:religion/:subject/:examType/:date', component: resultfilter, name:'resultfilter' },
  { path: '/school/results/view/:school_id/:student_class/:group/:religion/:subject/:examType/:date', component: resultview, name:'resultview' },





  // gallery Routes
  { path: '/school/gallery_category', component: categorys, name:'categorys' },
  { path: '/school/gallery_category/:id', component: categorys, name:'categoryedit' },

  { path: '/school/gallery', component: gallerys, name:'gallerys' },
  { path: '/school/gallery/view/:id', component: gallerysView, name:'gallerysView' },
  { path: '/school/gallery/edit/:id', component: gallerynew, name:'galleryEdit' },
  { path: '/school/gallery/new', component: gallerynew, name:'gallerynew' },
  { path: '/school/gallery/:category', component: withcategory, name:'galleryscategory' },





  // blog Routes
  { path: '/school/blog_category', component: blogcategorys, name:'blogcategorys' },
  { path: '/school/blog_category/:id', component: blogcategorys, name:'blogcategoryedit' },

  { path: '/school/blog', component: blogs, name:'blogs' },
  { path: '/school/blog/view/:id', component: blogsView, name:'blogsView' },
  { path: '/school/blog/edit/:id', component: blognew, name:'blogEdit' },
  { path: '/school/blog/new', component: blognew, name:'blognew' },
  { path: '/school/blog/:category', component: blogscategorylist, name:'blogscategory' },




  // events Routes
  { path: '/school/event', component: events, name:'events' },
  { path: '/school/event/view/:id', component: eventsView, name:'eventsView' },
  { path: '/school/event/edit/:id', component: eventnew, name:'eventEdit' },
  { path: '/school/event/new', component: eventnew, name:'eventnew' },


//   notice
  { path: '/school/notice/sms', component: smsNotice, name:'smsNotice' },


  { path: '/school/settings', component: settings, name:'settings' },
  { path: '/school/settings/seo', component: seoSettings, name:'seoSettings' },
  { path: '/school/settings/slider', component: sliderSettings, name:'sliderSettings' },






]
