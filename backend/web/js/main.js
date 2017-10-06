$(document).ready(function () {
    $('#category-created_at').datepicker({dateFormat: 'yy-mm-dd'})
    $('#category-updated_at').datepicker({dateFormat: 'yy-mm-dd'})


});

tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak a11ychecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen tinymcespellchecker advcode',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'template paste textcolor colorpicker textpattern imagetools codesample toc help emoticons hr'
  ],
  toolbar1: 'formatselect | bold italic  strikethrough  forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });