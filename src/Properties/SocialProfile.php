<?php

namespace Astrotomic\Vcard\Properties;

class SocialProfile extends Property
{
    public function __construct(protected string $type, protected string $url)
    {
    }

    public function __toString(): string
    {
        return "X-SOCIALPROFILE;type={$this->type}:{$this->url}";
    }
}
