<?php

require_once 'includes.php';


/*
$re = new Record("name" , 12);
new Writer($re , 'append');
$r = new Writer($re , 'change');
$r->save();
*/

/*
$reader = new Reader();
echo "<pre>";
print_r($reader->data());
echo "</pre>";
*/

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container shadow rounded mt-4 p-1">
        <div class="row">
            <div class="col-6">
                <div class="table-responsive p-2">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/update.php" method="post">
                            <?php
                                $reader = new Reader();
                                $data = $reader->data();
                                foreach ($data as $value) 
                                {
                                    if($value->name() == "") continue;
                                    echo "<div class='container'>
                                    <tr class='container'>
                                        <td scope='row'>
                                        <div class='mb-3 col-8'>
                                          <label for='' class='form-label'>Name</label>
                                          <input type='text'class='form-control' name='name[]' aria-describedby='helpI' value='{$value->name()}' /></div>
                                        </td>
                                        <td>
                                        <div class='mb-3 col-8'>
                                        <label for='' class='form-label'>Preis</label>
                                        <input type='number' class='form-control' name='price[]' aria-describedby='helpI' value='{$value->price()}' /></div>
                                        </td>
                                    </tr>
                                    </div>";
                                }
                            ?>
                            <input type="submit" value="save" class="btn btn-outline-info" style="width: 100%;">
                            </form>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="col-4 ">
                <h2 class="text-center">Add new record</h2>
                <form action="/store.php" method="post">
                    <div class="mb-3">
                        <Label class="form-labee">name</Label>
                        <input type="text" name="name" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <Label class="form-labee"> price</Label>
                        <input type="number" name="price" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="done" class="btn btn-outline-primary" style="width: 100%;">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>