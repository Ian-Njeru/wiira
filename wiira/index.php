<?php
    include_once "db/connection.php";
     
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/jobModal.css">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/livesearch.js"></script>
        <script src="js/updateStatus.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        
        <div class="display_details">
            
        
            <div id="container">
                <div id="add_job">
                    <div class="add_job">
                        <?php include 'add_job.php'?>
                    </div>
                </div>

                <div id="search_filter">

                

                <div id="search">
                    <input type="search" class="search" placeholder="Search...">
                </div>
            </div>
            </div>

            <div class="dataTable">
                <table id="applications">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Role</th>
                        <th>Reference Number</th>
                        <th>Company</th>
                        <th>Deadline</th>
                        <th>Mode of application</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody id="data">
                        <?php
                            include "controller/getApplication.controller.php";?>
                        
                    </tbody>

                </table>
            </div>
        </div>
    </body>
</html>
