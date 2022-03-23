<?php require_once('function.php'); ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">
	<head>
		<title><?php if($pageid != 'home'): ?><?php echo h($title) ?>｜<?php endif; ?>TSUNAGUTO</title>
		<meta charset="UTF-8">
		<meta name="description" content="<?php echo h($description) ?>">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		
		<?php if($pageid == 'home'): ?>
		<meta property="og:type" content="website">
		<?php else: ?>
		<meta property="og:type" content="article">
		<?php endif; ?>

		<meta property="og:url" content="<?php echo h(getUrl()) ?>">
		<meta property="og:image" content="./common/images/ogp.jpg">
		<meta property="og:site_name" content="">
		<meta property="og:title" content="<?php if($pid != 'home'): ?><?php echo h($title) ?>｜<?php endif; ?>TSUNAGUTO">
		<meta property="og:description" content="<?php echo h($description) ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php if($pid != 'home'): ?><?php echo h($title) ?>｜<?php endif; ?>TSUNAGUTO">
		<meta name="twitter:description" content="<?php echo h($description) ?>">
		<meta name="twitter:image" content="./common/images/ogp.jpg">
		<meta name="twitter:url" content="<?php echo h(getUrl()) ?>">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" defer></script>
		<script src="./common/js/vendor/jquery.inview.min.js" defer></script>
		
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>

		<link rel="stylesheet" href="./common/css/style.css?<?= time() ?>" type="text/css">
		<link rel="stylesheet" href="./common/css/lp/style_sp.css?<?= time() ?>" type="text/css">
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

        <div id="lp_wrap">

          <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_01.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_02.jpg"></p>

	      <div class="btn01">
		    <img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_03.jpg">
		    <div class="btn"><a href="./chart.php"><img src="./common/images/lp01/sp/ue_botan.png"></a></div>
	      </div>
    
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_04.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_05.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_06.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_07.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_08.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_09.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_10.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_11.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_12_1.jpg"></p>

	      <div class="lp_slider">
            <div class="lp_slider__content"><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_12_2_1.jpg" class="lp_slider__img"></div>
            <div class="lp_slider__content"><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_12_2_2.jpg" class="lp_slider__img"></div>
            <div class="lp_slider__content"><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_12_2_3.jpg" class="lp_slider__img"></div>
          </div>

	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_12_3.jpg"></p>
    
          <div class="btn01">
		    <img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_03.jpg">
		    <div class="btn"><a href="./chart.php"><img src="./common/images/lp01/sp/ue_botan.png"></a></div>
	      </div>
    
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_13.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_14.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_15.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_16.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_17.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_18.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_19.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_20.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_21.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_22.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_23.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_24.jpg"></p>
	      <p><img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_25_1.jpg"></p>
    
          <div class="btn02">
		    <img src="./common/images/lp01/sp/tsunaguto_lp_1102_sp_ol1_25_2.jpg">
		  <div class="btn"><a href="./ochart.php"><img src="./common/images/lp01/sp/ue_botan.png"></a></div>
	    </div>
		
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
			</div>
		</footer>
		
		<div class="cover"></div>
		
	</body>
</html>