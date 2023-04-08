<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title text-center">Edit and Update Data</h3>
                        <form method="POST" action="{{url('update-data/'.$contact->contact_id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input type="text" value="{{$contact->name}}" class="shadow-lg form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{$contact->email}}" class="shadow-lg form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone</label>
                                <input type="tel" value="{{$contact->phoneNumber}}" class="shadow-lg form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Query/Comments</label>
                                <textarea class="shadow-lg form-control" value="{{$contact->message}}" id="message" name="message" rows="5" required></textarea>
                            </div>
                           <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class=" shadow-lg btn btn-primary">Update</button>
                           </div>
                        
                                   </form>
                              </div>
                           </div>
                        </div>
                    </div>
             </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>