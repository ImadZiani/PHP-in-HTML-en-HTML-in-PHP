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
    echo "<li> $value </li>";
}
?>
</ul>