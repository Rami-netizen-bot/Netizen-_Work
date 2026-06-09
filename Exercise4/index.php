<?php
class User
{
    public function __construct(
        protected string $username,
        protected string $email
    ) {}
    public function getUsername(): string
    { 
        return $this->username;
    }
    public function getPermission(): array
    {
        return ['view_pages'];
    }
}

class Editor extends User
{
    #[Override]
    public function getPermission(): array
    {
        return array_merge(parent::getPermission(), ['edit_pages', 'manage_users']);
    }
}

class Admin extends User
{
    #[Override]
    public function getPermission(): array
    {
        return array_merge(parent::getPermission(), ['delete_pages', 'manage_users']);
    }
}

$users = [new User("ramy", "ramy@develop.com"), new User("ramy", "ramy1@develop.com"), new User("ramy", "ramy2@develop.com"),];

foreach ($users as $user) {
    echo "User: " . $user->getUsername() . "| Total Permission: " . count($user->getPermission()) . "\n";
    echo "Permission:" . implode(",", $user->getPermission()) . "\n\n";
}
