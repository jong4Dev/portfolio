document.addEventListener('DOMContentLoaded', function() {
    // Terminal typing effect
    const terminalText = "> Thank you for visiting my retro portfolio!";
    const typingElement = document.getElementById('typing-effect');
    
    if (typingElement) {
        let i = 0;
        const typingInterval = setInterval(() => {
            if (i < terminalText.length) {
                typingElement.textContent += terminalText.charAt(i);
                i++;
            } else {
                clearInterval(typingInterval);
            }
        }, 50);
    }
    
    // Project filtering
    const filterButtons = document.querySelectorAll('.project-filters button');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const filter = button.getAttribute('data-filter');
            
            // Filter projects
            projectCards.forEach(card => {
                const tags = card.getAttribute('data-tags');
                
                if (filter === 'all' || tags.includes(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Animate skill bars on scroll
    const skillBars = document.querySelectorAll('.skill-progress');
    
    function animateSkillBars() {
        skillBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        });
    }
    
    // Check if skills section is in view
    function checkScroll() {
        const skillsSection = document.querySelector('.retro-skills');
        if (skillsSection) {
            const sectionTop = skillsSection.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (sectionTop < windowHeight - 100) {
                animateSkillBars();
                window.removeEventListener('scroll', checkScroll);
            }
        }
    }
    
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Run once on load in case section is already in view
    
    // Glitch effect on hover for retro buttons
    const retroButtons = document.querySelectorAll('.retro-button');
    
    retroButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.animation = 'glitch 0.3s linear';
        });
        
        button.addEventListener('mouseleave', () => {
            button.style.animation = '';
        });
    });
});

// Add glitch animation to stylesheet
const style = document.createElement('style');
style.textContent = `
    @keyframes glitch {
        0% { transform: translate(0); }
        20% { transform: translate(-2px, 2px); }
        40% { transform: translate(-2px, -2px); }
        60% { transform: translate(2px, 2px); }
        80% { transform: translate(2px, -2px); }
        100% { transform: translate(0); }
    }
`;
document.head.appendChild(style);

// Mobile menu toggle
const menuToggle = document.querySelector('.mobile-menu-toggle');
const nav = document.querySelector('.retro-nav');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
    menuToggle.classList.toggle('active');
});