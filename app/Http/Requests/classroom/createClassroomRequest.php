<?php

namespace App\Http\Requests\classroom;

use App\Models\Classroom;
use Illuminate\Foundation\Http\FormRequest;

class createClassroomRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:classrooms',
            'building_id' => 'required|exists:buildings,id'
        ];
    }

    public function CreateClassRoom():Classroom{
        return Classroom::create([
            'name' => $this->name,
            'building_id' => $this->building_id
        ]);

    }
}
