
<!DOCTYPE html>

<html class="no-js" lang="en-US">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		
	<!-- This site is optimized with the Yoast SEO plugin v16.4 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Laravel Cheat Sheet - Simple Cheat Sheet for Laravel</title>
	<meta name="description" content="Laravel Cheat Sheet for creating web apps with the Laravel framework using the PHP language. This cheat sheet to help you using Laravel." />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://simplecheatsheet.com/tag/laravel-cheat-sheet/" />
	<link rel="next" href="https://simplecheatsheet.com/tag/laravel-cheat-sheet/page/2/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Laravel Cheat Sheet - Simple Cheat Sheet for Laravel" />
	<meta property="og:description" content="Laravel Cheat Sheet for creating web apps with the Laravel framework using the PHP language. This cheat sheet to help you using Laravel." />
	<meta property="og:url" content="https://simplecheatsheet.com/tag/laravel-cheat-sheet/" />
	<meta property="og:site_name" content="Simple Cheat Sheet" />
	<meta property="og:image" content="http://simplecheatsheet.com/wp-content/uploads/2020/07/Bánh-Donut-Đỏ-Mùa-hè-Sóng-điện-Màu-phấn-Cá-tính-Thuyết-trình.png" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://simplecheatsheet.com/#website","url":"https://simplecheatsheet.com/","name":"Simple Cheat Sheet","description":"Free Cheat Sheets","potentialAction":[{"@type":"SearchAction","target":"https://simplecheatsheet.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"CollectionPage","@id":"https://simplecheatsheet.com/tag/laravel-cheat-sheet/#webpage","url":"https://simplecheatsheet.com/tag/laravel-cheat-sheet/","name":"Laravel Cheat Sheet - Simple Cheat Sheet for Laravel","isPartOf":{"@id":"https://simplecheatsheet.com/#website"},"description":"Laravel Cheat Sheet for creating web apps with the Laravel framework using the PHP language. This cheat sheet to help you using Laravel.","breadcrumb":{"@id":"https://simplecheatsheet.com/tag/laravel-cheat-sheet/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://simplecheatsheet.com/tag/laravel-cheat-sheet/"]}]},{"@type":"BreadcrumbList","@id":"https://simplecheatsheet.com/tag/laravel-cheat-sheet/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://simplecheatsheet.com/","url":"https://simplecheatsheet.com/","name":"Home"}},{"@type":"ListItem","position":2,"item":{"@id":"https://simplecheatsheet.com/tag/laravel-cheat-sheet/#webpage"}}]}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Simple Cheat Sheet &raquo; Feed" href="https://simplecheatsheet.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Simple Cheat Sheet &raquo; Comments Feed" href="https://simplecheatsheet.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Simple Cheat Sheet &raquo; Laravel Cheat Sheet Tag Feed" href="https://simplecheatsheet.com/tag/laravel-cheat-sheet/feed/" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/simplecheatsheet.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6.4"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://simplecheatsheet.com/wp-includes/css/dist/block-library/style.min.css?ver=5.6.4' media='all' />
<style id='wp-block-library-inline-css'>
.has-text-align-justify{text-align:justify;}
</style>
<link rel='stylesheet' id='menu-image-css'  href='https://simplecheatsheet.com/wp-content/plugins/menu-image/includes/css/menu-image.css?ver=3.0.4' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='https://simplecheatsheet.com/wp-includes/css/dashicons.min.css?ver=5.6.4' media='all' />
<link rel='stylesheet' id='taxonomymanager-css'  href='https://simplecheatsheet.com/wp-content/plugins/taxonomy-thumbnail-widget/css/taxonomymanager.css?ver=5.6.4' media='all' />
<link rel='stylesheet' id='ez-icomoon-css'  href='https://simplecheatsheet.com/wp-content/plugins/easy-table-of-contents/vendor/icomoon/style.min.css?ver=2.0.17' media='all' />
<link rel='stylesheet' id='ez-toc-css'  href='https://simplecheatsheet.com/wp-content/plugins/easy-table-of-contents/assets/css/screen.min.css?ver=2.0.17' media='all' />
<style id='ez-toc-inline-css'>
div#ez-toc-container p.ez-toc-title {font-size: 120%;}div#ez-toc-container p.ez-toc-title {font-weight: 500;}div#ez-toc-container ul li {font-size: 95%;}div#ez-toc-container {width: 100%;}
</style>
<link rel='stylesheet' id='twentytwenty-style-css'  href='https://simplecheatsheet.com/wp-content/themes/simplecheatsheet/style.css?ver=1.0.0' media='all' />
<style id='twentytwenty-style-inline-css'>
.color-accent,.color-accent-hover:hover,.color-accent-hover:focus,:root .has-accent-color,.has-drop-cap:not(:focus):first-letter,.wp-block-button.is-style-outline,a { color: #e22658; }blockquote,.border-color-accent,.border-color-accent-hover:hover,.border-color-accent-hover:focus { border-color: #e22658; }button,.button,.faux-button,.wp-block-button__link,.wp-block-file .wp-block-file__button,input[type="button"],input[type="reset"],input[type="submit"],.bg-accent,.bg-accent-hover:hover,.bg-accent-hover:focus,:root .has-accent-background-color,.comment-reply-link { background-color: #e22658; }.fill-children-accent,.fill-children-accent * { fill: #e22658; }:root .has-background-color,button,.button,.faux-button,.wp-block-button__link,.wp-block-file__button,input[type="button"],input[type="reset"],input[type="submit"],.wp-block-button,.comment-reply-link,.has-background.has-primary-background-color:not(.has-text-color),.has-background.has-primary-background-color *:not(.has-text-color),.has-background.has-accent-background-color:not(.has-text-color),.has-background.has-accent-background-color *:not(.has-text-color) { color: #ffffff; }:root .has-background-background-color { background-color: #ffffff; }body,.entry-title a,:root .has-primary-color { color: #000000; }:root .has-primary-background-color { background-color: #000000; }cite,figcaption,.wp-caption-text,.post-meta,.entry-content .wp-block-archives li,.entry-content .wp-block-categories li,.entry-content .wp-block-latest-posts li,.wp-block-latest-comments__comment-date,.wp-block-latest-posts__post-date,.wp-block-embed figcaption,.wp-block-image figcaption,.wp-block-pullquote cite,.comment-metadata,.comment-respond .comment-notes,.comment-respond .logged-in-as,.pagination .dots,.entry-content hr:not(.has-background),hr.styled-separator,:root .has-secondary-color { color: #6d6d6d; }:root .has-secondary-background-color { background-color: #6d6d6d; }pre,fieldset,input,textarea,table,table *,hr { border-color: #dbdbdb; }caption,code,code,kbd,samp,.wp-block-table.is-style-stripes tbody tr:nth-child(odd),:root .has-subtle-background-background-color { background-color: #dbdbdb; }.wp-block-table.is-style-stripes { border-bottom-color: #dbdbdb; }.wp-block-latest-posts.is-grid li { border-top-color: #dbdbdb; }:root .has-subtle-background-color { color: #dbdbdb; }body:not(.overlay-header) .primary-menu > li > a,body:not(.overlay-header) .primary-menu > li > .icon,.modal-menu a,.footer-menu a, .footer-widgets a,#site-footer .wp-block-button.is-style-outline,.wp-block-pullquote:before,.singular:not(.overlay-header) .entry-header a,.archive-header a,.header-footer-group .color-accent,.header-footer-group .color-accent-hover:hover { color: #cd2653; }.social-icons a,#site-footer button:not(.toggle),#site-footer .button,#site-footer .faux-button,#site-footer .wp-block-button__link,#site-footer .wp-block-file__button,#site-footer input[type="button"],#site-footer input[type="reset"],#site-footer input[type="submit"] { background-color: #cd2653; }.header-footer-group,body:not(.overlay-header) #site-header .toggle,.menu-modal .toggle { color: #000000; }body:not(.overlay-header) .primary-menu ul { background-color: #000000; }body:not(.overlay-header) .primary-menu > li > ul:after { border-bottom-color: #000000; }body:not(.overlay-header) .primary-menu ul ul:after { border-left-color: #000000; }.site-description,body:not(.overlay-header) .toggle-inner .toggle-text,.widget .post-date,.widget .rss-date,.widget_archive li,.widget_categories li,.widget cite,.widget_pages li,.widget_meta li,.widget_nav_menu li,.powered-by-wordpress,.to-the-top,.singular .entry-header .post-meta,.singular:not(.overlay-header) .entry-header .post-meta a { color: #6d6d6d; }.header-footer-group pre,.header-footer-group fieldset,.header-footer-group input,.header-footer-group textarea,.header-footer-group table,.header-footer-group table *,.footer-nav-widgets-wrapper,#site-footer,.menu-modal nav *,.footer-widgets-outer-wrapper,.footer-top { border-color: #dcd7ca; }.header-footer-group table caption,body:not(.overlay-header) .header-inner .toggle-wrapper::before { background-color: #dcd7ca; }
</style>
<link rel='stylesheet' id='twentytwenty-print-style-css'  href='https://simplecheatsheet.com/wp-content/themes/twentytwenty/print.css?ver=1.0.0' media='print' />
<link rel='stylesheet' id='twentytwenty-jetpack-css'  href='https://simplecheatsheet.com/wp-content/plugins/jetpack/modules/theme-tools/compat/twentytwenty.css?ver=9.8.1' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://simplecheatsheet.com/wp-content/plugins/jetpack/css/jetpack.css?ver=9.8.1' media='all' />
<script src='https://simplecheatsheet.com/wp-content/themes/twentytwenty/assets/js/index.js?ver=1.0.0' id='twentytwenty-js-js' async></script>
<link rel="https://api.w.org/" href="https://simplecheatsheet.com/wp-json/" /><link rel="alternate" type="application/json" href="https://simplecheatsheet.com/wp-json/wp/v2/tags/34" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://simplecheatsheet.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://simplecheatsheet.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.6.4" />
<style type='text/css'>img#wpstats{display:none}</style>
			<script>document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );</script>
	<style id="custom-background-css">
body.custom-background { background-color: #ffffff; }
</style>
	
	</head>

	<body class="archive tag tag-laravel-cheat-sheet tag-34 custom-background wp-embed-responsive enable-search-modal has-no-pagination showing-comments show-avatars footer-top-visible reduced-spacing">

<a class="skip-link screen-reader-text" href="#site-content">Skip to the content</a>
<header id="site-header" class="header-footer-group" role="banner">

	<!-- .header-inner -->

	<div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal">

<div class="search-modal-inner modal-inner">

<div class="section-inner">


	<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
		<span class="screen-reader-text">Close search</span>
		<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon></svg>			</button><!-- .search-toggle -->

</div><!-- .section-inner -->

</div><!-- .search-modal-inner -->

</div><!-- .menu-modal -->

</header><!-- #site-header -->


<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

<div class="menu-modal-inner modal-inner">

<div class="menu-wrapper section-inner">

	<div class="menu-top">

		<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
			<span class="toggle-text">Close Menu</span>
			<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon></svg>				</button><!-- .nav-toggle -->

		
			<nav class="mobile-menu" aria-label="Mobile" role="navigation">

				<ul class="modal-menu reset-list-style">

				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2455"><div class="ancestor-wrapper"><a href="https://cheatsheetmaker.com/">Cheat Sheet Maker</a></div><!-- .ancestor-wrapper --></li>

				</ul>

			</nav>

			
	</div><!-- .menu-top -->

	<div class="menu-bottom">

		
	</div><!-- .menu-bottom -->

</div><!-- .menu-wrapper -->

</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
<main id="site-content" role="main">


	<div class="container grid js-toc-content">
<div class="main-content">
	<header class="archive-header header-footer-group">
		<div class="archive-header-inner section-inner medium">
<h1 class="archive-title"><span class="color-accent">Tag:</span> <span>Laravel Cheat Sheet</span></h1>
													
<div class="archive-subtitle section-inner medium max-percentage intro-text">

<p><strong>Laravel Cheat Sheet </strong>is a cheat sheet for creating web apps with the Laravel framework using the PHP language. <strong><a href="https://en.wikipedia.org/wiki/Laravel" target="_blank" rel="noopener noreferrer">Laravel</a></strong> is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Most of the summaries and examples are based on the official documentation.</p>
</div>
							</div><!-- .archive-header-inner -->
	</header><!-- .archive-header -->
	
<article class="post-344 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-344">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-queue"><a href="https://simplecheatsheet.com/laravel-queue/">Laravel Queue</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Queue::push('SendMail', array('message' =&gt; $message));<br>Queue::push('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0251676c66476f636b6e4271676c66">[email&nbsp;protected]</a>', array('message' =&gt; $message));<br>Queue::push(function($job) use $id {});</pre>



<p>Same payload to multiple workers</p>



<pre class="wp-block-preformatted">Queue::bulk(array('SendEmail', 'NotifyUser'), $payload);</pre>



<p>Starting the queue listener</p>



<pre class="wp-block-preformatted">php artisan queue:listen<br>php artisan queue:listen connection<br>php artisan queue:listen --timeout=60</pre>



<p>Process only the first job on the queue</p>



<pre class="wp-block-preformatted">php artisan queue:work</pre>



<p>Start a queue worker in daemon mode</p>



<pre class="wp-block-preformatted">php artisan queue:work --daemon</pre>



<p>Create migration file for failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:failed-table</pre>



<p>Listing failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:failed</pre>



<p>Delete failed job by id</p>



<pre class="wp-block-preformatted">php artisan queue:forget 5</pre>



<p>Delete all failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:flush</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-342 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-342">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-redirect"><a href="https://simplecheatsheet.com/laravel-redirect/">Laravel Redirect</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">return Redirect::to('foo/bar');<br>return Redirect::to('foo/bar')-&gt;with('key', 'value');<br>return Redirect::to('foo/bar')-&gt;withInput(Input::get());<br>return Redirect::to('foo/bar')-&gt;withInput(Input::except('password'));<br>return Redirect::to('foo/bar')-&gt;withErrors($validator);</pre>



<p>Create a new redirect response to the previous location</p>



<pre class="wp-block-preformatted">return Redirect::back();</pre>



<p>Create a new redirect response to a named route</p>



<pre class="wp-block-preformatted">return Redirect::route('foobar');<br>return Redirect::route('foobar', array('value'));<br>return Redirect::route('foobar', array('key' =&gt; 'value'));</pre>



<p>Create a new redirect response to a controller action</p>



<pre class="wp-block-preformatted">return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fcba9393bf9392888e939090998ebc9592989984">[email&nbsp;protected]</a>');<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="db9db4b498b4b5afa9b4b7b7bea99bb9baa1">[email&nbsp;protected]</a>', array('value'));<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f5b39a9ab69a9b81879a99999087b597948f">[email&nbsp;protected]</a>', array('key' =&gt; 'value'));</pre>



<p>If intended redirect is not defined, defaults to foo/bar.</p>



<pre class="wp-block-preformatted">return Redirect::intended('foo/bar');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-348 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-348">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-route"><a href="https://simplecheatsheet.com/laravel-route/">Laravel Route</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Route::get('foo', function(){});
Route::get('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b1834352f293437373e29153a363e1b3d2e35382f323435">[email&nbsp;protected]</a>');
Route::controller('foo', 'FooController');</pre>



<h3>RESTful Controllers</h3>



<pre class="wp-block-preformatted">Route::resource('posts','PostsController');</pre>



<p>Specify a subset of actions to handle on the route</p>



<pre class="wp-block-preformatted">Route::resource('photo', 'PhotoController',['only' =&gt; ['index', 'show']]);
Route::resource('photo', 'PhotoController',['except' =&gt; ['update', 'destroy']]);</pre>



<h3>Triggering Errors</h3>



<pre class="wp-block-preformatted">App::abort(404);
$handler-&gt;missing(...) in ErrorServiceProvider::boot();
throw new NotFoundHttpException;</pre>



<h3>Route Parameters</h3>



<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){});
Route::get('foo/{bar?}', function($bar = 'bar'){});</pre>



<h3>HTTP Verbs</h3>



<pre class="wp-block-preformatted">Route::any('foo', function(){});
Route::post('foo', function(){});
Route::put('foo', function(){});
Route::patch('foo', function(){});
Route::delete('foo', function(){});</pre>



<p>RESTful actions</p>



<pre class="wp-block-preformatted">Route::resource('foo', 'FooController');</pre>



<p>Registering A Route For Multiple Verbs</p>



<pre class="wp-block-preformatted">Route::match(['get', 'post'], '/', function(){});</pre>



<h3>Secure Routes(TBD)</h3>



<pre class="wp-block-preformatted">Route::get('foo', array('https', function(){}));</pre>



<h3>Route Constraints</h3>



<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){})
-&gt;where('bar', '[0-9]+');
Route::get('foo/{bar}/{baz}', function($bar, $baz){})
-&gt;where(array('bar' =&gt; '[0-9]+', 'baz' =&gt; '[A-Za-z]'))</pre>



<p>Set a pattern to be used across routes</p>



<pre class="wp-block-preformatted">Route::pattern('bar', '[0-9]+')</pre>



<h3>HTTP Middleware</h3>



<p>Assigning Middleware To Routes</p>



<pre class="wp-block-preformatted">Route::get('admin/profile', ['middleware' =&gt; 'auth', function(){}]);</pre>



<h3>Named Routes</h3>



<pre class="wp-block-preformatted">Route::currentRouteName();
Route::get('foo/bar', array('as' =&gt; 'foobar', function(){}));
Route::get('user/profile', [
'as' =&gt; 'profile', 'uses' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e0b5938592a38f8e94928f8c8c8592a093888f97b0928f86898c85">[email&nbsp;protected]</a>'
]);
$url = route('profile');
$redirect = redirect()-&gt;route('profile');</pre>



<h3>Route Prefixing</h3>



<pre class="wp-block-preformatted">Route::group(['prefix' =&gt; 'admin'], function()
{
Route::get('users', function(){
return 'Matches The "/admin/users" URL';
});
});</pre>



<h3>Route Namespacing</h3>



<p>This route group will carry the namespace ‘Foo\Bar’</p>



<pre class="wp-block-preformatted">Route::group(array('namespace' =&gt; 'Foo\Bar'), function(){})</pre>



<h3>Sub-Domain Routing</h3>



<p><code>{sub}</code> will be passed to the closure</p>



<pre class="wp-block-preformatted">Route::group(array('domain' =&gt; '{sub}.example.com'), function(){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-346 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-346">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-config"><a href="https://simplecheatsheet.com/laravel-config/">Laravel Config</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Config::get('app.timezone');</pre>



<p>get with Default value</p>



<pre class="wp-block-preformatted">Config::get('app.timezone', 'UTC');</pre>



<p>set Configuration</p>



<pre class="wp-block-preformatted">Config::set('database.default', 'sqlite');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->
	<div class="ads">
		<!-- Responsive -->
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7014744652532083" data-ad-slot="2930178966" data-ad-format="auto" data-full-width-responsive="true"></ins>
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
							   
<article class="post-354 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-354">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-file"><a href="https://simplecheatsheet.com/laravel-file/">Laravel File</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">File::exists('path');<br>File::get('path');<br>File::getRemote('path');</pre>



<p>Get a file’s contents by requiring it</p>



<pre class="wp-block-preformatted">File::getRequire('path');</pre>



<p>Require the given file once</p>



<pre class="wp-block-preformatted">File::requireOnce('path');</pre>



<p>Write the contents of a file</p>



<pre class="wp-block-preformatted">File::put('path', 'contents');</pre>



<p>Append to a file</p>



<pre class="wp-block-preformatted">File::append('path', 'data');</pre>



<p>Delete the file at a given path</p>



<pre class="wp-block-preformatted">File::delete('path');</pre>



<p>Move a file to a new location</p>



<pre class="wp-block-preformatted">File::move('path', 'target');</pre>



<p>Copy a file to a new location</p>



<pre class="wp-block-preformatted">File::copy('path', 'target');</pre>



<p>Extract the file extension from a file path</p>



<pre class="wp-block-preformatted">File::extension('path');</pre>



<p>Get the file type of a given file</p>



<pre class="wp-block-preformatted">File::type('path');</pre>



<p>Get the file size of a given file</p>



<pre class="wp-block-preformatted">File::size('path');</pre>



<p>Get the file’s last modification time</p>



<pre class="wp-block-preformatted">File::lastModified('path');</pre>



<p>Determine if the given path is a directory</p>



<pre class="wp-block-preformatted">File::isDirectory('directory');</pre>



<p>Determine if the given path is writable</p>



<pre class="wp-block-preformatted">File::isWritable('path');</pre>



<p>Determine if the given path is a file</p>



<pre class="wp-block-preformatted">File::isFile('file');</pre>



<p>Find path names matching a given pattern.</p>



<pre class="wp-block-preformatted">File::glob($patterns, $flag);</pre>



<p>Get an array of all files in a directory.</p>



<pre class="wp-block-preformatted">File::files('directory');</pre>



<p>Get all of the files from the given directory (recursive).</p>



<pre class="wp-block-preformatted">File::allFiles('directory');</pre>



<p>Get all of the directories within a given directory.</p>



<pre class="wp-block-preformatted">File::directories('directory');</pre>



<p>Create a directory</p>



<pre class="wp-block-preformatted">File::makeDirectory('path', $mode = 0777, $recursive = false);</pre>



<p>Copy a directory from one location to another</p>



<pre class="wp-block-preformatted">File::copyDirectory('directory', 'destination', $options = null);</pre>



<p>Recursively delete a directory</p>



<pre class="wp-block-preformatted">File::deleteDirectory('directory', $preserve = false);</pre>



<p>Empty the specified directory of all files and folders</p>



<pre class="wp-block-preformatted">File::cleanDirectory('directory');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-352 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-352">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="lang"><a href="https://simplecheatsheet.com/lang/">Lang</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">App::setLocale('en');
Lang::get('messages.welcome');
Lang::get('messages.welcome', array('foo' =&gt; 'Bar'));
Lang::has('messages.welcome');
Lang::choice('messages.apples', 10);</pre>



<p>Lang::get alias</p>



<pre class="wp-block-preformatted">trans('messages.welcome');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-380 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-380">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-ssh"><a href="https://simplecheatsheet.com/laravel-ssh/">Laravel SSH</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>Executing Commands</p>



<pre class="wp-block-preformatted">SSH::run(array $commands);
SSH::into($remote)-&gt;run(array $commands); </pre>



<p>specify remote, otherwise assumes default</p>



<pre class="wp-block-preformatted">SSH::run(array $commands, function($line)
{
echo $line.PHP_EOL;
});</pre>



<h3>Tasks</h3>



<p>define</p>



<pre class="wp-block-preformatted">SSH::define($taskName, array $commands);</pre>



<p>execute</p>



<pre class="wp-block-preformatted">SSH::task($taskName, function($line)
{
echo $line.PHP_EOL;
});</pre>



<h3>SFTP Uploads</h3>



<pre class="wp-block-preformatted">SSH::put($localFile, $remotePath);
SSH::putString($string, $remotePath);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-382 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-382">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-cache"><a href="https://simplecheatsheet.com/laravel-cache/">Laravel Cache</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Cache::put('key', 'value', $minutes);<br>Cache::add('key', 'value', $minutes);<br>Cache::forever('key', 'value');<br>Cache::remember('key', $minutes, function(){ return 'value' });<br>Cache::rememberForever('key', function(){ return 'value' });<br>Cache::forget('key');<br>Cache::has('key');<br>Cache::get('key');<br>Cache::get('key', 'default');<br>Cache::get('key', function(){ return 'default'; });<br>Cache::tags('my-tag')-&gt;put('key','value', $minutes);<br>Cache::tags('my-tag')-&gt;has('key');<br>Cache::tags('my-tag')-&gt;get('key');<br>Cache::tags('my-tag')-&gt;forget('key');<br>Cache::tags('my-tag')-&gt;flush();<br>Cache::increment('key');<br>Cache::increment('key', $amount);<br>Cache::decrement('key');<br>Cache::decrement('key', $amount);<br>Cache::section('group')-&gt;put('key', $value);<br>Cache::section('group')-&gt;get('key');<br>Cache::section('group')-&gt;flush();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-376 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-376">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-html"><a href="https://simplecheatsheet.com/laravel-html/">Laravel HTML</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">HTML::macro('name', function(){});</pre>



<p>Convert an HTML string to entities</p>



<pre class="wp-block-preformatted">HTML::entities($value);</pre>



<p>Convert entities to HTML characters</p>



<pre class="wp-block-preformatted">HTML::decode($value);</pre>



<p>Generate a link to a JavaScript file</p>



<pre class="wp-block-preformatted">HTML::script($url, $attributes);</pre>



<p>Generate a link to a CSS file</p>



<pre class="wp-block-preformatted">HTML::style($url, $attributes);</pre>



<p>Generate an HTML image element</p>



<pre class="wp-block-preformatted">HTML::image($url, $alt, $attributes);</pre>



<p>Generate a HTML link</p>



<pre class="wp-block-preformatted">HTML::link($url, 'title', $attributes, $secure);</pre>



<p>Generate a HTTPS HTML link</p>



<pre class="wp-block-preformatted">HTML::secureLink($url, 'title', $attributes);</pre>



<p>Generate a HTML link to an asset</p>



<pre class="wp-block-preformatted">HTML::linkAsset($url, 'title', $attributes, $secure);</pre>



<p>Generate a HTTPS HTML link to an asset</p>



<pre class="wp-block-preformatted">HTML::linkSecureAsset($url, 'title', $attributes);</pre>



<p>Generate a HTML link to a named route</p>



<pre class="wp-block-preformatted">HTML::linkRoute($name, 'title', $parameters, $attributes);</pre>



<p>Generate a HTML link to a controller action</p>



<pre class="wp-block-preformatted">HTML::linkAction($action, 'title', $parameters, $attributes);</pre>



<p>Generate a HTML link to an email address</p>



<pre class="wp-block-preformatted">HTML::mailto($email, 'title', $attributes);</pre>



<p>Obfuscate an e-mail address to prevent spam-bots from sniffing it</p>



<pre class="wp-block-preformatted">HTML::email($email);</pre>



<p>Generate an ordered list of items</p>



<pre class="wp-block-preformatted">HTML::ol($list, $attributes);</pre>



<p>Generate an un-ordered list of items</p>



<pre class="wp-block-preformatted">HTML::ul($list, $attributes);</pre>



<p>Create a listing HTML element</p>



<pre class="wp-block-preformatted">HTML::listing($type, $list, $attributes);</pre>



<p>Create the HTML for a listing element</p>



<pre class="wp-block-preformatted">HTML::listingElement($key, $type, $value);</pre>



<p>Create the HTML for a nested listing attribute</p>



<pre class="wp-block-preformatted">HTML::nestedListing($key, $type, $value);</pre>



<p>Build an HTML attribute string from an array</p>



<pre class="wp-block-preformatted">HTML::attributes($attributes);</pre>



<p>Build a single attribute element</p>



<pre class="wp-block-preformatted">HTML::attributeElement($key, $value);</pre>



<p>Obfuscate a string to prevent spam-bots from sniffing it</p>



<pre class="wp-block-preformatted">HTML::obfuscate($value);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-378 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-378">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-model"><a href="https://simplecheatsheet.com/laravel-model/">Laravel Model</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Basic Usage</h3>



<p>Defining An Eloquent Model</p>



<pre class="wp-block-preformatted">class User extends Model {}</pre>



<p>generate Eloquent models</p>



<pre class="wp-block-preformatted">php artisan make:model User</pre>



<p>specify a custom table name</p>



<pre class="wp-block-preformatted">class User extends Model {
protected $table = 'my_users';
}</pre>



<h3>More</h3>



<pre class="wp-block-preformatted">Model::create(array('key' =&gt; 'value'));</pre>



<p>Find first matching record by attributes or create</p>



<pre class="wp-block-preformatted">Model::firstOrCreate(array('key' =&gt; 'value'));</pre>



<p>Find first record by attributes or instantiate</p>



<pre class="wp-block-preformatted">Model::firstOrNew(array('key' =&gt; 'value'));</pre>



<p>Create or update a record matching attibutes, and fill with values</p>



<pre class="wp-block-preformatted">Model::updateOrCreate(array('search_key' =&gt; 'search_value'), array('key' =&gt; 'value'));</pre>



<p>Fill a model with an array of attributes, beware of mass assignment!</p>



<pre class="wp-block-preformatted">Model::fill($attributes);<br>Model::destroy(1);<br>Model::all();<br>Model::find(1);</pre>



<p>Find using dual primary key</p>



<pre class="wp-block-preformatted">Model::find(array('first', 'last'));</pre>



<p>Throw an exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::findOrFail(1);</pre>



<p>Find using dual primary key and throw exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::findOrFail(array('first', 'last'));<br>Model::where('foo', '=', 'bar')-&gt;get();<br>Model::where('foo', '=', 'bar')-&gt;first();</pre>



<p>dynamic</p>



<pre class="wp-block-preformatted">Model::whereFoo('bar')-&gt;first();</pre>



<p>Throw an exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;firstOrFail();<br>Model::where('foo', '=', 'bar')-&gt;count();<br>Model::where('foo', '=', 'bar')-&gt;delete();</pre>



<p>Output raw query</p>



<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;toSql();<br>Model::whereRaw('foo = bar and cars = 2', array(20))-&gt;get();<br>Model::remember(5)-&gt;get();<br>Model::remember(5, 'cache-key-name')-&gt;get();<br>Model::cacheTags('my-tag')-&gt;remember(5)-&gt;get();<br>Model::cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();<br>Model::on('connection-name')-&gt;find(1);<br>Model::with('relation')-&gt;get();<br>Model::all()-&gt;take(10);<br>Model::all()-&gt;skip(10);</pre>



<p>Default Eloquent sort is ascendant</p>



<pre class="wp-block-preformatted">Model::all()-&gt;orderBy('column');<br>Model::all()-&gt;orderBy('column','desc');</pre>



<h3>Soft Delete</h3>



<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;get();</pre>



<p>Include the soft deleted models in the results</p>



<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;restore();<br>Model::where('cars', 2)-&gt;forceDelete();</pre>



<p>Force the result set to only included soft deletes</p>



<pre class="wp-block-preformatted">Model::onlyTrashed()-&gt;where('cars', 2)-&gt;get();</pre>



<h3>Events</h3>



<pre class="wp-block-preformatted">Model::creating(function($model){});
Model::created(function($model){});
Model::updating(function($model){});
Model::updated(function($model){});
Model::saving(function($model){});
Model::saved(function($model){});
Model::deleting(function($model){});
Model::deleted(function($model){});
Model::observe(new FooObserver);</pre>



<h3>Eloquent Configuration</h3>



<p>Disables mass assignment exceptions from being thrown from model inserts and updates</p>



<pre class="wp-block-preformatted">Eloquent::unguard();</pre>



<p>Renables any ability to throw mass assignment exceptions</p>



<pre class="wp-block-preformatted">Eloquent::reguard();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-370 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-370">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-db-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-db-cheat-sheet/">Laravel DB Cheat Sheet</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Basic Database Usage</h3>



<pre class="wp-block-preformatted">DB::connection('connection_name');</pre>



<p>Running A Select Query</p>



<pre class="wp-block-preformatted">$results = DB::select('select * from users where id = ?', [1]);<br>$results = DB::select('select * from users where id = :id', ['id' =&gt; 1]);</pre>



<p>Running A General Statement</p>



<pre class="wp-block-preformatted">DB::statement('drop table users');</pre>



<p>Listening For Query Events</p>



<pre class="wp-block-preformatted">DB::listen(function($sql, $bindings, $time){ code_here; });</pre>



<p>Database Transactions</p>



<pre class="wp-block-preformatted">DB::transaction(function()<br>{<br>DB::table('users')-&gt;update(['votes' =&gt; 1]);<br>DB::table('posts')-&gt;delete();<br>});<br>DB::beginTransaction();<br>DB::rollback();<br>DB::commit();</pre>



<h3>Laravel Query Builder</h3>



<p>Retrieving All Rows From A Table</p>



<pre class="wp-block-preformatted">DB::table('name')-&gt;get();</pre>



<p>Chunking Results From A Table</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;chunk(100, function($users) {
foreach ($users as $user) { //} 
});</pre>



<p>Retrieving A Single Row From A Table</p>



<pre class="wp-block-preformatted">$user = DB::table('users')-&gt;where('name', 'John')-&gt;first();<br>DB::table('name')-&gt;first();</pre>



<p>Retrieving A Single Column From A Row</p>



<pre class="wp-block-preformatted">$name = DB::table('users')-&gt;where('name', 'John')-&gt;pluck('name');<br>DB::table('name')-&gt;pluck('column');</pre>



<p>Retrieving A List Of Column Values</p>



<pre class="wp-block-preformatted">$roles = DB::table('roles')-&gt;lists('title');<br>$roles = DB::table('roles')-&gt;lists('title', 'name');</pre>



<p>Specifying A Select Clause</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;select('name', 'email')-&gt;get();<br>$users = DB::table('users')-&gt;distinct()-&gt;get();<br>$users = DB::table('users')-&gt;select('name as user_name')-&gt;get();</pre>



<p>Adding A Select Clause To An Existing Query</p>



<pre class="wp-block-preformatted">$query = DB::table('users')-&gt;select('name');<br>$users = $query-&gt;addSelect('age')-&gt;get();</pre>



<p>Using Where Operators</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;get();<br>$users = DB::table('users')<br>-&gt;where('votes', '&gt;', 100)<br>-&gt;orWhere('name', 'John')<br>-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNull('updated_at')-&gt;get();<br>DB::table('name')-&gt;whereNotNull('column')-&gt;get();</pre>



<p>Dynamic Where Clauses</p>



<pre class="wp-block-preformatted">$admin = DB::table('users')-&gt;whereId(1)-&gt;first();<br>$john = DB::table('users')<br>-&gt;whereIdAndEmail(2, '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb81848385ab8f848ec5888486">[email&nbsp;protected]</a>')<br>-&gt;first();<br>$jane = DB::table('users')<br>-&gt;whereNameOrAge('Jane', 22)<br>-&gt;first();</pre>



<p>Order By, Group By, And Having</p>



<pre class="wp-block-preformatted">$users = DB::table('users')<br>-&gt;orderBy('name', 'desc')<br>-&gt;groupBy('count')<br>-&gt;having('count', '&gt;', 100)<br>-&gt;get();<br>DB::table('name')-&gt;orderBy('column')-&gt;get();<br>DB::table('name')-&gt;orderBy('column','desc')-&gt;get();<br>DB::table('name')-&gt;having('count', '&gt;', 100)-&gt;get();</pre>



<p>Offset &amp; Limit</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;skip(10)-&gt;take(5)-&gt;get();</pre>



<h3>Laravel Joins</h3>



<p>Basic Join Statement</p>



<pre class="wp-block-preformatted">DB::table('users')
  -&gt;join('contacts', 'users.id', '=', 'contacts.user_id')
  -&gt;join('orders', 'users.id', '=', 'orders.user_id')
  -&gt;select('users.id', 'contacts.phone', 'orders.price')
  -&gt;get();</pre>



<p>Left Join Statement</p>



<pre class="wp-block-preformatted">DB::table('users')
-&gt;leftJoin('posts', 'users.id', '=', 'posts.user_id')
-&gt;get();</pre>



<p>select * from users where name = ‘John’ or (votes &gt; 100 and title &lt;&gt; ‘Admin’)</p>



<pre class="wp-block-preformatted">DB::table('users')
  -&gt;where('name', '=', 'John')
  -&gt;orWhere(function($query)
  {
	  $query-&gt;where('votes', '&gt;', 100)
			-&gt;where('title', '&lt;&gt;', 'Admin');
  })
  -&gt;get();</pre>



<h3>Laravel Aggregates</h3>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;count();
$price = DB::table('orders')-&gt;max('price');
$price = DB::table('orders')-&gt;min('price');
$price = DB::table('orders')-&gt;avg('price');
$total = DB::table('users')-&gt;sum('votes');

DB::table('name')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;remember(5, 'cache-key-name')-&gt;get();
DB::table('name')-&gt;cacheTags('my-key')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();</pre>



<h3>Laravel Raw Expressions&nbsp;</h3>



<pre class="wp-block-preformatted">$users = DB::table('users')
		   -&gt;select(DB::raw('count(*) as user_count, status'))
		   -&gt;where('status', '&lt;&gt;', 1)
		   -&gt;groupBy('status')
		   -&gt;get();</pre>



<p>return rows</p>



<pre class="wp-block-preformatted">DB::select('select * from users where id = ?', array('value'));</pre>



<p>return nr affected rows</p>



<pre class="wp-block-preformatted">DB::insert('insert into foo set bar=2');
DB::update('update foo set bar=2');
DB::delete('delete from bar');</pre>



<p>returns void</p>



<pre class="wp-block-preformatted">DB::statement('update foo set bar=2');</pre>



<p>raw expression inside a statement</p>



<pre class="wp-block-preformatted">DB::table('name')-&gt;select(DB::raw('count(*) as count, column2'))-&gt;get();</pre>



<h3>Laravel Inserts / Updates / Deletes / Unions / Pessimistic Locking</h3>



<p>Inserts</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;insert(
['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e882878086a88d90898598848dc68b8785">[email&nbsp;protected]</a>', 'votes' =&gt; 0]
);
$id = DB::table('users')-&gt;insertGetId(
['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d575255537d58455c504d5158135e5250">[email&nbsp;protected]</a>', 'votes' =&gt; 0]
);
DB::table('users')-&gt;insert([
['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88fce9f1e4e7fac8edf0e9e5f8e4eda6ebe7e5">[email&nbsp;protected]</a>', 'votes' =&gt; 0],
['email' =&gt; 'dayle<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b3b1e031a160b171e55181416">[email&nbsp;protected]</a>', 'votes' =&gt; 0]
]);</pre>



<p>Updates</p>



<pre class="wp-block-preformatted">DB::table('users')
  -&gt;where('id', 1)
  -&gt;update(['votes' =&gt; 1]);
DB::table('users')-&gt;increment('votes');
DB::table('users')-&gt;increment('votes', 5);
DB::table('users')-&gt;decrement('votes');
DB::table('users')-&gt;decrement('votes', 5);
DB::table('users')-&gt;increment('votes', 1, ['name' =&gt; 'John']);</pre>



<p>Deletes</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&lt;', 100)-&gt;delete();
DB::table('users')-&gt;delete();
DB::table('users')-&gt;truncate();</pre>



<p>Unions. The unionAll() method is also available, and has the same method signature as union.</p>



<pre class="wp-block-preformatted">$first&nbsp;= DB::table('users')-&gt;whereNull('first_name');
$users = DB::table('users')-&gt;whereNull('last_name')-&gt;union($first)-&gt;get();</pre>



<p>Pessimistic Locking</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;sharedLock()-&gt;get();
DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;lockForUpdate()-&gt;get();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-372 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-372">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-validation"><a href="https://simplecheatsheet.com/laravel-validation/">Laravel Validation</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Validator::make(
array('key' =&gt; 'Foo'),
array('key' =&gt; 'required|in:Foo')
);
Validator::extend('foo', function($attribute, $value, $params){});
Validator::extend('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e785151685f52575a5f4a514c7e485f52575a5f4a5b">[email&nbsp;protected]</a>');
Validator::resolver(function($translator, $data, $rules, $msgs)
{
return new FooValidator($translator, $data, $rules, $msgs);
});</pre>



<h3>Laravel Rules</h3>



<pre class="wp-block-preformatted">accepted
active_url
after:YYYY-MM-DD
before:YYYY-MM-DD
alpha
alpha_dash
alpha_num
array
between:1,10
confirmed
date
date_format:YYYY-MM-DD
different:fieldname
digits:value
digits_between:min,max
boolean
email
exists:table,column
image
in:foo,bar,...
not_in:foo,bar,...
integer
numeric
ip
max:value
min:value
mimes:jpeg,png
regex:[0-9]
required
required_if:field,value
required_with:foo,bar,...
required_with_all:foo,bar,...
required_without:foo,bar,...
required_without_all:foo,bar,...
same:field
size:value
timezone
unique:table,column,except,idColumn
url</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-366 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-366">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-view"><a href="https://simplecheatsheet.com/laravel-view/">Laravel View</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">View::make('path/to/view');
View::make('foo/bar')-&gt;with('key', 'value');
View::make('foo/bar')-&gt;withKey('value');
View::make('foo/bar', array('key' =&gt; 'value'));
View::exists('foo/bar');</pre>



<p>Share a value across all views</p>



<pre class="wp-block-preformatted">View::share('key', 'value');</pre>



<p>Nesting views</p>



<pre class="wp-block-preformatted">View::make('foo/bar')-&gt;nest('name', 'foo/baz', $data);</pre>



<p>Register a view composer</p>



<pre class="wp-block-preformatted">View::composer('viewname', function($view){});</pre>



<p>Register multiple views to a composer</p>



<pre class="wp-block-preformatted">View::composer(array('view1', 'view2'), function($view){});</pre>



<p>Register a composer class</p>



<pre class="wp-block-preformatted">View::composer('viewname', 'FooComposer');
View::creator('viewname', function($view){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-368 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-368">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-blade"><a href="https://simplecheatsheet.com/laravel-blade/">Laravel Blade</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>Show a section in a template</p>



<pre class="wp-block-preformatted">@yield('name')<br>@extends('layout.name')</pre>



<p>Begin a section</p>



<pre class="wp-block-preformatted">@section('name')</pre>



<p>End a section</p>



<pre class="wp-block-preformatted">@stop</pre>



<p>End a section and yield</p>



<pre class="wp-block-preformatted">@section('sidebar')<br>@show<br>@parent</pre>



<pre class="wp-block-preformatted">@include('view.name')<br>@include('view.name', array('key' =&gt; 'value'));<br>@lang('messages.name')<br>@choice('messages.name', 1);</pre>



<pre class="wp-block-preformatted">@if<br>@else<br>@elseif<br>@endif</pre>



<pre class="wp-block-preformatted">@unless<br>@endunless</pre>



<pre class="wp-block-preformatted">@for<br>@endfor</pre>



<pre class="wp-block-preformatted">@foreach<br>@endforeach</pre>



<pre class="wp-block-preformatted">@while<br>@endwhile</pre>



<p>forelse 4.2 feature</p>



<pre class="wp-block-preformatted">@forelse($users as $user)<br>@empty<br>@endforelse</pre>



<p>Echo content</p>



<pre class="wp-block-preformatted">{{ $var }}</pre>



<p>Echo escaped content</p>



<pre class="wp-block-preformatted">{{{ $var }}}</pre>



<p>Echo unescaped content; 5.0 feature</p>



<pre class="wp-block-preformatted">{!! $var !!}<br>{{-- Blade Comment --}}</pre>



<p>Echoing Data After Checking For Existence</p>



<pre class="wp-block-preformatted">{{{ $name or 'Default' }}}</pre>



<p>Displaying Raw Text With Curly Braces</p>



<pre class="wp-block-preformatted">@{{ This will not be processed by Blade }}</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-362 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-362">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-mail"><a href="https://simplecheatsheet.com/laravel-mail/">Laravel Mail</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Mail::send('email.view', $data, function($message){});
Mail::send(array('html.view', 'text.view'), $data, $callback);
Mail::queue('email.view', $data, function($message){});
Mail::queueOn('queue-name', 'email.view', $data, $callback);
Mail::later(5, 'email.view', $data, function($message){});</pre>



<p>Write all email to logs instead of sending</p>



<pre class="wp-block-preformatted">Mail::pretend();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-338 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-338">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-session"><a href="https://simplecheatsheet.com/laravel-session/">Laravel Session</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Session::get('key');</pre>



<p>Returns an item from the session</p>



<pre class="wp-block-preformatted">Session::get('key', 'default');<br>Session::get('key', function(){ return 'default'; });</pre>



<p>Get the session ID</p>



<pre class="wp-block-preformatted">Session::getId();</pre>



<p>Put a key / value pair in the session</p>



<pre class="wp-block-preformatted">Session::put('key', 'value');</pre>



<p>Push a value into an array in the session</p>



<pre class="wp-block-preformatted">Session::push('foo.bar','value');</pre>



<p>Returns all items from the session</p>



<pre class="wp-block-preformatted">Session::all();</pre>



<p>Checks if an item is defined</p>



<pre class="wp-block-preformatted">Session::has('key');</pre>



<p>Remove an item from the session</p>



<pre class="wp-block-preformatted">Session::forget('key');</pre>



<p>Remove all of the items from the session</p>



<pre class="wp-block-preformatted">Session::flush();</pre>



<p>Generate a new session identifier</p>



<pre class="wp-block-preformatted">Session::regenerate();</pre>



<p>Flash a key / value pair to the session</p>



<pre class="wp-block-preformatted">Session::flash('key', 'value');</pre>



<p>Reflash all of the session flash data</p>



<pre class="wp-block-preformatted">Session::reflash();</pre>



<p>Reflash a subset of the current flash data</p>



<pre class="wp-block-preformatted">Session::keep(array('key1', 'key2'));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-340 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-340">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-response"><a href="https://simplecheatsheet.com/laravel-response/">Laravel Response</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">return Response::make($contents);<br>return Response::make($contents, 200);<br>return Response::json(array('key' =&gt; 'value'));<br>return Response::json(array('key' =&gt; 'value'))<br>-&gt;setCallback(Input::get('callback'));<br>return Response::download($filepath);<br>return Response::download($filepath, $filename, $headers);</pre>



<p>Create a response and modify a header value</p>



<pre class="wp-block-preformatted">$response = Response::make($contents, 200);<br>$response-&gt;header('Content-Type', 'application/json');<br>return $response;</pre>



<p>Attach a cookie to a response</p>



<pre class="wp-block-preformatted">return Response::make($content)<br>-&gt;withCookie(Cookie::make('key', 'value'));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-334 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-334">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-event"><a href="https://simplecheatsheet.com/laravel-event/">Laravel Event</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Event::fire('foo.bar', array($bar));</pre>



<p>Register an event listener with the dispatcher. <code>void listen(string|array $events, mixed $listener, int $priority)</code></p>



<pre class="wp-block-preformatted">Event::listen('App\Events\UserSignup', function($bar){});
Event::listen('foo.*', function($bar){});
Event::listen('foo.bar', 'FooHandler', 10);
Event::listen('foo.bar', 'BarHandler', 5);</pre>



<p>Stopping The Propagation Of An Event. You may do so using it by returning false from your handler.</p>



<pre class="wp-block-preformatted">Event::listen('foor.bar', function($event){ return false; });<br>Event::subscribe('UserEventHandler');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-336 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-336">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-input"><a href="https://simplecheatsheet.com/laravel-input/">Laravel Input</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Input::get('key');</pre>



<p>Default if the key is missing</p>



<pre class="wp-block-preformatted">Input::get('key', 'default');<br>Input::has('key');<br>Input::all();</pre>



<p>Only retrieve ‘foo’ and ‘bar’ when getting input</p>



<pre class="wp-block-preformatted">Input::only('foo', 'bar');</pre>



<p>Disregard ‘foo’ when getting input</p>



<pre class="wp-block-preformatted">Input::except('foo');<br>Input::flush();</pre>



<h3>Laravel Session Input (flash)</h3>



<p>Flash input to the session</p>



<pre class="wp-block-preformatted">Input::flash();</pre>



<p>Flash only some of the input to the session</p>



<pre class="wp-block-preformatted">Input::flashOnly('foo', 'bar');</pre>



<p>Flash only some of the input to the session</p>



<pre class="wp-block-preformatted">Input::flashExcept('foo', 'baz');</pre>



<p>Retrieve an old input item</p>



<pre class="wp-block-preformatted">Input::old('key','default_value');</pre>



<h3>Laravel Files</h3>



<p>Use a file that’s been uploaded</p>



<pre class="wp-block-preformatted">Input::file('filename');</pre>



<p>Determine if a file was uploaded</p>



<pre class="wp-block-preformatted">Input::hasFile('filename');</pre>



<p>Access file properties</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;getRealPath();<br>Input::file('name')-&gt;getClientOriginalName();<br>Input::file('name')-&gt;getClientOriginalExtension();<br>Input::file('name')-&gt;getSize();<br>Input::file('name')-&gt;getMimeType();</pre>



<p>Move an uploaded file</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath);</pre>



<p>Move an uploaded file</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath, $fileName);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-332 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-332">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-url"><a href="https://simplecheatsheet.com/laravel-url/">Laravel URL</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">URL::full();
URL::current();
URL::previous();
URL::to('foo/bar', $parameters, $secure);
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98d6fdefebdbf7f6eceaf7f4f4fdead8f1ecfdf5">[email&nbsp;protected]</a>', ['id'=&gt;123]);</pre>



<p>need be in appropriate namespace</p>



<pre class="wp-block-preformatted">URL::action('Auth\<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d3c0809153e1213090f121111180f3d11121a120809">[email&nbsp;protected]</a>');
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8fc9e0e0cce0e1fbfde0e3e3eafdcfe2eafbe7e0eb">[email&nbsp;protected]</a>', $parameters, $absolute);
URL::route('foo', $parameters, $absolute);
URL::secure('foo/bar', $parameters);
URL::asset('css/foo.css', $secure);
URL::secureAsset('css/foo.css');
URL::isValidUrl('http://example.com');
URL::getRequest();
URL::setRequest($request);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-330 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-330">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-log"><a href="https://simplecheatsheet.com/laravel-log/">Laravel Log</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>The logger provides the seven logging levels defined in RFC 5424: debug, info, notice, warning, error, critical, and alert.</p>



<pre class="wp-block-preformatted">Log::info('info');<br>Log::info('info',array('context'=&gt;'additional info'));<br>Log::error('error');<br>Log::warning('warning');</pre>



<p>get monolog instance</p>



<pre class="wp-block-preformatted">Log::getMonolog();</pre>



<p>add listener</p>



<pre class="wp-block-preformatted">Log::listen(function($level, $message, $context) {});</pre>



<h3>Laravel Query Logging</h3>



<p>enable the log</p>



<pre class="wp-block-preformatted">DB::connection()-&gt;enableQueryLog();</pre>



<p>get an array of the executed queries</p>



<pre class="wp-block-preformatted">DB::getQueryLog();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-328 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-328">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-environment"><a href="https://simplecheatsheet.com/laravel-environment/">Laravel Environment</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">$environment = app()-&gt;environment(); 
$environment = App::environment(); 
$environment = $app-&gt;environment(); </pre>



<p>The environment is local</p>



<pre class="wp-block-preformatted">if ($app-&gt;environment('local')){}</pre>



<p>The environment is either local OR staging…</p>



<pre class="wp-block-preformatted">if ($app-&gt;environment('local', 'staging')){}</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-323 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-323">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-string"><a href="https://simplecheatsheet.com/laravel-string/">Laravel String</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>Transliterate a UTF-8 value to ASCII</p>



<pre class="wp-block-preformatted">Str::ascii($value)
Str::camel($value)
Str::contains($haystack, $needle)
Str::endsWith($haystack, $needles)</pre>



<p>Cap a string with a single instance of a given value.</p>



<pre class="wp-block-preformatted">Str::finish($value, $cap)
Str::is($pattern, $value)
Str::length($value)
Str::limit($value, $limit = 100, $end = '…')
Str::lower($value)
Str::words($value, $words = 100, $end = '…')
Str::plural($value, $count = 2)</pre>



<p>Generate a more truly “random” alpha-numeric string.</p>



<pre class="wp-block-preformatted">Str::random($length = 16)</pre>



<p>Generate a “random” alpha-numeric string.</p>



<pre class="wp-block-preformatted">Str::quickRandom($length = 16)
Str::upper($value)
Str::title($value)
Str::singular($value)
Str::slug($title, $separator = '-')
Str::snake($value, $delimiter = '_')
Str::startsWith($haystack, $needles)</pre>



<p>Convert a value to studly caps case.</p>



<pre class="wp-block-preformatted">Str::studly($value)
Str::macro($name, $macro)</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-326 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-326">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-composer-command"><a href="https://simplecheatsheet.com/laravel-composer-command/">Laravel Composer Command</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">composer create-project laravel/laravel folder_name
composer install
composer update
composer dump-autoload [--optimize]
composer self-update
composer require [options] [--] [vender/packages]…</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-321 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-321">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-artisan"><a href="https://simplecheatsheet.com/laravel-artisan/">Laravel Artisan</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<figure class="wp-block-table"><table><tbody><tr><td><code>php artisan make:policy PostPolicy</code></td><td>Added in</td></tr><tr><td><code>php artisan&nbsp;--help</code> <br>OR <code>-h</code></td><td>Displays help for a given command</td></tr><tr><td><code>php artisan&nbsp;--quiet</code> <br>OR <code>-q</code></td><td>Do not output any message</td></tr><tr><td><code>php artisan&nbsp;--version</code> <br>OR <code>-V</code></td><td>Display this application version</td></tr><tr><td>php artisan&nbsp;–no-interaction <br>OR <code>-n</code></td><td>Do not ask any interactive question</td></tr><tr><td><code>php artisan&nbsp;--ansi</code></td><td>Force ANSI output</td></tr><tr><td><code>php artisan&nbsp;--no-ansi</code></td><td>Disable ANSI output</td></tr><tr><td><code>php artisan&nbsp;--env</code></td><td>The environment the command should run under</td></tr><tr><td><code>php artisan&nbsp;--verbose</code></td><td>-v|vv|vvv Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</td></tr><tr><td><code>php artisan clear-compiled</code></td><td>Remove the compiled class file</td></tr><tr><td><code>php artisan env</code></td><td>Display the current framework environment</td></tr><tr><td><code>php artisan help</code></td><td>Displays help for a command</td></tr><tr><td><code>php artisan list</code></td><td>Lists commands</td></tr><tr><td><code>php artisan tinker</code></td><td>Interact with your application</td></tr><tr><td><code>php artisan down</code></td><td>Put the application into maintenance mode</td></tr><tr><td><code>php artisan up</code></td><td>Bring the application out of maintenance mode</td></tr><tr><td><code>php artisan optimize&nbsp;[--force] [--psr]</code></td><td>Optimize the framework for better performance<br><code>--force</code> Force the compiled class file to be <br><code>--psr</code> Do not optimize Composer dump-autoload.</td></tr><tr><td><code>php artisan serve</code></td><td>Serve the application on the PHP development server</td></tr><tr><td><code>php artisan serve&nbsp;--port 8080</code></td><td>Change the default port</td></tr><tr><td><code>php artisan serve&nbsp;--host 0.0.0.0</code></td><td>Get it to work outside localhost</td></tr><tr><td><code>php artisan app:name namespace</code></td><td>Set the application namespace</td></tr><tr><td><code>php artisan auth:clear-resets</code></td><td>Flush expired password reset tokens</td></tr><tr><td><code>php artisan cache:clear</code></td><td>Flush the application cache</td></tr><tr><td><code>php artisan cache:table</code></td><td>Create a migration for the cache database table</td></tr><tr><td><code>php artisan config:cache</code></td><td>Create a cache file for faster configuration loading</td></tr><tr><td><code>php artisan config:clear</code></td><td>Remove the configuration cache file</td></tr><tr><td><code>$exitCode&nbsp;= Artisan::call('config:cache');</code></td><td>In program</td></tr><tr><td><code>php artisan db:seed [--class[="..."]] [--database[="..."]] [--force]</code></td><td>Seed the database with records<br><code>--class</code> The class name of the root seeder (default: “DatabaseSeeder”)<br><code>--database</code> The database connection to seed<br><code>--force</code> Force the operation to run when in production.</td></tr><tr><td><code>php artisan&nbsp;event:generate</code></td><td>Generate the missing events and handlers based on registration</td></tr><tr><td><code>php artisan handler:command [--command="..."] name</code></td><td>Create a new command handler class<br><code>--command </code>The command class the handler handles.</td></tr><tr><td><code>php artisan handler:event [--event="..."] [--queued] name</code></td><td>Create a new event handler class<br><code>--event</code> The event class the handler handles.<br><code>--queued</code> Indicates the event handler should be queued.</td></tr><tr><td><code>php artisan key:generate</code></td><td>Set the application key</td></tr><tr><td><code>php artisan make:command [--handler] [--queued] name</code></td><td>By default, this creates a self-handling command that isn’t pushed to the queue. Pass this the <code>--handler</code> flag to generate a handler, and the <code>--queued</code> flag to make it queued.</td></tr><tr><td><code>make:console [--command[="..."]] name</code></td><td>Create a new Artisan command<br><code>--command</code> The terminal command should be assigned. (default: “command:name”)</td></tr><tr><td><code>php artisan make:controller [--plain] name</code></td><td>Create a new resourceful controller<br><code>--plain</code> Generate an empty controller class.</td></tr><tr><td><code>php artisan make:event name</code></td><td>Create a new event class</td></tr><tr><td><code>php artisan make:middleware name</code></td><td>Create a new middleware class</td></tr><tr><td><code>php artisan make:migration [--create[="..."]] [--table[="..."]] name</code></td><td>Create a new migration file<br><code>--create</code> The table to be created.<br><code>--table</code> The table to migrate.</td></tr><tr><td><code>php artisan make:model name</code></td><td>Create a new Eloquent model class</td></tr><tr><td><code>php artisan make:provider name</code></td><td>Create a new service provider class</td></tr><tr><td><code>php artisan make:request name</code></td><td>Create a new form request class</td></tr><tr><td><code>php artisan migrate&nbsp;[--database[="..."]] [--force] [--path[="..."]] [--pretend] [--seed]</code></td><td>Database migrations<br><code>--database</code> The database connection to use.<br><code>--force</code> Force the operation to run when in production.<br><code>--path</code> The path of migrations files to be executed.<br><code>--pretend</code> Dump the SQL queries that would be run.<br><code>--seed</code> Indicates if the seed task should be re-run.</td></tr><tr><td><code>php artisan migrate:install [--database[="..."]]</code></td><td>Create the migration repository</td></tr><tr><td><code>php artisan migrate:refresh [--database[="..."]] [--force] [--seed] [--seeder[="..."]]</code></td><td>Create a new migration file<br><code>--seeder</code> The class name of the root seeder.</td></tr><tr><td><code>php artisan migrate:reset [--database[="..."]] [--force] [--pretend]</code></td><td>Rollback all database migrations<br><code>--pretend</code> Dump the SQL queries that would be run.</td></tr><tr><td><code>php artisan migrate:rollback [--database[="..."]] [--force] [--pretend]</code></td><td>Rollback the last database migration</td></tr><tr><td><code>php artisan migrate:status</code></td><td>Show a list of migrations up/down</td></tr><tr><td><code>php artisan queue:table</code></td><td>Create a migration for the queue jobs database table</td></tr><tr><td><code>php artisan queue:listen [--queue[="..."]] [--delay[="..."]] [--memory[="..."]] [--timeout[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</code></td><td>Listen to a given queue<br><code>--queue</code> The queue to listen on<br><code>--delay</code> Amount of time to delay failed jobs (default: 0)<br><code>--memory </code>The memory limit in megabytes (default: 128)<br><code>--timeout</code> Seconds a job may run before timing out (default: 60)<br><code>--sleep</code> Seconds to wait before checking queue for jobs (default: 3)<br><code>--tries</code> Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td><code>php artisan queue:failed</code></td><td>List all of the failed queue jobs</td></tr><tr><td><code>php artisan queue:failed-table</code></td><td>Create a migration for the failed queue jobs database table</td></tr><tr><td><code>php artisan queue:flush</code></td><td>Flush all of the failed queue jobs</td></tr><tr><td><code>php artisan queue:forget</code></td><td>Delete a failed queue job</td></tr><tr><td><code>php artisan queue:restart</code></td><td>Restart queue worker daemons after their current job</td></tr><tr><td><code>php artisan queue:retry id</code></td><td>Retry a failed queue job(id: The ID of the failed job)</td></tr><tr><td><code>php artisan queue:subscribe [--type[="..."]] queue url</code></td><td>Subscribe a URL to an Iron.io push queue<br><code>queue</code>: The name of Iron.io queue.<br><code>url</code>: The URL to be subscribed.<br><code>--type</code> The push type for the queue.</td></tr><tr><td><code>php artisan queue:work [--queue[="..."]] [--daemon] [--delay[="..."]] [--force] [--memory[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</code></td><td>Process the next job on a queue<br><code>--queue</code> The queue to listen on<br><code>--daemon</code> Run the worker in daemon mode<br><code>--delay</code> Amount of time to delay failed jobs (default: 0)<br><code>--force</code> Force the worker to run even in maintenance mode<br><code>--memory</code> The memory limit in megabytes (default: 128)<br><code>--sleep</code> Number of seconds to sleep when no job is available (default: 3)<br><code>--tries</code> Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td><code>php artisan route:cache</code></td><td>Create a route cache file for faster route registration</td></tr><tr><td><code>php artisan route:clear</code></td><td>Remove the route cache file</td></tr><tr><td><code>php artisan route:list</code></td><td>List all registered routes</td></tr><tr><td><code>php artisan schedule:run</code></td><td>Run the scheduled commands</td></tr><tr><td><code>php artisan session:table</code></td><td>Create a migration for the session database table</td></tr><tr><td><code>php artisan vendor:publish [--force] [--provider[="..."]] [--tag[="..."]] php artisan tail [--path[="..."]] [--lines[="..."]] [connection]</code></td><td>Publish any publishable assets from vendor packages<br><code>--force</code> Overwrite any existing files.<br><code>--provider</code> The service provider that has assets you want to publish.<br><code>--tag</code> The tag that has assets you want to publish.</td></tr></tbody></table></figure>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-384 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-384">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-cookie"><a href="https://simplecheatsheet.com/laravel-cookie/">Laravel Cookie</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Cookie::get('key');<br>Cookie::get('key', 'default');</pre>



<p>Create a cookie that lasts for ever</p>



<pre class="wp-block-preformatted">Cookie::forever('key', 'value');
Create a cookie that lasts N minutes
Cookie::make('key', 'value', 'minutes');</pre>



<p>Set a cookie before a response has been created</p>



<pre class="wp-block-preformatted">Cookie::queue('key', 'value', 'minutes');</pre>



<p>Forget cookie</p>



<pre class="wp-block-preformatted">Cookie::forget('key');</pre>



<p>Send a cookie with a response</p>



<pre class="wp-block-preformatted">$response = Response::make('Hello World');</pre>



<p>Add a cookie to the response</p>



<pre class="wp-block-preformatted">$response-&gt;withCookie(Cookie::make('name', 'value', $minutes));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-364 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-364">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-messages"><a href="https://simplecheatsheet.com/laravel-messages/">Laravel Messages</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>These can be used on the $message instance passed into Mail::send() or Mail::queue()</p>



<pre class="wp-block-preformatted">$message-&gt;from('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89d95999194b89d80999588949dd69b9795">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;sender('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d78707c74715d78657c706d7178337e7270">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;returnPath('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbded6dad2d7fbdec3dad6cbd7de95d8d4d6">[email&nbsp;protected]</a>');
$message-&gt;to('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="395c54585055795c41585449555c175a5654">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;cc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="650008040c0925001d04081509004b060a08">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;bcc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b4bcb0b8bd91b4a9b0bca1bdb4ffb2bebc">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;replyTo('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5a525e56537f5a475e524f535a115c5052">[email&nbsp;protected]</a>', 'Mr. Example');
$message-&gt;subject('Welcome to the Jungle');
$message-&gt;priority(2);
$message-&gt;attach('foo\bar.txt', $options);</pre>



<p>This uses in-memory data as attachments</p>



<pre class="wp-block-preformatted">$message-&gt;attachData('bar', 'Data Name', $options);</pre>



<p>Embed a file in the message and get the CID</p>



<pre class="wp-block-preformatted">$message-&gt;embed('foo\bar.txt');
$message-&gt;embedData('foo', 'Data Name', $options);</pre>



<p>Get the underlying Swift Message instance</p>



<pre class="wp-block-preformatted">$message-&gt;getSwiftMessage();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-388 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-388">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-security"><a href="https://simplecheatsheet.com/laravel-security/">Laravel Security</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Hashing</h3>



<pre class="wp-block-preformatted">Hash::make('secretpassword');
Hash::check('secretpassword', $hashedPassword);
Hash::needsRehash($hashedPassword);</pre>



<h3>Encryption</h3>



<pre class="wp-block-preformatted">Crypt::encrypt('secretstring');
Crypt::decrypt($encryptedString);
Crypt::setMode('ctr');
Crypt::setCipher($cipher);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-358 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-358">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-schema"><a href="https://simplecheatsheet.com/laravel-schema/">Laravel Schema</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>Indicate that the table needs to be created</p>



<pre class="wp-block-preformatted">Schema::create('table', function($table) { 
$table-&gt;increments('id'); 
});</pre>



<p>Specify a Connection</p>



<pre class="wp-block-preformatted">Schema::connection('foo')-&gt;create('table', function($table){});</pre>



<p>Rename the table to a given name</p>



<pre class="wp-block-preformatted">Schema::rename($from, $to);</pre>



<p>Indicate that the table should be dropped</p>



<pre class="wp-block-preformatted">Schema::drop('table');</pre>



<p>Indicate that the table should be dropped if it exists</p>



<pre class="wp-block-preformatted">Schema::dropIfExists('table');</pre>



<p>Determine if the given table exists</p>



<pre class="wp-block-preformatted">Schema::hasTable('table');</pre>



<p>Determine if the given table has a given column</p>



<pre class="wp-block-preformatted">Schema::hasColumn('table', 'column');</pre>



<p>Update an existing table</p>



<pre class="wp-block-preformatted">Schema::table('table', function($table){});</pre>



<p>Indicate that the given columns should be renamed</p>



<pre class="wp-block-preformatted">$table-&gt;renameColumn('from', 'to');</pre>



<p>Indicate that the given columns should be dropped<br></p>



<pre class="wp-block-preformatted">$table-&gt;dropColumn(string|array);</pre>



<p>The storage engine that should be used for the table</p>



<pre class="wp-block-preformatted">$table-&gt;engine = 'InnoDB';</pre>



<p>Only work on MySQL</p>



<pre class="wp-block-preformatted">$table-&gt;string('name')-&gt;after('email');</pre>



<h3>Laravel Indexes</h3>



<pre class="wp-block-preformatted">$table-&gt;string('column')-&gt;unique();<br>$table-&gt;primary('column');</pre>



<p>Creates a dual primary key</p>



<pre class="wp-block-preformatted">$table-&gt;primary(array('first', 'last'));
$table-&gt;unique('column');
$table-&gt;unique('column', 'key_name');</pre>



<p>Creates a dual unique index<br></p>



<pre class="wp-block-preformatted">$table-&gt;unique(array('first', 'last'));
$table-&gt;unique(array('first', 'last'), 'key_name');
$table-&gt;index('column');
$table-&gt;index('column', 'key_name');</pre>



<p>Creates a dual index</p>



<pre class="wp-block-preformatted">$table-&gt;index(array('first', 'last'));
$table-&gt;index(array('first', 'last'), 'key_name');
$table-&gt;dropPrimary('table_column_primary');
$table-&gt;dropUnique('table_column_unique');
$table-&gt;dropIndex('table_column_index');</pre>



<h3>Laravel Foreign Keys</h3>



<pre class="wp-block-preformatted">$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onDelete('cascade'|'restrict'|'set null'|'no action');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onUpdate('cascade'|'restrict'|'set null'|'no action');
$table-&gt;dropForeign('posts_user_id_foreign');</pre>



<h3>Laravel Column Types</h3>



<p>Increments</p>



<pre class="wp-block-preformatted">$table-&gt;increments('id');
$table-&gt;bigIncrements('id');</pre>



<p>Numbers</p>



<pre class="wp-block-preformatted">$table-&gt;integer('votes');
$table-&gt;tinyInteger('votes');
$table-&gt;smallInteger('votes');
$table-&gt;mediumInteger('votes');
$table-&gt;bigInteger('votes');
$table-&gt;float('amount');
$table-&gt;double('column', 15, 8);
$table-&gt;decimal('amount', 5, 2);</pre>



<p>String and Text</p>



<pre class="wp-block-preformatted">$table-&gt;char('name', 4);
$table-&gt;string('email');
$table-&gt;string('name', 100);
$table-&gt;text('description');
$table-&gt;mediumText('description');
$table-&gt;longText('description');</pre>



<p>Date and Time</p>



<pre class="wp-block-preformatted">$table-&gt;date('created_at');
$table-&gt;dateTime('created_at');
$table-&gt;time('sunrise');
$table-&gt;timestamp('added_on');</pre>



<p>Adds created_at and updated_at columns</p>



<pre class="wp-block-preformatted">$table-&gt;timestamps();<br>$table-&gt;nullableTimestamps();</pre>



<p>Others</p>



<pre class="wp-block-preformatted">$table-&gt;binary('data');
$table-&gt;boolean('confirmed');</pre>



<p>Adds deleted_at column for soft deletes</p>



<pre class="wp-block-preformatted">$table-&gt;softDeletes();
$table-&gt;enum('choices', array('foo', 'bar'));</pre>



<p>Adds remember_token as VARCHAR(100) NULL</p>



<pre class="wp-block-preformatted">$table-&gt;rememberToken();</pre>



<p>Adds INTEGER parent_id and STRING parent_type</p>



<pre class="wp-block-preformatted">$table-&gt;morphs('parent');<br>-&gt;nullable()<br>-&gt;default($value)<br>-&gt;unsigned()</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-386 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-386">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-request"><a href="https://simplecheatsheet.com/laravel-request/">Laravel Request</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>url: http://xx.com/aa/bb</p>



<pre class="wp-block-preformatted">Request::url();</pre>



<p>path: /aa/bb</p>



<pre class="wp-block-preformatted">Request::path();</pre>



<p>getRequestUri: /aa/bb/?c=d</p>



<pre class="wp-block-preformatted">Request::getRequestUri();</pre>



<p>Returns user’s IP</p>



<pre class="wp-block-preformatted">Request::getClientIp();</pre>



<p>getUri: http://xx.com/aa/bb/?c=d</p>



<pre class="wp-block-preformatted">Request::getUri();</pre>



<p>getQueryString: c=d</p>



<pre class="wp-block-preformatted">Request::getQueryString();</pre>



<p>Get the port scheme of the request (e.g., 80, 443, etc.)</p>



<pre class="wp-block-preformatted">Request::getPort();</pre>



<p>Determine if the current request URI matches a pattern</p>



<pre class="wp-block-preformatted">Request::is('foo/*');</pre>



<p>Get a segment from the URI (1 based index)</p>



<pre class="wp-block-preformatted">Request::segment(1);</pre>



<p>Retrieve a header from the request</p>



<pre class="wp-block-preformatted">Request::header('Content-Type');</pre>



<p>Retrieve a server variable from the request</p>



<pre class="wp-block-preformatted">Request::server('PATH_INFO');</pre>



<p>Determine if the request is the result of an AJAX call</p>



<pre class="wp-block-preformatted">Request::ajax();</pre>



<p>Determine if the request is over HTTPS</p>



<pre class="wp-block-preformatted">Request::secure();</pre>



<p>Get the request method</p>



<pre class="wp-block-preformatted">Request::method();</pre>



<p>Checks if the request method is of specified type</p>



<pre class="wp-block-preformatted">Request::isMethod('post');</pre>



<p>Get raw POST data</p>



<pre class="wp-block-preformatted">Request::instance()-&gt;getContent();</pre>



<p>Get requested response format</p>



<pre class="wp-block-preformatted">Request::format();</pre>



<p>true if HTTP Content-Type header contains */json</p>



<pre class="wp-block-preformatted">Request::isJson();</pre>



<p>true if HTTP Accept header is application/json</p>



<pre class="wp-block-preformatted">Request::wantsJson();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-360 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-360">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-container"><a href="https://simplecheatsheet.com/laravel-container/">Laravel Container</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">App::bind('foo', function($app){ return new Foo; });<br>App::make('foo');</pre>



<p>If this class exists, it’s returned</p>



<pre class="wp-block-preformatted">App::make('FooBar');</pre>



<p>Register a shared binding in the container</p>



<pre class="wp-block-preformatted">App::singleton('foo', function(){ return new Foo; });</pre>



<p>Register an existing instance as shared in the container</p>



<pre class="wp-block-preformatted">App::instance('foo', new Foo);</pre>



<p>Register a binding with the container</p>



<pre class="wp-block-preformatted">App::bind('FooRepositoryInterface', 'BarRepository');</pre>



<p>Register a service provider with the application</p>



<pre class="wp-block-preformatted">App::register('FooServiceProvider');</pre>



<p>Listen for object resolution</p>



<pre class="wp-block-preformatted">App::resolving(function($object){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-356 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-356">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-auth"><a href="https://simplecheatsheet.com/laravel-auth/">Laravel Auth</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Laravel Authentication</h3>



<p>Determine if the current user is authenticated</p>



<pre class="wp-block-preformatted">Auth::check();</pre>



<p>Get the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::user();</pre>



<p>Get the ID of the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::id();</pre>



<p>Attempt to authenticate a user using the given credentials</p>



<pre class="wp-block-preformatted">Auth::attempt(array('email' =&gt; $email, 'password' =&gt; $password));</pre>



<p>‘Remember me’ by passing true to Auth::attempt()</p>



<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>



<p>Log in for a single request</p>



<pre class="wp-block-preformatted">Auth::once($credentials);</pre>



<p>Log a user into the application</p>



<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>



<p>Log the given user ID into the application</p>



<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>



<p>Log the user out of the application</p>



<pre class="wp-block-preformatted">Auth::logout();</pre>



<p>Validate a user’s credentials</p>



<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>



<p>Attempt to authenticate using HTTP Basic Auth</p>



<pre class="wp-block-preformatted">Auth::basic('username');</pre>



<p>Perform a stateless HTTP Basic login attempt</p>



<pre class="wp-block-preformatted">Auth::onceBasic();</pre>



<p>Send a password reminder to a user</p>



<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>



<h3>Laravel Authorization</h3>



<p>Define abilities</p>



<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2a18e839191a28f87968a8d86">[email&nbsp;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>



<p>Passing multiple argument</p>



<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>



<p>Check abilities</p>



<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>



<p>Specified a user for checking</p>



<pre class="wp-block-preformatted">Gate::forUser($user)-&gt;allows('update-post', $post);</pre>



<p>Through User model, using Authorizable trait</p>



<pre class="wp-block-preformatted">User::find(1)-&gt;can('update-post', $post);<br>User::find(1)-&gt;cannot('update-post', $post);</pre>



<p>Intercepting Authorization Checks</p>



<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>



<p>Chekcing in Blade template</p>



<pre class="wp-block-preformatted">@can('update-post', $post)
@endcan
// with <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8a839c8aaf8c8e81">[email&nbsp;protected]</a>('update-post', $post)
@else
@endcan
</pre>



<p>Generate a Policy</p>



<pre class="wp-block-preformatted">php artisan make:policy PostPolicy</pre>



<p>`policy` helper function</p>



<pre class="wp-block-preformatted">policy($post)-&gt;update($user, $post)</pre>



<p>Controller Authorization</p>



<pre class="wp-block-preformatted">$this-&gt;authorize('update', $post);</pre>



<p>for $user</p>



<pre class="wp-block-preformatted">$this-&gt;authorizeForUser($user, 'update', $post);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-390 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-390">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-auth-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-auth-cheat-sheet/">Laravel Auth Cheat Sheet</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Authentication</h3>



<p>Determine if the current user is authenticated</p>



<pre class="wp-block-preformatted">Auth::check();</pre>



<p>Get the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::user();</pre>



<p>Get the ID of the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::id();</pre>



<p>Attempt to authenticate a user using the given credentials</p>



<pre class="wp-block-preformatted">Auth::attempt(array('email' =&gt; $email, 'password' =&gt; $password));</pre>



<p>‘Remember me’ by passing true to Auth::attempt()</p>



<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>



<p>Log in for a single request</p>



<pre class="wp-block-preformatted">Auth::once($credentials);</pre>



<p>Log a user into the application</p>



<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>



<p>Log the given user ID into the application</p>



<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>



<p>Log the user out of the application</p>



<pre class="wp-block-preformatted">Auth::logout();</pre>



<p>Validate a user’s credentials</p>



<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>



<p>Attempt to authenticate using HTTP Basic Auth</p>



<pre class="wp-block-preformatted">Auth::basic('username');</pre>



<p>Perform a stateless HTTP Basic login attempt</p>



<pre class="wp-block-preformatted">Auth::onceBasic();</pre>



<p>Send a password reminder to a user</p>



<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>



<h3>Authorization</h3>



<p>Define abilities</p>



<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90d3fcf1e3e3d0fdf5e4f8fff4">[email&nbsp;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>



<p>Passing multiple argument</p>



<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>



<p>Check abilities</p>



<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>



<p>Specified a user for checking</p>



<pre class="wp-block-preformatted">Gate::forUser($user)-&gt;allows('update-post', $post);</pre>



<p>Through User model, using Authorizable trait</p>



<pre class="wp-block-preformatted">User::find(1)-&gt;can('update-post', $post);<br>User::find(1)-&gt;cannot('update-post', $post);</pre>



<p>Intercepting Authorization Checks</p>



<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>



<p>Chekcing in Blade template</p>



<pre class="wp-block-preformatted">@can('update-post', $post)<br>@endcan</pre>



<p>with else</p>



<pre class="wp-block-preformatted">@can('update-post', $post)<br>@else<br>@endcan</pre>



<p>Generate a Policy</p>



<p>php artisan make:policy PostPolicy</p>



<p><code>policy</code> helper function</p>



<pre class="wp-block-preformatted">policy($post)-&gt;update($user, $post)</pre>



<p>// Controller Authorization</p>



<pre class="wp-block-preformatted">$this-&gt;authorize('update', $post);</pre>



<p>for $user </p>



<pre class="wp-block-preformatted">$this-&gt;authorizeForUser($user, 'update', $post);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-350 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-350">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="pagination"><a href="https://simplecheatsheet.com/pagination/">Pagination</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<p>Auto-Magic Pagination</p>



<pre class="wp-block-preformatted">Model::paginate(15);<br>Model::where('cars', 2)-&gt;paginate(15);</pre>



<p>“Next” and “Previous” only</p>



<pre class="wp-block-preformatted">Model::where('cars', 2)-&gt;simplePaginate(15);</pre>



<p>Manual Paginator</p>



<pre class="wp-block-preformatted">Paginator::make($items, $totalItems, $perPage);</pre>



<p>Print page navigators in view</p>



<pre class="wp-block-preformatted">$variable-&gt;links();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-392 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-392">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-form"><a href="https://simplecheatsheet.com/laravel-form/">Laravel Form</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<pre class="wp-block-preformatted">Form::open(array('url' =&gt; 'foo/bar', 'method' =&gt; 'PUT'));
Form::open(array('route' =&gt; 'foo.bar'));
Form::open(array('route' =&gt; array('foo.bar', $parameter)));
Form::open(array('action' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="367059597559584244595a5a5344765b53425e5952">[email&nbsp;protected]</a>'));
Form::open(array('action' =&gt; array('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c385acac80acadb7b1acafafa6b183aea6b7abaca7">[email&nbsp;protected]</a>', $parameter)));
Form::open(array('url' =&gt; 'foo/bar', 'files' =&gt; true));
Form::close();
Form::token();
Form::model($foo, array('route' =&gt; array('foo.bar', $foo-&gt;bar)));</pre>



<h3>Form Elements</h3>



<pre class="wp-block-preformatted">Form::label('id', 'Description');
Form::label('id', 'Description', array('class' =&gt; 'foo'));
Form::text('name');
Form::text('name', $value);
Form::text('name', $value, array('class' =&gt; 'name'));
Form::textarea('name');
Form::textarea('name', $value);
Form::textarea('name', $value, array('class' =&gt; 'name'));
Form::hidden('foo', $value);
Form::password('password');
Form::password('password', array('placeholder' =&gt; 'Password'));
Form::email('name', $value, array());
Form::file('name', array('class' =&gt; 'name'));
Form::checkbox('name', 'value');</pre>



<p>Generating a checkbox that is checked</p>



<pre class="wp-block-preformatted">Form::checkbox('name', 'value', true, array('class' =&gt; 'name'));
Form::radio('name', 'value');</pre>



<p>Generating a radio input that is selected</p>



<pre class="wp-block-preformatted">Form::radio('name', 'value', true, array('class' =&gt; 'name'));
Form::select('name', array('key' =&gt; 'value'));
Form::select('name', array('key' =&gt; 'value'), 'key', array('class' =&gt; 'name'));
Form::selectRange('range', 1, 10);
Form::selectYear('year', 2011, 2015);
Form::selectMonth('month');
Form::submit('Submit!', array('class' =&gt; 'name'));
Form::button('name', array('class' =&gt; 'name'));
Form::macro('fooField', function()
{
return '&lt;input type="custom"/&gt;';
});
Form::fooField();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->

<article class="post-394 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-394">
<header class="entry-header ">
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-helper"><a href="https://simplecheatsheet.com/laravel-helper/">Laravel Helper</a></h2>
</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
	
<h3>Arrays</h3>



<p>adds a given key / value pair to the array if the given key doesn’t already exist in the array</p>



<pre class="wp-block-preformatted">array_add($array, 'key', 'value');</pre>



<p>collapse an array of arrays into a single array</p>



<pre class="wp-block-preformatted">array_collapse($array);</pre>



<p>Divide an array into two arrays. One with keys and the other with values</p>



<pre class="wp-block-preformatted">array_divide($array);</pre>



<p>Flatten a multi-dimensional associative array with dots</p>



<pre class="wp-block-preformatted">array_dot($array);</pre>



<p>Get all of the given array except for a specified array of items</p>



<pre class="wp-block-preformatted">array_except($array, array('key'));</pre>



<p>Return the first element in an array passing a given truth test</p>



<pre class="wp-block-preformatted">array_first($array, function($key, $value){}, $default);</pre>



<p>Strips keys from the array</p>



<pre class="wp-block-preformatted">array_flatten($array);</pre>



<p>Remove one or many array items from a given array using “dot” notation</p>



<pre class="wp-block-preformatted">array_forget($array, 'foo');</pre>



<p>Dot notation</p>



<pre class="wp-block-preformatted">array_forget($array, 'foo.bar');</pre>



<p>Get an item from an array using “dot” notation</p>



<pre class="wp-block-preformatted">array_get($array, 'foo', 'default');<br>array_get($array, 'foo.bar', 'default');</pre>



<p>Checks that a given item exists in an array using “dot” notation</p>



<pre class="wp-block-preformatted">array_has($array, 'products.desk');</pre>



<p>Get a subset of the items from the given array</p>



<pre class="wp-block-preformatted">array_only($array, array('key'));</pre>



<p>Return array of key =&gt; values</p>



<pre class="wp-block-preformatted">array_pluck($array, 'key');</pre>



<p>Return and remove ‘key’ from array</p>



<pre class="wp-block-preformatted">array_pull($array, 'key');</pre>



<p>Set an array item to a given value using “dot” notation</p>



<pre class="wp-block-preformatted">array_set($array, 'key', 'value');</pre>



<p>Dot notation</p>



<pre class="wp-block-preformatted">array_set($array, 'key.subkey', 'value');</pre>



<p>Sorts the array by the results of the given Closure</p>



<pre class="wp-block-preformatted">array_sort($array, function(){});</pre>



<p>Recursively sorts the array using the sort function</p>



<pre class="wp-block-preformatted">array_sort_recursive();</pre>



<p>Filters the array using the given Closure</p>



<pre class="wp-block-preformatted">array_where();</pre>



<p>First element of an array</p>



<pre class="wp-block-preformatted">head($array);</pre>



<p>Last element of an array</p>



<pre class="wp-block-preformatted">last($array);</pre>



<h3>Paths</h3>



<p>Fully qualified path to the app directory</p>



<pre class="wp-block-preformatted">app_path();</pre>



<p>Get the path to the public folder</p>



<pre class="wp-block-preformatted">base_path();</pre>



<p>Fully qualified path to the application configuration directory</p>



<pre class="wp-block-preformatted">config_path();</pre>



<p>Fully qualified path to the application’s database directory</p>



<pre class="wp-block-preformatted">database_path();</pre>



<p>Gets the path to the versioned Elixir file:</p>



<pre class="wp-block-preformatted">elixir();</pre>



<p>Fully qualified path to the public directory</p>



<pre class="wp-block-preformatted">public_path();</pre>



<p>Get the path to the storage folder</p>



<pre class="wp-block-preformatted">storage_path();</pre>



<h3>Strings</h3>



<p>Convert a value to camel case</p>



<pre class="wp-block-preformatted">camel_case($value);</pre>



<p>Get the class “basename” of the given object / class</p>



<pre class="wp-block-preformatted">class_basename($class);</pre>



<p>Escape a string</p>



<pre class="wp-block-preformatted">e('');</pre>



<p>Determine if a given string starts with a given substring</p>



<pre class="wp-block-preformatted">starts_with('Foo bar.', 'Foo');</pre>



<p>Determine if a given string ends with a given substring</p>



<pre class="wp-block-preformatted">ends_with('Foo bar.', 'bar.');</pre>



<p>Convert a string to snake case</p>



<pre class="wp-block-preformatted">snake_case('fooBar');</pre>



<p>Limits the number of characters in a string</p>



<pre class="wp-block-preformatted">str_limit();</pre>



<p>Determine if a given string contains a given substring</p>



<pre class="wp-block-preformatted">str_contains('Hello foo bar.', 'foo');</pre>



<p>Result: foo/bar/</p>



<pre class="wp-block-preformatted">str_finish('foo/bar', '/');<br>str_is('foo*', 'foobar');<br>str_plural('car');<br>str_random(25);<br>str_singular('cars');<br>str_slug("Laravel 5 Framework", "-");</pre>



<p>Result: FooBar</p>



<pre class="wp-block-preformatted">studly_case('foo_bar');<br>trans('foo.bar');<br>trans_choice('foo.bar', $count);</pre>



<h3>URLs and Links</h3>



<pre class="wp-block-preformatted">action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21674e4e624e4f55534e4d4d4453614c4455494e45">[email&nbsp;protected]</a>', $parameters);</pre>



<p>HTML Link</p>



<pre class="wp-block-preformatted">asset('img/photo.jpg', $title, $attributes);</pre>



<p>HTTPS link</p>



<pre class="wp-block-preformatted">secure_asset('img/photo.jpg', $title, $attributes);
route($route, $parameters, $absolute = true);
url('path', $parameters = array(), $secure = null);</pre>



<h3>Miscellaneous</h3>



<p>Authenticator instance (Auth)</p>



<pre class="wp-block-preformatted">auth()-&gt;user();</pre>



<p>Generates a redirect response to the user’s previous location</p>



<pre class="wp-block-preformatted">back();</pre>



<p>Hashes the given value using Bcrypt (Hash)</p>



<pre class="wp-block-preformatted">bcrypt('my-secret-password');</pre>



<p>Creates a collection instance from the supplied items</p>



<pre class="wp-block-preformatted">collect(['taylor', 'abigail']);</pre>



<p>Gets the value of a configuration variable</p>



<pre class="wp-block-preformatted">config('app.timezone', $default);</pre>



<p>Generates an HTML hidden input field containing the value of the CSRF token</p>



<pre class="wp-block-preformatted">{!! csrf_field() !!}</pre>



<p>Retrieves the value of the current CSRF token</p>



<pre class="wp-block-preformatted">$token = csrf_token();</pre>



<p>Dumps the given variable and ends execution of the script</p>



<pre class="wp-block-preformatted">dd($value);</pre>



<p>Gets the value of an environment variable or returns a default value</p>



<pre class="wp-block-preformatted">$env = env('APP_ENV');<br>$env = env('APP_ENV', 'production');</pre>



<p>Dispatches the given event to its listeners:</p>



<pre class="wp-block-preformatted">event(new UserRegistered($user));</pre>



<p>Creates a model factory builder for a given class</p>



<pre class="wp-block-preformatted">$user = factory(App\User::class)-&gt;make();</pre>



<p>Generates an HTML hidden input field containing the spoofed value of the form’s HTTP verb</p>



<pre class="wp-block-preformatted">{!! method_field('delete') !!}</pre>



<p>Retrieves an old input value flashed into the session</p>



<pre class="wp-block-preformatted">$value = old('value');<br>$value = old('value', 'default');</pre>



<p>Returns an instance of the redirector to do redirects:</p>



<pre class="wp-block-preformatted">return redirect('/home');</pre>



<p>Returns the current request instance or obtains an input item</p>



<pre class="wp-block-preformatted">$value = request('key', $default = null)</pre>



<p>Creates a response instance or obtains an instance of the response factory</p>



<pre class="wp-block-preformatted">return response('Hello World', 200, $headers);</pre>



<p>Used to get / set a session value</p>



<pre class="wp-block-preformatted">$value = session('key');<br>$value = session()-&gt;get('key');<br>session()-&gt;put('key', $value);</pre>



<p>Will simply return the value it is given.</p>



<pre class="wp-block-preformatted">value(function(){ return 'bar'; });</pre>



<p>Retrieves a view instance</p>



<pre class="wp-block-preformatted">return view('auth.login');</pre>



<p>Returns the value it is given</p>



<pre class="wp-block-preformatted">$value = with(new Foo)-&gt;work();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">

</div><!-- .section-inner -->


</article><!-- .post -->
	<div class="ads">
		<!-- Responsive -->
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7014744652532083" data-ad-slot="2930178966" data-ad-format="auto" data-full-width-responsive="true"></ins>
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
		<div class="js-toc">
	<ul class="toc-list">
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-queue">Laravel Queue</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-redirect">Laravel Redirect</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-route">Laravel Route</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-config">Laravel Config</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-file">Laravel File</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#lang">Lang</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-ssh">Laravel SSH</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-cache">Laravel Cache</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-html">Laravel HTML</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-model">Laravel Model</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-db-cheat-sheet">Laravel DB Cheat Sheet</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-validation">Laravel Validation</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-view">Laravel View</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-blade">Laravel Blade</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-mail">Laravel Mail</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-session">Laravel Session</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-response">Laravel Response</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-event">Laravel Event</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-input">Laravel Input</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-url">Laravel URL</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-log">Laravel Log</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-environment">Laravel Environment</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-string">Laravel String</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-composer-command">Laravel Composer Command</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-artisan">Laravel Artisan</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-cookie">Laravel Cookie</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-messages">Laravel Messages</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-security">Laravel Security</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-schema">Laravel Schema</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-request">Laravel Request</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-container">Laravel Container</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-auth">Laravel Auth</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-auth-cheat-sheet">Laravel Auth Cheat Sheet</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#pagination">Pagination</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-form">Laravel Form</a>
		</li>
						<li class="toc-list-item">
			<a class="toc-link" href="#laravel-helper">Laravel Helper</a>
		</li>
					</ul>
	<div class="ads">

		<!-- Responsive -->
		<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7014744652532083" data-ad-slot="2930178966" data-ad-format="auto" data-full-width-responsive="true"></ins>
		
	</div>
</div>

	</div>
	<div class="extra">

</div></main><!-- #site-content -->

<div class="footer-nav-widgets-wrapper header-footer-group">

<div class="footer-inner section-inner">

	

<aside class="footer-widgets-outer-wrapper" role="complementary">

<div class="footer-widgets-wrapper">




				
				
			</div><!-- .footer-widgets-wrapper -->

		</aside><!-- .footer-widgets-outer-wrapper -->

	
</div><!-- .footer-inner -->

</div><!-- .footer-nav-widgets-wrapper -->

	<footer id="site-footer" role="contentinfo" class="header-footer-group">

		<div class="section-inner">


<a class="to-the-top" href="#site-header">
<span class="to-the-top-long">
To the top <span class="arrow" aria-hidden="true">↑</span>						
</span><!-- .to-the-top-long -->
<span class="to-the-top-short">
Up <span class="arrow" aria-hidden="true">↑</span>						

</span><!-- .to-the-top-short -->
</a><!-- .to-the-top -->

		</div><!-- .section-inner -->

	</footer><!-- #site-footer -->

<script src="https://simplecheatsheet.com/wp-includes/js/wp-embed.min.js?ver=5.6.4" id="wp-embed-js"></script>
<script>
/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
</script>
<script src="https://stats.wp.com/e-202134.js" defer=""></script>
<script>
_stq = window._stq || [];
_stq.push([ 'view', {v:'ext',j:'1:9.8.1',blog:'177517120',post:'0',tz:'7',srv:'simplecheatsheet.com'} ]);
_stq.push([ 'clickTrackerInit', '177517120', '0' ]);
</script>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-500px" viewBox="0 0 24 24">
<path d="M6.94026,15.1412c.00437.01213.108.29862.168.44064a6.55008,6.55008,0,1,0,6.03191-9.09557,6.68654,6.68654,0,0,0-2.58357.51467A8.53914,8.53914,0,0,0,8.21268,8.61344L8.209,8.61725V3.22948l9.0504-.00008c.32934-.0036.32934-.46353.32934-.61466s0-.61091-.33035-.61467L7.47248,2a.43.43,0,0,0-.43131.42692v7.58355c0,.24466.30476.42131.58793.4819.553.11812.68074-.05864.81617-.2457l.018-.02481A10.52673,10.52673,0,0,1,9.32258,9.258a5.35268,5.35268,0,1,1,7.58985,7.54976,5.417,5.417,0,0,1-3.80867,1.56365,5.17483,5.17483,0,0,1-2.69822-.74478l.00342-4.61111a2.79372,2.79372,0,0,1,.71372-1.78792,2.61611,2.61611,0,0,1,1.98282-.89477,2.75683,2.75683,0,0,1,1.95525.79477,2.66867,2.66867,0,0,1,.79656,1.909,2.724,2.724,0,0,1-2.75849,2.748,4.94651,4.94651,0,0,1-.86254-.13719c-.31234-.093-.44519.34058-.48892.48349-.16811.54966.08453.65862.13687.67489a3.75751,3.75751,0,0,0,1.25234.18375,3.94634,3.94634,0,1,0-2.82444-6.742,3.67478,3.67478,0,0,0-1.13028,2.584l-.00041.02323c-.0035.11667-.00579,2.881-.00644,3.78811l-.00407-.00451a6.18521,6.18521,0,0,1-1.0851-1.86092c-.10544-.27856-.34358-.22925-.66857-.12917-.14192.04372-.57386.17677-.47833.489Zm4.65165-1.08338a.51346.51346,0,0,0,.19513.31818l.02276.022a.52945.52945,0,0,0,.3517.18416.24242.24242,0,0,0,.16577-.0611c.05473-.05082.67382-.67812.73287-.738l.69041.68819a.28978.28978,0,0,0,.21437.11032.53239.53239,0,0,0,.35708-.19486c.29792-.30419.14885-.46821.07676-.54751l-.69954-.69975.72952-.73469c.16-.17311.01874-.35708-.12218-.498-.20461-.20461-.402-.25742-.52855-.14083l-.7254.72665-.73354-.73375a.20128.20128,0,0,0-.14179-.05695.54135.54135,0,0,0-.34379.19648c-.22561.22555-.274.38149-.15656.5059l.73374.7315-.72942.73072A.26589.26589,0,0,0,11.59191,14.05782Zm1.59866-9.915A8.86081,8.86081,0,0,0,9.854,4.776a.26169.26169,0,0,0-.16938.22759.92978.92978,0,0,0,.08619.42094c.05682.14524.20779.531.50006.41955a8.40969,8.40969,0,0,1,2.91968-.55484,7.87875,7.87875,0,0,1,3.086.62286,8.61817,8.61817,0,0,1,2.30562,1.49315.2781.2781,0,0,0,.18318.07586c.15529,0,.30425-.15253.43167-.29551.21268-.23861.35873-.4369.1492-.63538a8.50425,8.50425,0,0,0-2.62312-1.694A9.0177,9.0177,0,0,0,13.19058,4.14283ZM19.50945,18.6236h0a.93171.93171,0,0,0-.36642-.25406.26589.26589,0,0,0-.27613.06613l-.06943.06929A7.90606,7.90606,0,0,1,7.60639,18.505a7.57284,7.57284,0,0,1-1.696-2.51537,8.58715,8.58715,0,0,1-.5147-1.77754l-.00871-.04864c-.04939-.25873-.28755-.27684-.62981-.22448-.14234.02178-.5755.088-.53426.39969l.001.00712a9.08807,9.08807,0,0,0,15.406,4.99094c.00193-.00192.04753-.04718.0725-.07436C19.79425,19.16234,19.87422,18.98728,19.50945,18.6236Z"></path>
</symbol>
<symbol id="icon-amazon" viewBox="0 0 24 24">
<path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path>
</symbol>
<symbol id="icon-apple" viewBox="0 0 24 24">
<path d="M20.07,17.586a10.874,10.874,0,0,1-1.075,1.933,9.822,9.822,0,0,1-1.385,1.674,2.687,2.687,0,0,1-1.78.784,4.462,4.462,0,0,1-1.644-.393,4.718,4.718,0,0,0-1.77-.391,4.878,4.878,0,0,0-1.82.391A4.9,4.9,0,0,1,9.021,22a2.53,2.53,0,0,1-1.82-.8A10.314,10.314,0,0,1,5.752,19.46,11.987,11.987,0,0,1,4.22,16.417a11.143,11.143,0,0,1-.643-3.627,6.623,6.623,0,0,1,.87-3.465A5.1,5.1,0,0,1,6.268,7.483a4.9,4.9,0,0,1,2.463-.695,5.8,5.8,0,0,1,1.9.443,6.123,6.123,0,0,0,1.511.444,9.04,9.04,0,0,0,1.675-.523,5.537,5.537,0,0,1,2.277-.4,4.835,4.835,0,0,1,3.788,1.994,4.213,4.213,0,0,0-2.235,3.827,4.222,4.222,0,0,0,1.386,3.181,4.556,4.556,0,0,0,1.385.909q-.167.483-.353.927ZM16.211,2.4a4.267,4.267,0,0,1-1.094,2.8,3.726,3.726,0,0,1-3.1,1.528A3.114,3.114,0,0,1,12,6.347a4.384,4.384,0,0,1,1.16-2.828,4.467,4.467,0,0,1,1.414-1.061A4.215,4.215,0,0,1,16.19,2a3.633,3.633,0,0,1,.021.4Z"></path>
</symbol>
<symbol id="icon-bandcamp" viewBox="0 0 24 24">
<path d="M15.27 17.289 3 17.289 8.73 6.711 21 6.711 15.27 17.289"></path>
</symbol>
<symbol id="icon-behance" viewBox="0 0 24 24">
<path d="M7.799,5.698c0.589,0,1.12,0.051,1.606,0.156c0.482,0.102,0.894,0.273,1.241,0.507c0.344,0.235,0.612,0.546,0.804,0.938 c0.188,0.387,0.281,0.871,0.281,1.443c0,0.619-0.141,1.137-0.421,1.551c-0.284,0.413-0.7,0.751-1.255,1.014 c0.756,0.218,1.317,0.601,1.689,1.146c0.374,0.549,0.557,1.205,0.557,1.975c0,0.623-0.12,1.161-0.359,1.612 c-0.241,0.457-0.569,0.828-0.973,1.114c-0.408,0.288-0.876,0.5-1.399,0.637C9.052,17.931,8.514,18,7.963,18H2V5.698H7.799 M7.449,10.668c0.481,0,0.878-0.114,1.192-0.345c0.311-0.228,0.463-0.603,0.463-1.119c0-0.286-0.051-0.523-0.152-0.707 C8.848,8.315,8.711,8.171,8.536,8.07C8.362,7.966,8.166,7.894,7.94,7.854c-0.224-0.044-0.457-0.06-0.697-0.06H4.709v2.874H7.449z M7.6,15.905c0.267,0,0.521-0.024,0.759-0.077c0.243-0.053,0.457-0.137,0.637-0.261c0.182-0.12,0.332-0.283,0.441-0.491 C9.547,14.87,9.6,14.602,9.6,14.278c0-0.633-0.18-1.084-0.533-1.357c-0.356-0.27-0.83-0.404-1.413-0.404H4.709v3.388L7.6,15.905z M16.162,15.864c0.367,0.358,0.897,0.538,1.583,0.538c0.493,0,0.92-0.125,1.277-0.374c0.354-0.248,0.571-0.514,0.654-0.79h2.155 c-0.347,1.072-0.872,1.838-1.589,2.299C19.534,18,18.67,18.23,17.662,18.23c-0.701,0-1.332-0.113-1.899-0.337 c-0.567-0.227-1.041-0.544-1.439-0.958c-0.389-0.415-0.689-0.907-0.904-1.484c-0.213-0.574-0.32-1.21-0.32-1.899 c0-0.666,0.11-1.288,0.329-1.863c0.222-0.577,0.529-1.075,0.933-1.492c0.406-0.42,0.885-0.751,1.444-0.994 c0.558-0.241,1.175-0.363,1.857-0.363c0.754,0,1.414,0.145,1.98,0.44c0.563,0.291,1.026,0.686,1.389,1.181 c0.363,0.493,0.622,1.057,0.783,1.69c0.16,0.632,0.217,1.292,0.171,1.983h-6.428C15.557,14.84,15.795,15.506,16.162,15.864 M18.973,11.184c-0.291-0.321-0.783-0.496-1.384-0.496c-0.39,0-0.714,0.066-0.973,0.2c-0.254,0.132-0.461,0.297-0.621,0.491 c-0.157,0.197-0.265,0.405-0.328,0.628c-0.063,0.217-0.101,0.413-0.111,0.587h3.98C19.478,11.969,19.265,11.509,18.973,11.184z M15.057,7.738h4.985V6.524h-4.985L15.057,7.738z"></path>
</symbol>
<symbol id="icon-blogger" viewBox="0 0 24 24">
<path d="M14.722,14.019c0,0.361-0.293,0.654-0.654,0.654H9.977c-0.361,0-0.654-0.293-0.654-0.654s0.293-0.654,0.654-0.654h4.091C14.429,13.365,14.722,13.658,14.722,14.019z M9.981,10.698h2.038c0.382,0,0.692-0.31,0.692-0.692c0-0.382-0.31-0.692-0.692-0.692H9.981c-0.382,0-0.692,0.31-0.692,0.692C9.289,10.388,9.599,10.698,9.981,10.698z M21,5v14c0,1.105-0.895,2-2,2H5c-1.105,0-2-0.895-2-2V5c0-1.105,0.895-2,2-2h14C20.105,3,21,3.895,21,5z M17.544,11.39c0-0.398-0.322-0.72-0.72-0.72h-0.607l-0.013,0.001c-0.38,0-0.692-0.295-0.718-0.668l-0.001-0.008c0-1.988-1.611-3.599-3.599-3.599h-1.816c-1.988,0-3.599,1.611-3.599,3.599v3.947c0,1.987,1.611,3.599,3.599,3.599h3.874c1.988,0,3.599-1.611,3.599-3.599L17.544,11.39z"></path>
</symbol>
<symbol id="icon-chain" viewBox="0 0 24 24">
<path d="M19.647,16.706a1.134,1.134,0,0,0-.343-.833l-2.549-2.549a1.134,1.134,0,0,0-.833-.343,1.168,1.168,0,0,0-.883.392l.233.226q.2.189.264.264a2.922,2.922,0,0,1,.184.233.986.986,0,0,1,.159.312,1.242,1.242,0,0,1,.043.337,1.172,1.172,0,0,1-1.176,1.176,1.237,1.237,0,0,1-.337-.043,1,1,0,0,1-.312-.159,2.76,2.76,0,0,1-.233-.184q-.073-.068-.264-.264l-.226-.233a1.19,1.19,0,0,0-.4.895,1.134,1.134,0,0,0,.343.833L15.837,19.3a1.13,1.13,0,0,0,.833.331,1.18,1.18,0,0,0,.833-.318l1.8-1.789a1.12,1.12,0,0,0,.343-.821Zm-8.615-8.64a1.134,1.134,0,0,0-.343-.833L8.163,4.7a1.134,1.134,0,0,0-.833-.343,1.184,1.184,0,0,0-.833.331L4.7,6.473a1.12,1.12,0,0,0-.343.821,1.134,1.134,0,0,0,.343.833l2.549,2.549a1.13,1.13,0,0,0,.833.331,1.184,1.184,0,0,0,.883-.38L8.728,10.4q-.2-.189-.264-.264A2.922,2.922,0,0,1,8.28,9.9a.986.986,0,0,1-.159-.312,1.242,1.242,0,0,1-.043-.337A1.172,1.172,0,0,1,9.254,8.079a1.237,1.237,0,0,1,.337.043,1,1,0,0,1,.312.159,2.761,2.761,0,0,1,.233.184q.073.068.264.264l.226.233a1.19,1.19,0,0,0,.4-.895ZM22,16.706a3.343,3.343,0,0,1-1.042,2.488l-1.8,1.789a3.536,3.536,0,0,1-4.988-.025l-2.525-2.537a3.384,3.384,0,0,1-1.017-2.488,3.448,3.448,0,0,1,1.078-2.561l-1.078-1.078a3.434,3.434,0,0,1-2.549,1.078,3.4,3.4,0,0,1-2.5-1.029L3.029,9.794A3.4,3.4,0,0,1,2,7.294,3.343,3.343,0,0,1,3.042,4.806l1.8-1.789A3.384,3.384,0,0,1,7.331,2a3.357,3.357,0,0,1,2.5,1.042l2.525,2.537a3.384,3.384,0,0,1,1.017,2.488,3.448,3.448,0,0,1-1.078,2.561l1.078,1.078a3.551,3.551,0,0,1,5.049-.049l2.549,2.549A3.4,3.4,0,0,1,22,16.706Z"></path>
</symbol>
<symbol id="icon-codepen" viewBox="0 0 24 24">
<path d="M22.016,8.84c-0.002-0.013-0.005-0.025-0.007-0.037c-0.005-0.025-0.008-0.048-0.015-0.072 c-0.003-0.015-0.01-0.028-0.013-0.042c-0.008-0.02-0.015-0.04-0.023-0.062c-0.007-0.015-0.013-0.028-0.02-0.042 c-0.008-0.02-0.018-0.037-0.03-0.057c-0.007-0.013-0.017-0.027-0.025-0.038c-0.012-0.018-0.023-0.035-0.035-0.052 c-0.01-0.013-0.02-0.025-0.03-0.037c-0.015-0.017-0.028-0.032-0.043-0.045c-0.01-0.012-0.022-0.023-0.035-0.035 c-0.015-0.015-0.032-0.028-0.048-0.04c-0.012-0.01-0.025-0.02-0.037-0.03c-0.005-0.003-0.01-0.008-0.015-0.012l-9.161-6.096 c-0.289-0.192-0.666-0.192-0.955,0L2.359,8.237C2.354,8.24,2.349,8.245,2.344,8.249L2.306,8.277 c-0.017,0.013-0.033,0.027-0.048,0.04C2.246,8.331,2.234,8.342,2.222,8.352c-0.015,0.015-0.028,0.03-0.042,0.047 c-0.012,0.013-0.022,0.023-0.03,0.037C2.139,8.453,2.125,8.471,2.115,8.488C2.107,8.501,2.099,8.514,2.09,8.526 C2.079,8.548,2.069,8.565,2.06,8.585C2.054,8.6,2.047,8.613,2.04,8.626C2.032,8.648,2.025,8.67,2.019,8.69 c-0.005,0.013-0.01,0.027-0.013,0.042C1.999,8.755,1.995,8.778,1.99,8.803C1.989,8.817,1.985,8.828,1.984,8.84 C1.978,8.879,1.975,8.915,1.975,8.954v6.093c0,0.037,0.003,0.075,0.008,0.112c0.002,0.012,0.005,0.025,0.007,0.038 c0.005,0.023,0.008,0.047,0.015,0.072c0.003,0.015,0.008,0.028,0.013,0.04c0.007,0.022,0.013,0.042,0.022,0.063 c0.007,0.015,0.013,0.028,0.02,0.04c0.008,0.02,0.018,0.038,0.03,0.058c0.007,0.013,0.015,0.027,0.025,0.038 c0.012,0.018,0.023,0.035,0.035,0.052c0.01,0.013,0.02,0.025,0.03,0.037c0.013,0.015,0.028,0.032,0.042,0.045 c0.012,0.012,0.023,0.023,0.035,0.035c0.015,0.013,0.032,0.028,0.048,0.04l0.038,0.03c0.005,0.003,0.01,0.007,0.013,0.01 l9.163,6.095C11.668,21.953,11.833,22,12,22c0.167,0,0.332-0.047,0.478-0.144l9.163-6.095l0.015-0.01 c0.013-0.01,0.027-0.02,0.037-0.03c0.018-0.013,0.035-0.028,0.048-0.04c0.013-0.012,0.025-0.023,0.035-0.035 c0.017-0.015,0.03-0.032,0.043-0.045c0.01-0.013,0.02-0.025,0.03-0.037c0.013-0.018,0.025-0.035,0.035-0.052 c0.008-0.013,0.018-0.027,0.025-0.038c0.012-0.02,0.022-0.038,0.03-0.058c0.007-0.013,0.013-0.027,0.02-0.04 c0.008-0.022,0.015-0.042,0.023-0.063c0.003-0.013,0.01-0.027,0.013-0.04c0.007-0.025,0.01-0.048,0.015-0.072 c0.002-0.013,0.005-0.027,0.007-0.037c0.003-0.042,0.007-0.079,0.007-0.117V8.954C22.025,8.915,22.022,8.879,22.016,8.84z M12.862,4.464l6.751,4.49l-3.016,2.013l-3.735-2.492V4.464z M11.138,4.464v4.009l-3.735,2.494L4.389,8.954L11.138,4.464z M3.699,10.562L5.853,12l-2.155,1.438V10.562z M11.138,19.536l-6.749-4.491l3.015-2.011l3.735,2.492V19.536z M12,14.035L8.953,12 L12,9.966L15.047,12L12,14.035z M12.862,19.536v-4.009l3.735-2.492l3.016,2.011L12.862,19.536z M20.303,13.438L18.147,12 l2.156-1.438L20.303,13.438z"></path>
</symbol>
<symbol id="icon-deviantart" viewBox="0 0 24 24">
<path d="M 18.19 5.636 18.19 2 18.188 2 14.553 2 14.19 2.366 12.474 5.636 11.935 6 5.81 6 5.81 10.994 9.177 10.994 9.477 11.357 5.81 18.363 5.81 22 5.811 22 9.447 22 9.81 21.634 11.526 18.364 12.065 18 18.19 18 18.19 13.006 14.823 13.006 14.523 12.641 18.19 5.636z"></path>
</symbol>
<symbol id="icon-digg" viewBox="0 0 24 24">
<path d="M4.5,5.4h2.2V16H1V8.5h3.5V5.4L4.5,5.4z M4.5,14.2v-4H3.2v4H4.5z M7.6,8.5V16h2.2V8.5C9.8,8.5,7.6,8.5,7.6,8.5z M7.6,5.4 v2.2h2.2V5.4C9.8,5.4,7.6,5.4,7.6,5.4z M10.7,8.5h5.7v10.1h-5.7v-1.8h3.5V16h-3.5C10.7,16,10.7,8.5,10.7,8.5z M14.2,14.2v-4h-1.3v4 H14.2z M17.3,8.5H23v10.1h-5.7v-1.8h3.5V16h-3.5C17.3,16,17.3,8.5,17.3,8.5z M20.8,14.2v-4h-1.3v4H20.8z"></path>
</symbol>
<symbol id="icon-discord" viewBox="0 0 24 24">
<path d="M10.227 9.957c-.559 0-1 .48-1 1.063 0 .585.453 1.066 1 1.066.558 0 1-.48 1-1.066.007-.582-.442-1.063-1-1.063zm3.574 0c-.559 0-.996.48-.996 1.063 0 .585.449 1.066.996 1.066.558 0 1-.48 1-1.066 0-.582-.442-1.063-1-1.063zm0 0 M18.563 1.918H5.438c-1.11 0-2.008.879-2.008 1.973v12.957c0 1.093.898 1.972 2.007 1.972h11.11l-.52-1.773 1.254 1.14 1.184 1.075 2.105 1.82V3.891c0-1.094-.898-1.973-2.008-1.973zM14.78 14.434s-.351-.414-.644-.778c1.281-.355 1.773-1.14 1.773-1.14a5.745 5.745 0 0 1-1.129.566c-.488.2-.96.336-1.418.41a7.07 7.07 0 0 1-2.539-.008 8.133 8.133 0 0 1-1.441-.414 6.219 6.219 0 0 1-.715-.324c-.027-.02-.059-.027-.086-.047a.113.113 0 0 1-.039-.031c-.176-.094-.273-.16-.273-.16s.468.765 1.71 1.129c-.293.363-.656.797-.656.797-2.164-.067-2.984-1.457-2.984-1.457 0-3.086 1.41-5.586 1.41-5.586 1.41-1.036 2.75-1.008 2.75-1.008l.098.113c-1.762.5-2.575 1.258-2.575 1.258s.215-.117.579-.277c1.046-.454 1.878-.579 2.222-.606.059-.008.11-.02.168-.02a8.728 8.728 0 0 1 1.977-.019c.933.106 1.93.375 2.949.922 0 0-.773-.719-2.438-1.219l.137-.152s1.34-.028 2.75 1.008c0 0 1.414 2.5 1.414 5.586 0 0-.836 1.39-3 1.457zm0 0"></path>
</symbol>
<symbol id="icon-dribbble" viewBox="0 0 24 24">
<path d="M12,22C6.486,22,2,17.514,2,12S6.486,2,12,2c5.514,0,10,4.486,10,10S17.514,22,12,22z M20.434,13.369 c-0.292-0.092-2.644-0.794-5.32-0.365c1.117,3.07,1.572,5.57,1.659,6.09C18.689,17.798,20.053,15.745,20.434,13.369z M15.336,19.876c-0.127-0.749-0.623-3.361-1.822-6.477c-0.019,0.006-0.038,0.013-0.056,0.019c-4.818,1.679-6.547,5.02-6.701,5.334 c1.448,1.129,3.268,1.803,5.243,1.803C13.183,20.555,14.311,20.313,15.336,19.876z M5.654,17.724 c0.193-0.331,2.538-4.213,6.943-5.637c0.111-0.036,0.224-0.07,0.337-0.102c-0.214-0.485-0.448-0.971-0.692-1.45 c-4.266,1.277-8.405,1.223-8.778,1.216c-0.003,0.087-0.004,0.174-0.004,0.261C3.458,14.207,4.29,16.21,5.654,17.724z M3.639,10.264 c0.382,0.005,3.901,0.02,7.897-1.041c-1.415-2.516-2.942-4.631-3.167-4.94C5.979,5.41,4.193,7.613,3.639,10.264z M9.998,3.709 c0.236,0.316,1.787,2.429,3.187,5c3.037-1.138,4.323-2.867,4.477-3.085C16.154,4.286,14.17,3.471,12,3.471 C11.311,3.471,10.641,3.554,9.998,3.709z M18.612,6.612C18.432,6.855,17,8.69,13.842,9.979c0.199,0.407,0.389,0.821,0.567,1.237 c0.063,0.148,0.124,0.295,0.184,0.441c2.842-0.357,5.666,0.215,5.948,0.275C20.522,9.916,19.801,8.065,18.612,6.612z"></path>
</symbol>
<symbol id="icon-dropbox" viewBox="0 0 24 24">
<path d="M12,6.134L6.069,9.797L2,6.54l5.883-3.843L12,6.134z M2,13.054l5.883,3.843L12,13.459L6.069,9.797L2,13.054z M12,13.459 l4.116,3.439L22,13.054l-4.069-3.257L12,13.459z M22,6.54l-5.884-3.843L12,6.134l5.931,3.663L22,6.54z M12.011,14.2l-4.129,3.426 l-1.767-1.153v1.291l5.896,3.539l5.897-3.539v-1.291l-1.769,1.153L12.011,14.2z"></path>
</symbol>
<symbol id="icon-etsy" viewBox="0 0 24 24">
<path d="M9.16033,4.038c0-.27174.02717-.43478.48913-.43478h6.22283c1.087,0,1.68478.92391,2.11957,2.663l.35326,1.38587h1.05978C19.59511,3.712,19.75815,2,19.75815,2s-2.663.29891-4.23913.29891h-7.962L3.29076,2.163v1.1413L4.731,3.57609c1.00543.19022,1.25.40761,1.33152,1.33152,0,0,.08152,2.71739.08152,7.20109s-.08152,7.17391-.08152,7.17391c0,.81522-.32609,1.11413-1.33152,1.30435l-1.44022.27174V22l4.2663-.13587h7.11957c1.60326,0,5.32609.13587,5.32609.13587.08152-.97826.625-5.40761.70652-5.89674H19.7038L18.644,18.52174c-.84239,1.90217-2.06522,2.038-3.42391,2.038H11.1712c-1.3587,0-2.01087-.54348-2.01087-1.712V12.65217s3.0163,0,3.99457.08152c.76087.05435,1.22283.27174,1.46739,1.33152l.32609,1.413h1.16848l-.08152-3.55978.163-3.587H15.02989l-.38043,1.57609c-.24457,1.03261-.40761,1.22283-1.46739,1.33152-1.38587.13587-4.02174.1087-4.02174.1087Z"></path>
</symbol>
<symbol id="icon-eventbrite" viewBox="0 0 24 24">
<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M18.041,3.931L5.959,3C4.325,3,3,4.325,3,5.959v12.083C3,19.675,4.325,21,5.959,21l12.083-0.931C19.699,19.983,21,18.744,21,17.11V6.89C21,5.256,19.741,4.027,18.041,3.931zM16.933,8.17c-0.082,0.215-0.192,0.432-0.378,0.551c-0.188,0.122-0.489,0.132-0.799,0.132c-1.521,0-3.062-0.048-4.607-0.048c-0.152,0.708-0.304,1.416-0.451,2.128c0.932-0.004,1.873,0.005,2.81,0.005c0.726,0,1.462-0.069,1.586,0.525c0.04,0.189-0.001,0.426-0.052,0.615c-0.105,0.38-0.258,0.676-0.625,0.783c-0.185,0.054-0.408,0.058-0.646,0.058c-1.145,0-2.345,0.017-3.493,0.02c-0.169,0.772-0.328,1.553-0.489,2.333c1.57-0.005,3.067-0.041,4.633-0.058c0.627-0.007,1.085,0.194,1.009,0.85c-0.031,0.262-0.098,0.497-0.211,0.725c-0.102,0.208-0.248,0.376-0.488,0.452c-0.237,0.075-0.541,0.064-0.862,0.078c-0.304,0.014-0.614,0.008-0.924,0.016c-0.309,0.009-0.619,0.022-0.919,0.022c-1.253,0-2.429,0.08-3.683,0.073c-0.603-0.004-1.014-0.249-1.124-0.757c-0.059-0.273-0.018-0.58,0.036-0.841c0.541-2.592,1.083-5.176,1.629-7.763c0.056-0.265,0.114-0.511,0.225-0.714C9.279,7.051,9.534,6.834,9.9,6.735c0.368-0.099,0.883-0.047,1.344-0.047c0.305,0,0.612,0.008,0.914,0.016c0.925,0.026,1.817,0.03,2.747,0.053c0.304,0.007,0.615,0.016,0.915,0.016c0.621,0,1.17,0.073,1.245,0.614C17.104,7.675,17.014,7.954,16.933,8.17z"></path>
</symbol>
<symbol id="icon-facebook" viewBox="0 0 24 24">
<path d="M12,2C6.5,2,2,6.5,2,12c0,5,3.7,9.1,8.4,9.9v-7H7.9V12h2.5V9.8c0-2.5,1.5-3.9,3.8-3.9c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3 c-1.2,0-1.6,0.8-1.6,1.6V12h2.8l-0.4,2.9h-2.3v7C18.3,21.1,22,17,22,12C22,6.5,17.5,2,12,2z"></path>
</symbol>
<symbol id="icon-feed" viewBox="0 0 24 24">
<path d="M2,8.667V12c5.515,0,10,4.485,10,10h3.333C15.333,14.637,9.363,8.667,2,8.667z M2,2v3.333 c9.19,0,16.667,7.477,16.667,16.667H22C22,10.955,13.045,2,2,2z M4.5,17C3.118,17,2,18.12,2,19.5S3.118,22,4.5,22S7,20.88,7,19.5 S5.882,17,4.5,17z"></path>
</symbol>
<symbol id="icon-flickr" viewBox="0 0 24 24">
<path d="M6.5,7c-2.75,0-5,2.25-5,5s2.25,5,5,5s5-2.25,5-5S9.25,7,6.5,7z M17.5,7c-2.75,0-5,2.25-5,5s2.25,5,5,5s5-2.25,5-5 S20.25,7,17.5,7z"></path>
</symbol>
<symbol id="icon-foursquare" viewBox="0 0 24 24">
<path d="M17.573,2c0,0-9.197,0-10.668,0S5,3.107,5,3.805s0,16.948,0,16.948c0,0.785,0.422,1.077,0.66,1.172 c0.238,0.097,0.892,0.177,1.285-0.275c0,0,5.035-5.843,5.122-5.93c0.132-0.132,0.132-0.132,0.262-0.132h3.26 c1.368,0,1.588-0.977,1.732-1.552c0.078-0.318,0.692-3.428,1.225-6.122l0.675-3.368C19.56,2.893,19.14,2,17.573,2z M16.495,7.22 c-0.053,0.252-0.372,0.518-0.665,0.518c-0.293,0-4.157,0-4.157,0c-0.467,0-0.802,0.318-0.802,0.787v0.508 c0,0.467,0.337,0.798,0.805,0.798c0,0,3.197,0,3.528,0s0.655,0.362,0.583,0.715c-0.072,0.353-0.407,2.102-0.448,2.295 c-0.04,0.193-0.262,0.523-0.655,0.523c-0.33,0-2.88,0-2.88,0c-0.523,0-0.683,0.068-1.033,0.503 c-0.35,0.437-3.505,4.223-3.505,4.223c-0.032,0.035-0.063,0.027-0.063-0.015V4.852c0-0.298,0.26-0.648,0.648-0.648 c0,0,8.228,0,8.562,0c0.315,0,0.61,0.297,0.528,0.683L16.495,7.22z"></path>
</symbol>
<symbol id="icon-ghost" viewBox="0 0 24 24">
<path d="M10.203,20.997H3.005v-3.599h7.198V20.997z M20.995,17.398h-7.193v3.599h7.193V17.398z M20.998,10.2H3v3.599h17.998V10.2zM13.803,3.003H3.005v3.599h10.798V3.003z M21,3.003h-3.599v3.599H21V3.003z"></path>
</symbol>
<symbol id="icon-goodreads" viewBox="0 0 24 24">
<path d="M17.3,17.5c-0.2,0.8-0.5,1.4-1,1.9c-0.4,0.5-1,0.9-1.7,1.2C13.9,20.9,13.1,21,12,21c-0.6,0-1.3-0.1-1.9-0.2 c-0.6-0.1-1.1-0.4-1.6-0.7c-0.5-0.3-0.9-0.7-1.2-1.2c-0.3-0.5-0.5-1.1-0.5-1.7h1.5c0.1,0.5,0.2,0.9,0.5,1.2 c0.2,0.3,0.5,0.6,0.9,0.8c0.3,0.2,0.7,0.3,1.1,0.4c0.4,0.1,0.8,0.1,1.2,0.1c1.4,0,2.5-0.4,3.1-1.2c0.6-0.8,1-2,1-3.5v-1.7h0 c-0.4,0.8-0.9,1.4-1.6,1.9c-0.7,0.5-1.5,0.7-2.4,0.7c-1,0-1.9-0.2-2.6-0.5C8.7,15,8.1,14.5,7.7,14c-0.5-0.6-0.8-1.3-1-2.1 c-0.2-0.8-0.3-1.6-0.3-2.5c0-0.9,0.1-1.7,0.4-2.5c0.3-0.8,0.6-1.5,1.1-2c0.5-0.6,1.1-1,1.8-1.4C10.3,3.2,11.1,3,12,3 c0.5,0,0.9,0.1,1.3,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.6,0.5,0.9,0.8c0.3,0.3,0.5,0.6,0.6,1h0V3.4h1.5V15 C17.6,15.9,17.5,16.7,17.3,17.5z M13.8,14.1c0.5-0.3,0.9-0.7,1.3-1.1c0.3-0.5,0.6-1,0.8-1.6c0.2-0.6,0.3-1.2,0.3-1.9 c0-0.6-0.1-1.2-0.2-1.9c-0.1-0.6-0.4-1.2-0.7-1.7c-0.3-0.5-0.7-0.9-1.3-1.2c-0.5-0.3-1.1-0.5-1.9-0.5s-1.4,0.2-1.9,0.5 c-0.5,0.3-1,0.7-1.3,1.2C8.5,6.4,8.3,7,8.1,7.6C8,8.2,7.9,8.9,7.9,9.5c0,0.6,0.1,1.3,0.2,1.9C8.3,12,8.6,12.5,8.9,13 c0.3,0.5,0.8,0.8,1.3,1.1c0.5,0.3,1.1,0.4,1.9,0.4C12.7,14.5,13.3,14.4,13.8,14.1z"></path>
</symbol>
<symbol id="icon-google" viewBox="0 0 24 24">
<path d="M12.02,10.18v3.72v0.01h5.51c-0.26,1.57-1.67,4.22-5.5,4.22c-3.31,0-6.01-2.75-6.01-6.12s2.7-6.12,6.01-6.12 c1.87,0,3.13,0.8,3.85,1.48l2.84-2.76C16.99,2.99,14.73,2,12.03,2c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.77,0,9.6-4.06,9.6-9.77 c0-0.83-0.11-1.42-0.25-2.05H12.02z"></path>
</symbol>
<symbol id="icon-github" viewBox="0 0 24 24">
<path d="M12,2C6.477,2,2,6.477,2,12c0,4.419,2.865,8.166,6.839,9.489c0.5,0.09,0.682-0.218,0.682-0.484 c0-0.236-0.009-0.866-0.014-1.699c-2.782,0.602-3.369-1.34-3.369-1.34c-0.455-1.157-1.11-1.465-1.11-1.465 c-0.909-0.62,0.069-0.608,0.069-0.608c1.004,0.071,1.532,1.03,1.532,1.03c0.891,1.529,2.341,1.089,2.91,0.833
c0.091-0.647,0.349-1.086,0.635-1.337c-2.22-0.251-4.555-1.111-4.555-4.943c0-1.091,0.39-1.984,1.03-2.682 C6.546,8.54,6.202,7.524,6.746,6.148c0,0,0.84-0.269,2.75,1.025C10.295,6.95,11.15,6.84,12,6.836 c0.85,0.004,1.705,0.114,2.504,0.336c1.909-1.294,2.748-1.025,2.748-1.025c0.546,1.376,0.202,2.394,0.1,2.646 c0.64,0.699,1.026,1.591,1.026,2.682c0,3.841-2.337,4.687-4.565,4.935c0.359,0.307,0.679,0.917,0.679,1.852 c0,1.335-0.012,2.415-0.012,2.741c0,0.269,0.18,0.579,0.688,0.481C19.138,20.161,22,16.416,22,12C22,6.477,17.523,2,12,2z"></path>
</symbol>
<symbol id="icon-instagram" viewBox="0 0 24 24">
<path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
</symbol>
<symbol id="icon-linkedin" viewBox="0 0 24 24">
<path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path>
</symbol>
<symbol id="icon-mail" viewBox="0 0 24 24">
<path d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z"></path>
</symbol>
<symbol id="icon-meetup" viewBox="0 0 24 24">
<path d="M19.24775,14.722a3.57032,3.57032,0,0,1-2.94457,3.52073,3.61886,3.61886,0,0,1-.64652.05634c-.07314-.0008-.10187.02846-.12507.09547A2.38881,2.38881,0,0,1,13.49453,20.094a2.33092,2.33092,0,0,1-1.827-.50716.13635.13635,0,0,0-.19878-.00408,3.191,3.191,0,0,1-2.104.60248,3.26309,3.26309,0,0,1-3.00324-2.71993,2.19076,2.19076,0,0,1-.03512-.30865c-.00156-.08579-.03413-.1189-.11608-.13493a2.86421,2.86421,0,0,1-1.23189-.56111,2.945,2.945,0,0,1-1.166-2.05749,2.97484,2.97484,0,0,1,.87524-2.50774.112.112,0,0,0,.02091-.16107,2.7213,2.7213,0,0,1-.36648-1.48A2.81256,2.81256,0,0,1,6.57673,7.58838a.35764.35764,0,0,0,.28869-.22819,4.2208,4.2208,0,0,1,6.02892-1.90111.25161.25161,0,0,0,.22023.0243,3.65608,3.65608,0,0,1,3.76031.90678A3.57244,3.57244,0,0,1,17.95918,8.626a2.97339,2.97339,0,0,1,.01829.57356.10637.10637,0,0,0,.0853.12792,1.97669,1.97669,0,0,1,1.27939,1.33733,2.00266,2.00266,0,0,1-.57112,2.12652c-.05284.05166-.04168.08328-.01173.13489A3.51189,3.51189,0,0,1,19.24775,14.722Zm-6.35959-.27836a1.6984,1.6984,0,0,0,1.14556,1.61113,3.82039,3.82039,0,0,0,1.036.17935,1.46888,1.46888,0,0,0,.73509-.12255.44082.44082,0,0,0,.26057-.44274.45312.45312,0,0,0-.29211-.43375.97191.97191,0,0,0-.20678-.063c-.21326-.03806-.42754-.0701-.63973-.11215a.54787.54787,0,0,1-.50172-.60926,2.75864,2.75864,0,0,1,.1773-.901c.1763-.535.414-1.045.64183-1.55913A12.686,12.686,0,0,0,15.85,10.47863a1.58461,1.58461,0,0,0,.04861-.87208,1.04531,1.04531,0,0,0-.85432-.83981,1.60658,1.60658,0,0,0-1.23654.16594.27593.27593,0,0,1-.36286-.03413c-.085-.0747-.16594-.15379-.24918-.23055a.98682.98682,0,0,0-1.33577-.04933,6.1468,6.1468,0,0,1-.4989.41615.47762.47762,0,0,1-.51535.03566c-.17448-.09307-.35512-.175-.53531-.25665a1.74949,1.74949,0,0,0-.56476-.2016,1.69943,1.69943,0,0,0-1.61654.91787,8.05815,8.05815,0,0,0-.32952.80126c-.45471,1.2557-.82507,2.53825-1.20838,3.81639a1.24151,1.24151,0,0,0,.51532,1.44389,1.42659,1.42659,0,0,0,1.22008.17166,1.09728,1.09728,0,0,0,.66994-.69764c.44145-1.04111.839-2.09989,1.25981-3.14926.11581-.28876.22792-.57874.35078-.86438a.44548.44548,0,0,1,.69189-.19539.50521.50521,0,0,1,.15044.43836,1.75625,1.75625,0,0,1-.14731.50453c-.27379.69219-.55265,1.38236-.82766,2.074a2.0836,2.0836,0,0,0-.14038.42876.50719.50719,0,0,0,.27082.57722.87236.87236,0,0,0,.66145.02739.99137.99137,0,0,0,.53406-.532q.61571-1.20914,1.228-2.42031.28423-.55863.57585-1.1133a.87189.87189,0,0,1,.29055-.35253.34987.34987,0,0,1,.37634-.01265.30291.30291,0,0,1,.12434.31459.56716.56716,0,0,1-.04655.1915c-.05318.12739-.10286.25669-.16183.38156-.34118.71775-.68754,1.43273-1.02568,2.152A2.00213,2.00213,0,0,0,12.88816,14.44366Zm4.78568,5.28972a.88573.88573,0,0,0-1.77139.00465.8857.8857,0,0,0,1.77139-.00465Zm-14.83838-7.296a.84329.84329,0,1,0,.00827-1.68655.8433.8433,0,0,0-.00827,1.68655Zm10.366-9.43673a.83506.83506,0,1,0-.0091,1.67.83505.83505,0,0,0,.0091-1.67Zm6.85014,5.22a.71651.71651,0,0,0-1.433.0093.71656.71656,0,0,0,1.433-.0093ZM5.37528,6.17908A.63823.63823,0,1,0,6.015,5.54483.62292.62292,0,0,0,5.37528,6.17908Zm6.68214,14.80843a.54949.54949,0,1,0-.55052.541A.54556.54556,0,0,0,12.05742,20.98752Zm8.53235-8.49689a.54777.54777,0,0,0-.54027.54023.53327.53327,0,0,0,.532.52293.51548.51548,0,0,0,.53272-.5237A.53187.53187,0,0,0,20.58977,12.49063ZM7.82846,2.4715a.44927.44927,0,1,0,.44484.44766A.43821.43821,0,0,0,7.82846,2.4715Zm13.775,7.60492a.41186.41186,0,0,0-.40065.39623.40178.40178,0,0,0,.40168.40168A.38994.38994,0,0,0,22,10.48172.39946.39946,0,0,0,21.60349,10.07642ZM5.79193,17.96207a.40469.40469,0,0,0-.397-.39646.399.399,0,0,0-.396.405.39234.39234,0,0,0,.39939.389A.39857.39857,0,0,0,5.79193,17.96207Z"></path>
</symbol>
<symbol id="icon-medium" viewBox="0 0 24 24">
<path d="M5.727 8.027a.623.623 0 0 0-.204-.527L4.02 5.687v-.273H8.69l3.614 7.926 3.175-7.926h4.457v.274l-1.285 1.234a.367.367 0 0 0-.144.36v9.066a.374.374 0 0 0 .144.363l1.258 1.234v.27h-6.324v-.27l1.3-1.265c.13-.13.13-.164.13-.36V8.988l-3.621 9.196h-.489L6.691 8.988v6.164c-.035.258.051.52.235.707l1.691 2.055v.27h-4.8v-.27l1.69-2.055a.814.814 0 0 0 .22-.707zm0 0"></path>
</symbol>
<symbol id="icon-patreon" viewBox="0 0 24 24">
<path d="M13.975 5a5.05 5.05 0 00-5.041 5.046c0 2.774 2.261 5.03 5.04 5.03A5.034 5.034 0 0019 10.047C19 7.264 16.746 5 13.975 5zM5 18.44h2.461V5H5v13.44z"></path>
</symbol>
<symbol id="icon-pinterest" viewBox="0 0 24 24">
<path d="M12.289,2C6.617,2,3.606,5.648,3.606,9.622c0,1.846,1.025,4.146,2.666,4.878c0.25,0.111,0.381,0.063,0.439-0.169 c0.044-0.175,0.267-1.029,0.365-1.428c0.032-0.128,0.017-0.237-0.091-0.362C6.445,11.911,6.01,10.75,6.01,9.668 c0-2.777,2.194-5.464,5.933-5.464c3.23,0,5.49,2.108,5.49,5.122c0,3.407-1.794,5.768-4.13,5.768c-1.291,0-2.257-1.021-1.948-2.277 c0.372-1.495,1.089-3.112,1.089-4.191c0-0.967-0.542-1.775-1.663-1.775c-1.319,0-2.379,1.309-2.379,3.059 c0,1.115,0.394,1.869,0.394,1.869s-1.302,5.279-1.54,6.261c-0.405,1.666,0.053,4.368,0.094,4.604 c0.021,0.126,0.167,0.169,0.25,0.063c0.129-0.165,1.699-2.419,2.142-4.051c0.158-0.59,0.817-2.995,0.817-2.995 c0.43,0.784,1.681,1.446,3.013,1.446c3.963,0,6.822-3.494,6.822-7.833C20.394,5.112,16.849,2,12.289,2"></path>
</symbol>
<symbol id="icon-pocket" viewBox="0 0 24 24">
<path d="M21.927,4.194C21.667,3.48,20.982,3,20.222,3h-0.01h-1.721H3.839C3.092,3,2.411,3.47,2.145,4.17 C2.066,4.378,2.026,4.594,2.026,4.814v6.035l0.069,1.2c0.29,2.73,1.707,5.115,3.899,6.778c0.039,0.03,0.079,0.059,0.119,0.089 l0.025,0.018c1.175,0.859,2.491,1.441,3.91,1.727c0.655,0.132,1.325,0.2,1.991,0.2c0.615,0,1.232-0.057,1.839-0.17 c0.073-0.014,0.145-0.028,0.219-0.044c0.02-0.004,0.042-0.012,0.064-0.023c1.359-0.297,2.621-0.864,3.753-1.691l0.025-0.018 c0.04-0.029,0.08-0.058,0.119-0.089c2.192-1.664,3.609-4.049,3.898-6.778l0.069-1.2V4.814C22.026,4.605,22,4.398,21.927,4.194z M17.692,10.481l-4.704,4.512c-0.266,0.254-0.608,0.382-0.949,0.382c-0.342,0-0.684-0.128-0.949-0.382l-4.705-4.512 C5.838,9.957,5.82,9.089,6.344,8.542c0.524-0.547,1.392-0.565,1.939-0.04l3.756,3.601l3.755-3.601 c0.547-0.524,1.415-0.506,1.939,0.04C18.256,9.089,18.238,9.956,17.692,10.481z"></path>
</symbol>
<symbol id="icon-ravelry" viewBox="0 0 23 20">
<path d="M12.098 19.34a.25.25 0 01-.118-.043 13.986 13.986 0 01-.394-.258c-.164-.11-.477-.352-.934-.723-.46-.375-.882-.761-1.27-1.168-.39-.406-.796-.925-1.218-1.562a8.521 8.521 0 01-.976-1.926c-.125-.023-.758-.16-1.907-.414A8.785 8.785 0 007.84 17.29a8.152 8.152 0 004.258 2.05zm-6.98-6.762l1.831.313A13.424 13.424 0 016.5 11.02a16.216 16.216 0 01-.207-1.622l-.043-.593c-.61.61-1.047 1.445-1.316 2.5.035.484.097.91.183 1.273zm1.198-6.797a9.064 9.064 0 00-.84 1.653c.32-.344.59-.598.81-.758zm15.649 4.844a8.8 8.8 0 00-.676-3.426 8.85 8.85 0 00-1.824-2.812 8.614 8.614 0 00-2.727-1.883 8.115 8.115 0 00-3.312-.695 8.131 8.131 0 00-3.059.586A8.412 8.412 0 007.754 4.05c-.219.433-.383 1.027-.488 1.785a5.407 5.407 0 011.554-.93 7.481 7.481 0 011.727-.48 16.642 16.642 0 011.558-.153c.489-.02.883-.015 1.18.012l.438.035c.238.008.43.063.574.172a.66.66 0 01.27.367c.03.141.054.278.07.414a.8.8 0 01-.012.317 12.781 12.781 0 00-2.477-.004 7.093 7.093 0 00-1.992.484 9.6 9.6 0 00-1.554.801A12.46 12.46 0 007.176 7.97c.031.27.07.613.125 1.031.054.422.183 1.082.386 1.988.204.903.43 1.57.676 2.004.895.043 1.793-.012 2.696-.164.902-.152 1.683-.351 2.336-.598a20.681 20.681 0 001.77-.746c.526-.254.925-.472 1.19-.66l.407-.265c.156-.121.3-.196.43-.23a.367.367 0 01.331.058c.094.07.157.199.184.383.102.722-.039 1.171-.426 1.351-1.508.723-3.203 1.219-5.086 1.496-.976.149-2.129.207-3.449.176a7.673 7.673 0 001.195 1.973c.504.597 1 1.07 1.493 1.418.496.343.968.636 1.421.878.454.243.825.407 1.106.489l.426.133c1.039.171 1.992.113 2.863-.168 1.414-.739 2.555-1.813 3.418-3.227.867-1.414 1.297-2.969 1.297-4.664zm.805-.414c-.102 1.004-.247 1.793-.434 2.367-.508 1.547-1.168 2.836-1.977 3.867-.808 1.032-1.964 1.973-3.468 2.828-.348.247-.645.41-.895.493-.52.195-1.113.254-1.773.18-.262.019-.528.03-.797.03-2.055 0-3.883-.64-5.492-1.93-1.61-1.288-2.68-2.929-3.22-4.933-.007 0-.019 0-.042-.004-.024-.004-.04-.007-.055-.007-.043.375-.035.793.028 1.257.062.465.156.891.285 1.282.125.39.254.757.39 1.093.133.34.25.606.344.801l.152.29c.059.09.254.394.586.913a4.327 4.327 0 01-1.355-1.187 5.669 5.669 0 01-.856-1.563 14.087 14.087 0 01-.43-1.531 9.012 9.012 0 01-.19-1.2l-.02-.468c-.035-.016-.16-.059-.367-.137-.207-.078-.383-.148-.528-.203-.144-.054-.336-.133-.578-.226a9.221 9.221 0 01-.625-.282c-.176-.09-.36-.183-.543-.285-.187-.097-.34-.199-.465-.3a1.27 1.27 0 01-.27-.286c.138.075.321.172.548.285.23.118.64.286 1.23.508.594.223 1.121.364 1.586.426l.023-.36c.079-1.109.418-2.187 1.024-3.234A9.226 9.226 0 016.5 4.621c.203-.855.5-1.652.883-2.39.11-.208.226-.376.347-.5.125-.13.305-.247.536-.36 1.148-.55 2.25-.937 3.304-1.16A9.935 9.935 0 0114.86.09c1.136.14 2.25.5 3.34 1.082 1.593.855 2.804 2.105 3.624 3.75.82 1.644 1.137 3.406.946 5.289zm0 0"></path>
</symbol>
<symbol id="icon-reddit" viewBox="0 0 24 24">
<path d="M22,11.816c0-1.256-1.021-2.277-2.277-2.277c-0.593,0-1.122,0.24-1.526,0.614c-1.481-0.965-3.455-1.594-5.647-1.69 l1.171-3.702l3.18,0.748c0.008,1.028,0.846,1.862,1.876,1.862c1.035,0,1.877-0.842,1.877-1.878c0-1.035-0.842-1.877-1.877-1.877 c-0.769,0-1.431,0.466-1.72,1.13l-3.508-0.826c-0.203-0.047-0.399,0.067-0.46,0.261l-1.35,4.268 c-2.316,0.038-4.411,0.67-5.97,1.671C5.368,9.765,4.853,9.539,4.277,9.539C3.021,9.539,2,10.56,2,11.816 c0,0.814,0.433,1.523,1.078,1.925c-0.037,0.221-0.061,0.444-0.061,0.672c0,3.292,4.011,5.97,8.941,5.97s8.941-2.678,8.941-5.97 c0-0.214-0.02-0.424-0.053-0.632C21.533,13.39,22,12.661,22,11.816z M18.776,4.394c0.606,0,1.1,0.493,1.1,1.1s-0.493,1.1-1.1,1.1 s-1.1-0.494-1.1-1.1S18.169,4.394,18.776,4.394z M2.777,11.816c0-0.827,0.672-1.5,1.499-1.5c0.313,0,0.598,0.103,0.838,0.269 c-0.851,0.676-1.477,1.479-1.812,2.36C2.983,12.672,2.777,12.27,2.777,11.816z M11.959,19.606c-4.501,0-8.164-2.329-8.164-5.193 S7.457,9.22,11.959,9.22s8.164,2.329,8.164,5.193S16.46,19.606,11.959,19.606z M20.636,13.001c-0.326-0.89-0.948-1.701-1.797-2.384 c0.248-0.186,0.55-0.301,0.883-0.301c0.827,0,1.5,0.673,1.5,1.5C21.223,12.299,20.992,12.727,20.636,13.001z M8.996,14.704 c-0.76,0-1.397-0.616-1.397-1.376c0-0.76,0.637-1.397,1.397-1.397c0.76,0,1.376,0.637,1.376,1.397 C10.372,14.088,9.756,14.704,8.996,14.704z M16.401,13.328c0,0.76-0.616,1.376-1.376,1.376c-0.76,0-1.399-0.616-1.399-1.376 c0-0.76,0.639-1.397,1.399-1.397C15.785,11.931,16.401,12.568,16.401,13.328z M15.229,16.708c0.152,0.152,0.152,0.398,0,0.55 c-0.674,0.674-1.727,1.002-3.219,1.002c-0.004,0-0.007-0.002-0.011-0.002c-0.004,0-0.007,0.002-0.011,0.002 c-1.492,0-2.544-0.328-3.218-1.002c-0.152-0.152-0.152-0.398,0-0.55c0.152-0.152,0.399-0.151,0.55,0 c0.521,0.521,1.394,0.775,2.669,0.775c0.004,0,0.007,0.002,0.011,0.002c0.004,0,0.007-0.002,0.011-0.002 c1.275,0,2.148-0.253,2.669-0.775C14.831,16.556,15.078,16.556,15.229,16.708z"></path>
</symbol>
<symbol id="icon-skype" viewBox="0 0 24 24">
<path d="M10.113,2.699c0.033-0.006,0.067-0.013,0.1-0.02c0.033,0.017,0.066,0.033,0.098,0.051L10.113,2.699z M2.72,10.223 c-0.006,0.034-0.011,0.069-0.017,0.103c0.018,0.032,0.033,0.064,0.051,0.095L2.72,10.223z M21.275,13.771 c0.007-0.035,0.011-0.071,0.018-0.106c-0.018-0.031-0.033-0.064-0.052-0.095L21.275,13.771z M13.563,21.199 c0.032,0.019,0.065,0.035,0.096,0.053c0.036-0.006,0.071-0.011,0.105-0.017L13.563,21.199z M22,16.386 c0,1.494-0.581,2.898-1.637,3.953c-1.056,1.057-2.459,1.637-3.953,1.637c-0.967,0-1.914-0.251-2.75-0.725 c0.036-0.006,0.071-0.011,0.105-0.017l-0.202-0.035c0.032,0.019,0.065,0.035,0.096,0.053c-0.543,0.096-1.099,0.147-1.654,0.147 c-1.275,0-2.512-0.25-3.676-0.743c-1.125-0.474-2.135-1.156-3.002-2.023c-0.867-0.867-1.548-1.877-2.023-3.002 c-0.493-1.164-0.743-2.401-0.743-3.676c0-0.546,0.049-1.093,0.142-1.628c0.018,0.032,0.033,0.064,0.051,0.095L2.72,10.223 c-0.006,0.034-0.011,0.069-0.017,0.103C2.244,9.5,2,8.566,2,7.615c0-1.493,0.582-2.898,1.637-3.953 c1.056-1.056,2.46-1.638,3.953-1.638c0.915,0,1.818,0.228,2.622,0.655c-0.033,0.007-0.067,0.013-0.1,0.02l0.199,0.031 c-0.032-0.018-0.066-0.034-0.098-0.051c0.002,0,0.003-0.001,0.004-0.001c0.586-0.112,1.187-0.169,1.788-0.169 c1.275,0,2.512,0.249,3.676,0.742c1.124,0.476,2.135,1.156,3.002,2.024c0.868,0.867,1.548,1.877,2.024,3.002 c0.493,1.164,0.743,2.401,0.743,3.676c0,0.575-0.054,1.15-0.157,1.712c-0.018-0.031-0.033-0.064-0.052-0.095l0.034,0.201 c0.007-0.035,0.011-0.071,0.018-0.106C21.754,14.494,22,15.432,22,16.386z M16.817,14.138c0-1.331-0.613-2.743-3.033-3.282 l-2.209-0.49c-0.84-0.192-1.807-0.444-1.807-1.237c0-0.794,0.679-1.348,1.903-1.348c2.468,0,2.243,1.696,3.468,1.696 c0.645,0,1.209-0.379,1.209-1.031c0-1.521-2.435-2.663-4.5-2.663c-2.242,0-4.63,0.952-4.63,3.488c0,1.221,0.436,2.521,2.839,3.123 l2.984,0.745c0.903,0.223,1.129,0.731,1.129,1.189c0,0.762-0.758,1.507-2.129,1.507c-2.679,0-2.307-2.062-3.743-2.062 c-0.645,0-1.113,0.444-1.113,1.078c0,1.236,1.501,2.886,4.856,2.886C15.236,17.737,16.817,16.199,16.817,14.138z"></path>
</symbol>
<symbol id="icon-slideshare" viewBox="0 0 24 24">
<path d="M11.738,10.232a2.142,2.142,0,0,1-.721,1.619,2.556,2.556,0,0,1-3.464,0,2.183,2.183,0,0,1,0-3.243,2.572,2.572,0,0,1,3.464,0A2.136,2.136,0,0,1,11.738,10.232Zm5.7,0a2.15,2.15,0,0,1-.715,1.619,2.563,2.563,0,0,1-3.469,0,2.183,2.183,0,0,1,0-3.243,2.58,2.58,0,0,1,3.469,0A2.144,2.144,0,0,1,17.439,10.232Zm2.555,2.045V4.7a2.128,2.128,0,0,0-.363-1.4,1.614,1.614,0,0,0-1.261-.415H5.742a1.656,1.656,0,0,0-1.278.386A2.246,2.246,0,0,0,4.129,4.7v7.643a8.212,8.212,0,0,0,1,.454q.516.193.92.318a6.847,6.847,0,0,0,.92.21q.516.085.806.125a6.615,6.615,0,0,0,.795.045l.665.006q.16,0,.642-.023t.506-.023a1.438,1.438,0,0,1,1.079.307,1.134,1.134,0,0,0,.114.1,7.215,7.215,0,0,0,.693.579q.079-1.033,1.34-.988.057,0,.415.017l.488.023q.13.006.517.011t.6-.011l.619-.051a5.419,5.419,0,0,0,.693-.1l.7-.153a5.353,5.353,0,0,0,.761-.221q.345-.131.766-.307a8.727,8.727,0,0,0,.818-.392Zm1.851-.057a10.4,10.4,0,0,1-4.225,2.862,6.5,6.5,0,0,1-.261,5.281,3.524,3.524,0,0,1-2.078,1.681,2.452,2.452,0,0,1-2.067-.17,1.915,1.915,0,0,1-.931-1.863l-.011-3.7V16.3l-.279-.068q-.188-.045-.267-.057l-.011,3.839a1.9,1.9,0,0,1-.943,1.863,2.481,2.481,0,0,1-2.078.17,3.519,3.519,0,0,1-2.067-1.7,6.546,6.546,0,0,1-.25-5.258A10.4,10.4,0,0,1,2.152,12.22a.56.56,0,0,1-.045-.715q.238-.3.681.011l.125.079a.767.767,0,0,1,.125.091V3.8a1.987,1.987,0,0,1,.534-1.4,1.7,1.7,0,0,1,1.295-.579H19.141a1.7,1.7,0,0,1,1.295.579,1.985,1.985,0,0,1,.534,1.4v7.882l.238-.17q.443-.307.681-.011a.56.56,0,0,1-.045.715Z"></path>
</symbol>
<symbol id="icon-snapchat" viewBox="0 0 24 24">
<path d="M12.065,2a5.526,5.526,0,0,1,3.132.892A5.854,5.854,0,0,1,17.326,5.4a5.821,5.821,0,0,1,.351,2.33q0,.612-.117,2.487a.809.809,0,0,0,.365.091,1.93,1.93,0,0,0,.664-.176,1.93,1.93,0,0,1,.664-.176,1.3,1.3,0,0,1,.729.234.7.7,0,0,1,.351.6.839.839,0,0,1-.41.7,2.732,2.732,0,0,1-.9.41,3.192,3.192,0,0,0-.9.378.728.728,0,0,0-.41.618,1.575,1.575,0,0,0,.156.56,6.9,6.9,0,0,0,1.334,1.953,5.6,5.6,0,0,0,1.881,1.315,5.875,5.875,0,0,0,1.042.3.42.42,0,0,1,.365.456q0,.911-2.852,1.341a1.379,1.379,0,0,0-.143.507,1.8,1.8,0,0,1-.182.605.451.451,0,0,1-.429.241,5.878,5.878,0,0,1-.807-.085,5.917,5.917,0,0,0-.833-.085,4.217,4.217,0,0,0-.807.065,2.42,2.42,0,0,0-.82.293,6.682,6.682,0,0,0-.755.5q-.351.267-.755.527a3.886,3.886,0,0,1-.989.436A4.471,4.471,0,0,1,11.831,22a4.307,4.307,0,0,1-1.256-.176,3.784,3.784,0,0,1-.976-.436q-.4-.26-.749-.527a6.682,6.682,0,0,0-.755-.5,2.422,2.422,0,0,0-.807-.293,4.432,4.432,0,0,0-.82-.065,5.089,5.089,0,0,0-.853.1,5,5,0,0,1-.762.1.474.474,0,0,1-.456-.241,1.819,1.819,0,0,1-.182-.618,1.411,1.411,0,0,0-.143-.521q-2.852-.429-2.852-1.341a.42.42,0,0,1,.365-.456,5.793,5.793,0,0,0,1.042-.3,5.524,5.524,0,0,0,1.881-1.315,6.789,6.789,0,0,0,1.334-1.953A1.575,1.575,0,0,0,6,12.9a.728.728,0,0,0-.41-.618,3.323,3.323,0,0,0-.9-.384,2.912,2.912,0,0,1-.9-.41.814.814,0,0,1-.41-.684.71.71,0,0,1,.338-.593,1.208,1.208,0,0,1,.716-.241,1.976,1.976,0,0,1,.625.169,2.008,2.008,0,0,0,.69.169.919.919,0,0,0,.416-.091q-.117-1.849-.117-2.474A5.861,5.861,0,0,1,6.385,5.4,5.516,5.516,0,0,1,8.625,2.819,7.075,7.075,0,0,1,12.062,2Z"></path>
</symbol>
<symbol id="icon-soundcloud" viewBox="0 0 24 24">
<path d="M8.9,16.1L9,14L8.9,9.5c0-0.1,0-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1L8.3,14l0.1,2.1 c0,0.1,0,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1C8.8,16.3,8.9,16.3,8.9,16.1z M11.4,15.9l0.1-1.8L11.4,9c0-0.1,0-0.2-0.1-0.2 c0,0-0.1,0-0.1,0s-0.1,0-0.1,0c-0.1,0-0.1,0.1-0.1,0.2l0,0.1l-0.1,5c0,0,0,0.7,0.1,2v0c0,0.1,0,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1 c0.1,0,0.1,0,0.2-0.1c0.1,0,0.1-0.1,0.1-0.2L11.4,15.9z M2.4,12.9L2.5,14l-0.2,1.1c0,0.1,0,0.1-0.1,0.1c0,0-0.1,0-0.1-0.1L2.1,14 l0.1-1.1C2.2,12.9,2.3,12.9,2.4,12.9C2.3,12.9,2.4,12.9,2.4,12.9z M3.1,12.2L3.3,14l-0.2,1.8c0,0.1,0,0.1-0.1,0.1 c-0.1,0-0.1,0-0.1-0.1L2.8,14L3,12.2C3,12.2,3,12.2,3.1,12.2C3.1,12.2,3.1,12.2,3.1,12.2z M3.9,11.9L4.1,14l-0.2,2.1 c0,0.1,0,0.1-0.1,0.1c-0.1,0-0.1,0-0.1-0.1L3.5,14l0.2-2.1c0-0.1,0-0.1,0.1-0.1C3.9,11.8,3.9,11.8,3.9,11.9z M4.7,11.9L4.9,14 l-0.2,2.1c0,0.1-0.1,0.1-0.1,0.1c-0.1,0-0.1,0-0.1-0.1L4.3,14l0.2-2.2c0-0.1,0-0.1,0.1-0.1C4.7,11.7,4.7,11.8,4.7,11.9z M5.6,12 l0.2,2l-0.2,2.1c0,0.1-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0c0,0,0-0.1,0-0.1L5.1,14l0.2-2c0,0,0-0.1,0-0.1s0.1,0,0.1,0 C5.5,11.9,5.5,11.9,5.6,12L5.6,12z M6.4,10.7L6.6,14l-0.2,2.1c0,0,0,0.1,0,0.1c0,0-0.1,0-0.1,0c-0.1,0-0.1-0.1-0.2-0.2L5.9,14 l0.2-3.3c0-0.1,0.1-0.2,0.2-0.2c0,0,0.1,0,0.1,0C6.4,10.7,6.4,10.7,6.4,10.7z M7.2,10l0.2,4.1l-0.2,2.1c0,0,0,0.1,0,0.1 c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.2-0.2l-0.1-2.1L6.8,10c0-0.1,0.1-0.2,0.2-0.2c0,0,0.1,0,0.1,0S7.2,9.9,7.2,10z M8,9.6L8.2,14 L8,16.1c0,0.1-0.1,0.2-0.2,0.2c-0.1,0-0.2-0.1-0.2-0.2L7.5,14l0.1-4.4c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.1,0.1 C8,9.6,8,9.6,8,9.6z M11.4,16.1L11.4,16.1L11.4,16.1z M9.7,9.6L9.8,14l-0.1,2.1c0,0.1,0,0.1-0.1,0.2s-0.1,0.1-0.2,0.1 c-0.1,0-0.1,0-0.1-0.1s-0.1-0.1-0.1-0.2L9.2,14l0.1-4.4c0-0.1,0-0.1,0.1-0.2s0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0.1S9.7,9.5,9.7,9.6 L9.7,9.6z M10.6,9.8l0.1,4.3l-0.1,2c0,0.1,0,0.1-0.1,0.2c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1-0.1-0.1-0.2L10,14 l0.1-4.3c0-0.1,0-0.1,0.1-0.2c0,0,0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0.1S10.6,9.7,10.6,9.8z M12.4,14l-0.1,2c0,0.1,0,0.1-0.1,0.2 c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2l-0.1-1l-0.1-1l0.1-5.5v0c0-0.1,0-0.2,0.1-0.2 c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0.1,0.1,0.2L12.4,14z M22.1,13.9c0,0.7-0.2,1.3-0.7,1.7c-0.5,0.5-1.1,0.7-1.7,0.7 h-6.8c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2V8.2c0-0.1,0.1-0.2,0.2-0.3c0.5-0.2,1-0.3,1.6-0.3c1.1,0,2.1,0.4,2.9,1.1 c0.8,0.8,1.3,1.7,1.4,2.8c0.3-0.1,0.6-0.2,1-0.2c0.7,0,1.3,0.2,1.7,0.7C21.8,12.6,22.1,13.2,22.1,13.9L22.1,13.9z"></path>
</symbol>
<symbol id="icon-spotify" viewBox="0 0 24 24">
<path d="M12,2C6.477,2,2,6.477,2,12c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10C22,6.477,17.523,2,12,2 M16.586,16.424 c-0.18,0.295-0.563,0.387-0.857,0.207c-2.348-1.435-5.304-1.76-8.785-0.964c-0.335,0.077-0.67-0.133-0.746-0.469 c-0.077-0.335,0.132-0.67,0.469-0.746c3.809-0.871,7.077-0.496,9.713,1.115C16.673,15.746,16.766,16.13,16.586,16.424 M17.81,13.7 c-0.226,0.367-0.706,0.482-1.072,0.257c-2.687-1.652-6.785-2.131-9.965-1.166C6.36,12.917,5.925,12.684,5.8,12.273 C5.675,11.86,5.908,11.425,6.32,11.3c3.632-1.102,8.147-0.568,11.234,1.328C17.92,12.854,18.035,13.335,17.81,13.7 M17.915,10.865 c-3.223-1.914-8.54-2.09-11.618-1.156C5.804,9.859,5.281,9.58,5.131,9.086C4.982,8.591,5.26,8.069,5.755,7.919 c3.532-1.072,9.404-0.865,13.115,1.338c0.445,0.264,0.59,0.838,0.327,1.282C18.933,10.983,18.359,11.129,17.915,10.865"></path>
</symbol>
<symbol id="icon-stackoverflow" viewBox="0 0 24 24">
<path d="m 17.817128,20.228605 v -5.337217 h 1.771431 V 22 H 3.6 v -7.108612 h 1.771401 v 5.337217 z"></path>
<path d="m 7.3267845,14.385359 8.6959295,1.817316 0.368168,-1.748385 -8.6959318,-1.817319 z m 1.1503197,-4.140944 8.0517968,3.749872 0.73617,-1.610385 -8.0518344,-3.7728517 z m 2.2315078,-3.9569154 6.832405,5.6822664 1.12738,-1.357316 -6.832576,-5.6822636 z m 4.417,-4.2099019 -1.426448,1.0581864 5.291191,7.1316119 1.426412,-1.0582745 z M 7.1427296,18.434189 h 8.8799844 v -1.7713 H 7.1427296 Z"></path>
<path d="m 17.817128,20.228605 v -5.337217 h 1.771431 V 22 H 3.6 v -7.108612 h 1.771401 v 5.337217 z"></path>
<path d="m 7.3267845,14.385359 8.6959295,1.817316 0.368168,-1.748385 -8.6959318,-1.817319 z m 1.1503197,-4.140944 8.0517968,3.749872 0.73617,-1.610385 -8.0518344,-3.7728517 z m 2.2315078,-3.9569154 6.832405,5.6822664 1.12738,-1.357316 -6.832576,-5.6822636 z m 4.417,-4.2099019 -1.426448,1.0581864 5.291191,7.1316119 1.426412,-1.0582745 z M 7.1427296,18.434189 h 8.8799844 v -1.7713 H 7.1427296 Z"></path>
</symbol>
<symbol id="icon-stumbleupon" viewBox="0 0 24 24">
<path d="M12,4.294c-2.469,0-4.471,2.002-4.471,4.471v6.353c0,0.585-0.474,1.059-1.059,1.059c-0.585,0-1.059-0.474-1.059-1.059 v-2.824H2v2.941c0,2.469,2.002,4.471,4.471,4.471c2.469,0,4.471-2.002,4.471-4.471V8.765c0-0.585,0.474-1.059,1.059-1.059 s1.059,0.474,1.059,1.059v1.294l1.412,0.647l2-0.647V8.765C16.471,6.296,14.469,4.294,12,4.294z M13.059,12.353v2.882 c0,2.469,2.002,4.471,4.471,4.471S22,17.704,22,15.235v-2.824h-3.412v2.824c0,0.585-0.474,1.059-1.059,1.059 c-0.585,0-1.059-0.474-1.059-1.059v-2.882l-2,0.647L13.059,12.353z"></path>
</symbol>
<symbol id="icon-telegram" viewBox="0 0 24 24">
<path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.08 14.757s-.25.625-.936.325l-2.541-1.949-1.63 1.486s-.127.096-.266.036c0 0-.12-.011-.27-.486-.15-.475-.911-2.972-.911-2.972L6 12.349s-.387-.137-.425-.438c-.037-.3.437-.462.437-.462l10.03-3.934s.824-.362.824.238l-1.786 9.004z"></path>
</symbol>
<symbol id="icon-tiktok" viewBox="0 0 24 24">
<path d="M12.22 2H15.64C15.64 2 15.4502 6.39351 20.3898 6.70186V10.0981C20.3898 10.0981 17.7537 10.2636 15.64 8.64957L15.6769 15.6615C15.6769 16.9151 15.3052 18.1406 14.6087 19.1829C13.9123 20.2253 12.9224 21.0377 11.7642 21.5175C10.606 21.9972 9.33162 22.1228 8.10209 21.8782C6.87257 21.6337 5.74316 21.0301 4.85669 20.1437C3.97022 19.2573 3.3665 18.1279 3.12186 16.8984C2.87723 15.6689 3.00267 14.3945 3.48233 13.2363C3.96199 12.0781 4.77432 11.0881 5.8166 10.3916C6.85888 9.69502 8.0843 9.32318 9.33791 9.32307H10.2271V12.7231V12.7954C9.64757 12.6147 9.02578 12.6217 8.45043 12.8152C7.87508 13.0088 7.37556 13.3792 7.02314 13.8734C6.67071 14.3677 6.48338 14.9606 6.48786 15.5677C6.49235 16.1747 6.68842 16.7648 7.04811 17.2538C7.40781 17.7428 7.91274 18.1057 8.49089 18.2908C9.06903 18.4758 9.69086 18.4736 10.2676 18.2843C10.8444 18.0951 11.3467 17.7285 11.7029 17.2369C12.059 16.7454 12.2508 16.1538 12.2509 15.5468L12.22 2Z"></path>
</symbol>
<symbol id="icon-tumblr" viewBox="0 0 24 24">
<path d="M16.749,17.396c-0.357,0.17-1.041,0.319-1.551,0.332c-1.539,0.041-1.837-1.081-1.85-1.896V9.847h3.861V6.937h-3.847V2.039 c0,0-2.77,0-2.817,0c-0.046,0-0.127,0.041-0.138,0.144c-0.165,1.499-0.867,4.13-3.783,5.181v2.484h1.945v6.282 c0,2.151,1.587,5.206,5.775,5.135c1.413-0.024,2.982-0.616,3.329-1.126L16.749,17.396z"></path>
</symbol>
<symbol id="icon-twitch" viewBox="0 0 24 24">
<path d="M16.499,8.089h-1.636v4.91h1.636V8.089z M12,8.089h-1.637v4.91H12V8.089z M4.228,3.178L3,6.451v13.092h4.499V22h2.456 l2.454-2.456h3.681L21,14.636V3.178H4.228z M19.364,13.816l-2.864,2.865H12l-2.453,2.453V16.68H5.863V4.814h13.501V13.816z"></path>
</symbol>
<symbol id="icon-twitter" viewBox="0 0 24 24">
<path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path>
</symbol>
<symbol id="icon-vimeo" viewBox="0 0 24 24">
<path d="M22.396,7.164c-0.093,2.026-1.507,4.799-4.245,8.32C15.322,19.161,12.928,21,10.97,21c-1.214,0-2.24-1.119-3.079-3.359 c-0.56-2.053-1.119-4.106-1.68-6.159C5.588,9.243,4.921,8.122,4.206,8.122c-0.156,0-0.701,0.328-1.634,0.98L1.594,7.841 c1.027-0.902,2.04-1.805,3.037-2.708C6.001,3.95,7.03,3.327,7.715,3.264c1.619-0.156,2.616,0.951,2.99,3.321 c0.404,2.557,0.685,4.147,0.841,4.769c0.467,2.121,0.981,3.181,1.542,3.181c0.435,0,1.09-0.688,1.963-2.065 c0.871-1.376,1.338-2.422,1.401-3.142c0.125-1.187-0.343-1.782-1.401-1.782c-0.498,0-1.012,0.115-1.541,0.341 c1.023-3.35,2.977-4.977,5.862-4.884C21.511,3.066,22.52,4.453,22.396,7.164z"></path>
</symbol>
<symbol id="icon-vk" viewBox="0 0 24 24">
<path d="M22,7.1c0.2,0.4-0.4,1.5-1.6,3.1c-0.2,0.2-0.4,0.5-0.7,0.9c-0.5,0.7-0.9,1.1-0.9,1.4c-0.1,0.3-0.1,0.6,0.1,0.8 c0.1,0.1,0.4,0.4,0.8,0.9h0l0,0c1,0.9,1.6,1.7,2,2.3c0,0,0,0.1,0.1,0.1c0,0.1,0,0.1,0.1,0.3c0,0.1,0,0.2,0,0.4 c0,0.1-0.1,0.2-0.3,0.3c-0.1,0.1-0.4,0.1-0.6,0.1l-2.7,0c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.4-0.1-0.5-0.2l-0.2-0.1 c-0.2-0.1-0.5-0.4-0.7-0.7s-0.5-0.6-0.7-0.8c-0.2-0.2-0.4-0.4-0.6-0.6C14.8,15,14.6,15,14.4,15c0,0,0,0-0.1,0c0,0-0.1,0.1-0.2,0.2 c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.2,0.5c-0.1,0.2-0.1,0.5-0.1,0.8c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.1,0.2l0,0.1 c-0.1,0.1-0.3,0.2-0.6,0.2h-1.2c-0.5,0-1,0-1.5-0.2c-0.5-0.1-1-0.3-1.4-0.6s-0.7-0.5-1.1-0.7s-0.6-0.4-0.7-0.6l-0.3-0.3 c-0.1-0.1-0.2-0.2-0.3-0.3s-0.4-0.5-0.7-0.9s-0.7-1-1.1-1.6c-0.4-0.6-0.8-1.3-1.3-2.2C2.9,9.4,2.5,8.5,2.1,7.5C2,7.4,2,7.3,2,7.2 c0-0.1,0-0.1,0-0.2l0-0.1c0.1-0.1,0.3-0.2,0.6-0.2l2.9,0c0.1,0,0.2,0,0.2,0.1S5.9,6.9,5.9,7L6,7c0.1,0.1,0.2,0.2,0.3,0.3 C6.4,7.7,6.5,8,6.7,8.4C6.9,8.8,7,9,7.1,9.2l0.2,0.3c0.2,0.4,0.4,0.8,0.6,1.1c0.2,0.3,0.4,0.5,0.5,0.7s0.3,0.3,0.4,0.4 c0.1,0.1,0.3,0.1,0.4,0.1c0.1,0,0.2,0,0.3-0.1c0,0,0,0,0.1-0.1c0,0,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.3,0.1-0.5c0-0.2,0.1-0.5,0.1-0.8 c0-0.4,0-0.8,0-1.3c0-0.3,0-0.5-0.1-0.8c0-0.2-0.1-0.4-0.1-0.5L9.6,7.6C9.4,7.3,9.1,7.2,8.7,7.1C8.6,7.1,8.6,7,8.7,6.9 C8.9,6.7,9,6.6,9.1,6.5c0.4-0.2,1.2-0.3,2.5-0.3c0.6,0,1,0.1,1.4,0.1c0.1,0,0.3,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.3 c0,0.1,0.1,0.2,0.1,0.3s0,0.3,0,0.5c0,0.2,0,0.4,0,0.6c0,0.2,0,0.4,0,0.7c0,0.3,0,0.6,0,0.9c0,0.1,0,0.2,0,0.4c0,0.2,0,0.4,0,0.5 c0,0.1,0,0.3,0,0.4s0.1,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.2-0.2,0.4-0.4 s0.3-0.4,0.5-0.7c0.2-0.3,0.5-0.7,0.7-1.1c0.4-0.7,0.8-1.5,1.1-2.3c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.1,0.1-0.1l0,0l0.1,0 c0,0,0,0,0.1,0s0.2,0,0.2,0l3,0c0.3,0,0.5,0,0.7,0S21.9,7,21.9,7L22,7.1z"></path>
</symbol>
<symbol id="icon-whatsapp" viewBox="0 0 24 24">
<path d="M2.048,22l1.406-5.136c-0.867-1.503-1.324-3.208-1.323-4.955C2.133,6.446,6.579,2,12.042,2c2.651,0.001,5.14,1.033,7.011,2.906c1.871,1.873,2.901,4.363,2.9,7.011c-0.002,5.464-4.448,9.91-9.91,9.91c0,0,0,0,0,0h-0.004c-1.659-0.001-3.288-0.417-4.736-1.206L2.048,22z M7.545,18.828l0.301,0.179c1.265,0.751,2.714,1.148,4.193,1.148h0.003c4.54,0,8.235-3.695,8.237-8.237c0.001-2.201-0.855-4.271-2.41-5.828c-1.555-1.557-3.623-2.415-5.824-2.416c-4.544,0-8.239,3.695-8.241,8.237c-0.001,1.556,0.435,3.072,1.259,4.384l0.196,0.312l-0.832,3.04L7.545,18.828z M17.035,14.274c-0.062-0.103-0.227-0.165-0.475-0.289c-0.248-0.124-1.465-0.723-1.692-0.806c-0.227-0.083-0.392-0.124-0.557,0.124c-0.165,0.248-0.64,0.806-0.784,0.971c-0.144,0.165-0.289,0.186-0.536,0.062c-0.248-0.124-1.046-0.385-1.991-1.229c-0.736-0.657-1.233-1.468-1.378-1.715c-0.144-0.248-0.015-0.382,0.109-0.505c0.111-0.111,0.248-0.289,0.371-0.434c0.124-0.145,0.165-0.248,0.248-0.413c0.083-0.165,0.041-0.31-0.021-0.434c-0.062-0.124-0.557-1.343-0.763-1.839C9.364,7.284,9.159,7.35,9.007,7.342c-0.144-0.007-0.31-0.009-0.475-0.009c-0.165,0-0.433,0.062-0.66,0.31C7.646,7.891,7.006,8.49,7.006,9.709c0,1.219,0.887,2.396,1.011,2.562c0.124,0.165,1.746,2.666,4.23,3.739c0.591,0.255,1.052,0.408,1.412,0.522c0.593,0.189,1.133,0.162,1.56,0.098c0.476-0.071,1.465-0.599,1.671-1.177C17.096,14.873,17.096,14.378,17.035,14.274z"></path>
</symbol>
<symbol id="icon-woocommerce" viewBox="0 0 24 24">
<path d="M19,2H5C3.3,2,2,3.3,2,5v11c0,1.7,1.3,3,3,3h4l6,3l-1-3h5c1.7,0,3-1.3,3-3V5C22,3.3,20.7,2,19,2z M17.4,6.5c-0.4,0.8-0.8,2.1-1,3.9c-0.3,1.8-0.4,3.1-0.3,4.1c0,0.3,0,0.5-0.1,0.7s-0.3,0.4-0.6,0.4s-0.6-0.1-0.9-0.4c-1-1-1.8-2.6-2.4-4.6c-0.7,1.4-1.2,2.4-1.6,3.1c-0.6,1.2-1.2,1.8-1.6,1.9c-0.3,0-0.5-0.2-0.8-0.7C7.6,13.5,7,10.7,6.4,6.7c0-0.3,0-0.5,0.2-0.7C6.7,5.8,7,5.7,7.3,5.6c0.5,0,0.9,0.2,0.9,0.8c0.3,2.3,0.7,4.2,1.1,5.7l2.4-4.5C11.9,7.2,12.1,7,12.5,7c0.5,0,0.8,0.3,0.9,0.9c0.3,1.4,0.6,2.6,1,3.7c0.3-2.7,0.8-4.7,1.4-5.9c0.2-0.3,0.4-0.5,0.7-0.5c0.2,0,0.5,0.1,0.7,0.2c0.2,0.2,0.3,0.4,0.3,0.6S17.5,6.4,17.4,6.5z"></path>
</symbol>
<symbol id="icon-wordpress" viewBox="0 0 24 24">
<path d="M12.158,12.786L9.46,20.625c0.806,0.237,1.657,0.366,2.54,0.366c1.047,0,2.051-0.181,2.986-0.51 c-0.024-0.038-0.046-0.079-0.065-0.124L12.158,12.786z M3.009,12c0,3.559,2.068,6.634,5.067,8.092L3.788,8.341 C3.289,9.459,3.009,10.696,3.009,12z M18.069,11.546c0-1.112-0.399-1.881-0.741-2.48c-0.456-0.741-0.883-1.368-0.883-2.109 c0-0.826,0.627-1.596,1.51-1.596c0.04,0,0.078,0.005,0.116,0.007C16.472,3.904,14.34,3.009,12,3.009 c-3.141,0-5.904,1.612-7.512,4.052c0.211,0.007,0.41,0.011,0.579,0.011c0.94,0,2.396-0.114,2.396-0.114 C7.947,6.93,8.004,7.642,7.52,7.699c0,0-0.487,0.057-1.029,0.085l3.274,9.739l1.968-5.901l-1.401-3.838 C9.848,7.756,9.389,7.699,9.389,7.699C8.904,7.67,8.961,6.93,9.446,6.958c0,0,1.484,0.114,2.368,0.114 c0.94,0,2.397-0.114,2.397-0.114c0.485-0.028,0.542,0.684,0.057,0.741c0,0-0.488,0.057-1.029,0.085l3.249,9.665l0.897-2.996 C17.841,13.284,18.069,12.316,18.069,11.546z M19.889,7.686c0.039,0.286,0.06,0.593,0.06,0.924c0,0.912-0.171,1.938-0.684,3.22 l-2.746,7.94c2.673-1.558,4.47-4.454,4.47-7.771C20.991,10.436,20.591,8.967,19.889,7.686z M12,22C6.486,22,2,17.514,2,12 C2,6.486,6.486,2,12,2c5.514,0,10,4.486,10,10C22,17.514,17.514,22,12,22z"></path>
</symbol>
<symbol id="icon-yelp" viewBox="0 0 24 24">
<path d="M12.271,16.718v1.417q-.011,3.257-.067,3.4a.707.707,0,0,1-.569.446,4.637,4.637,0,0,1-2.024-.424A4.609,4.609,0,0,1,7.8,20.565a.844.844,0,0,1-.19-.4.692.692,0,0,1,.044-.29,3.181,3.181,0,0,1,.379-.524q.335-.412,2.019-2.409.011,0,.669-.781a.757.757,0,0,1,.44-.274.965.965,0,0,1,.552.039.945.945,0,0,1,.418.324.732.732,0,0,1,.139.468Zm-1.662-2.8a.783.783,0,0,1-.58.781l-1.339.435q-3.067.981-3.257.981a.711.711,0,0,1-.6-.4,2.636,2.636,0,0,1-.19-.836,9.134,9.134,0,0,1,.011-1.857,3.559,3.559,0,0,1,.335-1.389.659.659,0,0,1,.625-.357,22.629,22.629,0,0,1,2.253.859q.781.324,1.283.524l.937.379a.771.771,0,0,1,.4.34A.982.982,0,0,1,10.609,13.917Zm9.213,3.313a4.467,4.467,0,0,1-1.021,1.8,4.559,4.559,0,0,1-1.512,1.417.671.671,0,0,1-.7-.078q-.156-.112-2.052-3.2l-.524-.859a.761.761,0,0,1-.128-.513.957.957,0,0,1,.217-.513.774.774,0,0,1,.926-.29q.011.011,1.327.446,2.264.736,2.7.887a2.082,2.082,0,0,1,.524.229.673.673,0,0,1,.245.68Zm-7.5-7.049q.056,1.137-.6,1.361-.647.19-1.272-.792L6.237,4.08a.7.7,0,0,1,.212-.691,5.788,5.788,0,0,1,2.314-1,5.928,5.928,0,0,1,2.5-.352.681.681,0,0,1,.547.5q.034.2.245,3.407T12.327,10.181Zm7.384,1.2a.679.679,0,0,1-.29.658q-.167.112-3.67.959-.747.167-1.015.257l.011-.022a.769.769,0,0,1-.513-.044.914.914,0,0,1-.413-.357.786.786,0,0,1,0-.971q.011-.011.836-1.137,1.394-1.908,1.673-2.275a2.423,2.423,0,0,1,.379-.435A.7.7,0,0,1,17.435,8a4.482,4.482,0,0,1,1.372,1.489,4.81,4.81,0,0,1,.9,1.868v.034Z"></path>
</symbol>
<symbol id="icon-xanga" viewBox="0 0 24 24">
<path d="M9,9h6v6H9V9z M3,9h6V3H3V9z M15,9h6V3h-6V9z M15,21h6v-6h-6V21z M3,21h6v-6H3V21z"></path>
</symbol>
<symbol id="icon-youtube" viewBox="0 0 24 24">
<path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path>
</symbol>
</defs>
</svg>




<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/


Served from: simplecheatsheet.com @ 2021-08-23 14:28:32 by W3 Total Cache
--><img src="https://pixel.wp.com/g.gif?v=ext&amp;j=1%3A9.8.1&amp;blog=177517120&amp;post=0&amp;tz=7&amp;srv=simplecheatsheet.com&amp;host=localhost&amp;ref=&amp;fcp=1153&amp;rand=0.4362102048905945" alt=":)" width="6" height="5" id="wpstats"></body>
		<a class="skip-link screen-reader-text" href="#site-content">Skip to the content</a>
		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					
					

					
					<div class="header-titles">

						<div class="site-title faux-heading"><a href="https://simplecheatsheet.com/">Simple Cheat Sheet</a></div><div class="site-description">Free Cheat Sheets</div><!-- .site-description -->
					</div><!-- .header-titles -->

					

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					
							<nav class="primary-menu-wrapper" aria-label="Horizontal" role="navigation">

								<ul class="primary-menu reset-list-style">

								<li id="menu-item-2455" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2455"><a href="https://cheatsheetmaker.com/">Cheat Sheet Maker</a></li>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						
						<div class="header-toggles hide-no-js">

						
							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)" /></svg>										<span class="toggle-text">Search</span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							
						</div><!-- .header-toggles -->
						
				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal">

	<div class="search-modal-inner modal-inner">

		<div class="section-inner">


			<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
				<span class="screen-reader-text">Close search</span>
				<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" /></svg>			</button><!-- .search-toggle -->

		</div><!-- .section-inner -->

	</div><!-- .search-modal-inner -->

</div><!-- .menu-modal -->

		</header><!-- #site-header -->

		
<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
					<span class="toggle-text">Close Menu</span>
					<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" /></svg>				</button><!-- .nav-toggle -->

				
					<nav class="mobile-menu" aria-label="Mobile" role="navigation">

						<ul class="modal-menu reset-list-style">

						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2455"><div class="ancestor-wrapper"><a href="https://cheatsheetmaker.com/">Cheat Sheet Maker</a></div><!-- .ancestor-wrapper --></li>

						</ul>

					</nav>

					
			</div><!-- .menu-top -->

			<div class="menu-bottom">

				
			</div><!-- .menu-bottom -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
<main id="site-content" role="main">
	
	
			<div class="container grid js-toc-content">
		<div class="main-content">
			<header class="archive-header header-footer-group">
				<div class="archive-header-inner section-inner medium">
		<h1 class="archive-title"><span class="color-accent">Tag:</span> <span>Laravel Cheat Sheet</span></h1>
															
		<div class="archive-subtitle section-inner medium max-percentage intro-text">
		
<p><strong>Laravel Cheat Sheet </strong>is a cheat sheet for creating web apps with the Laravel framework using the PHP language. <strong><a href="https://en.wikipedia.org/wiki/Laravel" target="_blank" rel="noopener noreferrer">Laravel</a></strong> is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Most of the summaries and examples are based on the official documentation.</p>
</div>
									</div><!-- .archive-header-inner -->
			</header><!-- .archive-header -->
			
<article class="post-344 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-344">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-queue"><a href="https://simplecheatsheet.com/laravel-queue/">Laravel Queue</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Queue::push('SendMail', array('message' =&gt; $message));<br>Queue::push('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0251676c66476f636b6e4271676c66">[email&#160;protected]</a>', array('message' =&gt; $message));<br>Queue::push(function($job) use $id {});</pre>



<p>Same payload to multiple workers</p>



<pre class="wp-block-preformatted">Queue::bulk(array('SendEmail', 'NotifyUser'), $payload);</pre>



<p>Starting the queue listener</p>



<pre class="wp-block-preformatted">php artisan queue:listen<br>php artisan queue:listen connection<br>php artisan queue:listen --timeout=60</pre>



<p>Process only the first job on the queue</p>



<pre class="wp-block-preformatted">php artisan queue:work</pre>



<p>Start a queue worker in daemon mode</p>



<pre class="wp-block-preformatted">php artisan queue:work --daemon</pre>



<p>Create migration file for failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:failed-table</pre>



<p>Listing failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:failed</pre>



<p>Delete failed job by id</p>



<pre class="wp-block-preformatted">php artisan queue:forget 5</pre>



<p>Delete all failed jobs</p>



<pre class="wp-block-preformatted">php artisan queue:flush</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-342 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-342">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-redirect"><a href="https://simplecheatsheet.com/laravel-redirect/">Laravel Redirect</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">return Redirect::to('foo/bar');<br>return Redirect::to('foo/bar')-&gt;with('key', 'value');<br>return Redirect::to('foo/bar')-&gt;withInput(Input::get());<br>return Redirect::to('foo/bar')-&gt;withInput(Input::except('password'));<br>return Redirect::to('foo/bar')-&gt;withErrors($validator);</pre>



<p>Create a new redirect response to the previous location</p>



<pre class="wp-block-preformatted">return Redirect::back();</pre>



<p>Create a new redirect response to a named route</p>



<pre class="wp-block-preformatted">return Redirect::route('foobar');<br>return Redirect::route('foobar', array('value'));<br>return Redirect::route('foobar', array('key' =&gt; 'value'));</pre>



<p>Create a new redirect response to a controller action</p>



<pre class="wp-block-preformatted">return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fcba9393bf9392888e939090998ebc9592989984">[email&#160;protected]</a>');<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="db9db4b498b4b5afa9b4b7b7bea99bb9baa1">[email&#160;protected]</a>', array('value'));<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f5b39a9ab69a9b81879a99999087b597948f">[email&#160;protected]</a>', array('key' =&gt; 'value'));</pre>



<p>If intended redirect is not defined, defaults to foo/bar.</p>



<pre class="wp-block-preformatted">return Redirect::intended('foo/bar');</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-348 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-348">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-route"><a href="https://simplecheatsheet.com/laravel-route/">Laravel Route</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Route::get('foo', function(){});
Route::get('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b1834352f293437373e29153a363e1b3d2e35382f323435">[email&#160;protected]</a>');
Route::controller('foo', 'FooController');</pre>



<h3>RESTful Controllers</h3>



<pre class="wp-block-preformatted">Route::resource('posts','PostsController');</pre>



<p>Specify a subset of actions to handle on the route</p>



<pre class="wp-block-preformatted">Route::resource('photo', 'PhotoController',['only' =&gt; ['index', 'show']]);
Route::resource('photo', 'PhotoController',['except' =&gt; ['update', 'destroy']]);</pre>



<h3>Triggering Errors</h3>



<pre class="wp-block-preformatted">App::abort(404);
$handler-&gt;missing(...) in ErrorServiceProvider::boot();
throw new NotFoundHttpException;</pre>



<h3>Route Parameters</h3>



<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){});
Route::get('foo/{bar?}', function($bar = 'bar'){});</pre>



<h3>HTTP Verbs</h3>



<pre class="wp-block-preformatted">Route::any('foo', function(){});
Route::post('foo', function(){});
Route::put('foo', function(){});
Route::patch('foo', function(){});
Route::delete('foo', function(){});</pre>



<p>RESTful actions</p>



<pre class="wp-block-preformatted">Route::resource('foo', 'FooController');</pre>



<p>Registering A Route For Multiple Verbs</p>



<pre class="wp-block-preformatted">Route::match(['get', 'post'], '/', function(){});</pre>



<h3>Secure Routes(TBD)</h3>



<pre class="wp-block-preformatted">Route::get('foo', array('https', function(){}));</pre>



<h3>Route Constraints</h3>



<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){})
-&gt;where('bar', '[0-9]+');
Route::get('foo/{bar}/{baz}', function($bar, $baz){})
-&gt;where(array('bar' =&gt; '[0-9]+', 'baz' =&gt; '[A-Za-z]'))</pre>



<p>Set a pattern to be used across routes</p>



<pre class="wp-block-preformatted">Route::pattern('bar', '[0-9]+')</pre>



<h3>HTTP Middleware</h3>



<p>Assigning Middleware To Routes</p>



<pre class="wp-block-preformatted">Route::get('admin/profile', ['middleware' =&gt; 'auth', function(){}]);</pre>



<h3>Named Routes</h3>



<pre class="wp-block-preformatted">Route::currentRouteName();
Route::get('foo/bar', array('as' =&gt; 'foobar', function(){}));
Route::get('user/profile', [
  'as' =&gt; 'profile', 'uses' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e0b5938592a38f8e94928f8c8c8592a093888f97b0928f86898c85">[email&#160;protected]</a>'
]);
$url = route('profile');
$redirect = redirect()-&gt;route('profile');</pre>



<h3>Route Prefixing</h3>



<pre class="wp-block-preformatted">Route::group(['prefix' =&gt; 'admin'], function()
{
  Route::get('users', function(){
      return 'Matches The "/admin/users" URL';
  });
});</pre>



<h3>Route Namespacing</h3>



<p>This route group will carry the namespace &#8216;Foo\Bar&#8217;</p>



<pre class="wp-block-preformatted">Route::group(array('namespace' =&gt; 'Foo\Bar'), function(){})</pre>



<h3>Sub-Domain Routing</h3>



<p><code>{sub}</code> will be passed to the closure</p>



<pre class="wp-block-preformatted">Route::group(array('domain' =&gt; '{sub}.example.com'), function(){});</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-346 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-346">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-config"><a href="https://simplecheatsheet.com/laravel-config/">Laravel Config</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Config::get('app.timezone');</pre>



<p>get with Default value</p>



<pre class="wp-block-preformatted">Config::get('app.timezone', 'UTC');</pre>



<p>set Configuration</p>



<pre class="wp-block-preformatted">Config::set('database.default', 'sqlite');</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->
			<div class="ads">
				<!-- Responsive -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-7014744652532083"
					 data-ad-slot="2930178966"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
									   
<article class="post-354 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-354">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-file"><a href="https://simplecheatsheet.com/laravel-file/">Laravel File</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">File::exists('path');<br>File::get('path');<br>File::getRemote('path');</pre>



<p>Get a file&#8217;s contents by requiring it</p>



<pre class="wp-block-preformatted">File::getRequire('path');</pre>



<p>Require the given file once</p>



<pre class="wp-block-preformatted">File::requireOnce('path');</pre>



<p>Write the contents of a file</p>



<pre class="wp-block-preformatted">File::put('path', 'contents');</pre>



<p>Append to a file</p>



<pre class="wp-block-preformatted">File::append('path', 'data');</pre>



<p>Delete the file at a given path</p>



<pre class="wp-block-preformatted">File::delete('path');</pre>



<p>Move a file to a new location</p>



<pre class="wp-block-preformatted">File::move('path', 'target');</pre>



<p>Copy a file to a new location</p>



<pre class="wp-block-preformatted">File::copy('path', 'target');</pre>



<p>Extract the file extension from a file path</p>



<pre class="wp-block-preformatted">File::extension('path');</pre>



<p>Get the file type of a given file</p>



<pre class="wp-block-preformatted">File::type('path');</pre>



<p>Get the file size of a given file</p>



<pre class="wp-block-preformatted">File::size('path');</pre>



<p>Get the file&#8217;s last modification time</p>



<pre class="wp-block-preformatted">File::lastModified('path');</pre>



<p>Determine if the given path is a directory</p>



<pre class="wp-block-preformatted">File::isDirectory('directory');</pre>



<p>Determine if the given path is writable</p>



<pre class="wp-block-preformatted">File::isWritable('path');</pre>



<p>Determine if the given path is a file</p>



<pre class="wp-block-preformatted">File::isFile('file');</pre>



<p>Find path names matching a given pattern.</p>



<pre class="wp-block-preformatted">File::glob($patterns, $flag);</pre>



<p>Get an array of all files in a directory.</p>



<pre class="wp-block-preformatted">File::files('directory');</pre>



<p>Get all of the files from the given directory (recursive).</p>



<pre class="wp-block-preformatted">File::allFiles('directory');</pre>



<p>Get all of the directories within a given directory.</p>



<pre class="wp-block-preformatted">File::directories('directory');</pre>



<p>Create a directory</p>



<pre class="wp-block-preformatted">File::makeDirectory('path', $mode = 0777, $recursive = false);</pre>



<p>Copy a directory from one location to another</p>



<pre class="wp-block-preformatted">File::copyDirectory('directory', 'destination', $options = null);</pre>



<p>Recursively delete a directory</p>



<pre class="wp-block-preformatted">File::deleteDirectory('directory', $preserve = false);</pre>



<p>Empty the specified directory of all files and folders</p>



<pre class="wp-block-preformatted">File::cleanDirectory('directory');</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-352 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-352">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="lang"><a href="https://simplecheatsheet.com/lang/">Lang</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">App::setLocale('en');
Lang::get('messages.welcome');
Lang::get('messages.welcome', array('foo' =&gt; 'Bar'));
Lang::has('messages.welcome');
Lang::choice('messages.apples', 10);</pre>



<p>Lang::get alias</p>



<pre class="wp-block-preformatted">trans('messages.welcome');</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-380 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-380">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-ssh"><a href="https://simplecheatsheet.com/laravel-ssh/">Laravel SSH</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>Executing Commands</p>



<pre class="wp-block-preformatted">SSH::run(array $commands);
SSH::into($remote)-&gt;run(array $commands); </pre>



<p>specify remote, otherwise assumes default</p>



<pre class="wp-block-preformatted">SSH::run(array $commands, function($line)
{
  echo $line.PHP_EOL;
});</pre>



<h3>Tasks</h3>



<p>define</p>



<pre class="wp-block-preformatted">SSH::define($taskName, array $commands);</pre>



<p>execute</p>



<pre class="wp-block-preformatted">SSH::task($taskName, function($line)
{
  echo $line.PHP_EOL;
});</pre>



<h3>SFTP Uploads</h3>



<pre class="wp-block-preformatted">SSH::put($localFile, $remotePath);
SSH::putString($string, $remotePath);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-382 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-382">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-cache"><a href="https://simplecheatsheet.com/laravel-cache/">Laravel Cache</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Cache::put('key', 'value', $minutes);<br>Cache::add('key', 'value', $minutes);<br>Cache::forever('key', 'value');<br>Cache::remember('key', $minutes, function(){ return 'value' });<br>Cache::rememberForever('key', function(){ return 'value' });<br>Cache::forget('key');<br>Cache::has('key');<br>Cache::get('key');<br>Cache::get('key', 'default');<br>Cache::get('key', function(){ return 'default'; });<br>Cache::tags('my-tag')-&gt;put('key','value', $minutes);<br>Cache::tags('my-tag')-&gt;has('key');<br>Cache::tags('my-tag')-&gt;get('key');<br>Cache::tags('my-tag')-&gt;forget('key');<br>Cache::tags('my-tag')-&gt;flush();<br>Cache::increment('key');<br>Cache::increment('key', $amount);<br>Cache::decrement('key');<br>Cache::decrement('key', $amount);<br>Cache::section('group')-&gt;put('key', $value);<br>Cache::section('group')-&gt;get('key');<br>Cache::section('group')-&gt;flush();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-376 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-376">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-html"><a href="https://simplecheatsheet.com/laravel-html/">Laravel HTML</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">HTML::macro('name', function(){});</pre>



<p>Convert an HTML string to entities</p>



<pre class="wp-block-preformatted">HTML::entities($value);</pre>



<p>Convert entities to HTML characters</p>



<pre class="wp-block-preformatted">HTML::decode($value);</pre>



<p>Generate a link to a JavaScript file</p>



<pre class="wp-block-preformatted">HTML::script($url, $attributes);</pre>



<p>Generate a link to a CSS file</p>



<pre class="wp-block-preformatted">HTML::style($url, $attributes);</pre>



<p>Generate an HTML image element</p>



<pre class="wp-block-preformatted">HTML::image($url, $alt, $attributes);</pre>



<p>Generate a HTML link</p>



<pre class="wp-block-preformatted">HTML::link($url, 'title', $attributes, $secure);</pre>



<p>Generate a HTTPS HTML link</p>



<pre class="wp-block-preformatted">HTML::secureLink($url, 'title', $attributes);</pre>



<p>Generate a HTML link to an asset</p>



<pre class="wp-block-preformatted">HTML::linkAsset($url, 'title', $attributes, $secure);</pre>



<p>Generate a HTTPS HTML link to an asset</p>



<pre class="wp-block-preformatted">HTML::linkSecureAsset($url, 'title', $attributes);</pre>



<p>Generate a HTML link to a named route</p>



<pre class="wp-block-preformatted">HTML::linkRoute($name, 'title', $parameters, $attributes);</pre>



<p>Generate a HTML link to a controller action</p>



<pre class="wp-block-preformatted">HTML::linkAction($action, 'title', $parameters, $attributes);</pre>



<p>Generate a HTML link to an email address</p>



<pre class="wp-block-preformatted">HTML::mailto($email, 'title', $attributes);</pre>



<p>Obfuscate an e-mail address to prevent spam-bots from sniffing it</p>



<pre class="wp-block-preformatted">HTML::email($email);</pre>



<p>Generate an ordered list of items</p>



<pre class="wp-block-preformatted">HTML::ol($list, $attributes);</pre>



<p>Generate an un-ordered list of items</p>



<pre class="wp-block-preformatted">HTML::ul($list, $attributes);</pre>



<p>Create a listing HTML element</p>



<pre class="wp-block-preformatted">HTML::listing($type, $list, $attributes);</pre>



<p>Create the HTML for a listing element</p>



<pre class="wp-block-preformatted">HTML::listingElement($key, $type, $value);</pre>



<p>Create the HTML for a nested listing attribute</p>



<pre class="wp-block-preformatted">HTML::nestedListing($key, $type, $value);</pre>



<p>Build an HTML attribute string from an array</p>



<pre class="wp-block-preformatted">HTML::attributes($attributes);</pre>



<p>Build a single attribute element</p>



<pre class="wp-block-preformatted">HTML::attributeElement($key, $value);</pre>



<p>Obfuscate a string to prevent spam-bots from sniffing it</p>



<pre class="wp-block-preformatted">HTML::obfuscate($value);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-378 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-378">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-model"><a href="https://simplecheatsheet.com/laravel-model/">Laravel Model</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Basic Usage</h3>



<p>Defining An Eloquent Model</p>



<pre class="wp-block-preformatted">class User extends Model {}</pre>



<p>generate Eloquent models</p>



<pre class="wp-block-preformatted">php artisan make:model User</pre>



<p>specify a custom table name</p>



<pre class="wp-block-preformatted">class User extends Model {
    protected $table = 'my_users';
}</pre>



<h3>More</h3>



<pre class="wp-block-preformatted">Model::create(array('key' =&gt; 'value'));</pre>



<p>Find first matching record by attributes or create</p>



<pre class="wp-block-preformatted">Model::firstOrCreate(array('key' =&gt; 'value'));</pre>



<p>Find first record by attributes or instantiate</p>



<pre class="wp-block-preformatted">Model::firstOrNew(array('key' =&gt; 'value'));</pre>



<p>Create or update a record matching attibutes, and fill with values</p>



<pre class="wp-block-preformatted">Model::updateOrCreate(array('search_key' =&gt; 'search_value'), array('key' =&gt; 'value'));</pre>



<p>Fill a model with an array of attributes, beware of mass assignment!</p>



<pre class="wp-block-preformatted">Model::fill($attributes);<br>Model::destroy(1);<br>Model::all();<br>Model::find(1);</pre>



<p>Find using dual primary key</p>



<pre class="wp-block-preformatted">Model::find(array('first', 'last'));</pre>



<p>Throw an exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::findOrFail(1);</pre>



<p>Find using dual primary key and throw exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::findOrFail(array('first', 'last'));<br>Model::where('foo', '=', 'bar')-&gt;get();<br>Model::where('foo', '=', 'bar')-&gt;first();</pre>



<p>dynamic</p>



<pre class="wp-block-preformatted">Model::whereFoo('bar')-&gt;first();</pre>



<p>Throw an exception if the lookup fails</p>



<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;firstOrFail();<br>Model::where('foo', '=', 'bar')-&gt;count();<br>Model::where('foo', '=', 'bar')-&gt;delete();</pre>



<p>Output raw query</p>



<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;toSql();<br>Model::whereRaw('foo = bar and cars = 2', array(20))-&gt;get();<br>Model::remember(5)-&gt;get();<br>Model::remember(5, 'cache-key-name')-&gt;get();<br>Model::cacheTags('my-tag')-&gt;remember(5)-&gt;get();<br>Model::cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();<br>Model::on('connection-name')-&gt;find(1);<br>Model::with('relation')-&gt;get();<br>Model::all()-&gt;take(10);<br>Model::all()-&gt;skip(10);</pre>



<p>Default Eloquent sort is ascendant</p>



<pre class="wp-block-preformatted">Model::all()-&gt;orderBy('column');<br>Model::all()-&gt;orderBy('column','desc');</pre>



<h3>Soft Delete</h3>



<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;get();</pre>



<p>Include the soft deleted models in the results</p>



<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;restore();<br>Model::where('cars', 2)-&gt;forceDelete();</pre>



<p>Force the result set to only included soft deletes</p>



<pre class="wp-block-preformatted">Model::onlyTrashed()-&gt;where('cars', 2)-&gt;get();</pre>



<h3>Events</h3>



<pre class="wp-block-preformatted">Model::creating(function($model){});
Model::created(function($model){});
Model::updating(function($model){});
Model::updated(function($model){});
Model::saving(function($model){});
Model::saved(function($model){});
Model::deleting(function($model){});
Model::deleted(function($model){});
Model::observe(new FooObserver);</pre>



<h3>Eloquent Configuration</h3>



<p>Disables mass assignment exceptions from being thrown from model inserts and updates</p>



<pre class="wp-block-preformatted">Eloquent::unguard();</pre>



<p>Renables any ability to throw mass assignment exceptions</p>



<pre class="wp-block-preformatted">Eloquent::reguard();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-370 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-370">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-db-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-db-cheat-sheet/">Laravel DB Cheat Sheet</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Basic Database Usage</h3>



<pre class="wp-block-preformatted">DB::connection('connection_name');</pre>



<p>Running A Select Query</p>



<pre class="wp-block-preformatted">$results = DB::select('select * from users where id = ?', [1]);<br>$results = DB::select('select * from users where id = :id', ['id' =&gt; 1]);</pre>



<p>Running A General Statement</p>



<pre class="wp-block-preformatted">DB::statement('drop table users');</pre>



<p>Listening For Query Events</p>



<pre class="wp-block-preformatted">DB::listen(function($sql, $bindings, $time){ code_here; });</pre>



<p>Database Transactions</p>



<pre class="wp-block-preformatted">DB::transaction(function()<br>{<br>DB::table('users')-&gt;update(['votes' =&gt; 1]);<br>DB::table('posts')-&gt;delete();<br>});<br>DB::beginTransaction();<br>DB::rollback();<br>DB::commit();</pre>



<h3>Laravel Query Builder</h3>



<p>Retrieving All Rows From A Table</p>



<pre class="wp-block-preformatted">DB::table('name')-&gt;get();</pre>



<p>Chunking Results From A Table</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;chunk(100, function($users) {
 foreach ($users as $user) { //} 
});</pre>



<p>Retrieving A Single Row From A Table</p>



<pre class="wp-block-preformatted">$user = DB::table('users')-&gt;where('name', 'John')-&gt;first();<br>DB::table('name')-&gt;first();</pre>



<p>Retrieving A Single Column From A Row</p>



<pre class="wp-block-preformatted">$name = DB::table('users')-&gt;where('name', 'John')-&gt;pluck('name');<br>DB::table('name')-&gt;pluck('column');</pre>



<p>Retrieving A List Of Column Values</p>



<pre class="wp-block-preformatted">$roles = DB::table('roles')-&gt;lists('title');<br>$roles = DB::table('roles')-&gt;lists('title', 'name');</pre>



<p>Specifying A Select Clause</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;select('name', 'email')-&gt;get();<br>$users = DB::table('users')-&gt;distinct()-&gt;get();<br>$users = DB::table('users')-&gt;select('name as user_name')-&gt;get();</pre>



<p>Adding A Select Clause To An Existing Query</p>



<pre class="wp-block-preformatted">$query = DB::table('users')-&gt;select('name');<br>$users = $query-&gt;addSelect('age')-&gt;get();</pre>



<p>Using Where Operators</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;get();<br>$users = DB::table('users')<br>-&gt;where('votes', '&gt;', 100)<br>-&gt;orWhere('name', 'John')<br>-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNull('updated_at')-&gt;get();<br>DB::table('name')-&gt;whereNotNull('column')-&gt;get();</pre>



<p>Dynamic Where Clauses</p>



<pre class="wp-block-preformatted">$admin = DB::table('users')-&gt;whereId(1)-&gt;first();<br>$john = DB::table('users')<br>-&gt;whereIdAndEmail(2, '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb81848385ab8f848ec5888486">[email&#160;protected]</a>')<br>-&gt;first();<br>$jane = DB::table('users')<br>-&gt;whereNameOrAge('Jane', 22)<br>-&gt;first();</pre>



<p>Order By, Group By, And Having</p>



<pre class="wp-block-preformatted">$users = DB::table('users')<br>-&gt;orderBy('name', 'desc')<br>-&gt;groupBy('count')<br>-&gt;having('count', '&gt;', 100)<br>-&gt;get();<br>DB::table('name')-&gt;orderBy('column')-&gt;get();<br>DB::table('name')-&gt;orderBy('column','desc')-&gt;get();<br>DB::table('name')-&gt;having('count', '&gt;', 100)-&gt;get();</pre>



<p>Offset &amp; Limit</p>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;skip(10)-&gt;take(5)-&gt;get();</pre>



<h3>Laravel Joins</h3>



<p>Basic Join Statement</p>



<pre class="wp-block-preformatted">DB::table('users')
          -&gt;join('contacts', 'users.id', '=', 'contacts.user_id')
          -&gt;join('orders', 'users.id', '=', 'orders.user_id')
          -&gt;select('users.id', 'contacts.phone', 'orders.price')
          -&gt;get();</pre>



<p>Left Join Statement</p>



<pre class="wp-block-preformatted">DB::table('users')
      -&gt;leftJoin('posts', 'users.id', '=', 'posts.user_id')
      -&gt;get();</pre>



<p>select * from users where name = &#8216;John&#8217; or (votes &gt; 100 and title &lt;&gt; &#8216;Admin&#8217;)</p>



<pre class="wp-block-preformatted">DB::table('users')
          -&gt;where('name', '=', 'John')
          -&gt;orWhere(function($query)
          {
              $query-&gt;where('votes', '&gt;', 100)
                    -&gt;where('title', '&lt;&gt;', 'Admin');
          })
          -&gt;get();</pre>



<h3>Laravel Aggregates</h3>



<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;count();
$price = DB::table('orders')-&gt;max('price');
$price = DB::table('orders')-&gt;min('price');
$price = DB::table('orders')-&gt;avg('price');
$total = DB::table('users')-&gt;sum('votes');

DB::table('name')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;remember(5, 'cache-key-name')-&gt;get();
DB::table('name')-&gt;cacheTags('my-key')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();</pre>



<h3>Laravel Raw Expressions&nbsp;</h3>



<pre class="wp-block-preformatted">$users = DB::table('users')
                   -&gt;select(DB::raw('count(*) as user_count, status'))
                   -&gt;where('status', '&lt;&gt;', 1)
                   -&gt;groupBy('status')
                   -&gt;get();</pre>



<p>return rows</p>



<pre class="wp-block-preformatted">DB::select('select * from users where id = ?', array('value'));</pre>



<p>return nr affected rows</p>



<pre class="wp-block-preformatted">DB::insert('insert into foo set bar=2');
DB::update('update foo set bar=2');
DB::delete('delete from bar');</pre>



<p>returns void</p>



<pre class="wp-block-preformatted">DB::statement('update foo set bar=2');</pre>



<p>raw expression inside a statement</p>



<pre class="wp-block-preformatted">DB::table('name')-&gt;select(DB::raw('count(*) as count, column2'))-&gt;get();</pre>



<h3>Laravel Inserts / Updates / Deletes / Unions / Pessimistic Locking</h3>



<p>Inserts</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;insert(
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e882878086a88d90898598848dc68b8785">[email&#160;protected]</a>', 'votes' =&gt; 0]
);
$id = DB::table('users')-&gt;insertGetId(
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d575255537d58455c504d5158135e5250">[email&#160;protected]</a>', 'votes' =&gt; 0]
);
DB::table('users')-&gt;insert([
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88fce9f1e4e7fac8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</a>', 'votes' =&gt; 0],
  ['email' =&gt; 'dayle<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b3b1e031a160b171e55181416">[email&#160;protected]</a>', 'votes' =&gt; 0]
]);</pre>



<p>Updates</p>



<pre class="wp-block-preformatted">DB::table('users')
          -&gt;where('id', 1)
          -&gt;update(['votes' =&gt; 1]);
DB::table('users')-&gt;increment('votes');
DB::table('users')-&gt;increment('votes', 5);
DB::table('users')-&gt;decrement('votes');
DB::table('users')-&gt;decrement('votes', 5);
DB::table('users')-&gt;increment('votes', 1, ['name' =&gt; 'John']);</pre>



<p>Deletes</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&lt;', 100)-&gt;delete();
DB::table('users')-&gt;delete();
DB::table('users')-&gt;truncate();</pre>



<p>Unions. The unionAll() method is also available, and has the same method signature as union.</p>



<pre class="wp-block-preformatted">$first&nbsp;= DB::table('users')-&gt;whereNull('first_name');
$users = DB::table('users')-&gt;whereNull('last_name')-&gt;union($first)-&gt;get();</pre>



<p>Pessimistic Locking</p>



<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;sharedLock()-&gt;get();
DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;lockForUpdate()-&gt;get();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-372 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-372">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-validation"><a href="https://simplecheatsheet.com/laravel-validation/">Laravel Validation</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Validator::make(
    array('key' => 'Foo'),
    array('key' => 'required|in:Foo')
);
Validator::extend('foo', function($attribute, $value, $params){});
Validator::extend('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e785151685f52575a5f4a514c7e485f52575a5f4a5b">[email&#160;protected]</a>');
Validator::resolver(function($translator, $data, $rules, $msgs)
{
    return new FooValidator($translator, $data, $rules, $msgs);
});</pre>



<h3>Laravel Rules</h3>



<pre class="wp-block-preformatted">accepted
active_url
after:YYYY-MM-DD
before:YYYY-MM-DD
alpha
alpha_dash
alpha_num
array
between:1,10
confirmed
date
date_format:YYYY-MM-DD
different:fieldname
digits:value
digits_between:min,max
boolean
email
exists:table,column
image
in:foo,bar,...
not_in:foo,bar,...
integer
numeric
ip
max:value
min:value
mimes:jpeg,png
regex:[0-9]
required
required_if:field,value
required_with:foo,bar,...
required_with_all:foo,bar,...
required_without:foo,bar,...
required_without_all:foo,bar,...
same:field
size:value
timezone
unique:table,column,except,idColumn
url</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-366 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-366">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-view"><a href="https://simplecheatsheet.com/laravel-view/">Laravel View</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">View::make('path/to/view');
View::make('foo/bar')-&gt;with('key', 'value');
View::make('foo/bar')-&gt;withKey('value');
View::make('foo/bar', array('key' =&gt; 'value'));
View::exists('foo/bar');</pre>



<p>Share a value across all views</p>



<pre class="wp-block-preformatted">View::share('key', 'value');</pre>



<p>Nesting views</p>



<pre class="wp-block-preformatted">View::make('foo/bar')-&gt;nest('name', 'foo/baz', $data);</pre>



<p>Register a view composer</p>



<pre class="wp-block-preformatted">View::composer('viewname', function($view){});</pre>



<p>Register multiple views to a composer</p>



<pre class="wp-block-preformatted">View::composer(array('view1', 'view2'), function($view){});</pre>



<p>Register a composer class</p>



<pre class="wp-block-preformatted">View::composer('viewname', 'FooComposer');
View::creator('viewname', function($view){});</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-368 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-368">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-blade"><a href="https://simplecheatsheet.com/laravel-blade/">Laravel Blade</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>Show a section in a template</p>



<pre class="wp-block-preformatted">@yield('name')<br>@extends('layout.name')</pre>



<p>Begin a section</p>



<pre class="wp-block-preformatted">@section('name')</pre>



<p>End a section</p>



<pre class="wp-block-preformatted">@stop</pre>



<p>End a section and yield</p>



<pre class="wp-block-preformatted">@section('sidebar')<br>@show<br>@parent</pre>



<pre class="wp-block-preformatted">@include('view.name')<br>@include('view.name', array('key' =&gt; 'value'));<br>@lang('messages.name')<br>@choice('messages.name', 1);</pre>



<pre class="wp-block-preformatted">@if<br>@else<br>@elseif<br>@endif</pre>



<pre class="wp-block-preformatted">@unless<br>@endunless</pre>



<pre class="wp-block-preformatted">@for<br>@endfor</pre>



<pre class="wp-block-preformatted">@foreach<br>@endforeach</pre>



<pre class="wp-block-preformatted">@while<br>@endwhile</pre>



<p>forelse 4.2 feature</p>



<pre class="wp-block-preformatted">@forelse($users as $user)<br>@empty<br>@endforelse</pre>



<p>Echo content</p>



<pre class="wp-block-preformatted">{{ $var }}</pre>



<p>Echo escaped content</p>



<pre class="wp-block-preformatted">{{{ $var }}}</pre>



<p>Echo unescaped content; 5.0 feature</p>



<pre class="wp-block-preformatted">{!! $var !!}<br>{{-- Blade Comment --}}</pre>



<p>Echoing Data After Checking For Existence</p>



<pre class="wp-block-preformatted">{{{ $name or 'Default' }}}</pre>



<p>Displaying Raw Text With Curly Braces</p>



<pre class="wp-block-preformatted">@{{ This will not be processed by Blade }}</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-362 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-362">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-mail"><a href="https://simplecheatsheet.com/laravel-mail/">Laravel Mail</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Mail::send('email.view', $data, function($message){});
Mail::send(array('html.view', 'text.view'), $data, $callback);
Mail::queue('email.view', $data, function($message){});
Mail::queueOn('queue-name', 'email.view', $data, $callback);
Mail::later(5, 'email.view', $data, function($message){});</pre>



<p>Write all email to logs instead of sending</p>



<pre class="wp-block-preformatted">Mail::pretend();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-338 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-338">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-session"><a href="https://simplecheatsheet.com/laravel-session/">Laravel Session</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Session::get('key');</pre>



<p>Returns an item from the session</p>



<pre class="wp-block-preformatted">Session::get('key', 'default');<br>Session::get('key', function(){ return 'default'; });</pre>



<p>Get the session ID</p>



<pre class="wp-block-preformatted">Session::getId();</pre>



<p>Put a key / value pair in the session</p>



<pre class="wp-block-preformatted">Session::put('key', 'value');</pre>



<p>Push a value into an array in the session</p>



<pre class="wp-block-preformatted">Session::push('foo.bar','value');</pre>



<p>Returns all items from the session</p>



<pre class="wp-block-preformatted">Session::all();</pre>



<p>Checks if an item is defined</p>



<pre class="wp-block-preformatted">Session::has('key');</pre>



<p>Remove an item from the session</p>



<pre class="wp-block-preformatted">Session::forget('key');</pre>



<p>Remove all of the items from the session</p>



<pre class="wp-block-preformatted">Session::flush();</pre>



<p>Generate a new session identifier</p>



<pre class="wp-block-preformatted">Session::regenerate();</pre>



<p>Flash a key / value pair to the session</p>



<pre class="wp-block-preformatted">Session::flash('key', 'value');</pre>



<p>Reflash all of the session flash data</p>



<pre class="wp-block-preformatted">Session::reflash();</pre>



<p>Reflash a subset of the current flash data</p>



<pre class="wp-block-preformatted">Session::keep(array('key1', 'key2'));</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-340 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-340">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-response"><a href="https://simplecheatsheet.com/laravel-response/">Laravel Response</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">return Response::make($contents);<br>return Response::make($contents, 200);<br>return Response::json(array('key' =&gt; 'value'));<br>return Response::json(array('key' =&gt; 'value'))<br>-&gt;setCallback(Input::get('callback'));<br>return Response::download($filepath);<br>return Response::download($filepath, $filename, $headers);</pre>



<p>Create a response and modify a header value</p>



<pre class="wp-block-preformatted">$response = Response::make($contents, 200);<br>$response-&gt;header('Content-Type', 'application/json');<br>return $response;</pre>



<p>Attach a cookie to a response</p>



<pre class="wp-block-preformatted">return Response::make($content)<br>-&gt;withCookie(Cookie::make('key', 'value'));</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-334 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-334">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-event"><a href="https://simplecheatsheet.com/laravel-event/">Laravel Event</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Event::fire('foo.bar', array($bar));</pre>



<p>Register an event listener with the dispatcher. <code>void listen(string|array $events, mixed $listener, int $priority)</code></p>



<pre class="wp-block-preformatted">Event::listen('App\Events\UserSignup', function($bar){});
Event::listen('foo.*', function($bar){});
Event::listen('foo.bar', 'FooHandler', 10);
Event::listen('foo.bar', 'BarHandler', 5);</pre>



<p>Stopping The Propagation Of An Event. You may do so using it by returning false from your handler.</p>



<pre class="wp-block-preformatted">Event::listen('foor.bar', function($event){ return false; });<br>Event::subscribe('UserEventHandler');</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-336 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-336">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-input"><a href="https://simplecheatsheet.com/laravel-input/">Laravel Input</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Input::get('key');</pre>



<p>Default if the key is missing</p>



<pre class="wp-block-preformatted">Input::get('key', 'default');<br>Input::has('key');<br>Input::all();</pre>



<p>Only retrieve &#8216;foo&#8217; and &#8216;bar&#8217; when getting input</p>



<pre class="wp-block-preformatted">Input::only('foo', 'bar');</pre>



<p>Disregard &#8216;foo&#8217; when getting input</p>



<pre class="wp-block-preformatted">Input::except('foo');<br>Input::flush();</pre>



<h3>Laravel Session Input (flash)</h3>



<p>Flash input to the session</p>



<pre class="wp-block-preformatted">Input::flash();</pre>



<p>Flash only some of the input to the session</p>



<pre class="wp-block-preformatted">Input::flashOnly('foo', 'bar');</pre>



<p>Flash only some of the input to the session</p>



<pre class="wp-block-preformatted">Input::flashExcept('foo', 'baz');</pre>



<p>Retrieve an old input item</p>



<pre class="wp-block-preformatted">Input::old('key','default_value');</pre>



<h3>Laravel Files</h3>



<p>Use a file that&#8217;s been uploaded</p>



<pre class="wp-block-preformatted">Input::file('filename');</pre>



<p>Determine if a file was uploaded</p>



<pre class="wp-block-preformatted">Input::hasFile('filename');</pre>



<p>Access file properties</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;getRealPath();<br>Input::file('name')-&gt;getClientOriginalName();<br>Input::file('name')-&gt;getClientOriginalExtension();<br>Input::file('name')-&gt;getSize();<br>Input::file('name')-&gt;getMimeType();</pre>



<p>Move an uploaded file</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath);</pre>



<p>Move an uploaded file</p>



<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath, $fileName);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-332 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-332">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-url"><a href="https://simplecheatsheet.com/laravel-url/">Laravel URL</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">URL::full();
URL::current();
URL::previous();
URL::to('foo/bar', $parameters, $secure);
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98d6fdefebdbf7f6eceaf7f4f4fdead8f1ecfdf5">[email&#160;protected]</a>', ['id'=&gt;123]);</pre>



<p>need be in appropriate namespace</p>



<pre class="wp-block-preformatted">URL::action('Auth\<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d3c0809153e1213090f121111180f3d11121a120809">[email&#160;protected]</a>');
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8fc9e0e0cce0e1fbfde0e3e3eafdcfe2eafbe7e0eb">[email&#160;protected]</a>', $parameters, $absolute);
URL::route('foo', $parameters, $absolute);
URL::secure('foo/bar', $parameters);
URL::asset('css/foo.css', $secure);
URL::secureAsset('css/foo.css');
URL::isValidUrl('http://example.com');
URL::getRequest();
URL::setRequest($request);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-330 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-330">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-log"><a href="https://simplecheatsheet.com/laravel-log/">Laravel Log</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>The logger provides the seven logging levels defined in RFC 5424: debug, info, notice, warning, error, critical, and alert.</p>



<pre class="wp-block-preformatted">Log::info('info');<br>Log::info('info',array('context'=&gt;'additional info'));<br>Log::error('error');<br>Log::warning('warning');</pre>



<p>get monolog instance</p>



<pre class="wp-block-preformatted">Log::getMonolog();</pre>



<p>add listener</p>



<pre class="wp-block-preformatted">Log::listen(function($level, $message, $context) {});</pre>



<h3>Laravel Query Logging</h3>



<p>enable the log</p>



<pre class="wp-block-preformatted">DB::connection()-&gt;enableQueryLog();</pre>



<p>get an array of the executed queries</p>



<pre class="wp-block-preformatted">DB::getQueryLog();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-328 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-328">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-environment"><a href="https://simplecheatsheet.com/laravel-environment/">Laravel Environment</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">$environment = app()-&gt;environment(); 
$environment = App::environment(); 
$environment = $app-&gt;environment(); </pre>



<p>The environment is local</p>



<pre class="wp-block-preformatted">if ($app-&gt;environment('local')){}</pre>



<p>The environment is either local OR staging&#8230;</p>



<pre class="wp-block-preformatted">if ($app-&gt;environment('local', 'staging')){}</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-323 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-323">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-string"><a href="https://simplecheatsheet.com/laravel-string/">Laravel String</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>Transliterate a UTF-8 value to ASCII</p>



<pre class="wp-block-preformatted">Str::ascii($value)
Str::camel($value)
Str::contains($haystack, $needle)
Str::endsWith($haystack, $needles)</pre>



<p>Cap a string with a single instance of a given value.</p>



<pre class="wp-block-preformatted">Str::finish($value, $cap)
Str::is($pattern, $value)
Str::length($value)
Str::limit($value, $limit = 100, $end = '…')
Str::lower($value)
Str::words($value, $words = 100, $end = '…')
Str::plural($value, $count = 2)</pre>



<p>Generate a more truly &#8220;random&#8221; alpha-numeric string.</p>



<pre class="wp-block-preformatted">Str::random($length = 16)</pre>



<p>Generate a &#8220;random&#8221; alpha-numeric string.</p>



<pre class="wp-block-preformatted">Str::quickRandom($length = 16)
Str::upper($value)
Str::title($value)
Str::singular($value)
Str::slug($title, $separator = '-')
Str::snake($value, $delimiter = '_')
Str::startsWith($haystack, $needles)</pre>



<p>Convert a value to studly caps case.</p>



<pre class="wp-block-preformatted">Str::studly($value)
Str::macro($name, $macro)</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-326 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-326">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-composer-command"><a href="https://simplecheatsheet.com/laravel-composer-command/">Laravel Composer Command</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">composer create-project laravel/laravel folder_name
composer install
composer update
composer dump-autoload [--optimize]
composer self-update
composer require [options] [--] [vender/packages]…</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-321 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-321">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-artisan"><a href="https://simplecheatsheet.com/laravel-artisan/">Laravel Artisan</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<figure class="wp-block-table"><table><tbody><tr><td><code>php artisan make:policy PostPolicy</code></td><td>Added in</td></tr><tr><td><code>php artisan&nbsp;--help</code> <br>OR <code>-h</code></td><td>Displays help for a given command</td></tr><tr><td><code>php artisan&nbsp;--quiet</code> <br>OR <code>-q</code></td><td>Do not output any message</td></tr><tr><td><code>php artisan&nbsp;--version</code> <br>OR <code>-V</code></td><td>Display this application version</td></tr><tr><td>php artisan&nbsp;&#8211;no-interaction <br>OR <code>-n</code></td><td>Do not ask any interactive question</td></tr><tr><td><code>php artisan&nbsp;--ansi</code></td><td>Force ANSI output</td></tr><tr><td><code>php artisan&nbsp;--no-ansi</code></td><td>Disable ANSI output</td></tr><tr><td><code>php artisan&nbsp;--env</code></td><td>The environment the command should run under</td></tr><tr><td><code>php artisan&nbsp;--verbose</code></td><td>-v|vv|vvv Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</td></tr><tr><td><code>php artisan clear-compiled</code></td><td>Remove the compiled class file</td></tr><tr><td><code>php artisan env</code></td><td>Display the current framework environment</td></tr><tr><td><code>php artisan help</code></td><td>Displays help for a command</td></tr><tr><td><code>php artisan list</code></td><td>Lists commands</td></tr><tr><td><code>php artisan tinker</code></td><td>Interact with your application</td></tr><tr><td><code>php artisan down</code></td><td>Put the application into maintenance mode</td></tr><tr><td><code>php artisan up</code></td><td>Bring the application out of maintenance mode</td></tr><tr><td><code>php artisan optimize&nbsp;[--force] [--psr]</code></td><td>Optimize the framework for better performance<br><code>--force</code> Force the compiled class file to be <br><code>--psr</code> Do not optimize Composer dump-autoload.</td></tr><tr><td><code>php artisan serve</code></td><td>Serve the application on the PHP development server</td></tr><tr><td><code>php artisan serve&nbsp;--port 8080</code></td><td>Change the default port</td></tr><tr><td><code>php artisan serve&nbsp;--host 0.0.0.0</code></td><td>Get it to work outside localhost</td></tr><tr><td><code>php artisan app:name namespace</code></td><td>Set the application namespace</td></tr><tr><td><code>php artisan auth:clear-resets</code></td><td>Flush expired password reset tokens</td></tr><tr><td><code>php artisan cache:clear</code></td><td>Flush the application cache</td></tr><tr><td><code>php artisan cache:table</code></td><td>Create a migration for the cache database table</td></tr><tr><td><code>php artisan config:cache</code></td><td>Create a cache file for faster configuration loading</td></tr><tr><td><code>php artisan config:clear</code></td><td>Remove the configuration cache file</td></tr><tr><td><code>$exitCode&nbsp;= Artisan::call('config:cache');</code></td><td>In program</td></tr><tr><td><code>php artisan db:seed [--class[="..."]] [--database[="..."]] [--force]</code></td><td>Seed the database with records<br><code>--class</code> The class name of the root seeder (default: &#8220;DatabaseSeeder&#8221;)<br><code>--database</code> The database connection to seed<br><code>--force</code> Force the operation to run when in production.</td></tr><tr><td><code>php artisan&nbsp;event:generate</code></td><td>Generate the missing events and handlers based on registration</td></tr><tr><td><code>php artisan handler:command [--command="..."] name</code></td><td>Create a new command handler class<br><code>--command </code>The command class the handler handles.</td></tr><tr><td><code>php artisan handler:event [--event="..."] [--queued] name</code></td><td>Create a new event handler class<br><code>--event</code> The event class the handler handles.<br><code>--queued</code> Indicates the event handler should be queued.</td></tr><tr><td><code>php artisan key:generate</code></td><td>Set the application key</td></tr><tr><td><code>php artisan make:command [--handler] [--queued] name</code></td><td>By default, this creates a self-handling command that isn&#8217;t pushed to the queue. Pass this the <code>--handler</code> flag to generate a handler, and the <code>--queued</code> flag to make it queued.</td></tr><tr><td><code>make:console [--command[="..."]] name</code></td><td>Create a new Artisan command<br><code>--command</code> The terminal command should be assigned. (default: &#8220;command:name&#8221;)</td></tr><tr><td><code>php artisan make:controller [--plain] name</code></td><td>Create a new resourceful controller<br><code>--plain</code> Generate an empty controller class.</td></tr><tr><td><code>php artisan make:event name</code></td><td>Create a new event class</td></tr><tr><td><code>php artisan make:middleware name</code></td><td>Create a new middleware class</td></tr><tr><td><code>php artisan make:migration [--create[="..."]] [--table[="..."]] name</code></td><td>Create a new migration file<br><code>--create</code> The table to be created.<br><code>--table</code> The table to migrate.</td></tr><tr><td><code>php artisan make:model name</code></td><td>Create a new Eloquent model class</td></tr><tr><td><code>php artisan make:provider name</code></td><td>Create a new service provider class</td></tr><tr><td><code>php artisan make:request name</code></td><td>Create a new form request class</td></tr><tr><td><code>php artisan migrate&nbsp;[--database[="..."]] [--force] [--path[="..."]] [--pretend] [--seed]</code></td><td>Database migrations<br><code>--database</code> The database connection to use.<br><code>--force</code> Force the operation to run when in production.<br><code>--path</code> The path of migrations files to be executed.<br><code>--pretend</code> Dump the SQL queries that would be run.<br><code>--seed</code> Indicates if the seed task should be re-run.</td></tr><tr><td><code>php artisan migrate:install [--database[="..."]]</code></td><td>Create the migration repository</td></tr><tr><td><code>php artisan migrate:refresh [--database[="..."]] [--force] [--seed] [--seeder[="..."]]</code></td><td>Create a new migration file<br><code>--seeder</code> The class name of the root seeder.</td></tr><tr><td><code>php artisan migrate:reset [--database[="..."]] [--force] [--pretend]</code></td><td>Rollback all database migrations<br><code>--pretend</code> Dump the SQL queries that would be run.</td></tr><tr><td><code>php artisan migrate:rollback [--database[="..."]] [--force] [--pretend]</code></td><td>Rollback the last database migration</td></tr><tr><td><code>php artisan migrate:status</code></td><td>Show a list of migrations up/down</td></tr><tr><td><code>php artisan queue:table</code></td><td>Create a migration for the queue jobs database table</td></tr><tr><td><code>php artisan queue:listen [--queue[="..."]] [--delay[="..."]] [--memory[="..."]] [--timeout[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</code></td><td>Listen to a given queue<br><code>--queue</code> The queue to listen on<br><code>--delay</code> Amount of time to delay failed jobs (default: 0)<br><code>--memory </code>The memory limit in megabytes (default: 128)<br><code>--timeout</code> Seconds a job may run before timing out (default: 60)<br><code>--sleep</code> Seconds to wait before checking queue for jobs (default: 3)<br><code>--tries</code> Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td><code>php artisan queue:failed</code></td><td>List all of the failed queue jobs</td></tr><tr><td><code>php artisan queue:failed-table</code></td><td>Create a migration for the failed queue jobs database table</td></tr><tr><td><code>php artisan queue:flush</code></td><td>Flush all of the failed queue jobs</td></tr><tr><td><code>php artisan queue:forget</code></td><td>Delete a failed queue job</td></tr><tr><td><code>php artisan queue:restart</code></td><td>Restart queue worker daemons after their current job</td></tr><tr><td><code>php artisan queue:retry id</code></td><td>Retry a failed queue job(id: The ID of the failed job)</td></tr><tr><td><code>php artisan queue:subscribe [--type[="..."]] queue url</code></td><td>Subscribe a URL to an Iron.io push queue<br><code>queue</code>: The name of Iron.io queue.<br><code>url</code>: The URL to be subscribed.<br><code>--type</code> The push type for the queue.</td></tr><tr><td><code>php artisan queue:work [--queue[="..."]] [--daemon] [--delay[="..."]] [--force] [--memory[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</code></td><td>Process the next job on a queue<br><code>--queue</code> The queue to listen on<br><code>--daemon</code> Run the worker in daemon mode<br><code>--delay</code> Amount of time to delay failed jobs (default: 0)<br><code>--force</code> Force the worker to run even in maintenance mode<br><code>--memory</code> The memory limit in megabytes (default: 128)<br><code>--sleep</code> Number of seconds to sleep when no job is available (default: 3)<br><code>--tries</code> Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td><code>php artisan route:cache</code></td><td>Create a route cache file for faster route registration</td></tr><tr><td><code>php artisan route:clear</code></td><td>Remove the route cache file</td></tr><tr><td><code>php artisan route:list</code></td><td>List all registered routes</td></tr><tr><td><code>php artisan schedule:run</code></td><td>Run the scheduled commands</td></tr><tr><td><code>php artisan session:table</code></td><td>Create a migration for the session database table</td></tr><tr><td><code>php artisan vendor:publish [--force] [--provider[="..."]] [--tag[="..."]] php artisan tail [--path[="..."]] [--lines[="..."]] [connection]</code></td><td>Publish any publishable assets from vendor packages<br><code>--force</code> Overwrite any existing files.<br><code>--provider</code> The service provider that has assets you want to publish.<br><code>--tag</code> The tag that has assets you want to publish.</td></tr></tbody></table></figure>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-384 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-384">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-cookie"><a href="https://simplecheatsheet.com/laravel-cookie/">Laravel Cookie</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Cookie::get('key');<br>Cookie::get('key', 'default');</pre>



<p>Create a cookie that lasts for ever</p>



<pre class="wp-block-preformatted">Cookie::forever('key', 'value');
Create a cookie that lasts N minutes
Cookie::make('key', 'value', 'minutes');</pre>



<p>Set a cookie before a response has been created</p>



<pre class="wp-block-preformatted">Cookie::queue('key', 'value', 'minutes');</pre>



<p>Forget cookie</p>



<pre class="wp-block-preformatted">Cookie::forget('key');</pre>



<p>Send a cookie with a response</p>



<pre class="wp-block-preformatted">$response = Response::make('Hello World');</pre>



<p>Add a cookie to the response</p>



<pre class="wp-block-preformatted">$response-&gt;withCookie(Cookie::make('name', 'value', $minutes));</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-364 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-364">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-messages"><a href="https://simplecheatsheet.com/laravel-messages/">Laravel Messages</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>These can be used on the $message instance passed into Mail::send() or Mail::queue()</p>



<pre class="wp-block-preformatted">$message-&gt;from('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89d95999194b89d80999588949dd69b9795">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;sender('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d78707c74715d78657c706d7178337e7270">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;returnPath('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbded6dad2d7fbdec3dad6cbd7de95d8d4d6">[email&#160;protected]</a>');
$message-&gt;to('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="395c54585055795c41585449555c175a5654">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;cc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="650008040c0925001d04081509004b060a08">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;bcc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b4bcb0b8bd91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;replyTo('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5a525e56537f5a475e524f535a115c5052">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;subject('Welcome to the Jungle');
$message-&gt;priority(2);
$message-&gt;attach('foo\bar.txt', $options);</pre>



<p>This uses in-memory data as attachments</p>



<pre class="wp-block-preformatted">$message-&gt;attachData('bar', 'Data Name', $options);</pre>



<p>Embed a file in the message and get the CID</p>



<pre class="wp-block-preformatted">$message-&gt;embed('foo\bar.txt');
$message-&gt;embedData('foo', 'Data Name', $options);</pre>



<p>Get the underlying Swift Message instance</p>



<pre class="wp-block-preformatted">$message-&gt;getSwiftMessage();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-388 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-388">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-security"><a href="https://simplecheatsheet.com/laravel-security/">Laravel Security</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Hashing</h3>



<pre class="wp-block-preformatted">Hash::make('secretpassword');
Hash::check('secretpassword', $hashedPassword);
Hash::needsRehash($hashedPassword);</pre>



<h3>Encryption</h3>



<pre class="wp-block-preformatted">Crypt::encrypt('secretstring');
Crypt::decrypt($encryptedString);
Crypt::setMode('ctr');
Crypt::setCipher($cipher);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-358 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-358">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-schema"><a href="https://simplecheatsheet.com/laravel-schema/">Laravel Schema</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>Indicate that the table needs to be created</p>



<pre class="wp-block-preformatted">Schema::create('table', function($table) { 
    $table-&gt;increments('id'); 
});</pre>



<p>Specify a Connection</p>



<pre class="wp-block-preformatted">Schema::connection('foo')-&gt;create('table', function($table){});</pre>



<p>Rename the table to a given name</p>



<pre class="wp-block-preformatted">Schema::rename($from, $to);</pre>



<p>Indicate that the table should be dropped</p>



<pre class="wp-block-preformatted">Schema::drop('table');</pre>



<p>Indicate that the table should be dropped if it exists</p>



<pre class="wp-block-preformatted">Schema::dropIfExists('table');</pre>



<p>Determine if the given table exists</p>



<pre class="wp-block-preformatted">Schema::hasTable('table');</pre>



<p>Determine if the given table has a given column</p>



<pre class="wp-block-preformatted">Schema::hasColumn('table', 'column');</pre>



<p>Update an existing table</p>



<pre class="wp-block-preformatted">Schema::table('table', function($table){});</pre>



<p>Indicate that the given columns should be renamed</p>



<pre class="wp-block-preformatted">$table-&gt;renameColumn('from', 'to');</pre>



<p>Indicate that the given columns should be dropped<br></p>



<pre class="wp-block-preformatted">$table-&gt;dropColumn(string|array);</pre>



<p>The storage engine that should be used for the table</p>



<pre class="wp-block-preformatted">$table-&gt;engine = 'InnoDB';</pre>



<p>Only work on MySQL</p>



<pre class="wp-block-preformatted">$table-&gt;string('name')-&gt;after('email');</pre>



<h3>Laravel Indexes</h3>



<pre class="wp-block-preformatted">$table-&gt;string('column')-&gt;unique();<br>$table-&gt;primary('column');</pre>



<p>Creates a dual primary key</p>



<pre class="wp-block-preformatted">$table-&gt;primary(array('first', 'last'));
$table-&gt;unique('column');
$table-&gt;unique('column', 'key_name');</pre>



<p>Creates a dual unique index<br></p>



<pre class="wp-block-preformatted">$table-&gt;unique(array('first', 'last'));
$table-&gt;unique(array('first', 'last'), 'key_name');
$table-&gt;index('column');
$table-&gt;index('column', 'key_name');</pre>



<p>Creates a dual index</p>



<pre class="wp-block-preformatted">$table-&gt;index(array('first', 'last'));
$table-&gt;index(array('first', 'last'), 'key_name');
$table-&gt;dropPrimary('table_column_primary');
$table-&gt;dropUnique('table_column_unique');
$table-&gt;dropIndex('table_column_index');</pre>



<h3>Laravel Foreign Keys</h3>



<pre class="wp-block-preformatted">$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onDelete('cascade'|'restrict'|'set null'|'no action');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onUpdate('cascade'|'restrict'|'set null'|'no action');
$table-&gt;dropForeign('posts_user_id_foreign');</pre>



<h3>Laravel Column Types</h3>



<p>Increments</p>



<pre class="wp-block-preformatted">$table-&gt;increments('id');
$table-&gt;bigIncrements('id');</pre>



<p>Numbers</p>



<pre class="wp-block-preformatted">$table-&gt;integer('votes');
$table-&gt;tinyInteger('votes');
$table-&gt;smallInteger('votes');
$table-&gt;mediumInteger('votes');
$table-&gt;bigInteger('votes');
$table-&gt;float('amount');
$table-&gt;double('column', 15, 8);
$table-&gt;decimal('amount', 5, 2);</pre>



<p>String and Text</p>



<pre class="wp-block-preformatted">$table-&gt;char('name', 4);
$table-&gt;string('email');
$table-&gt;string('name', 100);
$table-&gt;text('description');
$table-&gt;mediumText('description');
$table-&gt;longText('description');</pre>



<p>Date and Time</p>



<pre class="wp-block-preformatted">$table-&gt;date('created_at');
$table-&gt;dateTime('created_at');
$table-&gt;time('sunrise');
$table-&gt;timestamp('added_on');</pre>



<p>Adds created_at and updated_at columns</p>



<pre class="wp-block-preformatted">$table-&gt;timestamps();<br>$table-&gt;nullableTimestamps();</pre>



<p>Others</p>



<pre class="wp-block-preformatted">$table-&gt;binary('data');
$table-&gt;boolean('confirmed');</pre>



<p>Adds deleted_at column for soft deletes</p>



<pre class="wp-block-preformatted">$table-&gt;softDeletes();
$table-&gt;enum('choices', array('foo', 'bar'));</pre>



<p>Adds remember_token as VARCHAR(100) NULL</p>



<pre class="wp-block-preformatted">$table-&gt;rememberToken();</pre>



<p>Adds INTEGER parent_id and STRING parent_type</p>



<pre class="wp-block-preformatted">$table-&gt;morphs('parent');<br>-&gt;nullable()<br>-&gt;default($value)<br>-&gt;unsigned()</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-386 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-386">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-request"><a href="https://simplecheatsheet.com/laravel-request/">Laravel Request</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>url: http://xx.com/aa/bb</p>



<pre class="wp-block-preformatted">Request::url();</pre>



<p>path: /aa/bb</p>



<pre class="wp-block-preformatted">Request::path();</pre>



<p>getRequestUri: /aa/bb/?c=d</p>



<pre class="wp-block-preformatted">Request::getRequestUri();</pre>



<p>Returns user&#8217;s IP</p>



<pre class="wp-block-preformatted">Request::getClientIp();</pre>



<p>getUri: http://xx.com/aa/bb/?c=d</p>



<pre class="wp-block-preformatted">Request::getUri();</pre>



<p>getQueryString: c=d</p>



<pre class="wp-block-preformatted">Request::getQueryString();</pre>



<p>Get the port scheme of the request (e.g., 80, 443, etc.)</p>



<pre class="wp-block-preformatted">Request::getPort();</pre>



<p>Determine if the current request URI matches a pattern</p>



<pre class="wp-block-preformatted">Request::is('foo/*');</pre>



<p>Get a segment from the URI (1 based index)</p>



<pre class="wp-block-preformatted">Request::segment(1);</pre>



<p>Retrieve a header from the request</p>



<pre class="wp-block-preformatted">Request::header('Content-Type');</pre>



<p>Retrieve a server variable from the request</p>



<pre class="wp-block-preformatted">Request::server('PATH_INFO');</pre>



<p>Determine if the request is the result of an AJAX call</p>



<pre class="wp-block-preformatted">Request::ajax();</pre>



<p>Determine if the request is over HTTPS</p>



<pre class="wp-block-preformatted">Request::secure();</pre>



<p>Get the request method</p>



<pre class="wp-block-preformatted">Request::method();</pre>



<p>Checks if the request method is of specified type</p>



<pre class="wp-block-preformatted">Request::isMethod('post');</pre>



<p>Get raw POST data</p>



<pre class="wp-block-preformatted">Request::instance()-&gt;getContent();</pre>



<p>Get requested response format</p>



<pre class="wp-block-preformatted">Request::format();</pre>



<p>true if HTTP Content-Type header contains */json</p>



<pre class="wp-block-preformatted">Request::isJson();</pre>



<p>true if HTTP Accept header is application/json</p>



<pre class="wp-block-preformatted">Request::wantsJson();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-360 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-360">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-container"><a href="https://simplecheatsheet.com/laravel-container/">Laravel Container</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">App::bind('foo', function($app){ return new Foo; });<br>App::make('foo');</pre>



<p>If this class exists, it&#8217;s returned</p>



<pre class="wp-block-preformatted">App::make('FooBar');</pre>



<p>Register a shared binding in the container</p>



<pre class="wp-block-preformatted">App::singleton('foo', function(){ return new Foo; });</pre>



<p>Register an existing instance as shared in the container</p>



<pre class="wp-block-preformatted">App::instance('foo', new Foo);</pre>



<p>Register a binding with the container</p>



<pre class="wp-block-preformatted">App::bind('FooRepositoryInterface', 'BarRepository');</pre>



<p>Register a service provider with the application</p>



<pre class="wp-block-preformatted">App::register('FooServiceProvider');</pre>



<p>Listen for object resolution</p>



<pre class="wp-block-preformatted">App::resolving(function($object){});</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-356 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-356">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-auth"><a href="https://simplecheatsheet.com/laravel-auth/">Laravel Auth</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Laravel Authentication</h3>



<p>Determine if the current user is authenticated</p>



<pre class="wp-block-preformatted">Auth::check();</pre>



<p>Get the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::user();</pre>



<p>Get the ID of the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::id();</pre>



<p>Attempt to authenticate a user using the given credentials</p>



<pre class="wp-block-preformatted">Auth::attempt(array('email' =&gt; $email, 'password' =&gt; $password));</pre>



<p>&#8216;Remember me&#8217; by passing true to Auth::attempt()</p>



<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>



<p>Log in for a single request</p>



<pre class="wp-block-preformatted">Auth::once($credentials);</pre>



<p>Log a user into the application</p>



<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>



<p>Log the given user ID into the application</p>



<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>



<p>Log the user out of the application</p>



<pre class="wp-block-preformatted">Auth::logout();</pre>



<p>Validate a user&#8217;s credentials</p>



<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>



<p>Attempt to authenticate using HTTP Basic Auth</p>



<pre class="wp-block-preformatted">Auth::basic('username');</pre>



<p>Perform a stateless HTTP Basic login attempt</p>



<pre class="wp-block-preformatted">Auth::onceBasic();</pre>



<p>Send a password reminder to a user</p>



<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>



<h3>Laravel Authorization</h3>



<p>Define abilities</p>



<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2a18e839191a28f87968a8d86">[email&#160;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>



<p>Passing multiple argument</p>



<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>



<p>Check abilities</p>



<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>



<p>Specified a user for checking</p>



<pre class="wp-block-preformatted">Gate::forUser($user)-&gt;allows('update-post', $post);</pre>



<p>Through User model, using Authorizable trait</p>



<pre class="wp-block-preformatted">User::find(1)-&gt;can('update-post', $post);<br>User::find(1)-&gt;cannot('update-post', $post);</pre>



<p>Intercepting Authorization Checks</p>



<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>



<p>Chekcing in Blade template</p>



<pre class="wp-block-preformatted">@can('update-post', $post)
@endcan
// with <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8a839c8aaf8c8e81">[email&#160;protected]</a>('update-post', $post)
@else
@endcan
</pre>



<p>Generate a Policy</p>



<pre class="wp-block-preformatted">php artisan make:policy PostPolicy</pre>



<p>`policy` helper function</p>



<pre class="wp-block-preformatted">policy($post)-&gt;update($user, $post)</pre>



<p>Controller Authorization</p>



<pre class="wp-block-preformatted">$this-&gt;authorize('update', $post);</pre>



<p>for $user</p>



<pre class="wp-block-preformatted">$this-&gt;authorizeForUser($user, 'update', $post);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-390 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-390">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-auth-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-auth-cheat-sheet/">Laravel Auth Cheat Sheet</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Authentication</h3>



<p>Determine if the current user is authenticated</p>



<pre class="wp-block-preformatted">Auth::check();</pre>



<p>Get the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::user();</pre>



<p>Get the ID of the currently authenticated user</p>



<pre class="wp-block-preformatted">Auth::id();</pre>



<p>Attempt to authenticate a user using the given credentials</p>



<pre class="wp-block-preformatted">Auth::attempt(array('email' => $email, 'password' => $password));</pre>



<p>&#8216;Remember me&#8217; by passing true to Auth::attempt()</p>



<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>



<p>Log in for a single request</p>



<pre class="wp-block-preformatted">Auth::once($credentials);</pre>



<p>Log a user into the application</p>



<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>



<p>Log the given user ID into the application</p>



<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>



<p>Log the user out of the application</p>



<pre class="wp-block-preformatted">Auth::logout();</pre>



<p>Validate a user&#8217;s credentials</p>



<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>



<p>Attempt to authenticate using HTTP Basic Auth</p>



<pre class="wp-block-preformatted">Auth::basic('username');</pre>



<p>Perform a stateless HTTP Basic login attempt</p>



<pre class="wp-block-preformatted">Auth::onceBasic();</pre>



<p>Send a password reminder to a user</p>



<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>



<h3>Authorization</h3>



<p>Define abilities</p>



<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90d3fcf1e3e3d0fdf5e4f8fff4">[email&#160;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>



<p>Passing multiple argument</p>



<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>



<p>Check abilities</p>



<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>



<p>Specified a user for checking</p>



<pre class="wp-block-preformatted">Gate::forUser($user)->allows('update-post', $post);</pre>



<p>Through User model, using Authorizable trait</p>



<pre class="wp-block-preformatted">User::find(1)->can('update-post', $post);<br>User::find(1)->cannot('update-post', $post);</pre>



<p>Intercepting Authorization Checks</p>



<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>



<p>Chekcing in Blade template</p>



<pre class="wp-block-preformatted">@can('update-post', $post)<br>@endcan</pre>



<p>with else</p>



<pre class="wp-block-preformatted">@can('update-post', $post)<br>@else<br>@endcan</pre>



<p>Generate a Policy</p>



<p>php artisan make:policy PostPolicy</p>



<p><code>policy</code> helper function</p>



<pre class="wp-block-preformatted">policy($post)->update($user, $post)</pre>



<p>// Controller Authorization</p>



<pre class="wp-block-preformatted">$this->authorize('update', $post);</pre>



<p>for $user </p>



<pre class="wp-block-preformatted">$this->authorizeForUser($user, 'update', $post);</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-350 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-350">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="pagination"><a href="https://simplecheatsheet.com/pagination/">Pagination</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<p>Auto-Magic Pagination</p>



<pre class="wp-block-preformatted">Model::paginate(15);<br>Model::where('cars', 2)-&gt;paginate(15);</pre>



<p>&#8220;Next&#8221; and &#8220;Previous&#8221; only</p>



<pre class="wp-block-preformatted">Model::where('cars', 2)-&gt;simplePaginate(15);</pre>



<p>Manual Paginator</p>



<pre class="wp-block-preformatted">Paginator::make($items, $totalItems, $perPage);</pre>



<p>Print page navigators in view</p>



<pre class="wp-block-preformatted">$variable-&gt;links();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-392 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-392">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-form"><a href="https://simplecheatsheet.com/laravel-form/">Laravel Form</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<pre class="wp-block-preformatted">Form::open(array('url' =&gt; 'foo/bar', 'method' =&gt; 'PUT'));
Form::open(array('route' =&gt; 'foo.bar'));
Form::open(array('route' =&gt; array('foo.bar', $parameter)));
Form::open(array('action' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="367059597559584244595a5a5344765b53425e5952">[email&#160;protected]</a>'));
Form::open(array('action' =&gt; array('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c385acac80acadb7b1acafafa6b183aea6b7abaca7">[email&#160;protected]</a>', $parameter)));
Form::open(array('url' =&gt; 'foo/bar', 'files' =&gt; true));
Form::close();
Form::token();
Form::model($foo, array('route' =&gt; array('foo.bar', $foo-&gt;bar)));</pre>



<h3>Form Elements</h3>



<pre class="wp-block-preformatted">Form::label('id', 'Description');
Form::label('id', 'Description', array('class' =&gt; 'foo'));
Form::text('name');
Form::text('name', $value);
Form::text('name', $value, array('class' =&gt; 'name'));
Form::textarea('name');
Form::textarea('name', $value);
Form::textarea('name', $value, array('class' =&gt; 'name'));
Form::hidden('foo', $value);
Form::password('password');
Form::password('password', array('placeholder' =&gt; 'Password'));
Form::email('name', $value, array());
Form::file('name', array('class' =&gt; 'name'));
Form::checkbox('name', 'value');</pre>



<p>Generating a checkbox that is checked</p>



<pre class="wp-block-preformatted">Form::checkbox('name', 'value', true, array('class' =&gt; 'name'));
Form::radio('name', 'value');</pre>



<p>Generating a radio input that is selected</p>



<pre class="wp-block-preformatted">Form::radio('name', 'value', true, array('class' =&gt; 'name'));
Form::select('name', array('key' =&gt; 'value'));
Form::select('name', array('key' =&gt; 'value'), 'key', array('class' =&gt; 'name'));
Form::selectRange('range', 1, 10);
Form::selectYear('year', 2011, 2015);
Form::selectMonth('month');
Form::submit('Submit!', array('class' =&gt; 'name'));
Form::button('name', array('class' =&gt; 'name'));
Form::macro('fooField', function()
{
return '&lt;input type="custom"/&gt;';
});
Form::fooField();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->

<article class="post-394 post type-post status-publish format-standard hentry category-development tag-laravel-5-cheat-sheet tag-laravel-cheat-sheet" id="post-394">
	<header class="entry-header ">
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-helper"><a href="https://simplecheatsheet.com/laravel-helper/">Laravel Helper</a></h2>
	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
	<div class="post-inner thin ">
		<div class="entry-content">
			
<h3>Arrays</h3>



<p>adds a given key / value pair to the array if the given key doesn&#8217;t already exist in the array</p>



<pre class="wp-block-preformatted">array_add($array, 'key', 'value');</pre>



<p>collapse an array of arrays into a single array</p>



<pre class="wp-block-preformatted">array_collapse($array);</pre>



<p>Divide an array into two arrays. One with keys and the other with values</p>



<pre class="wp-block-preformatted">array_divide($array);</pre>



<p>Flatten a multi-dimensional associative array with dots</p>



<pre class="wp-block-preformatted">array_dot($array);</pre>



<p>Get all of the given array except for a specified array of items</p>



<pre class="wp-block-preformatted">array_except($array, array('key'));</pre>



<p>Return the first element in an array passing a given truth test</p>



<pre class="wp-block-preformatted">array_first($array, function($key, $value){}, $default);</pre>



<p>Strips keys from the array</p>



<pre class="wp-block-preformatted">array_flatten($array);</pre>



<p>Remove one or many array items from a given array using &#8220;dot&#8221; notation</p>



<pre class="wp-block-preformatted">array_forget($array, 'foo');</pre>



<p>Dot notation</p>



<pre class="wp-block-preformatted">array_forget($array, 'foo.bar');</pre>



<p>Get an item from an array using &#8220;dot&#8221; notation</p>



<pre class="wp-block-preformatted">array_get($array, 'foo', 'default');<br>array_get($array, 'foo.bar', 'default');</pre>



<p>Checks that a given item exists in an array using &#8220;dot&#8221; notation</p>



<pre class="wp-block-preformatted">array_has($array, 'products.desk');</pre>



<p>Get a subset of the items from the given array</p>



<pre class="wp-block-preformatted">array_only($array, array('key'));</pre>



<p>Return array of key => values</p>



<pre class="wp-block-preformatted">array_pluck($array, 'key');</pre>



<p>Return and remove &#8216;key&#8217; from array</p>



<pre class="wp-block-preformatted">array_pull($array, 'key');</pre>



<p>Set an array item to a given value using &#8220;dot&#8221; notation</p>



<pre class="wp-block-preformatted">array_set($array, 'key', 'value');</pre>



<p>Dot notation</p>



<pre class="wp-block-preformatted">array_set($array, 'key.subkey', 'value');</pre>



<p>Sorts the array by the results of the given Closure</p>



<pre class="wp-block-preformatted">array_sort($array, function(){});</pre>



<p>Recursively sorts the array using the sort function</p>



<pre class="wp-block-preformatted">array_sort_recursive();</pre>



<p>Filters the array using the given Closure</p>



<pre class="wp-block-preformatted">array_where();</pre>



<p>First element of an array</p>



<pre class="wp-block-preformatted">head($array);</pre>



<p>Last element of an array</p>



<pre class="wp-block-preformatted">last($array);</pre>



<h3>Paths</h3>



<p>Fully qualified path to the app directory</p>



<pre class="wp-block-preformatted">app_path();</pre>



<p>Get the path to the public folder</p>



<pre class="wp-block-preformatted">base_path();</pre>



<p>Fully qualified path to the application configuration directory</p>



<pre class="wp-block-preformatted">config_path();</pre>



<p>Fully qualified path to the application&#8217;s database directory</p>



<pre class="wp-block-preformatted">database_path();</pre>



<p>Gets the path to the versioned Elixir file:</p>



<pre class="wp-block-preformatted">elixir();</pre>



<p>Fully qualified path to the public directory</p>



<pre class="wp-block-preformatted">public_path();</pre>



<p>Get the path to the storage folder</p>



<pre class="wp-block-preformatted">storage_path();</pre>



<h3>Strings</h3>



<p>Convert a value to camel case</p>



<pre class="wp-block-preformatted">camel_case($value);</pre>



<p>Get the class &#8220;basename&#8221; of the given object / class</p>



<pre class="wp-block-preformatted">class_basename($class);</pre>



<p>Escape a string</p>



<pre class="wp-block-preformatted">e('');</pre>



<p>Determine if a given string starts with a given substring</p>



<pre class="wp-block-preformatted">starts_with('Foo bar.', 'Foo');</pre>



<p>Determine if a given string ends with a given substring</p>



<pre class="wp-block-preformatted">ends_with('Foo bar.', 'bar.');</pre>



<p>Convert a string to snake case</p>



<pre class="wp-block-preformatted">snake_case('fooBar');</pre>



<p>Limits the number of characters in a string</p>



<pre class="wp-block-preformatted">str_limit();</pre>



<p>Determine if a given string contains a given substring</p>



<pre class="wp-block-preformatted">str_contains('Hello foo bar.', 'foo');</pre>



<p>Result: foo/bar/</p>



<pre class="wp-block-preformatted">str_finish('foo/bar', '/');<br>str_is('foo*', 'foobar');<br>str_plural('car');<br>str_random(25);<br>str_singular('cars');<br>str_slug("Laravel 5 Framework", "-");</pre>



<p>Result: FooBar</p>



<pre class="wp-block-preformatted">studly_case('foo_bar');<br>trans('foo.bar');<br>trans_choice('foo.bar', $count);</pre>



<h3>URLs and Links</h3>



<pre class="wp-block-preformatted">action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21674e4e624e4f55534e4d4d4453614c4455494e45">[email&#160;protected]</a>', $parameters);</pre>



<p>HTML Link</p>



<pre class="wp-block-preformatted">asset('img/photo.jpg', $title, $attributes);</pre>



<p>HTTPS link</p>



<pre class="wp-block-preformatted">secure_asset('img/photo.jpg', $title, $attributes);
route($route, $parameters, $absolute = true);
url('path', $parameters = array(), $secure = null);</pre>



<h3>Miscellaneous</h3>



<p>Authenticator instance (Auth)</p>



<pre class="wp-block-preformatted">auth()->user();</pre>



<p>Generates a redirect response to the user&#8217;s previous location</p>



<pre class="wp-block-preformatted">back();</pre>



<p>Hashes the given value using Bcrypt (Hash)</p>



<pre class="wp-block-preformatted">bcrypt('my-secret-password');</pre>



<p>Creates a collection instance from the supplied items</p>



<pre class="wp-block-preformatted">collect(['taylor', 'abigail']);</pre>



<p>Gets the value of a configuration variable</p>



<pre class="wp-block-preformatted">config('app.timezone', $default);</pre>



<p>Generates an HTML hidden input field containing the value of the CSRF token</p>



<pre class="wp-block-preformatted">{!! csrf_field() !!}</pre>



<p>Retrieves the value of the current CSRF token</p>



<pre class="wp-block-preformatted">$token = csrf_token();</pre>



<p>Dumps the given variable and ends execution of the script</p>



<pre class="wp-block-preformatted">dd($value);</pre>



<p>Gets the value of an environment variable or returns a default value</p>



<pre class="wp-block-preformatted">$env = env('APP_ENV');<br>$env = env('APP_ENV', 'production');</pre>



<p>Dispatches the given event to its listeners:</p>



<pre class="wp-block-preformatted">event(new UserRegistered($user));</pre>



<p>Creates a model factory builder for a given class</p>



<pre class="wp-block-preformatted">$user = factory(App\User::class)->make();</pre>



<p>Generates an HTML hidden input field containing the spoofed value of the form&#8217;s HTTP verb</p>



<pre class="wp-block-preformatted">{!! method_field('delete') !!}</pre>



<p>Retrieves an old input value flashed into the session</p>



<pre class="wp-block-preformatted">$value = old('value');<br>$value = old('value', 'default');</pre>



<p>Returns an instance of the redirector to do redirects:</p>



<pre class="wp-block-preformatted">return redirect('/home');</pre>



<p>Returns the current request instance or obtains an input item</p>



<pre class="wp-block-preformatted">$value = request('key', $default = null)</pre>



<p>Creates a response instance or obtains an instance of the response factory</p>



<pre class="wp-block-preformatted">return response('Hello World', 200, $headers);</pre>



<p>Used to get / set a session value</p>



<pre class="wp-block-preformatted">$value = session('key');<br>$value = session()->get('key');<br>session()->put('key', $value);</pre>



<p>Will simply return the value it is given.</p>



<pre class="wp-block-preformatted">value(function(){ return 'bar'; });</pre>



<p>Retrieves a view instance</p>



<pre class="wp-block-preformatted">return view('auth.login');</pre>



<p>Returns the value it is given</p>



<pre class="wp-block-preformatted">$value = with(new Foo)->work();</pre>
		</div><!-- .entry-content -->
	</div><!-- .post-inner -->
	<div class="section-inner">
		
	</div><!-- .section-inner -->

	
</article><!-- .post -->
			<div class="ads">
				<!-- Responsive -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-7014744652532083"
					 data-ad-slot="2930178966"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
				<div class="js-toc">
			<ul class="toc-list">
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-queue">Laravel Queue</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-redirect">Laravel Redirect</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-route">Laravel Route</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-config">Laravel Config</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-file">Laravel File</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#lang">Lang</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-ssh">Laravel SSH</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-cache">Laravel Cache</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-html">Laravel HTML</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-model">Laravel Model</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-db-cheat-sheet">Laravel DB Cheat Sheet</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-validation">Laravel Validation</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-view">Laravel View</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-blade">Laravel Blade</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-mail">Laravel Mail</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-session">Laravel Session</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-response">Laravel Response</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-event">Laravel Event</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-input">Laravel Input</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-url">Laravel URL</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-log">Laravel Log</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-environment">Laravel Environment</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-string">Laravel String</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-composer-command">Laravel Composer Command</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-artisan">Laravel Artisan</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-cookie">Laravel Cookie</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-messages">Laravel Messages</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-security">Laravel Security</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-schema">Laravel Schema</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-request">Laravel Request</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-container">Laravel Container</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-auth">Laravel Auth</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-auth-cheat-sheet">Laravel Auth Cheat Sheet</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#pagination">Pagination</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-form">Laravel Form</a>
				</li>
								<li class="toc-list-item">
					<a class="toc-link" href="#laravel-helper">Laravel Helper</a>
				</li>
							</ul>
			<div class="ads">
		
				<!-- Responsive -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-7014744652532083"
					 data-ad-slot="2930178966"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				
			</div>
		</div>
		
			</div>
			<div class="extra">
	
</main><!-- #site-content -->

	<div class="footer-nav-widgets-wrapper header-footer-group">

		<div class="footer-inner section-inner">

			

<aside class="footer-widgets-outer-wrapper" role="complementary">

<div class="footer-widgets-wrapper">




						
						
					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

			
		</div><!-- .footer-inner -->

	</div><!-- .footer-nav-widgets-wrapper -->

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">


<a class="to-the-top" href="#site-header">
<span class="to-the-top-long">
To the top <span class="arrow" aria-hidden="true">&uarr;</span>						
</span><!-- .to-the-top-long -->
<span class="to-the-top-short">
Up <span class="arrow" aria-hidden="true">&uarr;</span>						

</span><!-- .to-the-top-short -->
</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<script src='https://simplecheatsheet.com/wp-includes/js/wp-embed.min.js?ver=5.6.4' id='wp-embed-js'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<script src='https://stats.wp.com/e-202134.js' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:9.8.1',blog:'177517120',post:'0',tz:'7',srv:'simplecheatsheet.com'} ]);
	_stq.push([ 'clickTrackerInit', '177517120', '0' ]);
</script>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-500px" viewBox="0 0 24 24">
<path d="M6.94026,15.1412c.00437.01213.108.29862.168.44064a6.55008,6.55008,0,1,0,6.03191-9.09557,6.68654,6.68654,0,0,0-2.58357.51467A8.53914,8.53914,0,0,0,8.21268,8.61344L8.209,8.61725V3.22948l9.0504-.00008c.32934-.0036.32934-.46353.32934-.61466s0-.61091-.33035-.61467L7.47248,2a.43.43,0,0,0-.43131.42692v7.58355c0,.24466.30476.42131.58793.4819.553.11812.68074-.05864.81617-.2457l.018-.02481A10.52673,10.52673,0,0,1,9.32258,9.258a5.35268,5.35268,0,1,1,7.58985,7.54976,5.417,5.417,0,0,1-3.80867,1.56365,5.17483,5.17483,0,0,1-2.69822-.74478l.00342-4.61111a2.79372,2.79372,0,0,1,.71372-1.78792,2.61611,2.61611,0,0,1,1.98282-.89477,2.75683,2.75683,0,0,1,1.95525.79477,2.66867,2.66867,0,0,1,.79656,1.909,2.724,2.724,0,0,1-2.75849,2.748,4.94651,4.94651,0,0,1-.86254-.13719c-.31234-.093-.44519.34058-.48892.48349-.16811.54966.08453.65862.13687.67489a3.75751,3.75751,0,0,0,1.25234.18375,3.94634,3.94634,0,1,0-2.82444-6.742,3.67478,3.67478,0,0,0-1.13028,2.584l-.00041.02323c-.0035.11667-.00579,2.881-.00644,3.78811l-.00407-.00451a6.18521,6.18521,0,0,1-1.0851-1.86092c-.10544-.27856-.34358-.22925-.66857-.12917-.14192.04372-.57386.17677-.47833.489Zm4.65165-1.08338a.51346.51346,0,0,0,.19513.31818l.02276.022a.52945.52945,0,0,0,.3517.18416.24242.24242,0,0,0,.16577-.0611c.05473-.05082.67382-.67812.73287-.738l.69041.68819a.28978.28978,0,0,0,.21437.11032.53239.53239,0,0,0,.35708-.19486c.29792-.30419.14885-.46821.07676-.54751l-.69954-.69975.72952-.73469c.16-.17311.01874-.35708-.12218-.498-.20461-.20461-.402-.25742-.52855-.14083l-.7254.72665-.73354-.73375a.20128.20128,0,0,0-.14179-.05695.54135.54135,0,0,0-.34379.19648c-.22561.22555-.274.38149-.15656.5059l.73374.7315-.72942.73072A.26589.26589,0,0,0,11.59191,14.05782Zm1.59866-9.915A8.86081,8.86081,0,0,0,9.854,4.776a.26169.26169,0,0,0-.16938.22759.92978.92978,0,0,0,.08619.42094c.05682.14524.20779.531.50006.41955a8.40969,8.40969,0,0,1,2.91968-.55484,7.87875,7.87875,0,0,1,3.086.62286,8.61817,8.61817,0,0,1,2.30562,1.49315.2781.2781,0,0,0,.18318.07586c.15529,0,.30425-.15253.43167-.29551.21268-.23861.35873-.4369.1492-.63538a8.50425,8.50425,0,0,0-2.62312-1.694A9.0177,9.0177,0,0,0,13.19058,4.14283ZM19.50945,18.6236h0a.93171.93171,0,0,0-.36642-.25406.26589.26589,0,0,0-.27613.06613l-.06943.06929A7.90606,7.90606,0,0,1,7.60639,18.505a7.57284,7.57284,0,0,1-1.696-2.51537,8.58715,8.58715,0,0,1-.5147-1.77754l-.00871-.04864c-.04939-.25873-.28755-.27684-.62981-.22448-.14234.02178-.5755.088-.53426.39969l.001.00712a9.08807,9.08807,0,0,0,15.406,4.99094c.00193-.00192.04753-.04718.0725-.07436C19.79425,19.16234,19.87422,18.98728,19.50945,18.6236Z"/>
</symbol>
<symbol id="icon-amazon" viewBox="0 0 24 24">
<path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"/>
</symbol>
<symbol id="icon-apple" viewBox="0 0 24 24">
<path d="M20.07,17.586a10.874,10.874,0,0,1-1.075,1.933,9.822,9.822,0,0,1-1.385,1.674,2.687,2.687,0,0,1-1.78.784,4.462,4.462,0,0,1-1.644-.393,4.718,4.718,0,0,0-1.77-.391,4.878,4.878,0,0,0-1.82.391A4.9,4.9,0,0,1,9.021,22a2.53,2.53,0,0,1-1.82-.8A10.314,10.314,0,0,1,5.752,19.46,11.987,11.987,0,0,1,4.22,16.417a11.143,11.143,0,0,1-.643-3.627,6.623,6.623,0,0,1,.87-3.465A5.1,5.1,0,0,1,6.268,7.483a4.9,4.9,0,0,1,2.463-.695,5.8,5.8,0,0,1,1.9.443,6.123,6.123,0,0,0,1.511.444,9.04,9.04,0,0,0,1.675-.523,5.537,5.537,0,0,1,2.277-.4,4.835,4.835,0,0,1,3.788,1.994,4.213,4.213,0,0,0-2.235,3.827,4.222,4.222,0,0,0,1.386,3.181,4.556,4.556,0,0,0,1.385.909q-.167.483-.353.927ZM16.211,2.4a4.267,4.267,0,0,1-1.094,2.8,3.726,3.726,0,0,1-3.1,1.528A3.114,3.114,0,0,1,12,6.347a4.384,4.384,0,0,1,1.16-2.828,4.467,4.467,0,0,1,1.414-1.061A4.215,4.215,0,0,1,16.19,2a3.633,3.633,0,0,1,.021.4Z"/>
</symbol>
<symbol id="icon-bandcamp" viewBox="0 0 24 24">
<path d="M15.27 17.289 3 17.289 8.73 6.711 21 6.711 15.27 17.289"/>
</symbol>
<symbol id="icon-behance" viewBox="0 0 24 24">
<path d="M7.799,5.698c0.589,0,1.12,0.051,1.606,0.156c0.482,0.102,0.894,0.273,1.241,0.507c0.344,0.235,0.612,0.546,0.804,0.938 c0.188,0.387,0.281,0.871,0.281,1.443c0,0.619-0.141,1.137-0.421,1.551c-0.284,0.413-0.7,0.751-1.255,1.014 c0.756,0.218,1.317,0.601,1.689,1.146c0.374,0.549,0.557,1.205,0.557,1.975c0,0.623-0.12,1.161-0.359,1.612 c-0.241,0.457-0.569,0.828-0.973,1.114c-0.408,0.288-0.876,0.5-1.399,0.637C9.052,17.931,8.514,18,7.963,18H2V5.698H7.799 M7.449,10.668c0.481,0,0.878-0.114,1.192-0.345c0.311-0.228,0.463-0.603,0.463-1.119c0-0.286-0.051-0.523-0.152-0.707 C8.848,8.315,8.711,8.171,8.536,8.07C8.362,7.966,8.166,7.894,7.94,7.854c-0.224-0.044-0.457-0.06-0.697-0.06H4.709v2.874H7.449z M7.6,15.905c0.267,0,0.521-0.024,0.759-0.077c0.243-0.053,0.457-0.137,0.637-0.261c0.182-0.12,0.332-0.283,0.441-0.491 C9.547,14.87,9.6,14.602,9.6,14.278c0-0.633-0.18-1.084-0.533-1.357c-0.356-0.27-0.83-0.404-1.413-0.404H4.709v3.388L7.6,15.905z M16.162,15.864c0.367,0.358,0.897,0.538,1.583,0.538c0.493,0,0.92-0.125,1.277-0.374c0.354-0.248,0.571-0.514,0.654-0.79h2.155 c-0.347,1.072-0.872,1.838-1.589,2.299C19.534,18,18.67,18.23,17.662,18.23c-0.701,0-1.332-0.113-1.899-0.337 c-0.567-0.227-1.041-0.544-1.439-0.958c-0.389-0.415-0.689-0.907-0.904-1.484c-0.213-0.574-0.32-1.21-0.32-1.899 c0-0.666,0.11-1.288,0.329-1.863c0.222-0.577,0.529-1.075,0.933-1.492c0.406-0.42,0.885-0.751,1.444-0.994 c0.558-0.241,1.175-0.363,1.857-0.363c0.754,0,1.414,0.145,1.98,0.44c0.563,0.291,1.026,0.686,1.389,1.181 c0.363,0.493,0.622,1.057,0.783,1.69c0.16,0.632,0.217,1.292,0.171,1.983h-6.428C15.557,14.84,15.795,15.506,16.162,15.864 M18.973,11.184c-0.291-0.321-0.783-0.496-1.384-0.496c-0.39,0-0.714,0.066-0.973,0.2c-0.254,0.132-0.461,0.297-0.621,0.491 c-0.157,0.197-0.265,0.405-0.328,0.628c-0.063,0.217-0.101,0.413-0.111,0.587h3.98C19.478,11.969,19.265,11.509,18.973,11.184z M15.057,7.738h4.985V6.524h-4.985L15.057,7.738z"/>
</symbol>
<symbol id="icon-blogger" viewBox="0 0 24 24">
<path d="M14.722,14.019c0,0.361-0.293,0.654-0.654,0.654H9.977c-0.361,0-0.654-0.293-0.654-0.654s0.293-0.654,0.654-0.654h4.091C14.429,13.365,14.722,13.658,14.722,14.019z M9.981,10.698h2.038c0.382,0,0.692-0.31,0.692-0.692c0-0.382-0.31-0.692-0.692-0.692H9.981c-0.382,0-0.692,0.31-0.692,0.692C9.289,10.388,9.599,10.698,9.981,10.698z M21,5v14c0,1.105-0.895,2-2,2H5c-1.105,0-2-0.895-2-2V5c0-1.105,0.895-2,2-2h14C20.105,3,21,3.895,21,5z M17.544,11.39c0-0.398-0.322-0.72-0.72-0.72h-0.607l-0.013,0.001c-0.38,0-0.692-0.295-0.718-0.668l-0.001-0.008c0-1.988-1.611-3.599-3.599-3.599h-1.816c-1.988,0-3.599,1.611-3.599,3.599v3.947c0,1.987,1.611,3.599,3.599,3.599h3.874c1.988,0,3.599-1.611,3.599-3.599L17.544,11.39z"/>
</symbol>
<symbol id="icon-chain" viewBox="0 0 24 24">
<path d="M19.647,16.706a1.134,1.134,0,0,0-.343-.833l-2.549-2.549a1.134,1.134,0,0,0-.833-.343,1.168,1.168,0,0,0-.883.392l.233.226q.2.189.264.264a2.922,2.922,0,0,1,.184.233.986.986,0,0,1,.159.312,1.242,1.242,0,0,1,.043.337,1.172,1.172,0,0,1-1.176,1.176,1.237,1.237,0,0,1-.337-.043,1,1,0,0,1-.312-.159,2.76,2.76,0,0,1-.233-.184q-.073-.068-.264-.264l-.226-.233a1.19,1.19,0,0,0-.4.895,1.134,1.134,0,0,0,.343.833L15.837,19.3a1.13,1.13,0,0,0,.833.331,1.18,1.18,0,0,0,.833-.318l1.8-1.789a1.12,1.12,0,0,0,.343-.821Zm-8.615-8.64a1.134,1.134,0,0,0-.343-.833L8.163,4.7a1.134,1.134,0,0,0-.833-.343,1.184,1.184,0,0,0-.833.331L4.7,6.473a1.12,1.12,0,0,0-.343.821,1.134,1.134,0,0,0,.343.833l2.549,2.549a1.13,1.13,0,0,0,.833.331,1.184,1.184,0,0,0,.883-.38L8.728,10.4q-.2-.189-.264-.264A2.922,2.922,0,0,1,8.28,9.9a.986.986,0,0,1-.159-.312,1.242,1.242,0,0,1-.043-.337A1.172,1.172,0,0,1,9.254,8.079a1.237,1.237,0,0,1,.337.043,1,1,0,0,1,.312.159,2.761,2.761,0,0,1,.233.184q.073.068.264.264l.226.233a1.19,1.19,0,0,0,.4-.895ZM22,16.706a3.343,3.343,0,0,1-1.042,2.488l-1.8,1.789a3.536,3.536,0,0,1-4.988-.025l-2.525-2.537a3.384,3.384,0,0,1-1.017-2.488,3.448,3.448,0,0,1,1.078-2.561l-1.078-1.078a3.434,3.434,0,0,1-2.549,1.078,3.4,3.4,0,0,1-2.5-1.029L3.029,9.794A3.4,3.4,0,0,1,2,7.294,3.343,3.343,0,0,1,3.042,4.806l1.8-1.789A3.384,3.384,0,0,1,7.331,2a3.357,3.357,0,0,1,2.5,1.042l2.525,2.537a3.384,3.384,0,0,1,1.017,2.488,3.448,3.448,0,0,1-1.078,2.561l1.078,1.078a3.551,3.551,0,0,1,5.049-.049l2.549,2.549A3.4,3.4,0,0,1,22,16.706Z"/>
</symbol>
<symbol id="icon-codepen" viewBox="0 0 24 24">
<path d="M22.016,8.84c-0.002-0.013-0.005-0.025-0.007-0.037c-0.005-0.025-0.008-0.048-0.015-0.072 c-0.003-0.015-0.01-0.028-0.013-0.042c-0.008-0.02-0.015-0.04-0.023-0.062c-0.007-0.015-0.013-0.028-0.02-0.042 c-0.008-0.02-0.018-0.037-0.03-0.057c-0.007-0.013-0.017-0.027-0.025-0.038c-0.012-0.018-0.023-0.035-0.035-0.052 c-0.01-0.013-0.02-0.025-0.03-0.037c-0.015-0.017-0.028-0.032-0.043-0.045c-0.01-0.012-0.022-0.023-0.035-0.035 c-0.015-0.015-0.032-0.028-0.048-0.04c-0.012-0.01-0.025-0.02-0.037-0.03c-0.005-0.003-0.01-0.008-0.015-0.012l-9.161-6.096 c-0.289-0.192-0.666-0.192-0.955,0L2.359,8.237C2.354,8.24,2.349,8.245,2.344,8.249L2.306,8.277 c-0.017,0.013-0.033,0.027-0.048,0.04C2.246,8.331,2.234,8.342,2.222,8.352c-0.015,0.015-0.028,0.03-0.042,0.047 c-0.012,0.013-0.022,0.023-0.03,0.037C2.139,8.453,2.125,8.471,2.115,8.488C2.107,8.501,2.099,8.514,2.09,8.526 C2.079,8.548,2.069,8.565,2.06,8.585C2.054,8.6,2.047,8.613,2.04,8.626C2.032,8.648,2.025,8.67,2.019,8.69 c-0.005,0.013-0.01,0.027-0.013,0.042C1.999,8.755,1.995,8.778,1.99,8.803C1.989,8.817,1.985,8.828,1.984,8.84 C1.978,8.879,1.975,8.915,1.975,8.954v6.093c0,0.037,0.003,0.075,0.008,0.112c0.002,0.012,0.005,0.025,0.007,0.038 c0.005,0.023,0.008,0.047,0.015,0.072c0.003,0.015,0.008,0.028,0.013,0.04c0.007,0.022,0.013,0.042,0.022,0.063 c0.007,0.015,0.013,0.028,0.02,0.04c0.008,0.02,0.018,0.038,0.03,0.058c0.007,0.013,0.015,0.027,0.025,0.038 c0.012,0.018,0.023,0.035,0.035,0.052c0.01,0.013,0.02,0.025,0.03,0.037c0.013,0.015,0.028,0.032,0.042,0.045 c0.012,0.012,0.023,0.023,0.035,0.035c0.015,0.013,0.032,0.028,0.048,0.04l0.038,0.03c0.005,0.003,0.01,0.007,0.013,0.01 l9.163,6.095C11.668,21.953,11.833,22,12,22c0.167,0,0.332-0.047,0.478-0.144l9.163-6.095l0.015-0.01 c0.013-0.01,0.027-0.02,0.037-0.03c0.018-0.013,0.035-0.028,0.048-0.04c0.013-0.012,0.025-0.023,0.035-0.035 c0.017-0.015,0.03-0.032,0.043-0.045c0.01-0.013,0.02-0.025,0.03-0.037c0.013-0.018,0.025-0.035,0.035-0.052 c0.008-0.013,0.018-0.027,0.025-0.038c0.012-0.02,0.022-0.038,0.03-0.058c0.007-0.013,0.013-0.027,0.02-0.04 c0.008-0.022,0.015-0.042,0.023-0.063c0.003-0.013,0.01-0.027,0.013-0.04c0.007-0.025,0.01-0.048,0.015-0.072 c0.002-0.013,0.005-0.027,0.007-0.037c0.003-0.042,0.007-0.079,0.007-0.117V8.954C22.025,8.915,22.022,8.879,22.016,8.84z M12.862,4.464l6.751,4.49l-3.016,2.013l-3.735-2.492V4.464z M11.138,4.464v4.009l-3.735,2.494L4.389,8.954L11.138,4.464z M3.699,10.562L5.853,12l-2.155,1.438V10.562z M11.138,19.536l-6.749-4.491l3.015-2.011l3.735,2.492V19.536z M12,14.035L8.953,12 L12,9.966L15.047,12L12,14.035z M12.862,19.536v-4.009l3.735-2.492l3.016,2.011L12.862,19.536z M20.303,13.438L18.147,12 l2.156-1.438L20.303,13.438z"/>
</symbol>
<symbol id="icon-deviantart" viewBox="0 0 24 24">
<path d="M 18.19 5.636 18.19 2 18.188 2 14.553 2 14.19 2.366 12.474 5.636 11.935 6 5.81 6 5.81 10.994 9.177 10.994 9.477 11.357 5.81 18.363 5.81 22 5.811 22 9.447 22 9.81 21.634 11.526 18.364 12.065 18 18.19 18 18.19 13.006 14.823 13.006 14.523 12.641 18.19 5.636z"/>
</symbol>
<symbol id="icon-digg" viewBox="0 0 24 24">
<path d="M4.5,5.4h2.2V16H1V8.5h3.5V5.4L4.5,5.4z M4.5,14.2v-4H3.2v4H4.5z M7.6,8.5V16h2.2V8.5C9.8,8.5,7.6,8.5,7.6,8.5z M7.6,5.4 v2.2h2.2V5.4C9.8,5.4,7.6,5.4,7.6,5.4z M10.7,8.5h5.7v10.1h-5.7v-1.8h3.5V16h-3.5C10.7,16,10.7,8.5,10.7,8.5z M14.2,14.2v-4h-1.3v4 H14.2z M17.3,8.5H23v10.1h-5.7v-1.8h3.5V16h-3.5C17.3,16,17.3,8.5,17.3,8.5z M20.8,14.2v-4h-1.3v4H20.8z"/>
</symbol>
<symbol id="icon-discord" viewBox="0 0 24 24">
<path d="M10.227 9.957c-.559 0-1 .48-1 1.063 0 .585.453 1.066 1 1.066.558 0 1-.48 1-1.066.007-.582-.442-1.063-1-1.063zm3.574 0c-.559 0-.996.48-.996 1.063 0 .585.449 1.066.996 1.066.558 0 1-.48 1-1.066 0-.582-.442-1.063-1-1.063zm0 0 M18.563 1.918H5.438c-1.11 0-2.008.879-2.008 1.973v12.957c0 1.093.898 1.972 2.007 1.972h11.11l-.52-1.773 1.254 1.14 1.184 1.075 2.105 1.82V3.891c0-1.094-.898-1.973-2.008-1.973zM14.78 14.434s-.351-.414-.644-.778c1.281-.355 1.773-1.14 1.773-1.14a5.745 5.745 0 0 1-1.129.566c-.488.2-.96.336-1.418.41a7.07 7.07 0 0 1-2.539-.008 8.133 8.133 0 0 1-1.441-.414 6.219 6.219 0 0 1-.715-.324c-.027-.02-.059-.027-.086-.047a.113.113 0 0 1-.039-.031c-.176-.094-.273-.16-.273-.16s.468.765 1.71 1.129c-.293.363-.656.797-.656.797-2.164-.067-2.984-1.457-2.984-1.457 0-3.086 1.41-5.586 1.41-5.586 1.41-1.036 2.75-1.008 2.75-1.008l.098.113c-1.762.5-2.575 1.258-2.575 1.258s.215-.117.579-.277c1.046-.454 1.878-.579 2.222-.606.059-.008.11-.02.168-.02a8.728 8.728 0 0 1 1.977-.019c.933.106 1.93.375 2.949.922 0 0-.773-.719-2.438-1.219l.137-.152s1.34-.028 2.75 1.008c0 0 1.414 2.5 1.414 5.586 0 0-.836 1.39-3 1.457zm0 0"/>
</symbol>
<symbol id="icon-dribbble" viewBox="0 0 24 24">
<path d="M12,22C6.486,22,2,17.514,2,12S6.486,2,12,2c5.514,0,10,4.486,10,10S17.514,22,12,22z M20.434,13.369 c-0.292-0.092-2.644-0.794-5.32-0.365c1.117,3.07,1.572,5.57,1.659,6.09C18.689,17.798,20.053,15.745,20.434,13.369z M15.336,19.876c-0.127-0.749-0.623-3.361-1.822-6.477c-0.019,0.006-0.038,0.013-0.056,0.019c-4.818,1.679-6.547,5.02-6.701,5.334 c1.448,1.129,3.268,1.803,5.243,1.803C13.183,20.555,14.311,20.313,15.336,19.876z M5.654,17.724 c0.193-0.331,2.538-4.213,6.943-5.637c0.111-0.036,0.224-0.07,0.337-0.102c-0.214-0.485-0.448-0.971-0.692-1.45 c-4.266,1.277-8.405,1.223-8.778,1.216c-0.003,0.087-0.004,0.174-0.004,0.261C3.458,14.207,4.29,16.21,5.654,17.724z M3.639,10.264 c0.382,0.005,3.901,0.02,7.897-1.041c-1.415-2.516-2.942-4.631-3.167-4.94C5.979,5.41,4.193,7.613,3.639,10.264z M9.998,3.709 c0.236,0.316,1.787,2.429,3.187,5c3.037-1.138,4.323-2.867,4.477-3.085C16.154,4.286,14.17,3.471,12,3.471 C11.311,3.471,10.641,3.554,9.998,3.709z M18.612,6.612C18.432,6.855,17,8.69,13.842,9.979c0.199,0.407,0.389,0.821,0.567,1.237 c0.063,0.148,0.124,0.295,0.184,0.441c2.842-0.357,5.666,0.215,5.948,0.275C20.522,9.916,19.801,8.065,18.612,6.612z"/>
</symbol>
<symbol id="icon-dropbox" viewBox="0 0 24 24">
<path d="M12,6.134L6.069,9.797L2,6.54l5.883-3.843L12,6.134z M2,13.054l5.883,3.843L12,13.459L6.069,9.797L2,13.054z M12,13.459 l4.116,3.439L22,13.054l-4.069-3.257L12,13.459z M22,6.54l-5.884-3.843L12,6.134l5.931,3.663L22,6.54z M12.011,14.2l-4.129,3.426 l-1.767-1.153v1.291l5.896,3.539l5.897-3.539v-1.291l-1.769,1.153L12.011,14.2z"/>
</symbol>
<symbol id="icon-etsy" viewBox="0 0 24 24">
<path d="M9.16033,4.038c0-.27174.02717-.43478.48913-.43478h6.22283c1.087,0,1.68478.92391,2.11957,2.663l.35326,1.38587h1.05978C19.59511,3.712,19.75815,2,19.75815,2s-2.663.29891-4.23913.29891h-7.962L3.29076,2.163v1.1413L4.731,3.57609c1.00543.19022,1.25.40761,1.33152,1.33152,0,0,.08152,2.71739.08152,7.20109s-.08152,7.17391-.08152,7.17391c0,.81522-.32609,1.11413-1.33152,1.30435l-1.44022.27174V22l4.2663-.13587h7.11957c1.60326,0,5.32609.13587,5.32609.13587.08152-.97826.625-5.40761.70652-5.89674H19.7038L18.644,18.52174c-.84239,1.90217-2.06522,2.038-3.42391,2.038H11.1712c-1.3587,0-2.01087-.54348-2.01087-1.712V12.65217s3.0163,0,3.99457.08152c.76087.05435,1.22283.27174,1.46739,1.33152l.32609,1.413h1.16848l-.08152-3.55978.163-3.587H15.02989l-.38043,1.57609c-.24457,1.03261-.40761,1.22283-1.46739,1.33152-1.38587.13587-4.02174.1087-4.02174.1087Z"/>
</symbol>
<symbol id="icon-eventbrite" viewBox="0 0 24 24">
<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M18.041,3.931L5.959,3C4.325,3,3,4.325,3,5.959v12.083C3,19.675,4.325,21,5.959,21l12.083-0.931C19.699,19.983,21,18.744,21,17.11V6.89C21,5.256,19.741,4.027,18.041,3.931zM16.933,8.17c-0.082,0.215-0.192,0.432-0.378,0.551c-0.188,0.122-0.489,0.132-0.799,0.132c-1.521,0-3.062-0.048-4.607-0.048c-0.152,0.708-0.304,1.416-0.451,2.128c0.932-0.004,1.873,0.005,2.81,0.005c0.726,0,1.462-0.069,1.586,0.525c0.04,0.189-0.001,0.426-0.052,0.615c-0.105,0.38-0.258,0.676-0.625,0.783c-0.185,0.054-0.408,0.058-0.646,0.058c-1.145,0-2.345,0.017-3.493,0.02c-0.169,0.772-0.328,1.553-0.489,2.333c1.57-0.005,3.067-0.041,4.633-0.058c0.627-0.007,1.085,0.194,1.009,0.85c-0.031,0.262-0.098,0.497-0.211,0.725c-0.102,0.208-0.248,0.376-0.488,0.452c-0.237,0.075-0.541,0.064-0.862,0.078c-0.304,0.014-0.614,0.008-0.924,0.016c-0.309,0.009-0.619,0.022-0.919,0.022c-1.253,0-2.429,0.08-3.683,0.073c-0.603-0.004-1.014-0.249-1.124-0.757c-0.059-0.273-0.018-0.58,0.036-0.841c0.541-2.592,1.083-5.176,1.629-7.763c0.056-0.265,0.114-0.511,0.225-0.714C9.279,7.051,9.534,6.834,9.9,6.735c0.368-0.099,0.883-0.047,1.344-0.047c0.305,0,0.612,0.008,0.914,0.016c0.925,0.026,1.817,0.03,2.747,0.053c0.304,0.007,0.615,0.016,0.915,0.016c0.621,0,1.17,0.073,1.245,0.614C17.104,7.675,17.014,7.954,16.933,8.17z"/>
</symbol>
<symbol id="icon-facebook" viewBox="0 0 24 24">
<path d="M12,2C6.5,2,2,6.5,2,12c0,5,3.7,9.1,8.4,9.9v-7H7.9V12h2.5V9.8c0-2.5,1.5-3.9,3.8-3.9c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3 c-1.2,0-1.6,0.8-1.6,1.6V12h2.8l-0.4,2.9h-2.3v7C18.3,21.1,22,17,22,12C22,6.5,17.5,2,12,2z"/>
</symbol>
<symbol id="icon-feed" viewBox="0 0 24 24">
<path d="M2,8.667V12c5.515,0,10,4.485,10,10h3.333C15.333,14.637,9.363,8.667,2,8.667z M2,2v3.333 c9.19,0,16.667,7.477,16.667,16.667H22C22,10.955,13.045,2,2,2z M4.5,17C3.118,17,2,18.12,2,19.5S3.118,22,4.5,22S7,20.88,7,19.5 S5.882,17,4.5,17z"/>
</symbol>
<symbol id="icon-flickr" viewBox="0 0 24 24">
<path d="M6.5,7c-2.75,0-5,2.25-5,5s2.25,5,5,5s5-2.25,5-5S9.25,7,6.5,7z M17.5,7c-2.75,0-5,2.25-5,5s2.25,5,5,5s5-2.25,5-5 S20.25,7,17.5,7z"/>
</symbol>
<symbol id="icon-foursquare" viewBox="0 0 24 24">
<path d="M17.573,2c0,0-9.197,0-10.668,0S5,3.107,5,3.805s0,16.948,0,16.948c0,0.785,0.422,1.077,0.66,1.172 c0.238,0.097,0.892,0.177,1.285-0.275c0,0,5.035-5.843,5.122-5.93c0.132-0.132,0.132-0.132,0.262-0.132h3.26 c1.368,0,1.588-0.977,1.732-1.552c0.078-0.318,0.692-3.428,1.225-6.122l0.675-3.368C19.56,2.893,19.14,2,17.573,2z M16.495,7.22 c-0.053,0.252-0.372,0.518-0.665,0.518c-0.293,0-4.157,0-4.157,0c-0.467,0-0.802,0.318-0.802,0.787v0.508 c0,0.467,0.337,0.798,0.805,0.798c0,0,3.197,0,3.528,0s0.655,0.362,0.583,0.715c-0.072,0.353-0.407,2.102-0.448,2.295 c-0.04,0.193-0.262,0.523-0.655,0.523c-0.33,0-2.88,0-2.88,0c-0.523,0-0.683,0.068-1.033,0.503 c-0.35,0.437-3.505,4.223-3.505,4.223c-0.032,0.035-0.063,0.027-0.063-0.015V4.852c0-0.298,0.26-0.648,0.648-0.648 c0,0,8.228,0,8.562,0c0.315,0,0.61,0.297,0.528,0.683L16.495,7.22z"/>
</symbol>
<symbol id="icon-ghost" viewBox="0 0 24 24">
<path d="M10.203,20.997H3.005v-3.599h7.198V20.997z M20.995,17.398h-7.193v3.599h7.193V17.398z M20.998,10.2H3v3.599h17.998V10.2zM13.803,3.003H3.005v3.599h10.798V3.003z M21,3.003h-3.599v3.599H21V3.003z"/>
</symbol>
<symbol id="icon-goodreads" viewBox="0 0 24 24">
<path d="M17.3,17.5c-0.2,0.8-0.5,1.4-1,1.9c-0.4,0.5-1,0.9-1.7,1.2C13.9,20.9,13.1,21,12,21c-0.6,0-1.3-0.1-1.9-0.2 c-0.6-0.1-1.1-0.4-1.6-0.7c-0.5-0.3-0.9-0.7-1.2-1.2c-0.3-0.5-0.5-1.1-0.5-1.7h1.5c0.1,0.5,0.2,0.9,0.5,1.2 c0.2,0.3,0.5,0.6,0.9,0.8c0.3,0.2,0.7,0.3,1.1,0.4c0.4,0.1,0.8,0.1,1.2,0.1c1.4,0,2.5-0.4,3.1-1.2c0.6-0.8,1-2,1-3.5v-1.7h0 c-0.4,0.8-0.9,1.4-1.6,1.9c-0.7,0.5-1.5,0.7-2.4,0.7c-1,0-1.9-0.2-2.6-0.5C8.7,15,8.1,14.5,7.7,14c-0.5-0.6-0.8-1.3-1-2.1 c-0.2-0.8-0.3-1.6-0.3-2.5c0-0.9,0.1-1.7,0.4-2.5c0.3-0.8,0.6-1.5,1.1-2c0.5-0.6,1.1-1,1.8-1.4C10.3,3.2,11.1,3,12,3 c0.5,0,0.9,0.1,1.3,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.6,0.5,0.9,0.8c0.3,0.3,0.5,0.6,0.6,1h0V3.4h1.5V15 C17.6,15.9,17.5,16.7,17.3,17.5z M13.8,14.1c0.5-0.3,0.9-0.7,1.3-1.1c0.3-0.5,0.6-1,0.8-1.6c0.2-0.6,0.3-1.2,0.3-1.9 c0-0.6-0.1-1.2-0.2-1.9c-0.1-0.6-0.4-1.2-0.7-1.7c-0.3-0.5-0.7-0.9-1.3-1.2c-0.5-0.3-1.1-0.5-1.9-0.5s-1.4,0.2-1.9,0.5 c-0.5,0.3-1,0.7-1.3,1.2C8.5,6.4,8.3,7,8.1,7.6C8,8.2,7.9,8.9,7.9,9.5c0,0.6,0.1,1.3,0.2,1.9C8.3,12,8.6,12.5,8.9,13 c0.3,0.5,0.8,0.8,1.3,1.1c0.5,0.3,1.1,0.4,1.9,0.4C12.7,14.5,13.3,14.4,13.8,14.1z"/>
</symbol>
<symbol id="icon-google" viewBox="0 0 24 24">
<path d="M12.02,10.18v3.72v0.01h5.51c-0.26,1.57-1.67,4.22-5.5,4.22c-3.31,0-6.01-2.75-6.01-6.12s2.7-6.12,6.01-6.12 c1.87,0,3.13,0.8,3.85,1.48l2.84-2.76C16.99,2.99,14.73,2,12.03,2c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.77,0,9.6-4.06,9.6-9.77 c0-0.83-0.11-1.42-0.25-2.05H12.02z"/>
</symbol>
<symbol id="icon-github" viewBox="0 0 24 24">
<path d="M12,2C6.477,2,2,6.477,2,12c0,4.419,2.865,8.166,6.839,9.489c0.5,0.09,0.682-0.218,0.682-0.484 c0-0.236-0.009-0.866-0.014-1.699c-2.782,0.602-3.369-1.34-3.369-1.34c-0.455-1.157-1.11-1.465-1.11-1.465 c-0.909-0.62,0.069-0.608,0.069-0.608c1.004,0.071,1.532,1.03,1.532,1.03c0.891,1.529,2.341,1.089,2.91,0.833
c0.091-0.647,0.349-1.086,0.635-1.337c-2.22-0.251-4.555-1.111-4.555-4.943c0-1.091,0.39-1.984,1.03-2.682 C6.546,8.54,6.202,7.524,6.746,6.148c0,0,0.84-0.269,2.75,1.025C10.295,6.95,11.15,6.84,12,6.836 c0.85,0.004,1.705,0.114,2.504,0.336c1.909-1.294,2.748-1.025,2.748-1.025c0.546,1.376,0.202,2.394,0.1,2.646 c0.64,0.699,1.026,1.591,1.026,2.682c0,3.841-2.337,4.687-4.565,4.935c0.359,0.307,0.679,0.917,0.679,1.852 c0,1.335-0.012,2.415-0.012,2.741c0,0.269,0.18,0.579,0.688,0.481C19.138,20.161,22,16.416,22,12C22,6.477,17.523,2,12,2z"/>
</symbol>
<symbol id="icon-instagram" viewBox="0 0 24 24">
<path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"/>
</symbol>
<symbol id="icon-linkedin" viewBox="0 0 24 24">
<path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"/>
</symbol>
<symbol id="icon-mail" viewBox="0 0 24 24">
<path d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z"/>
</symbol>
<symbol id="icon-meetup" viewBox="0 0 24 24">
<path d="M19.24775,14.722a3.57032,3.57032,0,0,1-2.94457,3.52073,3.61886,3.61886,0,0,1-.64652.05634c-.07314-.0008-.10187.02846-.12507.09547A2.38881,2.38881,0,0,1,13.49453,20.094a2.33092,2.33092,0,0,1-1.827-.50716.13635.13635,0,0,0-.19878-.00408,3.191,3.191,0,0,1-2.104.60248,3.26309,3.26309,0,0,1-3.00324-2.71993,2.19076,2.19076,0,0,1-.03512-.30865c-.00156-.08579-.03413-.1189-.11608-.13493a2.86421,2.86421,0,0,1-1.23189-.56111,2.945,2.945,0,0,1-1.166-2.05749,2.97484,2.97484,0,0,1,.87524-2.50774.112.112,0,0,0,.02091-.16107,2.7213,2.7213,0,0,1-.36648-1.48A2.81256,2.81256,0,0,1,6.57673,7.58838a.35764.35764,0,0,0,.28869-.22819,4.2208,4.2208,0,0,1,6.02892-1.90111.25161.25161,0,0,0,.22023.0243,3.65608,3.65608,0,0,1,3.76031.90678A3.57244,3.57244,0,0,1,17.95918,8.626a2.97339,2.97339,0,0,1,.01829.57356.10637.10637,0,0,0,.0853.12792,1.97669,1.97669,0,0,1,1.27939,1.33733,2.00266,2.00266,0,0,1-.57112,2.12652c-.05284.05166-.04168.08328-.01173.13489A3.51189,3.51189,0,0,1,19.24775,14.722Zm-6.35959-.27836a1.6984,1.6984,0,0,0,1.14556,1.61113,3.82039,3.82039,0,0,0,1.036.17935,1.46888,1.46888,0,0,0,.73509-.12255.44082.44082,0,0,0,.26057-.44274.45312.45312,0,0,0-.29211-.43375.97191.97191,0,0,0-.20678-.063c-.21326-.03806-.42754-.0701-.63973-.11215a.54787.54787,0,0,1-.50172-.60926,2.75864,2.75864,0,0,1,.1773-.901c.1763-.535.414-1.045.64183-1.55913A12.686,12.686,0,0,0,15.85,10.47863a1.58461,1.58461,0,0,0,.04861-.87208,1.04531,1.04531,0,0,0-.85432-.83981,1.60658,1.60658,0,0,0-1.23654.16594.27593.27593,0,0,1-.36286-.03413c-.085-.0747-.16594-.15379-.24918-.23055a.98682.98682,0,0,0-1.33577-.04933,6.1468,6.1468,0,0,1-.4989.41615.47762.47762,0,0,1-.51535.03566c-.17448-.09307-.35512-.175-.53531-.25665a1.74949,1.74949,0,0,0-.56476-.2016,1.69943,1.69943,0,0,0-1.61654.91787,8.05815,8.05815,0,0,0-.32952.80126c-.45471,1.2557-.82507,2.53825-1.20838,3.81639a1.24151,1.24151,0,0,0,.51532,1.44389,1.42659,1.42659,0,0,0,1.22008.17166,1.09728,1.09728,0,0,0,.66994-.69764c.44145-1.04111.839-2.09989,1.25981-3.14926.11581-.28876.22792-.57874.35078-.86438a.44548.44548,0,0,1,.69189-.19539.50521.50521,0,0,1,.15044.43836,1.75625,1.75625,0,0,1-.14731.50453c-.27379.69219-.55265,1.38236-.82766,2.074a2.0836,2.0836,0,0,0-.14038.42876.50719.50719,0,0,0,.27082.57722.87236.87236,0,0,0,.66145.02739.99137.99137,0,0,0,.53406-.532q.61571-1.20914,1.228-2.42031.28423-.55863.57585-1.1133a.87189.87189,0,0,1,.29055-.35253.34987.34987,0,0,1,.37634-.01265.30291.30291,0,0,1,.12434.31459.56716.56716,0,0,1-.04655.1915c-.05318.12739-.10286.25669-.16183.38156-.34118.71775-.68754,1.43273-1.02568,2.152A2.00213,2.00213,0,0,0,12.88816,14.44366Zm4.78568,5.28972a.88573.88573,0,0,0-1.77139.00465.8857.8857,0,0,0,1.77139-.00465Zm-14.83838-7.296a.84329.84329,0,1,0,.00827-1.68655.8433.8433,0,0,0-.00827,1.68655Zm10.366-9.43673a.83506.83506,0,1,0-.0091,1.67.83505.83505,0,0,0,.0091-1.67Zm6.85014,5.22a.71651.71651,0,0,0-1.433.0093.71656.71656,0,0,0,1.433-.0093ZM5.37528,6.17908A.63823.63823,0,1,0,6.015,5.54483.62292.62292,0,0,0,5.37528,6.17908Zm6.68214,14.80843a.54949.54949,0,1,0-.55052.541A.54556.54556,0,0,0,12.05742,20.98752Zm8.53235-8.49689a.54777.54777,0,0,0-.54027.54023.53327.53327,0,0,0,.532.52293.51548.51548,0,0,0,.53272-.5237A.53187.53187,0,0,0,20.58977,12.49063ZM7.82846,2.4715a.44927.44927,0,1,0,.44484.44766A.43821.43821,0,0,0,7.82846,2.4715Zm13.775,7.60492a.41186.41186,0,0,0-.40065.39623.40178.40178,0,0,0,.40168.40168A.38994.38994,0,0,0,22,10.48172.39946.39946,0,0,0,21.60349,10.07642ZM5.79193,17.96207a.40469.40469,0,0,0-.397-.39646.399.399,0,0,0-.396.405.39234.39234,0,0,0,.39939.389A.39857.39857,0,0,0,5.79193,17.96207Z"/>
</symbol>
<symbol id="icon-medium" viewBox="0 0 24 24">
<path d="M5.727 8.027a.623.623 0 0 0-.204-.527L4.02 5.687v-.273H8.69l3.614 7.926 3.175-7.926h4.457v.274l-1.285 1.234a.367.367 0 0 0-.144.36v9.066a.374.374 0 0 0 .144.363l1.258 1.234v.27h-6.324v-.27l1.3-1.265c.13-.13.13-.164.13-.36V8.988l-3.621 9.196h-.489L6.691 8.988v6.164c-.035.258.051.52.235.707l1.691 2.055v.27h-4.8v-.27l1.69-2.055a.814.814 0 0 0 .22-.707zm0 0"/>
</symbol>
<symbol id="icon-patreon" viewBox="0 0 24 24">
<path d="M13.975 5a5.05 5.05 0 00-5.041 5.046c0 2.774 2.261 5.03 5.04 5.03A5.034 5.034 0 0019 10.047C19 7.264 16.746 5 13.975 5zM5 18.44h2.461V5H5v13.44z"/>
</symbol>
<symbol id="icon-pinterest" viewBox="0 0 24 24">
<path d="M12.289,2C6.617,2,3.606,5.648,3.606,9.622c0,1.846,1.025,4.146,2.666,4.878c0.25,0.111,0.381,0.063,0.439-0.169 c0.044-0.175,0.267-1.029,0.365-1.428c0.032-0.128,0.017-0.237-0.091-0.362C6.445,11.911,6.01,10.75,6.01,9.668 c0-2.777,2.194-5.464,5.933-5.464c3.23,0,5.49,2.108,5.49,5.122c0,3.407-1.794,5.768-4.13,5.768c-1.291,0-2.257-1.021-1.948-2.277 c0.372-1.495,1.089-3.112,1.089-4.191c0-0.967-0.542-1.775-1.663-1.775c-1.319,0-2.379,1.309-2.379,3.059 c0,1.115,0.394,1.869,0.394,1.869s-1.302,5.279-1.54,6.261c-0.405,1.666,0.053,4.368,0.094,4.604 c0.021,0.126,0.167,0.169,0.25,0.063c0.129-0.165,1.699-2.419,2.142-4.051c0.158-0.59,0.817-2.995,0.817-2.995 c0.43,0.784,1.681,1.446,3.013,1.446c3.963,0,6.822-3.494,6.822-7.833C20.394,5.112,16.849,2,12.289,2"/>
</symbol>
<symbol id="icon-pocket" viewBox="0 0 24 24">
<path d="M21.927,4.194C21.667,3.48,20.982,3,20.222,3h-0.01h-1.721H3.839C3.092,3,2.411,3.47,2.145,4.17 C2.066,4.378,2.026,4.594,2.026,4.814v6.035l0.069,1.2c0.29,2.73,1.707,5.115,3.899,6.778c0.039,0.03,0.079,0.059,0.119,0.089 l0.025,0.018c1.175,0.859,2.491,1.441,3.91,1.727c0.655,0.132,1.325,0.2,1.991,0.2c0.615,0,1.232-0.057,1.839-0.17 c0.073-0.014,0.145-0.028,0.219-0.044c0.02-0.004,0.042-0.012,0.064-0.023c1.359-0.297,2.621-0.864,3.753-1.691l0.025-0.018 c0.04-0.029,0.08-0.058,0.119-0.089c2.192-1.664,3.609-4.049,3.898-6.778l0.069-1.2V4.814C22.026,4.605,22,4.398,21.927,4.194z M17.692,10.481l-4.704,4.512c-0.266,0.254-0.608,0.382-0.949,0.382c-0.342,0-0.684-0.128-0.949-0.382l-4.705-4.512 C5.838,9.957,5.82,9.089,6.344,8.542c0.524-0.547,1.392-0.565,1.939-0.04l3.756,3.601l3.755-3.601 c0.547-0.524,1.415-0.506,1.939,0.04C18.256,9.089,18.238,9.956,17.692,10.481z"/>
</symbol>
<symbol id="icon-ravelry" viewBox="0 0 23 20">
<path d="M12.098 19.34a.25.25 0 01-.118-.043 13.986 13.986 0 01-.394-.258c-.164-.11-.477-.352-.934-.723-.46-.375-.882-.761-1.27-1.168-.39-.406-.796-.925-1.218-1.562a8.521 8.521 0 01-.976-1.926c-.125-.023-.758-.16-1.907-.414A8.785 8.785 0 007.84 17.29a8.152 8.152 0 004.258 2.05zm-6.98-6.762l1.831.313A13.424 13.424 0 016.5 11.02a16.216 16.216 0 01-.207-1.622l-.043-.593c-.61.61-1.047 1.445-1.316 2.5.035.484.097.91.183 1.273zm1.198-6.797a9.064 9.064 0 00-.84 1.653c.32-.344.59-.598.81-.758zm15.649 4.844a8.8 8.8 0 00-.676-3.426 8.85 8.85 0 00-1.824-2.812 8.614 8.614 0 00-2.727-1.883 8.115 8.115 0 00-3.312-.695 8.131 8.131 0 00-3.059.586A8.412 8.412 0 007.754 4.05c-.219.433-.383 1.027-.488 1.785a5.407 5.407 0 011.554-.93 7.481 7.481 0 011.727-.48 16.642 16.642 0 011.558-.153c.489-.02.883-.015 1.18.012l.438.035c.238.008.43.063.574.172a.66.66 0 01.27.367c.03.141.054.278.07.414a.8.8 0 01-.012.317 12.781 12.781 0 00-2.477-.004 7.093 7.093 0 00-1.992.484 9.6 9.6 0 00-1.554.801A12.46 12.46 0 007.176 7.97c.031.27.07.613.125 1.031.054.422.183 1.082.386 1.988.204.903.43 1.57.676 2.004.895.043 1.793-.012 2.696-.164.902-.152 1.683-.351 2.336-.598a20.681 20.681 0 001.77-.746c.526-.254.925-.472 1.19-.66l.407-.265c.156-.121.3-.196.43-.23a.367.367 0 01.331.058c.094.07.157.199.184.383.102.722-.039 1.171-.426 1.351-1.508.723-3.203 1.219-5.086 1.496-.976.149-2.129.207-3.449.176a7.673 7.673 0 001.195 1.973c.504.597 1 1.07 1.493 1.418.496.343.968.636 1.421.878.454.243.825.407 1.106.489l.426.133c1.039.171 1.992.113 2.863-.168 1.414-.739 2.555-1.813 3.418-3.227.867-1.414 1.297-2.969 1.297-4.664zm.805-.414c-.102 1.004-.247 1.793-.434 2.367-.508 1.547-1.168 2.836-1.977 3.867-.808 1.032-1.964 1.973-3.468 2.828-.348.247-.645.41-.895.493-.52.195-1.113.254-1.773.18-.262.019-.528.03-.797.03-2.055 0-3.883-.64-5.492-1.93-1.61-1.288-2.68-2.929-3.22-4.933-.007 0-.019 0-.042-.004-.024-.004-.04-.007-.055-.007-.043.375-.035.793.028 1.257.062.465.156.891.285 1.282.125.39.254.757.39 1.093.133.34.25.606.344.801l.152.29c.059.09.254.394.586.913a4.327 4.327 0 01-1.355-1.187 5.669 5.669 0 01-.856-1.563 14.087 14.087 0 01-.43-1.531 9.012 9.012 0 01-.19-1.2l-.02-.468c-.035-.016-.16-.059-.367-.137-.207-.078-.383-.148-.528-.203-.144-.054-.336-.133-.578-.226a9.221 9.221 0 01-.625-.282c-.176-.09-.36-.183-.543-.285-.187-.097-.34-.199-.465-.3a1.27 1.27 0 01-.27-.286c.138.075.321.172.548.285.23.118.64.286 1.23.508.594.223 1.121.364 1.586.426l.023-.36c.079-1.109.418-2.187 1.024-3.234A9.226 9.226 0 016.5 4.621c.203-.855.5-1.652.883-2.39.11-.208.226-.376.347-.5.125-.13.305-.247.536-.36 1.148-.55 2.25-.937 3.304-1.16A9.935 9.935 0 0114.86.09c1.136.14 2.25.5 3.34 1.082 1.593.855 2.804 2.105 3.624 3.75.82 1.644 1.137 3.406.946 5.289zm0 0"/>
</symbol>
<symbol id="icon-reddit" viewBox="0 0 24 24">
<path d="M22,11.816c0-1.256-1.021-2.277-2.277-2.277c-0.593,0-1.122,0.24-1.526,0.614c-1.481-0.965-3.455-1.594-5.647-1.69 l1.171-3.702l3.18,0.748c0.008,1.028,0.846,1.862,1.876,1.862c1.035,0,1.877-0.842,1.877-1.878c0-1.035-0.842-1.877-1.877-1.877 c-0.769,0-1.431,0.466-1.72,1.13l-3.508-0.826c-0.203-0.047-0.399,0.067-0.46,0.261l-1.35,4.268 c-2.316,0.038-4.411,0.67-5.97,1.671C5.368,9.765,4.853,9.539,4.277,9.539C3.021,9.539,2,10.56,2,11.816 c0,0.814,0.433,1.523,1.078,1.925c-0.037,0.221-0.061,0.444-0.061,0.672c0,3.292,4.011,5.97,8.941,5.97s8.941-2.678,8.941-5.97 c0-0.214-0.02-0.424-0.053-0.632C21.533,13.39,22,12.661,22,11.816z M18.776,4.394c0.606,0,1.1,0.493,1.1,1.1s-0.493,1.1-1.1,1.1 s-1.1-0.494-1.1-1.1S18.169,4.394,18.776,4.394z M2.777,11.816c0-0.827,0.672-1.5,1.499-1.5c0.313,0,0.598,0.103,0.838,0.269 c-0.851,0.676-1.477,1.479-1.812,2.36C2.983,12.672,2.777,12.27,2.777,11.816z M11.959,19.606c-4.501,0-8.164-2.329-8.164-5.193 S7.457,9.22,11.959,9.22s8.164,2.329,8.164,5.193S16.46,19.606,11.959,19.606z M20.636,13.001c-0.326-0.89-0.948-1.701-1.797-2.384 c0.248-0.186,0.55-0.301,0.883-0.301c0.827,0,1.5,0.673,1.5,1.5C21.223,12.299,20.992,12.727,20.636,13.001z M8.996,14.704 c-0.76,0-1.397-0.616-1.397-1.376c0-0.76,0.637-1.397,1.397-1.397c0.76,0,1.376,0.637,1.376,1.397 C10.372,14.088,9.756,14.704,8.996,14.704z M16.401,13.328c0,0.76-0.616,1.376-1.376,1.376c-0.76,0-1.399-0.616-1.399-1.376 c0-0.76,0.639-1.397,1.399-1.397C15.785,11.931,16.401,12.568,16.401,13.328z M15.229,16.708c0.152,0.152,0.152,0.398,0,0.55 c-0.674,0.674-1.727,1.002-3.219,1.002c-0.004,0-0.007-0.002-0.011-0.002c-0.004,0-0.007,0.002-0.011,0.002 c-1.492,0-2.544-0.328-3.218-1.002c-0.152-0.152-0.152-0.398,0-0.55c0.152-0.152,0.399-0.151,0.55,0 c0.521,0.521,1.394,0.775,2.669,0.775c0.004,0,0.007,0.002,0.011,0.002c0.004,0,0.007-0.002,0.011-0.002 c1.275,0,2.148-0.253,2.669-0.775C14.831,16.556,15.078,16.556,15.229,16.708z"/>
</symbol>
<symbol id="icon-skype" viewBox="0 0 24 24">
<path d="M10.113,2.699c0.033-0.006,0.067-0.013,0.1-0.02c0.033,0.017,0.066,0.033,0.098,0.051L10.113,2.699z M2.72,10.223 c-0.006,0.034-0.011,0.069-0.017,0.103c0.018,0.032,0.033,0.064,0.051,0.095L2.72,10.223z M21.275,13.771 c0.007-0.035,0.011-0.071,0.018-0.106c-0.018-0.031-0.033-0.064-0.052-0.095L21.275,13.771z M13.563,21.199 c0.032,0.019,0.065,0.035,0.096,0.053c0.036-0.006,0.071-0.011,0.105-0.017L13.563,21.199z M22,16.386 c0,1.494-0.581,2.898-1.637,3.953c-1.056,1.057-2.459,1.637-3.953,1.637c-0.967,0-1.914-0.251-2.75-0.725 c0.036-0.006,0.071-0.011,0.105-0.017l-0.202-0.035c0.032,0.019,0.065,0.035,0.096,0.053c-0.543,0.096-1.099,0.147-1.654,0.147 c-1.275,0-2.512-0.25-3.676-0.743c-1.125-0.474-2.135-1.156-3.002-2.023c-0.867-0.867-1.548-1.877-2.023-3.002 c-0.493-1.164-0.743-2.401-0.743-3.676c0-0.546,0.049-1.093,0.142-1.628c0.018,0.032,0.033,0.064,0.051,0.095L2.72,10.223 c-0.006,0.034-0.011,0.069-0.017,0.103C2.244,9.5,2,8.566,2,7.615c0-1.493,0.582-2.898,1.637-3.953 c1.056-1.056,2.46-1.638,3.953-1.638c0.915,0,1.818,0.228,2.622,0.655c-0.033,0.007-0.067,0.013-0.1,0.02l0.199,0.031 c-0.032-0.018-0.066-0.034-0.098-0.051c0.002,0,0.003-0.001,0.004-0.001c0.586-0.112,1.187-0.169,1.788-0.169 c1.275,0,2.512,0.249,3.676,0.742c1.124,0.476,2.135,1.156,3.002,2.024c0.868,0.867,1.548,1.877,2.024,3.002 c0.493,1.164,0.743,2.401,0.743,3.676c0,0.575-0.054,1.15-0.157,1.712c-0.018-0.031-0.033-0.064-0.052-0.095l0.034,0.201 c0.007-0.035,0.011-0.071,0.018-0.106C21.754,14.494,22,15.432,22,16.386z M16.817,14.138c0-1.331-0.613-2.743-3.033-3.282 l-2.209-0.49c-0.84-0.192-1.807-0.444-1.807-1.237c0-0.794,0.679-1.348,1.903-1.348c2.468,0,2.243,1.696,3.468,1.696 c0.645,0,1.209-0.379,1.209-1.031c0-1.521-2.435-2.663-4.5-2.663c-2.242,0-4.63,0.952-4.63,3.488c0,1.221,0.436,2.521,2.839,3.123 l2.984,0.745c0.903,0.223,1.129,0.731,1.129,1.189c0,0.762-0.758,1.507-2.129,1.507c-2.679,0-2.307-2.062-3.743-2.062 c-0.645,0-1.113,0.444-1.113,1.078c0,1.236,1.501,2.886,4.856,2.886C15.236,17.737,16.817,16.199,16.817,14.138z"/>
</symbol>
<symbol id="icon-slideshare" viewBox="0 0 24 24">
<path d="M11.738,10.232a2.142,2.142,0,0,1-.721,1.619,2.556,2.556,0,0,1-3.464,0,2.183,2.183,0,0,1,0-3.243,2.572,2.572,0,0,1,3.464,0A2.136,2.136,0,0,1,11.738,10.232Zm5.7,0a2.15,2.15,0,0,1-.715,1.619,2.563,2.563,0,0,1-3.469,0,2.183,2.183,0,0,1,0-3.243,2.58,2.58,0,0,1,3.469,0A2.144,2.144,0,0,1,17.439,10.232Zm2.555,2.045V4.7a2.128,2.128,0,0,0-.363-1.4,1.614,1.614,0,0,0-1.261-.415H5.742a1.656,1.656,0,0,0-1.278.386A2.246,2.246,0,0,0,4.129,4.7v7.643a8.212,8.212,0,0,0,1,.454q.516.193.92.318a6.847,6.847,0,0,0,.92.21q.516.085.806.125a6.615,6.615,0,0,0,.795.045l.665.006q.16,0,.642-.023t.506-.023a1.438,1.438,0,0,1,1.079.307,1.134,1.134,0,0,0,.114.1,7.215,7.215,0,0,0,.693.579q.079-1.033,1.34-.988.057,0,.415.017l.488.023q.13.006.517.011t.6-.011l.619-.051a5.419,5.419,0,0,0,.693-.1l.7-.153a5.353,5.353,0,0,0,.761-.221q.345-.131.766-.307a8.727,8.727,0,0,0,.818-.392Zm1.851-.057a10.4,10.4,0,0,1-4.225,2.862,6.5,6.5,0,0,1-.261,5.281,3.524,3.524,0,0,1-2.078,1.681,2.452,2.452,0,0,1-2.067-.17,1.915,1.915,0,0,1-.931-1.863l-.011-3.7V16.3l-.279-.068q-.188-.045-.267-.057l-.011,3.839a1.9,1.9,0,0,1-.943,1.863,2.481,2.481,0,0,1-2.078.17,3.519,3.519,0,0,1-2.067-1.7,6.546,6.546,0,0,1-.25-5.258A10.4,10.4,0,0,1,2.152,12.22a.56.56,0,0,1-.045-.715q.238-.3.681.011l.125.079a.767.767,0,0,1,.125.091V3.8a1.987,1.987,0,0,1,.534-1.4,1.7,1.7,0,0,1,1.295-.579H19.141a1.7,1.7,0,0,1,1.295.579,1.985,1.985,0,0,1,.534,1.4v7.882l.238-.17q.443-.307.681-.011a.56.56,0,0,1-.045.715Z"/>
</symbol>
<symbol id="icon-snapchat" viewBox="0 0 24 24">
<path d="M12.065,2a5.526,5.526,0,0,1,3.132.892A5.854,5.854,0,0,1,17.326,5.4a5.821,5.821,0,0,1,.351,2.33q0,.612-.117,2.487a.809.809,0,0,0,.365.091,1.93,1.93,0,0,0,.664-.176,1.93,1.93,0,0,1,.664-.176,1.3,1.3,0,0,1,.729.234.7.7,0,0,1,.351.6.839.839,0,0,1-.41.7,2.732,2.732,0,0,1-.9.41,3.192,3.192,0,0,0-.9.378.728.728,0,0,0-.41.618,1.575,1.575,0,0,0,.156.56,6.9,6.9,0,0,0,1.334,1.953,5.6,5.6,0,0,0,1.881,1.315,5.875,5.875,0,0,0,1.042.3.42.42,0,0,1,.365.456q0,.911-2.852,1.341a1.379,1.379,0,0,0-.143.507,1.8,1.8,0,0,1-.182.605.451.451,0,0,1-.429.241,5.878,5.878,0,0,1-.807-.085,5.917,5.917,0,0,0-.833-.085,4.217,4.217,0,0,0-.807.065,2.42,2.42,0,0,0-.82.293,6.682,6.682,0,0,0-.755.5q-.351.267-.755.527a3.886,3.886,0,0,1-.989.436A4.471,4.471,0,0,1,11.831,22a4.307,4.307,0,0,1-1.256-.176,3.784,3.784,0,0,1-.976-.436q-.4-.26-.749-.527a6.682,6.682,0,0,0-.755-.5,2.422,2.422,0,0,0-.807-.293,4.432,4.432,0,0,0-.82-.065,5.089,5.089,0,0,0-.853.1,5,5,0,0,1-.762.1.474.474,0,0,1-.456-.241,1.819,1.819,0,0,1-.182-.618,1.411,1.411,0,0,0-.143-.521q-2.852-.429-2.852-1.341a.42.42,0,0,1,.365-.456,5.793,5.793,0,0,0,1.042-.3,5.524,5.524,0,0,0,1.881-1.315,6.789,6.789,0,0,0,1.334-1.953A1.575,1.575,0,0,0,6,12.9a.728.728,0,0,0-.41-.618,3.323,3.323,0,0,0-.9-.384,2.912,2.912,0,0,1-.9-.41.814.814,0,0,1-.41-.684.71.71,0,0,1,.338-.593,1.208,1.208,0,0,1,.716-.241,1.976,1.976,0,0,1,.625.169,2.008,2.008,0,0,0,.69.169.919.919,0,0,0,.416-.091q-.117-1.849-.117-2.474A5.861,5.861,0,0,1,6.385,5.4,5.516,5.516,0,0,1,8.625,2.819,7.075,7.075,0,0,1,12.062,2Z"/>
</symbol>
<symbol id="icon-soundcloud" viewBox="0 0 24 24">
<path d="M8.9,16.1L9,14L8.9,9.5c0-0.1,0-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1L8.3,14l0.1,2.1 c0,0.1,0,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1C8.8,16.3,8.9,16.3,8.9,16.1z M11.4,15.9l0.1-1.8L11.4,9c0-0.1,0-0.2-0.1-0.2 c0,0-0.1,0-0.1,0s-0.1,0-0.1,0c-0.1,0-0.1,0.1-0.1,0.2l0,0.1l-0.1,5c0,0,0,0.7,0.1,2v0c0,0.1,0,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1 c0.1,0,0.1,0,0.2-0.1c0.1,0,0.1-0.1,0.1-0.2L11.4,15.9z M2.4,12.9L2.5,14l-0.2,1.1c0,0.1,0,0.1-0.1,0.1c0,0-0.1,0-0.1-0.1L2.1,14 l0.1-1.1C2.2,12.9,2.3,12.9,2.4,12.9C2.3,12.9,2.4,12.9,2.4,12.9z M3.1,12.2L3.3,14l-0.2,1.8c0,0.1,0,0.1-0.1,0.1 c-0.1,0-0.1,0-0.1-0.1L2.8,14L3,12.2C3,12.2,3,12.2,3.1,12.2C3.1,12.2,3.1,12.2,3.1,12.2z M3.9,11.9L4.1,14l-0.2,2.1 c0,0.1,0,0.1-0.1,0.1c-0.1,0-0.1,0-0.1-0.1L3.5,14l0.2-2.1c0-0.1,0-0.1,0.1-0.1C3.9,11.8,3.9,11.8,3.9,11.9z M4.7,11.9L4.9,14 l-0.2,2.1c0,0.1-0.1,0.1-0.1,0.1c-0.1,0-0.1,0-0.1-0.1L4.3,14l0.2-2.2c0-0.1,0-0.1,0.1-0.1C4.7,11.7,4.7,11.8,4.7,11.9z M5.6,12 l0.2,2l-0.2,2.1c0,0.1-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0c0,0,0-0.1,0-0.1L5.1,14l0.2-2c0,0,0-0.1,0-0.1s0.1,0,0.1,0 C5.5,11.9,5.5,11.9,5.6,12L5.6,12z M6.4,10.7L6.6,14l-0.2,2.1c0,0,0,0.1,0,0.1c0,0-0.1,0-0.1,0c-0.1,0-0.1-0.1-0.2-0.2L5.9,14 l0.2-3.3c0-0.1,0.1-0.2,0.2-0.2c0,0,0.1,0,0.1,0C6.4,10.7,6.4,10.7,6.4,10.7z M7.2,10l0.2,4.1l-0.2,2.1c0,0,0,0.1,0,0.1 c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.2-0.2l-0.1-2.1L6.8,10c0-0.1,0.1-0.2,0.2-0.2c0,0,0.1,0,0.1,0S7.2,9.9,7.2,10z M8,9.6L8.2,14 L8,16.1c0,0.1-0.1,0.2-0.2,0.2c-0.1,0-0.2-0.1-0.2-0.2L7.5,14l0.1-4.4c0-0.1,0-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1,0,0.1,0.1 C8,9.6,8,9.6,8,9.6z M11.4,16.1L11.4,16.1L11.4,16.1z M9.7,9.6L9.8,14l-0.1,2.1c0,0.1,0,0.1-0.1,0.2s-0.1,0.1-0.2,0.1 c-0.1,0-0.1,0-0.1-0.1s-0.1-0.1-0.1-0.2L9.2,14l0.1-4.4c0-0.1,0-0.1,0.1-0.2s0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0.1S9.7,9.5,9.7,9.6 L9.7,9.6z M10.6,9.8l0.1,4.3l-0.1,2c0,0.1,0,0.1-0.1,0.2c0,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1-0.1-0.1-0.2L10,14 l0.1-4.3c0-0.1,0-0.1,0.1-0.2c0,0,0.1-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0.1S10.6,9.7,10.6,9.8z M12.4,14l-0.1,2c0,0.1,0,0.1-0.1,0.2 c-0.1,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2l-0.1-1l-0.1-1l0.1-5.5v0c0-0.1,0-0.2,0.1-0.2 c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0.1,0.1,0.2L12.4,14z M22.1,13.9c0,0.7-0.2,1.3-0.7,1.7c-0.5,0.5-1.1,0.7-1.7,0.7 h-6.8c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2V8.2c0-0.1,0.1-0.2,0.2-0.3c0.5-0.2,1-0.3,1.6-0.3c1.1,0,2.1,0.4,2.9,1.1 c0.8,0.8,1.3,1.7,1.4,2.8c0.3-0.1,0.6-0.2,1-0.2c0.7,0,1.3,0.2,1.7,0.7C21.8,12.6,22.1,13.2,22.1,13.9L22.1,13.9z"/>
</symbol>
<symbol id="icon-spotify" viewBox="0 0 24 24">
<path d="M12,2C6.477,2,2,6.477,2,12c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10C22,6.477,17.523,2,12,2 M16.586,16.424 c-0.18,0.295-0.563,0.387-0.857,0.207c-2.348-1.435-5.304-1.76-8.785-0.964c-0.335,0.077-0.67-0.133-0.746-0.469 c-0.077-0.335,0.132-0.67,0.469-0.746c3.809-0.871,7.077-0.496,9.713,1.115C16.673,15.746,16.766,16.13,16.586,16.424 M17.81,13.7 c-0.226,0.367-0.706,0.482-1.072,0.257c-2.687-1.652-6.785-2.131-9.965-1.166C6.36,12.917,5.925,12.684,5.8,12.273 C5.675,11.86,5.908,11.425,6.32,11.3c3.632-1.102,8.147-0.568,11.234,1.328C17.92,12.854,18.035,13.335,17.81,13.7 M17.915,10.865 c-3.223-1.914-8.54-2.09-11.618-1.156C5.804,9.859,5.281,9.58,5.131,9.086C4.982,8.591,5.26,8.069,5.755,7.919 c3.532-1.072,9.404-0.865,13.115,1.338c0.445,0.264,0.59,0.838,0.327,1.282C18.933,10.983,18.359,11.129,17.915,10.865"/>
</symbol>
<symbol id="icon-stackoverflow" viewBox="0 0 24 24">
<path d="m 17.817128,20.228605 v -5.337217 h 1.771431 V 22 H 3.6 v -7.108612 h 1.771401 v 5.337217 z" />
<path d="m 7.3267845,14.385359 8.6959295,1.817316 0.368168,-1.748385 -8.6959318,-1.817319 z m 1.1503197,-4.140944 8.0517968,3.749872 0.73617,-1.610385 -8.0518344,-3.7728517 z m 2.2315078,-3.9569154 6.832405,5.6822664 1.12738,-1.357316 -6.832576,-5.6822636 z m 4.417,-4.2099019 -1.426448,1.0581864 5.291191,7.1316119 1.426412,-1.0582745 z M 7.1427296,18.434189 h 8.8799844 v -1.7713 H 7.1427296 Z" />
<path d="m 17.817128,20.228605 v -5.337217 h 1.771431 V 22 H 3.6 v -7.108612 h 1.771401 v 5.337217 z" />
<path d="m 7.3267845,14.385359 8.6959295,1.817316 0.368168,-1.748385 -8.6959318,-1.817319 z m 1.1503197,-4.140944 8.0517968,3.749872 0.73617,-1.610385 -8.0518344,-3.7728517 z m 2.2315078,-3.9569154 6.832405,5.6822664 1.12738,-1.357316 -6.832576,-5.6822636 z m 4.417,-4.2099019 -1.426448,1.0581864 5.291191,7.1316119 1.426412,-1.0582745 z M 7.1427296,18.434189 h 8.8799844 v -1.7713 H 7.1427296 Z" />
</symbol>
<symbol id="icon-stumbleupon" viewBox="0 0 24 24">
<path d="M12,4.294c-2.469,0-4.471,2.002-4.471,4.471v6.353c0,0.585-0.474,1.059-1.059,1.059c-0.585,0-1.059-0.474-1.059-1.059 v-2.824H2v2.941c0,2.469,2.002,4.471,4.471,4.471c2.469,0,4.471-2.002,4.471-4.471V8.765c0-0.585,0.474-1.059,1.059-1.059 s1.059,0.474,1.059,1.059v1.294l1.412,0.647l2-0.647V8.765C16.471,6.296,14.469,4.294,12,4.294z M13.059,12.353v2.882 c0,2.469,2.002,4.471,4.471,4.471S22,17.704,22,15.235v-2.824h-3.412v2.824c0,0.585-0.474,1.059-1.059,1.059 c-0.585,0-1.059-0.474-1.059-1.059v-2.882l-2,0.647L13.059,12.353z"/>
</symbol>
<symbol id="icon-telegram" viewBox="0 0 24 24">
<path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.08 14.757s-.25.625-.936.325l-2.541-1.949-1.63 1.486s-.127.096-.266.036c0 0-.12-.011-.27-.486-.15-.475-.911-2.972-.911-2.972L6 12.349s-.387-.137-.425-.438c-.037-.3.437-.462.437-.462l10.03-3.934s.824-.362.824.238l-1.786 9.004z"/>
</symbol>
<symbol id="icon-tiktok" viewBox="0 0 24 24">
<path d="M12.22 2H15.64C15.64 2 15.4502 6.39351 20.3898 6.70186V10.0981C20.3898 10.0981 17.7537 10.2636 15.64 8.64957L15.6769 15.6615C15.6769 16.9151 15.3052 18.1406 14.6087 19.1829C13.9123 20.2253 12.9224 21.0377 11.7642 21.5175C10.606 21.9972 9.33162 22.1228 8.10209 21.8782C6.87257 21.6337 5.74316 21.0301 4.85669 20.1437C3.97022 19.2573 3.3665 18.1279 3.12186 16.8984C2.87723 15.6689 3.00267 14.3945 3.48233 13.2363C3.96199 12.0781 4.77432 11.0881 5.8166 10.3916C6.85888 9.69502 8.0843 9.32318 9.33791 9.32307H10.2271V12.7231V12.7954C9.64757 12.6147 9.02578 12.6217 8.45043 12.8152C7.87508 13.0088 7.37556 13.3792 7.02314 13.8734C6.67071 14.3677 6.48338 14.9606 6.48786 15.5677C6.49235 16.1747 6.68842 16.7648 7.04811 17.2538C7.40781 17.7428 7.91274 18.1057 8.49089 18.2908C9.06903 18.4758 9.69086 18.4736 10.2676 18.2843C10.8444 18.0951 11.3467 17.7285 11.7029 17.2369C12.059 16.7454 12.2508 16.1538 12.2509 15.5468L12.22 2Z"/>
</symbol>
<symbol id="icon-tumblr" viewBox="0 0 24 24">
<path d="M16.749,17.396c-0.357,0.17-1.041,0.319-1.551,0.332c-1.539,0.041-1.837-1.081-1.85-1.896V9.847h3.861V6.937h-3.847V2.039 c0,0-2.77,0-2.817,0c-0.046,0-0.127,0.041-0.138,0.144c-0.165,1.499-0.867,4.13-3.783,5.181v2.484h1.945v6.282 c0,2.151,1.587,5.206,5.775,5.135c1.413-0.024,2.982-0.616,3.329-1.126L16.749,17.396z"/>
</symbol>
<symbol id="icon-twitch" viewBox="0 0 24 24">
<path d="M16.499,8.089h-1.636v4.91h1.636V8.089z M12,8.089h-1.637v4.91H12V8.089z M4.228,3.178L3,6.451v13.092h4.499V22h2.456 l2.454-2.456h3.681L21,14.636V3.178H4.228z M19.364,13.816l-2.864,2.865H12l-2.453,2.453V16.68H5.863V4.814h13.501V13.816z"/>
</symbol>
<symbol id="icon-twitter" viewBox="0 0 24 24">
<path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"/>
</symbol>
<symbol id="icon-vimeo" viewBox="0 0 24 24">
<path d="M22.396,7.164c-0.093,2.026-1.507,4.799-4.245,8.32C15.322,19.161,12.928,21,10.97,21c-1.214,0-2.24-1.119-3.079-3.359 c-0.56-2.053-1.119-4.106-1.68-6.159C5.588,9.243,4.921,8.122,4.206,8.122c-0.156,0-0.701,0.328-1.634,0.98L1.594,7.841 c1.027-0.902,2.04-1.805,3.037-2.708C6.001,3.95,7.03,3.327,7.715,3.264c1.619-0.156,2.616,0.951,2.99,3.321 c0.404,2.557,0.685,4.147,0.841,4.769c0.467,2.121,0.981,3.181,1.542,3.181c0.435,0,1.09-0.688,1.963-2.065 c0.871-1.376,1.338-2.422,1.401-3.142c0.125-1.187-0.343-1.782-1.401-1.782c-0.498,0-1.012,0.115-1.541,0.341 c1.023-3.35,2.977-4.977,5.862-4.884C21.511,3.066,22.52,4.453,22.396,7.164z"/>
</symbol>
<symbol id="icon-vk" viewBox="0 0 24 24">
<path d="M22,7.1c0.2,0.4-0.4,1.5-1.6,3.1c-0.2,0.2-0.4,0.5-0.7,0.9c-0.5,0.7-0.9,1.1-0.9,1.4c-0.1,0.3-0.1,0.6,0.1,0.8 c0.1,0.1,0.4,0.4,0.8,0.9h0l0,0c1,0.9,1.6,1.7,2,2.3c0,0,0,0.1,0.1,0.1c0,0.1,0,0.1,0.1,0.3c0,0.1,0,0.2,0,0.4 c0,0.1-0.1,0.2-0.3,0.3c-0.1,0.1-0.4,0.1-0.6,0.1l-2.7,0c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.4-0.1-0.5-0.2l-0.2-0.1 c-0.2-0.1-0.5-0.4-0.7-0.7s-0.5-0.6-0.7-0.8c-0.2-0.2-0.4-0.4-0.6-0.6C14.8,15,14.6,15,14.4,15c0,0,0,0-0.1,0c0,0-0.1,0.1-0.2,0.2 c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.2,0.5c-0.1,0.2-0.1,0.5-0.1,0.8c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.1,0.2l0,0.1 c-0.1,0.1-0.3,0.2-0.6,0.2h-1.2c-0.5,0-1,0-1.5-0.2c-0.5-0.1-1-0.3-1.4-0.6s-0.7-0.5-1.1-0.7s-0.6-0.4-0.7-0.6l-0.3-0.3 c-0.1-0.1-0.2-0.2-0.3-0.3s-0.4-0.5-0.7-0.9s-0.7-1-1.1-1.6c-0.4-0.6-0.8-1.3-1.3-2.2C2.9,9.4,2.5,8.5,2.1,7.5C2,7.4,2,7.3,2,7.2 c0-0.1,0-0.1,0-0.2l0-0.1c0.1-0.1,0.3-0.2,0.6-0.2l2.9,0c0.1,0,0.2,0,0.2,0.1S5.9,6.9,5.9,7L6,7c0.1,0.1,0.2,0.2,0.3,0.3 C6.4,7.7,6.5,8,6.7,8.4C6.9,8.8,7,9,7.1,9.2l0.2,0.3c0.2,0.4,0.4,0.8,0.6,1.1c0.2,0.3,0.4,0.5,0.5,0.7s0.3,0.3,0.4,0.4 c0.1,0.1,0.3,0.1,0.4,0.1c0.1,0,0.2,0,0.3-0.1c0,0,0,0,0.1-0.1c0,0,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.3,0.1-0.5c0-0.2,0.1-0.5,0.1-0.8 c0-0.4,0-0.8,0-1.3c0-0.3,0-0.5-0.1-0.8c0-0.2-0.1-0.4-0.1-0.5L9.6,7.6C9.4,7.3,9.1,7.2,8.7,7.1C8.6,7.1,8.6,7,8.7,6.9 C8.9,6.7,9,6.6,9.1,6.5c0.4-0.2,1.2-0.3,2.5-0.3c0.6,0,1,0.1,1.4,0.1c0.1,0,0.3,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.3 c0,0.1,0.1,0.2,0.1,0.3s0,0.3,0,0.5c0,0.2,0,0.4,0,0.6c0,0.2,0,0.4,0,0.7c0,0.3,0,0.6,0,0.9c0,0.1,0,0.2,0,0.4c0,0.2,0,0.4,0,0.5 c0,0.1,0,0.3,0,0.4s0.1,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.2-0.2,0.4-0.4 s0.3-0.4,0.5-0.7c0.2-0.3,0.5-0.7,0.7-1.1c0.4-0.7,0.8-1.5,1.1-2.3c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.1,0.1-0.1l0,0l0.1,0 c0,0,0,0,0.1,0s0.2,0,0.2,0l3,0c0.3,0,0.5,0,0.7,0S21.9,7,21.9,7L22,7.1z"/>
</symbol>
<symbol id="icon-whatsapp" viewBox="0 0 24 24">
<path d="M2.048,22l1.406-5.136c-0.867-1.503-1.324-3.208-1.323-4.955C2.133,6.446,6.579,2,12.042,2c2.651,0.001,5.14,1.033,7.011,2.906c1.871,1.873,2.901,4.363,2.9,7.011c-0.002,5.464-4.448,9.91-9.91,9.91c0,0,0,0,0,0h-0.004c-1.659-0.001-3.288-0.417-4.736-1.206L2.048,22z M7.545,18.828l0.301,0.179c1.265,0.751,2.714,1.148,4.193,1.148h0.003c4.54,0,8.235-3.695,8.237-8.237c0.001-2.201-0.855-4.271-2.41-5.828c-1.555-1.557-3.623-2.415-5.824-2.416c-4.544,0-8.239,3.695-8.241,8.237c-0.001,1.556,0.435,3.072,1.259,4.384l0.196,0.312l-0.832,3.04L7.545,18.828z M17.035,14.274c-0.062-0.103-0.227-0.165-0.475-0.289c-0.248-0.124-1.465-0.723-1.692-0.806c-0.227-0.083-0.392-0.124-0.557,0.124c-0.165,0.248-0.64,0.806-0.784,0.971c-0.144,0.165-0.289,0.186-0.536,0.062c-0.248-0.124-1.046-0.385-1.991-1.229c-0.736-0.657-1.233-1.468-1.378-1.715c-0.144-0.248-0.015-0.382,0.109-0.505c0.111-0.111,0.248-0.289,0.371-0.434c0.124-0.145,0.165-0.248,0.248-0.413c0.083-0.165,0.041-0.31-0.021-0.434c-0.062-0.124-0.557-1.343-0.763-1.839C9.364,7.284,9.159,7.35,9.007,7.342c-0.144-0.007-0.31-0.009-0.475-0.009c-0.165,0-0.433,0.062-0.66,0.31C7.646,7.891,7.006,8.49,7.006,9.709c0,1.219,0.887,2.396,1.011,2.562c0.124,0.165,1.746,2.666,4.23,3.739c0.591,0.255,1.052,0.408,1.412,0.522c0.593,0.189,1.133,0.162,1.56,0.098c0.476-0.071,1.465-0.599,1.671-1.177C17.096,14.873,17.096,14.378,17.035,14.274z"/>
</symbol>
<symbol id="icon-woocommerce" viewBox="0 0 24 24">
<path d="M19,2H5C3.3,2,2,3.3,2,5v11c0,1.7,1.3,3,3,3h4l6,3l-1-3h5c1.7,0,3-1.3,3-3V5C22,3.3,20.7,2,19,2z M17.4,6.5c-0.4,0.8-0.8,2.1-1,3.9c-0.3,1.8-0.4,3.1-0.3,4.1c0,0.3,0,0.5-0.1,0.7s-0.3,0.4-0.6,0.4s-0.6-0.1-0.9-0.4c-1-1-1.8-2.6-2.4-4.6c-0.7,1.4-1.2,2.4-1.6,3.1c-0.6,1.2-1.2,1.8-1.6,1.9c-0.3,0-0.5-0.2-0.8-0.7C7.6,13.5,7,10.7,6.4,6.7c0-0.3,0-0.5,0.2-0.7C6.7,5.8,7,5.7,7.3,5.6c0.5,0,0.9,0.2,0.9,0.8c0.3,2.3,0.7,4.2,1.1,5.7l2.4-4.5C11.9,7.2,12.1,7,12.5,7c0.5,0,0.8,0.3,0.9,0.9c0.3,1.4,0.6,2.6,1,3.7c0.3-2.7,0.8-4.7,1.4-5.9c0.2-0.3,0.4-0.5,0.7-0.5c0.2,0,0.5,0.1,0.7,0.2c0.2,0.2,0.3,0.4,0.3,0.6S17.5,6.4,17.4,6.5z"/>
</symbol>
<symbol id="icon-wordpress" viewBox="0 0 24 24">
<path d="M12.158,12.786L9.46,20.625c0.806,0.237,1.657,0.366,2.54,0.366c1.047,0,2.051-0.181,2.986-0.51 c-0.024-0.038-0.046-0.079-0.065-0.124L12.158,12.786z M3.009,12c0,3.559,2.068,6.634,5.067,8.092L3.788,8.341 C3.289,9.459,3.009,10.696,3.009,12z M18.069,11.546c0-1.112-0.399-1.881-0.741-2.48c-0.456-0.741-0.883-1.368-0.883-2.109 c0-0.826,0.627-1.596,1.51-1.596c0.04,0,0.078,0.005,0.116,0.007C16.472,3.904,14.34,3.009,12,3.009 c-3.141,0-5.904,1.612-7.512,4.052c0.211,0.007,0.41,0.011,0.579,0.011c0.94,0,2.396-0.114,2.396-0.114 C7.947,6.93,8.004,7.642,7.52,7.699c0,0-0.487,0.057-1.029,0.085l3.274,9.739l1.968-5.901l-1.401-3.838 C9.848,7.756,9.389,7.699,9.389,7.699C8.904,7.67,8.961,6.93,9.446,6.958c0,0,1.484,0.114,2.368,0.114 c0.94,0,2.397-0.114,2.397-0.114c0.485-0.028,0.542,0.684,0.057,0.741c0,0-0.488,0.057-1.029,0.085l3.249,9.665l0.897-2.996 C17.841,13.284,18.069,12.316,18.069,11.546z M19.889,7.686c0.039,0.286,0.06,0.593,0.06,0.924c0,0.912-0.171,1.938-0.684,3.22 l-2.746,7.94c2.673-1.558,4.47-4.454,4.47-7.771C20.991,10.436,20.591,8.967,19.889,7.686z M12,22C6.486,22,2,17.514,2,12 C2,6.486,6.486,2,12,2c5.514,0,10,4.486,10,10C22,17.514,17.514,22,12,22z"/>
</symbol>
<symbol id="icon-yelp" viewBox="0 0 24 24">
<path d="M12.271,16.718v1.417q-.011,3.257-.067,3.4a.707.707,0,0,1-.569.446,4.637,4.637,0,0,1-2.024-.424A4.609,4.609,0,0,1,7.8,20.565a.844.844,0,0,1-.19-.4.692.692,0,0,1,.044-.29,3.181,3.181,0,0,1,.379-.524q.335-.412,2.019-2.409.011,0,.669-.781a.757.757,0,0,1,.44-.274.965.965,0,0,1,.552.039.945.945,0,0,1,.418.324.732.732,0,0,1,.139.468Zm-1.662-2.8a.783.783,0,0,1-.58.781l-1.339.435q-3.067.981-3.257.981a.711.711,0,0,1-.6-.4,2.636,2.636,0,0,1-.19-.836,9.134,9.134,0,0,1,.011-1.857,3.559,3.559,0,0,1,.335-1.389.659.659,0,0,1,.625-.357,22.629,22.629,0,0,1,2.253.859q.781.324,1.283.524l.937.379a.771.771,0,0,1,.4.34A.982.982,0,0,1,10.609,13.917Zm9.213,3.313a4.467,4.467,0,0,1-1.021,1.8,4.559,4.559,0,0,1-1.512,1.417.671.671,0,0,1-.7-.078q-.156-.112-2.052-3.2l-.524-.859a.761.761,0,0,1-.128-.513.957.957,0,0,1,.217-.513.774.774,0,0,1,.926-.29q.011.011,1.327.446,2.264.736,2.7.887a2.082,2.082,0,0,1,.524.229.673.673,0,0,1,.245.68Zm-7.5-7.049q.056,1.137-.6,1.361-.647.19-1.272-.792L6.237,4.08a.7.7,0,0,1,.212-.691,5.788,5.788,0,0,1,2.314-1,5.928,5.928,0,0,1,2.5-.352.681.681,0,0,1,.547.5q.034.2.245,3.407T12.327,10.181Zm7.384,1.2a.679.679,0,0,1-.29.658q-.167.112-3.67.959-.747.167-1.015.257l.011-.022a.769.769,0,0,1-.513-.044.914.914,0,0,1-.413-.357.786.786,0,0,1,0-.971q.011-.011.836-1.137,1.394-1.908,1.673-2.275a2.423,2.423,0,0,1,.379-.435A.7.7,0,0,1,17.435,8a4.482,4.482,0,0,1,1.372,1.489,4.81,4.81,0,0,1,.9,1.868v.034Z"/>
</symbol>
<symbol id="icon-xanga" viewBox="0 0 24 24">
<path d="M9,9h6v6H9V9z M3,9h6V3H3V9z M15,9h6V3h-6V9z M15,21h6v-6h-6V21z M3,21h6v-6H3V21z"/>
</symbol>
<symbol id="icon-youtube" viewBox="0 0 24 24">
<path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"/>
</symbol>
</defs>
</svg>

	</body>
</html>

<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/


Served from: simplecheatsheet.com @ 2021-08-23 14:28:32 by W3 Total Cache
-->