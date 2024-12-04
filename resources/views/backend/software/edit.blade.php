@extends('backend.layout.master')
@section('title', 'Software Edit')
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
                            <h3 class="card-title">Software</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{route('admin.software.index')}}" class="btn btn-primary btn-sm font-weight-bolder">
                                    < Back</a>
                                        <!--end::Button-->
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('admin.software.update',$software->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Software Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter software name"
                                                name="software_name" value="{{ $software->name }}">
                                            @error('software_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Software Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" id="summernote">{!! $software->description !!}</textarea>
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
                                            <input type="number" name="order" class="form-control" placeholder="Ex:1,2,3,..." value="{{ $software->order}}">
                                            @error('order')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Software Thumbnail Image<span class="text-danger">*</span></label>
                                            <input type="file" name="thumbnail" class="form-control"
                                                onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                                            @error('thumbnail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label>Current Image</label>
                                                <img class="previewLogo" src="{{$software->thumbnail}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Preview Image</label>
                                                <img class="previewLogo" id="output" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Multiple Images </label>
                                            <input type="file" multiple name="images[]" class="form-control" accept=".jpg,.png,.jpeg">
                                            @error('images')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        @if(count(json_decode($software->images)) > 0)
                                        <div class="row">
                                            @foreach (json_decode($software->images) as $img)
                                            <div class="col-md-4">
                                                <img src="{{$img}}" style="width:60px;">
                                                <input type="checkbox" name="delete_images[]" value="{{ $img }}"> Delete
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
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
    </script>
@endpush
