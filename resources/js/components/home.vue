<template>
    <div>
 <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Dashboard</h3>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>

                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20"  v-show="$localStorage.getItem('role')=='admin' || $localStorage.getItem('role')=='teacher' ? true : false " style="display:none">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Students</div>
                                        <div class="item-number"><span  >{{ totalstudents }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Teachers</div>
                                        <div class="item-number"><span  >{{totalteachers}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-couple text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Parents</div>
                                        <div class="item-number"><span  >{{totalstudents}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Earnings</div>
                                        <div class="item-number"><span>$</span><span  >{{totalearns}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20"  v-show="$localStorage.getItem('role')=='student' || $localStorage.getItem('role')=='parent' ? true : false " style="display:none">
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total Present</div>
                                        <div class="item-number"><span  >{{ totalpresent }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total Absent</div>
                                        <div class="item-number"><span  >{{totalabsent}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- Dashboard summery End Here -->
<div class="row" v-show="$localStorage.getItem('role')=='admin' || $localStorage.getItem('role')=='teacher' ? true : false " style="display:none">
    <div class="col-md-12">
    <div class="form-group" >

                        <select class="form-control" v-model="month" id="month" @change="filteratten" required>
                            <option value="">
                                SELECT
                            </option>
                  <option v-for="monthlist in months[0]">{{ monthlist }}</option>

                        </select>
    </div>

    <h3 style="text-align:center">{{ month }} Report</h3>
 <Bar :chart-options="chartOptions" :chart-data="chartData" :chart-id="chartId"
                    :dataset-id-key="datasetIdKey" :plugins="plugins" :css-classes="cssClasses" :styles="styles"
                    :width="width" :height="height" />
    </div>
</div>







    </div>
</template>
<script>
export default {

    created() {
        if (!User.loggedIn()) {
             window.location.href ="/";
        }
        this.school_id = getschoolid;
      this.months=  User.monthslist();
         this.getmonth();
         this.totalstudent();
         this.totalteacher();
         this.totalearn();
         this.attendacereport();
    },
    props: {
        chartId: {
            type: String,
            default: "bar-chart",
        },
        datasetIdKey: {
            type: String,
            default: "label",
        },
        width: {
            type: Number,
            default: 400,
        },
        height: {
            type: Number,
            default: 300,
        },
        cssClasses: {
            default: "",
            type: String,
        },
        styles: {
            type: Object,
            default: () => { },
        },
        plugins: {
            type: Object,
            default: () => { },
        },
        chartId2: {
            type: String,
            default: "bar-chart2",
        },
        datasetIdKey2: {
            type: String,
            default: "label2",
        },
        width2: {
            type: Number,
            default: 400,
        },
        height2: {
            type: Number,
            default: 300,
        },
        cssClasses2: {
            default: "",
            type: String,
        },
        styles2: {
            type: Object,
            default: () => { },
        },
        plugins2: {
            type: Object,
            default: () => { },
        },
    },
    data() {
        return {
            school_id:null,
            year:new Date().getFullYear(),
            totalstudents:0,
            totalteachers:0,
            totalearns:0,
            totalpresent:0,
            totalabsent:0,
            month:'',
            year:new Date().getFullYear(),
             months: [],


      chartData: {
        labels: [],
        datasets: [ { data: [40, 20, 12] } ]
      },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },

        };
    },

    methods: {


        filteratten(){
            this.attendacereport();
        },

            getmonth(){
                const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

            const d = new Date();
            this.month = month[d.getMonth()];
            },
        totalstudent() {
            axios
                .get(`/api/students/list?filter[school_id]=${this.school_id}&filter[StudentStatus]=Active&datatype=count`)
                .then(({ data }) => (this.totalstudents = data))
                .catch();
        },

        totalteacher() {
            axios
                .get(`/api/staffs/list?filter[school_id]=${this.school_id}&filter[TeacherStatus]=Active&datatype=count`)
                .then(({ data }) => (this.totalteachers = data))
                .catch();
        },

        totalearn() {
            axios
                .get(`/api/students/payments?filter[year]=${this.year}&filter[school_id]=${this.school_id}&datatype=count`)
                .then(({ data }) => (this.totalearns = data))
                .catch();
        },

        attendacereport() {
var url;
            if(this.$localStorage.getItem('role')=='admin' || this.$localStorage.getItem('role')=='teacher'){
url =`api/student/attendance/count?month=${this.month}&year=${this.year}&school_id=${this.school_id}`;
            }else{
url =`api/student/attendance/count?month=${this.month}&year=${this.year}&student_id=${this.$localStorage.getItem('teacherOrstudent')}&school_id=${this.school_id}&type=student`;

            }


            axios
                .get(url)
                .then(({ data }) => {

                    this.chartData.labels = data.dates
                    this.chartData.datasets = [data.present,data.absent]

this.totalpresent = data.present.data.reduce((a, b) => a + b, 0);
this.totalabsent = data.absent.data.reduce((a, b) => a + b, 0);





                })
                .catch();
        },

    },
        mounted() {


    }
};





</script>
<style lang="css" scoped>
#img_size {
    width: 40px;
}





</style>
