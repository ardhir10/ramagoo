@extends('admin_pages.layouts.main')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('assets_admin/plugins/bootstrap-select/bootstrap-select.min.css')}}">
<link href="{{asset('assets_admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets_admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet"
    type="text/css" />
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
            <form action="{{route('admin.admins.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="insert full name" value="{{old('name')}}" name="name">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group" style="">
                    <label for="">Gender</label>
                    <select class=" form-control mg-b-10 @error('gender') is-invalid @enderror" name="gender">
                        <option value="">-- Select Gender</option>
                        <option {{old('gender') == 'M' ? 'selected=selected' :'' }} value="M">Male</option>
                        <option {{old('gender') == 'F' ? 'selected=selected' :'' }} value="F">Female</option>
                    </select>
                     @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="insert username" value="{{old('username')}}" name="username">
                     @error('username')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="insert email" value="{{old('email')}}" name="email">
                     @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="insert password" name="password">
                     @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Password Confirm</label>
                    <input type="password" class="form-control" placeholder="insert same password"
                        name="password_confirmation">
                </div>

                <div class="form-group" style="">
                    <label for="">Status</label>
                    <select class=" form-control mg-b-10 @error('status') is-invalid @enderror" name="status">
                        <option  value="">-- Select Status</option>
                        <option {{old('status') == '1' ? 'selected=selected' :'' }} value="1">Active</option>
                        <option {{old('status') == '0' ? 'selected=selected' :'' }} value="0">Not Active</option>
                    </select>
                     @error('status')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group" style="">
                    <label for="">Role</label>
                    <select class=" form-control mg-b-10 @error('admin_role_id') is-invalid @enderror" name="admin_role_id">
                        <option value="">-- Select Role</option>

                        @foreach ($admin_roles as $admin_role)
                            <option {{old('admin_role_id') == $admin_role->id ? 'selected=selected' :'' }}  value="{{$admin_role->id}}">{{$admin_role->name}}</option>
                        @endforeach
                    </select>
                     @error('admin_role_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Avatar</label>
                    <div class="custom-file-container" data-upload-id="avatar">
                        <label>Upload (Avatar) <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                title="Clear Image">x</a></label>
                        <label class="custom-file-container__custom-file">
                            <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                accept="image/*" name="avatar">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                        </label>
                        <div class="custom-file-container__image-preview"></div>
                    </div>
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
