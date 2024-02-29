<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="/vendor/admin/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/vendor/admin/assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mt-5 mx-auto">
                    <div class="card pt-5">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h4><b>LUPA PASSWORD</b></h4>
                                <p>Masukkan Email Untuk Mendapatkan Link Reset Password</p>
                            </div>
                            <form action="{{ route('password.email') }}" method="post">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="email"><b>Email</b></label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        <div class="form-control-icon">
                                            <i data-feather="at-sign"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <input type="submit" value="Dapatkan Link Reset Password" class="btn btn-primary float-end btn-block">
                                </div>


                            </form>
                            <div class="divider">
                                <div class="divider-text">Atau</div>
                            </div>

                            <div class="row">
                                <div class="">
                                    <a href="/login"><button class="btn btn-secondary btn-block float-end">Kembali</button></a>
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