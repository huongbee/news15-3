<?php

function getMonth($month){
	//$month = "Tháng Một";
	switch ($month) {
		case 1:
			$month = 'Tháng Một'; break;
		case 2:
			$month = 'Tháng Hai'; break;
		case 3:
			$month = 'Tháng Ba'; break;
		case 4:
			$month = 'Tháng Tư'; break;
		case 5:
			$month = 'Tháng Năm'; break;
		case 6:
			$month = 'Tháng Sáu'; break;
		case 7:
			$month = 'Tháng Bảy'; break;
		case 8:
			$month = 'Tháng Tám'; break;
		case 9:
			$month = 'Tháng Chín'; break;
		case 10:
			$month = 'Tháng Mười'; break;
		case 11:
			$month = 'Tháng Mười Một'; break;
		default:
			$month = 'Tháng Mười Hai'; break;
	}
	return $month;
}

?>