<?php

namespace FSevestre\CS\Config;

use PhpCsFixer\Config;

final class Php72 extends Config
{
    public function __construct()
    {
        parent::__construct('Florent SEVESTRE (PHP 7.2)');

        $this->setRiskyAllowed(true);
    }

    public function getRules()
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'no_unreachable_default_argument_value' => false,
            'phpdoc_summary' => false,
        ];

        return $rules;
    }
}
