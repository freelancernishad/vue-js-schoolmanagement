import { mapGetters } from 'vuex'
export default {
    data(){
        return {

        }
    },

    methods: {
        async callApi(method, url, dataObj ){
            try {
              return await axios({
                    method: method,
                    url: url,
                    data: dataObj
                });
            } catch (e) {
                return e.response
            }
        },




    },
    computed: {



        ...mapGetters({

        }),



    },
    mounted() {
        this.$store.dispatch('Fb_Parse')
    },



}
