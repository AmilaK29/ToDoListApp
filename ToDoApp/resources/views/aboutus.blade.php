<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bio Data Form</title>
</head>
<body>
  <h1>Bio Data Form</h1>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="">Select</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
