<?php 
$pageTitle = "About";
include 'includes/header.php'; 
?>

<section class="retro-about">
    <h1 class="pixel-text">> ABOUT_ME</h1>
    
    <div class="about-grid">
        <div class="about-text">
            <p class="retro-paragraph">
                Greetings, human! I'm a <span class="highlight">retro-futuristic web developer</span> 
                with a passion for creating digital experiences that blend nostalgia with modern functionality.
            </p>
            
            <div class="retro-terminal about-terminal">
                <div class="terminal-header">
                    <span class="terminal-button red"></span>
                    <span class="terminal-button yellow"></span>
                    <span class="terminal-button green"></span>
                    <span class="terminal-title">bio.txt</span>
                </div>
                <div class="terminal-body">
                    <p>> NAME: FAUZAN ADITYA PUTRA</p>
                    <p>> LOCATION: KLATEN</p>
                    <p>> AGE: 20</p>
                    <p>> SPECIALTIES: PHP, PYTHON</p>
                    <p>> HOBBIES: GAMING, CODING, EDITING</p>
                </div>
            </div>
        </div>
        
        <div class="about-image">
            <div class="floppy-disk">
                <div class="floppy-top"></div>
                <div class="floppy-label">
                    <span class="pixel-text">ABOUT.DAT</span>
                </div>
            </div>
        </div>
    </div>
    
    <h2 class="section-title pixel-text">> TIMELINE.EXE</h2>
    
    <div class="retro-timeline">
        <?php
       $timeline = [
    ['2004', 'Born with a keyboard in hand<br>(Mom says I cried in binary)'],
    ['2021', 'Discovered Python<br>"Hello World" worked first try<br>...this was a trap'],
    ['2022', 'Started college<br>Professors: "Java is relevant"<br>Me: *quietly misses Python*'],
    ['2023', 'Realized 90% of coding is<br>Googling error messages<br>The other 10% is crying'],
    ['2024', 'Current Status:<br>"Professional Stack Overflow copy-paster"'],
    ['2025', 'Future Goals:<br>- Graduate before AI takes all jobs<br>- Make a website that doesn\'t look like 2004 Myspace<br>(...one of these is unrealistic)'],
];
        
        foreach ($timeline as $event) {
            echo '<div class="timeline-event">';
            echo '<div class="event-year pixel-text">' . $event[0] . '</div>';
            echo '<div class="event-desc">' . $event[1] . '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>