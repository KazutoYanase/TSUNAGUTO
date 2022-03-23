<?php

require dirname(__FILE__) . '/common/module/Feed.php';
$feed = new Feed;
$url = 'https://note.com/tsunaguto/rss';
$rss = $feed->loadRss($url);
$num = 3;
$i = 0;

print_r($rss);

foreach ($rss->item as $item) :
	if($i >= $num):
	
	else :
	
		$title = $item->title;
		$link = $item->link;
		$date = date("Y.m.d", strtotime($item->pubDate));
		$thumbnail = $item->children('media',true)->thumbnail;
		
		echo $thumbnail;
		
		$i++;
	endif;
endforeach;

/*
$invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
$feed = preg_replace($invalid_characters, '', $feed);
$rss = simplexml_load_string($feed);
*/

//print_r($rss);

/*
foreach($rss->channel->item as $item) :
	print_r($item);

	$title = $item->title;
	$date = date("Y.m.d", strtotime($item->pubDate));
	$link = $item->link;

	//$media = strip_tags($item->media:thumbnail);
	//echo $media;
endforeach;
*/

/*

// XML解析を行う上で、XMLで不正文字と扱われる対象を空文字に変換します


// 文字列をXMLとして解析して、SimpleXMLElementクラスのインスタンスに変換


// １つのアイテム（更新単位）毎に情報を出力します
echo('----------------------------------------'.PHP_EOL);

// $rss->channel->itemではまず、
// xmlタグの1階層下にあるchannelタグにアクセスし、
// 最終的にはそのchannelタグの1階層下にある複数のitemタグにアクセスしています
// 複数のitemタグは配列扱いとなっているため、foreachでループさせる事が可能です


    // itemタグの1階層下にあるtitleタグを取得します
        $title = $item->title;

    // itemタグの1階層下にあるpubDateタグを取得し、年月日に変換します
        $date = date(""Y年 n月 j日"", strtotime($item->pubDate));

    // itemタグの1階層下にあるlinkタグを取得します
        $link = $item->link;

    // itemタグの1階層下にあるdescriptionタグを取得し、HTMLタグだけを削除します
        $description = strip_tags($item->description);

    // それぞれの情報を出力します
    echo($title.PHP_EOL);       // タイトル
    echo($date.PHP_EOL);        // 更新日
    echo($link.PHP_EOL);        // リンク
    echo($description.PHP_EOL); // 概要
    echo('----------------------------------------'.PHP_EOL);
}
*/
?>