<!DOCTYPE html>
<html>
<head>
    <title>Assignment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="row mt-5">
        <div class="col-md-10 offset-md-1">
          <h3 class="text-center mb-4">Assignment</h3>
          <form method="post" action="{{route('ebok.payment')}}">
             @csrf
            <div class="form-group row">
              <div class="col-md-6">
                  <label class="form-control-label">First name<span class="text-danger">*</span></label>
                  <input type="text" name="first_name" class="form-control" required="">
                  @if ($errors->has('first_name'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="col-md-6">
                  <label class="form-control-label">Last name<span class="text-danger">*</span></label>
                  <input type="text" name="last_name" class="form-control" required="">
                  @if ($errors->has('last_name'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="col-md-6">
                  <label class="form-control-label">Email<span class="text-danger">*</span></label>
                  <input type="text" name="email" class="form-control" required="">
                  @if ($errors->has('email'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="col-md-6">
                  <label class="form-control-label">Phone No<span class="text-danger">*</span></label>
                  <input type="number" name="phone_no" class="form-control" required="">
                  @if ($errors->has('phone_no'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('phone_no') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="col-md-6">
                  <label class="form-control-label">Amount<span class="text-danger">*</span></label>
                  <input type="number" name="amount" class="form-control" required="">
                  @if ($errors->has('amount'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('amount') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="col-md-6">
                  <label class="form-control-label">Currency<span class="text-danger">*</span></label>
                  <input type="text" name="currency" class="form-control" required="">
                  @if ($errors->has('currency'))
                      <span class="text-danger help-block form-error">
                          <strong>{{ $errors->first('currency') }}</strong>
                      </span>
                  @endif
              </div>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn  btn-outline-primary">Pay</button>
            </div>
          </form>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>