<?php

it('may welcome the user', function () {
    $page = visit('https://themeforest.net/');

    print_r($page->content());

    $page->assertSee('Welcome');
});
