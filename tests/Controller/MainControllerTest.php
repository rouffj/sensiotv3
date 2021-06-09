<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testHomepage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        # Manual way of doing assertions
        $this->assertEquals(6, $crawler->filter('#main .card')->count(), 'Homepage should contains 6 movies');
        $this->assertStringContainsString('Inception', $crawler->filter('#main .card')->eq(3)->text());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        # With aliases
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'SensioTV+');
    }
}
