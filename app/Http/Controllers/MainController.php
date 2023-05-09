<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Type;

class MainController extends Controller
{

    public function home()
    {

        $events = event::all();
        $types = type::all();

        return view('pages.home', compact('types', 'events'));
    }

    public function eventCreate()
    {

        $types = type::all();

        return view('pages.eventCreate', compact('types'));
    }

    public function eventStore(Request $request)
    {

        $data = $request->validate([
            'type_id' => 'required|integer',
            'anno' => 'required|integer',
            'mese' => 'required|integer',
            'giorno' => 'required|integer',
            'ora' => 'required|integer',
            'minuto' => 'required|integer',

        ]);

        // creo event                                          
        $event = event::make($data);
        // prendo type da db                           
        $type = type::find($data['type_id']);

        // associo event alla type                               
        $event->type()->associate($type);
        // salvo il event                                    
        $event->save();

        return redirect()->route('home');
    }

    public function typeCreate()
    {

        return view('pages.typeCreate');
    }

    public function typeStore(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string'

        ]);

        $type = new Type();

        $type->name = $data['name'];


        $type->save();

        return redirect()->route('home');
    }
}
