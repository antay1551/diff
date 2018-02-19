<?php

	$input_1 = file( "input_1.txt");
	$input_2 = file( "input_2.txt");

	print_r( $input_1 );
	print_r( $input_2 );
	

	$kol = 0;
	$str = '';
	if ( count( $input_2 ) > count( $input_1 ) ){
		$str = '+++';	
		$length = count( $input_2 );
	}else{
		$str = '---';
		$length = count( $input_1 );
	}
	
	for ( $i = 0; $i < $length; $i++ ){
		if ( $str == '+++' ){
		$res_1 = $input_1[ $kol ];
		$res_2 = $input_2[ $i ];
		}else {
			$res_1 = $input_1[ $i ];
			$res_2 = $input_2[ $kol ];
		}
		if ( trim ( $res_1 ) != trim ( $res_2 )  ){
			if ( $str == '+++' ){
			echo"$str $res_2\n";
			}else{
				echo"$str $res_1\n";
			}
		}else{
			echo"$res_1\n";
			$kol++;
		}
	}




	/*$kol = 0;
	for ( $i = 0; $i < count( $input_2 ); $i++ ){
		$res_1 = $input_1[ $kol ];
		$res_2 = $input_2[ $i ];
		if ( trim ( $res_1 ) != trim ( $res_2 )  ){
			echo"+++ $res_2\n";
		}else{
			echo"$res_1\n";
			$kol++;
		}
	}
	*/
?>