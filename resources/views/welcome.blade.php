<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel</title>

   <!-- Styles -->
   {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
   <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

    <div id="example"></div>
    <div id="testvariable" data-testvariable="{{ $testvariable }}"></div>

    {{-- ang kaning script dapat after sa dom element (div) --}}
    <script src="{{ mix('js/app.js') }}"></script> 
    <script>
        // Assuming TestVariableComponent is a React component
        ReactDOM.render(<DashboardIndex />, document.getElementById('example'));
        ReactDOM.render(<TestVariableComponent />, document.getElementById('testvariable'));
    </script>
</body>
</html>
