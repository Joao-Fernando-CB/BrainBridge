<?php
    if (isset($arr)){
?>
    <!DOCTYPE html>
    <html lang="pt-br" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark': darkMode }" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Venda de Cursos de NR - Normas Regulamentadoras</title>
        <link href="<?php echo FILES_PATH; ?>css/dist/build.css" rel="stylesheet" type="text/css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Alpine.js for Dark Mode Toggle -->
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>
    </head>
    <body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" 
        x-init="$watch('darkMode', val => {
            console.log('Dark mode changed to:', val);
            localStorage.setItem('darkMode', val);
            if (val === true) {
                document.documentElement.classList.add('dark');
                console.log('Added dark class');
            } else {
                document.documentElement.classList.remove('dark');
                console.log('Removed dark class');
            }
        });"
        class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-200">

        
        <!-- Announcement Bar -->
        <div class="bg-blue-600 dark:bg-blue-800 text-white py-2 transition-colors duration-300">
            <div class="container mx-auto px-4 text-center text-sm font-medium">
                Promoção! 20% de desconto em todos os cursos até 15/03 🎉 Use o cupom: <span class="font-bold">NR20OFF</span>
            </div>
        </div>

        <!-- Header with enhanced dark mode -->
        <header class="bg-white dark:bg-gray-800 shadow-md dark:shadow-gray-900/30 py-4 sticky top-0 z-50 transition-colors duration-300">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <!-- Logo Section with dark mode adjustments -->
                    <div class="flex items-center space-x-2">
                        <div class="bg-blue-600 dark:bg-blue-500 text-white p-2 rounded-lg transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white transition-colors duration-300">
                            <a href="<?php echo INCLUDE_PATH; ?>" class="flex items-center">
                                NR<span class="text-blue-600 dark:text-blue-400 transition-colors duration-300">Cursos</span>
                            </a>
                        </h1>
                    </div>
                    
                    <!-- Main Navigation with dark mode enhancements -->
                    <nav class="hidden md:block">
                        <ul class="flex space-x-8">
                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>/cursos" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Cursos</a>
                            </li>
                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>/sobre" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Sobre</a>
                            </li>
                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>/contato" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Contato</a>
                            </li>
                        </ul>
                    </nav>
                    
                    <!-- Right side controls with enhanced dark mode toggle -->
                    <div class="flex items-center space-x-4">
                        <!-- Dark Mode Toggle with enhanced styles -->
                        <button 
                            @click="darkMode = !darkMode" 
                            class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600 dark:focus:ring-blue-400 transition-all duration-300"
                            aria-label="Toggle dark mode">
                            <!-- Sun icon for light mode with animation -->
                            <svg x-show="!darkMode" x-transition:enter="transition ease-out duration-300" 
                                x-transition:enter-start="opacity-0 transform rotate-90" 
                                x-transition:enter-end="opacity-100 transform rotate-0"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <!-- Moon icon for dark mode with animation -->
                            <svg x-show="darkMode" x-transition:enter="transition ease-out duration-300" 
                                x-transition:enter-start="opacity-0 transform -rotate-90" 
                                x-transition:enter-end="opacity-100 transform rotate-0"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </button>
                        
                        <!-- Login Button with dark mode enhancements -->
                        <a href="<?php echo INCLUDE_PATH; ?>/login" class="hidden md:block bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-medium px-4 py-2 rounded-lg transition-colors duration-300">
                            Entrar
                        </a>
                        
                        <!-- Mobile Menu Button with dark mode styles -->
                        <button id="mobile-menu-button" class="md:hidden text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile Menu with dark mode enhancements -->
                <div id="mobile-menu" class="md:hidden hidden mt-4 border-t border-gray-200 dark:border-gray-700 pt-4 transition-colors duration-300">
                    <ul class="flex flex-col space-y-4">
                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>/cursos" class="block text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Cursos</a>
                        </li>
                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>/sobre" class="block text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Sobre</a>
                        </li>
                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>/contato" class="block text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Contato</a>
                        </li>
                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>/login" class="block text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 font-medium transition-colors duration-300">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Script for mobile menu toggle -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            });
        </script>
<?php } else { ?>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center px-4">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-8 max-w-md w-full text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-100 text-red-600 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-red-600 mb-4">Acesso Negado</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">As páginas não podem ser acessadas dessa forma. Por favor, utilize a navegação normal do site.</p>
            <a href="/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors duration-200">Voltar para Home</a>
        </div>
    </div>
<?php } ?>