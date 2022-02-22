@extends('admins.layouts.admin-dash-layout')


   @section('tiitle','Profile')
   @section('admin')

      <div class="container">
           
   <table class="table table-bordered table-responsive table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Role</th>
            <th> Date de creation </th>
             <th>Actions</th>
        </tr>
    </thead>
    <tbody>
     @if ($table->count() >0) 
          @foreach ($table as  $user)
                <tr>
                     
                    <td> <span class="badge badge-dark">{{ $loop->iteration }}</span></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                   <td>   
                  
                            @if (($user->admin==1))
                            <span   class="badge badge-danger">Administrateur</a>
                        @else
                            
                            <span   class="badge badge-primary">Utilistateur</a>
                        @endif

                        {{-- @if ( Auth::User()->email === $user->email)
                           <span   class="badge badge-success">Administrateur</a>
                        @else
                            
                            <span   class="badge badge-danger">Utilistateur</a>
                        @endif --}}
                    </td>
                    <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>
                           
                              <a class="btn btn-outline-danger" href="{{ route('CRUD.destroy') }}">Delete</a>
                              <a class="btn btn-outline-primary" href="{{ route('CRUD.edit') }}">Edit</a>
                              <a class="btn btn-outline-success" href="{{ route('CRUD.show') }}">Show</a>
                            
                    </td>
                </tr>
                

            @endforeach
       @else
         <h2>NO Data</h2>
     @endif
    </tbody>
</table>
         {{ $table->links()}}}
