<?php
//echo "iniciando processo...";
$STDIN = @fopen("arquivodeentrada.txt", "r");
if ($STDIN) {
	/*******************************************/
	while ($i = fgets($STDIN)){
		//recebe lista e separa numeros
		$linha = explode(" ",$i);
		//se nao for a primira linha
		if ( count($linha)>1 ) {
			//identifica os numeros A e B
			$A = trim($linha[0]);
			$B = trim($linha[1]);
			//identifica o menor numero (smaller)
			$smaller = $A;
			if ( $B<$A && $B>0 ) {
				$smaller = $B;
			}
			//inicia divisao dos numeros
			for ($j=$smaller; $j<=$smaller; $j--) {
				$divA = $A % $j;
				$divB = $B % $j;
				//verifica se os divisores sao iguais
				if ( $divA == $divB && $divA==0 ) {
					echo $j."<br>";
					break;
				}
			}
		}
	}
	/*******************************************/
	fclose($handle);
}
//echo "finalizando processo...";
?>
