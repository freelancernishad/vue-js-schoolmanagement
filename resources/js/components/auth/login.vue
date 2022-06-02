<template>
    <div class="container loginpage">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="    height: 350px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 441px;">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form class="user" v-on:submit.prevent="login" >
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" v-model="form.email"  />

                            <small class="text-danger" v-if="errors.email">{{
                                    errors.email[0]
                            }}</small>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>

                            <input type="password" class="form-control" v-model="form.password" />
                            <small class="text-danger" v-if="errors.password">{{
                                    errors.password[0]
                            }}</small>
                        </div>
                        <div class="d-flex align-items-center remember"></div>
                        <div class="form-group">
                            <button type="submit" class="btn float-right login_btn" style="background-color: #ffc312;font-size: 24px;
    padding: 6px 31px;">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <hr />

                    <div class="text-center">
                        <!-- <router-link to="register" class="font-weight-bold small">Create an Account!</router-link>
                        |
                        <router-link to="forget" class="font-weight-bold small">Forget Password</router-link> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        if (User.loggedIn()) {
            this.$router.push({ name: "home" });
        }
    },

    data() {
        return {
            form: {
                email: null,
                password: null,
            },
            errors: {},
        };
    },
    methods: {
        login() {
            // alert('done')
            axios
                .post("/api/auth/login", this.form)
                .then((res) => {
                    console.log(res);
                    User.responseAfterLogin(res);

                    Toast.fire({
                        icon: "success",
                        title: "Signed in successfully",
                    });

                    this.$router.push({ name: "home" });
                })
                .catch((error) => (this.errors = error.response.data.errors));
            // .catch(
            // 	Toast.fire({
            // 		icon: 'warning',
            // 		title: 'Invalid email or password!'
            // 	})
            // )
        },
    },
};
</script>

<style lang="css" scoped>

.container.loginpage {
    height: 100vh;
}
@media (max-width:600px) {
 
     .card{

    width: 275px !important;
}
}

</style>
