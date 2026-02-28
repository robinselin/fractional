<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQualifierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'role' => ['required', 'string', Rule::in(['Founder/CEO', 'CTO / Technical Co-founder', 'Head of Product', 'Other'])],
            'engagement_type' => ['required', 'string', Rule::in(['Co-founder who builds', 'Senior advisor', 'Vendor to build for us', 'Not sure yet'])],
            'stage' => ['required', 'string', Rule::in(['Pre-revenue', '$1-5M ARR', '$5M+ ARR'])],
            'buying_history' => ['required', 'string', Rule::in(['Yes, currently', 'Yes, in the past', 'No, first time'])],
            'bottleneck' => ['nullable', 'string', 'max:2000'],
            'timing_driver' => ['required', 'string', Rule::in(['Hard deadline', 'Been thinking, ready now', 'Key person left', 'Exploring for the future'])],
            'email' => ['nullable', 'email', 'max:255'],
        ];
    }
}
