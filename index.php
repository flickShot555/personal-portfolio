<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>UI/UX Designer Portfolio</title>
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
            justify-content: space-between;
            align-items: center;
            padding: 40px 50px;
            background-color: #1a1a1a;
        }

        .logo {
            font-size: 30px;
            color: #ff4500;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin: 0 15px;
            padding-left:10px;
            padding-right:10px;
        }
        
        nav ul li :hover{
            color: #ff5800;
        }

        nav ul li a {
            size:25;
            text-decoration: none;
            color: #fff;
            font-weight: 500;
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
            align-items: center;
            justify-content: space-around;
            padding: 20px;
        }

        .hero .content {
            max-width: 100%;
        }

        .hero h1 {
            font-size: 48px;
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
            margin-top: 100px;
            background-color: #333;
            padding-left: 40px;
            padding-right: 40px;
            
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
            padding-left: 80px;
            padding-right:80px;
        }

        .about-content .image {
            flex: 1;
            max-width: 300px;
            margin: 20px;
        }

        .about-content .text {
            font-size:20px;
            flex: 2;
            margin: 20px;
            padding-left:30px;
            padding-right:30px;
        }

        .about-content .text p {
            color: #aaa;
            font-size:30px;
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

        .skill-card {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
        }

        .skill-card svg {
            width: 100px;
            height: 100px;
        }

        .skill-card h3 {
            margin-top: 10px;
            font-size: 18px;
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
</head>

<body>
    <header>
        <div class="logo">LOGO</div>
        <nav>
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#Aboutme">About me</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Contactme">Contact me</a></li>
            </ul>
        </nav>
        <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank" class="hire-me-btn"><p style="padding-left:20px;padding-right:20px;font-size:18px;">Hire Me</p></a>
    </header>

    <section class="hero">
        <div style="display:flex;flex-direction:column">
        <div class="content">
            <p>Hello, this is</p>
            <h1>Abbas Khan<br>Software Engineer</h1>
            <div class="buttons">
                <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank" class="btn-primary">Hire Me</a>
                <a href="#" class="btn-secondary">Download CV</a>
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
        </div></div>
        <div class="image">
            <img src="./assets/dp.jpg" alt="Abbas Khan" style="border-radius: 5%; max-width: 300px;">
        </div>
    </section>
    <section class="services" id="Services">
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
        <h2>About Me<br><hr><br></h2>
        <div class="about-content">
            <div class="image">
                <img src="./assets/dp.jpg" alt="Abbas Khan" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="text">
                <p>A software engineer, the modern-day architect of digital realms, navigates the ethereal landscapes of code, sculpting intangible structures that shape our technological world. With fingers poised over keyboards like virtuoso pianists, they compose symphonies of logic, their minds a labyrinth of algorithms and solutions. Their canvas is a screen, a vast expanse where lines of code dance in intricate patterns, weaving the fabric of programs and applications. Each keystroke is a brushstroke, crafting intricate architectures and breathing life into innovative designs. In this digital atelier, they don the mantle of problem solvers, confronting bugs and glitches like valiant knights in an ever-evolving quest for perfection. Debugging becomes a noble pursuit, unraveling the mysteries hidden within the tangled webs of code, designs. In this digital atelier.</p>
                <a href="#" class="download-cv">Download CV</a>
            </div>
        </div>
    </section>
    <section class="skill-section">
        <h2>Skills & Tools</h2>
        <div class="skill-container">
            <div class="skill-card">
                <svg>
                    <circle cx="50" cy="50" r="40" stroke="orange" stroke-width="4" fill="none">
                        <animate attributeName="stroke-dasharray" from="0,251.2" to="251.2,0" dur="2s" repeatCount="indefinite" />
                    </circle>
                </svg>
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
