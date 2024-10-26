<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link rel="stylesheet" href="STYLES/applications.css">
</head>
<body>
    <header>
        <h1>PIMS</h1>
    </header>
    <main>
        <form action="process.php" method="POST">
            <h2>FILL IN THE FORM TO APPLY FOR A VISIT</h2>
            <div class="data">
                <section class="visit">
                    <h3>VISITOR INFORMATION</h3>
                    <div class="form-group">
                        <label for="Fname">First Name</label>
                        <input type="text" id="Fname" name="visitor_first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="Lname">Last Name</label>
                        <input type="text" id="Lname" name="visitor_last_name" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group gender-group">
                        <span>Gender</span>
                        <input type="radio" name="visitor_gender" id="male" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" name="visitor_gender" id="female" value="female" required>
                        <label for="female">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="relations">Relationship</label>
                        <input type="text" id="relations" name="visitor_relationship" placeholder="Enter relationship" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneContact">Phone</label>
                        <input type="tel" id="phoneContact" name="visitor_phone" placeholder="Enter phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="visitDate">Visit Date</label>
                        <input type="date" id="visitDate" name="visit_date" required>
                    </div>
                    <div class="form-group">
                        <label for="purpose">Purpose of Visit</label>
                        <textarea name="visit_purpose" id="purpose" cols="30" rows="5" placeholder="Describe the purpose" required></textarea>
                    </div>
                </section>
    
                <section class="visit">
                    <h3>INMATE DETAILS</h3>
                    <div class="form-group">
                        <label for="inMateID">Inmate ID</label>
                        <input type="text" id="inMateID" name="inmate_id" placeholder="Enter inmate ID" required>
                    </div>
                    <div class="form-group">
                        <label for="inmateFname">First Name</label>
                        <input type="text" id="inmateFname" name="inmate_first_name" placeholder="Enter inmate's first name" required>
                    </div>
                    <div class="form-group">
                        <label for="inmateLname">Last Name</label>
                        <input type="text" id="inmateLname" name="inmate_last_name" placeholder="Enter inmate's last name" required>
                    </div>
                </section>
            </div>
            <div class="center">
                <input type="submit" value="REQUEST" class="click">
                <input type="submit" value="RESET" class="click">
            </div>
          
        </form>
    </main>
    <footer>
        <div class="footer-contact">
            Contacts <br>
            Phone: 0999232333<br>
            Email: mavyete@gmail.com<br>
            Tel: 0122334456
        </div>
        <div class="footer-social">
            Social Media <br>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a> <br>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#f7f7f7" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a><br>
        </div>
    </footer>
</body>
</html>
