<?php
namespace App\Http\Controllers;
// Bibliotecas de Laravel/Lumen
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;
// Modelos
use App\Empleado;

class EmpleadoController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function create(Request $request) {
      $validator = Validator::make($request->all(), array(
        'nombre' => 'required|min:3|max:50',
        'usuario' => 'required|min:3|max:10',
        'clave' => 'required|min:3|max:10',
        'idCreador' => 'required|exists:empleados,id'
      ));

      if($validator->fails()) {
        return response()->json(array(
          'status' => 'Bad request',
          'error' => $validator->errors()
        ), 400);
      }

      $empleado = Empleado::create($request->all());

      return response()->json(array(
        'status' => 'created',
        'empleado' => $empleado
      ), 201);
    }

    public function index(Request $request) {
      $empleados = Empleado::get();

      return response()->json(array(
        'status' => 'ok',
        'empleados' => $empleados
      ), 200);
    }

    public function read(Request $request, $id) {
      $empleado = Empleado::find($id);

      return response()->json(array(
        'status' => 'ok',
        'empleado' => $empleado
      ), 200);
    }

    public function update(Request $request, $id) {
      $empleado = Empleado::find($id);

      if($request->filled('nombre')) {
        $empleado->nombre = $request->nombre;
      }

      if($request->filled('usuario')) {
        $empleado->usuario = $request->usuario;
      }

      if($request->filled('clave')) {
        $empleado->clave = $request->clave;
      }

      $empleado->save();

      return response()->json(array(
        'status' => 'ok',
        'empleado' => $empleado
      ), 200);
    }

    public function delete(Request $request, $id) {
      $empleado = Empleado::find($id);

      $empleado->delete();

      return response()->json(array(
        'status' => 'ok'
      ), 200);
    }

}
