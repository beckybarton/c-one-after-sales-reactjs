@include('layout.head')
<script defer src="{{ mix('js/app.js') }}"></script>
Dashboard here
<div id="dashboarddiv">
    {{-- Include your React component rendering here --}}
</div>
<script>
    const root = createRoot(document.getElementById('dashboarddiv'));
    root.render(<DashboardIndex />);
</script>
@include('layout.foot')
