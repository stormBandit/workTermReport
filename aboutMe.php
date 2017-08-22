<?php include("includes/header.html"); ?>

    <div class="container">
        <h1 class="pager">Dalton Polhill</h1>
        <p class="pager">I am co-op student at the university of Guelph, currently working towards a bachelors of computing
            with a major in Computer Science and a Minor in Business. I have just completed my first work term
            with Tulip Retail in Toronto. Throughout the 4 month work term I was able to use many of the skills I learned
            in the classroom to assist me in accomplishing tasks in timely manners.
            I had an opportunity to apply my knowledge in a hands on environment, which I feel is extremely
            valuable and will help me grow in my career.
            I hope to use my future work terms to try out new areas of the industry and expand my knowledge,
            I have a particular interest in cyber security, hardware, artificial intelligence systems and code optimizations.
        </p>

        <!-- Related Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <h3 style="margin-top: -10px"><small>OWASP - Juice Shop</small></h3>
                <a href="#juice-shop-details" data-target="#juice-shop-details" data-toggle="modal">Project Details</a>
                <br>
                <a href="https://github.com/stormBandit/juice-shop">See Project on Github</a>
                <img class="img-responsive portfolio-item" src="images/JuiceShop_Logo.png" alt="">
            </div>

            <div class="col-sm-3 col-xs-6">
                <h3 style="margin-top: -10px"><small>SunFunder - Smart Car for Arduino</small></h3>
                <a href="#smart-car-details">Project Details</a>
                <br>
                <a href="https://github.com/stormBandit/juice-shop">See Project on Github</a>
                <img class="img-responsive portfolio-item" src="images/sunfounder.jpeg" alt="">
            </div>

        </div>

    </div>

    <div id="juice-shop-details" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Juice Shop</h4>
                </div>
                <div class="modal-body">
                    <p>Being a web application with 43 intended security vulnerabilities, the OWASP Juice Shop<br>
                        is supposed to be the opposite of a best practice or template application for web developers:<br>
                        It is an awareness, training, demonstration and exercise tool for security risks in modern<br>
                        web applications. The OWASP Juice Shop is an open-source project hosted by the non-profit<br>
                        pen Web Application Security Project (OWASP) and is developed and maintained by volunteers.<br>
                        The content of this book was written for v5.0.0-SNAPSHOT of OWASP Juice Shop.<br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<?php include("includes/footer.html"); ?>
