import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/swiper-bundle.css'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
        app.component('Swiper', Swiper)
        app.component('SwiperSlide', SwiperSlide)
        app.use(plugin)
        app.mount(el)
    },
})
