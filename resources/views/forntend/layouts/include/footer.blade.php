<!--start footer section-->
<footer class="footer-section wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="ft-item wow animate__animated animate__fadeInUp">
                    <h5 class="ft-title">About Us</h5>
                    <div class="ft-logo">
                        <img src="{{asset('frontend/assets/images/main-logo.jpg')}}" alt="logo">
                        <p>Adduhaatech is a technology-driven company focused on delivering cutting-edge solutions in web development, mobile apps, and digital marketing. We strive to innovate and stay at the forefront of the latest industry trends.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ft-item wow animate__animated animate__fadeInUp">
                    <h5 class="ft-title">Important link</h5>
                    <ul>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Trainings</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ft-item wow animate__animated animate__fadeInUp">
                    <h5 class="ft-title">Contact Us</h5>
                    <div class="ft-contact">
                        <div class="media">
                            <i class="fa fa-map-marker"></i>
                            <div class="media-body">
                                <span>{{$setting->address ?? ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="ft-contact">
                        <div class="media">
                            <i class="fa fa-phone"></i>
                            <div class="media-body">
                                <span>Phone : +88{{$setting->phone1 ?? ''}}</span>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-phone"></i>
                            <div class="media-body">
                                <span>Phone : +88{{$setting->phone2 ?? ''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="ft-contact">
                        <div class="media">
                            <i class="fa fa-globe"></i>
                            <div class="media-body">
                                <span>Website: <a href="{{$setting->web_address ?? ''}}">{{$setting->web_address ?? ''}}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ft-contact">
                        <div class="media">
                            <i class="fa fa-envelope"></i>
                            <div class="media-body">
                                <span>Email: <a href="mailto:{{$setting->email ?? ''}}">{{$setting->email ?? ''}}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ft-social mt-3">
                        <a target="_blank" href="{{$setting->facebook ?? '#'}}"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="{{$setting->youtube ?? '#'}}"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="{{$setting->twitter ?? '#'}}"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="{{$setting->instagram ?? '#'}}"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="{{$setting->linkedin ?? '#'}}"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->

<!--copyright-->
<div class="copyright wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col">
                <span>2024 © All Rights Reserved. Powered by <a class="td" href="#" target="_blank">Adduhaa Tech</a></span>
            </div>
        </div>
    </div>
</div>
<!--copyright-->
