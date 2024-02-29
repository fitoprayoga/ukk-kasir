<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active" id="sidebar2">
        <div class="sidebar-menu">
            <ul class="menu">

                <div class="text-center mb-5">
                    <img src="https://t3.ftcdn.net/jpg/05/26/21/22/360_F_526212206_S4OI8Td03Cs2uSxchlKBrSrt5mVrm9WN.jpg" alt="" style="width: 50px; height: 50px;">
                    <h3><b>OUTDOORGEAR</b></h3>
                    <p>Toko Perlengkapan Alat Outdoor</p>
                </div>
                
                @if(auth()->user()->level == 'Admin')
                <li class="sidebar-item">
                    <a href="/admin/dashboard" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span><b>Dashboard</b></span>
                    </a>

                </li>

                <li class="sidebar-item">
                    <a href="/admin/kategori" class="sidebar-link">
                        <i data-feather="list" width="20"></i>
                        <span><b>Kategori</b></span>
                    </a>
                </li>               

                <li class="sidebar-item">
                    <a href="/admin/produk" class="sidebar-link">
                        <i data-feather="box" width="20"></i>
                        <span><b>Produk</b></span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/admin/transaksi" class="sidebar-link">
                        <i data-feather="clipboard" width="20"></i>
                        <span><b>Laporan</b></span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/admin/user" class="sidebar-link">
                        <i data-feather="user" width="20"></i>
                        <span><b>User</b></span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/admin/info" class="sidebar-link">
                        <i data-feather="info" width="20"></i>
                        <span><b>Info User</b></span>
                    </a>
                </li>

                @elseif(auth()->user()->level == 'Kasir')
                <li class="sidebar-item">
                    <a href="/kasir/dashboard" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span><b>Dashboard</b></span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/kasir/transaksi" class="sidebar-link">
                        <i data-feather="shopping-cart" width="20"></i>
                        <span><b>Transaksi</b></span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/kasir/info" class="sidebar-link">
                        <i data-feather="info" width="20"></i>
                        <span><b>Info User</b></span>
                    </a>

                </li>

                </li>
                @endif
            </ul>
        </div>
    </div>
</div>