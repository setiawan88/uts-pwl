<?php
require_once 'models/Member.php'
?>
<h2>Form Login</h2>
<div class="row">
    <div class="col-6">
        <form method="POST" action="controllers/memberController.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Username">
                <label for="floatingUsername">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>