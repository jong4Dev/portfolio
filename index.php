<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<section class="retro-hero">
    <div class="hero-text">
        <h1 class="pixel-text">> HELLO_WORLD()</h1>
        <h2 class="typewriter">I'M <span class="highlight">FAUZAN ADITYA PUTRA</span></h2>
        <p class="retro-subtitle">BACKEND DEVELOPER</p>
        <div class="retro-buttons">
            <a href="projects.php" class="retro-button">VIEW MY WORK</a>
            <a href="contact.php" class="retro-button alt">CONTACT ME</a>
        </div>
    </div>
    <div class="hero-image">
        <div class="pixel-container">
            <img src="assets/images/avatar.png" alt="Retro Avatar" class="pixel-image">
        </div>
    </div>
</section>

<section class="retro-skills">
    <h2 class="section-title pixel-text">> MY_SKILLS</h2>
    <div class="skill-bars">
        <?php
        $skills = [
            ['PHP', 90, 'ff00ff'],
            ['HTML', 95, '00ff00'],
            ['CSS', 85, 'ffff00'],
            ['JavaScript', 80, '00ffff'],
            ['MySQL', 75, 'ff6600']
        ];
        
        foreach ($skills as $skill) {
            echo '<div class="skill-bar">';
            echo '<div class="skill-name pixel-text">' . $skill[0] . '</div>';
            echo '<div class="skill-container">';
            echo '<div class="skill-progress" style="width: ' . $skill[1] . '%; background-color: #' . $skill[2] . ';"></div>';
            echo '<span class="skill-percent">' . $skill[1] . '%</span>';
            echo '</div></div>';
        }
        ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>