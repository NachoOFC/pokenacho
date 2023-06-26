<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{

 public function cambiarContrasena(Request $request)
 {
    // Validar los datos enviados en la solicitud
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'password_actual' => 'required',
        'password_nueva' => 'required|min:8|confirmed',
    ]);

    // Obtener el usuario autenticado
    $user = Auth::user();

    // Verificar si el nombre, correo y contraseña actual coinciden con los proporcionados
    if ($request->input('nombre') !== $user->name) {
        return redirect()->back()->withErrors(['nombre' => 'El nombre no coincide.']);
    }

    if ($request->input('correo') !== $user->email) {
        return redirect()->back()->withErrors(['correo' => 'El correo no coincide.']);
    }

    if (!password_verify($request->input('password_actual'), $user->password)) {
        return redirect()->back()->withErrors(['password_actual' => 'La contraseña actual es incorrecta.']);
    }

    // Actualizar la contraseña del usuario
    $user->password = bcrypt($request->input('password_nueva'));
    $user->save();

    return redirect()->back()->with('success', 'Contraseña cambiada correctamente.');
}

public function cambiarDescripcion(Request $request)
{
    // Validar los datos enviados en la solicitud
    $request->validate([
        'descripcion' => 'required',
    ]);

    // Obtener el usuario autenticado
    $user = Auth::user();

    // Actualizar la descripción del usuario
    $user->descripcion = $request->input('descripcion');
    $user->save();

    return redirect()->back()->with('success', 'Descripción cambiada correctamente.');
}
public function cambiarContrasena(Request $request)
{
    // Validar los datos enviados en la solicitud
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'password_actual' => 'required',
        'password_nueva' => 'required|min:8|confirmed',
    ]);

    // Obtener el usuario autenticado
    $user = Auth::user();

    // Verificar si el nombre, correo y contraseña actual coinciden con los proporcionados
    if ($request->input('nombre') !== $user->name) {
        return redirect()->back()->withErrors(['nombre' => 'El nombre no coincide.']);
    }

    if ($request->input('correo') !== $user->email) {
        return redirect()->back()->withErrors(['correo' => 'El correo no coincide.']);
    }

    if (!password_verify($request->input('password_actual'), $user->password)) {
        return redirect()->back()->withErrors(['password_actual' => 'La contraseña actual es incorrecta.']);
    }

    // Actualizar la contraseña del usuario
    $user->password = bcrypt($request->input('password_nueva'));
    $user->save();

    return redirect()->back()->with('success', 'Contraseña cambiada correctamente.');
}

public function cambiarDescripcion(Request $request)
{
    // Validar los datos enviados en la solicitud
    $request->validate([
        'descripcion' => 'required',
    ]);

    // Obtener el usuario autenticado
    $user = Auth::user();

    // Actualizar la descripción del usuario
    $user->descripcion = $request->input('descripcion');
    $user->save();

    return redirect()->back()->with('success', 'Descripción cambiada correctamente.');
}
}