<?php
  include '../head2.php';
?>
<div class="card text-center">
  <div class="card-header">
    <h1 style="color: black;">Judul</h1>
    <h5 style="color: black;">Pesan</h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="chall1" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <input type="button" value="Check Flag" onclick="c1()" class='btn btn-success'><span id="c1"></span></strong></p>
		</center>		
		</form>
  </div>
  <script type="text/javascript">
      function c1() {
        var a = document.getElementById("chall1");
        if ((a.value == "FLGx-3{flag}")) {
        document.getElementById('c1').innerHTML = swal('Flag Correct!', 'Go to next level', 'success')
    } else {
        document.getElementById('c1').innerHTML = swal('Flag Incorrect!!', 'Silahkan masukan flag dan format yang benar', 'error')
    }
      }
      </script>
  <br><br>
<?php
	include '../../footer.php';
?>