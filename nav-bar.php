<?php
session_start();
if (isset($_SESSION["naam"])) {
    if ($_SESSION["rol"] == 1) {
        ?>
        <header>
            <section class="navigation">
                <div class="nav-container">
                    <div class="brand">
                        <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                    </div>
                    <nav class="nav-re-cycle">
                        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                        <ul class="nav-list">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="afspraken.php">Afspraken</a>
                            </li>
                           
                            <li>
                                <a href="cat.php">Fietsen</a>
                            </li>
                            <li>
                                <a href="footer.php">More</a>
                            </li>
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </section>
        </header>
        <?php
    }
} else {

    ?>

    <header>
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="index.php"><img class="logonav" alt="Logo" src="assets/Re-cycle.png"></a>
                </div>
                <nav class="nav-re-cycle">
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="afspraken.php">Afspraken</a>
                        </li>
                       
                        <li>
                            <a href="cat.php">Fietsen</a>
                        </li>
                        <li>
                            <a href="footer.php">More</a>
                            
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </section>
    </header>

    <?php
}

?>