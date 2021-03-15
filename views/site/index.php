<?php

/* @var $this yii\web\View */
$this->title = "Integrated Information System";


?>
<div class="site-index">

<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							SELAMAT DATANG <div class="weight-600 font-30 text-blue"><?=(Yii::$app->session->get('user_from') == 'simpeg')? Yii::$app->user->identity->pegawai->nama :Yii::$app->user->identity->userdesc?></div>
						</h4>
            		</div>
				</div>
				
			</div>

			<div class="row clearfix bg-black">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
							<a href="#">
								<img src="images/fingerprint.gif" alt="">
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li><i class="fas fa-fingerprint"></i></li>
										</ul>
									</div>
								</div>
								</a>	
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Presensi Daring</h5>
								<p class="mb-0">Presensi Daring UIN Sunan Ampel Surabaya</p>
							</div>
						</div>
					</div>


					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
							<a href="#">
								<img src="images/mail.png" style="background-color:red;" alt="">
								<div class="da-overlay da-slide-top">
									<div class="da-social">
										<ul class="clearfix">
											<li><i class="fas fa-envelope"></i></li>
										</ul>
									</div>
								</div>
								</a>	
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">UINSA Mail</h5>
								<p class="mb-0"> Email Institusi UIN Sunan Ampel Surabaya</p>
							</div>
						</div>
					</div>

				
					
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
							<a href="#">
								<img src="images/id-card.png" style="background-color:green;"  alt="">
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li><i class="fas fa-id-card"></i></li>
										</ul>
									</div>
								</div>
								</a>	
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">SIMPEG</h5>
								<p class="mb-0"> Sistem Informasi Kepegawaian UINSA</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
							<a href="#">
								<img src="images/e-kin.png"  alt="">
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li><i class="fas fa-chalkboard-teacher"></i></li>
										</ul>
									</div>
								</div>
								</a>	
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">E-Kinerja</h5>
								<p class="mb-0">E-Kinerja UIN Sunan Ampel Surabaya</p>
							</div>
						</div>
					</div>

</div>
		
				




			
			
			</div>

