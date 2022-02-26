@extends('Master')

@section('content')
<table class="table table-responsive  ">
         
  <tbody>
     
      <tr>
         
          <td><img src="{{ asset('img/etudiant.jpg') }}"  height="150px" class="img img-rounded" width="400px"  alt="etudiant">
            <h3> Manage Students</h3>
          </td>
          <td> <img src="{{ asset('img/librairy.jpg') }}" height="150px" width="400px"   alt="librairy">
            <h3> Manage Library</h3></td>
      </tr>
      
        
      <tr>
        <td> <img src="{{ asset('img/teacher2.jpg') }}" height="150px" width="400px"  alt="librairy">
          <h3> Manage teachers</h3>
        </td>
        {{-- test --}}
        @if (Gate::allows('access-admin'))

        <td>    <a href="{{ route('admin.index') }}"><img src="{{ asset('img/adminstra.jpg') }}"  height="150px" width="400px"  alt="administration"  ></a>
          <h3> Settings Administration
            
          </h3>
        </td>
      @endif
          {{-- fin test --}}
         
      </tr>

  </tbody>
</table>
@endsection