<?php
/*
$vardupm 		 	->	variable
$name 				->	variable name
$id 					-> id thie function, to be if many function uses
$id_inp				-> id for input
$pre_or_code  ->	format output: <pre> or <code> or other
*/
function DeVardump
						(
							$vardupm,
							$name = '$vardupm',
							$id = 'code_1',
							$id_inp = 'input_1',
							$pre_or_code = 'pre'
						)
	{
		?>
		<style>
			.DeVardump {
				position: relative;
				margin: 30px auto; 
			}
			.title {
				max-width: 850px;
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
				max-width: 850px;
				box-sizing: border-box;
				background-color: #333;
				color: #fff;
				font-size: 1.5em;
				padding: 10px 10px;
				margin: 0px auto;
				overflow-y: auto;
    		max-height: 70vh;
			}
			.vardump__code {
				max-width: 850px;
				background-color: #333;
				color: #fff;
				font-size: 1.2em;
				padding: 10px 30px;
				margin: 0px auto;
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
		<div class="DeVardump">
		<input type="checkbox" id='<?= $id_inp; ?>' checked>
		<label class="title" id="<?= $id.$id_inp; ?>" for="<?= $id_inp; ?>">
			<span class="title__btn" id="btn_open__<?= $id; ?>">open</span>
			<span class="title__btn" id="btn_close__<?= $id; ?>">close</span>
				DeVardump use &lt;<?= $pre_or_code; ?>&gt; tag <span class="title_var-name"><?= $name ?></span>
				id = "<?= $id; ?>"
		</label>

		<div class="vardump" id="<?= $id; ?>">
		<?php	
		echo '<'.$pre_or_code.' class=\'vardump__code\' id='.$id.'>';

		var_dump($vardupm);

		echo '</'.$pre_or_code.'>'.'</div></div>';
	}
	?>