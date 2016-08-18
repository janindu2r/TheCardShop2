<?php /* Template Name: contacts */ ?>
<?php get_header();?>
<div class="container">
	<div class="row">
		<h2 class="text-center">Contacts</h2>
	</div>
</div>
<div class="container">
	<div class="contacts-wrapper">
		<div class="col-md-8 vrl">
			<p class="contacts-desc">We are here to answer any question you may have about our combadi experiences. Reach out to us and we'll respond as soon as we can.</p>
			<br>
			<p class="contacts-desc" style="margin-bottom:30px;">Even if there is something you have always wanted to experience and can't find it on combadi, let us know and we promise well do our best to find it for you and send you there</p>
			<form class="contact-form-row1">
				<div class="form-group">
					<label for="exampleInputEmail1">Name <span style="color:red; font-size:10px;"><i class="fa fa-asterisk" aria-hidden="true"></i></span></label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: John Doe">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email  <span style="color:red; font-size:10px;"><i class="fa fa-asterisk" aria-hidden="true"></i></span></label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex: john@doe.com">
				</div>
				<label class="control-label" for="textarea">Message <span style="color:red; font-size:10px;"><i class="fa fa-asterisk" aria-hidden="true"></i></span></label>                  
				<textarea rows="6" class="form-control" id="textarea" placeholder="Type your message here" name="textarea"></textarea>
			</form>
			<?php the_content();?>
		</div>
		<div class="col-md-4 pdl-15">
			<h6>Email</h6>
			<p style="color:#0194d9;">prashan_wickramasinghe@yahoo.com</p>
			<h6>Tel</h6>
			<p style="color:#0194d9;">+94 72 690 4939</p>
			<h6>Viber</h6>
			<p style="color:#0194d9;">+94 75 558 8793</p>
			<h6>Whatsapp</h6>
			<p style="color:#0194d9;">+94 75 558 8793 </p>
			<h6>Address</h6>
			<p style="color:#0194d9;">Kirindawelard,
				<br>Radawana South,
				<br>Gampaha.
			</p>
			<p style="color:#0194d9;">Open 24 hours</p>
			<a href="" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
	
</div>
<?php get_footer();?>