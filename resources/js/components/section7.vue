<script setup lang="js">
import {onMounted, ref} from "vue";
  import { Swiper as SwiperComponent, SwiperSlide } from 'swiper/vue';
  import Swiper from 'swiper';
  import 'swiper/swiper-bundle.css';
import MarqueeSection from "@/components/marqueeSection.vue";

  const element44 = ref("/assets/images/element/element-44.png");
  const element45 = ref("/assets/images/element/element-45.png");
  const element46 = ref("/assets/images/element/element-46.png");
  const quote = ref("/assets/images/client/quote.png");
  const client1 = ref("/assets/images/client/client-1.png");
  const client2 = ref("/assets/images/client/client-2.png");
  const client3 = ref("/assets/images/client/client-3.png");
</script>

<template>
    <section class="client-section ptb-120">
        <div class="client-element-one">
            <img :src="element44" alt="element">
        </div>
        <div class="client-element-two">
            <img :src="element45" alt="element">
        </div>
        <div class="client-element-three">
            <img :src="element46" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Compliment</h2>
                        <p>Credibly to grow ideas rather than bricks and clicks</p>
                    </div>
                </div>
            </div>
            <div class="client-area">
                <div class="row justify-content-center mb-12-none">
                    <div class="col-xl-12">
                        <div class="client-slider-area">
                            <div class="client-slider">
                                <marquee behavior="scroll" direction="left" scrollamount="10">
                                    <div class="swiper-wrapper">
                                        <!--   slide ke 1 -->
                                        <div class="swiper-slide" style="margin-right: 50px;">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-ratings">
                                                                <span class="ratings">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                    </div>
                                                    <div class="client-quote">
                                                        <img :src="quote" alt="element">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p>A testimonial is effectively a
                                                        review or recommendation from
                                                        a client, letting other people
                                                        know how your products.</p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-user-thumb">
                                                        <img :src="client3" alt="element">
                                                    </div>
                                                    <div class="client-footer-user-content">
                                                        <h6 class="title">Evana Parsia</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="margin-right: 50px;">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-ratings">
                                                                <span class="ratings">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                    </div>
                                                    <div class="client-quote">
                                                        <img :src="quote" alt="element">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p>A testimonial is effectively a
                                                        review or recommendation from
                                                        a client, letting other people
                                                        know how your products.</p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-user-thumb">
                                                        <img :src="client3" alt="element">
                                                    </div>
                                                    <div class="client-footer-user-content">
                                                        <h6 class="title">Evana Parsia</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

