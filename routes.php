<?php

$app['router']->get('/', function() {
    // Because 'Hello, World!' is too mainstream
    return 'Hello2';
});
$app['router']->get('/url1/url2', function() {
    // Because 'Hello, World!' is too mainstream
    return 'Hello';
});