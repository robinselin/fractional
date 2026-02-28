<?php

test('og image preview page loads', function () {
    $this->get('/og-image')->assertStatus(200);
});

test('welcome page contains og meta tags', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('<meta property="og:image" content="https://fractional.sh/og-image.png">', false);
    $response->assertSee('<meta property="og:title" content="fractional.sh', false);
    $response->assertSee('<meta name="twitter:card" content="summary_large_image">', false);
    $response->assertSee('<meta name="twitter:image" content="https://fractional.sh/og-image.png">', false);
});
