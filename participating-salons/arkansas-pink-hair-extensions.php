<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <title>Pink Strands For The Cause - Arkansas Pink Hair Extensions</title>
        <meta name="keywords" content="Arkansas pink hair extensions, pink hair, pink strands for cause, pink hair strands in Arkansas" />
        <meta name="description" content="Find a salon in Arkansas to get your pink hair extension installed for a $10 donation towards breast cancer awareness." />
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
    </head>
    <body id="home_body">
        <div id="site_wrapper">
            <?php include ('includes/header.php') ?>
            <div style="margin-top:5px;">
                <h1>Participating Pink Strand Salons in Arkansas</h1>
                <p>The salons listed below have partnered with Donna Bella to join the fight against breast cancer. Each salon will install our pink strand hair extensions for $10 per strand. 50% of everything they make will be donated to the National Breast Cancer Foundation. <a href="/nbcf.php">Click Here</a> to read more about how your funds will help support those with breast cancer.</p>
                <h2><u>Salons</u></h2>
                <p style="font-size:14px;">
                    Capelli Salon and More<br/>
                    2015 Main Drive<br/>
                    Fayetteville, AR 72704<br/>
                    Phone: 479-966-4440<br/>
                    Email: <a href="mailto:ewright0124@aol.com">ewright0124@aol.com</a>
                </p>
                <p style="font-size:14px;">
                    A Head of Time<br/>
                    4405 Central Ave.<br/>
                    Hot Springs, AR 72022<br/>
                    Phone: 501-276-0535<br/>
                    Email: <a href="mailto:thathairjen@yahoo.com ">thathairjen@yahoo.com </a>
                </p>
                <?php
                    $username1 = "pinkstrandsuser";
                    $password1 = "pah0oN9voigieG7j";
                    $hostname1 = "198.90.23.189:3306"; 
                    $dbname1   = "pinkstrands";



                    // //connection to the database
                    $db_selected = mysql_connect($hostname1, $username1, $password1) 
                     or die("Unable to connect to MySQL" . mysql_error());
                    //echo "Connected to MySQLXXX<br>";

                    // //select a database to work with
                    mysql_select_db($dbname1, $db_selected);
                    // // if (!$con){
                    // //     die('could not connect: ');
                    // // }
                     //echo 'here';

                    echo "<p style='font-size:14px;'>";

                        $sql = "SELECT salon, address, city, state, zip, email, phone FROM salons WHERE state = 'AL'";
                        $result = mysql_query($sql);

                        if($result){
                            //echo " </br>Records queried successfully";
                            while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                                echo $row['salon'] . "</br>" . $row['address'] . "</br>" . $row['city'] . ", " . $row['state'] . " " . $row['zip'] . "</br>" . "Phone:" . $row['phone'] . "</br>" . "Email: <a href='mailto:".$row['email'].">" .$row['email']."</a>" . "</p>";  //$row['index'] the index here is a field name
                            }  
                        } 
                        else{
                            echo "ERROR: Could not execute $sql. " . mysql_error($db_selected);
                        }
                    //$result = mysql_query($sql);

                    // while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                    //     echo $row['salon'] . "</br>" . $row['address'] . "</br>" . $row['city'] . "</br>" . $row['zip'] . "</br>" . $row['email'] . "</br>" . $row['phone'];  //$row['index'] the index here is a field name
                    // }

                    // echo "</p>"

                    // mysql_close($db_selected);

                ?>

                <!-- Start Map-->
                <div align="center">
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="530" height="410" id="usa_locator" align="">
                        <param name="movie" value="usa_locator.swf" />
                        <param name="flashvars" value="xmlfile1=usa_locator.xml" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent" />
                        <param name=bgcolor value=#f5f5f5 />
                        <embed src="usa_locator.swf?xmlfile1=usa_locator.xml" quality=high  wmode="transparent" bgcolor=#f5f5f5  width="530" height="410" name="usa_locator" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                    </object>
                </div>
                <!-- End Map-->
                <p>Would you like to become a participating salon? <a href="/partner_with_us.php">Click here</a> for information.</p>
            </div>
            <?php include ('includes/footer.php') ?>
        </div>
    </body>
</html>