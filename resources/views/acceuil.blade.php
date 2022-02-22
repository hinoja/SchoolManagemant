@extends('welcome2')

@section('content')
    <table class="table">
         
        <tbody>
            <tr>
               
                <td><img src="{{ asset('img/etudiant.jpg') }}" alt="etudiant"></td>
                 
            </tr>
            <tr>
               
                  <td><img src="{{ asset('img/teacher2.jpg') }}" alt="etudiant"></td>
                
            </tr>
            <tr>
               
                <td> <img src="asset('img/librairy.jpg')" alt=""></td>
                 
            </tr>
            <tr>
               
                <td> <img src="asset('img/adminstra.jpg')" alt=""></td>
                 
            </tr>

        </tbody>
    </table>
    
@endsection