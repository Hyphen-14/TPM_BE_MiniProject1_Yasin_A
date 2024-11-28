<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::all();
        return view('wishlist.index', compact('wishlists'));  
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination_name' => 'required',
            'location' => 'required',
            'reason' => 'nullable',
            'planned_date' => 'nullable|date',
        ]);

        Wishlist::create($request->only(['destination_name', 'location', 'reason', 'planned_date']));

        return redirect()->route('wishlist.index')->with('success', 'Wishlist added!');
    }
}
