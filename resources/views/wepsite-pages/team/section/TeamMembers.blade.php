  @php
      $teams=[['img'=>'assets/img/team/team-1.jpg','name'=>'Walter White','description'=>'Chief Executive Officer'],
      ['img'=>'assets/img/team/team-2.jpg','name'=>'Sarah Jhonson','description'=>'Product Manager'],
      ['img'=>'assets/img/team/team-3.jpg','name'=>'William Anderson','description'=>'CTO'],
      ['img'=>'assets/img/team/team-4.jpg','name'=>'Amanda Jepson','description'=>'Accountant']
      ]
  @endphp
  

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Team</h2>
  
          </div>
  
          <div class="row gy-4">
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration *100 }}">
            @include('wepsite-pages.team.TeamMember',[
                'img'=>$team['img'],
                'name'=>$team['name'],
                'description'=>$team['description']

            ])
                 </div>
            @endforeach
  
  
          </div>
  
        </div>
      </section><!-- End Team Section -->