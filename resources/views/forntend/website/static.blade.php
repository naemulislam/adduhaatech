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
                        <img src="{{ asset('frontend/assets/images/website/static.webp') }}" alt="Software Thumbnail"
                            class="software-thumbnail">
                    </div>
                    <!-- Software Information -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Static Website</h3>
                            <p class="card-text">
                                A static website is a type of website that is delivered to the user exactly as it is stored,
                                without any server-side processing or dynamic content generation. Static websites are made
                                up of HTML, CSS, and JavaScript files, which are pre-written and stored on a server. Each
                                page is a static file, and any interaction (such as clicking a link or navigating) simply
                                loads a new pre-designed page.

                                Characteristics of a Static Website:

                                Fixed Content: The content does not change unless manually updated by a developer or
                                webmaster.<br>
                                Fast Load Time: Since there is no server-side processing, static websites tend to load
                                faster.<br>
                                Simpler to Build: Static websites are easier to design and deploy because they don’t require
                                a backend server or database.<br>
                                Limited Interactivity: Interactivity is typically minimal, relying on simple JavaScript or
                                form submissions.<br>
                                SEO-friendly: Static websites are often easier to optimize for search engines, as the
                                content is clearly defined in HTML.<br>
                                Use Cases:

                                Personal blogs, portfolios, company landing pages, or informational websites that don’t
                                require frequent updates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
