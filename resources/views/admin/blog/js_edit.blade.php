<link rel="stylesheet" href="{{ admin_asset('css/vendor/redactor/redactor.css')}}" />
<script src="{{ admin_asset('js/vendor/redactor/redactor.js')}}"></script>
<script>

	$(document).ready(function(){
		$('#text').redactor({
			buttons: ['html', 'formatting', 'bold', 'italic', 'underline', 'outdent', 'indent', 'alignment', 'unorderedlist', 'orderedlist', 'link', 'image'],
			buttonSource: true,
			formatting: ['p', 'h2', 'h3', 'h4', 'blockquote'],
			imageUpload: "{{ route('redactor_image_upload', ['blog', 'subdir' => true]) }}&_token={{ csrf_token() }}",
			uploadImageField: 'redactor_image',
		});

	});
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
        $j("#datepicker").datepicker({
            beforeShow: function(input, datepicker) {
                setTimeout(function() {
                    $(datepicker.dpDiv).css('zIndex', 2000);
                }, 10);
            }
        });
    });
</script>
