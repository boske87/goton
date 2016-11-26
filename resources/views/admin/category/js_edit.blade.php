<link rel="stylesheet" href="{{ admin_asset('css/vendor/redactor/redactor.css')}}" />
<script src="{{ admin_asset('js/vendor/redactor/redactor.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#intro').redactor({
			buttons: ['html', 'formatting', 'bold', 'italic', 'underline', 'outdent', 'indent', 'alignment', 'unorderedlist', 'orderedlist', 'link'],
            buttonSource: true,
            formatting: ['p', 'h2', 'h3', 'h4']
        });

    });
</script>
