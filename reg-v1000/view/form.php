<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<form style="margin-top: 150px; margin-left: 600px" method="post" >
<h3 style="margin-left: 200px">Registration Form</h3>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name = "name" placeholder="Ivan">
    </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name = "email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name ="password1" placeholder="Password">
        </div>

    <div class="form-group col-md-6">
        <label for="inputPassword4">Password Confirm</label>
        <input type="password" class="form-control" id="inputPassword4" name ="password2" placeholder="Password">
    </div>

    <div class="form-group col-md-6">
        <label for="inputPassword4">About You</label>
        <input type="text" class="form-control" id="inputPassword4" name ="bio" placeholder="My name is Ivan. I work with animals">
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Age</label>
        <input type="text" class="form-control" id="inputPassword4" name ="age" placeholder="18">
    </div>
        <div class="form-group col-md-4">
            <label for="inputState">Country</label>
            <select id="inputState" class="form-control" name="country">
                <option selected>Choose...</option>
                <option>Russia</option>
                <option>USA</option>
                <option>America</option>
                <option>Ukraine</option>
                <option>China</option>
            </select>
        </div>
    <div class="form-group col-md-6"> <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
</html>