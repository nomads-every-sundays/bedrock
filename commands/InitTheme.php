<?php

namespace Bedrock;

use WP_CLI;

/**
 *
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
    class InitTheme extends \WPCOM_VIP_CLI_Command
    {
        /**
         * Retrieves a list of registered block types, or the object for a registered block type if single block type requested.
         *
         * ## EXAMPLES
         *
         *   $ wp Bedrock InitTheme
         */
        public function __invoke(): void
        {
            WP_CLI::log('Checking  for unused themes...');
        }
    }

    try {
        WP_CLI::add_command('Bedrock', '\Bedrock\InitTheme');
    } catch (\Exception $e) {
    }
}

$foo_command = function( $args ) {
    WP_CLI::success( $args[0] );
};
WP_CLI::add_command( 'foo', $foo_command );
