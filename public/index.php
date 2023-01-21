<?php

declare(strict_types=1);

const DIR = "slides";

/**
 * @return array
 */
$slides = function () {
	if (!file_exists(DIR)) return [];
	foreach (scandir(DIR) as $element) {
		if (!in_array($element, [".", "..", "main.js", "utils.css"])) $s[] = $element;
	}
	return $s;
};

/**
 * @var array $slides
 * 
 * @return string
 */
function generateSlides(array $slides): string
{
	$el = "<ul class='list-group'>";
	if (count($slides) === 0) { 
		$el .= "<li class='list-group-item'>No slides found</li>";
	} else {
		foreach ($slides as $slide) {
			$file = str_replace('-', ' ', $slide);
			$file = explode(" ", $file);
			$name = "";
			foreach ($file as $n) {
				$name .= ucfirst($n) . " ";
			}
			$url = (($_SERVER['HTTPS'] ?? false) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . "/slides/$slide";
			$el .= "<li class='list-group-item item-container d-flex flex-column gap-2'>
				$name
				<p class='d-flex flex-column text-decoration-none'>
					<a class='ml-auto mt-2 text-decoration-none item' target='_blank' href='$url'><i class='fa-solid fa-link'></i><span> $url</span></a>
				</p>
			</li>";
		}
	}
	$el .= "</ul>";
	return $el;
}

?>	

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="author" content="" />
		<title>Slides Presentations - HENRY Alexis</title>
		<link rel="icon" type="image/x-icon" href="https://cdn.alexishenry.eu/shared/images/logo.png" />
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
		<link href="./build/main.css" rel="stylesheet" type="text/css"/>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="nav">
			<div class="container">
				<a class="navbar-brand" href="/">Slides</a>
				<button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu 
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</nav>
		<section class='masthead page-section mb-0' id="login">
			<div class="container">
				<h2 class='page-section-heading text-center text-uppercase'>Slides</h2>
				<div class='divider-custom'>
					<div class='divider-custom-line'></div>
					<div class='divider-custom-icon'><i class='fas fa-star'></i></div>
					<div class='divider-custom-line'></div>
				</div>
				<?= generateSlides($slides()); ?>
			</div>
		</section>
		<div class="copyright py-4 text-center text-white">
			<div class="container"><small>&copy; <?= date('Y') ?> - Slides</small></div>
		</div>
	</body>
</html>