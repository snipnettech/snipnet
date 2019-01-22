    <div class="dashboard_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="dashboard_menu">
                        <li class="<?php if($baseURL == "purchase"){ echo "active"; } ?>">
                            <a href="purchase">
                                <span class="lnr icon-basket"></span>Purchase</a>
                        </li>
						
                        <li class="<?php if($baseURL == "statement"){ echo "active"; } ?>">
                            <a href="statement">
                                <span class="lnr icon-chart"></span>Statements</a>
                        </li>
                        <li class="<?php if($baseURL == "setting"){ echo "active"; } ?>">
                            <a href="setting">
                                <span class="lnr icon-settings"></span>Setting</a>
                        </li>
                    </ul>
                    <!-- end /.dashboard_menu -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
