<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AboutVektorControllerTest extends WebTestCase {

    public function testShow() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/omvektor');

        // Assert that we have the correct amount of data
        $this->assertEquals( 1, $crawler->filter('h1:contains("Om Vektorprogrammet")')->count() );
        $this->assertEquals( 1, $crawler->filter('h1:contains("Mål og verdier")')->count() );
        $this->assertEquals( 1, $crawler->filter('strong:contains("​Motiverte elever​")')->count() );
        $this->assertEquals( 1, $crawler->filter('h1:contains("Historie")')->count() );
        $this->assertEquals( 10, $crawler->filter('p:contains("Vektorprogrammet")')->count() );

        // Assert a specific 200 status code
        $this->assertEquals( 200, $client->getResponse()->getStatusCode() );

    }
	
}
