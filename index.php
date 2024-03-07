function data_extenso($data=false){
	if ($data)	{
		$mes = date('m', strtotime($data));
	}else{
		$mes = date('m');
		$data = date('Y-m-d');
	}
	$meses = array(
			'01' => 'janeiro',
			'02' => 'fevereiro',
			'03' => 'março',
			'04' => 'abril',
			'05' => 'maio',
			'06' => 'junho',
			'07' => 'julho',
			'08' => 'agosto',
			'09' => 'setembro',
			'10' => 'outubro',
			'11' => 'novembro',
			'12' => 'dezembro'
	);
	return date('d', strtotime($data)) . ' de ' . $meses[$mes] . ' de ' . date('Y', strtotime($data));
}
