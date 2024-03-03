import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { route } from './ziggy.js'; // Import route() function from ziggy.js

createInertiaApp({
    resolve: async name => {
        const pages = import.meta.glob('./Pages/**/*.vue')
        const page = pages[`./Pages/${name}.vue`]
        if (!page) {
            throw new Error(`Page not found: ${name}`)
        }
        const module = await page()
        return module.default
    },
    setup({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})
        app.use(plugin)
        app.mixin({methods: {route}}) // Add route() function to global methods
        app.mount(el)
    },
}).then(r =>{})
