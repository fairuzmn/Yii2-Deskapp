<div class="header-left">
	
		</div>
		<div class="header-right">
		
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="https://absensi.uinsby.ac.id/assets/<?=(Yii::$app->session->get('user_from') == 'simpeg')? Yii::$app->user->identity->pegawai->foto:""?>" width="50px"  alt="">
						</span>
						<span class="user-name"><?=(Yii::$app->session->get('user_from') == 'simpeg')? Yii::$app->user->identity->pegawai->nama :Yii::$app->user->identity->userdesc?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="<?=\yii\helpers\Url::to(["/site/logout"])?>" data-method="POST"> <i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>