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
        $client = static::createClient();

        $this->client->request(Request::METHOD_GET, '/');

        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertContains('Hello World!', $client->getResponse()->getContent());
    }
}