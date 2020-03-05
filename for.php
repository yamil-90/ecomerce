<?php

$in = [
	[
		'name' => 'Mauro',
		'level' => 40,
	],
	[
		'name' => 'Anial',
		'level' => 40,
	],
	[
		'name' => 'Yamil',
		'level' => 40,
	],
	[
		'name' => 'Grecia',
		'level' => 38,
	],
	[
		'name' => 'Gabriel',
		'level' => 34,
	]
];

foreach ($in as $key) {
	print_r ($key["name"]);
	echo PHP_EOL;
}

exit;

for ($i=0;$i<sizeof($in);$i++){
	echo $in[$i]["name"] . PHP_EOL;
}
