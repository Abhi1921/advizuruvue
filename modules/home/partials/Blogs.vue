<template>
<div class="section_six space">
    <div class="container-fluid">
        <div class="row service_flex">
            <div class="col-md-3 align-self-center">
                <div class="slide_content">
                    <h2>All Blog</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry</p>
                    <a href="javascript:void(0);">Visit the knowledge Center</a>
                </div>
            </div>
            <div class="col-md-9">
                <VueSlickCarousel class="service_slider" :arrows="false" :dots="false" :autoplay="true" :slidesToShow="3">
                    <div>
                        <div class="slide_card bg-white">
                            <img src="~/assets/userassets/img/slide-img-4.jpg" class="img-fluid" alt="slider image"
                                width="" height="" />
                            <div class="card_content">
                                <h5>Interested in growing your career?</h5>
                                <p>Advizuru is an organised online market place for corporate companies
                                    and individuals to showcase their business or individual
                                    professional portfolio, generate qualified business leads &
                                    associate for professional contracts.</p>
                                <a href="javascript:void(0);">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide_card bg-white">
                            <img src="~/assets/userassets/img/slide-img-5.jpg" class="img-fluid" alt="slider image"
                                width="" height="" />
                            <div class="card_content">
                                <h5>employers use credentials to validate skills</h5>
                                <p>Advizuru is an organised online market place for corporate companies
                                    and individuals to showcase their business or individual
                                    professional portfolio, generate qualified business leads &
                                    associate for professional contracts.</p>
                                <a href="javascript:void(0);">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide_card bg-white">
                            <img src="~/assets/userassets/img/slide-img-1.jpg" class="img-fluid" alt="slider image"
                                width="" height="" />
                            <div class="card_content">
                                <h5>SAP PP in steel industries</h5>
                                <p>Advizuru is an organised online market place for corporate companies
                                    and individuals to showcase their business or individual
                                    professional portfolio, generate qualified business leads &
                                    associate for professional contracts.</p>
                                <a href="javascript:void(0);">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide_card bg-white">
                            <img src="~/assets/userassets/img/slide-img-2.jpg" class="img-fluid" alt="slider image"
                                width="" height="" />
                            <div class="card_content">
                                <h5>SAP PP in steel industries</h5>
                                <p>Advizuru is an organised online market place for corporate companies
                                    and individuals to showcase their business or individual
                                    professional portfolio, generate qualified business leads &
                                    associate for professional contracts.</p>
                                <a href="javascript:void(0);">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </VueSlickCarousel>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
  components: { VueSlickCarousel}
}
</script>
