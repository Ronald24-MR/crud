<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

/**
 * Class LaboratorioController
 * @package App\Http\Controllers
 */
class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::paginate();

        return view('laboratorio.index', compact('laboratorios'))
            ->with('i', (request()->input('page', 1) - 1) * $laboratorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorio = new Laboratorio();
        return view('laboratorio.create', compact('laboratorio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Laboratorio::$rules);

        $laboratorio = Laboratorio::create($request->all());

        return redirect()->route('laboratorios.index')
            ->with('success', 'Laboratorio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratorio = Laboratorio::find($id);

        return view('laboratorio.show', compact('laboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorio = Laboratorio::find($id);

        return view('laboratorio.edit', compact('laboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Laboratorio $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        request()->validate(Laboratorio::$rules);

        $laboratorio->update($request->all());

        return redirect()->route('laboratorios.index')
            ->with('success', 'Laboratorio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $laboratorio = Laboratorio::find($id)->delete();

        return redirect()->route('laboratorios.index')
            ->with('success', 'Laboratorio deleted successfully');
    }
}
