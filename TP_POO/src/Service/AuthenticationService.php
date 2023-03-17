<?php

namespace Service;

use Service\AuthenticationServiceInterface;

require_once './Interface/AuthenticationServiceInterface.php';

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
    public function connexion(string $login, string $password, array $usersList): bool
    {
        foreach ($usersList as $user) {
            if ($user->getLogin() === $login && password_verify($password, $user->getPassword)) {
                return true;
            }
        }
        return false;
    }

    public function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
