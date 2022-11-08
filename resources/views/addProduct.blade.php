<!DOCTYPE html>
<html>

<form method='POST' action="/productStore">
@csrf
  <label for="name">Product name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
    </html