import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
// import { App, plugin } from '@inertiajs/inertia-vue3'
// import { InertiaProgress } from '@inertiajs/progress'
import 'swiper/swiper-bundle.css'

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
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
        app.use(plugin)
        app.mount(el)
    },
})
