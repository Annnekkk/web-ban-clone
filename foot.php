<div class="footer-wrap pd-20 mb-20 card-box">
    Thiết Kế Website By: <a href="https://www.youtube.com/channel/UCkyBC3_XyBB_wFoNVRY413g" target="_blank">ZangYT</a>
</div>
</div>
</div>

<div id="status"></div>

<?php if($site['tuyetroi'] == 'ON') { ?>

<div aria-hidden='true' class='snowflakes'>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
    <div class='snowflake'>
        &#10053;
    </div>
    <div class='snowflake'>
        &#10054;
    </div>
</div>
<?php }?>
<script>
function DownloadBackup() {
    var uid = $("#uid").val();
    var url = '<?=$site['site_domain'];?>backup/' + uid + '.zip';
    window.open(url, "_blank");
}
</script>

<!-- Clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
</script>
<!-- js -->
<script src="/vendors/scripts/core.js"></script>
<script src="/vendors/scripts/script.min.js"></script>
<script src="/vendors/scripts/process.js"></script>
<script src="/vendors/scripts/layout-settings.js"></script>
<script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="/vendors/scripts/dashboard.js"></script>
<script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="/vendors/scripts/datatable-setting.js"></script>

    <style>
           .float-contact {
             box-sizing: border-box;
             position:fixed;
             bottom: 12px;
             right: 12px; 
             z-index: 99999;
           }
    </style>
</body>
</html>

