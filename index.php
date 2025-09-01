<?php

use Timber\Timber;
$context = Timber::context();

// Récupérer les posts pour la page d'accueil
$context['posts'] = Timber::get_posts([
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => 'publish'
]);

// Une Query de 5 articles
// dans une liste comprenant chaque 

Timber::render( 'index.twig', $context );