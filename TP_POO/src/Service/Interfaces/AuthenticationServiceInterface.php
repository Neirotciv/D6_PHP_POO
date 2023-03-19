<?php

namespace Service\Interfaces;

interface AuthenticationServiceInterface
{
    /**
     * Check if user login and password match with the ones stored in $usersList
     * @param string $login The login to check
     * @param string $password The hashed password to check
     * @param array $usersList The list of Users to check against
     * @return bool True if the login and password match a user in the $usersList, false otherwise
     */
    public function connexion(string $login, string $password, array $usersList): bool;

    /**
     * Hashes a password using the default algorithm.
     * @param string $password The password to hash.
     * @return string The hashed password.
     */
    public function hashPassword(string $password): string;
}