<?php
namespace MGHZ\SearchEngine;

interface ISearchEngine
{
    public function setEngine(string $name);
    public function search(array $keywords);
}