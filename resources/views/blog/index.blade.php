@extends ('layout')

@section('title')
<title>Portfolio | Blog</title>
@endsection

@section ('content')
<!-- Main content -->
    <section class="main">
      

        <article class="first">
          <div class="title"><h2>Feedback</h2></div>
          <div class="date-desc">
            <h2>14/09/2021 </h2>
          </div>
          <div class="button1"><button class="button"><a href="resources/feedback.pdf" target="_blank" class="read">Read more &gt;</a></button></div>
        </article>
        
        @foreach ($articles as $article)
        <article class="second">
          <div class="title"><h2>{{$article->excerpt}}</h2></div>
          <div class="date-desc">
            <h2>{{$article->created_at}}</h2>
            </div>
            <div class="button1"><button class="button">
              <a href="/blog/{{$article->id}}" class="read">Read more  &gt;</a>
            </button></div>
        </article>
        @endforeach
        
  </section>
  @endsection