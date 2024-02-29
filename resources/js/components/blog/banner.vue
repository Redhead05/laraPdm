<script setup lang="js">
  import {ref} from "vue";

  const imageElement5 = ref("../assets/images/element/element-5.png");
  const imageElement7 = ref("../assets/images/element/element-7.png");
  const imageElement6 = ref("../assets/images/element/element-6.png");
  const imageElement69 = ref("../assets/images/element/element-69.png");
  const imageElement70 = ref("../assets/images/element/element-70.png");
</script>

<template>
  <section class="banner-section two inner">
    <div class="banner-element-four two">
<!--      <img src="assets/images/element/element-5.png" alt="element">-->
      <img :src="imageElement5" alt="element">
    </div>
    <div class="banner-element-five two">
<!--      <img src="assets/images/element/element-7.png" alt="element">-->
      <img :src="imageElement7" alt="element">
    </div>
    <div class="banner-element-nineteen two">
<!--      <img src="assets/images/element/element-6.png" alt="element">-->
      <img :src="imageElement6" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
<!--      <img src="assets/images/element/element-69.png" alt="element">-->
      <img :src="imageElement69" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
<!--      <img src="assets/images/element/element-70.png" alt="element">-->
      <img :src="imageElement70" alt="element">
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center mb-30-none">
        <div class="col-xl-12 mb-30">
          <div class="banner-content two">
            <div class="banner-content-header">
              <h2 class="title">Blog</h2>
              <div class="breadcrumb-area">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
