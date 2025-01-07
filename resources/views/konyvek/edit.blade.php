<x-layout>
    <h1>Könyv felülírása</h1>
    <form method="POST" action="{{route('konyvek.update', $konyv->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nev" class="form-label">Név</label>
            <input type="text" class="form-control @error('nev') is-invalid @enderror" id="nev" name="nev"
            value="{{$konyv->nev}}">
            @error('nev')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="iro" class="form-label">Író</label>
            <input type="text" class="form-control @error('iro') is-invalid @enderror" id="iro" name="iro"  value="{{$konyv->iro}}">
            @error('iro')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="iro_szuletesi_eve" class="form-label">Született</label>
            <input type="number" class="form-control @error('iro_szuletesi_eve') is-invalid @enderror" id="iro_szuletesi_eve" name="iro_szuletesi_eve"  value="{{$konyv->iro_szuletesi_eve}}">
            @error('iro_szuletesi_eve')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="iro_neme" class="form-label">Neme</label>
            <input type="text" class="form-control @error('iro_neme') is-invalid @enderror" id="iro_neme" name="iro_neme" value="{{$konyv->iro_neme}}">
            @error('iro_neme')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="kiado" class="form-label">Kiadó</label>
            <input type="text" class="form-control @error('kiado') is-invalid @enderror" id="kiado" name="kiado" value="{{$konyv->kiado}}">
            @error('kiado')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
