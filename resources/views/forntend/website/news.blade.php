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
                        <img src="{{ asset('frontend/assets/images/website/News_Portal.png') }}" alt="Software Thumbnail"
                            class="software-thumbnail">
                    </div>
                    <!-- Software Information -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">News Portal Website</h3>
                            <p class="card-text">
                                <b>A News Portal</b> is an online platform designed to provide users with the latest news and information on various topics such as politics, sports, entertainment, technology, health, and more. News portals aggregate articles, videos, and other content, allowing users to stay informed in real-time.

                                <strong>Key Features of a News Portal:</strong>
                                <b>News Categories:</b> A well-organized structure with various categories such as Politics, Business, Sports, Entertainment, and Technology.
                                Real-time Updates: Instant updates on breaking news, live reports, and ongoing events.<br>
                                <b>Search Functionality:</b> A search bar to help users find specific articles or topics of interest.<br>
                                <b>User Comments and Interaction:</b> Readers can comment on articles, participate in discussions, and engage with content.<br>
                                <b>Multimedia Content:</b> A mix of articles, images, videos, and infographics to deliver news in different formats.<br>
                                <b>Subscription Options:</b> Allowing users to subscribe to newsletters, breaking news alerts, or premium content.<br>
                                <b>Social Media Integration:</b> Buttons for sharing articles on social media platforms like Facebook, Twitter, or LinkedIn.<br>
                                Author Information: Details about the writers and journalists behind the articles.<br>
                                <b>Related Articles:</b> Suggestions for related content to keep readers engaged and exploring more topics.<br>
                                <b>Mobile-First Design:</b> Optimized for both mobile and desktop devices to provide a seamless reading experience across platforms.<br>
                                News portals often serve as the go-to source for up-to-the-minute reporting and can include a wide range of content from professional journalism to user-generated posts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
