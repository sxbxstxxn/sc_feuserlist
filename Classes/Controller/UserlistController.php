<?php
namespace SebastianChristoph\ScFeuserlist\Controller;

/**
 * Class UserlistController
 *
 * * @package SebastianChristoph\ScFeuserlist\Controller
 */
class UserlistController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * list action
     *
     * @return void
     */
    public function listAction()
    {
        $list = 'alleuser';
        $this->view->assign('list', $list);
    }
}