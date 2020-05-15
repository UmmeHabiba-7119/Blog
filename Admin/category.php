<?php
    require_once '../functions/admin.php';
    $page_content->getContent('header');

    if(isset($_POST['category_name'])){
      $category_name = $_POST['category_name'];
      $category_name = Formate::validation($category_name);
      $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
      $insert = $db->insert($query);
      if($insert){
        echo "Successfully Added New Category!";
      }
      else{
        echo "Failed to Add New Category!";
      }
    }
    else{
      echo "Please Insert Data";
    }
 ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
              <!-- Page Heading -->
              <h1 class="h3 mb-4 text-gray-800">Categories</h1>

              <div class="row">
                  <div class="col-md-7">
                      <div class="card">
                          <div class="card-header bg-primary text-white">
                              Add New Category
                          </div>
                          <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-4 col-form-label">Category Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="category_name" placeholder="Please Input New Category Name" required>
                                  </div>
                                </div>
                                <div class="from-group text-center">
                                  <input type="submit" value="Add New Category" class="btn btn-primary">

                                </div>
                              </form>
                          </div>
                      </div>

                  </div>

                </div>

              </div>
              <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
          $page_content->getContent('footer');
        ?>
