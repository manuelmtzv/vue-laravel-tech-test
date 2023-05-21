<?php

namespace App\Http\Controllers\API;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveHotelRequest;

class HotelController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $hotels = Hotel::all();

    if ($hotels->isEmpty()) {
      $response = response()->json(['status' => 404, 'message' => 'No data found'], 404);
    } else {
      $response = response()->json(['status' => 200, 'data' => $hotels], 200);
    }

    return $response;
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(SaveHotelRequest $request)
  {
    $hotel = Hotel::create($request->validated());

    $response = ['status' =>  201, 'data' => $hotel];

    return response()->json($response, 201);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $hotel = Hotel::find($id);

    if (is_null($hotel)) {
      $response = response()->json(['status' => 404, 'message' => 'Record not found'], 404);
    } else {
      $response = response()->json(['status' => 200, 'data' => $hotel], 200);
    }

    return $response;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(SaveHotelRequest $request, string $id)
  {
    $hotel = Hotel::find($id);

    if (is_null($hotel)) {
      $response = response()->json(['status' => 404, 'message' => 'Record not found'], 404);
    } else {
      $hotel->update($request->validated());

      $response = response()->json(['status' => 200, 'data' => $hotel], 200);
    }

    return $response;
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $hotel = Hotel::find($id);

    if (is_null($hotel)) {
      $response = response()->json(['status' => 404, 'message' => 'Hotel succesfully deleted'], 404);
    } else {
      $hotel->delete();

      $response = response()->json(['status' => 200, 'message' => 'Hotel succesfully deleted'], 200);
    }

    return $response;
  }
}
