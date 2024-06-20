<?php
session_start();
error_reporting(0);

include_once('../site.php');

// Database connection setup
// Replace database_credentials with your actual database credentials
$servername = "mysql0.serv00.com";
$username = "m4486_root";
$password = "xzNsO(CE^D#V7T4KjhlG";
$dbname = "m4486_st3";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Database connection failed: " . $e->getMessage());
}

// Set $logged to false if the user is not logged in
$logged = false;

sleep(5);

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$logged) {
    $requestData = json_decode(file_get_contents('php://input'), true);

    if (
        isset($requestData['username']) && isset($requestData['password']) &&
        isset($requestData['birthday']) && isset($requestData['gender']) &&
        isset($requestData['isTosAgreementBoxChecked'])
    ) {
        $cleanu = $ep->remove($requestData['username']);
        $cleanp = $requestData['password'];
        $cleanb = $ep->remove($requestData['birthday']);
        $cleang = $requestData['gender'];
        $cleanc = $requestData['isTosAgreementBoxChecked'];

        $email = generateFakeEmail();

        $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
        $query->execute([':userName' => $cleanu]);
        $luser = $query->fetch();

        if (!$luser) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $cleanu) == 0 || $ch->hasProfanity($cleanu)) {
                $response = array('code' => 1, 'message' => 'This username is not valid.');
            } else {
                if (strlen($cleanu) > 20 || strlen($cleanu) < 3) {
                    $response = array('code' => 1, 'message' => 'Usernames can only be between 3 and 20 characters long.');
                } else {
                    if (strlen($cleanp) < 8) {
                        $response = array('code' => 2, 'message' => 'Password must be at least 8 characters long.');
                    } elseif (strpos($cleanp, $cleanu) !== false) {
                        $response = array('code' => 3, 'message' => 'Password must not be your username.');
                    } else {
                        $hashpass = password_hash($cleanp, PASSWORD_BCRYPT);
                        $jd = date('d-m-y');
                        $genid = bin2hex(openssl_random_pseudo_bytes(15));
                        $enc_email = $ep->encrypt($email, $encryption_key);
                        $randCookie = bin2hex(random_bytes(100));

                        $query = $db->prepare("INSERT INTO accounts (username, DisplayName, password, Robux, jdate, identifier, gettc, cookieAuth) VALUES (:userName, :userDName, :password, :robux, :jd, :id, :gettc, :cookieAuth)");
                        $query->execute([
    ':userName' => $cleanu,
    ':userDName' => $cleanu,
    ':password' => $hashpass,
    ':robux' => '5',
    ':jd' => $jd,
    ':id' => $genid,
    ':gettc' => '0',
    ':cookieAuth' => $randCookie
]);

session_regenerate_id();
$_SESSION['primarylogin'] = true;
$_SESSION['identify'] = $genid;
$_SESSION['username'] = $cleanu; // Set the username in the session

// Add the following code:
setcookie('ROBLOSECURITY', $randCookie, time() + (3600 * 3600), "/");

                        header('Content-Type: application/json');
                        exit;
                    }
                }
            }
        } else {
            $response = array('code' => 1, 'message' => 'That account already exists!');
        }
    } else {
        $response = array('code' => 1, 'message' => 'Valid Username, Password, Birthday, Gender, and TOS Agreement are required. Please try again.', 'userFacingMessage' => 'Something went wrong');
    }

    header('Content-Type: application/json');
    echo json_encode(array('errors' => array($response)));
    exit;
}

function generateFakeEmail()
{
    $fakeDomain = 'example.com';
    $randomString = bin2hex(openssl_random_pseudo_bytes(5));
    $email = 'user_' . $randomString . '@' . $fakeDomain;

    return $email;
}

// The existing login code with session system

$s = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$logged) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $cleanu = $ep->remove($_POST['username']);
        $cleanp = $ep->remove($_POST['password']);

        $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
        $query->execute([':userName' => $cleanu]);

        $luser = $query->fetch();
        if (!$luser) {
            exit('That account does not exist.');
        } else {
            $accpass = $luser['password'];
            if (password_verify($cleanp, $accpass)) {
                session_regenerate_id();
                $_SESSION['primarylogin'] = true;
                $_SESSION['identify'] = $luser['identifier'];
                $_SESSION['username'] = $cleanu; // Set the username in the session

                // Get user's IP address
                $userIp = hash('sha256', $_SERVER['REMOTE_ADDR']);

                // Get user agent information
                $userAgent = $_SERVER['https_USER_AGENT'];

                // Parse user agent to extract browser and operating system information
                $browser = getBrowser($userAgent);
                $os = getOS($userAgent);

                // Store user information in the session
                $_SESSION['ip_address'] = $userIp;
                $_SESSION['browser'] = $browser;
                $_SESSION['os'] = $os;

                // Insert session information into the sessions table
                $insertSession = $db->prepare("INSERT INTO sessions (session_id, user_id, last_activity, ip_address, browser, os) VALUES (:sessionId, :userId, :lastActivity, :ipAddress, :browser, :os)");
                $insertSession->execute([':sessionId' => session_id(), ':userId' => $luser['id'], ':lastActivity' => time(), ':ipAddress' => $userIp, ':browser' => $browser, ':os' => $os]);

                setcookie('ROBLOSECURITY', ''.$luser['cookieAuth'], time() + (3600 * 3600), "/");
                header('Location: /home');
                exit();
            } else {
                exit('That password is not linked with this account.');
            }
        }
    } else {
        exit('Please complete the form.');
    }
}

// New auto-login implementation

// Remaining code
?>