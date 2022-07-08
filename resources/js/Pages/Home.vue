<template lang="">
    <Head>
        <title head-key="title">Home</title>
        <meta name="description" content="this description from Home" head-key="description">
    </Head>

    <div>
            <!-- <Layout> -->
        <h3>Home</h3>
    <!-- </Layout> -->

    <ul>
        <li class="text-primary" v-for="user in users" :key="user.id" v-text="user.name">
        </li>
    </ul>
    </div>

</template>

<script>
// import Layout from "../Shared/Layout";

// export default {
//     layout: Layout,
// //   components: {
// //     Layout,
// //   },
// };
</script>

<style lang=""></style>
