<template>
	<div>
<div class="breadcrumbs-area">
        <h3>Result</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Result</li>
        </ul>
    </div>
    <div class="card height-auto">
        <div class="card-body">
            <div class="flexBBox">

                    <legend>
                        <h2>Filter</h2>
                    </legend>



                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group student_class">
                                        <label>Class:</label>
                                        <select class="form-control" style="width: 100%;"  @change="callSubjects" v-model="filterdata.student_class" required>
                                            <option value="">
                                                SELECT
                                            </option>
                                             <option v-for="classlist in classes[0]">{{ classlist }}</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3"  v-if="filterdata.student_class=='Nine' || filterdata.student_class=='Ten'" >
                                <div class='form-group' >
                                    <label>Group:</label>
                                    <select class='form-control' style='width: 100%;' v-model='filterdata.group' @change="callSubjects" id='group' required>
                                    <option value=''>select</option>
                                    <option v-for="group in groups[0]">{{ group }}</option>


                                    </select></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Exam Type:</label>
                                        <select class="form-control" style="width: 100%;" v-model="filterdata.examType" onchange=""
                                            id="ExamType" required>
                                            <option value="">select</option>
                               <option v-for="exam in exams[0]">{{ exam }}</option>
                                        </select>
                                    </div>

                                </div>



                                <div class="col-md-3">
                                      <div class='form-group' >
                                          <label>Subject:</label>
                                      <select  class='form-control' style='width: 100%;' v-model="filterdata.subject" id='Subject' @change="callreligion" required >
                                      <option value=''>SELECT</option>
                                       <option v-for="subject in subjects[0]">{{ subject }}</option>
                                      </select>
                              </div>


                                </div>

                                <div class="col-md-3" v-if="filterdata.subject=='ধর্ম'">
                                      <div class='form-group' >
                                          <label>Religion:</label>
                                      <select  class='form-control' style='width: 100%;' v-model="filterdata.religion" id='Subject'  required >
                                      <option value=''>SELECT</option>
                                       <option v-for="religion in religions[0]">{{ religion }}</option>
                                      </select>
                              </div>


                                </div>


                                <div class="col-md-3">
                                    <div class="form-group student_class">
                                        <label>Date:</label>
                                        <input  type="date" class="form-control" v-model="filterdata.date" id="date">
                                    </div>

                                </div>
                                <div class="col-md-3 customFlex" style="margin-top:11px">
                                    <div class="form-group student_class">
                                        <label></label>
                                        <br>
                                        <input type="submit"  class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"  @click="filter" />
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />

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
    },

	data () {
		return {
			classes: [],
			groups: [],
			exams: [],
			religions: [],
			subjects: [],
			school_id:"",
			student_class:"",
            filterdata:{
                student_class:null,
                group:'All',
                subject:null,
                religion:'All',
                examType:null,
                date:null,
            }

		}
	},

	methods: {
            filter(){
                if(this.$router.currentRoute.path==`/school/results/${this.school_id}/${this.filterdata.student_class}/${this.filterdata.group}/${this.filterdata.religion}/${this.filterdata.subject}/${this.filterdata.examType}/${this.filterdata.date}`){

                }else{

                  this.$router.push({name:'resultfilter', params: { school_id: this.school_id, student_class: this.filterdata.student_class, group: this.filterdata.group, religion: this.filterdata.religion, subject: User.subjectconverten(this.filterdata.subject), examType: User.exam_comvert(this.filterdata.examType), date: this.filterdata.date }})

                }

//  this.getdata();
            },


        callSubjects(){



            if(this.filterdata.student_class=='Nine' || this.filterdata.student_class=='Ten'){

            }else{
                this.filterdata.group = 'All'
            }

            this.subjects =  User.all_list('subjects',this.filterdata.student_class,this.filterdata.group);

        },


        callreligion(){



            if(this.filterdata.subject!='ধর্ম'){

                this.filterdata.religion = 'All'
            }



        },


	},
	mounted(){

		this.classes =  User.classlist();
		this.groups =  User.all_list('groups');
		this.exams =  User.all_list('exams');
		this.religions =  User.all_list('religions');
		this.filterdata.date =  User.dateformat()[0];
		// this.subjects =  User.all_list('subjects','Six','All');






	}
}
</script>

<style lang="css" scoped>
#img_size{
	width: 40px;
}
</style>
