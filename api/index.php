<?php include('../header.php') ?>
    
    <div class="container">
        <h1>Firebase</h1>
        <div class="form-inline">
            <div class="form-group mb-2">
                <input class="form-control" placeholder="name" type="text" id="nameField">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input class="form-control" placeholder="leeftijd" type="text" id="ageField">
            </div>
            <button type="submit" onclick="saveData()" class="btn btn-primary mb-2">Submit</button>
        </div>
    </div>

    

<?php include('../footer.php') ?>