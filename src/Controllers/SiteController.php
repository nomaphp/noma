<?php

namespace App\Controllers;

use Noma\Core\Command;
use Noma\Core\Controller;
use Noma\Core\HttpMethod;
use Noma\Core\Response;
use Noma\Core\Route;

class SiteController extends Controller
{
    #[Route(HttpMethod::GET, '/')]
    public function index(): Response
    {
        return Response::text("Hello, World.");
    }

    #[Command("test")]
    public function testCommand(string ...$argv): Response
    {
        return Response::text("Hello, CLI.");
    }
}