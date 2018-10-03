<?php include('partials/header.php'); ?>
	<table class="table">
	<tr>
	<th scope="col">Paginanaam</th>
	<th scope="col">Content</th>
	<th scope="col">Wijzig</th>
	</tr>
	<?php foreach ($cms as $allcms):
	if(strlen($allcms['content']) > 20) $allcms['content'] = substr($allcms['content'], 0, 100).'...'; ?>
		<tr>
			<td><?php echo $allcms['naam']; ?></td>
			<td><?php echo $allcms['content']; ?></td>
			<td>
				<button style="background-color: #A3CB38; border: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Wijzig </button>
			</td>
		<tr>
	<?php endforeach; ?>
	</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wijzig <?php echo $allcms['naam'] ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hier komt de form
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('partials/footer.php'); ?>
