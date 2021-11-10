<?php

namespace mts\templates;

require_once("iTheme.php");

class Nutrex implements iTheme{
    
    public function head($str=null) {
        return $str;
    }
    
    public function body($header=null, $main) {
        return '<header>'.$header.'</header><main>'.$main.'</main>';
    }
    
    public function footer($str=null) {
        return $str;
    }
    
    public function render() {
        $head = $this->head('<script>console.log("Theme Debut");</script>');
        $body = $this->body('::header::', '::content::');
        $footer = $this->footer('::footer::');
      
        require_once 'th_nutrex.inc.php';
    }
    
}
