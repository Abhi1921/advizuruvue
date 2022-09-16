<template>
    <div class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg-6">
            <div class="modal-content login_modal">
                <div class="modal-body">
                    <div class="mb-4">
                        <h5>Reset Password</h5>
                        <p class="mb-0">You've successfully verified your account. Enter new password below.</p>
                    </div>
                    <form>
                        <div class="form-group-md">
                            <i class="flaticon flaticon-email-1"></i>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Your Email address</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100">Reset My password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        name : 'ForgotPasswordModal'
    }
</script>