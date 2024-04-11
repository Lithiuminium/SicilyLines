<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Metrophobic|Poly" rel="stylesheet">

<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card{
        margin-top: 90px;
    }

    .card-header-title{
        font-size: 40px;
        font-weight: bold;
    }

    .equipement{
        text-decoration: underline;
        font-weight: bold;
    }
</style>

<body>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">{{$ferry->NOM}}</p>
            <p class="card-header-title">
                <img src= "../sicile/{{ $ferry->PHOTO }}" >
                
                </p>
        </header>
    <div class="card-content">
        <div class="content">
            <br><br>
            <p>Longueur : {{$ferry->LONGUEUR}} mètres</p>
            <p>Largeur : {{$ferry->LARGEUR}} mètres</p>
            <p>Vitesse : {{$ferry->VITESSE}} noeuds</p>
            <p class="equipement">Equipement(s) du bateau: 
            @foreach($ferry->equipements as $equipement)
        <li>{{$equipement->LIBELLEEQUIPEMENT}}</li>
        @endforeach
        </p>
        </div>
    </div>
    <div >
        <a class="btn btn-dark" href="{{ url()->previous()}}"> Retour </a>
    </div>
    <br><br>
    
    <head>
        <!-- Autres balises head ... -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
</body>
</html>
