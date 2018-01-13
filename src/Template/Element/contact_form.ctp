<h5>
    Contact us!
</h5>
<?= $this->Form->create('Dummy', [
    'url' => [
        'controller' => 'pages',
        'action' => 'contact'
    ]
]); ?>
<div class="form-group col-lg-8 col-xs-12">
    <?= $this->Form->input('subject', [
        'label' => 'Subject',
        'class' => 'form-control'
    ]); ?>
</div>
<div class='form-group col-lg-8 col-xs-12'>
    <?= $this->Form->input('name', [
        'class' => 'form-control'
    ]); ?>
</div>
<div class='form-group col-lg-8 col-xs-12'>
    <?= $this->Form->input('email', [
        'class' => 'form-control'
    ]); ?>
</div>
<div class='form-group col-lg-8 col-xs-12'>
    <?= $this->Form->input('body', [
        'label' => 'Message',
        'type' => 'textarea',
        'class' => 'form-control'
    ]); ?>
</div>
<div class='form-group col-lg-8 col-xs-12'>
<?= $this->Form->submit('Send', [
    'class'=>'btn btn-secondary'
]); ?>
</div>
