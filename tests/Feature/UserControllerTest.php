<?php

use App\Models\User;

test('should be able find user by username', function () {
    $user = User::factory()->create();

    $response = $this->get('/users/search?username=' . $user->name);

    $response->assertStatus(200);
    expect($response->content())->toContain($user->name);
});
