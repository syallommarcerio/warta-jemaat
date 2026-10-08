<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateScheduleRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'activity_id' => 'required|exists:activities,id',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i,H:i:s',
            'location' => 'nullable|string|max:255',
            'theme' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the custom validation messages.
     */
    public function messages(): array
    {
        return [
            'activity_id.required' => 'Kegiatan wajib dipilih.',
            'activity_id.exists' => 'Kegiatan yang dipilih tidak valid.',

            'date.required' => 'Tanggal wajib diisi.',
            'date.date' => 'Format tanggal tidak valid.',

            'time.required' => 'Jam wajib diisi.',
            'time.date_format' => 'Format jam tidak valid.',

            'location.string' => 'Lokasi harus berupa teks.',
            'location.max' => 'Lokasi maksimal 255 karakter.',

            'theme.string' => 'Tema harus berupa teks.',
            'theme.max' => 'Tema maksimal 255 karakter.',
        ];
    }
}