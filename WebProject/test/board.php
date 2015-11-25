<?session_start();?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="author">
		<link rel="stylesheet" href="index.css">
		<title>Welcome to TITLE</title>
	</head>
	<body>
		<header>
      <?php
          
          $user_id = $_SESSION['user_id'];
          if ($user_id == NULL){
      ?>
      <div>
          <div><a href = "login.php">Log in</a></div>
          <div><a href = "index.php">Home</a></div>
      </div>
      <?php
          }
          else{
      ?>
       <div>

          <div><a><?=$user_id?>님 환영합니다</a></div>
          <form id = "myForm"  method = "post" action = "login.php">
              <div>
                  <input type="hidden"  name = "logout" value = "on" >

                  <a onclick="document.getElementById('myForm').submit()">Log out</a>
              </div>

          </form>
          <div><a href = "index.php">Home</a></div>
      </div>
      <?php
          }
      ?>
  </header>

		<div>

			<!-- title -->
      <div id="title">
        TITLEEEEEEEEE
      </div>

			<!-- navigation bar -->
			<nav>
				<div><a href="index.php">Home</a></div>
				<div><a href="tutorial.php">Tutorial</a></div>
				<div><a href="example.php">Example</a></div>
				<div><a href="advanced.php">Advanced</a></div>
				<div><a href="board.php">Board</a></div>
			</nav>

		  <!-- body -->
			<article>
				<div id = "content">
					<div id = "mainbar">
						<div class="subheader">
							<h1 id="h-top-questions">
			                Top Questions
			        </h1>

			        <div id="tabs">
						        <a class="youarehere" href="" data-nav-xhref="" title="Questions that may be of interest to you based on your history and tag preference" data-value="interesting">interesting</a>
						        <a href="" data-nav-xhref="" title="Questions with an active bounty" data-value="featured"><span class="bounty-indicator-tab">402</span>featured</a>
						        <a href="" data-nav-xhref="" title="Questions with the most views, answers, and votes over the last few days" data-value="hot">hot</a>
						        <a href="" data-nav-xhref="" title="Questions with the most views, answers, and votes this week" data-value="week">week</a>
						        <a href="" data-nav-xhref="" title="Questions with the most views, answers, and votes this month" data-value="month">month</a>
							</div>
						</div>

						<div class="hidden">
							<div>
			    			<div class="votes">
			        			<div class="mini-counts"><span title="0 votes">0</span></div>
			        			<div>votes</div>
			    			</div>
			    			<div class="status unanswered">
			        			<div class="mini-counts"><span title="0 answers">0</span></div>
			        			<div>answers</div>
			    			</div>
			    			<div class="views">
			        			<div class="mini-counts"><span title="2 views">2</span></div>
			        			<div>views</div>
								</div>
							</div>

							<div class="hidden">
			    	    	<div class="summary">
			            	<h3>
											<a href="" title="So, I've got a select menu with some options, and a text field that takes in a number.  I need the text field to have certain ranges depending on the value of the select menu, which I have all set up ...">AngularJS validate other field when this field changes</a>
										</h3>
			    					<div class="tags t-javascript t-angularjs t-validation">
			      					<a href="" class="post-tag" title="show questions tagged 'javascript'" rel="tag">javascript</a>
											<a href="" class="post-tag" title="show questions tagged 'angularjs'" rel="tag">angularjs</a>
											<a href="" class="post-tag" title="show questions tagged 'validation'" rel="tag">validation</a>
			    					</div>
			    					<div class="started">
							        <a href="" class="started-link">asked <span title="2015-11-16 08:40:27Z" class="relativetime">50 secs ago</span></a>
							        <a href="">drew kroft</a> <span class="reputation-score" title="reputation score " dir="ltr">55</span>
			    					</div>
				    			</div>
				    	</div>
			    	</div>

			    	<div class="hidden">
							<div>
			    			<div class="votes">
			        		<div class="mini-counts"><span title="0 votes">0</span></div>
			        		<div>votes</div>
			    			</div>
			    			<div class="status unanswered">
			        		<div class="mini-counts"><span title="0 answers">0</span></div>
			        		<div>answers</div>
			    			</div>
			    			<div class="views">
			        		<div class="mini-counts"><span title="2 views">2</span></div>
			        		<div>views</div>
								</div>
							</div>

							<div class="hidden">
			    	    	<div class="summary">
			            	<h3>
											<a href="" title="So, I've got a select menu with some options, and a text field that takes in a number.  I need the text field to have certain ranges depending on the value of the select menu, which I have all set up ...">AngularJS validate other field when this field changes</a>
										</h3>
			    					<div class="tags t-javascript t-angularjs t-validation">
			        				<a href="" class="post-tag" title="show questions tagged 'javascript'" rel="tag">javascript</a>
											<a href="" class="post-tag" title="show questions tagged 'angularjs'" rel="tag">angularjs</a>
											<a href="" class="post-tag" title="show questions tagged 'validation'" rel="tag">validation</a>
			    					</div>
			    					<div class="started">
							        <a href="" class="started-link">asked <span title="2015-11-16 08:40:27Z" class="relativetime">50 secs ago</span></a>
							        <a href="">drew kroft</a> <span class="reputation-score" title="reputation score " dir="ltr">55</span>
			    					</div>
				    			</div>
				    	</div>
						</div>
					</div>
				</div>
			</article>

		</div>

		<!-- footer -->
    <footer>
        <div>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="img/w3c-css.png" alt="Valid CSS" /></a>
            <a href="http://validator.w3.org/check/referer"><img src="img/w3c-html.png" alt="Valid HTML5" /></a>
        </div>
    </footer>
</body>
</html>
