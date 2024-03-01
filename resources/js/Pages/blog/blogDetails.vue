<script setup lang="js">
    import HeaderComponent from '../../components/header.vue';
    import footerComponent from "../../components/footer.vue";
    import {defineProps} from "vue";

const components = {
    'header-component': HeaderComponent,
    'footer-component': footerComponent,
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

    <footer-component></footer-component>
</template>
