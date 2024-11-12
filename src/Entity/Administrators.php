<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
 class Administrators extends Users
{
    #[ORM\Column(type: 'boolean',nullable: true)]
    private bool $superAdmin = false;

    public function __construct()
    {
        parent::__construct();
        $this->roles = ['ROLE_ADMIN'];
    }


    public function isSuperAdmin(): bool
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(bool $superAdmin): void
    {
         $this->superAdmin = $superAdmin;
    }

}
