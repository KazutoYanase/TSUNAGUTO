<?php
$pageid			= "ochart";
$title			= "お茶スタイル診断";
$description	= "お茶スタイル診断のページです。あなたののライフスタイルに合ったお茶がわかります。";
?>
<?php include('header.php') ?>

<script src="./common/js/ochart.js?<?= time() ?>" defer></script>

<section class="ochart__top fade" id="ochart__top">
	<div class="ochart__top__inner">
		<h1><span>TSUNAGUTOの想い｜STORY</span></h1>
		<div class="ochart__top__lead">あなたのライフスタイルや趣味から<br class="sp">ぴったりのお茶をご提案します。</div>
		<div class="ochart__top__btn"><a href="javascript:void(0)" id="ochart__start">お茶スタイル診断を始める</a></div>
		<div class="ochart__top__illust pc"><img src="./common/images/visual_illust.png"></div>
		<div class="ochart__top__illust sp"><img src="./common/images/visual_illust_sp.jpg"></div>
	</div>
</section>

<section class="ochart__q" id="ochart__q__1">
	<div class="ochart__q__flow">
		<ul>
			<li><img src="./common/images/ochart_q_1_active.svg" alt="Q1"></li>
			<li><img src="./common/images/ochart_q_2.svg" alt="Q2"></li>
			<li><img src="./common/images/ochart_q_3.svg" alt="Q3"></li>
			<li><img src="./common/images/ochart_q_4.svg" alt="Q4"></li>
			<li><img src="./common/images/ochart_q_5.svg" alt="Q5"></li>
		</ul>
	</div>
	<div class="ochart__q__title">Q1. 1日の中の楽しみは？</div>
	<div class="ochart__q__btn">
		<ul>
			<li><a href="javascript:void(0)" data-point="a1,b5">夜のTV</a></li>
			<li><a href="javascript:void(0)" data-point="a2,a3,a4">おやつ・お茶の時間</a></li>
			<li><a href="javascript:void(0)" data-point="b3">家族やペットと過ごす時間</a></li>
			<li><a href="javascript:void(0)" data-point="b5" class="s">InstagramやTwitterを<br>チェックする時間</a></li>
		</ul>
	</div>
	<div class="ochart__q__illust"><img src="./common/images/ochart_illust_q1.png"></div>
</section>

<section class="ochart__q" id="ochart__q__2">
	<div class="ochart__q__flow">
		<ul>
			<li><img src="./common/images/ochart_q_1.svg" alt="Q1"></li>
			<li><img src="./common/images/ochart_q_2_active.svg" alt="Q2"></li>
			<li><img src="./common/images/ochart_q_3.svg" alt="Q3"></li>
			<li><img src="./common/images/ochart_q_4.svg" alt="Q4"></li>
			<li><img src="./common/images/ochart_q_5.svg" alt="Q5"></li>
		</ul>
	</div>
	<div class="ochart__q__title">Q2. テレビで紹介していたあの店。<br>実際に行くのはどれ？</div>
	<div class="ochart__q__btn">
		<ul>
			<li><a href="javascript:void(0)" data-point="b1,b4">話題の中華料理店</a></li>
			<li><a href="javascript:void(0)" data-point="b1,b4">話題のスイーツビュッフェ</a></li>
			<li><a href="javascript:void(0)" data-point="b2,b3,a1,a2,a3,a4">話題の採れたて農園レストラン</a></li>
			<li><a href="javascript:void(0)" data-point="b2,b3">話題のエスニック料理専門店</a></li>
		</ul>
	</div>
	<div class="ochart__q__illust"><img src="./common/images/ochart_illust_q2.png"></div>
</section>

<section class="ochart__q" id="ochart__q__3">
	<div class="ochart__q__flow">
		<ul>
			<li><img src="./common/images/ochart_q_1.svg" alt="Q1"></li>
			<li><img src="./common/images/ochart_q_2.svg" alt="Q2"></li>
			<li><img src="./common/images/ochart_q_3_active.svg" alt="Q3"></li>
			<li><img src="./common/images/ochart_q_4.svg" alt="Q4"></li>
			<li><img src="./common/images/ochart_q_5.svg" alt="Q5"></li>
		</ul>
	</div>
	<div class="ochart__q__title">Q3. 日頃よく食べているお菓子はどれ？</div>
	<div class="ochart__q__btn">
		<ul>
			<li><a href="javascript:void(0)" data-point="a1,b2,b4,b5">わらび餅など和のスイーツ</a></li>
			<li><a href="javascript:void(0)" data-point="a3,b3">TVやSNSで話題のスイーツ</a></li>
			<li><a href="javascript:void(0)" data-point="a4,b1">フレンチフライ、スナック系</a></li>
			<li><a href="javascript:void(0)" data-point="a2">ナッツやドライフルーツ</a></li>
		</ul>
	</div>
	<div class="ochart__q__illust"><img src="./common/images/ochart_illust_q3.png"></div>
</section>

<section class="ochart__q" id="ochart__q__4">
	<div class="ochart__q__flow">
		<ul>
			<li><img src="./common/images/ochart_q_1.svg" alt="Q1"></li>
			<li><img src="./common/images/ochart_q_2.svg" alt="Q2"></li>
			<li><img src="./common/images/ochart_q_3.svg" alt="Q3"></li>
			<li><img src="./common/images/ochart_q_4_active.svg" alt="Q4"></li>
			<li><img src="./common/images/ochart_q_5.svg" alt="Q5"></li>
		</ul>
	</div>
	<div class="ochart__q__title">Q4. 友だちから誕生日プレゼントをもらったら<br>一番うれしいのはどれ？</div>
	<div class="ochart__q__btn">
		<ul>
			<li><a href="javascript:void(0)" data-point="a1,a2,a3,a4,b2">ポット型浄水器</a></li>
			<li><a href="javascript:void(0)" data-point="b2,b4">ムクミすっきり着圧ソックス</a></li>
			<li><a href="javascript:void(0)" data-point="b2,b5">有名温泉入力剤セット</a></li>
			<li><a href="javascript:void(0)" data-point="b1">フードプロセッサー</a></li>
		</ul>
	</div>
	<div class="ochart__q__illust"><img src="./common/images/ochart_illust_q4.png"></div>
</section>

<section class="ochart__q" id="ochart__q__5">
	<div class="ochart__q__flow">
		<ul>
			<li><img src="./common/images/ochart_q_1.svg" alt="Q1"></li>
			<li><img src="./common/images/ochart_q_2.svg" alt="Q2"></li>
			<li><img src="./common/images/ochart_q_3.svg" alt="Q3"></li>
			<li><img src="./common/images/ochart_q_4.svg" alt="Q4"></li>
			<li><img src="./common/images/ochart_q_5_active.svg" alt="Q5"></li>
		</ul>
	</div>
	<div class="ochart__q__title">Q5. お茶をよく飲むのはどんなシーン？</div>
	<div class="ochart__q__btn">
		<ul>
			<li><a href="javascript:void(0)" data-point="a2">一日のはじまり朝</a></li>
			<li><a href="javascript:void(0)" data-point="a3,b3">日中おやつと一緒に</a></li>
			<li><a href="javascript:void(0)" data-point="a4,b1">昼食や夕食と一緒に</a></li>
			<li><a href="javascript:void(0)" data-point="a1,b4,b5">食後にほっと一息</a></li>
		</ul>
	</div>
	<div class="ochart__q__illust"><img src="./common/images/ochart_illust_q5.png"></div>
</section>


<!-- A-1 -->
<section class="ochart__result" id="ochart__result__a1">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは番茶タイプ?!》</span></div>
	<div class="ochart__result__lead">
		誠実で穏やか、そして丁寧なものに惹かれる。<br>
		人からは真面目と評されることもあるあなた。<br>
		普段から身の回りも良いもので揃えたかったりもしますよね。<br>
		自分の納得いくモノやコト…そういうの諦めるの嫌ですもん。<br>
		そんなあなたには、毎日の「定番」になるような相棒をオススメします。<br>
		周りの目なんか関係ない。自分の好きなものは自分で決める！
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_bancha_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_bancha.png" alt="三熟番茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">三熟番茶</span></dd>
			</dl>
			<p>ほうじ茶に近い風味にコクと奥行きが加わったお茶です。TSUNAGUTOのラインナップの中では最もカフェインの少ないお茶で、夕食後やおやすみ前にもおすすめです。きな粉やお餅などの和菓子はもちろん、乳製品に合わせてもまろやかさを楽しめます。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_bancha_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_bancha.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《誠実で穏やか、そして丁寧なものに惹かれる【番茶タイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__a1.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
				<ul>
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- A-2 -->
<section class="ochart__result" id="ochart__result__a2">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは煎茶タイプ?!》</span></div>
	<div class="ochart__result__lead">
		楽しいことが好き！ワクワクするのが好き！<br>
		そして何より素敵なもの大好きなあなた。<br>
		感受性が豊かでセンスを褒められりもしますが、それもそのはず、<br>
		毎日の小さな素敵な瞬間を大切にしているからですね。<br>
		そんなあなたには、さらに「感性」を磨いてくれるような相棒をオススメします。<br>
		本当に良いものって心を動かしてくれますよね。
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_kamairi_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_kamairi.png" alt="特選釜炒り煎茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">特選釜炒り煎茶</span></dd>
			</dl>
			<p>九州発祥の釜炒り製法で作られた、宮﨑茶房さんを代表する煎茶です。中でも特選は、中級と比べまろやかさが増しています。２杯目以降も渋みが出づらく、煎茶は淹れるのが難しいと思っていた方にもおすすめです。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_bancha_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_kamairi.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《楽しいことが好き！ ワクワクするのが好き！【煎茶タイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__a2.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- A-3 -->
<section class="ochart__result" id="ochart__result__a3">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは和紅茶タイプ?!》</span></div>
	<div class="ochart__result__lead">
		誠実で穏やか、そして丁寧なものに惹かれる。<br>
		人からは真面目と評されることもあるあなた。<br>
		普段から身の回りも良いもので揃えたかったりもしますよね。<br>
		自分の納得いくモノやコト…そういうの諦めるの嫌ですもん。<br>
		そんなあなたには、毎日の「定番」になるような相棒をオススメします。<br>
		周りの目なんか関係ない。自分の好きなものは自分で決める！
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_bancha_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_black.png" alt="和紅茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">和紅茶</span><span class="s">-みなみさやか-</span></dd>
			</dl>
			<p>「みなみさやか」という日本茶の茶葉で作られたフルーティーな香りと風味が特徴の紅茶です。発酵茶由来の中国茶のような花香は、この品種ならではの特徴です。無糖でも豊かな力強い風味で、ティータイムだけでなく食事にもよく合います。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_black_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_black.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《友達や家族に優しくて、他愛もない 会話をしたりダラダラしたり。【和紅茶タイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__a3.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- A-4 -->
<section class="ochart__result" id="ochart__result__a4">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは和烏龍茶タイプ?!》</span></div>
	<div class="ochart__result__lead">
		気の知れた人たちとの時間は唯一無二！<br>
		気取らず遊びに行ったり美味しいものを食べに出掛けたりが好きなあなた。<br>
		変に力んだことよりありのままを楽しめるのが一番良いですよね。<br>
		困ったときや落ち込んだ時も、周りにあなたみたいな人がいると幸せです。<br>
		そんなあなたには、最高の「普通」を教えてくれる相棒をオススメします。<br>
		当たり前を肯定する。それに勝るものはありませんよ。
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_bancha_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_oolong.png" alt="和烏龍茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">和烏龍茶</span><span class="s">-たかちほ-</span></dd>
			</dl>
			<p>ほうじ茶に近い風味にコクと奥行きが加わったお茶です。TSUNAGUTOのラインナップの中では最もカフェインの少ないお茶で、夕食後やおやすみ前にもおすすめです。きな粉やお餅などの和菓子はもちろん、乳製品に合わせてもまろやかさを楽しめます。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_oolong_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_oolong.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《気の知れた人たちとの時間は 唯一無二！【和烏龍茶タイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__a4.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
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
				</ul>
			</div>
		</div>
	</section>
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- B-1 -->
<section class="ochart__result" id="ochart__result__b1">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは何でも欲張りタイプ?!》</span></div>
	<div class="ochart__result__lead">
		日々のどんな物事だって、妥協はできればあまりしたくないですよね。<br>
		周りにもよく目が行き届くからこそ自分にも欲張りな一面もあるあなた。<br>
		食事だって甘味だって美味しいものには目がない。別腹って言うしね。<br>
		実際のところ、我慢ばかりより自由でいるほうがかっこいいし。<br>
		そんなあなたには、つきまとう「罪悪感」を紛らわせてくれる相棒をオススメします。<br>
		小さなことに惑わされない、そんな姿勢を貫きましょう。
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_smart_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_smart.png" alt="ヒキシメ茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">ヒキシメ茶</span><span class="s">-烏龍茶ブレンド-</span></dd>
			</dl>
			<p>高級感のあるフルーティーな香りが特徴の、ゆず風味のフレーバー烏龍茶です。ダイエット向けのお茶は渋くても頑張って飲むもの、と思っていた方にこそオススメです。風味が優しいだけでなく、数種のスパイスが効果を後押しします。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_smart_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_smart.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《日々のどんな物事だって、妥協はできればあまりしたくない。【何でも欲張りタイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__b1.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
				<ul>
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- B-2 -->
<section class="ochart__result" id="ochart__result__b2">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは自然派ヘルシータイプ?!》</span></div>
	<div class="ochart__result__lead">
		人って思っている以上に人を見ているものだったりします。<br>
		持ち前の才覚で、それをわかっていて優しさに満ち溢れたあなた。<br>
		周囲へよく気が利く、そんなところをみんな信頼しているかも。<br>
		でも同時に、自分のこともないがしろにならないようしないとですね。<br>
		そんなあなたには、身体の「内面」から労ってくれる相棒をオススメします。<br>
		ストイックなのも適度が良いですよ！
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_reset_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_reset.png" alt="リセット茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">リセット茶</span><span class="s">-百姓番茶ブレンド-</span></dd>
			</dl>
			<p>草原のような芳しい香りに、黒豆の香ばしさや豆の甘味が加わった、自然そのものを感じられるお茶です。珍しい百姓番茶ベースで日本茶としても飲みやすく、自然由来の素材が身体をクレンズしてくれるような感覚を得られるお茶です。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_reset_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_reset.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《人って思っている以上に 人を見ているものだったりします。【自然派ヘルシータイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__b2.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- B-3 -->
<section class="ochart__result" id="ochart__result__b3">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは美を追求したいタイプ?!》</span></div>
	<div class="ochart__result__lead">
		日々の刺激ってやっぱり必要。たまには非日常な体験も必要。<br>
		そして綺麗なものや可愛いものにも敏感で目がないあなた。<br>
		できれば自分もそんな風に生活を彩って過ごしたいけど、<br>
		実際はものすごく頑張らないといけないから、なかなか現実的じゃないですね。<br>
		そんなあなたには、とっておきの「手軽」な近道になる相棒をオススメします。<br>
		実はそんなに無理しなくても、コツがあったりするもんです。
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_shiny_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_shiny.png" alt="ウツクシ茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">ウツクシ茶</span><span class="s">-和紅茶ブレンド-</span></dd>
			</dl>
			<p>ブレンドされた花びらが目にも楽しい、内面から輝くための紅茶です。発酵茶の「みなみさやか」の茶葉がベースとなっており、中国茶のような風味も楽しめます。フルーツのような甘酸っぱさやバラの風味も感じられ、多層的な味で飲み飽きません。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_shiny_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_shiny.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《日々の刺激ってやっぱり必要。たまには非日常な体験も必要。【美を追求したいタイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__b3.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- B-4 -->
<section class="ochart__result" id="ochart__result__b4">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは自由が必要なタイプ?!》</span></div>
	<div class="ochart__result__lead">
		自立した人、とかよく聞くけどそんな簡単になれないですよね。<br>
		でも、自覚が持てるかはわからないけど、実は器用で要領が良いあなた。<br>
		理想も現実もわかってるからこそ、仕事も遊びもそつなく楽しめるものです。<br>
		でも、そうなるにはそれなりの苦労があるからですもんね。<br>
		そんなあなたには、雑念からの「解放」を導いてくれる相棒をオススメします。<br>
		無理も我慢も禁物です、清々しく過ごしましょう！
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_refreshing_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_refreshing.png" alt="スッキリ茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">スッキリ茶</span><span class="s">-三熟番茶ブレンド-</span></dd>
			</dl>
			<p>お湯を注ぐ前も注いだ後もレモングラスが心地よく香り、後味に日本茶の優しさを感じられる和のハーブティーです。三熟番茶をベースに数種の果物の風味が合わさり、和風のフルーツティーのようにお楽しみいただけます。身体の内側をスッキリさせるお手伝いをしてくれます。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_refreshing_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_refreshing.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《自立した人、とかよく聞くけど そんな簡単になれないですよね。【自由が必要なタイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__b4.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<!-- B-5 -->
<section class="ochart__result" id="ochart__result__b5">
	<div class="ochart__result__title"><img src="./common/images/result_ttl.svg" alt="診断結果"></div>
	<div class="ochart__result__type"><span>《あなたは安心を重視するタイプ?!》</span></div>
	<div class="ochart__result__lead">
		自分の時間が大好き！まったり大好き！<br>
		誰にも邪魔されない神聖な領域を大切にしているあなた。<br>
		インドア派とか個性派とか言われたりもするけど…<br>
		本当は人知れず普段頑張っているからですね。<br>
		そんなあなたには、謂わば「安心」を与えてくれるような相棒をオススメします。<br>
		また明日への活力を焦らずじっくり蓄えましょう。
	</div>
	<div class="ochart__result__img"><img src="./common/images/lineup_warm_1.jpg"></div>
	<div class="ochart__result__wrap">
		<div class="ochart__result__photo"><img src="./common/images/lineup_warm.png" alt="ヌクモリ茶"></div>
		<div class="ochart__result__data">
			<dl>
				<dt>おすすめのお茶は</dt>
				<dd><span class="l">ヌクモリ茶</span><span class="s">-三熟番茶ブレンド-</span></dd>
			</dl>
			<p>三熟番茶の落ち着いた風味をベースとした、生姜が効いたフレーバーティーです。ブレンドされた数種のスパイスがさらなる温感効果を高めます。低カフェインのため、夕食後やおやすみ前にもお楽しみいただけます。</p>
			<div class="ochart__result__graph"><img src="./common/images/lineup_warm_graph.svg"></div>
		</div>
	</div>
	<div class="ochart__result__btn"><a href="./lineup_warm.php">このお茶の詳しい情報はこちら</a></div>
	<div class="ochart__twitter__btn">
		<a href="http://twitter.com/intent/tweet?text=私は《自分の時間が大好き！ まったり大好き！【安心を重視するタイプ】》?! 自分にぴったりのお茶が見つかる&url=https://tsunaguto.jp/ochart__result__b5.php&via=tsunaguto&related=tsunaguto&hashtags=お茶スタイル診断" rel="nofollow" target="_blank">
			<img src="./common/images/twitter.svg">診断結果をTwitterでシェアする
		</a>
	</div>
	<?php include('./parts_plan_ochart.php'); //プラン ?>
	<section class="lineup__box ochart__lineup fade">
		<div class="lineup__box__inner">
			<h2 class="lineup__singleorigin__ohter"><img src="./common/images/ochart_stit_other.svg" alt="その他のお茶"></h2>
			<div class="lineup__list lineup__list__single">
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
	<?php include('./parts_nakami.php'); //定期便のなかみ ?>
	<?php include('./parts_structure_ochart.php'); //お茶の定期便の仕組み ?>
</section>

<?php include('footer.php') ?>