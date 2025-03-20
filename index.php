<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"-->
    <title>The Abbas Khan</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/6e98f21a5d.js" crossorigin="anonymous"></script>
    

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

        /*function handlePress() {
            alert("Please contact me on my email address to schedule a meeting.");
            //i want to add a calendly link here to schedule a meeting

        }*/
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
                <h1>Abbas Khan</h1>
                <h5>Founder @Aepostrophee</h5>
                <br>
                <h3>Software Engineer</h3>
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
                <div class="imgbox">
                    <img src="./assets/screenshots/web/CampusConnect.png">
                    <div class="content">
                        <div class="textdetails">
                            CampusConnect is a very basic version or a template of a website that replicates 
                            a social media of a university campus. This website can be used by any organization 
                            intends to develop a social media platform but only for their enrolled or employed individuals.
                            it offers functionalities such as liking & commenting on posts, and toggling theme.
                        </div>
                    </div>
                </div>
                <p>Campus Social Media Website</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="assets/projects/CampusConnect/index.html" target="_blank"><i class="fas fa-share-from-square"></i> </a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/e-commerce.PNG">
                    <div class="content">
                        <div class="textdetails">
                            this website shows the working of an e-commerce site, it offers features such as 
                            active-cart-response, bill calculation, product searching (for users), dynamic 
                            product rendering (for developers).
                            a dummy theme of fertilizers is used in this, while in actual,any theme 
                            can be used on this template.
                            tech stack used in this project is HTML/CSS/JS.
                        </div>
                    </div>
                </div>
                <p>Online Shop</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="assets/projects/e-commerce/index.html" target="_blank"><i class="fas fa-share-from-square"></i> </a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/my-website.png">
                    <div class="content">
                        <div class="textdetails">
                            This website is the demonstration of my portflio website, that can be uesd by any fresher as 
                            a template for developing his/her portfolio website. All the images used in this website/project 
                            are completely genuine and not copyright of any party.
                            tech stack used in developing this project is HTML/CSS/JS.
                        </div>
                    </div>
                </div>
                <p>Portfolio Website</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <!--a href="assets/projects/" target="_blank"><i class="fas fa-share-from-square">try it!</i> </!a-->
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/empTrack.PNG">
                    <div class="content">
                        <div class="textdetails">
                            empTrack is a website developed for the businesses that wants to run their record keeping systems
                            on a cloud server. it allows features such as marking attendance of employees, viewing the report 
                            graphically, exporting the report in a CSV file, adding a new employee, searching an existing employee.
                            tech stack used in this project is simply HTML/CSS/JS.
                            visit the github repo using the below link.
                        </div>
                    </div>
                </div>
                <p>Employee Record Management System</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="assets/projects/empTrack/index.html" target="_blank"><i class="fas fa-share-from-square"></i> </a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/IT-services.PNG">
                    <div class="content">
                        <div class="textdetails">
                            This website is developed for a company that offers software solutions. this website can be used 
                            as a template for developing landing pages for any kind of businesses. this project also demonstrates 
                            animation using javascript only.
                            tech stack used for developing this project is HTML/CSS/JS.
                        </div>
                    </div>
                </div>
                <p>IT Services' company website</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="assets/projects/IT-services/index.html" target="_blank"><i class="fas fa-share-from-square"></i> </a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/online-compiler.PNG">
                    <div class="content">
                        <div class="textdetails">
                            this website is a demonstration of how a website can be used for solving 
                            complier problems for the people who are either having difficulties or are 
                            unable to do configurations sucessfully on their systems.
                            tech stack used in this project is HTML/CS/JS.
                            visit github repo for complete project's source code with the following link.
                        </div>
                    </div>
                </div>
                <p>Online code compiler</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="assets/projects/online-compiler/index.html" target="_blank"><i class="fas fa-share-from-square"></i> </a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/university-management-system.png">
                    <div class="content">
                        <div class="textdetails">
                        The University Management System is a comprehensive web-based platform designed to streamline and automate 
                        various administrative tasks within a university. It provides a centralized system for managing student records, 
                        course registration, faculty information, and academic resources. The system offers features such as student 
                        enrollment, grade management, class scheduling, and communication tools for students, faculty, and administrators.
                        </div>
                    </div>
                </div>
                <p>Central System for a University</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="web">
                <div class="imgbox">
                    <img src="./assets/screenshots/web/car-showroom-system.png">
                    <div class="content">
                        <div class="textdetails">
                            Car Showroom system is web based software that is intended to be used by the employees of a car showroom.
                            this system offers features such as adding a new car, updating the existing car, deleting a car, searching
                            a car, and viewing the complete inventory of the showroom. 
                            tech stack used in this project is HTML/CSS/JS.

                        </div>
                    </div>
                </div>
                <p>Car Showroom inventory management system</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <div class="imgbox">
                    <img src="./assets/screenshots/desktop/automobile-sales-management-system.PNG">
                    <div class="content">
                        <div class="textdetails">
                            This is a desktop based fotware solution for an automobile dealership, it offers a wide variety
                            of features such as dynamic vehicle record entry, record deletion, persistant record management
                            using file management.
                            tech stack used in this project is Java.
                        </div>
                    </div>
                </div>
                <p>an automobile sales management system</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <div class="imgbox">
                    <img src="./assets/screenshots/desktop/contact-manager.PNG">
                    <div class="content">
                        <div class="textdetails">
                            Contact manager is a contact storage system that is intended to be used by the people who are
                            having difficulties in managing their contacts. this system offers features such as adding a new
                            contact, updating an existing contact, deleting a contact, searching a contact, and viewing the
                            complete list of contacts.
                            tech stack used in this project is Python.
                        </div>
                    </div>
                </div>
                <p>calling now simpler! simple contact manager</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="desktop">
                <div class="imgbox">
                    <img src="./assets/screenshots/desktop/temp-converter.PNG">
                    <div class="content">
                        <div class="textdetails">
                            other details
                        </div>
                    </div>
                </div>
                <p>temprature conversion system</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="mobile">
                <div class="imgbox">
                    <img src="./assets/screenshots/mobile/portfolio.jpg">
                    <div class="content">
                        <div class="textdetails">
                            other details
                        </div>
                    </div>
                </div>
                <p>a simple portfolio</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="portfolio-card" data-category="mobile">
                <div class="imgbox">
                    <img src="./assets/screenshots/mobile/WaterReminderApp.png">
                    <div class="content">
                        <div class="textdetails">
                            other details
                        </div>
                    </div>
                </div>
                <p>Water Reminder App</p>
                <div class="p_icons">
                    <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

        </div>
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="recommendations" id="recommendations">
        <h2>Recommendations</h2>
        <hr>
        <br>
        <p>
            These are some of the recommendations i have received from my colleagues and clients. 
            I have worked with multiple people and have always delivered the best quality work.
        </p>
        <br>
    
        <div class="holder">
            <div class="recommendation-card">
                <div class="heading">
                    Muhammad Romail Imran <a href="https://www.linkedin.com/in/muhammad-romail-imran-96b13818b/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="bio">
                    x SLB | Pursuing Bachelors in Artificial Intelligence | x Broadstone Technologies | WeAlif | GIKI'25
                </div>
                <div class="text">
                Abbas worked as an intern under my supervision at WeAlif, where he developed strong skills in research, 
                data consulting, and converting data into media for digital marketing purposes. He quickly learned how 
                to collect and analyze complex data, using clear methods to find useful insights. His adaptability, 
                attention to detail, and eagerness to learn helped him deliver results that supported important decisions 
                and enhanced marketing efforts. Abbas' dedication and ability to learn quickly make him a valuable 
                addition to any team.
                </div>
            </div>

            <div class="recommendation-card">
                <div class="heading">
                    Georgi Stoyanov <a href="https://www.linkedin.com/in/georgi-stoyanov-714935315/" target="_blank"><i class="fab fa-linkedin"></i> </a>
                </div>
                <div class="bio">
                    C | C++ | Python Developer
                </div>
                <div class="text">
                    Abbas is a hardworking student who wants to realize his dreams in the industry. He's a reliable person 
                    and eager to learn a lot. Don't miss the opportunity and get yourself an efficient employee
                </div>
            </div>
            <div class="recommendation-card">
                <div class="heading">
                    Muhammad Usman <a href="https://www.linkedin.com/in/muhammad-usman-a8b8311a0/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="bio">
                    Frontend Developer | UI Specialist | React.js Expert at CodesOrbit (Pvt) Ltd
                </div>
                <div class="text">
                Ex[c]ited to recommend Abbas, a mobile app developer with a passion for crafting user-friendly and 
                high-performance applications. Their dedication to learning and delivering quality solutions is truly commendable.
                </div>
            </div>
            <div class="recommendation-card">
                <div class="heading">
                    Sheikh Basim <a href="https://www.linkedin.com/in/sheikh-basim-38ba52278/" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="bio">
                    Cyber Security Enthusiasts & Researcher | CCNA | EDR/XDR |
                </div>
                <div class="text">
                I would highly recommend Abbas khan for any kind of Mob app development. 
                their expertise in React and Laravel are outstanding and he is a proactive learner and dedicated professional.
                </div>
            </div>
        </div>
        
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <section class="contact" id="contact">
            <h2>Contact Me</h2>
            <hr>
            <br>
            <p>
                If you have any queries or want to discuss a project, feel free to contact me. I am always available to help you out.
            </p>
            <form id="contact-form" class="contact-form" action="https://formspree.io/f/xeoaeejl" method="POST">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit">Send</button>
                <br>
                <div style="max-width:100%; border-top : 3px #888 solid; padding:50px;">
                <a href="https://calendly.com/abbas1795khan/30min">
                <button type="button" onclick="handlePress()">schedule a meeting</button>
                </a>
                </div>
            </form>

            <!--p id="responseMessage"></p-->
    </section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <footer>
        <div class="footer-content">
            <p>&copy; 2025 - Aepostrophee -by Abbas Khan</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/the-abbas-khan/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.github.com/flickShot555/" target="_blank"><i class="fab fa-github"></i> </a>
                <a href="https://www.instagram.com/aepostrophee/" target="_blank"><i class="fab fa-instagram"></i> </a>
            </div>
        </div>
    </footer>
</body>

</html>
