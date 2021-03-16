<?php
	require_once("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>2017 고연전</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
	<style type="text/css">
		table.table th{text-align: center;}
		table.table th.game{border-right: 1px solid #ccc;}
		table.table td.game{border-right: 1px solid #ccc;}
	</style>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">2017 고연전</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Intro <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="venue.html">Venue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="parties.html">Post-games parties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="history.html">History</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://wow.pedo.me" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cheering</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="songs.html">songs</a>
                  <a class="dropdown-item" href="videos.html">videos</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post.php">Post</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>고려대학교-연세대학교 정기전</h2>
		<img src = "ky1.jpg"></img>
		<br><br>
		<table class="table">
			<caption>점수는 경기 시작 시간에 보여집니다.</caption>
			<thead>
				<tr>
					<th class="game">종목</th>
					<th>일정/결과</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = 'select * from score order by game';
					$result = $db->query($sql);
					$timenow = date("Y-m-d H:i:s");
					$str_now = strtotime($timenow);
				?>
				<tr>
					<td class="game">야구</td>
					<td>
					<?php
						$row = $result->fetch_assoc();
						$timetarget = "2017-09-22 11:00:00";
						$str_target = strtotime($timetarget);
						if($str_now >= $str_target){
							echo "{$row['score_k']}:{$row['score_y']}";
							if($row['result'] == 1){
								if($row['score_k']>$row['score_y']){
									echo "&nbsp;<span style='color:red;'>&nbsp;고려대 승</span>";
								}
								if($row['score_k']==$row['score_y']){
									echo "&nbsp;무승부";
								}
								if($row['score_k']<$row['score_y']){
									echo "&nbsp;<span style='color:blue;'>&nbsp;연세대 승</span>";
								}
							}
						}
						else{
							echo "9/22 11:00 잠실야구장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
					?>
					</td>
				</tr>
				<tr>
					<td class="game">농구</td>
					<td>
					<?php
						$row = $result->fetch_assoc();
						$timetarget = "2017-09-22 15:00:00";
						$str_target = strtotime($timetarget);
						if($str_now >= $str_target){
							echo "{$row['score_k']}:{$row['score_y']}";
							if($row['result'] == 1){
								if($row['score_k']>$row['score_y']){
									echo "&nbsp;<span style='color:red;'>&nbsp;고려대 승</span>";
								}
								if($row['score_k']==$row['score_y']){
									echo "&nbsp;무승부";
								}
								if($row['score_k']<$row['score_y']){
									echo "&nbsp;<span style='color:blue;'>&nbsp;연세대 승</span>";
								}
							}
						}
						else{
							echo "9/22 15:00 잠실실내체육관";
						}
					?>
					</td>
				</tr>
				<tr>
					<td class="game">빙구</td>
					<td>
					<?php
						$row = $result->fetch_assoc();
						$timetarget = "2017-09-22 17:00:00";
						$str_target = strtotime($timetarget);
						if($str_now >= $str_target){
							echo "{$row['score_k']}:{$row['score_y']}";
							if($row['result'] == 1){
								if($row['score_k']>$row['score_y']){
									echo "&nbsp;<span style='color:red;'>&nbsp;고려대 승</span>";
								}
								if($row['score_k']==$row['score_y']){
									echo "&nbsp;무승부";
								}
								if($row['score_k']<$row['score_y']){
									echo "&nbsp;<span style='color:blue;'>&nbsp;연세대 승</span>";
								}
							}
						}
						else{
							echo "9/22 17:00 목동빙상장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
					?>
					</td>
				</tr>
				<tr>
					<td class="game">럭비</td>
					<td>
					<?php
						$row = $result->fetch_assoc();
						$timetarget = "2017-09-23 11:00:00";
						$str_target = strtotime($timetarget);
						if($str_now >= $str_target){
							echo "{$row['score_k']}:{$row['score_y']}";
							if($row['result'] == 1){
								if($row['score_k']>$row['score_y']){
									echo "&nbsp;<span style='color:red;'>&nbsp;고려대 승</span>";
								}
								if($row['score_k']==$row['score_y']){
									echo "&nbsp;무승부";
								}
								if($row['score_k']<$row['score_y']){
									echo "&nbsp;<span style='color:blue;'>&nbsp;연세대 승</span>";
								}
							}
						}
						else{
							echo "9/23 11:00 목동주경기장&nbsp;&nbsp;&nbsp;&nbsp;";
						}
					?>
					</td>
				</tr>
				<tr>
					<td class="game">축구</td>
					<td>
					<?php
						$row = $result->fetch_assoc();
						$timetarget = "2017-09-23 13:30:00";
						$str_target = strtotime($timetarget);
						if($str_now >= $str_target){
							echo "{$row['score_k']}:{$row['score_y']}";
							if($row['result'] == 1){
								if($row['score_k']>$row['score_y']){
									echo "&nbsp;<span style='color:red;'>&nbsp;고려대 승</span>";
								}
								if($row['score_k']==$row['score_y']){
									echo "&nbsp;무승부";
								}
								if($row['score_k']<$row['score_y']){
									echo "&nbsp;<span style='color:blue;'>&nbsp;연세대 승</span>";
								}
							}
						}
						else{
							echo "9/23 13:30 목동주경기장&nbsp;&nbsp;&nbsp;&nbsp;";
						}
					?>
					</td>
				</tr>
			</tbody>

		</table>
	
      </div>

      <!-- Example row of columns -->

      <!-- Site footer -->
      <footer class="footer">
        <p>2012210011 송재현</p>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
