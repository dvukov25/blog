
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Naziv artikla:</strong>
            {!! Form::text('title', null, array('placeholder' => 'Naziv artikla','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Opis artikla:</strong>
            {!! Form::textarea('body', null, array('placeholder' => 'Opis artikla','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Spremi</button>
    </div>
</div>