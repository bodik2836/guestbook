<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Гостьова книга - Головна',
            'pageTitle' => 'GuestBook'
        ];

        return view('pages.messages.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Гостьова книга - Головна',
            'pageTitle' => 'GuestBook'
        ];

        return view('pages.messages.edit', $data);
    }
}
