<?php
require_once '../site.php';

if(!$logged){
die('<META https-equiv=refresh content=0;URL=/>');
exit;
}
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id="CHI1-WEB8515">
    <!-- MachineID: CHI1-WEB8515 -->
    <title>Groups - Roblox</title>
    <meta https-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation" />
<meta name="description" content="Roblox is a global platform that brings people together through play." />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />

    <meta name="apple-itunes-app" content="app-id=431946152" />




<script type="application/ld+json">
    {
    "@context" : "https://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "/",
    "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91",
    "sameAs" : [
    "https://facebook.com/roblox/",
    "https://twitter.com/roblox",
    "https://linkedin.com/company/147977",
    "https://instagram.com/roblox/",
    "https://youtube.com/user/roblox",
    "https://plus.google.com/+roblox",
    "https://twitch.tv/roblox"
    ]
    }
</script>
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
      data-is-phone="dalse"
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
      data-is-android-device="true"
      data-is-universal-app="false"
      data-app-type="unknown"
/>
<meta name="environment-meta"
      data-is-testing-site="false" />

<meta id="roblox-display-names" data-enabled="true"></meta>

<meta name="hardware-backed-authentication-data"
      data-is-secure-authentication-intent-enabled="true"
      data-is-bound-auth-token-enabled="false"
      data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;billing.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;premiumfeatures.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;trades.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groups.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;adconfiguration.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;ads.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;assetdelivery.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;avatar.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;badges.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;catalog.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chat.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chatmoderation.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;clientsettings.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;contacts.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;contentstore.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;develop.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;economy.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;engagementpayouts.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;followings.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;friends.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gameinternationalization.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamejoin.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamepersistence.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;games.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groupsmoderation.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;itemconfiguration.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;locale.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;localizationtables.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;metrics.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;moderation.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;notifications.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;points.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;presence.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;publish.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;privatemessages.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnailsresizer.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnails.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;translationroles.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;translations.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;twostepverification.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;usermoderation.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;users.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;voice.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;realtimenotifications.2023.rb16ct8.pl&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}"
      data-bound-auth-token-exemptlist="{&quot;Exemptlist&quot;:[]}"
      data-hba-indexed-db-name="hbaDB"
      data-hba-indexed-db-obj-store-name="hbaObjectStore" />
<meta name="page-meta" data-internal-page-name="" />

    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.2023.rb16ct8.pl/pe?t=diagnostic",
        deviceType: "Phone",
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
                var xhr = new XMLhttpsRequest();
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

            var xhr = new XMLhttpsRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.2023.rb16ct8.pl";

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

            var xhr = new XMLhttpsRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLhttpsRequest();
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
            //Note that this is the performance of the xmlhttpsrequest rather than the original resource load.
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
                var xhr = new XMLhttpsRequest();
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
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/fde27d6cece842fd4124e82fe615077ebe3d9463f6c863857e4cc56e148a28a8.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/0f2e32dc2d6a3714b8ba5439b4bbd7edd3c9e8ae5704cec6f891bcd5456f8329.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/a0b5ba3d187410d3ed177c044e1b471cdd4ed61430acbded1660c60cd499f15e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css" />


    <link rel="canonical" href="https://2023.rb16ct8.pl/my/groups" />
    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch' />


    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/page___9873600c5d9b11ec2bb432b85c1c84cb_m.css/fetch' />


<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" href="https://css.rbxcdn.com/9a2980a72856328e3d481789bdd3b132993126cd5884fee7a8007757cc0baab3.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GroupSearch" data-bundle-source="Main" href="https://css.rbxcdn.com/a66405d01d112cf4f383fce4d41b6c4f5ab8834637b4859e211144619ad65a46.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GroupsList" data-bundle-source="Main" href="https://css.rbxcdn.com/cf2572e23ced613ef7f36a2b662ce99b41ff1ea7e316f0a759b38673e1e2e293.css" />

    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css" />


    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/8efa79e576b0df3d4c51fb1eb4e13af137d5eb8f44aef51321f7d4abbf9c3a86.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css" />


    

    



<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css" />

    <script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.RealTimeSettings = Roblox.RealTimeSettings ||
        {
            NotificationsEndpoint: "https://realtime-signalr.2023.rb16ct8.pl/userhub",
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
    Roblox.EnvironmentUrls = {"abtestingApiSite":"","accountInformationApi":"","accountSettingsApi":"","adConfigurationApi":"","adsApi":"https://ads.sitetest3.bladeitter.cf","advertiseApi":"","apiGatewayCdnUrl":"https://rbxcdn.com","apiGatewayUrl":"","apiProxyUrl":"","assetDeliveryApi":"","authApi":"","avatarApi":"https://avatar.sitetest3.bladeitter.cf","badgesApi":"","billingApi":"","captchaApi":"","catalogApi":"","chatApi":"","chatModerationApi":"","contactsApi":"https://contacts.sitetest3.bladeitter.cf","contactsServiceApi":"/contacts-api","contentStoreApi":"","developApi":"","domain":"sitetest3.bladeitter.cf","economyApi":"","economycreatorstatsApi":"","engagementPayoutsApi":"","followingsApi":"","friendsApi":"","gameInternationalizationApi":"","gamesApi":"","gameJoinApi":"","gameUpdateNotificationsApi":"/game-update-notifications","groupsApi":"","groupsModerationApi":"","helpSite":"https://en.help.sitetest3.bladeitter.cf","inventoryApi":"","itemConfigurationApi":"","localeApi":"","localizationTablesApi":"","metricsApi":"","midasApi":"","notificationApi":"","passProductPurchasingApi":"/pass-product-purchasing","bundlesProductPurchasingApi":"/bundles-product-purchasing","premiumFeaturesApi":"","presenceApi":"","privateMessagesApi":"","publishApi":"","restrictedHoursServiceApi":"/restricted-hours-service","screenTimeApi":"/screen-time-api","shareApi":"","shareLinksApi":"/sharelinks","thumbnailsApi":"","tradesApi":"","translationRolesApi":"https://translationroles.sitetest3.bladeitter.cf","twoStepVerificationApi":"https://twostepverification.sitetest3.bladeitter.cf","universalAppConfigurationApi":"/universal-app-configuration","userAgreementsServiceApi":"/user-agreements","userModerationApi":"","usersApi":"","userSettingsApi":"/user-settings-api","voiceApi":"https://voice.sitetest3.bladeitter.cf","websiteUrl":""};


    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2famazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
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
    
        
    Roblox.EnvironmentUrls["websiteUrl"] = "https://2023.rb16ct8.pl";
        
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
      data-api-sites-request-allow-list="friends.2023.rb16ct8.pl,chat.2023.rb16ct8.pl,thumbnails.2023.rb16ct8.pl,games.2023.rb16ct8.pl,gameinternationalization.2023.rb16ct8.pl,localizationtables.2023.rb16ct8.pl"
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
                Roblox.EventStream.Init("//ecsv2.2023.rb16ct8.pl/www/e.png",
                    "//ecsv2.2023.rb16ct8.pl/www/e.png",
                    "//ecsv2.2023.rb16ct8.pl/pe?t=studio",
                    "//ecsv2.2023.rb16ct8.pl/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>            <script>
            var __nspid = "alpts0";
            var __nsptags = [];
            (function (w, d) {
                var x = function () {
                    var j = d.createElement("script"); j.type = "text/javascript"; j.async = true;
                    j.src = "https" + ("https:" === d.location.protocol ? "s://cs" : "://c") + ".ns1p.net/p.js?a=" + __nspid;
                    d.body.appendChild(j);
                }
                if (w.addEventListener) { w.addEventListener("load", x, false); }
                else if (w.attachEvent) { w.attachEvent("onload", x); }
                else { w.onload = x; }
            }(window, document));
        </script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.2023.rb16ct8.pl/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://2023.rb16ct8.pl/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://2023.rb16ct8.pl/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.2023.rb16ct8.pl/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.2023.rb16ct8.pl/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.2023.rb16ct8.pl/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.2023.rb16ct8.pl/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.2023.rb16ct8.pl/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.2023.rb16ct8.pl/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.2023.rb16ct8.pl/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://2023.rb16ct8.pl/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://2023.rb16ct8.pl/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://2023.rb16ct8.pl/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://2023.rb16ct8.pl/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://2023.rb16ct8.pl/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://2023.rb16ct8.pl/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://2023.rb16ct8.pl/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://2023.rb16ct8.pl/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://2023.rb16ct8.pl/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://2023.rb16ct8.pl/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.2023.rb16ct8.pl/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.2023.rb16ct8.pl/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.2023.rb16ct8.pl/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.2023.rb16ct8.pl/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.2023.rb16ct8.pl/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.2023.rb16ct8.pl/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.2023.rb16ct8.pl/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.2023.rb16ct8.pl/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.2023.rb16ct8.pl/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.2023.rb16ct8.pl/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.2023.rb16ct8.pl/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.2023.rb16ct8.pl/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://2023.rb16ct8.pl/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://2023.rb16ct8.pl/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://2023.rb16ct8.pl/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://2023.rb16ct8.pl/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://2023.rb16ct8.pl/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://2023.rb16ct8.pl/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://2023.rb16ct8.pl/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://2023.rb16ct8.pl/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://2023.rb16ct8.pl/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://2023.rb16ct8.pl/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://2023.rb16ct8.pl/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://2023.rb16ct8.pl/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://2023.rb16ct8.pl/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://2023.rb16ct8.pl/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://2023.rb16ct8.pl/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://2023.rb16ct8.pl/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://2023.rb16ct8.pl/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://2023.rb16ct8.pl/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://2023.rb16ct8.pl/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://2023.rb16ct8.pl/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://2023.rb16ct8.pl/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://2023.rb16ct8.pl/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://2023.rb16ct8.pl/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://2023.rb16ct8.pl/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://2023.rb16ct8.pl/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://2023.rb16ct8.pl/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://2023.rb16ct8.pl/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://2023.rb16ct8.pl/authentication/is-logged-in';
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
        desktopEnabled: false,
        phoneEnabled: true,
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
      data-internal-page-name=""
      data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="i1TeG11TWgZm" />

    
    <script src="https://2023.rb16ct8.pl/js/hsts.js?v=3" type="text/javascript" id="hsts" async></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Linkify" data-bundle-source="Main" src="https://js.rbxcdn.com/c379cf5d3d1d768411d61450b75635695058f905a96e00173122282620a96da3.js"></script>



<div id="image-retry-data"
     data-image-retry-max-times="30"
     data-image-retry-timer="500"
     data-ga-logging-percent="10">
</div>
<div id="https-retry-data"
     data-https-retry-max-timeout="0"
     data-https-retry-base-timeout="0"
     data-https-retry-max-times="1">
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
                touch
                
                on-phone
                
                
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
                    Roblox uses cookies to offer you a better experience. For further information, including information on how to withdraw consent and how to manage the use of cookies on Roblox, please refer to our <a href="https://2023.rb16ct8.pl/info/privacy?locale=en_us">Privacy and Cookie Policy</a>.)
                    <span class="icon-close cookie-law-notice-dismiss"></span>
                </div>

        </div>


        <div class="content">

                        

<div class="row page-content">
    <div id="group-search-container"
         class="search-container"
         group-search-bar></div>

    <div id="groups-list-container"
         groups-list-base></div>
</div>


        </div>
            </main>
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container"
        data-is-giftcards-footer-enabled="True">
</footer></div>

    <div id="user-agreements-checker-container"></div>


<div id="app-bumper-main"
     ng-modules="robloxApp, appBumper"
     ng-controller="appBumperController"
     ng-init="init('/appbumper/metadata')"
     ng-cloak>
    <div app-bumper></div>

</div>
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
                footerContent: "<a href='https://assetgame.2023.rb16ct8.pl/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
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
     data-is-game-launch-interface-enabled="False"
     data-is-protocol-handler-launch-enabled="False"
     data-is-duar-auto-opt-in-enabled="false"
     data-is-duar-opt-out-disabled="false"
     data-is-user-logged-in="True"
     data-os-name="Android"
     data-protocol-name-for-client="roblox-player"
     data-protocol-name-for-studio="roblox-studio"
     data-protocol-roblox-locale="en_us"
     data-protocol-game-locale="en_us"
     data-protocol-url-includes-launchtime="true"
     data-protocol-detection-enabled="true"
     data-protocol-separate-script-parameters-enabled="false"
     data-protocol-avatar-parameter-enabled="false"
     data-protocol-channel-name="LIVE"
     data-protocol-studio-channel-name=""
     data-protocol-player-channel-name="">
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
     data-hide-remember-overlay
     style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Remember my choice</strong> and click <img data-delaysrc="https://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application" /> in the dialog box above to join experiences faster in the future!
                
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
             window.location = 'https://2023.rb16ct8.pl/unsupported?osx=10.5'; return false;
}
</script>


    <style>
        #win_firefox_install_img .activation {
        }

        #win_firefox_install_img .installation {
            width: 869px;
            height: 331px;
        }

        #mac_firefox_install_img .activation {
        }

        #mac_firefox_install_img .installation {
            width: 250px;
        }

        #win_chrome_install_img .activation {
        }

        #win_chrome_install_img .installation {
        }

        #mac_chrome_install_img .activation {
            width: 250px;
        }

        #mac_chrome_install_img .installation {
        }
    </style>
    <div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
        <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
        <div style="padding-bottom:10px;text-align:center">
            <br /><br />
        </div>
    </div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='clientinstaller' type='text/javascript' src='https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js'></script>

<script type="text/javascript">
    Roblox.Client._skip = '/unsupported';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;

        
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
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Android', 'GameLaunchAttempt_Android_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
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
            Roblox.CookieUpgrader.domain = '2023.rb16ct8.pl';
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



<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceStatus" data-bundle-source="Main" src="https://js.rbxcdn.com/077dd64734d3aa9a884874f85f2f514a239688c33a0fdf3f90365e0e7436ec3b.js"></script>

    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
    </div>

    <div ng-modules="pageTemplateApp">
        <script type="text/javascript" src="https://js.rbxcdn.com/64553d2f220856132cc05a8e36dc0c4d.js"></script>
    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/76ce11db9c5a3f009a70ea6ca846c68f657d30147d519f98e1eebe925485ce41.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/fa9731787e9cb858f9ede7da518b44bcce78aef3637547403e2d29fd147db3db.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8849783a45e85b04232d3a71e9efc2ce8a5d4e0e072bb37740fe2f5acd0ef50a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a5d76f662cc98d13a65d323097497aa93948409caf12b33464400259111e8082.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/44e6fe0aaaa075de7ab794c70ead3b501f709f0caa4499218e81b9cf477794cd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a649fadab38b9a8866624ed6302536fa09f91452edf32ae01c023f08ca33562a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9046a303681e15f689ae09057b4dbf9c8ecf074be4d921d2d428dde7744bf03e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6ca3c15b433b9894e4ba49ed9fb163a8b78a9d26e86958677bc42c6309ff0374.js"></script>
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
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/57429df725b01a8730522a3cb206e2e996fa367baf0500a49d23828399585c93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/968d4d3849f6dfa43d9ec98cf21dc74c17e9d1d904af92afc3593c5b90b5a515.js"></script>

    

    
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

    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='https://js.rbxcdn.com/25e51f761daaec8ab609ad05dcdf56a7.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/dcb8d58df169ad0a416eacc6d6621181d1a6e3cf0aadbf1430e4e39b6241c633.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" src="https://js.rbxcdn.com/99947c5d94986d31dfddd0fc5b5b9693f681edba4d005a96c93aea65315dd49f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/978681f40e863a74bf0759d6ae27622db52b16cb4ff3af5ef942866cba7aef73.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1a2a09cc686613fac0c6ab26411db07ed01d8b509558112c2ab885b28f3c96b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SystemFeedback" data-bundle-source="Main" src="https://js.rbxcdn.com/aac542106f7f77697cbc3b36ab3cf0619bf9b69a1af0983e59dfeb6c36652d3b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CursorPagination" data-bundle-source="Main" src="https://js.rbxcdn.com/267b13d96f317adcd84f99e1b9758d63d612f6e44f7c06b49c6c44c1fa99323f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/2f03f9d406b71cc0bdad03d96324d2430b7c67614862b804ade5d52a2309832c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ea1c524777e7f18a31618de80e56d5f43d496ba89cfb48d3009a436590fc7735.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GroupSearch" data-bundle-source="Main" src="https://js.rbxcdn.com/578426b41ff60e2dcabbb0a52facb167c889543e047d2bfe49c0673302eb6e1c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d5dbaab7a379369de57cbd14d105392b1a01dacd054d0b49eedaffac320cdf7b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6e96102abded7c4712026daa05b63bd9206395bd46df5edec2bd1e0c529a8bf4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GroupsList" data-bundle-source="Main" src="https://js.rbxcdn.com/1725976230d497d65903efd5a0e7b1bcd38630ebbcd14a3f025fcb34ed27f25d.js"></script>





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
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9b0f15544000908b451d3ce2e0570ee682c1a91d32f26c7350d933ded3bb8a1a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/06e3685ab7b6f1ecbd18be2a693a9dab6c7766eb333dbf0640bbf9cf2f7abd5f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="https://js.rbxcdn.com/d34fe5128c4ec89a217e6c274f8b2fd6114bfcc8380275f87ef3200527089cd1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/396892e9ffe25652a4b137c7f5d41a4e4793d20bbad8b4194f7022036685e943.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0104be627f13e60fbdee4407851f3864c514a290575109ffb39f4261fd9886b2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>


    


    




<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/a411b4655a0c97ad1d8209c2daa1e92b0dfc5d66716efcfea310f491aabf1ef6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a345cfb0350dad12bb75dbfc1e2263840cd72a63daea093eefe2df4a057b4610.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/07f28187a04262691c40aab0653363d045813ea0ed23e4b9a9584a4d42b33d64.js"></script>



    

    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pageEnd' type='text/javascript' src='https://js.rbxcdn.com/f0d2c1e8afc821e9f52297d1d328b8e8.js'></script>


</body>
</html>