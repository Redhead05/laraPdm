<script setup lang="js">
    import {ref} from "vue";
    import HeaderComponent from "@components/header.vue";
    import footerComponent from "@components/footer.vue";

    const t1 = ref("../assets/images/team/team-1.png");
    const t2 = ref("../assets/images/team/team-2.png");
    const t4 = ref("../assets/images/team/team-4.png");
    const t5 = ref("../assets/images/team/team-5.png");
    const t6 = ref("../assets/images/team/team-6.png");
    const t7 = ref("../assets/images/team/team-7.png");
    const t8 = ref("../assets/images/team/team-8.png");
    const t9 = ref("../assets/images/team/team-9.png");
    const t10 = ref("../assets/images/team/team-10.png");

    const components = {
        'header-component': HeaderComponent,
        'footer-component': footerComponent,
    };
</script>

<template>
    <header-component></header-component>
    <section class="team-section three ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-65-none">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-4.png" alt="team">-->
                            <img :src="t4" alt="brand">
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-5.png" alt="team">-->
                            <img :src="t5" alt="brand">
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
                            <h3 class="title"><a href="#">Abhisek Roy</a></h3>
                            <span class="sub-title">Business Analyst</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-6.png" alt="team">-->
                            <img :src="t6" alt="brand">
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
                            <h3 class="title"><a href="#">Rashmika Mandana</a></h3>
                            <span class="sub-title">Web developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-7.png" alt="team">-->
                            <img :src="t7" alt="brand">
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
                            <h3 class="title"><a href="#">Kazal Agarwal</a></h3>
                            <span class="sub-title">Sr. Marketer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-8.png" alt="team">-->
                            <img :src="t8" alt="brand">
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
                            <h3 class="title"><a href="#">Amitav Bachchan</a></h3>
                            <span class="sub-title">React Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-2.png" alt="team">-->
                            <img :src="t2" alt="brand">
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
                            <h3 class="title"><a href="#">Jhon Sina Smith</a></h3>
                            <span class="sub-title">Sr. Marketer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-1.png" alt="team">-->
                            <img :src="t1" alt="brand">
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
                            <h3 class="title"><a href="#">Rahul Gandhi</a></h3>
                            <span class="sub-title">Digital Marketer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-9.png" alt="team">-->
                            <img :src="t9" alt="brand">
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
                            <h3 class="title"><a href="#">Sonia Gandhi</a></h3>
                            <span class="sub-title">QA Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="team-item">
                        <div class="team-thumb">
<!--                            <img src="assets/images/team/team-10.png" alt="team">-->
                            <img :src="t10" alt="brand">
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
                            <h3 class="title"><a href="#">Hina Rabbani Khar</a></h3>
                            <span class="sub-title">UX/UI Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer-component></footer-component>
</template>
