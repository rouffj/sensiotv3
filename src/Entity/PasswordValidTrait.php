<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

trait PasswordValidTrait
{
    /**
     * @Assert\IsTrue(message="The password should not contain the email or login")
     */
    public function isPasswordValid(): bool
    {
        return $this->email !== $this->password && $this->login !== $this->password;
    }
}