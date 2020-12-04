
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>WT Get Started</title>
        <!-- <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/index.css" /> -->
        <link rel="stylesheet" href="css/getstarted.css" />
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
        <main id="afterHeader">
            <!-- Enter information -->
            <section id="">
                <h1 id="please" class="h-center">Please select your role:</h1>
                <p class="h-center medText">Sign up for your account as:</p>
                <form action="" method="POST">
                    <fieldset class="flexbox" >
                    <input type="button" name="doctor"  value="As Healthcare Practitioner"/>
                    <p class="h-center smallText">OR</p>
                    <input type="button" name="patient" value="As Patient"/>
                    </fieldset>
                    <hr>
                    <p id="noAccountP" class="h-center smallText">Already have an account? <a href="login.php">Log In here.</a></p>
                    <input  id="btn-submit" type="submit" value="Log in" name="submit" required />
                </form>
                
            </section>
            
            <footer>            
            </footer>
        </main>
    </body>
</html>