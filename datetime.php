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


// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)


// USING CARBON https://carbon.nesbot.com/docs/
use Carbon\Carbon;
printf("Right now is %s", Carbon::now()->toDateTimeString());
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver')); // automatically converted to string
$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();
