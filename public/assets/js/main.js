(function () {
    'use strict';

    // Theme Toggle Function
    window.toggleTheme = function() {
        const body = document.body;
        const currentTheme = body.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        body.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        
        // Update theme icon
        const themeIcon = document.querySelector('.theme-icon');
        if (themeIcon) {
            themeIcon.textContent = newTheme === 'dark' ? '🌙' : '☀️';
        }
    };

    // Load saved theme on page load
    window.addEventListener('DOMContentLoaded', function() {
        const savedTheme = localStorage.getItem('theme') || 'dark';
        document.body.setAttribute('data-theme', savedTheme);
        
        const themeIcon = document.querySelector('.theme-icon');
        if (themeIcon) {
            themeIcon.textContent = savedTheme === 'dark' ? '🌙' : '☀️';
        }
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.site-header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    });

    // Mobile nav toggle
    var navToggle = document.querySelector('.nav-toggle');
    var mainNav = document.querySelector('.main-nav');
    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            mainNav.classList.toggle('open');
        });
    }

    // Modal helpers
    window.openModal = function (id) {
        var el = document.getElementById(id);
        if (el) {
            el.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeModal = function (id) {
        var el = document.getElementById(id);
        if (el) {
            el.classList.remove('open');
            document.body.style.overflow = '';
        }
    };

    // Close modal on overlay click
    document.querySelectorAll('.modal-overlay').forEach(function (overlay) {
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                overlay.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-overlay.open').forEach(function(modal) {
                modal.classList.remove('open');
                document.body.style.overflow = '';
            });
        }
    });

    // File upload display name
    var fileInputs = document.querySelectorAll('input[type="file"][data-display]');
    fileInputs.forEach(function (input) {
        var displayEl = document.querySelector(input.getAttribute('data-display'));
        if (!displayEl) return;
        input.addEventListener('change', function () {
            var name = this.files && this.files[0] ? this.files[0].name : 'No file chosen';
            displayEl.textContent = name;
        });
    });

    // Drag and drop for file upload
    var dropZones = document.querySelectorAll('.file-upload-wrap');
    dropZones.forEach(function (zone) {
        var input = zone.querySelector('input[type="file"]');
        if (!input) return;
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(function (ev) {
            zone.addEventListener(ev, function (e) {
                e.preventDefault();
                e.stopPropagation();
            });
        });
        ['dragenter', 'dragover'].forEach(function (ev) {
            zone.addEventListener(ev, function () {
                zone.classList.add('dragover');
            });
        });
        ['dragleave', 'drop'].forEach(function (ev) {
            zone.addEventListener(ev, function () {
                zone.classList.remove('dragover');
            });
        });
        zone.addEventListener('drop', function (e) {
            var files = e.dataTransfer.files;
            if (files.length) {
                input.files = files;
                var displayEl = document.querySelector(input.getAttribute('data-display'));
                if (displayEl) displayEl.textContent = files[0].name;
            }
        });
    });
})();
