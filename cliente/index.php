<?php
	session_start();
	$session_key = 'cliente';
	if(!isset($_SESSION[$session_key])) {
		header('Location: login.php');
		exit;
	}
	$_base = '/mobileprovider/cliente';
	$_url = function($url) use ($_base) {
		return "$_base/$url";
	};
?><!doctype html>
<html class="w-content-footer">
	<head>
		<meta charset="utf-8">
		<base href="<?=$_url('');?>" target="_self">
		<title>Mobile Provider - Painel do Cliente</title>
		
		<!-- Mobile Specific Settings -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts: Lato -->
		<!--link rel="stylesheet" type="font/woff" href="http://fonts.googleapis.com/css?family=Lato:400,700"-->
		
		<!-- Icon Fonts: Entypo -->
		<!--<link rel="stylesheet" href="resources/css/icons.css">-->
		
		<!-- CSS Styles -->
		<link rel="stylesheet" href="<?=$_url('resources/css/normalize.css');?>">
		<?php /*<link rel="stylesheet" href="<?=$_url('resources/css/skin-gold.css');?>">*/ ?>
		<noscript>&lt;link rel="stylesheet" href="<?=$_url('resources/css/no-js.css');?>"&gt;</noscript>
		<link rel="stylesheet" href="<?=$_url('resources/css/style-switcher.css');?>">
		<link rel="stylesheet" href="<?=$_url('resources/css/skin-silver.css');?>">
		
		<link rel="stylesheet" href="<?=$_url('resources/css/base.css');?>">
		
		<!--
		<script type="text/javascript" src="http://cdn.syndication.twimg.com/widgets/timelines/355933225069187074?&amp;lang=en&amp;callback=twitterFetcher.callback&amp;suppress_response_codes=true&amp;rnd=0.28247220744378865"></script>
		-->
	</head>
	
	
	<body style="" data-page-transition="scroll-vertical">
		<?php /*<page-loading></page-loading>*/ ?>
		<div id="wrapper">
			<?php /*
			<nav id="sidenav">
				<ul>
					<li class="active"><a href="index.html"><i class="icon-home"></i> Home<span class="helper1"></span><span class="helper2"></span></a></li>
					<li class=""><a href="about-me.html"><i class="icon-user"></i> About Me</span></a></li>
					<li class=""><a href="resume.html"><i class="icon-feather"></i> Resume</span></a></li>
					<li><a href="portfolio.html"><i class="icon-picture"></i> Portfolio</span></a></li>
					<li><a href="contact.html"><i class="icon-mail"></i> Contact</span></a></li>
					<li><a href="extras.html"><i class="icon-tools"></i> Extras</span></a></li>
				</ul>
			</nav>
			*/ ?>
	
			<header id="header" class="visible" style="margin-top: 0px;">
				<h1><a href="<?=$_url('/');?>">Mobile Provider</a></h1>
				<h2>Painel do cliente</h2>
			</header>
		
			<div id="container" class="visible">
			
				<nav id="mainnav" role="navigation">
					<ul data-ng-controller="mpTopmenuCtrl">
						<li data-ng-repeat="menu in menus" ng-class="getClass(menu)">
							<a data-ng-click="open(menu)">
								<i class="icon-{{menu.icon}}"></i>
								{{menu.label}}
								<span class="helper1"></span><span class="helper2">
							</a>
						</li>
						
						<?php /*
						<li class="active"><a href="#" data-ng-href="#"><i class="icon-home"></i> Início<span class="helper1"></span><span class="helper2"></span></a></li>
						<li><a href="#" data-ng-href="#/aplicativos"><i class="icon-feather"></i> Aplicativos<span class="helper1"></span><span class="helper2"></span></a></li>
						<li><a href="logout.php"><i class="icon-logout"></i> Sair</a></li>
						<!--
						<li><a href="about-me.html"><i class="icon-user"></i> Sobre <span class="helper1"></span><span class="helper2"></span></a></li>
						<li><a href="portfolio.html"><i class="icon-picture"></i> Portfolio<span class="helper1"></span><span class="helper2"></span></a></li>
						<li><a href="contact.html"><i class="icon-mail"></i> Contact<span class="helper1"></span><span class="helper2"></span></a></li>
						<li><a href="extras.html"><i class="icon-tools"></i> Extras<span class="helper1"></span><span class="helper2"></span></a></li>
						-->
						*/ ?>
					</ul>
					<a id="sidenav-trigger" href="#sidenav" style="display: none;">
						<span class="helper1"></span><span class="helper2"></span>
					</a>
					<h1 id="mobile-nav-header" style="display: none;">Mobile Provider</h1>
					<div id="fullscreen-trigger" class=""></div>
				</nav>
			
				<div id="page-content-wrapper" style="min-height: 627px;">
					<div class="page-content" data-menu-item="0" data-title="Mobile Provider" data-active="1">
						<?php /*
						<div class="ribbon available" style="display: block;">
							<span>
								<a href="contact.html">I’m available</a>
							</span>
						</div>
						*/ ?>
						
						<div class="main-content" style="">
							
							<div data-ng-view></div>
							
							<?php /*
							<div class="welcome-block visible">
								<h1 class="section-heading larger">Hello and welcome!<span class="helper"></span></h1>
								<div class="welcome">
									<figure class="photo-small"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/profile.jpg" alt="Jonathan Orange"><span class="helper"></span></figure>
									<p>My name is <strong>Jonathan</strong> and I’m an <strong>user interface designer</strong> <span class="amp">&amp;</span> <strong>developer</strong> based in San Francisco.<br> Wel… actually, I’m your imaginary friend and volunteer for this beautiful vCard template.</p>
								</div>
							</div>
				
							<div class="shortcuts">
								<div class="row">
									<div class="span6 item-1 visible">
										<a href="about-me.html">
											<h2>Learn more about me</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean pharetra feugiat ipsum vitae.</p>
											<span class="ico"><i class="icon-user"></i></span>
										</a>
									</div>
									<div class="span6 item-2 visible">
										<a href="resume.html">
											<h2>View my resume</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean pharetra feugiat ipsum vitae.</p>
											<span class="ico"><i class="icon-feather"></i></span>
										</a>
									</div>
								</div>
								<div class="row">
									<div class="span6 item-3 visible">
										<a href="portfolio.html">
											<h2>Check out my work</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean pharetra feugiat ipsum vitae.</p>
											<span class="ico"><i class="icon-picture"></i></span>
										</a>
									</div>
									<div class="span6 item-4 visible">
										<a href="contact.html">
											<h2>Hire me for your next project</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean pharetra feugiat ipsum vitae.</p>
											<span class="ico"><i class="icon-mail"></i></span>
										</a>
									</div>
								</div>
							</div>
				
							<div class="social-media-block">
								<h2 class="section-heading visible">Connect with me<span class="helper"></span></h2>
								<ul class="social-media">
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-twitter"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-facebook"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-gplus"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-dribbble"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-behance"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-linkedin"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-lastfm"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-pinterest"></i></a></li>
									<li><a class="tooltip visible" title="meu twitter k" href="#"><i class="icon-vimeo"></i></a></li>
								</ul>
							</div>
							*/ ?>
						</div>
						<div class="content-footer">
							<div class="wrapper">
								<div id="twitter-box">
									<h2><a href="http://twitter.com/envato">Thoughts from my Twitter</a></h2>
									<div id="twitter-feed"><div class="items" style="height: 20px;"><p class=""><span class="text">Video Stock Footage: Why It's a Must For Every Creative in 2013 <a href="http://t.co/dEHBgr78ql" data-expanded-url="http://enva.to/1aOMUNi" target="_blank" title="http://enva.to/1aOMUNi"><span>http://</span><span>enva.to/1aOMUNi</span><span></span><span><span>&nbsp;</span></span></a></span><span class="date">3 hours ago</span></p><p class=""><span class="text"><a href="https://twitter.com/kmwalsh">@kmwalsh</a> As Support didn't find any new account created on the email address you provided, but one on the same name (older one) ^TC</span><span class="date">6 hours ago</span></p><p class="active"><span class="text"><a href="https://twitter.com/kmwalsh">@kmwalsh</a> Can it be that you've already created an account with us in 2011 from a different address? ^TC</span><span class="date">6 hours ago</span></p></div><div class="pager"><div><span class="">1</span><span class="">2</span><span class="active">3</span></div></div></div>
								</div>
							</div>
						</div>
					</div>
					<div class="page-content hidden" data-menu-item="1" data-title="About Me">
						<div class="main-content" style="">
							<h1 class="section-heading larger">A bit about me<span class="helper"></span></h1>
				
							<div class="row section">
								<div class="span4">
									<figure class="photo"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/profile.jpg" alt="Jonathan Orange"><span class="helper"></span></figure>
								</div>
								<div class="span4">
									<p><b>The Earth is a very small stage in a vast</b> cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in <a href="#">glory and triumph</a>, they could become the momentary masters of a fraction of a dot.</p>
									<p>Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants.</p>
								</div>
								<div class="span4">
									<p>I could easily see the shores of continents, islands, great rivers, folds of the terrain, large bodies of water. The horizon is dark blue, smoothly turning to black… the feelings which filled me I can express with one word – joy.</p>
									<blockquote class="plain">
										<p>I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in eternity.</p>
									</blockquote>
								</div>
							</div>
				
							<div class="slider">
							
								<div class="items" style="position: relative; height: 356px;"><div class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; visibility: hidden; display: block;">
							
										<div class="row" style="visibility: hidden;">
											<div class="span4" style="visibility: hidden;">
												<div class="box-light box-details" style="visibility: hidden;">
													<h2 style="visibility: hidden;">Personal Details</h2>
													<dl class="details" style="visibility: hidden;">
														<dt style="visibility: hidden;">Name:</dt>
														<dd style="visibility: hidden;">Jonathan Doe</dd>
														<dt style="visibility: hidden;">Date of birth:</dt>
														<dd style="visibility: hidden;">January 15, 1980</dd>
														<dt style="visibility: hidden;">Nationality:</dt>
														<dd style="visibility: hidden;">American</dd>
														<dt style="visibility: hidden;">Eye color:</dt>
														<dd style="visibility: hidden;">Brown</dd>
													</dl>
												</div>
											</div>
											<div class="span4" style="visibility: hidden;">
												<h2 class="section-heading" style="visibility: hidden;">Interests<span class="helper" style="visibility: hidden;"></span></h2>
												<p style="visibility: hidden;">There are many things I enjoy doing other than crafting amazing websites.<br style="visibility: hidden;"> I like running, swimming, watching movies and reading fantasy. I also like:</p>
												<ul style="visibility: hidden;">
													<li style="visibility: hidden;">Staring at the <strong style="visibility: hidden;">sun</strong></li>
													<li style="visibility: hidden;">Painting unicorns and <strong style="visibility: hidden;">rainbows</strong></li>
													<li style="visibility: hidden;">Watching <strong style="visibility: hidden;">cats</strong></li>
												</ul>
											</div>
											<div class="span4" style="visibility: hidden;">
												<h2 class="section-heading" style="visibility: hidden;">Tools of the trade<span class="helper" style="visibility: hidden;"></span></h2>
												<p style="visibility: hidden;">I can’t go anywhere without my tools. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam <a href="#" style="visibility: hidden;">tincidunt</a>.</p>
												<ul class="tick" style="visibility: hidden;">
													<li style="visibility: hidden;">Adobe <strong style="visibility: hidden;">Photoshop</strong></li>
													<li style="visibility: hidden;">Adobe <strong style="visibility: hidden;">Illustrator</strong></li>
													<li style="visibility: hidden;">Panic’s <strong style="visibility: hidden;">Coda</strong></li>
												</ul>
												<p class="right" style="visibility: hidden;"><a class="button small next-slide" href="#" style="visibility: hidden;">My services <i class="icon-right-open right" style="visibility: hidden;"></i></a></p>
											</div>
										</div>
										
									</div>
								
									
									
									
									
									
									
								<div class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1;">
							
										<div class="row">
											<div class="span4">
												<div class="box-light box-details">
													<h2>Personal Details</h2>
													<dl class="details">
														<dt>Name:</dt>
														<dd>Jonathan Doe</dd>
														<dt>Date of birth:</dt>
														<dd>January 15, 1980</dd>
														<dt>Nationality:</dt>
														<dd>American</dd>
														<dt>Eye color:</dt>
														<dd>Brown</dd>
													</dl>
												</div>
											</div>
											<div class="span4">
												<h2 class="section-heading">Interests<span class="helper"></span></h2>
												<p>There are many things I enjoy doing other than crafting amazing websites.<br> I like running, swimming, watching movies and reading fantasy. I also like:</p>
												<ul>
													<li>Staring at the <strong>sun</strong></li>
													<li>Painting unicorns and <strong>rainbows</strong></li>
													<li>Watching <strong>cats</strong></li>
												</ul>
											</div>
											<div class="span4">
												<h2 class="section-heading">Tools of the trade<span class="helper"></span></h2>
												<p>I can’t go anywhere without my tools. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim aliquam <a href="#">tincidunt</a>.</p>
												<ul class="tick">
													<li>Adobe <strong>Photoshop</strong></li>
													<li>Adobe <strong>Illustrator</strong></li>
													<li>Panic’s <strong>Coda</strong></li>
												</ul>
												<p class="right"><a class="button small next-slide" href="#">My services <i class="icon-right-open right"></i></a></p>
											</div>
										</div>
										
									</div><div class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; display: none;">	
										
										<h2 class="section-heading">My services: I’m pretty good at…<span class="helper"></span></h2>
												
										<div class="tabs-wrapper"><ul class="tabs-vertical">
											<li class="active"><a href="#"><i class="icon-eye"></i> User Interface Design</a></li>
											<li><a href="#"><i class="icon-code"></i> Front-End Development</a></li>
											<li><a href="#"><i class="icon-globe"></i> CMS Integration</a></li>
											<li><a href="#"><i class="icon-mobile"></i> Mobile App Development</a></li>
											<li><a href="#"><i class="icon-rocket"></i> UX Consulting</a></li>
										</ul><div class="panes">
											<div style="display: block;">
												<h3>Quisque eget sapien ligula.</h3>
												<p>Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light.<br> Our planet is a lonely speck in the great enveloping cosmic dark.</p>
												<h3>Look again at the dot.</h3>
												<ol>
													<li>On it everyone you love</li>
													<li>Everyone you know</li>
													<li>Everyone you ever heard of</li>
												</ol>
											</div>
											<div>
												<div class="accordion">
													<h2 class="active">First section<i></i></h2>
													<div style="display: block;">
														<p><b>Lorem ipsum dolor sit amet</b>, consectetur adipiscing elit. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Quisque eget sapien ligula.</p>
													</div>
													<h2>Second section<i></i></h2>
													<div>
														<p>Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat.</p>
														<p>Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
													</div>
													<h2>Third section<i></i></h2>
													<div>
														<p>Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui.</p>
													</div>
												</div>
											</div>
											<div>
												<p>Consectetur adipiscing elit. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet.</p>
												<p>Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
											</div>
											<div>
												<p>Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus.</p>
												<p>Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio. In rhoncus arcu non leo imperdiet aliquet condimentum in rutrum nec, molestie et purus. Suspendisse potenti.</p>
											</div>
											<div>
												<p>Luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. condimentum in rutrum nec, molestie et purus. Suspendisse potenti Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum.</p>
												<p>Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
											</div>
										</div></div>
										
										<p class="right"><a class="button small next-slide" href="#">Fun facts and numbers <i class="icon-right-open right"></i></a></p>
										
									</div><div class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; display: none;">	
										
										<div class="box-dark">
											<div class="cols">
												<div class="col1of2">
													<h2 class="section-heading">Random facts about me<span class="helper"></span></h2>
													<ul class="extended">
														<li>
															<strong>I wanted to be an astronomer</strong><br>
															But I wasn't good enough for it
														<span class="helper"></span></li>
														<li>
															<strong>I can whistle five different ways</strong><br>
															Phasellus at lectus nec sem hendrerit gravida
														<span class="helper"></span></li>
														<li>
															<strong>My name was initially going to be Dale</strong><br>
															It was changed to Jony while I was still in the hospital
														<span class="helper"></span></li>
													</ul>
												</div>
												<div class="col1of2">
													<h2 class="section-heading">The universe by numbers<span class="helper"></span></h2>
													<ul class="extended numbers">
														<li>
															<span class="number">3.14</span>
															<strong>Sociosqu ad litora</strong><br>
															Class aptent taciti sociosqu ad litora torquent.
														<span class="helper"></span></li>
														<li>
															<span class="number">1.618</span>
															<strong>Facilisis lacinia</strong><br>
															Etiam vestibulum facilisis lacinia.
														<span class="helper"></span></li>
														<li>
															<span class="number">7</span>
															<strong>Lacinia maecenas</strong><br>
															Sit vestibulum facilisis lacinia maecenas.
														<span class="helper"></span></li>
													</ul>
												</div>
											</div>
										</div>
										
									</div></div>
								<div class="pager"><div><span class="active">•</span><span>•</span><span>•</span></div></div>
							</div> <!-- /slider -->
				
						</div>
					</div>
					
					<div class="page-content hidden" data-menu-item="2" data-title="Resume">
						<div class="main-content" style="">
				
							<div class="row">
							
								<div class="span8">
								
									<h2 class="section-heading offset-top">Work Experience<span class="helper"></span></h2>
									<dl class="timeline">
										<dt>
											<strong>Apple, Inc.</strong>
											<p>2011 - Current</p>
										</dt>
										<dd>
											<h4>Senior UI Designer</h4>
											<p>The size and age of the Cosmos are beyond ordinary human understanding.</p>
										</dd>
										<dt>
											<strong>Freelance</strong>
											<p>2007 - Current</p>
										</dt>
										<dd>
											<h4>Designer</h4>
											<p>In a cosmic perspective, most human concerns seem insignificant, even petty.</p>
										</dd>
										<dt>
											<strong>Pixar</strong>
											<p>2006 - 2009</p>
										</dt>
										<dd>
											<h4>Front-End Development</h4>
											<p>In the last few millennia we have made the most astonishing and unexpected discoveries.</p>
										</dd>
									</dl>
									
									<h2 class="section-heading">Education<span class="helper"></span></h2>
									<dl class="timeline section">
										<dt>
											<p>2005</p>
										</dt>
										<dd>
											<h4>Bachelor of Computer Science <small>of California Institute of Technology</small></h4>
											<p>They remind us that humans have evolved to wonder, that understanding is a joy.</p>
										</dd>
									</dl>
									
									<p class="span4 offset2"><a class="button secondary full" href="#"><i class="icon-download"></i> Download My Resume</a></p>
								
								</div>
								
								<div class="span4">
								
									<div class="box-light">
										<h2 class="box-heading">Skills</h2>
										<h3>General Skills</h3>
										<ul class="bold">
											<li>User Interface Design</li>
											<li>Web Standards</li>
											<li>Responsive Design</li>
										</ul>
										<h3>Design</h3>
										<ul class="bold plain">
											<li>User Interface Design <div class="progress-bar"><div style="width: 156px;"></div></div></li>
											<li>Graphic Design <div class="progress-bar"><div style="width: 94px;"></div></div></li>
											<li>Logi &amp; Identity Design <div class="progress-bar"><div style="width: 52px;"></div></div></li>
										</ul>
										<h3>Coding &amp; Programming</h3>
										<ul class="bold plain">
											<li>HTML / CSS <div class="progress-bar"><div style="width: 177px;"></div></div></li>
											<li>JavaScript / jQuery <div class="progress-bar"><div style="width: 137px;"></div></div></li>
											<li>PHP <div class="progress-bar"><div style="width: 83px;"></div></div></li>
										</ul>
									</div>
									
								</div>
								
							</div>
					
						</div>
					</div>
					
					<div class="page-content hidden" data-menu-item="3" data-title="Portfolio">
						<div class="main-content" style="">
				
							<div class="filter-tabs mixes">
								<ul>
									<li class="filter active" data-filter="icon">Icon Design</li>
									<li class="filter" data-filter="web">Web Design</li>
									<li class="filter" data-filter="photography">Photography</li>
									<li class="filter" data-filter="all">All Categories</li>
								</ul>
							</div>

							<ul id="portfolio-grid">
								<li class="mix icon mix_all" style="display: inline-block; opacity: 1;"><a href="#portfolio-item-1"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Beemo</strong> Icon Design <i>by Vasili Tkach</i></span></a></li>
								<li class="mix icon mix_all" style="display: inline-block; opacity: 1;"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Starfish</strong> Icon Design <i>by Rodrigo Bellão</i></span></a></li>
								<li class="mix icon mix_all" style="display: inline-block; opacity: 1;"><a class="mfp-iframe" href="http://vimeo.com/27246366"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/clouds.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Clouds</strong> Icon Design <i>by Vasili Tkach</i></span></a></li>
								<li class="mix icon mix_all" style="display: inline-block; opacity: 1;"><a class="mfp-iframe" href="http://www.youtube.com/watch?v=YLO7tCdBVrA"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/house.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>My Grandparents’ House</strong> Icon Design <i>by Vasili Tkach</i></span></a></li>
								<li class="mix icon mix_all" style="display: inline-block; opacity: 1;"><a href="#portfolio-item-5"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/shaver.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Braun Electric Shaver</strong> Icon Design <i>by Kevin Andersson</i></span></a></li>
								<li class="mix icon web mix_all" style="display: inline-block; opacity: 1;"><a href="#portfolio-item-6"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/cloud.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Cloud</strong> Icon Design <i>by Umar Irshad</i></span></a></li>
								<li class="mix web mix_all"><a href="#portfolio-item-1"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/website1.png" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Rockable Press</strong> Web Design &amp; Development</span></a></li>
								<li class="mix web mix_all"><a href="#portfolio-item-1"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/website2.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Tuts+ Premium</strong> Web Design</span></a></li>
								<li class="mix web mix_all"><a href="#portfolio-item-1"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/website3.png" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Tuts+ Premium</strong> Web Development</span></a></li>
								<li class="mix web mix_all"><a href="#portfolio-item-1"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/website4.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Envato</strong> Web Design</span></a></li>
								<li class="mix photography mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo3.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Leopard</strong> Photography</span></a></li>
								<li class="mix photography mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo1.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Surfer</strong> Photography</span></a></li>
								<li class="mix photography mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo4.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Time Flies</strong> Photography</span></a></li>
								<li class="mix photography mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo6.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Flowers</strong> Photography</span></a></li>
								<li class="mix photography web mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo5.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Hanging About</strong> Photography</span></a></li>
								<li class="mix photography mix_all"><a class="mfp-image" href="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-big.jpg"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/photo2.jpg" alt=""><div class="overlay"></div><div class="ind-open"></div> <span><strong>Waterfall</strong> Photography</span></a></li>
								<li class="placeholder"></li>
							</ul>
				
							<div id="portfolio-items">
				
								<article id="portfolio-item-1" class="portfolio-item mfp-hide">
									<figure>
										<div class="slider item-slider">
											<ul style="position: relative; height: 0px;"><li class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; visibility: hidden; display: block;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt="" style="visibility: hidden;"></li>
												
												
												
											<li class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/shaver-640.jpg" alt=""></li></ul>
										<div class="pager"><div><span class="active">•</span><span>•</span><span>•</span></div></div></div>
									</figure>
									<div>
										<h1>Next Big Thing</h1>
										<p>Sed accumsan velit at nib alique posuere eros pretium pellentesque dictumst platea  feugiat varius velit at faucibus.</p>
										<p>Pellentesque congue accumsan massa vel suscipit. Donec rhoncus vehicula feugiat hac habitasse platea dictumst phasellus varius ultricies tempus.</p>
										<dl>
											<dt><span class="helper"></span>Client:</dt>
											<dd>Apple</dd>
											<dt><span class="helper"></span>Role:</dt>
											<dd>
												<ul>
													<li>Web Design</li>
													<li>Front-End Development</li>
												</ul>
											</dd>
										</dl>
										<p class="right"><a class="button small" href="#"><i class="icon-eye"></i> View live site</a></p>
									</div>
								</article>
					
								<article id="portfolio-item-5" class="portfolio-item mfp-hide">
									<figure>
										<div class="slider item-slider">
											<ul style="position: relative; height: 0px;"><li class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; visibility: hidden; display: block;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt="" style="visibility: hidden;"></li>
												
												
												
											<li class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/shaver-640.jpg" alt=""></li></ul>
										<div class="pager"><div><span class="active">•</span><span>•</span><span>•</span></div></div></div>
									</figure>
									<div>
										<h1>Next Big Thing #2</h1>
										<p>Sed accumsan velit at nib alique posuere eros pretium pellentesque dictumst platea  feugiat varius velit at faucibus.</p>
										<p>Pellentesque congue accumsan massa vel suscipit. Donec rhoncus vehicula feugiat hac habitasse platea dictumst phasellus varius ultricies tempus.</p>
										<dl>
											<dt><span class="helper"></span>Client:</dt>
											<dd>Apple</dd>
											<dt><span class="helper"></span>Role:</dt>
											<dd>
												<ul>
													<li>Web Design</li>
													<li>Front-End Development</li>
												</ul>
											</dd>
										</dl>
										<p class="right"><a class="button small" href="#"><i class="icon-eye"></i> View live site</a></p>
									</div>
								</article>
					
								<article id="portfolio-item-6" class="portfolio-item mfp-hide">
									<figure>
										<div class="slider item-slider">
											<ul style="position: relative; height: 0px;"><li class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; visibility: hidden; display: block;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt="" style="visibility: hidden;"></li>
												
												
												
											<li class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/beemo-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/starfish-640.jpg" alt=""></li><li class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; display: none;"><img src="http://themes.lebensform.me/humanum-vcard/html/template/img/portfolio/shaver-640.jpg" alt=""></li></ul>
										<div class="pager"><div><span class="active">•</span><span>•</span><span>•</span></div></div></div>
									</figure>
									<div>
										<h1>Next Big Thing #3</h1>
										<p>Sed accumsan velit at nib alique posuere eros pretium pellentesque dictumst platea  feugiat varius velit at faucibus.</p>
										<p>Pellentesque congue accumsan massa vel suscipit. Donec rhoncus vehicula feugiat hac habitasse platea dictumst phasellus varius ultricies tempus.</p>
										<dl>
											<dt><span class="helper"></span>Client:</dt>
											<dd>Apple</dd>
											<dt><span class="helper"></span>Role:</dt>
											<dd>
												<ul>
													<li>Web Design</li>
													<li>Front-End Development</li>
												</ul>
											</dd>
										</dl>
										<p class="right"><a class="button small" href="#"><i class="icon-eye"></i> View live site</a></p>
									</div>
								</article>
					
							</div> <!-- /portfolio-items -->
				
						</div>
						<div class="content-footer">
							<div class="wrapper">
								<div class="availability">
									<p>I’m currently <strong>available for hire</strong> on a permanent or freelance basis. <a class="button small" href="contact.html">Contact me</a></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="page-content hidden" data-menu-item="4" data-title="Contact">
						<div class="main-content" style="">
							<div class="address">
								<div class="row">
									<div class="span6">
										<p><strong>Jonathan Orange</strong></p>
									</div>
									<div class="span6">
										<p><i class="icon-phone"></i> <strong>Phone:</strong> 555 678 901</p>
									</div>
								</div>
								<div class="row">
									<div class="span6">
										<p>322672 CSS Street</p>
									</div>
									<div class="span6">
										<p><i class="icon-mail"></i> <strong>E-mail:</strong> my@email.com</p>
									</div>
								</div>
								<div class="row">
									<div class="span6">
										<p>San Francisco, USA</p>
									</div>
									<div class="span6">
										<p><i class="icon-skype"></i> <strong>Skype:</strong> jonyorange</p>
									</div>
								</div>
							</div>
				
							<p class="centered">
								<a class="button small popup-gmaps" href="http://maps.google.com/maps?q=San+Francisco,+CA,+United+States&amp;hl=en&amp;ll=37.773089,-122.405033&amp;spn=0.057939,0.132093&amp;sll=51.523704,-0.158553&amp;sspn=0.011402,0.033023&amp;oq=san+fransisco&amp;t=m&amp;hnear=San+Francisco,+California&amp;z=14">
									View my location
								</a>
							</p>
				
							<div class="content-switch">
								<div class="controls">
									<h2><span>Contact form type</span></h2>
									<ul>
										<li class="active">Standard</li>
										<li>Postcard</li>
									</ul>
								</div>
								<div class="panes">
									
									<div class="box-dark" style="display: block;">
										<h2 class="section-heading">Let’s talk…<span class="helper"></span></h2>
										<p class="centered explanation">There is no better way to contact me than to use this form. You should do it now.</p>
										<form id="contact-form" action="mail/send.php" method="post" novalidate="" data-validate="parsley">
											<fieldset>
												<p class="user-data">
													<input type="text" name="name" required="" placeholder="Your name" class="parsley-validated">
													<input type="email" name="email" required="" placeholder="Your e-mail address" class="parsley-validated">
												</p>
												<p class="message">
													<textarea name="message" placeholder="Your message" required="" class="parsley-validated"></textarea>
												</p>
												<p class="submit"><button type="submit" class="button large">Send message</button></p>
											</fieldset>
											<div class="alert success hidden">
												<p>Your message has been sent. Thank you!</p>
											</div>
											<div class="alert error hidden">
												<p>Sorry, your message has not been sent. Please try again.</p>
											</div>
										<div class="loader hidden">Sending…</div></form>
									</div>
									
									<div id="postcard-container">
										<div>
											<div id="postcard">
												<form action="mail/send.php" method="post" novalidate="" data-validate="parsley">
													<h2>Message:</h2>
													<fieldset>
														<p>To: Jonathan Orange</p>
														<p><label>From: <input type="text" name="name" required="" placeholder="Your name" class="parsley-validated"></label></p>
														<p><label>Return e-mail: <input type="email" name="email" required="" placeholder="Your e-mail address" class="parsley-validated"></label></p>
														<textarea name="message" required="" class="parsley-validated"></textarea>
													</fieldset>
													<button type="submit">Send</button>
													<div class="stamp">
														<div class="v1" style="display: block;"></div>
														<div class="v2"></div>
														<div class="v3"></div>
													</div>
													<div class="stamp-mark"></div>
												</form>
											</div>
										</div>
										<div class="alert success hidden">
											<p>Your message has been sent. Thank you!</p>
										</div>
										<div class="alert error hidden">
											<p>Sorry, your message has not been sent. Please try again.</p>
										</div>
									<div class="loader hidden">Sending…</div></div>
									
								</div>
							</div> <!-- /content-switch -->
					
						</div>
					</div>
					
					<div class="page-content hidden" data-menu-item="5" data-title="Extras">
						<div class="main-content" style="">
			
							<div class="filter-tabs">
								<ul>
									<li data-pane="typography" class="active">Typography</li>
									<li data-pane="columns">Columns</li>
									<li data-pane="toggles">Toggles</li>
									<li data-pane="buttons">Buttons</li>
									<li data-pane="icons">Icons</li>
									<li data-pane="misc">Miscellaneous</li>
								</ul>
							</div>
				
							<div class="filter-panes">
							
								<div id="typography" class="section" style="display: block;">
									
									<div class="row">
										<div class="span8">
											<h1>Heading 1</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus officia voluptatem dolorem error at necessitatibus expedita magnam eos suscipit dolore in autem exercitationem deleniti ut qui ipsam voluptate alias nobis sunt libero quia illo quidem reprehenderit hic odio cum consequatur?</p>
											<p>Fuga inventore sequi enim quisquam dignissimos dicta officia minima. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nam recusandae aperiam nemo id dolore commodi repellendus obcaecati in quos illum odio quam! Esse accusamus debitis assumenda ducimus placeat at.</p>
											<h2>Heading 2</h2>
											<p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet <a href="#">tincidunt erat</a>. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
											<h3>Heading 3</h3>
											<p>Nulla sem neque, laoreet et dignissim nec, lacinia dictum massa. Cras enim leo, ultrices in tincidunt sed, placerat sed lorem. Phasellus ut odio nunc. Curabitur porta, leo sit amet hendrerit faucibus, nisl diam rutrum enim, a varius erat mi a massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<h4>Heading 4</h4>
											<p>Suspendisse potenti. In tortor mauris, dapibus varius porta eget, volutpat bibendum nulla. In consectetur adipiscing leo, eget consectetur lectus dapibus sit amet. Suspendisse magna sem, porta et euismod congue, imperdiet id justo. Etiam metus dolor, ullamcorper vitae pretium nec, <strong>dapibus ut justo.</strong></p>
										</div>
										<div class="span4">
											<h2>List styles</h2>
											<ul>
												<li>Staring at the <strong>sun</strong></li>
												<li>Painting unicorns and <strong>rainbows</strong></li>
												<li>Watching <strong>cats</strong></li>
											</ul>
											<ul class="tick">
												<li>Adobe <strong>Photoshop</strong></li>
												<li>Adobe <strong>Illustrator</strong></li>
												<li>Panic’s <strong>Coda</strong></li>
											</ul>
											<ol>
												<li>On it everyone you love</li>
												<li>Everyone you know</li>
												<li>Everyone you ever heard of</li>
											</ol>
											<h2>Code</h2>
											<pre><div class="code"><ol><li>#awesome {</li><li>    width: 500px;</li><li>    background: #ada;</li><li>    border-radius: 3px;</li><li>    color: #fff;</li><li>}</li></ol></div></pre>
										</div>
									</div>
									
									<h2>Quote</h2>
									<blockquote>
										<p>Nulla sem neque, laoreet et dignissim nec, lacinia dictum massa. Cras enim leo, ultrices in tincidunt sed, placerat sed lorem. Phasellus ut odio nunc. Curabitur porta, leo sit amet hendrerit faucibus, nisl diam rutrum enim, a varius erat mi a massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<footer>William Shakespeare</footer>
									</blockquote>
									
								</div> <!-- /section: typography -->
							
								<div id="columns" class="section">
									
									<div class="row">
										<div class="span6">
											<h3>Column 1 of 2</h3>
											<p class="extra-spacing">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin auctor metus erat, at volutpat tortor. Integer vehicula ligula nec ante euismod pellentesque. Nullam elementum posuere suscipit.</p>
										</div>
										<div class="span6">
											<h3>Column 1 of 2</h3>
											<p class="extra-spacing">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin auctor metus erat, at volutpat tortor. Integer vehicula ligula nec ante euismod pellentesque. Nullam elementum posuere suscipit.</p>
										</div>
									</div>
									
									<div class="row">
										<div class="span4">
											<h3>Column 1 of 3</h3>
											<p class="extra-spacing">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin auctor metus at erat, volutpat tortor. Integer vehicula.</p>
										</div>
										<div class="span4">
											<h3>Column 1 of 3</h3>
											<p class="extra-spacing">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin auctor metus at erat, volutpat tortor. Integer vehicula.</p>
										</div>
										<div class="span4">
											<h3>Column 1 of 3</h3>
											<p class="extra-spacing">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin auctor metus at erat, volutpat tortor. Integer vehicula.</p>
										</div>
									</div>
									
									<div class="row section">
										<div class="span3">
											<h3>Column 1 of 4</h3>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpi egestas. Proin auctor metus.</p>
										</div>
										<div class="span3">
											<h3>Column 1 of 4</h3>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpi egestas. Proin auctor metus.</p>
										</div>
										<div class="span3">
											<h3>Column 1 of 4</h3>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpi egestas. Proin auctor metus.</p>
										</div>
										<div class="span3">
											<h3>Column 1 of 4</h3>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpi egestas. Proin auctor metus.</p>
										</div>
									</div>
									
									<div class="grid-preview">
										<div class="row">
											<div class="span12">12</div>
										</div>
										<div class="row">
											<div class="span6">6</div>
											<div class="span6">6</div>
										</div>
										<div class="row">
											<div class="span4">4</div>
											<div class="span4">4</div>
											<div class="span4">4</div>
										</div>
										<div class="row">
											<div class="span3">3</div>
											<div class="span3">3</div>
											<div class="span3">3</div>
											<div class="span3">3</div>
										</div>
										<div class="row">
											<div class="span2">2</div>
											<div class="span2">2</div>
											<div class="span2">2</div>
											<div class="span2">2</div>
											<div class="span2">2</div>
											<div class="span2">2</div>
										</div>
										<div class="row">
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
											<div class="span1">1</div>
										</div>
										<div class="row">
											<div class="span5">5</div>
											<div class="span7">7</div>
										</div>
										<div class="row">
											<div class="span8">8</div>
											<div class="span4">4</div>
										</div>
										<div class="row">
											<div class="span3">3</div>
											<div class="span9">9</div>
										</div>
									</div>
									
								</div> <!-- /section: columns -->
								
								<div id="toggles" class="section">
									
									<h2 class="section-heading">Vertical tabs<span class="helper"></span></h2>
									
									<div class="tabs-wrapper"><ul class="tabs-vertical">
										<li class="active"><a href="#">First section</a></li>
										<li><a href="#">Second section</a></li>
										<li><a href="#">Third section</a></li>
										<li><a href="#">Fourth section</a></li>
									</ul><div class="panes">
										<div style="display: block;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<div>
											<p>Consectetur adipiscing elit. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<div>
											<p>Luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<div>
											<p>Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio. In rhoncus arcu non leo imperdiet aliquet.</p>
										</div>
									</div></div>
									
									
									<h2 class="section-heading">Horizontal tabs<span class="helper"></span></h2>
									
									<div class="tabs-wrapper"><ul class="tabs">
										<li class="active"><a href="#">First section</a></li>
										<li><a href="#">Second section</a></li>
										<li><a href="#">Third section</a></li>
									</ul><div class="panes">
										<div style="display: block;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<div>
											<p>Placeat sint quisquam maxime ex modi animi voluptatum? Porro excepturi adipisci cum iure suscipit maiores alias error officia dolores deleniti eum est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet.</p>
										</div>
										<div>
											<p>Porro excepturi adipisci cum iure suscipit maiores alias error officia dolores deleniti eum est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Placeat sint quisquam maxime ex modi animi voluptatum? Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa.</p>
										</div>
									</div></div>
									
									
									<h2 class="section-heading">Accordion<span class="helper"></span></h2>
									
									<div class="accordion">
										<h2 class="active">First section<i></i></h2>
										<div style="display: block;">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<h2>Second section<i></i></h2>
										<div>
											<p>Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
										<h2>Third section<i></i></h2>
										<div>
											<p>Aliquam erat volutpat. In rhoncus arcu non leo imperdiet aliquet. Vestibulum felis ante, luctus vitae pretium eu, mattis nec est. Nulla facilisi. Quisque eget sapien ligula. Suspendisse ullamcorper lacus ac libero pellentesque dapibus. Proin sit amet neque dui. Duis et ante turpis, sit amet elementum massa. Curabitur fringilla consectetur eleifend. Nunc aliquam ultrices rutrum. Integer mi orci, condimentum in rutrum nec, molestie et purus. Suspendisse potenti. Proin suscipit bibendum risus, sit amet volutpat erat ultricies ac. Nam nisl odio.</p>
										</div>
									</div>
									
								</div> <!-- /section: toggles -->
								
								<div id="buttons" class="section">
									
									<p>
										<span class="button-group-label">Extralarge</span>
										<a class="button extralarge" href="#">Happy button</a> &nbsp;
										<a class="button extralarge secondary" href="#">Happy button</a> &nbsp;
										<a class="button extralarge tertriary" href="#">Happy button</a>
									</p>
									
									<p>
										<span class="button-group-label">Large</span>
										<a class="button large" href="#">Happy button</a> &nbsp;
										<a class="button large secondary" href="#">Happy button</a> &nbsp;
										<a class="button large tertriary" href="#">Happy button</a>
									</p>
									
									<p>
										<span class="button-group-label">Medium</span>
										<a class="button" href="#">Happy button</a> &nbsp;
										<a class="button secondary" href="#">Happy button</a> &nbsp;
										<a class="button tertriary" href="#">Happy button</a>
									</p>
									
									<p>
										<span class="button-group-label">Small</span>
										<a class="button small" href="#">Happy button</a> &nbsp;
										<a class="button small secondary" href="#">Happy button</a> &nbsp;
										<a class="button small tertriary" href="#">Happy button</a>
									</p>
									
									<h2 class="section-heading">Buttons with icons<span class="helper"></span></h2>
									
									<p class="centered">Buttons are good, but buttons with icons are even better!<br> You can use all <b>250+ <a href="http://www.entypo.com">Entypo</a> icons</b> with all available button colors and sizes.</p>
									
									<p class="centered">
										<span class="group">
											<a class="button small" href="#"><i class="icon-mail"></i> Mail</a> &nbsp;
											<a class="button" href="#"><i class="icon-paper-plane"></i> Send</a> &nbsp;
											<a class="button large" href="#"><i class="icon-eye"></i> View</a> &nbsp;
											<a class="button extralarge" href="#"><i class="icon-forward"></i> Forward</a> &nbsp; &nbsp;
										</span>
										<span class="group">
											<a class="button extralarge secondary" href="#"><i class="icon-camera"></i> Camera</a> &nbsp;
											<a class="button large secondary" href="#"><i class="icon-check"></i> Check</a> &nbsp;
											<a class="button secondary" href="#"><i class="icon-download"></i> Download</a> &nbsp;
											<a class="button small secondary" href="#"><i class="icon-export"></i> Export</a> <br><br>
										</span>
										<span class="group">
											<a class="button extralarge tertriary" href="#"><i class="icon-flag"></i> Flag</a> &nbsp;
											<a class="button large tertriary" href="#"><i class="icon-info"></i> Info</a> &nbsp;
											<a class="button tertriary" href="#"><i class="icon-thumbs-up"></i> Like</a> &nbsp;
											<a class="button small tertriary" href="#"><i class="icon-shuffle"></i> Shuffle</a>
										</span>
									</p>
									
								</div> <!-- /section: buttons -->
								
								<div id="icons" class="section">
									
									<h2 class="section-heading">This template contains 250+ easy to use <a href="http://www.entypo.com">Entypo</a> icons:<span class="helper"></span></h2>
									
									<div class="icons-preview"><div class="row"><div class="span3"><ul class="the-icons unstyled"><li title="Code: 0x266a"><i class="icon-note"></i> <span class="i-name">icon-note</span><span class="i-code">0x266a</span></li><li title="Code: 0x266b"><i class="icon-note-beamed"></i> <span class="i-name">icon-note-beamed</span><span class="i-code">0x266b</span></li><li title="Code: 0x1f3b5"><i class="icon-music"></i> <span class="i-name">icon-music</span><span class="i-code">0x1f3b5</span></li><li title="Code: 0x1f50d"><i class="icon-search"></i> <span class="i-name">icon-search</span><span class="i-code">0x1f50d</span></li><li title="Code: 0x1f526"><i class="icon-flashlight"></i> <span class="i-name">icon-flashlight</span><span class="i-code">0x1f526</span></li><li title="Code: 0x2709"><i class="icon-mail"></i> <span class="i-name">icon-mail</span><span class="i-code">0x2709</span></li><li title="Code: 0x2665"><i class="icon-heart"></i> <span class="i-name">icon-heart</span><span class="i-code">0x2665</span></li><li title="Code: 0x2661"><i class="icon-heart-empty"></i> <span class="i-name">icon-heart-empty</span><span class="i-code">0x2661</span></li><li title="Code: 0x2605"><i class="icon-star"></i> <span class="i-name">icon-star</span><span class="i-code">0x2605</span></li><li title="Code: 0x2606"><i class="icon-star-empty"></i> <span class="i-name">icon-star-empty</span><span class="i-code">0x2606</span></li><li title="Code: 0x1f464"><i class="icon-user"></i> <span class="i-name">icon-user</span><span class="i-code">0x1f464</span></li><li title="Code: 0x1f465"><i class="icon-users"></i> <span class="i-name">icon-users</span><span class="i-code">0x1f465</span></li><li title="Code: 0xe700"><i class="icon-user-add"></i> <span class="i-name">icon-user-add</span><span class="i-code">0xe700</span></li><li title="Code: 0x1f3ac"><i class="icon-video"></i> <span class="i-name">icon-video</span><span class="i-code">0x1f3ac</span></li><li title="Code: 0x1f304"><i class="icon-picture"></i> <span class="i-name">icon-picture</span><span class="i-code">0x1f304</span></li><li title="Code: 0x1f4f7"><i class="icon-camera"></i> <span class="i-name">icon-camera</span><span class="i-code">0x1f4f7</span></li><li title="Code: 0x268f"><i class="icon-layout"></i> <span class="i-name">icon-layout</span><span class="i-code">0x268f</span></li><li title="Code: 0x2630"><i class="icon-menu"></i> <span class="i-name">icon-menu</span><span class="i-code">0x2630</span></li><li title="Code: 0x2713"><i class="icon-check"></i> <span class="i-name">icon-check</span><span class="i-code">0x2713</span></li><li title="Code: 0x2715"><i class="icon-cancel"></i> <span class="i-name">icon-cancel</span><span class="i-code">0x2715</span></li><li title="Code: 0x2716"><i class="icon-cancel-circled"></i> <span class="i-name">icon-cancel-circled</span><span class="i-code">0x2716</span></li><li title="Code: 0x274e"><i class="icon-cancel-squared"></i> <span class="i-name">icon-cancel-squared</span><span class="i-code">0x274e</span></li><li title="Code: 0x2b"><i class="icon-plus"></i> <span class="i-name">icon-plus</span><span class="i-code">0x2b</span></li><li title="Code: 0x2795"><i class="icon-plus-circled"></i> <span class="i-name">icon-plus-circled</span><span class="i-code">0x2795</span></li><li title="Code: 0x229e"><i class="icon-plus-squared"></i> <span class="i-name">icon-plus-squared</span><span class="i-code">0x229e</span></li><li title="Code: 0x2d"><i class="icon-minus"></i> <span class="i-name">icon-minus</span><span class="i-code">0x2d</span></li><li title="Code: 0x2796"><i class="icon-minus-circled"></i> <span class="i-name">icon-minus-circled</span><span class="i-code">0x2796</span></li><li title="Code: 0x229f"><i class="icon-minus-squared"></i> <span class="i-name">icon-minus-squared</span><span class="i-code">0x229f</span></li><li title="Code: 0x2753"><i class="icon-help"></i> <span class="i-name">icon-help</span><span class="i-code">0x2753</span></li><li title="Code: 0xe704"><i class="icon-help-circled"></i> <span class="i-name">icon-help-circled</span><span class="i-code">0xe704</span></li><li title="Code: 0x2139"><i class="icon-info"></i> <span class="i-name">icon-info</span><span class="i-code">0x2139</span></li><li title="Code: 0xe705"><i class="icon-info-circled"></i> <span class="i-name">icon-info-circled</span><span class="i-code">0xe705</span></li><li title="Code: 0x1f519"><i class="icon-back"></i> <span class="i-name">icon-back</span><span class="i-code">0x1f519</span></li><li title="Code: 0x2302"><i class="icon-home"></i> <span class="i-name">icon-home</span><span class="i-code">0x2302</span></li><li title="Code: 0x1f517"><i class="icon-link"></i> <span class="i-name">icon-link</span><span class="i-code">0x1f517</span></li><li title="Code: 0x1f4ce"><i class="icon-attach"></i> <span class="i-name">icon-attach</span><span class="i-code">0x1f4ce</span></li><li title="Code: 0x1f512"><i class="icon-lock"></i> <span class="i-name">icon-lock</span><span class="i-code">0x1f512</span></li><li title="Code: 0x1f513"><i class="icon-lock-open"></i> <span class="i-name">icon-lock-open</span><span class="i-code">0x1f513</span></li><li title="Code: 0xe70a"><i class="icon-eye"></i> <span class="i-name">icon-eye</span><span class="i-code">0xe70a</span></li><li title="Code: 0xe70c"><i class="icon-tag"></i> <span class="i-name">icon-tag</span><span class="i-code">0xe70c</span></li><li title="Code: 0x1f516"><i class="icon-bookmark"></i> <span class="i-name">icon-bookmark</span><span class="i-code">0x1f516</span></li><li title="Code: 0x1f4d1"><i class="icon-bookmarks"></i> <span class="i-name">icon-bookmarks</span><span class="i-code">0x1f4d1</span></li><li title="Code: 0x2691"><i class="icon-flag"></i> <span class="i-name">icon-flag</span><span class="i-code">0x2691</span></li><li title="Code: 0x1f44d"><i class="icon-thumbs-up"></i> <span class="i-name">icon-thumbs-up</span><span class="i-code">0x1f44d</span></li><li title="Code: 0x1f44e"><i class="icon-thumbs-down"></i> <span class="i-name">icon-thumbs-down</span><span class="i-code">0x1f44e</span></li><li title="Code: 0x1f4e5"><i class="icon-download"></i> <span class="i-name">icon-download</span><span class="i-code">0x1f4e5</span></li><li title="Code: 0x1f4e4"><i class="icon-upload"></i> <span class="i-name">icon-upload</span><span class="i-code">0x1f4e4</span></li><li title="Code: 0xe711"><i class="icon-upload-cloud"></i> <span class="i-name">icon-upload-cloud</span><span class="i-code">0xe711</span></li><li title="Code: 0xe712"><i class="icon-reply"></i> <span class="i-name">icon-reply</span><span class="i-code">0xe712</span></li><li title="Code: 0xe713"><i class="icon-reply-all"></i> <span class="i-name">icon-reply-all</span><span class="i-code">0xe713</span></li><li title="Code: 0x27a6"><i class="icon-forward"></i> <span class="i-name">icon-forward</span><span class="i-code">0x27a6</span></li><li title="Code: 0x275e"><i class="icon-quote"></i> <span class="i-name">icon-quote</span><span class="i-code">0x275e</span></li><li title="Code: 0xe714"><i class="icon-code"></i> <span class="i-name">icon-code</span><span class="i-code">0xe714</span></li><li title="Code: 0xe715"><i class="icon-export"></i> <span class="i-name">icon-export</span><span class="i-code">0xe715</span></li><li title="Code: 0x270e"><i class="icon-pencil"></i> <span class="i-name">icon-pencil</span><span class="i-code">0x270e</span></li><li title="Code: 0x2712"><i class="icon-feather"></i> <span class="i-name">icon-feather</span><span class="i-code">0x2712</span></li><li title="Code: 0xe716"><i class="icon-print"></i> <span class="i-name">icon-print</span><span class="i-code">0xe716</span></li><li title="Code: 0xe717"><i class="icon-retweet"></i> <span class="i-name">icon-retweet</span><span class="i-code">0xe717</span></li><li title="Code: 0x2328"><i class="icon-keyboard"></i> <span class="i-name">icon-keyboard</span><span class="i-code">0x2328</span></li><li title="Code: 0xe718"><i class="icon-comment"></i> <span class="i-name">icon-comment</span><span class="i-code">0xe718</span></li><li title="Code: 0xe720"><i class="icon-chat"></i> <span class="i-name">icon-chat</span><span class="i-code">0xe720</span></li><li title="Code: 0x1f514"><i class="icon-bell"></i> <span class="i-name">icon-bell</span><span class="i-code">0x1f514</span></li><li title="Code: 0x26a0"><i class="icon-attention"></i> <span class="i-name">icon-attention</span><span class="i-code">0x26a0</span></li><li title="Code: 0x1f4a5"><i class="icon-alert"></i> <span class="i-name">icon-alert</span><span class="i-code">0x1f4a5</span></li><li title="Code: 0xe722"><i class="icon-vcard"></i> <span class="i-name">icon-vcard</span><span class="i-code">0xe722</span></li><li title="Code: 0xe723"><i class="icon-address"></i> <span class="i-name">icon-address</span><span class="i-code">0xe723</span></li><li title="Code: 0xe724"><i class="icon-location"></i> <span class="i-name">icon-location</span><span class="i-code">0xe724</span></li><li title="Code: 0xe727"><i class="icon-map"></i> <span class="i-name">icon-map</span><span class="i-code">0xe727</span></li><li title="Code: 0x27a2"><i class="icon-direction"></i> <span class="i-name">icon-direction</span><span class="i-code">0x27a2</span></li><li title="Code: 0xe728"><i class="icon-compass"></i> <span class="i-name">icon-compass</span><span class="i-code">0xe728</span></li><li title="Code: 0x2615"><i class="icon-cup"></i> <span class="i-name">icon-cup</span><span class="i-code">0x2615</span></li></ul></div><div class="span3"><ul class="the-icons unstyled"><li title="Code: 0xe729"><i class="icon-trash"></i> <span class="i-name">icon-trash</span><span class="i-code">0xe729</span></li><li title="Code: 0xe730"><i class="icon-doc"></i> <span class="i-name">icon-doc</span><span class="i-code">0xe730</span></li><li title="Code: 0xe736"><i class="icon-docs"></i> <span class="i-name">icon-docs</span><span class="i-code">0xe736</span></li><li title="Code: 0xe737"><i class="icon-doc-landscape"></i> <span class="i-name">icon-doc-landscape</span><span class="i-code">0xe737</span></li><li title="Code: 0x1f4c4"><i class="icon-doc-text"></i> <span class="i-name">icon-doc-text</span><span class="i-code">0x1f4c4</span></li><li title="Code: 0xe731"><i class="icon-doc-text-inv"></i> <span class="i-name">icon-doc-text-inv</span><span class="i-code">0xe731</span></li><li title="Code: 0x1f4f0"><i class="icon-newspaper"></i> <span class="i-name">icon-newspaper</span><span class="i-code">0x1f4f0</span></li><li title="Code: 0x1f4d6"><i class="icon-book-open"></i> <span class="i-name">icon-book-open</span><span class="i-code">0x1f4d6</span></li><li title="Code: 0x1f4d5"><i class="icon-book"></i> <span class="i-name">icon-book</span><span class="i-code">0x1f4d5</span></li><li title="Code: 0x1f4c1"><i class="icon-folder"></i> <span class="i-name">icon-folder</span><span class="i-code">0x1f4c1</span></li><li title="Code: 0xe738"><i class="icon-archive"></i> <span class="i-name">icon-archive</span><span class="i-code">0xe738</span></li><li title="Code: 0x1f4e6"><i class="icon-box"></i> <span class="i-name">icon-box</span><span class="i-code">0x1f4e6</span></li><li title="Code: 0xe73a"><i class="icon-rss"></i> <span class="i-name">icon-rss</span><span class="i-code">0xe73a</span></li><li title="Code: 0x1f4de"><i class="icon-phone"></i> <span class="i-name">icon-phone</span><span class="i-code">0x1f4de</span></li><li title="Code: 0x2699"><i class="icon-cog"></i> <span class="i-name">icon-cog</span><span class="i-code">0x2699</span></li><li title="Code: 0x2692"><i class="icon-tools"></i> <span class="i-name">icon-tools</span><span class="i-code">0x2692</span></li><li title="Code: 0xe73c"><i class="icon-share"></i> <span class="i-name">icon-share</span><span class="i-code">0xe73c</span></li><li title="Code: 0xe73e"><i class="icon-shareable"></i> <span class="i-name">icon-shareable</span><span class="i-code">0xe73e</span></li><li title="Code: 0xe73d"><i class="icon-basket"></i> <span class="i-name">icon-basket</span><span class="i-code">0xe73d</span></li><li title="Code: 0x1f45c"><i class="icon-bag"></i> <span class="i-name">icon-bag</span><span class="i-code">0x1f45c</span></li><li title="Code: 0x1f4c5"><i class="icon-calendar"></i> <span class="i-name">icon-calendar</span><span class="i-code">0x1f4c5</span></li><li title="Code: 0xe740"><i class="icon-login"></i> <span class="i-name">icon-login</span><span class="i-code">0xe740</span></li><li title="Code: 0xe741"><i class="icon-logout"></i> <span class="i-name">icon-logout</span><span class="i-code">0xe741</span></li><li title="Code: 0x1f3a4"><i class="icon-mic"></i> <span class="i-name">icon-mic</span><span class="i-code">0x1f3a4</span></li><li title="Code: 0x1f507"><i class="icon-mute"></i> <span class="i-name">icon-mute</span><span class="i-code">0x1f507</span></li><li title="Code: 0x1f50a"><i class="icon-sound"></i> <span class="i-name">icon-sound</span><span class="i-code">0x1f50a</span></li><li title="Code: 0xe742"><i class="icon-volume"></i> <span class="i-name">icon-volume</span><span class="i-code">0xe742</span></li><li title="Code: 0x1f554"><i class="icon-clock"></i> <span class="i-name">icon-clock</span><span class="i-code">0x1f554</span></li><li title="Code: 0x23f3"><i class="icon-hourglass"></i> <span class="i-name">icon-hourglass</span><span class="i-code">0x23f3</span></li><li title="Code: 0x1f4a1"><i class="icon-lamp"></i> <span class="i-name">icon-lamp</span><span class="i-code">0x1f4a1</span></li><li title="Code: 0x1f505"><i class="icon-light-down"></i> <span class="i-name">icon-light-down</span><span class="i-code">0x1f505</span></li><li title="Code: 0x1f506"><i class="icon-light-up"></i> <span class="i-name">icon-light-up</span><span class="i-code">0x1f506</span></li><li title="Code: 0x25d1"><i class="icon-adjust"></i> <span class="i-name">icon-adjust</span><span class="i-code">0x25d1</span></li><li title="Code: 0x1f6ab"><i class="icon-block"></i> <span class="i-name">icon-block</span><span class="i-code">0x1f6ab</span></li><li title="Code: 0xe744"><i class="icon-resize-full"></i> <span class="i-name">icon-resize-full</span><span class="i-code">0xe744</span></li><li title="Code: 0xe746"><i class="icon-resize-small"></i> <span class="i-name">icon-resize-small</span><span class="i-code">0xe746</span></li><li title="Code: 0xe74c"><i class="icon-popup"></i> <span class="i-name">icon-popup</span><span class="i-code">0xe74c</span></li><li title="Code: 0xe74d"><i class="icon-publish"></i> <span class="i-name">icon-publish</span><span class="i-code">0xe74d</span></li><li title="Code: 0xe74e"><i class="icon-window"></i> <span class="i-name">icon-window</span><span class="i-code">0xe74e</span></li><li title="Code: 0xe74f"><i class="icon-arrow-combo"></i> <span class="i-name">icon-arrow-combo</span><span class="i-code">0xe74f</span></li><li title="Code: 0xe758"><i class="icon-down-circled"></i> <span class="i-name">icon-down-circled</span><span class="i-code">0xe758</span></li><li title="Code: 0xe759"><i class="icon-left-circled"></i> <span class="i-name">icon-left-circled</span><span class="i-code">0xe759</span></li><li title="Code: 0xe75a"><i class="icon-right-circled"></i> <span class="i-name">icon-right-circled</span><span class="i-code">0xe75a</span></li><li title="Code: 0xe75b"><i class="icon-up-circled"></i> <span class="i-name">icon-up-circled</span><span class="i-code">0xe75b</span></li><li title="Code: 0xe75c"><i class="icon-down-open"></i> <span class="i-name">icon-down-open</span><span class="i-code">0xe75c</span></li><li title="Code: 0xe75d"><i class="icon-left-open"></i> <span class="i-name">icon-left-open</span><span class="i-code">0xe75d</span></li><li title="Code: 0xe75e"><i class="icon-right-open"></i> <span class="i-name">icon-right-open</span><span class="i-code">0xe75e</span></li><li title="Code: 0xe75f"><i class="icon-up-open"></i> <span class="i-name">icon-up-open</span><span class="i-code">0xe75f</span></li><li title="Code: 0xe760"><i class="icon-down-open-mini"></i> <span class="i-name">icon-down-open-mini</span><span class="i-code">0xe760</span></li><li title="Code: 0xe761"><i class="icon-left-open-mini"></i> <span class="i-name">icon-left-open-mini</span><span class="i-code">0xe761</span></li><li title="Code: 0xe762"><i class="icon-right-open-mini"></i> <span class="i-name">icon-right-open-mini</span><span class="i-code">0xe762</span></li><li title="Code: 0xe763"><i class="icon-up-open-mini"></i> <span class="i-name">icon-up-open-mini</span><span class="i-code">0xe763</span></li><li title="Code: 0xe764"><i class="icon-down-open-big"></i> <span class="i-name">icon-down-open-big</span><span class="i-code">0xe764</span></li><li title="Code: 0xe765"><i class="icon-left-open-big"></i> <span class="i-name">icon-left-open-big</span><span class="i-code">0xe765</span></li><li title="Code: 0xe766"><i class="icon-right-open-big"></i> <span class="i-name">icon-right-open-big</span><span class="i-code">0xe766</span></li><li title="Code: 0xe767"><i class="icon-up-open-big"></i> <span class="i-name">icon-up-open-big</span><span class="i-code">0xe767</span></li><li title="Code: 0x2b07"><i class="icon-down"></i> <span class="i-name">icon-down</span><span class="i-code">0x2b07</span></li><li title="Code: 0x2b05"><i class="icon-left"></i> <span class="i-name">icon-left</span><span class="i-code">0x2b05</span></li><li title="Code: 0x27a1"><i class="icon-right"></i> <span class="i-name">icon-right</span><span class="i-code">0x27a1</span></li><li title="Code: 0x2b06"><i class="icon-up"></i> <span class="i-name">icon-up</span><span class="i-code">0x2b06</span></li><li title="Code: 0x25be"><i class="icon-down-dir"></i> <span class="i-name">icon-down-dir</span><span class="i-code">0x25be</span></li><li title="Code: 0x25c2"><i class="icon-left-dir"></i> <span class="i-name">icon-left-dir</span><span class="i-code">0x25c2</span></li><li title="Code: 0x25b8"><i class="icon-right-dir"></i> <span class="i-name">icon-right-dir</span><span class="i-code">0x25b8</span></li><li title="Code: 0x25b4"><i class="icon-up-dir"></i> <span class="i-name">icon-up-dir</span><span class="i-code">0x25b4</span></li><li title="Code: 0xe4b0"><i class="icon-down-bold"></i> <span class="i-name">icon-down-bold</span><span class="i-code">0xe4b0</span></li><li title="Code: 0xe4ad"><i class="icon-left-bold"></i> <span class="i-name">icon-left-bold</span><span class="i-code">0xe4ad</span></li><li title="Code: 0xe4ae"><i class="icon-right-bold"></i> <span class="i-name">icon-right-bold</span><span class="i-code">0xe4ae</span></li><li title="Code: 0xe4af"><i class="icon-up-bold"></i> <span class="i-name">icon-up-bold</span><span class="i-code">0xe4af</span></li><li title="Code: 0x2193"><i class="icon-down-thin"></i> <span class="i-name">icon-down-thin</span><span class="i-code">0x2193</span></li><li title="Code: 0x2190"><i class="icon-left-thin"></i> <span class="i-name">icon-left-thin</span><span class="i-code">0x2190</span></li><li title="Code: 0x2192"><i class="icon-right-thin"></i> <span class="i-name">icon-right-thin</span><span class="i-code">0x2192</span></li></ul></div><div class="span3"><ul class="the-icons unstyled"><li title="Code: 0x2191"><i class="icon-up-thin"></i> <span class="i-name">icon-up-thin</span><span class="i-code">0x2191</span></li><li title="Code: 0x27f2"><i class="icon-ccw"></i> <span class="i-name">icon-ccw</span><span class="i-code">0x27f2</span></li><li title="Code: 0x27f3"><i class="icon-cw"></i> <span class="i-name">icon-cw</span><span class="i-code">0x27f3</span></li><li title="Code: 0x1f504"><i class="icon-arrows-ccw"></i> <span class="i-name">icon-arrows-ccw</span><span class="i-code">0x1f504</span></li><li title="Code: 0x21b3"><i class="icon-level-down"></i> <span class="i-name">icon-level-down</span><span class="i-code">0x21b3</span></li><li title="Code: 0x21b0"><i class="icon-level-up"></i> <span class="i-name">icon-level-up</span><span class="i-code">0x21b0</span></li><li title="Code: 0x1f500"><i class="icon-shuffle"></i> <span class="i-name">icon-shuffle</span><span class="i-code">0x1f500</span></li><li title="Code: 0x1f501"><i class="icon-loop"></i> <span class="i-name">icon-loop</span><span class="i-code">0x1f501</span></li><li title="Code: 0x21c6"><i class="icon-switch"></i> <span class="i-name">icon-switch</span><span class="i-code">0x21c6</span></li><li title="Code: 0x25b6"><i class="icon-play"></i> <span class="i-name">icon-play</span><span class="i-code">0x25b6</span></li><li title="Code: 0x25a0"><i class="icon-stop"></i> <span class="i-name">icon-stop</span><span class="i-code">0x25a0</span></li><li title="Code: 0x2389"><i class="icon-pause"></i> <span class="i-name">icon-pause</span><span class="i-code">0x2389</span></li><li title="Code: 0x26ab"><i class="icon-record"></i> <span class="i-name">icon-record</span><span class="i-code">0x26ab</span></li><li title="Code: 0x23ed"><i class="icon-to-end"></i> <span class="i-name">icon-to-end</span><span class="i-code">0x23ed</span></li><li title="Code: 0x23ee"><i class="icon-to-start"></i> <span class="i-name">icon-to-start</span><span class="i-code">0x23ee</span></li><li title="Code: 0x23e9"><i class="icon-fast-forward"></i> <span class="i-name">icon-fast-forward</span><span class="i-code">0x23e9</span></li><li title="Code: 0x23ea"><i class="icon-fast-backward"></i> <span class="i-name">icon-fast-backward</span><span class="i-code">0x23ea</span></li><li title="Code: 0xe768"><i class="icon-progress-0"></i> <span class="i-name">icon-progress-0</span><span class="i-code">0xe768</span></li><li title="Code: 0xe769"><i class="icon-progress-1"></i> <span class="i-name">icon-progress-1</span><span class="i-code">0xe769</span></li><li title="Code: 0xe76a"><i class="icon-progress-2"></i> <span class="i-name">icon-progress-2</span><span class="i-code">0xe76a</span></li><li title="Code: 0xe76b"><i class="icon-progress-3"></i> <span class="i-name">icon-progress-3</span><span class="i-code">0xe76b</span></li><li title="Code: 0x1f3af"><i class="icon-target"></i> <span class="i-name">icon-target</span><span class="i-code">0x1f3af</span></li><li title="Code: 0x1f3a8"><i class="icon-palette"></i> <span class="i-name">icon-palette</span><span class="i-code">0x1f3a8</span></li><li title="Code: 0xe005"><i class="icon-list"></i> <span class="i-name">icon-list</span><span class="i-code">0xe005</span></li><li title="Code: 0xe003"><i class="icon-list-add"></i> <span class="i-name">icon-list-add</span><span class="i-code">0xe003</span></li><li title="Code: 0x1f4f6"><i class="icon-signal"></i> <span class="i-name">icon-signal</span><span class="i-code">0x1f4f6</span></li><li title="Code: 0x1f3c6"><i class="icon-trophy"></i> <span class="i-name">icon-trophy</span><span class="i-code">0x1f3c6</span></li><li title="Code: 0x1f50b"><i class="icon-battery"></i> <span class="i-name">icon-battery</span><span class="i-code">0x1f50b</span></li><li title="Code: 0xe771"><i class="icon-back-in-time"></i> <span class="i-name">icon-back-in-time</span><span class="i-code">0xe771</span></li><li title="Code: 0x1f4bb"><i class="icon-monitor"></i> <span class="i-name">icon-monitor</span><span class="i-code">0x1f4bb</span></li><li title="Code: 0x1f4f1"><i class="icon-mobile"></i> <span class="i-name">icon-mobile</span><span class="i-code">0x1f4f1</span></li><li title="Code: 0xe776"><i class="icon-network"></i> <span class="i-name">icon-network</span><span class="i-code">0xe776</span></li><li title="Code: 0x1f4bf"><i class="icon-cd"></i> <span class="i-name">icon-cd</span><span class="i-code">0x1f4bf</span></li><li title="Code: 0xe777"><i class="icon-inbox"></i> <span class="i-name">icon-inbox</span><span class="i-code">0xe777</span></li><li title="Code: 0xe778"><i class="icon-install"></i> <span class="i-name">icon-install</span><span class="i-code">0xe778</span></li><li title="Code: 0x1f30e"><i class="icon-globe"></i> <span class="i-name">icon-globe</span><span class="i-code">0x1f30e</span></li><li title="Code: 0x2601"><i class="icon-cloud"></i> <span class="i-name">icon-cloud</span><span class="i-code">0x2601</span></li><li title="Code: 0x26c8"><i class="icon-cloud-thunder"></i> <span class="i-name">icon-cloud-thunder</span><span class="i-code">0x26c8</span></li><li title="Code: 0x26a1"><i class="icon-flash"></i> <span class="i-name">icon-flash</span><span class="i-code">0x26a1</span></li><li title="Code: 0x263d"><i class="icon-moon"></i> <span class="i-name">icon-moon</span><span class="i-code">0x263d</span></li><li title="Code: 0x2708"><i class="icon-flight"></i> <span class="i-name">icon-flight</span><span class="i-code">0x2708</span></li><li title="Code: 0xe79b"><i class="icon-paper-plane"></i> <span class="i-name">icon-paper-plane</span><span class="i-code">0xe79b</span></li><li title="Code: 0x1f342"><i class="icon-leaf"></i> <span class="i-name">icon-leaf</span><span class="i-code">0x1f342</span></li><li title="Code: 0xe788"><i class="icon-lifebuoy"></i> <span class="i-name">icon-lifebuoy</span><span class="i-code">0xe788</span></li><li title="Code: 0xe789"><i class="icon-mouse"></i> <span class="i-name">icon-mouse</span><span class="i-code">0xe789</span></li><li title="Code: 0x1f4bc"><i class="icon-briefcase"></i> <span class="i-name">icon-briefcase</span><span class="i-code">0x1f4bc</span></li><li title="Code: 0xe78e"><i class="icon-suitcase"></i> <span class="i-name">icon-suitcase</span><span class="i-code">0xe78e</span></li><li title="Code: 0xe78b"><i class="icon-dot"></i> <span class="i-name">icon-dot</span><span class="i-code">0xe78b</span></li><li title="Code: 0xe78c"><i class="icon-dot-2"></i> <span class="i-name">icon-dot-2</span><span class="i-code">0xe78c</span></li><li title="Code: 0xe78d"><i class="icon-dot-3"></i> <span class="i-name">icon-dot-3</span><span class="i-code">0xe78d</span></li><li title="Code: 0xe79a"><i class="icon-brush"></i> <span class="i-name">icon-brush</span><span class="i-code">0xe79a</span></li><li title="Code: 0xe7a1"><i class="icon-magnet"></i> <span class="i-name">icon-magnet</span><span class="i-code">0xe7a1</span></li><li title="Code: 0x221e"><i class="icon-infinity"></i> <span class="i-name">icon-infinity</span><span class="i-code">0x221e</span></li><li title="Code: 0x232b"><i class="icon-erase"></i> <span class="i-name">icon-erase</span><span class="i-code">0x232b</span></li><li title="Code: 0xe751"><i class="icon-chart-pie"></i> <span class="i-name">icon-chart-pie</span><span class="i-code">0xe751</span></li><li title="Code: 0x1f4c8"><i class="icon-chart-line"></i> <span class="i-name">icon-chart-line</span><span class="i-code">0x1f4c8</span></li><li title="Code: 0x1f4ca"><i class="icon-chart-bar"></i> <span class="i-name">icon-chart-bar</span><span class="i-code">0x1f4ca</span></li><li title="Code: 0x1f53e"><i class="icon-chart-area"></i> <span class="i-name">icon-chart-area</span><span class="i-code">0x1f53e</span></li><li title="Code: 0x2707"><i class="icon-tape"></i> <span class="i-name">icon-tape</span><span class="i-code">0x2707</span></li><li title="Code: 0x1f393"><i class="icon-graduation-cap"></i> <span class="i-name">icon-graduation-cap</span><span class="i-code">0x1f393</span></li><li title="Code: 0xe752"><i class="icon-language"></i> <span class="i-name">icon-language</span><span class="i-code">0xe752</span></li><li title="Code: 0x1f3ab"><i class="icon-ticket"></i> <span class="i-name">icon-ticket</span><span class="i-code">0x1f3ab</span></li><li title="Code: 0x1f4a6"><i class="icon-water"></i> <span class="i-name">icon-water</span><span class="i-code">0x1f4a6</span></li><li title="Code: 0x1f4a7"><i class="icon-droplet"></i> <span class="i-name">icon-droplet</span><span class="i-code">0x1f4a7</span></li><li title="Code: 0xe753"><i class="icon-air"></i> <span class="i-name">icon-air</span><span class="i-code">0xe753</span></li><li title="Code: 0x1f4b3"><i class="icon-credit-card"></i> <span class="i-name">icon-credit-card</span><span class="i-code">0x1f4b3</span></li><li title="Code: 0x1f4be"><i class="icon-floppy"></i> <span class="i-name">icon-floppy</span><span class="i-code">0x1f4be</span></li><li title="Code: 0x1f4cb"><i class="icon-clipboard"></i> <span class="i-name">icon-clipboard</span><span class="i-code">0x1f4cb</span></li><li title="Code: 0x1f4e3"><i class="icon-megaphone"></i> <span class="i-name">icon-megaphone</span><span class="i-code">0x1f4e3</span></li><li title="Code: 0xe754"><i class="icon-database"></i> <span class="i-name">icon-database</span><span class="i-code">0xe754</span></li><li title="Code: 0xe755"><i class="icon-drive"></i> <span class="i-name">icon-drive</span><span class="i-code">0xe755</span></li></ul></div><div class="span3"><ul class="the-icons unstyled"><li title="Code: 0xe756"><i class="icon-bucket"></i> <span class="i-name">icon-bucket</span><span class="i-code">0xe756</span></li><li title="Code: 0xe757"><i class="icon-thermometer"></i> <span class="i-name">icon-thermometer</span><span class="i-code">0xe757</span></li><li title="Code: 0x1f511"><i class="icon-key"></i> <span class="i-name">icon-key</span><span class="i-code">0x1f511</span></li><li title="Code: 0xe790"><i class="icon-flow-cascade"></i> <span class="i-name">icon-flow-cascade</span><span class="i-code">0xe790</span></li><li title="Code: 0xe791"><i class="icon-flow-branch"></i> <span class="i-name">icon-flow-branch</span><span class="i-code">0xe791</span></li><li title="Code: 0xe792"><i class="icon-flow-tree"></i> <span class="i-name">icon-flow-tree</span><span class="i-code">0xe792</span></li><li title="Code: 0xe793"><i class="icon-flow-line"></i> <span class="i-name">icon-flow-line</span><span class="i-code">0xe793</span></li><li title="Code: 0xe794"><i class="icon-flow-parallel"></i> <span class="i-name">icon-flow-parallel</span><span class="i-code">0xe794</span></li><li title="Code: 0x1f680"><i class="icon-rocket"></i> <span class="i-name">icon-rocket</span><span class="i-code">0x1f680</span></li><li title="Code: 0xe7a2"><i class="icon-gauge"></i> <span class="i-name">icon-gauge</span><span class="i-code">0xe7a2</span></li><li title="Code: 0xe7a3"><i class="icon-traffic-cone"></i> <span class="i-name">icon-traffic-cone</span><span class="i-code">0xe7a3</span></li><li title="Code: 0xe7a5"><i class="icon-cc"></i> <span class="i-name">icon-cc</span><span class="i-code">0xe7a5</span></li><li title="Code: 0xe7a6"><i class="icon-cc-by"></i> <span class="i-name">icon-cc-by</span><span class="i-code">0xe7a6</span></li><li title="Code: 0xe7a7"><i class="icon-cc-nc"></i> <span class="i-name">icon-cc-nc</span><span class="i-code">0xe7a7</span></li><li title="Code: 0xe7a8"><i class="icon-cc-nc-eu"></i> <span class="i-name">icon-cc-nc-eu</span><span class="i-code">0xe7a8</span></li><li title="Code: 0xe7a9"><i class="icon-cc-nc-jp"></i> <span class="i-name">icon-cc-nc-jp</span><span class="i-code">0xe7a9</span></li><li title="Code: 0xe7aa"><i class="icon-cc-sa"></i> <span class="i-name">icon-cc-sa</span><span class="i-code">0xe7aa</span></li><li title="Code: 0xe7ab"><i class="icon-cc-nd"></i> <span class="i-name">icon-cc-nd</span><span class="i-code">0xe7ab</span></li><li title="Code: 0xe7ac"><i class="icon-cc-pd"></i> <span class="i-name">icon-cc-pd</span><span class="i-code">0xe7ac</span></li><li title="Code: 0xe7ad"><i class="icon-cc-zero"></i> <span class="i-name">icon-cc-zero</span><span class="i-code">0xe7ad</span></li><li title="Code: 0xe7ae"><i class="icon-cc-share"></i> <span class="i-name">icon-cc-share</span><span class="i-code">0xe7ae</span></li><li title="Code: 0xe7af"><i class="icon-cc-remix"></i> <span class="i-name">icon-cc-remix</span><span class="i-code">0xe7af</span></li><li title="Code: 0xf300"><i class="icon-github"></i> <span class="i-name">icon-github</span><span class="i-code">0xf300</span></li><li title="Code: 0xf301"><i class="icon-github-circled"></i> <span class="i-name">icon-github-circled</span><span class="i-code">0xf301</span></li><li title="Code: 0xf303"><i class="icon-flickr"></i> <span class="i-name">icon-flickr</span><span class="i-code">0xf303</span></li><li title="Code: 0xf304"><i class="icon-flickr-circled"></i> <span class="i-name">icon-flickr-circled</span><span class="i-code">0xf304</span></li><li title="Code: 0xf306"><i class="icon-vimeo"></i> <span class="i-name">icon-vimeo</span><span class="i-code">0xf306</span></li><li title="Code: 0xf307"><i class="icon-vimeo-circled"></i> <span class="i-name">icon-vimeo-circled</span><span class="i-code">0xf307</span></li><li title="Code: 0xf309"><i class="icon-twitter"></i> <span class="i-name">icon-twitter</span><span class="i-code">0xf309</span></li><li title="Code: 0xf30a"><i class="icon-twitter-circled"></i> <span class="i-name">icon-twitter-circled</span><span class="i-code">0xf30a</span></li><li title="Code: 0xf30c"><i class="icon-facebook"></i> <span class="i-name">icon-facebook</span><span class="i-code">0xf30c</span></li><li title="Code: 0xf30d"><i class="icon-facebook-circled"></i> <span class="i-name">icon-facebook-circled</span><span class="i-code">0xf30d</span></li><li title="Code: 0xf30e"><i class="icon-facebook-squared"></i> <span class="i-name">icon-facebook-squared</span><span class="i-code">0xf30e</span></li><li title="Code: 0xf30f"><i class="icon-gplus"></i> <span class="i-name">icon-gplus</span><span class="i-code">0xf30f</span></li><li title="Code: 0xf310"><i class="icon-gplus-circled"></i> <span class="i-name">icon-gplus-circled</span><span class="i-code">0xf310</span></li><li title="Code: 0xf312"><i class="icon-pinterest"></i> <span class="i-name">icon-pinterest</span><span class="i-code">0xf312</span></li><li title="Code: 0xf313"><i class="icon-pinterest-circled"></i> <span class="i-name">icon-pinterest-circled</span><span class="i-code">0xf313</span></li><li title="Code: 0xf315"><i class="icon-tumblr"></i> <span class="i-name">icon-tumblr</span><span class="i-code">0xf315</span></li><li title="Code: 0xf316"><i class="icon-tumblr-circled"></i> <span class="i-name">icon-tumblr-circled</span><span class="i-code">0xf316</span></li><li title="Code: 0xf318"><i class="icon-linkedin"></i> <span class="i-name">icon-linkedin</span><span class="i-code">0xf318</span></li><li title="Code: 0xf319"><i class="icon-linkedin-circled"></i> <span class="i-name">icon-linkedin-circled</span><span class="i-code">0xf319</span></li><li title="Code: 0xf31b"><i class="icon-dribbble"></i> <span class="i-name">icon-dribbble</span><span class="i-code">0xf31b</span></li><li title="Code: 0xf31c"><i class="icon-dribbble-circled"></i> <span class="i-name">icon-dribbble-circled</span><span class="i-code">0xf31c</span></li><li title="Code: 0xf31e"><i class="icon-stumbleupon"></i> <span class="i-name">icon-stumbleupon</span><span class="i-code">0xf31e</span></li><li title="Code: 0xf31f"><i class="icon-stumbleupon-circled"></i> <span class="i-name">icon-stumbleupon-circled</span><span class="i-code">0xf31f</span></li><li title="Code: 0xf321"><i class="icon-lastfm"></i> <span class="i-name">icon-lastfm</span><span class="i-code">0xf321</span></li><li title="Code: 0xf322"><i class="icon-lastfm-circled"></i> <span class="i-name">icon-lastfm-circled</span><span class="i-code">0xf322</span></li><li title="Code: 0xf324"><i class="icon-rdio"></i> <span class="i-name">icon-rdio</span><span class="i-code">0xf324</span></li><li title="Code: 0xf325"><i class="icon-rdio-circled"></i> <span class="i-name">icon-rdio-circled</span><span class="i-code">0xf325</span></li><li title="Code: 0xf327"><i class="icon-spotify"></i> <span class="i-name">icon-spotify</span><span class="i-code">0xf327</span></li><li title="Code: 0xf328"><i class="icon-spotify-circled"></i> <span class="i-name">icon-spotify-circled</span><span class="i-code">0xf328</span></li><li title="Code: 0xf32a"><i class="icon-qq"></i> <span class="i-name">icon-qq</span><span class="i-code">0xf32a</span></li><li title="Code: 0xf32d"><i class="icon-instagrem"></i> <span class="i-name">icon-instagrem</span><span class="i-code">0xf32d</span></li><li title="Code: 0xf330"><i class="icon-dropbox"></i> <span class="i-name">icon-dropbox</span><span class="i-code">0xf330</span></li><li title="Code: 0xf333"><i class="icon-evernote"></i> <span class="i-name">icon-evernote</span><span class="i-code">0xf333</span></li><li title="Code: 0xf336"><i class="icon-flattr"></i> <span class="i-name">icon-flattr</span><span class="i-code">0xf336</span></li><li title="Code: 0xf339"><i class="icon-skype"></i> <span class="i-name">icon-skype</span><span class="i-code">0xf339</span></li><li title="Code: 0xf33a"><i class="icon-skype-circled"></i> <span class="i-name">icon-skype-circled</span><span class="i-code">0xf33a</span></li><li title="Code: 0xf33c"><i class="icon-renren"></i> <span class="i-name">icon-renren</span><span class="i-code">0xf33c</span></li><li title="Code: 0xf33f"><i class="icon-sina-weibo"></i> <span class="i-name">icon-sina-weibo</span><span class="i-code">0xf33f</span></li><li title="Code: 0xf342"><i class="icon-paypal"></i> <span class="i-name">icon-paypal</span><span class="i-code">0xf342</span></li><li title="Code: 0xf345"><i class="icon-picasa"></i> <span class="i-name">icon-picasa</span><span class="i-code">0xf345</span></li><li title="Code: 0xf348"><i class="icon-soundcloud"></i> <span class="i-name">icon-soundcloud</span><span class="i-code">0xf348</span></li><li title="Code: 0xf34b"><i class="icon-mixi"></i> <span class="i-name">icon-mixi</span><span class="i-code">0xf34b</span></li><li title="Code: 0xf34e"><i class="icon-behance"></i> <span class="i-name">icon-behance</span><span class="i-code">0xf34e</span></li><li title="Code: 0xf351"><i class="icon-google-circles"></i> <span class="i-name">icon-google-circles</span><span class="i-code">0xf351</span></li><li title="Code: 0xf354"><i class="icon-vkontakte"></i> <span class="i-name">icon-vkontakte</span><span class="i-code">0xf354</span></li><li title="Code: 0xf357"><i class="icon-smashing"></i> <span class="i-name">icon-smashing</span><span class="i-code">0xf357</span></li><li title="Code: 0xf601"><i class="icon-sweden"></i> <span class="i-name">icon-sweden</span><span class="i-code">0xf601</span></li><li title="Code: 0xf600"><i class="icon-db-shape"></i> <span class="i-name">icon-db-shape</span><span class="i-code">0xf600</span></li><li title="Code: 0xf603"><i class="icon-logo-db"></i> <span class="i-name">icon-logo-db</span><span class="i-code">0xf603</span></li></ul></div></div></div>
									
								</div> <!-- /section: icons -->
								
								<div id="misc" class="section">
									
									<h2 class="section-heading">Alerts<span class="helper"></span></h2>
									
									<div class="alert">
										<p><i class="icon-info"></i> <strong>Heads up!</strong> This alert needs your attention, but it's not super important.</p>
									</div>
									
									<div class="alert success">
										<p><i class="icon-check"></i> <strong>Well done!</strong> You successfully read this important alert message.</p>
									</div>
									
									<div class="alert error">
										<p><i class="icon-cancel-circled"></i> <strong>Oh snap!</strong> Change a few things up and try submitting again.</p>
									</div>
									
									<h2 class="section-heading">Color scheme<span class="helper"></span></h2>
									
									<div class="color-scheme">
										<div class="bgColorDarker"></div>
										<div class="textColor"></div>
										<div class="secondaryBgColor"></div>
										<div class="secondaryColor"></div>
										<div class="tertriaryBgColor"></div>
										<div class="tertriaryColor"></div>
									</div>
									
								</div> <!-- /section: misc -->
								
							</div> <!-- /filter-panes -->
				
						</div>
					</div>
				</div>
			
			 <!-- /main-content -->
			
			 <!-- /content-footer -->
		
			</div> <!-- /container -->
			
			<div class="clearfix"></div>
			
			<footer id="footer" class="visible">
				<ul class="elsewhere">
					<li><a href="https://twitter.com/lebensform_me"><i class="icon-twitter"></i> Follow me on Twitter</a></li>
					<li><a href="http://dribbble.com/Nazcain"><i class="icon-dribbble"></i> Find me on Dribbble</a></li>
					<li><a href="http://themeforest.net/item/humanum-responsive-vcard-template/5230208?ref=Lebensform"><i class="icon-basket"></i> Buy this template</a></li>
				</ul>
				<p>There is also a <strong>footer</strong> in case you need it. You can easily remove it though.</p>
			</footer> <!-- /footer -->
				
			<!-- JavaScript -->
			<?php /*
			<script async="" src="//www.google-analytics.com/analytics.js"></script>
			<script src="resources/js/jquery.min.js"></script>
			<script src="resources/js/parsley.min.js"></script>
			<script src="resources/js/jquery.backstretch.min.js"></script>
			<script src="resources/js/jquery.cycle2.min.js"></script>
			<script src="resources/js/jquery.cycle2.swipe.min.js"></script>
			<script src="resources/js/jquery.tooltipster.min.js"></script>
			<script src="resources/js/jquery.mixitup.min.js"></script>
			<script src="resources/js/jquery.magnific-popup.min.js"></script>
			<script src="resources/js/jquery.placeholder.min.js"></script>
			<script src="resources/js/twitter-fetcher.min.js"></script>
			<script src="resources/js/scripts.js"></script>
			*/
			?>
			
			<script>
				var siteConfigs = {
					csrf: '<?=session_id();?>',
					uid: <?=$_SESSION[$session_key]->id;?>,
					url: {
						base: '<?=$_url('');?>'
					}
				};
			</script>
			<script src="<?=$_url('vendor/script.js');?>"></script>
			<script src="<?=$_url('loader.js');?>"></script>
			
			<!-- Icon Fonts: Entypo -->
			<link rel="stylesheet" href="<?=$_url('resources/css/icons.css');?>">
			<!-- Google Fonts: Lato -->
			<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		</div>
		
	</body>
</html>
