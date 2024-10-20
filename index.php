<?php 
  session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITZONE FITNESS CENTER</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header> <!---Create a Logo-->
        <a href="#" class="logo">Fitzone <span>Fitness </span>Center</a>
        <!---Create a navigation bar-->
        <ul class="navbar">
            <li><a href="#HOME">HOME</a></li>
            <li><a href="#SERVICES">SERVICES</a></li>
            <li><a href="#ABOUTUS">ABOUT US</a></li>
            <li><a href="#PRICING">PRICING</a></li>
            <li><a href="#TRAINERS">TRAINERS</a></li>
            <li><a href="#BLOG">BLOG</a></li>
        </ul>
<?php
if(isset($_SESSION["username"])){
    echo '<li style="float:right"><i class="fa-regular fa-user" style="color: #e67e22;cursor: pointer;"></i>'.$_SESSION["username"] . '</a></li>';
    echo '<li style="float:right"><a href="includes/logout.inc.php" class="nav-btn">Logout</a></li>';
    
}
else{
    echo '<a href="login.php">Login</a>';
}
?>
    </header>
    <!---Code for home page video slider-->
    <section class="home" id="HOME">
        <video class="slide active" src="Media/a_Cinematic_Fitness_Video...SONY_FX6(1080p).mp4" autoplay muted
            loop></video>
        <video class="slide"
            src="Media/Fitness_Cinematic_video___Gym_commercial___Cinematic_fitness_film___Fitness_commercial(1080p).mp4"
            autoplay muted loop></video>
        <video class="slide"
            src="Media/Fitness_promo_video__Gym_Promo_video_Gym_commercial_Cinematic_fitness_film_Gym_Motivation_Sony_a7III(1080p).mp4"
            autoplay muted loop></video>
        <video class="slide" src="Media/Cinematic_Fitness_Video__Featuring_DVTraining_(1080p).mp4" autoplay muted
            loop></video>
        <div class="content">
            <h1>BE FIT BE STRONGER</h1>
            <p>Unleash your potential at our cutting-edge fitness Center.Elevate your fitness journey.</p>
            <div class="top-btn">
                <a href="#EXPLORE" class="home-btn">EXPLORE MORE</a>&nbsp;&nbsp;
                <a href="createAccount.html" class="home-btn">BE A MEMBER</a>
            </div>
        </div>

<!---Code for social meadia icons-->
        <div class="media-icons">
            <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                    class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
            <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                    class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
            <a
                href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                    class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
            <a href="https://github.com/Shaini2003"><i class="fa-brands fa-square-github"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="slide-btn active"></div>
            <div class="slide-btn"></div>
            <div class="slide-btn"></div>
            <div class="slide-btn"></div>

        </div>

    </section>
<!---Code for aboutus-->
    <section id="ABOUTUS">
        <h2 class="heading">About <span>Us</span> </h2>
        <div class="card-container">
            <div class="card">
                <div class="section">
                    <i class="fa-solid fa-dumbbell"></i>
                    <h3>Dedicated Services</h3>
                    <p>Experience exceptional dedication and personalized services tailored to your unique needs.</p>
                </div>
            </div>
            <div class="card">
                <div class="section">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <h3>Qualified Instructors</h3>
                    <p>Train with confidence under the guidance of our highly skilled instructors.</p>
                </div>
            </div>
            <div class="card">
                <div class="section">
                    <i class="fa-solid fa-dna"></i>
                    <h3>Organic Proteins</h3>
                    <p>Elevate your goins with our premium selection of organic protein supplements.</p>
                </div>
            </div>
            <div class="card">
                <div class="section">
                    <i class="fa-solid fa-award"></i>
                    <h3>Award Programs</h3>
                    <p>Unlock rewards and recogntion through our exclusive award programs for memebers.</p>
                </div>
            </div>
        </div>

        <br><br><br><br><br>
<!---Code for special benefits-->
        <div class="home-content">
            <img src="Media/pexels-photo-416809.webp" class="Home-img">
            <div style="text-align: center;padding: 60px;">
                <h2 style="font-size: 40px;">FITNESS ALL ABOUT</h2>
                <h1 style="font-style: italic;">Make yourself stronger than your best excuses</h1>
                <div class="home-card">
                    <div class="section">
                        <i class="fa-solid fa-door-open"></i>
                        <h3>OPEN DOOR POLICY</h3>
                        <p>Our open-door policy ensures easy access to management,fastering transparency,communication
                            and a
                            supportive work environment.</p>
                    </div>
                </div><br>
                <div class="home-card">
                    <div class="section">
                        <i class="fa-solid fa-check"></i>
                        <h3>FULLY INSURED</h3>
                        <p>Rest assured,we are fully insured,providing you with peace of mind and protection for any
                            unforseen circumstances.</p>
                    </div>
                </div>
                <div class="home-card">
                    <div class="section">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <h3>PERSONAL TRAINER</h3>
                        <p>Our experienced personal trainers are dedicated to helping you achieve fitness goals through
                            personalized guidance and support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <center>
        <section class="about"id="EXPLORE">
            <img src="Media/about.webp" class="about-img">

            <div class="about-content">
                <h2 class="head">Why <span>Choose </span>Us?</h2>

                <p>● Our goal is to attract new members,provide information about services,promote class schedules,and
                    facilitate membership sign-ups and inquires.</p>
                <p>● Our Diverse membership base creates a friendly and supportive atmosphere,where you can make friends
                    and stay motivated</p>
                <p>● FitZone Fitness Center is more than just a gym. We are a family that's there to help you reach your
                    goals. The best way to get where you want to go is to have fun along the way - and it's always more
                    fun doing it alongside people that care</p>
                <p>● There's no sense in doing something you're not going to enjoy. It's so important that you really
                    enjoy the environment you're in because that's what will ultimately keep you consistent. Lifestyle
                    Fitness is like a loving second home!</p>

                <a href="classes.php" class="about-btn">Book a Class</a>
            </div>
        </section>
    </center>
<!--code for services-->
    <section class="services" id="SERVICES">
        <h2 class="heading">Our <span>Services</span> </h2>
        <div class="services-content">
            <div class="row">
                <img src="Media/fitness programs.webp" alt="Fitness programs">
                <h4>Wide Range of fitness programs</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
            <div class="row">
                <img src="Media/equipments.jpeg" alt="fitness equipments">
                <h4>State of the Art equipment</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
            <div class="row">
                <img src="Media/training sessions.webp" alt="training sessions">
                <h4>Personalized training Sessions</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
            <div class="row">
                <img src="Media/group classes.jpeg" alt="group classes">
                <h4>Group Classes</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
            <div class="row">
                <img src="Media/nutrition.webp" alt="nutrition counselling">
                <h4>Nutrition Counseling</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
            <div class="row">
                <img src="Media/general training.webp" alt="general training">
                <h4>General Training</h4>
                <center><a href="classes.html" class="list-btn">SEE MORE</a></center>
            </div>
        </div>
    </section>
    <!---Code for schedule-->
    <div class="schedule-container">
        <h1 class="heading">Our <span>Schedule</span> </h1>
        <h2 style="color:#2980b9;font-weight: 900;font-size: 20px;">Check Our Classes Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th><i class="fa-solid fa-dumbbell"></i></th>
                    <th>MONDAY</th>
                    <th>TUESDAY</th>
                    <th>WEDNESDAY</th>
                    <th>THURSDAY</th>
                    <th>FRIDAY</th>
                    <th>SATURDAY</th>
                    <th>View All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: bolder;">MAT PILATES</td>
                    <td></td>
                    <td>Jenny Wilson<br>9:00 AM - 11:00 AM</td>
                    <td></td>
                    <td>Jenny Wilson<br>9:00 AM - 11:00 AM</td>
                    <td></td>
                    <td>Jenny Wilson<br>9:00 AM - 11:00 AM</td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>
                </tr>
                <tr>
                    <td style="font-weight: bolder;">CARDIO BURN</td>
                    <td>Albert Flores<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Albert Flores<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Albert Flores<br>9.00 AM - 11.00 AM</td>
                    <td>Albert Flores<br>9.00 AM - 11.00 AM</td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>
                </tr>
                <tr>
                    <td style="font-weight: bolder;">CROSS FIT</td>
                    <td></td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>
                </tr>
                <tr>
                    <td style="font-weight: bolder;">YOGA</td>
                    <td>Annette Black<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Annette Black<br>9.00 AM - 11.00 AM</td>
                    <td>Annette Black<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Annette Black<br>9.00 AM - 11.00 AM</td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>

                </tr>
                <tr>
                    <td style="font-weight: bolder;">BODY BUID</td>
                    <td></td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td>Floyd Miles<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>

                </tr>
                <tr>
                    <td style="font-weight: bolder;">CARDIO</td>
                    <td>Jacob Jones<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Jacob Jones<br>9.00 AM - 11.00 AM</td>
                    <td></td>
                    <td>Jacob Jones<br>9.00 AM - 11.00 AM</td>
                    <td>Jacob Jones<br>9.00 AM - 11.00 AM</td>
                    <td><a href="classes.php" class="join-btn">Join Now</a></td>
                </tr>
            </tbody>
        </table>
    </div>
<!---Create banner for special promotions-->
    <div class="banner">
        <div class="content">
            <h2>MEET THE TRAINERS</h2>
            <h1>BOOK CLASS</h1>
            <p>Know About Special Offer And New Training</p><br>
            <a href="classes.php" class="banner-btn">Join Now</a>
        </div>
        <div class="content">
            <h2>COME TRAIN WITH US</h2>
            <h1>30% OFF</h1>
            <p>This Offer Is For A Limited Time Only</p><br>
            <a href="classes.php" class="banner-btn">Join Now</a>
        </div>
    </div>
<!---Code for pricing packages-->
    <section class="PRICING" id="PRICING">
        <h4 class="heading" style="font-size: 40px;">Our <span>Plan</span> </h4>
        <h1 style="font-size: 20px;">CHOOSE YOUR PRICING & MEMBERSHIP PLAN</h1><br>
        <div class="pricing-content">
            <div class="rows">
                <h3>Daily Limited Time</h3>
                <h1>RS.1000</h1>
                <h2>SINGLE CLASS</h2>
                <ul>
                    <li>● Free riding</li>
                    <li>● Unlimited tools</li>
                    <li>● Personal trainer</li>
                    <li>● Weight loss classes</li>
                    <li>● Months in the mouth</li>
                    <li>● There is no time limit</li>
                </ul>
                <center><a href="payment.php" class="member-btn">JOIN NOW</a></center>
            </div>

            <div class="rows">
                <h3>06 Month Unlimited</h3>
                <h1>RS.50000</h1>
                <h2>SINGLE CLASS</h2>
                <ul>
                    <li>● Free riding</li>
                    <li>● Unlimited tools</li>
                    <li>● Personal trainer</li>
                    <li>● Weight loss classes</li>
                    <li>● Months in the mouth</li>
                    <li>● There is no time limit</li>
                </ul>
                <center><a href="payment.php" class="member-btn">JOIN NOW</a></center>
            </div>
            <div class="rows">
                <h3>12 Month unlimited</h3>
                <h1>RS.100000</h1>
                <h2>SINGLE CLASS</h2>
                <ul>
                    <li>● Free riding</li>
                    <li>● Unlimited tools</li>
                    <li>● Personal trainer</li>
                    <li>● Weight loss classes</li>
                    <li>● Months in the mouth</li>
                    <li>● There is no time limit</li>
                </ul>
                <center><a href="payment.php" class="member-btn">JOIN NOW</a></center>
            </div>
<!---Code for membership plans-->
            <div class="rows">
                <h3>Platinum Membership</h3>
                <img src="Media/medal-solid.svg" width="30px" height="30px" text-align="center">
                <br><br>
                <h2>Gents-Annual Rs.65000</h2>
                <h2>Ladies-Annual Rs.55000</h2>
                <h2>Couple-Annual Rs.85000</h2><br><br>

                <center><a href="" class="member-btn">JOIN NOW</a></center>
            </div>
            <div class="rows">
                <h3>Gold Membership</h3>
                <img src="Media/medal-solid.svg" width="30px" height="30px" text-align="center"><br>
                <br><br>
                <h2>Gents-Annual Rs.48000</h2>
                <h2>Ladies-Annual Rs.48000</h2>
                <br><br><br>

                <center><a href="" class="member-btn">JOIN NOW</a></center>
            </div>
            <div class="rows">
                <h3>Silver Membership</h3>
                <img src="Media/medal-solid.svg" width="30px" height="30px" text-align="center">
                <br><br>
                <h2>Individual-6 months Rs.45000</h2>
                <h2>Individual-3 months Rs.35000</h2>
                <h2>Individual-1 month Rs.15000</h2><br><br>

                <center><a href="" class="member-btn">JOIN NOW</a></center>
            </div>
        </div>
    </section>
    <!---Code for trainers details-->
    <section class="TRAINERS" id="TRAINERS">
        <h4 class="heading" style="font-size: 40px;">Our <span>Team</span> </h4>
        <h1 style="font-size: 40px;font-weight: 500;color: white;">TRAIN WITH EXPERTS</h1>
        <div class="team-members">
            <div class="row">
                <img src="Media/woman trainer.jpg">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Kayla Itsines</h3>
                <h4>Personal Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Kayla Itsines is 4 million followers
                    strong, and in my opinion, is the ‘Godfather’ of personal trainers on Instagram. She has built a
                    fitness empire, and quite literally an army (“#Kayla’s Army”) from scratch. She started out posting
                    “before and after” pictures of her personal clients, and quickly garnered attention due to the
                    dramatic results.</P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <img src="Media/trainer 1.avif">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Albert Flores</h3>
                <h4>Cardio Burn Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Albert Flores is the founder of Fitzone
                    Fitness, which is a highly successful fitness startup that began in UK. Fitzone Fitness cardio
                    training studios are incredibly popular across the globe, and are the home of many successful PTs.
                </P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <img src="Media/trainer 2.avif">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Floyd Miles</h3>
                <h4>Cross Fit Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Floyd Miles is the complete coaching
                    package — affiliate owner, CF-L3 Trainer, competitive Games athlete, and coach to 2021 CrossFit
                    Games champion Justin Medeiros. On the surface, it’s easy to see Floyd Miles’s accomplishment with
                    his star athlete as the pinnacle of what has defined him as a coach; however, a glimpse into
                    CrossFit Fort Vancouver and you quickly realize that there’s more to the story.</P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <img src="Media/trainer 3.jpg">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Jacob Jones</h3>
                <h4>Cardio Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Jacob Jones became The Rock’s personal
                    trainer in 2013. If that doesn’t qualify him to be one of the most famous personal trainers, then we
                    don’t know what does!If you are an avid follower of social media, then you’ve more than likely come
                    across any number of meme comparisons, showing how The Rock looked before and after he was trained
                    by Jacob Jones.</P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <img src="Media/trainer 5.jpg">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Jenny Wilson</h3>
                <h4>Hath Yoga Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Jenny Wilson has devoted her life to
                    coaching. And while he’s spent more than 18 years pursuing knowledge and learning from experts, he
                    said the one thing all great coaches share is their ability to connect with people. “For me, master
                    coaching is being able to apply science to the art of human connection,” Leydon said.</P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <img src="Media/trainer 4.avif">
                <h3 style="font-size: 20px;color: #2980b9;font-weight: 900;">Annette Black</h3>
                <h4>Mat Pilates Trainer</h4>
                <P style="font-size: 13px;font-weight: bold;text-align: center;">Annette Black considered one of
                    greatest trainers of all time is a respected trainer, author and professor of exercise science who
                    specialises in the science of bodybuilding and nutritionso he's often referred to as the gym trainer
                    for men. He has spent over 30 years researching in the area of human performance, exercise
                    physiology and muscle hypertroph.,</P>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i
                            class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i
                            class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
                    <a
                        href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </section>
<!---Code for blog post section-->
    <section class="blog-posts" id="BLOG">
        <h2 class="heading">Our <span>Blog</span> </h2>
        <div class="card-container">
            <div class="card">
                <div class="section">
                    <img src="Media/workout.webp">
                    <div class="blog-i">
                        <p><i class="fa-solid fa-user"></i> By: Cameron Wiliamson</p>
                    </div><br>
                    <h3>Workout Routings</h3>
                    <p>Creating effective and engaging gym workout routines is a valuable skill for fitness enthusiasts
                        and aspiring fitness bloggers. By sharing well-crafted routines, you can inspire your audience,
                        provide practical guidance, and establish yourself as a trusted authority in the fitness
                        community.</p>
                    <br>

                    <i class="fa-solid fa-heart"></i> 90 <br>
                    <a href="#" style="color:#2980b9;">Read More <i class="fa-solid fa-arrow-right"></i></a><br> By 12
                    June 2024
                </div>


            </div>

            <div class="card">
                <div class="section">
                    <img src="Media/meal.jpeg">
                    <div class="blog-i">
                        <p><i class="fa-solid fa-user"></i> By: Annette Black</p>
                    </div><br>
                    <h3>Meal Plans</h3>
                    <p style="text-align: justify;"><strong>● Portion control:</strong> Be mindful of portion sizes to
                        avoid overeating.<br>
                        <strong>● Variety:</strong> Incorporate a variety of foods from all food groups to ensure you
                        get essential nutrients.<br>
                        <strong>● Nutrient-dense foods:</strong> Choose foods that are high in nutrients and low in
                        calories.<br>
                        <strong>● Cook at home:</strong> Preparing meals at home allows you to control ingredients and
                        portion sizes.<br>
                        <strong>● Meal prep: </strong>Cook meals in advance to save time and avoid unhealthy food
                        choices.
                    </p>
                    <br>

                    <i class="fa-solid fa-heart"></i> 100 <br>
                    <a href="#" style="color:#2980b9;">Read More <i class="fa-solid fa-arrow-right"></i></a><br> By 08
                    September 2024
                </div>
            </div>
            <div class="card">
                <div class="section">
                    <img src="Media/healthy receips.jpeg">
                    <div class="blog-i">
                        <p><i class="fa-solid fa-user"></i> By: Floyd Miles</p>
                    </div><br>
                    <h3>Healthy Receips</h3>
                    <p style="text-align: justify;"> ● Greek Yogurt Parfait<br>
                        ● Energy Balls <br>
                        ● Fruit Smoothie<br>
                        ● Chicken Salad Sandwich<br>
                        ● Salmon with Roasted Vegetables<br>
                        ● Lentil Soup<br>

                        ● Oatmeal with Toppings<br>
                        ● Avocado Toast<br>
                        ● Chia Seed Pudding<br>

                        ● Hard-boiled eggs<br>
                        ● Apple slices with peanut butter<br>
                        ● Hummus and vegetable sticks<br>
                        ● Greek yogurt with honey and nuts</p>
                    <br>

                    <i class="fa-solid fa-heart"></i> 80 <br>
                    <a href="#" style="color:#2980b9;">Read More <i class="fa-solid fa-arrow-right"></i></a><br> By 18
                    May 2024
                </div>
            </div>
            <div class="card">
                <div class="section">
                    <img src="Media/stories.webp">
                    <div class="blog-i">
                        <p><i class="fa-solid fa-user"></i> By: Cameron Wiliamson</p>
                    </div><br>
                    <h3>Success Stories</h3>
                    <p style="text-align: justify;">● Weight loss journey: Share the story of someone who has
                        successfully lost weight and transformed their life.<br>
                        ● Rehabilitation and recovery: Highlight the journey of someone who has overcome an injury or
                        illness through exercise.<br>
                        ● Mental health improvement: Discuss how exercise has helped someone manage stress, anxiety, or
                        depression.<br>

                        ● Career advancements: Tell the story of someone who has achieved career success due to their
                        improved fitness and energy levels.<br>
                        ● Improved relationships: Share how exercise has helped someone strengthen their relationships
                        with family and friends.<br>
                        ● Increased confidence: Discuss how improved fitness has boosted someone's self-esteem and
                        confidence.</p>
                    <br>

                    <i class="fa-solid fa-heart"></i> 110 <br>
                    <a href="#" style="color:#2980b9;">Read More <i class="fa-solid fa-arrow-right"></i></a><br> By 26
                    March 2024
                </div>
            </div>
        </div>
    </section><br><br>
    <!---Create a fitness gallery-->
    <h2 class="heading">Fitness <span>Gallery</span> </h2>
    <div class="gallery">
        <img src="Media/image1.webp">
        <img src="Media/image2.jpeg">
        <img src="Media/image3.webp">
        <img src="Media/image4.webp">
        <img src="Media/image5.webp">
        <img src="Media/image6.jpeg">
        <img src="Media/fitness equipments.webp">
        <img src="Media/image7.jpeg">
        <img src="Media/image 8.webp">
    </div>
    <center>
        <!---Create a swipe review section-->
        <section class="sec" style="align-items:center;text-align: center;"id="REVIEWS">

            <div class="swiper mySwiper contain">
                <h2 style="font-size: 40px;color: #2980b9;font-weight: 700;">Customer Reviews</h2>
                <div class="swiper-wrapper contentt">
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer 1.jpeg" alt="image" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Shaini Tharushika</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"The gym has a great community feel. Everyone is friendly and supportive, and I always feel welcome." </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer2.jpg" alt="" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Tharushi Menulya</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"I've taken several personal training sessions and I've seen amazing results. My trainer is very knowledgeable and always pushes me to do my best."</p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer 3.avif" alt="" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Dinitha Hansaja</span>
                             
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"I love the fact that the gym has a pool and sauna. It's the perfect place to relax after a workout." </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer4.jpg" alt="" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Lithumsa Minduni</span>
                               
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"The gym has a wide variety of equipment, so I never have to wait for a machine. The free weights area is well-maintained, and the cardio machines are always clean." </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer5.jpg" alt="" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="name-profession">
                                <span class="name">Chaminda Sudusinghe</span>
                               
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"This gym has everything I need to reach my fitness goals. The classes are challenging, the trainers are knowledgeable, and the facilities are top-notch." </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide cardd">
                        <div class="box1"></div>
                        <div class="cardd-content">
                            <div class="imagee">
                                <img src="Media/customer6.jpg" alt="" />
                            </div>
                            <div class="media-iconn">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                
                            </div>
                            <div class="name-profession">
                                <span class="name">Shanudi Vihansa</span>
                             
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="aboutt">
                                <p style="font-size: 15px;">"I've been a member here for years and I absolutely love it! The staff is friendly, the equipment is clean, and the atmosphere is great."</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </section>
    </center>
    <!---Create a add reviews section-->
    <center>
        <a href="review.html" class="review-button">Add a review here</a><br><br><br>
    </center><br>
    <!---Create a appoinment form-->
    <div class="submit-banner">
        <form class="submit-content">
            <center>
            <h2 style="font-size: 20px;">Sign Up for email and</h2>
            <h1 style="font-size: 40px;">Get in on all the action</h1>
            <input type="text" class="dash-input"  placeholder="Enter Your Email"><br><br> 
            <button class="submit-btn">SUBMIT</button></center>
        </form>
    
    </div>
    <!---Create a footer-->
    <footer>
        <div class="footer-container">
            
            <div class="useful-links">
                <h3 style="font-size: 19px;font-weight: 600;">Useful Link</h3><br>
                <ul>
                    <li><a href="#ABOUTUS">About</a></li>
                    <li><a href="#SERVICES">Services</a></li>
                    <li><a href="#BLOG">Blog</a></li>
                    <li><a href="#PRICING">Price</a></li>
                </ul>
            </div>
            <div class="support">
                <h3 style="font-size: 19px;font-weight: 600;">Support</h3><br>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="account.html">Account</a></li>
                    <li><a href="https://www.youtube.com/@shainitharushika4558">Subscribe</a></li>
                    <li><a href="#REVIEWS">Reviews</a></li>
                </ul>
            </div>
            <div class="contact">
                <h3 style="font-size: 19px;font-weight: 600;">Contact</h3><br>
                <ul>
                    <li>Phone:  0713514360</li>
                    <li>Phone:  0705514360</li>
                    <li>Email:  shinitharushika2020@gmail.com</li>
                    <li>Address:  100 Main St, Kurunagala</li>
                </ul>
                
            </div>
            <div class="icons"><br>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100090613084158&sfnsn=wa&mibextid=RUbZ1f"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://github.com/Shaini2003"><i class="fa-brands fa-square-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/shaini-sudusinghe-b6354331b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.instagram.com/shaini_tharushika?utm_source=qr&igsh=NmRmdDhncjZmOGU="><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 The Fitzone Fitness Center. All rights reserved.</p>
          </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>