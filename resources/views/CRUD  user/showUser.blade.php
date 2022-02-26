@extends('Master')

@section('content')
    
     <div class="container mb-10 mt-5">
                                 
 <div class="container w-50 mt-5">
    <h1> User Account   </h1>
       <hr>

       <div class="bg-dark text-white rounded p-3">
             
          
         <div class="container "">
          <style>
              h5,p{
                     text-align: center;
              }
          </style>
          <p class="fw-bold row  " >
              <img  class="img img-rounded img img-thumbmail col-sm-8" style="margin: auto" src="{{ Storage::url($item->image) }}" alt="profile_image">
          </p>
         </div>

          <h5 class="text-warning">Name</h5>
           <p  class="fw-bold"> {{ $item->name }}</p>

           <h5 class="text-warning">Email</h5>
           <p class="fw-bold"> {{ $item->email }}</p>
           
            
           <h5 class="text-warning">Date de Creation</h5>
           <p class="fw-bold"> {{ $item->created_at }}</p>

       </div>
</div>
     </div>


@endsection