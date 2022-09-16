<template>
<div class="container">
    <div class="d-card">
        <div class="d-flex heading-wrap success">
            <i class="flaticon flaticon-check me-3"></i>
        </div>
        <div>
        </div>
    </div>
    <ValidationObserver ref="loginForm" v-slot="{ handleSubmit }" @submit.prevent="submit()">
        <form method="POST" action="javascript:void(0);" vid="loginForm">
            <div class="d-card">
                <div class="d-flex heading-wrap">
                    <i class="flaticon flaticon-check me-3"></i>
                    <h3 class="page-heading">Organization Information</h3>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-4">
                        <div v-if="serverErrorMessage" class="alert msg alert-danger" style="" role="alert">{{ serverErrorMessage }}</div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.company_name">
                                <label>Company Name</label>
                                <input type="text" class="form-control" v-model="form.organization.state_id" name="company_name" placeholder="Type Your Company Name" required />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                        
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.company_profile">
                                <label>Company profile</label>
                                <input type="text" class="form-control" v-model="form.organization.company_profile" name="companyprofile" placeholder="Type Your Company profile" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.service_type">
                                <label>Service Type</label>
                                <select v-model="form.organization.service_type" name="servicetype" class="form-select">
                                    <option>select service type</option>
                                    <option>Audit Firm</option>
                                    <option>Startup</option>
                                    <option>Web/Application Development</option>
                                    <option>Enterprise Solution</option>

                                </select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.company_size">
                                <label>Company Size</label>
                                <input type="text" class="form-control" v-model="form.organization.company_size" name="company_size" placeholder="Company Size" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>

                        </div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.website_url">
                                <label>Website/URL</label>
                                <input type="text" class="form-control" v-model="form.organization.website_url" name="website_url" placeholder="Type Your Website/URL" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="organization.industry_id">
                                <label>Industry</label>
                                <select v-model="form.organization.industry_id" name="industry_id" class="form-select">
                                    <option>Select industry</option>
                                </select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>
                </div>
            </div>
            <div class="d-card">
                <div class="d-flex heading-wrap">
                    <i class="flaticon flaticon-check me-3"></i>
                    <h3 class="page-heading">Contact Details</h3>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.first_name">
                                <label>Full Name</label>
                                <input type="text" class="form-control" v-model="form.personal.first_name" name="first_name" placeholder="Type Your Full Name" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="contact.landline">
                                <label>Contact Landline</label>
                                <input type="text" class="form-control" v-model="form.contact.landline" name="landline" placeholder="Type Your Contact Landline" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                <label>City</label>
                                <select v-model="form.personal.state_id" name="city" class="form-select">
                                    <option>city</option>
                                </select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="row row-8-flex">
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>State</label>
                                    <select v-model="form.personal.state_id" name="state" class="form-select">
                                        <option>State</option>
                                    </select>
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>Country</label>
                                    <select v-model="form.personal.state_id" name="country" class="form-select">
                                        <option>Country</option>
                                    </select>
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="contact.designation">
                                    <label>Designation</label>
                                    <select v-model="form.contact.designation" name="designation" class="form-select">
                                        <option>Btech</option>
                                    </select>
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                    </div>
                    <div class="row row-8-flex">
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" v-model="form.personal.state_id" name="landline" placeholder="Type Your Contact Number" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="form.personal.state_id" name="address" placeholder="Type Your Address" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" v-model="form.personal.state_id" name="pincode" placeholder="Type Your PinCode" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>

                        <div class="row row-8-flex">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                        <label> Mobile Number</label>
                                        <input type="text" class="form-control" v-model="form.personal.state_id" name="mobile" placeholder="Type Your Mobile Number" />
                                        <span class="text-danger font-italic">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-center my-5">
                    <button type="button" class="btn btn-primary" @click="handleSubmit(orgProfile)">Submit </button>
                </div>
            </div>
        </form>
    </ValidationObserver>
</div>
</template>

<script>
export default {
    name: 'profileuser',
    mixins: [],

    data() {
        return {
            form: {
                 timezone: '',
                personal: {
                    first_name: '',
                    last_name: '',
                    dob: '',
                    gender: '',
                    country_code: '',
                    city_id: '',
                    state_id: '',
                    country_id: '',
                    pincode: '',
                    longitude: '',
                    latitude: '',
                    photo: '',
                    alternate_country_code: '',
                    address: '',
                    alternate_mobile: '',
                    mobile: ''
                },

                organization: {
                    company_name: '',
                    company_size: '',
                    industry_id: '',
                    company_profile: '',
                    service_types: '',
                    website_url: '',
                    joining_availability: '',


                },
                contact: {
                    landline_no: '',
                    designation: '',

                },

            },
            serverErrorMessage: false
        }
    },
    methods: {
        orgProfile() {
            const thisPaste = this
            this.$apiAxios.orgProfilePost(this.form).then((res) => {
                    if ('message' in res)
                        thisPaste.serverErrorMessage = res.message
                    thisPaste.$modal.hide('loginModal')
                    thisPaste.$router.push('profile')

                })
                .catch(function (error) {
                    thisPaste.onError(thisPaste, error)
                });
        },
    }
}
</script>
