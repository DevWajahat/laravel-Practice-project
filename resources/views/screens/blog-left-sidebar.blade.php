@extends('layouts.app')

@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Blog</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
      		<div class="col-md-4">
				<aside class="sidebar">
	<div class="widget widget-subscription">
		<h4 class="widget-title">Get notified updates</h4>
		<form>
		  <div class="form-group">
		    <input type="email" class="form-control" placeholder="Your Email Address">
		  </div>
		  <button type="submit" class="btn btn-main">I am in</button>
		</form>
	</div>

	<!-- Widget Latest Posts -->
	<div class="widget widget-latest-post">
		<h4 class="widget-title">Latest Posts</h4>

		<x-blogs-sidebar/>
		<x-blogs-sidebar/>
		<x-blogs-sidebar/>
		<x-blogs-sidebar/>

	</div>
	<!-- End Latest Posts -->

	<!-- Widget Category -->
	<div class="widget widget-category">
		<h4 class="widget-title">Categories</h4>
		<ul class="widget-category-list">
	        <li><a href="#!">Animals</a>
	        </li>
	        <li><a href="#!">Landscape</a>
	        </li>
	        <li><a href="#!">Portrait</a>
	        </li>
	        <li><a href="#!">Wild Life</a>
	        </li>
	        <li><a href="#!">Video</a>
	        </li>
	    </ul>
	</div> <!-- End category  -->

	<!-- Widget tag -->
	<div class="widget widget-tag">
		<h4 class="widget-title">Tag Cloud</h4>
		<ul class="widget-tag-list">
	        <li><a href="#!">Animals</a>
	        </li>
	        <li><a href="#!">Landscape</a>
	        </li>
	        <li><a href="#!">Portrait</a>
	        </li>
	        <li><a href="#!">Wild Life</a>
	        </li>
	        <li><a href="#!">Video</a>
	        </li>
	    </ul>
	</div> <!-- End tag  -->







</aside>
      		</div>
			<div class="col-md-8">
        	<x-blogs/>
        	<x-blogs/>
        	<x-blogs/>

<div class="text-center">
	<ul class="pagination post-pagination">
		<li><a href="#!">Prev</a>
		</li>
		<li class="active"><a href="#!">1</a>
		</li>
		<li><a href="#!">2</a>
		</li>
		<li><a href="#!">3</a>
		</li>
		<li><a href="#!">4</a>
		</li>
		<li><a href="#!">5</a>
		</li>
		<li><a href="#!">Next</a>
		</li>
	</ul>
</div>
      		</div>
		</div>
	</div>
</div>

@endsection
