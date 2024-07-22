<?php
/**
 * Custom Crons Directory Configuration
 *
 * This crons folder may be moved to any place above or below the docroot.
 *
 * We recommend locating it outside the docroot to prevent browser based access.
 *
 * Upon moving it, you must provide the path to your WHMCS installation to
 * allow the cron task files to communicate with the parent WHMCS installation.
 *
 * To do this, rename this file config.php, then uncomment and enter the full
 * path to the WHMCS root directory in the $whmcspath variable below.
 *
 * You must also provide the appropriate path to the crons folder in the
 * $crons_dir variable inside the WHMCS master configuration file.
 *
 * For more information please see https://docs.whmcs.com/Custom_Crons_Directory
 */

$whmcspath = '/www/wwwroot/promodominios.com/clientes/';
