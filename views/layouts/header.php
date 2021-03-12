<div class="header-left">
	
		</div>
		<div class="header-right">
		
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="https://absensi.uinsby.ac.id/assets/6bacf-foto.jpg" width="50px" height="50px" alt="">
						</span>
						<span class="user-name"><?=Yii::$app->user->identity->username?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="<?=\yii\helpers\Url::to(["/site/logout"])?>" data-method="POST"> <i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>