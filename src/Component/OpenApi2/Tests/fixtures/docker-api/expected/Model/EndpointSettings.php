<?php

namespace Docker\Api\Model;

class EndpointSettings
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
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @var EndpointIPAMConfig|null
     */
    protected $iPAMConfig;
    /**
     * 
     *
     * @var string[]
     */
    protected $links;
    /**
     * 
     *
     * @var string[]
     */
    protected $aliases;
    /**
     * Unique ID of the network.
     *
     * @var string
     */
    protected $networkID;
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @var string
     */
    protected $endpointID;
    /**
     * Gateway address for this network.
     *
     * @var string
     */
    protected $gateway;
    /**
     * IPv4 address.
     *
     * @var string
     */
    protected $iPAddress;
    /**
     * Mask length of the IPv4 address.
     *
     * @var int
     */
    protected $iPPrefixLen;
    /**
     * IPv6 gateway address.
     *
     * @var string
     */
    protected $iPv6Gateway;
    /**
     * Global IPv6 address.
     *
     * @var string
     */
    protected $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     *
     * @var int
     */
    protected $globalIPv6PrefixLen;
    /**
     * MAC address for the endpoint on this network.
     *
     * @var string
     */
    protected $macAddress;
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @var array<string, string>|null
    */
    protected $driverOpts;
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @return EndpointIPAMConfig|null
     */
    public function getIPAMConfig() : ?EndpointIPAMConfig
    {
        return $this->iPAMConfig;
    }
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @param EndpointIPAMConfig|null $iPAMConfig
     *
     * @return self
     */
    public function setIPAMConfig(?EndpointIPAMConfig $iPAMConfig) : self
    {
        $this->initialized['iPAMConfig'] = true;
        $this->iPAMConfig = $iPAMConfig;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param string[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAliases() : array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[] $aliases
     *
     * @return self
     */
    public function setAliases(array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * Unique ID of the network.
     *
     * @return string
     */
    public function getNetworkID() : string
    {
        return $this->networkID;
    }
    /**
     * Unique ID of the network.
     *
     * @param string $networkID
     *
     * @return self
     */
    public function setNetworkID(string $networkID) : self
    {
        $this->initialized['networkID'] = true;
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @return string
     */
    public function getEndpointID() : string
    {
        return $this->endpointID;
    }
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @param string $endpointID
     *
     * @return self
     */
    public function setEndpointID(string $endpointID) : self
    {
        $this->initialized['endpointID'] = true;
        $this->endpointID = $endpointID;
        return $this;
    }
    /**
     * Gateway address for this network.
     *
     * @return string
     */
    public function getGateway() : string
    {
        return $this->gateway;
    }
    /**
     * Gateway address for this network.
     *
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway(string $gateway) : self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * IPv4 address.
     *
     * @return string
     */
    public function getIPAddress() : string
    {
        return $this->iPAddress;
    }
    /**
     * IPv4 address.
     *
     * @param string $iPAddress
     *
     * @return self
     */
    public function setIPAddress(string $iPAddress) : self
    {
        $this->initialized['iPAddress'] = true;
        $this->iPAddress = $iPAddress;
        return $this;
    }
    /**
     * Mask length of the IPv4 address.
     *
     * @return int
     */
    public function getIPPrefixLen() : int
    {
        return $this->iPPrefixLen;
    }
    /**
     * Mask length of the IPv4 address.
     *
     * @param int $iPPrefixLen
     *
     * @return self
     */
    public function setIPPrefixLen(int $iPPrefixLen) : self
    {
        $this->initialized['iPPrefixLen'] = true;
        $this->iPPrefixLen = $iPPrefixLen;
        return $this;
    }
    /**
     * IPv6 gateway address.
     *
     * @return string
     */
    public function getIPv6Gateway() : string
    {
        return $this->iPv6Gateway;
    }
    /**
     * IPv6 gateway address.
     *
     * @param string $iPv6Gateway
     *
     * @return self
     */
    public function setIPv6Gateway(string $iPv6Gateway) : self
    {
        $this->initialized['iPv6Gateway'] = true;
        $this->iPv6Gateway = $iPv6Gateway;
        return $this;
    }
    /**
     * Global IPv6 address.
     *
     * @return string
     */
    public function getGlobalIPv6Address() : string
    {
        return $this->globalIPv6Address;
    }
    /**
     * Global IPv6 address.
     *
     * @param string $globalIPv6Address
     *
     * @return self
     */
    public function setGlobalIPv6Address(string $globalIPv6Address) : self
    {
        $this->initialized['globalIPv6Address'] = true;
        $this->globalIPv6Address = $globalIPv6Address;
        return $this;
    }
    /**
     * Mask length of the global IPv6 address.
     *
     * @return int
     */
    public function getGlobalIPv6PrefixLen() : int
    {
        return $this->globalIPv6PrefixLen;
    }
    /**
     * Mask length of the global IPv6 address.
     *
     * @param int $globalIPv6PrefixLen
     *
     * @return self
     */
    public function setGlobalIPv6PrefixLen(int $globalIPv6PrefixLen) : self
    {
        $this->initialized['globalIPv6PrefixLen'] = true;
        $this->globalIPv6PrefixLen = $globalIPv6PrefixLen;
        return $this;
    }
    /**
     * MAC address for the endpoint on this network.
     *
     * @return string
     */
    public function getMacAddress() : string
    {
        return $this->macAddress;
    }
    /**
     * MAC address for the endpoint on this network.
     *
     * @param string $macAddress
     *
     * @return self
     */
    public function setMacAddress(string $macAddress) : self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @return array<string, string>|null
    */
    public function getDriverOpts() : ?iterable
    {
        return $this->driverOpts;
    }
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @param array<string, string>|null $driverOpts
    *
    * @return self
    */
    public function setDriverOpts(?iterable $driverOpts) : self
    {
        $this->initialized['driverOpts'] = true;
        $this->driverOpts = $driverOpts;
        return $this;
    }
}