<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('courses')->ignore($this->course)],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
            'apply_process' => 'required',
            'certification' => 'required',
            'start_date' => 'required',
            'deadline' => 'required',
            'duration' => 'required',
            'class_duration' => 'required',
            'seats' => 'required',
            'fee' => 'required',
            'skill_level' => 'required',


        ];
    }
}
