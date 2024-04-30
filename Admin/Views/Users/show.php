<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>
    Users
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>
        User
    </h1>
<dl>
	<dt>email</dt>
	<dd><?= esc($user->email) ?></dd>
	
	<dt> First name</dt>
	<dd><?= esc($user->first_name) ?></dd>

	<dt>Created at</dt>
		<dd><?= $user->created_at->humanize() ?></dd>
	</dl>

	<dt>Groups</dt>
	<dd>
		<?= implode(", ", $user->getGroups());?>
		<a href="<?=url_to("\Admin\Controllers\Users::groups",$user->id)?>">edit </a>
	<dd>
	<dt>Permissions</dt>
	<dd>
		<?= implode(", ", $user->getPermissions());?>
		<a href="<?=url_to("\Admin\Controllers\Users::permissions",$user->id)?>">edit </a>
	<dd>

	<?= form_open("admin/users/".$user->id."toggle-ban");?>
		<button><?= $user->isBanned() ? "Unban" : "ban"?></button>
	</form>
<?php $this->endSection(); ?>
