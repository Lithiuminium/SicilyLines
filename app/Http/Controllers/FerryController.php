<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Ferry;
use App\Models\Equipement;
use App\Http\Requests\FerryRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class FerryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $ferrys = Ferry::all();
        return view('ferry',compact('ferrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements=Equipement::all();
        return view("create", compact('equipements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FerryRequest $ferryRequest) : RedirectResponse{

        $ferry=new Ferry();
        $ferry->NOM =$ferryRequest->input('NOM');
        $ferry->LONGUEUR =$ferryRequest->input('LONGUEUR');
        $ferry->LARGEUR =$ferryRequest->input('LARGEUR');
        $ferry->VITESSE =$ferryRequest->input('VITESSE');

        if($ferryRequest->hasFile('PHOTO')){
            $ferryRequest->file("PHOTO")->getPathname();
            $imageName=time().'.'.$ferryRequest->PHOTO->extension();
            $ferryRequest->PHOTO->move(public_path('sicile'),$imageName);
            $ferry->PHOTO=$imageName;

        }

        $ferry->save();
        $ferry->equipements()->attach($ferryRequest->equipement_id);

        return redirect()->route('ferry.index')->with('info',"Le bateau a bien été créé ");


}

    /**
     * Display the specified resource.
     */
    public function show(Ferry $ferry)
    {
        return view('show',compact('ferry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ferry $ferry)
    {
        $equipements = Equipement::all();
        return view('edit', compact('ferry', 'equipements'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(FerryRequest $ferryRequest, Ferry $ferry) :RedirectResponse
{
    // Traiter les équipements
    $ferry->equipements()->sync($ferryRequest->equipement_id);

    // Mettre à jour les autres attributs du bateau
    $ferry->update([
        'NOM' => $ferryRequest->input('NOM'),
        'LONGUEUR' => $ferryRequest->input('LONGUEUR'),
        'LARGEUR' => $ferryRequest->input('LARGEUR'),
        'VITESSE' => $ferryRequest->input('VITESSE')
    ]);

    // Traiter la photo
    if ($ferryRequest->hasFile('PHOTO')) {
        $imageName = time().'.'.$ferryRequest->PHOTO->extension();
        $ferryRequest->PHOTO->move(public_path('sicile'), $imageName);
        $ferry->PHOTO = $imageName;
        $ferry->save();
    }

    return redirect()->route('ferry.index')->with('info', "Le bateau a bien été modifié ");
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ferry $ferry) : RedirectResponse
    {
        $ferry->delete();
        return back()->with('info',"Le bateau a été supprimé"); 
    }


    public function creerPDF()
    {
       
        // $ferriesAvecEquipements = DB::table('ferries')
        //     ->join('equipement_ferry', 'ferries.id', '=', 'equipement_ferry.ferry_id')
        //     ->join('equipements', 'equipement_ferry.equipement_id', '=', 'equipements.id')
        //     ->select('ferries.*', 'equipements.LIBELLEEQUIPEMENT')
        //     ->get();
        // foreach ($ferriesAvecEquipements as $ferry) {
        //     echo "Nom du bateau : " . $ferry->NOM . "<br>";
        //     echo "Longueur : " . $ferry->LONGUEUR . "<br>";
        //     echo "Largeur : " . $ferry->LARGEUR . "<br>";

        //     // Pour les équipements, vous pouvez accéder à la colonne LIBELLEEQUIPEMENT
        //     echo "Équipement : " . $ferry->LIBELLEEQUIPEMENT . "<br>";
            
        //     // Ajoutez d'autres détails selon vos besoins
        //     echo "<br>";
        //     }
            

        $ferry = Ferry::all();
        $data = [
            'titre' => 'Liste des Bateaux',
            'date' => date("d/m/y"),
            'ferrys' => $ferry,
        ];
    
        // $pdf = app('dompdf.wrapper')->loadView('pdf', $data);
        $pdf =PDF::loadView('pdf',$data);

        return $pdf->download('Bateaux_pdf.pdf');
    }
    
}
