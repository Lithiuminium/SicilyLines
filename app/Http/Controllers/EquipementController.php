<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\{Ferry, Equipement};
use App\Http\Requests\EquipementRequest;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Equipement $equipment)
    {
        $equipment->with("ferrys")->get();
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
    public function store(EquipementRequest $equipementRequest) : RedirectResponse{

        $equipement=new Equipement();
        $equipement->ferry_id =$equipementRequest->input('ferry_id');
        $equipement->equipement_id =$equipementRequest->input('equipement_id');

        }

        $equipement->save();

        return redirect()->route('ferry.index')->with('info',"Le bateau a bien été créé ");


}

    /**
     * Display the specified resource.
     */
    public function show(Equipement $equipement)
    {
        return view('show',compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
