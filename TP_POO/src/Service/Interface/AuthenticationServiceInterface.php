<?php

namespace Service;

interface AuthenticationServiceInterface
{
    public function connexion(string $login, string $password, array $usersList): bool;
    public function hashPassword(string $password): string;
}