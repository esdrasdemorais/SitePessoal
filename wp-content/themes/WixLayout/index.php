<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package CesareBenvenuti
 * @subpackage cesarebenvenuti
 * @since Cesare Benvenuti 1.0
 */
if(!session_start()) session_start();

$_SESSION['k'] = (string) hash('sha256', rand());;
$_SESSION['k'] = substr($_SESSION['k'], 0, strlen($_SESSION['k']) - 60);

get_header();

$menuItems = curlMenuItems();
?>
 
<!--<div data-reactid=".0">
<div data-reactid=".0.0">-->

<link data-reactid=".0.0.0" href="/wp-content/themes/WixLayout/css/mobileIEFix.css" type="text/css" rel="stylesheet" />

<!--HEADER-->
<style type="text/css">
div#Cntnr0-kt2 {
    height: 17.7%;
    left: 0;
    position: fixed;
    top: 0;
    width: 17%;
    margin: 7px 7px 0
}
</style>
<!--/HEADER-->

<style type="text/css">
div#dropDown {
    background: #777;
    float: right;
    width: 67px;
    height: 57px;
    border-radius: 7px;
    margin: 7px 7px 0;
    color: #FFF;
    padding: 3px 7px;
    cursor: pointer;
    _cursor: hand;
}
div#dropDown span { 
  /*background:#000; line-height: 1.7px; margin: 0; width: 37px; height: 1.7px; padding:0; clear: both:*/
  /*background: #000;*/
  line-height: 2.7px;
  margin: 0 auto;
  width: 57px;
  height: 2.7px;
  padding: 6px 0;
  clear: both;
  float: left;
  cursor: pointer;
  _cursor: hand;
}
/*div#dropDown div {
    background: #777;
    color: #FFF;
    text-align: center;
    width: 100%;
    height: 47px;
}*/
div#dropDown div.s2itemsContainer,
div#dropDown div.s2moreButton {
    background: rgb(58, 150, 216) none repeat scroll 0 0;
    height: 30px;
    line-height: 30px;
    z-index: 7777;
    max-width:300px;
}
div#dropDown div a, 
div#dropDown div a:link, 
div#dropDown div a:visited, 
div#dropDown div a:active {
    text-decoration: none;
}
div#dropDown div a:hover {
    text-decoration: underline;
}
</style>

<script type="text/javascript">
function newNavMenu() {
    var divNavMenu = document.createElement("div");
    divNavMenu.style.display = 'block';
    divNavMenu.style.width = '100%';
    divNavMenu.style.font = '1.07em Anton bold';
    divNavMenu.id = 'navMenu';
    document.getElementById('navBar').appendChild(divNavMenu);
    
    var items = "";
    <?php
    $items = "";
    foreach($menuItems['items'] as $key => $value) {
        $items .= "<a alt=\"".$value['alt']."\" title=\"".$value['alt']."\" href=\"".$value['url']."\">".$value['link']."</a>";
	if (count($menuItems['items']) > ($key + 1)) {
		$items .= '&nbsp;-&nbsp';
	} 
    }
    echo 'items = \'' . $items . '\';';//Print var to JS
    ?>

    document.getElementById('navMenu').innerHTML = items;
}
function showResponsiveMenu() {
	//Appended by Default in navBar with Visibility
	if (!document.getElementById('navMenu')) {
    	    newNavMenu();
	}
	
	//@Melhorar?Positivo, Symbian Nokia W200 script e noscript IE6 to mobile
	if(jQuery(window).width() < 533) {
		//document.getElementById('navMenu').style = 'display:none';
		jQuery('#navMenu').remove();
		document.getElementById('dropDown').style.display = 'block';
	  	document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.clear = 'both';
	  	document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.margin = '0 auto';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.width = '100%';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8imgimage').style.width = '100%';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8link').style.width = '100%';
		document.getElementById('WRchTxt0-dzj').style.width = '100%';
		changeDropDown();
	} else {
		//document.getElementById('navMenu').style = 'display:block';
		/*if (!document.getElementById('navMenu') { 
		   newNavMenu();
		}*/
		document.getElementById('dropDown').style = 'display:none';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.clear = 'none';
	  	document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.margin = '0';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8').style.width = '48.4%';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8imgimage').style.width = '100%';
		document.getElementById('WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8link').style.width = '91.97%';
		document.getElementById('WRchTxt0-dzj').style.width = '48.77%';

		changeDropDown();
	}
}
jQuery(window).resize(function() {
	showResponsiveMenu();
});
jQuery(document).ready(function() {
	showResponsiveMenu();
});
</script>


<style type="text/css">
div#programacao-musical {
float:left;
background:green;
max-width:770px
}
</style>

<style type="text/css">
.color_13 a:hover { text-decoration: underline; }
</style>

<style type="text/css">
.color_top a:link, .color_top a:active, .color_top a:visited, .color_top a { color: rgb(77, 77, 77) }
.color_top a:hover { text-decoration: underline; }
</style>

<style data-reactid=".0.0.$font0" type="text/css">/*.font_0 {font:normal normal normal 92px/1.4em Anton,sans-serif ;color:#4A4A4A;}*/</style>
<style data-reactid=".0.0.$font1" type="text/css">.font_1 {font:normal normal normal 12px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#FFFFFF;}</style>
<style data-reactid=".0.0.$font2" type="text/css">.font_2 {font:normal normal normal 22px/1.4em Anton,sans-serif ;color:#4A4A4A;}</style>
<style data-reactid=".0.0.$font3" type="text/css">.font_3 {font:normal normal normal 61px/1.4em Anton,sans-serif ;color:#4A4A4A;}</style>
<style data-reactid=".0.0.$font4" type="text/css">.font_4 {font:normal normal normal 27px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#4A4A4A;}</style>
<style data-reactid=".0.0.$font5" type="text/css">.font_5 {font:normal normal normal 23px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#4A4A4A;}</style>
<style data-reactid=".0.0.$font6" type="text/css">.font_6 {font:normal normal normal 19px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#4A4A4A;}</style>
<style data-reactid=".0.0.$font7" type="text/css">.font_7 {font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#2D2D2D;}</style>
<style data-reactid=".0.0.$font8" type="text/css">
.font_8 {font:normal normal 1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#2D2D2D;}
</style>
<style data-reactid=".0.0.$font9" type="text/css">.font_9 {font:normal normal normal 12px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#2D2D2D;}</style>
<style data-reactid=".0.0.$font10" type="text/css">.font_10 {font:normal normal normal 10px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;color:#2D2D2D;}</style>
<style data-reactid=".0.0.$color" type="text/css">.color_0 {color:#FFFFFF;}
.backcolor_0 {background-color:#FFFFFF;}
.color_1 {color:#FFFFFF;}
.backcolor_1 {background-color:#FFFFFF;}
.color_2 {color:#000000;}
.backcolor_2 {background-color:#000000;}
.color_3 {color:#ED1C24;}
.backcolor_3 {background-color:#ED1C24;}
.color_4 {color:#0088CB;}
.backcolor_4 {background-color:#0088CB;}
.color_5 {color:#FFCB05;}
.backcolor_5 {background-color:#FFCB05;}
.color_6 {color:#727272;}
.backcolor_6 {background-color:#727272;}
.color_7 {color:#B0B0B0;}
.backcolor_7 {background-color:#B0B0B0;}
.color_8 {color:#FFFFFF;}
.backcolor_8 {background-color:#FFFFFF;}
.color_9 {color:#727272;}
.backcolor_9 {background-color:#727272;}
.color_10 {color:#B0B0B0;}
.backcolor_10 {background-color:#B0B0B0;}
.color_11 {color:#FFFFFF;}
.backcolor_11 {background-color:#FFFFFF;}
.color_12 {color:#E4E4E4;}
.backcolor_12 {background-color:#E4E4E4;}
.color_13 {color:#767676;}
.backcolor_13 {background-color:#767676;}
.color_14 {color:#6F6F73;text-shadow:#000 -1px -1px 0px, #000 -1px 1px 0px, #000 1px 1px 0px, #000 1px -1px 0px;}
.backcolor_14 {background-color:#4A4A4A;}
.color_15 {color:#2D2D2D;}
.backcolor_15 {background-color:#2D2D2D;}
.color_16 {color:#B7D9F2;}
.backcolor_16 {background-color:#B7D9F2;}
.color_17 {color:#91C2E5;}
.backcolor_17 {background-color:#91C2E5;}
.color_18 {color:#3A96D8;}
.backcolor_18 {background-color:#3A96D8;}
.color_19 {color:#276490;}
.backcolor_19 {background-color:#276490;}
.color_20 {color:#133248;}
.backcolor_20 {background-color:#133248;}
.color_21 {color:#A6DECC;}
.backcolor_21 {background-color:#A6DECC;}
.color_22 {color:#76BEA7;}
.backcolor_22 {background-color:#76BEA7;}
.color_23 {color:#259E78;}
.backcolor_23 {background-color:#259E78;}
.color_24 {color:#196950;}
.backcolor_24 {background-color:#196950;}
.color_25 {color:#0C3428;}
.backcolor_25 {background-color:#0C3428;}
.color_26 {color:#FCC6B5;}
.backcolor_26 {background-color:#FCC6B5;}
.color_27 {color:#F9A990;}
.backcolor_27 {background-color:#F9A990;}
.color_28 {color:#F75827;}
.backcolor_28 {background-color:#F75827;}
.color_29 {color:#A43A1A;}
.backcolor_29 {background-color:#A43A1A;}
.color_30 {color:#521D0D;}
.backcolor_30 {background-color:#521D0D;}
.color_31 {color:#FFF2C0;}
.backcolor_31 {background-color:#FFF2C0;}
.color_32 {color:#FFECA1;}
.backcolor_32 {background-color:#FFECA1;}
.color_33 {color:#FFD944;}
.backcolor_33 {background-color:#FFD944;}
.color_34 {color:#A9912D;}
.backcolor_34 {background-color:#A9912D;}
.color_35 {color:#544816;}
.backcolor_35 {background-color:#544816;}</style>

<style data-reactid=".0.0.$s0" type="text/css">.s0screenWidthBackground {background:#FF0}
.s0[data-state~="mobileView"] {position:absolute !important;}
.s0[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:100;}
.s0[data-state~="fixedPosition"].s0_footer {top:auto;bottom:0;}
.s0bg {background:#FF0}
.s0inlineContent {position:fixed;top:0;right:0;background:#000;width:100%}
.s0centeredContent {background:#FF0}</style>

<style data-reactid=".0.0.$s1" type="text/css">.s1 {-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg);}
.s1bg {position:absolute;top:0;right:0;bottom:0;left:0;bottom:315px;background:rgba(58, 150, 216, 1);min-height:50%;}
.s1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
.s1 i {position:absolute;top:50%;right:0;bottom:0;left:0;overflow:hidden;}
.s1[data-state~="mobileView"] i {margin-top:-1px;}
.s1 b {position:absolute;display:block;top:100%;margin-top:-500px;overflow:hidden;bottom:0;}
.s1_l {left:0;right:50%;}
.s1_l:after {left:0;border-width:0 500px 315px 500px;border-color:rgba(58, 150, 216, 1) transparent transparent rgba(58, 150, 216, 1);}
.s1_r {right:0;left:50%;}
.s1_r:before {right:0;border-width:0 500px 315px 0;border-color:transparent rgba(58, 150, 216, 1) transparent rgba(58, 150, 216, 1);}
.s1_l:after,.s1_r:before {position:absolute;bottom:0;content:"";border-style:solid;overflow:hidden;}</style>

<style data-reactid=".0.0.$s2" type="text/css">.s2itemsContainer {width:-webkit-calc(100% - 0px);width:calc(100% - 0px);white-space:nowrap;position:relative;overflow:hidden;}
.s2moreContainer {overflow:visible;display:inherit;white-space:nowrap;width:auto;background-color:rgba(255, 255, 255, 1);border-radius:0;  }
.s2dropWrapper {z-index:99999;display:block;opacity:1;visibility:hidden;position:absolute;margin-top:7px;}
.s2dropWrapper[data-dropMode="dropUp"] {margin-top:0;margin-bottom:7px;}
.s2repeaterButton {width:100%;height:100%;position:relative;box-sizing:border-box;display:inline-block;cursor:pointer;font:normal normal normal 12px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif;cursor:pointer !important;_cursor:hand !important}
.s2repeaterButton[data-state~="header"] a,.s2repeaterButton[data-state~="header"] div {cursor:default !important;}
.s2repeaterButton_gapper {padding:0 0px;}
.s2repeaterButtonlabel {display:inline-block;padding:0 10px;color:#767676;transition: color 0.4s ease 0s;}
.s2repeaterButton[data-state~="drop"] {width:100%;display:block;}
.s2repeaterButton[data-state~="drop"] .s2repeaterButtonlabel {padding:0 .5em;}
.s2repeaterButton[data-state~="over"] .s2repeaterButtonlabel {color:#F75827;transition: color 0.4s ease 0s;}
.s2repeaterButton[data-state~="selected"] .s2repeaterButtonlabel {color:#2D2D2D;transition: color 0.4s ease 0s;}</style>

<style data-reactid=".0.0.$s3" type="text/css">.s3_zoomedin {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
.s3_zoomedout {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
.s3link {display:block;  border-radius:50%;border:0px solid rgba(228, 228, 228, 1);background-color:rgba(228, 228, 228, 1);overflow:hidden;}
.s3img {border-radius:50%;overflow:hidden;}
.s3imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s3img[data-state~="loading"] .s3imgimage {background:url("//static.wix.com/services/skins/2.1113.24/images/wysiwyg/core/themes/editor_web//gif_preloader.gif") center no-repeat;}</style>

<style data-reactid=".0.0.$s4" type="text/css">.s4screenWidthBackground {background:#FF0}
.s4[data-state~="mobileView"] {position:absolute !important;}
.s4[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:100;}
.s4[data-state~="fixedPosition"].s4_footer {top:auto;bottom:0;}
.s4_bg {background-color:rgba(58, 150, 216, 1);  border-top:0px solid rgba(228, 228, 228, 1);border-bottom:0px solid rgba(228, 228, 228, 1);}
.s4[data-state~="mobileView"] .s4bg {left:10px;right:10px;background-color: rgb(58, 150, 216);}
.s4bg {background-color:rgba(58, 150, 216, 1);border-radius:0;}
.s4inlineContent {float:left;max-width:770px;background:rgb(58, 150, 216);padding: 5px 10px;}
.s4centeredContent {background:#FF0}</style>

<style data-reactid=".0.0.$s5" type="text/css">.s5 {word-wrap:break-word;}
.s5 li {color:inherit;font-size:inherit;font-family:inherit;font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
.s5 ol,.s5 ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
.s5 ul {list-style-type:disc;}
.s5 ol {list-style-type:decimal;}
.s5 ul ul,.s5 ol ul {list-style-type:circle;}
.s5 ul ul ul,.s5 ol ul ul {list-style-type:square;}
.s5 ul ol ul,.s5 ol ol ul {list-style-type:square;}
.s5 ul[dir="rtl"],.s5 ol[dir="rtl"] {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
.s5 ul[dir="rtl"] ul,.s5 ul[dir="rtl"] ol,.s5 ol[dir="rtl"] ul,.s5 ol[dir="rtl"] ol {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
.s5 p {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h1 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h2 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h3 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h4 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h5 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 h6 {margin:0;line-height:normal;letter-spacing:normal;}
.s5 a {color:inherit;}</style>

<!--Contact CSS-->
<style data-reactid=".0.0.$s6" type="text/css">.s6wrapper {min-width:180px;max-width:770px;min-height:180px;max-height:1024px;float:left;}
.s6 li {/*box-sizing:border-box;*/float:left;list-style: outside none none;}
.s6 ul {box-sizing:border-box;float:left;max-width:740px;}
.s6_foot {min-height:50px;float:left;}
.s6 span {color:#4A4A4A;font:normal 14px 'Helvetica Neue', Helvetica, sans-serif;position:absolute;top:0;}
.s6 span.s6_success {color:#BADA55;}
.s6 span.s6_error {color:#8B0000;}
.s6 button,.s6 input,.s6 textarea {box-sizing:border-box;border-radius:5px;box-shadow:0 1px 4px rgba(0, 0, 0, 0.6);float:left}
.s6 input,.s6 textarea {
    background-color:rgba(255, 255, 255, 1);
    font:normal normal normal 1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;
    -webkit-appearance:none;
    -moz-appearance:none;
    border:0px solid rgba(255, 255, 255, 1);
    color:#4A4A4A;margin:0 0 5px;
    padding:5px;
    max-width:470px;
    margin: 0 0 5px;
    max-width: 700px;
    min-width: 247px;
    width:100%;
}
.s6 input.s6_error,.s6 textarea.s6_error {
    border:1px solid #8B0000;
    color:#8B0000;
    font:normal normal normal 1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;
}
.s6 textarea {min-height:147px;resize:initial;}
.s6 button {border:0;color:#FFFFFF;cursor:pointer;background-color:rgba(74, 74, 74, 1);font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;  padding:5px 5px 5px 25.7px;float:left;top:0;background-image: url("/wp-content/themes/WixLayout/images/41d000_2df96e615433223dc65bc6c965805e92.png_srb_p_24_16_75_22_0.50_1.20_0.00_png_srb.png");background-position: left center;background-repeat: no-repeat;}
.s6[data-state~="desktop"] li {width:50%;}
.s6[data-state~="desktop"].s6[data-state~="left"] li.s6_left {margin:0;padding:0;float:left}
.s6[data-state~="desktop"].s6[data-state~="left"] li.s6_right {bottom:0;padding:0 0 5px 5px;float:left;margin: 0 0px 0 0;}
.s6[data-state~="desktop"].s6[data-state~="right"] li.s6_left {float:left;max-width:50%;}
.s6[data-state~="desktop"].s6[data-state~="right"] li.s6_right {margin: 0 0 0 2px;padding:0 5px 5px 0;float:left;top:0;}
.s6[data-state~="mobile"] li {display:block;width:100%;float:left}
.s6[data-state~="mobile"] input,.s6[data-state~="mobile"] textarea {font-size:16px;}
.s6[data-state~="mobile"] input::-webkit-input-placeholder,.s6[data-state~="mobile"] textarea::-webkit-input-placeholder {line-height:45px;font-size:16px;}
.s6[data-state~="mobile"] input::-moz-placeholder,.s6[data-state~="mobile"] textarea::-moz-placeholder {line-height:45px;font-size:16px;}
.s6[data-state~="mobile"] input:-ms-input-placeholder,.s6[data-state~="mobile"] textarea:-ms-input-placeholder {line-height:45px;font-size:16px;}
.s6[data-state~="mobile"] input::placeholder,.s6[data-state~="mobile"] textarea::placeholder {line-height:45px;font-size:16px;}
.s6[data-state~="mobile"] input {height:45px;line-height:45px;margin-bottom:15px;}
.s6[data-state~="mobile"] textarea {height:130px;}
.s6 input::-webkit-input-placeholder,.s6 textarea::-webkit-input-placeholder {color:#A9A9A9;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input::-moz-placeholder,.s6 textarea::-moz-placeholder {color:#A9A9A9;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input:-ms-input-placeholder,.s6 textarea:-ms-input-placeholder {color:#A9A9A9;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input::placeholder,.s6 textarea::placeholder {color:#A9A9A9;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input::-webkit-input-placeholder.s6_error,.s6 textarea::-webkit-input-placeholder.s6_error {color:#8B0000;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input::-moz-placeholder.s6_error,.s6 textarea::-moz-placeholder.s6_error {color:#8B0000;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input:-ms-input-placeholder.s6_error,.s6 textarea:-ms-input-placeholder.s6_error {color:#8B0000;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6 input::placeholder.s6_error,.s6 textarea::placeholder.s6_error {color:#8B0000;font:normal normal normal 15px/1.4em Arial,'ｍｓ ｐゴシック','ms pgothic','돋움',dotum,helvetica,sans-serif ;}
.s6[data-state~="right"] {direction:rtl;text-align:right;}
.s6[data-state~="right"] button {left:0;}
.s6[data-state~="right"] span {left:100px;right:0;}
.s6[data-state~="left"] {direction:ltr;text-align:left;}
.s6[data-state~="left"] button {right:0;}
.s6[data-state~="left"] span {left:0;right:100px;}
.s6_hidden {display:none !important;}
</style>
<!--/Contact CSS-->

<style data-reactid=".0.0.$s7" type="text/css">.s7 {-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg);}
.s7bg {position:absolute;top:0;right:0;bottom:0;left:0;bottom:315px;background:rgba(228, 228, 228, 1);min-height:50%;}
.s7inlineContent {float:left;background:#FF0;}
.s7 i {position:absolute;top:50%;right:0;bottom:0;left:0;overflow:hidden;}
.s7[data-state~="mobileView"] i {margin-top:-1px;}
.s7 b {position:absolute;display:block;top:100%;margin-top:-500px;overflow:hidden;bottom:0;}
.s7_l {left:0;right:50%;}
.s7_l:after {left:0;border-width:0 500px 315px 500px;border-color:rgba(228, 228, 228, 1) transparent transparent rgba(228, 228, 228, 1);}
.s7_r {right:0;left:50%;}
.s7_r:before {right:0;border-width:0 500px 315px 0;border-color:transparent rgba(228, 228, 228, 1) transparent rgba(228, 228, 228, 1);}
.s7_l:after,.s7_r:before {position:absolute;bottom:0;content:"";border-style:solid;overflow:hidden;}</style>

<style data-reactid=".0.0.$s8" type="text/css">.s8screenWidthBackground {background:#FF0}
.s8[data-state~="mobileView"] {position:absolute !important;}
.s8[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:100;}
.s8[data-state~="fixedPosition"].s8_footer {top:auto;bottom:0;}
.s8bg {float:left;background:#FF0}
.s8inlineContent {float:left; height: auto; width: auto}
.s8centeredContent {background:#FF0}</style>

<style data-reactid=".0.0.$s9" type="text/css">.s9 {height:auto;width:auto;}n
.s9overlay {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(0, 0, 0, 0.664);}
.s9inlineContent {background:green;float:left;}</style>

<style data-reactid=".0.0.$s10" type="text/css">.s10bg {float:left;background:gray}
.s10[data-state~="mobileView"] .s10bg {left:10px;right:10px;}
.s10inlineContent {background:#f7f7f7;float:left;}</style>

<style data-reactid=".0.0.$s11" type="text/css">.s11bg {border:3px solid rgba(58, 150, 216, 1);background-color:rgba(58, 150, 216, 1);}
.s11inlineContent,.s11bg {height:117px;position:static;max-width:117.77px;border-radius:50%;margin-top:17px}</style>
<style data-reactid=".0.0.$s12" type="text/css">.s12screenWidthBackground {float:left;background:gray}
.s12[data-state~="mobileView"] {position:absolute !important;}
.s12[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:100;}
.s12[data-state~="fixedPosition"].s12_footer {top:auto;bottom:0;}
.s12_bg {float:left;background-color:rgba(58, 150, 216, 1);  border-top:0px solid rgba(58, 150, 216, 1);border-bottom:0px solid rgba(58, 150, 216, 1);}
.s12[data-state~="mobileView"] .s12bg {left:10px;right:10px;}
.s12bg {float:left;background-color:rgba(58, 150, 216, 1);border-radius:0;}
.s12inlineContent {float:left; background:#FFF;}
.s12centeredContent {float:left; background: green;}</style>

<style data-reactid=".0.0.$s13" type="text/css">.s13_zoomedin {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
.s13_zoomedout {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
.s13link {display:block;overflow:hidden;}
.s13imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s13img[data-state~="loading"] .s13imgimage {background:url("//static.wix.com/services/skins/2.1113.24/images/wysiwyg/core/themes/editor_web//gif_preloader.gif") center no-repeat;}
</style>

<style data-reactid=".0.0.$s14" type="text/css">
.s14bg {border:0px solid rgba(58, 150, 216, 1);background-color:rgba(118, 118, 118, 1);}
.s14inlineContent,.s14bg {position:static;border-radius:50%;}
</style>

<style data-reactid=".0.0.$s15" type="text/css">
.s15itemsContainer {float:left;width:100%;height:100%;white-space:nowrap;}
.s15itemsContainer &gt; div:last-child {margin:0 !important;}
.s15[data-state~="mobileView"] .s15itemsContainer {float:left;width:100%;height:100%;white-space:normal;}
.s15imageItemlink {cursor:pointer;}
.s15imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s15imageItemimage[data-state~="loading"] .s15imageItemimageimage {background:url(//static.wix.com/services/skins/2.1113.24/images/wysiwyg/core/themes/editor_web/gif_preloader.gif) center no-repeat;}
</style>

<style data-reactid=".0.0.$s16" type="text/css">
.s16bg {float:left;background-color:rgba(255, 255, 255, 1);}
.s16inlineContent {float:left;background:#FFF}
</style>

<style data-reactid=".0.0.$s17" type="text/css">.s17 {-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg);}
.s17bg {position:absolute;top:0;right:0;bottom:0;left:0;bottom:315px;background:rgba(255, 255, 255, 1);min-height:50%;}
.s17inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
.s17 i {position:absolute;top:50%;right:0;bottom:0;left:0;overflow:hidden;}
.s17[data-state~="mobileView"] i {margin-top:-1px;}
.s17 b {position:absolute;display:block;top:100%;margin-top:-500px;overflow:hidden;bottom:0;}
.s17_l {left:0;right:50%;}
.s17_l:after {left:0;border-width:0 500px 315px 500px;border-color:rgba(255, 255, 255, 1) transparent transparent rgba(255, 255, 255, 1);}
.s17_r {right:0;left:50%;}
.s17_r:before {right:0;border-width:0 500px 315px 0;border-color:transparent rgba(255, 255, 255, 1) transparent rgba(255, 255, 255, 1);}
.s17_l:after,.s17_r:before {position:absolute;bottom:0;content:"";border-style:solid;overflow:hidden;}</style><style data-reactid=".0.0.$s18" type="text/css">.s18_zoomedin {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
.s18_zoomedout {cursor:url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
.s18link {display:block;border-radius:0;    background-color:rgba(74, 74, 74, 1);border:2px solid rgba(74, 74, 74, 1);overflow:hidden;height:100%;}
.s18img {overflow:hidden;border-radius:-webkit-calc(0px - 2px);border-radius:calc(0px - 2px);}
.s18imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s18img[data-state~="loading"] .s18imgimage {background:url("//static.wix.com/services/skins/2.1113.24/images/wysiwyg/core/themes/editor_web//gif_preloader.gif") center no-repeat;}</style>
<style data-reactid=".0.0.$s19" type="text/css">.s19screenWidthBackground {float:left;margin:0;padding:0}
.s19[data-state~="mobileView"] {position:absolute !important;}
.s19[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:100;}
.s19[data-state~="fixedPosition"].s19_footer {top:auto;bottom:0;}
.s19_bg {float:left;margin:0;padding:0;background-color:rgba(228, 228, 228, 1);  border-top:0px solid rgba(228, 228, 228, 1);border-bottom:0px solid rgba(228, 228, 228, 1);}
.s19[data-state~="mobileView"] .s19bg {left:10px;right:10px;}
.s19bg {float:left;top:0px;margin:0;padding:0;background-color:rgba(228, 228, 228, 1);border-radius:0;}
.s19inlineContent {float:left;margin:0;padding:0}
.s19centeredContent {float:left;margin:0;padding:0}</style>

<style data-reactid=".0.0.$s20" type="text/css">.s20 {border-bottom:1px solid rgba(118, 118, 118, 1);max-height:500px !important;min-height:150px !important;}</style>

<style data-reactid=".0.0.$deadComp" type="text/css">.deadComp {background:transparent;}</style>
<style data-reactid=".0.0.$siteBackground" type="text/css">.siteBackground {width:100%;}
.siteBackgroundbgBeforeTransition {position:absolute;top:0;}
.siteBackgroundbgAfterTransition {position:absolute;top:0;}</style>

<style data-reactid=".0.0.$loginDialog" type="text/css">.loginDialog {position:fixed;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;}
.loginDialogblockingLayer {background-color:rgba(85, 85, 85, 0.75);position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;}
.loginDialogdialog {background-color:rgba(170, 170, 170, 0.7);width:455px;position:fixed;padding:20px;}
.loginDialog_wrapper {background-color:rgba(255, 255, 255, 1);padding:45px 40px 0 40px;}
.loginDialogxButton {position:absolute;top:-14px;right:-14px;cursor:pointer;background:transparent url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;height:30px;width:30px;}
.loginDialogxButton:hover {background-position:right -80px;}
.loginDialogheader {padding-bottom:25px;line-height:30px;}
.loginDialogfavIcon {float:left;margin:7px 7px 0 0;width:16px;height:16px;}
.loginDialogtitle {font-size:20px;font-weight:bold;color:#555555;}
.loginDialog[data-state~="mobile"] {position:absolute;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;top:0;}
.loginDialog[data-state~="mobile"] .loginDialogheader {padding-bottom:10px;line-height:30px;}
.loginDialog[data-state~="mobile"] .loginDialogfavIcon {display:none;}
.loginDialog[data-state~="mobile"] .loginDialogtitle {font-size:14px;}
.loginDialog[data-state~="mobile"] .loginDialogdialog {width:260px;padding:10px;position:absolute;}
.loginDialog[data-state~="mobile"] .loginDialog_footer {margin-top:0;padding-bottom:10px;}
.loginDialog[data-state~="mobile"] .loginDialogcancel {font-size:14px;line-height:30px;}
.loginDialog[data-state~="mobile"] .loginDialog_wrapper {padding:14px 12px 0 12px;}
.loginDialog[data-state~="mobile"] .loginDialogsubmitButton {height:30px;width:100px;font-size:14px;}
.loginDialog_forgot {text-align:left;font-size:12px;}
.loginDialog_forgot a {color:#0198ff;border-bottom:1px solid #0198ff;}
.loginDialog_forgot a:hover {color:#0044ff;border-bottom:1px solid #0044ff;}
.loginDialog_error {font-size:12px;color:#d74401;text-align:right;}
.loginDialog_footer {width:100%;margin-top:27px;padding-bottom:40px;}
.loginDialogcancel {color:#9C9C9C;font-size:18px;text-decoration:underline;line-height:36px;}
.loginDialogcancel:hover {color:#9c3c3c;}
.loginDialogpasswordInput label {font-size:14px;}
.loginDialogpasswordInput label[data-type="password"] {font-size:14px;line-height:30px;height:30px;}
.loginDialogsubmitButton {float:right;cursor:pointer;border:solid 2px #0064a8;height:36px;width:143px;background:transparent url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;color:#ffffff;font-size:24px;font-weight:bold;box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);}
.loginDialogsubmitButton:hover {background-position:right -352px;border-color:#004286;}
.loginDialog[data-state="normal"] .loginDialogerror {display:none;}
.loginDialog[data-state="error"] .loginDialogerror {display:block;font-size:12px;color:#d74401;text-align:right;}
.loginDialog[data-state="error"] .loginDialogpasswordInput {border-color:#d74401;}
.loginDialogpasswordInput {font-size:1em;}
.loginDialogpasswordInput label {float:none;font-size:17px;line-height:25px;color:#585858;}
.loginDialogpasswordInput[data-state~="mobile"] label {float:none;font-size:14px;line-height:20px;color:#585858;}
.loginDialogpasswordInputinput {padding:0 15px;width:100%;height:42px;font-size:19px;line-height:42px;color:#0198ff;margin:0 -3px;background:transparent url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:30px;font-size:14px;line-height:30px;color:#0198ff;margin:0 -3px;background:transparent url(http://static.parastorage.com/services/skins/2.1187.0/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
.loginDialogpasswordInputinput[data-type="password"] {font-size:38px;}
.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {font-size:14px;}
.loginDialogpasswordInputerrorMessage {display:block;font-size:12px;color:#d74401;text-align:right;height:15px;}
.loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {visibility:hidden;}
.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {visibility:visible;}
.loginDialogpasswordInput[data-state~="invalid"] input {border-color:#d74401;}
.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {border-color:red;}</style>

<style data-reactid=".0.0.$testStyle" type="text/css">.testStyles {position:absolute; display: none; z-index: 8}</style>

<!--<div data-reactid=".0.0.13" class="testStyles"></div><link data-reactid=".0.0.$http=2//static=1parastorage=1com/services/santa/1=1550=130/static/css/user-site-fonts/latin=1css" href="http://static.parastorage.com/services/santa/1.550.30/static/css/user-site-fonts/latin.css" type="text/css" rel="stylesheet"><link data-reactid=".0.0.$gf_0" href="//fonts.googleapis.com/css?family=Anton:n,b,i,bi|&amp;subset=latin" type="text/css" rel="stylesheet"><div data-reactid=".0.0.16">

<div data-reactid=".0.0.16.$arial" style="position: fixed; overflow: hidden; font-size: 120px; left: -2000px; visibility: hidden; width: 1125px; height: 143px;">
<div data-reactid=".0.0.16.$arial.0" style="position: relative; white-space: nowrap; font-family: arial,serif;">
<div data-reactid=".0.0.16.$arial.0.0" style="position:absolute;width:100%;height:100%;overflow:hidden;">
<div data-reactid=".0.0.16.$arial.0.0.0" style="width: 1127px; height: 145px;"></div>
</div>

<span data-reactid=".0.0.16.$arial.0.1">@#$%%^&amp;*~IAO</span></div></div></div></div>
<div id="SITE_BACKGROUND" class="siteBackground" data-reactid=".0.$desktop_background">
<div style="background-attachment: fixed; background-color: rgb(255, 255, 255); width: 100%; position: fixed; top: 0px; height: 100%;" id="SITE_BACKGROUND_previous_mainPage" class="siteBackgroundprevious" data-reactid=".0.$desktop_background.0"></div>
<div id="SITE_BACKGROUND_current_mainPage" style="background-image:;background-attachment:fixed;background-color:#FFFFFF;width:100%;position:fixed;top:0;height:100%;" class="siteBackgroundcurrent" data-reactid=".0.$desktop_background.1"></div></div>-->

<div data-reactid=".0.$SITE_ROOT" style="min-height:500px" id="SITE_ROOT" class="SITE_ROOT">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot" style="max-width: 770px;" id="SITE_STRUCTURE">



<!--HEADER-->
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER" id="SITE_HEADER" data-state="" class="s0" style="max-width: 770px; margin: 0; padding: 0; height: 155px;">

 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.0" class="s0screenWidthBackground" id="SITE_HEADERscreenWidthBackground" style="width: 1665px; left: -343px;"></div>

 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1" class="s0centeredContent" id="SITE_HEADERcenteredContent">

  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.0" class="s0bg" id="SITE_HEADERbg"></div>

  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1" class="s0inlineContent" id="SITE_HEADERinlineContent">
    <!--HeaderIcon-->
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2" id="Cntnr0-kt2" class="s1">
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2.0" class="s1bg" id="Cntnr0-kt2bg"></div>
     <i data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2.1"><b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2.1.0" class="s1_l"></b><b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2.1.1" class="s1_r"></b></i>
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$Cntnr0-kt2.2" class="s1inlineContent" id="Cntnr0-kt2inlineContent"></div>
    </div>
    <!--/HeaderIcon-->

    <script type="text/javascript">
    function changeDropDown() {
       if (document.getElementById('dropDown').style.display == 'none') {
	   return;
       }
       var characterIcon =  '<span style="text-align:center">_______</span><span style="text-align:center">_______</span><span style="text-align:center">_______</span>';
       var dropDown = document.getElementById('dropDown');
       var container = document.getElementById('DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46itemsContainer');
       
       if (container.style.display == 'inline-block' || dropDown.style.display == 'none') {
          container.style.display = 'none';
	  jQuery('#dropDown > h3').remove();
	  dropDown.innerHTML = characterIcon;
       } else {
	  container.style.display = 'inline-block';
	  characterIcon = '<h3>&nbsp;</h3><h3 style="text-align:center;margin:0;padding:0">\\&nbsp;&nbsp;/</h3><h3 style="text-align:center;margin:0;padding:0">/&nbsp;&nbsp;\\</h3>';
	  jQuery('#dropDown > span').remove();
	  dropDown.innerHTML = characterIcon;
       }
    }
    jQuery(document).ready(function() {
        changeDropDown();
    });
    </script>

    <!--DropDown-->
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46"
     data-state="left notMobile" class="s2 DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46" id="dropDown" data-dropmode="dropDown"
     onclick="changeDropDown()">

     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.2" class="s2dropWrapper" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46dropWrapper" data-dropalign="left" data-drophposition="" style="visibility: hidden; left: 0px; right: auto; bottom: auto;">

      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.2.0" class="s2moreContainer" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46moreContainer" style="visibility: hidden; left: 0px; right: auto;" data-listposition="lonely">
      </div>

     </div>

    </div>
    <!--/DropDown-->
    
    <!--DropDown Container-->
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0"
      class="s2itemsContainer" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46itemsContainer"
      style="height:47px;display:none;text-align:left;overflow:visible;margin:0;padding:0;margin-top:18px;background: rgb(58, 150, 216) none repeat scroll 0 0; line-height: 47.7px; z-index: 7777">

       <a data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.$0" 
        id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee460" data-state="menu selected idle link notMobile" 
        class="s2repeaterButton" target="_self" href="/" 
        data-listposition="lonely" data-originalgapbetweentextandbtn="0">

	 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.$0.0" class="s2repeaterButton_gapper">

	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.$0.0.0" class="s2repeaterButtonbg" 
	   id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee460bg" style="text-align:left;">

	   <p data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.$0.0.0.0" class="s2repeaterButtonlabel" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee460label"
	 style="text-align:left;color: rgb(255, 255, 255);font-weight: 700;line-height: 47px;text-transform: uppercase;">In&iacute;cio</p>

          </div>
        
	 </div>

       </a>

       <?php foreach($menuItems['items'] as $menu) : ?>
       <hr style="height:1px;border:none;background:#FFF;width:97.7%;text-align:center;padding:0;margin:0;float:left;" />
       <a data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.1" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46__more__" data-state="menu idle header notMobile" class="s2repeaterButton" data-listposition="center" style="display: inline-block; box-sizing: border-box; overflow: hidden; width: 100%; background: rgb(58, 150, 216); float: left; cursor: pointer !important; _cursor:hand !important;" data-originalgapbetweentextandbtn="0" title="<?php echo $menu['alt'] ?>" alt="<?php echo $menu['alt'] ?>" href="<?php echo $menu['url'] ?>" onclick="changeDropDown()">

         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.1.0" class="s2repeaterButton_gapper" style="cursor: pointer; _cursor:hand;">

	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.1.0.0" class="s2repeaterButtonbg" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-9 69aaa23ee46__more__bg" style="text-align:left;cursor: pointer !important; _cursor:hand !important;">

	   <p data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.0.1.0.0.0" class="s2repeaterButtonlabel" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46__more__label" style="line-height:47px;text-align:left;text-transform: uppercase;font-weight:700;cursor:pointer;_cursor:hand;color: #FFF" onclick="window.location.href='<?php echo $menu['url'] ?>'"><?php echo $menu['link'] ?></p>

          </div>

	 </div>
     
       </a>
       <?php endforeach; ?>

     </div>
    <!--/DropDown Container-->

     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46.1" class="s2moreButton" id="DrpDwnMn-ae0d2395-93ea-7b96-fb2-969aaa23ee46moreButton" style="background:#777"></div>
  
  </div>

 </div>

</div>
<!--/HEADER-->

<!--CONTENT-->
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER" id="PAGES_CONTAINER" data-state="" class="s8" style="max-width: 770px; background:#777; padding:0; margin:0">

 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.0" class="s8screenWidthBackground" id="PAGES_CONTAINERscreenWidthBackground" style="max-width: 770px"></div>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1" class="s8centeredContent" id="PAGES_CONTAINERcenteredContent">

 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.0" class="s8bg" id="PAGES_CONTAINERbg"></div>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1" class="s8inlineContent" id="PAGES_CONTAINERinlineContent">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES" id="SITE_PAGES" class="s9" style="max-width: 770px">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage" id="mainPage" class="s10" style="max-width: 770px;">

<!--Cabeçalho Menu-->
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$FvGrdLn-b2cf6014-d396-327b-7ec8-d2f0f2223ca4" id="FvGrdLn-b2cf6014-d396-327b-7ec8-d2f0f2223ca4" class="s20" style="max-width:770px; margin-top: 77px; background: #FFF; margin:0 auto; padding:0; margin:0; overflow-x: hidden; overflow-y: hidden">

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$WRchTxt0-dzj" id="WRchTxt0-dzj" class="s5" style="float:left; width: 48.7%; margin: 27px 0 0 5px;">
  
  <h3 class="font_3" style="line-height: 0.9em;"><a target="_self" href="/"><span style="line-height:0.9em;"><span class="color_18" style="font-family: Anton !important; font-weight:bold">Cesare</span></span></a></h3>

  <h1 class="font_0" style="line-height: 1em;"><a target="_self" href="/"><span style="line-height:1.87em;"><span class="color_18" style="font-family: Anton !important; font-size: 1.77em !important; font-weight: bold;">BENVENUTI</span></span></a></h1>
	
  <h2 class="font_2">
   <span class="color_13" id="navBar"></span>
  </h2>

</div>

<!--FlexSquareImage-->
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8"
 id="WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8" data-state="noTouch" class="s3"
 title="10354900_10204213766568886_8349084596175935418_n.jpg 2014-8-17-11:11:37" data-content-padding-vertical="0"
 data-content-padding-horizontal="0" data-exact-height="NaN" style="float: left; max-height: 46.5%; margin-top: 25px; overflow: hidden; width: 48.4%; margin: 0; padding: 0">

   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8.0" class="s3link"
    id="WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8link" style="width: 48.4%; height: 46.5%; margin:0; padding:0; overflow:hidden;">

     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8.0.0" data-state="loaded" class="s3img"
      style="background: rgb(0, 77, 0); max-height: 100%; max-width: 100%; margin: 0; padding: 0; float: left; overflow:hidden; overflow: hidden; text-align: center" id="WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8img">

         <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8.0.0.0"
	  class="s3imgimage" id="WPht-9df67462-395b-8a2b-e923-ad7e5de82ad8imgimage"
	  src="/wp-content/themes/WixLayout/images/71ab60_66a0d298cb55424a890644140bfd45af.jpg_srz_p_484_465_75_22_0.50_1.20_0.00_jpg_srz.jpeg"
	  style="overflow:hidden; height: 100%; margin:0; padding:0" alt="">

     </div>

   </div>

</div>
<!--/FlexSquareImage-->

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$FvGrdLn-b2cf6014-d396-327b-7ec8-d2f0f2223ca4.0" class="s20line" id="FvGrdLn-b2cf6014-d396-327b-7ec8-d2f0f2223ca4line"></div>

</div>
<!--/Cabeçalho Menu-->

<?php /*
<!--</div>
</div>
/mainPage-->


      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER" id="SITE_FOOTER" data-state=" " class="s4" style="position: absolute; width: 980px; left: 0px; height: 508px; bottom: auto; top: 3070px;">
   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.0" class="s4screenWidthBackground" id="SITE_FOOTERscreenWidthBackground" style="width: 1665px; left: -343px;">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.0.0" class="s4_bg"></div>
   </div>
   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1" class="s4centeredContent" id="SITE_FOOTERcenteredContent">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.0" class="s4bg" id="SITE_FOOTERbg"></div>
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1" class="s4inlineContent" id="SITE_FOOTERinlineContent">
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$WRchTxt-8fb41d1d-5314-992a-c92d-25f051e5fc20" id="WRchTxt-8fb41d1d-5314-992a-c92d-25f051e5fc20" class="s5" style="position: absolute; width: 222px; left: 750px; top: 81px;">
      <h4 class="font_4" style="line-height: 1.4em; text-align: right;">
       <span style="line-height: 1.4em;"><span class="color_11"><strong>CONTATE ME</strong></span></span>
      </h4>
     </div>
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b" data-state="desktop left" class="s6" style="position: absolute; width: auto; left: 10px; top: 159px; max-height: 194px;">
      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0" class="s6wrapper" id="Contato">
       <ul data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0" class="s6_row s6_form">
        <li data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0" class="s6_col s6_left">
         <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bnameField" placeholder="Cesare Benvenuti" class="s6_required s6nameField" name="Cesare Benvenuti" />
         <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.1" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bemailField" placeholder="cesare.benvenuti@hotmail.com" class="s6_required s6emailField" name="cesare.benvenuti@hotmail.com" />
	 <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.2" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bphoneField" placeholder="+55 11983861640" class="s6phoneField" name="+55 11983861640" />
         <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.3" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5baddressField" placeholder="Rua Lacerda Franco, 300 Cj.41" class="s6addressField" name="Rua Lacerda Franco, 300 Cj.41" />
         <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.4" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bsubjectField" placeholder="Oggetto" class="s6_hidden s6subjectField" name="Oggetto" />
	</li>
        <li data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.1" class="s6_col s6_right">
	 <textarea data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.1.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bmessageField" placeholder="Se vc precisar falar comigo Urgente  é melhor sempra na parte da" class="s6_hidden s6messageField" name="Se vc precisar falar comigo Urgente  é melhor sempra na parte da"></textarea>
        </li>
       </ul>
       <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1" class="s6_foot">
        <span data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bnotifications" class="s6_success s6notifications"></span>
        <button data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1.1" class="s6submit" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bsubmit">Enviar</button>
       </div>
      </div>
     </div>


     </div>
    </div>
   </div>
*/ ?>

   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER" id="PAGES_CONTAINER" data-state="" class="s8" style="max-width: 770px">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.0" class="s8screenWidthBackground" id="PAGES_CONTAINERscreenWidthBackground"></div>
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1" class="s8centeredContent" id="PAGES_CONTAINERcenteredContent">
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.0" class="s8bg" id="PAGES_CONTAINERbg"></div>
     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1" class="s8inlineContent" id="PAGES_CONTAINERinlineContent">
      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES" id="SITE_PAGES" class="s9" style="float: left; background: gray">
       <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage" id="mainPage" class="s10" style="float: left; background: green">
        <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.0" class="s10bg" id="mainPagebg"></div>
        <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1" class="s10inlineContent" id="mainPageinlineContent" style="padding:7px">

         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$Cntnr-15276794-9412-f16a-9603-51f2e52a54da" id="Cntnr-15276794-9412-f16a-9603-51f2e52a54da" class="s11" style="position: relative; max-width: 147.97px; max-height: 47px; margin-bottom: 17px">
         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$Cntnr-15276794-9412-f16a-9603-51f2e52a54da.0" class="s11bg" id="Cntnr-15276794-9412-f16a-9603-51f2e52a54dabg"></div>
         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$Cntnr-15276794-9412-f16a-9603-51f2e52a54da.1" class="s11inlineContent" id="Cntnr-15276794-9412-f16a-9603-51f2e52a54dainlineContent">
          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$Cntnr-15276794-9412-f16a-9603-51f2e52a54da.1.$WRchTxt-9ec1e577-624-83f6-e5c9-ed93deb5538a" id="WRchTxt-9ec1e577-624-83f6-e5c9-ed93deb5538a" class="s5" style="position: absolute; max-width: 115px; left: 15px; top: 47.77px;">
           <h6 class="font_6" id="Quem-Sou"><span style="text-shadow:#ffffff -1px -1px 0px, #ffffff -1px 1px 0px, #ffffff 1px 1px 0px, #ffffff 1px -1px 0px;">Quem sou</span></h6>
          </div>
         </div>
        </div>

        <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$WRchTxt-a715869-9563-a3b3-1ff2-d1e1dbec51e" id="WRchTxt-a715869-9563-a3b3-1ff2-d1e1dbec51e" class="s5" style="max-width: 750px; float: left; text-align: justify; margin-top: 77px;">

         <p class="font_8" id="Quem-Sou"><strong>Cesare Benvenuti</strong></p>

         <p class="font_8">Nascido em 1943, San Quirico D’Orcia, Toscana, Italia.</p>
         <p class="font_8">Iniciou o trabalho no mundo discográfico brasileiro criando o setor de Pré divulgação internacional na Gravadora Chantecler. Logo em seguida foi contatado por Mauricio Marconi para assumir a Ebrau, pequena empresa que representava, junto com Tapecar, a Motown no Brasil.</p>

         <p class="font_8">Nos anos 70, quando as rádios tocavam 80% de musica internacional contra 20% de músicas nacionais, Cesare teve a idéia de gravar musicas em inglês feitas no Brasil. Criou o selo Mamuth e a primeira gravação deste tipo foi a música Oh Oh la la la, com o Lee Jackson (grupo Memphis com vocal do Otavinho Pete Dunaway). Inclusive, foi feito um cover desta música pela PolyGram, imaginando tratar-se de uma música internacional produzida por um pequeno selo independente.</p>

         <p class="font_8">A Ebrau, com um departamento de vendas super enxuto (com apenas 3 vendedores para todo Brasil) conseguiu vender 200.000 mil copias deste compacto! Um &nbsp;super n&uacute;mero comparado às 250.000 cópias vendidas pela gigante Polygram com o cover.</p>

         <p class="font_8">Nessa época, Cesare fornecia o repertório internacional para a radio Excelsior, onde também teve um programa líder de audiência conduzido por Antônio Celso, que se chamava Cash Box.</p>

         <p class="font_8">Durante alguns anos forneceu o repertório internacional também para a Radio Difusora Jet Music, na época conduzida por Cayon&nbsp; Gadia.</p>

         <p class="font_8">Simultaneamente fazia a programação noturna da radio Eldorado. O programa mais conhecido dessa época era “Discoteca”, das 23h às 2h da manhã.</p>

         <p class="font_8">A gravadora Copacabana, através do Emilio Vitali, contratou Cesare, dando carta branca na produção de novidades para o setor jovem da gravadora. Foi então que ele lançou o selo Cash Box com produções em Inglês feitas no Brasil.</p>

         <p class="font_8">Alguns dos discos “internacionais” brasileiros produzidos por Cesare que venderam muito na&nbsp; época: Tell me once again &ndash; Light Reflection, &nbsp;mais de 3 milhões de cópias; Hey Girl &ndash; Lee Jackson; Summer Hollyday&nbsp; - Terry Winter; Beacher &nbsp;- Kompha</p>

         <p class="font_8">Na época, era difícil controlar o que tocava nas rádios. Acreditava-se no que dizia o divulgador, que, porém, não correspondia à realidade. Veio então a idéia de criar a Informasom, uma empresa de radio Escuta que gravava toda a programação das rádios em gravadores de rolo Akai, e a escuta era feita por deficientes físicos que anotavam as músicas tocadas para que, depois, o Cesare consolidasse quantas vezes cada música tocava. &nbsp;No início, eram 15 rádios em São Paulo e 12 no Rio de Janeiro. Esse relatório diário servia para o controle das gravadoras e servia também de base para o pagamento de direitos autorais feito pelo Ecad. &nbsp;A Informasom a prestou serviço também para as agências de publicidade que queriam a confirmação dos anúncios que iam ao ar nas rádios. Essa empresa acabou conhecida no meio como “Tapetão”.</p>

         <p class="font_8">Em parceria com Nelson Lopes, Cesare criou o controle musical GRA, hoje chamado&nbsp; ISRC, código obrigatório para o controle das gravações profissionais.</p>

         <p class="font_8">Em parceria com Aloisio Falcão e Pelão, criou a Gravadora Marcus Pereira e o Selo Eldorado.</p>

         <p class="font_8">Em 1977, Antonio Adolfo produziu o primeiro disco independente do mercado brasileiro, o álbum “Feito em Casa”. Vislumbrando o crescimento desse movimento, Cesare incentivou o desenvolvimento do chamado Movimento Independente da MPB e criou a Independente Distribuidora Musical. Alguns dos artistas e grupos lançados pela Independente foram: Boca livre, Paulinho Boca de Cantor, Quinteto Violado, Ciro Aguiar, entre muitos outros.</p>

         <p class="font_8">No início dos anos 80, Cesare obteve o repertório internacional para a Gravadora Paradoxx.</p>

         <p class="font_8">&nbsp;</p>

         <p class="font_8"><strong>IT&Aacute;LIA</strong></p>

         <p class="font_8">Ainda nos anos 80, mudou-se para a It&aacute;lia, onde atuou fortemente no setor musical e radialístico.</p>

         <p class="font_8">Lançou, em sociedade com João Araujo e Rede Globo, as gravadoras Sigla 4 e Globo Records.</p>

         <p class="font_8">Foi diretor musical da Rete 4, canal televisivo, braço italiano da gigante brasileira TV Globo.</p>

         <p class="font_8">Lançou na Itália a Radio Antenna 1, em sociedade com Orlando Negrão. Durante muito tempo esteve em 1º lugar no segmento Adulto Contemporâneo.</p>

         <p class="font_8">Criou e dirigiu as empresas Skylab e Skynet, ambas do setor informático.</p>

         <p class="font_8">Iniciou as atividades da Radio Globo italiana, ainda hoje a primeira em audiência em Roma, e atualmente dirigida por Bruno Benvenuti, filho de Cesare.</p>

         <p class="font_8">&nbsp;</p>

         <p class="font_8"><strong>DE VOLTA AO BRASIL</strong></p>

         <p class="font_8">Lançou no Brasil a empresa <strong>Baixa Hits</strong>, em sociedade com &nbsp;Tutinha de Carvalho e Luiz Calainho.</p>

         <p class="font_8">Lançou no Brasil o portal <strong>Tudomp3</strong>, para divulgação de novos nomes da música.</p>

         <p class="font_8">Em parceria com Wladimir Batalha, organizou o departamento comercial da Instore, empresa especializada na produção de rádios personalizadas para redes de lojas.</p>

         <p class="font_8">Atualmente é sócio da Inrecords, que busca novos talentos no mercado musical.</p>

         <p class="font_8">&nbsp;</p>

         <p class="font_8" style="margin-bottom: 7px">Vale a pena listar alguns artistas produzidos por Cesare Benvenuti ao longo de sua carreira:</p>

         <p class="font_8"><strong>- No Brasil</strong>: Secos e Molhados, Ney Matogrosso, &nbsp;Tom Zé, Edu Lobo, Dori Caymmi, Guilherme Arantes, Amado Maita, Paulinho Boca de Cantor, Novos Baianos, Alceu Valença, Geraldo Azevedo, Dominguinhos, Fafá de Belém, Terreno Baldio, Bebeto, Boca Livre, Zé Luiz Mazzioti, Mauro Celso, Célia, Moacyr Franco, Claudia Barroso, Nelson Ned, Amado Batista, Wilson Miranda e muitos outros.</p>

         <p class="font_8"><strong>- Na It&aacute;lia</strong>: Menudo, Sergio Endrigo, Fred Bongusto, Claudio Baglioni, Riccardo Cocciante, Amedeo Minghi, Flavia Bratos, Giovanni di Gennaro, Nico Fidenco, Fábio Júnior, entre outros.</p>

         <p class="font_8">&nbsp;</p>

        </div>
	<!--/Quem Sou-->

        <!--Programacao Musical-->
        <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895" id="ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895" data-state="" class="s12" style="float:left; height: auto; background: rgb(58, 150, 216)">

         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.0" class="s12screenWidthBackground" id="ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895screenWidthBackground">
           <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.0.0" class="s12_bg"></div>
         </div>
         <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1" class="s12centeredContent" id="ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895centeredContent">
          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.0" class="s12bg" id="ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895bg"></div>
          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1" class="s12inlineContent" id="programacao-musical" style="background: rgb(58, 150, 216) none repeat scroll 0 0">
           <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-e1184ce4-27a0-ea4f-c672-1b009c3582a3" id="WRchTxt-e1184ce4-27a0-ea4f-c672-1b009c3582a3" class="s5" style="float: left; max-width: 355px; margin: 8px 0 0 10px;">
           <h4 class="font_4" style="line-height: 1.4em;"><span style="line-height: 1.4em;"><span class="color_11"><strong>Programa&ccedil;&atilde;o Musical</strong></span></span></h4>
	   </div>
	  </div>
	  </div>
       

          <!--Broche Programacao-Musical-->
          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp" id="Cntnr1-19zp" class="s17" style="float: right; width: 55px; margin-right: 15px;  height: 55px;">
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp.0" class="s17bg" id="Cntnr1-19zpbg">
	  </div>
	  <i data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp.1">
		   <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp.1.0" class="s17_l"></b>
		   <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp.1.1" class="s17_r"></b>
	  </i>
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr1-19zp.2" class="s17inlineContent" id="Cntnr1-19zpinlineContent"></div>
	  </div>
	  <!--Broche Programacao-Musical-->

	   
	  <!--Calendario-->
          <div style="clear:left;float:left;max-width:256.7px;max-height:245px;margin: 17px 0 0 0">
	      
	      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7" id="Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7" class="s16" style="float:left; max-width: 60px; margin: 7px 0 0 7px; max-height: 80px; padding: 0">

		<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7.0" class="s16bg" id="Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7bg"></div>
		 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7.1" class="s16inlineContent" id="Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7inlineContent">
		  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-33c86ec-2c57-1bd-ea74-7e27daddc5c7.1.$WRchTxt-b73a2406-675-4ec5-72fa-aadb43e685a2" id="WRchTxt-b73a2406-675-4ec5-72fa-aadb43e685a2" class="s5" style="float: left; max-width: 30px; margin: 17px 0 0 10px; padding: 0">
		   <h5 class="font_5" style="line-height: 0.9em; text-align: center;"><span style="line-height:0.9em;"><span class="color_18">25</span></span></h5>
		   <p class="font_7" style="text-align: center; line-height: 0.9em;"><span style="line-height:0.9em;"><span class="color_18">Agosto</span></span></p>
		  </div>
                 </div>
              </div>

 	      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-470cd51e-7805-b4a1-83f2-d53f8d26e69" id="WRchTxt-470cd51e-7805-b4a1-83f2-d53f8d26e69" class="s5" style="float: left; max-width: 147.7px; margin: 7px 0 0 7px; overflow: initial">
		 <p class="font_7" style="line-height: 1.4em;"><span style="line-height: 1.4em;"><span class="color_11"><strong>PMixagem Winnie Lo</strong></span></span></p>
		 <p class="font_7" style="line-height: 1.4em;"><span class="color_11" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: normal;">Studio Inrecord's</span></p>
	      </div>

          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315" id="Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315" class="s16" style="clear: left; float: left; max-width: 60px; margin: 4px 0 0 7px; max-height: 66px;">
                 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315.0" class="s16bg" id="Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315bg"></div>
                 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315.1" class="s16inlineContent" id="Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315inlineContent">                  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-2185f769-8689-d5ea-ee1d-e980db4db315.1.$WRchTxt-780ab384-a1e3-6f51-9802-370c4e44b282" id="WRchTxt-780ab384-a1e3-6f51-9802-370c4e44b282" class="s5" style="float: left; max-width: 30px; margin: 16px 0 0 14px;">
		   <h5 class="font_5" style="line-height: 0.9em; text-align: center;"><span style="line-height:0.9em;"><span class="color_18">01</span></span></h5>
		   <p class="font_7" style="line-height: 0.9em; text-align: center;"><span style="line-height:0.9em;"><span class="color_18">Set</span></span></p>
		  </div>
                 </div>
	  </div>
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-c25e109e-4867-ee87-9794-80e8ad0a761" id="WRchTxt-c25e109e-4867-ee87-9794-80e8ad0a761" class="s5" style="float: left; max-width: 200px; margin: 7px 0 0 7px;">
		 <p class="font_7" style="line-height: 1.4em;"><span style="line-height: 1.4em;"><span class="color_11"><strong>Rita Pavone</strong></span></span></p>
		 <p class="font_9"><span class="color_11">Roma It&aacute;lia Studio Sgets</span></p>
	  </div>
	 
	  <div id="Cntnr-a6ce7fd-f54f-d6c8-16cf-6158a5a327d8inlineContent" class="s16inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-a6ce7fd-f54f-d6c8-16cf-6158a5a327d8.1" style="clear: left; margin: 7px 0 0 7px">

 		<div id="Cntnr-a6ce7fd-f54f-d6c8-16cf-6158a5a327d8bg" class="s16bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-a6ce7fd-f54f-d6c8-16cf-6158a5a327d8.0"></div>

                  <div style="float: left; max-width: 30px; margin: 7px 0 0 14px;" class="s5" id="WRchTxt-d4ec4e08-ca93-a6eb-d7-a419437d8a85" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-a6ce7fd-f54f-d6c8-16cf-6158a5a327d8.1.$WRchTxt-d4ec4e08-ca93-a6eb-d7-a419437d8a85">
                   <h5 style="line-height: 0.9em; text-align: center;" class="font_5"><font color="#3a96d8">12</font></h5>
		   <p style="line-height: 0.9em; text-align: center;" class="font_7"><font color="#3a96d8">Set</font></p>
		  </div>

         </div>
	 <div style="float: left; max-width: 200px; margin: 3px 0 0 7px; overflow: initial" class="s5" id="WRchTxt-fd27b52f-1d2d-920-15e4-b3cc3a665569" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-fd27b52f-1d2d-920-15e4-b3cc3a665569">
		 <p style="line-height: 1.4em;" class="font_7"><span style="line-height: 1.4em;"><span class="color_11"><strong>Gravação Vicky</strong></span></span></p>
		 <p class="font_9"><span style="font-family: Helvetica, Arial, sans-serif;" class="color_11">Studio Inrecord's</span></p>
	 </div>

	</div>
	<!--/Calendario-->


       <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WPht-da199acd-f81e-d88c-30b1-7f13982c6e43" id="WPht-da199acd-f81e-d88c-30b1-7f13982c6e43" data-state="noTouch" class="s13" title="imagem006.jpg" data-content-padding-vertical="0" data-content-padding-horizontal="0" data-exact-height="NaN" style="float: left; margin-top: 17px; max-width: 256.7px; max-height: 245px;">
	    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WPht-da199acd-f81e-d88c-30b1-7f13982c6e43.0" class="s13link" id="WPht-da199acd-f81e-d88c-30b1-7f13982c6e43link" style=";width: 256.7px; height: 245px;">
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WPht-da199acd-f81e-d88c-30b1-7f13982c6e43.0.0" data-state="loaded" class="s13img" style="float: left; max-width: 256.7px; height: 245px; margin-left: 7px" id="WPht-da199acd-f81e-d88c-30b1-7f13982c6e43img">
	      <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WPht-da199acd-f81e-d88c-30b1-7f13982c6e43.0.0.0" class="s13imgimage" id="WPht-da199acd-f81e-d88c-30b1-7f13982c6e43imgimage" src="/wp-content/themes/WixLayout/images/71ab60_657cebc3695e43bda21b4aa1e506b43e.jpg_srb_p_390_245_75_22_0.50_1.20_0.00_jpg_srb.jpeg" style="float: left; width: 256.7px;" alt="">

    	<!--Icones Redes Sociais-->
    	<div style="clear:left; float:left;background:gray; margin: 0 auto; padding:7px">
	<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c" id="Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c" class="s14" style="float: right; max-width: 40px;margin-top: 7px; max-height: 40px;">
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.0" class="s14bg" id="Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89cbg"></div>
	    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.1" class="s14inlineContent" id="Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89cinlineContent">
	      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.1.$WPht-4b3fefb-f406-c3da-8f09-4456e2306f43" id="WPht-4b3fefb-f406-c3da-8f09-4456e2306f43" data-state="noTouch" class="s13" title="" data-content-padding-vertical="0" data-content-padding-horizontal="0" data-exact-height="NaN" style="margin: 7px auto; max-width: 27px; max-height: 27px; float: left">
		<a data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.1.$WPht-4b3fefb-f406-c3da-8f09-4456e2306f43.0" class="s13link" id="WPht-4b3fefb-f406-c3da-8f09-4456e2306f43link" target="_self" href="http://www.linkedin.com/pub/cesare-benvenuti/33/3bb/985/en" style="float: left; cursor: pointer; max-width: 27px; max-height: 27px; margin: 0; padding: 0">
		  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.1.$WPht-4b3fefb-f406-c3da-8f09-4456e2306f43.0.0" data-state="loaded" class="s13img" style="float:left;margin:0;padding:0" id="WPht-4b3fefb-f406-c3da-8f09-4456e2306f43img">
			<img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-f5d72c22-3c14-620f-b65e-5be7a703c89c.1.$WPht-4b3fefb-f406-c3da-8f09-4456e2306f43.0.0.0" class="s13imgimage" id="WPht-4b3fefb-f406-c3da-8f09-4456e2306f43imgimage" src="/wp-content/themes/WixLayout/images/linkedin-icon.png" style="float: left; max-width: 27px; max-height: 27px; margin: 0; padding: 0" alt="">
		  </div>
		</a>
	      </div>
	     </div>
	   </div>

	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Twitter" id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Twitter" class="s14" style="float: right; max-width: 40px; margin: 7px 0 0 7px; max-height: 40px;">
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Twitter.0" class="s14bg" id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9ebg_Twitter"></div>
	       <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Twitter.1" class="s14inlineContent" id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9einlineContent_Twitter">
		<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter" class="s15" style="max-width: 25px; float:left; margin: 7px 0 0 8px; max-height: 25px;">
		 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter.0" class="s15itemsContainer" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbitemsContainer_Twitter">
		  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter.0.0" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddm_Twitter" class="s15imageItem" style="max-width:25px;max-height:25px;margin-bottom:0;margin-right:5px;display:inline-block;">
		   <a data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter.0.0.0" class="s15imageItemlink" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmlink_Twitter" target="_blank" href="http://www.twitter.com/cesarebenvenuti">
		    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter.0.0.0.0" data-state="loaded" class="s15imageItemimage" style="float:left;max-width:25px;max-height:25px;" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmimage_Twitter">
		      <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Twitter.0.0.0.0.0" class="s15imageItemimageimage" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmimageimage_Twitter" src="/wp-content/themes/WixLayout/images/square-icon-social-twitter-bird.png" style="float:left;max-width:27px;max-height:27px;" alt="" />
		    </div>
		   </a>
		  </div>
		 </div>
		</div>
	       </div>
	     </div>

	     <div style="float: left; max-width: 40px; margin: 7.7px 0 0 7px; max-height: 40px;" class="s14" id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Instagram" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e">
	      <div id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9ebg_Instagram" class="s14bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Instagram.0"></div>
		<div id="Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9einlineContent_Instagram" class="s14inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e_Instagram.1">
		  <div style="width: 25px; float: left; margin: 7px 0 0 8px; height: 25px;" class="s15" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram">
		    <div id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbitemsContainer" class="s15itemsContainer" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram.0">
		      <div style="width:25px;height:25px;margin-bottom:0;margin-right:5px;display:inline-block;" class="s15imageItem" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddm" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram.0.0">
		       <a href="http://instagram.com/cesarebenvenuti" target="_blank" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmlink" class="s15imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram.0.0.0">
			<div id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmimage" style="width:25px;height:25px;float:left;" class="s15imageItemimage" data-state="loaded" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram.0.0.0.0">
			 <img alt="" style="float:left;max-width:25px;max-height:25px;" src="/wp-content/themes/WixLayout/images/black-instagram-transparent-icon.png" id="LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fbi01ddmimageimage" class="s15imageItemimageimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-740ed677-ce52-5b32-1e18-cf4ce8337c9e.1.$LnkBr-94e9c372-3f95-ee83-4214-d3c95096a0fb_Instagram.0.0.0.0.0">
			</div>
		       </a>
		      </div>
		    </div>
		  </div>
		</div>
	       </div>
	     </div>


	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55" id="Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55" class="s14" style="float: left; max-width: 40px; margin: 7px 0 0 7px; max-height: 40px;">
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.0" class="s14bg" id="Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55bg"></div>
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1" class="s14inlineContent" id="Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55inlineContent">
	      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185" class="s15" style="max-width: 25px; float: left; margin: 7px 0 0 5px; max-height: 25px;">
		<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185.0" class="s15itemsContainer" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185itemsContainer">
		 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185.0.0" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185i016eq" class="s15imageItem" style="width:25px;height:25px;margin-bottom:0;margin-right:5px;display:inline-block;">
		   <a data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185.0.0.0" class="s15imageItemlink" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185i016eqlink" target="_self" href="http://www.facebook.com/cesare.benvenuti">
		     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185.0.0.0.0" data-state="loaded" class="s15imageItemimage" style="width:25px;height:25px;position:absolute;" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185i016eqimage">
			<img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$Cntnr-bdaf721d-bff7-842f-8cf4-95a22a2eed55.1.$LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185.0.0.0.0.0" class="s15imageItemimageimage" id="LnkBr-69a637cf-52ac-47fb-2b66-9a31dd3ba185i016eqimageimage" src="/wp-content/themes/WixLayout/images/da00086a27cc2c52ec7a11ec468c4d29.wix_mp_srz_p_25_25_75_22_0.50_1.20_0.00_wix_mp_srz.jpeg" style="margin-left:2.67px;float:left;max-width:25px;max-height:25px;" alt="" />
		     </div>
		   </a>
		 </div>
		</div>
	      </div>
	     </div>
	   </div>


    </div>
    <!--/Icones Redes Sociais-->

</div>



    <!--Textos Redes Sociais-->
    <!--
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-75669bab-fdde-34b1-d77-5f52469b3f17" id="WRchTxt-75669bab-fdde-34b1-d77-5f52469b3f17" class="s5" style="float: left; width: 105px; margin:7px 0 0  3.7px;"><p class="font_9" style="line-height: 0.7em"><span class="color_14"><span style="line-height: 1.4em;">&nbsp;&nbsp;Linked me</span></span></p>
	</div>
	<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-44dbda87-a962-fb8c-3a0e-6327eb95f21d" id="WRchTxt-44dbda87-a962-fb8c-3a0e-6327eb95f21d" class="s5" style="float: left; width: 105px; margin:7px 0 0 5px;"><p class="font_9" style="line-height: 0.7em"><span class="color_14"><span style="line-height: 1.4em;">Friend me&nbsp;</span></span></p>
	</div>
	<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-44dbda87-a962-fb8c-3a0e-6327eb95f21d-Twitter" id="WRchTxt-44dbda87-a962-fb8c-3a0e-6327eb95f21d-Twitter" class="s5" style="float: left; width: 105px; margin: 7.7px 0 0 5px;"><p class="font_9" style="line-height: 0.7em"><span class="color_14"><span style="line-height: 1.4em;">Follow me</span></span></p>
	</div>
	<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-d23f1b7f-xf6c4-b8dc-b079-eadd195ac6eb" id="WRchTxt-d23f1b7f-f6c4-b8dc-b079-eadd195ac6eb" class="s5" style="float: left; width: 60px; margin: 7.7px 0 0 7px;"><p class="font_9" style="line-height: 0.7em"><span class="color_14"><span style="line-height: 1.4em;">Tag me</span></span></p>
	</div>
    -->
    <!--Textos Redes Sociais-->
</div>

<div style="float:left; max-width: 256.7px; padding: 0; margin: 0; margin: 0 0 0 7px">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$WRchTxt-db791b0-d511-7001-9545-3f8965681c4b" id="WRchTxt-db791b0-d511-7001-9545-3f8965681c4b" class="s5" style="float: right; max-width: 209px; margin-left: 7px; margin-top: 7px;">
	<h4 class="font_4">Enconte-me</h4>
    </div>

    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$hyx1hqub" id="hyx1hqub" data-state="noTouch" class="s18" title="" data-content-padding-vertical="4" data-content-padding-horizontal="4" data-exact-height="NaN" style="clear: left; float: left; left: 701px; top: 65px; max-width: 255.7px; max-height: 333px; padding:0; margin:0">
	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$hyx1hqub.0" class="s18link" id="hyx1hqublink" style="max-width: 255.7px; max-height: 329px; padding:0; margin:0">
	      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$hyx1hqub.0.0" data-state="loaded" class="s18img" style="float: left; max-width: 256.7px; max-height: 329px;" id="hyx1hqubimg">
		  <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-5f4fb820-9e1b-4270-7615-8d5a61bea895.1.1.$hyx1hqub.0.0.0" class="s18imgimage" id="hyx1hqubimgimage" src="/wp-content/themes/WixLayout/images/71ab60_375a6af544504d16bbe536893e9b8f0e.jpg_srz_p_275_329_75_22_0.50_1.20_0.00_jpg_srz.jpeg" style="display: block; max-width: 256.7px; max-height: 329px; padding:0; margin:0" alt="" />
	      </div>
	   </div>
    </div>
</div>
<!--/programacao-musical-->
</div>

<br style="clear:both" />

<!--EMME 100-->
           <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3" id="Cntnr0-1d3" class="s1" style="clear:both; float: left; max-width: 60px; max-height: 60px;">
 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3.0" class="s1bg" id="Cntnr0-1d3bg"></div>

           <i data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3.1">
  	    <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3.1.0" class="s1_l"></b>
            <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3.1.1" class="s1_r"></b>
           </i>

           <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$Cntnr0-1d3.2" class="s1inlineContent" id="Cntnr0-1d3inlineContent"></div>
           </div>




	<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd" id="ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd" data-state="" class="s19" style="float: left;">
	 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.0" class="s19screenWidthBackground" id="ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcdscreenWidthBackground" style="float: left;">
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.0.0" class="s19_bg"></div>
	 </div>
	 <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1" class="s19centeredContent" id="ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcdcenteredContent">
	  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.0" class="s19bg" id="ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcdbg"></div>
	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1" class="s19inlineContent" id="ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcdinlineContent">
	   <div style="float:left; max-width: 345px">
	    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WRchTxt-fb7881b8-9b9d-ba97-f839-2cef4d67c994" id="Passado-e-Presente" class="s5" style="float: left; max-width: 350px; margin: 77px 0 20px 0;">
	    <h4 class="font_4" style="line-height: 1.4em;"><span style="line-height: 1.4em;"><span class="color_18"><strong>Passado e presente</strong></span></span></h4>
	    </div>
	    <p class="font_8" style="clear: left; float: left; font-size: 1.7em; line-height: 1.7em"><span style="font-size:1.7em;">EMME 100</span></p>
	   </div>
	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-6f6e931-437e-4d7e-27be-ee9d3f934819" id="WPht-6f6e931-437e-4d7e-27be-ee9d3f934819" data-state="noTouch" class="s13" title="logoc2.png" data-content-padding-vertical="0" data-content-padding-horizontal="0" data-exact-height="NaN" style="float: left; margin-top: 5px; max-width: 160px; max-height: 60px;">
	    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-6f6e931-437e-4d7e-27be-ee9d3f934819.0" class="s13link" id="WPht-6f6e931-437e-4d7e-27be-ee9d3f934819link" style="width: 160px; height: 60px;">
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-6f6e931-437e-4d7e-27be-ee9d3f934819.0.0" data-state="loaded" class="s13img" style="float: left; max-width: 160px; max-height: 60px;" id="WPht-6f6e931-437e-4d7e-27be-ee9d3f934819img">
	      <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-6f6e931-437e-4d7e-27be-ee9d3f934819.0.0.0" class="s13imgimage" id="WPht-6f6e931-437e-4d7e-27be-ee9d3f934819imgimage" src="/wp-content/themes/WixLayout/images/41d000_4c6e2f011ad0e0a9b8a5a7c3ce5f5955.png_srb_p_151_39_75_22_0.50_1.20_0.00_png_srb.png" style="display: block; width: 160px; height: 41px; margin-top: 9.5px;" alt="">
	     </div>
	    </div>
	   </div>

	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeb" id="WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeb" data-state="noTouch" class="s13" title="logoc1.png" data-content-padding-vertical="0" data-content-padding-horizontal="0" data-exact-height="NaN" style="float: left; margin: 7px 0 0 9px; max-width: 95px; max-height: 85px;">
	    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeb.0" class="s13link" id="WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeblink" style="max-width: 95px; max-height: 85px;">
	     <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeb.0.0" data-state="loaded" class="s13img" style="position: relative; width: 95px; height: 85px;" id="WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaebimg">
	      <img data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaeb.0.0.0" class="s13imgimage" id="WPht-eaee9d9-9cfb-b2e2-f209-b82255c5aaebimgimage" src="/wp-content/themes/WixLayout/images/41d000_e93d5528b93e1ab328cc5b2615e5dec9.png_srb_p_95_85_75_22_0.50_1.20_0.00_png_srb.png" style="display: block; width: 76px; height: 85px; margin-left: 9.5px;" alt="" />
	     </div>
	    </div>
	   </div>



	   <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$mainPage.1.$ScrnWdthCntnr-3ff4998b-3aaa-a33e-aeb3-c010776a1dcd.1.1.$WRchTxt-e4ae7293-6a2d-bfde-1e6e-d41e23b93d1d" id="WRchTxt-e4ae7293-6a2d-bfde-1e6e-d41e23b93d1d" class="s5" style="float: left; max-width: 489px; margin: 43px 0 0 20px;  text-align: justify;">
	    <p class="font_8">Era uma vez... quando ainda morava em Roma, comprei &nbsp;a marca M100 que, no começo das rádios-pirata de Roma, foi a mais ouvida por muitos anos. Para se ter uma ideia, o dono da maior network italiana de hoje - Radio Dimensione Suono - foi gerente de vendas desta radio. A Radio Emme 100 foi vendida alguns anos atrás para um grupo Italiano que, &nbsp;sendo maior e nacionalmente atuante, não tinha interesse neste nome. Então, pensando no futuro, eu comprei-o. &nbsp;Como não tinha dinheiro suficiente para comprar uma frequência, deixei o nome na gaveta. &nbsp;</p>
	    
	    <p class="font_8">Há alguns meses, meu filho Bruno comprou uma frequência que o nome nada representava. Foi quando abriu a gaveta e viu o nome &nbsp;Emme 100. Nesse momento, reviveu a história de uma marca que ainda traz muita saudade na cabeça das pessoas que foram ouvintes fieis. E eram muitos! Decidiu, então, dar a cada um desses ouvintes da M100 (e também aos novos ) a possibilidade de escutar “a música da sua vida”.</p>

	    <p class="font_8">Parabéns meu filho! Te desejo muito sucesso, você merece!</p>

	    <p class="font_8">Cesare</p>

	    <p class="font_8"><a href="http://www.m100.it" target="_blank"><strong>www.m100.it</strong></a></p>

	    <p class="font_8"><a href="http://www.shoutcast.com/Internet-Radio/m100" target="_blank"><strong>http://www.shoutcast.com/Internet-Radio/m100</strong></a>&nbsp;</p>
	   </div>

	</div>
       </div>
      </div>

</div>

</div></div>

</div></div></div></div>
</div>



<!--Contact Form-->
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1" class="s4centeredContent" id="SITE_FOOTERcenteredContent">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.0" class="s4bg" id="SITE_FOOTERbg">
</div>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s" id="Cntnr2-s7s" class="s7" style="float:right; max-width: 55px; max-height: 60px; margin-top: 0px;">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.0" class="s7bg" id="Cntnr2-s7sbg"></div>

<i data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1"><b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1.0" class="s7_l"></b><b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1.1" class="s7_r"></b></i>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.2" class="s7inlineContent" id="Cntnr2-s7sinlineContent"></div></div></div></div></div>


<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s" id="Cntnr2-s7s" class="s7" style="float: right; max-width: 55px; margin: 0px; max-height: 60px;">
  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.0" class="s7bg" id="Cntnr2-s7sbg"></div>
  <i data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1">
    <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1.0" class="s7_l"></b>
    <b data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.1.1" class="s7_r"></b>
  </i>
  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$Cntnr2-s7s.2" class="s7inlineContent" id="Cntnr2-s7sinlineContent"></div>
</div>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1" class="s4inlineContent" id="SITE_FOOTERinlineContent">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$WRchTxt-8fb41d1d-5314-992a-c92d-25f051e5fc20" id="WRchTxt-8fb41d1d-5314-992a-c92d-25f051e5fc20" class="s5" style="float: right; max-width: 222px; margin-top: 8.1px;">
    <h4 class="font_4" style="line-height: 1.4em; text-align: right;">
        <span style="line-height: 1.4em;"><span class="color_11"><strong>CONTATE ME</strong></span></span>
    </h4>
</div>

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b" data-state="desktop left" class="s6" style="max-width: 770px; margin: 5px auto; padding: 10px; float: left">
  <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0" class="s6wrapper" id="Contato" style="float:left; height: auto; max-width:770px">

   <form data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0" class="s6_row s6_form" action="./f.php" method="post">

      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0" class="s6_col s6_left" style="float:left; max-width:335px;">

        <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bnameField" placeholder="Cesare Benvenuti" class="s6_required s6nameField" name="Cesare Benvenuti" />

        <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.1" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bemailField" placeholder="cesare.benvenuti@hotmail.com" class="s6_required s6emailField" name="cesare.benvenuti@hotmail.com" />

        <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.2" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bphoneField" placeholder="+55 11983861640" class="s6phoneField" name="+55 11983861640" />

        <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.3" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5baddressField" placeholder="Rua Lacerda Franco, 300 Cj.41" class="s6addressField" name="Rua Lacerda Franco, 300 Cj.41" />

        <input type="text" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.0.4" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bsubjectField" placeholder="Oggetto" class="s6_hidden s6subjectField" name="Oggetto" />

      </div>
      <div style="float:left;max-width:335px; padding-left: 7px;" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.1" class="s6_col s6_right">
    
        <textarea data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.0.1.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bmessageField" placeholder="Se vc precisar falar comigo Urgente melhor sempra na parte da" class="s6messageField" name="Se vc precisar falar comigo Urgente melhor sempra na parte da tarde" style="float:left">teste</textarea>
      </div>

      <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1" class="s6_foot" style="clear:left; float:left;">

          <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1.0" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bnotifications" class="s6_success s6notifications" style="margin:0 0 7px 7px; clear:left; float:left;">
	      <strong style="font-weight:bold; text-decoration:dotted; color: green"><?php echo($_SESSION['k']); ?></strong>
	  </div>
          <br style="clear:both" />
          <input type="text" name="yk" placeholder="Digite o c&oacute;digo de seguran&ccedil;a:" style="s6_row" />

          <button data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5b.0.1.1" class="s6submit" id="CntctFrm-50e4066-2aaf-3883-4da2-63d8a4584f5bsubmit" name="enviar">Enviar</button>

      </div>

   </form>

  </form>

  </div>
</div>
<!--/Contact Form-->



</div><!--/SITE_ESTRUCTURE-->

<!--<div data-reactid=".0.$siteAspectsContainer"></div></div> 
</div>   -->

<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER" id="SITE_FOOTER" data-state=" " class="s4"
	 style="clear: both; float: left; width: 100%; max-width: 770px; padding: 5px 5px 0 5px; margin: 0px auto; margin-top:7px; background:#777">
<div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.0" class="s4screenWidthBackground" id="SITE_FOOTERscreenWidthBackground" style="max-width: 770px;">
    <div data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.0.0" class="s4_bg" style="text-align:center; color:#FFF !important">Development by <a href="http://esdrasdemorais.com.br">Esdras</a></div>
</div>


<div onclick="window.scrollTo(0,0)" style="cursor:pointer; cursor:_hand; position:fixed; bottom:7px; right:7px; background: #777; border-radius: 17px; padding: 7px; margin: 0; color: #FFF !important; font: 17px Arial" class="color_top"><a href="javascript:window.scrollTo(0,0)"><strong style="color:#FFF !important">^</strong></a>
</div>

<?php /*
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 * /
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->*/?>

<?php #get_footer(); ?>
