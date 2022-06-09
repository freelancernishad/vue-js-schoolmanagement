<template>
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>


    </div>
</template>
<script>
export default {
    name: "home",
    created() {
        if (!User.loggedIn()) {
            // this.$router.push({ name: "/" });
             window.location.href ="/";
        }
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
            todaySells: "",
            income: "",
            due: "",
            expense: "",
            stockOutProducts: "",
            newdata: new Date(),
            year: "",
            month: "",
            date: "",
            start: "",
            end: "",
            yeard: "",
            dated: "",
            startd: "",
            endd: "",
            monthname: "",
            yearsList: [],
            monthlist: [],
            chartData: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                datasets: [],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
            },
            chartData2: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                datasets: [],
            },
            chartOptions2: {
                responsive: true,
                maintainAspectRatio: false,
            },
            monthdays : ''
        };
    },
    mounted() {
        this.monthname = this.newdata.getMonth();
this.countmonth();
        this.todaySell();
        this.todayIncome();
        this.todayDue();
        this.expenses();
        this.stockOutProduct();
        this.monthlybar();
        this.dailybar();
        this.yearslist();
        this.monthslist();
        //   $('#select').select2();
    },
    methods: {
        countmonth(){
         const date = new Date();

        var count =  new Date(
            date.getFullYear(),
            this.monthname + 1,
            0
        ).getDate();
        // console.log(count)
        this.monthdays = count
        },

        todaySell() {
            axios
                .get("/api/today/sell")
                .then(({ data }) => (this.todaySells = data))
                .catch();
        },
        todayIncome() {
            axios
                .get("/api/today/income")
                .then(({ data }) => (this.income = data))
                .catch();
        },
        todayDue() {
            axios
                .get("/api/today/due")
                .then(({ data }) => (this.due = data))
                .catch();
        },
        expenses() {
            axios
                .get("/api/total/expense")
                .then(({ data }) => (this.expense = data))
                .catch();
        },
        stockOutProduct() {
            axios
                .get("/api/stockout/product")
                .then(({ data }) => (this.stockOutProducts = data))
                .catch();
        },
        monthlybar() {
            // console.log(this.year=)
            // this.start = this.newdata.getFullYear()+'-'+this.newdata.getMonth()+'-'+this.newdata.getDate();
            this.start = this.newdata.getFullYear() + "-1-1";
            this.end = this.newdata.getFullYear() + "-12-"+this.monthdays;
            if (this.year == "") {
                this.year = this.newdata.getFullYear();
            }
            axios
                .get(
                    "/api/monthly/bar?start=" +
                    this.start +
                    "&end=" +
                    this.end +
                    "&year=" +
                    this.year
                )
                .then(({ data }) => {
                    this.chartData.datasets = [data.reports2, data.reports];
                      console.log(this.chartData.datasets)
                })
                .catch();
        },
        dailybar() {
            var monthd = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

this.countmonth()

            this.startd =
                this.newdata.getFullYear() +
                "-" +
                monthd[this.monthname] +
                "-1";
            this.endd =
                this.newdata.getFullYear() +
                "-" +
                monthd[this.monthname] +
                "-"+this.monthdays;
            this.yeard = this.newdata.getFullYear();
            axios
                .get(
                    "/api/daily/bar?start=" +
                    this.startd +
                    "&end=" +
                    this.endd +
                    "&year=" +
                    this.yeard
                )
                .then(({ data }) => {
                    this.chartData2.datasets = [data.reports];
                    this.chartData2.labels = data.allmonth;
                    //  console.log(this.chartData2.labels);
                    // if(this.monthname==''){

                    //     this.monthname = this.newdata.getMonth();
                    // }
                })
                .catch();
        },

        yearslist() {

            axios
                .get("api/years/list?type=year")
                .then(({ data }) => {
                    // console.log(data);
                    this.yearsList = data;
                })
                .catch();
        },
        monthslist() {

            axios
                .get("api/years/list?type=month")
                .then(({ data }) => {
                    // console.log(data);
                    this.monthlist = data;
                })
                .catch();
        },
    },
};





</script>
<style lang="css" scoped>
#img_size {
    width: 40px;
}





</style>
