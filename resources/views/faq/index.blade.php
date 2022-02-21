@extends ('layout')

@section('title')
<title>Portfolio | FAQ-Edit</title>
@endsection

@section ('content')
<!-- Header -->
    <header class="container">
      <div class="h-text">FAQ</div>
    </header>
    
<!--Body  -->
    <article class="main">  
      <section class="content">
        @foreach($faqs as $faq)
            <button class="accordion">
              <h2>Q: {{ $faq->question }}</h2>
            </button>
            <div class="drop-down">
              <p>A: {{ $faq->answer }}</p>

              <p>Link: {{ $faq->link }}</p>
              <button class="button" style="text-decoration: none;"><a href="/faq/{{$faq->id}}/edit">Edit</a></button>
              <button class="button" style="text-decoration: none;"><a href="/faq/{{$faq->id}}/delete">Delete</a></button>
            </div>
        @endforeach
        
            
            <button class="button">
              <a href="/faq/create" > Create New FAQ</a>
            </button>
      </section>
  </article>

@endsection