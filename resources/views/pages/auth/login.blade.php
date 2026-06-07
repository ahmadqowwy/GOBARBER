@extends('layouts.base-auth')

@section('title')
    <span>Login | GOBarber</span>
@endsection

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/skydash//images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Selamat Datang Pada Panel Admin GoBarber</h4>
                            <h6 class="font-weight-light">Login Untuk Melanjutkan.</h6>
                            <form class="pt-3" action="{{ route('do.login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="tect"
                                        class="form-control form-control-lg @error('username')
                                    @enderror"
                                        name="username" value="{{ old('username') }}" id="exampleInputEmail1"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password')
                                    @enderror"
                                        id="exampleInputPassword1" placeholder="Password" name="password" required>

                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        Login
                                    </button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '{{ $errors->first() }}',
            });
        </script>
    @endif
@endsection
