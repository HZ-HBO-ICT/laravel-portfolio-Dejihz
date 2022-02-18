@extends ('layout')

@section('title')
<title>Portfolio | Dashboard</title>
@endsection

@section('content')<!--Main body  -->
    <article class="main">
      <div>
        <table class="dashboard">
          <tr>
            <th>Quatile</th>
            <th>Contents</th>
            <th>Credits Obtained</th>
            <th>Credits Available</th>
          </tr>

          <tr>
            <th rowspan="3">Quatile 1</th>
            <td>
              Programme and Career Orientation
            </td>
            <td>2.5</td>
            <td>2.5</td>
          </tr>

          <tr>
            <td>Computer Science Basics</td>
              <td>5</td>
              <td>5</td>
          </tr>

          <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>5</td>
          </tr>

          <tr>
            <th>Quatile 2</th>
            <td>Object Oriented Programming</td>
            <td>10</td>
            <td>10</td>
          </tr>

          
          <tr>
            <th rowspan="2">Quartile 3</th>
            <td>
              Framework Development 1</td>
            <td>-------</td>
            <td>5</td>
          </tr>

          <tr>
            <td>Framework Project 1</td>
            <td>-------</td>
            <td>7.5</td>
          </tr>

          <tr>
            <th>Quartile 4</th>
            <td> Framework Project 2</td>
              <td>-------</td>
              <td>10</td>
          </tr>
          
          <tr>
            <th rowspan="3">Entire Year </th>
            <td>Programme and Career Orientation</td>
            <td>-------</td>
            <td>12.5</td>
          </tr>

          <tr>
            <td>IT Personality 1</td>
            <td>-------</td>
            <td>1.25</td>
          </tr>

          <tr>
            <td>IT Personality 2</td>
            <td>-------</td>
            <td>1.25</td>
          </tr>

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