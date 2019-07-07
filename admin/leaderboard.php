<?php
    include '../koneksi.php';
    $con = mysqli_connect($server, $user, $password, $database);
    $query = "SELECT * FROM tbl_score ORDER BY score LIMIT 0,10";

    $hasil = mysqli_query($con , $query);
?>
<div class="row"> 
	<div id="isitabeluser">
		<div class="col-sm-12">      	
		<h1 class="text-center">Leaderboard Kuis Receh</h1>
		<br><br>
        <table class="table table-hover table-bordered" id="dataku">
		  <thead>
		  	<tr>
		  		<th>ID</th>
		  		<th>Score</th>

		  	</tr>
		  </thead>

		  <tbody>
		  	<?php
        while ($data = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo"<td>".$data['score']."</td>";
            echo"</tr>";
        }
        ?>
		  </tbody>
		</table>
      </div>
	</div>             
      

