<?php
// Display messages with retro style
function displayMessage($message, $type = 'info') {
    $colors = [
        'info' => '00ffff',
        'success' => '00ff00',
        'warning' => 'ffff00',
        'error' => 'ff0000'
    ];
    
    $color = $colors[$type] ?? 'ffffff';
    
    echo '<div class="retro-message" style="border: 2px solid #' . $color . '; box-shadow: 0 0 10px #' . $color . ';">';
    echo '<p class="pixel-text" style="color: #' . $color . ';">> ' . $message . '</p>';
    echo '</div>';
}

// Get visitor IP
function getVisitorIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Log visitor
function logVisitor() {
    global $conn;
    
    $ip = getVisitorIP();
    $page = basename($_SERVER['PHP_SELF']);
    $referrer = $_SERVER['HTTP_REFERER'] ?? 'direct';
    
    try {
        $stmt = $conn->prepare("INSERT INTO visitors (ip, page, referrer, visit_time) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$ip, $page, $referrer]);
    } catch(PDOException $e) {
        // Silent fail - we don't want to break the site if logging fails
    }
}
?>