<!doctype html>
<html>
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/animate.css">
     <link rel="stylesheet" type="text/css" href="css/home_css.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script type="text/javascript" src="js/fancybox.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
<script>
    $(document).ready(function(){

	$('.fancybox').fancybox({
		openEffect : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',
		arrows : false,
		helpers : {
			media : {},
			buttons : {}
		}
	});
	wow = new WOW(
	    {
		  animateClass: 'animated',
		  mobile: false,
		  offset: 100
		}
    );
	wow.init();
});
    $(function(){
	$('#btnSubmit').on('click', function(e)
	{
		var username = $('#username').val(),
			pass = $('#password').val(),
			correct_user= 'admin',
			correct_pass= 'admin';
		 if (username === correct_user && pass === correct_pass)
		  {
			  e.preventDefault();				  	 
			  window.location.href = './site/user-info.php';
		  }
	  else
		  {
		  	e.preventDefault();
	 	 	swal("Error!", "Invalid password or username", "error");
		  }
	});

})
</script>
    <section class="billboard dark">
            <div class="caption dark animated wow fadeInDown " data-wow-delay=".4s">
                <h1>Dear learners!</h1>
                <p>Whether or not English could be an efficient tool that helps you reach higher levels of developments in the world and in life?</p>
                <p>Isn’t English an advantage for you?</p>
                <p>- To get a satisfactory well-paid job?</p>
                <p>- That creates numerous opportunities for you to move forward in these days?</p>
                <hr>
            </div>
    </section>
    <section class="services" style="margin-left: 100px;">
            <ul class="clearfix">
                <li class="animated wow fadeInDown">
                    <img class="icon" src="./img/join-icon.png"/>
                    <span class="separator"></span>
                    <h2>Join us</h2>
                    <p>Together we inspire learners to go further</p>
                </li>
                <li class="animated wow fadeInDown"  data-wow-delay=".2s">
                    <img class="icon" src="./img/test-icon.png" alt=""/>
                    <span class="separator"></span>
                    <h2>Test Your English</h2>
                    <p>There are tests suited for every level, and at the end you will get recommendations on how to improve your English.</p>
                </li>
                <li class="animated wow fadeInDown"  data-wow-delay=".4s">
                    <img class="icon" src="./img/icon3.png" alt=""/>
                    <span class="separator"></span>
                    <h2>Improve your English</h2>
                    <p>Practice material and learning resources to help you improve your English.</p>
                </li>
            </ul>
    </section>
    
    <section class="tests">
                <div class="title animated wow fadeInDown">
                    <h2 style="color: #DD6C64; ">Try some tests...</h2>              
                <hr>

                </div>
                <div class="animated wow fadeInUp test-list">
                        <article class="test-listing">
                                <a class="test-title" href="#">Remove the Spoon</a>
                                <div class="test-image">
                                 <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/san-fransisco-768x432.jpg"></a>
                                </div>
                         </article>
                </div>
                <br>
     <a href="" style="color: #DD6C64;">See more...</a>
    </section>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</html>