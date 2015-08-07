<?php

/**
 * A tools class that support multibyte string
 * @author wclssdn@github
 *
 */
class MbString {

	private static $encoding = 'utf8';

	/**
	 * Strip words from the end of a string
	 * @param string $str
	 * @param string|array $wordList
	 * @param string $encoding
	 * @return string
	 */
	public static function rtrim($str, $words, $encoding = null){
		!$encoding && $encoding = self::$encoding;
		
		$list = array();
		if (is_array($words)){
			$list = $words;
		}else{
			for($i = 0, $length = mb_strlen($words, $encoding); $i < $length; ++$i){
				$list[mb_substr($words, $i, 1, $encoding)] = true;
			}
		}
		
		$len = 0;
		do{
			$result = $len;
			foreach ($list as $word){
				if (isset($list[mb_substr($str, -1 - $len, 1, $encoding)])){
					++$len;
				}
			}
			if ($result == $len){
				break;
			}
		}while (true);
		
		return $len === 0 ? $str : mb_substr($str, 0, mb_strlen($str, $encoding) - $len, $encoding);
	}
}
