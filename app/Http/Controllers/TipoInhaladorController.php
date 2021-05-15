<?php

namespace App\Http\Controllers;

use App\Models\TipoInhalador;
use Dotenv\Repository\RepositoryInterface;
use Hamcrest\Type\IsObject;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isJson;
use function PHPUnit\Framework\isNan;
use function PHPUnit\Framework\isNull;

class TipoInhaladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TipoInhalador::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoInhalador = TipoInhalador::create($request->all());

        return response()->json($tipoInhalador, 201);
        //return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoInhalador  $tipoInhalador
     * @return \Illuminate\Http\Response
     */
    public function show(TipoInhalador $tipoInhalador)
    {
            return response()->json($tipoInhalador,200);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoInhalador  $tipoInhalador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoInhalador $tipoInhalador)
    {

        $datos = $request->all();
        
        return response()->json([$datos, $tipoInhalador], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoInhalador  $tipoInhalador
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoInhalador $tipoInhalador)
    {
        $tipoInhalador->delete();
        return response()->json(null, 204);
    }
}
