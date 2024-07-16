@extends('forntend.layouts.master')
@section('title', 'Adduhaa Tech')
@section('content')
  <!--start slider area-->
@include('forntend.layouts.include.slider')
<!--end slider area-->

<!--start Banner section-->
<section id="particles-js" class="home-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="banner-box">
                    <h1>We Build Outstanding Digital Products For Innovative Brands</h1>
                    <h4>Looking for the best software development company online? We build amazing Web & eCommerce solutions, Custom software for Accounts, UI/UX design, mobile app development, HRM & more</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner section-->
<!--start what we do section-->
<section class="what-we-do clearfix pt-5 pb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our Service</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-desktop"></i>
                    <h5>Web Design and Development</h5>
                    <p>We are extreme for <strong>web design and development</strong> by following latest technology.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-mobile"></i>
                    <h5>Mobile Application Development</h5>
                    <p><strong>Windows and Android Apps</strong> for progression of any business by using latest technology.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-search"></i>
                    <h5>Search Engine Optimization</h5>
                    <p><strong>SEO</strong> improve the website visitors as well as the sales and business to the company.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-shopping-bag"></i>
                    <h5>Digital Marketing</h5>
                    <p>We promote products by doing <strong>Digital Marketing.</strong> Digital Marketing increase business.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-globe"></i>
                    <h5>Domain Registration</h5>
                    <p>We’d love to be your new <strong>domain registrar.</strong> You can buy domain name at lowest price.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box wow animate__animated animate__fadeInUp text-center">
                    <i class="fa fa-server"></i>
                    <h5>Web Hosting</h5>
                    <p>Powerful <strong>Web Hosting</strong> Easy to use Control Panel. Expert hosting support available 24.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end what we do section-->
<!--start satisfictions section-->
<section class="satisfications-section clearfix py-5">
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
            <div class="col-sm-2 col-md-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-2">
                        <i class="fa fa-calendar td"></i>
                        <h5>8+</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Years online</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-2">
                        <i class="fa fa-code td"></i>
                        <h5>500+</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Uniqe Items</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-2">
                        <i class="fa fa-shopping-cart td"></i>
                        <h5>7400+</h5>
                    </div>
                    <div class="sf-txt-box">
                        <h5>Item Sold</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="sf-box text-center wow animate__animated animate__fadeInUp ">
                    <div class="sf-icon-box mb-2">
                        <i class="fa fa-users td"></i>
                        <h5>5800+</h5>
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
                    <h2>Our Project List</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="control-btn text-center mb-4">
                    <button type="button" data-filter="all">All Project</button>
                    <button type="button" data-filter=".one">Web Design</button>
                    <button type="button" data-filter=".two">Web Development</button>
                    <button type="button" data-filter=".three">Graphics Design</button>
                </div>
            </div>
        </div>
    </div>

    <div class="project-gallery mt-1">
        <div class="container">
            <div class="row  mixit-js parent-container">
                <div class="col-md-4 mix">
                    <div class="r-box  wow animate__animated animate__fadeInUp">
                        <div class="r-image">
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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
                            <img class="" src="img/softparkit-home.jpg" alt="">
                        </div>
                        <div class="r-txt">
                            <a href="img/softparkit-home.jpg"><i class="fa fa-expand"></i></a>
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

<!--start brands section-->
<section class="brands-section py-4 clearfix">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>The Brands That Trustus</h2>
                    <p>We proud to working National and Global brands- Small medium and large company.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/National-Institute-of-Cancer-Hospital.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Bangladesh-Army.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Dhaka-Eye-care-Hospital.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Protechno-Group.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/sky-hope-ltd-1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Luggage-Express.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/SB-Group.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/priority-Consultancy.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Fatullah-Fabrics.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/Cebe-Tech.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/bgmi-1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="brands-box wow animate__animated animate__fadeInUp">
                    <img src="img/MM-Travel.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
<!--e-->
@endsection
