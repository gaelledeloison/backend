<?php
// template name : test

?>
ceci est mon nouveau template test.php
<?php
$pages = get_pages ();
echo '<p>LISTE</p>';
foreach ($pages as $page) {
	echo($page -> post_title . '<br>' )
}
echo 'DEBUG';
echo '<pre>';
print_r ($pages);
echo '</pre>'

