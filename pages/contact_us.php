<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<style type="text/css">
	

	/* Conatct start */

        .header-title
        {
          text-align: center;
          color:#d9232d;
        }

        #tip 
        {
            display:none;  
        }

        .fadeIn
        {
          animation-duration: 3s;
        }

        .form-control
        {
        	border-radius:0px;
        	border:1px solid #EDEDED;
        }

        .form-control:focus
        {
        	border:1px solid #00bfff;
        }

        .textarea-contact
        {
        	resize:none; 
        }

        .btn-send
        {
        	border-radius: 0px;
        	border:1px solid #d9232d;
        	background:#d9232d;
        	color:#fff; 
        }

        .btn-send:hover
        {
        	border:1px solid #d9232d;
        	background:#fff;
        	color:#d9232d;
        	transition:background 0.5s;   
        }

        .second-portion
        {
        	margin-top:50px; 
        }

		        @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
		@import "http://fonts.googleapis.com/css?family=Roboto:400,500";

		.box > .icon { text-align: center; position: relative; }
		.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #d9232d; vertical-align: middle; }
		.box > .icon:hover > .image { background: #333; }
		.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
		.box > .icon:hover > .image > i { color: white !important; }
		.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
		.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
		.box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700; }
		.box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
		.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
		.box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
		.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
		.box .space { height: 30px; }

		@media only screen and (max-width: 768px)
		{
			.contact-form
			{
				margin-top:25px; 
			}

			.btn-send
			{
				width: 100%;
				padding:10px; 
			}

			.second-portion
			{
				margin-top:25px; 
			}
		}
	/* Conatct end */

</style>

<div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Contact </h1>
    <hr>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">
    	

    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.0214576868525!2d114.17383636531822!3d22.27717699936262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404005b07bca379%3A0xed34b4f8affa3082!2sWan+Chai+Commercial+Centre%2C+194-204+Johnston+Rd%2C+Wan+Chai%2C+Hong+Kong!5e0!3m2!1sen!2sph!4v1513045617408" width="100%" height="320px;" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-6">
    		<form action="form.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
		        </div>
		    
		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon animated fadeInDown">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@ofcbusiness.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.ofcbusiness.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+852) 6767-1630 (Hong Kong)
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+86) 14714426940 (China)
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							
							  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Room 02 , 20 Floor, Wan Chai Commercial Centre, Johnston Road, Wan Chai, Hong Kong.
						</p>
					</div>
				</div>
				<div class="space"></div>

			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
</div>

</div>