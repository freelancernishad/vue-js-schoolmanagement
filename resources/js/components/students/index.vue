<template>
    <div>
        <loader v-if="preloader == true" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2"
            bg="#343a40" objectbg="#999793" opacity="80" disableScrolling="false" name="circular"></loader>
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
                        <router-link class="btn-fill-md radius-4 text-light bg-orange-red"
                            v-if="$routerHistory.hasPrevious()" :to="{ path: $routerHistory.previous().path }">
                            GO BACK
                        </router-link>
                    </div>
                    <div class="dropdown">
                        <router-link class="btn-fill-lg font-normal text-light gradient-pastel-green float-right"
                            :to="{ name: 'studentsform' }">Add Student
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



                <div class="row">
                    <div class="d-flex align-items-end col-md-6" v-if="actioncheck != ''">
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
                    <div v-else class="col-md-6"></div>
                    <div class="form-group col-md-6">
                        <label for="">Search :</label>
                        <input type="text" v-model="name" @keyup="searchname" placeholder="Search By Name"
                            class="form-control">
                    </div>
                </div>





                <a v-if="searchtype == 'filterclass'"
                    class="btn-fill-lg font-normal text-light gradient-pastel-green float-right"
                    :href="'/school/student_list/pdf/' + year + '/' + student_class + '/' + school_id" @click="preloader = true">Download Student List</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="8">Class {{ student_class }}</th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" @click="selectAll"
                                            v-model="allSelected">
                                        <label class="form-check-label">#</label>
                                    </div>
                                </th>
                                <!-- <th>ছবি</th> -->
                                <th @click="sortby('StudentName')">নাম</th>
                                <th class="tablecolhide" @click="sortby('StudentClass')">শ্রেণী</th>
                                <th class="tablecolhide" @click="sortby('StudentFatherName')">অভিভাবক</th>
                                <th class="tablecolhide" @click="sortby('StudentAddress')">ঠিকানা</th>
                                <th class="tablecolhide" @click="sortby('StudentPhoneNumber')">ফোন</th>
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
                                <!-- <td class="text-center">
                                    <router-link :to="{ name: 'studentImage', params: { id: student.id } }">
                                        <img :id="'student_image' + student.id" class='student_image'
                                            style="    width: 33px !important;height: 34px;border-radius: 50%;"
                                            :src="ASSETURL + student.StudentPicture" alt="image"
                                            @error="imageLoadError()">
                                    </router-link>
                                </td> -->
                                <td>{{ student.StudentName }}</td>
                                <td class="tablecolhide">{{ student.StudentClass }}</td>
                                <td class="tablecolhide">{{ student.StudentFatherName }}</td>
                                <td class="tablecolhide">{{ student.StudentAddress }}</td>
                                <td class="tablecolhide">{{ student.StudentPhoneNumber }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-info dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="btn btn-info dropdown-item"
                                                :href="'/school/student/card/single/' + student.id + '/' + student.school_id"
                                                @click="preloader = true"><i class="fas fa-card"></i> Card</a>
                                            <router-link class="btn btn-info dropdown-item"
                                                :to="{ name: 'studentview', params: { id: student.id } }"><i
                                                    class="fas fa-eye"></i>
                                                View</router-link>
                                            <router-link class="btn btn-success dropdown-item"
                                                :to="{ name: 'studentedit', params: { id: student.id } }"><i
                                                    class="fas fa-cogs"></i> Edit</router-link>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="students" v-bind:showDisabled="true" icon="fa-solid fa-angle-left" icon2="fa-solid fa-angle-right" :limit="3" v-on:change-page="allstudents">
                    </pagination>
                </div>
            </div>
        </div>
        <!-- <button @click="show">show</button>
    <modal name="imageupload">
        This is my first modal
    </modal> -->
    </div>
</template>
<script>
export default {
    created() {
        this.ASSETURL = ASSETURL
        this.school_id = getschoolid;
        if (this.$route.params.classname && this.$route.params.status) {
            this.student_class = this.$route.params.classname
            this.status = this.$route.params.status
            this.searchtype = 'filterclass'
        }

// console.log(getschoolid)

    },
    data() {
        return {
            students: {},
            studentsall: [],
            classes: [],
            actioncheck: [],
            action: "",
            ASSETURL: '',
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
        imageLoadError() {
            return true;
        },
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
                if (this.student_class == 'All') {
                    classsearch = '';
                } else {
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
                        // console.log(data)
                        this.students = data
                        this.studentsall = data.data
                        this.looding = false
                        this.preloader = false;
                    })
                    .catch()
            }, 300);
        },
        search() {
            if (this.$router.currentRoute.path === `/school/students/${this.student_class}/${this.status}`) {
            } else {
                this.$router.push({ name: 'studentssearch', params: { classname: this.student_class, status: this.status } })
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
                            if (this.action == 'Delete') {
                                Notification.customdelete(`Your data has been ${this.action}.`);
                            } else {
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
</script>
<style lang="css" scoped>
#img_size {
    width: 40px;
}
#imageUpload {
    display: none;
}
#profileImage {
    cursor: pointer;
}
#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}
#profile-container img {
    width: 150px;
    height: 150px;
}
</style>
