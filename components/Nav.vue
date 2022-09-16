<template>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top home-header">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="~/assets/img/logo.png" alt="logo" class="large-logo" width="180" height="48" />
                <img src="~/assets/img/small-logo.png" class="small-logo d-none" alt="logo" width="31" height="26" />
            </a>
        </div>
        <div class="ms-auto">
            <div class="session_btn">
                <a class="btn btn-login" @click="$modal.show('loginModal')">Login <i
                    class="flaticon flaticon-lock"></i></a>
                <a class="btn btn-blue" @click="$modal.show('SignUpModal')">SignUp <i
                        class="flaticon flaticon-user"></i></a>
            </div>
        </div>
    </div>
</nav>
</template>
<script>
export default {
  name: 'Nav'
}
</script>