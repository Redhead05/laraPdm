<script>
import HeaderComponent from '../components/header.vue';
import PageLoaderComponent from "../components/PageLoader.vue";
import BannerSectionComponent from "../components/BannerSection.vue";
import section2Component from "../components/section2.vue";
import section3Component from "../components/section3.vue";
import marqueeSectionComponent from "../components/marqueeSection.vue";
import section4Component from "../components/section4.vue";
import section5Component from "../components/section5.vue";
import section6Component from "../components/section6.vue";
import section7Component from "../components/section7.vue";
import footerComponent from "../components/footer.vue";

export default {
    components: {
      'BannerSection': BannerSectionComponent,
      'PageLoader': PageLoaderComponent,
      'header-component': HeaderComponent,
      'section2Component': section2Component,
      'section3Component': section3Component,
      'marqueeSectionComponent': marqueeSectionComponent,
      'section4Component': section4Component,
      'section5Component': section5Component,
      'section6Component': section6Component,
      'section7Component': section7Component,
      'footer-component': footerComponent,
    },
}
</script>

<template>
    <header-component></header-component>
<!--        <page-loader></page-loader>-->
    <banner-section></banner-section>
    <section2Component></section2Component>
    <section3Component></section3Component>
    <marqueeSectionComponent></marqueeSectionComponent>
    <section4Component></section4Component>
    <section5Component></section5Component>
    <section6Component></section6Component>
    <section7Component></section7Component>
    <footer-component></footer-component>
</template>

