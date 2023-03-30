<?php

if (!file_exists('datafiles/unknown.txt')) {
    echo 'unknown.txt does not exisit';
    exit();
}

echo 'Ok, it exists, so i Will process it now.';