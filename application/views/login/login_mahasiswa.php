<!--  -->
<div id="container">
  <h1>Anggota</h1>
  <form method="post" action="<?= base_url('CLogin_mhs/getlogin');?>">
    <input type="text" name="npm" id="npm" placeholder="NPM" required>
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
	