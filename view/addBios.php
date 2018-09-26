<?php include('partials/header.php'); ?>
<form method="post" action="">
        <div class="form-group">
            <label for="naam">Bioscoopnaam&#42;</label>
            <input type="text" class="form-control" name="naam" placeholder="Bioscoopnaam.." required>
        </div>
        <div class="form-group">
            <label for="email">Bioscoop informatie&#42;</label>
            <textarea class="form-control no-resize" name="informatie" placeholder="Bioscoop informatie.." rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="naam">Locatie&#42;</label>
            <input type="text" class="form-control" name="locatie" placeholder="Locatie.." required>
        </div>
        <div class="form-group">
            <label for="naam">Capaciteit&#42;</label>
            <input type="number" class="form-control" name="capaciteit" placeholder="Capaciteit.." required>
        </div>


        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="contact">Plaats bioscoop</button>
    </form>
<?php include('partials/footer.php'); ?>