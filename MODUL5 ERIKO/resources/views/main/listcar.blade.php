@extends('main.header')
@section('content')
 @auth

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>List Car | eriko_1202200209</title>
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

<!-- List Start -->
<section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Eriko_1202200209</p>
        <div class="d-flex gap-5">
        <h4><a href=""></a></h4>
          @foreach($products as $product)
          <div class='card cardcontent' style='width: 18rem;'>
						<img src="/image/{{$product->image}}" class='card-img-top' alt='fotomobil' style='padding: 16px;'/>
            <div class='card-body'>
              <h5>{{$product->name}}</a></h5>
							<p style='margin-top: 0px; margin-left:0px; margin-right: 0px; margin-bottom: 8px;'>{{$product->description}} </p>
              <br>
              <span class='d-flex'>
                <a href="/product/{{$product-> id}}/edit" class="btn btn-primary"  style='border-radius: 100px; width:100px; height: 36px;'">Detail</a>
                <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" style='border-radius: 100px; width:100px; height: 36px; margin-left:20px;'>Delete</button>
              </span>
                </form>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>


@endauth
@endsection