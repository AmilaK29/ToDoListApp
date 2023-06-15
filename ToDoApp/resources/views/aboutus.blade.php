<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>To Do List Web App</title>
</head>
<body>
  <h1>To Do List</h1>
  <form method = 'post' action = '/savetask'>
    {{csrf_field()}}
    <label for="name">Task Name:</label><br>
    <input type="text" id="name" name="task_name" required><br><br>
    
    <label for="address">Task Discription:</label><br>
    <textarea id="address" name="discription" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
