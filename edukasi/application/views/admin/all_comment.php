<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">News Dashboard</span>
    <h3 class="page-title"><?= $title ?></h3>
  </div>
</div>
<!-- Default Light Table -->
<div class="row">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Comment</h6>
      </div>
      <div class="card-body p-0 pb-3 text-center">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">#</th>
              <th scope="col" class="border-0">Name</th>
              <th scope="col" class="border-0">Email</th>
              <th scope="col" class="border-0">Comment</th>
              <th class="border-0" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php $num = 1 ?>
            <?php foreach ($query as $comment): ?>
            	<tr>
            		<td><?= $num ?></td>
            		<td><?= $comment->comment_nama ?></td>
            		<td><?= $comment->comment_email ?></td>
            		<td><?= $comment->comment_isi ?></td>
            		<td>
            		
            		</td>
            		<td>
            			<form action="<?= base_url('comment/delete') ?>" method="post">
            				<input type="hidden" class="d-none" name="comment_id" value="<?= $comment->comment_id ?>">
            				<button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete this comment?');">
            					<i class="material-icons">delete_outline</i> Delete
            				</button>
            			</form>
            		</td>
            	</tr>
            	<?php $num++; ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Default Light Table -->