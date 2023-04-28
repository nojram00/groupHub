@include('partials.__header')

<h1>admin dashboard</h1>


<form action="logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@include('partials.__footer')
