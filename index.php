<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Starter Project</title>
  </head>
  <body>
    <form action="db_operations.php" method="post">
      <h1>Create a new Entry</h1>
      Enter Name : <input type="text" name="name" />
      Enter Value : <input type="text" name="value" />
      <input type="submit" name="submit_create" value="SUBMIT" />
      <hr />
      <h1>Read all Entries</h1>
      <input type="submit" name="submit_read" value="READ" />
      <hr />
      <h1>Update an Entry</h1>
      Enter ID : <input type="text" name="id" />
      Enter New Name : <input type="text" name="name" />
      Enter New Value : <input type="text" name="value" />
      <input type="submit" name="submit_update" value="UPDATE" />
      <hr />
      <h1>Delete an Entry</h1>
    </form>
  </body>
</html>
