<?php

namespace App\Http\Requests\Backend\student;

use Illuminate\Foundation\Http\FormRequest;

class AddNewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'stu_id'=>'required|max:10',
            'birth_no'=>'required|max:10',
            'username'=>'required|max:255',
            'fname_en'=>'required|max:255',
            'lname_en'=>'required|max:255',
            'gender'=>'required|max:255',
            'contactNumber_en'=>'required|unique:student,contact_no_en',
            'EmailAddress'=>'required|unique:users,email',
            'password'=>'required',
        ];
    }
}
