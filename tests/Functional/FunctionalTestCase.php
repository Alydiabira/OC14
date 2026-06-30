<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use App\Model\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\DomCrawler\Crawler;

abstract class FunctionalTestCase extends WebTestCase
{
    protected KernelBrowser $client;
    protected ?EntityManagerInterface $em = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
        $this->em = static::getContainer()->get('doctrine')->getManager();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        if ($this->em !== null) {
            $this->em->close();
        }

        // Correction PHPStan : pas de unset()
        $this->em = null;
    }

    /**
     * @param array<string, mixed> $params
     */
    protected function get(string $uri, array $params = []): Crawler
    {
        return $this->client->request('GET', $uri, $params);
    }

    /**
     * @param array<string, mixed> $params
     */
    protected function post(string $uri, array $params = []): Crawler
    {
        return $this->client->request('POST', $uri, $params);
    }

    /**
     * @param array<string, mixed> $fields
     */
    protected function submitForm(string $button, array $fields): Crawler
    {
        return $this->client->submitForm($button, $fields);
    }

    /**
     * @param array<string, mixed> $fields
     */
    protected function submit(string $button, array $fields = [], string $method = 'POST'): Crawler
    {
        $form = $this->client->getCrawler()->selectButton($button)->form();

        foreach ($fields as $name => $value) {
            $form[$name] = $value;
        }

        return $this->client->submit($form, $fields);
    }

    protected function login(string $username = 'user+0'): void
    {
        $user = $this->em?->getRepository(User::class)->findOneBy(['username' => $username]);
        $this->client->loginUser($user);
    }
}
