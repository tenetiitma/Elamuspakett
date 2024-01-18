<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoCardController extends Controller
{
    public function index()
    {
        $data = json_decode(file_get_contents(resource_path('data.json')), true);

        return Inertia::render('InfoCards', [
            'data' => ['info_cards' => $data],
        ]);

    }
}
