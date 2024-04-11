<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Modifier un bateau</h2>
        <form action="{{route('ferry.update',$ferry->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('put')
        
        <div class="mb-3">
            <label for="NOM" class="form-label">Modifier le nom</label>
            <input type="text" class="form-control @error('NOM') is-invalid @enderror " 
            name="NOM" id="NOM"  value ="{{old('NOM',$ferry->NOM)}}">
            @error('NOM')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="LONGUEUR" class="form-label">Modifier la longueur </label>
            <input type="number" class="form-control  @error('LONGUEUR') is-invalid @enderror" 
            name="LONGUEUR"  id="LONGUEUR"  value ="{{old('LONGUEUR',$ferry->LONGUEUR)}}">
            @error('LONGUEUR')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
    
        <div class="mb-3">
            <label for="LARGEUR" class="form-label">Modifier la largeur</label>
            <input type="number" class="form-control   @error('LARGEUR') is-invalid @enderror" 
            name="LARGEUR" id="LARGEUR"  value ="{{old('LARGEUR',$ferry->LARGEUR)}}">
            @error('LARGEUR')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
    
        <div class="mb-3">
            <label for="VITESSE" class="form-label">Modifier la vitesse</label>
            <input type="number" class="form-control   @error('VITESSE') is-invalid @enderror" 
            name="VITESSE" id="VITESSE"  value ="{{old('VITESSE',$ferry->VITESSE)}}">
            @error('VITESSE')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
        </div>
    
        <div class="mb-3">
            <label for="formFile" class="form-label">Télécharger une image </label>
            <input class="form-control @error('PHOTO') is-invalid @enderror"
            name="PHOTO" type="file" id="PHOTO" value="{{old('PHOTO',$ferry->PHOTO)}}">
            @error('PHOTO')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        @php
        $i = 0;
        @endphp
    
        @foreach($equipements as $equipement)
        <input type="checkbox" name="equipement_id[]" id="cbox{{$i++}}" onclick="activation(id,{{$equipement->id}})" value='{{$equipement->id}}' {{ $ferry->equipements->contains($equipement->id) ? 'checked' : '' }}>
        {{$equipement->LIBELLEEQUIPEMENT}}
        <br>
        @endforeach
    
    
        <br>
        <div class="control">
            <button class="btn btn-success" type="submit">Envoyer</button>
            <a href="{{route('ferry.index')}}" class="btn btn-dark">Annuler</a>
        </div>
        </form>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </div>
</body>

</html>

