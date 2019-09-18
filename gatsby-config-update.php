<?php

$fileName = 'gatsby-config.js';
$base_url = $argv[1];
$content = file_get_contents($fileName);
$charMappings = ['wpdemo.gatsbycentral.com' => $base_url];
file_put_contents($fileName, strtr($content, $charMappings));
