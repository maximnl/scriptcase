$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;

// Simply:
$date = date('Y-m-d H:i:s');

// Or:
$date = date('Y/m/d H:i:s');

// This would return the date in the following formats respectively:
$date = '2012-03-06 17:33:07';
// Or
$date = '2012/03/06 17:33:07';

/** 
 * This time is based on the default server time zone.
 * If you want the date in a different time zone,
 * say if you come from Nairobi, Kenya like I do, you can set
 * the time zone to Nairobi as shown below.
 */

date_default_timezone_set('Africa/Nairobi');

// Then call the date functions
$date = date('Y-m-d H:i:s');
// Or
$date = date('Y/m/d H:i:s');

// date_default_timezone_set() function is however
// supported by PHP version 5.1.0 or above.
