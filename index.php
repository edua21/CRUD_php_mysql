<?php
    require_once('functions/dbfunctions.php');
    $connection = getDataBaseConnection();


    $result = $connection->query('select * from libros where 1;');

    $connection->close();

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Libro de visitas</title>

        <!--Table css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    </head>
    <body>
        <header>
        </header>
    
        <div class="container">
            <!-- Contenido -->
                <div class="row">
                    <div class="col-sm">
                        <h1>Libro de visitas</h1> 
                        <table id=example class="table">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Cuidad</th>
                                    <th>Comentario</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?php echo $row['date']?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['city']?></td>
                                        <td><?php echo $row['comment']?></td>
                                    </tr>
                                <?php endwhile; ?>    
                            </tbody>
                            
                            
                        </table>
                    </div>
                </div>           
        </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
        </footer> 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <!--Custon Js--> 
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script text="javascript">
            $(document).ready(function() {
            $('#example').DataTable();
            } );
        </script>
    </body>
</html>
