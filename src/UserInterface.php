<?php

declare(strict_types=1);

namespace Lmc\User\Repository;

use Mezzio\Authentication\UserInterface as MezzioUserInterface;

interface UserInterface extends MezzioUserInterface
{
    public const int STATE_INVALID  = 0;
    public const int STATE_ACTIVE   = 1;
    public const int STATE_INACTIVE = 2;
    public const int STATE_DELETED  = 3;

    public function getId(): string|int|null;

    public function setId(string|int $id): UserInterface;

    public function getUsername(): ?string;

    public function setUsername(?string $username): UserInterface;

    public function getEmail(): ?string;

    public function setEmail(?string $email): UserInterface;

    public function getDisplayName(): ?string;

    public function setDisplayName(?string $displayName): UserInterface;

    public function getPassword(): ?string;

    public function setPassword(?string $password): UserInterface;

    public function getState(): int|string|null;

    public function setState(int|string|null $state): UserInterface;

    public function setRoles(array $roles): UserInterface;
}
