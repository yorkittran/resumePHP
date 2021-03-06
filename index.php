<?php
    $host = 'localhost';
    $user = 'yorkit';
    $password = '231';
    $database = 'resume';

    $conn = mysqli_connect($host, $user, $password, $database);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "SELECT first_name, last_name, career, address, date_of_birth, phone, mail, description FROM information";
    $result = $conn->query($sql);
    $information = $result->fetch_assoc();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resume - <?php echo $information["first_name"] . " " . $information["last_name"]?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="resume-icon.jpg">
    <link href="main.css" rel="stylesheet" />
</head>

<body>

    <nav class="Navbar">
        <div class="l-Wrapper l-Wrapper--reset@sm-down">
            <ul class="u-pullRight">
                <li>
                    <a class="Navbar-btn Navbar-btn--main" href="https://github.com/yorkittran/yorkittran.github.io/raw/master/Resume%20-%20Tran%20Tuan%20Anh.pdf">
                        Download
                        <span>(pdf)</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="https://www.linkedin.com/in/tuan-anh-tran-63b093192/">LinkedIn</a>
                </li>
                <li>
                    <a href="https://github.com/yorkittran">GitHub</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/yorkittran">Facebook</a>
                </li>
            </ul>
        </div>
    </nav>

    <article class="l-Wrapper">

        <div class="l-Header">
            <div class="l-Header-col">
                <a href="https://github.com/yorkittran">
                    <h1 class="Title">
                        <span class="u-shadow">
                            Tuan Anh
                            <br> Tran
                        </span>
                        <span class="Title-sub">Web Development Intern</span>
                    </h1>
                </a>
            </div>
            <div class="l-Header-col Contact">
                <div class="l-Header-img">
                    <img src="avatar.jpg">
                </div>
                <p>
                    Binh Thanh District, HCMC<br>
                    January 23rd, 1999<br>
                    (+84) 935 444 261<br>
                    <a class="u-link" href="mailto:yorkittran@gmail.com">yorkittran@gmail.com</a>
                </p>
            </div>
        </div>

        <section class="l-Section">
            <h2 class="l-Section-title h3 u-hidden@sm-down">Profile</h2>
            <div class="l-Section-content">
                <p>I'm a web development intern with a strong passionate in coding and learning things. I enjoy
                    creating beautiful websites and web applications. Have good eyes for design and typography, high attention to
                    detail. I have enough self-consciousness and patience to spend most time front of laptop to self-study with online resources, courses and reading blogs. <br>
                    Creative, flexible and hardworking teamate.</p>
            </div>
        </section>

        <section class="l-Section">
            <h2 class="l-Section-title h3">Skills</h2>
            <div class="l-Section-content">
                <ul>
                    <li>Highly skilled in creating performant
                        <strong class="Tag">HTML</strong>,
                        <strong class="Tag">CSS</strong>
                    </li>
                    <li>Experienced with
                        <strong class="Tag">Java</strong>,
                        <strong class="Tag">C#</strong>,
                        <strong class="Tag">Ruby</strong>,
                        <strong class="Tag">Frameworks</strong> (.NET Framework, Rails)
                    </li>
                    <li>Proficient with
                        <strong class="Tag">Version Control Systems</strong> (Git),
                        <strong class="Tag">Boostrap</strong>,
                        <strong class="Tag">Terminal/ZSH</strong>,
                        <strong class="Tag">MSSQL</strong>,
                        <strong class="Tag">PostgresSQL</strong>,
                        <strong class="Tag">Docker</strong>
                    </li>
                    <li>Skilled in creating
                        <strong class="Tag">Style Guides</strong>,
                        <strong class="Tag">Responsive Web Development</strong> with a
                        <strong class="Tag">Desktop First</strong> approach,
                    </li>
                    <li>Knowledgeable about
                        <strong class="Tag">Adruino</strong>,
                        <strong class="Tag">JavaScript</strong>,
                        <strong class="Tag">Data Structure & Algorithm</strong>, familar with
                        <strong class="Tag">Maths</strong>
                    </li>
                </ul>
            </div>
        </section>

        <section class="l-Section">
            <h2 class="l-Section-title h3">Education</h2>
            <div class="l-Section-content">
                <div class="l-Section-group">
                    <h3>Software Engineering</h3>
                    <a class="u-link" href="https://hcmuni.fpt.edu.vn/">FPT University</a> (HCMC)
                    <br> 2017 - 2021
                    <p>Currently Junior with 50% 4-years Scholarship</p>
                </div>

                <div class="l-Section-group">
                    <h3>Information and Technology Major Class</h3>
                    <a class="u-link" href="http://www.thpt-lequydon-danang.edu.vn/">Le Quy Don Gifted High School</a> (Da Nang)
                    <br> 2014 - 2017
                    <p>Graduated with a good certificate</p>
                </div>

                <div class="l-Section-group">
                    <h3>Self-Learning</h3>
                    <a class="u-link" href="https://www.google.com/">Internet</a>
                    <br> 2017 - Forever
                    <p>Taking online courses, research, reading aricles, making side-projects</p>
                </div>
            </div>
        </section>

        <section class="l-Section">
            <h2 class="l-Section-title h3">Achivements</h2>
            <div class="l-Section-content">
                <ul>
                    <li>
                        <strong class="Tag">3rd Place</strong> at Vifotec National 2017 with SmarBots Project
                    </li>
                    <li>
                        <strong class="Tag">3rd Place</strong> at Young Maker Challenger National 2017
                    </li>
                    <li>
                        <strong class="Tag">1st Place</strong> at Viet Nam Science and Engineering Fair (ViSEF) Regional 2017
                    </li>
                    <li>
                        <strong class="Tag">2nd Place</strong> at Group D3, Young Information and Technology National 2017
                    </li>
                    <li>
                        <strong class="Tag">1st Place</strong> at Group D3, Young Information and Technology Regional 2017
                    </li>
                    <li>
                        <strong class="Tag">3rd Place</strong> at Robodnic Da Nang 2017 with LQD-Inventors Team
                    </li>
                    <li>
                        <strong class="Tag">2nd Place</strong> at Student Contest 2016
                    </li>
                </ul>
            </div>
        </section>

        <section class="l-Section">
            <h2 class="l-Section-title h3">Projects</h2>
            <div class="l-Section-content">
                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/yorkittran.github.io">yorkittran.github.io</a></h3>
                    <p>Personal resume with HTML/CSS</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/smart-bots">The SmartBots System</a></h3>
                    <p>A cheap solution for smarthome, build on top of Laravel/MariaDB/Redis/NodeJS/JWT/Socket.io/Arduino</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/concept">concept</a></h3>
                    <p>A travel website - personal project for PRJ321, build on top of Java</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/contilfin/voyage">voyage</a></h3>
                    <p>Discover, plan and book your perfect trip with expert advice, travel guides, destination</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/demo_blog">demo_blog</a></h3>
                    <p>Demo Blog with Rails</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/demo_twitter">demo_twitter</a></h3>
                    <p>Demo Twitter with Rails</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/instagram">instagram</a></h3>
                    <p>Demo Instagram with Rails</p>
                </div>

                <div class="l-Section-group">
                    <h3><a class="u-link" href="https://github.com/yorkittran/coding-library">coding-library</a></h3>
                    <p>A library of C/C++ source code</p>
                </div>

            </div>
        </section>

    </article>

    <div class="l-Wrapper u-keyline">
        <div class="l-Footer">
            <div class="l-Footer-col">
                <strong class="Tag">Tran Tuan Anh</strong>
            </div>
            <div class="l-Footer-col Contact">
                <a href="mailto:yorkittran@gmail.com">yorkittran@gmail.com</a>
            </div>
        </div>
    </div>
</body>
</html>