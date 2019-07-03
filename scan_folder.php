<?php
/*
Lista o conteúdo deu uma pasta e formata em HTML
1o. Parametro pasta
2o. Parametro formato HTM ou print_r
*/
if (!isset($argv[1])) {
	echo "Informe a pasta para exibir o conteudo\n";
} else {
	if (strlen($argv[1])<1) {
		echo "Informe a pasta para exibir o conteudo\n";
		die();
	}
	$arr_folder=scandir($argv[1]);
	$new_folder=array_diff($arr_folder, array(".", ".."));	
	if (isset($argv[2])) {
		foreach ($new_folder as $file) {
			echo "<img src='".$argv[1]."/".$file."'><br><br>\n";
		}
	} else {
	
		print_r($new_folder);
	}
}
