<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    echo "Birthdate: " . $_POST['birthdate'];
    echo "<hr />";
    echo "Email Address: " . $_POST['email'];
    echo "<hr />";
    echo "Program: " . $_POST['program'];
    echo "<hr />";
    echo "Favorite Color: " . $_POST['favorite_color'];
    echo "<hr />";
    echo "Superpower Level: " . $_POST['superpower_level'];
    echo "<hr />";
    // Debug
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<h1>Enter Data</h1>
<form method="POST" action="profile-form.php">
Name: <input type="text" name="complete_name" style="width:100px"/><br />
Birthdate: <input type="date" name="birthdate" style="width:100px"/><br />
Email Address: <input type="email" name="email" style="width:100px"/><br />
Program:
<select name="program" style="width:100px">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" style="width:100px"/><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" style="width:100px"/><br />
<button>Submit</button>
</form>


<?php
endif;
?>