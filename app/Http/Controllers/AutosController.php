<?php

namespace App\Http\Controllers;

use App\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos=Autos::all();
        return view('auto.index',compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'placa'=>'Required',
            'color'=>'Required'
        ]);

        $auto = $request->all();
        Autos::create($auto);
        return redirect('auto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Autos::find($id);
        return view('auto.edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'placa'=>'Required',
            'color'=>'Required'
        ]);

        $auto = Autos::find($id);
        $autoActualizado = $request->all();
        $auto->update($autoActualizado);
        return redirect('auto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Autos::find($id);
        $auto->delete();
        return redirect('auto');
    }
}
