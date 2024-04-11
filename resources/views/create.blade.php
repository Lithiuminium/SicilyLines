<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un bateau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Ajouter un bateau</h2>

    <form action="{{route('ferry.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="NOM" class="form-label">Nom</label>
            <input type="text" class="form-control @error('NOM') is-invalid @enderror" name="NOM" id="NOM" placeholder="Nom du bateau" value="{{old('NOM')}}">
            @error('NOM')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="LONGUEUR" class="form-label">Longueur</label>
            <input type="number" class="form-control @error('LONGUEUR') is-invalid @enderror" name="LONGUEUR" id="LONGUEUR" placeholder="Longueur du bateau" value="{{old('LONGUEUR')}}">
            @error('LONGUEUR')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="LARGEUR" class="form-label">Largeur</label>
            <input type="number" class="form-control @error('LARGEUR') is-invalid @enderror" name="LARGEUR" id="LARGEUR" placeholder="Largeur du bateau" value="{{old('LARGEUR')}}">
            @error('Largeur')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="VITESSE" class="form-label">Vitesse</label>
            <input type="number" class="form-control @error('VITESSE') is-invalid @enderror" name="VITESSE" id="VITESSE" placeholder="Vitesse du bateau" value="{{old('VITESSE')}}">
            @error('VITESSE')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Ajouter une image</label>
            <input class="form-control @error('PHOTO') is-invalid @enderror" name="PHOTO" type="file" id="PHOTO" value="{{old('PHOTO')}}">
            @error('PHOTO')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        @php
            $i=0;
        @endphp
        @foreach($equipements as $equipement)
        <input type="checkbox" name="equipement_id[]" id="cbox{{$i++}}" onclick="activation(id,{{$equipement->id}})" value='{{$equipement->id}}'>
        {{$equipement->LIBELLEEQUIPEMENT}}
        <br>
        @endforeach

        <br>
        <div class="control">
            <button class="btn btn-success" type="submit">Envoyer</button>
            <a href="{{route('ferry.index')}}" class="btn btn-dark">Annuler</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>