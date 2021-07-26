<?php


function blogImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('assets/img/not-found.png');
}

?>