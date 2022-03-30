<div class="card mb-3">
  <img src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p2/2015/12/01/Pictures/_c34102da-9849-11e5-b4f4-1b7a09ed2cea.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the information about students in the system</p>
      <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>


      </tr>
      </thead>
      <tbody>
      @foreach($students as $student)
      <tr>

          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->secondName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>

            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td>
      </tr>
      @endforeach

    </tbody>
    </table>
  </div>
</div>



