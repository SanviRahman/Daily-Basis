<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>


<body>



    <div class="hero">

        <div class="navs  " style="background-color:#3a017a" style="position:fixed" style="width: 100%"
            style="margin-right: 10px;">
            <img src="../authentication/images/Daily-Basis.png" class="logo">
            <ul class="mt-3">
                <li><a href="../Home/index.html" style="color:#ffffff">Home</a></li>
                <li><a href="../Weather/index.html" style="color:#ffffff">Weather</a></li>
                <li><a href="../NoteBook/index.html" style="color:#ffffff">NoteBook</a></li>
                <li><a href="../Daily-Quotes/quotes.html" style="color:#ffffff">Daily-Quotes</a></li>
                <li><a href="../Bmi/bmi.html" style="color:#ffffff">BMI</a></li>
            </ul>

        </div>

    </div>

    <section class="hero-section">
        <div class="hero">
            <h2 class="title">Your Daily Planner</h2>
            <p>
            Daily Basis" is a comprehensive web platform designed to streamline users' daily routines by offering a multifaceted experience. The website serves as a centralized hub for individuals to maintain notes, track their Body Mass Index (BMI) using a user-friendly calculator, access valuable health tips, and stay updated with current weather forecasts.
            </p>
            <div class="buttons">

                <a href="#" class="learn">Learn More</a>
            </div>
        </div>
        <div class="img">
            <img src="https://i.ibb.co/t8bHgp1/vecteezy-time-management-and-planning-19876057-740-removebg-preview.png"
                alt="hero image" />
        </div>
    </section>


    <div>

        <!--  -->

        <h4 style="text-align: center; margin-top: 50px; margin-bottom: 50px; font-size: 20px; font-style: underline">
            Daily Work Out</h4>
        <div class="card-container">


            <div class=" card">
                <div class="gallery">
                    <a target="_blank" href="https://www.yogabasics.com">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/yoga-for-cyclists-1553886978.png?crop=0.667610953729934xw:1xh;center,top&resize=1200:*"
                            alt="Cinque Terre" width="600" height="400">
                    </a>
                    <p
                        style="text-align: center; margin-bottom: 20px; margin-top: 20px; font-size: 20px; font-weight: bold;">
                        YOGA</p>
                    <p style="color: gray; padding: 10px;">As cyclists, we strive for more endurance, speed, and power.
                        But what we tend to neglect: strength, mobility, and deep breathing practices. That’s where yoga
                        for cyclists comes into play.</p>

                </div>
            </div>

            <div class="card">
                <div class="gallery">
                    <a target="_blank" href="https://www.beachbodyondemand.com/blog/static-lunge">
                        <img src="https://bod-blog-assets.prod.cd.beachbodyondemand.com/bod-blog/wp-content/uploads/2022/10/26150733/static-lunge-960-715x358.png"
                            alt="Cinque Terre" width="600" height="400">
                    </a>
                    <p
                        style="text-align: center; margin-bottom: 20px; margin-top: 20px; font-size: 20px; font-weight: bold;">
                        lunges</p>
                    <p style="color: gray; padding: 10px;">Lunges beef up any workout routine with many variations —
                        side lunges, forward lunges, jumping lunges, reverse lunges, and curtsy lunges..</p>

                </div>
            </div>

            <div class="card">
                <div class="gallery">
                    <a target="_blank" href="https://www.beachbodyondemand.com/blog/medicine-ball-push-ups">
                        <img src="https://bod-blog-assets.prod.cd.beachbodyondemand.com/bod-blog/wp-content/uploads/2022/08/18132617/medicine-ball-push-ups-960-715x358.png"
                            alt="Cinque Terre" width="600" height="400">
                    </a>
                    <p
                        style="text-align: center; margin-bottom: 20px; margin-top: 20px; font-size: 20px; font-weight: bold;">
                        Pushups</p>
                    <p style="color: gray; padding: 10px;">If you only use medicine balls for throws, slams, and
                        weighted crunches, it may be time to expand your thinking. Why not add them to push-ups?</p>

                </div>
            </div>

            <div class="card">
                <div class="gallery">
                    <a target="_blank" href="https://www.beachbodyondemand.com/blog/frog-squats">
                        <img src="https://bod-blog-assets.prod.cd.beachbodyondemand.com/bod-blog/wp-content/uploads/2022/09/08134537/frog-squat-960-715x358.png"
                            alt="Cinque Terre" width="600" height="400">
                    </a>
                    <p
                        style="text-align: center; margin-bottom: 20px; margin-top: 20px; font-size: 20px; font-weight: bold;">
                        Squats</p>
                    <p style="color: gray; padding: 10px;">As cyclists, we strive for more endurance, speed, and power.
                        But what we tend to neglect: strength, mobility, and deep breathing practices. That’s where yoga
                        for cyclists comes into play.</p>

                </div>
            </div>

        </div>

        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <a target="_blank" href="https://www.beachbodyondemand.com/">
                <button
                    style="padding: 10px 15px 10px 15px; border-radius: 10px; font-size: 15px; font-weight: bold; background: #8d4ed6; outline: none; border: none; color: white;">More..</button>
            </a>
        </div>

        <!--  -->



        <!--  -->
        <div class="heros-sections">
            <h2 style="text-align: center; margin-bottom: 60px; color: green;">5 TIPS FOR MAINTAINING A HEALTHY
                LIFESTYLE AND BODY WEIGHT</h2>
            <button class="accordion">1. Measure and Watch Your Weight</button>
            <div class="panel">
                <p style="margin: 20px;">Keeping track of your body weight on a daily or weekly basis will help you see
                    what
                    you’re losing and/or what
                    you’re gaining.</p>
            </div>

            <button class="accordion">2. Limit Unhealthy Foods and Eat Healthy Meals</button>
            <div class="panel">
                <p style="margin: 20px; line-height: 28px;">
                    Do not forget to eat breakfast and choose a nutritious meal with more protein and fiber and less
                    fat,
                    sugar, and
                    calories. For more information on weight-control foods and dietary recommendations, please check the
                    following
                    website: <span
                        style="color: blue;">www.hsph.harvard.edu/obesity-prevention-source/obesity-causes/diet-and-weight/</span>.
                </p>
            </div>

            <button class="accordion">3. Take Multivitamin Supplements </button>
            <div class="panel">
                <p style="margin: 20px; line-height: 28px;">To make sure you have sufficient levels of nutrients, taking
                    a
                    daily multivitamin supplement is a good idea,
                    especially when you do not have a variety of vegetables and fruits at home. Many micronutrients are
                    vital to your
                    immune system, including vitamins A, B6, B12, C, D, and E, as well as zinc, iron, copper, selenium,
                    and
                    magnesium.
                   </p>
            </div>
            <button class="accordion">4. Drink Water and Stay Hydrated, and Limit Sugared Beverages </button>
            <div class="panel">
                <p style="margin: 20px; line-height: 28px;">Drink water regularly to stay healthy, but there is NO
                    evidence
                    that drinking water frequently (e.g. every 15
                    minutes) can help prevent any viral infection. For more information on drinking water and
                    coronavirus,
                    please
                    check the following EPA <span style="color: blue;">website:
                        www.epa.gov/coronavirus/coronavirus-and-drinking-water-and-wastewater</span></p>
            </div>

            <button class="accordion">5. Get Enough Good Sleep </button>
            <div class="panel">
                <p style="margin: 20px; line-height: 28px;">There is a very strong connection between sleep quality and
                    quantity and your immune system. You can keep your
                    immune system functioning properly by getting seven to eight hours of sleep each night. For more
                    information,
                    please check the CDC website: <span style="color: blue;">www.cdc.gov/sleep/index.html</span></p>
            </div>
        </div>



        <div class="Footer">
            <p align="center"><br>This site is beta version<br>Daily-Basis reserves the right to change any of the
                information at any given time<br>All rights reserved © Daily-Basis 2023 </p>
        </div>
    </div>




    <script src="../Home/home.js"></script>
</body>

</html>