<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > Clients
Breadcrumbs::register('client.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Clients', route('client.index'));
});

// Home > Clients > Create
Breadcrumbs::register('client.create', function($breadcrumbs) {
    $breadcrumbs->parent('client.index');
    $breadcrumbs->push('Add Client', route('client.create'));
});

// Home > Clients > [Edit]
Breadcrumbs::register('client.edit', function($breadcrumbs, $client) {
    $breadcrumbs->parent('client.index');
    $breadcrumbs->push('Edit ' . $client->name, route('client.edit'));
});