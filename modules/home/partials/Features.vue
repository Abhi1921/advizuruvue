<template>
    <div class="section_five space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <img src="~/assets/userassets/img/find-project1.png" class="img-fluid" alt="img-fluid" width=""
                            height="" />
                    </div>
                    <VueSlickCarousel class="col-md-5 align-self-center project_slider" :arrows="false" :dots="false" :autoplay="true">
                        <div class="hoz_sliderContent">
                            <h3>Powerful services help you work, <br>
                                learn, Organize, Connect <br>
                                and create
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop
                            </p>
                            <a href="javascript:void(0);" class="link-1">Learn More <i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                        <div class="hoz_sliderContent">
                            <h3>Powerful services help you work, <br>
                                learn, Organize, Connect <br>
                                and create 2
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop
                            </p>
                            <a href="javascript:void(0);" class="link-1">Learn More <i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                        <div class="hoz_sliderContent">
                            <h3>Powerful services help you work, <br>
                                learn, Organize, Connect <br>
                                and create 3
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop
                            </p>
                            <a href="javascript:void(0);" class="link-1">Learn More <i
                                    class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </VueSlickCarousel>
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