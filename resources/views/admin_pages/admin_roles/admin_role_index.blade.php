@extends('admin_pages.layouts.main')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin')}}/plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin')}}/plugins/table/datatable/dt-global_style.css">
@endpush

@section('content')
<div class="row" id="cancel-row">

    <div class="col-xl-8 col-lg-8 col-sm-12  layout-spacing">

        <div class="widget-content widget-content-area br-6">

            @if (session('create'))
            <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button> <strong>Success !</strong> {{ session('create') }} </div>
            @endif

            @if (session('info'))
            <div class="alert alert-info mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button> <strong>Success !</strong> {{ session('info') }} </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button> <strong>Failed !</strong> {{ session('error') }} </div>
            @endif

            <a href="{{route('admin.admin_role.create')}}">
                <button class="btn btn-primary mb-2 mr-2"><i class="fa fa-plus"></i> Create Admin Role</button>
            </a>
            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Permission</th>
                            <th class="no-content"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin_roles as $admin_role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$admin_role->name}}</td>
                            <td>
                                @foreach ($admin_role->permissions as $permission)
                                <span class=" badge badge-dark">{!! $permission->name !!}</span>
                                @endforeach
                            </td>
                            <td>
                                <button class="btn btn-warning  mb-2 mr-2 rounded-circle bs-tooltip"
                                    data-placement="top" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <a href="{{route('admin.admin_role.delete',$admin_role->id)}}"  class="delete">
                                    <button class="btn btn-danger mb-2 mr-2 rounded-circle bs-tooltip"
                                        data-placement="top" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@push('js')
<script src="{{asset('assets_admin')}}/plugins/table/datatable/datatables.js"></script>
<script>
    $('#zero-config').DataTable({
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });

</script>
<script>
    // ----- Delete
    $('.delete').click(function(event) {
        event.preventDefault();
         swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",

                dangerMode: true,
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {
                    // swal("Success ! Your data has been deleted!", {
                    //     icon: "success",
                    // });
                    window.location = $(this).attr('href');
                    return true;
                } else {
                    swal("Your data is safe!");
                    return false;
                }
            });
       

    });
    
</script>
@endpush
