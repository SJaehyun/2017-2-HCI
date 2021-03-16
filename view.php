<?php
	require_once("dbconfig.php");
	$bNo = $_GET['bno'];

	if(!empty($bNo) && empty($_COOKIE['post' . $bNo])) {
		$sql = 'update post set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = $db->query($sql); 
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} else {
			setcookie('post' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from post where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" href="board.css" />
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Intro </a>
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
			  
              <li class="nav-item active">
                <a class="nav-link" href="post.php">Post<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- Jumbotron -->

		<article class="boardArticle">
			<h3>응원글 작성하기</h3>
			<br><br>
			<div id="boardView">
			<table class="table">
				<tbody>
					<tr>
						<td scope="col" class="author">작성자</td>
						<td><?php echo $row['b_id']?></td>
					</tr>
					<tr>
						<td scope="col" class="date">날짜</td>
						<td><?php echo $row['b_date']?></td>
					</tr>
					<tr>
						<td scope="col" class="hit">조회수</td>
						<td><?php echo $row['b_hit']?></td>
					</tr>
					<tr>
						<td scope="col" class="title">제목</td>
						<td><?php echo $row['b_title']?></td>
					</tr>
					<tr>
						<td colspan="2"><?php echo $row['b_content']?></td>
					</tr>
				</tbody>

			</table>
				<div class="btnSet">
					<button type="button" class="btnList btn" onclick="location.href='post.php'">목록</button>
				</div>

			</div>
		</article>

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