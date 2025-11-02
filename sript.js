// Smooth scrolling for navigation links
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            if (hamburger) {
                hamburger.addEventListener('click', function() {
                    hamburger.classList.toggle('active');
                    navMenu.classList.toggle('active');
                });
            }
            
            // Close mobile menu when clicking on a link
            document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }));
            
            // Navbar background on scroll
            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                    navbar.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                    navbar.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                }
            });
            
            // Add animation to elements when they come into view
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);
            
            // Observe all section elements
            document.querySelectorAll('.section').forEach(section => {
                observer.observe(section);
            });
        });