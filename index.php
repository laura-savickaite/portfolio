<!-- Code your resume so it can be crawled by search engines.
Offer a button to download your resume in PDF so the hiring manager can add it to your file.
Keep branding consistent between the website and document versions: Use similar fonts, colors, and images so you're easy to recognize.
Be creative and authentic to yourself. Think about the colors, images, and media you want to be a part of your story that you couldn't include in a document resume. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="landing_css.css" rel="stylesheet">
    <script type="text/javascript" src="landing_js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet">
    <title>Laura Savickaite || Landing Page</title>
</head>
<body>

    <header>

        <div class="border">
            <div class="box"></div>
            <p id="word1">Web Designer</p>
            <a href="#aboutme"><p id="word2">About me</p></a>
            <a href="#projects"><p id="word3">Projects</p></a>
            <a href="#contact"><p id="word4">Contact me</p></a>
        </div>

    </header>

    <main>

        <article id="aboutme"> 
            <h1>About me</h1>

            <img class="img2" src="images/téléchargement.png" alt="image" width="400px">              
            
            <div class="icons">
                <img src="images/dot.svg" alt="dot icon" width="50px">
                <img src="images/dot.svg" alt="dot icon" width="50px">
                <img src="images/star.svg" alt="star icon" width="50px">                
            </div>


            <div id="bio">
                <p>Hello, I'm Laura a junior web developper living in Marseille and looking for an internship!</p>

                <div class="techno">
                    <h3>Technologies</h3>
                    <p>Javascript - CSS - HTML - PHP - Git - Figma - Bootstrap - MySqli - Wordpress</p>                    
                </div> 
                </div> 
                <div class="links">
                    <a href="cv/Laura Savickaite.pdf" download="Laura Savickaite CV .pdf"><p>Check my cv!</p> <img src="images/left.svg" width="20px"></a>
                    <a href="#contact"><p>Contact me!</p> <img src="images/left.svg" width="20px"></a>    
                    <a href="https://github.com/laura-savickaite"><p>Check my Github!</p> <img src="images/left.svg" width="20px"></a>    
                </div>
            
                               
        </article>   

        <article id="projects"> 

            <h1>Projects</h1>

            <ul> 
                <a href="" class="hover">
                    <li>   
                        <span>BOUTIQUE EN LIGNE</span>      
                    </li>
                    <span class="hiddenimg"><img src="images/landings/boutique-landing.png" width="450" /></span> 
                </a>    

                <a href="/projets/memory" class="hover">
                    <li>
                        <span>MEMORY GAME</span>    
                    </li>
                    <span class="hiddenimg"><img src="images/landings/memory-landing.png" width="450" /></span> 
                </a> 
                            
                <a href="/projets/reservationsalles" class="hover">
                    <li>
                        <span>RESERVATION DE SALLE</span>
                    </li>                        
                    <span class="hiddenimg"><img src="images/landings/reservation-landing.png" width="450" /></span> 
               </a> 

                <a href="" class="hover">
                    <li>
                        <span>PROJET HACKATHON</span>        
                    </li> 
                    <span class="hiddenimg"><img src="images/landings/hackathon-landing.png" width="450" /></span>
                </a> 
                            
                <a href="/projets/voyages" class="hover">
                    <li>
                        <span>BLOG VOYAGES</span>   
                    </li>
                    <span class="hiddenimg"><img src="images/landings/voyage-landing.png" width="450" /></span>
                </a> 
                            
                <a href="/projets/botanique" class="hover">
                    <li>
                        <span>BLOG BOTANIQUE</span>  
                    </li>
                    <span class="hiddenimg"><img src="images/landings/botanique-landing.png" width="450" /></span>
                </a>                
            </ul>

            <section class="gradient"></section>
        </article>

        <article id="contact">
            <h3>Don't hesitate to send me a message for a project, or even better if you have an internship for me. I'll be happy to interact with you. </h3>

            <div class="icons-contact">
                <a href="mailto: laura.savickaite@laplateforme.io"><img src="images/mail.svg" width="60px"></a>
                <a href="https://www.linkedin.com/in/laura-savickaite-0384b4227/"><img src="images/linkedin.svg" width="53px"></a>                
            </div>
        </article>

    </main>    

    <footer>

    </footer>

</body>
</html>