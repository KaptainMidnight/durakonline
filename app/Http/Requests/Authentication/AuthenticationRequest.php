<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer'],
            'username' => ['required', 'string'],
        ];
    }

    public function credentials(): array
    {
        return [
            'telegram_id' => $this->json('id'),
            'username' => $this->json('username')
        ];
    }
}
