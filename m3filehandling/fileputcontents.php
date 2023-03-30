<?php

// Creates the file if it doesn't already exist:
file_put_contents('datafiles/examples.txt', 'New Content!');

// If the file does already exist, its entire content will be replaced:
file_put_contents('datafiles/examples.txt', 'Where is the old text?');


file_put_contents('datafiles/examples.txt', 'extra content', FILE_APPEND);