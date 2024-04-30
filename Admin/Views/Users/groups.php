<?php $this->extend('layouts/default'); ?>
<?php $this->section('title'); ?>
    Users Group
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
    <h1>
        User Groups
    </h1>
	<?= form_open("admin/users/".$user->id."/groups")?>
	<label>
	<input type="checkbox" name="groups[]" value="user"
		<?= $user->inGroup("user") ? "checked" : "" ?>> user
	</label>
	<!--se il nome dei checkbox contiene [] allora ci ritornerà un array che contiene tutti i checkbox selezionati-->
	<label>
		<?php if($user->id === auth()->user()->id):?>
			<input type="checkbox" checked disabled>admin
			<input type="hidden" value="admin" name="groups[]">
		<?php else: ?>
			<input type="checkbox" name="groups[]" value="admin"
				<?= $user->inGroup("admin") ? "checked" : ""?>> admin
		<?php endif; ?>
	</label>
	<button>Save</button>
	</form>

<?php $this->endSection(); ?>
