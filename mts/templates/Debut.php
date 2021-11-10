<?php

namespace mts\templates;

require_once("iTheme.php");

class Debut implements iTheme{
    
    public $title = 'Début';

    public $html = '';

    public function head($str=null) {
        return $str;
    }
    
    public function body($header=null, $main) {
        return '<header>'.$header.'</header><main>'.$main.'</main>';
    }
    
    public function footer($str=null) {
        return '<footer>'.$str.'</footer>';
    }
    
    public function render() {
        $title = $this->title;
        $head = $this->head('<script>console.log("Theme Debut");</script>');
        $body = $this->body('::header::', '::content::');
        $footer = $this->footer('::footer::');
      
        require_once 'debut.inc.php';
    }
    
}
