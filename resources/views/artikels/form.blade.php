@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/items" method="POST">
        @csrf
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="judul">
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="Isi">Isi</label>
                        <textarea class="form-control" id="Isi" rows="3" name="isi"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="Tag">Tag</label>
                        <input type="text" class="form-control" id="Tag" name="tag">
                    </div>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/items" class="btn btn-dark" role="button" aria-pressed="true">Kembali</a>
    </form>
    </div>


@endsection
