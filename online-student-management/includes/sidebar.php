<div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="dashtry.php?stdid=<?php echo $id;?>">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                               info
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="gradeshow.php?stdid=<?php echo $id;?>">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                               Grade sheet
                            </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="routine-stdtry.php?stdid=<?php echo $id;?>">
                    <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                                Routine
                            </span>
                </a>

            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="logout.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                                Logout
                            </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
