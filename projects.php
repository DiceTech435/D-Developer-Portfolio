<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>Amevye - Works</title>
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
<div class="card-body portfolio-card">
<div class="top-info">
<div class="text">
<h1 class="main-title">Check Out My Latest <span>Projects</span></h1>
<p><p>I'm here to help bring your ideas to life — whether you need a developer to craft seamless digital experiences or a cybersecurity specialist to strengthen your business. I turn vision into value with solutions that are  tailored, secured, and built to last.</p>
</div>
</div>
<div class="portfolio-area">
<div class="row g-4 parent-container">
     <?php 
        $stmt = $pdo->prepare("SELECT * FROM works ORDER BY id DESC");
        $stmt->execute();
        $projects = $stmt->fetchAll();
        foreach($projects as $project){
        $projectImg = !empty($project["image"]) ? "assets/img/projects/".$project["image"] : "assets/img/icons/null.png";
        ?>

<div class="col-lg-12">
<div class="portfolio-item">
<div class="image">
<img src="<?= $projectImg; ?>" alt="Project-Image" class="img-fluid w-100">
<a href="assets/img/projects/project-1.png"
class="gallery-popup full-image-preview parent-container">
<svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
<path d="M10 4.167v11.666M4.167 10h11.666"></path>
</svg>
</a>
</div>
<div class="text">
<div class="info" style="text-align: justify;">
<a class="title"><?php echo htmlspecialchars($project["title"]);?></a>
<p class="subtitle"><?php echo htmlspecialchars($project["project-desc"]);?></p>
</div>
<div class="visite-btn">
<a href="<?php echo htmlspecialchars($project['visit-site']);?>" class="fa fa-button" target="_blank">Visit site
<svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="green"
xmlns="http://www.w3.org/2000/svg">
<path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
stroke-linejoin="round"></path>
<path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
    <?php } ?>
</div>

<div class="pagination">
<ul class="list-unstyled">
<li class="prev">
<button>
<svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke-width="2" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path>
</svg>
</button>
</li>
<li><button>1</button></li>
<li><button>2</button></li>
<li><button>3</button></li>
<li>
<button class="next-page-btn">
<span class="dots"><i class="fas fa-ellipsis-h"></i></span>
<span class="next-page">
<svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg" width="24"
height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round">
<path d="m6 17 5-5-5-5"></path>
<path d="m13 17 5-5-5-5"></path>
</svg>
</span>
<span class="next-page-number">Next 4 pages</span>
</button>
</li>
<li><button>100</button></li>
<li class="next">
<button>
<svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke-width="2" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
</svg>
</button>
</li>
</ul>
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