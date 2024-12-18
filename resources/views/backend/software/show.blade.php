@extends('backend.layout.master')
@section('title', 'Software')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Software Details</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{ route('admin.software.index') }}"
                                    class="btn btn-primary btn-sm font-weight-bolder">
                                    < Back</a>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="sf-name">
                                        <h3>Software Name: {{ $software->name }}</h3>
                                    </div>
                                </div>
                                @if ($software->thumbnail)
                                    <div class="col-sm-12 mb-3">
                                        <h4>Software Thumbnail:</h4><br />
                                        <img src="{{ $software->thumbnail }}" style="width:300px;" alt="">
                                    </div>
                                @endif
                                <div class="col-sm-12 mb-3">
                                    <h4 class="m-0">Software Description:</h4>
                                    <p>{!! $software->description !!}</p>
                                </div>
                            </div>
                            @if (count(json_decode($software->images)) > 0)
                                <div class="row">
                                    @foreach (json_decode($software->images) as $img)
                                        <div class="col-md-3">
                                            <img src="{{ $img }}" style="width:60px;">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
