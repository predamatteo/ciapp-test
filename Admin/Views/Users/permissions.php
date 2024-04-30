<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>
    Users Permissions
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>
        User Permissions
    </h1>
	<?= form_open("admin/users/".$user->id."/permissions")?>
	<label>
	<input type="checkbox" name="permissions[]" value="articles.edit"
		<?= $user->hasPermission("articles.edit") ? "checked" : "" ?>> Edit
	</label>
	<label>
	<input type="checkbox" name="permissions[]" value="articles.delete"
		<?= $user->hasPermission("articles.delete") ? "checked" : "" ?>> Delete
	</label>
	<button>Save</button>
	</form>

<?php $this->endSection(); ?>
