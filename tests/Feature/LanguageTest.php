<?php

it('sets the language correctly', function () {
    $response = $this->post('/language', [
        'language' => $locale = 'de'
    ]);

    $response->assertSessionHas('language', $locale)
        ->assertStatus(302);
});

it('sets to the default locale if the chosen locale is invalid', function () {
    $response = $this->post('/language', [
        'language' => 'es'
    ]);

    $response->assertSessionHas('language', config('app.locale'))
        ->assertStatus(302);
});
