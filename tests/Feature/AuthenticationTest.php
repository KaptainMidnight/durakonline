<?php

use Illuminate\Testing\Fluent\AssertableJson;

test('authentication success', function () {
    $credentials = ['id' => 1, 'username' => 'KaptainMidnight'];
    $response = $this->postJson(route('authentication'), $credentials);

    $response->assertOk();
    $response->assertJson(fn (AssertableJson $json) => $json->has('token_type')->has('token'));
});

test('authentication validation works correctly(check id & username fields not in request)', function() {
    $credentials = [];
    $response = $this->postJson(route('authentication'), $credentials);
    $response->assertUnprocessable();
    $response->assertJsonValidationErrors(['id', 'username']);
});
