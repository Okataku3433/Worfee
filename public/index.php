<?php
//define(定数名, 値 [, 大文字と小文字の区別]);
//str_replace( $検索文字列 , $置換後文字列 , $検索対象文字列 [, int &$count ] )
//mb_substr — 文字列の一部を得る
define('ROOT_PATH', str_replace('public', '', $_SERVER["DOCUMENT_ROOT"]));
$parse = parse_url($_SERVER["REQUEST_URI"]);
//ファイル名が省略されていた場合、index.phpを補填する
if(mb_substr($parse['path'], -1) === '/') {
    $parse['path'] .= $_SERVER["SCRIPT_NAME"];
}
require_once(ROOT_PATH.'Views'.$parse['path']);
?>