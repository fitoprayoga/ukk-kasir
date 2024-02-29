<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .resi-container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .resi-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .resi-details {
            margin-bottom: 20px;
        }

        .resi-details label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .resi-details span {
            display: block;
            margin-bottom: 10px;
        }

        .barcode {
            text-align: center;
            margin-top: 20px;
            clear: both;
        }

        .barcode img {
            max-width: 100%;
            height: auto;
        }

        .resi-sinopsis {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
            /* Menambahkan margin atas pada .resi-sinopsis */
        }
    </style>
</head>

<body>
    <div class="resi-container">
        <div class="resi-header">
            <h2>NOTA TRANSAKSI</h2>
            <img src="https://t3.ftcdn.net/jpg/05/26/21/22/360_F_526212206_S4OI8Td03Cs2uSxchlKBrSrt5mVrm9WN.jpg" alt="" style="width: 50px; height: 50px;">
            <h3>OUTDOORGEAR</h3>
            <p>Toko Perlengkapan Alat Outdoor</p>
            <p>JL. Arjuno-Welirang No.7, Kec. Trawas, Kab. Mojokerto</p>
        </div>
        <div class="resi-details">
            <label>Transaksi pada Tanggal : </label> <span>{{$transaksi->created_at->timezone('Asia/Jakarta')}}</span><br>
            <label>Detail produk yang dibeli : </label> <span></span>
            <table border="1" style="width: 500px; margin-bottom: 30px" class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th><b>Nomor</b></th>
                        <th><b>Nama Produk</b></th>
                        <th><b>Jumlah</b></th>
                        <th><b>Subtotal</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi_detail as $item)
                    <tr>
                        <td style="text-align: center;">{{$loop->iteration}}</td>
                        <td style="text-align: center;">{{$item->produk_name}}</td>
                        <td style="text-align: center;">{{$item->qty}}</td>
                        <td style="text-align: center;">Rp. {{$item->subtotal}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <label>Total pembayaran : </label> <span>Rp. {{$transaksi->total}}</span><br>
            <label>Uang pembayaran : </label> <span>Rp. {{$transaksi->dibayarkan}}</span><br>
            <label>Uang kembalian : </label> <span>Rp. {{$transaksi->kembalian}}</span><br>
            <label>Status : </label> <span>{{$transaksi->status}}</span>
            <div class="barcode">
                {!! DNS1D::getBarcodeHTML('$ ' .$transaksi->kode, 'C39+', 6.3, 50) !!}
            </div>
        </div>

        <p><i>*Barang yang sudah dibeli tidak bisa dikembalikan lagi</i></p>
    </div>
</body>

</html>