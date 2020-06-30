<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>MVC Laravel</title>
  </head>
  <body>
    <h1 class="text-center">Buat Account Baru!</h1>
        <div class="row">
            <div class="container">
                <div class="col-md-6 offset-md-3">
                    <h4>Sign Up Form</h4>
        <form action="{{ route('register') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="first_name">First name :</label>
                <input type="text" id="first_name" name="first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="last_name">Last name :</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender : </label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="laki-laki" name="gender" value="L" class="custom-control-input">
                    <label class="custom-control-label" for="laki-laki">Male</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="perempuan" name="gender" value="P" class="custom-control-input">
                    <label class="custom-control-label" for="perempuan">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="kebanggsaan">Nationality :</label>
                <select class="form-control">
                    <option value="">-- Please choose one --</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Inggris">Inggris</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Language Spoken: </label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="indonesia">
                    <label class="custom-control-label" for="indonesia">Bahasa Indonesia</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="english">
                    <label class="custom-control-label" for="english">Bahasa Inggris</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="others">
                    <label class="custom-control-label" for="others">Lainnya</label>
                </div>
            </div>
            <div class="form-group">
                <label for="bio">BIO :</label>
                <textarea name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary rounded-pill">Sign Up</button>
            </div>
        </form>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>