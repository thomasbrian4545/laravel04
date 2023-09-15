@extends('layout.master')
@section('title','Informasi Fakultas')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
  <h1>Informasi Fakultas {{$fakultas}}, Jurusan {{$jurusan}}</h1>
</div>
<x-alert label="nama" field="nama"/>
<x-alert label="nik" field="nik"/>
@endsection

{{-- <x-layout-master>
    @section()

    @endsection
</x-layout-master> --}}
