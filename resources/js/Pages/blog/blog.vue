<script setup lang="js">
import { defineProps } from 'vue';
import HeaderComponent from '../../components/header.vue';
import footerComponent from "../../components/footer.vue";
import BannerComponent from "../../components/blog/banner.vue";

const components = {
    'header-component': HeaderComponent,
    'footer-component': footerComponent,
    'BannerComponent': BannerComponent,
};
const props = defineProps({
    routes:{
        type: Object,
        required:true
    }
});
</script>

<template>
    <header-component
        :routes="props.routes"
    ></header-component>
    <BannerComponent></BannerComponent>
    <footer-component></footer-component>
</template>
