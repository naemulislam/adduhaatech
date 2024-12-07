@extends('forntend.layouts.master')
@section('title', 'Adduhaa Tech')
@section('content')
<style>
 
</style>
  <!--start slider area-->
@include('forntend.layouts.include.slider')
<!--end slider area-->
<!-- Core Values Section -->
<section class="my-3" style="background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our Core Values</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="core-value">
                            <h5>Integrity</h5>
                            <p>We uphold the highest standards of honesty and ethics, ensuring trust and transparency in
                                every project.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="core-value">
                            <h5>Innovation</h5>
                            <p>We embrace creativity and continuously explore new technologies to deliver cutting-edge
                                solutions.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="core-value">
                            <h5>Customer Success</h5>
                            <p>Our priority is our clients' satisfaction, and we go above and beyond to achieve it through
                                exceptional service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--start Banner section-->
<section id="particles-js" class="home-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="banner-box">
                    <div class="slowgan-box">
                        <span>We Build Outstanding Digital Products For Innovative Brands</span>
                    </div>
                    <h4>Looking for the best software development company online? We build amazing Web & eCommerce solutions, Custom software for Accounts, UI/UX design, mobile app development, HRM & more</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner section-->
<section id="about-us">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text Section -->
            <div class="col-lg-6 mb-3">
                <div class="about-us-content">
                    <h2>About Adduhaatech</h2>
                    <p>
                        Adduhaatech is a technology-driven company focused on delivering cutting-edge solutions in web development,
                        mobile apps, and digital marketing. We strive to innovate and stay at the forefront of the latest industry trends.
                    </p>
                    <a href="{{ route('front.aboutUs') }}" class="btn learn-more-btn">Learn More</a>
                </div>
            </div>
            <!-- Right Side: Image Section -->
            <div class="col-lg-6">
                <div class="about-us-image">
                    <img src="{{asset('frontend/assets/images/about-img.jpeg')}}" alt="About Us Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!--start what we do section-->
<section class="service-section clearfix pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our Service</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-desktop"></i>
                    <h5>Web Design and Development</h5>
                    <p>We are extreme for <strong>web design and development</strong> by following latest technology.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-mobile"></i>
                    <h5>Mobile Application Development</h5>
                    <p><strong>Windows and Android Apps</strong> for progression of any business by using latest technology.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-search"></i>
                    <h5>Search Engine Optimization</h5>
                    <p><strong>SEO</strong> improve the website visitors as well as the sales and business to the company.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-shopping-bag"></i>
                    <h5>Digital Marketing</h5>
                    <p>We promote products by doing <strong>Digital Marketing.</strong> Digital Marketing increase business.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-globe"></i>
                    <h5>Domain Registration</h5>
                    <p>We’d love to be your new <strong>domain registrar.</strong> You can buy domain name at lowest price.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-server"></i>
                    <h5>Web Hosting</h5>
                    <p>Powerful <strong>Web Hosting</strong> Easy to use Control Panel. Expert hosting support available 24.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-server"></i>
                    <h5>UI/UX Design</h5>
                    <p>Transform your digital presence with Ad-Duhaatech expert UI/UX design services, delivering intuitive and engaging user experiences.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-server"></i>
                    <h5>Graphic Design</h5>
                    <p>Transform your digital presence with Ad-Duhaatech expert UI/UX design services, delivering intuitive and engaging user experiences.</p>
                    <a href="#" class="btn">Read more..</a>
                    <div class="service-overly"></div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-setting"></i>
                    <h5>Custom Software Development</h5>
                    <a href="#" class="btn btn-success">Submit Request</a>
                    <div class="service-overly"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end what we do section-->
<!--start satisfictions section-->
<section class="satisfications-section py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our Satisfictions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laborum dolores amet nostrum obcaecati maiores</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="500">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Years online</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="350">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Uniqe Items</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="300">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Item Sold</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="100">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Happt Clients</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="200">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Happt Clients</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 mb-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-3">
                        <i class="fa fa-superpowers"></i>
                        <h5 class="counter" data-target="800">0</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Happt Clients</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--end satisfictions section-->

<!--start project list section-->
<section class="project-list-secton clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our Projects List</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="project-gallery mt-1">
        <div class="container">
            <div class="row  project-images parent-container">
                <div class="col-md-4 mix">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_4.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_4.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mix three">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_5.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_5.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mix one two">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_6.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_6.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mix one three">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_7.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_7.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mix one two">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_9.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_9.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mix two three">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="{{asset('frontend/assets/images/project-img/Page_4.jpg')}}" alt="">
                        </div>
                        <div class="r-txt">
                            <a class="view-image" href="{{asset('frontend/assets/images/project-img/Page_4.jpg')}}"><i class="fa fa-expand"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="pro-name p-3 text-center">
                            <h5>Overall Private LTD</h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="project-list-btn mt-3 text-center">
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end project list section-->
@endsection
@push('scripts')
<script>
    (function() {
            var $gallery = new SimpleLightbox('.project-images .view-image', {});
        })();
</script>
<script>
    // Counter Animation
    const counters = document.querySelectorAll(".counter");
    counters.forEach((counter) => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / 200; // Speed of count

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  </script>
@endpush
