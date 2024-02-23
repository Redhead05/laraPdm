<script setup lang="js">
import { ref } from 'vue';


const brand1 = ref("/assets/images/brand/brand-1.png");
const brand2 = ref("/assets/images/brand/brand-2.png");
const brand3 = ref("/assets/images/brand/brand-3.png");
const brand4 = ref("/assets/images/brand/brand-4.png");
</script>

<template>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

  <div class="brand-section oh ptb-120">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-8 text-center">
        <div class="section-header">
          <h2 class="section-title">Our Partner</h2>
          <p>We Happy Having This Partner</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <div class="brand-slider-area">
            <div class="brand-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="brand-item">
                    <img :src="brand1" alt="brand">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="brand-item">
                    <img :src="brand2" alt="brand">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="brand-item">
                    <img :src="brand3" alt="brand">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="brand-item">
                    <img :src="brand4" alt="brand">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      End Brand
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</template>
