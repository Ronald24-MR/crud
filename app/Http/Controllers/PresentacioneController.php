<?php

namespace App\Http\Controllers;

use App\Models\Presentacione;
use Illuminate\Http\Request;

/**
 * Class PresentacioneController
 * @package App\Http\Controllers
 */
class PresentacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentaciones = Presentacione::paginate();

        return view('presentacione.index', compact('presentaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $presentaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presentacione = new Presentacione();
        return view('presentacione.create', compact('presentacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Presentacione::$rules);

        $presentacione = Presentacione::create($request->all());

        return redirect()->route('presentaciones.index')
            ->with('success', 'Presentacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presentacione = Presentacione::find($id);

        return view('presentacione.show', compact('presentacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentacione = Presentacione::find($id);

        return view('presentacione.edit', compact('presentacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Presentacione $presentacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentacione $presentacione)
    {
        request()->validate(Presentacione::$rules);

        $presentacione->update($request->all());

        return redirect()->route('presentaciones.index')
            ->with('success', 'Presentacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $presentacione = Presentacione::find($id)->delete();

        return redirect()->route('presentaciones.index')
            ->with('success', 'Presentacione deleted successfully');
    }
}
