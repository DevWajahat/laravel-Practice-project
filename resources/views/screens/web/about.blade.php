@extends('layouts.app')
@section('content')


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">About Us</h1>
					<ol class="breadcrumb">
						<li><a href="{{ route('contact') }}">Home</a></li>
						<li class="active">about us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="{{ asset('assets/web/images/about/about.jpg') }}">
			</div>
			<div class="col-md-6">
				<h2 class="mt-40">About Our Shop</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, accusantium repellat ex autem numquam iure officiis facere vitae itaque.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
				<a href="{{ route('contact') }}" class="btn btn-main mt-20">Download Company Profile</a>
			</div>
		</div>
		<div class="row mt-40">
			<div class="col-md-3 text-center">
				<img src="{{ asset('assets/web/images/about/awards-logo.png') }}">
			</div>
			<div class="col-md-3 text-center">
				<img src="{{ asset('assets/web/images/about/awards-logo.png') }}">
			</div>
			<div class="col-md-3 text-center">
				<img src="{{ asset('assets/web/images/about/awards-logo.png') }}">
			</div>
			<div class="col-md-3 text-center">
				<img src="{{ asset('assets/web/images/about/awards-logo.png') }}">
			</div>
		</div>
	</div>
</section>
<section class="team-members ">
	<div class="container">
		<div class="row">
			<div class="title"><h2>Team Members</h2></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="{{ asset('assets/web/images/team/team-1.jpg') }}">
					<h4>Jonathon Andrew</h4>
					<p>Founder</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="{{ asset('assets/web/images/team/team-2.jpg') }}">
					<h4>Adipisci Velit</h4>
					<p>Developer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="{{ asset('assets/web/images/team/team-3.jpg') }}">
					<h4>John Fexit</h4>
					<p>Shop Manager</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="{{ asset('assets/web/images/team/team-1.jpg') }}">
					<h4>John Fexit</h4>
					<p>Shop Manager</p>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="section video-testimonial bg-1 overly-white text-center mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Video presentation</h2>
				<a class="play-icon" href="https://www.youtube.com/watch?v=oyEuk8j8imI&amp;rel=0" data-toggle="lightbox">
					<i class="tf-ion-ios-play"></i>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
