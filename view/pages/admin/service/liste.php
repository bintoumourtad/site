
        <?php
           require_once("../../../../model/service_db.php");
           $services = listeService()->fetchAll();
         ?>

<!-- ======= Heade ======= -->
<?php require_once("../../../partials/extract_admin/head.php");?>
          <!-- End Heade -->
          <!-- ======= menuHaut ======= -->
     <?php require_once("../../../partials/extract_admin/menuHaut.php");?>
          <!-- End menuHaut -->
           <!-- ======= menuGauche ======= -->
      <?php require_once("../../../partials/extract_admin/menuGauche.php");?>
          <!-- End menuGauche -->
        

       

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
          <div class="card-body">
            
              
          <button style="float:right" type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                Ajouter
              </button>
          <h5 class="card-title">liste des services</h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>NOM</b>
                    </th>
                    <th>photo</th>
                    <th>description</th>
                    <th>action</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php

                foreach($services as $service)
               {

               ?>
                  <tr>
                    
                   <th scope="row"></th>
                    <img src="public/image/<?=$service["photo"]?>" alt="">
                   <td><?=$service["nom"]?></td>
                    <td><?=$service["description"]?></td>
                    <td><?=$service["action"]?></td>
                    <td><?=$service["date"]?></td>
                    
                  </tr>
                 <?php
                  }
                 ?>
     
                </tbody>
              </table>
            
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

 <!-- ======= footer ======= -->
 <?php require_once("../../../partials/extract_admin/footer.php");?>
          <!-- End footer -->
          
          <!-- ======= footer ======= -->
          <?php require_once("../../../partials/extract_admin/foot.php");?>
          <!-- End footer -->
  

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Large Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

         