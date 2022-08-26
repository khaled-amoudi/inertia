<template lang="">
    <div>
        <ul class="pagination">
            <li class="page-item p-2 border" v-for="link in links">
                <component
                    :is="link.url ? 'Link' : 'span'"
                    :href="link.url"
                    v-html="link.label"
                    class="px-1 text-decoration-none"
                    :class="{ 'text-muted' : !link.url, 'fw-bold' : link.active }"
                />
            </li>
        </ul>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  links: Array,
});
</script>


<style lang="">
</style>
