<?php

error_reporting(E_ALL);

require dirname(dirname(__FILE__)) . "/config/config.inc.php";

ob_start();

$__output_vars = array();


// --- Functions: ------------------------------------------------------------

/**
 *
 */
function showTpl($template, $vars) {

    if (!file_exists($template) || !is_file($template)) {
        return "<p class=\"error\"><strong>Error: $template</strong> does not exist!<p>";
    }
    
    $__file = $template;
    unset($template);
                
    // create vars from data array
    extract($vars, EXTR_OVERWRITE);
    
    $__e = error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); // quiet down warnings and notices:
    ob_start(); // start output buffering:
    require $__file; // parse the file. Produces fatal error if file not found.
    error_reporting($__e); // restore previous error reporting level

    return ob_get_clean();
}


/**
 *
 */
function showContent() {
    
    global $config, $__output_vars;

    $__output_vars["content"] = ob_get_clean();

    if (array_key_exists("content_template", $config)) {
        $tpl = $config["content_template"];
    } else {
        $tpl =  LIB_DIR . "/content-template.php";
    }

    echo showTpl($tpl, $__output_vars);
    exit()
}

/**
 *
 */
function showError($msg) {

    global $config;

    if (array_key_exists("error_template", $config)) {
        $tpl = $config["error_template"];
    } else {
        $tpl = LIB_DIR . "/error-template.php";
    }

    ob_end_clean();
    echo showTpl($tpl, array(
        "msg" => $msg,
    ));
    exit();
}


/**
 *
 */
function setOutputVar($name, $value) {
    global $__output_vars;
    return $__output_vars[$name] = $value;
}
