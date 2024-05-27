<?php

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeControllerTest extends WebTestCase
{
    protected KernelBrowser $client;

    public function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    public function testIndex()
    {
        $this->client->catchExceptions(false); // Désactive la capture des exceptions pour ce test

        $this->client->request(Request::METHOD_GET, '/');
        $response = $this->client->getResponse();

        // Vérifie si le code de réponse est OK
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());

        $this->client->catchExceptions(true); // Réactive la capture des exceptions après le test
    }
}