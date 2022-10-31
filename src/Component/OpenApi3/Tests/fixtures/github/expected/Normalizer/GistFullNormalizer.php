<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GistFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\GistFull';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GistFull';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GistFull();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GistFullConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
            unset($data['forks_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
            unset($data['commits_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('git_pull_url', $data)) {
            $object->setGitPullUrl($data['git_pull_url']);
            unset($data['git_pull_url']);
        }
        if (\array_key_exists('git_push_url', $data)) {
            $object->setGitPushUrl($data['git_push_url']);
            unset($data['git_push_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('files', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['files'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Github\\Model\\GistSimpleFilesItem', 'json', $context);
            }
            $object->setFiles($values);
            unset($data['files']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\SimpleUser', 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('truncated', $data)) {
            $object->setTruncated($data['truncated']);
            unset($data['truncated']);
        }
        if (\array_key_exists('forks', $data)) {
            $values_1 = array();
            foreach ($data['forks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\GistFullforksItem', 'json', $context);
            }
            $object->setForks($values_1);
            unset($data['forks']);
        }
        if (\array_key_exists('history', $data)) {
            $values_2 = array();
            foreach ($data['history'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\GistFullhistoryItem', 'json', $context);
            }
            $object->setHistory($values_2);
            unset($data['history']);
        }
        if (\array_key_exists('fork_of', $data) && $data['fork_of'] !== null) {
            $object->setForkOf($this->denormalizer->denormalize($data['fork_of'], 'Github\\Model\\GistFullforkOf', 'json', $context));
            unset($data['fork_of']);
        }
        elseif (\array_key_exists('fork_of', $data) && $data['fork_of'] === null) {
            $object->setForkOf(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('forksUrl') && null !== $object->getForksUrl()) {
            $data['forks_url'] = $object->getForksUrl();
        }
        if ($object->isInitialized('commitsUrl') && null !== $object->getCommitsUrl()) {
            $data['commits_url'] = $object->getCommitsUrl();
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if ($object->isInitialized('gitPullUrl') && null !== $object->getGitPullUrl()) {
            $data['git_pull_url'] = $object->getGitPullUrl();
        }
        if ($object->isInitialized('gitPushUrl') && null !== $object->getGitPushUrl()) {
            $data['git_push_url'] = $object->getGitPushUrl();
        }
        if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if ($object->isInitialized('files') && null !== $object->getFiles()) {
            $values = array();
            foreach ($object->getFiles() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['files'] = $values;
        }
        if ($object->isInitialized('public') && null !== $object->getPublic()) {
            $data['public'] = $object->getPublic();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if ($object->isInitialized('commentsUrl') && null !== $object->getCommentsUrl()) {
            $data['comments_url'] = $object->getCommentsUrl();
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('truncated') && null !== $object->getTruncated()) {
            $data['truncated'] = $object->getTruncated();
        }
        if ($object->isInitialized('forks') && null !== $object->getForks()) {
            $values_1 = array();
            foreach ($object->getForks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['forks'] = $values_1;
        }
        if ($object->isInitialized('history') && null !== $object->getHistory()) {
            $values_2 = array();
            foreach ($object->getHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['history'] = $values_2;
        }
        if ($object->isInitialized('forkOf') && null !== $object->getForkOf()) {
            $data['fork_of'] = $this->normalizer->normalize($object->getForkOf(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GistFullConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}