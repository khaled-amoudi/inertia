<template>
    <div>
        <h2 class="text-center mb-5">Create New User - By Form Helper</h2>

        <div class="d-flex justify-content-center">
            <!-- <form action="/" method="POST" class="w-50"> -->
            <form @submit.prevent="submit" class="w-50">

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" v-model="form.name" class="form-control" name="name" id="name" aria-describedby="helpId">
                    <small v-if="form.errors.name" v-text="form.errors.name" class="form-text text-danger mx-1"></small>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" v-model="form.email" class="form-control" name="email" id="email" aria-describedby="helpId" required>
                    <small v-if="form.errors.email" v-text="form.errors.email" id="helpId" class="form-text text-danger mx-1"></small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" v-model="form.password" class="form-control" name="password" id="password" aria-describedby="helpId" required>
                    <small v-if="form.errors.password" v-text="form.errors.password" id="helpId" class="form-text text-danger mx-1"></small>
                </div>

                <!-- diavle the button if the form is currently processing -->
                <button type="submit" class="btn btn-primary" :disabled="form.processing">Submit</button>

            </form>
        </div>
    </div>
</template>

<script setup>

import { useForm } from "@inertiajs/inertia-vue3";

    let form = useForm({
        name: '',
        email: '',
        password: '',
    });


    let submit = () => {
        form.post('/users')
    }
</script>
