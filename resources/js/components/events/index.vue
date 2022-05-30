<template>
    <div>
        <div class="breadcrumbs-area">
            <h3>Event</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Event</li>
            </ul>
        </div>
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
                        <router-link  class="btn-fill-md text-light bg-dark-pastel-green mt-3 float-right" :to="{name:'eventnew'}">Add New</router-link>

                    </div>
                </div>



                        <div class="d-flex justify-content-between">




                                <div></div>



                                    <div class="form-group">
                                        <label for="">Search :</label>
                                            <input type="text" v-model="title" @keyup="searchTitle" placeholder="Search By Title" class="form-control">
                                    </div>
                        </div>




                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">SL</label>
                                    </div>
                                </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

<tr v-if="looding">
    <td colspan="6" style="    text-align: center;
    background: #042954;
    color: wheat;">Looding...</td>
</tr>

                            <tr v-else v-for="(event, index) in events.data">
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">{{ index+1 }}</label>
                                    </div>
                                </td>
                                <td>{{ event.title }}</td>
                                <td>
                                    <router-link  :to="{name:'eventscategory', params:{category:event.Category}}">{{ event.Category }}</router-link>
                                </td>
                                    <td>{{ event.status }}</td>
                                <td>
                                    <img width="70px" :src="'/'+JSON.parse(event.Images)[0]" alt="">

                                </td>
                                <td>
                                    <router-link class="btn btn-success" :to="{name:'eventsView',params:{id:event.id}}">View All</router-link>
                                    <router-link class="btn btn-primary" :to="{name:'eventEdit',params:{id:event.id}}">Edit</router-link>
                                    <span @click="actionclick(event.id)" class="btn btn-danger" >Delete</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="events" v-bind:showDisabled="true" :limit="3" v-on:change-page="eventfun"></pagination>
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
            events: {},
            school_id: '',
            searchtype:"",
            title:"",
            action:"",
            looding:true,
        }
    },
    methods: {
        eventfun(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }

 this.timeout = setTimeout( ()=> {
            axios.get(`/api/event?page=${page}&filter[school_id]=${this.school_id}&filter[title]=${this.title}`)
                .then(({ data }) => {
                    this.events = data;
                    this.looding =false
                })
                .catch()
                  }, 300);
        },


        searchTitle(){
            // this.searchtype = "filtertitle";
            this.eventfun()
		},


		actionclick(id){

this.action = 'Delete'
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
					axios.get(`/api/event/delete/${id}`)
						 .then(({data}) => {
                             this.eventfun();

                            Notification.customsucess(`Your data has been ${this.action}.`);

						 })
						 .catch(() => {
						 	// this.$router.push({name: 'supplier'})
						 })


				}
			})
		}
    },
    mounted() {
        this.category = this.$route.params.category;

            this.eventfun();

   
    }
}
</script>
<style lang="css" scoped>
#img_size {
    width: 40px;
}
</style>
