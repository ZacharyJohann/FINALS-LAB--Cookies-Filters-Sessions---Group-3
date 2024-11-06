<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Default theme
$theme = "light";

if (isset($_COOKIE["theme"])) {
    $theme = $_COOKIE["theme"];
}

// Handle form submission to change theme
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["theme"])) {
    // Sanitize and validate the input
    $selected_theme = filter_input(INPUT_POST, 'theme', FILTER_UNSAFE_RAW, 513);
    
    // Check if the sanitized theme is either 'light' or 'dark'
    if (in_array($selected_theme, ['light', 'dark'])) {
        $theme = $selected_theme;
        setcookie("theme", $theme, time() + (3600), "/"); // The cookie stays for 1 hour
        // Refresh the page to apply the cookie change
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RogueGear</title>
    <link href="website.css" rel="stylesheet"/>
    <link rel="icon" href=
"https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Emblem_of_Gojome%2C_Akita.svg/768px-Emblem_of_Gojome%2C_Akita.svg.png"
        type="image/x-icon" />
</head>

<body>
<style>
        body {
            background-image: url('greenbg.jpg');
            background-size: cover;
            color: <?php echo $theme === "dark" ? "white" : "black"; ?>;
        }
    </style>
</head>
<body>
    <h2>Welcome to My Website</h2>

    <!-- Theme selection form -->
    <form method="POST" action="">
        <label for="theme">Select Theme:</label>
        <select name="theme" id="theme">
            <option value="dark" <?php if ($theme === "dark") echo "selected"; ?>>Light</option>
            <option value="light" <?php if ($theme === "light") echo "selected"; ?>>Dark</option>
        </select>
        <input type="submit" value="Apply">
    </form>
</body>
</html>

    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#product">Products</a>
        <a href="#contact">Contacts</a>
    </div>

    <section id="home">
    <div id="intropic">
        <img src="https://png.pngtree.com/background/20230528/original/pngtree-gaming-room-with-all-five-monitors-picture-image_2781158.jpg">
    </div> 
</section>
       
    <div id="feat">
        <h1>Featured Items</h1>
        <div class="feat">
        <div>
            <img src="https://dlcdnwebimgs.asus.com/gain/718462E2-0FF1-424B-8070-9EE75A96DC64/w240/h175">
        </div>
        <div>
            <img src="https://dlcdnwebimgs.asus.com/gain/21EB1E78-1240-4559-9412-FEF17430103B/w240/h175">
        </div>
        <div>
            <img src="https://dlcdnwebimgs.asus.com/gain/F919198E-4F2B-4A8A-969A-E6E4757674AC/w240/h175">
        </div>
        <div>
            <img src="https://dlcdnwebimgs.asus.com/gain/FE102E9F-C72D-407F-A49B-2AB1006A0669/w240/h175">
        </div>
    </div>
    </div>

    <div id="intro">
        <h1>- Welcome To The Ultimate Gaming Accessories Hub! -</h1>
        <h2>Elevate your gameplay with our carefully curated selection of high-performance gear designed for every type of gamer. From precision mice and ergonomic keyboards to immersive headsets and stylish controllers, we have everything you need to enhance your gaming experience. Level up your setup and unleash your potential with our top-notch accessories!</h2>
    </div>

    <div id="product">
        
        <div>
            <h1>Products</h1>
        </div>
        <div>
        <h2>Gaming Monitors</h2>
        </div>
        <div class="product-list">

            <div class="product-item">
                <img src="https://dlcdnwebimgs.asus.com/gain/C52234A9-6435-4125-9D6C-34AED3E1271A/w717/h525/w273" alt="Monitor 1">
                <div class="product-name">RogueGear Strix XG27UCG Dual mode</div>
                <div class="product-details">27-inch 3840x2160, dual mode (4K 160Hz or FHD 320Hz), 1ms (GTG), Fast IPS, Extreme Low Motion Blur Sync, USB Type-C, G-Sync compatible (processing), DisplayWidget Center, tripod socket, HDR, Aura Sync </div>
                <div class="product-price">₱999.99</div>
                <a href="https://example.com/monitor1" class="buy-button">Purchase</a>
            </div>
    
            <div class="product-item">
                <img src="https://dlcdnwebimgs.asus.com/gain/155B74C4-8D60-45E1-9E29-23D83B8025B4/w717/h525/w273" alt="Monitor 2">
                <div class="product-name">RogueGear Swift OLED PG27AQDP</div>
                <div class="product-details">27-inch (26.5-inch viewable) WOLED panel, 480 Hz (above 360Hz), 0.03 ms (GTG), G-SYNC® compatible, custom heatsink, ASUS OLED Care+, AI Assistant, VESA DisplayHDR™ 400 True Black, uniform brightness, 99% DCI-P3, true 10-bit color, and DisplayWidget Center</div>
                <div class="product-price">₱999.99</div>
                <a href="https://example.com/monitor2" class="buy-button">Purchase</a>
            </div>
    
            <div class="product-item">
                <img src="https://dlcdnwebimgs.asus.com/gain/E151ABBE-04E9-4327-82BD-2D8A924D62B1/w717/h525/w273" alt="Monitor 3">
                <div class="product-name">RogueGear Strix XG27WCMS USB Type-C Gaming Monitor</div>
                <div class="product-details">27-inch 2560x1440, Curved, 280Hz (Overclock), 1ms (GTG), Extreme Low Motion Blur Sync, USB Type-C, FreeSync Premium, DisplayWidget Center, tripod socket, HDR</div>
                <div class="product-price">₱999.99</div>
                <a href="https://example.com/monitor3" class="buy-button">Purchase</a>
            </div>
        </div>

        <div>
            <h2>Gaming Desktops</h2>
            </div>
            <div class="product-list">
    
                <div class="product-item">
                    <img src="https://dlcdnwebimgs.asus.com/gain/B534E155-64F3-4579-9E74-E6F151A9B649/w717/h525/w273" alt="Monitor 1">
                    <div class="product-name">RogueGear Strix G15DS</div>
                    <div class="product-details">NVIDIA® GeForce RTX™ 3070 DUAL with LHR Desktop GPU, Windows 11 Home, AMD Ryzen™ 7 7700X Processor, 1TB M.2 NVMe™ PCIe® 4.0 SSD storage </div>
                    <div class="product-price">₱999.99</div>
                    <a href="https://example.com/monitor1" class="buy-button">Purchase</a>
                </div>
        
                <div class="product-item">
                    <img src="https://dlcdnwebimgs.asus.com/gain/EC32432F-77BF-499E-AB69-11681238BFC4/w717/h525/w273" alt="Monitor 2">
                    <div class="product-name">RogueGear Strix G13CH</div>
                    <div class="product-details">NVIDIA® GeForce RTX™ 3070 TURBO with LHR Desktop GPU, Windows 11 Pro, 13th Gen Intel® Core™ i7-13700F Processor, 1TB + 1TB M.2 NVMe™ PCIe® 4.0 SSD storage</div>
                    <div class="product-price">₱999.99</div>
                    <a href="https://example.com/monitor2" class="buy-button">Purchase</a>
                </div>
        
                <div class="product-item">
                    <img src="https://dlcdnwebimgs.asus.com/gain/4AE1EB77-C820-444A-B0A5-49912F3C1412/w717/h525/w273" alt="Monitor 3">
                    <div class="product-name">RogueGear Strix XG27WCMS USB Type-C Gaming Monitor</div>
                    <div class="product-details">NVIDIA® GeForce® GTX1660Ti Desktop GPU, Windows 10 Pro, 11th Gen Intel® Core™ i7-11700 Processor</div>
                    <div class="product-price">₱999.99</div>
                    <a href="https://example.com/monitor3" class="buy-button">Purchase</a>
                </div>
            </div>

            <div>
                <h2>Gaming Keyboards</h2>
                </div>
                <div class="product-list">
        
                    <div class="product-item">
                        <img src="https://dlcdnwebimgs.asus.com/gain/0AE762BA-D112-49BF-A029-1D6B01698112/w717/h525/w273" alt="Monitor 1">
                        <div class="product-name">RogueGear Strix Scope II 96 RX Wireless</div>
                        <div class="product-details">ROG Strix Scope II 96 RX Wireless optical gaming keyboard with tri-mode connection, streaming hotkeys, multi-function controls, ROG RX Optical Switches, ROG keyboard stabilizers, PBT doubleshot keycaps, silicone dampening foam, additional ROG-themed ABS keycaps, three tilt angles, and wrist rest. </div>
                        <div class="product-price">₱999.99</div>
                        <a href="https://example.com/monitor1" class="buy-button">Purchase</a>
                    </div>
            
                    <div class="product-item">
                        <img src="https://dlcdnwebimgs.asus.com/gain/5707EC06-11F9-4721-B9F4-A028270E5249/w717/h525/w273" alt="Monitor 2">
                        <div class="product-name">RogueGear Azoth</div>
                        <div class="product-details">ROG Azoth gaming custom keyboard with 75 keyboard form factor, gasket mount, three-layer dampening foam and metal top cover, highly customizable with hot-swappable pre-lubed ROG NX mechanical switches, ROG keyboard stabilizers, PBT doubleshot keycaps and lube kit, tri-mode connection with 2.4 GHz SpeedNova technology, OLED display, three-way control knob, three tilt angles, and Mac support</div>
                        <div class="product-price">₱999.99</div>
                        <a href="https://example.com/monitor2" class="buy-button">Purchase</a>
                    </div>
            
                    <div class="product-item">
                        <img src="https://dlcdnwebimgs.asus.com/gain/EE4EA6C5-0938-4292-BFA6-DC0A56756148/w717/h525/w273" alt="Monitor 3">
                        <div class="product-name">RogueGear Falchion Ace</div>
                        <div class="product-details">ROG Falchion Ace 65% compact gaming keyboard with pre-lubed ROG NX mechanical switches with ROG switch stabilizer, PBT doubleshot keycaps, sound-dampening foam, interactive touch panel, dual Type-C ports, three keyboard tilt angles, and cover case</div>
                        <div class="product-price">₱999.99</div>
                        <a href="https://example.com/monitor3" class="buy-button">Purchase</a>
                    </div>
                </div>

                <div>
                    <h2>Gaming Mouse</h2>
                    </div>
                    <div class="product-list">
            
                        <div class="product-item">
                            <img src="https://dlcdnwebimgs.asus.com/gain/89F97758-30CB-4044-A3FD-0A23DF80463B/w717/h525/w273" alt="Monitor 1">
                            <div class="product-name">RogueGear Keris II Ace</div>
                            <div class="product-details">The ROG Keris II Ace is an ultralight 54-gram ergonomic gaming mouse with a shape tested by pro FPS players. Equipped with 42,000-dpi ROG AimPoint Pro optical sensor, ROG Optical Micro Switches and the ROG SpeedNova wireless technology, the Keris II Ace is also able to enhance gaming performance even further with the ROG Polling Rate Booster, which supports polling rates up to 4,000 Hz in wireless mode and up to 8,000 Hz in wired mode. </div>
                            <div class="product-price">₱999.99</div>
                            <a href="https://example.com/monitor1" class="buy-button">Purchase</a>
                        </div>
                
                        <div class="product-item">
                            <img src="https://dlcdnwebimgs.asus.com/gain/40E72F38-C69E-46C6-9516-960D5D4C5782/w717/h525/w273" alt="Monitor 2">
                            <div class="product-name">RogueGear Strix Impact III Wireless</div>
                            <div class="product-details">The ROG Strix Impact III Wireless is an ultralight 57-gram compact gaming mouse that features ROG SpeedNova wireless and Bluetooth® modes with long-lasting battery life. The ROG AimPoint optical sensor offers precise tracking, and the ROG Omni Receiver allows for connections to a keyboard and mouse via a single dongle.</div>
                            <div class="product-price">₱999.99</div>
                            <a href="https://example.com/monitor2" class="buy-button">Purchase</a>
                        </div>
                
                        <div class="product-item">
                            <img src="https://dlcdnwebimgs.asus.com/gain/4E2672B9-9E95-4216-A7A9-76F99D8D5AB2/w717/h525/w273" alt="Monitor 3">
                            <div class="product-name">RogueGear Gladius III Wireless AimPoint</div>
                            <div class="product-details">The ROG Gladius III Wireless AimPoint is a lightweight 79-gram wireless RGB gaming mouse that features a 36,000-dpi ROG AimPoint optical sensor, tri-mode connectivity, ROG SpeedNova wireless technology, swappable mouse switches, ROG Micro Switches, pivoted button mechanism for 0 ms click latency, ergonomic design, ROG Paracord, 100% PTFE mouse feet, six programmable buttons, and mouse grip tape.</div>
                            <div class="product-price">₱999.99</div>
                            <a href="https://example.com/monitor3" class="buy-button">Purchase</a>
                        </div>
                    </div>
    </div>

    <div id="contact">
        <h1>
            Contacts
        </h1>
        <p>
            <b>GitHub Accounts:</b>
            </br>
            <a href="https://github.com/Daichikleo20" target="_blank">Rafael Regondola</a>
            </br>
            <a href="https://github.com/Johnericranada22" target="_blank">Eric Rañada</a>
            </br>
            <a href="https://github.com/ChristianJasonOh" target="_blank">Christian Oh</a>
            </br>
            <a href="https://github.com/RoanneChristineMendoza" target="_blank">Roanne Mendoza</a>
            </br>
            <a href="https://github.com/ZacharyJohann" target="_blank">Zachary Nataño</a>
            </br>
    </div>
</body>

<footer>
    <div>
        ____________________________________
    </div>
    ©ASUSTeK Computer Inc. All rights reserved
</footer>