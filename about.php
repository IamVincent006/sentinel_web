

<?php 
include "template/header.php"; 



//////////////////BRAND/////////////////////////////////
$aboutsql = "SELECT * FROM aboutus";
$aboutresult = $conn->query($aboutsql);
$aboutrow = mysqli_fetch_array($aboutresult);


$timelinesql = "SELECT * FROM timeline";
$timelineresult = $conn->query($timelinesql);
//$timelinerowrow = mysqli_fetch_array($timelineresult);


/////////////////PROJECT///////////////////////////////


?>

        
    

           <section class="abt-frame1">
	<div class="frm-cntnr"  >
		<div class="abt-frame1__img-hldr" style="background-image: url('assets/cover-photo-no-text.png');" >
			<div class="abt-frame1__img p-5"></div>
		</div>
		<div class="abt-frame1__content">
			<div class="vertical-parent">
				<div class="vertical-align">
					<div class="abt-frame1__content-wrapper">
						<div class="abt-frame1__header">
							<h2 class="clr--white">Who We Are</h2>
						</div>
						<div class="abt-frame1__desc scroll-custom">
							<p class="clr--white"> <?= $aboutrow['whoweare'] ?></p>
						</div>
						<div class="abt-btn vid">
                            <a class="clr--white" href="assets/The-Sentinel-Company-Profile_2024_00.pdf" target="_blank">DOWNLOAD SENTINEL COMPANY PROFILE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="abt-frame2">
	<div class="frm-cntnr width--80">
		<div class="abt-timeline">

			<?php while ($timelinerow = mysqli_fetch_array($timelineresult)) { ?>
				<div class="abt-timeline__item">
					<div class="image-hldr animate-up">
						<div class="image-item" style="background-image: url(<?= $timelinerow['image'] ?>); object-fit: contain; "></div>
					</div>
					<div class="abt-timeline__desc">
						<div class="desc-wrapper">
							<div class="timeline-date animate-up">
								<h1><?= $timelinerow['year'] ?></h1>
							</div>
							<div class="timeline-text animate-up">
								<p>
									<?= $timelinerow['details'] ?>
								</p>
							</div>
						</div>
					</div>
					<div class="timeline-dot"></div>
				</div>

			<?php } ?>
			

			
			
			
		</div>
	</div>
</section>



<section class="abt-frame3" style="background: #162747">
	<div class="frm-cntnr width--80 w-wrapper">
		<h2 class="clr--black animate-up text-center" style="color: white;">Mission</h2>
		<div class="abt-desc animate-up">
			<p class="text-center"> <?= $aboutrow['mission'] ?><br>
<br>
</p>
		</div>

		<h2 class="clr--black animate-up text-center" style="color: white;">Vision</h2>
		<div class="abt-desc animate-up">
			 <p class="text-center"><?= $aboutrow['vision'] ?><br><br></p>
		</div>
	</div>
</section>

<div class="my-xl-5">


</div>


        </div>

<section>
    <div class="spacing"></div>
    <h2 class="clr--black animate-up text-center text-black">Technical Structure</h2>
    <div class="spacing"></div>

    <div class="row row-cols-1 row-cols-lg-2 w-100 mx-auto frm-cntnr">

        <div class="col p-3">
            <div class="product-card-center w-100">
                <div class="d-flex justify-content-center align-items-center mx-auto my-auto justify-content-center p-3">
                    <img src="./assets/SVG/SOFT.%20DEVELOPMENT.svg" class="product-card-img " alt="Parking Automation 2" style="height: 200px; width: 200px;">
                </div>

                <div class="card-body my-auto py-3">
                    <h3 class="product-card-title text-black py-2 text-align-center fw-bold text-center">SOFTWARE DEVELOPMENT</h3>
                    <p class="cards-content px-5 py-4 text-align-justify text-black text-justify">We turn ideas into reality. Our skilled engineers craft software solutions using the latest technologies. Our expertise spans the entire development lifecycle, from meticulously designing architecture to testing and deployment. This ensures our software is up to standard.</p>
                </div>
            </div>
        </div>

        <div class="col p-3">
            <div class="product-card-center w-100 ">
                <div class="d-flex justify-content-center align-items-center mx-auto my-auto justify-content-center p-3">
                    <img src="./assets/SVG/PROJECT%20MANAGEMENT.svg" class="product-card-img " alt="Parking Automation 2" style="height: 200px; width: 200px;">
                </div>

                <div class="card-body my-auto py-3">
                    <h3 class="product-card-title text-black py-2 text-align-center fw-bold text-center">PROJECT MANAGEMENT</h3>
                    <p class="cards-content px-5 py-4 text-black text-align-justify text-justify">We orchestrate success! Our project management team thrives on keeping complex projects on track. We leverage industry-leading methodologies and cutting-edge tools to meticulously plan, execute, and monitor progress. We ensure a successful project delivery.</p>
                </div>
            </div>
        </div>

        <div class="col p-3">
            <div class="product-card-center w-100 ">
                <div class="d-flex justify-content-center align-items-center mx-auto my-auto justify-content-center p-3">
                    <img src="./assets/SVG/ENGINEERING-DESIGN.svg" class="product-card-img " alt="Parking Automation 2" style="height: 200px; width: 200px;">
                </div>

                <div class="card-body my-auto py-3">
                    <h3 class="product-card-title text-black py-2 text-align-center fw-bold text-center">ENGINEERING & DESIGN</h3>
                    <p class="cards-content px-5 py-4 text-align-justify text-black text-justify">Unleash your vision's potential! Our engineering design team blends creativity with technical expertise to transform ideas into functional, high-performing solutions. We use a systematic approach, iterating through prototypes until we bridge the gap.</p>
                </div>
            </div>
        </div>

        <div class="col p-3">
            <div class="product-card-center w-100 ">
                <div class="d-flex justify-content-center align-items-center mx-auto my-auto justify-content-center p-3">
                    <img src="./assets/SVG/POST-PROJECT.svg" class="product-card-img " alt="Parking Automation 2" style="height: 200px; width: 200px;">
                </div>

                <div class="card-body my-auto py-3">
                    <h3 class="product-card-title text-black py-2 text-align-center fw-bold text-center">POST PROJECT SERVICES</h3>
                    <p class="cards-content px-5 py-4 text-black text-align-justify text-justify">Our commitment extends beyond the finish line! We offer comprehensive post-project services to ensure your success in the long run.  This includes user training and support, ongoing system maintenance and optimization, and readily available technical assistance.</p>
                </div>
            </div>
        </div>
    </div>
</section>



        <!-- !!! -->
        <script type="text/javascript">
            var pageID = 'AboutPage',
            baseHref = 'localhost',
            themeDir = '/_resources/themes/main';
        </script>



        
<?php include "template/footer.php"; ?>











   


