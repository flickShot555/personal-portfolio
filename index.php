<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"-->
    <title>The Abbas Khan</title>
    <!--link rel="stylesheet" href="css/styles.css"-->
    <script src="https://kit.fontawesome.com/6e98f21a5d.js" crossorigin="anonymous"></script>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 50px;
            background-color: #1a1a1a;
        }
        
        header nav {
            background-color: #333;
            border: 2px solid #ff4500;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
        }

        nav .nav-item {
            color: #fff;
            font-style: normal; /* Changed 'none' to 'normal' for clarity */
            margin: 0 15px;
            padding: 10px; /* Padding for better spacing */
            box-sizing: border-box; /* Ensures padding doesn't affect total size */
            position: relative; /* Required for relative positioning */
            transition: all 0.3s ease; /* Smooth transitions for hover effects */
            display: flex; /* Added to align content properly */
            align-items: center; /* Centers icon and text vertically */
            justify-content: center; /* Centers content horizontally */

        }

        nav .nav-item:hover {
            background-color: #ff5800; /* Highlight background on hover */
            font-weight: bold;
            transform: scale(1.1); /* Slight scaling effect */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Smooth transition */
        }

        

        nav .nav-item span {
            display: inline-block; /* Ensures proper inline layout */
            margin-left: 5px; /* Adds spacing between icon and text */

        }

        nav .nav-item i {
            display: none;
            /**font-size: 1.2rem; /* Adjust icon size for better visibility */
            width: auto;*/

        }
        
        nav .nav-item:hover i {
            transform: scale(1.2); /* Slight scaling effect on hover */
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .hero .container{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            padding: 20px;
            gap:30vw;
        }


        .hero .content {
            max-width: 100%;
            padding:2%;
        }

        
        .hero p {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .hero h1 {
            max-width:100%;
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff4500;
        }


        .hero .buttons{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 20px;
        }

        .hero .buttons a {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 15px;
            font-weight: bold;
        }


        .btn-primary {
            background-color: #ff4800;
            color: #fff;
        }

        .btn-secondary {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .hero .stats {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            background-color: #333;
            padding-left: 40px;
            padding-right: 40px;
            clear:both;
            border-radius: 10px;
            float:left;
        }

        .hero .stats div {
            text-align: center;
            padding:30px;
        }

        .hero .stats div h3 {
            font-size: 24px;
            color: #ff4500;
        }

        .hero .stats div p {
            font-size: 16px;
        }

        .services {
            padding: 50px;
            text-align: center;
            
        }

        .services h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }

        .services p {
            margin-bottom: 40px;
            font-size: 18px;
            color: #aaa;
        }

        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service-card {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .service-card h3 {
            font-size: 20px;
            margin: 20px 0;
            color: #ff4500;
        }

        .service-card p {
            color: #aaa;
        }

        .service-card i {
            font-size: 40px;
            color: #888; /* Adjust this value for the desired icon color */
        }

        .about {
            padding: 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about h2 {
            width:100%;
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }

        .about p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #aaa;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: left;
            padding:5%;
        }

        .about-content .image {
            flex: 1;
            max-width: 400px;
            margin: 20px;
        }

        .about-content .text {
            font-size:18px;
            flex: 2;
            margin: 20px;
            padding-left:30px;
            padding-right:30px;
        }

        .about-content .text p {
            color: #aaa;
            font-size:18px;
        }

        .download-cv {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff4500;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .skill-section {
            padding: 50px;
            background-color: #1a1a1a;
        }

        .skill-section h2 {
            text-align: center;
            font-size: 36px;
            color: #fff;
            margin-bottom: 30px;
        }

        .skill-container {
            display: flex;
            flex-wrap:wrap;
            gap: 5%;
            justify-content: center;
            align-items: center;
            background-color: #1a1a1a;
            padding: 20px;
        }

        .skill {
            text-align: center;
            color: white;
            font-family: Arial, sans-serif;
            position: relative;
            padding:1%;
        }

        .icon-container {
            position: relative;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .skill svg {
            position: relative;
            width: 140px;
            height: 140px;
            transform: rotate(90deg);
        }

        .skill .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            color: #888; /* Adjust this value for the desired icon color */
        }
        
        .skill p {
            margin-top: 5px;
            font-size: 14px;
            color: #aaa;
        }

        .skill r {
            margin-top: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #ff4800;
        }

        .circle-bg {
            fill: none;
            stroke: #333;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke: #ff4500;
            stroke-width: 3.8;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: center;
            transition: stroke-dasharray 0.3s ease;
        }

        .portfolio {
            padding: 50px;
            text-align: center;    
        }

        .portfolio-buttons {
            
            margin:20px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
            align-items: center;
            justify-content: center;
            gap:20px;
        }

        .portfolio-button {
            padding: 10px;
            font-size:15px;
            background-color: #1a1a1a;
            /*color:#ff4500;*/
            color:#fff;
            border-radius:10px;
        }

        .portfolio-button:hover{
            background-color: #ff5800;
            transition: background-color 0.3s ease;
            cursor:pointer;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 0.7fr));
            gap: 20px;
        }
        
        .portfolio-card {
            background-color: #222;
            padding: 2px;
            border-radius: 10px;
            text-align: center; 
            border: 2px solid #ff4500; /* Corrected border */
              
        }

        .portfolio-card:hover{
            
        }

        .portfolio-card img {
            width: 100%;
            border-radius: 10px;
            fit: cover;
        }

        .portfolio h2 {
            width:100%;
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }

        .portfolio-card h3 {
            font-size: 20px;
            margin: 20px 0;
            color: #ff4500;
        }

        .portfolio p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #aaa;
        }

        
        .portfolio-card p {
            color: #ff4500;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .portfolio-card i {
            font-size: 40px;
            color: #888; /* Adjust this value for the desired icon color */
        }

        footer{
            padding: 20px;
            text-align: center;
            background-color: #ff4500;
            color: #fff;
            font-size: 20px;
        }

        footer footer-content{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            gap: 20px;
        }

        .social-icons i {
            font-size: 24px;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .social-icons i:hover {
            transform: scale(1.2);

        }

        @media (max-width: 768px) {
            nav .nav-item {
                padding: 5px; /* Reduce padding on smaller screens */
                justify-content: center; /* Center content */
            }

            nav .nav-item span {
                display: none; /* Hide text on smaller screens */
            }

            nav .nav-item i {
                font-size: 1.5rem; /* Increase icon size for better visibility */
                display: inline-block; /* Ensure icons remain visible */
                transition: transform 0.3s ease, font-size 0.3s ease; /* Smooth hover effect */
            }

            .hero {
                flex-direction: column;
            }


            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero .container{
                flex-direction: column;
            }

            .hero .container .content{
                order: 2;
            }

            .about-content {
                flex-direction: column;
                text-align: center;
            }
            
            .about-content .text {
            font-size:18px;
            flex: 2;
            margin: 20px;
            padding-left:10px;
            padding-right:10px;
            }

            .about-content .text p {
            color: #aaa;
            font-size:18px;
            }

            .stats div h3 {
                font-size: 20px;
            }

            .stats div p {
                font-size: 14px;
            }

            .skill-card h3 {
                font-size: 16px;
            }
        }


    </style>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const portfolioCards = document.querySelectorAll(".portfolio-card");
            const buttons = document.querySelectorAll(".portfolio-button");

            function filterCategory(category) {
                portfolioCards.forEach(card => {
                    const cardCategory = card.getAttribute("data-category");
                    if (category === "all" || cardCategory === category) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            }

            // Event listeners for category buttons
            document.getElementById("web-btn").addEventListener("click", () => filterCategory("web"));
            document.getElementById("mobile-btn").addEventListener("click", () => filterCategory("mobile"));
            document.getElementById("desktop-btn").addEventListener("click", () => filterCategory("desktop"));

            // Optional: Show all projects by default
            filterCategory("web");
        });



        document.querySelectorAll(".skill").forEach((skill) => {
            const percent = skill.getAttribute("data-percent");
            const progressCircle = skill.querySelector(".progress");
            const radius = 60; // Radius of the circle
            const circumference = 2 * Math.PI * radius; // Circumference of the circle
            const offset = circumference - (percent / 100) * circumference; // Calculate offset

            // Set the progress circle's stroke-dasharray and stroke-dashoffset
            progressCircle.style.strokeDasharray = circumference;
            progressCircle.style.strokeDashoffset = offset;
        });
    </script>

</head>

<body>
    <header>
        <nav>
            <a href="#home" class="nav-item">
                <i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i>
                <span>Home</span>
            </a>
            <a href="#services" class="nav-item">
                <i class="fa-solid fa-laptop-code fa-xl" style="color: #ffffff;"></i>
                <span>Services</span>
            </a>
            <a href="#Aboutme" class="nav-item">
                <i class="fa-solid fa-user fa-xl" style="color: #ffffff;"></i>
                <span>About Me</span>
            </a>
            <a href="#portfolio" class="nav-item">
                <i class="fa-solid fa-briefcase fa-xl" style="color: #ffffff;"></i>
                <span>Portfolio</span>
            </a>
            <a href="#contact" class="nav-item">
                <i class="fa-solid fa-envelope fa-xl" style="color: #ffffff;"></i>
                <span>Contact Me</span>
            </a>
        </nav>

    </header>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="hero" id="home">
        <div class="container">
            <div class="content">
                <p>Hello, this is</p>
                <h1>Abbas Khan<br>Software Engineer</h1>
                <div class="buttons">
                    <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank" class="btn-primary">Hire Me</a>
                    <a href="./assets/web_dev_resume.pdf" class="btn-secondary">Download CV</a>
                </div>
            </div>
            <div class="image">
                <img src="./assets/pp6.png" alt="Abbas Khan" style="border-radius: 5%; max-width: 400px;">
            </div>
        </div>
        <div class="stats">
        <div>
            <h3>5+</h3>
            <p>Experiences</p>
        </div>
        <div style="border-left:5px solid grey;border-right:5px solid grey;">
            <h3>3</h3>
            <p>Projects Done</p>
        </div>
        <div>
            <h3>3</h3>
            <p>Happy Clients</p>
        </div>
        </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="services" id="services">
        <h2>Services</h2>
        <hr>
        <br>
        <p>
            These are all the services i offer besides different types of applications development.
             I have a vast experience in these services as i have done multiple projects in these areas.
        </p>
        <div class="service-cards">
            <div class="service-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Mobile UI/UX Design</h3>
                <p>Create intuitive and visually engaging interfaces for mobile applications, ensuring seamless navigation and an enhanced user experience.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-drafting-compass"></i>
                <h3>Wireframing and Prototyping</h3>
                <p>Transform ideas into interactive prototypes and wireframes, bringing clarity and functionality to your concepts</p>
            </div>
            <div class="service-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Web App Design</h3>
                <p>Design responsive web applications optimized for desktop and mobile platforms, focusing on speed and user-centric design.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-palette"></i>
                <h3>Brand Identity Design</h3>
                <p>Develop cohesive and unique visual identities, including logos, typography, and color schemes, to define your brand's voice.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-search"></i>
                <h3>User Research and Testing</h3>
                <p>Conduct thorough user research and usability testing to deliver designs that resonate with your target audience.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-play"></i>
                <h3>Motion and Interaction Design</h3>
                <p>Add life to your applications with animations and interactive elements that delight and engage users.</p>
            </div>
        </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="about" id="Aboutme">
        <h2>About Me<br><hr></h2>
        <div class="about-content">
            <div class="image">
                <img src="./assets/pp6.jpg" alt="Abbas Khan" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="text">
                <p>I am a dedicated software developer with a strong background in building innovative, scalable solutions. 
                    With expertise in various programming languages and frameworks, I excel at creating efficient applications 
                    that address diverse industry challenges.

                    My experience includes managing cross-functional teams, ensuring project delivery on time and within budget, 
                    and staying updated on emerging technologies. I am passionate about leveraging technology to drive impactful 
                    solutions and eager to collaborate with professionals on innovative opportunities.</p>
                <a href="./assets/web_dev_resume.pdf" class="download-cv" download="Abbas_Khan's_Resume">Download CV</a>
            </div>
        </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="skill-section">
    <h2>Skills & Tools</h2>
    <div class="skill-container">
        <!-- Figma -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fab fa-figma icon"></i>
            </div>
            <p>100%<br><r>Figma</r></p>
        </div>

        <!-- Postman -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-solid fa-user-astronaut icon"></i>
            </div>
            <p>100%<br><r>Postman</r></p>
        </div>


        <!-- Databases -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-solid fa-database icon"></i>
            </div>
            <p>90%<br><r>Databases</r></p>
        </div>

        <!-- Github -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fab fa-github icon"></i>
            </div>
            <p>85%<br><r>Github</r></p>
        </div>

        <!-- react -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="80, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fab fa-react icon"></i>
            </div>
            <p>80%<br><r>React</r></p>
        </div>
        
        <!-- Firebase -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-solid fa-fire icon"></i>
            </div>  
            <p>75%<br><r>Firebase</r></p>
        </div>
        
        <!-- laravel -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="50, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-laravel icon"></i>
            </div>
            <p>50%<br><r>Laravel</r></p>
        </div>

        <!-- html -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-html5 icon"></i>
            </div>  
            <p>100%<br><r>HTML</r></p>
        </div>

        <!-- php -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-php icon"></i>
            </div>
            <p>90%<br><r>Php</r></p>
        </div>
        
        <!-- BootStrap -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-bootstrap icon"></i>
            </div>
            <p>75%<br><r>BootStrap</r></p>
        </div>

        <!-- Java -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="70, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-java icon"></i>
            </div>  
            <p>70%<br><r>Java</r></p>
        </div>  
        
        <!-- JavaScript -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="65, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-js icon"></i>
            </div>  
            <p>65%<br><r>JavaScript</r></p>
        </div> 
        
        <!-- Python -->
        <div class="skill">
            <div class="icon-container">
            <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
                <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845 a 15.9155 15.9155 0 1 0 0 31.831 a 15.9155 15.9155 0 1 0 0 -31.831" />
            </svg>
            <i class="fa-brands fa-python icon"></i>
            </div>  
            <p>60%<br><r>Python</r></p>
        </div> 

    </div>
        
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="portfolio" id="portfolio">
        <h2>Portfolio</h2>
        <hr>
        <br>
        <p>
            These are some of the projects i have done in the past. I have worked on multiple projects in different areas of software development.
        </p>
        <div id="portfolio-buttons" class="portfolio-buttons">
            <button id="web-btn" class="portfolio-button">Web Projects</button>
            <button id="mobile-btn" class="portfolio-button">Mobile Projects</button>
            <button id="desktop-btn" class="portfolio-button">Desktop Projects</button>
        </div>

        <div class="cards">
            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/CampusConnect.png">
                <p>Campus Social Media Website</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/e-commerce.PNG">
                <p>Online Shop</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/my-website.PNG">
                <p>Portfolio Website</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/empTrack.PNG">
                <p>Employee Record Management System</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/IT-services.PNG">
                <p>IT Services' company website</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/online-compiler.PNG">
                <p>Online code compiler</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/university-management-system.PNG">
                <p>Central System for a University</p>
            </div>

            <div class="portfolio-card" data-category="web">
                <img src="./assets/screenshots/web/car-showroom-system.png">
                <p>Car Showroom inventory management system</p>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <img src="./assets/screenshots/desktop/automobile-sales-management-system.PNG">
                <p>an automobile sales maagement system</p>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <img src="./assets/screenshots/desktop/contact-manager.PNG">
                <p>calling now simpler! simple contact manager</p>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <img src="./assets/screenshots/desktop/temp-converter.PNG">
                <p>temprature conversion system</p>
            </div>

        </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <footer>
        <div class="footer-content">
            <p>&copy; 2025 - Abbas Khan</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i> </a>
                <a href="https://www.instagram.com/aepostrophee/" target="_blank"><i class="fab fa-instagram"></i> </a>
            </div>
        </div>
    </footer>
</body>

</html>
