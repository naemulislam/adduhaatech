@extends('forntend.layouts.master')
@section('title', 'Contact')
@section('content')
<style>
    /* Custom CSS for styling */
    .software-thumbnail {
        width: 100%;
        max-width: 300px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .software-card {
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
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
                    <img src="{{ $software->thumbnail }}" alt="Software Thumbnail" class="software-thumbnail">
                </div>
                <!-- Software Information -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $software->name }}</h3>
                        <p class="card-text">{!! $software->description !!}</p>

                        <!-- Software Images -->
                        @if (count(json_decode($software->images)) > 0)
                        <div class="software-images">
                            @foreach($software->images as $image)
                                <img src="{{ $image }}" alt="Software Image">
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
