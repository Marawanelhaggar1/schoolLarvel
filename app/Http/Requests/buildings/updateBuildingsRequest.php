<?php

namespace App\Http\Requests\buildings;
use App\Models\Buildings;

use Illuminate\Foundation\Http\FormRequest;

class updateBuildingsRequest extends FormRequest
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
            'name'=>'required|max:50|string|unique:buildings,name,' . $this->id, 
            'id'=>'required|max:50|integer|exists:buildings,id' 
        ];
    }

    public function updateBuildings() :Buildings{
        $building=Buildings::find($this->id);

        $building->update([
            'name'=>$this->name
        ]);

        return $building;

    }
}
