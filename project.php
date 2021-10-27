<?php include 'header.php'?>
<div class="breadcrumb-main">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active"><a href="#">Our Projects</a></li>
        </ol>
    </nav>
</div>
<div class="about">
    <div class="container">
        <div class="sec-title">
            <h2>Our Project</h2>
        </div>
        <div class="who_are_we_text">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil corrupti numquam quod quasi, facere
                quis tempora doloremque harum aut odio in ipsa error quisquam quidem, maxime iste voluptate!
                Quaerat!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit nihil corrupti numquam quod
                quasi, facere
                quis tempora doloremque
            </p>
        </div>
        <div class="search_filter">
            <div class="status">
                <form action="/action_page.php">
                    <h6>Project Status</h6>
                    <select name="cars" id="cars">
                        <option value="volvo">On Going</option>
                        <option value="saab">Completed</option>
                    </select>
                </form>
                <form action="/action_page.php">
                    <h6>Project Category</h6>
                    <select name="cars" id="cars">
                        <option value="volvo">All</option>
                        <option value="volvo">Building Works</option>
                        <option value="saab">Irrigation</option>
                        <option value="saab">Road Works</option>
                        <option value="saab">other works/option>
                    </select>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="project_card_single">
                    <a href="inner-project.php">
                        <div class="pcs_image">
                            <img src="./images/banner-image.jpg" alt="">
                        </div>
                        <div class="pcs_desc">
                            <span class="project_status">on going</span>
                            <h6>Construction of Narayanhiti</h6>
                            <span class="project_category">BUILDING WORK</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project_card_single">
                    <a href="inner-project.php">
                        <div class="pcs_image">
                            <img src="./images/banner-image.jpg" alt="">
                        </div>
                        <div class="pcs_desc">
                            <span class="project_status">on going</span>
                            <h6>Construction of Narayanhiti</h6>
                            <span class="project_category">BUILDING WORK</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project_card_single">
                    <a href="inner-project.php">
                        <div class="pcs_image">
                            <img src="./images/banner-image.jpg" alt="">
                        </div>
                        <div class="pcs_desc">
                            <span class="project_status">on going</span>
                            <h6>Construction of Narayanhiti</h6>
                            <span class="project_category">BUILDING WORK</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project_card_single">
                    <a href="inner-project.php">
                        <div class="pcs_image">
                            <img src="./images/banner-image.jpg" alt="">
                        </div>
                        <div class="pcs_desc">
                            <span class="project_status">on going</span>
                            <h6>Construction of Narayanhiti</h6>
                            <span class="project_category">BUILDING WORK</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>