<template lang="en">
    <Head>
        <title>(default title)</title>
        <meta name="description" content="this description from layout" head-key="description">
    </Head>
    <div>
        <Nav />


        <div class="row" :class="{'d-none': $page.component === 'Users/Create' || $page.component === 'Users/CreateByFormHelper'}">
            <div class="col-4">
                <div :class="{'p-2 bg-info': $page.component != 'Home'}">
                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/ZM1vFz-N03k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-8">
                <p><b>note that =></b> video still opend when you go from Home->Users or Users->Home</p>
                <p><b>but</b> when you go to Settings, the video pause</p>
                <p>thats the magic of => <b>persistent layout</b></p>
            </div>
        </div>

    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-10 py-5">
            <slot />
        </div>
    </div>

</template>
<script setup>
    import Nav from "../Shared/Nav"
</script>
<style lang="">

</style>
