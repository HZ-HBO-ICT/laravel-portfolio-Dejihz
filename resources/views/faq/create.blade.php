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

          <textarea name="question" id="question" cols="20" rows="5" placeholder="Your Question "></textarea>
        </div>

        <div class='formElement' style="margin-top: 10px;">
          <label class='label' for='answer'>Answer</label>
        </div>
        <div>
          <textarea name="answer" id="answer" cols="20" rows="5" placeholder="Your Answer"></textarea>
        </div>

        <div class='formElement' style="margin-top: 10px;">
          <label class='label' for='link'>Link</label>
          </div>
        <div>
          <input class='input' type="text" name="link" id='link'>
        </div>
        <div>
          <button type="submit" style="cursor: pointer; border: 2px solid black; font-size: 20px; color: white;background-color: black;">Submit</button>
        </div>
      </form>
      </section>
 

@endsection