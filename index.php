<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Fetch random titles for the main title and the name suffix
        $titles = ["අද මම ෆ්‍රී", "අපි Chat කරමුද", "ඔන්ලයින් Chat කරමු", "වීඩියෝ Call ගමු"];
        $names = ["මම සදුනි", "මම නෙත්මි", "මම මදු", "මම චලනි"];

        // Combine one random item from each array
        $randomTitle = getRandomItem($titles) . " - " . getRandomItem($names);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="හරිම පාලුයි හලෝ. අපි චැට් කරමුද. වීඩියෝ කෝල් එකක් ගන්නකො.">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title><?php echo htmlspecialchars($randomTitle); ?></title>
    <link rel="stylesheet" href="styles.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Noto Sans Sinhala Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400&display=swap" rel="stylesheet">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BXSEKG82TQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BXSEKG82TQ');
    </script>

    <!-- Onesignal -->
    <script src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js" defer></script>
    <script>
    window.OneSignalDeferred = window.OneSignalDeferred || [];
    OneSignalDeferred.push(async function(OneSignal) {
        await OneSignal.init({
        appId: "4ae41f4d-b3ba-4d04-ab96-33078c4f4b67",
        });
    });
    </script>

    <!-- Pop Under Ads -->
    <script type='text/javascript' src='//jigsawharmony.com/7c/2b/cd/7c2bcd4ae7e1dabf862e6b66acba80b0.js'></script>
    <style>
        /* Apply Noto Sans Sinhala font */
        body {
            font-family: 'Noto Sans Sinhala', sans-serif;
        }
        .custom-paragraph {
        background-color: rgb(94 2 34);
        border-radius: 10px;
        padding: 2px;
        color: #d95656;
    </style>

</head>
<body>
    <?php
        function fetchData($filePath) {
            if (file_exists($filePath)) {
                $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                return $lines ? $lines : [];
            }
            return [];
        }

        function getRandomItem($array) {
            return !empty($array) ? $array[array_rand($array)] : 'Unavailable';
        }

        $avatarImages = glob("avatar/*.jpg");
        $randomAvatar = getRandomItem($avatarImages);

        $names = fetchData('names.txt');
        $bios = fetchData('bio.txt');
        $ages = fetchData('age.txt');
        $locations = fetchData('location.txt');
        $links = fetchData('links.txt');

        $randomName = getRandomItem($names);
        $randomBio = getRandomItem($bios);
        $randomAge = getRandomItem($ages);
        $randomLocation = getRandomItem($locations);
    ?>

    <div class="container">
        <!-- Header Ad Space -->
        <div class="ad-space" style="text-align: center; margin: 20px 0;">

        </div>

        <div class="profile">
            <img src="<?php echo $randomAvatar; ?>" alt="Profile Picture" class="profile-image">
            <h1 class="name"><?php echo htmlspecialchars($randomName); ?></h1>
            <p class="bio"><?php echo htmlspecialchars($randomBio); ?></p>
            <center><p class="age-location"><?php echo htmlspecialchars("$randomAge, $randomLocation"); ?></p></center>
        </div>
        
        <div class="links">
        <center><p class="custom-paragraph">වැඩ කලේ නැත්නම් අයෙත් Click කරන්න</p></center>
            <a href="<?php echo getRandomItem($links); ?>" class="link-button pulse">
                <i class="fa-brands fa-whatsapp"></i> <span>WhatsApp නම්බර් එක</span>
            </a>
            <a href="<?php echo getRandomItem($links); ?>" class="link-button">
                <i class="fa-solid fa-video"></i> <span>Sex Video Call</span>
            </a>
            <a href="<?php echo getRandomItem($links); ?>" class="link-button">
                <i class="fa-solid fa-phone-volume"></i> <span>IMO නම්බර් එක</span>
            </a>
            <a href="<?php echo getRandomItem($links); ?>" class="link-button blink">
                <i class="fa-solid fa-street-view"></i> <span>සල්ලි වලට හම්බෙන්න එනවා</span>
            </a>
        </div>

        <!-- Footer Ad Space -->
        <div class="ad-space" style="text-align: center; margin: 20px 0;">

        </div>
        
        <div class="social-icons">
            <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" class="icon"><i class="fas fa-video"></i></a>
        </div>
    </div>
</body>
</html>