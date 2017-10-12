<?php

namespace App\Http\Controllers\Proyecto;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proyecto;
use Illuminate\Http\Request;
use Session;
use Auth;

class ProyectosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $proyectos = Proyecto::where('nombre', 'LIKE', "%$keyword%")
				->orWhere('descripcion', 'LIKE', "%$keyword%")
				->orWhere('url', 'LIKE', "%$keyword%")
				->orWhere('picture_url', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $proyectos = Proyecto::paginate($perPage);
        }

        return view('proyectos.proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('proyectos.proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request ->file('picture_url')->store('public');


        $requestData = $request->all();
        
        $proyecto = Proyecto::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'url' => $request['url'],
            'picture_url' => $request['picture_url'],
        ]);

        $teamModel = config('teamwork.team_model');
        $teamModel::where('id', Auth::user()->current_team_id)
                    ->update(['proyectos_id' =>$proyecto->id ]);

        Session::flash('flash_message', 'Proyecto added!');

        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('proyectos.proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('proyectos.proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($requestData);

        Session::flash('flash_message', 'Proyecto updated!');

        return redirect('proyectos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);

        Session::flash('flash_message', 'Proyecto deleted!');

        return redirect('proyectos');
    }
}
