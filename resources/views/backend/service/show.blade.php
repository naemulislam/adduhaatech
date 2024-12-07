@extends('backend.layout.master')
@section('title', 'Service')
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
                            <h3 class="card-title">Service Details</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{ route('admin.service.index') }}"
                                    class="btn btn-primary btn-sm font-weight-bolder">
                                    < Back</a>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <div class="sf-name">
                                        <h3>Service Name: {{ $service->name }}</h3>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <h4 class="m-0">Service Description:</h4>
                                    <p>{!! $service->description !!}</p>
                                </div>
                                @if ($service->thumbnail)
                                    <div class="col-sm-6 mb-3">
                                        <h4>Service Thumbnail:</h4><br />
                                        <img src="{{ $service->thumbnail }}" style="width: 300px;" alt="">
                                    </div>
                                @endif
                                @if ($service->icon)
                                    <div class="col-sm-6 mb-3">
                                        <h4>Service Icon:</h4><br />
                                        <img src="{{ $service->icon }}" style="width: 150px;" alt="">
                                    </div>
                                @endif
                            </div>
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
