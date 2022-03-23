<?php
$pageid			= "subscription";
$title			= "お茶の定期便";
$description	= "お茶の定期便のページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。";
?>
<?php include('header.php') ?>

<section class="subscription__header fade">
	<h1><span>お茶の定期便｜SUBSCRIPTION</span></h1>
</section>

<?php include('parts_plan.php'); //プラン ?>

<?php include('parts_nakami.php'); //定期便のなかみ ?>

<section class="ochart fade">
	<div class="ochart__inner">
		<h2><span>お茶スタイル診断｜OCHART</span></h2>
		<div class="ochart__lead">あなたのライフスタイルや趣味から<br class="sp">ぴったりのお茶をご提案します。</div>
		<div class="ochart__btn"><a href="./ochart.php">お茶スタイル診断を始める</a><a href="https://lin.ee/twEzBiI" target="_blank">LINE登録でも診断できます</a></div>
	</div>
</section>

<?php include('parts_structure.php'); //お茶の定期便の仕組み ?>

<section class="lineup__header lineup__header__nomargin fade">
	<h1><span>お茶のラインナップ｜LINE UP</span></h1>
</section>

<section class="lineup__box fade">
	<div class="lineup__box__inner">
		<h2 class="lineup_singleorigin"><span>シングルオリジンのお茶｜Single Origin</span></h2>
		<div class="lineup__lead">
			一般的にお茶は安定した供給のため、さまざまな農家のお茶をブレンドして販売しています。シングルオリジンとは、ひとつの農場のひとつの銘柄の茶葉を使っているという意味合いで、産地のストーリーや生産者の顔を知ることができること、また農家ごと責任をもって味や安全性を追求し栽培していることが特徴です。
		</div>
		<div class="lineup__list">
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

<section class="lineup__box fade">
	<div class="lineup__box__inner">
		<h2 class="lineup_originalbrend"><span>健やかさと美しさのためのお茶｜Original Blend</span></h2>
		<div class="lineup__lead">
			お茶にはさまざまな美容・健康効果のある成分が含まれていると広く知られています。毎日の生活のなかで習慣的に取り入れることにより、おいしさや楽しさを感じながらも、美しく、健康的な生活をおくれるよう、さまざまなお悩みに焦点をあてたブレンドティーをご用意いたしました。
		</div>
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