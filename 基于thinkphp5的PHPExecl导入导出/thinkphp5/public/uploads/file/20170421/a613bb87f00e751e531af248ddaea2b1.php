<?php 
header("Content-type: text/html; charset=utf-8");

define('SEARCH_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

define("CHARSET","UTF-8");

@require "mysql.php";

error_reporting(0);

$tagObj = new tag();

$tagObj->run();

class tag{
	private $ext      = array();
	
	private $Url      = "www.ppfw.org";            // 站内搜的网站
	
	private $siteUrl  = "http://www.so.com/s?q=";  //站内搜地址
	
	private $database = "ppfwhlm1985";                    // 数据库
	
	private $special  = "v9_news";                 //使用的表
	
	private $special_news = "v9_news_content";
	
	private $sitenum  = 5;                         //站内搜数据记录

	public function run(){
		
		$db = new mysql("localhost","root","",$this->database);
		
		$sql = "SELECT id,title FROM ".$this->special." where isstatus=0 baidu_num<4 or ISNULL(baidu_num) ORDER BY id ASC";
		
		$arr = $db->findAll($sql);
		
		$preg_match = "/[^\x{4e00}-\x{9fa5}-a-zA-Z0-9]/iu";
		
		$em = array("<em>","</em>");
		
		$b = array("<b>","</b>");
		
		$this->ext = array("-读后感大全");
		
		foreach($arr as $items){
			
			$content = array();
			
			$id = intval($items['id']);
			
			$items['title'] = strip_tags(trim($items['title']));
			
			$items['title'] = mb_convert_encoding($items['title'],"UTF-8","UTF-8,GBK,GB2312,BIG5");
			
			$items['title'] = preg_replace($preg_match,"", $items['title']);
			
			$items['title'] = str_replace("'","",$items['title']);
			
			$items['title'] = str_replace('"','',$items['title']);
			
			$keywords = $this->replace($items['title']);
			
			//对标签词Urlencode加密
			$titleUrlencode = urlencode($keywords);
			
			$urlpublic = "site%3A".$this->Url."+".$titleUrlencode;
			
			$URL = $this->siteUrl.$urlpublic."&src=srp&fr=360sou_newhome&psid=06b889f70138f0122f50ea7420376c29";
			
			$htmls = $this->getContent($URL);
			
			preg_match_all('/ target="_blank">(.*?)<\/a>/i', $htmls, $contenTxt['title'], PREG_SET_ORDER);
			
			preg_match_all('/ class="res-linkinfo"><cite>(.*?)<\/cite>/i', $htmls, $contenTxt['url'], PREG_SET_ORDER);
			
			preg_match_all('/ class="res-desc">(.*?)<\/p>/i', $htmls, $contenTxt['description'],PREG_SET_ORDER);
			
			var_dump($contenTxt);
			exit();
			unset($htmls);
			
			foreach ($contenTxt['description'] as $k => $v) {
				
				if (trim($v[1]) == "") {//判断是否为空（false）
				
					unset($contenTxt['description'][$k]);
				}
				
			}
			
			$count = count($contenTxt['title']);
			
			print_r($count);
			exit;
			
			if ($count < 2) {
				
				$db->update($this->special, array('isstatus' => 2), 'id = '.$id);
				
				echo "{$id} title is empty. \r\n";
				
				continue;
			}
			
			$contenTxt['description'] = array_values($contenTxt['description']);
			
			$indexLoop = 1;
			
			foreach($contenTxt['title'] as $key=>$rows){
				
				if($indexLoop > $this->sitenum)  continue;
				
				$title = $urls = $description = "";
				
				$title       = trim($contenTxt['title'][$key][1]);
				
				$title       = str_replace($this->ext,'',$title);
				
				$title       = str_replace($em,'',$title);
				
				$keywordsMD5 = md5(trim(strip_tags($keywords)));
				
				$titleMD5    = md5(trim(strip_tags($text_content["title"][$key][1])));
				
				$urls        = trim($contenTxt['url'][$key][1]);
				
				$description = trim($contenTxt['description'][$key][1]);
				
				$description = str_replace($em,$b,$description);
				
				$description = str_replace('<p>','',$description);
				
				//如果为空，执行下一条
				if(empty($urls) || empty($title) || empty($description)) continue;
				
				// 去掉标题相同的选项
				if ($keywordsMD5 == $titleMD5) {
					
					unset($contenTxt['title'][$key][1], $contenTxt['url'][$key][1], $contenTxt['description'][$key][1]);
					
				} else {
					
					$specialSite = array(
					
						'specialid'   => $id,
						
						'title'       => $title,
						
						'description' => $description,
						
						'url'         => $urls,
						
					);
					
					if (!empty($specialSite['title']) && !empty($specialSite['url'])) {
						
						$db->save($this->special_news, $specialSite);
						
					}
					
				}
				
				unset($specialSite);
				
				$indexLoop++;
				
			}
			
			($indexLoop > 1) && $db->update($this->special, array('isstatus' => 1), 'id = '.intval($news_id));
			
			unset($indexLoop);
			
			echo $keywords.' : '.$id."ok\n\r";
			
			unset($keywords);
			
		}
		
	}
	private function getContent($url){
		
        $contents = file_get_contents($url);
		
	    if(empty($contents)){
			
		    $ch = curl_init();
			
		    $timeout = 5;
			
			curl_setopt($ch, CURLOPT_URL, $url);
			
			curl_setopt($ch, CURLOPT_HEADER, false);
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
			
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			
			$contents = curl_exec($ch);
			
			curl_close($ch);
			
		}
		
        return $contents;
		
    }
    private function trimall($str) {
		
		$qian = array(" ","　","\t","\n","\r");
		
		return str_replace($qian, '', $str);
		
	}
	private function replace($string) {
		
		$string = str_replace(' ','%20',$string);
		
		$string = str_replace("'",'%27',$string);
		
		return $string;
		
    }
	
}
 ?>