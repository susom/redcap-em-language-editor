<?php
namespace Stanford\LanguageEditor;

include_once ("emLoggerTrait.php");

use \REDCap;

/**
 *
 * A bunch of little CSS and JS tweaks that help enhance survey functionality
 * TODO: Make configuration available from the actual Survey Settings page
 *
 * Class SurveyUITweaks
 * @package Stanford\SurveyUITweaks
 */
class LanguageEditor extends \ExternalModules\AbstractExternalModule
{
    use emLoggerTrait;

    function __construct()
    {
        parent::__construct();
    }

    public function redcap_every_page_before_render(){
        $this -> emDebug(PAGE);
    }





}