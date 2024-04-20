<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserProfileController extends Controller
{
    public function update(UpdateUserProfileRequest $request)
    {
        // Validar y obtener los datos del formulario
        $validatedData = $request->validated();

        // Obtener el usuario autenticado
        $user = auth()->user();

        // Actualizar los datos del usuario
        $user->update([
            'id_number' => $validatedData['id_number'],
            'address' => $validatedData['address'],
            'comments' => $validatedData['comments'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'mobile_number' => $validatedData['mobile_number'],
            'name_fac' => $validatedData['name_fac'],
            'email_fac' => $validatedData['email_fac'],
        ]);

        // Redirigir a la ruta 'user-dashboard' con el ancla '#pills-facturacion'
        return redirect()->route('user-dashboard')->with('success', 'Datos guardados correctamente!');
    }
}
