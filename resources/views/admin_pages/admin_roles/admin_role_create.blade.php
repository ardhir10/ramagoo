@extends('admin_pages.layouts.main')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/plugins/bootstrap-select/bootstrap-select.min.css')}}">
<link href="{{asset('assets_admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets_admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/assets/css/forms/theme-checkbox-radio.css')}}">
@endpush

@section('content')
<div class="row" id="cancel-row">

    <div class="col-xl-6 col-lg-6 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('admin.admin_role.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="insert role name" value="{{old('name')}}" name="name">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="n-chk">
                    <label for="">
                        Permissions
                    </label>
                    <br>
                    @foreach ($permissions as $permission)
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox"  class="new-control-input" name="permissions[]" value="{{$permission->id}}">
                        <span class="new-control-indicator"></span>{{$permission->name}}
                    </label>
                    @endforeach
                </div>




                <button class="btn btn-success mb-2 mr-2" type="submit"><i class="fa fa-save"></i> Save </button>

            </form>



        </div>
    </div>

</div>

@endsection

@push('js')
<script src="{{asset('assets_admin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets_admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('assets_admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
    var avatar = new FileUploadWithPreview('avatar')

</script>
@endpush
