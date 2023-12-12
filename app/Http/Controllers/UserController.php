<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
        /**
     * Show the profile for a given user.
     */
    public function show(string $user_name, string $id): RedirectResponse | View
    {
        $user = User::findOrFail($id);
        if ($user ->id !== $id) {
            return to_route('profil.show', ['user_name' =>$user->id, 'id' =>$user->id]);
    }
    return view('profil.show', [
        'profil' => $user
    ]);
    }
}
