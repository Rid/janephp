<?php

namespace Github\Model;

class BranchRestrictionPolicy extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $usersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $teamsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $appsUrl;
    /**
     * 
     *
     * @var BranchRestrictionPolicyUsersItem[]
     */
    protected $users;
    /**
     * 
     *
     * @var BranchRestrictionPolicyTeamsItem[]
     */
    protected $teams;
    /**
     * 
     *
     * @var BranchRestrictionPolicyAppsItem[]
     */
    protected $apps;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsersUrl() : string
    {
        return $this->usersUrl;
    }
    /**
     * 
     *
     * @param string $usersUrl
     *
     * @return self
     */
    public function setUsersUrl(string $usersUrl) : self
    {
        $this->initialized['usersUrl'] = true;
        $this->usersUrl = $usersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamsUrl() : string
    {
        return $this->teamsUrl;
    }
    /**
     * 
     *
     * @param string $teamsUrl
     *
     * @return self
     */
    public function setTeamsUrl(string $teamsUrl) : self
    {
        $this->initialized['teamsUrl'] = true;
        $this->teamsUrl = $teamsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAppsUrl() : string
    {
        return $this->appsUrl;
    }
    /**
     * 
     *
     * @param string $appsUrl
     *
     * @return self
     */
    public function setAppsUrl(string $appsUrl) : self
    {
        $this->initialized['appsUrl'] = true;
        $this->appsUrl = $appsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return BranchRestrictionPolicyUsersItem[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param BranchRestrictionPolicyUsersItem[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return BranchRestrictionPolicyTeamsItem[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param BranchRestrictionPolicyTeamsItem[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;
        return $this;
    }
    /**
     * 
     *
     * @return BranchRestrictionPolicyAppsItem[]
     */
    public function getApps() : array
    {
        return $this->apps;
    }
    /**
     * 
     *
     * @param BranchRestrictionPolicyAppsItem[] $apps
     *
     * @return self
     */
    public function setApps(array $apps) : self
    {
        $this->initialized['apps'] = true;
        $this->apps = $apps;
        return $this;
    }
}