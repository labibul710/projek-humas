<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'divisi_id' => ['nullable', 'exists:divisi,id'], 
            'nisn' => ['nullable', 'digits_between:10,12', 'unique:users,nisn'],
            'phone' => ['nullable', 'digits_between:10,15'],
            'address' => ['nullable', 'string'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        // Upload photo jika ada
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'divisi_id' => $request->divisi_id,
            'nisn' => $request->nisn,
            'phone' => $request->phone,
            'address' => $request->address,
            'photo' => $photoPath,
            'status' => 'pending', // Status default saat registrasi
        ]);

        event(new Registered($user));

        $user->assignRole('admin');
        // Auth::login($user);

        return redirect(route('login', absolute: false));
    }
}
