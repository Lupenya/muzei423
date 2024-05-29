<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('pages.genres.index');
    }

    public function create()
    {
        return view('pages.genres.create');
    }
    /**
     * Display the user's profile form.
     */
    public function store(Request $request)
    {
        Genre::create([
            'name' => $request()////////////////////////////////////
        ])
    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Delete the user's account.
     */
    public function destroy(string $id)
    {
        //
    }
}
