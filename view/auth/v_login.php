<form method="post">
    <div class='mb-3'>
        <label for="auth-login" class="form-label">login</label>
        <input type="text" name ="login" id="auth-login" class="form-control">
    </div>
    <div class='mb-3'>
        <label for="auth-password" class="form-label">password</label>
        <input type="password" name ="password" id="auth-password" class="form-control">
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="rememberCheckButton" name="remember">
        <label class="form-check-label" for="frememberCheckButton">
            remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">logIn</button>
</form>

<?php if($errFlag): ?>
<h3>Incorrect login or password</h3>
<?php endif; ?>