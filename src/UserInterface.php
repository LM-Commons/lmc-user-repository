<?php

declare(strict_types=1);

namespace Lmc\User\Repository;

use Lmc\Authentication\UserInterface as LmcAuthenticationUserInterface;

interface UserInterface extends LmcAuthenticationUserInterface
{
    public const STATE_INVALID  = 0;
    public const STATE_ACTIVE   = 1;
    public const STATE_INACTIVE = 2;
    public const STATE_DELETED  = 3;

    public function setId(string $id): UserInterface;

    public function getUsername(): string;

    public function setUsername(string $username): UserInterface;

    public function getEmail(): string;

    public function setEmail(string $email): UserInterface;

    public function getDisplayName(): string;

    public function setDisplayName(string $displayName): UserInterface;

    public function getPassword(): string;

    public function setPassword(string $password): UserInterface;

    public function getState(): int;

    public function setState(int $state): UserInterface;
}
