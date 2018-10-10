<?php include('partials/header.php'); ?>
<form method="post" action="../reserveringsController/collectreservering/">
        <h1> Bioscoop reserveren </h1>
        <div class="form-group">
            <label for="voornaam">voornaam&#42;</label>
            <input type="text" class="form-control" name="voornaam" placeholder="voornaam.." required>
        </div>
        <div class="form-group">
            <label for="achternaam">achternaam&#42;</label>
            <input type="text" class="form-control" name="achternaam" placeholder="achternaam.." required>
        </div>
        <div class="form-group">
            <label for="huisnummer">huisnummer&#42;</label>
            <input type="text" class="form-control" name="huisnummer" placeholder="huisnummer.." required>
        </div>
        <div class="form-group">
            <label for="toevoeging">toevoeging&#42;</label>
            <input type="text" class="form-control" name="toevoeging" placeholder="toevoeging.." required>
        </div>
        <div class="form-group">
            <label for="postcode">Postcode&#42;</label>
            <input type="text" class="form-control" name="postcode" placeholder="Postcode.." required>
        </div>
        <div class="form-group">
            <label for="stad">Stad&#42;</label>
            <input type="text" class="form-control" name="stad" placeholder="Stad.." required>
        </div>
        <div class="form-group">
            <label for="provincie">provincie&#42;</label>
            <input type="text" class="form-control" name="provincie" placeholder="Provincie.." required>
        </div>
        <!-- <div class="form-group">
            <label for="provincie">datum&#42;</label>
            <input type="date" class="form-control" name="datum" placeholder="datum.." required>
        </div>
        <div class="form-group">
            <label for="provincie">begin&#42;</label>
            <input type="time" class="form-control" name="begin" placeholder="begin.." required>
        </div>
        <div class="form-group">
            <label for="provincie">eind&#42;</label>
            <input type="time" class="form-control" name="eind" placeholder="eind.." required>
        </div> -->
        <!-- <label for="">datum</label>
                    <select class="form-control mb-5" <?= $disabled[0]; ?>>
                    <?= $disabled[1]; ?>
                    <?php foreach ($tijden as $tijd): ?>
                            <option class="form-control"><?= date("D H:i", strtotime($tijd['start_time'])) ?> - <?= date("H:i", strtotime($tijd['end_time'])) ?></option>
                        <?php endforeach; ?>
                    </select> -->
       
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="create" style="background-color: #A3CB38; border: none;">Voeg bioscoop toe</button>
    </form>
    

<?php include('partials/footer.php'); ?>