<html>

    <head>
       <title> Login Container </title>
       <link rel="stylesheet" href="css/style.css"> 
    </head>

    <body>
        <h1> Login </h1>
        <form class="fom">
            <label for="fname">First Name</label>
            <input type="text" id="fname" placeholder="Your Name..."><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" placeholder="Your Last Name..."><br>

            <label for="country">Country</label>
             <select id="country">
                <option>India</option>
                <option>USA</option>
                <option>Canada</option>
                <option>Uk</option>
            </select><br>

            <p>Gender</p>

            <input type="radio" name="gender">
            <label>Male</label>

            <input type="radio" name="gender">
            <label>Female</label>

            <input type="radio" name="gender">
            <label>Other</label><br>

            <input type="submit" id="submit">

        </form>
    </body>
</html>