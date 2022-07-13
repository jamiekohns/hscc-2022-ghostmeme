<html>
    <head>
        <?php echo $this->render('templates/head.html',NULL,get_defined_vars(),0); ?>
    </head>
    <bod>
        <h3>Please Login</h3>
        <?php if ($msg == 'error'): ?>
            <div class="alert alert-danger">
                Invlaid username or password!
            </div>
        <?php endif; ?>
        <form action="/login" method="POST">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </bod>
</html>