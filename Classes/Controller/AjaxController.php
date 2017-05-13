<?php
namespace MediaEssenz\VueTypo3App\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\JsonView;

/**
 * Ajax Action controller
 *
 * @package vue_typo3_app
 * @author Alexander Grein
 */
class AjaxController extends ActionController
{

    /**
     * @var JsonView
     */
    protected $view;

    /**
     * @var string
     */
    protected $defaultViewObjectName = JsonView::class;

    /**
     * @plugin App
     * @noCache
     */
    public function testAction()
    {
        $this->view->assign('value', [
            'test' => 'Dieser Wert kommt aus dem Ajax Controller'
        ]);
    }

}