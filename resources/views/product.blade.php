<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
@foreach ($data as $item)
<p>{{ $item->nama_barang }}</p>
<p>{{ $item->nama_sekolah }}</p>
<p>{{ $item->harga }}</p>
<p>{{ $item->kode_supplier }}</p>
<p>{{ $item->stok }}</p>
<p>{{ $item->foto }}</p>
<p>{{ $item->deskripsi }}</p>

<br>
@endforeach
</body>
</html>