<?php include('../header.php') ?>

<div class="profile-container">
    
    <div class="row">
        <div id="tab-login" class="col-6 profile-tab active">Inloggen</div>
        <div id="tab-register" class="col-6 profile-tab">Registeren</div>
    </div>
    
    <div id="login">
        <h1>Inloggen</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Gebruikersnaam">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Wachtwoord">
        </div>
        <button type="submit" class="btn btn-primary custom-btn">Inloggen</button>

        <a id="pass-forget" href="">Wachtwoord vergeten</a>

        <button type="submit" class="btn btn-default fb-btn"><i class="fab fa-facebook-square"></i> Login met Facebook</button>
    </div>

    <div id="register">
    <h1>Registeren</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Naam">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Gebruikersnaam">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Wachtwoord">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Wachtwoord herhalen">
        </div>
        <button type="submit" class="btn btn-primary custom-btn">Aanmelden</button>

    </div>
</div>

<?php include('../footer.php') ?>