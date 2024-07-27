<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'age' => 32,
                'address' => '123 Street',
                'info' => 'info',
            ],
            [
                'id' => 2,
                'name' => 'Jane James',
                'age' => 33,
                'address' => '1234 Street',
                'info' => 'info 2',
            ],
        ];

        return view('profile.index', ['profiles' => $profiles]);
    }

    public function detail($id)
    {
        $profiles = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'age' => 32,
                'address' => '123 Street',
                'info' => 'info',
            ],
            [
                'id' => 2,
                'name' => 'Jane James',
                'age' => 33,
                'address' => '1234 Street',
                'info' => 'info 2',
            ],
        ];

        $profile = null;
        foreach ($profiles as $value) {
            if ($value['id'] == $id) {
                $profile = $value;
                break;
            }
        }

        return view('profile.detail', ['profile' => $profile]);
    }
}
