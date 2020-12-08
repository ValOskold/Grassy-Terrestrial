
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
        <main>
            <!-- Enter information -->
            <section id="section1">
                <h1 id="please" class="h-center">Please select your role:</h1>
                <p class="h-center medText">Sign up for your account as:</p>
                <form class="moreMarginBottom" action="" method="POST">
                    <fieldset class="flexbox" >
                    <a class="aBtn" href="#section2"><input id="btnDoctor" type="button" name="doctor" value="As Healthcare Practitioner"/></a>
                    <p class="h-center smallText">OR</p>
                    <a class="aBtn" href="#section3"><input id="btnPatient" type="button" name="patient" value="As Patient"/></a>
                    </fieldset>
                    <hr>
                    <p id="noAccountP" class="h-center smallText">Already have an account? <a href="login.php">Log In here.</a></p>
                </form>
            </section>

            <section id="section2">
                <h1 class="h-center morePaddingTop">Healthcare Practitioner Sign Up</h1>
                <form class="flexContainer" action="processing-RegistrationPageDoctor.php" method="POST">
                    <fieldset class="flexbox" >
                    <label for="Fname">First Name</label>
                    <input class="flexChild" type="text" name="Fname" required />
                    <label for="Lname">Last Name</label>
                    <input class="flexChild" type="text" name="Lname" required />
                    <label for="DOB">DOB</label>
                    <input class="flexChild" type="text" name="DOB" required />
                    <label for="Email">Email</label>
                    <input class="flexChild" type="text" name="Email" required />
                    <label for="Pass">UserName</label>
                    <input class="flexChild" type="text" name="UserName" required />
                    <label for="Pass">Password</label>
                    <input class="flexChild" type="text" name="Pass" required />
                    </fieldset>
                    <fieldset class="flexbox" >
                    <label for="PhoneNumber">Phone Number</label>
                    <input class="flexChild" type="text" name="PhoneNumber" required />
                    <label for="MedicalEstablishment">Medical Establishment</label>
                    <input class="flexChild" type="text" name="MedicalEstablishment" required />
                    <label for="MedicalLocation">Medical Location</label>
                    <textarea class="flexChild flexTall" name="MedicalLocation" rows="3" cols="29" required ></textarea>
                    </fieldset>
                    <input  id="btn-submit" type="submit" value="Log in" name="submit" required />
                </form>

            </section>
            <section id="section3">
                <h1 class="h-center morePaddingTop">Patient Sign Up</h1>
                <form class="flexContainer" action="processing-RegistrationPagePatient.php" method="POST">
                    <fieldset class="flexbox" >
                    <label for="Fname">First Name</label>
                    <input class="flexChild" type="text" name="Fname" required />
                    <label for="Lname">Last Name</label>
                    <input class="flexChild" type="text" name="Lname" required />
                    <label for="DOB">DOB</label>
                    <input class="flexChild" type="text" name="DOB" required />
                    <label for="Email">Email</label>
                    <input class="flexChild" type="text" name="Email" required />
                    <label for="Pass">UserName</label>
                    <input class="flexChild" type="text" name="UserName" required />
                    <label for="Pass">Password</label>
                    <input class="flexChild" type="text" name="Pass" required />
                    </fieldset>
                    <fieldset class="flexbox" >
                      <!--We dont have a variable for assigned doctor in signup -->
                    <label for="Assigned">Assigned Doctor / Clinic</label>
                    <input class="flexChild" type="text" name="Assigned" required />
                    <label for="PhoneNumber">Phone Number</label>
                    <input class="flexChild" type="text" name="PhoneNumber" required />
                    <!--We dont have a variable for assigned Address in signup -->
                    <label for="Address">Address</label>
                    <textarea class="flexChild flexTall" name="Address" rows="3" cols="29" required ></textarea>
                    </fieldset>
                    <input  id="btn-submit2" type="submit" value="Log in" name="submit" required />
                </form>
            </section>
            <footer>
            </footer>
        </main>
    </body>
</html>
