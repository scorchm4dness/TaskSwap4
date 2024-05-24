<!DOCTYPE html> <!-- defines the document type and version of HTML being used -->
<html lang="en">	<!-- indicates the start of HTML document -->

<head> <!-- contains meta-information of HTML document, such as its title, character set, styles, and scripts. -->
  <meta charset="utf-8"> <!-- a standard character encoding capable of encoding all possible characters.-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport"> <!-- sets the viewport to match the device's width and sets the initial zoom level to 1.0. -->

  <title>Search Results</title>
  <meta content="" name="description"> <!-- hold a brief description of the page's content -->
  <meta content="" name="keywords"> <!-- meant to hold keywords related to the page's content -->

  @include('dashboard.dashboardCss')

</head>

<body>

  @include('dashboard.dashboardHeader')

  <main id="main" style="background-color: white"> <!-- defines the main content area of HTML document. -->

  <section class="category-section" style=" margin-left: 5%; margin-right: 5%;" > <!-- Inline CSS is used to set the left and right margins to 5% dito nakapaloob yung search results -->

<!-- Content Wrapper. It wraps the search results -->
<div class="content-wrapper mx-5 mt-5" > <!-- apply margin on the x-axis and top margin, respectively sa card ni search result -->
<div class="row"> <!-- para naka-row layout -->
 
    <div class="col-md-9" > <!--  defines a column that spans 9 out of 12 columns in a grid system for medium-sized devices. -->
		<div  style="border-style: solid; width:100%; border-color: #62AC83; border-radius:20px; margin-left: 22%; margin-top:-5%;">
		
		  <div>
		
		  </div>
			<!--  -->
			<section class="content" style="margin-left: 4%; margin-right:4%"> <!-- margin for inner square card-->
			  <div class="container-fluid" > <!-- div container -->
			  <p class="acc" style="font-family:Fira Sans, sans-serif; ">SEARCH RESULTS:</p>
		
			  @if($search->isEmpty()) <!-- condition if the username is not found-->
					<h4 class="acc" style="text-align: center; font-family:Fira Sans, sans-serif;" >Username Not Found!</h4>
		  @else
			  @foreach($search as $item)<!-- this will trigger if the search directive is not empty -->
				  <a href="{{ route('dashboard.Feed', ['id' => $item->id]) }}"> <!-- passing the user's ID as a parameter. -->

					<!-- this is where it this is where it displays the details of the searched user  -->
					  <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px; height:80px;">
						  <img src="storage/users-avatar/{{ $item->avatar}}" alt="TaskSwap" style="height: 50px; width:50px; border-radius:75%">
						  <div class="info-box-content">   
							  <span class="award3" style="font-family:Fira Sans, sans-serif; ">{{ $item->username }}</span>
							  <span class="desc3 secret" style="font-family:Fira Sans, sans-serif; ">{{ $item->first_name }} {{ $item->last_name }}</span>
						  </div>
					  </div>
				  </a>
			  @endforeach
		  @endif
				
			</div>  
			</section> 
  <!-- /.content-wrapper -->
</div>
<!-- Page specific script -->
</div>
</section>
     
  </main><!-- End #main -->

  <!--   START DASHBOARD -->
  @include('dashboard.footer')

<!--     END DASHBOARD -->

<!-- START CHAT-BOX -->

<div class="chatbox-wrapper">
		<div class="chatbox-toggle"> <!-- chat toggle -->
			<i class='bx bx-message-dots'></i> <!-- icon -->
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header"> <!-- start of chat header-->
				<div class="chatbox-message-profile">
					<img src="assets/images/avatar4.png" alt="" class="chatbox-message-image">
					<div>
                        <h4 class="chatbox-message-name" style="font-family:Fira Sans, sans-serif; ">TaskSwap Developers</h4>
						<p class="chatbox-message-status" style="font-family:Fira Sans, sans-serif; ">online</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">
					<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
					<ul class="chatbox-message-dropdown-menu" style="font-family:Fira Sans, sans-serif; ">
						<li>
							<a href="#" >Search</a>
						</li>
						<li>
							<a href="#">Report</a>
						</li>
					</ul>
				</div>
			</div> <!-- end of chat header -->

			<div class="chatbox-message-content">
				<h4 class="chatbox-message-no-message" style="font-family:Fira Sans, sans-serif; font-size:14px">Hey There! How can we assist you?</h4>
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"  style= "width:300px; font-family:Fira Sans, sans-serif; "></textarea>
                    <button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  @include('dashboard.dashboardScripts')
</body>

</html>