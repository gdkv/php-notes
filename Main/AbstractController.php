<?php
namespace Core;

use \Plasticbrain\FlashMessages\FlashMessages;
use \League\Plates\Engine;

class AbstractController
{
    /**
     * Vars for template
     * @var array
     */
    private $params;

    /**
     * @var FlashMessages
     */
    public $msg;

    /**
     * @var Engine
     */
    private $template;

    public function __construct()
    {
        $this->params = [];
        $this->msg = new FlashMessages();
        $this->template = new Engine("../Views");
    }

    public function renderJson($response)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    public function render($template, $params)
    {
        echo $this->template->render($template, $params);
    }
}
?>