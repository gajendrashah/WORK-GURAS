<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <link href="{{ asset('dashboard/css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('area1');
            new nicEditor({fullPanel : true}).panelInstance('area2');
            new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
            new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
            new nicEditor({maxHeight : 100}).panelInstance('area5');
        });
    </script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @yield('container')
    </div>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>

</body>
</html>



