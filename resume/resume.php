<?php session_start(); ?>
<html>
<head>
	<title>Michael Ogunnaike</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
    <?php if (isset($_SESSION['message'])) { ?>
        <div style="background:red; color:white; text-align:center; margin-top: 6px; padding:6px;">
            <p class="px-4"><?= $_SESSION['message']; ?></p>
        </div>
    <?php } ?>
    <?php session_destroy(); ?>
		<header>
			<h1>Michael Ogunnaike</h1>
			
			<div class="row">
				<ul>
					<li class="address"><i class="fa fa-home fa-1x"></i>Obafemi Awolowo Street, Ikeja Lagos</li>
					<li class="phone">
						<span><i class="fa fa-phone fa-1x"></i>09024253062</span>
					</li>
					<li class="email"><i class="fa fa-envelope fa-1x"></i>murfygold@gmail.com</li>
				</ul>
			</div>
		</header>
		
		<article>
			<h2>Languages and Technologies</h2>
			
			<div class="row tech">
				<ul>
					<li><span>Communication</span>: English (fluent, native)</li>
					<li><span>Languages</span>: Javascript, PHP, SQL, HTML, CSS, LESS, JSON</li>
					<li><span>Exposure</span>: C, C++, C#</li>
					<li><span>IDE</span>: Eclipse, Visual Studio, PhpStorm, Notepad++</li>
					<li><span>Tools</span>: FTP, MySQL, WAMP, LAMP stack, CodeIgniter</li>
					<li><span>Version Control</span>: Git, SVN</li>
					<li><span>Operating Systems</span>: Windows XP, Windows Vista, Windows 7, Windows 8, Ubuntu, Linux</li>
				</ul>
			</div>
		</article>
		
		<article>
			<h2>Education</h2>
			
			<div class="row">
				<ul>
					<li class="right">
						<ul>
							<li>Sept 2011</li>
						</ul>
					</li>
					<li class="header">Undergraduate, BSc (Hons) Computer Science</li>
					<li>Lagos State University</li>
					<li class="description">Concentration in Object Oriented Programming, Web Development, and General computing</li>
				</ul>
			</div>

		</article>
		
		<article>
			<h2>Experience</h2>
					
			<div class="row exp-list">
				<ul>

					<li class="header">IT Technical Support Agent, <span>Cyberlake Systems</span></li>
					<li><i class="fa fa-caret-right fa-1x"></i>Performed full system setups, including building and initial system configuration.</li>
					<li><i class="fa fa-caret-right fa-1x"></i>Installation of Windows or Linux Operating Systems.</li>
					<li><i class="fa fa-caret-right fa-1x"></i>Assisted clients in person, and over the phone, to troubleshoot their system’s technical issues. Followed up to verify there were no additional issues.</li>
					<li><i class="fa fa-caret-right fa-1x"></i>Installed software; provided technical support and guidance for the software.</li>
				</ul>
			</div>
			
			<div class="row exp-list">
				<ul>
					<li class="header">Website Maintenanc <span>Justweb LTD</span></li>
					<li><i class="fa fa-caret-right fa-1x"></i>Provided custom-written procedural documentation to the business owner, on how to properly use their website’s core functions.</li>
				</ul>
			</div>		
		</article>
		
		<article>
			<h2>contact</h2>
			
			<div class="row">
                <form action="process-resume.php" method="post">
                    <label for="">E-mail</label> <br>
                    <input type="email" name="mail" required style="padding: 4px; width:60%" placeholder="Valid E-mail" id=""> <p></p>
                    <label for="">Message</label> <br>
                    <textarea name="message" id="" required placeholder="Your message" cols="30" rows="5" style="padding: 4px; width:60%"></textarea>
                    <div>
                        <button type="submit" style="background-color: red; border:none; margin-top: 4px; color : white; padding:6px; width:20%">Submit</button>
                    </div>
                </form>
            </div>
		</article>
        <footer class="mx-40 my-4">
        <section class="">
                <div class="" style="display: inline;">
                    <a href="https://hng.tech/"> <img src="brand-logo.png" width="30%" alt=""></a>
                </div>

                <div class="" style="display: inline;">
                    <a href="https://ingressive.org/"> <img src="i4g.png" width="30%" alt=""></a>
                </div>

                <div class="" style="display: inline;">
                    <a href="https://zuri.team/"> <img src="zuri-logo-full.svg" width="30%" alt=""></a>
                </div>
        </section>
    </footer>
	</div>
</body>
</html>