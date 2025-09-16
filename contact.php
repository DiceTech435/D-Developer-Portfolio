<!DOCTYPE html>
<html lang="en">

<head>
<title>Amevye - Contact</title>
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
<div class="card-body portfolio-card contact-card">
<div class="top-info">
<div class="text">
<h1 class="main-title">Let's 👋 <span>Work</span> Together</h1>
<p>I'm here to help if you're seeking a dedicated professional to
transform complex challenges into secure, efficient, and innovative solutions, let's connect and create
impactful technology together.</p>
</div>
</div>
<div class="contact-area">
<div class="leave-comments-area">
<div class="comments-box">

<form id="contact-form" action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row gx-3">
<div class="col-md-6">
<div class="mb-4">
<label class="form-label">Name</label>
<input name="name" required type="text" class="form-control shadow-none" placeholder="Enter your name">
</div>
</div>
<div class="col-md-6">
<div class="mb-4">
<label class="form-label">Email</label>
<input name="email" required type="email" class="form-control shadow-none" placeholder="Enter your email">
</div>
</div>
<div class="col-md-6">
<div class="mb-4">
<label class="form-label">Subject</label>
<input name="subject" required type="text" class="form-control shadow-none" placeholder="Subject">
</div>
</div>
<div class="col-md-6">
<div class="mb-4">
<label class="form-label">Budget</label>
<select name="budget" required class="form-select shadow-none">
<option disabled selected>Select budget...</option>
<option value="$5000">$5000</option>
<option value="$5000 - $1000">$5000 - $10000</option>
<option value="$10000 - $2000">$10000 - $20000</option>
<option value="$20000">$20000+</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="mb-4">
<label class="form-label">Comment</label>
<textarea name="message" class="form-control shadow-none" rows="4"
placeholder="Type details about your inquiry"></textarea>
</div>
</div>

<div class="col-md-12">
<button class="submit-btn" type="submit">
Send Message
<svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5"
stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button> 

</div>
</div>
</form>

<p class="ajax-response mb-0"></p>
</div>
</div>
<div class="contact-map-area">
<iframe
src="https://www.google.com/maps/place/eBlaze+Technologies/@8.5090999,8.5211621,17z/data=!4m15!1m8!3m7!1s0x105107146d867acb:0x435c287ec9afc918!2seBlaze+Technologies!8m2!3d8.5015079!4d8.5177396!10e1!16s%2Fg%2F11xdlyzqvx!3m5!1s0x105107146d867acb:0x435c287ec9afc918!8m2!3d8.5015079!4d8.5177396!16s%2Fg%2F11xdlyzqvx?entry=ttu&g_ep=EgoyMDI1MDYwOC4wIKXMDSoASAFQAw%3D%3D"
allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>

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