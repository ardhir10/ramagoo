@extends('client_pages.layouts.main')

@section('content')
<style>
    .slick-slide img {
        display: block;
        border-radius: 20px;
    }
</style>

<!-- Slider-->
<div class="container">
    <div class="slider-call blog-post blog-slider blog-slider-munfarid-1 mb-50px mb-lg-65px"
        data-slick="{&quot;variableWidth&quot;: true, &quot;infinite&quot;:false, &quot;responsive&quot;: [{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;variableWidth&quot;: false}}] }">
        <article>
            <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/1.jpg" alt="Entry Image">
            </div>
            <div class="entry-content-wrapper shadow">
                <div class="entry-meta-top"><span class="entry-meta-category"><a
                            href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV 11,
                        2020</span></div>
                <h3 class="entry-title"><a href="blog-single-post.html">Genean mattis tortor ac sapien congue modo
                        mgolestie eget</a></h3>
                <div class="entry-content">
                    <p> Oratio pertinax cu vix, id his aliquam habemus tractatos. Eu vis cursus modo officiis
                        liberavisse id invidunt adipiscing cursus has. The tincidunt nun accumsan nec laoreet.</p>
                </div><a class="entry-read-more" href="blog-single-post.html">Read More<i
                        class="fas fa-long-arrow-alt-right ml-1"></i></a>
            </div>
        </article>
        <article>
            <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/2.jpg" alt="Entry Image">
            </div>
            <div class="entry-content-wrapper">
                <div class="entry-meta-top"><span class="entry-meta-category"><a
                            href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV 11,
                        2020</span></div>
                <h3 class="entry-title"><a href="blog-single-post.html">Cursus modo officiis liberavisse congue
                        mgolestied eget</a></h3>
                <div class="entry-content">
                    <p> Oratio pertinax cu vix, id his aliquam habemus tractatos. Eu vis cursus modo officiis
                        liberavisse id invidunt adipiscing cursus has. The tincidunt nun accumsan nec laoreet.</p>
                </div><a class="entry-read-more" href="blog-single-post.html">Read More<i
                        class="fas fa-long-arrow-alt-right ml-1"></i></a>
            </div>
        </article>
        <article>
            <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/3.jpg" alt="Entry Image">
            </div>
            <div class="entry-content-wrapper">
                <div class="entry-meta-top"><span class="entry-meta-category"><a
                            href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV 11,
                        2020</span></div>
                <h3 class="entry-title"><a href="blog-single-post.html">Kenean mattis tortor ac sapien congue
                        mgolestiem eget</a></h3>
                <div class="entry-content">
                    <p> Oratio pertinax cu vix, id his aliquam habemus tractatos. Eu vis cursus modo officiis
                        liberavisse id invidunt adipiscing cursus has. The tincidunt nun accumsan nec laoreet.</p>
                </div><a class="entry-read-more" href="blog-single-post.html">Read More<i
                        class="fas fa-long-arrow-alt-right ml-1"></i></a>
            </div>
        </article>
        <article>
            <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/33.jpg" alt="Entry Image">
            </div>
            <div class="entry-content-wrapper">
                <div class="entry-meta-top"><span class="entry-meta-category"><a
                            href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV 11,
                        2020</span></div>
                <h3 class="entry-title"><a href="blog-single-post.html">Persequeris mattis tortor ac sapien invidunt
                        mgolestieb</a></h3>
                <div class="entry-content">
                    <p> Oratio pertinax cu vix, id his aliquam habemus tractatos. Eu vis cursus modo officiis
                        liberavisse id invidunt adipiscing cursus has. The tincidunt nun accumsan nec laoreet.</p>
                </div><a class="entry-read-more" href="blog-single-post.html">Read More<i
                        class="fas fa-long-arrow-alt-right ml-1"></i></a>
            </div>
        </article>
    </div>
</div>
<!-- End Slider-->

<!-- Latest Posts-->
<div class="container mb-20px">
    <div class="row">
        <div class="col-lg-8 mb-60px">
            <div class="row align-items-center mb-20px">
                <div class="col-md-9">
                    <h4 class="mt-0">Latest Posts</h4>
                </div>
            </div>
            <!-- Blog-->
            <div class="row blog-post">
                <div class="col-md-6 col-lg-6">
                    <article>
                        <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/38.jpg"
                                alt="Entry Image" /></div>
                        <div class="entry-content-wrapper">
                            <div class="entry-meta-top"><span class="entry-meta-category"><a
                                        href="blog-three-col.html">Photography</a></span><span
                                    class="post-meta-date">NOV 11, 2020</span></div>
                            <h5 class="entry-title"><a href="blog-single-post.html">Aenean mattis tortor ac sapien
                                    congue molestie</a></h5>
                            <div class="entry-content">
                                <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet.
                                    Curabitur feugiat posuere odio.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6">
                    <article>
                        <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/37.jpg"
                                alt="Entry Image" /></div>
                        <div class="entry-content-wrapper">
                            <div class="entry-meta-top"><span class="entry-meta-category"><a
                                        href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV
                                    11, 2020</span></div>
                            <h5 class="entry-title"><a href="blog-single-post.html">Etiam commodo eros non erat
                                    tristique congue</a></h5>
                            <div class="entry-content">
                                <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet.
                                    Curabitur feugiat posuere odio.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6">
                    <article>
                        <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/39.jpg"
                                alt="Entry Image" /></div>
                        <div class="entry-content-wrapper">
                            <div class="entry-meta-top"><span class="entry-meta-category"><a
                                        href="https://www.energeticthemes.com/templates/munfarid/blog-three-col.html">Photography</a></span><span
                                    class="post-meta-date">NOV 11, 2020</span></div>
                            <h5 class="entry-title"><a
                                    href="https://www.energeticthemes.com/templates/munfarid/blog-single-post.html">Suspendisse
                                    viverra massa eget nibh ultricies mollis</a></h5>
                            <div class="entry-content">
                                <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet.
                                    Curabitur feugiat posuere odio.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6">
                    <article>
                        <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/39.jpg"
                                alt="Entry Image" /></div>
                        <div class="entry-content-wrapper">
                            <div class="entry-meta-top"><span class="entry-meta-category"><a
                                        href="https://www.energeticthemes.com/templates/munfarid/blog-three-col.html">Humourss</a></span><span
                                    class="post-meta-date">NOV 11, 2020</span></div>
                            <h5 class="entry-title"><a
                                    href="https://www.energeticthemes.com/templates/munfarid/blog-single-post.html">Curabitur
                                    pretium lectusnc ine fermentum fermen</a></h5>
                            <div class="entry-content">
                                <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet.
                                    Curabitur feugiat posuere odio.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- End Blog-->
            <div class="text-center align-items-center"><a class="btn btn-light box-shadow-none" href="#">Load
                    More</a></div>
        </div>
        <div class="col-lg-4">
            <!-- Sidebar-->
            <div class="bg-color-grayflame widget pt-30px pb-30px px-30px">
                <h5 class="widget-title">Categories</h5>
                <ul class="border-list">
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Laravel</a></li>
                    <li><a href="#">Codeigniter</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Tips & Trick</a></li>
                    <li><a href="#">NodeJS</a></li>
                </ul>
            </div>
            <div class="widget">
                <h5 class="widget-title">Instagram</h5>
                <ul class="row xs-gallery-gutters m-0 list-unstyled" id="instagramfeed"></ul>
            </div>
            <!-- End Sidebar-->
        </div>
    </div>
</div>

<!-- News & Trends-->
<div class="container mb-65px">
    <div class="row align-items-center mb-20px">
        <div class="col-md-9">
            <h4>Programming</h4>
        </div>
        <div class="col-md-3">
            <div class="text-right d-none d-md-block"></div>
        </div>
    </div>
    <!-- Blog-->
    <div class="row blog-post">
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/4.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Aenean mattis tortor ac sapien congue
                            molestie</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/5.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV 11,
                            2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/6.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- End Blog-->
    <div class="text-center align-items-center"><a class="btn btn-light box-shadow-none" href="#">Load More</a>
    </div>
</div>


<!-- Travel & Food-->
<div class="container mb-65px">
    <div class="row align-items-center mb-20px">
        <div class="col-md-9">
            <h4>Travel & Food</h4>
        </div>
    </div>
    <!-- Blog-->
    <div class="row blog-post">
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/34.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Aenean mattis tortor ac sapien congue
                            molestie</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/35.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV 11,
                            2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/36.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                    <h5 class="entry-title"><a href="blog-single-post.html">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur
                            feugiat posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- End Blog-->
    <div class="text-center align-items-center"><a class="btn btn-light box-shadow-none" href="#">Load More</a>
    </div>
</div>





<!-- Innovation & Tech-->
<div class="container mb-65px">
    <div class="row align-items-center mb-20px">
        <div class="col-md-9">
            <h4>Innovation & Tech</h4>
        </div>
    </div>
    <!-- Blog-->
    <div class="row blog-post blog-list-style">
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/19.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Aenean mattisg tortor act sapen congue
                            molestie</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/20.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Pellentesque ipsum erose none tristique
                            congue</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV 11,
                            2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/21.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/22.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Curabitur pretium lectusnc ine fermentum
                            fermen</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/23.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV 11,
                            2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/24.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Pellentesque ipsum magna eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/25.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Aenean mattis tortor ac sapien congue
                            molestie</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/26.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Humour</a></span><span class="post-meta-date">NOV 11,
                            2020</span></div>
                </div>
            </article>
        </div>
        <div class="col-md-6 col-lg-4">
            <article>
                <div class="entry-media"><img src="{{url('assets_client/')}}/images/home-1/27.jpg" alt="Entry Image" />
                </div>
                <div class="entry-content-wrapper">
                    <h5 class="entry-title"><a href="blog-single-post.html">Pellentesque ipsum magna neu ultrices
                            vitae rutrum</a></h5>
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="blog-three-col.html">Photography</a></span><span class="post-meta-date">NOV
                            11, 2020</span></div>
                </div>
            </article>
        </div>
    </div>
    <!-- End Blog-->
    <div class="text-center align-items-center mt-30px"><a class="btn btn-light box-shadow-none" href="#">Load
            More</a></div>
</div>



@endsection
