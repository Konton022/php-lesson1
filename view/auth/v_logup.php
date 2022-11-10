<form method="post">
    <div class='mb-3'>
        <label for="auth-login" class="form-label">login</label>
        <input type="text" name ="login" id="auth-login" class="form-control">
    </div>
    <div class='mb-3'>
        <label for="auth-password" class="form-label">password</label>
        <input type="password" name ="password" id="auth-password" class="form-control">
    </div>
    <div class='mb-3'>
        <label for="auth-email" class="form-label">email</label>
        <input type="email" name ="email" id="auth-email" class="form-control">
    </div>
    <div class='mb-3'>
        <label for="auth-name" class="form-label">name</label>
        <input type="text" name ="name" id="auth-name" class="form-control">
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="rememberCheckButton" name="remember">
        <label class="form-check-label" for="frememberCheckButton">
            remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">registration</button>
</form>

<?php if($errFlag): ?>
<h3>write all fields!</h3>
<?php endif; ?>