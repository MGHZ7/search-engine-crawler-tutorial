<?php
namespace Mghz\SearchEngine\Crawler;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Crawler implements ICrawler
{
    private string $site;
    private static ?Client $client = null;

    private static function initClient() {
        if (!self::$client) {
            self::$client = new Client();
        }
    }

    public function __construct(string $site) {
        self::initClient();
        $this->site = $site;
    }

    /**
     * @throws GuzzleException
     */
    public function crawl(array $params): string
    {
        $response = self::$client->get( $this->site, $params);

        return $response->getBody();
    }
}