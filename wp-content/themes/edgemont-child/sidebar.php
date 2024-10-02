<aside id="mainSidebar">
	<section class="badges">
		<img src="https://edgemont.provo.edu/wp-content/uploads/2024/07/utah-stem-school-designation-logo-07092024.png" class="center" alt="Best Elementary Schools by US News Badge" />
		<!-- Begin National Blue Ribbon Schools Program Copy-n-paste Embed Code for Edgemont Elementary School-->
		<a title="link to school profile" href="//nationalblueribbonschools.ed.gov/awardwinners/winning/24ut103pu_edgemont_elementary_school.html?ref=embedcode&schoolcode=24UT103PU">
			<img src="https://edgemont.provo.edu/wp-content/uploads/2024/10/137407-10012024-national-blue-ribbon-logo-transparent.png" height="200" width="200" alt="National Blue Ribbon Schools Program Logo - At Edgemont Elementary We SOAR!" id="National_Blue_Ribbon_Schools_Program_Logo" title="National Blue Ribbon Schools Program Logo" />
			<!-- End National Blue Ribbon Schools Program Copy-n-paste Embed Code  for Edgemont Elementary School-->
	</section>


	<section class="calendar-agenda">
		<h1>Today’s Events</h1>
		<?php echo do_shortcode('[calendar id="172"]'); ?>
		<a href="<?php echo get_home_url(); ?>/school-information/calendar/">Edgemont Elementary School Calendar (Month View)</a>
	</section>
	<section>
		<h1>Parent Resources</h1>
		<ul class="imagelist">
			<li>
				<a href="https://grades.provo.edu/public/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
					<span>PowerSchool (Grades & Attendance)</span>
				</a>
			</li>
			<li>
				<a href="https://canvas.provo.edu">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
					<span>Canvas Login</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/study-at-home/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/study-at-home.svg" alt="" />
					<span>Study At Home</span>
				</a>
			</li>

			<li>
				<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
					<span>Find Your Teacher</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_home_url(); ?>/school-information/pta/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pta-lt.svg" alt="" />
					<span>PTA</span>
				</a>
			</li>
			<?php
			//call in Child Nutrition items
			echo do_shortcode('[cn-sidebar]');
			?>
			<li>
				<a href="https://www.schools.utah.gov/curr/parentguides">
					<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
					<span>USBE Parent Guides to Student Success</span>
				</a>
			</li>
			<li>
				<a href="https://reportcard.schools.utah.gov/School/OverAllPerformance?SchoolID=1225&DistrictID=1222&SchoolNbr=102&SchoolLevel=K8&IsSplitSchool=0&schoolyearendyear=2023">
					<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
					<span>School Report Card</span>
				</a>
			</li>
		</ul>
		<a href="https://www.peachjar.com/index.php?region=33067&a=28&b=138"><img src="https://edgemont.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
		<a href="https://safeut.med.utah.edu/"><img src="https://edgemont.provo.edu/wp-content/uploads/2019/02/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
		<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>

	</section>
</aside>