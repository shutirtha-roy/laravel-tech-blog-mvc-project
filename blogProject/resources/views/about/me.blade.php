@extends('layouts.master')

    @section('navbar')

        <style>
            @import url('https://fonts.googleapis.com/css2?family=B612+Mono:ital@0;1&display=swap');

            /* Start of Changes throughout the whole page */

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'B612 Mono', monospace;
                
            }

            .card {
                opacity: 0.85;
            }
            /* END of Changes throughout the whole page */
            /********************************Heading Start********************************/


            .navbar .navbar-brand {
                font-size: 1.4rem;
                font-weight: 700;
            }

            body > header > nav > div > a:hover {
                transform: scale(1.2);
                transition: 0.6s;
            }


            #navbarSupportedContent > ul > li:nth-child(n) > a {
                color: white;
                font-size: 1.1rem;
                padding: 0 0.8rem;
            }

            #navbarSupportedContent > ul > li:nth-child(n) > a:hover {
                transform: scale(1.2);
                transition: 0.6s;
            }

            #portfolio-header .row {
                height: 95vh;
            }

            #portfolio-header img {
                height: 60vh;
                width: 30vw;
                opacity: 0.7;
            }

            #portfolio-header .img-col {
                text-align: center;
            }

            #portfolio-header .right {
                text-align: center;
            }

            #portfolio-header .column {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            /********************************Heading End********************************/




            /********************************About Start********************************/

            #about {
                height: 100vh;
            }

            #about .row {
                height: 95vh;
            }


            /* #about .img-col {
                text-align: center;
            } */

            #about .right {
                text-align: center;
            }

            #about .column {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            /********************************About End********************************/




            /********************************Portfolio Start********************************/

            #portfolio {
                height: 100vh;
            }

            #portfolio .column {
                text-align: center;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-content: center;
            }

            #portfolio .card:hover {
                transform: rotateY(30deg);
                transition: 0.45s;
            }

            /********************************Portfolio End********************************/





            /********************************Projects Start********************************/

            #projects {
                height: 100vh;
            }







            /********************************Projects End********************************/




























            @media screen and (max-width: 990px) {
                .navbar {
                    background-color: #000;
                    padding: 1rem;
                }

                #navbarSupportedContent > ul > li:nth-child(n) > a {
                    padding: 1rem 0rem;
                    text-align: center;
                }
            }
        </style>
        
        <header>
            <section id="portfolio-header">
                <div class="container-fluid mt-3 pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="column left col-lg-6 col-md-6 col-12">
                                <h1 class="display-2 fw-bold text-white"><span style="color:#eb0202 !important;">Hello</span> I'am Shutirtha Roy</h1>
                                <p class="text-white h5">Currently I have a goal to improve my problem solving skills along with
                                    cloud computing and projects related to full stack.
                                </p>
                            </div>
                            <div class="column right col-lg-6 col-md-6 col-12">
                                <div class="img-col">
                                    <img src="images\myimage\1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <main>
            <section id="about">
                <div class="container-fluid mt-3 pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="column left col-lg-6 col-md-6 col-12">
                                <h1 class="display-3 fw-bold text-white"><span style="color:#eb0202 !important;">About</span> Me</h1>
                                <p class="text-white h5">Currently I have am studying Computer Science and Engineering in BRAC University.
                                    Along with studies, I am currently learning JavaScript for FrontEnd and Laravel as backend. I am also 
                                    keen to learn Clound Computing technologies for more efficiency. 
                                </p>
                            </div>
                            <div class="column right col-lg-6 col-md-6 col-12">
                                <h3 class="fw-bold text-white mt-3"><span style="color:#eb0202 !important;">Currently</span>, these are the skills I have.</h3>
                                <h6 class="fw-bold text-white mt-3">HTML, CSS</h6>
                                <div class="progress">
                                    
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="fw-bold text-white mt-3">JavaScript</h6>
                                <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="fw-bold text-white mt-3">Laravel</h6>
                                <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="fw-bold text-white mt-3">Python</h6>
                                <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="portfolio">
                <div class="container-fluid mt-5 pt-5">
                    <div class="container">
                        <h1 class="display-3 fw-bold text-white text-center mb-5"><span style="color:#eb0202 !important;">Por</span>tfolio</h1>
                        
                        <h1 class="h2 fw-bold text-white text-center mb-5"><span style="color:#eb0202 !important;">My</span> Education</h1>
                        <div class="row">
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                    <h5 class="card-title text-white">Bachelor of Science in Computer Science and Engineering</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-white">2018-2022</h6>
                                    <h6 class="card-subtitle mt-3 text-white">CGPA 3.8(out of 4 scale)</h6>
                                    <h6 class="card-subtitle mt-3 text-white">BRAC University, Dhaka</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                    <h5 class="card-title text-white">A'Levels</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-white">2016-2017</h6>
                                    <h6 class="card-subtitle mt-3 text-white">2 A's (in both Physics and Mathematics)</h6>
                                    <h6 class="card-subtitle mt-3 text-white">Private Candidate (British COuntil)</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                    <h5 class="card-title text-white">O'Levels</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-white">Completed in 2016</h6>
                                    <h6 class="card-subtitle mt-3 text-white">4 A's and 1A* (out of 5 courses)</h6>
                                    <h6 class="card-subtitle mt-3 text-white">Private Candidate (British COuntil)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <h1 class="h2 fw-bold text-white text-center mt-5 mb-5"><span style="color:#eb0202 !important;">My</span> Work Experience</h1>
                        <div class="row">
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                    <h5 class="card-title text-white">Worked on Traffic Light System</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">2019</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title text-white">Completed Database design of Workers Related Project</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">2020</h6>

                                    </div>
                                </div>
                            </div>
                            <div class="column col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body bg-dark">
                                            <h5 class="card-title text-white">Completed System Design process of Digital Marketing System</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">2020</h6>
                                           <!--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="contact">
                <div class="container-fluid mt-5 pt-5">
                    <div class="container">
    
                    </div>
                </div>
            </section>
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js"></script>
        <script>bubbly({
            colorStart: "#111",
            colorStop: "#111",
        });
        </script>
@endsection