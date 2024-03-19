<?php

namespace App\Http\Controllers;

use App\Models\Corsi;
use App\Models\Prenotazione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrenotazioneController extends Controller
{
    public function index()
    {
        /* $prenotaziones = Prenotazione::where('user_id', Auth::user()->id)
                      ->orderBy('id')
                      ->get();
        return view('prenotaziones', ['prenotaziones' => $prenotaziones]) */;
        /* $prenotaziones = Prenotazione::orderBy('id');
        return view('prenotaziones', ['prenotaziones' => $prenotaziones->get()]); */
    // Verifica se l'utente è autenticato e se è un amministratore
        if(Auth::check() && Auth::user()->isAdmin()) {
            // Recupera le prenotazioni
            $prenotaziones = Prenotazione::orderBy('id')->get();
            return view('prenotaziones', ['prenotaziones' => $prenotaziones]);
        } else {
            // Se l'utente non è autenticato o non è un amministratore, reindirizza e mostra un messaggio di errore
            return redirect()->route('activities')->with('error', 'Solo gli amministratori possono visualizzare le prenotazioni.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }
    public function show(Prenotazione $prenotazione)
    {
        return view('prenotazionesDetail', ['prenotazione' => $prenotazione]);
    }

    

    public function update(Request $request, $id)
    {
        // Logica per aggiornare un elemento esistente
    }

    public function destroy(Prenotazione $prenotazione)
    {
        $prenotazione->delete();
        return redirect('/prenotaziones');
    }
}
