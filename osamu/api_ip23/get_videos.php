<?php
require_once 'config.php';
$c = 13;
$o = 0;
if (isset($_GET['count'])) $c = intval($_GET['count']);
if ($c > 13) $c = 13;
if (isset($_GET['offset'])) $o = intval($_GET['offset']);

$sql = sprintf('SELECT `id`, `name`, `description`, `producer`, `year`, `link` FROM `videos` LIMIT %d OFFSET %d', $c, $o);
$videos = $conn->query($sql);

$result = '{"videos": [';
foreach ($videos as $row){
$id = $row['id'];
$name = $row['name'];
$de = $row['description'];
$di = $row['producer'];
$year = $row['year'];
$link = $row['link'];

$result .= sprintf('{"id": %d, "title": "%s", "description": "%s", "producer":"%s", "year":"%d", "link": "%s"},', $id, $name, $de, $di, $year, $link);
}
$result = rtrim($result, ',');
$result .= ']}';
echo $result;
?>