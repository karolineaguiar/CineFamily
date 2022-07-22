@include('layouts.menu')
   <div class="card-header">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
         <div class="container mt-5">
               <div class="row">
                  <div class="col-10">
                  <h1>Listagem</h1>
               </div>
               <div style="text-align:right"> 
                  <table class="table mt-3">
                     <thead>
                        <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Nome</th>
                           <th scope="col">...</th>
                        </tr>
                     </thead>
                     <tbody class="table-group-divider">
                        @foreach($genres as $genre)
                           <tr>
                              <th>{{ $genre->id }}</th>
                              <th>{{ $genre->name }}</th>
                           </tr>
                        @endforeach       
                     </tbody>
                  </table>
               </div>
         </div>
   </div>