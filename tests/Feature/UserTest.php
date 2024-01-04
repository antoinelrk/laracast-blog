<?php

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

beforeAll(function () {
    $user = 
});

it('registers a user', function () {
    $response = $this->post('/register', [
        'username' => 'johndoe',
        'name' => 'John Doe',
        'email' => 'john@doe.fr',
        'password' => 'supersecret',
        'password_confirmation' => 'supersecret',
    ]);

    expect($response->status())->toBe(302);
    expect(User::count())->toBe(1);
    expect(User::first()->username)->toBe('johndoe');
});

it('successfully authenticates the user', function () {
    $response = $this->post('/login', [
        'email' => 'john@doe.fr',
        'password' => 'supersecret'
    ]);

    dd($response);

    // expect(true)->toBe(true);
});

it('validator blocks malformed requests', function () {
    $response = $this->post('/register', [
        'username' => 'johndoe',
        'name' => 'John Doe',
        'email' => 'contact@john.doe',
        'password' => 'secret',
        'password_confirmation' => 'secret',
    ]);

    expect($response->exception->status)->toBe(Response::HTTP_UNPROCESSABLE_ENTITY);
});