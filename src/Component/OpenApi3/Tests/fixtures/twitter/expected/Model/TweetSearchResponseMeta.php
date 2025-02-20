<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TweetSearchResponseMeta extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Most recent Tweet Id returned by search query
     *
     * @var string
     */
    protected $newestId;
    /**
     * Oldest Tweet Id returned by search query
     *
     * @var string
     */
    protected $oldestId;
    /**
     * This value is used to get the next 'page' of results by providing it to the next_token parameter.
     *
     * @var string
     */
    protected $nextToken;
    /**
     * Number of search query results
     *
     * @var int
     */
    protected $resultCount;
    /**
     * Most recent Tweet Id returned by search query
     *
     * @return string
     */
    public function getNewestId() : string
    {
        return $this->newestId;
    }
    /**
     * Most recent Tweet Id returned by search query
     *
     * @param string $newestId
     *
     * @return self
     */
    public function setNewestId(string $newestId) : self
    {
        $this->initialized['newestId'] = true;
        $this->newestId = $newestId;
        return $this;
    }
    /**
     * Oldest Tweet Id returned by search query
     *
     * @return string
     */
    public function getOldestId() : string
    {
        return $this->oldestId;
    }
    /**
     * Oldest Tweet Id returned by search query
     *
     * @param string $oldestId
     *
     * @return self
     */
    public function setOldestId(string $oldestId) : self
    {
        $this->initialized['oldestId'] = true;
        $this->oldestId = $oldestId;
        return $this;
    }
    /**
     * This value is used to get the next 'page' of results by providing it to the next_token parameter.
     *
     * @return string
     */
    public function getNextToken() : string
    {
        return $this->nextToken;
    }
    /**
     * This value is used to get the next 'page' of results by providing it to the next_token parameter.
     *
     * @param string $nextToken
     *
     * @return self
     */
    public function setNextToken(string $nextToken) : self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;
        return $this;
    }
    /**
     * Number of search query results
     *
     * @return int
     */
    public function getResultCount() : int
    {
        return $this->resultCount;
    }
    /**
     * Number of search query results
     *
     * @param int $resultCount
     *
     * @return self
     */
    public function setResultCount(int $resultCount) : self
    {
        $this->initialized['resultCount'] = true;
        $this->resultCount = $resultCount;
        return $this;
    }
}