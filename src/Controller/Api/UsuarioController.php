<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("Api/v1", name="Api_V1_Usuario_")
 */
class UsuarioController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): Response
    {
        return new JsonResponse(["implementar lista na API", 404]);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public  function cadastra(): Response
    {
        return new JsonResponse(["implementar cadastro API", 404]);
    }
}