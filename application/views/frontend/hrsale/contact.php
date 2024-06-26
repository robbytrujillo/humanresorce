<!-- Container -->
<div class="container">

<div class="eleven columns">
	<?php
		if($this->session->flashdata('sent_message')):
			echo $this->session->flashdata('sent_message');
		endif;
	?>
	<h3 class="margin-bottom-15">Kontak</h3>
	
		<!-- Contact Form -->
		<section id="contact" class="padding-right">

			<!-- Success Message -->
			<mark id="message"></mark>

			<!-- Form -->
			<?php $attributes = array('name' => 'contactform','id' => 'xin-form',  'autocomplete' => 'on');?>
			<?php $hidden = array('contact' => '1');?>
            <?php echo form_open('contact_us/send_mail/', $attributes, $hidden);?>
				<fieldset>

					<div>
						<label>Nama:</label>
						<input name="name" type="text" id="name" />
					</div>

					<div>
						<label >Email: <span>*</span></label>
						<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
					</div>

					<div>
						<label>Pesan: <span>*</span></label>
						<textarea name="message" cols="40" rows="3" id="message" spellcheck="true"></textarea>
					</div>

				</fieldset>
				<div id="result"></div>
				<input type="submit" class="submit" id="submit" value="Kirim Pesan" />
				<div class="clearfix"></div>
				<div class="margin-bottom-40"></div>
			<?php echo form_close(); ?>

		</section>
		<!-- Contact Form / End -->

</div>
<!-- Container / End -->


<!-- Sidebar
================================================== -->
<div class="five columns">

	<!-- Information -->
	<h3 class="margin-bottom-10">Informasi</h3>
	<div class="widget-box">
		<p>Ibnu Hajar Boarding School</p>

		<ul class="contact-informations">
			<li>Mushola Fathul Ulum No.11, RT.9/RW.1, Munjul</li>
			<li>Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13850</li>
		</ul>

		<ul class="contact-informations second">
			<li><i class="fa fa-phone"></i> <p>(021) 84312279</p></li>
			<li><i class="fa fa-envelope"></i> <p>info@ihbs.or.id</p></li>
			<li><i class="fa fa-globe"></i> <p>https://ihbs.sch.id</p></li>
		</ul>

	</div>
	
	<!-- Social -->
	<div class="widget margin-top-30">
		<h3 class="margin-bottom-5">Social Media</h3>
		<ul class="social-icons">
			<li><a class="facebook" href="https://www.facebook.com/IHBSNEWS"><i class="icon-facebook"></i></a></li>
			<li><a class="instagram" href="https://www.instagram.com/ihbsnews/?hl=en"><i class="icon-instagram"></i></a></li>
			<li><a class="youtube" href="https://www.youtube.com/@ihbstvedu"><i class="icon-youtube"></i></a></li>
		</ul>
		<div class="clearfix"></div>
		<div class="margin-bottom-50"></div>
	</div>

</div>
</div>
<!-- Container / End -->