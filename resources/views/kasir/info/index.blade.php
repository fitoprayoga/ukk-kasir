<div class="container-fluid pt-2" id="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-content">
                    <div class="card-body">
                        <h3>Info Akun</h3>
                        <p class="card-text">Ini adalah info dari akun yang telah anda loginkan.</p>
                        <form class="form" method="post">
                            <div class="form-body">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="name"><b>Nama User</b></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="name" placeholder="Nama User" value="{{auth()->user()->name}}" disabled>
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>

                                    <div class="form-group position-relative has-icon-left">
                                        <label for="level"><b>Level</b></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="level" placeholder="Level" value="{{auth()->user()->level}}" disabled>
                                            <div class="form-control-icon">
                                                <i data-feather="bar-chart"></i>
                                            </div>
                                        </div>

                                        <div class="form-group position-relative has-icon-left">
                                            <label for="email"><b>Email</b></label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="email" placeholder="Email" value="{{auth()->user()->email}}" disabled>
                                                <div class="form-control-icon">
                                                    <i data-feather="at-sign"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <a href="/logout" class="btn btn-secondary">Logout</a>
                                        <a href="/kasir/transaksi" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>