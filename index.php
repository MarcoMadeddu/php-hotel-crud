<?php
@include __DIR__ . '/partials/home/server.php';

//sezione head
include __DIR__ . '/partials/templates/head.php';
?>

<?php //allerts
if(!empty($_GET['del'])){ $room= $_GET['del'];?>

<div class="alert alert-success">
    <span>Stanza <?php echo $room ?> cancellata con successo</span>
</div>

<?php } ?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">Hotel Rooms</h1>
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Number</th>
                        <th>Floor</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php //loop on db records
                    if(!empty ($rooms)){
                        foreach($rooms as $room){?>
                        <tr>
                            <td><?php echo $room['id']?></td>
                            <td><?php echo $room['room_number']?></td>
                            <td><?php echo $room['floor']?></td>
                            <td>
                                <a href="./show.php?id=<?php echo $room['id'];?>" class="text-success">View</a>
                            </td>

                            <td class="text-primary">
                                <a href="./edit.php?id=<?php echo $room['id'];?>" class="text-primary">Update</a>
                            </td>

                            <td class="text-danger">
                                <form action="./partials/delete/server.php" method ="POST" >
                                    <input type="hidden" name ="id" value = "<?php echo $room['id']?>">
                                    <input type="hidden" name ="room_number" value = "<?php echo $room['room_number']; ?>">
                                    <input class="btn btn-sm btn-danger" type ="submit" value="Delete">
                                    
                                </form>
                            </td>
                        </tr>
                        <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include __DIR__ .'/partials/templates/footer.php';
?>
    

