@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('page-header')

<header class="intro-header parallax-window" data-parallax="scroll" data-image-src="{{ page_image('backgrounds/contact-bg.jpg') }}" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>Contact Me</h1>
            <hr class="small">
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @include('admin.partials.errors')
        @include('admin.partials.success')
        
        <p>
          Feni Government College is a traditional higher education institute of Feni District of Bangladesh. It is one of the oldest educational institutions in southeastern Bengal. It is located in the heart of Feni city. Wikipedia
        </p>
        <address>
Address: College Rd, Feni <br>
Phone: 0331-74049 <br>
Principal: Abul Kalam Azad <br>
Founded: 1992 <br>
Number of students: 22,000 <br>
Affiliation: National University, Bangladesh <br>

        </address>
      </div>
    </div>
  </div>
@endsection