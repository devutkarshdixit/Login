<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/cart.png" type="image/icon">
    <title>Smart Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <nav>
        <a href="index.php"><img src="images/cart.png"></a>

        <div class="nav-links" id="navLinks">

            <i class="fa fa-times" onclick="hideMenu()"></i>

            <!-----menu contents-->

            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
                <li><a href="About.php"><i class="fa fa-book"></i> ABOUT</a></li>
                <li><a href="Contact.php"><i class="fa fa-address-book"></i> CONTACT</a></li>
            </ul>

        </div>

        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Smart Shopping Cart</h1>
    <form action="">
        <input type="text" placeholder="Name" required>
        <input type="password" placeholder="Password" id="myInput" required>
        <i class="bi bi-eye-slash" id="togglePassword"></i><br>
        <a href="forgot.php" id="line">Forget password?</a><br><br>
        <input type="submit" id="btn" value="Sign In"><br><br>
        <p>Don't have an Account?</p>
        <a id="btn" href="signup.php">Sign Up</a>
    </form>

    <div class="footer">
        <p>Created by <a target="_blank" href="https://utkarsh-dixit-git.github.io/utkarshdixit/">Utkarsh Dixit</a> &
            team</p>
    </div>

    <script src="script.js"></script>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#myInput");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>
</body>

</html>
