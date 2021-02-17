<?php

declare(strict_types=1);

namespace OtusPackages;

class SecretCodeGenerator
{

    public function generate(): int
    {
        return random_int(1000, 9999);
    }

}