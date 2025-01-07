<x-layout>
    <h1>Új könyv felvétele</h1>
    <form method="POST" action="{{route('konyvek.store')}}">
        @csrf
        <div class="mb-3">
            <label for="nev" class="form-label">Név</label>
            <input type="text" class="form-control @error('nev') is-invalid @enderror" id="nev" name="nev"
            value="{{old('nev')}}">
            @error('nev')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="iro" class="form-label">Író</label>
            <input type="text" class="form-control @error('iro') is-invalid @enderror" id="iro" name="iro"  value="{{old('iro')}}">
            @error('iro')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="iro_szuletesi_eve" class="form-label">születési év</label>
            <input type="number" class="form-control @error('iro_szuletesi_eve') is-invalid @enderror" id="iro_szuletesi_eve" name="iro_szuletesi_eve"  value="{{old('iro_szuletesi_eve')}}">
            @error('iro_szuletesi_eve')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="iro_neme" class="form-label">neme</label>
            <input type="text" class="form-control @error('iro_neme') is-invalid @enderror" id="iro_neme" name="iro_neme" value="{{old('iro_neme')}}">
            @error('iro_neme')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="kiado" class="form-label">kiadó</label>
            <input type="text" class="form-control @error('kiado') is-invalid @enderror" id="kiado" name="kiado" value="{{old('kiado')}}">
            @error('kiado')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
