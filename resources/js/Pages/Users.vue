<template lang="">
    <div>

        <!-- <Layout> -->
            <h3>Users</h3>
            <p>page url : {{ $page.url }}</p>
            <p>page version : {{ $page.version }}</p>


            <div class="d-flex p-5" style="margin-top: 100vh">
                <h6>the current time is : {{ time }}  " preserve-scroll "</h6>
                <span class="badge bg-primary mx-3"><Link href="/users" preserve-scroll class="nav-link p-0 text-white">Refresh</Link></span>
            </div>

        <!-- </Layout> -->

    </div>
</template>

<script>
// we use link component bt importing this ,
// link component allow to go to new page without refresh
import Layout from "../Shared/Layout";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    layout: Layout,

  components: {
    // Layout,
    Link,
  },
  props: {
    time: String,
  },
};
</script>

<style lang=""></style>
