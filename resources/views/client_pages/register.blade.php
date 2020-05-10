@extends('client_pages.layouts.main')

@section('content')
<style>
    .slick-slide img {
        display: block;
        border-radius: 20px;
    }

</style>


<!-- Latest Posts-->
<div class="container mb-20px">
    <div class="row">
        <div class="col-lg-6 mb-60px">
            <div class="row align-items-center mb-20px">
                <div class="col-md-9">
                    <h4 class="mt-0">Register</h4>
                </div>
            </div>
            <!-- REGISTER-->
            {{-- @if (Session::has('status'))
            <li>{!! session('status') !!}</li>
            @endif --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group ">
                    <label for="name" class="">{{ __('Name') }} :</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="Insert your full name" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="email" class="">{{ __('E-Mail Address') }} :</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="Insert your email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="password" class="">{{ __('Password') }} :</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Insert your password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="password-confirm" class="">{{ __('Confirm Password') }} :</label>
                    <input id="password-confirm" placeholder="Insert same password" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <div class="text-center align-items-center">
                            <button type="submit" class="btn btn-danger box-shadow-none">Register</button>
                            <button type="submit" class="btn btn-info box-shadow-none">Log In</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Blog-->


        </div>
        <div class="col-lg-6 mb-60px">
            <img src="{{asset('assets_client/images/register.jpg')}}" class="img-fluid" alt="">
        </div>

    </div>
</div>


@endsection

@push('js')
    <script type="text/javascript" src="{{url('js/sweetalert.js')}}"></script>

<script>
    let isSuccess = @json(session('status'));
    if(isSuccess == 'success')
        swal("Registration Success !", 'Please Login !', "success");
    else if (isSuccess == 'fail')
        swal("Registration Failed !", 'Check Field !', "warning");
</script>
    
@endpush
