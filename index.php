<?php include 'includes/header.php'; ?>


  <!--==================== MAIN ====================-->
  <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
             <div class="home__container container grid">
                <div class="home__social">
                    <a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9mie-mbelepougou/" target="_blank" class="home__social-icon">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                    <a href="https://www.dribbble.com" target="_blank" class="home__social-icon">
                        <i class="uil uil-dribbble"></i>
                    </a>
                    <a href="https://www.github.com" target="_blank" class="home__social-icon">
                        <i class="uil uil-github-alt"></i>  
                    </a>
                </div>
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                            130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                            97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                            0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                            165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                            129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                            -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            
                            <image class="home__blob-img" x='12' y='18' xlink:href="assets/img/profillk-removebg-preview.png"/>
                        </g>
                    </svg>

                  <div class="home__data">
                    <h1 class="home__title">Salut, je suis Jérémie</h1>
                    <h3 class="home__subtitle">développeur frontal</h3>
                    <p class="home__description">Expérience dans la conception et le développement de sites Web, produisant un travail de qualité.</p>
                    <a href="#contact" class="button button--flex">
                        Contact Me <i class="uil uil-message button__icon"></i>
                    </a>

                </div>  
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Défiler vers le bas</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
             </div>   
            </section>

            <!--==================== ABOUT ====================-->
            <?php include 'about.php'; ?>

             <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Compétences</h2>
                <span class="section__subtitle">Mon niveau technique</span>
                
                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILLS 1====================-->
                       <div class="skills__content skills__open">
                        <div class="skills__header">
                          <i class="uil uil-brackets-curly skills__icon"></i>  
                          <div>
                            <h1 class="skills__titles">Développeur Frontal</h1>
                            <span class="skills__subtitle">Plus de 3ans</span>
                          </div>
                          <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JAVA</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">WordPress</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__wordpress"></span>
                                </div>
                            </div>

                        </div>
                       </div> 
                       <!--==================== SKILLS 2 ====================-->
                       <div class="skills__content skills__close">
                        <div class="skills__header">
                          <i class="uil uil-server-network skills__icon"></i>  
                          <div>
                            <h1 class="skills__title">Développeur back-end</h1>
                            <span class="skills__subtitle">Plus de 2 ans</span>
                          </div>
                          <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">LARAVEL</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Angular</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__angular"></span>
                                </div>
                            </div>

                            

                        </div>
                       </div> 
                    </div>

                    <div>
                      <!--==================== SKILLS 3 ====================-->
                      <div class="skills__content skills__close">
                        <div class="skills__header">
                          <i class="uil uil-swatchbook skills__icon"></i>  
                          <div>
                            <h1 class="skills__title">Designer</h1>
                            <span class="skills__subtitle">Plus de 2 ans</span>
                          </div>
                          <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Sketch</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Illustrator</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__illustrator"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Filmora</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__filmora"></span>
                                </div>
                            </div>

                        </div>
                       </div> 
                    </div>  
                    </div>
                </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">Mon parcours personnel</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Education
                        </div>
                    </div>

                    <div class="qualification__sections">
                        <!--==================== QUALIFICATION CONTENT 1====================-->
                        <div class="qualification__content qualification__active " data-content id="education">
                            <!--==================== QUALIFICATION 1 ====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Baccalauréat série D</h3>
                                    <span class="qualification__subtitle">Gabon - College Rene Descartes</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2018 - 2019
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>

                                </div>
                            </div>
                             <!--==================== QUALIFICATION 2 ====================-->
                             <div class="qualification__data">
                                <div></div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>

                                </div>
                                <div>
                                    <h3 class="qualification__title">Licence en Génie logiciel- Réseaux et systèmes </h3>
                                    <span class="qualification__subtitle">Sénégal - ISM </span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2019 - 2022
                                    </div>
                                </div>
                                
                             </div>

                             <!--==================== QUALIFICATION 3 ====================-->
                             <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">MASTER - Conception et Developpement de Solutions Digitales</h3>
                                    <span class="qualification__subtitle">Sénégal - ISM</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2022 - 2024
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>

                                </div>
                            </div>
                    </div>
                    
                </div>
            </section>

            <!--==================== SERVICES ====================-->
            <?php include 'services.php'; ?>

            <!--==================== PORTFOLIO ====================-->
            <?php include 'projects.php'; ?>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">Vous avez un nouveau projet</h2>
                            <p class="project__description">Contactez-moi dès maintenant et bénéficiez d'une remise de 30% sur votre nouveau projet.</p>
                            <a href="#contact" class="button button--flex button--white">
                                Contactez-moi
                                <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>
                        <img src="assets/img/project.jpeg" alt="" class="project__img">
                    </div>
                </div>
            </section>

           

            <!--==================== CONTACT ME ====================-->
            <?php include 'contact.php'; ?>
        </main>

<?php include 'includes/footer.php'; ?>
