<?php 
	App::uses('Component', 'Controller');
	App::uses('Xml', 'Utility');
	class UtilComponent extends Component {
		/**
		 * Xml::build($path) 是根据路径导入xml文档
		 * Xml::toArray($xml) 是将$xml转化为数组
		 * json_encode($xmlArray) 是将$xmlArray 数组转化为json形式的数据
		 * preg_replace 是将json形式的中文数据为unicode编码转化为utf-8
		 * @param unknown_type $path
		 * @return void|mixed
		 */
		public static function XMLToJson($path=null){
			if (empty($path) || !is_string($path)) {
				return;
			}
			$xml=Xml::build($path);
			
			$xmlArray= Xml::toArray($xml);
			
			$a= json_encode($xmlArray);
			
			$str=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $a);
			
			return $str;
		}
	}
?>