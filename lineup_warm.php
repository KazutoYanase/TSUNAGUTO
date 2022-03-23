<?php
$pageid			= "lineup";
$title			= "ヌクモリ茶｜ラインナップ";
$description	= "お茶のラインナップ「ヌクモリ茶」のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="lineup__header fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__slider fade">
	<div class="slider">
		<div class="slider__item"><img src="./common/images/lineup_warm_1.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_warm_2.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_warm_3.jpg"></div>
	</div>
</section>

<section class="lineup__data fade">
	<div class="lineup__data__inner">
		<h2 class="lineup__warm"><span>ヌクモリ茶｜WARM FEELING</span></h2>
		<div class="lineup__data__wrap">
			<div class="lineup__data__exp">
				<div class="lineup__data__txt">
					<p>三熟番茶の落ち着いた風味をベースとした、生姜が効いたフレーバーティーです。ブレンドされた数種のスパイスがさらなる温感効果を高めます。低カフェインのため、夕食後やおやすみ前にもお楽しみいただけます。</p>
					<p class="tags"><span>低カフェイン</span></p>
					<p>
						ブレンド内容：<br>
						三熟番茶／ルイボス／生姜／クロモジ／陳皮／シナモン／月桃
					</p>
					<p>
						内容量　2.8g×7包<br>
						金額　￥1,890（税込）
					</p>
				</div>
				<div class="lineup__data__btn pc"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165795520754&quantity=1" target="_blank">このお茶を注文する</a></div>
			</div>
			<div class="lineup__data__graph"><img src="./common/images/lineup_warm_graph.svg"></div>
		</div>
		<div class="lineup__data__btn sp"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165795520754&quantity=1" target="_blank">このお茶を注文する</a></div>
	</div>
</section>

<section class="lineup__howto fade">
	<div class="lineup__howto__inner">
		<h2 class="lineup__howto__warm"><div><span>ヌクモリ茶のおいしい飲み方</span></div></h2>
		<ul>
			<li>ティーバッグ1包にウォーターサーバーやケトルなどで熱湯200ccを注ぎ、3分ほど経ったらティーバッグを取り出して飲んでください。</li>
			<li>風味が変わりづらいお茶のため、お湯を足して2杯目もお楽しみいただけます。タンブラーや水筒に入れて飲むのもおすすめです。</li>
		</ul>
		<dl>
			<dt>MEMO</dt>
			<dd>おやつのお供としても相性がよいです。低カフェインなので時間帯を気にせずお飲みいただけます。</dd>
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
					<a href="./lineup_shiny.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_shiny.png" alt="ウツクシ茶"></div>
						<dl>
							<dt>ウツクシ茶<span>-和紅茶ブレンド-</span></dt>
							<dd class="en">SHINY SKIN</dd>
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
			</ul>
		</div>
	</div>
</section>
			
<?php include('footer.php') ?>