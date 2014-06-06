<?php
	class multilang {

		function __construct($lang) {
			$lang_file = "translate.lang";
			if(file_exists($lang_file)) {
				$this->lang = file_get_contents($lang_file);
				$this->code = $lang;
			}
			else {
				echo "<p style=\"color:red;\"><b>Multilang Error:</b> Cannot find language file.</p>"; die();
			}
		}

		function say($id) {
		$start  = strpos($this->lang, '@'.$id);
		$end    = strpos($this->lang, '}', $start + 1);
		$length = $end - $start;
		$focus = substr($this->lang, $start + 1, $length - 1);
		$result = array();
		if(preg_match_all('/\s*([-\w]+)\s*:?\s*(.*?)\s*;/m', $focus, $m)) {
		        for($i=0;$i<count($m[1]);$i++) {
		                $result[$m[1][$i]] = $m[2][$i];
		        }
		        return str_replace("\"", "", $result[$this->code]);
			}
		}
	}
?>