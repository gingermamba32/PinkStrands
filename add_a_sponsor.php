<?php
        $username2 = "pinkstrandsuser";
        $password2 = "pah0oN9voigieG7j";
        $hostname2 = "198.90.23.189:3306"; 
        $dbname2   = "pinkstrands";

       
        $db_selected2 = mysql_connect($hostname2, $username2, $password2) 
         or die("<h1>Unable to connect to MySQL" . mysql_error() . "</h1>");

        mysql_select_db($dbname2, $db_selected2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Pink Strands</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <p style="text-align:center; font-size: 40px; background: #ff1493; border-radius: 5px;">Add a New Salon</p>
  </div>
</div>

<div class="container" style="text-align:center; padding-bottom: 50px;">
        <h3>Please input a new salon participating in our Breast Cancer Drive </h3>
        <h3>Note: You may any or all of the fields below</h3>
    
</div>


<form action="add_new_sponsor.php" method="POST" style="width: 300px; margin: 0 auto; padding: 15px 15px; border-radius: 10px; background-color:#eee;">
    <div class="form-group">
        <label for="name">Salon:</label>
        <input type="text" id="salon" class="form-control" name="salon" width="100"/>
    </div>
    <div class="form-group">
        <label for="mail">Address:</label>
        <input type="text" id="address" class="form-control" name="address" width="100"/>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" class="form-control" name="city" width="100"/>
    </div>
    <div class="form-group">
        <label for="state">Select State:</label>
        <select name="state">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    </div>
    <div class="form-group">
        <label for="mail">Zip:</label>
        <input type="number" id="zip" class="form-control" name="zip" width="100"/>
    </div>
    <div class="form-group">
        <label for="mail">Email:</label>
        <input type="email" id="mail" class="form-control" name="email" width="100"/>
    </div>
    <div class="form-group">
        <label for="msg">Phone:</label>
        <input id="phone" type="number" class="form-control" name="phone" width="100"/>
    </div>
    <button class="btn" align="center" type="submit" name="submit" id="submit" style="display:block; margin:0 auto; background-color: #ff1493;">Submit</button>
</form>

<div style="height: 100px;"></div>
<div class="container" style="text-align:center; padding-bottom: 50px;">
        <h3>Search Salons by state to update/delete</h3>       
</div>

<form action="add_a_sponsor.php" method="POST" style="width: 300px; margin: 0 auto; padding: 15px 15px; border-radius: 10px; background-color:#eee;">
    <div class="form-group">
        <label for="state2">Select State:</label>
        <select name="state2">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    </div>
    <button class="btn" align="center" type="submit" name="search" id="search" style="display:block; margin:0 auto; background-color: #ff1493;">Submit</button>
</form>
<div style="height: 75px;"></div>

    <?php
            echo "<div class='container'";
            // echo "<p style='text-align:center; font-size:14px;font-weight:600;'>"
            if(isset($_POST['search']))  // if form was submitted (if you came here with form data)
            {
                $state = $_POST['state2'];
                $state = mysql_real_escape_string($state);
                $query = "SELECT salon, address, city, state, zip, email, phone, uid FROM salons WHERE state = '$state'";
                $result = mysql_query($query);
                if($result){
                                //echo " </br>Records queried successfully";
                                while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                                    
                                    echo "<form action='add_a_sponsor.php' method='post'><p style='text-align:center; font-size:18px;font-weight:600;'>" . $row['salon'] . "</br>" . $row['address'] . "</br>" . $row['city'] . ", " . $row['state'] . " " . $row['zip'] . "</br>" . "Phone:" . $row['phone'] . "</br>" . "Email: <a href='mailto:".$row['email']."''>" .$row['email']."</a>" . "</br>" . "<button type='submit' name='deleteItem' id='deleteItem' value='" .$row['uid'] . "'>DELETE</button></br></br></br></p></form>";  //$row['index'] the index here is a field name
                                }  
                            } 
                            else{
                                echo "ERROR: Could not execute $sql. " . mysql_error($db_selected2);
                            }
            }

            echo "</div>";

            if(isset($_POST['deleteItem']))
            {
                $id = $_POST['deleteItem'];
                $id = mysql_real_escape_string($id);
                $query = "DELETE FROM salons WHERE uid = '$id'";
                $delete = mysql_query($query);
                if($delete){
                    echo "<p style='text-align:center; font-size: 22px; font-weigth:600;'>Records queried successfully</p>";
                } else{
                    echo "<h1 style='text-align: center; font-size: 35px;'>ERROR: " . mysql_error($db_selected2) . "</h1>";
                }
                
            }


            mysql_close($db_selected2);

    ?>

<div style="height: 100px;"></div>
</body>
</html>