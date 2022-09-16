<template>
<div class="container">
    <div class="main-wrapper spacing">
        <div class="d-card mt-5">
            <div class="d-flex heading-wrap success">
                <i class="flaticon flaticon-check me-3"></i>
                <h3 class="page-heading">Account Information</h3>
            </div>
            <div class="form-group">
                <h5>{{$route.query.role == '53698eb1-1358-41d3-92a1-d351f03f6e1e' ? 'Organisation' : 'Individual'}} Signup</h5>
            </div>
            <div class="d-none alert" id='after-submit'>

            </div>

            <ValidationObserver ref="loginForm" v-slot="{ handleSubmit }" @submit.prevent="submit()">
                <form method="POST" action="javascript:void(0);" vid="registerForm">
                    <div v-if="serverErrorMessage" class="alert msg alert-danger" style="" role="alert">{{ serverErrorMessage }}</div>

                    <div class="row row-8-flex">

                        <div class="col-md-12">

                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required|email" vid="email">
                                    <label>Email ID<sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control" v-model="form.email" name="email" placeholder="Enter Your Email" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                                <div class="form-text">(This email id will be used for further communication)</div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required|min:8" vid="password">
                                    <label>Password<sup class="text-danger">*</sup></label>
                                    <input type="Password" class="form-control" v-model="form.password" name="password" placeholder="Enter Your Password" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required|confirmed:password" vid="password_confirmation">
                                    <label>Confirm Password<sup class="text-danger">*</sup></label>

                                    <input type="Password" class="form-control" v-model="form.password_confirmation" name="password_confirmation" placeholder="Enter Your Password" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                    </div>
                    <div class="form-note">
                        <p class="mb-0"><b>Note:</b> By clicking on next, you are agreeing to advizuru, <a href="javascript:void(0);">terms & condition</a> and <a href="javascript:void(0);">privacy policy</a></p>
                    </div>

                    <div class="d-center my-5">
                        <button type="button" class="btn btn-primary" @click="handleSubmit(registerSubmit)">Submit & Next</button>

                    </div>
                </form>
            </ValidationObserver>

        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'register',
    mixins: [],

    data() {
        return {
            form: {
                email: '',
                password: '',
                password_confirmation: '',
                role_id: this.$route.query.role,
                device_type: 'Web',
                device_token: 'Token'
            },
            serverErrorMessage: false
        }
    },

    methods: {
        registerSubmit() {
            const thisPaste = this
            this.$apiAxios.registerPost(this.form).then((res) => {
                    if ('message' in res)
                        thisPaste.serverErrorMessage = res.message
                    if (thisPaste.$route.query.role == '53698eb1-1358-41d3-92a1-d351f03f6e1e')
                        thisPaste.$router.push('profileorg')
                    else
                        thisPaste.$router.push('profileuser')
                })
                .catch(function (error) {
                    thisPaste.onError(thisPaste, error)
                });
        },
    }
}
</script>
