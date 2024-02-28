<script setup lang="js">
import {onMounted, ref} from 'vue';
import 'swiper/swiper-bundle.css';



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
                  <marquee behavior="scroll" direction="left" loop="-1">
                      <div class="brand-item" style="display: inline-block; margin-right: 20px;">
                          <img :src="brand1" alt="brand">
                      </div>
                      <div class="brand-item" style="display: inline-block; margin-right: 20px;">
                          <img :src="brand2" alt="brand">
                      </div>
                      <div class="brand-item" style="display: inline-block; margin-right: 20px;">
                          <img :src="brand3" alt="brand">
                      </div>
                  </marquee>
              </div>
          </div>
      </div>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      End Brand
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</template>
