<?php

if (!file_exists('datafiles/unknown.txt')) {
    throw new InvalidArgumentException('unknown.txt does not exist');
}

echo 'Ok, it exists, so i Will process it now.';