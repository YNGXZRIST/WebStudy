<?php
require_once "./function/render/renderFunction.php";
require_once __DIR__ . '/vendor/autoload.php';

$template = renderTemplate("./view/index.html"
);
renderLayout($template);
