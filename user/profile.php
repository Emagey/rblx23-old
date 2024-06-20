<?php
include '../site.php';
$sessionValidator = new sessionValidator();
$sessionStatus = $sessionValidator->validateSession();
$bans = new bans;

if ($sessionStatus == 1) {
    $bans->isBanned();
}

// Retrieve the user profile based on the ID in the URL
$profileID = $usr['id'];
$query = $db->prepare("SELECT * FROM accounts WHERE id = :iduser");
$query->execute([':iduser' => $profileID]);
$user = $query->fetch();

if (!$user) {
    header('Location: 404.aspx');
} else {
    $cleanuser = $ep->remove($user['username']);
    $uid = $ep->remove($user['id']);
    $cleanblurb = $ep->remove($user['blurb']);
    $cleandn = $ep->remove($user['DisplayName']);  
}

// Fetch all friends
$sql = "SELECT * FROM friends WHERE (user1 = :id OR user2 = :id2) AND request = 'accepted'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $user['username']);
$stmt->bindParam(':id2', $user['username']);
$stmt->execute();
$friends = $stmt->fetchAll(PDO::FETCH_ASSOC);
$totalFriends = count($friends);

// Connect to the database
$servername = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Retrieve the value of the "maintenance_mode" variable from the database
$maintenance_mode = false;
$query = "SELECT value FROM site_settings WHERE name='maintenance_mode'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Errore nell'esecuzione della query: " . mysqli_error($conn));
}
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $maintenance_mode = ($row['value'] == 'true');
} else {
    echo "Attenzione: la tabella site_settings non contiene la variabile maintenance_mode.";
}

// If the site is in maintenance mode, redirect to a maintenance page
if ($maintenance_mode) {
    header("Location: /FulfillConstraint.aspx");
    exit();
}
?>



<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id="CHI1-WEB258">
    <!-- MachineID: CHI1-WEB258 -->
    <title><?=$cleanuser?> - Roblox</title>
    <meta https-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation" />
<meta name="description" content="<?=$cleanuser?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$cleanuser?> on Roblox and explore together!<?=$cleanblurb?>" />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />

    <meta name="apple-itunes-app" content="app-id=431946152" />


    <meta id="RobotsMeta" name='robots' content='noindex, nofollow' />


<script type="application/ld+json">
    {
    "@context" : "https://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://sitetest3.bladeitter.cf/",
    "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91",
    "sameAs" : [
    "https://www.facebook.com/roblox/",
    "https://twitter.com/roblox",
    "https://www.linkedin.com/company/147977",
    "https://www.instagram.com/roblox/",
    "https://www.youtube.com/user/roblox",
    "https://plus.google.com/+roblox",
    "https://www.twitch.tv/roblox"
    ]
    }
</script>    <meta property="og:site_name" content="Roblox" />
    <meta property="og:title" content="<?=$cleanuser?>&#39;s Profile" />
    <meta property="og:type" content="profile" />
        <meta property="og:url" content="https://sitetest3.bladeitter.cf/users/<?=$uid?>/profile" />
    <meta property="og:description" content="<?=$cleanuser?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$cleanuser?> on Roblox and explore together!<?=$cleanblurb?>" />
            <meta property="og:image" content="g" />
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Roblox">
    <meta name="twitter:title" content="<?=$cleanuser?>&#39;s Profile">
    <meta name="twitter:description" content="<?=$cleanuser?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$cleanuser?> on Roblox and explore together!<?=$cleanblurb?>">
    <meta name="twitter:creator">
            <meta name=twitter:image1 content="https://tr.rbxcdn.com/07df7a7808aa551102aed5464034f1ee/352/352/Avatar/Png" />
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="Roblox Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="Roblox Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="Roblox">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay" />

    <meta ng-csp="no-unsafe-eval">
    <meta name="user-data"
          data-userid="<?php echo $usr['id']; ?>"
          data-name="<?php echo $usr['username']; ?>"
          data-displayName="<?php echo $usr['DisplayName']; ?>"
          data-isunder13="<?php echo $usr['Age']; ?>"
          data-created="N/D"
          data-ispremiumuser="<?php echo $usr['premium']; ?>"
          data-hasverifiedbadge="<?php echo $usr['verified']; ?>"/>
<meta name="locale-data"
      data-language-code="en_us"
      data-language-name="English" /><meta name="device-meta"
      data-device-type="computer"
      data-is-in-app="false"
      data-is-desktop="true"
      data-is-phone="false"
      data-is-tablet="false"
      data-is-console="false"
      data-is-android-app="false"
      data-is-ios-app="false"
      data-is-uwp-app="false"
      data-is-xbox-app="false"
      data-is-amazon-app="false"
      data-is-win32-app="false"
      data-is-studio="false"
      data-is-game-client-browser="false"
      data-is-ios-device="false"
      data-is-android-device="false"
      data-is-universal-app="false"
      data-app-type="unknown"
/>
<meta name="environment-meta"
      data-is-testing-site="false" />

<meta id="roblox-display-names" data-enabled="true"></meta>

<meta name="hardware-backed-authentication-data"
      data-is-secure-authentication-intent-enabled="true"
      data-is-bound-auth-token-enabled="false"
      data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;billing.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;premiumfeatures.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;trades.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groups.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;adconfiguration.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;ads.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;assetdelivery.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;avatar.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;badges.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;catalog.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chat.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chatmoderation.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;clientsettings.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;contacts.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;contentstore.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;develop.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;economy.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;engagementpayouts.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;followings.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;friends.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gameinternationalization.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamejoin.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamepersistence.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;games.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groupsmoderation.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;itemconfiguration.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;locale.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;localizationtables.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;metrics.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;moderation.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;notifications.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;points.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;presence.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;publish.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;privatemessages.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnailsresizer.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnails.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;translationroles.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;translations.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;twostepverification.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;usermoderation.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;users.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;voice.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;realtimenotifications.sitetest3.bladeitter.cf&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}"
      data-bound-auth-token-exemptlist="{&quot;Exemptlist&quot;:[]}"
      data-hba-indexed-db-name="hbaDB"
      data-hba-indexed-db-obj-store-name="hbaObjectStore" />
<meta name="page-meta" data-internal-page-name="Profile" />

    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.sitetest3.bladeitter.cf/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.sitetest3.bladeitter.cf";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error.
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page.
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon" />


        <link rel="manifest" href="https://notifications.sitetest3.bladeitter.cf/v2/push-notifications/chrome-manifest" crossorigin="use-credentials">
    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/f74ee1e07ed467ea0e60b654ad81ae7f13c442a6b2de519a685f51f651158851.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/fde27d6cece842fd4124e82fe615077ebe3d9463f6c863857e4cc56e148a28a8.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/0f2e32dc2d6a3714b8ba5439b4bbd7edd3c9e8ae5704cec6f891bcd5456f8329.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/a0b5ba3d187410d3ed177c044e1b471cdd4ed61430acbded1660c60cd499f15e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css" />


    <link rel="canonical" href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/profile" />
    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch' />


    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/page___d49cd91b32b6716c84cb66f3a1b8104a_m.css/fetch' />


<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" href="https://css.rbxcdn.com/9a2980a72856328e3d481789bdd3b132993126cd5884fee7a8007757cc0baab3.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="PeopleList" data-bundle-source="Main" href="https://css.rbxcdn.com/09a1b026d02d2b01899e4220dcf0a2bd468fe30922b06ae2f20d4346e0925ec6.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Aliases" data-bundle-source="Main" href="https://css.rbxcdn.com/2bf6203effb94dc7909c75c6e890108aa5379f32d538d88eb1533a78cacf322d.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GroupsList" data-bundle-source="Main" href="https://css.rbxcdn.com/cf2572e23ced613ef7f36a2b662ce99b41ff1ea7e316f0a759b38673e1e2e293.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/ee82c23c0c487dc90ec8cdd1b0caf2fc786ff3285fe8be06218c9838288d46e5.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserDescription" data-bundle-source="Main" href="https://css.rbxcdn.com/fdbc0173245f68440cbb311624eb6859d2e4024b89281763b7323e318a19c4c0.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CurrentWearing" data-bundle-source="Main" href="https://css.rbxcdn.com/cc693776e7662b9afb39b185b252b4f5e8cfb19436bf079b0bc6e2e970112c9d.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ProfileBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/129861d1852d019164c5bf5998d0882e765bc89dd800e664420da05568ac5592.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ProfileStatistics" data-bundle-source="Main" href="https://css.rbxcdn.com/b52536edd49882b6c7ffbb39e44d25c8f3a96eceb0bf94b4413e6ae9f6e2477b.css" />

    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css" />


    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/8efa79e576b0df3d4c51fb1eb4e13af137d5eb8f44aef51321f7d4abbf9c3a86.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css" />


    

<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="NotificationStream" data-bundle-source="Main" href="https://css.rbxcdn.com/95cf9bd482ae807987a6905466537f8a7152cb285bf522bc2cbaf13d3abca582.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="SendrNotificationStream" data-bundle-source="Main" href="httpx://css.rbxcdn.com/883961e2af6f7ed97b0c4e73fe2acb243f025a4a777afb66467660093e3198f5.css" />
    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Chat" data-bundle-source="Main" href="https://css.rbxcdn.com/9ff00644c2caa1890ea1e1bc39ba8258c850ed19ba4fece90c16c38c73569bed.css" />




<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/397fa5920c0ba03370105d8ae88bad7e11e079a198e5156e336ec86148c00458.css" />

    <script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.RealTimeSettings = Roblox.RealTimeSettings ||
        {
            NotificationsEndpoint: "https://realtime-signalr.sitetest3.bladeitter.cf/userhub",
            NotificationsClientType: "CoreSignalR",
            MaxConnectionTime: "21600000",
            IsEventPublishingEnabled: false,
            IsDisconnectOnSlowConnectionDisabled: true,
            IsSignalRClientTransportRestrictionEnabled: true,
            IsLocalStorageInRealTimeEnabled: true,
            IsDebuggerEnabled: "False"
        }
    </script>





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"https://sitetest3.bladeitter.cf","accountInformationApi":"https://sitetest3.bladeitter.cf","accountSettingsApi":"https://sitetest3.bladeitter.cf","adConfigurationApi":"https://sitetest3.bladeitter.cf","adsApi":"https://sitetest3.bladeitter.cf","advertiseApi":"https://sitetest3.bladeitter.cf","apiGatewayCdnUrl":"https://rbxcdn.com","apiGatewayUrl":"https://sitetest3.bladeitter.cf","apiProxyUrl":"https://sitetest3.bladeitter.cf","assetDeliveryApi":"https://sitetest3.bladeitter.cf","authApi":"https://sitetest3.bladeitter.cf","avatarApi":"https://sitetest3.bladeitter.cf","badgesApi":"https://sitetest3.bladeitter.cf","billingApi":"https://sitetest3.bladeitter.cf","captchaApi":"https://sitetest3.bladeitter.cf","catalogApi":"https://sitetest3.bladeitter.cf","chatApi":"https://sitetest3.bladeitter.cf","chatModerationApi":"https://sitetest3.bladeitter.cf","contactsApi":"https://sitetest3.bladeitter.cf","contactsServiceApi":"contacts-api","contentStoreApi":"https://sitetest3.bladeitter.cf","developApi":"https://sitetest3.bladeitter.cf","domain":"sitetest3.bladeitter.cf","economyApi":"https://sitetest3.bladeitter.cf","economycreatorstatsApi":"https://sitetest3.bladeitter.cf","engagementPayoutsApi":"https://sitetest3.bladeitter.cf","followingsApi":"https://sitetest3.bladeitter.cf","friendsApi":"https://sitetest3.bladeitter.cf","gameInternationalizationApi":"https://sitetest3.bladeitter.cf","gamesApi":"https://sitetest3.bladeitter.cf","gameJoinApi":"https://sitetest3.bladeitter.cf","gameUpdateNotificationsApi":"game-update-notifications","groupsApi":"https://sitetest3.bladeitter.cf","groupsModerationApi":"https://sitetest3.bladeitter.cf","helpSite":"https://en.help.sitetest3.bladeitter.cf","inventoryApi":"https://sitetest3.bladeitter.cf","itemConfigurationApi":"https://sitetest3.bladeitter.cf","localeApi":"https://sitetest3.bladeitter.cf","localizationTablesApi":"https://sitetest3.bladeitter.cf","metricsApi":"https://sitetest3.bladeitter.cf","midasApi":"https://sitetest3.bladeitter.cf","notificationApi":"https://sitetest3.bladeitter.cf","passProductPurchasingApi":"pass-product-purchasing","bundlesProductPurchasingApi":"bundles-product-purchasing","premiumFeaturesApi":"https://sitetest3.bladeitter.cf","presenceApi":"https://sitetest3.bladeitter.cf","privateMessagesApi":"https://sitetest3.bladeitter.cf","publishApi":"https://sitetest3.bladeitter.cf","restrictedHoursServiceApi":"restricted-hours-service","screenTimeApi":"screen-time-api","shareApi":"https://sitetest3.bladeitter.cf","shareLinksApi":"sharelinks","thumbnailsApi":"https://sitetest3.bladeitter.cf","tradesApi":"https://sitetest3.bladeitter.cf","translationRolesApi":"https://sitetest3.bladeitter.cf","twoStepVerificationApi":"https://sitetest3.bladeitter.cf","universalAppConfigurationApi":"universal-app-configuration","userAgreementsServiceApi":"user-agreements","userModerationApi":"https://sitetest3.bladeitter.cf","usersApi":"https://sitetest3.bladeitter.cf","userSettingsApi":"user-settings-api","voiceApi":"https://sitetest3.bladeitter.cf","websiteUrl":"https://sitetest3.bladeitter.cf"};




    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "http%3a%2f%2famazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    
        
    Roblox.EnvironmentUrls["websiteUrl"] = "https://sitetest3.bladeitter.cf";
        
</script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>



    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='headerinit' type='text/javascript' src='https://js.rbxcdn.com/79cd995887c89cecacb2a57605275253.js'></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="https://js.rbxcdn.com/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="https://js.rbxcdn.com/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="https://js.rbxcdn.com/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js"></script>



<meta name="sentry-meta"
      data-env-name="production"
      data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367"
      data-sample-rate="0" /><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="https://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>

<meta name="roblox-tracer-meta-data"
      data-access-token=""
      data-service-name="Web"
      data-tracer-enabled="false"
      data-api-sites-request-allow-list="friends.sitetest3.bladeitter.cf,chat.sitetest3.bladeitter.cf,thumbnails.sitetest3.bladeitter.cf,games.sitetest3.bladeitter.cf,gameinternationalization.sitetest3.bladeitter.cf,localizationtables.sitetest3.bladeitter.cf"
      data-sample-rate="0"
      data-is-instrument-page-performance-enabled="false"/><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="https://js.rbxcdn.com/2ad6b2753f8558f55fc35440842b58f6a8f74b40879dd503fa8394beac7d3370.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RealTime" data-bundle-source="Main" src="https://js.rbxcdn.com/fd106ef8d2d69ab7f0fe2c2dbbc983817c9713f6f0a073d5f1ede5c3d273abb8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossTabCommunication" data-bundle-source="Main" src="https://js.rbxcdn.com/948f3bfc9bbd152f537592b51c1a7765cdc0dfc538d74b7e5fc696c476c8792b.js"></script>
    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};

    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script>
    <script type="text/javascript">
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("html_head");
        }
    </script>




    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>



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
</script>    
    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.sitetest3.bladeitter.cf/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://sitetest3.bladeitter.cf/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://sitetest3.bladeitter.cf/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.sitetest3.bladeitter.cf/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.sitetest3.bladeitter.cf/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.sitetest3.bladeitter.cf/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.sitetest3.bladeitter.cf/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.sitetest3.bladeitter.cf/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.sitetest3.bladeitter.cf/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.sitetest3.bladeitter.cf/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://sitetest3.bladeitter.cf/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://sitetest3.bladeitter.cf/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://sitetest3.bladeitter.cf/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://sitetest3.bladeitter.cf/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://sitetest3.bladeitter.cf/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://sitetest3.bladeitter.cf/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://sitetest3.bladeitter.cf/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://sitetest3.bladeitter.cf/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://sitetest3.bladeitter.cf/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://sitetest3.bladeitter.cf/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.sitetest3.bladeitter.cf/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.sitetest3.bladeitter.cf/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.sitetest3.bladeitter.cf/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.sitetest3.bladeitter.cf/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.sitetest3.bladeitter.cf/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.sitetest3.bladeitter.cf/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.sitetest3.bladeitter.cf/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://sitetest3.bladeitter.cf/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://sitetest3.bladeitter.cf/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://sitetest3.bladeitter.cf/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://sitetest3.bladeitter.cf/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://sitetest3.bladeitter.cf/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://sitetest3.bladeitter.cf/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://sitetest3.bladeitter.cf/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://sitetest3.bladeitter.cf/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://sitetest3.bladeitter.cf/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://sitetest3.bladeitter.cf/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://sitetest3.bladeitter.cf/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://sitetest3.bladeitter.cf/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://sitetest3.bladeitter.cf/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://sitetest3.bladeitter.cf/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://sitetest3.bladeitter.cf/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://sitetest3.bladeitter.cf/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://sitetest3.bladeitter.cf/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://sitetest3.bladeitter.cf/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://sitetest3.bladeitter.cf/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://sitetest3.bladeitter.cf/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://sitetest3.bladeitter.cf/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://sitetest3.bladeitter.cf/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://sitetest3.bladeitter.cf/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://sitetest3.bladeitter.cf/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://sitetest3.bladeitter.cf/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://sitetest3.bladeitter.cf/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://sitetest3.bladeitter.cf/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://sitetest3.bladeitter.cf/authentication/is-logged-in';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: true,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>


<meta name="thumbnail-meta-data"
      data-is-webapp-cache-enabled="False"
      data-webapp-cache-expirations-timespan="00:01:00"
      data-request-min-cooldown="1000"
      data-request-max-cooldown="30000"
      data-request-max-retry-attempts="4"
      data-request-batch-size="100"
      data-thumbnail-metrics-sample-size="20"
      data-concurrent-thumbnail-request-count="4"/>
                          

</head>
<body id="rbx-body"
      dir="ltr"
      class="rbx-body   dark-theme gotham-font"
      data-performance-relative-value="0.005"
      data-internal-page-name="Profile"
      data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="DjCUgcAxSAVG" />

    
    <script src="https://sitetest3.bladeitter.cf/js/hsts.js?v=3" type="text/javascript" id="hsts" async></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Linkify" data-bundle-source="Main" src="https://js.rbxcdn.com/c379cf5d3d1d768411d61450b75635695058f905a96e00173122282620a96da3.js"></script>



<div id="image-retry-data"
     data-image-retry-max-times="30"
     data-image-retry-timer="500"
     data-ga-logging-percent="10">
</div>
<div id="http-retry-data"
     data-http-retry-max-timeout="0"
     data-http-retry-base-timeout="0"
     data-http-retry-max-times="1">
</div>
    



<div id="wrap" class="wrap no-gutter-ads logged-in"
     data-gutter-ads-enabled="false">






<div id="navigation-container"
     class="dark-theme gotham-font  ixp-marketplace-rename-treatment"
     data-number-of-autocomplete-suggestions="7"
     data-show-moderation-portal-link="false"
     data-is-redirect-library-to-creator-marketplace-enabled="True">
    <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
  <div class="container-fluid">
    <div class="rbx-navbar-header">
      <div id="header-menu-icon" class="rbx-nav-collapse">
        <button type="button" class="btn-navigation-nav-menu-md menu-button">
          <span class="icon-nav-menu"></span>
        </button>
      </div>
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">
          <span class="icon-logo"></span><span class="icon-logo-r"></span>
        </a>
      </div>
    </div>
    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/robux?ctx-nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
              <span class="font-header-2 robux-btn">Robux</span>
          </div>
        </a>
      </li>
    </ul>

    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/robux?ctx=nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
            <span class="font-header-2 robux-btn">Robux</span>
          </div>
        </a>
      </li>
    </ul>
    <div id="right-navigation-header"></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container">
  <div verificationUpsell-container></div>
</div>
<div id="phoneVerificationUpsell-container">
  <div phoneVerificationUpsell-container></div>
</div>
<div id="contactMethodPrompt-container">
  <div contactMethodPrompt-container></div>
</div>


</div>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <main class="container-main
                
                
                
                
                
                "
         id="container-main" tabindex="-1">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>

        <div class="alert-container">
          <?php
if($isAnnouncementsEnabled == 1){
echo '<div class="alert-info" role="alert">'.$announcementsMessage.'</div>';
}
?>
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>


            

                <div id="account-security-prompt-container"></div>

                <div class="alert-cookie-notice" data-cookie-notice-timeout="20000">
                    Roblox uses cookies to offer you a better experience. For further information, including information on how to withdraw consent and how to manage the use of cookies on Roblox, please refer to our <a href="https://sitetest3.bladeitter.cf/info/privacy?locale=en_us">Privacy and Cookie Policy</a>.)
                    <span class="icon-close cookie-law-notice-dismiss"></span>
                </div>

        </div>


        <div class="content">

                            <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    

<iframe name="Roblox_Profile_Top_728x90"
        allowtransparency="true"
        frameborder="0"
        height="110"
        scrolling="no"
        data-src=""
        src="https://sitetest3.bladeitter.cf/user-sponsorship/1"
        width="728"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_Profile_Top_728x90"></iframe>
                </div>
            
    <script src="https://roblox-api.arkoselabs.com/fc/api/"></script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.I18nData = Roblox.I18nData || {};
    Roblox.I18nData.isI18nEnabledForGroups = true;
</script>

<div class="profile-container" ng-modules="robloxApp, profile, angularLazyImg, peopleList, aliases, groupList, userDescription">
    <div ng-controller="profileBaseController">


<div class="section profile-header " >

    <div class="section-content profile-header-content" ng-controller="profileHeaderController">
<script type="text/javascript">

    var Roblox = Roblox || {};
    Roblox.ProfileHeaderData = {"profileusername":"<?=$cleanuser?>","previoususernames":"test"};
</script>

<div data-profileuserid="<?=$uid?>"
     data-friendscount="<?=$totalFriends?>"
     data-followerscount="0"
     data-followingscount="0"
     data-arefriends=false
     data-friendurl="https://sitetest3.bladeitter.cf/users/<?=$uid?>/friends#!/friends"
     data-incomingfriendrequestpending=false
     data-maysendfriendinvitation=false
     data-friendrequestpending=false
     data-mayfollow=false
     data-isfollowing=false
     data-canmessage=false
     data-messagesdisabled="false"
     data-messageurl="/messages/compose?recipientId=<?=$uid?>"
     data-canbefollowed=false
     data-cantrade=false
     data-isblockbuttonvisible=false
     data-getfollowscript="Roblox.GameLauncher.followPlayerIntoGame(<?=$uid?>, &#39;5dcc7454-7d44-4e91-90a7-cf4c827f24f4&#39;, &#39;JoinUser&#39;);var referrerId = Roblox.UrlParser ? Roblox.UrlParser.getParameterValueByName(&#39;rbxp&#39;) : null; if (Roblox.GamePlayEvents) { var context = Roblox.GamePlayEvents.contextCategories.joinUser; Roblox.GamePlayEvents.SendGamePlayIntent(context, &#39;&#39;, referrerId, &#39;5dcc7454-7d44-4e91-90a7-cf4c827f24f4&#39;); }"
     data-ismorebtnvisible=true
     data-isvieweeblocked=false
     data-mayimpersonate=false
     data-mayupdatestatus="true"
     data-updatestatusurl=""
     data-statustext=''
     data-statusdate='1/1/0001 12:00:00 AM'
     data-editstatusmaxlength="254"
     data-ischatdisabledbyprivacysetting="false"
     data-angularpresencestatusenabled="false"
     profile-header-data
     set-message-btn-display="setMessageBtnDisplay(layout)"
     profile-header-layout="profileHeaderLayout"
     class="hidden"></div>

        <div class="profile-header-top">
        <div class="avatar avatar-headshot-lg card-plain profile-avatar-image">
            <span class="avatar-card-link avatar-image-link">
                <thumbnail-2d ng-if="profileHeaderLayout.profileUserId"
                              class="avatar-card-image profile-avatar-thumb"
                              thumbnail-target-id="profileHeaderLayout.profileUserId"
                              thumbnail-type="thumbnailTypes.avatarHeadshot">
                </thumbnail-2d>
            </span>
            <script type="text/javascript">
                $(".profile-avatar-thumb img").on('load', function () {
                    if (Roblox && Roblox.Performance) {
                        Roblox.Performance.setPerformanceMark("head_avatar");
                    }
                });
            </script>
                    <div ng-non-bindable>
                            <span class="avatar-status online profile-avatar-status icon-online"
                                  title="Website"></span>
                    </div>
        </div>
        <div class="header-caption">
            <div class="header-names">
                <div class="header-title">
                    <h1 ng-non-bindable
                        class="profile-name text-overflow">
                        <?=$cleandn?>
                    </h1>
                    <h1 ng-non-bindable
                        class="profile-name text-overflow font-header-1">
                        <?=$cleandn?>
                    </h1>
                    
                </div>
                    <div class="profile-display-name font-caption-body text text-overflow"
                         ng-non-bindable>
                        @<?=$cleanuser?>
                    </div>
                
            </div>
            <div class="header-details">
                <ul class="details-info">
                    <li>
                        <div class="text-label font-caption-header"
                             ng-bind="'Label.Friends' | translate"></div>
                        <a class="text-name"
                           href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/friends#!/friends"
                           ng-cloak>
                            <span class="font-header-2"
                                    title="{{ profileHeaderLayout.friendsCount | number }}"
                                    ng-bind="profileHeaderLayout.friendsCount | abbreviate"></span>
                        </a>
                    </li>
                    <li>
                        <div class="text-label font-caption-header"
                             ng-bind="'Label.Followers' | translate"></div>
                        <a class="text-name"
                           href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/friends#!/followers"
                           ng-cloak>
                            <span class="font-header-2"
                                  title="{{ getStringFromCountValue(profileHeaderLayout.followersCount) }}"
                                  ng-bind="getAbbreviatedStringFromCountValue(profileHeaderLayout.followersCount)"></span>
                        </a>
                    </li>
                    <li>
                        <div class="text-label font-caption-header"
                             ng-bind="'Label.Following' | translate"></div>
                        <a class="text-name"
                           href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/friends#!/following"
                           ng-cloak>
                            <span class="font-header-2"
                                  title="{{ getStringFromCountValue(profileHeaderLayout.followingsCount) }}"
                                  ng-bind="getAbbreviatedStringFromCountValue(profileHeaderLayout.followingsCount)"></span>
                        </a>
                    </li>
                </ul>
            </div><!--header-details-->
        </div>
            <div user-status></div>
    </div>
    <p ng-show="profileHeaderLayout.hasError"
       ng-cloak
       class="text-error header-details-error"
       ng-bind="profileHeaderLayout.errorMsg"></p>
    <div id="profile-header-more"
         class="profile-header-more"
         ng-show="profileHeaderLayout.isMoreBtnVisible"
         ng-cloak>
        <button id="popover-link"
                class="rbx-menu-item btn-generic-more-sm"
                popover-placement="bottom-right"
                popover-trigger="'outsideClick'"
                uib-popover-template="'profile-header-popover-contents'">
            <span class="icon-more"></span>
        </button>
        <script type="text/ng-template" id="profile-header-popover-contents">
            <ul class="dropdown-menu"
                role="menu">
                <li ng-show="profileHeaderLayout.showMessageLink"
                    id="profile-message-in-menu">
                    <button role="button"
                            id="profile-message"
                            ng-click="sendMessage()"
                            ng-cloak
                            ng-bind="'Action.Message' | translate"></button>
                </li>
                <li ng-show="profileHeaderLayout.mayFollow"
                    ng-cloak>
                    <button role="button"
                            ng-bind="profileHeaderLayout.isFollowing ? 'Action.Unfollow' : 'Action.Follow' | translate"
                            ng-click="checkIsFollowing()"
                            id="profile-follow-user"
                            ng-cloak></button>
                </li>
                    <li ng-show="profileHeaderLayout.canTrade"
                        ng-cloak>
                        <button role="button"
                                ng-click="tradeItems()"
                                id="profile-trade-items"
                                ng-bind="'Action.TradeItems' | translate"></button>
                    </li>
                <li ng-show="profileHeaderLayout.isBlockButtonVisible"
                    ng-cloak>
                    <button role="button"
                            ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Action.BlockUser' : 'Action.UnblockUser'| translate"
                            ng-click="blockUser()"
                            id="profile-block-user"
                            ng-cloak></button>
                </li>
                                    <li>
                        <a href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/inventory/"
                           ng-bind="'Action.Inventory' | translate"></a>
                    </li>
                                    <li>
                        <a href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/favorites#!/places"
                           ng-bind="'Action.Favorites' | translate"></a>
                    </li>
            </ul>
        </script>
        <script type="text/javascript">
                $(function() {
                    $(".details-actions, .mobile-details-actions").on("click", ".profile-join-game", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        // NOTE: global var set due to legacy game launch code.
                        play_placeId = 0;
                        try {
                            Roblox.GameLauncher.followPlayerIntoGame(<?=$uid?>, '5dcc7454-7d44-4e91-90a7-cf4c827f24f4', 'JoinUser');var referrerId = Roblox.UrlParser ? Roblox.UrlParser.getParameterValueByName('rbxp') : null; if (Roblox.GamePlayEvents) { var context = Roblox.GamePlayEvents.contextCategories.joinUser; Roblox.GamePlayEvents.SendGamePlayIntent(context, '', referrerId, '5dcc7454-7d44-4e91-90a7-cf4c827f24f4'); };
                            if (!true)
                            {
                                var referrerId = Roblox.UrlParser ? Roblox.UrlParser.getParameterValueByName("rbxp") : null;
                                if (Roblox.GamePlayEvents) {
                                    var context = Roblox.GamePlayEvents.contextCategories.joinUser;
                                    Roblox.GamePlayEvents.SendGamePlayIntent(context, play_placeId, referrerId);
                                }
                            }
                        }
                        catch (e) {
                            if (GoogleAnalyticsEvents && GoogleAnalyticsEvents.FireEvent) {
                                GoogleAnalyticsEvents.FireEvent(["Protocol", "Launch Failure", "follow", 0]);
                            }

                        }
                        return false;
                    });
                });
        </script>
    </div>

    <captcha activated="captcha.activated"
             captcha-action-type="captcha.actionTypes.followUser"
             captcha-failed="followUserCaptchaFailed"
             captcha-passed="followUserCaptchaPassed"
             input-params="captcha.inputParams"
             return-token-in-success-cb="true"></captcha>

    </div><!--profile-header-content-->
</div><!-- profile-header -->

        <div ng-include="'system-feedback'"></div>
        <div class="rbx-tabs-horizontal">
            <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist"
                profile-tab-click>
                <li class="rbx-tab active">
                    <a class="rbx-tab-heading" href="#about" id="tab-about">
                        <span class="text-lead">About</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
                <li class="rbx-tab">
                    <a class="rbx-tab-heading" href="#creations" id="tab-creations">
                        <span class="text-lead">Creations</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content rbx-tab-content">
                <div class="tab-pane active" id="about">
                    <div class="section profile-about" ng-controller="profileUtilitiesController">

        <div class="social-links">
        </div>
        <profile-description></profile-description>

    <div class="section-content remove-panel">
        <div id="aliases-container">
            <div class="border-top" ng-hide="isAliasesLoaded">
                <span class="spinner spinner-default"></span>
            </div>
            <div aliases-container></div>
        </div>
        <div class="border-top profile-about-footer">

                <a href="https://sitetest3.bladeitter.cf/abusereport/UserProfile?id=<?=$uid?>&amp;redirectUrl=http%3A%2F%2Fsitetest3.bladeitter.cf%2Fusers%2F<?=$uid?>%2Fprofile" class="abuse-report-link abuse-report-modal">
                    <span class="text-error" ng-bind="'Label.ReportAbuse' | translate"></span>
                </a>

        </div>
    </div>
</div>

<div id="profile-current-wearing-avatar" class="section profile-avatar"></div>

    <div id="people-list-container" class="section no-self-bootstrap">
        <div people-list-container></div>
    </div>

    <div class="section layer profile-collections" ng-controller="profileCollectionsController">
        <div class="container-header">
            <h2 ng-bind="'Heading.Collections' | translate"></h2>
            <div class="collection-btns">
                    <a href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/inventory/" class="btn-min-width btn-secondary-xs btn-more inventory-link see-all-link-icon" ng-bind="'Action.Inventory' | translate"></a>
                            </div>
        </div>
            <div class="section-content remove-panel" ng-include="'profile-collections-section'"></div>

    </div>

<div groups-showcase display-user-id="<?=$uid?>"></div>


    <div class="container-list favorite-games-container">
        <div class="container-header">
            <h2 ng-bind="'Heading.FavoriteGames' | translate"></h2>
            <a  href="https://sitetest3.bladeitter.cf/users/<?=$uid?>/favorites#!/places" class="btn-secondary-xs btn-min-width btn-more see-all-link-icon">Favorites</a>
        </div>

        

<ul class="hlist game-cards">


<li class="list-item game-card game-tile">
    <div class="game-card-container">
        <a href="https://sitetest3.bladeitter.cf/games/refer?SortFilter=5&amp;PlaceId=8703553621&amp;Position=1&amp;SortPosition=1&amp;PageId=2dc7f6c3-94b7-4c0b-acc8-580767aef925&amp;PageType=Profile" class="game-card-link">
            <div class="game-card-thumb-container">
                    <img class="game-card-thumb"
                          src="https://tr.rbxcdn.com/823441ca4178a9fe7b041698b471dae5/150/150/Image/Jpeg"
                         
                         alt="Forsaken [HORROR] CHAPTER 2 EPISODE 1"
                         thumbnail='{"Final":true,"Url":"https://tr.rbxcdn.com/823441ca4178a9fe7b041698b471dae5/150/150/Image/Jpeg","RetryUrl":null,"UserId":0,"EndpointType":"Avatar"}' image-retry />
            </div>
            <div class="game-card-name game-name-title" title="Forsaken [HORROR] CHAPTER 2 EPISODE 1" ng-non-bindable>
                Forsaken [HORROR] CHAPTER 2 EPISODE 1
            </div>
            <div class="game-card-info">
                    <span class="info-label icon-votes-gray"></span>
                    <span class="info-label vote-percentage-label ">52%</span>
                    <span class="info-label no-vote hidden"></span>
                    <span class="info-label icon-playing-counts-gray"></span>
                    <span class="info-label playing-counts-label" title="507">507</span>
            </div>
        </a>
    </div>
</li>
</ul>
    </div>


    <div class="section" id="roblox-badges-container"></div>

    <div class="section" id="player-badges-container"></div>

    <div class="section profile-statistics" id="profile-statistics-container"></div>

                </div>
                <div class="tab-pane"
                     id="creations"
                     profile-empty-tab>
                    
    <div class="profile-game" ng-controller="profileGridController" ng-init="init('game-cards','game-container')"
         ng-class="{'section': !isGridOn,
                    'container-list': isGridOn}">
        <div class="container-header">
            <h3 ng-non-bindable>Experiences</h3>
            <div class="container-buttons">
                <button class="profile-view-selector" title="Slideshow View" type="button" ng-click="updateDisplay(false)" ng-class="{'btn-secondary-xs btn-generic-slideshow-xs': !isGridOn, 'btn-control-xs btn-generic-slideshow-xs': isGridOn}">
                    <span class="icon-slideshow" ng-class="{'selected': !isGridOn}"></span>
                </button>
                <button class="profile-view-selector" title="Grid View" type="button" ng-click="updateDisplay(true)" ng-class="{'btn-secondary-xs btn-generic-grid-xs': isGridOn, 'btn-control-xs btn-generic-grid-xs': !isGridOn}">
                    <span class="icon-grid" ng-class="{'selected': isGridOn}"></span>
                </button>
            </div>
        </div>
        <div ng-show="isGridOn" class="game-grid">
            <ul class="hlist game-cards" style="max-height: {{containerHeight}}px" horizontal-scroll-bar="loadMore()">
                        <div class="game-container" data-index="0" ng-class="{'shown': 0 < visibleItems}">


<li class="list-item game-card game-tile">
    <div class="game-card-container">
        <a href="https://sitetest3.bladeitter.cf/games/refer?PlaceId=2296905931&amp;Position=1&amp;PageType=Profile" class="game-card-link">
            <div class="game-card-thumb-container">
                    <img class="game-card-thumb"
                         data- src="https://t4.rbxcdn.com/c65f872ecb5387c0247897002cb3e9e0"
                         
                         alt="MAPPA"
                         thumbnail='{"Final":true,"Url":"https://t4.rbxcdn.com/c65f872ecb5387c0247897002cb3e9e0","RetryUrl":null,"UserId":0,"EndpointType":"Avatar"}' image-retry />
            </div>
            <div class="game-card-name game-name-title" title="MAPPA" ng-non-bindable>
                MAPPA
            </div>
            <div class="game-card-info">
                    <span class="info-label icon-votes-gray"></span>
                    <span class="info-label vote-percentage-label ">100%</span>
                    <span class="info-label no-vote hidden"></span>
                    <span class="info-label icon-playing-counts-gray"></span>
                    <span class="info-label playing-counts-label" title="0">0</span>
            </div>
        </a>
    </div>
</li>

                        </div>

            </ul>
            <a ng-click="loadMore()" class="btn btn-control-xs load-more-button" ng-show="1 > 6 * NumberOfVisibleRows">Load More</a>
        </div>
        <div id="games-switcher" class="switcher slide-switcher games" ng-hide="isGridOn" switcher itemscount="switcher.games.itemsCount" currpage="switcher.games.currPage">
                        <ul class="slide-items-container switcher-items hlist">
                    <li class="switcher-item slide-item-container active" ng-class="{'active': switcher.games.currPage == 0}" data-index="0">
                        <div class="col-sm-6 slide-item-container-left">
                            <div class="slide-item-emblem-container">
                                <a href="https://sitetest3.bladeitter.cf/games/refer?PlaceId=2296905931&amp;Position=1&amp;PageType=Profile">
                            <img class="slide-item-image"
                                 src="https://t4.rbxcdn.com/c65f872ecb5387c0247897002cb3e9e0"
                                 data-src="https://t4.rbxcdn.com/c65f872ecb5387c0247897002cb3e9e0"
                                 data-emblem-id="2296905931" thumbnail='{"Final":true,"Url":"https://t4.rbxcdn.com/c65f872ecb5387c0247897002cb3e9e0","RetryUrl":null,"UserId":0,"EndpointType":"Avatar"}' image-retry />

                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 slide-item-container-right games">
                            <div class="slide-item-info">
                                <div class="text-overflow slide-item-name games font-title" ng-non-bindable>MAPPA</div>
                                <p class="text-description para-overflow slide-item-description games" ng-non-bindable>Mappa creata da <?=$cleanuser?></p>
                            </div>
                            <div class="slide-item-stats">
                                <ul class="hlist">
                                    <li class="list-item">
                                        <div class="text-label slide-item-stat-title" ng-if="appMeta.isI18nEnabled" ng-bind="'Label.Playing' | translate"></div>
                                        <div class="text-label slide-item-stat-title" ng-if="!appMeta.isI18nEnabled">Playing</div>
                                        <div class="text-lead slide-item-members-count">0</div>
                                    </li>
                                    <li class="list-item">
                                        <div class="text-label slide-item-stat-title" ng-if="appMeta.isI18nEnabled" ng-bind="'Label.Visits' | translate"></div>
                                        <div class="text-label slide-item-stat-title" ng-if="!appMeta.isI18nEnabled">Visits</div>
                                        <div class="text-lead text-overflow slide-item-my-rank games">347</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        </ul>


        </div>
    </div>


    <div class="section"
         ng-controller="profileUtilitiesController"
         ng-init="getPlayerAssets('10')">
        <div ng-if="assets.length > 0" ng-include="'profile-player-assets'"></div>
    </div>
    <div class="section"
         ng-controller="profileUtilitiesController"
         ng-init="getPlayerAssets('11')">
        <div ng-if="assets.length > 0" ng-include="'profile-player-assets'"></div>
    </div>


                    <div class="col-xs-12 section-content-off section-content"
                         ng-if="profileLayout.userHasNoCreations">
                        <span ng-non-bindable><?=$cleanuser?> has no creations.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="profile-ads-container">
        <div id="ProfilePageAdDiv1" class="profile-ad">


<iframe name="Roblox_Profile_Left_300x250"
        allowtransparency="true"
        frameborder="0"
        height="270"
        scrolling="no"
        data-src=""
        src="https://sitetest3.bladeitter.cf/user-sponsorship/3"
        width="300"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_Profile_Left_300x250"></iframe>
        </div>
        <div id="ProfilePageAdDiv2" class="profile-ad">


<iframe name="Roblox_Profile_Right_300x250"
        allowtransparency="true"
        frameborder="0"
        height="270"
        scrolling="no"
        data-src=""
        src="https://sitetest3.bladeitter.cf/user-sponsorship/3"
        width="300"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_Profile_Right_300x250"></iframe>
        </div>
    </div>
</div>


        </div>
            </main>
<!--Bootstrap Footer React Component -->


    <div id="chat-container"
         class="chat chat-container"
         chat-base>
    </div>
    <div id="user-agreements-checker-container"></div>
<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"></div>


<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.PlaceLauncher === "undefined") {
        Roblox.PlaceLauncher = {};
    }
    var isRobloxIconEnabledForRetheme = "True";
    var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
    Roblox.PlaceLauncher.Resources = {
        RefactorEnabled: "True",
        IsProtocolHandlerBaseUrlParamEnabled: "False",
        ProtocolHandlerAreYouInstalled: {
            play: {
                content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
                buttonText: "Download and Install Roblox",
                footerContent: "<a href='https://assetgame.sitetest3.bladeitter.cf/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                buttonText: "Download Studio"
            }
        },
        ProtocolHandlerStartingDialog: {
            play: {
                content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
            },
            loader: "<span class='spinner spinner-default'></span>"
        }
    };
</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px"
     data-new-plugin-events-enabled="True"
     data-event-stream-for-plugin-enabled="True"
     data-event-stream-for-protocol-enabled="True"
     data-is-join-attempt-id-enabled="True"
     data-is-game-launch-interface-enabled="True"
     data-is-protocol-handler-launch-enabled="True"
     data-is-duar-auto-opt-in-enabled="true"
     data-is-duar-opt-out-disabled="true"
     data-is-user-logged-in="True"
     data-os-name="Windows"
     data-protocol-name-for-client="roblox-player"
     data-protocol-name-for-studio="roblox-studio"
     data-protocol-roblox-locale="en_us"
     data-protocol-game-locale="en_us"
     data-protocol-url-includes-launchtime="true"
     data-protocol-detection-enabled="true"
     data-protocol-separate-script-parameters-enabled="true"
     data-protocol-avatar-parameter-enabled="true"
     data-protocol-channel-name="LIVE"
     data-protocol-studio-channel-name="LIVE"
     data-protocol-player-channel-name="LIVE">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" />
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" />
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed"
     class="ph-clickalwaysallowed"
     
     style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future!
                
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
         return RobloxLaunch.CheckRobloxInstall('https://sitetest3.bladeitter.cf/Download');
}
</script>


    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for visiting Roblox</h3>
            </div>
            <div class="modal-content-container">
                <div class="ph-installinstructions-body ">


        <ul class="modal-col-4">
            <li class="step1-of-4">
                <h2>1</h2>
                <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
                <div style="margin-top:60px">
                    <img data-delaysrc="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" />
                </div>
            </li>
            <li class="step2-of-4">
                <h2>2</h2>
                <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" />
            </li>
            <li class="step3-of-4">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" />
            </li>
            <li class="step4-of-4">
                <h2>4</h2>
                <p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
                <div class="VisitButton VisitButtonContinueGLI">
                    <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                </div>
            </li>
        </ul>

                </div>
            </div>
            <div class="xsmall">
                The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='clientinstaller' type='text/javascript' src='https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js'></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.sitetest3.bladeitter.cf';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
            
        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
            Roblox.Client.ResumeTimer(eval(continuation));
        }
        
</script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image" />
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
    </script>
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog"  class="modal-dialog">
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
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays data-no-click>
                        <img class="modal-thumb" alt="generic image"/>
                    </div>
                    <div class="modal-checkbox checkbox">
                        <input id="modal-checkbox-input" type="checkbox"/>
                        <label for="modal-checkbox-input"></label>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href id="confirm-btn"><span></span></a>
                    <a href id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src='https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif' alt="Processing..." />
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
</div>





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>


    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'sitetest3.bladeitter.cf';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                    Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                    Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>




    

    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='intl-polyfill' type='text/javascript' src='https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/558cbed0ebd127bd21f1045302a44c69a092fc29acd3ed983ecd5bcb46ed2e84.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>


    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='leanbase' type='text/javascript' src='https://js.rbxcdn.com/5c2d14ffda5e1890cf34ea31c7c548fb.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/1fb8b744dd67c1394e4b32036254dea94cc76823725f80dcb366ce43d3ca8af1.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/bf815a7aa9da152ef55d476206b39c24d0c89d6a6340e36b73faf98303afcfdb.js"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/5301e4bf0d04097eecd473d709fc8b566b5b2223d61e923fc643996c86cabf38.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>


    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='angular' type='text/javascript' src='https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js'></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/1c7ab1e84db2ce066ae33c0fd3bb9bcf375ad7b9e4d4bcdfc8dff8fa60cb59f8.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="https://js.rbxcdn.com/7960791e4133cd8edfcf4f02940e869d3b5d38f0c9abcdfa2335c2c1d8c957f2.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails3d" data-bundle-source="Main" src="https://js.rbxcdn.com/ffe348dab7ddaadda529b9957be1a74eb1715aac6091c948950c91cb780cc97c.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceStatus" data-bundle-source="Main" src="https://js.rbxcdn.com/077dd64734d3aa9a884874f85f2f514a239688c33a0fdf3f90365e0e7436ec3b.js"></script>



<div id="presence-registration-bootstrap-data"
     data-is-enabled="True"
     data-interval="15000"></div><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
    </div>

    <div ng-modules="pageTemplateApp">
        <script type="text/javascript" src="https://js.rbxcdn.com/4014101521575fb09c911c264a2452f4.js"></script>
    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/76ce11db9c5a3f009a70ea6ca846c68f657d30147d519f98e1eebe925485ce41.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/fa9731787e9cb858f9ede7da518b44bcce78aef3637547403e2d29fd147db3db.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8849783a45e85b04232d3a71e9efc2ce8a5d4e0e072bb37740fe2f5acd0ef50a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a5d76f662cc98d13a65d323097497aa93948409caf12b33464400259111e8082.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/44e6fe0aaaa075de7ab794c70ead3b501f709f0caa4499218e81b9cf477794cd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a649fadab38b9a8866624ed6302536fa09f91452edf32ae01c023f08ca33562a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6ca3c15b433b9894e4ba49ed9fb163a8b78a9d26e86958677bc42c6309ff0374.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9046a303681e15f689ae09057b4dbf9c8ecf074be4d921d2d428dde7744bf03e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f173dcac2f8b211cb232d5295be7540816f52e299ec7086b07f27ddf9ce0a2c9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/98b97c4779bb10baadfc8a5a1ae049bba5dd9409be06896754f1446ab2048a60.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/0d91a4635faab1f21b8d0a88baa0db4cb1cfb9896182216edfb802d83082b873.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/161c72b59b82ca89668a77dae275694d82f11d67f561f1fe6ac98bce0a310eb8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4cff9ff97602ca772f8b90c46cb6fc674e4b575761f0c3941af21d65cb84f519.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="https://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/4b4ed339879e21ebd989965a4ade1a7d6f3181871df8d816198c1cdc73b629d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/652fb1e29ca15ae17497ec3eb9aa4f4ebc9be9e0f4be6e68e2ff6ef6bf82c535.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/34bae4c284cebfa0950c4e76dbc64b8ea982260cc4c29ec7e5ab9dfcc37b4a8b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="https://js.rbxcdn.com/fc1a0f5742428ab44fce0b8e125aaf25e1d0c78fff49989ecde0c57490aedb74.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/82a6f0cb70b3e6ac37762e1194fcdd6d126fbc866ff8806439294ae662127763.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b421e34a51115870ea1b5f7db1e30ceaa8a7ff5a8704b346a7c2670607350acc.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/36b66161150882a6d659d2b1a27eb6c38470a8b24e618aad2d2655fc60248118.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/59485b37071ec0c2133d6378e020dbcd93181f760f927762440c4901ba255640.js"></script>

    

    
    <script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/bcba3a83febab35eb41f3a0b8b96db37.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';</script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
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
        

    });

</script>


    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
    };
</script>

    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='https://js.rbxcdn.com/33fe3f59f6d72f0052fe00ebfe7d2c9b.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/dcb8d58df169ad0a416eacc6d6621181d1a6e3cf0aadbf1430e4e39b6241c633.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" src="https://js.rbxcdn.com/99947c5d94986d31dfddd0fc5b5b9693f681edba4d005a96c93aea65315dd49f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/978681f40e863a74bf0759d6ae27622db52b16cb4ff3af5ef942866cba7aef73.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1a2a09cc686613fac0c6ab26411db07ed01d8b509558112c2ab885b28f3c96b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PeopleList" data-bundle-source="Main" src="https://js.rbxcdn.com/2f3e6c8af648612583437634a98ebd4a764023904658fa54548c0d0e23b0e6d6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/85ed22a4ebb30dc7d2430167dc9ee0a29803bb069c9a47ae76ae20f1b756dc5e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9ca5f98bde05bf7b6909fff04495bf29745b2a47696a1ae7b9acaf370bd97783.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Aliases" data-bundle-source="Main" src="https://js.rbxcdn.com/aea2ac0ba42d423fbbe50e96dce2ac4e9fdf2798381c00ca5d402aebc6dc7d83.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Profile" data-bundle-source="Unknown" src="https://js.rbxcdn.com/91437857b61cd170b2014336a13e05d758314470e493e4a1c30631f3c7d4801a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Profile" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d52fa5c05d8b15f20d2321ae989e27427052e9e47922e17791ad8b7b7585c625.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GroupsList" data-bundle-source="Main" src="https://js.rbxcdn.com/1725976230d497d65903efd5a0e7b1bcd38630ebbcd14a3f025fcb34ed27f25d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d5dbaab7a379369de57cbd14d105392b1a01dacd054d0b49eedaffac320cdf7b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6e96102abded7c4712026daa05b63bd9206395bd46df5edec2bd1e0c529a8bf4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="https://js.rbxcdn.com/c5732e5805465b0605bfcca4fcf7d639022f08d1365d041aeab612a594e56ebf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SystemFeedback" data-bundle-source="Main" src="https://js.rbxcdn.com/aac542106f7f77697cbc3b36ab3cf0619bf9b69a1af0983e59dfeb6c36652d3b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserDescription" data-bundle-source="Main" src="https://js.rbxcdn.com/8681ffb79851244580141f9dffd12cc509a6f1a5590fc83051fec4c71a79be3e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CurrentWearing" data-bundle-source="Main" src="https://js.rbxcdn.com/cb7c16253f1acd9b4a9485a0c7e4f385a8174c3afba89f5a50842ca3caf739bb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ProfileBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/c99477e3af29eb3947d916e43d695897f7d52367aa4d4b48f4fd81f3ba338620.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/2f03f9d406b71cc0bdad03d96324d2430b7c67614862b804ade5d52a2309832c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ea1c524777e7f18a31618de80e56d5f43d496ba89cfb48d3009a436590fc7735.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ProfileStatistics" data-bundle-source="Main" src="https://js.rbxcdn.com/8b967250b0bc940f49ce2ba28bdd7acb96e75b8ef78e8cb6e7e195e7d4a465da.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Statistics" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f7bc7a4de3c8aa28326ed2c129b1cc9bc68a3950f0fe706cd4a05a8f2def0043.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Statistics" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4ea99ba2ef9d519b636c937a4db0c28c6a0ff76b9cef296d553f250016b92613.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="NotificationStream" data-bundle-source="Main" src="https://js.rbxcdn.com/47fffa67ce65f9a28b27ebbaf699381af21e239eb7ed8fc477c4d7f29c59c87a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b780bebaa0140d94a6c74905e378335dbb69912e7d74e58d87ee5a6551501a66.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9da81426c0dfde1ddfc5d6f14a6f2174f29a2335b91743b03d59c6ec970b9ddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SendrNotificationStream" data-bundle-source="Main" src="https://js.rbxcdn.com/3cbf58d01137dded77514f33bc0b2359af364282ab4d4e053202e939f7445d24.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Contacts" data-bundle-source="Main" src="https://js.rbxcdn.com/6291b18e0d22b742564031e30914caa8a4326d2db7916b04ab8524c6b306f25a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Chat" data-bundle-source="Main" src="https://js.rbxcdn.com/bd1e2ec0fd63dc708baa38815366aeadb97db6ba64266ca1427601dd8c755675.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c2e07c35f6b6f198f4cdd7617700e3fdc08a4950057b5d951e177cb3a799925f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fa72396066e6281487ac88403442eedb3f1fd2bfa5d7ce9d3f24555d47b07927.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/241b320daab4139ca0a006a40e2a505a0c437186d013792ba70beea8c3d943e0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/061833a46174c7da8e8f154a9554706708a1cab04aa3593122d3a7c9827f3ca7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/2f2a2fe0108ed34da7c2f39437fb818afeef860c758b7f470225c93126953afe.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Premium" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f7298b4b7219f98a38727e3125af4384ad1b1549376d4d20aed1f7d4e0e5c3f3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Premium" data-bundle-source="Unknown" src="https://js.rbxcdn.com/faae893520e223febe56e965bbae9eb242b4237c16c8a010cd0d0e9571819c21.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemDetailsHydrationService" data-bundle-source="Main" src="https://js.rbxcdn.com/adaa959e8423c47df4abb173d9464abe56c47a139d5159b44e8a89447266acad.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="https://js.rbxcdn.com/9cb1a12045488c854922de30ba02226e1d1a2ea03283df435bb790c04a9eaca1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/7d331c9d38ff5ec010f89c9a6c16e25f2a324fe5da0812a1ea6b9115b83087ff.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/020662b54ab56438d196b0c78b2a1e60fdae2443e130fe9b9f88b3e7cfe64054.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d24dc64c7d37c21363db2869c680dd8bca9293c13666902c2ff3f785f1c585e0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5ee7bc9668ffc5df10d44a8492ac1eae9a786bb937f925d50ce5720f4b0a189f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="https://js.rbxcdn.com/921a676943e930ff0c092bdb1c6a136af154b376eeedb99d25a2ae0daba22979.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/583e589571bf003a659a3d808202538de0272456bcf53065a440de39a23c57a6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ba74d1e16b6b16b9e437b2ba1ba6259101765da851588693181586f23e28bf66.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="https://js.rbxcdn.com/d34fe5128c4ec89a217e6c274f8b2fd6114bfcc8380275f87ef3200527089cd1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/396892e9ffe25652a4b137c7f5d41a4e4793d20bbad8b4194f7022036685e943.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0104be627f13e60fbdee4407851f3864c514a290575109ffb39f4261fd9886b2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>


    


<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='serviceworkerregistrar' type='text/javascript' src='https://js.rbxcdn.com/d5b67abc659e3430838dada0f185cb62.js'></script>

<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pushnotifications' type='text/javascript' src='https://js.rbxcdn.com/17c3979fdb941f7d8a64870631fda031.js'></script>

<div id="push-notification-registrar-settings"
        data-notificationshost="https://notifications.sitetest3.bladeitter.cf"
        data-reregistrationinterval="0"
        data-registrationpath="register-chrome"
        data-shoulddeliveryendpointbesentduringregistration="False"
        data-platformtype="ChromeOnDesktop">
</div>
<div id="push-notification-registration-ui-settings"
        data-noncontextualpromptallowed="true"
        data-promptonfriendrequestsentenabled="true"
        data-promptonprivatemessagesentenabled="false"
        data-promptintervals="[604800000,1209600000,2419200000]"
        data-notificationsdomain="https://notifications.sitetest3.bladeitter.cf"
        data-userid="<?=$uid?>">
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
                <button type="button" class="btn-min-width btn-growth-xs push-notifications-prompt-accept">Notify Me</button>
                <span class="icon-close push-notifications-dismiss-prompt"></span>
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


    


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="LatencyMeasurement" data-bundle-source="Main" src="https://js.rbxcdn.com/90bb51db086699ec26a6c9df04087678948883f8c3ddd1037c7223a20ff4fe90.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/5ac56d681449510b3035fb8df14a62341a28464c105cfa8d1c335a621ea324d4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a345cfb0350dad12bb75dbfc1e2263840cd72a63daea093eefe2df4a057b4610.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/07f28187a04262691c40aab0653363d045813ea0ed23e4b9a9584a4d42b33d64.js"></script>



    

    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pageEnd' type='text/javascript' src='https://js.rbxcdn.com/7edbabf21dfd4f1ed625671c075188ea.js'></script>


</body>
</html>