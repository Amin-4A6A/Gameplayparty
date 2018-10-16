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
            <label for="huisnummer">telefoonnummer&#42;</label>
            <input type="text" class="form-control" name="telefoonnummer" placeholder="telefoonnummer.." required>
        </div>
        <div class="form-group">
            <label for="toevoeging">straatnaam&#42;</label>
            <input type="text" class="form-control" name="straatnaam" placeholder="straatnaam.." required>
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
        <div class="form-group">
            <label for="provincie">Aantal personen&#42;</label>
            <input type="number" class="form-control" name="aantal_personnen" required>
        </div>
        <!-- <div class="form-group">
            <label for="provincie">datum&#42;</label>
            <input type="date" class="form-control" name="reservering_date" placeholder="datum.." required>
        </div>
        <div class="form-group">
            <label for="provincie">begin&#42;</label>
            <input type="time" class="form-control" name="begin_tijd" placeholder="begin.." required>
        </div>
        <div class="form-group">
            <label for="provincie">eind&#42;</label>
            <input type="time" class="form-control" name="eind_tijd" placeholder="eind.." required>
        </div> -->
 
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="create" style="background-color: #A3CB38; border: none;">reserveer nu</button>
    </form>
    

<?php include('partials/footer.php'); ?>