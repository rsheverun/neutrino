@extends('template')
@section('content')

<form action="{{ route('contacts') }}" method="POST" id="contacts" class="col-8 offset-2">
   {{ csrf_field() }}
    <fieldset class="form-fieldset">
    
        <div class="form-element">
            <input id="name" class="form-element-field" placeholder="Як до Вас звертатись?" type="input" name="name" />
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="name">Ім'я</label>
        </div>
        
        <div class="form-element">
            <input id="email" class="form-element-field" placeholder=" " type="email" name="email" />
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="email">Email</label>
            
        </div>
        <div class="form-element">
            <input id="phone" class="form-element-field" placeholder="0933911751" type="text" name="phone" />
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="phone">Телефон</label>
            
        </div>
        <div class="form-checkbox form-checkbox-inline">
            <div class="form-checkbox-legend">Вибрана дисципліна</div>
            @foreach ($disciplines as $discipline)
	            <label class="form-checkbox-label">
		    		<input  class="form-checkbox-field" type="checkbox" name="discipline[]" value="{{ $discipline->id }}"  />
		    		<i class="form-checkbox-button"></i>
		   			<span>{{ $discipline->name_discipline }}</span>
				</label>
            @endforeach
<!--             <label class="form-checkbox-label">
    <input  class="form-checkbox-field" type="checkbox" name="discipline[]" value="F"  />
    <i class="form-checkbox-button"></i>
    <span>Фізика</span>
</label>
<label class="form-checkbox-label">
    <input class="form-checkbox-field" type="checkbox" name="discipline[]" value="M" />
    <i class="form-checkbox-button"></i>
    <span>Математика</span>
</label> -->
          </div>  
        <div class="form-element form-textarea">
            <textarea id="comment" class="form-element-field" placeholder=" " name="comment"></textarea>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="comment">Коментар</label>
        </div>
    </fieldset>
    
        <button class="btnForm form-btn col-3 offset-8" type="submit">Відправити</button>
    
</form>

 @endsection
    
