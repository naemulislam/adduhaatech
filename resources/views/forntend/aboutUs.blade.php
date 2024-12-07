@extends('forntend.layouts.master')
@section('title', 'About Us')
@section('content')
    <section>
        <div class="container mt-5">
            <!-- About Us Section -->
            <div class="about-section text-center py-5">
                <h1>About Us</h1>
                <p class="lead">Welcome to Adduhaatech LTD, where innovation meets excellence.</p>
                <p>Our mission is to empower businesses with cutting-edge technology solutions that drive success. We are
                    committed to delivering exceptional service, fostering growth, and transforming visions into reality.
                </p>
            </div>

            <!-- Core Values Section -->
            <div class="values-section py-5" style="background: #fff;">
                <h2 class="text-center mb-4">Our Core Values</h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Integrity</h5>
                            <p>We uphold the highest standards of honesty and ethics, ensuring trust and transparency in
                                every project.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Innovation</h5>
                            <p>We embrace creativity and continuously explore new technologies to deliver cutting-edge
                                solutions.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Customer Success</h5>
                            <p>Our priority is our clients' satisfaction, and we go above and beyond to achieve it through
                                exceptional service.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Collaboration</h5>
                            <p>We believe in teamwork and building strong partnerships with our clients and within our
                                organization.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Excellence</h5>
                            <p>We strive for perfection in every task, ensuring the highest quality of work and results.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Adaptability</h5>
                            <p>We stay agile and responsive to changing market demands and technological advancements.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Responsibility</h5>
                            <p>We take ownership of our work and its impact, ensuring accountability in all aspects of our
                                business.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Continuous Learning</h5>
                            <p>We encourage growth through education, training, and staying updated on industry trends.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="core-value">
                            <h5>Social Impact</h5>
                            <p>We are committed to contributing positively to our community and making a difference through
                                technology.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="director-section my-3">
                <h2 class="text-center mb-4">Board of Directors</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="director-box">
                            <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Engr Md. Naemul Islam</h3>
                                <p class="post">Managing Director</p>
                                <span><a href="mailto://engr.naemulislam@gmail.com"><i class="fa fa-envelope"></i> engr.naemulislam@gmail.com</a></span>
                                <p>"At Adduhaatech, our mission is to innovate, inspire, and deliver excellence in every project we undertake. We are committed to empowering businesses through cutting-edge technology and fostering a culture of trust, integrity, and collaboration. Thank you for choosing us as your trusted partner on this journey toward success."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="director-box">
                            <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Engr Md. Jahid Gazi</h3>
                                <p class="post">CEO (Chief Executive Officer)</p>
                                <span><a href="mailto://ceo_jahid@adduhaatech.com"><i class="fa fa-envelope"></i> ceo_jahid@adduhaatech.com</a></span>
                                <p>Welcome to Adduhaatech. Our vision is to drive innovation, create impactful solutions, and transform ideas into reality. With a dedicated team and a commitment to excellence, we aim to exceed expectations and build lasting partnerships. Thank you for trusting us to be part of your success story."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="director-box">
                            <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Engr Md. Nazmul Talukder</h3>
                                <p class="post">Additional Director</p>
                                <span><a href="mailto://engr.naemulislam@gmail.com"><i class="fa fa-envelope"></i> engr.nazmul@gmail.com</a></span>
                                <p>"At Adduhaatech, our mission is to innovate, inspire, and deliver excellence in every project we undertake. We are committed to empowering businesses through cutting-edge technology and fostering a culture of trust, integrity, and collaboration. Thank you for choosing us as your trusted partner on this journey toward success."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meet the Team Section -->
            {{-- <div class="team-section py-5">
                <h2 class="text-center mb-4">Meet Our Team</h2>
                <div class="row mt-30">
                    <div class="col-md-4 col-sm-6">
                        <div class="box16">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Md. Jahid gazi</h3>
                                <span class="post">CEO (Chief executive officer)</span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box16">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Md. Naemul Islam</h3>
                                <span class="post">Managing Director & Web Application Developer</span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box16">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                            <div class="box-content">
                                <h3 class="title">Md. Naim Mira</h3>
                                <span class="post">Web Developer</span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
