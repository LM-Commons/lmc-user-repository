<?php

declare(strict_types=1);

namespace Lmc\User\Repository;

interface AdapterInterface
{
    public function findById(string $id): ?UserInterface;

    public function findByUsername(string $username): ?UserInterface;

    public function findByEmail(string $email): ?UserInterface;

    public function insert(UserInterface $user): mixed;

    public function update(UserInterface $user): mixed;

    public function delete(UserInterface $user): mixed;
}
