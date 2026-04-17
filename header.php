<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <style>

        body { font-family: 'Inter', sans-serif; }
        
        .reveal {
            position: relative;
            transform: translateY(50px);
            opacity: 0;
            transition: 1s all ease;
        }
        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }
        

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(-5%); animation-timing-function: cubic-bezier(0.8, 0, 1, 1); }
            50% { transform: translateY(0); animation-timing-function: cubic-bezier(0, 0, 0.2, 1); }
        }
        .animate-bounce-slow {
            animation: bounce-slow 3s infinite;
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans text-gray-700 antialiased bg-gray-50'); ?>>

    <nav class="fixed w-full z-50 top-0 start-0 bg-white/90 backdrop-blur-md transition-all duration-300 border-b border-transparent" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 relative">
            
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 rtl:space-x-reverse group">
                <div class="flex flex-col">
                    <span class="self-center text-xl font-bold whitespace-nowrap text-brand-900 leading-none">ME Imprensa</span>
                    <span class="text-xs text-brand-500 uppercase tracking-widest">& Assessoria</span>
                </div>
            </a>
            
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false" onclick="toggleMenu()">
                <span class="sr-only">Abrir menu principal</span>
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:absolute md:left-1/2 md:-translate-x-1/2" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent text-sm uppercase tracking-wide shadow-lg md:shadow-none">
                    <li><a href="#inicio" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">Início</a></li>
                    <li><a href="#quem-somos" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">Quem Somos</a></li>
                    <li><a href="#o-que-fazemos" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">O Que Fazemos</a></li>
                    <li><a href="#como-atuamos" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">Como Atuamos</a></li>
                    <li><a href="#portfolio" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">Portfólio</a></li>
                    <li><a href="#clientes" class="block py-2 px-3 text-gray-900 rounded hover:text-brand-accent md:p-0 transition-colors">Clientes</a></li>
                    <li><a href="#contato" class="block py-2 px-3 text-white bg-brand-900 rounded md:bg-transparent md:text-brand-900 md:border md:border-brand-900 md:px-5 md:py-2 md:hover:bg-brand-900 md:hover:text-white transition-all">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>