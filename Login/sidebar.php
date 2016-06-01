<!---
File: sidebar.php

This file contains the basic html code for the admin sidebar

Version 1.0
Author: Erik Naess

-->

<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        <? echo $_SESSION['USERNAME']; ?>
                </li>

                <li>
                    <a href="add_movie.php">Add movie</a>
                </li>
                <li>
                    <a href="edit_movies.php">Edit movie</a>
                </li>

                <br />
                <br />
                <li>
                   <a href="../clips.php">Logout</a>
                </li>
            </ul>
        </div>
        
        
        <!-- /#sidebar-wrapper -->