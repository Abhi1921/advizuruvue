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
                    <h3 class="page-heading">Personal Information</h3>
                </div>

                <div class="row row-8-flex">

                    <div class="col-md-4">

                        <div v-if="serverErrorMessage" class="alert msg alert-danger" style="" role="alert">{{ serverErrorMessage }}</div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.first_name">
                                <label>First Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" v-model="form.personal.first_name" name="first_name" placeholder="enter your first_name" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.gender">
                                    <label>Gender<sup class="text-danger">*</sup></label>
                                    <div class="d-between row">
                                        <div class="form-check check-icon col ps-2">
                                            <input class="form-check-input" type="radio" v-model="form.personal.gender" name="gender" value="male" id="male">
                                            <label class="form-check-label" for="male">
                                                <i class="flaticon flaticon-male-sign icon"></i>
                                                Male
                                            </label>
                                            <i class="flaticon flaticon-check active-check"></i>
                                        </div>
                                        <div class="form-check check-icon col ps-2">
                                            <input class="form-check-input" type="radio" v-model="form.personal.gender" name="gender" value="female" id="female">
                                            <label class="form-check-label" for="female">
                                                <i class="flaticon flaticon-femenine icon"></i>
                                                Female
                                            </label>

                                            <i class="flaticon flaticon-check active-check"></i>
                                        </div>
                                    </div>
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="form-group">

                            <label>Mobile Number<sup class="text-danger">*</sup></label>
                            <div>
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.country_code">
                                    <model-list-select class="form-control w-25 float-left" :list="countries" v-model="form.personal.country_code" option-value="phonecode" :custom-text="displayCountryCode" @searchchange="searchCountry" placeholder="Select">
                                    </model-list-select>

                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.mobile">
                                    <input type="number" id="number" class="form-control w-75 float-right" name="mobile" v-model="form.personal.mobile" placeholder="Type Your Mobile Number" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>

                                </ValidationProvider>
                            </div>
                        </div>

                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.state_id">
                                <label>State<sup class="text-danger ">*</sup></label>
                                <model-list-select :list="states" v-model="form.personal.state_id" option-value="uuid" option-text="name" @searchchange="searchState" placeholder="Select">
                                </model-list-select>

                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.last_name">
                                <label>Last Name<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" v-model="form.personal.last_name" name="last_name" placeholder="enter your first_name" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="pincode">
                                <label>Pin Code<sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" v-model="form.personal.pincode" name="pincode" placeholder="Type Your Pincode" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                        <div class="form-group">
                            <label>Alternate Mobile Number<sup class="text-danger">*</sup></label>
                            <div>
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.alternate_country_code">
                                    <model-list-select class="form-control w-25 float-left" :list="countries" v-model="form.personal.alternate_country_code" option-value="phonecode" :custom-text="displayCountryCode" @searchchange="searchCountry" placeholder="Select">
                                    </model-list-select>

                                    <span class="text-danger font-italic">{{ errors[0] }}</span>
                                </ValidationProvider>
                                <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.alternate_mobile">
                                    <input type="number" id="number" class="form-control w-75 float-right" name="alternate_mobile" v-model="form.personal.alternate_mobile" placeholder="Type Your Mobile Number" />
                                    <span class="text-danger font-italic">{{ errors[0] }}</span>

                                </ValidationProvider>
                            </div>
                        </div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.country_id">
                                <label>Country<sup class="text-danger">*</sup></label>
                                <model-list-select :list="countries" v-model="form.personal.country_id" option-value="uuid" option-text="name" @searchchange="searchCountry" placeholder="Select">
                                </model-list-select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.dob">
                                <label>Date of Birth<sup class="text-danger">*</sup></label>

                                <input type="date" class="form-control" v-model="form.personal.dob" name="dob" placeholder="Select Date" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                            <!-- <i class="fa fa-calendar"></i> -->
                        </div>
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.city_id">
                                <label>Select City<sup class="text-danger">*</sup></label>

                                <model-list-select :list="cities" v-model="form.personal.city_id" option-value="uuid" option-text="name" @searchchange="searchCity" placeholder="Select">
                                </model-list-select>

                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="personal.address">
                                <label>Address<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" v-model="form.personal.address" name="address" placeholder="Type Your Address" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-card">
                <div class="d-flex heading-wrap">
                    <i class="flaticon flaticon-check me-3"></i>
                    <h3 class="page-heading">Professional Information</h3>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="professional.skills">
                                <label>Specify Primary Skill<sup class="text-danger">*</sup></label>
                                <model-list-select :list="skills" v-model="form.professional.primary_skill" option-value="uuid" option-text="name" @searchchange="searchSkill" placeholder="Select">
                                </model-list-select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="professional.total_experience_year">
                                <label>Total Experience<sup class="text-danger">*</sup></label>

                                <input type="number" class="form-control" name="total_experience_year" v-model="form.professional.total_experience_year" placeholder="Type Your Total Experience" />
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider>
                                <label>Current Company<sup></sup></label>
                                <input type="text" class="form-control" name="company" v-model="form.professional.current_company" placeholder="Type Your Company" />

                            </ValidationProvider>
                        </div>
                    </div>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-8">
                        <div class="form-group">

                            <ValidationProvider>
                                <label>I am available as<sup class="text-danger">*</sup></label>

                            </ValidationProvider>
                            <div class="d-flex justify-content-between form-field">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" v-model="form.professional.availability" name="availability" value="" id="contractual">

                                    <label class="form-check-label" for="contractual">
                                        Freelancer/Contractual
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" v-model="form.professional.availability" name="availability" id="full-time">
                                    <label class="form-check-label" for="full-time">
                                        Full time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" v-model="form.professional.availability" name="availability" id="Part-time">
                                    <label class="form-check-label" for="Part-time">
                                        Part time
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group file-upload">
                            <ValidationProvider v-slot="{ errors }" vid="professional.resume">
                                <label>Upload Resume<sup class="text-danger">*</sup></label>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                            <div class="d-flex align-items-center">
                                <input type="file" name="resume" id="actual-btn" hidden />

                                <label class="chose-file" for="actual-btn"><i class="flaticon flaticon-upload"></i> Choose File&nbsp;</label><br>

                                <label id="file-chosen">&nbsp; No file chosen</label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider>
                                <label>Which Profile suits you most?</label>
                                <select class="form-select" name="" placeholder="Select Profile">
                                    <option>Select Profile</option>
                                </select>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="professional.joining_availability">
                                <label> Full Time Available<sup class="text-danger">*</sup></label>
                                <select type="number" v-model="form.professional.joining_availability" name="joining_availability" class="form-select">
                                    <option value="1">India</option>
                                    <option value="2">Afganistaan</option>
                                </select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group file-upload">
                            <ValidationProvider v-slot="{ errors }" vid="professional.photo">
                                <label>Choose Profile Pic<sup class="text-danger">*</sup></label>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                            <div class="d-flex align-items-center">
                                <input type="file" name="photo" id="actual-btn" hidden />

                                <label class="chose-file" for="actual-btn"><i class="flaticon flaticon-upload"></i> Choose Photo&nbsp;</label><br>

                                <label id="file-chosen">&nbsp; No file chosen</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-card">
                <div class="d-flex heading-wrap">
                    <i class="flaticon flaticon-check me-3"></i>
                    <h3 class="page-heading">Financial Information</h3>
                </div>
                <div class="row row-8-flex">
                    <div class="col-md-4">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="financial.prefer_currency">
                                <label>Prefer Currency</label>

                                <model-list-select :list="currencies" v-model="form.financial.prefer_currency" option-value="uuid" :custom-text="optionDisplayText" @searchchange="searchCurrency" placeholder="Select">
                                </model-list-select>
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>
                    <div class="col-md-4 " v-for="(freq, key, index) in frequencies_master" :key="index">
                        <div class="form-group">
                            <ValidationProvider v-slot="{ errors }" rules="required" vid="financial.rate">
                                <label>{{freq}} Rate</label>

                                <input type="number" name="rate" v-model="form.financial.rate[key]" class="form-select" placeholder="Enter Rate">
                                <span class="text-danger font-italic">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>

                    </div>

                </div>
                <!-- <vue-google-autocomplete id="map" classname="form-control" placeholder="longitude" v-on:placechanged="getAddressData" v-model="form.personal.longitude">
                </vue-google-autocomplete>
                <vue-google-autocomplete id="map" classname="form-control" placeholder="longitude" v-on:placechanged="getAddressData" v-model="form.personal.latitude">
                </vue-google-autocomplete> -->
                <div class="d-center my-5">
                    <button type="button" class="btn btn-primary" @click="handleSubmit(registerUser)">Submit </button>
                </div>
            </div>
        </form>
    </ValidationObserver>
</div>
</template>

<script>
import VueGoogleAutocomplete from 'vue-google-autocomplete/src/VueGoogleAutocomplete.vue'
//import Autocomplete from 'vuejs-auto-complete'
import {
    ModelListSelect
} from 'vue-search-select'
import {
    MultiSelect
} from 'vue-search-select'
import 'vue-search-select/dist/VueSearchSelect.css'

export default {
    name: 'profileuser',
    components: {
        VueGoogleAutocomplete,
        ModelListSelect,
        MultiSelect,
    },
    mixins: [],

    data() {

        return {
            myValue: '',

            form: {
                timezone: 1,
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
                    mobile: '',

                },

                professional: {
                    availability: '',
                    primary_skill: '',
                    total_experience_year: '',
                    total_experience_month: '',
                    current_company: '',
                    resume: null,
                    joining_availability: '',

                },
                financial: {
                    prefer_currency: null,
                    rate: [],
                    rate_frequency: []

                },

            },
            frequencies_master: [],
            currencies: [],
            skills: [],
            cities: [],
            states: [],
            countries: [],
            serverErrorMessage: false,
        }

    },
    async fetch() {
        const freqs = await this.$apiAxios.staticGeneralData({
            type: 'rate_freuency'
        })
        this.frequencies_master = freqs.masters
    },

    watch: {
        currencies() {
            console.log(this.currencies);
        }
    },

    methods: {
        registerUser() {
            const thisPaste = this
            this.$apiAxios.profilePost(this.form).then((res) => {
                    if ('message' in res)
                        thisPaste.serverErrorMessage = res.message
                    thisPaste.$modal.hide('loginModal')
                    thisPaste.$router.push('profile')

                })
                .catch(function (error) {
                    thisPaste.onError(thisPaste, error)
                });
        },
        countryChanged(country) {
            this.country = country.dialCode
        },
        getAddressData: function (addressData, placeResultData, id) {
            this.address = addressData;
            console.log(placeResultData.geometry.location.lat);
            console.log(placeResultData.geometry.location.lng);
        },

        searchCurrency(searchText) {
            const thisPaste = this
            this.$apiAxios.generalData({
                type: 'Currency',
                q: searchText
            }).then((res) => {
                thisPaste.currencies = res.masters
            })
        },

        optionDisplayCurrency(option) {
            return `${option.name} (${option.code} - ${option.symbol})`
        },

        displayCountryCode(option) {
            return `+ ${option.phonecode}`
        },

        searchSkill(searchText) {
            const thisPaste = this
            this.$apiAxios.generalData({
                type: 1,
                q: searchText
            }).then((res) => {
                thisPaste.skills = res.masters
            })
        },

        searchCity(searchText) {
            const thisPaste = this
            this.$apiAxios.generalData({
                type: 'City',
                q: searchText
            }).then((res) => {
                thisPaste.cities = res.masters
            })
        },

        searchState(searchText) {
            const thisPaste = this
            this.$apiAxios.generalData({
                type: 'State',
                q: searchText
            }).then((res) => {
                thisPaste.states = res.masters
            })
        },

        searchCountry(searchText) {
            const thisPaste = this
            this.$apiAxios.generalData({
                type: 'Country',
                q: searchText
            }).then((res) => {
                thisPaste.countries = res.masters
            })
        }
    },

}
</script>
