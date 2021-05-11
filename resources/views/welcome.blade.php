@extends('layouts.app')


@section('content')
 <!-- ========================= hero-section-wrapper-1 start ========================= -->
 <section class="hero-section-wrapper-1">
    @include('includes.nav')
    <!-- ========================= hero-1 start ========================= -->
    <div class="hero-section hero-style-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero-content-wrapper">
              <h2 class="mb-3">Hi there, I&rsquo;m Romuel test</h2>
              <h4 class="mb-3">Web Developer</h4>
              <p>Web designer and developer from Manila, Philippines. I create custom websites to help businesses do better online.</p>
                <a href="mailto:johnromuelmendoza@yahoo.com" class="button button-lg radius-50">Say Hello</a>
            </div>
          </div>
          <div class="col-lg-6 align-self-end">
            <div class="hero-image">
              <img src="{{ asset('img/hero/hero-1/programmer.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="shapes">
        <img src="{{ asset('img/hero/hero-1/shape-1.svg') }}" alt="" class="shape shape-1">
        <img src="{{ asset('img/hero/hero-1/shape-2.svg') }}" alt="" class="shape shape-2">
        <img src="{{ asset('img/hero/hero-1/shape-3.svg') }}" alt="" class="shape shape-3">
        <img src="{{ asset('img/hero/hero-1/shape-4.svg') }}" alt="" class="shape shape-4">
      </div>
    </div>
    <!-- ========================= hero-1 end ========================= -->

  </section>

<!-- ========================= about style-2 start ========================= -->
<section id="about" class="about-section about-style-2">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6">
          <div class="about-content-wrapper">
            <div class="section-title mb-40">
              <h3 class="mb-25">About me</h3>
              <p class="mb-3 text-justify">Hello, I&rsquo;m Romuel, a web developer based on Manila, Philippines who enjoys building things live on the internet. I develop exceptional websites and web apps that provide intuitive, pixel perfect user interfaces with clean design and retina ready display.<br><br>
              Shortly after graduating from Marinduque State College, I worked as a designer for one and a half year then shift my career as a web developer. I worked on wide variety of interesting and meaningful projects on daily basis.<br><br>
              Here are a few technologies I've been working with recently</p>
              <div class="row">
                    <div class="col-6">
                        <ul class="custom-list-style">
                            <li>Javascript (ES 6+)</li>
                            <li>Vue.js</li>
                            <li>Laravel (backend)</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="custom-list-style">
                            <li>HTML & CSS</li>
                            <li>SASS</li>
                            <li>Bootsrap 4+</li>
                        </ul>
                    </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="about-image-wrapper">
            <div class="row">
              <div class="col-md-5">
                <div class="left-wrapper">
                  <div class="content-item">
                    {{-- <h4>3 Years Experience</h4> --}}
                  </div>
                  <div class="image-item">
                    <img src="{{ asset('img/about/about-2/about-1.jpg') }}" alt="">
                  </div>
                  <div class="image-item">
                    <img src="{{ asset('img/about/about-2/about-2.jpg') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="right-wrapper">
                  <img src="{{ asset('img/about/about-2/about-3.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= about style-2 end ========================= -->


    <!-- ========================= feature style-2 start ========================= -->
    <section id="feature" class="feature-section feature-style-2">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="row">
                <div class="col-xl-7 col-lg-10 col-md-9">
                <div class="section-title mb-60">
                    <h3 class="mb-15">What I do</h3>
                    <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="single-feature">
                        <div class="icon">
                        <i class="lni lni-display"></i>
                        </div>
                        <div class="content">
                        <h5 class="mb-25">Web Development</h5>
                        <p>Create static/dynamic webpages using HTML, CSS, JS and PHP</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                <div class="single-feature">
                    <div class="icon">
                    <i class="lni lni-world"></i>
                    </div>
                    <div class="content">
                    <h5 class="mb-25">SEO</h5>
                    <p>Optimizing web page content for search engines and users</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="single-feature">
                    <div class="icon">
                    <i class="lni lni-rocket"></i>
                    </div>
                    <div class="content">
                    <h5 class="mb-25">Website Optimization</h5>
                    <p>Improve the performance of your website, further drive more traffic, increase conversions, and grow revenue</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="single-feature">
                    <div class="icon">
                    <i class="lni lni-layout"></i>
                    </div>
                    <div class="content">
                    <h5 class="mb-25">Responsive Web Design</h5>
                    <p>Make website adaptive to any device – be it desktop, mobile, or tablet.</p>
                    </div>
                </div>
                </div>

            </div>

            </div>
        </div>
        </div>
        <div class="feature-img">
        <img src="{{ asset('img/feature/feature-2-1.svg') }}" alt="">
        </div>
    </section>
  <!-- ========================= feature style-2 end ========================= -->

    <!-- ========================= gallery style-1 start ========================= -->
    <section id="gallery" class="gallery-section gallery-style-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h3>Projects</h3>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-1.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-2.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-3.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-6.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-4.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                <div class="single-gallery">
                    <div class="image">
                    <img src="{{ asset('img/gallery/gallery-1/gallery-5.jpg') }}" alt="">
                    </div>
                    <div class="overlay">
                    <div class="overlay-content">
                        <div class="action">
                        <a href="#0"> <i class="lni lni-link"></i> </a>
                        </div>
                        <div class="info">
                        <h5>Web Design</h5>
                        <p>Short description for the ones who look for something new. Awesome!</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#0" class="button button-lg radius-3">View more projects</a>

            </div>
        </div>

    </section>
    <!-- ========================= gallery style-1 end ========================= -->





@endsection
