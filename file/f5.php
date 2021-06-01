<?php
$file_name="/xampp/htdocs/htdocs/file/data/f1.txt";
file_put_contents($file_name,"\nratul\n",FILE_APPEND | LOCK_EX);
file_put_contents($file_name,"love\n",FILE_APPEND | LOCK_EX);
