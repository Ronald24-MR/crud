<?php

namespace App\Http\Controllers;

use App\Models\Sitio;
use Illuminate\Http\Request;

/**
 * Class SitioController
 * @package App\Http\Controllers
 */
class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitios = Sitio::paginate();

        return view('sitio.index', compact('sitios'))
            ->with('i', (request()->input('page', 1) - 1) * $sitios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitio = new Sitio();
        return view('sitio.create', compact('sitio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sitio::$rules);

        $sitio = Sitio::create($request->all());

        return redirect()->route('sitios.index')
            ->with('success', 'Sitio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sitio = Sitio::find($id);

        return view('sitio.show', compact('sitio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sitio = Sitio::find($id);

        return view('sitio.edit', compact('sitio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sitio $sitio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitio $sitio)
    {
        request()->validate(Sitio::$rules);

        $sitio->update($request->all());

        return redirect()->route('sitios.index')
            ->with('success', 'Sitio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sitio = Sitio::find($id)->delete();

        return redirect()->route('sitios.index')
            ->with('success', 'Sitio deleted successfully');
    }
}
