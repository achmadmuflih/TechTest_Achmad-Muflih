<?php 


for ($i = 1; $i <= 50; $i++) {
	if ($i % 3) {
		echo "Foo<br>";
	} elseif ($i % 5) {
		echo "Bar<br>";
	} elseif ($i % 5 & 3) {
		echo "FooBar<br>";
	}
}


?>