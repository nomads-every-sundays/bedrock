<?php

namespace Bedrock;

class InitTheme {

    public function __invoke(): void
    {
        WP_CLI::log('Checking  for unused themes...');
    }
}

WP_CLI::add_command('Bedrock Init', 'InitTheme');
