<?php
namespace Pyntax\SocialMedia\Connectors;

/**
 * Interface Connector
 * @package Pyntax\SocialMedia\Conenctors
 */
interface Connector
{
    /**
     * @param Post $post
     * @return mixed
     */
    function publishAPost(Post $post);

    /**
     * @param User $user
     * @return mixed
     */
    function authenticateUser(User $user);
}