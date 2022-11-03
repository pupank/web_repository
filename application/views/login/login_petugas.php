<!--  -->	

<div id="container">
  <h1>Administrator</h1>
  <form method="post" action="<?= base_url('CLogin_petugas/getlogin');?>">
    <input type="text" name="username" id="username" placeholder="Username" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <button>Log in</button>
	  <b>
	  	<?php
						$info = $this->session->flashdata('info');
							if (!empty($info)){
							echo $info;
						}
		?>
		</b>
</form>
</div>
<!--  -->	
	
	
	
	
	<!-- <div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="<?= base_url('CLogin_petugas/getlogin');?>">
				<span class="login100-form-title p-b-37">
					Login Admin
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Username">
					<input class="input100" type="text" name="username" id="username" placeholder="Username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Masukkan Password">
					<input class="input100" type="password" name="password" id="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>
				<b>

				</b>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
	<div id="dropDownSelect1"></div> -->