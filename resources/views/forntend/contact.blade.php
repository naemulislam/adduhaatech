@extends('forntend.layouts.master')
@section('title', 'Contact')
@section('content')
<!--Start Contact Section-->
<section class="contact-section">
    <div class="container">
        <div class="form-section mb-3">
            <div class="row">
                <div class="col">
                    <h2>Let's get in touch</h2>
                    <p>We're open for any suggestion or just to have a chat</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>ADDRESS:</h4>
                        <p>{{$setting->address}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="email">
                        <h4>Email:</h4>
                        <a target="_blank" href="mailto://{{$setting->email}}">
                            <span>{{$setting->email}}</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="phone">
                        <h4>Phone:</h4>
                        <a href="tel://{{$setting->phone1}}">
                            <span>{{$setting->phone1}}</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="form">
                <form action="{{ route('front.contact.store')}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                            @error('subject')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="message" class="form-control"  placeholder="Write your message here.." style="height: 200px;"></textarea>
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        </div>

                    </div>
                    <button class="btn btn-success mt-4" type="submit">Send Message</button>
                </form>
            </div>
        </div>
        <div class="map-section">
            <div class="row">
              <div class="col-md-12">
                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.0639686044!2d90.2548768342012!3d23.780753030883602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1729041564445!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!--end Contact Section-->
@endsection
