<?php

foreach (glob('./images/*') as $filename) {
	echo '
	<img src="' . $filename . '"> <br>
	';
}