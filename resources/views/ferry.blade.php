<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Bateaux</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Metrophobic|Poly" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Libre Franklin", sans-serif;
            background-image: url('../sicile/claire.jpg');
            background-size: cover;
            background-position: center; /* Centrer l'image */
    background-attachment: fixed; /* Bloquer l'arrière-plan */
        }

        h1 {
            margin-top:-55px;
            font-size: 100px;
            color: rgb(255, 255, 255);
            text-align: center;
        }

        .logo img{
    width: 100px;
}

.card-link {
    cursor: pointer;
}

    nav {
    font-family: "Montserrat", sans-serif;
    background-color:transparent;
    color: #000000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    padding-top: 15px;
    text-align: center; /* Centrer les éléments horizontalement */

}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-right: 80px;
}

.nav-links li a {
    color: #00449c;
    text-decoration: none;
    font-size: 1.3em;
    transition: color 0.3s ease;
}

.nav-links li a:hover {
    color: #000000;
}

.accueil{
    color:red;
}

        .card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Marge entre les cartes */
    margin-top:30px;
    justify-content: center;
}

        .card {
            margin-left: 4%;
            margin-right: 4%;
            margin-bottom: 30px;
            width: 300px; /* Largeur fixe */
            height: 400px;
            border-radius: 20px;
            background: #f5f5f5;
            position: relative;
            padding: 1.8rem;
            -webkit-transition: 0.5s ease-out;
            transition: 0.5s ease-out;
            overflow: visible;
        }

        .card-details {
            color: rgb(0, 0, 0);
            height: 100%;
            gap: .5em;
            display: grid;
            place-content: center;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            
        }

        .card-details img {
    width: 100%; /* Utiliser 100% de la largeur de son conteneur */
    height: 100%; /* Maintenir le ratio hauteur/largeur */
    max-height: 250px; /* Limiter la hauteur maximale de l'image */
    border-radius: 10px;
}

.card-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.card-buttons .btn-warning {
    text-decoration: none;
    text-align: center;
    width: 45%;
    border-radius: 1rem;
    border: none;
    background-color: #000000;
    color: #fff;
    font-size: 1rem;
    padding: .5rem 1rem;
    position: relative;
    opacity: 0;
    transition: 0.5s ease-out;
    cursor: pointer;
    font-family: 'Courier New', Courier, monospace;
}

.card-buttons .btn-warning:hover {
    background-color: #c1121f;
    transition: 0.9s ease;
}

        .card-button1 {
            text-decoration: none;
            text-align: center;
            -webkit-transform: translate(-100%, 125%);
            -ms-transform: translate(-100%, 125%);
            transform: translate(-100%, 125%);
            width: 45%;
            border-radius: 1rem;
            border: none;
            background-color: #000000;
            color: #fff;
            font-size: 1rem;
            padding: .5rem 1rem;
            position: absolute;
            bottom: 0;
            opacity: 0;
            -webkit-transition: 0.3s ease-out;
            transition: 0.5s ease-out;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
            left: 45%;
        }

        .card-button2 {
            text-decoration: none;
            text-align: center;
            -webkit-transform: translate(-30%, 125%);
            -ms-transform: translate(-30%, 125%);
            transform: translate(-30%, 125%);
            width: 45%;
            border-radius: 1rem;
            border: none;
            background-color: #c1121f;
            color: #fff;
            font-size: 1rem;
            padding: .5rem 1rem;
            position: absolute;
            bottom: 0;
            opacity: 0;
            -webkit-transition: 0.3s ease-out;
            transition: 0.5s ease-out;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
            left: 65%;
        }


        /*Text*/
        .text-title {
        padding-top:60px;
            font-size: 1.7em;
            font-weight: bold;
        }

        /*Hover*/
        .card:hover {
            box-shadow: 0px 0px 30px 1px rgb(255, 255, 255);
        }

        .card:hover .card-button1 {
            -webkit-transform: translate(-100%, 50%);
            -ms-transform: translate(-100%, 50%);
            transform: translate(-100%, 50%);
            opacity: 1;
            text-decoration: none;
            color: #fff;
        }


        .card:hover .card-button2 {
            -webkit-transform: translate(-30%, 50%);
            -ms-transform: translate(-30%, 50%);
            transform: translate(-30%, 50%);
            opacity: 1;
            text-decoration: none;
            color: #fff;
        }

        .card-button2:hover {
            background-color: #9c0000;
            transition: 0.9s ease;
        }

        .card-button-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
            align-items: center;
}



    </style>
</head>

<nav>
    <div class="logo">
        <img src="../sicile/encre.png" alt="Logo">
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('ferry.create') }}">Ajouter un bateau</a></li>
        <li><a href="{{ route('pdf') }}">Générer le PDF</a></li>
        <li><a class="accueil" href="{{ url('/') }}">Retour à la page d'accueil</a></li>
    </ul>
</nav>

<body>
    <br><br>
    <h1>Les Bateaux</h1>
    <div class="card-container">
        @foreach($ferrys as $ferry)
    <a href="{{ route('ferry.show', $ferry->id) }}" class="card-link">
        <div class="card">
            <div class="card-details">
                <img src= "../sicile/{{ $ferry->PHOTO }}" >
                <p class="text-title">{{ $ferry->NOM }}</p>
                
            </div>
            <div class="card-buttons">
                
                <a href="{{ route('ferry.edit', $ferry->id) }}" class="card-button1 ">Modifier</a>
                <form action="{{ route('ferry.destroy', $ferry->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="card-button2" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    </a>
@endforeach
    </div>
</body>