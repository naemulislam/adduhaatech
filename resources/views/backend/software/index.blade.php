@extends('backend.layout.master')
@section('title', 'Software')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Software List
                            <span class="d-block text-muted pt-2 font-size-sm">All software here</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ route('admin.software.create') }}" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>New Software</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($softwares as $software)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $software->name }}</td>
                                    <td>{{ $software->order }}</td>
                                    <td>
                                        <img src="{{ asset($software->thumbnail) }}" style="width: 150px;" alt="">
                                    </td>
                                    <td>
                                        <span class="switch">
                                            <label>
                                                <input type="checkbox" class="status" id="{{ $software->id }}"
                                                    {{ $software->status == 1 ? 'checked' : '' }}>
                                                <span></span>
                                            </label>
                                        </span>
                                    </td>
                                    @if (Auth::user()->role == 'admin')
                                        <td>
                                            <a href="{{ route('admin.software.show',$software->id)}}" class="btn btn-icon btn-primary btn-hover-primary btn-xs mx-3"><i
                                                class="fa fa-eye"></i></a>
                                            <a href="{{ route('admin.software.edit',$software->id)}}" class="btn btn-icon btn-info btn-hover-primary btn-xs mx-3"><i
                                                    class="fa fa-edit"></i></a>

                                            <a id="delete" href="{{ route('admin.software.destroy', $software->id) }}"
                                                class="btn btn-icon btn-danger btn-hover-primary btn-xs mx-3">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    @else
                                        <td>You don't have permission to access</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@push('scripts')
    <script>
        $(document).on('change', '.status', function() {
            var id = $(this).attr("id");
            var status = $(this).prop("checked") ? 1 : 0;

            $.ajax({
                url: "{{ url('/admin/dashboard/software/status') }}",
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: id,
                    status: status
                },
                success: function(data) {
                    if (data.success == true) {
                        toastr.success('Status updated successfully');
                    } else if (data.success == false) {
                        toastr.error('Status updated failed. Product must be approved');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
    </script>
@endpush
