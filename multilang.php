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


		function render($dir) {
			if(file_exists($dir)) {
				$dir = file_get_contents($dir);
			}
			else {
				echo "<p style=\"color:red;\"><b>Multilang Error:</b> Cannot find file to render</p>"; die();
			}
			$occ = mb_substr_count($this->lang, "@");

			if (preg_match_all('/{{([^}]*)}/', $dir, $matches)) {
				        foreach($matches[1] as $i) {
				        	$page .= str_replace("{{{$i}}}", $this->say($i), $dir);
				        	
				        }
				      echo preg_replace("/{{([^}]*)}}/", "", $page);
				      //$page[$occ] to print last (fully translated version)
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
		        if($result[$this->code] < " ") {
		        	return "<p style=\"color:red;\"><b>Multilang Error:</b> No Translation Available</p>";
		        }
		        else {
		        return str_replace("\"", "", $result[$this->code]);
				}
			}
		}
	}
?>