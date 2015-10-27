<?php

// PHP colorful text
class color
{
    // color
    const BLACK         = "30";
    const RED           = "31";
    const GREEN         = "32";
    const YELLOW        = "33";
    const BLUE          = "34";
    const MAGENTA       = "35";
    const CYAN          = "36";
    const LIGHT_GRAY    = "37";
    const DARK_GRAY     = "90";
    const LIGHT_RED     = "91";
    const LIGHT_GREEN   = "92";
    const LIGHT_YELLOW  = "93";
    const LIGHT_BLUE    = "94";
    const LIGHT_MAGENTA = "95";
    const LIGHT_CYAN    = "96";
    const WHITE         = "97";

    // style
    const BOLD       = "1";
    const DIM        = "2";
    const UNDERLINED = "4";
    const REVERSE    = "7";
    const HIDDEN     = "8";
    
    private function __construct()
    {
        
    }

    private static function wrap($msg, $color, $style = array())
    {
        $str = "\033[";
        if (!empty($style)) {
            array_unshift($style, $color);
        } else {
            $style = array($color);
        }

        $str .= implode(';', $style);
        $str .= "m";

        return $str .= $msg . "\033[0m";
    }

    public static function black($msg, $style = array())
    {
        return self::wrap($msg, self::BLACK, $style);
    }

    public static function red($msg, $style = array())
    {
        return self::wrap($msg, self::RED, $style);
    }

    public static function green($msg, $style = array())
    { 
        return self::wrap($msg, self::GREEN, $style);
    }

    public static function yellow($msg, $style = array())
    {
        return self::wrap($msg, self::YELLOW, $style);
    }

    public static function magenta($msg, $style = array())
    {
        return self::wrap($msg, self::MAGENTA, $style);
    }

    public static function cyan($msg, $style = array())
    {
        return self::wrap($msg, self::CYAN, $style);
    }

    public static function lightGray($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_GRAY, $style);
    }

    public static function darkGray($msg, $style = array())
    {
        return self::wrap($msg, self::DARK_GRAY, array());
    }

    public static function lightRed($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_RED, $style);
    }

    public static function lightGreen($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_GREEN, $style);
    }

    public static function lightYellow($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_YELLOW, $style = array());
    }

    public static function lightBlue($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_BLUE, $style);
    }

    public static function lightMagenta($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_MAGENTA, $style);
    }

    public static function lightCyan($msg, $style = array())
    {
        return self::wrap($msg, self::LIGHT_CYAN, $style);
    }

    public static function white($msg)
    {
        return self::wrap($msg, self::WHITE, $style);
    }

}
