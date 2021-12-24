<?php

namespace App\Http\Controllers\M;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class MerchantController extends Controller
{
    public function index()
    {
        $foods = Food::where('user_id', auth()->user()->id)->latest()->paginate(40);
        return view('m.dashboard.index', [
            'foods' => $foods
        ]);
    }

    public function create()
    {
        return view('m.dashboard.create');
    }

    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required',
            'old_price' => 'required|numeric',
            'new_price' => 'required|numeric',
            'food_type' => 'required',
            'food_category' => 'required',
            'food_description' => 'required',
            'food_image' => 'required|mimes:jpeg,jpg,png|max:5048',
        ]);

        $imageToUpload = cloudinary()->upload($request->file('food_image'))->getSecurePath();

        auth()->user()->foods()->create([
            'name' => $request->name,
            'old_price' => $request->old_price,
            'new_price' => $request->new_price,
            'food_type' => $request->food_type,
            'food_category' => $request->food_category,
            'food_description' => $request->food_description,
            'food_image' => $imageToUpload,
        ]);

        return back()->with('status', 'created successfully!');
    }

    public function show($id, $slug)
    {
        $food = Food::findOrFail($id);

        return view('m.dashboard.show', [
            'food' => $food,
        ]);
    }

    public function destroy(Food $food)
    {
        $this->authorize('delete', $food);

        $food->delete();

        return redirect()->route('dashboard.index')->with('status', 'deleted successfully!');
    }

}
