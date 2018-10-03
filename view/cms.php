<?php include('partials/header.php'); ?>
	<table class="table">
	<tr>
	<th scope="col">Pagina naam</th>
	<th scope="col">Content</th>
	<th scope="col">Wijzig</th>
	</tr>
	<?php foreach ($cms as $allcms): ?>
		<tr>
			<td><?php echo $allcms['naam']; ?></td>
			<td><?php echo $allcms['content']; ?></td>
			<td>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				</button>
			</td>
		<tr>
	<?php endforeach; ?>
	</table>
<?php include('partials/footer.php'); ?>

