<?php 
include "template/header.php"; 



//////////////////BRAND/////////////////////////////////
$sql = "SELECT * FROM brand";
$result = $conn->query($sql);
//////////////////Clients/////////////////////////////////
$sql_clients = "SELECT * FROM clients";
$result_clients = $conn->query($sql_clients);
/////////////////PROJECT///////////////////////////////



?>
            

        <div class="preload">
            <div class="preload-wrapper">
                <div class="background"></div>
                <img src="./assets/SVG/sentinellogotext-white.svg" alt="" style="object-fit: cover;">
            </div>
        </div>
        

<section class="hm-frame1">
	<div class="hm-frame1__vidbg">

        <img src="./assets/cover-photo.png" alt="" style="object-fit: initial; filter: blur(3px)">
<!--		<video autoplay="" muted="" loop=""  playsinline="">
			
		<source src="assets/Uploads/video.mp4"  type="video/mp4">
			
			Your browser does not support the video tag.
		</video>-->



	</div>
	
	<div class="frm-cntnr width--85">
		<div class="vertical-parent">
			<div class="vertical-align mx-3">
<!--				<div class="hm-frame1__logo">
                    <img src="./assets/SVG/sentinellogotext-white.svg" alt="" style="width: 200px; height: 200px">
				</div>-->
				<div class="hm-frame1__eyebrow">
					<h4 class="clr--white"></h4>
				</div>
				<div class="hm-frame1__desc">
                    <h2 class="clr--white fw-bolder ">The Sentinel Automation and  Security Solutions Inc.</h2>
                    <div class="spacing"></div>
					<h4 class="clr--white fw-bold ">"Engineering Safety and Security."</h4>
                    <p class="clr--white mt-3" style="font-size: 1.1rem; line-height: 1.6;">
                        is a Philippine based systems integrator specializing in security, automation, and building technologies. We deliver innovative, compliant, and reliable solutions tailored to our clients’ operational needs.
                    </p>
				</div>


<!--				<div class="vid">
					<div class="hm-frame1__vid" data-lg-size="1280-720" data-html="#video">
						<p>watch full video</p><img src="_resources/themes/m    ain/images/playbtn.png" alt="">
					</div>
				</div>-->

				<div style="display:none;" -lg-size="1280-720"id="video">
					<video class="lg-video-object lg-html5" controls=""   preload="none">
						
						<source src="assets/Uploads/video.mp4" type="video/mp4">
						
					Your browser does not support HTML5 video.
					</video>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hm-frame2">
	<div class="hm-frame2__bg" style="background-image: url('assets/homepage/ai.png');"></div>
	<div class="hm-frame2__bg" style="background-image: url('');"></div>
	<div class="frm-cntnr width--75 align-c">
		<div class="hm-frame2__content w-wrapper">

            <div class="abt-frame1__header">
                <h2 class="clr--gray--600 fw-bolder">Vision</h2>
            </div>

			<div class="clr--black--600 animate-up">
				<p>Provide efficient solution that satisfy the client requirements in compliance to the engineering and global standards.</p><p>&nbsp;</p>
			</div>

            <div class="abt-frame1__header">
                <h2 class="clr--gray--600 fw-bolder">Mission</h2>
            </div>

            <div class="clr--black--600 animate-up">
                <p>To be recognized as the leading systems integrator of security systems in the Philippines.</p><p>&nbsp;</p>
            </div>


            <div class="abt-frame1__header">
                <h2 class="clr--gray--600 fw-bolder">Who We Are</h2>
            </div>

			<p class="clr--black--600 animate-up">The Sentinel is a system integrator company with IT, electronics and electrical engineering
                specializations, designed to meet the clients' requirement while abiding to standard compliance.
                With the fast global modernization, the necessity for security arises along with safety. Our team of experts, key players and well rounded personnel with highly adaptive skills is the best asset of our company. We deliver quality workmanship for both software and hardware installation and integration. Having an in depth
                expertise in this technology sets us as highly preferred system integrator in the  industry.</p>
			<div class="readmore-btn animate-up">
				<a href="about.php">KNOW MORE </a>
			</div>
              <!--<nadagdag why choose us?>-->
            <div class="abt-frame1__header">
                <h2 class="clr--gray--600 fw-bolder">Why Choose Us?</h2>
            </div>

            <div class="clr--black--600 animate-up">
                <ul style="display: inline-block; text-align: left;">
                    <li>Licensed and accredited systems integrator in the Philippines</li>
                    <li>Extensive experience in commercial, industrial, and government projects</li>
                    <li>Expertise in system integration and engineering compliance</li>
                    <li>Trusted by leading developers, corporations, and institutions</li>
                    <li>End to end services from design to maintenance</li>
                </ul>
            </div>
		</div>  
	</div>
	<div class="leaf-trigger">
		<div class="leaf1">
			<!--<img src="_resources/themes/main/images/reader.png" alt="">-->
		</div>
		<div class="leaf2">
			<!--<img src="_resources/themes/main/images/card.png" alt="">-->
		</div>
	</div>
</section>




    <section class="hm-frame4">
        <div class="frm-cntnr width--90">
            <div class="hm-frame4__title align-c animate-up">
                <h2 class="clr--blue">Brands We Trust</h2>
            </div>


            <div class="brand-slider animate-up">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="brand-item">
                        <div class="container">
                            <!--<a href="https://localhost/search?q=rondo">-->
                            <img src="<?= $row['brand_image'] ?>" alt="<?= $row['brand_name'] ?>" style="object-fit: contain" class="p-3">

                            </a>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="mbrand-slider">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="brand-hldr">
                        <div class="inner">
                            <img src="<?= $row['brand_image'] ?>" alt="<?= $row['brand_name'] ?>" style="object-fit: contain">
                        </div>
                    </div>
                <?php } ?>
            </div>


            <div class="slick-arrows">
                <div class="left-arrow arrow">
                    <img src="_resources/themes/main/images/r-arrow.png" alt="">
                </div>
                <div class="right-arrow arrow">
                    <img src="_resources/themes/main/images/r-arrow.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="hm-frame4">
        <div class="frm-cntnr width--90">
            <div class="hm-frame4__title align-c animate-up">
                <h2 class="clr--blue">Our Valued Clients</h2>
            </div>


            <div class="brand-slider animate-up">
                <?php while ($row = mysqli_fetch_array($result_clients)) { ?>
                    <div class="brand-item">
                        <div class="container">
                            <img src="<?= $row['client_image'] ?>" alt="<?= $row['client_name'] ?>" class="p-5">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="mbrand-slider">
                <?php while ($row = mysqli_fetch_array($result_clients)) { ?>
                    <div class="brand-hldr">
                        <div class="inner ">
                            <img src="<?= $row['client_image'] ?>" alt="<?= $row['client_name'] ?>">
                        </div>
                    </div>
                <?php } ?>
            </div>


            <div class="slick-arrows">
                <div class="left-arrow arrow">
                    <img src="_resources/themes/main/images/r-arrow.png" alt="">
                </div>
                <div class="right-arrow arrow">
                    <img src="_resources/themes/main/images/r-arrow.png" alt="">
                </div>
            </div>
        </div>
    </section>






<!--<section>
    <div class="frm-cntnr width--90">
        <div class="hm-frame4__title align-c animate-up">
            <h2 class="clr--blue">Our Valued Clients</h2>
        </div>
        <div class="brand-slider animate-up">
            <div class="brand-item">
                <div class="wrapper">
                    <img src="assets/filinvest.png" alt="client" style="object-fit: contain">
                </div>
            </div>
            <div class="brand-item">
                <div class="wrapper">
                    <img src="assets/arthaland.png" alt="client" style="object-fit: contain">
                </div>
            </div>
            <div class="brand-item">
                <div class="wrapper">
                    <img src="assets/Datem.png" alt="client" style="object-fit: contain">
                </div>
            </div>

    </div>
</section>-->
<!--<section class="hm-frame5">
	<div class="frm-cntnr">
		
		<div class="hm-frame5__bg">
			
			<img src="assets/Uploads/295691121_406313868274085_721044710828111701_n.jpg" alt="">
			<div class="hm-frame5__content">
				<div class="hm-frame5__content-wrapper">
					<div class="hm-frame__title animate-up">
						<h3>GROUT GP- FLASH SALE</h3>
					</div>
					<div class="hm-frame5__sub animate-up">
						<h6>MIC Shield</h6>
					</div>
					<div class="hm-frame5__desc animate-up">
						<p>We&#039;re excited that World Home Depot is having a flash sale of MIC Shield Grout GP for only PHP 500.00 — until supplies last. Don’t miss it!</p>
					</div>
					<div class="btn-hldr btn animate-up">
						<a class="clr--white" href="products/construction-chemical-and-adhesives-solutions/mic-shield-grout-gp/index.htm">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->
<section class="hm-frame6">
	<div class="frm-cntnr">
		<div class="hm-frame6__top">
			<h2 class="animate-up">Turn-key Solutions and Special Projects</h2>
			<div class="viewall btn animate-up">
				<a class="clr--blue" href="projects.php">VIEW ALL PROJECTS</a>
			</div>
		</div>
		
		<div class="project-holder">
			
			<div class="project-container">
				
				<img src="assets/projectpage/axistower1.jpg" alt="">
				<div class="gradient"></div>
				<div class="project-title">
					<h6>
						Filinvest Axis Towers 1,2,3,4 <br>
Turnstile Access and DOAS Elevator Control System Integration
					</h6>
				</div>
			</div>
			
			<div class="project-container">
				
				<img src="assets/projectpage/fcc.jpg" alt="">
				<div class="gradient"></div>
				<div class="project-title">
					<h6>
						Filinvest Cyberzone Cebu 1 & 2<br>
Turnstile Access and DFRS Multi Zone Elevator Control System Integration
					</h6>
				</div>
			</div>
			
			<div class="project-container">
				
				<img src="assets/projectpage/nextower.jpg" alt="">
				<div class="gradient"></div>
				<div class="project-title">
					<h6>
						Nex Tower<br>
Door Access Control System and Revolving Door
					</h6>
				</div>
			</div>
			
		</div>
		
		<div class="viewall btn mobile">
			<a class="clr--blue" href="projects.php">VIEW ALL PROJECTS</a>
		</div>
	</div>
</section>


            

        </div>


        <script type="text/javascript">
            var pageID = 'HomePage',
            baseHref = 'localhost',
            themeDir = '/_resources/themes/main';
        </script>
        
<?php include "template/footer.php"; ?>