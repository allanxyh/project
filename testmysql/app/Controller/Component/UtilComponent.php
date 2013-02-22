<?php 
	App::uses('Component', 'Controller');
	App::uses('Xml', 'Utility');
	class UtilComponent extends Component {
	public static function XMLToJson($path=null){
		if (empty($path) || !is_string($path)) {
			return;
		}
		$xml=Xml::build($path);
		$xmlArray= Xml::toArray($xml);
		//$a= json_encode($xmlArray);
		//$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $a);
		return $xmlArray;
	}
	}
?>