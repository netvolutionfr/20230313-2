<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php

require_once 'class/Menu.php';

$menu = new Menu();
$menu->add_item('index.php', 'Home');
$menu->add_item('blog.php', 'Blog');
$menu->add_item('contact.php', 'Contact');
$menu->add_item('about.php', 'About');

echo $menu->display();