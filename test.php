<?php

require "color.php";

$str = "hello world";

$style = array(
    color::BOLD,
    color::UNDERLINED,
    color::DIM,
);

echo color::green($str, $style) . "\n";
echo color::red($str, array(color::DIM)) . "\n";
echo color::cyan($str, array(color::UNDERLINED)) . "\n";
echo color::green($str) . "\n";
echo color::yellow($str) . "\n";
echo color::magenta($str) . "\n";
echo color::cyan($str) . "\n";
echo color::lightGray($str) . "\n";
echo color::darkGray($str) . "\n";
echo color::lightRed($str) . "\n";
echo color::lightGreen($str) . "\n";
echo color::lightBlue($str) . "\n";
echo color::lightMagenta($str) . "\n";
echo color::lightCyan($str) . "\n";
echo color::white($str) . "\n";