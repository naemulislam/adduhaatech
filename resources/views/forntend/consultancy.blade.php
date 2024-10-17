@extends('forntend.layouts.master')
@section('title', 'Consultancy')
@section('content')
<section class="consultancy-section my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="contact-image">
                    <h3>Drop Us a Message</h3>
                </div>
            </div>
        </div>
        <div class="consultancy-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="consult-img">
                        <img src="{{ asset('frontend/assets/images/page-img/consultant.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-sec">
                        <form action="{{ route('front.consultancy.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                @error('name')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter your phone">
                                        @error('phone')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                        @error('email')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Service category <span class="text-danger">*</span></label>
                                <input type="text" name="service_category" class="form-control" placeholder="Enter service category">
                                @error('service_category')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Service Details <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="service_details" placeholder="Enter service details"></textarea>
                                @error('service_details')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn common-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
