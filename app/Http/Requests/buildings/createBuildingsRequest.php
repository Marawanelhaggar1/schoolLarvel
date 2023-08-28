<?php

namespace App\Http\Requests\buildings;

use App\Models\Buildings;

use Illuminate\Foundation\Http\FormRequest;

class createBuildingsRequest extends FormRequest
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
             'name'=>'required|string|max:50|unique:buildings',
        ];
    }

    public function createBuildings(){
        return Buildings::create([
            'name'=>$this->name,
        ]);
    }
}
