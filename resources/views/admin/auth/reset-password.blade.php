<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUPA PASSWORD</title>
    <link rel="stylesheet" href="/vendor/admin/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/vendor/admin/assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card py-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h3><b>LUPA PASSWORD</b></h3>
                                <p>Masukkan Password Yang Baru</p>
                            </div>
                            <form action="{{ route('password.update') }}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{request()->token}}">
                                <input type="hidden" name="email" value="{{request()->email}}">

                                <div class="form-group position-relative has-icon-left">
                                    <label for="password"><b>Password Baru</b></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group position-relative has-icon-left">
                                    <label for="re_password"><b>Konfirmasi Password</b></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="re_password" placeholder="Konfirmasi Password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <input type="submit" value="Perbarui Password" class="btn btn-primary float-end btn-block">
                                </div>
                            </form>
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