<?php

declare(strict_types=1);

namespace Lmc\User\Repository;

interface AdapterInterface
{
    public function findById(string $id): ?UserInterface;
    public function findByUsername(string $username): ?UserInterface;
    public function findByEmail(string $email): ?UserInterface;

    public  function insert(UserInterface $user);
    public  function update(UserInterface $user);
    public  function delete(UserInterface $user);
}
