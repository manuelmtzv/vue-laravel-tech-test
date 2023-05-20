<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveHotelRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'string'],
      'rating' => ['required', 'string', 'regex:/^\d+ stars$/s',],
      'price' => ['required', 'string', 'regex:/^([1-9]\d{0,2}(,\d{3}){0,2})$|^(([1-9]|1\d|2[1-4])(,\d{3}){3})$|^25(,000){3}$/s'],
      'image' => ['required', 'url'],
      'city_id' => ['required', 'exists:cities,id']
    ];
  }
}
