<script setup lang="js">
import {onMounted, ref} from "vue";
import { Swiper as SwiperComponent, SwiperSlide } from 'swiper/vue';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';


  let swiper = null;

  onMounted(() => {
      swiper = new Swiper('.team-slider', {
          slidesPerView: 4,
          spaceBetween: 10, // Optional, add some space between slides
          // ... other options
      });
  });


  const element43 = ref("/assets/images/element/element-43.png");
  const team1 = ref("/assets/images/team/team-1.png");
  const team2 = ref("/assets/images/team/team-2.png");
  const team3 = ref("/assets/images/team/team-3.png");
</script>

<template>
  <section class="team-section ptb-130">
    <div class="team-element">
      <img :src="element43" alt="element">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section-header-wrapper">
            <div class="section-header">
              <h2 class="section-title">BAN PDM Expert Team</h2>
              <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, and our clients love our work.</p>
            </div>
            <div class="slider-nav-area">
              <div class="slider-prev">
                <i class="fas fa-chevron-left"></i>
              </div>
              <div class="slider-next">
                <i class="fas fa-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-10-none">
        <div class="col-xl-12">
          <div class="team-slider-area">
            <div class="team-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="team-item">
                    <div class="team-thumb">
                      <img :src="team1" alt="element">
                      <div class="team-social-area">
                        <ul class="team-social">
                          <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                          <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-content">
                      <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                      <span class="sub-title">Sr. Marketer</span>
                    </div>
                  </div>
                </div>
<!--                  gambar ke 2-->
                  <div class="swiper-slide">
                      <div class="team-item">
                          <div class="team-thumb">
                              <img :src="team1" alt="element">
                              <div class="team-social-area">
                                  <ul class="team-social">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="team-content">
                              <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                              <span class="sub-title">Sr. Marketer</span>
                          </div>
                      </div>
                  </div>
<!--                  end gambar 2-->
                  <!--                  gambar ke 2-->
                  <div class="swiper-slide">
                      <div class="team-item">
                          <div class="team-thumb">
                              <img :src="team1" alt="element">
                              <div class="team-social-area">
                                  <ul class="team-social">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="team-content">
                              <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                              <span class="sub-title">Sr. Marketer</span>
                          </div>
                      </div>
                  </div>
                  <!--                  end gambar 2-->
                  <!--                  gambar ke 2-->
                  <div class="swiper-slide">
                      <div class="team-item">
                          <div class="team-thumb">
                              <img :src="team1" alt="element">
                              <div class="team-social-area">
                                  <ul class="team-social">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="team-content">
                              <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                              <span class="sub-title">Sr. Marketer</span>
                          </div>
                      </div>
                  </div>
                  <!--                  end gambar 2-->
                  <!--                  gambar ke 2-->
                  <div class="swiper-slide">
                      <div class="team-item">
                          <div class="team-thumb">
                              <img :src="team1" alt="element">
                              <div class="team-social-area">
                                  <ul class="team-social">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="team-content">
                              <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                              <span class="sub-title">Sr. Marketer</span>
                          </div>
                      </div>
                  </div>
                  <!--                  end gambar 2-->
                  <!--                  gambar ke 2-->
                  <div class="swiper-slide">
                      <div class="team-item">
                          <div class="team-thumb">
                              <img :src="team1" alt="element">
                              <div class="team-social-area">
                                  <ul class="team-social">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="team-content">
                              <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                              <span class="sub-title">Sr. Marketer</span>
                          </div>
                      </div>
                  </div>
                  <!--                  end gambar 2-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

