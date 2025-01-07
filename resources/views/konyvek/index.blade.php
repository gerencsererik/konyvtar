<x-layout>
    <h1>Könyvek</h1>
    <ul>
        <div class="row">
            @foreach ($konyvek as $book)
                {{-- <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li> --}}
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{$book->nev}}</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Író: {{$book->iro}}</li>
                              <li class="list-group-item">Született: {{$book->iro_szuletesi_eve}}</li>
                              <li class="list-group-item">Neme {{$book->iro_neme}}</li>
                              <li class="list-group-item">Kiadó {{$book->kiado}}</li>
                            </ul>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="/konyvek/{{$book->id}}">Információ</a></div>
                      </div>
                </div>
            @endforeach
        </div>
    </ul>
</x-layout>
