<php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="admin.css" />
</head>
<body>
    <header>
        <h1>PIMS Registration</h1>
    </header>

    <main>
        <section class="aside">
            <nav>
                <a href="#create">CREATE USER</a>
                <a href="#logs">SYSTEM LOGS</a>
                <a href="#action">ACTIONS</a>
                <a href="#users">USERS</a>
            </nav>
        </section>

        <section class="center">
            <div id="create" class="create">
                <form action="connectdatabase/register.php" method="POST">
                    <h2>REGISTER NEW USER</h2>
                    <div class="data">
                        <section class="visit">
                            <h3>USER INFORMATION</h3>

                            <div class="form-group">
                                <label for="Fname">First Name</label>
                                <input type="text" id="Fname" name="firstname" placeholder="Enter first name" required />
                            </div>

                            <div class="form-group">
                                <label for="Lname">Last Name</label>
                                <input type="text" id="Lname" name="lastname" placeholder="Enter last name" required />
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required />
                            </div>

                            <div class="form-group">
                                <label for="position">Position</label>
                                <select id="position" name="position" required>
                                    <option value="" disabled selected>Select position</option>
                                    <option value="warden">Warden</option>
                                    <option value="guard">Prison Officer</option>
                                    <option value="OC">Officer in Charge</option>
                                    <option value="warden">Guard</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="role">ROLE</label>
                                <select name="role" id="role">
                                    <option value="1">Warden</option>
                                    <option value="2">prison officer</option>
                                    <option value="3">Guard</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="eMail" name="email" placeholder="johndoe@gmail.com" required />
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter password" required />
                            </div>
                        </section>
                    </div>

                    <div class="center">
                        <input type="submit" value="REGISTER" class="click" name="register" />
                        <input type="reset" value="RESET" class="click" />
                    </div>
                </form>
            </div>

            <div id="logs" class="logs">
                <table>
                    <tr>
                        <td>staff_id</td>
                        <td>log in time</td>
                        <td>log out time</td>
                    </tr>
                </table>
            </div>

            <div class="actions" id="actions">
                <table>
                    <tr>
                        <td>staff_id</td>
                        <td>time</td>
                        <td>action</td>
                    </tr>
                </table>
            </div>

            <div id="users" class="users">
                <table>
                    <tr>
                        <td>staff_id</td>
                        <td>Full name</td>
                        <td>position</td>
                        <td>email</td>
                        <td>phone</td>
                        <td>view</td>
                        <td>delete</td>
                    </tr>
                    <tr>
                        <td>PIMS-23</td>
                        <td>GEORGE KALUA</td>
                        <td>warden</td>
                        <td>johndoe@gmail.com</td>
                        <td>099765847</td>
                        <td><a href="" id="view">view</a></td>
                        <td><a href="" id="delete">delete</a></td>
                    </tr>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-contact">
            Contacts <br />
            Phone: 0999232333<br />
            Email: mavyete@gmail.com<br />
            Tel: 0122334456
        </div>
        <div class="footer-social">
            Social Media <br />
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                </svg>
            </a>
            <br />
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#f7f7f7" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8" />
                </svg>
            </a>
        </div>
    </footer>
</body>
</html>
?>