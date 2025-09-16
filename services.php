<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include("include/config.php");

    $stmt = $pdo->prepare("SELECT * FROM testimonials");
    $stmt->execute();
    $testimonials = $stmt->fetchAll();
    foreach($testimonials as $testimonial){
    $img = !empty($testimonial["img"]) ? "assets/img/images/".$testimonial["img"] : "assets/img/icons/null.png"; }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Amevye - Services</title>

<?php include("include/metaTags.php"); ?>

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
<div class="text" style="text-align:justify;">
<h1 class="main-title">Services i <span>Offer</span></h1>
<p>I will turn your ideas and desires into a unique project that inspires and engages every </b> need!</p><br>
<p><span>CyberSecurity Solutions, Pentesting, Database Design &amp; Management, Web Development and API Integrations.</span>
</p>
</div>

<div class="available-btn">
<span><i class="fas fa-circle"></i> Available For Hire</span>
</div>

</div>


<div class="services">

<div class="row g-4">
    <?php 
        $stmt = $pdo->prepare("SELECT * FROM service");
        $stmt->execute();
        $services = $stmt->fetchAll();
        foreach($services as $service){
        $serviceImg = !empty($service["logo"]) ? "assets/img/icons/".$service["logo"]:"assets/img/icons/null.png";
    ?>
<div class="col-md-3 col-sm-6 col-6">
<div class="services-item text-center">
<div class="image">
<img src="<?= $serviceImg;?>" alt="<?php echo htmlspecialchars($service["service"]);?>">
</div>
<div class="text">
<h3 class="title"><?php echo htmlspecialchars($service["service"]);?></h3>
</div>
</div>
</div>
    <?php }; ?>
</div>

<div class="block-image">
    <?php 
        $stmt = $pdo->prepare("SELECT image FROM blog ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $blog = $stmt->fetch();

        $blogImg = !empty($blog["image"]) ? "assets/img/blog/".$blog["image"] : "assets/img/icons/null.png";
    ?>
<img src="<?= $blogImg;?>" alt="blog-img-1" class="img-fluid w-100"> 
</div>
</div>


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

        $testImg = !empty($testimonial["img"]) ? "assets/img/images/".$testimonial["img"] : "assets/img/icons/null.png"; ?>

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
<a href="<?= htmlspecialchars($cert["viewLink"]);?>" class="d-block w-100" target="_blank">
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

<div class="frequently-asked-questions">
<h2 class="main-common-title">Frequently Asked Questions</h2>
<div class="frequently-asked-questions-main">
<div class="accordion" id="accordionExample">

<div class="accordion-item">
<h4 class="accordion-header" id="headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Who are you and what do you do?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3">I'm a cybersecurity analyst, pentester and currently transitioning into acquiring my compTIA Security+, OSCP CEH, CISSP, CISM certifications. I'm also a passionate full-stack developer with experience in both front-end and back-end technologies. I specialize in building responsive web applications, managing databases, integrating APIs, and ensuring smooth users' experience. 
</p>
</div>
</div>
</div>

<div class="accordion-item">
<h4 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
What technologies do you work with?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3"><b>-Cybersecurity:</b> Kali Linux, Wireshark, Burp Suite, Metasploit, Nmap etc.</p>
<p><b>-Programming Languages:</b> PHP, JavaScript, Python</p>
<p><b>-Database services:</b> MySQL </p>
<p><b>-Front-end Technologies:</b> HTML, CSS, JavaScript, React, Tailwind, Bootstrap, RESTful APIs</p>
<p><b>-Tools & Version Control:</b> Visual Studio Code, Git, GitHub, Vercel</p>
</div>
</div>
</div>

<div class="accordion-item">
<h4 class="accordion-header" id="headingThree">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Are you open to freelance work or job opportunities?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3">Yes! I’m actively open to new opportunities whether it’s freelance projects, part-time roles, or full-time employment in development or cybersecurity. Feel free to <a href="mailto:amevyematthew@gmail.com">contact me.</a>
</p>
</div>
</div>
</div>
<div class="accordion-item">
<h4 class="accordion-header" id="headingFour">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
Can I see examples of your work?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3">Absolutely. Please visit my <a href="blog.php">Blog</a> section to explore the applications i've built, including live demos and source code links.
</p>
</div>
</div>
</div>

<div class="accordion-item">
<h4 class="accordion-header" id="headingFive">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
What makes you different from other developers?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3">I bring a unique blend of technical expertise and a security-first mindset. My background in full-stack development combined with a growing focus on cybersecurity allows me to build not just functional but also secure applications.
</p>
</div>
</div>
</div>

<div class="accordion-item">
<h4 class="accordion-header" id="headingSix">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
Do you contribute to open-source projects?
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3">Yes, I actively contribute to open-source when time allows. You can check out my <a href="https://github.com/DiceTech435">GitHub</a> for contributions, forks, or collaborations on various projects.
</p>
</div>
</div>
</div>

<div class="accordion-item">
<h4 class="accordion-header" id="headingSeven">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseFive">
Are your projects mobile responsive &amp; can you build a custom website for me? 
<span class="ms-auto">
<span class="icon ms-4">
<img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
<img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
</span>
</span>
</button>
</h4>
<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<p class="mt-3"> <b>Definitely.</b> Every project i build is designed with mobile-first responsiveness in mind to ensure usability across all screen sizes and of course Yes! for a custom website creation, if you have a project in mind, i’d love to hear about it. Let's discuss your requirements and see how i can help bring your vision to life.
</p>
</div>
</div>
</div>

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