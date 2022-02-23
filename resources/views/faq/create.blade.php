@extends ('layout')


@section('title')
<title>Portfolio | FAQ-CREATE</title>
@endsection

@section('link')
<link rel="stylesheet" href="/*" /> 
<link rel="stylesheet" href="/css/faq.css"> 
@endsection

@section ('content')
<!-- Header -->
    <header class="container">
      <div class="h-text">FAQ-Create</div>
    </header>
    
<!--Body  -->
      <section class="content">
        <form method="POST" action="/faq">
          @csrf

        <div class='formElement' style="margin-top: 10px;">
        <label class='label' for='question'>Question</label></div>
        <div>

          <input style="width: 100%" type="text" name="question" id="question" placeholder="Your Question" value="{{old('question')}}">

          @error('question')
          <p style="color: red">{{$errors->first('question')}}</p>
          @enderror

        </div>

        <div class='formElement' style="margin-top: 10px;">
          <label class='label' for='answer'>Answer</label>
        </div>
        <div>
          <input style="width: 100%" type="text" name="answer" id="answer" placeholder="Your Answer" value="{{old('answer')}}">
          @error('answer')
          <p style="color: red">{{$errors->first('answer')}}</p>
          @enderror
        </div>

        <div class='formElement' style="margin-top: 10px;">
          <label class='label' for='link'>Link</label>
          </div>
        <div>
          <input class='input' type="text" name="link" id='link'value="{{old('link')}}">
        </div>
        <div>
          <button type="submit" style="cursor: pointer; border: 2px solid black; font-size: 20px; color: white;background-color: black;">Submit</button>
        </div>
      </form>
      </section>
 

@endsection