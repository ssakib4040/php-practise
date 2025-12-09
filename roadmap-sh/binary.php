<?php

namespace RoadmapSh\Binary;

class Logger{
    private $value;
 
    public static function log($message){
        echo "[BINARY LOG]: " . $message . "\n";
    }
}