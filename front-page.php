<?php get_header(); ?>

<main>
    <section id="inicio" class="relative min-h-screen flex items-center bg-white overflow-hidden pt-20">
        <div class="absolute top-0 right-0 w-2/3 h-full bg-brand-50 skew-x-12 translate-x-32 z-0 hidden lg:block"></div>
        
        <div class="max-w-screen-xl mx-auto px-4 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 reveal active">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-brand-900">
                        Comunicação estratégica para marcas que precisam ser <span class="relative inline-block text-brand-accent">
                            ouvidas
                            <svg class="absolute w-full h-3 -bottom-1 left-0 text-brand-accent/20" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="none" />
                            </svg>
                        </span>.
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 max-w-lg font-light leading-relaxed">
                        Transformamos mensagens em narrativas. Narrativas em reputação. Reputação em valor.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#o-que-fazemos" class="px-8 py-4 bg-brand-900 text-white font-semibold rounded-lg hover:bg-brand-700 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 text-center">
                            Nossas Soluções
                        </a>
                        <a href="#contato" class="px-8 py-4 bg-white border border-gray-200 text-brand-900 font-semibold rounded-lg hover:border-brand-900 hover:bg-gray-50 transition-all duration-300 text-center flex items-center justify-center gap-2">
                            Falar com Consultor <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 reveal delay-200 relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cafe.jpg" alt="ME Imprensa" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-brand-900/10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="quem-somos" class="py-24 bg-brand-900 relative">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-10 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-accent rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 right-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-screen-xl mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16">
                <div class="lg:w-1/3 reveal">
                    <div class="sticky top-28 bg-white p-8 rounded-2xl shadow-xl">
                        <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-2">Quem Somos</h2>
                        <h3 class="text-4xl font-bold text-brand-900 mb-6 leading-tight">Expertise, Ética e Visão Estratégica.</h3>
                        <p class="text-gray-500 mb-8">
                            Mais do que uma agência, somos parceiros de negócio focados na sua reputação.
                        </p>
                        <a href="#contato" class="text-brand-900 font-semibold hover:text-brand-accent transition-colors border-b border-brand-900 pb-1">
                            Conheça nossa equipe
                        </a>
                    </div>
                </div>
                
                <div class="lg:w-2/3 space-y-8 reveal delay-100">
                    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl">
                        <div class="prose prose-lg text-gray-600">
                            <p class="text-xl font-light text-brand-900 mb-6">
                                A <strong>ME Imprensa & Assessoria</strong> é uma consultoria especializada em imprensa, PR e gestão de crise. Atuamos de forma moderna e integrada para posicionar empresas, líderes e projetos com clareza, propósito e relevância.
                            </p>
                            <p>
                                Unimos experiência jornalística, visão corporativa e domínio das dinâmicas do mercado para entregar soluções sob medida — sempre com ética, agilidade e foco em resultados.
                            </p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="p-8 bg-white rounded-2xl shadow-xl border border-transparent hover:border-brand-accent transition-all duration-300">
                            <i class="fa-solid fa-bullseye text-3xl text-brand-accent mb-4"></i>
                            <h4 class="font-bold text-brand-900 mb-2">Foco em Resultados</h4>
                            <p class="text-sm text-gray-600">Estratégias mensuráveis e alinhadas aos objetivos de negócio.</p>
                        </div>
                        <div class="p-8 bg-white rounded-2xl shadow-xl border border-transparent hover:border-brand-accent transition-all duration-300">
                            <i class="fa-solid fa-handshake text-3xl text-brand-accent mb-4"></i>
                            <h4 class="font-bold text-brand-900 mb-2">Parceria Próxima</h4>
                            <p class="text-sm text-gray-600">Atendimento personalizado, ágil e transparente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="o-que-fazemos" class="py-24 bg-brand-50">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-2">Nossas Soluções</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-brand-900 mb-4">O Que Fazemos</h3>
            </div>
            
            <div class="space-y-6">
                <div class="group bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 reveal border border-transparent hover:border-brand-200">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-12">
                        <div class="md:w-1/3">
                            <h4 class="text-2xl font-bold text-brand-900 mb-2 group-hover:text-brand-accent transition-colors">Assessoria de Imprensa e PR</h4>
                            <div class="h-1 w-12 bg-brand-100 mt-4 group-hover:w-full group-hover:bg-brand-accent transition-all duration-500 rounded-full"></div>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">Construímos presença qualificada na mídia, conectando histórias a jornalistas e veículos de forma estratégica.</p>
                            <div class="bg-gray-50 p-5 rounded-xl border-l-4 border-brand-accent">
                                <p class="text-sm text-gray-600"><strong class="text-brand-900 block mb-1 text-xs uppercase tracking-wider font-bold">Entregas</strong> produção de pautas, releases, artigos, relacionamento ativo, acompanhamento de entrevistas e análise de resultados.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 reveal border border-transparent hover:border-brand-200">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-12">
                        <div class="md:w-1/3">
                            <h4 class="text-2xl font-bold text-brand-900 mb-2 group-hover:text-brand-accent transition-colors">Gestão de Crise e Reputação</h4>
                            <div class="h-1 w-12 bg-brand-100 mt-4 group-hover:w-full group-hover:bg-red-500 transition-all duration-500 rounded-full"></div>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">Apoiamos organizações em momentos sensíveis, prevenindo riscos e protegendo a imagem institucional.</p>
                            <div class="bg-gray-50 p-5 rounded-xl border-l-4 border-red-500">
                                <p class="text-sm text-gray-600"><strong class="text-brand-900 block mb-1 text-xs uppercase tracking-wider font-bold">Atuação</strong> diagnóstico, protocolos, mensagens oficiais, monitoramento de mídia e reconstrução pós-crise.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 reveal border border-transparent hover:border-brand-200">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-12">
                        <div class="md:w-1/3">
                            <h4 class="text-2xl font-bold text-brand-900 mb-2 group-hover:text-brand-accent transition-colors">Conteúdo Estratégico</h4>
                            <div class="h-1 w-12 bg-brand-100 mt-4 group-hover:w-full group-hover:bg-purple-500 transition-all duration-500 rounded-full"></div>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">Criamos narrativas que refletem a essência de cada marca.</p>
                            <div class="bg-gray-50 p-5 rounded-xl border-l-4 border-purple-500">
                                <p class="text-sm text-gray-600"><strong class="text-brand-900 block mb-1 text-xs uppercase tracking-wider font-bold">Produção</strong> textos institucionais, artigos, releases, discursos, roteiros e conteúdo digital.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 reveal border border-transparent hover:border-brand-200">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-12">
                        <div class="md:w-1/3">
                            <h4 class="text-2xl font-bold text-brand-900 mb-2 group-hover:text-brand-accent transition-colors">Media Training</h4>
                            <div class="h-1 w-12 bg-brand-100 mt-4 group-hover:w-full group-hover:bg-orange-500 transition-all duration-500 rounded-full"></div>
                        </div>
                        <div class="md:w-2/3">
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">Treinamentos personalizados para líderes que precisam comunicar com clareza, segurança e impacto.</p>
                            <div class="bg-gray-50 p-5 rounded-xl border-l-4 border-orange-500">
                                <p class="text-sm text-gray-600"><strong class="text-brand-900 block mb-1 text-xs uppercase tracking-wider font-bold">Foco</strong> postura, presença, mensagens-chave e simulações de entrevistas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 reveal border border-transparent hover:border-brand-200">
                    <div class="flex flex-col md:flex-row gap-6 md:gap-12 items-center">
                        <div class="md:w-1/3 w-full">
                            <h4 class="text-2xl font-bold text-brand-900 mb-2 group-hover:text-brand-accent transition-colors">Comunicação Corporativa</h4>
                            <div class="h-1 w-12 bg-brand-100 mt-4 group-hover:w-full group-hover:bg-emerald-500 transition-all duration-500 rounded-full"></div>
                        </div>
                        <div class="md:w-2/3 w-full">
                            <p class="text-lg text-gray-700 leading-relaxed">Apoio estratégico para alinhar mensagens internas e externas, fortalecer posicionamento e qualificar relacionamentos institucionais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="como-atuamos" class="py-24 bg-brand-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-accent opacity-10 rounded-full blur-[100px] -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent opacity-5 rounded-full blur-[100px] -ml-32 -mb-32"></div>

        <div class="max-w-screen-xl mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-1/3 reveal">
                    <div class="sticky top-28">
                        <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-2">Nossa Metodologia</h2>
                        <h3 class="text-4xl font-bold text-white mb-6 leading-tight">Como Atuamos</h3>
                        <p class="text-gray-400 mb-8 text-lg">
                            Um processo estruturado para garantir que sua marca tenha voz e relevância no mercado.
                        </p>
                    </div>
                </div>

                <div class="lg:w-2/3 w-full reveal delay-100">
                    <div class="flex flex-col">
                        <div class="group flex gap-6 p-8 border-b border-white/10 hover:bg-white/5 transition-all duration-300 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full border border-brand-accent/30 text-brand-accent flex items-center justify-center font-bold text-xl group-hover:bg-brand-accent group-hover:text-white transition-all duration-300">1</div>
                            </div>
                            <div class="flex items-center">
                                <p class="text-xl md:text-2xl font-light text-gray-200 group-hover:text-white transition-colors">Atendimento próximo e personalizado</p>
                            </div>
                        </div>
                        <div class="group flex gap-6 p-8 border-b border-white/10 hover:bg-white/5 transition-all duration-300 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full border border-brand-accent/30 text-brand-accent flex items-center justify-center font-bold text-xl group-hover:bg-brand-accent group-hover:text-white transition-all duration-300">2</div>
                            </div>
                            <div class="flex items-center">
                                <p class="text-xl md:text-2xl font-light text-gray-200 group-hover:text-white transition-colors">Estratégia baseada em análise de contexto</p>
                            </div>
                        </div>
                        <div class="group flex gap-6 p-8 border-b border-white/10 hover:bg-white/5 transition-all duration-300 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full border border-brand-accent/30 text-brand-accent flex items-center justify-center font-bold text-xl group-hover:bg-brand-accent group-hover:text-white transition-all duration-300">3</div>
                            </div>
                            <div class="flex items-center">
                                <p class="text-xl md:text-2xl font-light text-gray-200 group-hover:text-white transition-colors">Narrativas consistentes e alinhadas ao propósito</p>
                            </div>
                        </div>
                        <div class="group flex gap-6 p-8 border-b border-white/10 hover:bg-white/5 transition-all duration-300 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full border border-brand-accent/30 text-brand-accent flex items-center justify-center font-bold text-xl group-hover:bg-brand-accent group-hover:text-white transition-all duration-300">4</div>
                            </div>
                            <div class="flex items-center">
                                <p class="text-xl md:text-2xl font-light text-gray-200 group-hover:text-white transition-colors">Relacionamento ativo com imprensa e stakeholders</p>
                            </div>
                        </div>
                        <div class="group flex gap-6 p-8 border-b border-transparent hover:bg-white/5 transition-all duration-300 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full border border-brand-accent/30 text-brand-accent flex items-center justify-center font-bold text-xl group-hover:bg-brand-accent group-hover:text-white transition-all duration-300">5</div>
                            </div>
                            <div class="flex items-center">
                                <p class="text-xl md:text-2xl font-light text-gray-200 group-hover:text-white transition-colors">Agilidade, precisão e transparência em cada entrega</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="portfolio" class="py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
                <div>
                    <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-2">Cases</h2>
                    <h3 class="text-3xl font-bold text-gray-900">Destaques Recentes</h3>
                </div>
                <a href="#contato" class="hidden md:inline-flex items-center text-brand-900 font-semibold hover:text-brand-accent transition-colors mt-4 md:mt-0">
                    Quero ser um case <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="flex flex-col gap-16">
                
                <?php

                $args_cases = array(
                    'post_type'      => 'cases',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );
                $query_cases = new WP_Query( $args_cases );


                if ( $query_cases->have_posts() ) :
                    while ( $query_cases->have_posts() ) : $query_cases->the_post();
                ?>

                <div class="flex flex-col md:flex-row gap-8 items-stretch reveal delay-100">
                    <div class="w-full md:w-1/3 flex-none">
                        <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer h-full min-h-[320px]">
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                            <?php else: ?>
                                <div class="w-full h-full bg-brand-900"></div> <?php endif; ?>
                            
                            <div class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors duration-300"></div>
                            <div class="absolute bottom-0 left-0 p-8 w-full">
                                <span class="text-brand-accent text-xs font-bold tracking-wider uppercase mb-2 block">Case em Destaque</span>
                                
                                <h4 class="text-white text-xl font-bold mb-2"><?php the_title(); ?></h4>
                                
                                <div class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 relative">
                        <div class="bg-brand-75 p-8 md:p-10 rounded-2xl h-full flex flex-col justify-center relative overflow-hidden border border-brand-200 shadow-sm">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-brand-accent/15 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none"></div>

                            <div class="relative z-10">
                                <div class="text-brand-900/80 leading-relaxed text-lg">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-gray-500">Nenhum case cadastrado no momento.</p>';
                endif;
                ?>

            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="clientes" class="py-20 bg-gray-50">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="text-center mb-12 reveal">
                <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-2">Confiança</h2>
                <h3 class="text-3xl font-bold text-brand-900">Clientes</h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 items-center justify-items-center reveal delay-100">
                
                <?php

                $args_clientes = array(
                    'post_type'      => 'clientes',
                    'posts_per_page' => -1,
                    'order'          => 'ASC'
                );
                $query_clientes = new WP_Query( $args_clientes );


                if ( $query_clientes->have_posts() ) :
                    while ( $query_clientes->have_posts() ) : $query_clientes->the_post();
                        

                        if ( has_post_thumbnail() ) :
                ?>

                <div class="w-full h-32 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center p-6 group hover:shadow-md transition-all duration-300">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" class="max-w-full max-h-full object-contain">
                </div>

                <?php
                        endif;
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-gray-500 col-span-full">Nenhum cliente cadastrado no momento.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <div class="w-full h-1 bg-gradient-to-r from-transparent via-brand-accent/30 to-transparent"></div>

    <section id="contato" class="py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="bg-brand-900 rounded-3xl p-8 md:p-16 shadow-2xl reveal relative overflow-hidden text-center">
                
                <div class="absolute top-0 right-0 w-96 h-96 bg-brand-accent/20 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl -ml-10 -mb-10 pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-brand-accent font-bold tracking-widest uppercase text-sm mb-4">Contato</h2>
                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">Vamos construir <br>sua reputação?</h3>
                    <p class="text-gray-300 mb-10 text-lg font-light leading-relaxed">
                        Entre em contato para agendarmos uma reunião de diagnóstico. Estamos prontos para ouvir seus desafios e propor soluções estratégicas.
                    </p>

                    <div class="flex flex-col md:flex-row justify-center gap-6">
                        <a href="https://wa.me/5551999579829" class="flex items-center justify-center gap-4 p-5 bg-brand-accent text-white rounded-2xl hover:bg-white hover:text-brand-900 hover:-translate-y-1 transition-all duration-300 group shadow-lg min-w-[280px]">
                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:bg-brand-900/10 group-hover:text-brand-900 transition-colors">
                                <i class="fa-brands fa-whatsapp text-2xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs uppercase tracking-wider opacity-90 mb-0.5">Falar Agora</p>
                                <p class="font-bold text-xl">(51) 99957-9829</p>
                            </div>
                        </a>
                        
                        <div class="flex items-center justify-center gap-4 p-5 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-sm min-w-[280px]">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white">
                                <i class="fa-solid fa-location-dot text-xl"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-gray-400 uppercase tracking-wider mb-0.5">Localização</p>
                                <p class="font-bold text-xl text-white">Porto Alegre, RS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>