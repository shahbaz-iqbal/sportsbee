<?php $this->load->view('header'); 
?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<style>
    .mySlides {display:none;}
</style>
<div class="wrapper">
    <div class="row" style="background-repeat: no-repeat; background-size: cover; position: relative; width:103%; height:auto; overflow: hidden;">
        <img class="mySlides" src="<?php echo base_url('assets/images/dashboard1.png'); ?>" style="width:100%; height: auto;">
        <img class="mySlides" src="<?php echo base_url('assets/images/dashboard2.png'); ?>" style="width:100%; height: auto;">
        <img class="mySlides" src="<?php echo base_url('assets/images/dashboard3.png'); ?>" style="width:100%; height: auto;">
    </div> 
    <!--start videos section -->
    <div class="container">
        <div class="recentpost_grid_heading" style="margin-bottom: 20px !important;">
            <h2 style="color: #fff;">Recent Posts</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <video id="v" style="border:2px solid #B22E06; background-color: #FFAC1B;" controls preload='auto' width='540' height='330'>
                    <source id="webm" src="<?php echo base_url('assets/videos/video2.mp4'); ?>" 
                            type='video/webm;codecs="vp8, vorbis"' />
                    <source id="mp4" src="<?php echo base_url('assets/videos/video2.mp4'); ?>" 
                            type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
                    <source src="video2.ogg" type="video/ogg">
                    <p>Your browser does not support this video.</p>
                </video>
                <div id="video_title_overlay">This is the video! </div>

            </div>
            <div class="col-lg-6">
                <video id="v" style="border:2px solid #B22E06; background-color: #FFAC1B;" controls preload='auto' width='540' height='330'>
                    <source id="webm" src="<?php echo base_url('assets/videos/video1.mp4'); ?>" 
                            type='video/webm;codecs="vp8, vorbis"' />
                    <source id="mp4" src="<?php echo base_url('assets/videos/video1.mp4'); ?>" 
                            type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
                    <source src="video2.ogg" type="video/ogg">
                    <p>Your browser does not support this video.</p>
                </video>
                <div id="video_title_overlay">This is the video! </div>

            </div>

        </div>
    </div>
    <!--end videos section -->
    <!-- ============================================================== -->
    <!-- Start Point table here -->
    <!-- ============================================================== -->
    <div class="row pointtable_section" style="background-repeat: no-repeat; background-size: cover;  position: relative; width: 102%; height: auto; background-image: url('<?php echo base_url(); ?>assets/images/tablepointsbackground.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-xl-7 ">
                    <div class="pointtable_grid_heading">
                        <h2 style="color: #fff;">Points Table</h2>
                    </div>
                    <div class="pointtable_grid_table" style="margin-top: 20px; background-color: rgba(0,0,0,0.4); padding:20px 20px 20px 20px;">
                        <table style="width: 100%; padding-bottom: 5px;">
                            <thead style="font-size: 18px;">
                            <th class="points_col">ID</th>
                            <th class="points_col">TAEM</th>
                            <th class="points_col">WON</th>
                            <th class="points_col">PTS</th>
                            </thead>
                            <tbody style="font-size: 16px;">
                                <tr class="points_row">
                                    <td class="points_col">742</td>
                                    <td class="points_col">AUSTRALIA</td>
                                    <td class="points_col">0</td>
                                    <td class="points_col">0</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">739</td>
                                    <td class="points_col">IRLAND</td>
                                    <td class="points_col">0</td>
                                    <td class="points_col">0</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">34</td>
                                    <td class="points_col">INDIA</td>
                                    <td class="points_col">2</td>
                                    <td class="points_col">10</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">33</td>
                                    <td class="points_col">SCOTLAND</td>
                                    <td class="points_col">2</td>
                                    <td class="points_col">6</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">30</td>
                                    <td class="points_col">PAKISTAN</td>
                                    <td class="points_col">1</td>
                                    <td class="points_col">3</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">31</td>
                                    <td class="points_col">SOUTH AFRICA</td>
                                    <td class="points_col">0</td>
                                    <td class="points_col">0</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">29</td>
                                    <td class="points_col">ENGLAND</td>
                                    <td class="points_col">2</td>
                                    <td class="points_col">4</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">28</td>
                                    <td class="points_col">BANGLADESH</td>
                                    <td class="points_col">2</td>
                                    <td class="points_col">8</td>
                                </tr>
                                <tr class="points_row">
                                    <td class="points_col">27</td>
                                    <td class="points_col">NEW ZEALAND</td>
                                    <td class="points_col">1</td>
                                    <td class="points_col">3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 col-md-1 col-xl-1">

                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="latestvideos_grid_heading">
                        <h2 style="color: #fff;">LEATEST VIDEOS</h2>
                    </div>
                    <div class="pointtable_grid_videos">
                        <div class="row pointtable_grid_videos_row js-video-button" data-channel="video" data-video-url="<?php echo base_url('assets/videos/video1.mp4'); ?>">
                            <div class="col-sm-4 col-md-4 col-xl-4">
                                <div class="pointtable_grid_videos_image_div">
                                    <img src="<?php echo base_url('assets/images/video1.jpg'); ?>" alt="">
                                    <i class="mdi mdi-play pointtable_grid_videos_i"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-xl-8">
                                <h4 class="pointtable_grid_videos_h4">NZ VS WI QUARTER FINAL</h4>
                                <p class="pointtable_grid_videos_p">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <span>08/08/2016</span>
                            </div>
                        </div>
                        <div class="row  pointtable_grid_videos_row js-video-button" data-channel="video" data-video-url="<?php echo base_url('assets/videos/video2.mp4'); ?>">
                            <div class="col-sm-4 col-md-4 col-xl-4">
                                <div class="pointtable_grid_videos_image_div">
                                    <img src="<?php echo base_url('assets/images/video2.jpg'); ?>" alt="">
                                    <i class="mdi mdi-play pointtable_grid_videos_i"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-xl-8">
                                <h4 class="pointtable_grid_videos_h4">PAK VS AUS QUARTER FINAL</h4>
                                <p class="pointtable_grid_videos_p">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <span>08/08/2016</span>
                            </div>
                        </div>
                        <div class="row  pointtable_grid_videos_row js-video-button" data-channel="video" data-video-url="<?php echo base_url('assets/videos/video1.mp4'); ?>">
                            <div class="col-sm-4 col-md-4 col-xl-4">
                                <div class="pointtable_grid_videos_image_div">
                                    <img src="<?php echo base_url('assets/images/video3.jpg'); ?>" alt="">
                                    <i class="mdi mdi-play pointtable_grid_videos_i"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-xl-8">
                                <h4 class="pointtable_grid_videos_h4">IND VS BAN QUARTER FINAL</h4>
                                <p class="pointtable_grid_videos_p">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <span>08/08/2016</span>
                            </div>
                        </div>
                        <div class="row  pointtable_grid_videos_row js-video-button" data-channel="video" data-video-url="<?php echo base_url('assets/videos/video1.mp4'); ?>">
                            <div class="col-sm-0 col-md-4 col-xl-4">

                            </div>
                            <div class="col-sm-12 col-md-5 col-xl-5 " style="padding-left: 20px;">
                                <a class="pointtable_grid_morevideo" href="">VIEW MORE</a>
                            </div>
                            <div class="col-sm-0 col-md-3 col-xl-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end Point table here -->
    <!-- ============================================================== -->
    <!-- start recent matches -->
    
    <!-- end recent matches -->
</div>
<!-- end wrapper -->
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<?php $this->load->view('footer'); ?>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
    }
</script>