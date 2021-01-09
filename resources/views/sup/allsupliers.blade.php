@extends('layouts.app')

@section('content')


<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Serial</th>
      <th scope="col">Account</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>

<!-- Modal -->

 
  @foreach($emp as $row)
    <tr>
      <td>{{ $row->email }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->address }}</td>
      
      <td>{{ $row->phone }}</td>
     
      
       
      <td>
      <!-- <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">View</button> -->
      <a href="{{URL::to('single-supplier/'.$row->id)}}"data-toggle="modal" data-target="#exampleModal"  class="btn btn-success">View</a>
      <a href="{{URL::to('edit-employee/'.$row->id)}}" class="btn btn-success">Edit</a>
      <a href="{{URL::to('delete-employee/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>

</td>
    </tr>
</div>
</div>
</div>
 @endforeach  

  
</tbody>
</table>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <!-- start -->

       <head>
<title>Sort a HTML Table Alphabetically</title>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>


<table id="myTable">
@foreach($emp as $row)
  <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th onclick="sortTable(0)">Name</th>
    <th onclick="sortTable(1)">Country</th>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>{{ $row->name }}</td>
  </tr>
  <!-- <tr>
    <td>North/South</td>
    <td>{{ $row->email }}</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>{{ $row->phone }}</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>{{ $row->address }}</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>{{ $row->city }}</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>{{ $row->states }}</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>{{ $row->bank_branch }}</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>{{ $row->bank_account }}</td>
  </tr>

  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>{{ $row->bank_holder }}</td>
  </tr>

  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>{{ $row->bank_name }}</td>
  </tr> -->



  @endforeach  
</table>

<!-- <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script> -->

</body>

<!-- start -->



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    
  @endsection