<script setup lang="ts">
    import { ref } from 'vue';
    import { InertiaLink } from '@inertiajs/inertia-vue3';
    import {route} from "ziggy-js";

    const imagePath = ref("/assets/images/logo-pdm.png");

</script>
<template>
    <header class="header-section">
        <div class="header">
            <div class="header-bottom-area">
                <div class="container custom-container">
                    <div class="header-menu-content">
                        <nav class="navbar navbar-expand-xl p-0">
                            <a class="site-logo site-title" href="index.html"><img :src="imagePath" alt="imageSrc" :style="{ width: '90px', height: '60px' }"></a>
                            <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggle-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <div class="header-right main-menu">
                                    <div class="main-menu"></div>
                                    <ul class="navbar-nav main-menu">
                                        <li>
<!--                                            <InertiaLink :href="routes('/')">Home</InertiaLink>-->
                                            <InertiaLink :href="route('index')">Home</InertiaLink>
                                        </li>
                                        <li>
                                            <InertiaLink :href="route('blog.index')">Blog</InertiaLink>
                                        </li>
                                        <li>
                                            <InertiaLink :href="route('team.index')">Team</InertiaLink>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

