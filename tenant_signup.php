<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulenga Signup</title>
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        header {
            background-color: #1abc9c;
            color: #ecf0f1;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        form {
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }

        input, select {
            background-color: #2c3e50;
            color: #ecf0f1;
            border: 1px solid #7f8c8d;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #1abc9c;
        }

        button {
            background-color: #1abc9c;
            color: #ecf0f1;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #16a085;
        }

        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleEmploymentFields() {
            const employmentStatus = document.getElementById("employment_status").value;
            const employerField = document.getElementById("current_employer_field");
            const verificationContactField = document.getElementById("employment_verification_contact_field");

            if (employmentStatus === "Formal Employment") {
                employerField.classList.remove("hidden");
                verificationContactField.classList.remove("hidden");
                document.getElementById("current_employer").required = true;
                document.getElementById("employment_verification_contact").required = true;
            } else {
                employerField.classList.add("hidden");
                verificationContactField.classList.add("hidden");
                document.getElementById("current_employer").required = false;
                document.getElementById("employment_verification_contact").required = false;
            }
        }
    </script>
</head>
<body>
    <header>Sign Up</header>
    <form action="tenant_signup.php" method="POST" enctype="multipart/form-data">
        <h1>Tenant Signup</h1>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="government_id">Government ID (Driver's License/Passport/NRC):</label>
        <input type="file" id="government_id" name="government_id" accept="image/*" required>

        <label for="landlord_reference">Landlord Reference and contact if possible:</label>
        <input type="text" id="landlord_reference" name="landlord_reference">

        <label for="employment_status">Employment Status:</label>
        <select id="employment_status" name="employment_status" required onchange="toggleEmploymentFields()">
            <option value="">Select...</option>
            <option value="Formal Employment">Formal Employment</option>
            <option value="Self-Employed">Self-Employed</option>
            <option value="Unemployed">Unemployed</option>
        </select>

        <div id="current_employer_field" class="hidden">
            <label for="current_employer">Current Employer:</label>
            <input type="text" id="current_employer" name="current_employer">
        </div>

        <div id="employment_verification_contact_field" class="hidden">
            <label for="employment_verification_contact">Employment Verification Contact:</label>
            <input type="tel" id="employment_verification_contact" name="employment_verification_contact">
        </div>

        <label for="income">Monthly/Annual Income:</label>
        <input type="number" id="income" name="income" required>

        <label for="emergency_contact">Emergency Contact:</label>
        <input type="tel" id="emergency_contact" name="emergency_contact" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label>
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the terms and conditions.
        </label>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
