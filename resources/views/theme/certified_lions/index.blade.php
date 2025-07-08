@extends('theme.certified_lions.website')

@php
$brandProducts = productsByBrand(['home-kit', 'away-kit', 'goal-keeper-kit', 'coach-kit']);
$homekitProducts = $brandProducts['home-kit'] ?? collect();
$awayKitProducts = $brandProducts['away-kit'] ?? collect();
$goalkeeperkitproducts = $brandProducts['goal-keeper-kit'] ?? collect();
$coachkitproducts = $brandProducts['coach-kit'] ?? collect();
// Combine all products for the "All" tab
$allProducts = $homekitProducts->merge($awayKitProducts)->merge($goalkeeperkitproducts)->merge($coachkitproducts);
@endphp

@section('content')
<section class="banner-slider">
	<div class="container-fluid">

		<div class="mega-slider-main">

			<div class="mega-slider">

				<div data-aos="fade-down" class="center-txt">
					<div class="banne-r-cont">
						<h2>CERTIFIED LIONS</h2>
						<h1>FOOTBALL CLUB</h1>
						<p>Wellcome to Certifified Lions FC, the soccer club in Okhlahoma City dedicated to fos-</p>
						<p>tering the growth of all talents in the beautiful game.</p>

						<div class="read-more-1">
							<a href="#">READ MORE</a>
						</div>
					</div>
					<div class="social-media-banner">
						<div class="b-s-ivcond">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-x-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-whatsapp"></i>
						</div>
						<div class="follow-text">
							<p>FOLLOW US</p>
						</div>
					</div>
				</div>

				<div data-aos="fade-down" class="center-txt">
					<div class="banne-r-cont">
						<h2>CERTIFIED LIONS</h2>
						<h1>FOOTBALL CLUB</h1>
						<p>Wellcome to Certifified Lions FC, the soccer club in Okhlahoma City dedicated to fos-</p>
						<p>tering the growth of all talents in the beautiful game.</p>

						<div class="read-more-1">
							<a href="#">READ MORE</a>
						</div>
					</div>
					<div class="social-media-banner">
						<div class="b-s-ivcond">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-x-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-whatsapp"></i>
						</div>
						<div class="follow-text">
							<p>FOLLOW US</p>
						</div>
					</div>
				</div>

				<div data-aos="fade-down" class="center-txt">
					<div class="banne-r-cont">
						<h2>CERTIFIED LIONS</h2>
						<h1>FOOTBALL CLUB</h1>
						<p>Wellcome to Certifified Lions FC, the soccer club in Okhlahoma City dedicated to fos-</p>
						<p>tering the growth of all talents in the beautiful game.</p>

						<div class="read-more-1">
							<a href="#">READ MORE</a>
						</div>
					</div>
					<div class="social-media-banner">
						<div class="b-s-ivcond">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-x-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-whatsapp"></i>
						</div>
						<div class="follow-text">
							<p>FOLLOW US</p>
						</div>
					</div>
				</div>

				<div data-aos="fade-down" class="center-txt">
					<div class="banne-r-cont">
						<h2>CERTIFIED LIONS</h2>
						<h1>FOOTBALL CLUB</h1>
						<p>Wellcome to Certifified Lions FC, the soccer club in Okhlahoma City dedicated to fos-</p>
						<p>tering the growth of all talents in the beautiful game.</p>

						<div class="read-more-1">
							<a href="#">READ MORE</a>
						</div>
					</div>
					<div class="social-media-banner">
						<div class="b-s-ivcond">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-x-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-whatsapp"></i>
						</div>
						<div class="follow-text">
							<p>FOLLOW US</p>
						</div>
					</div>
				</div>

				<div data-aos="fade-down" class="center-txt">
					<div class="banne-r-cont">
						<h2>CERTIFIED LIONS</h2>
						<h1>FOOTBALL CLUB</h1>
						<p>Wellcome to Certifified Lions FC, the soccer club in Okhlahoma City dedicated to fos-</p>
						<p>tering the growth of all talents in the beautiful game.</p>

						<div class="read-more-1">
							<a href="#">READ MORE</a>
						</div>
					</div>
					<div class="social-media-banner">
						<div class="b-s-ivcond">
							<i class="fa-brands fa-facebook"></i>
							<i class="fa-brands fa-x-twitter"></i>
							<i class="fa-brands fa-instagram"></i>
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-tiktok"></i>
							<i class="fa-brands fa-whatsapp"></i>
						</div>
						<div class="follow-text">
							<p>FOLLOW US</p>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>

<section class="team-photos">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div data-aos="fade-up" class="players">
					<img src="{{ asset('public/theme/certified_lions/images/soccer-player-21.jpeg') }}" alt="">
				</div>
			</div>

			<div class="col-md-4">
				<div data-aos="fade-up" class="players">
					<img src="{{ asset('public/theme/certified_lions/images/soccer-player-23.jpeg') }}" alt="">
				</div>
			</div>

			<div class="col-md-4">
				<div data-aos="fade-up" class="players">
					<img src="{{ asset('public/theme/certified_lions/images/out-door-team-1.jpeg') }}" alt="">
				</div>
			</div>

		</div>

		<div class="coming-events">
			<h3 id="match-title">UPCOMING MATCH</h3>
			<h4 id="match-time">Date and Time</h4>
			<p id="match-venue">Venue</p>
			<p id="match-timer">Timer</p>
		</div>

		<div data-aos="fade-up" class="logos-img">
			<ul>
				<li> <a href="#"> <img id="team1-logo" src=""
							alt=""> </a> </li>

				<li> <a href="#" id="team1-name"> </a> </li>

				<li> <a href="#"> <img src="{{ asset('public/theme/certified_lions/images/logo-2.png') }}" alt=""> </a>
				</li>

				<li> <a href="#"> <img src="{{ asset('public/theme/certified_lions/images/logo-2.png') }}" alt=""> </a>
				</li>

				<li> <a href="#" id="team2-name"> </a> </li>

				<li> <a href="#"> <img id="team2-logo" src="" alt=""> </a>
				</li>
			</ul>
		</div>

		<div class="border-line">
			<div class="row">
				<div class="col-md-12">
					<div class="border-bottom">
						<img src="{{ asset('public/theme/certified_lions/images/border-line.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="product-cat">
	<div class="container">
		<div class="container mt-3">
			<br>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#home">
						<img src="public/theme/certified_lions/images/store-txt-removebg-preview.png" alt="">
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
				</li>
				@foreach(App\Entity\Category\Category::get() as $category)
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab"
						href="#category-{{ $category->id }}">{{ $category->slug }}</a>
				</li>
				@endforeach
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="all" class="container tab-pane active"><br>
					<div id="all-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
						<div class="carousel-inner">
							@foreach(App\Entity\Product\Product::all()->chunk(4) as $chunkIndex => $productChunk)
							<div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
								<div class="row">
									@foreach($productChunk as $Product)
									<div class="col-md-3">
										<div class="product-box">
											<img src="{{ asset('storage/app/' . $Product->image->file_path) }}"
												alt="{{ $Product->translation->name }}" class="d-block w-100">
											<div class="product-disc-1">
												<p>{{ $Product->slug }}</p>
												<a href="/shop"> <i class="fa-solid fa-cart-shopping"></i> BUY NOW</a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							@endforeach
						</div>
						<a class="carousel-control-prev" href="#all-carousel" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#all-carousel" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</div>

				@foreach(App\Entity\Category\Category::get() as $category)
				<div id="category-{{ $category->id }}" class="container tab-pane fade"><br>
					<div id="category-carousel-{{ $category->id }}" class="carousel slide" data-bs-ride="carousel"
						data-bs-interval="7000">
						<div class="carousel-inner">
							@foreach($category->products->chunk(4) as $chunkIndex => $productChunk)
							<div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
								<div class="row">
									@foreach($productChunk as $Product)
									<div class="col-md-3">
										<div class="product-box">
											<img src="{{ asset('storage/app/' . $Product->image->file_path) }}"
												alt="{{ $Product->translation->name }}" class="d-block w-100">
											<div class="product-disc-1">
												<p>{{ $Product->slug }}</p>
												<a href="/shop"> <i class="fa-solid fa-cart-shopping"></i> BUY NOW</a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							@endforeach
						</div>
						<a class="carousel-control-prev" href="#category-carousel-{{ $category->id }}" role="button"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#category-carousel-{{ $category->id }}" role="button"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

<section class="new-slider">
	<div class="container">

		<div class="all_slider">
			<div class="all_slider">
				<div class="blurr-frame-slider">
					@foreach (App\Http\Controllers\GalleryController::getData() as $data)
					@php
					$images = json_decode($data->image, true);
					@endphp
					@if(is_array($images))
					@foreach ($images as $image)
					<div>
						<div class="blurr-slide-1">
							<img src="{{ asset('public/' . $image) }}" alt="Gallery Image">
							<div class="dated">
								<div class="show-1">
									<p>{{ $data->date }}</p>
								</div>
								<div class="show-2">
									<a href="#">
										READ MORE <i class="fa-solid fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@else
					<div>
						<div class="blurr-slide-1">
							<img src="{{ asset('public/' . $data->image) }}" alt="Gallery Image">
							<div class="dated">
								<div class="show-1">
									<p>{{ $data->date }}</p>
								</div>
								<div class="show-2">
									<a href="#">
										READ MORE <i class="fa-solid fa-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>

	</div>
</section>

<section class="youtube-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="social-video">
					@php
					$video = get_option('media_video');
					@endphp

					@if($video != '')
					<video width="100%" height="315" controls>
						<source src="{{ asset('public/uploads/media/' . $video) }}" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					@else
					<p>No video available</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>


<section class="matches">
	<div class="container">

		<div data-aos="fade-down" class="matches-head">
			<img src="{{ asset('public/theme/certified_lions/images/matches.png') }}" alt="">
		</div>

		<div class="calender-dates">
			<div class="row">

				<div class="col-md-6">

					<div class="inner-col-bg">

						<div class="previous-dates">
							<h4>PREVIOUS</h4>
						</div>

						<div class="previous-dates">

							<div class="matches-count-1">

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Rio Rancho Events Center</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>11 - 6</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/mexico.png') }}"
												alt="">
											<p>New Mexico Runners</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/mexico.png') }}"
												alt="">
											<p>New Mexico Runners</p>
										</div>

										<div class="flex-2">
											<p>5 - 19</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/wichita-wings.png') }}"
												alt="">
											<p>Wichita Wings</p>
										</div>

										<div class="flex-2">
											<p>6 - 3</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Park City Arena</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>2 - 10</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/wichita-wings.png') }}"
												alt="">
											<p>Wichita Wings</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/turlock.png') }}"
												alt="">
											<p>Turlock Cal Express</p>
										</div>

										<div class="flex-2">
											<p>5 - 10</p>
										</div>

										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>AWAY</p>
										<p>The sports zone</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>11 - 12</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}"
												alt="">
											<p>Wichita Selection</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>AWAY</p>
										<p>The sports zone</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>11 - 9</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}"
												alt="">
											<p>Wichita Selection</p>
										</div>
									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/demize.png') }}"
												alt="">
											<p>Springfield Demize</p>
										</div>

										<div class="flex-2">
											<p>7 - 17</p>
										</div>

										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

									</div>

									<div class="ticket">
										<a href="#">TICKETS</a>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="col-md-6">

					<div class="inner-col-bg-2">


						<div class="previous-dates">
							<h4>UPCOMING</h4>
						</div>

						<div class="previous-dates">

							<div class="matches-count-2">

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>AWAY</p>
										<p>Lake Country Soccer Complex</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/demize.png') }}"
												alt="">
											<p>Springfield Demize</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}"
												alt="">
											<p>Wichita Selection</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>AWAY</p>
										<p>All American Indoor Sports</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/kansas.png') }}"
												alt="">
											<p>Kansas City Barilleros</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/kansas.png') }}"
												alt="">
											<p>Kansas City Barilleros</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/chihuahua.png') }}"
												alt="">
											<p>Chihuahua Savage 2</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Corner Sport Arena</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/chihuahua.png') }}"
												alt="">
											<p>Chihuahua Savage 2</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Corner Sport Arena</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/chihuahua.png') }}"
												alt="">
											<p>Chihuahua Savage 2</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/wichita-wings.png') }}"
												alt="">
											<p>Wichita Wings</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/wichita.png') }}"
												alt="">
											<p>Wichita Selection</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/mexico.png') }}"
												alt="">
											<p>New Mexico Runners</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>HOME</p>
										<p>Lets Play inc</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/demize.png') }}"
												alt="">
											<p>Springfield Demize</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL3</h6>
										<p>AWAY</p>
										<p>All American Indoor Sports</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/kansas.png') }}"
												alt="">
											<p>Kansas City Barilleros</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Rio Rancho Events Center</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/mexico.png') }}"
												alt="">
											<p>New Mexico Runners</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
									</div>
								</div>

								<div class="tickets-booking">

									<div class="previous-dates">
										<h6>MASL2</h6>
										<p>AWAY</p>
										<p>Park City Arena</p>
									</div>

									<div class="counting-flex">
										<div class="flex-1">
											<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}"
												alt="">
											<p>Certified Lions FC</p>
										</div>

										<div class="flex-2">
											<p>0:0</p>
										</div>

										<div class="flex-3">
											<img src="{{ asset('public/theme/certified_lions/images/wichita-wings.png') }}"
												alt="">
											<p>Wichita Wings</p>
										</div>
									</div>

									<div class="ticket">
										<a class="blue-btn" href="#">TICKETS</a>
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


<section class="shapes-sec">
	<div class="container">

		<div class="sponsor-head">
			<h2>Our Sponsors and Partners</h2>
		</div>

		<div class="shades-slides">

			<div class="shape-slide">
				<img src="{{ asset('public/theme/certified_lions/images/M-W-Construction-Solutionslogo.png') }}" alt="">
			</div>

			<div class="shape-slide">
				<img src="{{ asset('public/theme/certified_lions/images/sponsord-n1-logo.jpeg') }}" alt="">
			</div>

			<div class="shape-slide">
				<img src="https://www.letsplaysoccer.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flps-logo.d3632db5.png&w=384&q=80" alt="">
			</div>

			<div class="shape-slide">
				<img src="https://static.wixstatic.com/media/f48e02_ccd9104e919a4da59e4e1af89f0d39f1~mv2.png/v1/fill/w_124,h_124,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/F9588E33-0C73-4B35-8ECD-78A47A4C2202_1_2.png" alt="">
			</div>

			<div class="shape-slide">
				<img src="https://maestrosw.com/cdn/shop/files/header_logo_b2b65dcf-5da1-443e-8a03-e27fa9cc3ad0.png?v=1659972994&width=280" alt="">
			</div>

			<div class="shape-slide">
				<img src="{{ asset('public/theme/certified_lions/images/M-W-Construction-Solutionslogo.png') }}" alt="">
			</div>

			<div class="shape-slide">
				<img src="{{ asset('public/theme/certified_lions/images/sponsord-n1-logo.jpeg') }}" alt="">
			</div>

			<div class="shape-slide">
				<img src="https://www.letsplaysoccer.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flps-logo.d3632db5.png&w=384&q=80" alt="">
			</div>

		</div>

	</div>
</section>


<section class="stay-update">
	<div class="container">

		<div data-aos="fade-up" class="update">
			<h2>STAY UPDATE WITH OUR NEWSLETTER</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, hic ad. Ducimus atque <br> quas, at
				asperiores esse placeat quia possimus</p>
		</div>

		<div class="email">

			<div class="mail-bar">
				<div class="mb-3">
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
				</div>

				<div class="subscribe-btn">
					<a href="#">SUBSCRIBE</a>
				</div>

			</div>

		</div>

	</div>
</section>

<section class="contact-us">
	<div class="container">

		<div class="contact-head">
			<h3>CONTACT US</h3>
		</div>

		<div class="row align-items-center">

			<div class="col-md-6">
				<div class="contact-fields">

					<div class="row">
						<div class="col-md-6">
							<div class="field-1">

								<div class="mb-3">
									<input type="email" class="form-control" id="exampleFormControlInput2"
										placeholder="Name">
								</div>

							</div>
						</div>

						<div class="col-md-6">
							<div class="field-2">
								<div class="mb-3">
									<input type="email" class="form-control" id="exampleFormControlInput3"
										placeholder="Last Name">
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="field-3">
								<div class="mb-3">
									<input type="email" class="form-control" id="exampleFormControlInput4"
										placeholder="Phone">
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="field-3">
								<div class="mb-3">
									<input type="email" class="form-control" id="exampleFormControlInput5"
										placeholder="Email">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="message">
								<div class="mb-3">
									<textarea class="form-control" id="exampleFormControlTextarea6"
										placeholder="Message" rows="3"></textarea>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="submit-btn">
								<a href="#">SUBMIT</a>
							</div>
						</div>

					</div>

				</div>
			</div>

			<div class="col-md-6">
				<div class="contact-details">

					<div class="location">
						<h4>Our Location</h4>
						<p> <i class="fa-solid fa-location-dot"></i> 1230,Lorem ipsum,Street000, <br>Lorem Ipsum</p>
					</div>

					<div class="address">
						<h4>Quick Contact</h4>
						<p> <i class="fa-solid fa-envelope"></i> info@youremail.com</p>
						<p> <i class="fa-solid fa-phone"></i> 123-456-7891</p>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection