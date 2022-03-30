 <!--add contact modal-->
 <div class="modal fade" id="emailmodal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="emailModalLabel">New Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="insertcontact.php" method="get">
                                <div class="mb-3">
                                    <label for="contactid" class="col-form-label">New Contact ID:</label>
                                    <input type="text" class="form-control" id="contactid" name="contactid">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="col-form-label">New Phone Number:</label>
                                    <input type="text" class="form-control" id="phoneNo" name="phoneNo">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">New Email:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save"></input>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!---->
                         <!--add email modal-->
                         <div class="modal fade" id="addressmodal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addressModalLabel">New Address</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="insertaddress.php" method="get">
                                <div class="mb-3">
                                    <label for="adrid" class="col-form-label">New Address ID:</label>
                                    <input type="text" class="form-control" id="adrid" name="adrid">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="col-form-label">New Address:</label>
                                    <input type="text" class="form-control" id="adr" name="adr">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save"></input>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                         <!--update address modal-->
                         <div class="modal fade" id="updateAddressmodal" tabindex="-1" aria-labelledby="updateaddressModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateaddressModalLabel">Update email</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="updateaddress.php" method="get">
                                <div class="mb-3">
                                    <label for="adrid" class="col-form-label">New Address ID:</label>
                                    <input type="text" class="form-control" id="adrid" name="adrid">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="col-form-label">New Address:</label>
                                    <input type="text" class="form-control" id="adr" name="adr">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save"></input>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!---->
                        <!--update email modal-->
                        <div class="modal fade" id="updateemailmodal" tabindex="-1" aria-labelledby="updateemailModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateemailModalLabel">Update email</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="updatecontact.php" method="get">
                                <div class="mb-3">
                                    <label for="contactid" class="col-form-label">ContactID:</label>
                                    <input type="text" class="form-control" id="contactid" name="contactid">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">New Email:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save"></input>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!---->
                         <!--update phonne modal-->
                         <div class="modal fade" id="updatephonemodal" tabindex="-1" aria-labelledby="updatephoneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updatephoneModalLabel">Update Phone</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="updatecontact.php" method="get">
                                <div class="mb-3">
                                    <label for="contactid" class="col-form-label">Contact ID:</label>
                                    <input type="text" class="form-control" id="contactid" name="contactid">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="col-form-label">New Phone Number:</label>
                                    <input type="text" class="form-control" id="phoneNo" name="phoneNo">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Save"></input>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!---->