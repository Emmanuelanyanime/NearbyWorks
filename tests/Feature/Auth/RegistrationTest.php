<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'firstname' => 'Test',
        'lastname' => 'User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));

    $this->assertDatabaseHas('users', ['firstname' => 'Test', 'lastname' => 'User', 'email' => 'test@example.com']);
});

test('registration requires first and last name', function () {
    $this->post('/register', [
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertSessionHasErrors(['firstname', 'lastname']);

    $this->assertGuest();
});

test('a newly registered user can see the dashboard and log back in', function () {
    $this->post('/register', [
        'firstname' => 'Test',
        'lastname' => 'User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->get('/dashboard')->assertOk()->assertSee('Welcome back, Test.');

    $this->post('/logout');
    $this->assertGuest();

    $this->post('/login', ['email' => 'test@example.com', 'password' => 'password'])
        ->assertRedirect(route('dashboard', absolute: false));
    $this->assertAuthenticated();
});
