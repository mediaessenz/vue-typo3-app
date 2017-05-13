<?php
namespace MediaEssenz\VueTypo3App\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class AppController extends ActionController
{

    /**
     * @plugin App!
     * @noCache
     */
    public function mainAction()
    {
        $this->configurationManager->getContentObject()->currentRecord = 'tt_content:' . $this->configurationManager->getContentObject()->data['uid'];
    }
}