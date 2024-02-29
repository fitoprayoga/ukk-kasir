<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN OUTDOORGEAR</title>
    <link rel="stylesheet" href="/vendor/admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/admin/assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mt-1 mx-auto">
                    <div class="card pt-5">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="https://t3.ftcdn.net/jpg/05/26/21/22/360_F_526212206_S4OI8Td03Cs2uSxchlKBrSrt5mVrm9WN.jpg" alt="" style="width: 50px; height: 50px;">
                                <h3><b>OUTDOORGEAR</b></h3>
                                <p>Toko Perlengkapan Alat Outdoor</p>
                            </div>

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger">{{(session('loginError'))}}</div>
                            @endif

                            <form action="/login/do" method="post">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="email"><b>Email Pengguna</b></label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                        <div class="form-control-icon">
                                            <i data-feather="at-sign"></i>
                                        </div>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password"><b>Password Akun</b></label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <a href="/forgot-password" class='float-end'>
                                    <small class="mt-4"><b>Lupa Password ?</b></small>
                                </a>

                                <div class='form-check clearfix my-2'>
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary btn-block float-end">Masuk</button>
                                </div>
                            </form>
                            <div class="divider">
                                <div class="divider-text">Atau</div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <a href="/register"><button class="btn btn-secondary btn-block float-end">Daftar</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="/vendor/admin/assets/js/feather-icons/feather.min.js"></script>
    <script src="/vendor/admin/assets/js/app.js"></script>

    <script src="/vendor/admin/assets/js/main.js"></script>
</body>

</html>