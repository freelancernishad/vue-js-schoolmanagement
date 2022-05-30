<template>
	<div>
 <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Payments</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Fees Collection</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Fees Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
                <router-link class="btn btn-danger my-5"
    v-if="$routerHistory.hasPrevious()"
    :to="{ path: $routerHistory.previous().path }">
    GO BACK
</router-link>

            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Payment</h3>
                </div>

            </div>




<div class="student-header pt-3">
    <div class="db-student-list mt-5" id="search">
        <div class="pt-3 pb-3 pl-3 pr-3">
            <form  method="POST"  v-on:submit.prevent="formsubmit">



                <input class="form-control" type="hidden" v-model="form.school_id" id="school_id" />

                <input type="hidden" id='id' >
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="class">Type</label>
                            <input type="text" v-model="form.type" id="type" class="form-control mt-3 mb-3"
                               required readonly />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" v-model="form.StudentClass" id="Inputclass" class="form-control mt-3 mb-3"
                                required readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">roll</label>
                            <input type="text" class="form-control"
                                v-model="form.StudentRoll" id="Inputroll" required readonly />
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Student ID</label>
                            <input type="text" class="form-control" v-model="form.StudentID" id="Stu_id" readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Admission ID</label>
                            <input type="text" class="form-control" v-model="form.AdmissionID" id="Admission_ID"
                                readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Name</label>
                            <input type="text"  id="stu_name" v-model="form.StudentName" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Total Amount</label>
                            <input type="text"  v-model="form.amount" class="form-control"
                                id="Amount" required />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Payment Method</label>
                            <input type="text" class="form-control" v-model="form.method" id="Payment_Method"
                                readonly>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Status</label>

                            <input type="text" v-model="form.status" class="form-control" id="status"  required
                                readonly />



                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Date</label>
                            <input type="date" v-model="form.date" class="form-control" id="date"
                                required readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Month</label>

                            <input type="text" v-model="form.month" class="form-control" id="Month"
                                required readonly />



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="class">Year</label>
                            <input type="text" v-model="form.year" class="form-control" id="Year"
                                required readonly />

                        </div>
                    </div>
                </div>











                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">SAVE DATA</button>
        </form>
        </div>
    </div>
</div>
        </div>
    </div>



	</div>
</template>



<script>
export default {

    created() {
       this.school_id = getschoolid
       this.form.school_id = getschoolid
    },
	data () {
		return {

       school_id:null,
        id:null,

       students:[],
       payments:[],
       classes:[],
       months: [],
       years: [],

       form:{
             id:null,
            school_id:null,
            type:null,
            StudentClass:null,
            StudentRoll:null,
            StudentID:null,
            AdmissionID:null,
            StudentName:null,
            amount:null,
            method:null,
            status:null,
            date:null,
            month:null,
            year:null,
            Bmonth:null,
            Bamount:null,
       }





		}
	},

	methods: {




         checkstudent(){
            var url='';
         if(this.$route.params.create=='create'){
          url =`/api/students/single?filter[id]=${this.id}`;
			axios.get(url)
			.then(({data}) => {
                // console.log(data[0])
                this.form = data[0]
                this.form['type'] = User.feesconvert(this.$route.params.type);
                this.form['year'] = this.$route.params.year;
                this.form['month'] = this.$route.params.month;
                this.form['status'] = 'Paid';
                this.form['method'] = 'Handcash';
                this.form['amount'] = User.paymentamount(this.$route.params.type,this.form.StudentClass);
                this.form['date'] = User.dateformat()[0];
                this.form['formtype'] = 'create';


            })
			.catch()
         }else{

          url =`/api/students/payments?filter[id]=${this.id}`;
			axios.get(url)
			.then(({data}) => {
                // console.log(data[0])
                // this.form = data[0]

                this.form['id'] = data[0].id;
                this.form['StudentClass'] = data[0].studentClass;
                this.form['StudentRoll'] = data[0].studentRoll;
                this.form['StudentID'] = data[0].studentId;
                this.form['AdmissionID'] = data[0].admissionId;
                this.form['StudentName'] = data[0].Name;
                this.form['type'] = data[0].type;

                this.form['year'] = data[0].year;
                this.form['month'] = data[0].month;
                this.form['status'] = data[0].status;
                this.form['method'] = data[0].method;
                this.form['amount'] = data[0].amount;
                this.form['date'] = data[0].date;
                 this.form['formtype'] = 'edit';


            })
			.catch()
         }



		},

        formsubmit(){
                axios.post(`/api/students/payments/submit`,this.form)
                .then(({data}) => {
                    //  console.log(data)
                        this.$router.push({name:'paymentsearch', params: { classname: this.form.StudentClass, year: this.form.year, month:this.form.month, type:User.feesconvert(this.form.type) }})
                        Notification.success();

                })
                .catch(() => {
                    // this.$router.push({name: 'supplier'})
                })
        },



	},
	mounted(){
       this.classes =  User.classlist();
       this.years=  User.yearslist();
       this.months=  User.monthslist();
       this.form.studentClass = this.$route.params.classname
       this.form.year = this.$route.params.year
       this.form.month = this.$route.params.month
       this.form.type = User.feesconvert(this.$route.params.type)
       this.id = this.$route.params.id
       this.checkstudent()






	}
}
</script>

<style lang="css" scoped>
#img_size{
	width: 40px;
}
</style>



