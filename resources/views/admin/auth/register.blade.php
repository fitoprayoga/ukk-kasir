<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER OUTDOORGEAR</title>
    <link rel="stylesheet" href="/vendor/admin/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/vendor/admin/assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-5">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="https://t3.ftcdn.net/jpg/05/26/21/22/360_F_526212206_S4OI8Td03Cs2uSxchlKBrSrt5mVrm9WN.jpg" alt="" style="width: 50px; height: 50px;">
                                <h3><b>OUTDOORGEAR</b></h3>
                                <p>Toko Perlengkapan Alat Outdoor</p>
                            </div>
                            <form action="/register/do" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><b>Nama User</b></label>
                                            <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama User">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><b>Email Pengguna</b></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><b>Level</b></label>
                                            <select class="form-control @error('level') is-invalid @enderror" name="level" placeholder="Level">
                                                <option value="">Level</option>
                                                @if($user->where('level', 'Admin')->count() == 0)
                                                <option value="Admin">Admin</option>
                                                @endif
                                                @if($user->where('level', 'Admin')->count() > 0)
                                                <option value="Kasir">Kasir</option>
                                                @endif
                                            </select>
                                            @error('level')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><b>Password</b></label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for=""><b>Konfirmasi Password</b></label>
                                            <input type="password" pattern=".{8,}" class="form-control @error('re_password') is-invalid @enderror" name="re_password" placeholder="Konfirmasi Password">
                                            @error('re_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="clearfix">
                                    <button class="btn btn-primary btn-block float-end">Daftar</button>
                                </div>
                            </form>
                            <div class="divider">
                                <div class="divider-text">Atau</div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <a href="/login"><button class="btn btn-secondary btn-block float-end">Masuk</button></a>
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