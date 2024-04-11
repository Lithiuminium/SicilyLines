<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des bateaux</title>
    <style>
        
        body{
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;

        }
        table{
            margin:auto;
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            padding: 10px;
            font-weight: bold;
        }
        td{
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>{{$titre}}</h1>
    <h3> Date : {{$date}}</h3>
    <p>
        <table>
            <tr>
                <th> Nom </th>
                <th> Longueur </th>
                <th> Largeur </th>
                <th> Vitesse </th>
                <th> Equipement(s) </th>
            </tr>
            @foreach($ferrys as $ferry)
            
            <tr> 
                <td>{{$ferry->NOM}}</td>
                <td>{{$ferry->LONGUEUR}} mètres</td>
                <td>{{$ferry->LARGEUR}} mètres</td>
                <td>{{$ferry->VITESSE}} noeuds</td>
                <td>
            @foreach($ferry->equipements as $equipement)
            {{$equipement->LIBELLEEQUIPEMENT}},
            @endforeach
        </td>
        
            </tr>
    @endforeach
        
    </table>
    </p>                
                
</body>
</html>