<?php include('partials/header.php'); ?>
<div class="row">
        <?php foreach ($bioscopen as $bioscoop): ?>
            <div class="col-4">
                <h5> ID: </h5>
                <?php echo $bioscoop['bioscoop_id']; ?>
                <h5> Naam: </h5>
                <?php echo $bioscoop['bioscoop_naam']; ?>
                <h5> Informatie: </h5>
                <?php echo $bioscoop['bioscoop_informatie']; ?>
                <h5> Locatie: </h5>
                <?php echo $bioscoop['bioscoop_locatie']; ?>
                <h5> Capaciteit: </h5>
                <?php echo $bioscoop['bioscoop_capaciteit']; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php include('partials/footer.php'); ?>