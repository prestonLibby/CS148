<?php
	include "top.php";
	
	//now print out each record
	print '<table>';
	$columns = 1;
    $query = 'SELECT pmkNetId FROM tblTeachers';
	$info2 = $thisDatabaseReader->testquery($query, "", 0, 0, 0, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    $highlight = 0; // used to highlight alternate rows
	print '<h2>Number of Teachers by NetID</h2>';
	print '<h2>Total Records: ';
	print count($info2);
	print '</h2>';
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
	
	include "footer.php";
?>