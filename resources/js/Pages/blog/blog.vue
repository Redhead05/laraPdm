<script setup lang="js">
import HeaderComponent from '@components/header.vue';
import footerComponent from "@components/footer.vue";
import BannerComponent from "@components/blog/banner.vue";
import BlogComponent from "@components/blog/blog.vue";

const components = {
    'header-component': HeaderComponent,
    'footer-component': footerComponent,
    'BannerComponent': BannerComponent,
    'BlogComponent': BlogComponent
};

</script>

<template>
    <header-component></header-component>
    <BannerComponent></BannerComponent>
    <BlogComponent></BlogComponent>
    <footer-component></footer-component>
</template>
