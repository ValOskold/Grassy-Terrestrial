
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>WT Log In</title>
        <!-- <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/index.css" /> -->
        <link rel="stylesheet" href="css/login.css" />
        <style>

        </style>
    </head>
    <body>
        <!-- fixed header begin -->
        <header>
            <div class="h-center">
                <a href="index.html"><img id="logo" src="images/logo.svg" alt="logo" /></a>
            </div>

        </header>
        <!-- main content area begin -->
        <main>
            <!-- Enter information -->
            <section id="">
                <h1 id="please" class="h-center">Please enter your login information:</h1>
                <form action="processing-Login.php" method="POST">
                    <fieldset class="flexbox" >
                    <label for="userName">Username</label>
                    <input type="text" name="userName" required />
                    <label for="cb">Doctor Sign in</label>
                    <input type="checkbox" name="cb" />
                    <label for="password">Password</label>
                    <input type="password" name="password" required />
                    <a id="forgotA" class="h-center smallText" href="#">Forgot Email / Password?</a>
                    </fieldset>
                    <hr>
                    <p id="noAccountP" class="h-center smallText">Do not have an account? <a href="getstarted.php">Get Started here.</a></p>
                    <input  id="btn-submit" type="submit" value="Log in" name="submit" required />
                </form>

            </section>

            <footer>
            </footer>
        </main>
    </body>
</html>
