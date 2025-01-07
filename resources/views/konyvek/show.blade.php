<x-layout>
    <h1>{{$book->nev}}</h1>
    <p>Író: {{$book->iro}}</p>
    <p>Születési év: {{$book->iro_szuletesi_eve}}</p>
    <p>Neme: {{$book->iro_neme}} </p>
    <p>Kiadó: {{$book->kiado}} </p>
    <a href="{{route('konyvek.edit', $book->id)}}"><button class="btn btn-warning my-2">szerkesztés</button></a>
    <form action="{{route('konyvek.destroy', $book->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</x-layout>
