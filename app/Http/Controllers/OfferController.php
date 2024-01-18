<?php

namespace App\Http\Controllers;

use App\Models\Offer; 
use Illuminate\Http\Request;
use App\Models\User;

class OfferController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // adjust max file size as needed
            'location' => 'required',
            'brand' => 'required',
            'condition' => 'required',
            'delivery' => 'required',
            'payment' => 'required',
            'confirmation_status' => 'required',
            'sale_status' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  // Create a unique name for the image
        
        $request->image->move(public_path('images'), $imageName); // Move the image to the public directory
        
        //$imagePath = $request->file('image')->storePublicly('images', 'public'); // Store the image in the storage/app/public directory

            // Your existing code to set offer properties...

        $offer = new Offer; // Create a new Offer object
    
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->price = $request->price;
        $offer->category = $request->category;
        $offer->image_path = $imageName;
        $offer->location = $request->location;
        $offer->brand = $request->brand;
        $offer->condition = $request->condition;
        $offer->delivery = $request->delivery;
        $offer->payment = $request->payment;
        $offer->confirmation_status = $request->confirmation_status;
        $offer->sale_status = $request->sale_status;
        // Associate the offer with the currently authenticated user
        $offer->user_id = auth()->id();
    
        $offer->save(); // Save the offer

        return redirect()->route('marketplace')->with('success', 'Offer created successfully');
    }

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function create()
    {
        return view('offer');
    }

    public function marketplace()
    {
        $offers = Offer::all(); // Retrieve or get all offers

        $users = User::all(); // Retrieve or get all users

        return view('marketplace', ['offers' => $offers, 'users' => $users])->with('success', 'Offers & Users retrieved successfully');
    }

    public function product()
    {
        $offers = Offer::all();

        $users = User::all(); // Retrieve or get all users

        return view('product', ['offers' => $offers, 'users' => $users])->with('success', 'Offers retrieved successfully');
    }

}
        