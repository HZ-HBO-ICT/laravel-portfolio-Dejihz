@extends ('layout')

@section('title')
    <title>Portfolio | BlogPost</title>
@endsection

@section('link')
<link rel="stylesheet" href="/*" /> 
    <link rel="stylesheet" href="/css/faq.css"> 
@endsection

@section ('content')
<!-- Main content -->
  <!-- Header -->
    <header class="container">
      <div class="h-text">{{$article-> title}}</div>
    </header>
    
<!--Body  -->
    <article class="main">  
      <section class="content">
            <div class="drop-down">
              <p>{{$article-> body}}</p>
            </div>
      </section>
@endsection

    
 
 

 

      

