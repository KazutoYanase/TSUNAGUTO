<?php
$pageid			= "ochart";
$title			= "お茶スタイル診断";
$description	= "お茶スタイル診断の結果ページです。あなたのライフスタイルにあなたにぴったりのお茶を知りましょう！";
?>

<?php require_once('function.php'); ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">

<head>
    <title>お茶スタイル診断結果｜TSUNAGUTO</title>
    <meta charset="UTF-8">
    <meta name="description" content="TSUNAGUTOの想いのページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <?php if($pageid == 'home'): ?>
    <meta property="og:type" content="website">
    <?php else: ?>
    <meta property="og:type" content="article">
    <?php endif; ?>

    <meta property="og:url" content="<?php echo h(getUrl()) ?>">
    <meta property="og:image" content="https://tsunaguto.jp/common/images/ogp-a4.jpg">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="お茶スタイル診断結果｜TSUNAGUTO">
    <meta property="og:description" content="TSUNAGUTOの想いのページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="お茶スタイル診断結果｜TSUNAGUTO">
    <meta name="twitter:description" content="TSUNAGUTOの想いのページです。日常にお茶がある楽しみを。ひとりひとりのライフスタイルに寄り添うティーブランド「TSUNAGUTO」の公式サイトです。国内の厳選されたシングルオリジン茶や、日々の健康を支える独自のブレンド茶など、あなたにぴったりの体験をお届けします。">
    <meta name="twitter:image" content="https://tsunaguto.jp/common/images/ogp-a4.jpg">
    <meta name="twitter:url" content="<?php echo h(getUrl()) ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" defer></script>
    <script src="./common/js/vendor/jquery.inview.min.js" defer></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>

    <link rel="stylesheet" href="./common/css/style.css?<?= time() ?>" type="text/css">
    <script src="./common/js/script.js?<?= time() ?>" defer></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71761145-3"></script>
        <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-71761145-3');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WQB44DP');</script>
        <!-- End Google Tag Manager -->

</head>

<body id="top">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB44DP"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

    <header class="header" id="header">
        <h1><a href="./"><img src="./common/images/logo.svg" alt="TSUNAGUTO"></a></h1>
        <div class="header__btn">
            <ul>
                <li><a href="https://tsunaguto.myshopify.com/cart" target="_blank"><img src="./common/images/btn_cart.svg" alt="SHOPPING CART"></a></li>
                <li><a href="https://lin.ee/twEzBiI" target="_blank"><img src="./common/images/btn_line.svg" alt="LINE@ LINEでお友達登録"></a></li>
            </ul>
        </div>
        <div class="header__btn__sp sp">
            <ul>
                <li><a href="https://tsunaguto.myshopify.com/cart" target="_blank"><img src="./common/images/btn_cart_sp.svg" alt="SHOPPING CART"></a></li>
                <li><a href="https://lin.ee/twEzBiI" target="_blank"><img src="./common/images/btn_line.svg" alt="LINE@ LINEでお友達登録"></a></li>
            </ul>
        </div>
    </header>

    <div class="menu">
        <div class="menu__inner">
            <a class="menu__trigger" href="javascript:void(0)">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="menu__txt">menu</div>
        </div>
    </div>

    <nav class="nav">
        <div class="nav__inner">
            <div class="nav__box">
                <div class="nav__item">
                    <div class="nav__item__logo"><a href="./"><img src="./common/images/logo.svg" alt="TSUNAGUTO"></a></div>
                    <div class="nav__item__sns pc">
                        <ul>
                            <li><a href="https://lin.ee/twEzBiI" target="_blank"><img src="./common/images/footer_btn_line.svg" alt="LINE"></a></li>
                            <li><a href="https://www.instagram.com/tsunaguto/" target="_blank"><img src="./common/images/footer_btn_instagram.svg" alt="Instagram"></a></li>
                            <li><a href="https://note.com/tsunaguto" target="_blank"><img src="./common/images/footer_btn_note.svg" alt="Note"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav__list">
                    <ul>
                        <li class="nav__story"><a href="./story.php">TSUNAGUTOの想い｜STORY</a></li>
                        <li class="nav__subscription"><a href="./subscription.php">お茶の定期便｜SUBSCRIPTION</a></li>
                        <li class="nav__ochart"><a href="./ochart.php">お茶スタイル診断｜OCHART</a></li>
                        <li class="nav__talk"><a href="https://note.com/tsunaguto" target="_blank">お茶をもっと楽しむ小話｜OCHA SHORT TALK</a></li>
                        <li class="nav__garelly"><a href="https://www.instagram.com/tsunaguto/" target="_blank">お茶ギャラリー｜OCHA GARELLY</a></li>
                    </ul>
                </div>
                <div class="nav__item__sns sp">
                    <ul>
                        <li><a href="https://lin.ee/twEzBiI" target="_blank"><img src="./common/images/footer_btn_line.svg" alt="LINE"></a></li>
                        <li><a href="https://www.instagram.com/tsunaguto/" target="_blank"><img src="./common/images/footer_btn_instagram.svg" alt="Instagram"></a></li>
                        <li><a href="https://note.com/tsunaguto" target="_blank"><img src="./common/images/footer_btn_note.svg" alt="Note"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="main ochart">


<!-- A-4 -->
    <section class="ochart__result_page" id="ochart__result__a4">
        <div class="ochart__ochart_rtbtn">
            <a href="./ochart.php">
                お茶スタイル診断をはじめる
            </a>
        </div>
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
        <div class="ochart__ochart_rtbtn">
            <a href="./ochart.php">
                お茶スタイル診断をはじめる
            </a>
        </div>
        
        
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
                                    <dd class="tag"><span>食事と一緒に</span><span>おやつと一緒に</span></dd>
                                </dl>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="ochart__ochart_rtbtn">
            <a href="./subscription.php">
                全ラインナップはこちら
            </a>
        </div>

    </section>


    <footer class="footer">
			<div class="footer__inner">
				<div class="footer__wrap">
					<div class="footer__box">
						<div class="footer__logo"><a href="./"><img src="./common/images/footer_logo.svg" alt="TSUNAGUTO"></a></div>
						<div class="footer__nav">
							<ul>
                                <li><a href="./faq.php">FAQ</a></li>
								<li><a href="https://tsunaguto.myshopify.com/pages/contact" target="_blank">お問い合わせ</a></li>
								<li><a href="https://tsunaguto.myshopify.com/pages/specified-commercial-transaction-act" target="_blank">特定商取引に関する法律に基づく表記</a></li>
								<li><a href="https://tsunaguto.myshopify.com/pages/privacy-policy">プライバシーポリシー</a></li>
							</ul>
						</div>
					</div>
					<div class="footer__btn">
						<ul>
							<li><a href="https://lin.ee/twEzBiI" target="_blank"><img src="./common/images/footer_btn_line.svg" alt="LINE"></a></li>
							<li><a href="https://www.instagram.com/tsunaguto/" target="_blank"><img src="./common/images/footer_btn_instagram.svg" alt="Instagram"></a></li>
							<li><a href="https://note.com/tsunaguto" target="_blank"><img src="./common/images/footer_btn_note.svg" alt="Note"></a></li>
						</ul>
					</div>
				</div>
				<div class="footer__copy">Copyright &copy; <a href="./">TSUNAGUTO</a> all rights reserved.</div>
				<div class="footer__topback"><a href="#top"><img src="./common/images/btn_topback.svg" alt="このページの先頭へ戻る"></a></div>
			</div>
		</footer>
		
		<div class="cover"></div>
		
	</body>
</html>