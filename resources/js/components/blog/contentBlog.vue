<script setup lang="js">
    import { ref } from 'vue';

    const blog1 = ref("../assets/images/blog/blog-1.png");
    const blog4 = ref("../assets/images/blog/blog-4.png");
    const blog5 = ref("../assets/images/blog/blog-5.png");
    const blog7 = ref("../assets/images/blog/blog-7.png");
    const blog8 = ref("../assets/images/blog/blog-8.png");
    const blog6 = ref("../assets/images/blog/blog-6.png");
    const blog9 = ref("../assets/images/blog/blog-9.png");
    const blog10 = ref("../assets/images/blog/blog-10.png");
    const blog11 = ref("../assets/images/blog/blog-11.png");
</script>

<template>
    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-8 mb-60">
                    <div class="row justify-content-center mb-60-none">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog4" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Many important brands have
                                        given us their trust</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog5" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Guest Profile: Will Thornton, Author of Are We There Yet?</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog6" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">The 13 Real Traffic Safety Questions We Should Be Asking</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog7" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">How to Safely Road-Trip During a Pandemic</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog8" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Seeking Your Input: Thoughts on Driver-Assistance Technology</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog9" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Guest Profile: Nate Wagner of This App Saves Lives (TASL)</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog10" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Why Distracted Driving Campaigns Often Don’t Work</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img :src="blog11" alt="blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-meta">
                                        <span class="user">By : Smith Roy</span>
                                        <span class="date">24th March, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Helping You Be Seen, Safely: Introducing the SafetySock®</a></h3>
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
                                        <img :src="blog1" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
                                        <img :src="blog5" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
                                        <img :src="blog7" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date">24th March, 2022</span>
                                        <h5 class="title"><a href="blog-details.html">What Is Going On In South West London.</a></h5>
                                    </div>
                                </div>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
                                        <img :src="blog4" alt="blog">
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
