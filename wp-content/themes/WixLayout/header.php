<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage cesarebenvenuti
 * @since Cesare Benvenuti 1.0
 */
#<!DOCTYPE html>?>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>Cesare Benvenuti</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="mobileoptimized" content="300">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="cleartype" content="on">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>

	<meta name="fb_admins_meta_tag" content=""/>
	<meta name="keywords" content="benvenuti, cesare, master, musica, radio"/>
	<meta name="description" content="informazioni cesare benvenuti"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="/favicon.ico" type="image/x-icon"/>
	<!--<link rel="canonical" href="./"/>
    	<meta http-equiv="X-Wix-Renderer-Server" content="app29.aus"/>
	<meta http-equiv="X-Wix-Meta-Site-Id" content="7bd0add2-f290-4849-bc1b-1b794a5367de"/>
	<meta http-equiv="X-Wix-Application-Instance-Id" content="e2fac95a-5d11-4f94-9009-f0372e0d1f7f"/>
	<meta http-equiv="X-Wix-Published-Version" content="13"/>-->

	<meta http-equiv="etag" content="9bc47e64f1322b235ce4a84486388d98"/>
	<meta property="og:title" content="cesarebenvenuti"/>
	<meta property="og:type" content="article"/>
	<!--<meta property="og:url" content="http://cesarebenvenuti.wix.com/cesarebenvenuti"/>
	<meta property="og:image" content="http://static.wixstatic.com/media/d75821b3625d16f95dfd8ebff761922d.png"/>-->
	<meta property="og:site_name" content="cesarebenvenuti"/>
	<meta property="og:description" content="informazioni cesare benvenuti"/>
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

	<!--JQuery or <meta id="wixMobileViewport" name="viewport" content="minimum-scale=0.25, maximum-scale=1.2"/>?-->
	
<!--
            <script>
            // BEAT MESSAGE
    try {
        window.wixBiSession = {
            initialTimestamp : Date.now(),
            viewerSessionId: 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c)
                    { var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); return v.toString(16); }
            )
        };
        (new Image()).src = 'http://frog.wix.com/bt?src=29&evid=3&pn=1&et=1&v=3.0&vsi=' + wixBiSession.viewerSessionId +
                '&url=' + encodeURIComponent(location.href.replace(/^http(s)?:\/\/(www\.)?/, '')) +
                '&isp=0&st=2&ts=0&c=' + wixBiSession.initialTimestamp;
    } catch (e){}
    // BEAT MESSAGE END
</script>    
-->

    <!-- META DATA -->
    <?php /*
,<script type="text/javascript">

    var serviceTopology = {"serverName":"app29.aus","cacheKillerVersion":"1","staticServerUrl":"http://static.parastorage.com/","usersScriptsRoot":"http://static.parastorage.com/services/wix-users/2.487.0","biServerUrl":"http://frog.wix.com/","userServerUrl":"http://users.wix.com/","billingServerUrl":"http://premium.wix.com/","mediaRootUrl":"http://static.wixstatic.com/","logServerUrl":"http://frog.wix.com/plebs","monitoringServerUrl":"http://TODO/","usersClientApiUrl":"https://users.wix.com/wix-users","publicStaticBaseUri":"http://static.parastorage.com/services/wix-public/1.160.0","basePublicUrl":"http://www.wix.com/","postLoginUrl":"http://www.wix.com/my-account","postSignUpUrl":"http://www.wix.com/new/account","baseDomain":"wix.com","staticMediaUrl":"http://static.wixstatic.com/media","staticAudioUrl":"http://storage.googleapis.com/static.wixstatic.com/mp3","emailServer":"http://assets.wix.com/common-services/notification/invoke","blobUrl":"http://static.parastorage.com/wix_blob","htmlEditorUrl":"http://editor.wix.com/html","siteMembersUrl":"https://users.wix.com/wix-sm","scriptsLocationMap":{"wixapps":"http://static.parastorage.com/services/wixapps/2.461.11","tpa":"http://static.parastorage.com/services/tpa/2.1039.0","santa-resources":"http://static.parastorage.com/services/santa-resources/1.0.0","bootstrap":"http://static.parastorage.com/services/bootstrap/2.1144.69","ck-editor":"http://static.parastorage.com/services/ck-editor/1.87.2","it":"http://static.parastorage.com/services/experiments/it/1.37.0","skins":"http://static.parastorage.com/services/skins/2.1144.69","core":"http://static.parastorage.com/services/core/2.1144.69","sitemembers":"http://static.parastorage.com/services/sm-js-sdk/1.31.0","automation":"http://static.parastorage.com/services/automation/1.23.0","web":"http://static.parastorage.com/services/web/2.1144.69","ecommerce":"http://static.parastorage.com/services/ecommerce/1.190.0","hotfixes":"http://static.parastorage.com/services/experiments/hotfixes/1.15.0","langs":"http://static.parastorage.com/services/langs/2.553.0","santa-versions":"http://static.parastorage.com/services/santa-versions/1.276.0","ut":"http://static.parastorage.com/services/experiments/ut/1.2.0"},"developerMode":false,"productionMode":true,"staticServerFallbackUrl":"https://sslstatic.wix.com/","staticVideoUrl":"http://storage.googleapis.com/video.wixstatic.com","userFilesUrl":"http://static.parastorage.com/","staticHTMLComponentUrl":"http://cesarebenvenuti.wix.com.usrfiles.com/","secured":false,"ecommerceCheckoutUrl":"https://www.safer-checkout.com/","premiumServerUrl":"https://premium.wix.com/","appRepoUrl":"http://assets.wix.com/wix-lists-ds-webapp","digitalGoodsServerUrl":"http://dgs.wixapps.net/","wixCloudBaseDomain":"cloud.wix.com","publicStaticsUrl":"http://static.parastorage.com/services/wix-public/1.160.0","staticDocsUrl":"http://media.wix.com/ugd"};
        var santaModels = true;
    var rendererModel = {"metaSiteId":"7bd0add2-f290-4849-bc1b-1b794a5367de","siteInfo":{"documentType":"UGC","applicationType":"HtmlWeb","siteId":"e2fac95a-5d11-4f94-9009-f0372e0d1f7f","siteTitleSEO":"cesarebenvenuti"},"clientSpecMap":{"1":{"type":"wixapps","applicationId":1,"appDefinitionId":"e4c4a4fb-673d-493a-9ef1-661fa3823ad7","datastoreId":"138ab93f-9954-17e1-109b-550066a8aaea","packageName":"menu","state":"Initialized","widgets":{"1660c5f3-b183-4e6c-a873-5d6bbd918224":{"widgetId":"1660c5f3-b183-4e6c-a873-5d6bbd918224","defaultHeight":100,"defaultWidth":400}}},"2":{"type":"ecommerce","applicationId":2,"appDefinitionId":"55a88716-958a-4b91-b666-6c1118abdee4","magentoStoreId":"46031311","packageName":"ecommerce","widgets":{"30b4a102-7649-47d9-a60b-bfd89dcca135":{"widgetId":"30b4a102-7649-47d9-a60b-bfd89dcca135","defaultHeight":585,"defaultWidth":960},"adbeffec-c7df-4908-acd0-cdd23155a817":{"widgetId":"adbeffec-c7df-4908-acd0-cdd23155a817","defaultHeight":150,"defaultWidth":500},"f72a3898-8520-4b60-8cd6-24e4e20d483d":{"widgetId":"f72a3898-8520-4b60-8cd6-24e4e20d483d","defaultHeight":600,"defaultWidth":840},"c029b3fd-e8e4-44f1-b1f0-1f83e437d45c":{"widgetId":"c029b3fd-e8e4-44f1-b1f0-1f83e437d45c","defaultHeight":50,"defaultWidth":200},"cd54a28f-e3c9-4522-91c4-15e6dd5bc514":{"widgetId":"cd54a28f-e3c9-4522-91c4-15e6dd5bc514","defaultHeight":50,"defaultWidth":200},"c614fb79-dbec-4ac7-b9b0-419669fadecc":{"widgetId":"c614fb79-dbec-4ac7-b9b0-419669fadecc","defaultHeight":50,"defaultWidth":200},"5fca0e8b-a33c-4c18-b8eb-da50d7f31e4a":{"widgetId":"5fca0e8b-a33c-4c18-b8eb-da50d7f31e4a","defaultHeight":150,"defaultWidth":800},"ae674d74-b30b-47c3-aba0-0bd220e25a69":{"widgetId":"ae674d74-b30b-47c3-aba0-0bd220e25a69","defaultHeight":150,"defaultWidth":220},"fbd55289-7136-4c7d-955c-3088974c1f93":{"widgetId":"fbd55289-7136-4c7d-955c-3088974c1f93","defaultHeight":150,"defaultWidth":220}},"state":"Initialized"},"14":{"type":"sitemembers","applicationId":14,"collectionType":"Open","smcollectionId":"b46dcefb-332c-4062-96eb-aa7fa3e7f93a"},"3":{"type":"appbuilder","applicationId":3,"appDefinitionId":"3d590cbc-4907-4cc4-b0b1-ddf2c5edf297","instanceId":"138ab93f-af1e-baa9-34dd-4825e99e2472","state":"Initialized"}},"premiumFeatures":[],"geo":"BRA","languageCode":"it","previewMode":false,"userId":"71ab603b-bb3d-4d88-bd22-8e6bbae132a6","siteMetaData":{"preloader":{"enabled":false},"adaptiveMobileOn":true,"quickActions":{"socialLinks":[],"colorScheme":"dark","configuration":{"quickActionsMenuEnabled":false,"navigationMenuEnabled":true,"phoneEnabled":false,"emailEnabled":false,"addressEnabled":false,"socialLinksEnabled":false}},"contactInfo":{"companyName":"","phone":"","fax":"","email":"","address":""}},"runningExperiments":{"autogeneratedshapesskins":"new","lang_no":"new","ngcore":"new","sandboxiframeineditor":"new","lang_nl":"new","wixappsgalleries":"new","ecomgalleries":"new","disablehorizontalmenu":"new","lazyprovision":"new","atntfixlists":"new","mobileactionsmenu":"new","exitmobilemode":"new","workaroundsaveddeadcompskin":"new","nougcanalytics":"new","appbuilderdeletetype":"new","sitepagesvalidation":"new","redirectfeature301data":"new","linkfixeroverride":"new","redirectfeature301":"new","lazyprovisiontemp":"new","animation3dfix":"new","landingpagesupport":"new","lang_sv":"new","wixappstranslation":"new","subscribeformsendnewsletter":"new","lesserwidthissue":"new","appbuildertags":"new","sitenavigationrefactor":"new","blogrss":"new","animationnewbehaviors":"new","customsitemenu":"new","blogmanager":"new"}};
    var publicModel = {"domain":"wix.com","externalBaseUrl":"http:\/\/cesarebenvenuti.wix.com\/cesarebenvenuti","unicodeExternalBaseUrl":"http:\/\/cesarebenvenuti.wix.com\/cesarebenvenuti","pageList":{"masterPage":["http:\/\/static.wixstatic.com\/sites\/71ab60_f085ecefcb6025a8a10f2d9f74a2f6be_10.json.z?v=3","http:\/\/staticorigin.wixstatic.com\/sites\/71ab60_f085ecefcb6025a8a10f2d9f74a2f6be_10.json.z?v=3","http:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page\/71ab60_f085ecefcb6025a8a10f2d9f74a2f6be_10.json"],"pages":[{"pageId":"mainPage","title":"HOME","urls":["http:\/\/static.wixstatic.com\/sites\/71ab60_ccb9d75e935056970ddeac77a97cf5fb_12.json.z?v=3","http:\/\/staticorigin.wixstatic.com\/sites\/71ab60_ccb9d75e935056970ddeac77a97cf5fb_12.json.z?v=3","http:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page\/71ab60_ccb9d75e935056970ddeac77a97cf5fb_12.json"]}],"mainPageId":"mainPage"},"timeSincePublish":24760128004,"favicon":""};
    


    var googleAnalytics = ""
    ;

    var googleRemarketing = "";
    var facebookRemarketing = "";

</script>*/?>

<!--
    <meta name="fragment" content="!"/>   -->
 <!-- DATA -->
<!--
<script type="text/javascript">
    var adData = {"topLabel":"<span class=\"smallMusa\">(Wix-Logo) </span>Create a <span class=\"smallLogo\">Wix</span> site!","topContent":"100s of templates<br />No coding needed<br /><span class=\"emphasis spacer\">Start now >></span>","footerLabel":"<div class=\"adFootBox\"><div class=\"siteBanner\" ><div class=\"siteBanner\"><div class=\"wrapper\"><div class=\"bigMusa\">(Wix Logo)</div><div class=\"txt shd\" style=\"color:#fff\">This site was created using </div> <div class=\"txt shd\"><a  href=\"http://www.wix.com?utm_campaign=vir_wixad_live&experiment_id=abtestbanner122400001\" style=\"color:#fff\"> WIX.com. </a></div> <div class=\"txt shd\" style=\"color:#fff\"> Create your own for FREE <span class=\"emphasis\"> >></span></div></div></div></div></div>","adUrl":"http://www.wix.com/lpviral/stun-vrl-lil-seo?utm_campaign=vir_wixad_live&experiment_id=abtestbanner122400001"};
    var mobileAdData = {"footerLabel":"7c3dbd_67131d7bd570478689be752141d4e28a.jpg","adUrl":"http://www.wix.com?utm_campaign=vir_wixad_live&experiment_id=abtestbanner122400001"};
    var usersDomain = "https://users.wix.com/wix-users";
        </script>


                    <script type="text/javascript">
    var santaBase = '';
        var clientSideRender = true;
    </script>
<script src="http://static.parastorage.com/services/third-party/requirejs/2.1.15/require.min.js"></script>
<script src="http://static.parastorage.com/services/santa-versions/1.276.0/main-r.js"></script>
-->

<link rel="stylesheet" href="/wp-content/themes/WixLayout/css/latin.css" />

</head>

<body <?php #body_class(); ?>>

<noscript><div style="background:#CCC;border-radius:7%;position:absolute;right:0;top:0"><a href="#menu">Menu</a></div></noscript>

<!--<div id="SITE_CONTAINER">-->

<!--<div style="float:left">-->
<?php
#wp_nav_menu()
?>
<!--</div>-->

<!--<div class="facebook">
    <a href="http://facebook.com/gicasartes" border="0" target="_blank">
	<img src="/wp-content/themes/gicasartes/images/facebook_transparent.png" width="37" height="37" />
    </a>
</div>

<br style="clear:both" />-->

<?php 
# var_dump($defaults);die;
?>

<!--
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>-->

	<?php /*
	<!--
	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div>--><!-- .sidebar --> */ ?>
	
	<!--<div id="content" class="site-content">-->

