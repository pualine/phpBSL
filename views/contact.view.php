<?php require ('partials/head.php');?>

<?php require ('partials/nav.php');?>

<!--header-->
<?php require('partials/banner.php');?>

    <main>
<!--        content here-->
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h1>Enter Your Details</h1>
<!--        contact form    -->
            <form action="contact.view.php" method="get">
                <label>Username:</label><br>
                <input type="text" name="username"><br>
                <label>Password:</label><br>
                <input type="password" name="password"><br>
                <label>Email address:</label><br>
                <input type="email" name="example@gmail.com"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>


<?php
echo $_GET["username"];
echo $_GET["password"];
?>


<?php require ('partials/footer.php')?>
