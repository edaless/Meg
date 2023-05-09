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
            'tipo' => 'required',
            // 'ora' => 'required|time',
            'data' => 'required|date',

        ]);
        $data = $request['ora'];

        $event = new Event();

        $event->tipo = intval($data['tipo']);
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
            'name' => 'required|string'

        ]);

        $type = new Type();

        $type->name = $data['name'];


        $type->save();

        return redirect()->route('home');
    }
}
