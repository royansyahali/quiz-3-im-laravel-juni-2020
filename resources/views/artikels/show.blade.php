@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Artikel {{$array['judul']}}</h3>
    <a href="/items" class="btn btn-dark btn-sm" role="button" aria-pressed="true">Kembali</a>
    <hr>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-8 text-dark">
            <h4>Judul : {{$array['judul']}}</h3>
            <h5>Slug  : {{$array['slug']}}</h5>
            <p>{{$array['isi']}}</p>
        </div>
    </div>
    @foreach ($array['tag'] as $item)
    <button type="button" class="btn btn-success">{{$item}}</button>
    @endforeach
</div>
</div>

@endsection
