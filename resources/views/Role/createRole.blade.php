@extends("layouts.base")
@section("titre")
Ajout D'un Role
@endsection

@section("contenu")
<div class="container my-2">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1>Fomulaire d'ajout d'un role</h1>
        <form action="/Role" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="nom">NOM</label>
                <input name="nom" minlength="2" maxlength="100" required type="text"  class="form-control" id="nom"
                    placeholder="le nom">
                @error("nom")
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
