<?php include "header.php";?>



<div class="container">

<div class="card mt-5 centerDiv shadow rounded-3 p-5 border-0 " >

    <form>
        <div class="form-group">

            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or PhoneNumber">

        </div>
        <div class="form-group mt-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary  btn-block mt-3 ">Log In</button>
        </div>

        <div class="text-center mt-2">
            <a href="#" >
                Forgot password?
            </a>
        </div>
        <hr/>
        <div class="text-center">
            <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#exampleModalCenter">Create New Account</button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <b><h4 class="modal-title" id="exampleModalCenterTitle">Sign Up</h4></b>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <input type="email" class="form-control" id="inputEmail4" placeholder="First name">
                                </div>
                                <div class="form-group col-md-6">

                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress" placeholder="Mobil number or email">
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">

                                <input type="text" class="form-control" id="inputAddress" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">

                                <input type="text" class="form-control" id="inputAddress" placeholder="confirm password">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Birthday</label>
                                <input type="text" class="form-control" id="date_pick" placeholder="date">
                            </div>

                            <div class="form-row text-center" >
                                <div class="form-group col-md-4">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">male</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">female</label>
                                </div>
                            </div>


                            <div class="text-center">
                            <button type="submit" class="btn btn-success btn_middle">Sign up</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>







    </form>


</div>


</div>






<?php include "footer.php";?>
