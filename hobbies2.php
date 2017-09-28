<ul>
<?php 

$hobbies = [
    'Hacking',
    'Drinking',
    'Streaking',
    'Doing nothing',
    'Sleeping',
    'LARPing',
    'Stalking',
];

foreach ($hobbies as &$value) {
?>
	<li>
<?php
    echo $value;
?>
	</li>
<?php 
}
?>
</ul>