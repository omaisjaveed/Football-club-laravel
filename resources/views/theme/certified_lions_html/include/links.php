<?php
$site_name = "Dream Home";
$site_url = "";
$facebook = "";
$twitter = "";
$linkedin = "";
$email = "";
$email_info = "";
$call = "";
$phone = "";
$address = "";
$currency = "$";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="<?php echo isset($description) ? $description : '';  ?>" name="description">
	<title> <?php echo isset($title) ? $title : 'Car Match Rental';  ?> </title>

	<?php
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
		$url_p = "https://";
	} else {
		$url_p = "https://";
	}
	$url_p .= $_SERVER['HTTP_HOST'];
	$url_p .= $_SERVER['REQUEST_URI'];
	$url_p = str_replace(".php", "", $url_p);
	$url_p = str_replace("index", "", $url_p);
	$url_p = preg_replace('/\?.*/', '', $url_p);
	$url_p = str_replace("//", "/", $url_p);
	$url_p = str_replace("https:/", "https://", $url_p);
	?>

	<meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?= $url_p; ?>" />
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="576" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />

	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<!-- Box Icon Start -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="css/slick.css" rel="stylesheet">


	<!-- LIBRARIES -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>