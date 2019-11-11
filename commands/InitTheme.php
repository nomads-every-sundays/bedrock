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
         * Prints a greeting.
         *
         * ## EXAMPLES
         *
         *     wp example hello Newman
         *
         * @when after_wp_load
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

/**
 * My awesome closure command
 *
 * <message>
 * : An awesome message to display
 *
 * --append=<message>
 * : An awesome message to append to the original message.
 *
 * @when before_wp_load
 */
$foo_command = function( $args ) {
    WP_CLI::success( $args[0] );
};
WP_CLI::add_command( 'Bedrock foo', $foo_command );
