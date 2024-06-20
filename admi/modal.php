<?php
require_once ('../site.php');
require_once ('../content/functions.php');
error_reporting(0);
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}
  
 
if($usr['Role'] == 'Admin') {
    
  } else {
    header('Location: /home');
  }
?>
<!DOCTYPE html>
<html>
<!-- MachineID: WEB529 -->
<head id="ctl00_ctl00_Head1"><title>
  Modals - ROBLOX
</title>
<link rel="stylesheet" href="https://web.archive.org/web/20160715080115cs_/https://static.rbxcdn.com/css/page___5e30bb819700394de2e8904016a09d8a_m.css/fetch"><link rel="stylesheet" href="https://web.archive.org/web/20160715080115cs_/https://static.rbxcdn.com/css/MainCSS___5cddc74fc45cf2bb2de8265865a0f87b_m.css/fetch"><link rel="stylesheet" type="text/css" href="https://web.archive.org/_static/css/iconochive.css?v=qtvMKcIJ"><link rel="stylesheet" type="text/css" href="https://web.archive.org/_static/css/banner-styles.css?v=S1zqJCYt">
<link href="favicon.ico" rel="icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<meta name="author" content="ROBLOX Corporation">
<meta name="description" content="<?=$itemName?> - ROBLOX: <?=$itemDesc?>">
<meta name="keywords" content="virtual good <?=$itemName?> - ROBLOX items, ROBLOX <?=$itemName?> - ROBLOX">
<meta name="apple-itunes-app" content="app-id=431946152">
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY">
    <meta property="og:site_name" content="ROBLOX">
    <meta property="og:title" content="<?=$itemName?>">
    <meta property="og:type" content="product.item">
    <meta property="og:url" content="https://www.rblx16.ct8.pl/Item.aspx?ID=<?=$itemID?>">
    <meta property="og:description" content="<?=$itemDesc?>">
    <meta property="og:image" content="<?=$itemThumbnail?>">
    <meta property="fb:app_id" content="190191627665278">
        <meta property="og:image:width" content="320">
        <meta property="og:image:height" content="320">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title">
    <meta name="twitter:description" content="<?=$itemDesc?>">
    <meta name="twitter:creator" content="@ROBLOX">
    <meta name="twitter:image1" content="<?=$itemThumbnail?>">
        <meta name="twitter:label1" content="Item Type">
        <meta name="twitter:data1" content="ROBLOX Hat">
        <meta name="twitter:label2" content="Creator">
        <meta name="twitter:data2" content="ROBLOX">
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay">
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>


<script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'sitetest3.bladeitter.cf']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'ItemDetail']);

                    var eventsArr = ['b._setCustomVar', 2, 'FirstTimeVisitor', 'true', 3];
                    _gaq.push(eventsArr);
                    $(function() {
                        if(GoogleAnalyticsEvents) {
                            GoogleAnalyticsEvents.Log(eventsArr);
                        }
                    });

    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'sitetest3.bladeitter.cf']);
                    _gaq.push(['c._setPageGroup', 1, 'ItemDetail']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script type="text/javascript" src="https://js.rbxcdn.com/c0235dea71f3649ae8ded711913b8fbe.js"></script>
        <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("https://ecsv2.sitetest3.bladeitter.cf/www/e.png",
                    "https://ecsv2.sitetest3.bladeitter.cf/www/e.png",
                    "https://ecsv2.sitetest3.bladeitter.cf/pe?t=studio",
                    "https://ecsv2.sitetest3.bladeitter.cf/pe?t=diagnostic");
            }
        </script>


<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script><script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/4acfdab2e6131feb84d783765b82a888.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/8db82e6d725b907e91441b849cc35e47.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript" src="https://js.rbxcdn.com/94ba538cfcb5d70f02cd135cc6109c84.js"></script>


        <link rel="canonical" href="https://www.noilum.ct8.pl/Item.aspx?ID=<?=$itemID?>">
        <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.sitetest3.bladeitter.cf/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.sitetest3.bladeitter.cf/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.sitetest3.bladeitter.cf/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.sitetest3.bladeitter.cf/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.sitetest3.bladeitter.cf/game/';
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.sitetest3.bladeitter.cf/game-auth/getauthticket';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.sitetest3.bladeitter.cf/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.sitetest3.bladeitter.cf/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.sitetest3.bladeitter.cf/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.sitetest3.bladeitter.cf/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.sitetest3.bladeitter.cf/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.sitetest3.bladeitter.cf/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.sitetest3.bladeitter.cf/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.sitetest3.bladeitter.cf/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.sitetest3.bladeitter.cf/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.sitetest3.bladeitter.cf/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.sitetest3.bladeitter.cf/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'https://www.sitetest3.bladeitter.cf/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'https://www.sitetest3.bladeitter.cf/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.sitetest3.bladeitter.cf/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'https://www.sitetest3.bladeitter.cf/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.sitetest3.bladeitter.cf/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.sitetest3.bladeitter.cf/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.sitetest3.bladeitter.cf/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.sitetest3.bladeitter.cf/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.sitetest3.bladeitter.cf/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.sitetest3.bladeitter.cf/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.sitetest3.bladeitter.cf/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.sitetest3.bladeitter.cf/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.sitetest3.bladeitter.cf/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.sitetest3.bladeitter.cf/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.sitetest3.bladeitter.cf/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.sitetest3.bladeitter.cf/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.sitetest3.bladeitter.cf/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://www.sitetest3.bladeitter.cf/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.sitetest3.bladeitter.cf/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.sitetest3.bladeitter.cf/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.sitetest3.bladeitter.cf/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.sitetest3.bladeitter.cf/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.sitetest3.bladeitter.cf/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.sitetest3.bladeitter.cf/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.sitetest3.bladeitter.cf/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.sitetest3.bladeitter.cf/service-workers/push-notifications';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>
<script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>
</head>
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="ItemDetail" data-send-event-percentage="0.01">





    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex=""></div>







<form name="aspnetForm" method="post" action="/Item.aspx?ID=<?=$itemID?>" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/WebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
window.WebForm_PostBackOptions||document.write('<script type="text/javascript" src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZH6GgOgBQtqMPCPjRUnhj_pzNesAXKuAdu2pj-Sq-3JDJIgwEw2&amp;t=635589219571259667"><\/script>');//]]>
</script>



<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys.WebForms)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=Jw6tUGWnA15YEa3ai3FadCEDqusVaOyrhfy39auVd1FmNPcggz_w8ujNbCmSe3d-g1mfv3ai8xe7-2Ze2qr2BxMVxfFYswV1Y4rdnmWJF2uUrOEaDJiBEGKAzXrJcfxb_Yfc2xbZMZu9pLQP2d6b-KwvlK01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<script src="js_/https://www.sitetest3.bladeitter.cf/ScriptResource.axd?d=ckN9yNqP35jmkzZn-uddrmUsbg--ThiqBFFmebCbfN92qL_WRBLk-1PScIvMf5n76tFaIJnBGLW2ap1Uy06ACGT_IESBjfvt2IFEZVHiKAlZkgpJ-V77M4AdwQobhJ_NXx2cilH7J0oaNqwi2D8ZPGQbgFRRpqnVHUPqHis6Z4D6uG15ZtLfaMhzUw3MmpEvUzLUembWKs3-SMqVTlhUC9MqLtGK5pVz65XBNSxMzQP3oKhz0" type="text/javascript"></script>
<div>

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="6AB857A9">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="olTq9h8Debg4HKeS1ax4QXYpL0i/kNAxAbEybmOgpoSdkUOp5aPMXOA4qXADwIlyTQLT6m77LEYAXHp1FiBIEQK81wHagPZjSLAKTZhY6rqWZ0RC">
</div>
    <div id="fb-root">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>
<?php
$get->nav();
?>
<script type="text/javascript">
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>


        <div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer">


<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();



        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();



        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();


    });

</script>



        <script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>



        <script>
          function goBack() {
            window.history.back();
          }
        </script>
      


        </div>



        <noscript><div class="alert-info"><h5>Please enable Javascript to use all the features on this site.</h5></div></noscript>
<div class="content">
  <li class="list-item avatar-card">
    <div class="avatar-card-container">
      <div class="avatar-card-content">
        <div class="avatar-card-fullbody">
          <a class="avatar-card-link">
            <img class="avatar-card-image icon-placeholder-avatar-fullbody" src="/content/images/head.png">
          </a>
        </div>
        <div class="avatar-card-caption">
            <div class="text-overflow avatar-name"><?php echo'<h2>' . $usr['username'] . '</h2>'; ?></div>
          
      </div>
        <?php
            if($usr['MembershipType'] == "BuildersClub"){
            echo '<span class="icon-bc"></span>';
            }else if($usr['MembershipType'] == "TurboBuildersClub"){
                echo '<span class="icon-tbc"></span>';
            }else if($usr['MembershipType'] == "OutrageousBuildersClub"){
                echo '<span class="icon-obc"></span>';
            }
            ?>
        </div>
       </div>
    </div>
  <div class="section-content">
        
        <button class="btn-full-width btn-secondary-sm" id="BC">Builder Club Modal</button>
    <br><br>
        <button class="btn-full-width btn-secondary-sm" id="AOM">Admin Only Modal</button>
    
  </div>
        <br>
  <br>
  <br>
        
          <br>
                 



<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>
     <div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
   <div style="margin:4px 0px;">
        <span>Upgrade</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                Get Builder Club For Exclusive Features!
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="/premium/membership?ctx=modal" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
      function showBCOnlyModal(modalId) {
          var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
          if (typeof modalId === "undefined")
              $("#BCOnlyModal").modal(modalProperties);
          else
              $("#" + modalId).modal(modalProperties);
      }
      $(document).ready(function () {
          $("#BC").click(function () {
              showBCOnlyModal("BCOnlyModal");
              return false;
          });
      });
</script>
  
<div id="ADMINOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
   <div style="margin:4px 0px;">
        <span>Admin Only Modal Test</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://cdn.discordapp.com/attachments/997161568951357511/1117504149551067246/Sans_titre_198_20230611192219.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                This is a Admin Only Test Modal !
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
      function showAOnlyModal(modalId) {
          var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
          if (typeof modalId === "undefined")
              $("#ADMINOnlyModal").modal(modalProperties);
          else
              $("#" + modalId).modal(modalProperties);
      }
      $(document).ready(function () {
          $("#AOM").click(function () {
              showAOnlyModal("ADMINOnlyModal");
              return false;
          });
      });
</script>
</div>
<div id="usernotifications-data-model" class="hidden" data-notificationsdomain="https://realtime.sitetest3.bladeitter.cf/" data-notificationstestinterval="5000" data-notificationsmaxconnectiontime="43200000" data-userid="168914479">
</div>    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.ChatTemplates = {
            ChatBarTemplate: "chat-bar",
            AbuseReportTemplate: "chat-abuse-report",
            DialogTemplate: "chat-dialog",
            FriendsSelectionTemplate: "chat-friends-selection",
            GroupDialogTemplate: "chat-group-dialog",
            NewGroupTemplate: "chat-new-group",
            DialogMinimizeTemplate: "chat-dialog-minimize",
            ChatPlaceholderTemplate: "chat-placeholder"
        };
        Roblox.Chat = {
            SoundFile: "https://static.rbxcdn.com/Chat/sound/chatsound.mp3"
        };
        Roblox.Party = {};
        Roblox.Party.SetGoogleAnalyticsCallback = function () {
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
        };

    </script>

</div>
<script type="text/javascript" src="https://js.rbxcdn.com/e2cb6070c58f829226a04307a3f3e28a.js.gzip"></script>

<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">

        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="" id="confirm-btn"><span></span></a>
                    <a href="" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.Dialog = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>


    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'sitetest3.bladeitter.cf';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });

                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });


                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });


                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});

        });
    </script>



    <script type="text/javascript" src="https://js.rbxcdn.com/d849afd828ec9246ad457b640dbb54b3.js.gzip"></script>



<script type="text/javascript" src="https://js.rbxcdn.com/d03710605a8eb25ee026670046b51a9a.js.gzip"></script>
        <div ng-modules="templateApp" class="ng-scope">
            <!-- Template bundle: base -->
<script type="text/javascript">
"use strict"; angular.module("templateApp", []).run(['$templateCache', function($templateCache) {

 }]);
</script>

            <!-- Template bundle: page -->
<script type="text/javascript">
"use strict"; angular.module("templateApp", []).run(['$templateCache', function($templateCache) {

 }]);
</script>

        </div>
    <script type="text/javascript" src="https://js.rbxcdn.com/8ac2a4e48584e739bed7e94652afbf52.js.gzip"></script>
        <script type="text/javascript" src="https://js.rbxcdn.com/3da61c013993a1c4a66392c7e2b11b22.js.gzip"></script>



    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/f27ab562314284f6db31a6b309af5085.js.gzip';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/3c98e9fd0b1301c457d4dab1df00b796.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/823c7d686e6b3d8321275740fe498f9d.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/5cf0eb71249768c86649bbf0c98591b0.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/556af22c86bce192fb12defcd4d2121c.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/7689b2fd3f7467640cda2d19e5968409.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/c2aa2fcc2b1e8ec82e1bacfdb9dfffea.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/52ff803e77bb661839e8b2c93bb5ba27.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script>


    <script>
        Roblox.XsrfToken.setToken('q/ZM1ETKuCQ4');
    </script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();



        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();



        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();


    });

</script>





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>


    <script type="text/javascript" src="https://js.rbxcdn.com/083bdeec0fffe305fb4684b7ecb55299.js.gzip"></script>


<script type="text/javascript" src="https://js.rbxcdn.com/5926309ff55b06c732ffe910f2100b1e.js.gzip"></script>

<script type="text/javascript" src="https://js.rbxcdn.com/b1a389c995e5a832c76249e69701d023.js.gzip"></script>

<div id="push-notification-registrar-settings" data-notificationshost="https://notifications.sitetest3.bladeitter.cf" data-reregistrationinterval="0" data-registrationpath="register-chrome" data-shoulddeliveryendpointbesentduringregistration="False" data-platformtype="ChromeOnDesktop">
</div>
<div id="push-notification-registration-ui-settings" data-noncontextualpromptallowed="true" data-promptonfriendrequestsentenabled="true" data-promptonprivatemessagesentenabled="false" data-promptintervals="[604800000,1209600000,2419200000]" data-notificationsdomain="https://notifications.sitetest3.bladeitter.cf" data-userid="168914479">
</div>

<script type="text/template" id="push-notifications-initial-global-prompt-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-info push-notifications-global-prompt-site-wide-body">
            <div class="push-notifications-prompt-content">
                <h5>
                    <span class="push-notifications-prompt-text">
                        Can we send you notifications on this computer?
                    </span>
                </h5>
            </div>
            <div class="push-notifications-prompt-actions">
                <button type="button" class="btn-fixed-width btn-control-xs push-notifications-prompt-accept">Notify Me</button>
                <span class="icon-close-white push-notifications-dismiss-prompt"></span>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-permissions-prompt-template">
    <div class="modal fade" id="push-notifications-permissions-prompt-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog rbx-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                            <span class="icon-close"></span>
                        </span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h5>Enable Desktop Push Notifications</h5>
                </div>
                <div class="modal-body">
                        <div>
                            Now just click <strong>Allow</strong> in your browser, and we'll start sending you push notifications!
                        </div>
                        <div class="push-notifications-permissions-prompt-instructional-image">
                                <img width="380" height="250" src="https://static.rbxcdn.com/images/Notifications/push-permission-prompt-chrome-windows-20160701.png" />
                        </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-permissions-disabled-instruction-template">
    <div class="modal fade" id="push-notifications-permissions-disabled-instruction-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog rbx-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                            <span class="icon-close"></span>
                        </span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h5>Turn Push Notifications Back On</h5>
                </div>
                <div class="instructions-body">
                    <div class="reenable-step reenable-step1-of3">
                        <h1>1</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the green lock next to the URL bar to open up your site permissions.</p>
                            <img width="270" height="139" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step1-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step2-of3">
                        <h1>2</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the drop-down arrow next to Notifications in the <strong>Permissions</strong> tab.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step2-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step3-of3">
                        <h1>3</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Select <strong>Always allow on this site</strong> to turn notifications back on.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step3-chrome-20160701.png">
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-successfully-enabled-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-system-feedback">
            <div class="alert alert-success">
                Push notifications have been enabled!
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-successfully-disabled-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-system-feedback">
            <div class="alert alert-success">
                Push notifications have been disabled.
            </div>
        </div>
    </div>
</script>
        <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "Over13" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "https://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="https://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/&gt;
    </noscript>

</body></html>