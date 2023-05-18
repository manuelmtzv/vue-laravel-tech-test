<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveHotelRequest;
use App\Models\Hotel;

class HotelController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $hotels = Hotel::all();

    return Inertia::render('Hotels/Index', compact('hotels'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(SaveHotelRequest $request)
  {
    Hotel::create($request->validated());

    return to_route('hotels.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(SaveHotelRequest $request, Hotel $hotel)
  {
    $hotel->update($request->validated());

    return to_route('hotels.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Hotel $hotel)
  {
    $hotel->delete();

    return to_route('hotels.index');
  }
}
