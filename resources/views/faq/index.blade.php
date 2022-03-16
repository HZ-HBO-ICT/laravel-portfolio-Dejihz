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

              <p>Link: <a href="{{ $faq->link }}">{{ $faq->link }}</a></p>

              <button  style="cursor: pointer; border: 2px solid black; font-size: 20px; background-color: black;"><a href="{{route('faq.edit',$faq)}}" style="color: white; text-decoration: none; cursor: pointer;">Edit</a></button>
              <button style="cursor: pointer; border: 2px solid black; font-size: 20px;background-color: red;"><a href="{{route('faq.delete',$faq)}}"style="color: white; text-decoration: none; cursor: pointer;">Delete</a></button>
            </div>
        @endforeach
        
            
            <button style="cursor: pointer; border: 2px solid black; font-size: 20px;background-color: green;">
              <a href="/faq/create" style="color: white; text-decoration: none; cursor: pointer;"> Create New FAQ</a>
            </button>
      </section>
  </article>

@endsection