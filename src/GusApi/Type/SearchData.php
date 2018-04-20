<?php

namespace GusApi\Type;

/**
 * Class DaneSzukaj
 * @package GusApi\Type
 */
class SearchData
{
    /**
     * @var SearchParameters $pParametryWyszukiwania
     */
    protected $pParametryWyszukiwania = null;

    /**
     * @param SearchParameters $pParametryWyszukiwania
     */
    public function __construct(SearchParameters $pParametryWyszukiwania)
    {
        $this->pParametryWyszukiwania = $pParametryWyszukiwania;
    }

    /**
     * @return SearchParameters
     */
    public function getPParametryWyszukiwania(): SearchParameters
    {
        return $this->pParametryWyszukiwania;
    }

    /**
     * @param SearchParameters $pParametryWyszukiwania
     * @return SearchData
     */
    public function setPParametryWyszukiwania(SearchParameters $pParametryWyszukiwania)
    {
        $this->pParametryWyszukiwania = $pParametryWyszukiwania;
        return $this;
    }
}
