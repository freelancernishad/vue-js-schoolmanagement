<template>
    <div>
<loader v-if="preloader==true" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" disableScrolling="false" name="circular"></loader>
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Students</h3>
            <ul>
                <li>
                    <router-link :to="{ name: 'home' }">Home</router-link>
                </li>
                <li>All Students</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
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



                         <router-link class="btn-fill-lg font-normal text-light gradient-pastel-green float-right" :to="{ name: 'studentsform' }">Add Student
                    </router-link>




                    </div>
                </div>












                <div class="row gutters-8">



                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <div class="form-group student_class">

                            <select class="form-control" style="width: 100%;" v-model="student_class">
                                <option value="">
                                    SELECT
                                </option>
                                <option>
                                    All
                                </option>

                                <option v-for="classlist in classes[0]">{{ classlist }}</option>



                            </select>
                        </div>


                    </div>



                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <div class="form-group student_class">

                            <select class="form-control" style="width: 100%;" v-model="status" id="getthis" required>
                                <option value="">
                                    SELECT
                                </option>
                                <option value="Active">
                                    Active
                                </option>
                                <option value="Pending">
                                    New Applications
                                </option>
                                <option value="Reject">
                                    Reject
                                </option>

                                <option value="Approve">
                                    Application Aproved
                                </option>

                            </select>
                        </div>

                    </div>



                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow" @click="search">SEARCH</button>
                    </div>



                </div>


                <div class="d-flex justify-content-between">

                    <div class="d-flex align-items-end" v-if="actioncheck != ''">
                        <div class="form-group">
                            <label for="">Action :</label>
                            <select class="form-control" v-model="action" style="width:200px">
                                <option value="">Select</option>
                                <option>Active</option>
                                <option>Pending</option>
                                <option>Reject</option>
                                <option>Delete</option>
                                <option>Approve</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <button class="fw-btn-fill btn-gradient-yellow" @click="actionclick">Action</button>
                        </div>

                    </div>

                    <div v-else></div>



                    <div class="form-group">
                        <label for="">Search :</label>
                        <input type="text" v-model="name" @keyup="searchname" placeholder="Search By Name"
                            class="form-control">
                    </div>


                </div>
           <a v-if="searchtype=='filterclass'" class="btn-fill-lg font-normal text-light gradient-pastel-green float-right" :href="'/school/student_list/pdf/'+year+'/'+student_class+'/'+school_id">Download Student List</a>


                <div class="table-responsive">





                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" @click="selectAll"
                                            v-model="allSelected">
                                        <label class="form-check-label">Roll</label>
                                    </div>


                                </th>
                                <th>Photo</th>
                                <th @click="sortby('StudentName')">Name</th>

                                <th @click="sortby('StudentClass')">Class</th>
                                <th @click="sortby('StudentFatherName')">Parents</th>
                                <th @click="sortby('StudentAddress')">Address</th>

                                <th @click="sortby('StudentPhoneNumber')">Phone</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr v-if="looding">
                                <td colspan="10" style="    text-align: center;
    background: #042954;
    color: wheat;">Looding...</td>
                            </tr>



                            <tr v-else v-for="student in students.data" :key="student.id">

                                <td>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" v-model="actioncheck"
                                            :value="student.id">
                                        <label class="form-check-label">{{ student.StudentRoll }}</label>
                                    </div>


                                </td>
                                <td class="text-center">
                                    <a>
                                        <img id='student_image' class='student_image'
                                            style="    width: 33px !important;height: 34px;border-radius: 50%;"
                                            :src="'/images/' + student.StudentPicture" alt="student">
                                    </a>
                                </td>
                                <td>{{ student.StudentName }}</td>

                                <td>{{ student.StudentClass }}</td>
                                <td>{{ student.StudentFatherName }}</td>
                                <td>{{ student.StudentAddress }}</td>

                                <td>{{ student.StudentPhoneNumber }}</td>
                                <td>
                                    <a class="btn btn-info" :href="'/school/student/card/single/' + student.id+'/'+student.school_id"><i
                                            class="fas fa-card"></i> Card</a>

                                    <router-link class="btn btn-info"
                                        :to="{ name: 'studentview', params: { id: student.id } }"><i class="fas fa-eye"></i>
                                        View</router-link>
                                    <router-link class="btn btn-success"
                                        :to="{ name: 'studentedit', params: { id: student.id } }"><i
                                            class="fas fa-cogs"></i> Edit</router-link>
                                </td>

                            </tr>



                        </tbody>
                    </table>
                    <pagination :data="students" v-bind:showDisabled="true" :limit="3" v-on:change-page="allstudents">
                    </pagination>
                </div>


            </div>
        </div>


    </div>
</template>

<script>
export default {
    created() {


        this.school_id = getschoolid;
if(this.$route.params.classname && this.$route.params.status){
    this.student_class = this.$route.params.classname
    this.status = this.$route.params.status
    this.searchtype = 'filterclass'
}


    },

    data() {
        return {
            students: {},
            studentsall: [],
            classes: [],
            actioncheck: [],
            action: "",
            searchtype: "",
            name: "",
            student_class: "",
            status: "Active",
            school_id: "",
            year: new Date().getFullYear(),
            timeout: null,
            allSelected: false,
            field: '',
            sorttype: '',
            icon: '',
            looding: true,
            preloader: true,
        }
    },

    methods: {

        selectAll: function () {
            this.actioncheck = [];
            if (!this.allSelected) {
                this.studentsall.forEach(student => {
                    //    console.log(student.id)
                    this.actioncheck.push(student.id);
                })
            }
        },
        sortby(field) {
            this.field = field
            if (this.sorttype == '') {
                this.sorttype = '-'
                this.icon = 'fas fa-sort-amount-up-alt fa-fw'
            } else {
                this.sorttype = ''
                this.icon = 'fas fa-sort-amount-down-alt fa-fw'
            }
            this.allstudents()
        },

        allstudents(page) {


            clearTimeout(this.timeout);




            var url = '';
            var sort = '';
            var classsearch = '';
            if (this.field != '') {
                sort = `sort=${this.sorttype}${this.field}`;
            }
            if (this.searchtype == '') {
                url = `/api/students/list?page=${page}&${sort}&filter[school_id]=${this.school_id}&filter[StudentStatus]=${this.status}`;
            } else if (this.searchtype == 'filterclass') {

                if(this.student_class=='All'){
                    classsearch = '';
                }else{
                    classsearch = this.student_class;

                }
                url = `/api/students/list?page=${page}&filter[StudentStatus]=${this.status}&filter[StudentClass]=${classsearch}&filter[Year]=${this.year}&filter[school_id]=${this.school_id}&${sort}`;

            } else if (this.searchtype == 'filtername') {
                url = `/api/students/list?page=${page}&filter[StudentName]=${this.name}&${sort}&filter[school_id]=${this.school_id}&filter[StudentStatus]=${this.status}`;

            }




            if (typeof page === 'undefined') {
                page = 1;
            }

            this.timeout = setTimeout(() => {

                axios.get(url)
                    .then(({ data }) => {
                        console.log(data)
                        this.students = data
                        this.studentsall = data.data
                        this.looding = false

                         this.preloader = false;

                    })
                    .catch()
            }, 300);
        },

        search() {


                if(this.$router.currentRoute.path===`/school/students/${this.student_class}/${this.status}`){

                }else{

                this.$router.push({name:'studentssearch', params: {  classname: this.student_class, status: this.status }})

                    }

            this.looding = true
            this.searchtype = "filterclass";
            this.allstudents()
        },
        searchname() {
            this.searchtype = "filtername";
            this.allstudents()
        },

        actionclick() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: `Yes, ${this.action} it!`
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.post(`/api/student/${this.action}`, this.actioncheck)
                        .then(({ data }) => {

if(this.action=='Delete'){

    Notification.customdelete(`Your data has been ${this.action}.`);
}else{

    Notification.customsucess(`Your data has been move to ${this.action}.`);
}
   this.allstudents();

                        })
                        .catch(() => {
                            // this.$router.push({name: 'supplier'})
                        })


                }
            })
        }
    },
    mounted() {

        this.classes = User.classlist();
        this.allstudents();

    }
}
</script>

<style lang="css" scoped>
#img_size {
    width: 40px;
}
</style>
