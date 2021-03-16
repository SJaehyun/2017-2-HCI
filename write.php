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
			<br>
			<div id="boardWrite">
				<form action="write_update.php" method="post">
					<table id="boardWrite">
						<caption class="readHide"></caption>
						<tbody>
							<tr>
								<th scope="row"><label for="bID">아이디</label></th>
								<td class="id"><input type="text" name="bID" id="bID"></td>
							</tr>
							<tr>
								<th scope="row"><label for="bPassword">비밀번호</label></th>
								<td class="password"><input type="text" name="bPassword" id="bPassword"></td>
							</tr>
							<tr>
								<th scope="row"><label for="bTitle">제목</label></th>
								<td class="title"><input type="text" name="bTitle" id="bTitle"></td>
							</tr>
							<tr>
								<th scope="row"><label for="bContent">내용</label></th>
								<td class="content"><textarea name="bContent" id="bContent"></textarea></td>
							</tr>
						</tbody>
					</table>
					<div class="btnSet">
						<button type="submit" class="btnSubmit btn">작성</button>
						<button type="button" class="btnList btn" onclick="location.href='post.php'">목록</button>
					</div>
				</form>
			</div>
		</article>

      <!-- Example row of columns -->

      <footer class="footer">
        <p>2012210011 송재현</p>
      </footer>
	  </div>
	  
 <!-- /container -->


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
