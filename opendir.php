<?php
$opendir=opendir(getcwd());
while (false !==($entry=readdir($opendir))){
    echo $entry."<br/>";
}
