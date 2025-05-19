<?php 
$pageTitle = "Projects";
include 'includes/header.php'; 

// Simulate database fetch
$projects = [
    [
        'title' => 'Retro Game Collection',
        'description' => 'A collection of browser-based retro games built with JavaScript',
        'tags' => ['JavaScript', 'HTML5', 'CSS3'],
        'year' => '2023',
        'image' => 'project1.jpg'
    ],
    [
        'title' => 'Synthwave Dashboard',
        'description' => 'A customizable dashboard with 80s aesthetics and real-time data',
        'tags' => ['PHP', 'MySQL', 'AJAX'],
        'year' => '2022',
        'image' => 'project2.jpg'
    ],
    [
        'title' => 'Vintage OS Simulator',
        'description' => 'Web-based simulation of a 1980s operating system',
        'tags' => ['PHP', 'JavaScript', 'WebGL'],
        'year' => '2021',
        'image' => 'project3.jpg'
    ]
];
?>

<section class="retro-projects">
    <h1 class="pixel-text">> PROJECTS</h1>
    
    <div class="project-filters">
        <button class="retro-button small active" data-filter="all">ALL</button>
        <button class="retro-button small" data-filter="php">PHP</button>
        <button class="retro-button small" data-filter="js">JAVASCRIPT</button>
        <button class="retro-button small" data-filter="css">CSS</button>
    </div>
    
    <div class="project-grid">
        <?php foreach ($projects as $project): ?>
        <div class="project-card" data-tags="<?php echo strtolower(implode(' ', $project['tags'])); ?>">
            <div class="project-image">
                <img src="assets/images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                <div class="project-year pixel-text"><?php echo $project['year']; ?></div>
            </div>
            <div class="project-info">
                <h3 class="pixel-text"><?php echo $project['title']; ?></h3>
                <p><?php echo $project['description']; ?></p>
                <div class="project-tags">
                    <?php foreach ($project['tags'] as $tag): ?>
                    <span class="pixel-text">#<?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
                <a href="#" class="retro-button small">VIEW PROJECT</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>