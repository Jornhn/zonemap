<?php include('../header.php') ?>

<div class="profile-container">
    
    <div class="row">
        <div id="tab-login" class="col-6 profile-tab active">Inloggen</div>
        <div id="tab-register" class="col-6 profile-tab">Registeren</div>
    </div>
    
    <div id="login">
        <h1>Inloggen</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="login_email" placeholder="Gebruikersnaam">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="login_password" placeholder="Wachtwoord">
        </div>
        <button id="login-submit" type="button" onclick="login()" class="btn btn-primary custom-btn">Inloggen</button>

        <a id="pass-forget" href="">Wachtwoord vergeten</a>

        <button type="submit" onclick="window.location = 'https://www.facebook.com';" class="btn btn-default fb-btn"><i class="fab fa-facebook-square"></i> Login met Facebook</button>
    </div>

    <div id="register">
    <h1>Registeren</h1>
    <button type="submit" onclick="window.location = 'https://www.facebook.com';" class="btn btn-default fb-btn" style="margin-top: 5px !important; margin-bottom: 20px;"><i class="fab fa-facebook-square"></i> Snel met Facebook</button>
        <div class="form-group">
            <input type="text" class="form-control" id="register_name" placeholder="Naam">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="register_email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="register_username" placeholder="Gebruikersnaam">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="register_password" placeholder="Wachtwoord">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="register_password_confirm" placeholder="Wachtwoord herhalen">
        </div>
        <button id="register-submit" type="submit" class="btn btn-primary custom-btn">Aanmelden</button>

    </div>
    
</div>


<div class="admin-panel" style="display: none;">
    <div class="small-container pt-5">
        <h1 class="mb-4">Admin panel</h1>
        <span class="pf-uid"></span><br>
        <span class="pf-email"></span>
        <hr class="mb-4">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-primary" style="width:100%; margin-bottom: 10px; color:#fff; padding: 30px;">Wachtwoord wijzigen</a>
            </div>
            <div class="col-6">
                <a href="add.php" class="btn btn-success" style="width:100%; margin-bottom: 10px; color:#fff; padding: 30px;">Gegevens invoeren</a>
            </div>
        </div>
        <button class="btn btn-danger" style="width:100%; padding: 15px;" onclick="logout();">Logout</button>
    </div>
</div>

<?php include('../footer.php') ?>