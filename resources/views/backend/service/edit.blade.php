@extends('backend.layout.master')
@section('title', 'Service Edit')
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
                            <h3 class="card-title">Service</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{route('admin.service.index')}}" class="btn btn-primary btn-sm font-weight-bolder"> < Back</a>
                                        <!--end::Button-->
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('admin.service.update',$service->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Service Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter service name"
                                                name="service_name" value="{{ $service->name }}">
                                            @error('service_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Software Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" id="summernote">{!! $service->description !!}</textarea>
                                            @error('description')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Serial Number <span class="text-danger">*</span></label>
                                            <input type="number" name="order" class="form-control" placeholder="Ex:1,2,3,..." value="{{ $service->order}}">
                                            @error('order')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Service Thumbnail Image<span class="text-danger">*</span></label>
                                            <input type="file" name="thumbnail" class="form-control"
                                                onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                                            @error('thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label>Current Image</label>
                                                <img class="previewLogo" src="{{$service->thumbnail}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Preview Image</label>
                                                <img class="previewLogo" id="output" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Service Icon<span class="text-danger">*</span></label>
                                            <input type="file" name="icon" class="form-control"
                                                onchange="loadFile2(event)" accept=".jpg,.png,.jpeg">
                                            @error('icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label>Current Image</label>
                                                <img class="previewLogo" src="{{$service->icon}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Preview Image</label>
                                                <img class="previewLogo" id="output2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
@push('scripts')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFile2 = function(event) {
            var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush