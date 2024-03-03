<script setup lang="js">
import HeaderComponent from "@components/header.vue";
import PageLoaderComponent from "@components/PageLoader.vue";
import indexComponent from "@components/indexComponent.vue";import footerComponent from "@components/footer.vue";
import BannerSectionComponent from "@components/BannerSection.vue";

const components = {
    'BannerSectionComponent': BannerSectionComponent,
    'PageLoader': PageLoaderComponent,
    'header-component': HeaderComponent,
    'indexComponent': indexComponent,    'footer-component': footerComponent,
};

</script>

<template>
    <header-component></header-component>
    <!--        <page-loader></page-loader>-->
    <BannerSectionComponent></BannerSectionComponent>
    <indexComponent></indexComponent>
    <footer-component></footer-component>
</template>
