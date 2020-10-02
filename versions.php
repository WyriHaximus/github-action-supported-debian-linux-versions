<?php

$versions = [];
$versions[] = 'buster';
$versions[] = 'stretch';

echo 'Found the following supported versions: ', implode(', ', $versions), PHP_EOL;
echo '::set-output name=versions::', json_encode($versions), PHP_EOL;
