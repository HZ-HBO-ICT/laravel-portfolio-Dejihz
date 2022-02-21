@extends ('layout')

@section('title')
<title>Portfolio | FAQ</title>
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
            </div>
        @endforeach
        <button class="button">
              <a href="/faq/create" > Create New FAQ</a>
            </button>
      </section>
  </article>

@endsection