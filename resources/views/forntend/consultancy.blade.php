@extends('forntend.layouts.master')
@section('title', 'Consultancy')
@section('content')
<section class="consultancy-section my-4">
    <div class="container">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            <h3>Drop Us a Message</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="consult-img">
                    <img src="{{ asset('frontend/assets/images/page-img/consultant.webp')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-sec">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Service category</label>
                            <input type="text" name="service_category" class="form-control" placeholder="Enter service category">
                        </div>
                        <div class="form-group">
                            <label>Service Details</label>
                            <textarea class="form-control" placeholder="Enter service details"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
