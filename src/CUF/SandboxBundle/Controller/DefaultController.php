<?php

namespace CUF\SandboxBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;

class DefaultController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Get action
     * @var integer $id Id of the entity
     * @return array
     *
     * @Rest\View()
     */
    public function getAction($id)
    {
        return array(
            'get' => $id
        );
    }
}
