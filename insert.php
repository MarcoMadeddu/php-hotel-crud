<?php


//sezione head
include __DIR__ . '/partials/templates/head.php';
?>


<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1 class="text-primary">ADD NEW ROOM</h1>
            </header>

            <form action="partials/insert/server.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input type="number" class="form-control" name="room_number" id="room_number" placeholder="Add room number">
                    
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input type="number" class="form-control" name="beds" id="beds" placeholder="Add bed">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input type="number" class="form-control" name="floor" id="floor" placeholder="Add Florr">
                </div>
                <div class="form-group">
                  <input class="btn btn-primary"type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include __DIR__ .'/partials/templates/footer.php';
?>