<nav>
	<ul id="navMenu">
		<li class="home">
                    <?php
			if($path_parts['filename'] == 'index'){
                            print "Home";
                        } else {
                            print '<a href = "index.php">Home</a>';
                        }
                    ?>
		</li>
		
		<li class="custom">
                    <?php
			if($path_parts['filename'] == 'custom'){
                            print "Custom PC's";
                        } else {
                            print '<a href = "custom.php">Custom PC\'s</a>';
                        }
                    ?>
		</li>
		
		<li class="repair">
                    <?php
			if($path_parts['filename'] == 'repair'){
                            print "Repair Services";
                        } else {
                            print '<a href = "repair.php">Repair Services</a>';
                        }
                    ?>
		</li>
		
		<li class="maintenance">
                    <?php
			if($path_parts['filename'] == 'maintenance'){
                            print "Computer Maintenance";
                        } else {
                            print '<a href = "maintenance.php">Computer Maintenance</a>';
                        }
                    ?>
		</li>
		
		<li class="about">
                    <?php
			if($path_parts['filename'] == 'about'){
                            print "About Us";
                        } else {
                            print '<a href = "about.php">About Us</a>';
                        }
                    ?>
		</li>
	</ul>
</nav>