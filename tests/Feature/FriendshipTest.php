<?php

use App\Models\User;

test('should be able to send friend requests', function () {
    $user   = User::factory()->create();
    $friend = User::factory()->create();

    $response = $this->post('/users/' . $user->id . '/friend-requests/' . $friend->id);
    $response->assertStatus(201);

    $this->assertDatabaseHas('friendships', [
        'requester_id' => $user->id,
        'recipient_id' => $friend->id,
        'status'       => 'pending',
    ]);

});
