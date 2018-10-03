<?php include('partials/header.php'); ?>
<form method="post" action="../adminController/collectBios/">
        <h1> Bioscoop toevoegen </h1>
        <div class="form-group">
            <label for="naam">Bioscoopnaam&#42;</label>
            <input type="text" class="form-control" name="bios_naam" placeholder="Bioscoopnaam.." required>
        </div>
        <div class="form-group">
            <label for="naam">Adres&#42;</label>
            <input type="text" class="form-control" name="adres" placeholder="Adres.." required>
        </div>
        <div class="form-group">
            <label for="naam">Postcode&#42;</label>
            <input type="text" class="form-control" name="postcode" placeholder="Postcode.." required>
        </div>
        <div class="form-group">
            <label for="naam">Stad&#42;</label>
            <input type="text" class="form-control" name="stad" placeholder="Stad.." required>
        </div>
        <div class="form-group">
            <label for="naam">Provincie&#42;</label>
            <input type="text" class="form-control" name="provincie" placeholder="Provincie.." required>
        </div>
        <div class="form-group">
            <label for="naam">Begintijd&#42;</label>
            <input type="datetime-local" class="form-control" name="begintijd" required>
        </div>
        <div class="form-group">
            <label for="naam">Eindtijd&#42;</label>
            <input type="datetime-local" class="form-control" name="eindtijd" required>
        </div>
        <div class="form-group">
            <label for="email">Bereikbaarheid auto&#42;</label>
            <textarea class="form-control" style="resize: none;" name="bereikbaar_auto" placeholder="Bereikbaarheid auto.." rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="email">Bereikbaarheid openbaar vervoer&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_ov" placeholder="Bereikbaarheid openbaar vervoer.." rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="email">Bereikbaarheid fiets&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_fiets" placeholder="Bereikbaarheid fiets.." rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="naam">Rolstoeltoegankelijk?&#42;</label><br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="ja"> Ja<br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="nee"> Nee
        </div>
        <div class="form-group">
            <label for="email">Voorwaarden&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="voorwaarden" placeholder="Voorwaarden.." rows="5" required></textarea>
        </div>
       
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="create" style="background-color: #A3CB38; border: none;">Voeg bioscoop toe</button>
    </form>
    

<?php include('partials/footer.php'); ?>