<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use App\Model\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

abstract class FunctionalTestCase extends WebTestCase
{
    protected KernelBrowser $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->service(EntityManagerInterface::class);
    }

    /**
<<<<<<< HEAD
     * @template T of object
=======
     * @template T
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @param class-string<T> $id
     * @return T
     */
    protected function service(string $id): object
    {
<<<<<<< HEAD
        /** @var null|T $service */
        $service = $this->client->getContainer()->get($id);
        self::assertNotNull($service);
        return $service;
    }

    /**
     * @param array<string, mixed> $parameters
     */
=======
        return $this->client->getContainer()->get($id);
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected function get(string $uri, array $parameters = []): Crawler
    {
        return $this->client->request('GET', $uri, $parameters);
    }

    protected function login(string $email = 'user+0@email.com'): void
    {
<<<<<<< HEAD
        $user = $this->getEntityManager()->getRepository(User::class)->findOneBy(['email' => $email]);
        self::assertNotNull($user);
        $this->client->loginUser($user);
    }

    /**
     * @param array<string, mixed> $formData
     */
    protected function submit(string $button, array $formData = [], string $method = 'POST'): Crawler
    {
        return $this->client->submitForm($button, $formData, $method);
    }
=======
        $user = $this->service(EntityManagerInterface::class)->getRepository(User::class)->findOneByEmail($email);

        $this->client->loginUser($user);
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
