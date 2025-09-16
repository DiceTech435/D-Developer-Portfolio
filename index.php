<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include("include/config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>Amevye Matthew</title>
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
<section class="home-area">
<div class="container">

<div>
<div class="row g-4">

<?php include("include/sidebar.php");?>

<div class="col-xl-4">
<div class="row g-4">

<div class="col-lg-12">
<div class="card">
<div class="card-body work-experiance-card">
<h3 class="card-title">Work Experience</h3>
<div class="work-experiance-main">

<ul class="work-experiance-slider list-unstyled">
    <?php 
    $stmt = $pdo->prepare("SELECT * FROM work_exp");
    $stmt->execute();
    $exps = $stmt->fetchAll();
    foreach($exps as $exp){
    $img = !empty($exp["logo"]) ? "assets/img/images/".$exp["logo"]:"assets/img/icons/null.png";
    ?>
<li>
<div class="date">
<p>
<?php echo htmlspecialchars($exp["startDate"] . "-". $exp["endDate"])?></p>
</div>
<div class="info">
<div class="icon">
<img src="<?php echo $img;?>" alt="adobe">
</div>
<div class="text">
<h4 class="title">
<?php echo htmlspecialchars($exp["company"]);?></h4>
<h6 class="subtitle"><?php echo htmlspecialchars($exp["designation"]);?></h6>
</div>
</div>
</li>
<?php }?>

</ul>


<ul class="work-experiance-slider list-unstyled">
    <?php 
    $stmt = $pdo->prepare("SELECT * FROM work_exp");
    $stmt->execute();
    $exps = $stmt->fetchAll();
    foreach($exps as $exp){
    $img = !empty($exp["logo"]) ? "assets/img/images/".$exp["logo"]:"assets/img/icons/null.png";
    ?>
<li>
<div class="date">
<p>
<?php echo htmlspecialchars($exp["startDate"] . "-". $exp["endDate"])?></p>
</div>
<div class="info">
<div class="icon">
<img src="<?php echo $img;?>" alt="adobe">
</div>
<div class="text">
<h4 class="title">
<?php echo htmlspecialchars($exp["company"]);?></h4>
<h6 class="subtitle"><?php echo htmlspecialchars($exp["designation"]);?></h6>
</div>
</div>
</li>
<?php }?>

</ul>
</div>
</div>
</div>
</div>



<!-- Stacks -->
<div class="col-lg-12">
<div class="card expertise-card">
<div class="card-body">
<h3 class="card-title">My Skills
</h3>
<div class="expertise-main mt-24">
<div class="row g-3">

<?php 
$stmt = $pdo->prepare("SELECT * FROM stack");
$stmt->execute();
$stacks = $stmt->fetchAll();
foreach($stacks as $stack){
$sImg = !empty($stack["logo"]) ? "assets/img/icons/".$stack["logo"]:"assets/img/icons/null.png";
?>

<div class="col-xl-4 col-md-4 col-sm-6 col-6">
<div class="expertise-item">
<div class="image text-center">
<img src="<?php echo $sImg;?>" alt="<?php echo htmlspecialchars($stack["stack"]);?>">
</div>
<div class="text">
<h4 class="title">
<?php echo htmlspecialchars($stack["stack"]);?>
</h4>
</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>
</div>
</div>
<!-- Stacks -->

</div>
</div>


<div class="col-xl-4">
<div class="card card-projects">
<div class="card-body">

<h3 class="card-title">Recent Projects <a class="link-btn" href="projects.php">All Projects
<svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round" />
<path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round" />
<path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round" />
</svg>
</a></h3>

<div class="projects-main mt-24">
<div class="row g-4 parent-container">
<?php 
$stmt = $pdo->prepare("SELECT * FROM works ORDER BY id DESC LIMIT 4");
$stmt->execute();
$projects = $stmt->fetchAll();
foreach($projects as $project){
$projectImg = !empty($project["image"]) ? "assets/img/projects/".$project["image"]:"assets/img/icons/null.png";
?>

<div class="col-lg-12"> 
<div class="project-item">
<div class="image">
<img src="<?php echo $projectImg;?>" alt="<?php echo htmlspecialchars($project["title"]);?>" class="img-fluid w-100">
<a href="<?php echo $projectImg;?>"
class="gallery-popup full-image-preview parent-container">
<svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
<path d="M10 4.167v11.666M4.167 10h11.666"></path>
</svg>
</a>
<div class="info">
<span class="category">
<?php echo htmlspecialchars($project["sub-title"]);?>
</span>
</div>
</div>
</div>
</div>
<?php } ?>


</div>
</div>
</div>
</div>
</div>
</div>



<div class="services-area mt-24">
<div class="row g-4">
<div class="col-xl-8">
<div class="card services-card">
<div class="card-body">
<h3 class="card-title">List of Services
<a class="link-btn" href="services.php"> See All Services
    <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
    stroke-linejoin="round" />
    <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
    stroke-linejoin="round" />
    <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
    stroke-linejoin="round" />
    </svg>

</a></h3>
<div class="services-main mt-24">
<div class="row g-4">
<?php 
$stmt = $pdo->prepare("SELECT * FROM service LIMIT 4");
$stmt->execute();
$services = $stmt->fetchAll();
foreach($services as $service){
$serviceImg = !empty($service["logo"]) ? "assets/img/icons/".$service["logo"]:"assets/img/icons/null.png";
?>

<div class="col-md-3 col-sm-6 col-6">
<div class="services-item text-center">
<div class="image">
<img src="<?php echo $serviceImg;?>" alt="<?php echo htmlspecialchars($service['service']);?>">
</div>
<div class="text">
<h3 class="title">
<?php echo htmlspecialchars($service["service"]);?>
</h3>
</div>
</div>
</div>

<?php }?>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4">
<div class="card lets-talk-together-card">
<div class="card-body">
<div class="scrolling-info">
<div class="slider-item">
<p>
Available For Hire 🚀 | Cyber Security 👩‍💻 | Web Development 🧑‍💻  | Crafting Digital Experiences 
</p>
</div>
</div>


<div class="mb-4" style="height: 220px; background: linear-gradient(148deg, rgb(33, 200, 246) -11%, rgba(33, 200, 246, 0) 42%);border-radius:20px">
<div style="background-image: radial-gradient(circle at 0% 2%, rgb(0, 117, 255), rgb(31, 64, 106) 100%);border-radius: inherit; padding:10px; border-radius:20px">

<div class="row" style="background:url(assets/img/icons/strip.png); background-size: contain;background-position: right;">
<h3 class="card-title" style="font-size:30px">Let's👋
<span class="d-block">Work Together</span>
</h3>
<p class="text-xs text-white">
Use the contact button below to reach me today lets connect and talk.
</p>
<img src="assets/img/icons/codeHead.webp" style="position:absolute; width:110px; right:0">

</div>
<a href="https://wa.me/+2349064318992" target="_blank" class="btn btn-primary mt-3 mb-2 w-100">
<i class="fab fa-whatsapp"></i> WhatsApp Me 
</a>
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