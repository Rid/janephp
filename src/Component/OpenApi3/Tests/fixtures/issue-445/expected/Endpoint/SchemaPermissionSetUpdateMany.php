<?php

namespace PicturePark\API\Endpoint;

class SchemaPermissionSetUpdateMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Updates the schema permission sets specified by the IDs and based on supplied request.
     *
     * @param \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/v1/SchemaPermissionSets/many';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\SchemaPermissionSetUpdateManyRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetUpdateManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BulkResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BulkResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetUpdateManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}