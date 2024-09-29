@extends('backend.layout.master')
@section('title', 'Dashboard')
@section('content')
<style>
    .previewLogo{
        width: 150px;
    }
    .phone-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    padding: 5px;
    min-height: 40px;
    border: 1px solid #ccc;
}

.phone-tag {
    display: inline-flex;
    align-items: center;
    background-color: #e9ecef;
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 4px;
}

.phone-tag span {
    margin-right: 10px;
}

.phone-tag i {
    cursor: pointer;
    color: #d9534f;
}

#phone-input {
    flex: 1;
    border: none;
    outline: none;
    min-width: 100px;
}

</style>
<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>General Settings</strong></h3>
        </div>

        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a href="#">Adduhaatech</a></li>
                    <li class="breadcrumb-item active"><a href="#">setting</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <!--begin::Form-->
                <div class="card-body">
                    <form action="{{ route('admin.settings.update', $setting?->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Website Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter website name"
                                        name="name" value="{{ $setting?->site_name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">Phone <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Enter primary phone"
                                        name="phone" value="{{ $setting?->phone }}">
                                    @error('phone')
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
                                    <label>Address</label>
                                        <textarea id="summernote" name="address"
                                        placeholder="Enter present address..">{{ $setting?->address }}</textarea>
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
                            <div class="col-sm-4 mb-3">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control"
                                        placeholder="https://facebook.com" name="facebook"
                                        value="{{ $setting?->facebook }}">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="form-group">
                                    <label for="">YouTube</label>
                                    <input type="text" class="form-control"
                                        placeholder="https://youtube.com" name="youtube"
                                        value="{{ $setting?->youtube }}">
                                    @error('youtube')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <input type="text" class="form-control"
                                        placeholder="https://twitter.com" name="twitter"
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
                                        placeholder="https://instagram.com" name="instagram"
                                        value="{{ $setting?->instagram }}">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="form-group">
                                    <label for="">Linkeding</label>
                                    <input type="text" class="form-control"
                                        placeholder="https://linkedin.com" name="linkedin"
                                        value="{{ $setting?->linkedin }}">
                                    @error('linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Website Meta Title and Description</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="m_title" class="form-control" placeholder="Enter meta title" value="{{ $setting?->m_title}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="m_description" class="form-control" placeholder="Enter meta description">{{ $setting?->m_description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <textarea name="m_keyword" class="form-control" placeholder="Enter meta keyword">{{ $setting?->m_keyword}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Website Logo </label>
                                    <input type="file" name="web_logo" class="form-control"
                                        onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                                    @error('web_logo')
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
                                    <label>Website Favicon </label>
                                    <input type="file" name="favicon" class="form-control"
                                        onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                                    @error('favicon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-3">
                                        <label>Current Favicon</label>
                                        <img src="{{ $setting->favicon ?? asset('defaults/noimage/no_img.jpg') }}"
                                            class="previewLogo" id="" />
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const phoneInput = document.getElementById('phone-input');
    const phoneContainer = document.getElementById('phone-container');
    const hiddenPhonesInput = document.getElementById('phones');
    let phoneNumbers = [];

    // Function to create a tag for phone number
    function createPhoneTag(phone) {
        const phoneTag = document.createElement('div');
        phoneTag.classList.add('phone-tag');
        phoneTag.innerHTML = `<span>${phone}</span><i class="fa fa-times remove-phone"></i>`;

        phoneContainer.insertBefore(phoneTag, phoneInput);

        phoneTag.querySelector('.remove-phone').addEventListener('click', () => {
            phoneNumbers = phoneNumbers.filter(p => p !== phone);
            updateHiddenInput();
            phoneTag.remove();
        });
    }

    // Function to update hidden input with phone numbers
    function updateHiddenInput() {
        hiddenPhonesInput.value = phoneNumbers.join(',');
    }

    // Event listener for when a phone number is entered
    phoneInput.addEventListener('keyup', (e) => {
        if (e.key === 'Enter' || e.key === ',') {
            const phone = phoneInput.value.trim();

            if (phone && !phoneNumbers.includes(phone)) {
                phoneNumbers.push(phone);
                createPhoneTag(phone);
                updateHiddenInput();
            }

            phoneInput.value = '';
        }
    });
});

    </script>
@endpush
