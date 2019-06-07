<?php
/*
$variable 		 	->	checked variable, object, array, etc.
$name 				->	variable name
$id 					->	unique id of this function
$id_inp				->	id for input
*/
function DeVardumpForeach
						(
							$variable,
							$name = '$variable',
							$id = 'code_1',
							$id_inp = 'input_1'
						)
	{
		?>
		<style>
			.DeVardumpForeach {
				position: relative;
				margin: 30px auto;
				width: 100%;
				min-width: 450px;
				max-width: 950px;
			}
			.title {
				display: block;
				position: relative;
				box-sizing: border-box;
				cursor: pointer;
				margin: 0px auto;
				padding: 10px 10px;
				color: #fff;
				background-color: #000;
				font-size: 1.4em;
				text-align: center;
			}
			.title__btn {
				display: block;
				position: absolute;
				top: 6px;
				background-color: #3E3E3E;
				padding: 3px 15px;
				color: #fff;
			}
			.title__btn:hover {
				background-color: #3090DA;
			}
			#btn_open__<?= $id; ?> {
				display: none;
			}
			#btn_close__<?= $id; ?> {
				display: block;
			}
			.title_var-name {
				color: #55B5FF;
			}
			#<?= $id ?> {
				display: block;
			}
			.vardump {
				width: 100%;
				min-width: 450px;
				max-width: 950px;
				box-sizing: border-box;
				background-color: #333;
				color: #fff;
				font-size: 1.5em;
				padding: 10px 10px;
				margin: 0px auto;
				overflow-y: auto;
    			max-height: 70vh;
			}
			.vardump__content {
				border: 1px solid #eee;
				margin-bottom: 10px;
				padding-left: 10px;
			}
			.vardamp__key {
				color: #55B5FF;
				padding-top: 5px;
				padding-bottom: 5px;
			}
			.vardamp__value {
				color: #fff;
				padding-top: 5px;
				padding-bottom: 5px;
				word-wrap: break-word;
			}
			#<?= $id_inp; ?> {display: none}
			#<?= $id_inp; ?>:checked ~ #<?= $id; ?> {
				display: none;
			}
			#<?= $id_inp; ?>:checked ~ .title #btn_close__<?= $id; ?> {
				display: none;
			}
			#<?= $id_inp; ?>:checked ~ .title #btn_open__<?= $id; ?> {
				display: block;
			}
		</style>
		<div class="DeVardumpForeach">
		<input type="checkbox" id='<?= $id_inp; ?>' checked>
		<label class="title" id="<?= $id.$id_inp; ?>" for="<?= $id_inp; ?>">
			<span class="title__btn" id="btn_open__<?= $id; ?>">open</span>
			<span class="title__btn" id="btn_close__<?= $id; ?>">close</span>
				DeVardumpObj <span class="title_var-name"><?= $name ?></span>
				id = "<?= $id; ?>"
		</label>
		
		<div class="vardump" id="<?= $id; ?>">
		<?php	
			foreach ($variable as $key => $value) {?>
				<div class="vardump__content">
					<div class="vardamp__key"><?= $key; ?></div>
					<div class="vardamp__value"><?= $value; ?></div>
				</div>
			<?}?>
		</div>
		</div>	

<?	}