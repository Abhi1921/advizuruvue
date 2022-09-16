<template>
    <div class="main-wrapper">
        <Banner />
        <News />
        <Services />
        <Technologies />
        <Features />
        <div class="gray-bg-slice">
            <Blogs />
            <About />
        </div>
    </div>
</template>
<script>
import Banner from './partials/Banner'
import News from './partials/News'
import Services from './partials/Services'
import Technologies from './partials/Technologies'
import Features from './partials/Features'
import Blogs from './partials/Blogs'
import About from './partials/About'


export default {
  name: 'Index',
  components: { Banner, News, Services, Technologies, Features, Blogs, About }
}
</script>