@extends('backend.layout.master')
@section('title', 'Consultancy Details')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Consultancy Details
                            <span class="d-block text-muted pt-2 font-size-sm">All details here</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ route('admin.consultancies.index') }}" class="btn btn-primary btn-sm font-weight-bolder">
                            < Back</a>
                                <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <b class="col-sm-3">Name </b>
                        <b class="col-sm-9">{{ $consultancy->name }}</b>
                        <b class="col-sm-3">Phone </b>
                        <b class="col-sm-9">{{ $consultancy->phone }}</b>
                        <b class="col-sm-3">Email </b>
                        <b class="col-sm-9">{{ $consultancy->email }}</b>
                        <b class="col-sm-3">Service Category </b>
                        <b class="col-sm-9">{{ $consultancy->service_category }}</b>
                        <b class="col-sm-3">Message</b>
                        <b class="col-sm-9">{!! $consultancy->service_details !!}</b>
                    </div>
                    <div class="row">
                        <a href="#" class="btn btn-info">Reply message</a>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
