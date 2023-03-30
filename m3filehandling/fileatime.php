<?php

$filename = 'datafiles/clouds.txt';

//fileatime is for file-access-time
$accessed = fileatime(($filename));

echo '<p>' . $filename . ' was last accessed: ' . date('d F Y H:i:s.', $accessed);
// This function doesn't work on some Unix systems which have access time updates disabled
// to increase performance

//filemtime is for file-modified-time
$modified = filemtime($filename);

echo '<p>' . $filename . ' was last modified: ' . date('d F Y H:i:s.', $modified);