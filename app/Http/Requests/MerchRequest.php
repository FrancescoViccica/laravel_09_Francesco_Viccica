<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MerchRequest extends FormRequest
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
* @return array<string, ValidationRule|array<mixed>|string>
*/
public function rules(): array
{
return [
'title' => 'required',
'genres' => 'required'
];
}

// override

public function messages(){
return[
'title.required'=> 'Non hai inserito il nome del prodotto',
'genres.required'=> 'Non hai inserito nessun genere del prodotto'
];
}
}
