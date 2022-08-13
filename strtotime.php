<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>strtotime()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Pretvara engleske reči za vreme u sekunde koje predstavljaju vreme koje je proteklo od trenutka početka merenja Unix vremena (Januar 1. 1970. 00:00:00 GMT) do vremena navedenog engleskom rečju ili rečima.<br></p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>";
echo "strtotime('now') => " . strtotime('now') . '<br>';
echo "strtotime('January 1 1970 00:00:00 GMT') => " . strtotime('January 1 1970 00:00:00 GMT') . '<br>';
echo "strtotime('Fri, 13 Dec 1901 20:45:54') => " . strtotime('Fri, 13 Dec 1901 20:45:54') . '<br>';
echo "strtotime('29 August 1982') => " .strtotime('29 August 1982') . '<br>';
echo "strtotime('29-08-1982') => " . strtotime('29-08-1982') . ' - European time format (d-m-y)<br>';
echo "strtotime('29.08.1982') => " . strtotime('29.08.1982') . ' - European time format (d.m.y)<br>';
echo "strtotime('8/29/1982') => " . strtotime('8/29/1982') .' - US time format (m/d/y)<br>';
echo "<span style='background-color: lightcyan;'>date('m-d-Y', 399420000) => " . date('m-d-Y', 399420000) . '<br></span>';
echo "strtotime('yesterday') => " . strtotime('yesterday') . '<br>';
echo "strtotime('+1 week 2 days 4 hours 2 seconds') => " . strtotime('+1 week 2 days 4 hours 2 seconds') . '<br>';
echo "strtotime('+1 hour') => " . strtotime('+1 hour') . '<br>';
echo "strtotime('-12 hours') => " . strtotime('-12 hours') . '<br>';
echo "strtotime('last Monday') => " . strtotime('last Monday') . '<br>';
echo "strtotime('next Thursday') => " . strtotime('next Thursday') . '<br>';
echo "</pre>";

