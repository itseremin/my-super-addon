<?php

defined('BOOTSTRAP') or die('Access denied');

fn_register_hooks(
    /** @see \fn_my_super_addon_get_route() */
    'get_route'
);