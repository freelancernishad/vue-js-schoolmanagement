<template>
    <div>
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Staffs</h3>
            <ul>
                <li>
                    <router-link :to="{ name: 'home' }">Home</router-link>
                </li>
                <li>All Staffs</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Staffs Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>All Staffs Data</h3>
                    </div>
                    <router-link class="btn fw-btn-fill btn-gradient-yellow addnewbtn" :to="{ name: 'staffsform' }">Add
                        Staffs</router-link>
                </div>










                <div class="d-flex justify-content-between">

                    <div class="d-flex align-items-end" v-if="actioncheck != ''">
                        <div class="form-group">
                            <label for="">Action :</label>
                            <select class="form-control" v-model="action" style="width:200px">
                                <option value="">Select</option>
                                <option>Delete</option>


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


                <div class="table-responsive">





                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" @click="selectAll" v-model="allSelected">
                                </th>
                                <th>Photo</th>
                                <th @click="sortby('TeacherName')">Name</th>

                                <th @click="sortby('InchargeClass')">Incharge Class</th>

                                <th @click="sortby('TeacherSubjectHandling')">Subject</th>
                                <th @click="sortby('TeacherPhoneNumber')">Phone</th>
                                <th @click="sortby('TeacherEmail')">E-mail</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>


<tr v-if="looding">
    <td colspan="10" style="    text-align: center;
    background: #042954;
    color: wheat;">Looding...</td>
</tr>


                            <tr v-else v-for="Staffs in staffs.data" :key="Staffs.id">

                                <td>
                                    <input type="checkbox" v-model="actioncheck" :value="Staffs.id">
                                </td>
                                <td class="text-center">
                                    <a>
                                        <img id='Staffs_image' class='Staffs_image'
                                            style="    width: 33px !important;height: 34px;border-radius: 50%;"
                                            :src="'/images/' + Staffs.StaffsPicture" alt="Staffs">
                                    </a>
                                </td>
                                <td>{{ Staffs.TeacherName }}</td>

                                <td>{{ Staffs.InchargeClass }}</td>
                                <td>{{ Staffs.TeacherSubjectHandling }}</td>
                                <td>{{ Staffs.TeacherPhoneNumber }}</td>
                                <td>{{ Staffs.TeacherEmail }}</td>

                                <td>


                                    <router-link class="btn btn-info"
                                        :to="{ name: 'Staffsview', params: { id: Staffs.id } }"><i class="fas fa-eye"></i>
                                        View</router-link>
                                    <router-link class="btn btn-success"
                                        :to="{ name: 'Staffsedit', params: { id: Staffs.id } }"><i class="fas fa-cogs"></i>
                                        Edit</router-link>
                                </td>

                            </tr>



                        </tbody>
                    </table>
                    <pagination :data="staffs" v-bind:showDisabled="true" :limit="3" v-on:change-page="allstaffs">
                    </pagination>
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
    data() {
        return {
            staffs: {},
            staffsall: [],
            actioncheck: [],
            action: "",
            searchtype: "",
            name: "",
            Staffs_class: "",
            status: "",
            school_id: "",
            year: new Date().getFullYear(),
            timeout: null,
            allSelected: false,
            field: '',
            sorttype: '',
            icon: '',
            looding:true
        }
    },

    methods: {

        selectAll: function () {
            this.actioncheck = [];
            if (!this.allSelected) {
                this.staffsall.forEach(Staffs => {
                    //    console.log(Staffs.id)
                    this.actioncheck.push(Staffs.id);
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
            this.allstaffs()
        },

        allstaffs(page) {
              this.looding = true

            clearTimeout(this.timeout);




            var url = '';
            var sort = '';
            if (this.field != '') {
                sort = `sort=${this.sorttype}${this.field}`;
            }
            if (this.searchtype == '') {
                url = `/api/staffs/list?page=${page}&${sort}&filter[school_id]=${this.school_id}`;
            }else if (this.searchtype == 'filtername') {
                url = `/api/staffs/list?page=${page}&filter[TeacherName]=${this.name}&${sort}&filter[school_id]=${this.school_id}`;

            }




            if (typeof page === 'undefined') {
                page = 1;
            }

            this.timeout = setTimeout(() => {

                axios.get(url)
                    .then(({ data }) => {
                        // console.log(data)
                        this.staffs = data
                        this.staffsall = data.data
                          this.looding = false
                    })
                    .catch()
            }, 300);
        },

        searchname() {
            this.searchtype = "filtername";
            this.allstaffs()
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
                    axios.post(`/api/staff/${this.action}`, this.actioncheck)
                        .then(({ data }) => {
                            this.allstaffs();
                            // this.suppliers = this.suppliers.filter(supplier => {
                            // 	return supplier.id != id
                            // })
                            //  console.log(data)
                        })
                        .catch(() => {
                            // this.$router.push({name: 'supplier'})
                        })

                    Swal.fire(
                        `${this.action}!`,
                        `Your data has been ${this.action}.`,
                        'success'
                    )
                }
            })
        }
    },
    mounted() {
        this.allstaffs();
    }
}
</script>

<style lang="css" scoped>
#img_size {
    width: 40px;
}
</style>
