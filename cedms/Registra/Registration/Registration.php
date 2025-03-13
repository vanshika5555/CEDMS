<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Registration.css">
    <style>
        #password, #employees, #departments, #department-names {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Logo</div>
            <div class="tabs">
            <a href="">
    <button class="tab">New Joinee</button>
</a>

                <button class="tab">
                    <a href="../Already/Already.html" style="text-decoration: none; color: inherit;">Already a User??</a>
                </button>
            </div>
        </header>
        <form id="registration-form" action="register.php" method="POST" enctype="multipart/form-data">


            <div class="form-row">
                <div class="form-group">
                    <label for="first-name">Admin First Name</label>
                    <input type="text" id="first-name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="last-name">Admin Last Name</label>
                    <input type="text" id="last-name" placeholder="Last Name">
                </div>
            </div>
            
            <div class="form-group">
                <label for="ceo-name">CEO Name</label>
                <input type="text" id="ceo-name" placeholder="CEO Name">
            </div>
            <br>
            <div class="form-group">
                <label for="ceo-image">Upload CEO Image</label>
                <input type="file" id="ceo-image" accept="image/jpeg">
            </div>
            <br>
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name" placeholder="Company Name">
            </div>
            <br>
            <div class="form-group">
                <label for="about-company">About the Company</label>
                <textarea id="about-company" placeholder="Write about the company" rows="4"></textarea>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group">
                    <input type="radio" name="ownership" id="sole-proprietorship" value="Sole Proprietorship">
                    <label for="sole-proprietorship">Sole Proprietorship</label>
                </div>
                <div class="form-group">
                    <input type="radio" name="ownership" id="partnership" value="Partnership">
                    <label for="partnership">Partnership</label>
                </div>
            </div>
            <div class="partner-section">
                <div class="form-row">
                    <div class="form-group">
                        <label for="partner-first-name">Partner 1 First Name</label>
                        <input type="text" id="partner-first-name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="partner-last-name">Partner 1 Last Name</label>
                        <input type="text" id="partner-last-name" placeholder="Last Name">
                    </div>
                    <button type="button" class="add-partner" onclick="addPartner()">+</button>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
                <label for="logo-upload">Upload Company Logo</label>
                <input type="file" id="logo-upload" accept="image/jpeg">
            </div>
            <br>
            <div class="form-group">
                <label for="employees">Number of Employees</label>
                <input type="number" id="employees" placeholder="Enter number of employees">
            </div>
            <br>
            <div class="form-group">
                <label for="departments">Number of Departments</label>
                <input type="number" id="departments" placeholder="Enter number of departments">
            </div>
            <br>
            <div class="form-group">
                <label for="department-names">Names of Departments</label>
                <div id="department-list">
                    <div class="department-item">
                        <input type="text" placeholder="Department Name">
                        <button type="button" onclick="addDepartment(this)">+</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
            <a href="../../comapny/company.php">
    <button type="button" id="submit-button">Go to Company</button>
</a>


            </div>
        </form>
    </div>
    <script>
        function addDepartment(button) {
            const departmentList = document.getElementById('department-list');
            const newDepartment = document.createElement('div');
            newDepartment.className = 'department-item';
            newDepartment.innerHTML = `
                <input type="text" placeholder="Department Name">
                <button type="button" onclick="addDepartment(this)">+</button>
                <button type="button" onclick="removeDepartment(this)">-</button>
            `;
            departmentList.appendChild(newDepartment);
        }

        function removeDepartment(button) {
            const departmentItem = button.parentElement;
            departmentItem.remove();
        }

        function addPartner() {
            const partnerSection = document.querySelector('.partner-section');
            const newPartner = document.createElement('div');
            newPartner.className = 'form-row';
            newPartner.innerHTML = `
                <div class="form-group">
                    <label>Partner First Name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label>Partner Last Name</label>
                    <input type="text" placeholder="Last Name">
                </div>
                <button type="button" onclick="removePartner(this)">-</button>
            `;
            partnerSection.appendChild(newPartner);
        }

        function removePartner(button) {
            const partnerRow = button.parentElement;
            partnerRow.remove();
        }
    </script>
    <script src="Registration.js"></script>
</body>
</html>
