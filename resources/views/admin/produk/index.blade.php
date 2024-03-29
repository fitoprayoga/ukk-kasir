<section class="section">
<div class="container-fluid pt-2" id="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h3>Data Produk</h3>
                    <a href="/admin/produk/create" class="btn btn-primary">Tambah Produk</a>
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="vertical-align: middle;">{!! DNS1D::getBarcodeHTML('$ '. $item->buku, 'C39') !!}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->diskon }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/admin/produk/{{$item->id}}/edit" class="btn btn-info btn-sm"><i data-feather="edit"></i></a>
                                        <!--<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>-->
                                        <form action="/admin/produk/{{$item->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm ml-1"><i data-feather="trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
$(document).ready(function() {
    var table = $('#table1').DataTable();
    
    // Event delegation for delete button
    $('#table1').on('click', '.delete-btn', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        var confirmDelete = confirm('Are you sure you want to delete?');
        if (confirmDelete) {
            form.submit();
        }
    });
    
    // Reinitialize Feather Icons after DataTables pagination
    table.on('draw.dt', function () {
        feather.replace();
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>