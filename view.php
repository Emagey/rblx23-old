<?php
include 'site.php';
require_once 'theme.php';  
$sessionValidator = new sessionValidator();
$sessionStatus = $sessionValidator->validateSession();
$bans = new bans;

function convertToDarkMode($text) {
    $convertedText = str_replace('dark', 'dark', $text);
    return $convertedText;
}
  
  
if ($sessionStatus == 1) {
    $bans->isBanned();
}
if(!$logged) {
    header('location: /');
    exit;
}
?>
	

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id="CHI1-WEB2276">
    <!-- MachineID: CHI1-WEB2276 -->
    <title>My House - Roblox</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation" />
<meta name="description" content="Check out My House. It?s one of the millions of unique, user-generated 3D experiences created on Roblox. real" />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />

    <meta name="apple-itunes-app" content="app-id=431946152" />


    <meta id="RobotsMeta" name='robots' content='noindex' />


<script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://www.roblox.com/",
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
    <meta property="og:title" content="My House" />
    <meta property="og:type" content="game" />
        <meta property="og:url" content="https://www.roblox.com/games/14167019761/My-House" />
    <meta property="og:description" content="Check out My House. It?s one of the millions of unique, user-generated 3D experiences created on Roblox. real" />
            <meta property="og:image" content="https://s3.amazonaws.com/images.roblox.com/325472601571f31e1bf00674c368d335.gif" />
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Roblox">
    <meta name="twitter:title" content="My House">
    <meta name="twitter:description" content="Check out My House. It?s one of the millions of unique, user-generated 3D experiences created on Roblox. real">
    <meta name="twitter:creator">
            <meta name=twitter:image1 content="https://s3.amazonaws.com/images.roblox.com/325472601571f31e1bf00674c368d335.gif" />
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="Roblox Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone" content="robloxmobile://placeID=14167019761">
    <meta name="twitter:app:name:ipad" content="Roblox Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad" content="robloxmobile://placeID=14167019761">
    <meta name="twitter:app:name:googleplay" content="Roblox">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay" content="robloxmobile://placeID=14167019761" />

    <meta ng-csp="no-unsafe-eval">
    <meta name="user-data"
          data-userid="<?php echo $usr['id']; ?>"
          data-name="<?php echo $usr['username']; ?>"
          data-displayName="<?php echo $usr['DisplayName']; ?>"
          data-isunder13="<?php echo $usr['Age']; ?>"
          data-created="9/12/2016 9:08:54 AM"
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
      data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;billing.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;premiumfeatures.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;trades.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groups.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;adconfiguration.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;ads.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;assetdelivery.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;avatar.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;badges.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;catalog.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chat.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chatmoderation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;clientsettings.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;contacts.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;contentstore.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;develop.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;economy.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;engagementpayouts.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;followings.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;friends.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gameinternationalization.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamejoin.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamepersistence.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;games.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groupsmoderation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;itemconfiguration.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;locale.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;localizationtables.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;metrics.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;moderation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;notifications.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;points.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;presence.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;publish.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;privatemessages.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnailsresizer.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnails.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;translationroles.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;translations.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;twostepverification.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;usermoderation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;users.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;voice.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;realtimenotifications.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}"
      data-bound-auth-token-exemptlist="{&quot;Exemptlist&quot;:[]}"
      data-hba-indexed-db-name="hbaDB"
      data-hba-indexed-db-obj-store-name="hbaObjectStore" />
<meta name="page-meta" data-internal-page-name="GameDetail" />

    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
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
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";

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


    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/f74ee1e07ed467ea0e60b654ad81ae7f13c442a6b2de519a685f51f651158851.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/d8d1cfe6a81efdc0eaa7a64ddeec42230944f4e6330e5eafafcda10cf9e5286a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/fde27d6cece842fd4124e82fe615077ebe3d9463f6c863857e4cc56e148a28a8.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/c78c8b19218c2758d3d8928b31bf66dc6557beb72ce73a77954e8caa38237c51.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/a0b5ba3d187410d3ed177c044e1b471cdd4ed61430acbded1660c60cd499f15e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css" />


    <link rel="canonical" href="https://www.roblox.com/games/14167019761/My-House" />
    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch' />


    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/page___61168c885973b1bd72c1eb46b3c50709_m.css/fetch' />


<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" href="https://css.rbxcdn.com/9a2980a72856328e3d481789bdd3b132993126cd5884fee7a8007757cc0baab3.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/bec62e96a756104b8904fe298055c659d462a293759ee99503dd85e952bd11f1.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/8efa79e576b0df3d4c51fb1eb4e13af137d5eb8f44aef51321f7d4abbf9c3a86.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameDetailsVirtualEventsSection" data-bundle-source="Main" href="https://css.rbxcdn.com/f6224a67e029eecff2a05691a423015c18af7276ff86f00aca78594ab08df6a3.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="SocialLinksJumbotron" data-bundle-source="Main" href="https://css.rbxcdn.com/d5e3f1bfc12f243eca06757b140e2d6ce825e9347482ec8d8cc46fed6accdd8c.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ServerList" data-bundle-source="Main" href="https://css.rbxcdn.com/08d54b28757ebe50e5094a7eea411700c88c7e7637d6fe9e97e73abae05f69d6.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameGuidelines" data-bundle-source="Main" href="https://css.rbxcdn.com/35c302a08239fe2a569b3ef4a4084ee6469f46fd0fddffcd1008d61418c88eed.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameDetails" data-bundle-source="Main" href="https://css.rbxcdn.com/497fe6916a355ed08178cebd8c96a1901562c65ac81e9b8c237778d47d14a919.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RecommendedGames" data-bundle-source="Main" href="https://css.rbxcdn.com/2651475550bc1f556db29b41cafd4af543478829f30036de0cf14e5370e3d5d9.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccessManagementUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/b97f5366de00af6849bfeea201c37525835bb37d0a6741d479d8ea0c5085e609.css" />

    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css" />


    

    

<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="NotificationStream" data-bundle-source="Main" href="https://css.rbxcdn.com/9bd14edd3169aeb5fbf487b1ebe4c23e233b38a5a9deb434cfa2ea4bf8c9a8ee.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="SendrNotificationStream" data-bundle-source="Main" href="https://css.rbxcdn.com/7a33b2a4ba8e565add5d0ab173901d3e4581b0fd4a8f6d1ba572d2fb77424e0a.css" />
    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Chat" data-bundle-source="Main" href="https://css.rbxcdn.com/9ff00644c2caa1890ea1e1bc39ba8258c850ed19ba4fece90c16c38c73569bed.css" />




<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css" />

    <script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.RealTimeSettings = Roblox.RealTimeSettings ||
        {
            NotificationsEndpoint: "https://realtime-signalr.roblox.com/userhub",
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
        amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    
        
    Roblox.EnvironmentUrls["websiteUrl"] = "https://www.roblox.com";
        
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
      data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com"
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


        <meta property="al:ios:url" content="robloxmobile://placeID=14167019761" />
        <meta property="al:ios:app_store_id" content="431946152" />
        <meta property="al:ios:app_name" content="Roblox Mobile" />
        <meta property="al:web:should_fallback" content="false" />
    


    
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
                Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/pe?t=studio",
                    "//ecsv2.roblox.com/pe?t=diagnostic");
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
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
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
      data-internal-page-name="GameDetail"
      data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="WnmppGW7sRe2" />

    
    <script src="https://roblox.com/js/hsts.js?v=3" type="text/javascript" id="hsts" async></script>

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
     class="dark-theme gotham-font  ixp-marketplace-rename-control"
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
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>


            

                <div id="account-security-prompt-container"></div>

                <div class="alert-cookie-notice" data-cookie-notice-timeout="20000">
                    Roblox uses cookies to offer you a better experience. For further information, including information on how to withdraw consent and how to manage the use of cookies on Roblox, please refer to our <a href="https://www.roblox.com/info/privacy?locale=en_us">Privacy and Cookie Policy</a>.)
                    <span class="icon-close cookie-law-notice-dismiss"></span>
                </div>

        </div>


        <div class="content">

                            <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    

<iframe name="Roblox_GameDetail_Top_728x90" 
        allowtransparency="true"
        frameborder="0"
        height="110"
        scrolling="no"
        data-src=""
        src="https://www.roblox.com/user-sponsorship/1"
        width="728"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_GameDetail_Top_728x90"></iframe>
                </div>
            

<div id="game-detail-page"
     class="row page-content inline-social"
     data-place-id="14167019761">
    
<div id="game-detail-meta-data" data-universe-id="4903655337" data-place-id="14167019761"
     data-place-name="My House" data-page-id="557e6153-9182-40f1-bd7c-da602030ee57"
     data-root-place-id="14167019761"
     data-show-shut-down-all-button="True"
     data-user-can-manage-place="True"
     data-private-server-price="0"
     data-can-create-server="False"
     data-private-server-limit="0"
     data-seller-name=""
     data-seller-id="0"
     data-private-server-product-id="0"
     data-private-server-link-code=""
     data-preopen-create-private-server-modal="False"
     data-experience-invite-link-id=""
     data-experience-invite-status=""
     data-can-copy-place="False" class="hidden"></div>


    
<div class="system-feedback">
    <div class="alert-system-feedback">
        <div class="alert alert-success">Purchase Completed</div>
    </div>
    <div class="alert-system-feedback">
        <div class="alert alert-warning">Error occurred</div>
    </div>
</div>

    





    <div class="col-xs-12 section-content game-main-content remove-panel follow-button-enabled">
        <div id="game-details-carousel-container" class="game-details-carousel-container"></div>
        <div class="game-calls-to-action">


<div id="game-context-menu">
    <button class="rbx-menu-item btn-generic-more-sm" data-toggle="popover" data-bind="game-context-menu" data-original-title="" title="" data-viewport=".game-calls-to-action">
        <span class="icon-more"></span>
    </button>
    <div class="rbx-popover-content" data-toggle="game-context-menu">
        <ul class="dropdown-menu" role="menu">
                    <li>
                        <div class="VisitButton VisitButtonEditGLI" placeid="14167019761" data-universeid="4903655337" data-is-team-create-enabled="True" data-is-preemptive-team-create-start-enabled="True" data-allowupload="true">
                            <button role="button">Edit in Studio</button>
                        </div>
                    </li>
                    <li id="rbx-developer-stats">
                        <a href="https://create.roblox.com/dashboard/creations/experiences/4903655337/overview">View Analytics</a>
                    </li>
                    <li id="sponsor-game-ad">
                        <a href="https://www.roblox.com/sponsored/experiences/4903655337/create">Sponsor this Experience</a>
                    </li>
                    <li id="configure">
                        <a href="https://www.roblox.com/places/14167019761/update">Configure this Place</a>
                    </li>
                    <li id="rbx-configure-game">
                        <a href="https://www.roblox.com/universes/configure?id=4903655337">Configure this Experience</a>
                    </li>
                    <li id="configure-localization">
                        <a href="https://www.roblox.com/localization/games/4903655337/configure">Configure Localization</a>
                    </li>
                    <li>
                        <button role="button"
                                id="toggle-profile"
                                data-place-id="14167019761"
                                class="rbx-context-menu-toggle-profile">
                           Add to Profile
                        </button>
                    </li>
                    <li>
                        <button role="button"
                                id="shutdown-all-button"
                                data-place-id="14167019761"
                                class="rbx-context-menu-shutdown-all">
                            Shut Down All Servers
                        </button>
                    </li>
                    <li>
                        <button role="button"
                                id="shutdown-all-with-replacement-button"
                                data-place-id="14167019761"
                                class="rbx-context-menu-shutdown-all-with-replacements"
                                title="Migrate To Latest Update">
                            Migrate To Latest Update
                        </button>
                    </li>
        </ul>
    </div>
</div>

<script>
    $(function() {
        if (typeof Roblox === "undefined") {
            Roblox = {};
        }
        if (typeof Roblox.Showcases === "undefined") {
            Roblox.Showcases = {};
        }

        Roblox.Showcases.InShowcase = false;

        var successAlertElement = $(".content .alert-success");
        var errorBanner = $(".content .alert-warning");
        var bannerDuration = 2000;
        var bannerSlideDownTimeout = 100;

        function showSuccessMessage(text) {
            successAlertElement.text(text);
            Roblox.BootstrapWidgets.ToggleSystemMessage(successAlertElement, bannerSlideDownTimeout, bannerDuration);
        }

        function showErrorMessage(text) {
            errorBanner.text(text);
            Roblox.BootstrapWidgets.ToggleSystemMessage(errorBanner, bannerSlideDownTimeout, bannerDuration);
        }

        $("#game-context-menu ").on("click", ".rbx-context-menu-toggle-profile", function (evt) {
            evt.preventDefault();
            var el = $(this);
            var placeId = el.data("place-id");
            $("#game-context-menu").find(".rbx-menu-item").popover('hide');
            $.ajax({
                type: !Roblox.Showcases.InShowcase ? "POST" : "DELETE",
                url: Roblox.EnvironmentUrls.inventoryApi + "/v1/collections/items/Asset/" + placeId,
                success: function () {
                    Roblox.Showcases.InShowcase = !Roblox.Showcases.InShowcase;
                    $("#game-context-menu").find(".rbx-context-menu-toggle-profile").text(Roblox.Showcases.InShowcase ? "Remove from Profile" : "Add to Profile");
                    showSuccessMessage(Roblox.Showcases.InShowcase ? "Added to your profile" : "Removed from your profile");
                },
                error: function (xhr) {
                    var messageText = "An Error Occured";
                    showErrorMessage(xhr.responseJSON.errors && xhr.responseJSON.errors.length > 0 ? xhr.responseJSON.errors[0].message : messageText);
                }
            });
        });

        function handleShutdownAllInstancesError() {
            Roblox.Dialog.open({
                titleText: "An Error Occured",
                bodyContent: "Could not shut down servers.",
                acceptText: "OK",
                allowHtmlContentInBody: true,
                dismissable: true
            });
        }

        function shutdownAllInstances(placeId, replaceInstances) {
            $.ajax({
                type: "POST",
                url: "/Games/shutdown-all-instances",
                data: { placeId: placeId, replaceInstances: replaceInstances },
                error: handleShutdownAllInstancesError
            });
        }

        $("#game-context-menu ").on("click", ".rbx-context-menu-shutdown-all", function (evt) {
            evt.preventDefault();
            $("#game-context-menu").find(".rbx-menu-item").popover('hide');
            var placeId = $(this).data("place-id");

            Roblox.Dialog.open({
                titleText: "Shut Down All Servers",
                bodyContent: "Are you sure you want to shut down all servers for this place?",
                acceptText: "Yes",
                declineText: "No",
                allowHtmlContentInBody: true,
                onAccept: function () {
                    shutdownAllInstances(placeId, false);
                }
            });
        });

        $("#game-context-menu ").on("click", ".rbx-context-menu-shutdown-all-with-replacements", function (evt) {
            evt.preventDefault();
            $("#game-context-menu").find(".rbx-menu-item").popover('hide');
            var placeId = $(this).data("place-id");

            Roblox.Dialog.open({
                titleText: "Migrate To Latest Update",
                bodyContent: "Are you sure you want to migrate to the latest update for this place? (Note: The new update will be available between 1-6 minutes)",
                acceptText: "Yes",
                declineText: "No",
                allowHtmlContentInBody: true,
                onAccept: function () {
                    shutdownAllInstances(placeId, true);
                }
            });
        });

        $("#game-context-menu").on("click", ".VisitButtonEditGLI", function (evt) {
            $("#game-context-menu").find(".rbx-menu-item").popover('hide');
            var el = $(this);
            var placeId = el.attr("placeid");
            var universeId = el.data("universeid");
            var isTeamCreateEnabled = (el.data("is-team-create-enabled") === "True");
            var isPreemptiveTeamCreateStartEnabled = (el.data("is-preemptive-team-create-start-enabled") === "True");

            // send an event to EventStream when the Edit button is clicked from Game Details Page
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.SendEventWithTarget("studioLaunchAttemptWeb", "gameDetailsPage", { universeId: universeId, placeId: placeId }, Roblox.EventStream.TargetTypes.WWW);
            }
            var allowUpload = el.data("allowupload") ? true : false;
            Roblox.GameLauncher.editGameInStudio(placeId, universeId, allowUpload, isTeamCreateEnabled, isPreemptiveTeamCreateStartEnabled);
        });
    });
</script>

            <div class="game-title-container">
                    <h1 class="game-name" title="My House">My House</h1>

                    <div class="game-creator"><span class='text-label'>By</span> <a class='text-name text-overflow' href='https://www.roblox.com/users/1200963339/profile/'>@legeek0939</a></div>



                <div id="game-age-recommendation-container"></div>
                <span id="2sv-popup-container"></span>
            </div>

            <div class="game-buttons-container">

                <div id="game-details-play-button-container" class="game-details-play-button-container">
                    <span class="spinner spinner-default"></span>
                </div>

                    <!-- New Favorite/Follow/Vote/Share section -->
                    <ul class="favorite-follow-vote-share">
                        
                                <li class="game-favorite-button-container">
        <div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to Favorites">
            <div class="favorite-button">
                <a id="toggle-game-favorite" data-toggle-url="/favorite/toggle" data-assetid="14167019761" data-isguest="False"
                    data-signin-url="https://www.roblox.com/newlogin?returnUrl=%2Fgames%2F14167019761%2FMy-House">
                    <div id="game-favorite-icon" class="icon-favorite "></div>
                    <div id="game-favorite-icon-label" class="icon-label">Favorite</div>
                </a>
            </div>
        </div>
 </li>

                        
                            <li class="game-follow-button-container">
    <div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="">
        <div class="follow-button">
            <a id="toggle-game-follow" data-universe-id="4903655337" data-is-guest="false"
                data-signin-url="https://www.roblox.com/newlogin?returnUrl=%2Fgames%2F14167019761%2FMy-House"
                data-user-id="1200963339"
                data-originator=""
                data-originator-id="">
                <div id="game-follow-icon" class="icon-follow-game"></div>
                <div id="game-follow-icon-label" class="icon-label">Follow</div>
            </a>
        </div>
    </div>
 </li>

                        
                        <li id="voting-container" class="voting-panel">
                            <span class="game-voting-panel spinner spinner-default"></span>
                        </li>

                        
                        <li class="social-media-share">

                        </li><!-- .social-media-share -->
                    </ul>
            </div>
        </div>
        <div id="game-details-invite-link-expired-modal-container"></div>
    </div>

    <div class="col-xs-12 rbx-tabs-horizontal"
         data-place-id="14167019761">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li id="tab-about" class="rbx-tab tab-about active">
                <a class="rbx-tab-heading" href="#about">
                    <span class="text-lead">About</span>
                </a>
            </li>
            <li id="tab-store" class="rbx-tab tab-store">
                <a class="rbx-tab-heading" href="#store">
                    <span class="text-lead">Store</span>
                </a>
            </li>
            <li id="tab-game-instances" class="rbx-tab tab-game-instances">
                <a class="rbx-tab-heading" href="#game-instances">
                    <span class="text-lead">Servers</span>
                </a>
            </li>
        </ul>
        <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                    <div class="section game-about-container">
                        <div class="container-header">
                            <h2>Description</h2>
                        </div>
                        <div class="section-content remove-panel">
                                <pre class="text game-description linkify">real</pre>
                                                        <div id="game-age-recommendation-details"></div>

                            <ul class="border-top border-bottom game-stats-container follow-button-enabled">
                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Active</p>
                                        <p class="text-lead font-caption-body wait-for-i18n-format-render invisible">0</p>
                                </li>

                                    <li class="game-stat game-stat-width-voice">
                                        <p class="text-label text-overflow font-caption-header">Favorites</p>
                                        <p class="text-lead font-caption-body wait-for-i18n-format-render invisible"><span class="game-favorite-count">0</span></p>
                                    </li>

                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Visits</p>
                                    <p id="game-visit-count" class="text-lead font-caption-body wait-for-i18n-format-render invisible" title="0">0</p>
                                </li>

                                    <li class="game-stat game-stat-width-voice">
                                        <p class="text-label text-overflow font-caption-header">Communication</p>
<ul class="text-lead text-overflow chat-feature-list">
        <li>
            <p id="microphone-enabled-label" class="text-lead font-caption-body">
                <span class="chatfeatures icon-voice-mic-unmuted-16x16-hover"></span>
                Microphone
            </p>
        </li>
            <li>
            <p id="camera-enabled-label" class="text-lead font-caption-body">
                <span class="chatfeatures icon-default-camera"></span>
                Camera
            </p>
        </li>
    </ul>

                                    </li>

                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Created</p>
                                            <p class="text-lead font-caption-body date-time-i18n"
                                               data-date-time-i18n-value="7/23/2023"
                                               data-date-time-i18n-format="short">
                                            </p>

                                </li>
                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Updated</p>
                                            <p class="text-lead font-caption-body date-time-i18n"
                                               data-date-time-i18n-value="8/1/2023"
                                               data-date-time-i18n-format="short">
                                            </p>

                                </li>
                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Server Size</p>
                                    <p class="text-lead font-caption-body wait-for-i18n-format-render invisible">50</p>
                                </li>
                                    <li class="game-stat game-stat-width-voice">
                                        <p class="text-label text-overflow font-caption-header">Genre</p>
                                        <p class="text-lead font-caption-body wait-for-i18n-format-render invisible">All Genres</p>
                                    </li>
                                <li class="game-stat game-stat-width-voice">
                                    <p class="text-label text-overflow font-caption-header">Allowed Gear</p>
                                    <p class="text-lead font-caption-body stat-gears">
        <span class="icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span>


                                    </p>
                                </li>
                            </ul>
                            <div class="game-stat-footer">

                                <span class="game-report-abuse"><a class="text-report abuse-report-modal" href="https://www.roblox.com/abusereport/asset?id=14167019761&amp;RedirectUrl=%2fgames%2f14167019761%2fMy-House">Report Abuse</a></span>
                            </div>
                        </div>
                    </div>
                            <div ng-modules="robloxApp, socialLinksJumbotron">
                                <social-links-container target-type="game"
                                                        target-id="4903655337"></social-links-container>
                            </div>
                        <div id="private-server-container-about-tab"></div>
<div id="game-badges-container">
    <game-badges-list universe-id="4903655337"></game-badges-list>
</div>

<script>
    var Roblox = Roblox || {};
    Roblox.GameDetail = Roblox.GameDetail || {};
    Roblox.GameDetail.UniverseId = 4903655337;
</script>
                            <div id="game-events-container"></div>
                        <div id="recommended-games-container" class="container-list games-detail"></div>



            </div>
            <div class="tab-pane store" id="store">
<input name="__RequestVerificationToken" type="hidden" value="BYw8odwhPCsrYn9Xz5s7fiWYXY9ubfnpxr9ngV4zwQxgJO9sWAuzlH_wAOaUlQSYgWce4lhhsl7dcBdWLCpXFLk2nkY1" />

<div id="rbx-game-passes" class="container-list game-dev-store game-passes">
    <div class="container-header">
        <h3>Passes</h3>
    </div>
    <ul id="rbx-passes-container" class="hlist store-cards gear-passes-container">
            <li class="list-item rbx-passes-item-container rbx-gear-passes-item-add">
                <div class="store-card">
                    <a class="store-card-add"
                       href="https://www.roblox.com/develop?selectedPlaceId=14167019761&amp;Page=game-passes">
                        <img src="https://images.rbxcdn.com/eae19a3a62261e2c3953d37fbc6ca626.png">
                        <div class="store-card-add-label">Add Pass</div>
                    </a>
                </div>
            </li>
    </ul>
    
</div>
<li class='list-item rbx-passes-item-container rbx-gear-passes-item-add' id='spinner' style="display: none;">
    <span class="spinner spinner-default"></span>
</li>

<script>
    $(function() {
        Roblox.GamePassJSData = Roblox.GamePassJSData || {};
        Roblox.GamePassJSData.PlaceID = 14167019761;
        Roblox.GamePassJSData.GamePassesPerPlaceLimit = 50;

        Roblox.GamePassJSData.LabelBuy = "Buy";
        Roblox.GamePassJSData.LabelOwned = "Owned";
        Roblox.GamePassJSData.DataAssetType = "Game Pass";

        var purchaseConfirmationCallback = function(obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();

        };
        Roblox.GamePassItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);

        $("#store #rbx-game-passes, #all-purchasable-items #rbx-game-passes").on("click",
            ".PurchaseButton",
            function(e) {
                Roblox.GamePassItemPurchase.openPurchaseVerificationView($(this), 'game-pass');
            });

        $("#store #rbx-game-passes .btn-more, #all-purchasable-items #rbx-game-passes .btn-more").on("click",
            function(e) {
                $("#rbx-game-passes #rbx-passes-container").toggleClass("collapsed");
            });

        $(".rbx-tab a[href='#store']").one('shown.bs.tab',
            function() {
                Roblox.GamePassLazyLoading.init();
            });

        var checkForImmediateLoading = function () {
            var loadImmediatelyData = $("#all-purchasable-items").data('load-immediately');
            if (parseInt(loadImmediatelyData) > 0) {
                Roblox.GamePassLazyLoading.init();
            }
        }

        checkForImmediateLoading();
    });
</script>
            </div>

            <div class="tab-pane game-instances" id="game-instances">
                
                        <div id="running-game-instances-container"></div>

            </div>
        </div>
    </div>
</div>



<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer">
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="clear"></div>
        <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>



<div id="ItemPurchaseAjaxData"
     data-has-currency-service-error="False"
     data-currency-service-error-message=""
     data-authenticateduser-isnull="False"
     data-user-balance-robux="1981"
     data-user-bc="0"
     data-continueshopping-url="https://www.roblox.com/games/14167019761/My-House"
     data-imageurl ="https://t2.rbxcdn.com/d4251fa8ae8d8381f83acd1046b64f19"
     data-alerturl ="https://images.rbxcdn.com/b7353602bbf9b927d572d5887f97d452.svg"
     data-inSufficentFundsurl ="https://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png"
     data-is-bc-only-requirement-enabled ="False"
     data-is-plugins-purchasing-enabled ="True"
     data-is-modal-footer-centered-enabled = "True"
>

</div>



<script type="text/javascript">
var Roblox = Roblox || {};
Roblox.GamePassJSData = Roblox.GamePassJSData || {};
Roblox.GamePassJSData.LabelGameDoesNotSell = "No passes available.";

    $(function() {
        if (Roblox.Voting) {
            Roblox.Voting.LoadVotingService($("#voting-container"), 14167019761);
        }
    });
</script>

                <div id="Skyscraper-Abp-Right" class="abp abp-container right-abp">
                    

<iframe name="Roblox_GameDetail_Right_160x600" 
        allowtransparency="true"
        frameborder="0"
        height="612"
        scrolling="no"
        data-src=""
        src="https://www.roblox.com/user-sponsorship/2"
        width="160"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_GameDetail_Right_160x600"></iframe>
                </div>

        </div>
            </main> 
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container"
        data-is-giftcards-footer-enabled="True">
</footer></div> 

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
                footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
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
            
                Check <strong>Remember my choice</strong> and click <strong>OK</strong> in the dialog box above to join experiences faster in the future!
            
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
         return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
}
</script>


    <div id="InstallationInstructions" class="style2016" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close-16x16 simplemodal-close"></span>
                    <h5 class="title">Thanks for visiting Roblox</h5>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <ul class="modal-col-5">
            <li class="step1-of-5">
                <h2>1</h2>
                <p class="larger-font-size">Click <strong>Save File</strong> when the download window pops up</p>
                <img data-delaysrc="https://images.rbxcdn.com/06b51c8849130f46e38bfa01f0e5c8d2.png" />
            </li>
            <li class="2-of-5">
                <h2>2</h2>
                <p class="larger-font-size">Go to Downloads and double click <strong>RobloxPlayer.exe</strong></p>
                <img data-delaysrc="https://images.rbxcdn.com/62b8b3f6c856acd74ff7ea49dab56889.png" />
            </li>
            <li class="step3-of-5">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Run</strong></p>
                <img data-delaysrc="https://images.rbxcdn.com/aee74021bb3ba2a4956449b62cd35405.png" />
            </li>
            <li class="step4-of-5">
                <h2>4</h2>
                <p class="larger-font-size">Once installed, click <strong>Join</strong> to join the action!</p>
                <div class="VisitButton VisitButtonContinueGLI">
                    <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                </div>
            </li>
            <li class="step5-of-5">
                <h2>5</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> when the alert pops up</p>
                <img data-delaysrc="https://images.rbxcdn.com/9168d6c2974f4bd80e741b31257b4fc9.png" />
            </li>
        </ul>

                </div>
            </div>
            <div class="xsmall">
                The Roblox installer should download shortly. If it doesn?t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a>
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
    Roblox.Client._installHost = 'setup.roblox.com';
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
            Roblox.CookieUpgrader.domain = 'roblox.com';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                    Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                    Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>




    

    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='intl-polyfill' type='text/javascript' src='https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/558cbed0ebd127bd21f1045302a44c69a092fc29acd3ed983ecd5bcb46ed2e84.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>


    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='leanbase' type='text/javascript' src='https://js.rbxcdn.com/600ba1809d83d3eab329b3a18f21cb01.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/1fb8b744dd67c1394e4b32036254dea94cc76823725f80dcb366ce43d3ca8af1.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/bf815a7aa9da152ef55d476206b39c24d0c89d6a6340e36b73faf98303afcfdb.js"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/5301e4bf0d04097eecd473d709fc8b566b5b2223d61e923fc643996c86cabf38.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>


    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='angular' type='text/javascript' src='https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js'></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/1c7ab1e84db2ce066ae33c0fd3bb9bcf375ad7b9e4d4bcdfc8dff8fa60cb59f8.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="https://js.rbxcdn.com/ca6836e875140765f70de8ce77eeb48ad4702890af0a407eda2fa5be9ad1e50b.js"></script>



<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceStatus" data-bundle-source="Main" src="https://js.rbxcdn.com/077dd64734d3aa9a884874f85f2f514a239688c33a0fdf3f90365e0e7436ec3b.js"></script>



<div id="presence-registration-bootstrap-data"
     data-is-enabled="True"
     data-interval="15000"></div><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
    </div>

    <div ng-modules="pageTemplateApp">
        <!-- Template bundle: page -->
<script type="text/javascript">
"use strict"; angular.module("pageTemplateApp", []).run(['$templateCache', function($templateCache) { 

 }]);
</script>

    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/1e979a52d80126c2447674c17604baf65f73183fd44df1e6cd862feb441bdcc5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/ccb71040c4716fc461dfb0aaeeeba0fe751944ad9069d186cb11ed520e207a86.js"></script>
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
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/9fb09b4d4a78eacf58ad406dd6bbf3b15c3e59c853c24409205894a7d02824b5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/161c72b59b82ca89668a77dae275694d82f11d67f561f1fe6ac98bce0a310eb8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4cff9ff97602ca772f8b90c46cb6fc674e4b575761f0c3941af21d65cb84f519.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="https://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/4b4ed339879e21ebd989965a4ade1a7d6f3181871df8d816198c1cdc73b629d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/652fb1e29ca15ae17497ec3eb9aa4f4ebc9be9e0f4be6e68e2ff6ef6bf82c535.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/34bae4c284cebfa0950c4e76dbc64b8ea982260cc4c29ec7e5ab9dfcc37b4a8b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="https://js.rbxcdn.com/fc1a0f5742428ab44fce0b8e125aaf25e1d0c78fff49989ecde0c57490aedb74.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b421e34a51115870ea1b5f7db1e30ceaa8a7ff5a8704b346a7c2670607350acc.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/82a6f0cb70b3e6ac37762e1194fcdd6d126fbc866ff8806439294ae662127763.js"></script>
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

    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='https://js.rbxcdn.com/c53c02abe3ba931550bf0b8cd1af0030.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/dcb8d58df169ad0a416eacc6d6621181d1a6e3cf0aadbf1430e4e39b6241c633.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" src="https://js.rbxcdn.com/99947c5d94986d31dfddd0fc5b5b9693f681edba4d005a96c93aea65315dd49f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1a2a09cc686613fac0c6ab26411db07ed01d8b509558112c2ab885b28f3c96b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/978681f40e863a74bf0759d6ae27622db52b16cb4ff3af5ef942866cba7aef73.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CursorPagination" data-bundle-source="Main" src="https://js.rbxcdn.com/267b13d96f317adcd84f99e1b9758d63d612f6e44f7c06b49c6c44c1fa99323f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/2f03f9d406b71cc0bdad03d96324d2430b7c67614862b804ade5d52a2309832c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ea1c524777e7f18a31618de80e56d5f43d496ba89cfb48d3009a436590fc7735.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/834b860d5e724e9d31505254b6ad312a8e8710c7a90600578b26b644451078cd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/25b6012fac851b6de99c569c73c600a0bd0390a3669e530ebca7b42b25807031.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5791d0a166e02bba42ebc7dcc04e9fe103de134b4dcbff8980e8f35686104353.js"></script>
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
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/396892e9ffe25652a4b137c7f5d41a4e4793d20bbad8b4194f7022036685e943.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0104be627f13e60fbdee4407851f3864c514a290575109ffb39f4261fd9886b2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameDetailsVirtualEventsSection" data-bundle-source="Main" src="https://js.rbxcdn.com/8389e665e8628a4e0cb75b84b9e667ffb8f1f23acfed61cfec9b494c2a05eae3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VirtualEvents" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3d5ce13232c378112f22726b07485f5229e2098eb8868e225f5f77766398500b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VirtualEvents" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3280442fe31ab000c9595d8428e3183e2f596f179494afe396cc3baf18385241.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SocialLinksJumbotron" data-bundle-source="Main" src="https://js.rbxcdn.com/0c843a58d3ff13d5f109e4e025370f09cf5e6802a54955fb37b6f2ad5af8a80b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PromotedChannels" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a9238207bc9ad295084e9a24589d3ea66d8ec4dc1016ad59ba4fa48b3a2aed8a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PromotedChannels" data-bundle-source="Unknown" src="https://js.rbxcdn.com/af8cdbaeb57985f23b72f079c67f40debbea47af094dd6051f12b176492c2e09.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ServerList" data-bundle-source="Main" src="https://js.rbxcdn.com/65c5b17c32102634759827cb0eade2bb1ee7cebb6aa3260431808db2867a68ec.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VIPServer" data-bundle-source="Unknown" src="https://js.rbxcdn.com/71cb0b7eff86334bc8f7289ba6559f93d1e44a49cf56bb2dbdb3582ce11418a6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VIPServer" data-bundle-source="Unknown" src="https://js.rbxcdn.com/562a9135abbe798afe4a350ca3e7b750c1b6eeee3b7ff15de8eccd1cc043dfb3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ServerList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f8d6c5c0e0f24c6ba67fde9a947670b525bce012172155058a95721a0fad90f7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ServerList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/79f5931115427e7a1807c44c950ae1ae3965452891b79131d478bb5277a99cfc.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateServers" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1b1086c35c478c7f8f8719b34394b844caa7e7464e34b2fe071a1e0e847b7062.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateServers" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b66d3485edcca6586e97fcc1c519176ce9129277ca982218f507eb6eb0078b92.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameGuidelines" data-bundle-source="Main" src="https://js.rbxcdn.com/b53d746c0049a2b88209efcf984cfde87f4a7826fb4de409da9174c5da1abe16.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="https://js.rbxcdn.com/30aa49daff60c139147dbba7ed5fdb9395cf9578ad2ea667d7d23ec7db5172e7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0004589bffee534c3ffcf9a5b0ea901923f2839834e6b80946a9ef8027347e5c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameDetails" data-bundle-source="Main" src="https://js.rbxcdn.com/daec4b208c46a0c34cdff57805ea5e94374b37e23e374067a47db46c6e3f563f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameGearOptionsDisplay" data-bundle-source="Unknown" src="https://js.rbxcdn.com/25fc83f80e15e6642651792eb2078ada834cedcddfe16fff8b653aa1224f449c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameGearOptionsDisplay" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f30b6db01e31fc9b3156d10d0ecc7835d3727a40d445baf2a49f07c2bf3c9f5a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SocialShare" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5068f67529f20510c51e718c1a0fbc1e09223ab4383525ada00239f6528e320a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SocialShare" data-bundle-source="Unknown" src="https://js.rbxcdn.com/acec83768012d0d4d6e4bb490ff1b6f6e6c9ec42c0df01fb7dd21716c67d4b07.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RecommendedGames" data-bundle-source="Main" src="https://js.rbxcdn.com/29d904984e4e35bb91fe2e79ea0b9460c9e2672ae58c484764ea560c1d1f06c3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccessManagementUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/5ccd8c1310727326b4faaef5f5cee1301f3d08992b0ad3630a8c80b72d6c4a59.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AgeVerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9fd17e24933685aad4e9171eb648b3f578835ae2d557596318ad2509d6f3b4c8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AgeVerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/be956b14a27cbd3b5b90ad30752b6e8399a5cc3b8ddf82cee8d1bada0ed34376.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="NotificationStream" data-bundle-source="Main" src="https://js.rbxcdn.com/44acab3a696809aa41d4ffc45cff4c61dd6a2f71ebc86782a778db0f80f09cd5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f460fba7af45ccda0bc9aa6f81cc4e67e4bd444cf27f08b5e0ee5d1962602f71.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="https://js.rbxcdn.com/2b80c33d7c2906321c6480cb94cfd593b78a021936fe79401440d6c04b442e3f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SendrNotificationStream" data-bundle-source="Main" src="https://js.rbxcdn.com/e179a7084799e6da886a44badb9375ba914c519f2cdd998e8e4de6cc65c2b335.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Contacts" data-bundle-source="Main" src="https://js.rbxcdn.com/6291b18e0d22b742564031e30914caa8a4326d2db7916b04ab8524c6b306f25a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Chat" data-bundle-source="Main" src="https://js.rbxcdn.com/bd1e2ec0fd63dc708baa38815366aeadb97db6ba64266ca1427601dd8c755675.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c2e07c35f6b6f198f4cdd7617700e3fdc08a4950057b5d951e177cb3a799925f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fa72396066e6281487ac88403442eedb3f1fd2bfa5d7ce9d3f24555d47b07927.js"></script>


    

    


<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='serviceworkerregistrar' type='text/javascript' src='https://js.rbxcdn.com/d5b67abc659e3430838dada0f185cb62.js'></script>

<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pushnotifications' type='text/javascript' src='https://js.rbxcdn.com/17c3979fdb941f7d8a64870631fda031.js'></script>

<div id="push-notification-registrar-settings"
        data-notificationshost="https://notifications.roblox.com"
        data-reregistrationinterval="0"
        data-registrationpath="register-firefox"
        data-shoulddeliveryendpointbesentduringregistration="True"
        data-platformtype="FirefoxOnDesktop">
</div>
<div id="push-notification-registration-ui-settings"
        data-noncontextualpromptallowed="true"
        data-promptonfriendrequestsentenabled="true"
        data-promptonprivatemessagesentenabled="false"
        data-promptintervals="[604800000,1209600000,2419200000]"
        data-notificationsdomain="https://notifications.roblox.com"
        data-userid="1200963339">
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
                        Now just click <strong>Always Receive Notifications</strong> in your browser, and we'll start sending you push notifications!
                    </div>
                        <div class="push-notifications-permissions-prompt-instructional-image">
                                <img width="380" height="250" src="https://static.rbxcdn.com/images/Notifications/push-permission-prompt-firefox-windows-20160701.png" />
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
                                <img width="270" height="139" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step1-firefox-windows-20160701.png" />
                    </div>
                    <div class="reenable-step reenable-step2-of3">
                        <h1>2</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the drop-down arrow next to Notifications in the <strong>Permissions</strong> tab.</p>
                                <img width="270" height="142" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step2-firefox-windows-20160701.png" />
                    </div>
                    <div class="reenable-step reenable-step3-of3">
                        <h1>3</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Select <strong>Allow</strong> to turn notifications back on.</p>
                                <img width="270" height="182" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step3-firefox-windows-20160701.png" />
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


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/4b8ea6a87cd4886cab02751a4d4fc7c3ca523372514c8e6d0d0ba1a4030b3f05.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a345cfb0350dad12bb75dbfc1e2263840cd72a63daea093eefe2df4a057b4610.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/07f28187a04262691c40aab0653363d045813ea0ed23e4b9a9584a4d42b33d64.js"></script>



    

    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pageEnd' type='text/javascript' src='https://js.rbxcdn.com/adc6b04dca6861fefe5c93ad71f1b664.js'></script>


</body>
</html>