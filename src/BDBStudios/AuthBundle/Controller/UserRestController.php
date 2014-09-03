<?php


namespace BDBStudios\AuthBundle\Controller;


use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserRestController extends Controller
{
    /**
     * @return mixed
     * "get_users"     [GET] /users
     */
    public function getUsersAction()
    {
        $data =  $this->getDoctrine()->getRepository("BDBStudiosAuthBundle:User")->findAll();

        $view = new View($data);
        $view->setTemplate(new JsonResponse());

        return $this->get('fos_rest.view_handler')->handle($view);
    }

    public function getUserAction($slug)
    {} // "get_user"      [GET] /users/{slug}

    public function editUserAction($slug)
    {} // "edit_user"     [GET] /users/{slug}/edit

    public function postUserAction($slug)
    {

    }

    public function putUserAction($slug)
    {} // "put_user"      [PUT] /users/{slug}

    public function lockUserAction($slug)
    {} // "lock_user"     [PATCH] /users/{slug}/lock

    public function banUserAction($slug)
    {} // "ban_user"      [PATCH] /users/{slug}/ban

    public function deleteUserAction($slug)
    {} // "delete_user"   [DELETE] /users/{slug}

    public function linkUserAction($slug)
    {} // "link_user_friend"     [LINK] /users/{slug}

    public function unlinkUserAction($slug)
    {} // "unlink_user_friend"     [UNLINK] /users/{slug}
}
