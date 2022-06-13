@extends('layouts.app')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Form Data Diri</title>
</head>
<body class="bg">


<h1 class="text-center">Form Edit Data</h1>
<div class="container">
    <form method="post" action="{{ route('updatemahasiswa', $siswa->id) }}">
        {{ csrf_field() }}
        <div class="row g-3">
            <div class="col">
            <br>
            <label>NRP:</label>
            <input type="text"  class="form-control" name="nrp" value="{{ $siswa->nrp }}">
            </div>
            <div class="col">
                <br>
                <label>NAMA:</label>
                <input type="text"  class="form-control" name="nama" value="{{ $siswa->nama }}">
            </div>
        </div>
        <div class="row g-3">

            <div class="col">
            <br>
            <label>EMAIL:</label>
            <input type="text"  class="form-control" name="email" value="{{ $siswa->email }}">
        </div>
        <div class="col">
            <br>
            <label>ALAMAT:</label>
            <input type="text"  class="form-control" name="alamat" value="{{ $siswa->alamat }}">
        </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary float-right"S name="kirim">Kirim</button>
    </form>
    
</div>
</body>
</html>

<br>
<br>
@endsection

