<?php
$pageid			= "lineup";
$title			= "リセット茶｜ラインナップ";
$description	= "お茶のラインナップ「リセット茶」のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="lineup__header fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__slider fade">
	<div class="slider">
		<div class="slider__item"><img src="./common/images/lineup_reset_1.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_reset_2.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_reset_3.jpg"></div>
	</div>
</section>

<section class="lineup__data fade">
	<div class="lineup__data__inner">
		<h2 class="lineup__reset"><span>リセット茶｜RESET BODY</span></h2>
		<div class="lineup__data__wrap">
			<div class="lineup__data__exp">
				<div class="lineup__data__txt">
					<p>草原のような芳しい香りに、黒豆の香ばしさや豆の甘味が加わった、自然そのものを感じられるお茶です。珍しい百姓番茶ベースで日本茶としても飲みやすく、自然由来の素材が身体をクレンズしてくれるような感覚を得られます。</p>
					<p>
						ブレンド内容：<br>
						百姓番茶／黒豆／杜仲／どくだみ／ヨモギ
					</p>
					<p>
						内容量　2.65g×7包<br>
						金額　￥1,890（税込）
					</p>
				</div>
				<div class="lineup__data__btn pc"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165795651826&quantity=1" target="_blank">このお茶を注文する</a></div>
			</div>
			<div class="lineup__data__graph"><img src="./common/images/lineup_reset_graph.svg"></div>
		</div>
		<div class="lineup__data__btn sp"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165795651826&quantity=1" target="_blank">このお茶を注文する</a></div>
	</div>
</section>

<section class="lineup__howto fade">
	<div class="lineup__howto__inner">
		<h2 class="lineup__howto__reset"><div><span>リセット茶のおいしい飲み方</span></div></h2>
		<ul>
			<li>ティーバッグ1包にウォーターサーバーやケトルなどで熱湯200ccを注ぎ、3分ほど経ったらティーバッグを取り出して飲んでください。</li>
			<li>ティーバッグを入れたままにすると、風味が変化し渋みが強まります。なるべく時間をあけず、風味の良いうちにお早めにお飲みください。</li>
		</ul>
		<dl>
			<dt>MEMO</dt>
			<dd>お茶単体ではもちろん、和食や、塩気のあるお菓子ともよく合いますので、一緒に飲んでいただくのもおすすめです。</dd>
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