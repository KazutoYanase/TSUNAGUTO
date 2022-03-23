<?php
$pageid			= "lineup";
$title			= "ウツクシ茶｜ラインナップ";
$description	= "お茶のラインナップ「ウツクシ茶」のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="lineup__header fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__slider fade">
	<div class="slider">
		<div class="slider__item"><img src="./common/images/lineup_shiny_1.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_shiny_2.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_shiny_3.jpg"></div>
	</div>
</section>

<section class="lineup__data fade">
	<div class="lineup__data__inner">
		<h2 class="lineup__shiny"><span>ウツクシ茶｜SHINY SKIN</span></h2>
		<div class="lineup__data__wrap">
			<div class="lineup__data__exp">
				<div class="lineup__data__txt">
					<p>ブレンドされた花びらが目にも楽しい、内面から輝くための紅茶です。発酵茶の「みなみさやか」の茶葉がベースとなっており、中国茶のような風味も楽しめます。フルーツのような甘酸っぱさやバラの風味も感じられ、多層的な味で飲み飽きません。</p>
					<p>
						ブレンド内容：<br>
						みなみさやか紅茶／ブルーベリー／スギナ／ルイボス／茶花／バラ
					</p>
					<p>
						内容量　2.85g×7包<br>
						金額　￥1,890（税込）
					</p>
				</div>
				<div class="lineup__data__btn pc"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165794767090&quantity=1" target="_blank">このお茶を注文する</a></div>
			</div>
			<div class="lineup__data__graph"><img src="./common/images/lineup_shiny_graph.svg"></div>
		</div>
		<div class="lineup__data__btn sp"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165794767090&quantity=1" target="_blank">このお茶を注文する</a></div>
	</div>
</section>

<section class="lineup__howto fade">
	<div class="lineup__howto__inner">
		<h2 class="lineup__howto__shiny"><div><span>ウツクシ茶のおいしい飲み方</span></div></h2>
		<ul>
			<li>ティーバッグ1包にウォーターサーバーやケトルなどで熱湯200ccを注ぎ、3分ほど経ったらティーバッグを取り出して飲んでください。</li>
			<li>ティーバッグを入れたままにすると、風味が変化し渋みが強まります。お湯を足して2杯目もお楽しみいただけますが、なるべく時間をあけず、風味の良いうちにお早めにお飲みください。</li>
		</ul>
		<dl>
			<dt>MEMO</dt>
			<dd>フルーツなど甘酸っぱい食べ物と相性がいいです。花びらの入った茶葉やいい香りで気分を上げたいときにもどうぞ。</dd>
		</dl>
	</div>
</section>

<?php include('./parts_plan_forproduct.php'); //お茶の定期便でご注文 ?>

<section class="lineup__box fade">
	<div class="lineup__box__inner">
		<h2 class="lineup__originalbrend__ohter"><span>その他の健やかさと美しさのためのお茶｜RELATED ITEMS</span></h2>
		<div class="lineup__list">
			<ul>
				<li class="fade">
					<a href="./lineup_smart.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_smart.png" alt="ヒキシメ茶"></div>
						<dl>
							<dt>ヒキシメ茶<span>-和烏龍茶ブレンド-</span></dt>
							<dd class="en">SMART AND SLIM</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"></dd>
						</dl>
					</a>
				</li>
				<li class="fade">
					<a href="./lineup_reset.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_reset.png" alt="リセット茶"></div>
						<dl>
							<dt>リセット茶<span>-百姓番茶ブレンド-</span></dt>
							<dd class="en">RESET BODY</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"></dd>
						</dl>
					</a>
				</li>
				<li class="fade">
					<a href="./lineup_refreshing.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_refreshing.png" alt="スッキリ茶"></div>
						<dl>
							<dt>スッキリ茶<span>-三熟番茶ブレンド-</span></dt>
							<dd class="en">REFRESHING</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"><span>オススメ</span><span>低カフェイン</span></dd>
						</dl>
					</a>
				</li>
				<li class="fade">
					<a href="./lineup_warm.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_warm.png" alt="ヌクモリ茶"></div>
						<dl>
							<dt>ヌクモリ茶<span>-三熟番茶ブレンド-</span></dt>
							<dd class="en">WARM FEELING</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"><span>低カフェイン</span></dd>
						</dl>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
			
<?php include('footer.php') ?>