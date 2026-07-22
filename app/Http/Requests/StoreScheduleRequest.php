<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'activity_id' => 'required|exists:activities,id',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'nullable|string|max:255',
            'theme' => 'nullable|string|max:255',
        ];
    }
}
