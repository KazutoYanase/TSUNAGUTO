<?php
$pageid			= "lineup";
$title			= "特選釜炒り煎茶｜ラインナップ";
$description	= "お茶のラインナップ「特選釜炒り煎茶」のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="lineup__header fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__slider fade">
	<div class="slider">
		<div class="slider__item"><img src="./common/images/lineup_kamairi_1.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_kamairi_2.jpg"></div>
		<div class="slider__item"><img src="./common/images/lineup_kamairi_3.jpg"></div>
	</div>
</section>

<section class="lineup__data fade">
	<div class="lineup__data__inner">
		<h2 class="lineup__kamairi"><span>特選釜炒り煎茶｜KAMAIRI</span></h2>
		<div class="lineup__data__wrap">
			<div class="lineup__data__exp">
				<div class="lineup__data__txt">
					<p>九州発祥の釜炒り製法で作られた、宮﨑茶房さんを代表する煎茶です。中でも特選は、中級と比べまろやかさが増しています。２杯目以降も渋みが出づらく、煎茶は淹れるのが難しいと思っていた方にもおすすめです。</p>
					<p class="tags"></p>
					<p>
						内容量　2.0g×7包<br>
						金額　￥1,890（税込）
					</p>
				</div>
				<div class="lineup__data__btn pc"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165798895858&quantity=1" target="_blank">このお茶を注文する</a></div>
			</div>
			<div class="lineup__data__graph"><img src="./common/images/lineup_kamairi_graph.svg"></div>
		</div>
		<div class="lineup__data__btn sp"><a href="https://tsunaguto.myshopify.com/cart/add?id=42165798895858&quantity=1" target="_blank">このお茶を注文する</a></div>
	</div>
</section>

<section class="lineup__howto fade">
	<div class="lineup__howto__inner">
		<h2 class="lineup__howto__kamairi"><div><span>特選釜炒り煎茶のおいしい飲み方</span></div></h2>
		<ul>
			<li>ティーバッグ1包に、少しだけ冷ましたお湯（80度〜90度ほど）200ccを注ぐのがおすすめです。3〜4分ほど経ったらティーバッグを取り出し、小皿などの上によけておいてください。</li>
			<li>急須の中にティーバッグを入れたままにする場合は、お湯を足す度に全て注ぎ切り、急須の中にお湯を残さないようにしてください（茶葉が蒸れないよう蓋を開けておきましょう）。</li>
		</ul>
		<dl>
			<dt>MEMO</dt>
			<dd>深蒸し茶などの他の煎茶と比べ、お茶の色は薄く淡いのが特徴です。２杯目以降も渋みや苦味が出ないので、１杯目を注ぎ切ったあともまたお湯を足して飲んでいただけます。</dd>
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
					<a href="./lineup_black.php">
						<div class="lineup__list__img"><img src="./common/images/lineup_black.png" alt="和紅茶"></div>
						<dl>
							<dt>和紅茶<span>-みなみさやか-</span></dt>
							<dd class="en">BLACK</dd>
							<dd class="price">￥1,890（税込）</dd>
							<dd class="tag"><span>食事と一緒に</span><span>おやつと一緒に</span></dd>
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