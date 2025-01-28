<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>The Abbas Khan</title>
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

        /**
            @media (max-width: 768px) {
                header nav{
    
                }
            }
        */

        .logo {
            font-size: 30px;
            color: #ff4500;
            font-weight: bold;
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
        }
        
        nav .nav-item:hover i {
        transform: scale(1.2); /* Slight scaling effect on hover */
        }

        .hire-me-btn {
            padding: 10px 20px;
            background-color: #ff5800;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
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

        @media (max-width: 768px){
            .hero{
                flex-direction: column;
            }

            .hero .container{
                flex-direction: column;
            }

            .hero .container .content{
                order: 2;
            }
        }        

        .hero .content {
            max-width: 100%;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff4500;
        }

        .hero p {
            margin-bottom: 20px;
            font-size: 18px;
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

        @media (max-width: 768px) {
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .skill {
            position: relative;
            width: 120px;
            height: 120px;
        }
    
        .skill svg {
          position: absolute;
            top: 0;
            left: 0;
            transform: rotate(-90deg);
        }
        
        .skill circle {
            fill: none;
            stroke-width: 10;
        }

        .skill .bg {
            stroke: #333;
        }

        .skill .progress {
            stroke: orange;
            stroke-linecap: round;
            stroke-dasharray: 377; /* Circumference = 2 * π * r (r = 60px) */
            stroke-dashoffset: 377; /* Initial full circle */
            transition: stroke-dashoffset 1s ease;
        }

        .skill .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px;
        }

        .skill .label {
            position: absolute;
            bottom: -30px;
            width: 100%;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
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
    <script>
        document.querySelectorAll(".skill").forEach((skill) => {
            const percent = skill.getAttribute("data-percent");
            const progressCircle = skill.querySelector(".progress");
            const circumference = 2 * Math.PI * 60; // Circumference of the circle
            const offset = circumference - (percent / 100) * circumference;
        progressCircle.style.strokeDashoffset = offset;
        });

        /*const navbarItems = document.querySelectorAll("nav .nav-item");

        function updateNavbar() {
            const isSmallScreen = window.innerWidth <= 768;

            navbarItems.forEach((item) => {
                const span = item.querySelector("span");
                const text = item.getAttribute("data-text");

                if (isSmallScreen) {
                  span.textContent = ""; // Hide text
                } else {
                span.textContent = text; // Show text
                }
            });
        }

        // Run on resize and initial load
        window.addEventListener("resize", updateNavbar);
        updateNavbar();*/
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
                <span>Serv  ices</span>
            </a>
            <a href="#about" class="nav-item">
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

    <section class="hero" id="home">
        <div class="container">
        <div class="content">
            <p>Hello, this is</p>
            <h1>Abbas Khan<br>Software Engineer</h1>
            <div class="buttons">
                <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank" class="btn-primary">Hire Me</a>
                <a href="#" class="btn-secondary">Download CV</a>
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
    <section class="about" id="Aboutme">
        <h2>About Me<br><hr></h2>
        <div class="about-content">
            <div class="image">
                <img src="./assets/pp6.png" alt="Abbas Khan" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="text">
                <p>I am a dedicated software developer with a strong background in building innovative, scalable solutions. 
                    With expertise in various programming languages and frameworks, I excel at creating efficient applications 
                    that address diverse industry challenges.

                    My experience includes managing cross-functional teams, ensuring project delivery on time and within budget, 
                    and staying updated on emerging technologies. I am passionate about leveraging technology to drive impactful 
                    solutions and eager to collaborate with professionals on innovative opportunities.</p>
                <a href="#" class="download-cv">Download CV</a>
            </div>
        </div>
    </section>
    <section class="skill-section">
        <h2>Skills & Tools</h2>
        <!--div class="skill-container">

            <div class="skill-card">
                <i class="fa-brands fa-figma fa-2xl" style="color: #0a0a0a;"></i>
                <h3>Figma</h3>
            </div>
            <div class="skill-card">
                <svg>
                    <path d="M10 10 H 90 V 90 H 10 Z" stroke="blue" fill="transparent">
                        <animate attributeName="d" values="M10 10 H 90 V 90 H 10 Z; M20 20 H 80 V 80 H 20 Z; M10 10 H 90 V 90 H 10 Z" dur="2s" repeatCount="indefinite" />
                    </path>
                </svg>
                <h3>GitHub</h3>
            </div>
            <div class="skill-card">
                <svg>
                    <polygon points="50,10 10,90 90,90" fill="purple">
                        <animate attributeName="points" dur="2s" repeatCount="indefinite"
                            values="50,10 10,90 90,90; 50,50 10,90 90,10; 50,10 10,90 90,90" />
                    </polygon>
                </svg>
                <h3>React</h3>
            </div>
            <div class="skill-card">
                <svg>
                    <rect x="20" y="20" width="60" height="60" fill="green">
                        <animate attributeName="rx" from="0" to="30" dur="1.5s" repeatCount="indefinite" />
                    </rect>
                </svg>
                <h3>VS Code</h3>
            </div>
            <div class="skill-card">
                <svg>
                    <line x1="10" y1="10" x2="90" y2="90" stroke="red" stroke-width="4">
                        <animate attributeName="x2" from="90" to="10" dur="1s" repeatCount="indefinite" />
                    </line>
                </svg>
                <h3>JetBrains</h3>
            </div>
            <div class="skill-card">
                <svg>
                    <ellipse cx="50" cy="50" rx="40" ry="20" fill="yellow">
                        <animate attributeName="rx" from="40" to="10" dur="1.5s" repeatCount="indefinite" />
                    </ellipse>
                </svg>
                <h3>Postman</h3>
            </div>
        </div-->
        <div class="skill-container">
            <div class="skill" data-percent="100">
                <svg width="120" height="120">
                    <circle class="bg" cx="60" cy="60" r="60"></circle>
                    <circle class="progress" cx="60" cy="60" r="60"></circle>
                </svg>
                 <i class="fa-brands fa-figma icon"></i>
                <div class="label">100%</div>
            </div>
            <div class="skill" data-percent="85">
                <svg width="120" height="120">
                <circle class="bg" cx="60" cy="60" r="60"></circle>
                <circle class="progress" cx="60" cy="60" r="60"></circle>
            </svg>
            <i class="fa-brands fa-adobe icon"></i>
            <div class="label">85%</div>
            </div>
            <!-- Add more skill indicators as needed -->
        </div>
    </section>
    <!--section class="portfolio" id="Portfolio">
        <h2>Portfolio</h2>
        <hr>
        <br>
        <p>Here are some of my recent projects that i have done for my clients. I have worked on multiple projects and have a vast experience in this field.</p>
        <div class="portfolio-cards">
            <div class="portfolio-card">
                <img src="./assets/project1.jpg" alt="Project 1" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="portfolio-card">
                <img src="./assets/project2.jpg" alt="Project 2" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="portfolio-card">
                <img src="./assets/project3.jpg" alt="Project 3" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="portfolio-card">
                <img src="./assets/project4.jpg" alt="Project 4" style="width: 100%; border-radius: 10px;">
            </div>
        </div>
    </section-->
</body>

</html>
