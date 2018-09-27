<?php include('partials/header.php'); ?>
    <div class="row">
    <div class="col-12">
        <?php foreach ($bioscopen as $bioscoop): ?>
           
            <div class="col-4 col-xs-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $bioscoop['bios_naam']; ?></li></h5>
                            <p class="card-text"> <?php echo $bioscoop['provincie']; ?></li></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h5> Begintijd: </h5>
                                        <?php echo $bioscoop['begintijd']; ?></li>
                            <li class="list-group-item"> <h5> Eindtijd: </h5>
                                        <?php echo $bioscoop['eindtijd']; ?></li>
                            <li class="list-group-item"> <h5> Voorwaarden: </h5>
                                        <?php echo $bioscoop['voorwaarden']; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
   
<?php include('partials/footer.php'); ?>