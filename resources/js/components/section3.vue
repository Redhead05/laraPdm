<script setup lang="js">
import {ref} from "vue";
// import blogDetails from "@/Pages/blog/detailsBlog.vue";

const props = defineProps({
    routes: Object,
    blogRoute: String,
    blogDetailsRoute: String,
})

const element23 = ref("/assets/images/element/element-23.png");
const element24 = ref("/assets/images/element/element-24.png");
const element25 = ref("/assets/images/element/element-25.png");
const element26 = ref("/assets/images/element/element-26.png");
const project1 = ref("assets/images/project/project-1.png");
const project2 = ref("assets/images/project/project-2.png");

</script>
<template>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Project
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <section class="project-section pb-120">
    <div class="project-element-one">
      <img :src="element23" alt="element">
    </div>
    <div class="project-element-two">
      <img :src="element24" alt="element">
    </div>
    <div class="project-element-three">
      <img :src="element25" alt="element">
    </div>
    <div class="project-element-four">
      <img :src="element26" alt="element">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-header-wrapper">
            <div class="section-header">
              <h2 class="section-title">Blog</h2>
              <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed for stand-alone web-readiness.</p>
            </div>
            <div class="section-header-btn">
                <a :href="blogRoute" class="custom-btn">View All Blog <i class="icon-Group-2361 ml-2"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="project-item-wrapper">
        <div class="row justify-content-center mb-30-none">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
            <div class="project-item">
              <div class="project-thumb">
                <img :src="project1" alt="project">
              </div>
              <div class="project-overlay">
                <div class="overlay-content">
                    <h4 class="title"><a :href="blogDetailsRoute">Brand redesign meanwhile <br> focusing product</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
            <div class="project-item">
              <div class="project-thumb">
                <img :src="project2" alt="project">
              </div>
              <div class="project-overlay">
                <div class="overlay-content">
                    <h4 class="title"><a :href="blogDetailsRoute">Were Testing <br> focusing product</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
