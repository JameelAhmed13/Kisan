<!-- jquery-->
<script src="<?php echo e(asset('assets/js/vendors/jquery/dist/jquery.min.js')); ?>"></script>

<!-- bootstrap js-->
<script src="<?php echo e(asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>

<!-- Sidebar js-->
<script src="<?php echo e(asset('assets/js/sidebar.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>

<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>

<!-- validation -->
<script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>

<!-- customizer-->
<script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>

<!-- toastr -->
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<!-- custom script -->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>





<script>
    $(document).ready(function() {
        $(document).on('change', '.toggle-status', function() {

            let status = $(this).prop('checked') ? 1 : 0;
            let url = $(this).data('route');
            let clickedToggle = $(this);
            $.ajax({
                type: "PUT",
                url: url,
                data: {
                    status: status,
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function(data) {
                    clickedToggle.prop('checked', status);
                    toastr.success("Status Updated Successfully");
                },
                error: function(xhr, status, error) {
                    console.log(error)
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#country_code').select2({
            templateResult: function(data) {
                if (!data.id) {
                    return data.text;
                }
                var $result = $('<span><img src="' + $(data.element).data('image') +
                    '" class="flag-img" /> +' + data.text.trim() + '</span>');
                return $result;
            },
            templateSelection: function(selection) {
                if (selection.text == ' ') {
                    return selection.text;
                }
                return ' + ' + selection.text;
            }
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/layouts/script.blade.php ENDPATH**/ ?>