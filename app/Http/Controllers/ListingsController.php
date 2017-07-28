<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}
    public function index()
    {
    	$listings = Listing::orderBy('created_at', 'desc')->get();
    	return view('listing.index')->withListings($listings);
    }

    public function create()
    {
    	return view('listing.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(

    		'name' => 'required',
    		'address' => 'required',
    		'website' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'bio' => 'required'
    	));

    	$listing = new Listing;

    	$listing->name = $request->name;
    	$listing->address = $request->address;
    	$listing->website = $request->website;
    	$listing->email = $request->email;
    	$listing->phone = $request->phone;
    	$listing->bio = $request->bio;
    	$listing->user_id = auth()->user()->id;

    	$listing->save();

    	return redirect()->route('dashboard')->with('success', 'List Created Successfully');
    }

    public function show($id)
    {
    	$listing = Listing::find($id);
    	return view('listing.show')->withListing($listing);
    }

    public function edit($id)
    {
    	$listing = Listing::find($id);
    	return view('listing.edit')->withListing($listing);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, array(

    		'name' => 'required',
    		'address' => 'required',
    		'website' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'bio' => 'required'
    	));

    	$listing = Listing::find($id);

    	$listing->name = $request->name;
    	$listing->address = $request->address;
    	$listing->website = $request->website;
    	$listing->email = $request->email;
    	$listing->phone = $request->phone;
    	$listing->bio = $request->bio;
    	$listing->user_id = auth()->user()->id;

    	$listing->save();

    	return redirect()->route('dashboard')->with('success', 'List updated Successfully');
    }

    public function destroy($id)
    {
    	$listing = Listing::find($id);
    	$listing->delete();

    	return redirect()->route('dashboard')->with('success', 'List deleted successfully');
    }
}
