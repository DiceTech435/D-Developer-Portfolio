<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Amevye - Blog Posts</title>
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
<h1 class="main-title">Project <span>Playground</span></h1>
<p>I'm here to turn your ideas and desires into a unique project that inspires you and engages your </b> needs.
<span>IN-> CyberSecurity Solutions, Pentesting, Database Design &amp; Management, Web Development and API Development.</span>
</p>
</div>
</div>

<div class="article-publications article-area">
<div class="article-publications-main">
<div class="row">
     <?php 
        $stmt = $pdo->prepare("SELECT * FROM blog ORDER BY id DESC");
        $stmt->execute();
        $blogs = $stmt->fetchAll();
        foreach($blogs as $blog){
        $blogImg = !empty($blog["image"]) ? "assets/img/blog/".$blog["image"] : "assets/img/icons/null.png";
        ?>
<div class="col-xl-6 col-lg-4 col-md-6">
<div class="article-publications-item">
<div class="image">
<a href="<?php echo htmlspecialchars($blog['visit-site']);?>" class="d-block w-100">
<img src="<?= $blogImg; ?>" alt="<?php echo htmlspecialchars($blog['about']);?>" class="img-fluid w-100">
</a>
<a href="<?php echo htmlspecialchars($blog['visit-site']);?>" class="tags" target="_blank">Visit site</a>
</div>
<div class="text" style="text-align: justify;">
<h3 class="title"><?= htmlspecialchars($blog["extra"]);?></h3>
<p class="subtitle"><?= htmlspecialchars($blog["about"]);?></p>
<ul class="list-unstyled">
<li><?= htmlspecialchars($blog["read-time"]);?></li>
<li><?= htmlspecialchars(date ("M jS, Y - H:i a", strtotime($blog["date"])));?></li>
</ul>
</div>
</div>
</div>

    <?php } ?>
</div>
</div>
</div>


<div class="pagination">
<ul class="list-unstyled">
<li class="prev">
<button>
<svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
stroke-width="2" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18">
</path>
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
<svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3">
</path>
</svg>
</button>
</li>
</ul>
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