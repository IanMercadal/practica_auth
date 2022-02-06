<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Centro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $centros = Centro::all();
        return view('centros.index', compact('centros'));
        // return view(RouteServiceProvider::HOME);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Centro $centro)
    {
        if (! Gate::allows('create', $centro)) {
            abort(403);
        }
        return view('centros.create', compact('centro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // Modo eloquent
        $centro = (new Centro)->fill($request->all() );
        $centro->avatar = $request->file('avatar')->store('public');

        $centro->save();
        return redirect()->route('centros.index', $centro);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        if (! Gate::allows('show', $centro)) {
            abort(403);
        }
        return view('centros.show',compact('centro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit(Centro $centro)
    {
        if (! Gate::allows('edit', $centro)) {
            abort(403);
        }
        return view('centros.edit',compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centro $centro)
    {
        if (! Gate::allows('update', $centro)) {
            abort(403);
        }
        $centro->fill($request->all());

        if($request->hasFile('avatar')){
            $centro->avatar = $request->file('avatar')->store('public');
        }

        $centro->save();
        return redirect()->route('centros.index', $centro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        if (! Gate::allows('delete', $centro)) {
            abort(403);
        }
        $centro->delete();
        return redirect()->route('centros.index');
    }
}