<template>
<!-- Login Popup Style -->
<modal name="loginModal" height="auto" width="90%" :maxWidth="550" :adaptive="true" :scrollable="true">
    <div class="login_modal">
        <div class="modal-body">
            
            <div class="mb-4">
                <h5>Log in to Advizuru</h5>
                <p class="mb-0">Welcome Back! Login with your data that you entered during registration</p>
            </div>
            <div class="d-none alert" id='after-submit'>

            </div>
            
            <ValidationObserver ref="loginForm" v-slot="{ handleSubmit }" @submit.prevent="submit()">
                <form method="POST" action="javascript:void(0);" vid="loginForm">

                    <div v-if="serverErrorMessage" class="alert msg alert-success" style="" role="alert">{{ serverErrorMessage }}</div>

                    <div class="form-group-md">
                        <ValidationProvider v-slot="{ errors }" rules="required|email" vid="email">
                            <i class="flaticon flaticon-email-1"></i>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" v-model="form.email" id="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <span class="text-danger font-italic">{{ errors[0] }}</span>
                        </ValidationProvider>
                    </div>
                    <div class="form-group-md">
                        <ValidationProvider v-slot="{ errors }" rules="required" vid="password">
                            <i class="flaticon flaticon-lock"></i>
                            <div class="form-floating">
                                <input type="password" class="form-control" v-model="form.password" name="password" id="password" placeholder="name@example.com">
                                <label for="floatingInput">Password</label>
                            </div>
                            <span class="text-danger font-italic">{{ errors[0] }}</span>
                        </ValidationProvider>
                    </div>
                    <div class="d-between mb-4">
                        <ValidationProvider v-slot="{ errors }" rules="required">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" v-model="form.remember" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div>
                            <span class="text-danger font-italic">{{ errors[0] }}</span>
                        </ValidationProvider>
                    </div>

                    <button type="button" class="btn btn-primary w-100" @click="handleSubmit(loginSubmit)">Login</button>
                    <span class="d-block or-line"><b>Or</b></span>
                    <button>
                        <GoogleLogin :params="params" :renderParams="renderParams" :onSuccess="onSuccess" :onFailure="onFailure" type="button" class="btn btn-light btn-google w-100">
                            <img src="~/assets/userassets/img/google.png" alt="google image" class="img-fluid me-3" width="20" height="20" />
                            Login with Google
                        </GoogleLogin>
                    </button>
                </form>
            </ValidationObserver>
        </div>
    </div>
</modal>
</template>

<script>
import Common from '~/common-utils/mixins/common'
import GoogleLogin from 'vue-google-login';
export default {
    name: 'LoginModal',

    mixins: [
        Common,

    ],

    data() {
        return {
            form: {
                email: '',
                password: '',
                remember: false,
                device_type: 'Web',
                device_token: 'Token'
            },
            params: {
                client_id: "341701372051-t0k64d9eopp9hoeq1l10j5h4uka78ih3.apps.googleusercontent.com"

            },
            serverErrorMessage: false
        }
    },
    components: {
        GoogleLogin
    },

    methods: {
        onSuccess(googleUser) {
            const thisPaste = this
            console.log(googleUser);

            // This only gets the user information: id, name, imageUrl and email
            console.log(googleUser.getBasicProfile());
            thisPaste.$modal.hide('loginModal')
            thisPaste.$router.push('profile')
        },
        loginSubmit() {
            const thisPaste = this
            this.$apiAxios.loginPost(this.form).then((res) => {
                    if ('message' in res)
                        thisPaste.serverErrorMessage = res.message
                    thisPaste.$modal.hide('loginModal')
                    this.$apiAxios.setAuthToken(res.access_token)
                    thisPaste.$router.push('profile')

                })
                .catch(function (error) {
                    thisPaste.onError(thisPaste, error)
                });

        },
    },

}
</script>
