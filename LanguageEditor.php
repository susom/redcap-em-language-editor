<?php
namespace Stanford\LanguageEditor;

include_once ("emLoggerTrait.php");

class LanguageEditor extends \ExternalModules\AbstractExternalModule
{
    use emLoggerTrait;

    function __construct()
    {
        parent::__construct();
    }

    public function redcap_every_page_top(){
        $this->emDebug(PAGE);

        $updates = $this->getSubSettings('language_updates');
        $this->emDebug($updates);

        global $lang;

        foreach ($updates as $update) {
            $k = $update['language_key'];
            $v = $update['language_value'];
            $this->emDebug($k, $v);

            $lang[$k] = $v;
        }
    }
}