<!DOCTYPE HTML>
<html>
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								<h1>MY Portfolio</h1>
								<p>Please view my work below</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">Resume</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="https://github.com/zavierdots">GitHub</a></li>
								
							</ul>
						</nav>
					</header>
				<!-- Main -->
					<div id="main">
						<!-- Work -->
							<article id="work">
								<h3 class="major"><span id="selected">Work</span> <span><a href="#about">Resume</a></span> <span><a href="#contact">Contact</a></span> <span><a href="https://github.com/zavierdots">GitHub</a></span></h3> 
								<span class="image main"><a href="zavierdots.github.io/SMS/sms.html"><img src="images/pic01.jpg" /></a></span>
								<a href="zavierdots.github.io/SMS/sms.html">A simple game insipred by Rock-Paper-Scissors</a>
							</article>
						<!-- About -->
							<article id="about">
								<h3 class="major"><span><a href="#work">Work</a></span> <span id="selected">Resume</span> <span><a href="#contact">Contact</a></span> <span><a href="https://github.com/zavierdots">GitHub</a></span></h3>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>
						<!-- Contact -->
							<article id="contact">
								<h3 class="major"><span><a href="#work">Work</a></span> <span><a href="#about">Resume</a></span> <span id="selected">Contact</span> <span><a href="https://github.com/zavierdots">GitHub</a></span></h3>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
											<span class="error"><?= $name_error ?></span> 
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
											<span class="error"><?= $email_error ?></span>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
											<span class="error"><?= $message_error ?></span>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="http://linkedin.com/in/zavier-guadalupe-0b8a52158" class="icon brands fa-linkedin"><span class="label">linkedin</span></a></li>
									<li><a href="https://github.com/zavierdots" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">-THE END-</p>
					</footer>
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
