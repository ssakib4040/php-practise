<?php 
namespace App\Core;

// import the class
use App\Elements\TextElement;

class Builder {
    public function add(TextElement $el) {
        echo $el->render();
    }
}
