<?php
namespace Stanford\LanguageEditor;

include_once ("emLoggerTrait.php");

use \REDCap;

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

// this seems to work but the page isn't updating
                if ($lang['key'] = $k)
                {
                    $lang['value'] = $v;
                }

           $this->emDebug($lang['key']);
           $this->emDebug($lang['value']);

            //this is just changing the key not the value
            $lang[$update['language_key']] = $update['language_value'];
            //$this->emDebug($lang[$update['language_key']]);


            //$this->emDebug($GLOBALS['lang'][$k]);


            //$GLOBALS['lang'][$update['language_key']] = $update['language_value'];


            //$this->emDebug($GLOBALS['lang'][$k]);
        }

        //$this->emDebug(array_slice($GLOBALS['lang'], 0, 10));


    }





}