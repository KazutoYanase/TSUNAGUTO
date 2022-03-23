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
		
		<main class="main <?php echo h($pageid) ?>">