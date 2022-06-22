<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP REST API</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">

        <header>
            <div class="logo">
                PHP REST API
            </div>
            <nav>
                <ul>
                    <li><a href="#doc"> Docs </a></li>

                    <li><a href="#private"> Private Key</a></li>

                    <li><a href="#public"> Public Key </a></li>
                </ul>
            </nav>
        </header>


        <section id="public">
            <div class="container">
                <h2>Your Public Key to test The Api</h2>
                <h3>1234567</h3>
            </div>
        </section>

        <div id="response">

        </div>

        <section id="private">
            <div class="container">
                <div>
                    <form action="" id="generate_key">
                        <div>
                            <h3>Generate Your Api Key</h3>
                        </div>
                        <input type="email" placeholder="Email" name="email" id="">
                        <button type="submit">Generate</button>
                    </form>
                </div>
                <div>
                    <form action="" id="get_key">
                        <div>
                            <h3>Get Your Api Key</h3>
                        </div>
                        <input type="email" placeholder="Email" name="email" id="">
                        <button type="submit">Get</button>
                    </form>
                </div>
            </div>
        </section>


        <section id="doc">

            <div class="container">
                <h1>API DOCS </h1>
                <div>
                    <div>

                        <h1>Basic </h1>

                    </div>
                    <div>
                        <p>
                            What the api does is to give you a list of user base on what you want, you can get all users, you can get a particular user and you can get a user based on the following:
                        <ol>
                            <li> State </li>
                            <li> Sex </li>
                        </ol>
                        <br>
                        You just need to get either the public or the private key to start using the api
                        <br><strong>Nb: </strong> The Public Key won't give you the full list of the users.
                        </p>

                        <br>
                        <br>
                        <br>

                        <p>
                            <strong>
                                The email, state, sex will be the email, state, and sex of the user you want.

                                <br>
                                e.g <br>

                                if the email of the user is someone@gmail.com or the state is Oyo or the sex is M
                                <br>
                                <br>

                                http://localhost:8080/api/user/getUser.php?key=12345&email=someone@gmail.com
                                <br>
                                <br>
                                http://localhost:8080/api/user/getUser.php?key=12345&state=Oyo
                                <br>
                                <br>
                                http://localhost:8080/api/user/getUser.php?key=12345&sex=M

                            </strong>
                            <br>
                            <br>
                            <br>

                            <b>Generating Your own Api key (PRIVATE)</b><br>
                            Input Your Email and click on generate,
                            <br>
                            <br>

                            If you want to get the key when next you want to use the api,
                            you just input your email at the get api key form and hit the get button it would provide you with your key.
                        </p>
                    </div>
                </div>
                <div>
                    <div>

                        <h1> Getting ALL USERS </h1>

                    </div>
                    <div>
                        <p>
                            Since This Project hasn't been hosted yet, assuming the SERVER ADDRESS is localhost:8080:
                            <br>
                            <br>
                            <br>
                            To get All users using the public key: 12345
                            use the address: http://localhost:8080/api/user/getUsers.php?key=12345
                            <br>
                            <br>
                            <br>
                            To get All users using the private key
                            use the address: http://localhost:8080/api/user/getUsers.php?key=Your_Private_key
                        </p>
                    </div>
                </div>
                <div>
                    <div>

                        <h1> Getting a USER </h1>

                    </div>
                    <div>
                        <p>
                            Since This Project hasn't been hosted yet, assuming the SERVER ADDRESS is localhost:8080:
                            <br>
                            <br>
                            <br>
                            To get All users using the public key: 12345
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=12345&email=email</b>
                            <br>
                            <br>
                            <br>
                            To get All users using the private key
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=Your_Private_key&email=email</b>
                        </p>
                    </div>
                </div>
                <div>
                    <div>

                        <h1> Getting USERS By State </h1>

                    </div>
                    <div>
                        <p>
                            Since This Project hasn't been hosted yet, assuming the SERVER ADDRESS is localhost:8080:
                            <br>
                            <br>
                            <br>
                            To get All users using the public key: 12345
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=12345&state=state</b>
                            <br>
                            <br>
                            <br>
                            To get All users using the private key
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=Your_Private_key&state=state</b>
                        </p>
                    </div>
                </div>
                <div>
                    <div>

                        <h1> Getting USERS By sex </h1>

                    </div>
                    <div>
                        <p>
                            Since This Project hasn't been hosted yet, assuming the SERVER ADDRESS is localhost:8080:
                            <br>
                            <br>
                            The sex is M for Male and F for female
                            <br>
                            <br>
                            To get All users using the public key: 12345
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=12345&sex=sex</b>
                            <br>
                            <br>
                            <br>
                            To get All users using the private key
                            use the address: <br>
                            <b>http://localhost:8080/api/user/getUser.php?key=Your_Private_key&sex=sex</b>
                        </p>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="./script.js"></script>
</body>

</html>