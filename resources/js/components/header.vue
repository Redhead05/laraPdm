<script setup lang="ts">
    import { ref } from 'vue';

    const imagePath = ref("/assets/images/logo-pdm.png");
</script>
<template>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</template>

