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
     * FeRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feRepository;

    /**
     * FeGroupRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserGroupRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $feGroupRepository;

    /**
     * list action
     *
     * @return void
     */
    public function listAction()
    {
        $query = $this->feRepository->createQuery();
        $query->statement('SELECT * FROM fe_users');
        $allUsers = $query->execute(TRUE);

        $this->view->assign('users', $allUsers);
    }
}