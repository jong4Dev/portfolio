<?php 
$pageTitle = "Contact";
include 'includes/header.php'; 

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // In a real application, you would validate and process the data here
    $success = true; // Simulate successful submission
}
?>

<section class="retro-contact">
    <h1 class="pixel-text">> CONTACT_FORM</h1>
    
    <?php if (isset($success) && $success): ?>
    <div class="retro-alert success">
        <div class="alert-icon pixel-text">✓</div>
        <div class="alert-text">MESSAGE SENT SUCCESSFULLY! I'LL GET BACK TO YOU SOON.</div>
    </div>
    <?php endif; ?>
    
    <div class="contact-grid">
        <div class="contact-form">
            <form method="POST" action="contact.php" class="retro-form">
                <div class="form-group">
                    <label for="name" class="pixel-text">YOUR_NAME:</label>
                    <input type="text" id="name" name="name" required class="retro-input">
                </div>
                
                <div class="form-group">
                    <label for="email" class="pixel-text">EMAIL_ADDRESS:</label>
                    <input type="email" id="email" name="email" required class="retro-input">
                </div>
                
                <div class="form-group">
                    <label for="message" class="pixel-text">MESSAGE:</label>
                    <textarea id="message" name="message" required class="retro-textarea"></textarea>
                </div>
                
                <button type="submit" class="retro-button">SEND_MESSAGE</button>
            </form>
        </div>
        
        <div class="contact-info">
            <div class="retro-terminal">
                <div class="terminal-header">
                    <span class="terminal-button red"></span>
                    <span class="terminal-button yellow"></span>
                    <span class="terminal-button green"></span>
                    <span class="terminal-title">contact_info.exe</span>
                </div>
                <div class="terminal-body">
                    <p>> EMAIL: fauzanadityaputra323@gmail.com</p>
                    <p>> PHONE: +62 81215991423</p>
                    <p>> LOCATION: Klaten</p>
                    <p>> AVAILABILITY: Mon-Fri, 9AM-5PM</p>
                    <p>> SOCIAL:</p>
                    <div class="social-links">
                        <a href="#" class="pixel-text">[GITHUB]</a>
                        <a href="#" class="pixel-text">[LINKEDIN]</a>
                        <a href="#" class="pixel-text">[TWITTER]</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>