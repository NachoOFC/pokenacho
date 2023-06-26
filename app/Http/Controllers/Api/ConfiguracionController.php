namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{
    public function cambiarContrasena(Request $request)
    {
        // Validar los datos enviados en la solicitud
        $request->validate([
            'password_actual' => 'required',
            'password_nueva' => 'required|min:8|confirmed',
        ]);

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Verificar si la contraseña actual coincide con la proporcionada
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