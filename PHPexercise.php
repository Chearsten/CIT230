<!DOCTYPE html>
<html lang="en">
<head>
    <title>CIT 230: Front-end Web Dev - BYU-Idaho</title>
	<meta charset="utf-8" />
     <title>PHP Exercise</title>
    
    <meta name="author" content="Chearsten Webb">
    <meta name="description" content="This page is my Brigham Young University-Idaho CIT230 course assignment.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/phpcssexer.css">
</head>
<body>
<div class="wrapper">
    <header>
	<h1>Chearsten Webb<h1>
	<div class="date">
	<?php include 'header.php';?>
	</div>
        
    </header>
    <main>
    <section>
        <h3>PHP System Information</h3>
        <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Result</th>
            </tr>
            
        </thead>

        <tbody>
            <tr>
             <td>PHP Version</td>
             <td><?php echo phpversion();?></td>
            </tr>
            <tr>
             <td>Operating System</td>
             <td><?php echo php_uname("s");?></td>
            </tr>
            <tr>
             <td>Host Name</td>
             <td><?php echo php_uname("n");?></td>
            </tr>
            <tr>
             <td>Version Installed</td>
             <td><?php echo php_uname("v");?></td>
            </tr>      
            <tr>
             <td>Machine Type</td>
             <td><?php echo php_uname("m");?></td>
            </tr>       
        </tbody>
      </table>
    </section>
    <section>
    <h3>PHP Dynamic Table</h3>
    <table>
    <tr>

    <?php
    $i=1;
    while($i<26) {
        echo "<td>" .$i. "</td>";
        if($i%5==0 && $i !=25){
        echo "</tr><tr>";
        }
        $i=$i +1;
    }
    ?>
    </tr>       
    </table>
	</section>
       
    </main>
    <footer>
		<?php include 'footer.php';?>
    </div>
    </footer>
</body>
</html>
