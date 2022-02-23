@extends ('layout')


@section('title')
<title>Portfolio | FAQ-EDIT</title>
@endsection

@section('link')
<link rel="stylesheet" href="/*" /> 
<link rel="stylesheet" href="/css/faq.css"> 
@endsection

@section ('content')
<!-- Header -->
    <header class="container">
      <div class="h-text">FAQ-Edit</div>
    </header>
    
<!--Body  -->
      <section class="content">
        <form method="POST" action="{{route('faq.update',$faq)}}">
          @csrf
          @method('PUT')

          <section class="content">
          
          <div class='formElement'>
          <label class='label' for='question'>Question</label></div>
          <div>
          <input class='input' type="text" name="question" id='question' value="{{ $faq->question }}" style="width: 100%">
          @error('question')
          <p style="color: red;">{{$errors->first('question')}}</p>
          @enderror
          </div>

          <div class='formElement'>
            <label class='label' for='answer'>Answer</label>
          </div>
          <div>
            <input class='input' type="text" name="answer" id='answer' value="{{ $faq->answer }}" style="width: 100%">

          @error('answer')
          <p style="color: red;">{{$errors->first('answer')}}</p>
          @enderror
          </div>

          <div class='formElement'>
            <label class='label' for='link'>Link</label>
            </div>
          <div>
            <input class='input' type="text" name="link" id='link' value="{{ $faq->link }}" style="width: 100%">
          </div>
          <button type="submit" style="cursor: pointer; border: 2px solid black; font-size: 20px; color: white;background-color: black;">Submit</button>
        </section>
        </form>
      </section>
 

@endsection
