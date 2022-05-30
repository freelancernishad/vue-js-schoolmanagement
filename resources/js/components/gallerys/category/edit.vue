<template>
    <div>

    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Gallery Category</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Gallery Category</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Fees Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Gallery Category</h3>
                </div>
                <div class="dropdown">





                </div>
            </div>
          <div class="row">
            <div class="col-12 col-lg-4 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">


                  <form class="row g-3" method="post" v-on:submit.prevent="formsubmit" >


                    <div class="col-12 form-group">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" v-model="form.name" @keyup="categoryslug(form.name)" placeholder="GalleryCategory name">

                            <div class="alert alert-danger"></div>

                    </div>
                    <div class="col-12 form-group">
                      <label class="form-label">Slug</label>
                      <input type="text" class="form-control" v-model="slug" @keyup="categoryslug(slug)"  placeholder="Slug name">

                      <div class="alert alert-danger"></div>

                    </div>


                    <div class="col-12 form-group">
                      <div class="d-grid">


                            <button class="btn btn-primary">Add Gallery Category</button>


                        <button class="btn btn-primary">Update Gallery Category</button>


                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead>
                        <tr>


                          <th>Name</th>

                          <th>Slug</th>

                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>




                        <tr v-for="category in categorys.data">


                          <td>{{ category.name }}</td>

                          <td>{{ category.slug }}</td>


                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">

                        <router-link @click.native="editfuncion" :to="{name:'categoryedit',params:{id:category.id}}" class="text-warning" ><i class="fas fa-edit fa-fw"></i></router-link>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                aria-label="Delete" ><i class="fas fa-trash-alt fa-fw"></i></a>
                            </div>
                          </td>
                        </tr>



                      </tbody>
                    </table>
                  </div>



                </div>
              </div>
            </div>
          </div>
          <!--end row-->
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
    data() {
        return {
            categorys: {},
            school_id: '',
            searchtype:"",
            title:"",
              slug:null,
            form:{
                school_id:null,
                name:null,
                slug:null,
            },
        }
    },
    methods: {

      categoryslug(value){
             this.slug =  value.replace(/ /g,'-')
             this.form.slug =  value.replace(/ /g,'-')
         },

        galleryfun(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }


 this.timeout = setTimeout( ()=> {
            axios.get(`/api/gallery_category?page=${page}&filter[school_id]=${this.school_id}&filter[name]=${this.title}`)
                .then(({ data }) => {
                    this.categorys = data;

                    // console.log(data)
                    // console.log(data[0].school_id)
                    // this.school_id = data[0].school_id
                })
                .catch()
                  }, 300);
        },

            editfuncion(){
                 axios.get(`/api/gallery_category?filter[id]=${this.$route.params.id}`)
                .then(({ data }) => {
                    if(data.data.length>0){

                        this.form = data.data[0];
                    }
                        // console.log( data.data.length)
                    // console.log(data)
                    // console.log(data[0].school_id)
                    // this.school_id = data[0].school_id
                })
                .catch()
            },
        searchTitle(){
            // this.searchtype = "filtertitle";
            this.galleryfun()
		},



        formsubmit() {
            axios.post(`/api/gallery_category/submit`, this.form)
                .then(({ data }) => {

                    this.galleryfun()
                    this.form.name = '';
                    this.form.slug = '';
                    this.slug = '';
                    Notification.success();
                })
                .catch(() => {
                    // this.$router.push({name: 'supplier'})
                })
        },

    },
    mounted() {

            this.galleryfun();
            this.editfuncion();



// console.log(this.categoryslug("freelancer   nishad hossain"))


    }
}
</script>
<style lang="css" scoped>
#img_size {
    width: 40px;
}
</style>
