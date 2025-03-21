<style>
    .box-father {
        display: flex;
        justify-content: center;
    }

    .box-child {
        width: 400px;
        border: 3px solid black;
        background-color: #fff7d1;
        border-radius: 10px;
        padding: 15px;

    }

    .h-title {
        text-align: center;
    }

    .text-father {
        display: flex;
        justify-content: center;
    }
</style>


<div class="box-father">
    <div class="box-child">
        <div class="h-title">
            <h1>Profile</h1>
        </div>
        <div class="text-father">
            <div class="text-child">

                <?php echo form_open("user/update") ?>
                <fieldset>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" disabled type="text" id="username" name='username'
                            value=<?php echo $username ?>>

                    </div>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input class="form-control" type="text" id="firstname" name='firstname'
                            value=<?php echo $firstname ?>>

                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input class="form-control" type="text" id="lastname" name='lastname'
                            value=<?php echo $lastname ?>>

                    </div>
                    <input type="hidden" name='id'
                        value=<?php echo $id ?>>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" disabled type="text" id="email" name='email'
                            value=<?php echo $email ?>>

                    </div>

                    <input class="btn btn-primary mt-2" type="submit" value="update">

                </fieldset>
                </form>



                <!-- update can apply only to firstname and last name, and update time applied. -->







                <?php echo form_open("user/logout") ?>
                <input class="btn btn-success mt-2" type="submit" value="logout">
                </form>



                <!-- <?php echo form_open("user/deactivate") ?>
                <input class="btn btn-danger mt-2" type="submit" value="Close account">
                </form> -->
            </div>
        </div>
    </div>
</div>