<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p><?=date("Y");?> &copy; Instituto Nacional de Bellas Artes y Literatura</p>
                    </div>
                    <div class="float-end">
                        <p>Subdirección General de Bellas Artes</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?=base_url('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
    <!--
    <script src="<?=base_url('admin/assets/vendors/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
-->
    <script src="<?=base_url('admin/assets/js/mazer.js');?>"></script>

    <script src="<?=base_url('admin/assets/vendors/fontawesome/all.min.js');?>"></script>

    <?php if(isset($js)) { 
        foreach($js as $c)
            echo '<script src="'.base_url("admin/assets/$c").'"></script>';
    } ?>

</body>

</html>