<template lang="">
    <div>
        <h1>Hello, {{ name }}</h1>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
            <!-- <li v-for="framework of frameworks">{{ framework }}</li> -->
        </ul>

    </div>


</template>



<script setup>
    defineProps({
    name: String,
    frameworks: Array,
    });
</script>




<style lang="">
</style>
