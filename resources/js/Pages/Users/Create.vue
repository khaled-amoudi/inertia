<template>
    <div>
        <h2 class="text-center mb-5">Create New User</h2>

        <div class="d-flex justify-content-center">
            <!-- <form action="/" method="POST" class="w-50"> -->
            <form @submit.prevent="submit" class="w-50">

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" v-model="form.name" class="form-control" name="name" id="name" aria-describedby="helpId">
                    <small v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="form-text text-danger mx-1"></small>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" v-model="form.email" class="form-control" name="email" id="email" aria-describedby="helpId" required>
                    <small v-if="$page.props.errors.email" v-text="$page.props.errors.email" id="helpId" class="form-text text-danger mx-1"></small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" v-model="form.password" class="form-control" name="password" id="password" aria-describedby="helpId" required>
                    <small v-if="$page.props.errors.password" v-text="$page.props.errors.password" id="helpId" class="form-text text-danger mx-1"></small>
                </div>

                <!-- diavle the button if the form is currently processing -->
                <button type="submit" class="btn btn-primary" :disabled="processing">Submit</button>

            </form>
        </div>
    </div>
</template>

<script setup>

import { reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

    let form = reactive({
        name: '',
        email: '',
        password: '',
    });

    // diable submit button during the post request to avoid spam creating of users
    let processing = ref(false);

    let submit = () => {
        processing.value = true;
        Inertia.post('/users', form, {
            onStart: () => { processing.value = true },
            onFinish: () => { processing.value = false },
        });
    }

    // defineProps({
    //     errors: Object
    // });

</script>
