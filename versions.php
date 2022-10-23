<?php

// Ok I lied, it's an hardcoded array for now. But diving into how to fetch this
$versions = [];
$versions[] = 'bullseye';
$versions[] = 'buster';
$versions[] = 'stretch';

echo 'Found the following supported versions: ', implode(', ', $versions), PHP_EOL;
file_put_contents(getenv('GITHUB_OUTPUT'), 'versions=' . json_encode($versions) . PHP_EOL, FILE_APPEND);
