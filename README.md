You can use this library to print colorful text in terminal. It can be used in many ways, such as your logger system, and print pretty log message.

## Install

`git clone https://github.com/pein0119/php-color.git`

then in your PHP file:

`require 'color.php'`

## Example

``` php
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
```

run it, and you will get this in your terminal:

![](https://github.com/pein0119/php-color/blob/master/doc/example.png?raw=true)


**HAVE FUN!**
