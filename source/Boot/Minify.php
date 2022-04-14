
<?php



//if (strpos(url(), "localhost")) {
    /**
     * CSS
     */
    //$minCSS = new MatthiasMullie\Minify\CSS();
    //$minCSS->add(__DIR__ . "/../../shared/styles/styles.css");
    //$minCSS->add(__DIR__ . "/../../shared/styles/boot.css");

    //theme
    //$cssDir = scandir(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css");
    //foreach ($cssDir as $css) {
        //$cssFile = __DIR__ . "/../../themes" . CONF_VIEW_THEME . "/assets/css/{$css}";
        //if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            //$minCss->add($cssFile);
        //}
    //}

    //Minify CSS
    //$minCSS->Minify(__DIR__ . "/../../themes/" .  CONF_VIEW_THEME . "/assets/style.css");


     /**
      * JS
      */
    //$minJS = new MatthiasMullie\Minify\JS();
    //$minJS->add(__DIR__ . "/../../shared/scripts/jquery.min.js");
    //$minJS->add(__DIR__ . "/../../shared/scripts/jquery-ui.js");
  
      //theme JS
    //$jsDir = scandir(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js");
        //foreach ($jsDir as $js) {
            //$jsFile = __DIR__ . "/../../themes" . CONF_VIEW_THEME . "/assets/js/{$js}";
            //if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
              //$minCss->add($cssFile);
            //}
        //}

      //Minify JS
    //$minJS->minify(__DIR__ . "/../../themes" . CONF_VIEW_THEME . "/assets/script.js");
//}