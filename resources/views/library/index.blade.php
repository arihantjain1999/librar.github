@extends('layouts.app')
@section('content')
    {{-- <br> --}}
    <div class="container pb-5">
      {{-- <a type="button" class="btn btn-outline-primary" href=" {{ route('libraries.index') }} ">Back</a> --}}
  
      <div class="row text-center ">
          <div class="col-lg-8 mx-auto">
              <h1 class="display-4"> <u> Crudtp  </u></h1>
             <u>
               <p class="lead mb-0">Using Bootstrap 4 grid and utilities, create a nice team page.</p>
               <p class="lead">Snippet by
              </p>
            </u>
          </div>
      </div>
  </div><!-- End -->
  
    <div class="section_our_solution">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="our_solution_category">
            <div class="solution_cards_box">
              <div class="solution_card">
                <div class="hover_color_bubble"></div>
                <div class="so_top_icon">
                  <i class="fa fa-book" style="font-size: 35px ; color: #636fa4"></i>
                </div>
                <div class="solu_title">
                  <h3>Books</h3>
                </div>
                <div class="solu_description">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  </p>
                  <a type="button" class="read_more_btn" href=" {{ route('libraries.allbooks') }} ">All books</a>
                </div>
              </div>
              <div class="solution_card">
                <div class="hover_color_bubble"></div>
                <div class="so_top_icon">
                  <i class="fa fa-plus" style="font-size: 35px ; color: #636fa4"></i>
                  {{-- <i class="fa fa-books-medical" style="font-size: 35px ; color: #4AC29A"></i> --}}
                </div>
                <div class="solu_title">
                  <h3>Add Book</h3>
                </div>
                <div class="solu_description">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  </p>
                  <a type="button" class="read_more_btn" href=" {{ route('libraries.create') }} " >Add Book</a>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="solution_cards_box sol_card_top_3">
              <div class="solution_card">
                <div class="hover_color_bubble"></div>
                <div class="so_top_icon">
                  <i class="fa fa-user" style="font-size: 35px ; color: #636fa4"></i>
                </div>
                <div class="solu_title">
                  <h3>Authors</h3>
                </div>
                <div class="solu_description">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  </p>
                  <a type="button" class="read_more_btn" href=" {{ route('libraries.authors') }} ">All Authors</a>
                </div>
              </div>
              <div class="solution_card">
                <div class="hover_color_bubble"></div>
                <div class="so_top_icon">
                  <i class="fa fa-bookmark" style="font-size: 35px ; color: #636fa4"></i>
                 </div>
                <div class="solu_title">
                  <h3>Bookmark</h3>
                </div>
                <div class="solu_description">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  </p>
                  <a type="button" class="read_more_btn">Bookmark</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <br>
    <br>
    <div class="area" >
      <ul class="circles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
      </ul>
</div >
@endsection