<div class="form">
	


	<div class="row">
		<div class = "column">

			<?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
				'heading' => 'We Are the Subcrew',
				'content' => '<p>No smoking unless you want.</p>'
								.'<p>Wandering in the zoo is the only thing to do on Saturday.</p>' 
								.'<p>Fandabidozi.</p>' 
			)); ?>

		</div>
	<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
		//'enableAjaxValidation'=> true,
	)); ?>

		<div class ="column">
		<fieldset>

		<div class="row">
			<?php echo $form->textFieldControlGroup($model, 'username',
				array(
				'label' => 'Username', 
				'placeholder' => 'Username'
				)); ?>
		</div>
		

		<div class="row">
			<?php echo $form->passwordFieldControlGroup($model, 'password',
				array(
				'label' => 'Password', 
				'placeholder' => 'Password'
				)); ?>
		</div>

		</fieldset>

		<div class="row">
			<?php echo TbHtml::formActions(array(
				TbHtml::submitButton('Login In', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
			)); ?>
		</div>

		</div>
	</div>

	<?php $this->endWidget(); ?>
</div>


