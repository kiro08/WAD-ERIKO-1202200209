@extends('main.header')
@section('content')
 @auth

<!doctype html> 
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Add Car | eriko_1202200209</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/asset/style/index.css" rel="stylesheet">
</head>

<body>

  <!-- Form Start -->
  <section id='form'>
    <div class="container">
      <h1 class="add">Tambah Mobil</h1>
      <p class="addparagraf">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="/product" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="name" name="user_id" value="{{ Auth::user()->id }}">

        <label for="nama">Nama Mobil</label>
        <input type="text" id="name" name="name" placeholder="Masukkan Nama Mobil">

        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="owner" name="owner" placeholder="Masukkan Nama Pemilik">

        <label for="merk">Merk</label>
        <input type="text" id="name" name="merk" placeholder="Masukkan Merk Mobil">

        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="datetime-local" value="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}" class="form-control" id="name" name="tanggal">

        <label for="name">Deskripsi</label>
        <textarea name="deskripsi" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>

        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="custom-file-input" id="img_path" name="img_path" style="height: 40px;">

        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" name="btn-simpan" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <!-- Form End -->

  <div class="container">
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="5000" data-autohide="false">
    <div class="toast-header">
        <span class="rounded mr-2 bg-warning" style="width: 15px;height: 15px"></span>

        <strong class="mr-auto">Alert</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
    <div class="toast-body">
        Data Berhasil diupdate.
    </div>
</div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.js"></script>


    <script>
        $('.toast').toast('show');
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

@endauth
@endsection