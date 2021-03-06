<?php
/**
 * @file Defines useful constants for this plugin.
 */

/**
 * An event to be fired when starting to build a subsite.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_START', 'subsite-build-start');

/**
 * An event to be fired to configure the subsite build.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_CONFIG', 'subsite-build-config');

/**
 * An event to be fired to build the subsite's codebase.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_CODEBASE', 'subsite-build-codebase');

/**
 * An event to be fired to build the subsite's server configuration.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_SERVER_CONFIG', 'subsite-build-server-config');

/**
 * An event to be fired to build anything extra before the parent
 * gets refreshed.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_EXTRAS', 'subsite-build-extras');

/**
 * An event to be fired in order to refresh the parent configuration.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_PARENT_SERVER_REFRESH', 'subsite-build-parent-refresh');

/**
 * An event to fire when the build is complete.
 * 
 * @ingroup events
 */
define('EVENT_SUBSITE_BUILD_COMPLETE', 'subsite-build-complete');

/**
 * A string token for when the subsite build process fails.
 */
define('STRING_SUBSITE_BUILD_GENERIC_ERROR', 'drupal_site_build.error.subsite-generic');

/**
 * Fired when we're ready for additional configuration.
 * 
 * Context settings:
 * - \c success: Set to TRUE initially. If your plugin fails, you should set
 *   this to FALSE. You may avoid creating your configuration if it is already
 *   set to FALSE.
 * - \c site: An instance of DrupalSite.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_MORE_CONFIG', 'site-build-additional-config');

/**
 * Fired when its time to build the initial site structure.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_STRUCTURE', 'site-build-structure');

/**
 * Fired when its time to build a new codebase.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_CODEBASE', 'site-build-build');

/**
 * Fired when its time to configure the default sites.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_SITES', 'site-build-sites');

/**
 * Fired when its time to build the server structure.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_SERVER_STRUCTURE', 'site-build-server-init-struct');

/**
 * Fired when its time to configure the server.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_CONFIGURE_SERVER', 'site-build-server-config');

/**
 * Fired when the site is built.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILT', 'site-built');

/**
 * Fired before the site is built.
 * 
 * @ingroup events
 */
define('EVENT_SITE_BUILD_START', 'site-build-start');

/**
 * Config setting to determine whether or not we should cleanup on error.
 * 
 * @ingroup config
 */
define('CONFIG_SITE_CLEANUP_ON_ERROR', 'site-cleanup-on-error');

/**
 * Fired at the beginning of a build to allow plugins to configure the site
 * further.
 * 
 * @ingroup events
 */
define('EVENT_SITE_CONFIGURE', 'site-config');

/**
 * String token for if there is no build name.
 * 
 * @ingroup strings
 */
define('STRING_MISSING_BUILD_NAME', 'drupal_site_build.error.no-build-name');

/**
 * String token for if the site configuration could not be done successfully.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_CONFIGURE_SITE', 'drupal_site_build.error.no-config');

/**
 * String token for if the site's internal structure could not be established.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_BUILD_STRUCTURE', 'drupal_site_build.error.no-structure');

/**
 * String token for if the site's codebase could not be built.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_CREATE_BUILD', 'drupal_site_build.error.no-build');

/**
 * String token for if the sites could not be setup properly.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_SETUP_SITES', 'drupal_site_build.error.no-sites');

/**
 * String token for if the server structure could not be established.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_STRUCTURE_SERVER', 'drupal_site_build.error.no-server-structure');

/**
 * String token for if the server configuration could not be established.
 * 
 * @ingroup strings
 */
define('STRING_COULD_NOT_CONFIGURE_SERVER', 'drupal_site_build.error.no-server-config');

/**
 * String token for if there was an error during an additional configuration step.
 * 
 * @ingroup strings
 */
define('STRING_ADDITIONAL_CONFIG_ERROR', 'drupal_site_build.error.no-more-config');

/**
 * String token for the description of the site-build command.
 * 
 * @ingroup strings
 */
define('STRING_HELP_SITE_BUILD_DESCRIPTION', 'help.command-desc.site-build');

/**
 * String token for the description of the subsite-build command.
 * 
 * @ingroup strings
 */
define('STRING_HELP_SUBSITE_BUILD_DESCRIPTION', 'help.command-desc.subsite-build');
