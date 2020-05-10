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
        <div class="col-lg-6 mb-60px order-lg-1 order-md-2 order-sm-2 order-2">
            <img src="{{asset('assets_client/images/login.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 mb-60px order-lg-2 order-md-1 order-sm-1 order-1">
            <div class="row align-items-center mb-20px">
                <div class="col-md-9">
                    <h4 class="mt-0">Log In</h4>
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>


                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group ">
                    <label for="password">{{ __('Password') }}</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                </div>
                

                <div class="form-group ">
                        <button type="submit" class="btn btn-success">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a  href="{{ route('password.request') }}">
                            <button type="button" class="btn btn-warning">
                                {{ __('Forgot Your Password?') }}
                            </button>
                        </a>
                        @endif
                </div>
            </form>
            <!-- End Blog-->


        </div>


    </div>
</div>


@endsection

@push('js')
<script type="text/javascript" src="{{url('js/sweetalert.js')}}"></script>

<script>
    let isSuccess = @json(session('status'));
    if (isSuccess == 'success')
        swal("Registration Success !", 'Please Login !', "success");
    else if (isSuccess == 'fail')
        swal("Registration Failed !", 'Check Field !', "warning");

</script>

@endpush
