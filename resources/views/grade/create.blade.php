@extends ('layout')


@section('title')
<title>Portfolio | DASHBOARD-CREATE</title>
@endsection

@section('link')
<link rel="stylesheet" href="/*" /> 
<link rel="stylesheet" href="/css/faq.css"> 
@endsection

@section ('content')
<!-- Header -->
    <header class="container">
      <div class="h-text">Dashboard-Create</div>
    </header>
    
<!--Body  -->
      <section class="content">
        <form method="POST" action="{{route('grade.index')}}">
          @csrf

        <div class='formElement' style="margin-top: 10px;">
        <label class='label' for='course_name'>Course Name</label></div>

        <div>
          <input style="width: 100%" type="text" name="course_name" id="course_name" placeholder="Your Course Name" value="{{old('course_name')}}">

          @error('course_name')
          <p style="color: red">{{$errors->first('course_name')}}</p>
          @enderror
        </div>

        <div class='formElement' style="margin-top: 10px;">
        <label class='label' for='test_name'>Test Name</label></div>

        <div>
          <input style="width: 100%" type="text" name="test_name" id="test_name" placeholder="Your Test Name" value="{{old('test_name')}}">

          @error('test_name')
          <p style="color: red">{{$errors->first('test_name')}}</p>
          @enderror

        </div>

        <div class='formElement' style="margin-top: 10px;">
        <label class='label' for='best_grade'>Best Grade</label></div>

        <div>
          <input style="width: 100%" type="text" name="best_grade" id="best_grade" placeholder="Your Best Grade" value="{{old('best_grade')}}">

          @error('best_grade')
          <p style="color: red">{{$errors->first('best_grade')}}</p>
          @enderror
        </div>

          <button type="submit" style="cursor: pointer; border: 2px solid black; font-size: 20px; color: white;background-color: black;">Submit</button>
        </div>
      </form>
      </section>
 

@endsection