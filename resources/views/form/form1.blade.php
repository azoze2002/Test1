<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <div class="container mt-5">

    <form method="post" action="{{ route('form1_data') }}" enctype="multipart/form-data">
        <h1 >Form Blog</h1>
        @csrf
           <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="aba">Name:</label>
                    <input type="text" name="name" placeholder="name" class="form-control name-field @error('name')
                    is-invalid @enderror" id="aba" value="{{ old('name') }}"/>
                     @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>

                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="bbb">Age:</label>
                    <input type="number" name="age" placeholder="Age" class="form-control @error('age') is-invalid @enderror" id="bbb" value="{{ old('age') }}"/>
                    @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>

                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ccc">Email:</label>
                    <input type="Email" name="email" placeholder="Email" class="form-control @error('email')is-invalid @enderror" id="ccc" value="{{ old('email') }}" />
                    @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>

                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ddd">phone:</label>
                    <input type="number" name="phone" placeholder="Phone" class="form-control phone-field @error('phone')is-invalid  @enderror" id="ddd" value="{{ old('phone') }}"/>
                    @error('phone')
                    <small class="invalid-feedback">{{ $message }}</small>

                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="abc">pdf:</label>
                    <input type="file" name="pdf" class="form-control" id="abc"/>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-success" >Send</button>
                </div>
            </div>
        </div>



    </form>
   </div>
   <script>
    let field = document.querySelector('.name-field')
    let phone = document.querySelector('.phone-field')

    //let btn = document.querySelector('.btn-send')

    field.onkeyup = function(){
        if(field.value.length >3 && field.value.length <20)
        {
           // btn.removeAttribute('disabled')
            field.classList.add('is-valid')
            field.classList.remove('is-invalid')



        }else{
           // btn.setAttribute('disabled',true)
            field.classList.add('is-invalid')
            field.classList.remov('is-valid')
        }
    }
      phone.onkeyup = function(){
        if(phone.value.length == 10)
        {
           // btn.removeAttribute('disabled')
            phone.classList.add('is-valid')
            phone.classList.remove('is-invalid')



        }else{
           // btn.setAttribute('disabled',true)
            phone.classList.add('is-invalid')
            phone.classList.remov('is-valid')
        }
    }
   </script>

  </body>
</html>
