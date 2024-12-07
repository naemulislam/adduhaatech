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
                        <img src="{{ asset('frontend/assets/images/website/dynamic.png') }}" alt="Software Thumbnail"
                            class="software-thumbnail">
                    </div>
                    <!-- Software Information -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Dynamic Website</h3>
                            <p class="card-text">
                                <b>A dynamic website</b> is a type of website that generates content in real-time based on user interactions or server-side processes. Unlike static websites, where the content is fixed, dynamic websites pull data from databases or other sources to display personalized or frequently updated content. This allows for more complex features and functionality.<br>

                                <strong>Characteristics of a Dynamic Website:</strong><br>
                                <b>Server-Side Processing:</b> Dynamic websites rely on backend technologies (like PHP, Node.js, Python, or Ruby) to process requests and generate content.<br>
                                <b>Database Integration:</b> They often use databases (like MySQL, MongoDB, or PostgreSQL) to store and retrieve data, enabling content updates without altering the code.<br>
                                <b>Interactive:</b> Dynamic websites offer more interactivity, such as user logins, comments, real-time updates, and forms. <br>
                                <b>Customizable Content:</b> The content displayed can change based on user input, preferences, or session data (e.g., personalized recommendations or news).<br>
                                <b>More Complex:</b> Building dynamic websites typically involves more layers, including server-side scripting, API integrations, and database management.<br>
                                <strong>Use Cases:</strong><br>
                                <b>E-commerce websites:</b> Products, user accounts, and shopping carts are managed dynamically.<br>
                                <b>Social media platforms:</b> User-generated content and interactions, such as posts, comments, and messages.<br>
                                <b>News websites:</b> Content that changes frequently based on new articles and user engagement.
                                Blogging platforms: Posts, comments, and media that can be updated by multiple users.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
