<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "select") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="select.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "qu01") {
            print '<li class="activePage">Query_1</li>';
        } else {
            print '<li><a href="qu01.php">Query_1</a></li>';
        }
        
        if ($path_parts['filename'] == "qu02") {
            print '<li class="activePage">Query_2</li>';
        } else {
            print '<li><a href="qu02.php">Query_2</a></li>';
        }
		if ($path_parts['filename'] == "qu03") {
            print '<li class="activePage">Query_3</li>';
        } else {
            print '<li><a href="qu03.php">Query_3</a></li>';
        }
		if ($path_parts['filename'] == "qu04") {
            print '<li class="activePage">Query_4</li>';
        } else {
            print '<li><a href="qu04.php">Query_4</a></li>';
        }
		if ($path_parts['filename'] == "qu05p") {
            print '<li class="activePage">Query_5</li>';
        } else {
            print '<li><a href="qu05.php">Query_5</a></li>';
        }
		if ($path_parts['filename'] == "qu06") {
            print '<li class="activePage">Query_6</li>';
        } else {
            print '<li><a href="qu06.php">Query_6</a></li>';
        }
		if ($path_parts['filename'] == "qu07") {
            print '<li class="activePage">Query_7</li>';
        } else {
            print '<li><a href="qu07.php">Query_7</a></li>';
        }
		if ($path_parts['filename'] == "qu08") {
            print '<li class="activePage">Query_8</li>';
        } else {
            print '<li><a href="qu08.php">Query_8</a></li>';
        }
		if ($path_parts['filename'] == "qu09") {
            print '<li class="activePage">Query_9</li>';
        } else {
            print '<li><a href="qu09.php">Query_9</a></li>';
        }
		if ($path_parts['filename'] == "qu10") {
            print '<li class="activePage">Query_10</li>';
        } else {
            print '<li><a href="qu10.php">Query_10</a></li>';
        }
		if ($path_parts['filename'] == "qu11") {
            print '<li class="activePage">Query_11</li>';
        } else {
            print '<li><a href="qu11.php">Query_11</a></li>';
        }
        
        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

