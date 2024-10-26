<php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmate Management</title>
    <link rel="stylesheet" type="text/css" href="mgtStyles.css">
</head>
<body>
    <header>
        <img src="prison frag.jpeg" alt="PRISON LOGO">
        <h1>PIMS</h1>
        <h1>INMATE MANAGEMENT</h1>
    </header>
    
    <main>

        <section class="aside">
            <nav>
                <a href="#addinmate" id="addButton">ADD INMATE</a>
                <a href="#demographics" id="demoButton">DEMOGRAPHICS</a>
                <a href="#transfers" id="transButton">TRANSFERS</a>
                <a href="#viewinmate" id="viewButton">VIEW INMATE</a>
                <a href="#request" id="reqButton">VIEW REQUEST</a>
                <a href="">LOG OUT</a>
            </nav>
        </section>
        <section class="center">
            <!--this section contains the divisions that have toggle between them  enabled-->
            <div id="addinmate" class="add">
                <h2>ADD INMATE</h2>
                <form action="">
                    <div class="input">
                        <div class="inmateData">
                            <h3>Inmate Data</h3>
                            <div class="fields">
                                <label>First Name:</label><input type="text" name="Fname" pattern="{A-Z}" required>
                            </div>
                            <div class="fields">
                                <label>Last Name:</label><input type="text" name= "lName" pattern="{A-Z}" required>
                            </div>
                            <div class="fields">
                                <label>Date of Birth:</label><input type="date" name="DOB" required>
                            </div>
                            <div class="fields">
                                <label>Home Village:</label><input type="text" name="Home" required pattern="{A-Z}">
                            </div>
                            <div class="fields">
                                <label>Gender:</label>
                                <input type="radio" name="gender" id="Male" required><label>Male</label>
                                <input type="radio" name="gender" id="Female" required><label>Female</label>
                            </div>
                            <div class="fields">
                                <label>Status:</label>
                                <input type="radio" name="status" id="Remand" required><label>Remand</label>
                                <input type="radio" name="status" id="Convicted"><label>Convicted</label>
                            </div>
                            <div class="fields">
                                <label>Offense:</label><input type="text" name="Offense" required>
                            </div>
                            <div class="fields">
                                <label>Entry Date:</label><input type="date" name="Edate" required>
                            </div>
                        </div>

                        <div class="Emergency">
                            <h3>Emergency Contact</h3>
                            <div class="fields">
                                <label>First Name:</label><input type="text" name="Efnmae" required >
                            </div>
                            <div class="fields">
                                <label>Last Name:</label><input type="text" name="Elname" required>
                            </div>
                            <div class="fields">
                                <label>Relation:</label>
                                <select name="rel" required>
                                    <option></option>
                                    <option>Spouse</option>
                                    <option>Mother</option>
                                    <option>Father</option>
                                    <option>Siblings</option>
                                    <option>Aunt</option>
                                    <option>Uncle</option>
                                </select>
                            </div>
                            <div class="fields">
                                <label for="Phone">Phone Number:</label><input type="tel" id="Phone" name="Phone" required>
                            </div>
                        </div>
                    </div>
                    <input type="submit" id="register" value="REGISTER">
                </form>
            </div>

            <div id="demographics" class="demo">
                <h2>INMATE DEMOGRAPHICS</h2>
                <div class="pop">
                    <h3>Population</h3>
                    <p>Male: <span id="male-pop"></span></p>
                    <p>Female: <span id="female-pop"></span></p>
                    <p>Total: <span id="total-pop"></span></p>
                </div>
                <div class="pop-distr">
                    <h3>Population Distributions</h3>
                    <div id="maleDistribution">
                        <canvas id="maleChart"></canvas>
                    </div>
                    <div id="femaleDistribution">
                        <canvas id="femaleChart"></canvas>
                    </div>
                </div>
              
            </div>

            <div id="transfers" class="trans">
                <h2>TRANSFER</h2>
                <div id="transferForm" class="trans1 pop">
                    <h3>Transfer Form</h3>
                    <form action="">
                        <div class="fields">
                            <label for="inmateID">Inmate ID:</label>
                            <input type="text" id="inmateID" name="inmateid">
                        </div>
                        <div class="fields">
                            <label for="cell1">FROM:</label>
                            <input type="text" id="cell1" name="cell1">
                        </div>
                        <div class="fields">
                            <label for="cell2">TO:</label>
                            <input type="text" id="cell2" name="cell2">
                        </div>
                        <div class="fields">
                            <label for="reason">Reason:</label>
                            <input type="text" id="reason" name="reason">
                        </div>
                        <input type="submit" value="tranfer" class=""> 
                    </form>
                </div>

                <div id="transferTable" class="pop">
                    <h3>Transfer History</h3>
                    <table cellspacing="0">
                        <thead>
                            <tr>
                                <td>Inmate ID</td>
                                <td>Transferred From</td>
                                <td>Transferred To</td>
                                <td>Reason</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div id="viewinmate" class="view">
                <h2>INMATE INFORMATION</h2>
                <p>Enter inmate ID to view information</p>
                <form action="">
                    <div class="field">
                        <label for="inmateId">Inmate ID:</label>
                        <input type="text" name="inmateNumber" >
                        <input type="submit" value="VIEW">
                    </div>
                    
                </form>

                <div id="bio_data">
                    <h4>Inmate Information</h4>
                </div>
                <div id="transferHistory">
                    <h4>Transfer History</h4>
                </div>
                <div id="courtdate">
                    <h4>Court Dates</h4>
                </div>
            </div>

            <div id="request" class="request">
                <h3>Request</h3>

                            <div class="request-item">
                                <p>RQ1</p>
                                <div class="visitor-name">
                                    <a href="approv.html">MPHATSO MNYENYEMBE</a>
                                </div>
                            </div>
                            <hr>
                            <div class="request-item">
                                <p>RQ2</p>
                                <div class="visitor-name">
                                    <a href="approv.html">KENNEDY CASHTANDA</a>
                                </div>
                            </div>
                        </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/management.js"></script>
</body>
</html>
?>
