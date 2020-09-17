<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="baseStyle.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div>

        <!-- method POST oculta info en link, GET no lo hace y se envian a traves de la url-->
        <form method="POST" action="validarFormulario.php">

            <fieldset>
                <h1>Contact form</h2>
                    <h3>1.Your basic info</h3>

                    <label for="name">Name</label> <br>
                    <input type="text" name="name" placeholder="name" id="name" value=" ">
                    <br>
                    <label for="email">Email</label> <br>
                    <input type="email" name="email" placeholder="email" id="email">
                    <br>
                    <label for="pass">Password</label> <br>
                    <input type="password" name="password" placeholder="pass" id="pass">
                    <br>
                    <label for="birthday">Birthday</label> <br>
                    <input type="date" name="birthday" placeholder="dd/mm/aa" id="birthday">
                    <br>
                    Sex <br>
                    <label for="male">Male</label>
                    <input type="radio" name="sex" id="male" value="Male">
                    <label for="female">Female</label>
                    <input type="radio" name="sex" id="female" value="Female">

                    <h3>2.Your profile</h3>

                    <label for="aboutYou">About you</label>
                    <br>
                    <input type="text" name="aboutYou" id="aboutYou">
                    <br>
                    <label for="role">Role</label>
                    <br>
                    <select name="role">Role
                        <option value="" disabled selected>Select option</option>
                        <option value="Front end developer">Front end developer</option>
                        <option value="Back end developer">Back end developer</option>
                    </select>
                    <br>
                    <label for="interests">Interests</label> <br>
                    <input type="checkbox" name="interests[]" id="Data base" value="Data base">
                    <label for="Data base">Data base</label>
                    <input type="checkbox" name="interests[]" id="Web development" value="Web development">
                    <label for="Web development">Web development</label>
                    <input type="checkbox" name="interests[]" id="Design" value="Design">
                    <label for="Design">Design</label>
                    <br>

                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">


            </fieldset>
        </form>

    </div>
 





</body>

</html>