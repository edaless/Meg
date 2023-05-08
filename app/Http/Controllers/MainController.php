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

        return view('pages.home', compact('events'));
    }

    public function eventCreate()
    {

        return view('pages.eventCreate');
    }

    public function eventStore(Request $request)
    {

        $data = $request->validate([
            'tipo' => 'required|integer',
            // 'ora' => 'required|time',
            'data' => 'required|date',

        ]);
        $data = $request['ora'];

        $event = new Event();

        $event->tipo = $data['tipo'];
        $event->ora = $data['ora'];
        $event->data = $data['data'];


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
            'nome' => 'required|string'

        ]);

        $type = new Type();

        $type->nome = $data['nome'];


        $type->save();

        return redirect()->route('home');
    }
}
