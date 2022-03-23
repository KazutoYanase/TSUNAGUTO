<?php
$pageid			= "lineup";
$title			= "和紅茶｜ラインナップ";
$description	= "お茶のラインナップ「和紅茶」のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="lineup__header fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__slider fade">
	<div class="slider">
		<div class="slider__item"><img src="./common/images/lineup_black_1.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_black_2.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_black_3.jpg"></div>
	</div>
</section>

<section class="lineup__data fade">
	<div class="lineup__data__inner">
		<h2 class="lineup__black"><span>和紅茶｜BLACK</span></h2>
		<div class="lineup__data__wrap">
			<div class="lineup__data__exp">
				<div class="lineup__data__txt">
					<p>「みなみさやか」という日本茶の茶葉で作られたフルーティーな香りと風味が特徴の紅茶です。発酵茶由来の中国茶のような花香は、この品種ならではの特徴です。無糖でも豊かな力強い風味で、ティータイムだけでなく食事にもよく合います。</p>
					<p class="tags"><span>食事と一緒に</span><span>おやつと一緒に</span></p>
					<p>
						内容量　2.0g×7包<br>
						金額　￥1,890（税込）
					</p>
				</div>
				<div class="lineup__data__btn pc"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165797519602&quantity=1" target="_blank">このお茶を注文する</a></div>
			</div>
			<div class="lineup__data__graph"><img src="./common/images/lineup_black_graph.svg"></div>
		</div>
		<div class="lineup__data__btn sp"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165797519602&quantity=1" target="_blank">このお茶を注文する</a></div>
	</div>
</section>

<section class="lineup__howto fade">
	<div class="lineup__howto__inner">
		<h2 class="lineup__howto__black"><div><span>和紅茶のおいしい飲み方</span></div></h2>
		<ul>
			<li>ティーバッグ1包にウォーターサーバーやケトルなどで熱湯200ccを注ぎ、3分ほど経ったらティーバッグを取り出して飲んでください。ティーバッグを入れたままにすると風味が変化しますので、お湯に長時間浸すのは避けてください。</li>
		</ul>
		<dl>
			<dt>MEMO</dt>
			<dd>和洋問わず食事中のお茶としてもお楽しみいただけます。まずは砂糖やミルクを加えずにお飲みください。</dd>
		</dl>
	</div>
</section>

<?php include('./parts_plan_forproduct.php'); //お茶の定期便でご注文 ?>

<section class="lineup__box fade">
	<div class="lineup__box__inner">
		<h2 class="lineup__singleorigin__ohter"><span>その他のシングルオリジンのお茶｜RELATED ITEMS</span></h2>
		<div class="lineup__list lineup__list__single">
			<ul>
				<li class="fade">
					<a href="./lineup_bancha.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_bancha.png" alt="三熟番茶"></div>
						<dl>
							<dt>三熟番茶</dt>
							<dd class="en">BANCHA</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"><span>低カフェイン</span></dd>
						</dl>
					</a>
				</li>
				<li class="fade">
					<a href="./lineup_kamairi.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_kamairi.png" alt="特選釜炒り煎茶"></div>
						<dl>
							<dt>特選釜炒り煎茶</dt>
							<dd class="en">KAMAIRI</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"></dd>
						</dl>
					</a>
				</li>
				<li class="fade">
					<a href="./lineup_oolong.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_oolong.png" alt="和烏龍茶"></div>
						<dl>
							<dt>和烏龍茶<span>-たかちほ-</span></dt>
							<dd class="en">OOLONG</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"><span>食事と一緒に</span></dd>
						</dl>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
			
<?php include('footer.php') ?>