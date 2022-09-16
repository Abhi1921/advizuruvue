<template>
<modal name="SignUpModal" height="auto" width="90%" :maxWidth="900" :adaptive="true" :scrollable="true">
    <div class="signUp_modal">
        <div class="modal-body p-0">
            <h5><b>Let’s get started!</b> First, tell us what you’re looking for.</h5>
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="block org-block">
                        <i class="flaticon flaticon-team"></i>
                        <p>Collaborate with other organization
                            for sharing business leads,
                            subcontracting resources & projects
                            and hiring free lancers
                        </p>
                        <h6>Find, collaborate with, Organization
                            & skilled professionals.</h6>
                        <NuxtLink :to="{ name: 'register', query: { role: '53698eb1-1358-41d3-92a1-d351f03f6e1e' }}"> <button class="btn btn-outline-primary w-100" @click="$modal.hide('SignUpModal')">Signup As Organization</button></NuxtLink>

                    </div>
                </div>
                <div class="col-md-6 bg-light-blue">
                    <div class="block individual-block">
                        <i class="flaticon flaticon-user-2"></i>
                        <p>I’m looking for projects, business leads
                            & training
                        </p>
                        <h6>Find projects, share business leads, be
                            part of virtual team & enhance your skill
                            as trainee or trainer</h6>

                        <NuxtLink :to="{ name: 'register', query: { role: 'b88d1981-643d-4fcd-9a58-bc9a3b2a6852' }}"> <button class="btn btn-outline-primary w-100" @click="$modal.hide('SignUpModal')">Signup As Individual</button></NuxtLink>
                    </div>
                </div>
            </div>
        </div>
    </div>
</modal>
</template>

<script>
export default {
    name: "RegisterModal"
}
</script>
