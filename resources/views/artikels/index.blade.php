@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Daftar Artikel</h3>
    <a href="/items/create" class="btn btn-dark btn-sm" role="button" aria-pressed="true">Buat Artikel</a>

<div class="card-body">
<table class="table">
    <thead class="thead-dark text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Pengaturan</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($data_artikel as $item)
          <tr class="text-center">
            <th scope="row">{{$item->id}}</th>
            <td><a href="/items/{{$item->id}}" class="text-dark">{{$item->judul}}</a></td>
            <td><a href="/items/{{$item->id}}/edit" class="btn btn-outline-info btn-sm" role="button" aria-pressed="true">Edit</a>
                <form action="/items/{{$item->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                </form>
            </td>
          </tr>
        @empty
            <td colspan="4" class="alert-info">
                Belum Ada...
            </td>
        @endforelse

    </tbody>
  </table>
  </div>
</div>
@endsection

@push('Js')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>
@endpush
