<?php



include_once('simple_html_dom.php');





            $target_url ='http://www.marinetraffic.com/en/ais/details/ports/Shanghai;
            $html = new simple_html_dom();
            $html->load_file($target_url);
            $crawlds[++$counts] = array();
 
            foreach ($html->find('div[class=bg-info] b a') as $post) {
                array_push($craws[$counts], strip_tags($post));
			}}


echo '<pre>';
var_dump($crawls);
echo '</pre>';




?>





