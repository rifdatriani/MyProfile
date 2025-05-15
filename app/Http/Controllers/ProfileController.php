<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = (object)[
            'name' => 'Rifda Triani Mutmainah',
            'nim' => '17223007',
            'email' => 'rifdatrianimutmainah21@gmail.com',
            'phone' => '08971120407',
            'address' => 'Kota Bandung',
            'photo' => 'rifda.jpg', // Pastikan gambar ada di public/images
        ];

        return view('profile', compact('profile'));
    }
}
