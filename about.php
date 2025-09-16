<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include("include/config.php");

// Calculate years of exp
$started = new DateTime("2023-01-01");  //Date i started coding
$now = new DateTime(date("Y-m-d"));     //Current Date
$interval= $now->diff($started);        //Difference

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Amevye - About</title>

<?php include("include/metaTags.php");?>

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<div id="page-content">
<!-- header part start -->
<?php include("include/header.php");?>
<!-- header part end -->



<!-- main area part start -->
<main>

<section class="content-box-area mt-4">
<div class="container">
<div class="row g-4">

<?php include("include/sidebar.php");?>

<div class="col-xl-8">
<div class="card content-box-card">
<div class="card-body">
<div class="top-info">
<div class="text" style="text-align:justify; word-spacing:1px;">
<h1 class="main-title"><span style="font-size: 25px; color:#fff; font-weight:100;">Hi, this is</span> <span>Amevye Matthew</span></h1>

<p>An innovative problem solver with a
passion for creating secure &amp; scalable solutions, leveraging cutting edge technologies to craft
intuitive user experiences and robust backend systems. Let's build the future of tech together!
</p><br>
<p >
Despite my Degree in Veterinary Diagnostic Imaging
from FCAH&PT Vom, i've successfully transitioned into the tech industry through self directed
learning, hands on experiences, internship and certifications.
</p>
<p class="sub-title muted aos-init" data-aos="fade-left">My expertise in cybersecurity/ethical hacking ensures that every
solution i deliver is not just functional, but also fortified against potential threats. I approach each
project with enthusiasm, whether it's developing web applications, creating software solutions, pentesting or
implementing security measures.
</p><br>
<p class="sub-title muted aos-init" data-aos="fade-left">What sets me apart is my blend of technical
proficiency and creative problem solving. I don't just write code, i craft experiences, test-run by checking for posible vulnerabilities as an
opportunity to explore new possibilities and deliver solutions that exceed expectations.
</p>
</p><br>
<p class="sub-title muted aos-init" data-aos="fade-left">Right now, i'm deepening my skills in cybersecurity especially penetration testing with secure coding practices while continuing to build and maintain full-stack projects.
</p><br>
<p class="sub-title muted aos-init" data-aos="fade-left">If you're seeking a dedicated professional to
transform complex challenges into secure, efficient, and innovative solutions, let's connect and create
impactful technology together.</p>
</div>

<div class="available-btn">
<a href="assets/pdf/TechCv.pdf" target="_blank"> <span><i class="fa fa-download" download></i> Download Cv</span> </a>
</div>

</div>
<div class="counter-area">
<div class="counter">
<div class="counter-item">
<h3 class="number"><?= $interval->y;?>+</h3>
<p class="subtitle">Year of Experience</p>
</div>
<div class="counter-item">
<h3 class="number">9+</h3>
<p class="subtitle">Project Completed
</p>
</div>
<div class="counter-item">
<h3 class="number">11+</h3>
<p class="subtitle">Happy Client
</p>
</div>
</div>
<div class="circle-area">
<div class="circle-text">
<img class="circle-image" src="assets/img/about-us/circle-text.svg" alt="circle-text">
<img class="circle-image circle-image-light d-none"
src="assets/img/about-us/circle-text-light.svg" alt="circle-text">
<span class="arrow-down">
<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M20 5V35" stroke="white" stroke-width="2" stroke-linecap="round"
stroke-linejoin="round" />
<path d="M15 30L20 35L25 30" stroke="white" stroke-width="2" stroke-linecap="round"
stroke-linejoin="round" />
</svg>
</span>
</div>
</div>
</div>

            <!-- Certifications section -->
<div class="awards-recognitions">
<h2 class="main-common-title">Certifications</h2>
<div class="awards-recognitions-main">

<ul class="list-unstyled">
        <?php 
        $stmt = $pdo->prepare("SELECT * FROM certs ORDER BY id DESC");
        $stmt->execute();
        $certs = $stmt->fetchAll();
        foreach($certs as $cert){
        $img = !empty($cert["logo"]) ? "assets/img/images/".$cert["logo"] : "assets/img/icons/null.png";
        ?>
<li>
<a href="<?php echo htmlspecialchars($cert["viewLink"]);?>" class="d-block w-100" target="_blank">
<div class="awards-item">
<div class="award-name">
<div class="icon">
<img src="<?php echo $img;?>" alt="Academic award">
</div>
<div class="text">
<h4 class="title"><?php echo htmlspecialchars($cert["title"]);?></h4>
<p class="year"><?php echo htmlspecialchars($cert["startDate"] . "-". $cert["endDate"])?></p></p>
</div>
</div>
<div class="winner-tag">
<h4 class="title">
<svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
stroke-linecap="round" stroke-linejoin="round" />
<path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
<?php echo htmlspecialchars($cert["role"]);?>
</h4>
</div>
<div class="project-btn">
<span>
<?php echo htmlspecialchars($cert["action"]);?>
<svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
stroke-linejoin="round" />
<path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
stroke-linejoin="round" />
</svg>
</span>
</div>
</div>
</a>
<?php } ?>
</li>
</ul>


<div class="client-feedback">
<h2 class="main-common-title">Trusted By 11+ Clients</h2>
<div class="row client-feedback-slider">
    
        <?php
        $stmt = $pdo->prepare("SELECT * FROM testimonials");
        $stmt->execute();
        $testimonials = $stmt->fetchAll();
        foreach($testimonials as $testimonial){

        $client = htmlspecialchars(($testimonial["client"]));
        $clientInfo = explode("-", $client);
        $cName = ucfirst($clientInfo[0]);
        $cBiz = ucfirst(end($clientInfo));

        $testImg = !empty($testimonial["img"]) ? "assets/img/images/".$testimonial["img"] : "assets/img/icons/null.png"; 
        ?>

<div class="col-lg-6">
<div class="feedback-item">
<div class="feedback-top-info">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<div>
<a href="<?= htmlspecialchars($testimonial["link"]);?>" target="_blank">
<img  src="<?= $testImg;?>" alt="<?= $cName;?>" style="object-fit:contain; width:55px; height:55px; border-radius:50%;">
</a>
</div>
</div>
<div class="details">
<p style="margin-top: -16px; padding-bottom:13px; border-bottom:1px solid rgb(53, 78, 65);">
<?= htmlspecialchars($testimonial["content"]);?>
</p>
</div>
<div class="designation" style="margin-top: -20px;">
<p><span><?= $cName;?></span> - <?= $cBiz;?></p>
</div>
</div>
</div>
<?php }; ?>

</div>
</div>

<div class="working-with-area">
<h3 class="main-common-title">Brands ✨ i 've worked with worldwide</h3>
<div class="working-with-main">
<div class="items">
<img src="assets/img/icons/kali.png" alt="notion">
</div>
<div class="items">
<img src="assets/img/icons/notion.svg" alt="webflow">
</div>
<div class="items">
<img src="assets/img/icons/webflow.svg" alt="mico">
</div>
<div class="items">
<img src="assets/img/icons/dribbble.svg" alt="framer">
</div>
<div class="items">
<img src="assets/img/icons/xd.svg" alt="zeplin">
</div>
<div class="items">
<img src="assets/img/icons/figma.svg" alt="figma">
</div>
<div class="items">
<img src="assets/img/icons/google.svg" alt="notion">
</div>
<div class="items">
<img src="assets/img/icons/meta.svg" alt="webflow">
</div>
</div>
</div>


<div class="work-together-slider">
<div class="slider-main d-flex gap-4 align-items-center">
<div class="slider-item">
<a href="contact.php">Let's 👋 Work Together</a>
<a href="contact.php">Let's 👋 Work Together</a>
</div>
<div class="slider-item">
<a href="contact.php">Let's 👋 Work Together</a>
<a href="contact.php">Let's 👋 Work Together</a>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>

<!-- background shape area start -->
<div class="background-shapes">
<div class="shape-1 common-shape">
<img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
</div>
<div class="shape-2 common-shape">
<img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
</div>
<div class="threed-shape-1 move-with-cursor" data-value="1">
<img src="assets/img/bg/object-3d-1.png" alt="object-3d-1">
</div>
<div class="threed-shape-2 move-with-cursor" data-value="1">
<img src="assets/img/bg/object-3d-2.png" alt="object-3d-2">
</div>
</div>
<!-- background shape area end -->
</main>
<!-- main area part end -->

<!-- footer part start -->
<?php include("include/footer.php");?>
<!-- footer part end -->


</div>
<!-- JS here -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/script.js"></script>
</body>


</html>