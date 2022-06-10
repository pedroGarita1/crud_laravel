<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //Pagina de inicio
        $datos = Personas::orderBy('paterno', 'desc')->paginate(5);
        return view('welcome', compact('datos'));
    }
    public function create()
    {
        //crea un usuario en la BD
        return view('agregar');
    }
    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        
        return redirect()->route('personas.index')->with("success", "agregado con exito!!!");
    }
    public function show($id)
    {
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }
    public function edit($id)
    {
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }
    public function update(Request $request, $id)
    {
        //Este metodo actualiza los datos en la BD
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with("success", "Actualizado con exito!!!");
    }
    public function destroy($id)
    {
        //Elimina un registro de la BD
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route('personas.index')->with("success", "Eliminado con exito!!!");
    }
}
