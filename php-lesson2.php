<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Числа Фибоначчи</title>
</head>
<body>
	<?php
		$x = rand(0, 100);
		echo 'Initial number: ' . $x . '<br>';
		$first = 1;
		$second = 1;
		while ($i = 1) {
			if ($first == $x) {
				echo 'Задуманное число входит в числовой ряд';
				break;
			} elseif ($x > $first) {
				$third = $first;
				$first = $first + $second;
				$second = $third;
			} elseif ($x < $first) {
				echo 'Задуманное число НЕ входит в числовой ряд';
				break;
			}
		};
	?>
</body>
</html>
