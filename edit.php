<?php
include_once __DIR__ .'/partials/update/server-edit.php';

//sezione head
include __DIR__ . '/partials/templates/head.php';
?>


<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">Edit Room</h1>
            </header>

            <form action="partials/update/server-update.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input type="number" class="form-control" name="room_number" id="room_number" value="<?php echo $room['room_number'] ?>">
                    
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input type="number" class="form-control" name="beds" id="beds" value="<?php echo $room['beds'] ?>">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input type="number" class="form-control" name="floor" id="floor" value="<?php echo $room['floor'] ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                  <input class="btn btn-primary"type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include __DIR__ .'/partials/templates/footer.php';
?>
    

