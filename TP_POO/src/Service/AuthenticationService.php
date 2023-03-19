<?php

namespace Service;

use Service\Interfaces\AuthenticationServiceInterface;

class AuthenticationService implements AuthenticationServiceInterface
{
    // Design pattern Singleton 
    private static $instance = null;

    private function __construct()
    {
    }

    /**
     * Get the instance of the ServiceHelper class
     * @return ServiceHelper The instance of the ServiceHelper class
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new AuthenticationService();
        }
        return self::$instance;
    }

    /**
     * Check if user login and password match with the ones stored in $usersList
     * @param string $login The login to check
     * @param string $password The hashed password to check
     * @param array $usersList The list of Users to check against
     * @return bool True if the login and password match a user in the $usersList, false otherwise
     */
    public function connexion(string $login, string $password, array $users_list): bool
    {
        foreach ($users_list as $user) {
            if ($user->getLogin() === $login) {
                if (password_verify($password, $user->getPassword())) {
                    return true;
                }
            }
        }
        // The user does not exist
        return false;
    }

    /**
     * Hashes a password using the default algorithm.
     * @param string $password The password to hash.
     * @return string The hashed password.
     */
    public function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
