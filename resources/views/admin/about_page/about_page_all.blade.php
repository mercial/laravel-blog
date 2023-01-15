@extends('admin.admin_master')
@section('admin')

<div class="main-content">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
    <div class="container-fluid">

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Обо мне (главная) </h4>

                <form method="post" action="{{ route('update.about') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $aboutpage->id }}">

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Тайтл</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{ $aboutpage->title }}"  id="example-text-input">
                        </div>
                    </div>
                    <!-- end row -->

                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Шорт тайтл </label>
                        <div class="col-sm-10">
                            <input name="short_title" class="form-control" type="text" value="{{ $aboutpage->short_title }}"  id="example-text-input">
                        </div>
                    </div>
                    <!-- end row -->


                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Краткое описание </label>
                        <div class="col-sm-10">
                            <textarea required="" name="short_description"  class="form-control" rows="5">
                         {{ $aboutpage->short_description }}
                            </textarea>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Полное описание </label>
                        <div class="col-sm-10">
              <textarea id="elm1" name="long_description">
           {{ $aboutpage->long_description }}
              </textarea>
                        </div>
                    </div>
                    <!-- end row -->

                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Изображение </label>
                        <div class="col-sm-10">
                   <input name="about_image" class="form-control" type="file" id="image">
                        </div>
                    </div>
                    <!-- end row -->


                      <div class="row mb-3">
                         <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                        <div class="col-sm-10">
          <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image))? url( $aboutpage->about_image):url('upload/admin_images/no_image.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                    <!-- end row -->
        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About Page">
                    </form>



                </div>
            </div>
        </div> <!-- end col -->
        </div>



        </div>
        </div>


        <script type="text/javascript">

            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>

        @endsection
