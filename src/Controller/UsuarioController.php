<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/", name="Web_Usuario_")
 */
class UsuarioController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */

    public function index(): Response
    {
        return new Response("Implementar formulario de cadastro");
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */

    public function salvar(): Response
    {
        return new Response("Implementar Gravação ao Banco de Dados");
    }
}