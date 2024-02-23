<script setup lang="js">
import {ref} from "vue";

const element34 = ref("/assets/images/element/element-34.png");
const element35 = ref("/assets/images/element/element-35.png");
const element36 = ref("/assets/images/element/element-36.png");
const element37 = ref("/assets/images/element/element-37.png");
const icon3 = ref("/assets/images/icon/icon-3.png");
const icon4 = ref("/assets/images/icon/icon-4.png");
const icon5 = ref("/assets/images/icon/icon-5.png");
const icon6 = ref("/assets/images/icon/icon-6.png");
</script>

<template>
  <section class="service-section ptb-120">
    <div class="service-element-one">
      <img :src="element34" alt="element">
    </div>
    <div class="service-element-two">
      <img :src="element35" alt="element">
    </div>
    <div class="service-element-three">
      <img :src="element36" alt="element">
    </div>
    <div class="service-element-four">
      <img :src="element36" alt="element">
    </div>
    <div class="service-element-five">
      <img :src="element37" alt="element">
    </div>
    <div class="service-shape shape-1"></div>
    <div class="service-shape shape-2"></div>
    <div class="service-shape shape-3"></div>
    <div class="service-shape shape-4"></div>
    <div class="service-shape shape-5"></div>
    <div class="service-shape shape-6"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-header-wrapper">
            <div class="section-header white">
              <h2 class="section-title">OUR STEP</h2>
              <p>bring you to get fast easy assessment and join </p>
            </div>
            <div class="section-header-btn">
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-30-none">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
          <div class="service-item">
            <div class="service-icon">
              <img :src="icon3" alt="element">
            </div>
            <div class="service-content">
              <h3 class="title"><a href="service-details.html">Sispena</a></h3>
              <p>Join to our sispena and login with NPSN</p>
              <div class="service-btn">
                <a href="service-details.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
          <div class="service-item">
            <div class="service-icon">
              <img :src="icon4" alt="element">
            </div>
            <div class="service-content">
              <h3 class="title"><a href="service-details.html">KPA</a></h3>
              <p>We're assesment your submission from sispena</p>
              <div class="service-btn">
                <a href="service-details.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
          <div class="service-item">
            <div class="service-icon">
              <img :src="icon5" alt="element">
            </div>
            <div class="service-content">
              <h3 class="title"><a href="service-details.html">VISITASI</a></h3>
              <p>We're Visit to your institusion and continue check from your submission</p>
              <div class="service-btn">
                <a href="service-details.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
          <div class="service-item">
            <div class="service-icon">
              <img :src="icon6" alt="element">
            </div>
            <div class="service-content">
              <h3 class="title"><a href="service-details.html">VALIDASI</a></h3>
              <p>Wer'e validastion again every step from KPA AND VISITASI </p>
              <div class="service-btn">
                <a href="service-details.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
