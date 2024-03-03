<script setup lang="js">
import {onMounted, ref} from 'vue';
import 'swiper/swiper-bundle.css';
// sec6 import
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

const props = defineProps({
    indexComponent: String,
})


const brand1 = ref("/assets/images/brand/brand-1.png");
const brand2 = ref("/assets/images/brand/brand-2.png");
const brand3 = ref("/assets/images/brand/brand-3.png");


const element23 = ref("/assets/images/element/element-23.png");
const element24 = ref("/assets/images/element/element-24.png");
const element25 = ref("/assets/images/element/element-25.png");
const element26 = ref("/assets/images/element/element-26.png");
const project1 = ref("assets/images/project/project-1.png");
const project2 = ref("assets/images/project/project-2.png");
// sec4
const element34 = ref("/assets/images/element/element-34.png");
const element35 = ref("/assets/images/element/element-35.png");
const element36 = ref("/assets/images/element/element-36.png");
const element37 = ref("/assets/images/element/element-37.png");
const icon3 = ref("/assets/images/icon/icon-3.png");
const icon4 = ref("/assets/images/icon/icon-4.png");
const icon5 = ref("/assets/images/icon/icon-5.png");
const icon6 = ref("/assets/images/icon/icon-6.png");
// sec5
const element39 = ref("/assets/images/element/element-39.png");
const element40 = ref("/assets/images/element/element-40.png");
const element7 = ref("/assets/images/element/element-7.png");
const element41 = ref("/assets/images/element/element-41.png");
const element42 = ref("/assets/images/element/element-42.png");
const element14 = ref("/assets/images/element/element-14.png");
const element15 = ref("/assets/images/element/element-15.png");
const element13 = ref("/assets/images/element/element-13.png");
const element6 = ref("/assets/images/element/element-6.png");
const element16 = ref("/assets/images/element/element-16.png");
const element38 = ref("/assets/images/element/element-38.png");
// sec6
const element43 = ref("/assets/images/element/element-43.png");
const team1 = ref("/assets/images/team/team-1.png");
// sec7
const element44 = ref("/assets/images/element/element-44.png");
const element45 = ref("/assets/images/element/element-45.png");
const element46 = ref("/assets/images/element/element-46.png");
const quote = ref("/assets/images/client/quote.png");
const client3 = ref("/assets/images/client/client-3.png");
// marquee
const element33 = ref("/assets/images/element/element-33.png");

</script>

<template>
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
                    <marquee behavior="scroll" direction="left" loop="-1" scrollamount="10">
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
                                    <h4 class="title"><a :href="route('blog-details.index')">Brand redesign meanwhile <br> focusing product</a></h4>
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
<!--    sec5-->
    <section class="about-section pt-120">
        <div class="about-element-one">
            <!--      <img src="assets/images/element/element-39.png" alt="element">-->
            <img :src="element39" alt="element">
        </div>
        <div class="about-element-two">
            <!--      <img src="assets/images/element/element-40.png" alt="element">-->
            <img :src="element40" alt="element">
        </div>
        <div class="about-element-three">
            <!--      <img src="assets/images/element/element-7.png" alt="element">-->
            <img :src="element7" alt="element">
        </div>
        <div class="about-element-four">
            <!--      <img src="assets/images/element/element-41.png" alt="element">-->
            <img :src="element41" alt="element">
        </div>
        <div class="about-element-five">
            <!--      <img src="assets/images/element/element-42.png" alt="element">-->
            <img :src="element42" alt="element">
        </div>
        <div class="container">
            <div class="about-area three">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img :src="element14" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <!--                  <img src="assets/images/element/element-15.png" alt="element">-->
                                    <img :src="element15" alt="element">
                                </div>
                                <div class="box-element-three">
                                    <!--                  <img src="assets/images/element/element-13.png" alt="element">-->
                                    <img :src="element13" alt="element">
                                </div>
                                <div class="box-element-four">
                                    <!--                  <img src="assets/images/element/element-6.png" alt="element">-->
                                    <img :src="element6" alt="element">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box-element-five">
                                    <!--                  <img src="assets/images/element/element-16.png" alt="element">-->
                                    <img :src="element16" alt="element">
                                </div>
                                <div class="box-element-six">
                                    <!--                  <img src="assets/images/element/element-7.png" alt="element">-->
                                    <img :src="element7" alt="element">
                                </div>
                            </div>
                        </div>
                        <div class="about-thumb">
                            <!--              <img src="assets/images/element/element-38.png" alt="element">-->
                            <img :src="element38" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">Have a project in mind? <span class="text--base">Let's connect</span></h2>
                            <p class="para">We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, & our clients love our work.</p>
                            <p>Welcome To BAN PDM, a software development company, helps to digitize businesses by focusing on client’s business challenges, needs, pain points and providing business-goals-oriented software solutions.</p>
                            <div class="about-btn">
                                <a href="contact.html" class="btn--base">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    end sec5-->
<!--    sec6-->
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="#">Nilkusa Agawal</a></h3>
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
<!--    end sec6-->
    <section class="call-to-action-section pb-120">
        <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
            <img :src="element33" alt="element">
        </div>
        <div class="wrapper demo-text">
            <div class="marquee">
            <span>
                AKREDITASI MUDAH MURAH MENYENANGKAN
            </span>
            </div>
        </div>
    </section>
<!--    sec7-->
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
