<?php
/**
 * @file Defines useful constants for this plugin.
 */

/**
 * Config key for whether or not all permission settings should be ignored.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_IGNORE_ALL', 'permissions-ignore-all');

/**
 * Config key for the default owner. Used as a fallback should a specific key
 * not be set. Defaults to the current system user.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_DEFAULT_OWNER', 'permissions-default-owner');

/**
 * Config key for the default group. Used as a fallback should a specific key
 * not be set. Defaults to the first group ever given to the current system
 * user.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_DEFAULT_GROUP', 'permissions-default-group');

/**
 * Config key for the default permissions. Should be a string with three octal
 * characters indicating RWX permissions for the file/directory. Used as a 
 * fallback should a specific key not be set.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_DEFAULT_ACCESS', 'permissions-default-access');

/**
 * Config key for the owner of build files.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_BUILD_OWNER', 'permissions-build-owner');

/**
 * Config key for the group of build files.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_BUILD_GROUP', 'permissions-build-group');

/**
 * Config key for the permissions of build files. Should be a string with three
 * octal characters indicating RWX permissions for the file/directory. Defaults
 * to 755.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_BUILD_ACCESS', 'permissions-build-access');

/**
 * Config key for whether or not we should ignore permissions for build files.
 * If set, none of the permissions for build files will be modified.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_IGNORE_BUILD', 'permissions-build-ignore');

/**
 * Config key for the owner of server files. This should be set to the web
 * server user.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SERVER_OWNER', 'permissions-server-owner');

/**
 * Config key for the group of server files. This should be set to the 
 * web server group.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SERVER_GROUP', 'permissions-server-group');

/**
 * Config key for the permissions of server files. Should be set to a sensible
 * three-character octal string indicating RWX permissions for owner/group/other.
 * Defaults to 700.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SERVER_ACCESS', 'permissions-server-access');

/**
 * Config key for ignoring server file permissions. If set, none of the 
 * server permissions are set.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_IGNORE_SERVER', 'permissions-server-ignore');

/**
 * Config key for the system owner. Defaults to 'root'.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SYSTEM_OWNER', 'permissions-system-owner');

/**
 * Config key for the system group. Defaults to 'root'.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SYSTEM_GROUP', 'permissions-system-group');

/**
 * Config key for the system permissions. Defaults to 700.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_SYSTEM_ACCESS', 'permissions-system-access');

/**
 * Config key to ignore system permissions. If set, none of the system files
 * will get special permissions.
 * 
 * @ingroup config
 */
define('CONFIG_PERMISSIONS_IGNORE_SYSTEM', 'permissions-system-ignore');

/**
 * String token for when no user is detected.
 * 
 * @ingroup strings
 */
define('STRING_PERMISSIONS_NO_USER', 'permissions.error.no-user');

/**
 * String token for when no group is detected.
 * 
 * @ingroup strings
 */
define('STRING_PERMISSIONS_NO_GROUP' ,'permissions.error.no-group');

/**
 * String token for when no permissions are detected.
 * 
 * @ingroup strings
 */
define('STRING_PERMISSIONS_NO_ACCESS', 'permissions.error.no-access');

/**
 * String token for when file permissions are about to be applied.
 * 
 * @ingroup strings
 */
define('STRING_PERMISSIONS_MESSAGE', 'permissions.message.applying');

/**
 * String token for when there are errors in the permission application 
 * process.
 * 
 * @ingroup strings
 */
define('STRING_PERMISSIONS_FAILURES', 'permission.error.application');

/**
 * Permission type for system files.
 * 
 * @ingroup permission_types
 */
define('PERMISSION_TYPE_SYSTEM', 'system');

/**
 * Permission type for server files.
 * 
 * @ingroup permission_types
 */
define('PERMISSION_TYPE_SERVER', 'server');

/**
 * Permission type for build files.
 * 
 * @ingroup permission_types
 */
define('PERMISSION_TYPE_BUILD', 'build');
