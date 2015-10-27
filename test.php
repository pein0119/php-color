<?php

require "color.php";

$str = "hello world";

$style = array(
    color::BOLD,
    color::UNDERLINED,
    color::DIM,
);

echo color::GREEN($str, $style) . "\n";
echo color::RED($str, array(color::DIM)) . "\n";
echo color::CYAN($str, array(color::UNDERLINED)) . "\n";
echo color::GREEN($str) . "\n";
echo color::YELLOW($str) . "\n";
echo color::MAGENTA($str) . "\n";
echo color::CYAN($str) . "\n";
echo color::LIGHT_GRAY($str) . "\n";
echo color::DARK_GRAY($str) . "\n";
echo color::LIGHT_RED($str) . "\n";
echo color::LIGHT_GREEN($str) . "\n";
echo color::LIGHT_BLUE($str) . "\n";
echo color::LIGHT_MAGENTA($str) . "\n";
echo color::LIGHT_CYAN($str) . "\n";
echo color::WHITE($str) . "\n";