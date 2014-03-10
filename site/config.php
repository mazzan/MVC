<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */
 
/**
* Set database(s).
*/
$ra->config['database'][0]['dsn'] = 'sqlite:' . RAMA_SITE_PATH . '/data/.ht.sqlite';

/**
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);


/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
$ra->config['debug']['rama'] = false;
$ra->config['debug']['session'] = false;
$ra->config['debug']['timer'] = true;
$ra->config['debug']['db-num-queries'] = true;
$ra->config['debug']['db-queries'] = true;


/**
* Allow or disallow creation of new user accounts.
*/
$ra->config['create_new_users'] = true;


/**
 * What type of urls should be used?
 * 
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$ra->config['url_type'] = 1;

/**
 * Set a base_url to use another than the default calculated
 */
$ra->config['base_url'] = null;

/**
 * Define session name
 */
$ra->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$ra->config['session_key']  = 'rama';

/**
* How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
*/
$ra->config['hashing_algorithm'] = 'sha1salt';

/**
 * Define server timezone
 */
$ra->config['timezone'] = 'Europe/Stockholm';

/**
 * Define internal character encoding
 */
$ra->config['character_encoding'] = 'UTF-8';

/**
 * Define language
 */
$ra->config['language'] = 'en';


/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example: 
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is 
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $ra->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$ra->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
);

/**
 * Settings for the theme.
 */
$ra->config['theme'] = array(
  // The name of the theme in the theme directory
  'name'    => 'core', 
);
