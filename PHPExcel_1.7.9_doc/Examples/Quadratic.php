<?php

/**	Error reporting		**/
error_reporting(E_ALL);

/**	Include path		**/
set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');

/**	If the user has submitted the form, then we need to execute a calculation **/
if (isset($_POST['submit'])) {
	if ($_POST['A'] == 0) {
		echo 'The equation is not quadratic';
	} else {
		/**	So we include PHPExcel to perform the calculations	**/
		include 'PHPExcel/IOFactory.php';

		/**	Load the quadratic equation solver worksheet into memory			**/
		$objPHPExcel = PHPExcel_IOFactory::load('./Quadratic.xlsx');

		/**	Set our A, B and C values			**/
		$objPHPExcel->getActiveSheet()->setCellValue('A1', $_POST['A']);
		$objPHPExcel->getActiveSheet()->setCellValue('B1', $_POST['B']);
		$objPHPExcel->getActiveSheet()->setCellValue('C1', $_POST['C']);


		/**	Calculate and Display the results			**/
		echo '<hr /><b>Roots:</b><br />';

		$callStartTime = microtime(true);
		echo $objPHPExcel->getActiveSheet()->getCell('B5')->getCalculatedValue().'<br />';
		echo $objPHPExcel->getActiveSheet()->getCell('B6')->getCalculatedValue().'<br />';
		$callEndTime = microtime(true);
		$callTime = $callEndTime - $callStartTime;

		echo '<hr />Call time for Quadratic Equation Solution was '.sprintf('%.4f',$callTime).' seconds<br /><hr />';
		echo ' Peak memory usage: '.(memory_get_peak_usage(true) / 1024 / 1024).' MB<br />';
	}
}

?>

