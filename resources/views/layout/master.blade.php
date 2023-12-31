<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('mahasiswa')}}">Data Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dosen')}}">Data Dosen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('info',['fakultas' => 'FMIPA', 'jurusan' => 'Matematika'])}}">Info</a>
      </li>
    </ul>
  </div>
</nav>

@yield('content')

<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
  <a href="{{ url('informasi/FMIPA/Matematika') }}">Jurusan Matematika</a> |
  Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Duniailkom
</div>
</footer>

</body>
</html>
