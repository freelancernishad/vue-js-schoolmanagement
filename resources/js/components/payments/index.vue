<template>
	<div>

 <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Accounts</h3>
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
            <div class="heading-layout1">
                <div class="item-title">
                    <router-link  class="btn-fill-md radius-4 text-light bg-orange-red mb-3"
                            v-if="$routerHistory.hasPrevious()" :to="{ path: $routerHistory.previous().path }">
                            GO BACK
                        </router-link>
                </div>
                <div class="dropdown">



                </div>
            </div>


                <div class="row gutters-8">


                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <select class="form-control" v-model="payment_class" id="payment_class" required>
                            <option value="">SELECT CLASS</option>
     <option v-for="classlist in classes[0]">{{ classlist }}</option>
                        </select>


                    </div>






                    <div class="col-3-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <select class="form-control" v-model="year" id="year" required>
                            <option value="">SELECT YEAR</option>
     <option v-for="yearList in years[0]">{{ yearList }}</option>




                        </select>

                    </div>
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <select class="form-control" v-model="month" id="month" required>
                            <option value="">
                                SELECT
                            </option>
                  <option v-for="monthlist in months[0]">{{ monthlist }}</option>

                        </select>



                    </div>
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <select class="form-control" v-model="type" id="type" required>
                            <option value="">
                                SELECT
                            </option>
                            <option value="Monthly_fee">মাসিক বেতন</option>
                            <option value="Session_fee">সেশন ফি</option>
                            <option value="Exam_fee">পরিক্ষার ফি</option>
                            <option value="Other">অন্যান্য</option>

                        </select>

                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" @click="filter" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="" scope="col">Class</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Paid Amount</th>
                            <th scope="col">status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>











                    </tbody>
                </table>
            </div>
        </div>
    </div>



	</div>
</template>

<script>
export default {


	data () {
		return {
       payment_class:null,
       year:null,
       newsearch:null,
       month:null,
       type:null,
       classes:[],
       months: [],
       years: []
		}
	},

	methods: {
            filter(){
                // console.log(this.$router.currentRoute.path)
                if(this.$router.currentRoute.path==`/school/payment/${this.payment_class}/${this.year}/${this.month}/${this.type}`){

                }else{
this.newsearch ='oldsearch',
                  this.$router.push({name:'paymentsearch', params: { classname: this.payment_class, year: this.year, month:this.month, type:this.type }})

                }

//  this.getdata();
            },


	},
	mounted(){
       this.classes =  User.classlist();
       this.years=  User.yearslist();
       this.months=  User.monthslist();
       this.payment_class = ''
       this.year = ''
       this.month = ''
       this.type = ''


	}
}
</script>

<style lang="css" scoped>
#img_size{
	width: 40px;
}
</style>
