
@php
    $ts=[
        [
            'stars'=>'4',
        'img'=>'assets/img/testimonials/testimonials-1.jpg',
        'description'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
        'name'=>'Saul Goodman',
        'position'=>'Ceo &amp; Founder'],
    
        [
            'stars'=>'5',
        'img'=>'assets/img/testimonials/testimonials-2.jpg',
        'description'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
        'name'=>'Sara Wilsson',
        'position'=>'Designer'],
        [
            'stars'=>'3',
        'img'=>'assets/img/testimonials/testimonials-3.jpg',
        'description'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
        'name'=>'Jena Karlis',
        'position'=>'Store Owner'],
        [
            'stars'=>'2',
        'img'=>'assets/img/testimonials/testimonials-4.jpg',
        'description'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
        'name'=>'Matt Brandon',
        'position'=>'Freelancer'],
        [
            'stars'=>'1',
        'img'=>'assets/img/testimonials/testimonials-5.jpg',
        'description'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
        'name'=>'John Larson',
        'position'=>'Entrepreneur'],
    
    ]
@endphp

<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>

      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            @foreach ($ts as $test)
            
            @include('wepsite-pages.servic.Testimonial',[
                'img'=>$test['img'],
                'name'=>$test['name'],
                'description'=>$test['description'],
                'position'=>$test['position'],
                'stars'=>$test['stars']
            ])
                
            @endforeach

      


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
