@extends('backend.layout.master')
@section('title', 'Settings')
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
                                <h3 class="card-title">Settings</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="" class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('admin.settings.update', $setting?->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="">Website Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter website name"
                                                    name="site_name" value="{{ $setting?->site_name }}">
                                                @error('site_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Enter primary email"
                                                    name="email" value="{{ $setting?->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Phone 1 <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" placeholder="Enter primary phone"
                                                    name="phone1" value="{{ $setting?->phone1 }}">
                                                @error('phone1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Phone 2 </label>
                                                <input type="number" class="form-control" placeholder="Enter primary phone"
                                                    name="phone2" value="{{ $setting?->phone2 }}">
                                                @error('phone2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Web Address <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="example.com"
                                                    name="web_address" value="{{ $setting?->web_address }}">
                                                @error('web_address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address <span class="text-danger">*</span></label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Enter present address.."
                                                    value="{{ $setting?->address }}">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4>Social Media Link</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Facebook</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="facebook"
                                                    value="{{ $setting?->facebook }}">
                                                @error('facebook')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">YouTube</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="youtube"
                                                    value=" {{ $setting?->youtube }}">
                                                @error('youtube')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="form-group">
                                                <label for="">Twitter</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="twitter"
                                                    value="{{ $setting?->twitter }}">
                                                @error('twitter')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="form-group">
                                                <label for="">Instagram</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="instagram"
                                                    value="{{ $setting?->instagram }}">
                                                @error('instagram')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="form-group">
                                                <label for="">Linkedin</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="linkedin"
                                                    value="{{ $setting?->linkedin }}">
                                                @error('linkedin')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4>Website Meta title and description</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta title</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter meta title" name="m_title"
                                                    value="{{ $setting?->m_title }}">
                                                @error('m_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta description</label>
                                                <textarea type="text" class="form-control"
                                                    placeholder="Enter meta description" name="m_description">{{ $setting?->m_description }}</textarea>
                                                @error('m_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta keyword</label>
                                                <textarea type="text" class="form-control"
                                                    placeholder="Enter meta keyword" name="m_keyword">{{ $setting?->m_keyword }}</textarea>
                                                @error('m_keyword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website Logo <span class="text-danger">*</span></label>
                                                <input type="file" name="logo" class="form-control"
                                                    onchange="loadFile(event)">
                                                @error('logo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 mb-3">
                                                    <label>Current Image</label>
                                                    <img src="{{ $setting->logo ?? asset('defaults/noimage/no_img.jpg') }}"
                                                        class="previewLogo" id="" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Preview Image</label>
                                                    <img class="previewLogo" id="output" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Favicon <span class="text-danger">*</span></label>
                                                <input type="file" name="favicon" class="form-control"
                                                    onchange="loadFile2(event)">
                                                @error('favicon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 mb-3">
                                                    <label>Current Image</label>
                                                    <img src="{{ $setting->favicon ?? asset('defaults/noimage/no_img.jpg') }}"
                                                        class="previewLogo" id="" />
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Preview Image</label>
                                                    <img class="previewLogo" id="favicon" />
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
            //image 2
            var favicon = document.getElementById('favicon');
            favicon.src = URL.createObjectURL(event.target.files[0]);
            favicon.onload = function() {
                URL.revokeObjectURL(favicon.src) // free memory
            }
        };
    </script>
@endpush
