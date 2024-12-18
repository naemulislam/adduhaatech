 <!--start header top-->
 <section class="header-top">
     <div class="container">
         <div class="row">
             <div class="col-md-6 align-self-center">
                 <div class="ht-email">
                     <span class="mr-3"><i class="fa fa-phone mr-1"></i> <a
                             href="tel:{{ $setting->phone1 ?? '' }}">+88{{ $setting->phone1 ?? '' }}</a></span>
                     <span><i class="fa fa-envelope mr-1"></i><a
                             href="mailto:{{ $setting->email ?? '' }}">{{ $setting->email ?? '' }}</a></span>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="ht-social">
                     <a target="_blank" href="{{ $setting->facebook ?? '#' }}"><i class="fa fa-facebook"></i></a>
                     <a target="_blank" href="{{ $setting->youtube ?? '#' }}"><i class="fa fa-youtube"></i></a>
                     <a target="_blank" href="{{ $setting->twitter ?? '#' }}"><i class="fa fa-twitter"></i></a>
                     <a target="_blank" href="{{ $setting->instagram ?? '#' }}"><i class="fa fa-instagram"></i></a>
                     <a target="_blank" href="{{ $setting->linkedin ?? '#' }}"><i class="fa fa-linkedin"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--end header top-->
 @php
     $softwares = \App\Models\Software::where('status', true)->orderBy('order', 'asc')->get();
     $services = \App\Models\Service::where('status', true)->orderBy('order', 'asc')->get();
 @endphp
 <!--start header-->
 <header class="wow fadeInDown clearfix" data-wow-duration="1s">
     <nav class="navbar">
         <div class="container">
             <a class="navbar-brand align-self-center" href="{{ route('front.index') }}">
                 <img src="{{ asset($setting->logo ?? '') }}" class="logo" alt="Logo">
             </a>
             <div class="menu-area ml-auto">
                 <ul>
                     <li><a href="{{ route('front.index') }}"><i class="fa fa-home"></i> Home</a></li>
                     <li class="dd-btn1"><a href="#">Software <i class="fa fa-angle-down"></i></a>
                         <div class="dropdown-menu1">
                             <ul>
                                 @if ($softwares)
                                     @foreach ($softwares as $software)
                                         <li>
                                             <a href="{{ route('front.show.software', $software->slug) }}"><i
                                                     class="fa fa-long-arrow-right"></i>{{ $software->name }}</a>
                                         </li>
                                     @endforeach
                                 @endif

                             </ul>
                         </div>


                     </li>

                     <li class="dd-btn1"><a href="#"> Website <i class="fa fa-angle-down"></i></a>

                         <div class="dropdown-menu1">
                             <ul>
                                 <li><a href="{{ route('front.static_website') }}"><i
                                             class="fa fa-long-arrow-right"></i> Static Website</a></li>
                                 <li><a href="{{ route('front.dynamic_website') }}"><i
                                             class="fa fa-long-arrow-right"></i> Dynamic Website</a></li>
                                 <li><a href="{{ route('front.ecommerce_website') }}"><i
                                             class="fa fa-long-arrow-right"></i> E-Commerce Website</a>
                                 </li>
                                 <li><a href="{{ route('front.news_portal') }}"><i class="fa fa-long-arrow-right"></i>
                                         News Portal</a></li>
                             </ul>
                         </div>

                     </li>

                     <li class="dd-btn1"><a href="#"> Services <i class="fa fa-angle-down"></i></a>
                         <div class="dropdown-menu1">
                             <ul>
                                 @if ($services)
                                     @foreach ($services as $service)
                                         <li>
                                             <a href="#">
                                                 <i class="fa fa-long-arrow-right"></i>
                                                 {{ $service->name }}</a>
                                         </li>
                                     @endforeach
                                 @endif
                             </ul>
                         </div>
                     </li>
                     <li><a href="{{ route('front.consultancy') }}"> Consultancy </a></li>
                     <li><a href="{{ route('front.aboutUs') }}"> About Us </a></li>


                     {{-- <li class="dd-btn1"><a href="#"> Domain & Hosting<i class="fa fa-angle-down"></i></a>

                        <div class="dropdown-menu1">
                            <ul>

                                <li class="dd-btn2"><a href="#"><i class="fa fa-long-arrow-right"></i> Domain Registration <i class="fa fa-angle-right float-right mt-1"></i></a>

                                    <div class="dropdown-menu2">
                                        <ul class="w-nav-list level_3">
                                            <li><a href="#">New Domain Registration</a> </li>

                                            <li><a href="#">View Domain Pricing</a> </li>

                                            <li><a href="#">Bulk Domain Register</a> </li>

                                            <li><a href="#">Domain Transfer</a> </li>

                                            <li><a href="#">Domain WHOIS Check</a> </li>
                                        </ul>
                                    </div>


                                </li>
                                <li class="dd-btn2"><a href="#"><i class="fa fa-long-arrow-right"></i> Web Hosting <i class="fa fa-angle-right float-right mt-1"></i></a>

                                    <div class="dropdown-menu2">
                                        <ul>
                                            <li><a href="#">Linux Hosting</a></li>

                                            <li><a href="#">Windows Hosting</a></li>
                                            <li><a href="#">Linux Reseller Hosting</a></li>
                                            <li><a href="#">Windows Reseller Hosting</a></li>

                                            <li><a href="#">VPS Hosting</a></li>
                                            <li><a href="#">Dedicated Server</a></li>
                                            <li><a href="#">SSl Security</a></li>
                                            <li><a href="#">Enterprise Email Hosting</a></li>
                                        </ul>
                                    </div>


                                </li>

                            </ul>
                        </div>

                    </li> --}}

                     <li><a href="{{ route('front.contact') }}"> Contact</a></li>
                     <li><a href="#!"> Career</a></li>
                 </ul>
             </div>
             <i class="fa fa-bars menu-icon"></i>

         </div>
     </nav>
 </header>
 <!--end header-->
 <!--start mobile menu-->
 <div class="mobile-menu">
     <div class="mm-logo" style="background: #fff; padding: 11px 18px;">
         <a href="{{ route('front.index')}}">
             <img style="width: 55px;" src="{{ asset('frontend/assets/images/main-logo.jpg') }}" alt="logo">
         </a>
         <div class="mm-cross-icon">
             <i class="fa fa-times mm-ci"></i>
         </div>
     </div>
     <div class="mm-menu">
         <div class="accordion" id="accordionExample">
             <div class="menu-box">
                 <div class="menu-link">
                     <a href="#"><i class="fa fa-home mr-2"></i>Home</a>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link" id="headingFour">
                     <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseFour">
                         Software<i class="fa fa-plus"></i></a>
                 </div>
                 <div id="collapseFour" class="collapse menu-body" aria-labelledby="headingFour"
                     data-parent="#accordionExample">
                     <div class="card-body">
                         <ul>
                             @if ($softwares)
                                 @foreach ($softwares as $software)
                                     <li><a href="{{ route('front.show.software', $software->slug) }}"><i
                                                 class="fa fa-long-arrow-right"></i>{{ $software->name }}</a>
                                     </li>
                                 @endforeach
                             @endif
                         </ul>

                     </div>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link" id="headingFive">
                     <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseFive">
                         Website<i class="fa fa-plus"></i></a>
                 </div>
                 <div id="collapseFive" class="collapse menu-body" aria-labelledby="headingFive"
                     data-parent="#accordionExample">
                     <div class="card-body">
                         <ul>
                             <li><a href="{{ route('front.static_website') }}"><i class="fa fa-long-arrow-right"></i>
                                     Static Website</a></li>
                             <li><a href="{{ route('front.dynamic_website') }}"><i
                                         class="fa fa-long-arrow-right"></i> Dynamic Website</a></li>
                             <li><a href="{{ route('front.ecommerce_website') }}"><i
                                         class="fa fa-long-arrow-right"></i> E-Commerce Website</a></li>
                             <li><a href="{{ route('front.news_portal') }}"><i class="fa fa-long-arrow-right"></i>
                                     News Portal</a></li>
                         </ul>


                     </div>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link" id="headingSix">
                     <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseSix">
                         Services<i class="fa fa-plus"></i></a>
                 </div>
                 <div id="collapseSix" class="collapse menu-body" aria-labelledby="headingSix"
                     data-parent="#accordionExample">
                     <div class="card-body">
                         <ul>
                             @if ($services)
                                 @foreach ($services as $service)
                                     <li><a href="#"><i class="fa fa-long-arrow-right"></i>{{$service->name}}</a></li>
                                 @endforeach
                             @endif
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link">
                     <a href="{{ route('front.consultancy') }}"> Consultancy</a>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link">
                     <a href="{{ route('front.aboutUs') }}"> About Us</a>
                 </div>
             </div>

             {{-- <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseThree"> Domain & Hosting<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseThree" class="collapse menu-body" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>

                            <li class="mega-dd-btn-2">
                                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Domain Registration <i class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body scroll-div-dist">
                                        <ul class="mega-item">
                                            <li><a href="#">New Domain Registration</a> </li>

                                            <li><a href="#">View Domain Pricing</a> </li>

                                            <li><a href="#">Bulk Domain Register</a> </li>

                                            <li><a href="#">Domain Transfer</a> </li>

                                            <li><a href="#">Domain WHOIS Check</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="mega-dd-btn-2">
                                <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">Web Hosting <i class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body scroll-div-dist">
                                        <ul class="mega-item">
                                            <li><a href="#">Linux Hosting</a></li>

                                            <li><a href="#">Windows Hosting</a></li>
                                            <li><a href="#">Linux Reseller Hosting</a></li>
                                            <li><a href="#">Windows Reseller Hosting</a></li>

                                            <li><a href="#">VPS Hosting</a></li>
                                            <li><a href="#">Dedicated Server</a></li>
                                            <li><a href="#">SSl Security</a></li>
                                            <li><a href="#">Enterprise Email Hosting</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
             <div class="menu-box">
                 <div class="menu-link">
                     <a href="{{ route('front.contact') }}"> Contact</a>
                 </div>
             </div>
             <div class="menu-box">
                 <div class="menu-link">
                     <a href="#"> Career</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--end mobile menu-->
