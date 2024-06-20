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
  Dashboard - ROBLOX
</title>
<link rel='stylesheet' href='/content/css/leanbasenew.css' />

<link rel='stylesheet' href='https://static.rbxcdn.com/css/page___a1cc9ef6bbcb80d31adbfed428e0c93f_m.css/fetch' />

<link href="../favicon.ico" rel="icon" />
<meta charset="UTF-8">
<meta name="author" content="ROBLOX Corporation" />
<meta name="description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration." />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
<meta name="apple-itunes-app" content="app-id=431946152" />
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY" />
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script src="ui-bootstrap-2.5.0.min.js"></script>
<script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'sitetest3.bladeitter.cf']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Member', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Avatar']);
    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'sitetest3.bladeitter.cf']);
                    _gaq.push(['c._setPageGroup', 1, 'Avatar']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

<script type="text/javascript">
    var _prum = [['id', ''],
                 ['mark', 'firstbyte', (new Date()).getTime()]];
    (function() {
        var s = document.getElementsByTagName('script')[0]
          , p = document.createElement('script');
        p.async = 'async';
        p.src = '//rum-static.pingdom.net/prum.min.js';
        s.parentNode.insertBefore(p, s);
    })();
</script>
<script type='text/javascript' src='https://js.rbxcdn.com/944ca9dbeed8344149cd70dfa5957806.js.gzip'></script>
        <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.sitetest3.bladeitter.cf/www/e.png",
                    "//ecsv2.sitetest3.bladeitter.cf/www/e.png",
                    "//ecsv2.sitetest3.bladeitter.cf/pe?t=studio",
                    "//ecsv2.sitetest3.bladeitter.cf/pe?t=diagnostic");
            }
        </script>


<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script><script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/f27ab562314284f6db31a6b309af5085.js.gzip';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/2c184f0c9c042d5309458c45dddf6d4e.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/823c7d686e6b3d8321275740fe498f9d.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/5cf0eb71249768c86649bbf0c98591b0.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/556af22c86bce192fb12defcd4d2121c.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/7689b2fd3f7467640cda2d19e5968409.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/c2aa2fcc2b1e8ec82e1bacfdb9dfffea.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/52ff803e77bb661839e8b2c93bb5ba27.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type='text/javascript' src='https://js.rbxcdn.com/9baeaa4711cb9c60d3289b3f9d852647.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/db280f4557c85e6dfeed29fa8b35a9eb.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/0970a6ec2ef6866cfbb54b9a103df3e6.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/67bb5c1d0e076adac8036b9fcca2b160.js.gzip'></script>

    <script type="text/javascript">


    googletag.cmd.push(function() {
        Roblox = Roblox || {};
        Roblox.AdsHelper = Roblox.AdsHelper || {};
        Roblox.AdsHelper.slots = [];
        Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_MyCharacter_Top_728x90", [728, 90], "31393538333930").addService(googletag.pubads()), id: "31393538333930", path: "/1015347/Roblox_MyCharacter_Top_728x90"});

        for (var key in Roblox.AdsHelper.slots) {
            var slot = Roblox.AdsHelper.slots[key].slot;
            var id = Roblox.AdsHelper.slots[key].id;
            var path = Roblox.AdsHelper.slots[key].path;

            if (slot.renderEnded != "undefined") {
                (function(slot, id)
                {
                    slot.renderEndedOld = slot.renderEnded;
                    slot.renderEnded = function() {
                        slot.renderEndedOld();
                        if ($('#' + id + '.gutter').css('display') == "none") {
                            $(document).trigger("GuttersHidden");
                        }
                        if ($('#' + id + '.filmstrip').css('display') == "none") {
                            $(document).trigger("FilmStripHidden");
                        }
                    };
                }(slot, id));
            }
        }

            googletag.pubads().setTargeting("Age", ["98", "18AndOver" ]);
                    googletag.pubads().setTargeting("A", ["98", "18AndOver" ]);
                            googletag.pubads().setTargeting("Env",  "Production");
                                            googletag.pubads().setTargeting("Gender", "Male");
                    googletag.pubads().setTargeting("PLVU", "False");
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    });
    </script>

        <link rel="canonical" href="https://www.sitetest3.bladeitter.cf/my/avatar.aspx" />
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
Roblox.Endpoints.Urls['/my/avatar.aspx'] = 'https://www.sitetest3.bladeitter.cf/my/avatar.aspx';
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
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.sitetest3.bladeitter.cf/authentication/is-logged-in';
</script>
</head>
<body id="rbx-body"
    class=""
    data-performance-relative-value="0.005"
    data-internal-page-name="Avatar"
    data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex=""></div>
<div id="image-retry-data"
     data-image-retry-max-times="10"
     data-image-retry-timer="1500">
</div>
<div id="http-retry-data"
     data-http-retry-max-timeout="0"
     data-http-retry-base-timeout="0">
</div>
    <script type="text/javascript">Roblox.XsrfToken.setToken('hpmvamnz4XRc');</script>

    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>

<style type="text/css">
    </style>
    <div id="fb-root">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ScriptManager', 'aspnetForm', ['tctl00$ctl00$cphRoblox$cphMyRobloxContent$CustomizeCharacterUpdatePanelAvatar','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$SetPlayerAvatarType','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelBodyColors','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelWardrobe','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelAccoutrements',''], [], [], 90, 'ctl00$ctl00');
//]]>
</script>
<style>
    .icon-logo-r{background-image:url(../content/images/logo_X.svg);background-repeat:no-repeat;background-size:auto auto;width:30px;height:30px;display:inline-block;vertical-align:middle;background-size:30px 30px}
    .icon-logo{background-image:url(../content/images/xscape_logo.svg);background-repeat:no-repeat;background-size:auto auto;width:118px;height:30px;display:inline-block;vertical-align:middle;background-size:118px 30px}
</style>
<?php
$get->nav();
?>


<script type="text/javascript">
    var Roblox = Roblox || {};
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

<div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer" >


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



        <noscript><div class="alert-info"><h5>Please enable Javascript to use all the features on this site.</h5></div></noscript>
<?php
$query = "SELECT COUNT(*) as users FROM accounts";
$stmt = $db->query($query);
$totalAccounts = $stmt->fetch(PDO::FETCH_ASSOC)['users'];
  
$query = "SELECT COUNT(*) as items FROM catalog";
$stmt = $db->query($query);
$totalAssets = $stmt->fetch(PDO::FETCH_ASSOC)['items'];

$query = "SELECT COUNT(*) as admins FROM accounts WHERE Role = 'Admin'";
$stmt = $db->query($query);
$totalAdmins = $stmt->fetch(PDO::FETCH_ASSOC)['admins'];
  
$query = "SELECT SUM(Robux) as totalRobux FROM accounts";
$stmt = $db->query($query);
$totalRobux = $stmt->fetch(PDO::FETCH_ASSOC)['totalRobux'];

$query = "SELECT COUNT(*) as banned FROM accounts WHERE banned = 'yes'";
$stmt = $db->query($query);
$totalBanned = $stmt->fetch(PDO::FETCH_ASSOC)['banned'];

?>
        <div class="content ">
<div id="RobuxContainer" class="row robux-container">
    <div class="robux-header">
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
    </div>
  <hr>
  <div class="section-content">
   <h3>Total Accounts: <?php echo $totalAccounts; ?></h3>
   <h3>Total Assets: <?php echo $totalAssets; ?></h3>
   <h3>Total Admins: <?php echo $totalAdmins; ?></h3>
   <h3>Total Robux: <?php echo number_format($totalRobux); ?> R$</h3>
   <h3>Total Banned Users: <?php echo $totalBanned; ?> </h3>
 </div>
  <br>
  <br>
  <br>

        <?php
        require_once '../content/functions.php';
        $get->footer();
        ?>
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