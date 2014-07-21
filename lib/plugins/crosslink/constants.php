<?php
/**
 * @file Stores useful constants for this plugin.
 */

/**
 * Fired to create a crosslink between this site and another one.
 * 
 * @ingroup events
 */
define('EVENT_CROSSLINK_CREATE_CROSSLINK', 'create-crosslink');

/**
 * Set this option to the build name of the site you want to create a 
 * crosslink to.
 * 
 * @ingroup args
 */
define('OPTION_CROSSLINK_SITE', 'crosslink');

/**
 * String for when crosslinks are about to be created.
 * 
 * @ingroup strings
 */
define('STRING_WORKING_CREATE_CROSSLINKS', 'crosslink.working.create');

/**
 * String for when crosslinks were created successfully.
 * 
 * @ingroup strings
 */
define('STRING_SUCCESS_CREATE_CROSSLINKS', 'crosslink.success.create');

/**
 * String for when there is an error loading the other site during the
 * creation of crosslinks.
 * 
 * @ingroup strings
 */
define('STRING_ERROR_CROSSLINKS_NO_SITE', 'crosslink.error.no-site');
