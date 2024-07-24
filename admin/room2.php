<?php
include './traitement/room.php';

?>

<!DOCTYPE html>
<html lang="en">
<?php include './links/links.php' ?>

<body>
    <div class="wrapper">
        <?php
        $current_page = 'room';
        include './links/sidebare.php'; ?>
    </div>
    <!-- end sidebar -->
    <div class="main-panel">
        <?php include './links/customer.php' ?>
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Rooms</h3>
                    <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                            <a href="#">
                                <i class="fas fas fa-bed"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">All Room</h4>
                                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Room
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold"> New</span>
                                                <span class="fw-light"> Staff </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="addRoomForm" action="./traitement/addroom.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="addName" name="Name" type="text" class="form-control" placeholder="Name" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Image</label>
                                                            <input id="addPhoto" name="Photo" type="file" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Type</label>
                                                            <input id="addType" name="Type" type="text" class="form-control" placeholder="Type" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Capacity</label>
                                                            <input id="addCapacity" name="Capacity" type="number" class="form-control" placeholder="Capacity" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Price</label>
                                                            <input id="addPrice" name="Price" type="text" class="form-control" placeholder="Price" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Description</label>
                                                            <input id="addDescription" name="Description" type="text" class="form-control" placeholder="Description" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Number Bed</label>
                                                            <input id="addNumberBed" name="NumberBed" type="number" class="form-control" placeholder="Number Bed" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Type Bed</label>
                                                            <input id="addBedType" name="TypeBed" type="text" class="form-control" placeholder="Type Bed" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-default">
                                                            <label>Quantity</label>
                                                            <input id="addQuantity" name="quantity" type="number" class="form-control" placeholder="Quantity" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>Other Pic</label>
                                                            <input id="otherPics" name="OtherPics[]" type="file" class="form-control" multiple />
                                                        </div>
                                                    </div>
                                                    <!-- Repeat above block for more images if needed -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="WiFi" id="wifiCheck" value="1">
                                                            <label class="form-check-label" for="wifiCheck">WiFi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="TV" id="tvCheck" value="1">
                                                            <label class="form-check-label" for="tvCheck">TV</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="Climatiseur" id="climatiseurCheck" value="1">
                                                            <label class="form-check-label" for="climatiseurCheck">Climatiseur</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="FreeDrink" id="freeDrinkCheck" value="1">
                                                            <label class="form-check-label" for="freeDrinkCheck">Free Drink</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="Disponibility" id="disponibilityCheck" value="1">
                                                            <label class="form-check-label" for="disponibilityCheck">Disponibility</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="add" class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-danger">Close</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="EditRoomModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Edit</span>
                                                <span class="fw-light">Room</span>
                                            </h5>
                                            <button type="button" class="close" onclick="closeEditModal()" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editRoomForm" action="./traitement/editroom.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" id="editRoomID" name="RoomID">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="editRoomName" name="Name" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Image</label>
                                                            <input id="editPhoto" name="Photo" type="file" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Type</label>
                                                            <input id="editType" name="Type" type="text" class="form-control"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Capacity</label>
                                                            <input id="editCapacity" name="Capacity" type="number" class="form-control" placeholder="Capacity" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Price</label>
                                                            <input id="editPrice" name="Price" type="text" class="form-control" placeholder="Price" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Description</label>
                                                            <input id="editDescription" name="Description" type="text" class="form-control" placeholder="Description" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Number Bed</label>
                                                            <input id="editNumberBed" name="NumberBed" type="number" class="form-control" placeholder="Number Bed" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Type Bed</label>
                                                            <input id="editBedType" name="BedType" type="text" class="form-control" placeholder="Type Bed" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Quantity</label>
                                                            <input id="editquantity" name="quantity" type="number" class="form-control" placeholder="Quantity" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-default">
                                                            <label>Other Pic</label>
                                                            <input id="editPhoto" name="OtherPics[]" type="file" class="form-control" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="WiFi" id="wifiCheck" value="1">
                                                            <label class="form-check-label" for="wifiCheck">WiFi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="TV" id="tvCheck" value="1">
                                                            <label class="form-check-label" for="tvCheck">TV</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="Climatiseur" id="climatiseurCheck" value="1">
                                                            <label class="form-check-label" for="climatiseurCheck">Climatiseur</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="FreeDrink" id="freeDrinkCheck" value="1">
                                                            <label class="form-check-label" for="freeDrinkCheck">Free Drink</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check mt-3">
                                                            <input class="form-check-input" type="checkbox" name="Disponibility" id="disponibilityCheck" value="1">
                                                            <label class="form-check-label" for="disponibilityCheck">Disponibility</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                                                <button type="button" class="btn btn-danger" onclick="closeEditModal()">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>

                                            <th colspan="2" class="text-center">Name</th>
                                            <th>Capacity</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th style="width: 10%" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rooms as $room) : ?>
                                            <tr>
                                                <td><img src="../img/rooms/<?php echo $room['Image']; ?>" alt="Photo" width="100" height="50"></td>
                                                <td><?php echo $room['RoomName']; ?></td>
                                                <td><?php echo $room['Capacity']; ?></td>
                                                <td><?php echo $room['Type']; ?></td>
                                                <td>$ <?php echo number_format($room['Price'], 2); ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#EditRoomModal" data-id="<?php echo $room['RoomID']; ?>" data-room-name="<?php echo $room['RoomName']; ?>"  data-room-type="<?php echo $room['Type']; ?>" data-capacity="<?php echo $room['Capacity']; ?>" data-price="<?php echo $room['Price']; ?>" data-description="<?php echo $room['Description']; ?>" data-number-bed="<?php echo $room['NumberBed']; ?>" data-type-bed="<?php echo $room['TypeBed']; ?>" data-quantity="<?php echo $room['Quantity']; ?>" data-disponibility="<?php echo $room['Disponibility']; ?>" data-wifi="<?php echo $room['Wifi']; ?>" data-tv="<?php echo $room['TV']; ?>" data-climatiseur="<?php echo $room['Climatiseur']; ?>" data-free-drink="<?php echo $room['FreeDrink']; ?>">


                                                            <i class="fa fa-edit"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-link btn-primary" onclick="openModal2('<?php echo $room['Image']; ?>', '<?php echo $room['RoomName']; ?>', '<?php echo $room['Type']; ?>', '<?php echo $room['Capacity']; ?>', '<?php echo $room['Price']; ?>', '<?php echo $room['Description']; ?>', '<?php echo $room['NumberBed']; ?>', '<?php echo $room['TypeBed']; ?>', '<?php echo $room['Quantity']; ?>', '<?php echo $room['Disponibility']; ?>')">
                                                            <i class="fas fa-eye"></i>
                                                        </button>

                                                        <form method="POST" action="" style="display:inline;">
                                                            <input type="hidden" name="RoomID" value="<?php echo $room['RoomID']; ?>">
                                                            <button type="submit" data-bs-toggle="tooltip" name="RoomID" value="<?php echo $room['RoomID']; ?>" title="Remove" class="btn btn-link btn-danger" onclick="return confirm('Are you sure you want to delete this room?');">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal for adding a room -->



                            <!-- end modal -->

                            <!-- end -->

                            <!-- end -->
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    <?php include './links/script.php' ?>
</body>

</html>