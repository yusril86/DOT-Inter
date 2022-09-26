<script src="{{url('adminpages/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('adminpages/assets/vendor/php-email-form/validate.js')}}"></script>



<script src="{{url('adminpages/jquery/bootstrap.bundle.min.js')}}"></script>


<!-- include summernote css/js -->
<link href={{"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css"}} rel="stylesheet">
<script src={{"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"}}></script>






<!-- Template Main JS File -->
<script src="{{url('adminpages/assets/js/main.js')}}"></script>
<script>
  document.addEventListener("trix-file-accept", e => {
    e.preventDefault();
  })
</script>


<!-- Notification Mark As Read -->
<script>
  function markNotificationAsRead(type){
    $.get(`/markAsRead/${type}`);
  }
</script>