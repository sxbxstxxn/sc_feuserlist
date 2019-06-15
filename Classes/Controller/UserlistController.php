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
     * feRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @inject
     */
    protected $feRepository;

    /**
     * @param FeRepository $feRepository
     */
    public function injectFeRepository(FeRepository $feRepository)
    {
        $this->feRepository = $feRepository;
    }


    /**
     * list action
     *
     * @return void
     */
    public function listAction()
    {
        $allUsers = $this->feRepository->findAll();
        $this->view->assign('users', $allUsers);
    }
}