<?php
/*
type: layout
name: Team block 3
description: Paralax block
*/
$bg= get_option('bgpic',$params['id']);
?>
<div class="parallaxBg" <?php if ($bg): ?> style="background: url('<?php print $bg ?>') 50% 0 repeat fixed;" <?php endif; ?>>
<div class="container content parallax-about edit" rel="<?php print $params['id'];?>" field="<?php print $params['id'];?>">
    <div class="container content">
        <div class="title-box-v2">
            <h2>Build Your <span class="color-green">Own</span> Talents</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="row">
            <!-- Team v2 -->
            <div class="col-md-3 col-sm-6">
                <div class="team-v2">
                    <img class="img-responsive" src="<?php print TEMPLATE_URL;?>assets/img/team/1.jpg" alt="" />
                    <div class="inner-team">
                        <h3>Jack Anderson</h3>
                        <small class="color-green">CEO, Chief Officer</small>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                        <hr>
                        <ul class="list-inline team-social">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="fb tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tw tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="gp tooltips" data-original-title="Google plus" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Team v2 -->

            <!-- Team v2 -->
            <div class="col-md-3 col-sm-6">
                <div class="team-v2">
                    <img class="img-responsive" src="<?php print TEMPLATE_URL;?>assets/img/team/3.jpg" alt="" />
                    <div class="inner-team">
                        <h3>Kate Metus</h3>
                        <small class="color-green">Project Manager</small>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                        <hr>
                        <ul class="list-inline team-social">
                            <li><a data-placement="top" data-toggle="tooltip" class="fb tooltips" data-original-title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-placement="top" data-toggle="tooltip" class="tw tooltips" data-original-title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-placement="top" data-toggle="tooltip" class="gp tooltips" data-original-title="Google plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Team v2 -->

            <!-- Team v2 -->
            <div class="col-md-3 col-sm-6">
                <div class="team-v2">
                    <img class="img-responsive" src="<?php print TEMPLATE_URL;?>assets/img/team/2.jpg" alt="" />
                    <div class="inner-team">
                        <h3>Porta Gravida</h3>
                        <small class="color-green">VP of Operations</small>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                        <hr>
                        <ul class="list-inline team-social">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="fb tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tw tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="gp tooltips" data-original-title="Google plus" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Team v2 -->

            <!-- Team v2 -->
            <div class="col-md-3 col-sm-6">
                <div class="team-v2">
                    <img class="img-responsive" src="<?php print TEMPLATE_URL;?>assets/img/team/4.jpg" alt="" />
                    <div class="inner-team">
                        <h3>Donec Elisson</h3>
                        <small class="color-green">Director, R &amp; D Talent</small>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                        <hr>
                        <ul class="list-inline team-social">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="fb tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tw tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="gp tooltips" data-original-title="Google plus" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Team v2 -->
        </div>
    </div>
</div>
</div>