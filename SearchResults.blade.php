<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search Results</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('dashboard.dashboardCss')

</head>

<body>

  @include('dashboard.dashboardHeader')

  <main id="main">

  <section class="category-section" style="  margin-left: 5%;
  margin-right: 5%;" >

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mx-5 mt-5" style="background-color: white" >
<div class="row">
 
    @include('dashboard.SearchContent')
      
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
  @include('dashboard.devChatBox')

<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<i class='bx bx-message-dots'></i>
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
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
			</div>
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