<?php
require_once ('../site.php');

$host = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the logged-in user's ID (replace 1 with the actual user ID)
$userId = $usr['id'];

// Prepare and execute the query
$query = "SELECT * FROM accounts WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

if ($result === false) {
    echo "Failed to fetch data from the database.";
} else {
    $row = $result->fetch_assoc();

    // Check if the row exists
    if ($row === null) {
        echo "User not found.";
    } else {
        // Calculate the remaining Robux needed for a username change
        $robuxNeeded = 1000 - $row["Robux"]; // Assuming the user's current Robux balance is stored in the "robux" column

        // Ensure the remaining Robux needed is not negative
        $robuxRemainingForUsernameChange = max(0, $robuxNeeded);

        // Transform the row data into the desired JSON structure
        $data = [
            "ChangeUsernameEnabled" => true,
            "IsAdmin" => false,
            "UserId" => $userId,
            "Name" => $row["username"],
            "DisplayName" => $row["DisplayName"],
            // Add other fields from the row as needed
            "IsEmailOnFile" => (bool)$row["HaveEmail"], // Convert to boolean value
            "IsEmailVerified" => (bool)$row["EVerified"],
            "IsPhoneFeatureEnabled" => false,
            "RobuxRemainingForUsernameChange" => $robuxRemainingForUsernameChange,
            "PreviousUserNames" => "",
            "UseSuperSafePrivacyMode" => false,
            "IsAppChatSettingEnabled" => true,
            "IsGameChatSettingEnabled" => true,
            "IsParentalSpendControlsEnabled" => true,
            "IsSetPasswordNotificationEnabled" => false,
            "ChangePasswordRequiresTwoStepVerification" => false,
            "ChangeEmailRequiresTwoStepVerification" => false,
            "UserEmail" => censorEmail($row["email"]), // Censor the email address
            "UserEmailMasked" => true, // Set to true to indicate that the email is masked
            "UserEmailVerified" => false,
            "CanHideInventory" => true,
            "CanTrade" => false,
            "MissingParentEmail" => false,
            "IsUpdateEmailSectionShown" => true,
            "IsUnder13UpdateEmailMessageSectionShown" => false,
            "IsUserConnectedToFacebook" => false,
            "IsTwoStepToggleEnabled" => false,
            "AgeBracket" => 0,
            "UserAbove13" => true,
            "ClientIpAddress" => "127.0.0.1",
            "AccountAgeInDays" => null,
            "IsPremium" => false,
            "IsBcRenewalMembership" => true,
            "PremiumFeatureId" => null,
            "HasCurrencyOperationError" => false,
            "CurrencyOperationErrorMessage" => null,
            "Tab" => null,
            "ChangePassword" => true,
            "IsAccountPinEnabled" => true,
            "IsAccountRestrictionsFeatureEnabled" => true,
            "IsAccountRestrictionsSettingEnabled" => false,
            "IsAccountSettingsSocialNetworksV2Enabled" => true,
            "IsUiBootstrapModalV2Enabled" => true,
            "IsDateTimeI18nPickerEnabled" => true,
            "InApp" => false,
            "MyAccountSecurityModel" => [
                "IsEmailSet" => false,
                "IsEmailVerified" => true,
                "IsTwoStepEnabled" => false,
                "ShowSignOutFromAllSessions" => true,
                "TwoStepVerificationViewModel" => [
                    "UserId" => $row["id"],
                    "IsEnabled" => false,
                    "CodeLength" => 0,
                    "ValidCodeCharacters" => null
                ]
            ],
            "ApiProxyDomain" => "https://sitetest3.bladeitter.cf",
            "AccountSettingsApiDomain" => "https://sitetest3.bladeitter.cf",
            "AuthDomain" => "https://sitetest3.bladeitter.cf",
            "IsDisconnectFacebookEnabled" => true,
            "IsDisconnectXboxEnabled" => true,
            "NotificationSettingsDomain" => "https://sitetest3.bladeitter.cf",
            "AllowedNotificationSourceTypes" => [
                "Test",
                "FriendRequestReceived",
                "FriendRequestAccepted",
                "PartyInviteReceived",
                "PartyMemberJoined",
                "ChatNewMessage",
                "PrivateMessageReceived",
                "UserAddedToPrivateServerWhiteList",
                "ConversationUniverseChanged",
                "TeamCreateInvite",
                "GameUpdate",
                "DeveloperMetricsAvailable",
                "GroupJoinRequestAccepted",
                "Sendr",
                "ExperienceInvitation"
            ],
            "AllowedReceiverDestinationTypes" => [
                "DesktopPush",
                "NotificationStream"
            ],
            "BlacklistedNotificationSourceTypesForMobilePush" => [],
            "MinimumChromeVersionForPushNotifications" => 50,
            "PushNotificationsEnabledOnFirefox" => true,
            "LocaleApiDomain" => "https://sitetest3.bladeitter.cf",
            "HasValidPasswordSet" => true,
            "IsFastTrackAccessible" => false,
            "HasFreeNameChange" => false,
            "IsAgeDownEnabled" => true,
            "IsDisplayNamesEnabled" => true,
            "IsBirthdateLocked" => false
        ];

        // Encode the data as JSON
        $json = json_encode($data);
        header('Content-Type: application/json');
        echo $json;
    }
}

$stmt->close();
$mysqli->close();

// Function to censor the email address
function censorEmail($emailAddress) {
    if (empty($emailAddress)) {
        return null;
    } else {
        $parts = explode("@", $emailAddress);
        $username = $parts[0];
        $domain = $parts[1];
        $censoredUsername = substr($username, 0, 1) . str_repeat("*", strlen($username) - 1);
        return $censoredUsername . "@" . $domain;
    }
}
?>
