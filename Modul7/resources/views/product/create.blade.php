
<?php
  $action = "your-form-action-url";
  $title = "My Form Title";
  $method = "your-form-method-url";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form {{ $title }} Produk</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
	integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="{{ asset('assets/jquery.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body style="width: 95%;">
	<div class="row justify-content-center" style="margin-top: 13%;">
		<div class="col-3">
			<h4>Form {{ $title }} Produk</h4>
			@extends('product.index')

@section('content')
  <h1>{{ $title }} Produk</h1>
  <form method="POST" action="/{{ $action }}" enctype="multipart/form-data">
    @csrf

    @if ($method === 'PUT')
      @method('PUT')
    @endif

    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $data->name ?? '' }}" required>
    </div>

    <div class="form-group">
      <label for="price">Harga:</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $data->price ?? '' }}" required>
    </div>

    <button type="submit" class="btn btn-primary">{{ $title }}</button>
  </form>
@endsection

		</div>
	</div>
</body>
</html>