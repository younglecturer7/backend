<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'firstName' => ['required', 'string', 'max:50'],
            'middleName' => ['nullable', 'string', 'max:50'],
            'lastName' => ['required', 'string', 'max:50'],
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique(User::class),
            ],
            'phone' => ['required', 'max:30', 'unique:users,phone' ],
            'gender' => ['required', 'string', 'max:10'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'firstName' => $input['firstName'],
            'middleName' => $input['middleName'],
            'lastName' => $input['lastName'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'gender' => $input['gender'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
