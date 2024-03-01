<script setup="js">
import { ref } from 'vue';

const bb1 = ref("../assets/images/blog/blog-big-1.png");
const bb2 = ref("../assets/images/blog/blog-big-2.png");
const bb3 = ref("../assets/images/blog/blog-big-3.png");
const b5 = ref("../assets/images/blog/blog-5.png");
const b7 = ref("../assets/images/blog/blog-7.png");
const b4 = ref("../assets/images/blog/blog-4.png");
const b1 = ref("../assets/images/blog/blog-1.png");

const props = defineProps({
    routes: Object,
    blogRoute: String,
    blogDetails: String,
})
</script>

<template>
    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-8 mb-60">
                    <div class="row justify-content-center mb-60-none">
                        <div class="col-xl-12 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
<!--                                    <img src="assets/images/blog/blog-big-1.png" alt="blog">-->
                                    <img :src="bb1" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="category two">24th March, 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Many important brands have given us their trust</a></h3>
                                    <p>Integer dis ads se purus sollicitudin dapibus et vivamus pharetra sit integer dictum in dise natoque an mus quis in.</p>
                                    <div class="blog-btn">
                                        <a href="blog-details.html" class="custom-btn">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
<!--                                    <img src="assets/images/blog/blog-big-2.png" alt="blog">-->
                                    <img :src="bb2" alt="blog">
                                    <div class="blog-classic-video">
                                        <div class="video-main">
                                            <a class="video-icon video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/6zsr22OeF2I">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="category two">24th March, 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Guest Profile: Will Thornton, Author of Are We There Yet?</a></h3>
                                    <p>Integer dis ads se purus sollicitudin dapibus et vivamus pharetra sit integer dictum in dise natoque an mus quis in.</p>
                                    <div class="blog-btn">
                                        <a href="blog-details.html" class="custom-btn">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
<!--                                    <img src="assets/images/blog/blog-big-3.png" alt="blog">-->
                                    <img :src="bb3" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="category two">24th March, 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">The 13 Real Traffic Safety Questions We Should Be Asking</a></h3>
                                    <p>Integer dis ads se purus sollicitudin dapibus et vivamus pharetra sit integer dictum in dise natoque an mus quis in.</p>
                                    <div class="blog-btn">
                                        <a href="blog-details.html" class="custom-btn">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-60">
                    <div class="sidebar">
                        <div class="widget-box mb-30">
                            <h4 class="widget-title">Search</h4>
                            <div class="search-widget-box">
                                <form class="search-form">
                                    <input type="text" name="search" class="form--control" placeholder="Search">
                                    <button type="submit"><i class="icon-Search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widget-box mb-30">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="popular-widget-box">
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
<!--                                        <img src="assets/images/blog/blog-1.png" alt="blog">-->
                                        <img :src="b1" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
<!--                                        <img src="assets/images/blog/blog-5.png" alt="blog">-->
                                        <img :src="b5" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
<!--                                        <img src="assets/images/blog/blog-7.png" alt="blog">-->
                                        <img :src="b7" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
<!--                                        <img src="assets/images/blog/blog-4.png" alt="blog">-->
                                        <img :src="b4" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-box mb-30">
                            <h4 class="widget-title">Categories</h4>
                            <div class="category-widget-box">
                                <ul class="category-list">
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Strategy <span>5</span></a></li>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Stock Investment <span>1</span></a></li>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-box">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tag-widget-box">
                                <ul class="tag-list">
                                    <li><a href="#0">infobpn</a></li>
                                    <li><a href="#0">driver</a></li>
                                    <li><a href="#0">newdriver</a></li>
                                    <li><a href="#0">Gallery</a></li>
                                    <li><a href="#0">manual</a></li>
                                    <li><a href="#0">Office</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item prev">
                        <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                    <li class="page-item next">
                        <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</template>
