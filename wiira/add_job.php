<?php include 'controller/jobApplicationInsert.controller.php'?>
<button id="jobModal"><i class = "fa fa-plus"></i> &nbsp; Add Application</button>

<div class="add_job" id="addJobModal">
    <div id="jobDetails">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <div id="close_modal">
                <span class="close_modal">&times;</span>
            </div>

            <div class="header">
                <h2>Add Job</h2>
            </div>

            <div class="body">
                <label for="role">Role
                    <input type="text" name="role">
                </label><br><br>

                <label for="company">Company
                    <input type="text" name="company">
                </label><br><br>

                <label for="reference_number">Reference Number
                    <input type="text" name="ref_number">
                </label><br><br>

                <label for="app_medium">Application Medium
                    <select name="application_medium">
                        <option value="">Select One</option>
                        <?php include "controller/getApplicationMedium.controller.php"?>
                    </select>
                </label><br><br>

                <label for="deadline">Deadline
                    <input type="date" name="deadline">
                </label><br><br>

                <label for="status">Status
                    <select name="status">
                        <option value="">Select One</option>
                        <?php include "controller/getReplyStatus.controller.php"?>
                    </select>
                </label>
            </div>

          

            <div id="buttons">
                <button class="submit" type="submit" name="submit">Submit</button>
                <button class="reset" type="reset">Reset</button>
            </div>

        </form>
    </div>
</div>

