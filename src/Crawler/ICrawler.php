<?php
namespace Mghz\SearchEngine\Crawler;

/**
 * Crawler interface
 *
 */
interface ICrawler
{
    /**
     * @param array $params an associative array of parameters like
     *
     * <pre>
     *      ['query' => ['search' => 'keyword']]
     * </pre>
     *
     * @return string which represents the response
     */
    public function crawl(array $params): string;
}