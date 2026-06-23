<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

abstract class FunctionalTestCase extends WebTestCase
{
    protected $client;
    protected EntityManagerInterface $em;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
        $this->em = static::getContainer()->get('doctrine')->getManager();
    }

    protected function login(string $username = 'user+1'): void
    {
        $user = $this->em->getRepository('App:User')->findOneBy(['username' => $username]);
        $this->client->loginUser($user);
    }
}
