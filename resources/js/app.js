require('./bootstrap');


import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import Layout from './Shared/Layout'

createInertiaApp({

//   resolve: name => require(`./Pages/${name}`),

    resolve: name => {
        const page = require(`./Pages/${name}`).default


        // if (page.layout === undefined && !name.startsWith('Public/')) {


        // if(! page.layout){
        //     page.layout = Layout
        // }

        page.layout ??= Layout


        return page
    },


    title: title => `My App - ${title}`,

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
        .use(plugin)
        .component('Head', Head)
        .component('Link', Link)
        .mount(el)
  },
})
