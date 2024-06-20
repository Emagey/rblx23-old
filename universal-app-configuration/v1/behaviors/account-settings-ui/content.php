<?php
$responseData = array(
    "displayTwoStepVerification" => true,
    "displayAccountPIN" => true,
    "displayEmailAddress" => true,
    "displayWeChat" => true,
    "displayQQ" => true,
    "displayConnectedAccounts" => true,
    "displayNotificationStream" => true,
    "displayDesktopPush" => true,
    "displayMobilePush" => true,
    "displayPhoneNumber" => true,
    "displaySocialMedia" => true,
    "displayDescription" => true,
    "displayAccountRestrictions" => true,
    "displayCountryList" => true,
    "displayWhoCanMessageMe" => true,
    "displayWhoCanFindMeByPhoneNumber" => true,
    "displayWhoCanInviteMeToVIPServers" => true,
    "displayWhoCanTradeWithMe" => true,
    "displayTradeQualityFilter" => true,
    "displayLanguageList" => true,
    "displayChangeUsername" => true,
    "displayChangePassword" => true,
    "displayBillingTab" => true,
    "displayPrivacyModeToolTip" => true,
    "displayBirthdayInfoToolTip" => true,
    "displayIdentityVerification" => true,
    "displayVoiceChatSettings" => true,
    "displayPasswordRow" => true,
    "displayChatFilteringSetting" => true,
    "displayGuildedSocialLink" => true,
    "displayParentalControlTab" => true,
    "displayParentalSpendControl" => true,
    "displayAccountDeletion" => true,
    "displayAppPermissionsTab" => true,
    "displayReactNotificationsTab" => true,
    "useUserSettingsApiForSettings" => true,
    "parentalControlsReactUIEnabled" => true,
    "display17PlusDescription" => true,
    "billingSettingsReactUiEnabled" => true,
    "display17PlusUnavailableIOSDescription" => true
);

$jsonResponse = json_encode($responseData);
header("Content-Type: application/json");

// Output the JSON response
echo $jsonResponse;

