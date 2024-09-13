<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foam</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <form action="connection.php" method="POST">
            <header>
                <img id="logo" src="collage_logo-removebg-preview.png" alt="Collage-logo">
                <div class="first">TULSIRAMJI GAIKWAD-PATIL </div>
                <div class="second">College of Engineering and Technology</div>
                <div class="third">-AN AUTONOMOUS INSTITUDE</div>
            </header>
            <main>
                <h1>Personal Details for Identity Card</h1>
                <br>
                <div class="details">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" placeholder="Enter full name" name="fullname">
                    <br>
                    <label for="address">Address</label>
                    <input type="text" id="address" placeholder="Enter your address" name="address">
                    <br>
                    <label for="mnumber">Mobile No.</label>
                    <input type="text" id="mnumber" placeholder="Enter mobile number" name="mnumber">
                    <br>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="abc@gmail.com" name="email">
                    <br>
                    <label for="collegeid">College Id</label>
                    <input type="text" id="collegeid" placeholder="TBT1234" name="collegeid">
                    <br>
                    <label for="depart">Department</label>
                    <select id="depart" name="depart">
                        <option value="select">Select Department</option>
                        <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                    <br>
                    <div>
                        <input id="submit" type="submit" name="register" value="Register">
                    </div>
                </div>
            </main>
        </form>
    </fieldset>
</body>
</html>
