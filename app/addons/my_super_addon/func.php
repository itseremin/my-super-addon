<?php

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/**
 * The "get_route" hook handler.
 *
 * Actions performed:
 * - Copies Marketplace license number into add-on setting for easy programmatic access.
 *
 * @see \fn_get_route()
 */
function fn_my_super_addon_get_route()
{
    Registry::set(
        'addons.my_super_addon.my_super_license_key',
        db_get_field('SELECT marketplace_license_key FROM ?:addons WHERE addon = ?s', 'my_super_addon')
    );
}