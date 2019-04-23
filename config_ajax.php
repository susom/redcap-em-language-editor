<?php
namespace Stanford\LanguageEditor;
/** @var \Stanford\LanguageEditor\LanguageEditor $module */

// This file is called by the EM configuration page to return to populate the data table for language selection
global $lang;
$result = array("data" => array());

foreach ($lang as $k => $v) {
    $result['data'][] = array($k, $v);
};

header('Content-Type: application/json');

echo json_encode($result);
