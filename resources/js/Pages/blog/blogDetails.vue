<script setup lang="js">
import { defineProps } from 'vue';
import HeaderComponent from "@components/header.vue";
import BannerComponent from "@components/blog/bannerBlogDetails.vue";
import detailBlogComponent from "@components/blog/detailsBlog.vue";
import footerComponent from "@components/footer.vue";

const components = {
    'header-component': HeaderComponent,
    'BannerComponent': BannerComponent,
    'contentBlogComponent': detailBlogComponent,
    'footer-component': footerComponent,
};


</script>

<template>
    <header-component></header-component>
    <BannerComponent></BannerComponent>
    <detailBlogComponent></detailBlogComponent>
    <footer-component></footer-component>
</template>
