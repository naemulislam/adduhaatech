@extends('backend.layout.master')
@section('title', 'Consultancies list')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Consultancies List
                            <span class="d-block text-muted pt-2 font-size-sm">All massage here</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="datatable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultancies as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>
                                        @if ($row->status == 0)
                                            <a href="#" class="btn label label-lg label-light-danger label-inline"> Unseen</a>
                                        @elseif($row->status == 1)
                                            <a href="#" class="btn label label-lg label-light-success label-inline">Seen</a>
                                        @endif
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.consultancies.show', $row->id) }}"
                                            class="btn btn-icon btn-info btn-hover-primary btn-xs mx-3"><i
                                                class="fa fa-eye"></i></a>
                                        <a id="delete" href="{{ route('admin.consultancies.destroy', $row->id) }}"
                                            class="btn btn-icon btn-danger btn-hover-primary btn-xs mx-3"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
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
    {{-- <script>
    $(document).ready(function () {
    $('#datatable').DataTable();
});
</script> --}}
@endpush
