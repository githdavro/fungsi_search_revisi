<html>
<head>
    <link rel="stylesheet" href="indextampilan.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script>
  function siswa(){
    location.replace("")
  }

  function bayar(){
    location.replace("view_pembayaran.php")
  }
</script>
</head>
<body>
    <div class="container">
          <div class="row">
              <div class="col-lg-10 col-xl-9 mx-auto">
                  <div class="card card-signin flex-row my-5">
                      <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
                       </div>
                           <div class="card-body">
                             <h4>Pilih Opsi Data?</h4>
                             <br>
                              <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-lighter mb-2" onclick="siswa()" type="submit">Data Siswa</button>
                                <br>
                              <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-lighter" onclick="bayar()" type="submit">Data Pembayaran</button>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
      </div>
    </body>
</html>
