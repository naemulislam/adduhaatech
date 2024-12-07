@extends('forntend.layouts.master')
@section('title', 'Contact')
@section('content')
    <style>
        /* Custom CSS for styling */
        .software-thumbnail {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .software-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 0px 15px;
        }

        .software-images img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
    <section class="contact-section">
        <div class="container mt-5">
            <!-- Software Card -->
            <div class="card software-card">
                <div class="row g-0">
                    <!-- Thumbnail Section -->
                    <div class="col-md-4 align-content-center">
                        <img src="{{ asset('frontend/assets/images/website/ecommerce.webp') }}" alt="Software Thumbnail"
                            class="software-thumbnail">
                    </div>
                    <!-- Software Information -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">E-Commerce Website</h3>
                            <p class="card-text">
                                <b>An E-commerce Website</b> is a platform that allows businesses and individuals to buy and
                                sell products or services online. It typically features product catalogs, secure payment
                                gateways, shopping carts, and order management systems, offering a seamless shopping
                                experience for users.<br>

                                <strong>Key Features of an E-commerce Website:</strong><br>
                                <b>Product Listings:</b> A catalog of products or services with images, descriptions, prices, and reviews.<br>
                                <b>Shopping Cart:</b> A virtual cart where customers can add products and review their selection before checkout.<br>
                                <b>Secure Payment Gateway:</b> Integration with payment processors like PayPal, Stripe, or credit card systems to securely handle transactions. <br>
                                <b>User Accounts:</b> Customers can create accounts to save shipping details, track orders, and  manage preferences. <br>
                                <b>Order Management:</b> A backend system for managing orders, processing payments, and tracking shipping status. <br>
                                <b>Search and Filter Options:</b> Easy navigation and search functionality to help customers find products quickly. <br>
                                <b>Mobile Responsiveness:</b> Optimized for mobile devices to provide a smooth shopping experience on smartphones and tablets. <br>
                                <b>Reviews and Ratings:</b> Customer feedback to help guide purchasing decisions. <br>
                                <b>Discounts and Coupons:</b> Offering promotional discounts or coupon codes to customers. <br>
                                <b>Customer Support:</b> Live chat, FAQs, and contact options for assisting customers.
                                E-commerce websites can cater to various business models, including B2C (Business to
                                Consumer), B2B (Business to Business), C2C (Consumer to Consumer), or C2B (Consumer to
                                Business).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
