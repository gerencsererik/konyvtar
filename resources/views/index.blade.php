@extends('layouts.app')

@section('content')
<h1>Könyvek</h1>
<a href="{{ route('konyvek.create') }}" class="btn btn-primary mb-3">Új könyv hozzáadása</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Név</th>
            <th>Író</th>
            <th>Kiadó</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($konyvek as $konyv)
        <tr>
            <td>{{ $konyv->nev }}</td>
            <td>{{ $konyv->iro }}</td>
            <td>{{ $konyv->kiado }}</td>
            <td>
                <a href="{{ route('konyvek.edit', $konyv->id) }}" class="btn btn-warning">Szerkesztés</a>
                <form action="{{ route('konyvek.destroy', $konyv->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Törlés</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
