<template>
    <div class="section_one">
            <img src="~/assets/userassets/img/banner.jpg" class="img-fluid w-100" alt="home banner" width="1920" height="900" />
            <div class="container-fluid">
                <div class="center">
                    <div class="section_content">
                        <h3>An Ecosystem for Organizations <br>
                            & Professionals for
                        </h3>
                        <p>Hiring | Freelancing | Training |
                            Subcontracting of Projects & Resources | Virtual teams
                            |
                            Business lead sharing & Promotion.</p>
                        <div class="flex-btn">
                           
                            <NuxtLink :to="{ name: 'register', query: { role: 'b88d1981-643d-4fcd-9a58-bc9a3b2a6852' }}"><button href="javascript:void(0);" class="btn btn-blue me-3">Register As A Professional /
                                Individual User <i class="flaticon flaticon-right-arrow"></i></button></NuxtLink>
                                <NuxtLink :to="{ name: 'register', query: { role: '53698eb1-1358-41d3-92a1-d351f03f6e1e' }}"><button href="javascript:void(0);" class="btn btn-light">Register As An Organization
                                <i class="flaticon flaticon-right-arrow"></i></button></NuxtLink>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>