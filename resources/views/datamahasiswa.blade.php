@extends('layouts.app')
@section('content')
    
<div class="container">
    <br>
    <h2>Data Mahasiswa</h2><br>
<a class="btn btn-success" href="{{ route('tambahmahasiswa') }}">Tambah data</a>
<table style="border" class="table">
    <tr>
        <th>NRP</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
    </tr>
    @foreach ($mhs as $item)
    <tr>
        <td>{{ $item->nrp }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <a href="{{ url('editmahasiswa', $item->id) }}">edit</a> 
            | 
            <a href="{{ url('deletemahasiswa', $item->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
    

    @endsection


