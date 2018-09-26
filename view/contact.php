<?php include('partials/header.php'); ?>
<form method="post" action="">
        <div class="form-group">
            <label for="naam">Naam&#42;</label>
            <input type="text" class="form-control" name="naam" placeholder="Naam" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail adres&#42;</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail adres" required>
        </div>
        <div class="form-group">
            <label for="bericht">Uw bericht&#42;</label>
            <textarea class="form-control no-resize" name="bericht" placeholder="Uw bericht.." rows="5" required></textarea>
        </div>
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="contact">Neem contact op</button>
    </form>
<?php include('partials/footer.php'); ?>