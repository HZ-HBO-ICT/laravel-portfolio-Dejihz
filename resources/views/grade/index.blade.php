@extends ('layout')

@section('title')
<title>Portfolio | Dashboard</title>
@endsection

@section('content')<!--Main body  -->
    <article class="main">
      <div>
        <table class="dashboard">
          <tr>
            <th>Course Name</th>
            <th>Test Name</th>
            <th>Lowest Passing Grade</th>
            <th>Best Grade</th>
            <th>Passed At</th>
            <th>Edit</th>
          </tr>


          @foreach ($grades as $grade)
            <tr>
            <th>{{$grade->course_name}}</th>
            <td>{{$grade->test_name}}</td>
            <td>{{$grade->lowest_passing_grade}}</td>
            <td>{{$grade->best_grade}}</td>           
            <td>{{$grade->passed_at}}</td>
            <td><button  style="cursor: pointer; border: 2px solid black; font-size: 20px; background-color: darkblue;"><a href="{{route('grade.edit',$grade)}}" style="color: white; text-decoration: none; cursor: pointer;">Edit</a></button></td>
            <td><button style="cursor: pointer; border: 2px solid black; font-size: 20px;background-color: red;"><a href="{{route('grade.delete',$grade)}}"style="color: white; text-decoration: none; cursor: pointer;">Delete</a></button></td>
          </tr>
          @endforeach

          <caption > 
            <button style="cursor: pointer; border: 2px solid black; font-size: 20px;background-color: green;">
                    <a href="{{route('grade.create')}}" style="color: white; text-decoration: none; cursor: pointer;"> Add New Grade</a>
            </button>
          </caption> >

          <caption class="table-link"><a href="https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf" target="_blank" 
            class="caption-link">Regulations Regarding Tests and Exams</a></caption>
        
        </table>
      </div>

      <article class="section">Study Links</article>
      <article class="content">
        <div class="footerItem"><a class="link" href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Visit the HZ HBO-ICT Course and Examination Regulations (CER)</a></div>
        <div class="footerItem"><a class="link" href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">Visit the Implementation Regulations (IR) of the HBO-ICT programme</a></div>
        <div class="footerItem"><a class="link" href="https://learn.hz.nl/my/">Visit HZ Learn environment</a></div>
        <div class="footerItem"><a class="link" href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Visit Teams environment of the study programme</a></div>
        <div class="footerItem"><a class="link" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Visit page in MyHZ with my study progress</a></div>
        <div class="footerItem"><a class="link" href="https://dejihz.github.io/project/">The Github environment of the study programme</a></div>
      </article>
    </article>

@endsection