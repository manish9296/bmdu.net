<div class="footer_part">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="footer_iner text-center">
<p>2024 ©   - Designed by<a href="#">BM Digital Utilization</a></p>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="<?php echo base_url('assets/dashboard/js/jquery1-3.4.1.min.js'); ?> "></script>

<script src="<?php echo base_url('assets/dashboard/js/popper1.min.js'); ?> "></script>

<script src="<?php echo base_url('assets/dashboard/js/bootstrap1.min.js'); ?> "></script>

<script src="<?php echo base_url('assets/dashboard/js/metisMenu.js'); ?> "></script>

<script src="<?php echo base_url('assets/dashboard/vendors/count_up/jquery.waypoints.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/chartlist/Chart.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/count_up/jquery.counterup.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/swiper_slider/js/swiper.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/niceselect/js/jquery.nice-select.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/owl_carousel/js/owl.carousel.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/gijgo/gijgo.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/datatable/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/apexcharts.js'); ?> js/chart.min.js"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/progressbar/jquery.barfiller.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/tagsinput/tagsinput.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/text_editor/summernote-bs4.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/apexcharts.js'); ?>"></script>

<script src=" <?php echo base_url('assets/dashboard/js/custom.js'); ?>"></script>

<script src=" <?php echo base_url('assets/dashboard/js/active_chart.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/radial_active.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/stackbar.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/area_chart.js'); ?>"></script>

<script src="<?php echo base_url('assets/dashboard/vendors/apex_chart/bar_active_1.js'); ?>"></script>
<script src="<?php echo base_url('assets/dashboard/vendors/chartjs/chartjs_active.js'); ?>"></script>

</body>

</html>
<script>
    $(function(){
           $('#ad_form').validate({
               rules:{
                   user:{
                       required:true,
                       minlength:6
                   },
                   pass:{
                       required:true,
                       minlength:6
                   }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });
       
       $( function () {
    $('.table').DataTable();
} );
</script>
</body>