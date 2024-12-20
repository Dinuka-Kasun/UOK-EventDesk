<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>


         /* Previous Animation Styles */
         .typing-animation {
            display: inline-block;
            overflow: hidden;
            border-right: 2px solid;
            white-space: nowrap;
            animation: typing 3.5s steps(30, end),
                       cursor .75s step-end infinite;
            width: 0;
        }

        .typing-animation-delayed {
            display: inline-block;
            overflow: hidden;
            border-right: 2px solid;
            white-space: nowrap;
            opacity: 0;
            animation: typing 2s steps(30, end) 3.5s forwards,
                       cursor .75s step-end infinite;
            width: 0;
        }

        @keyframes cursor {
            from, to { border-color: transparent }
            50% { border-color: white; }
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100%; opacity: 1; }
        }

        /* Impact Section Animation */
        .impact-item {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .impact-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .counter {
            display: inline-block;
            opacity: 0;
        }

        .counter.animate {
            opacity: 1;
            animation: countUp 1s ease-out forwards;
        }

        @keyframes countUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Previous styles remain the same */
        .header-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
            animation-delay: 2s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .team-section {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 1s ease-out forwards;
            animation-delay: 2s;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 640px) {
            .typing-animation, .typing-animation-delayed {
                font-size: 1.5rem;
            }
        }
       /* .backimg {
            background-image: url("UOK IMAGE.jpg");
            background-repeat: no-repeat;
        }*/

        /* Team Section Styles */

       

        .team-details h6 {
            margin-bottom: 10px;
        }

        .italic-text {
            font-style: italic;
            color: #555;
            font-size: 14px;
        }

        .linkedin-icon {
            color: #0077b5;
            font-size: 20px;
            margin-left: 5px;
        }

        .linkedin-icon:hover {
            color: #005c8e;
        }

        .fade-in-sections {
            display: flex;
            flex-direction: column;
            gap: 40px;
            padding: 20px;
        }

        .fade-in-section {
            display: flex;
           /* align-items: center;*/
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .fade-in-section.fade-left {
            flex-direction: row;
            transform: translateX(-50px);
        }

        .fade-in-section.fade-right {
            flex-direction: row-reverse;
            transform: translateX(50px);
        }

        .fade-in-section.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .round-image {
            width: 150px;
            height: 150px;
            object-fit: contain;
            border-radius: 50%;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .fade-in-section p {
            font-size: 14px;
            color: #333;
            max-width: 300px;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .fade-in-section {
                flex-direction: column;
                text-align: center;
            }

            .fade-in-section img {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php 
    include 'templates/header.php';
    include 'templates/navbar.php';
    ?>

    <!-- Header Section -->
    <header class="bg-[#631010] text-black py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center">University of Kelaniya Event Desk</h1>
            <p class="text-xl text-center mt-2">Your Premier Event Management Platform</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Introduction Section -->
        <section class="mb-12">
            <p class="text-lg text-gray-700 leading-relaxed">
                Welcome to EventDesk, where we transform campus experiences into unforgettable memories. Since our establishment in 2024, we've been the cornerstone of event management at University of Kelaniya, facilitating thousands of successful events that have enriched our vibrant campus community.
            </p>
        </section>

        <!-- Mission Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-[#631010] mb-4">Our Mission</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                To streamline and enhance the campus event experience by providing a comprehensive digital platform that connects organizers, attendees, and resources, fostering a more engaged and dynamic university community.
            </p>
        </section>

        <!-- What We Do Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-[#631010] mb-4">What We Do</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Centralized Event Planning</h3>
                    <p>From small club meetings to large-scale conferences, we provide the tools to plan, promote, and execute events seamlessly.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Resource Management</h3>
                    <p>Easy access to venue bookings, equipment reservations, and technical support.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Digital Ticketing</h3>
                    <p>Hassle-free registration and attendance tracking for all campus events.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Analytics & Reporting</h3>
                    <p>Comprehensive insights to help organizers optimize their events.</p>
                </div>
            </div>
        </section>

        <!-- Impact Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-[#631010] mb-4">Our Impact</h2>
            <div class="grid md:grid-cols-4 gap-6 text-center">
                <div class="bg-[#f4d4d4] p-6 rounded-lg">
                    <p class="text-4xl font-bold text-[#631010]">5000+</p>
                    <p class="text-gray-700">Events Managed</p>
                </div>
                <div class="bg-[#f4d4d4] p-6 rounded-lg">
                    <p class="text-4xl font-bold text-[#631010]">100k+</p>
                    <p class="text-gray-700">Attendees Served</p>
                </div>
                <div class="bg-[#f4d4d4] p-6 rounded-lg">
                    <p class="text-4xl font-bold text-[#631010]">500+</p>
                    <p class="text-gray-700">Organizations</p>
                </div>
                <div class="bg-[#f4d4d4] p-6 rounded-lg">
                    <p class="text-4xl font-bold text-[#631010]">95%</p>
                    <p class="text-gray-700">Satisfaction Rate</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-[#631010] mb-4">Meet Our Team</h2>
            <div class="fade-in-sections">
                <!-- Team members sections -->
                <div class="fade-in-section fade-left" id="section1">
                    <img src="assets/images/team/1.jpg" alt="Sandaru Lashan" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Sandaru Lashan</h4>
                        <h6 class="italic-text">An android application developer, currently specialized in Software technology.</h6>
                        <h6 class="italic-text">Passionate about creating mobile applications that are efficient and more secure.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/sandaru-lashan-herman" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>

             

                <!-- Section 2 -->
                <div class="fade-in-section fade-right" id="section2">
                    <img src="assets/images/team/2.jpeg" alt="Chamishka Dilina" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Chamishka Dilina</h4>
                        <h6 class="italic-text">Currently specialized in Software technology.</h6>
                        <h6 class="italic-text">Would love to create creative and user-focused applications.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/chamishka-dilina" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="fade-in-section fade-left" id="section3">
                    <img src="assets/images/team/3.jpg" alt="Channa Bandara" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Channa Bandara</h4>
                        <h6 class="italic-text">Currently specialized in Software technology.</h6>
                        <h6 class="italic-text">A mobile application developer, has development skills in various areas.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/channa-bandara-94151032a" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="fade-in-section fade-right" id="section4">
                    <img src="assets/images/team/4.jpeg" alt="Dinuka Kasun" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Dinuka Kasun</h4>
                        <h6 class="italic-text">A cybersecurity specialist, pen tester currently specialized in Network technology.</h6>
                        <h6 class="italic-text">Passionate about security, developing exploits.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/dinuka-kasun-a05210323" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="fade-in-section fade-left" id="section5">
                    <img src="assets/images/team/5.jpeg" alt="Isuru Kavinda" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Isuru Kavinda</h4>
                        <h6 class="italic-text">A network designer, currently specialized in Network Technology.</h6>
                        <h6 class="italic-text">Passionate about creating network designs and UI/UX designs.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/isuru-kavinda-b71348188" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="fade-in-section fade-right" id="section6">
                    <img src="assets/images/team/6.jpeg" alt="Krishan Imalka" class="round-image" loading="lazy">
                    <div class="team-details">
                        <h4>Krishan Imalka</h4>
                        <h6 class="italic-text">Currently specialized in Software technology.</h6>
                        <h6 class="italic-text">Passionate about Python programming.</h6>
                        <h6 class="italic-text">LinkedIn: <a href="https://www.linkedin.com/in/krishan-imalka" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a></h6>
                    </div>
                </div>
                <!-- [Previous team member sections remain the same] -->
            </div>
        </section>

        <!-- Contact Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-[#631010] mb-4">Contact Us</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Location</h3>
                    <p>University of Kelaniya<br>Kandy Road,<br>Dalugama,<br>Kelaniya 11600.<br>Sri Lanka.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Support Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Weekend Support Available for Registered Events</p>
                </div>
            </div>
        </section>

        <!-- Social Media Section -->
        <section>
            <h2 class="text-3xl font-bold text-[#631010] mb-4">Follow Us</h2>
            <div class="flex space-x-4">
                <a href="https://www.instagram.com/ukelaniya/" class="text-[#631010] hover:text-[#8c2222]" target="_blank">
                    <i class="fab fa-instagram text-3xl"></i>
                </a>
                <a href="https://x.com/ukelaniya" class="text-[#631010] hover:text-[#8c2222]" target="_blank">
                    <i class="fab fa-twitter text-3xl"></i>
                </a>
                <a href="https://www.facebook.com/ukelaniya/" class="text-[#631010] hover:text-[#8c2222]" target="_blank">
                    <i class="fab fa-facebook text-3xl"></i>
                </a>
                <a href="https://lk.linkedin.com/company/ukelaniya" class="text-[#631010] hover:text-[#8c2222]" target="_blank">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>
        </section>
    </main>

    

    <?php include 'templates/footer.php'; ?>

    <script>
        // Intersection Observer for fade-in sections
        const fadeInSections = document.querySelectorAll('.fade-in-section');
        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        });

        fadeInSections.forEach(section => {
            sectionObserver.observe(section);
        });

          
    </script>

        <!-- Rest of the content remains the same -->




    <script src="assets/js/script.js"></script>
</body>
</html>