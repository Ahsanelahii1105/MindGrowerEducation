@extends('layouts.bs_main')


   @section('content')

   <div class="container-fluid w-50">
       <h1 class="text-secondary text-center mt-5">Insert Faculties Data</h1>
      <form action="/admin/insertfaculty" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <label for="" class="form-label">Faculty Title</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Subject Title">
         </div>
         <div class="form-group">
            <label for="" class="form-label">Faculty short Description</label>
            <textarea rows="4" type="text" name="desc" id="" class="form-control" placeholder="Enter Subject Description"></textarea>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Faculty full Description</label>
            <textarea rows="4" type="text" name="fulldesc" id="" class="form-control" placeholder="Enter Subject Description"></textarea>
         </div>
         <div class="form-group">
            <label for="" class="form-label">Image (if any:)</label>
            <input type="file" name="image" id="" class="form-control">
         </div>
         <div class="form-group mt-3">
            <button type="submit" class="w-100 btn btn-primary">Insert</button>
         </div>
      </form>
   </div>

   @endsection
