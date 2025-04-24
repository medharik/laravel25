<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body>

    <div>
        {{session('notice')}}
    </div>

    <h1>{{$message}}</h1>

  <div class="container">
    @if ($errors->any())

    <div class="alert alert-danger">
        @foreach ($errors->all() as $e)
        <li>{{$e}}  </li>
        @endforeach
    </div>
    @endif
    <form action="/enregister" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        @csrf
           <div class="col-md-4">
             <label for="validationCustom01" class="form-label">Libelle</label>
             <input type="text" name="libelle"  class="form-control" id="validationCustom01" value="Mark" required>
             @error('libelle')
                {{$message}}
            @enderror
             <div class="valid-feedback">
               Looks good!
             </div>

           </div>

           <div class="col-md-4">
             <label for="validationCustomUsername" class="form-label">Qte</label>
             <div class="input-group has-validation">
               <span class="input-group-text" id="inputGroupPrepend">@</span>
               <input type="text" name="qte" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
               <div class="invalid-feedback">
                 Please choose a username.
               </div>
             </div>
           </div>
           <div class="col-md-6">
             <label for="validationCustom03" class="form-label">Prix</label>
             <input type="text" name="prix" class="form-control" id="validationCustom03" required>
             <div class="invalid-feedback">
               @error('prix')
                   {{$message}}
               @enderror
             </div>
           </div>

           <div class="col-md-3">
             <label for="validationCustom05" class="form-label">Photo </label>
             <input type="file" name="photo" class="form-control" id="validationCustom05" required>
             <div class="invalid-feedback">
               Please provide a valid photo.
             </div>
           </div>
           <div class="col-12">
             <div class="form-check">
               <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
               <label class="form-check-label" for="invalidCheck">
                 Agree to terms and conditions
               </label>
               <div class="invalid-feedback">
                 You must agree before submitting.
               </div>
             </div>
           </div>
           <div class="col-12">
             <button class="btn btn-primary" type="submit">Submit form</button>
           </div>
         </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

    //  form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>
