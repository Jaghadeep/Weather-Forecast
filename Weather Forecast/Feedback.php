<!DOCTYPE html>
<html>
<head>
    <title>User Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4CAF50, #2E8B57);
        }
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .form-container h2 {
            text-align: center;
            color: #4CAF50;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"],
        .form-container input[type="reset"] {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #4CAF50;
            color: #ffffff;
            font-weight: bold;
        }
        .form-container input[type="submit"]:hover,
        .form-container input[type="reset"]:hover {
            background-color: #2E8B57;
        }
        .user-feedback {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Feedback Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="[A-Z][a-zA-Z]{7,}">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="reason">Reason for Feedback:</label>
            <select id="reason" name="reason">
                <option value="General Inquiry">General Inquiry</option>
                <option value="Bug Report">Bug Report</option>
                <option value="Feature Request">Feature Request</option>
                <option value="Other">Other</option>
            </select>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" placeholder="Enter your feedback" required></textarea>
            <label for="file">Upload Image:</label>
            <input type="file" id="file" name="file" accept="image/*" required>
            <label for="rating">Rating:</label>
            <input type="radio" id="rating1" name="rating" value="1" required><label for="rating1">1</label>
            <input type="radio" id="rating2" name="rating" value="2"><label for="rating2">2</label>
            <input type="radio" id="rating3" name="rating" value="3"><label for="rating3">3</label>
            <input type="radio" id="rating4" name="rating" value="4"><label for="rating4">4</label>
            <input type="radio" id="rating5" name="rating" value="5"><label for="rating5">5</label>
            <label for="subscribe">Subscribe to newsletter:</label>
            <input type="checkbox" id="subscribe" name="subscribe" value="yes">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $feedback = $_POST["feedback"];
            $rating = $_POST["rating"];
            $subscribe = isset($_POST["subscribe"]) ? "Yes" : "No";
            $reason = $_POST["reason"];

            echo "<div class='user-feedback'>";
            echo "<h3>User Input:</h3>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Feedback:</strong> $feedback</p>";
            echo "<p><strong>Rating:</strong> $rating</p>";
            echo "<p><strong>Subscribe to newsletter:</strong> $subscribe</p>";
            echo "<p><strong>Reason for Feedback:</strong> $reason</p>";
            echo "</div>";

            echo "<script>alert('Thanks for your feedback.');</script>";
        }
        ?>
    </div>
</body>
</html>
