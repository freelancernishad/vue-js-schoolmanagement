<template>
	<div>
   <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Students</h3>
                  <ul>
                <li>
                    <router-link :to="{name:'home'}">Home</router-link>
                </li>
                <li>
                    <router-link  v-if="this.editid!=''" :to="{name:'students'}">Student</router-link> <span v-else>Admission Form</span>
                </li>
                <li v-if="this.editid!=''">{{ form.StudentName }}</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
  <!-- Admit Form Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
                        <router-link  class="btn-fill-md radius-4 text-light bg-orange-red mb-3"
                            v-if="$routerHistory.hasPrevious()" :to="{ path: $routerHistory.previous().path }">
                            GO BACK
                        </router-link>
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Add New Students</h3>
            </div>
            <div class="dropdown">



            </div>
        </div>



        <form  enctype="multipart/form-data" v-on:submit.prevent="formsubmit" >


            <input class="form-control" type="hidden" v-model="form.school_id" id="school_id" />
            <input class="form-control" type="hidden"  v-model="form.id" id="id" />


            <input class="form-control" type="hidden"  placeholder="Enter Year" v-model="form.Year" id="Year" />



            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Admission ID:</label>
                        <input class="form-control" type="text"  placeholder="Enter Admission ID" v-model="form.AdmissionID" id="AdmissionID" readonly required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student ID:</label>
                        <input class="form-control" type="text" placeholder="Enter Student ID" v-model="form.StudentID" id="StudentID" readonly required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Roll:</label>
                        <input class="form-control" type="text" placeholder="Enter Student Roll" v-model="form.StudentRoll" id="StudentRoll" readonly required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Class:</label>


                            <select :disabled="classdisable" class="form-control"  style="width: 100%;" v-model="form.StudentClass" @change="checkstudent" id="StudentClass"  required>
                                <option value="">
                                    SELECT
                                </option>
                                <option v-for="classlist in classes[0]">{{ classlist }}</option>
                            </select>

                    </div>


                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Gender:</label>
                        <select class="form-control" style="width: 100%;" v-model="form.StudentGender" id="StudentGender" required>
                            <option value="">
                                SELECT
                            </option>
                            <option>
                                Male
                            </option>
                            <option>
                                Female
                            </option>
                            <option>
                                Other
                            </option>
                        </select>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Religion:</label>
                        <select class="form-control" style="width: 100%;" v-model="form.StudentReligion" id="StudentReligion" required>
                            <option value="">
                                SELECT
                            </option>
                            <option>
                                Islam
                            </option>
                            <option>
                                Hindu
                            </option>
                            <option>
                                Other
                            </option>
                        </select>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Name:</label>
                        <input class="form-control" type="text"  placeholder="Enter StudentName" v-model="form.StudentName" id="StudentName" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Father Name:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Father Name" v-model="form.StudentFatherName" id="StudentFatherName" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Mother Name:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Mother Name" v-model="form.StudentMotherName" id="StudentMotherName" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Father Occupation:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Father Occupation" v-model="form.StudentFatherOccupation" id="StudentFatherOccupation" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Mother Occupation:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Mother Occupation" v-model="form.StudentMotherOccupation" id="StudentMotherOccupation" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Email:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Email" v-model="form.StudentEmail" id="StudentEmail" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Date Of Birth:</label>
                        <input class="form-control" type="date"  placeholder="Enter Student Date Of Birth" v-model="form.StudentDateOfBirth" id="StudentDateOfBirth" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Birth Certificate No:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Birth Certificate No" v-model="form.StudentBirthCertificateNo" id="StudentBirthCertificateNo" maxlength="17" required />
                    </div>
                </div>



                <div class="col-md-4" v-if="form.StudentClass=='Nine' || form.StudentClass=='Ten'" id="Sgroup" >
                    <div class="form-group">
                        <label>Student Group:</label>
                        <select class="form-control" style="width: 100%;" v-model="form.StudentGroup" id="StudentGroup" >
                            <option value="">
                                SELECT
                            </option>
                            <option>
                                Science
                            </option>
                            <option>
                                Humanities
                            </option>
                            <option>
                                Commerce
                            </option>
                        </select>
                    </div>







                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Address:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Address" v-model="form.StudentAddress" id="StudentAddress" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Phone Number:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Phone Number" v-model="form.StudentPhoneNumber" id="StudentPhoneNumber" maxlength="11" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Area Postal Code:</label>
                        <input class="form-control" type="text"  placeholder="Enter Area Postal Code" v-model="form.AreaPostalCode" id="AreaPostalCode" required />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Student Status:</label>
                        <select class="form-control" style="width: 100%;" v-model="form.StudentStatus" id="StudentStatus" required>
                            <option>
                                Active
                            </option>
                            <option>
                                Pending
                            </option>

                            <option>
                                Reject
                            </option>
                        </select>
                    </div>


                </div>
                <div class="col-md-4 d-none" >
                    <div class="form-group">
                        <label>Student Tranfer From:</label>
                        <input class="form-control" type="text"  placeholder="Enter Student Tranfer From" v-model="form.StudentTranferFrom" id="StudentTranferFrom" readonly required />
                    </div>
                </div>



                <input type="hidden" v-model="form.StudentPicture" >
                <input type="hidden" v-model="form.JoiningDate" >
                <input type="hidden" v-model="form.StudentTranferStatus" >
                <input type="hidden" v-model="form.AplicationStatus" >
                <input type="hidden" v-model="form.ThisMonthPaymentStatus" >
                <input type="hidden" v-model="form.created_at" >
                <input type="hidden" v-model="form.updated_at" >
                <input type="hidden" v-model="form.status" >


                <div class="col-md-12" >
                    <div class="form-group">

                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">SAVE DATA</button>


                    </div>
                </div>





            </div>



        </form>





    </div>
</div>


	</div>
</template>

<script>


export default {

	created(){
		if (!User.loggedIn()) {
			this.$router.push({name: '/'})
		}
             this.form.school_id = getschoolid
	},

	data () {
		return {
            form:{
                id:null,
                school_id:null,
                Year:null,
                AdmissionID:null,
                StudentID:null,
                StudentRoll:null,
                StudentClass:null,
                StudentGender:null,
                StudentReligion:null,
                StudentName:null,
                StudentFatherName:null,
                StudentMotherName:null,
                StudentFatherOccupation:null,
                StudentMotherOccupation:null,
                StudentEmail:null,
                StudentDateOfBirth:null,
                StudentBirthCertificateNo:null,
                StudentGroup:null,
                StudentAddress:null,
                StudentPhoneNumber:null,
                AreaPostalCode:null,
                StudentStatus:null,
                StudentTranferFrom:null,
                StudentPicture:null,
                JoiningDate:null,
                StudentTranferStatus:null,
                AplicationStatus:null,
                ThisMonthPaymentStatus:null,
                status:null,
            },
            classes:{},
            editid:'',
            classdisable:false
		}
	},

	methods: {
        checkstudent(){

if(this.form.StudentClass!='Nine' || this.form.StudentClass!='Ten') this.form.StudentGroup=''


		axios.get(`/api/student/check?classvalue=${this.form.StudentClass}`)
			.then(({data}) => {
                this.form.AdmissionID = data.admition_ID;
                this.form.StudentID = data.StudentID;
                this.form.StudentRoll = data.StudentRoll;

            })
			.catch()
        },


        getstudent(){
                axios.get(`/api/students/single?filter[id]=${this.editid}`)
                                .then(({data}) => {
                                    //  console.log(data)
                                    this.form = data[0]
                                })
                                .catch(() => {
                                    // this.$router.push({name: 'supplier'})
                                })
        },


        formsubmit(){
                axios.post(`/api/students/form/submit`,this.form)
                .then(({data}) => {
                    //  console.log(data)
                        this.$router.push({name: 'students'})
                        Notification.success();
                })
                .catch(() => {
                    // this.$router.push({name: 'supplier'})
                })
        }


	},
	mounted(){

       this.classes =  User.classlist();

       if(this.$route.params.id){

           this.editid = this.$route.params.id;
       }
       if(this.editid!=''){

           this.getstudent();
           this.classdisable  = true
       }


	}
}
</script>

<style lang="css" scoped>
#img_size{
	width: 40px;
}
</style>
