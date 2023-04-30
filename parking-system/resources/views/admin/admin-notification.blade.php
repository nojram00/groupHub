@include('.partials.__admin-header')
    <main>
        <h1>Send Notification Status</h1>
        <form action="/notifs" method="POST">
            @csrf
            @foreach($users as $u)
                <input type="radio" name="user_name" value="{{$u->name}}" id="">
                <label for="user_name">{{$u->name}}</label> <br>
                <input type="hidden" name="user_id" value="{{$u->id}}">
            @endforeach
                {{-- <input type="radio" name="notification" value="parking_alert" id="">
                <label for="notification">Send Alert Status</label> --}}
            <button type="submit" value="parking_alert" name="notification" class="bg-white text-blue-900 p-3 m-4 rounded-md w-1/4 font-bold">Send Alert</button>
            <button type="submit" value="thanks" name="notification" class="bg-white text-blue-900 p-3 m-4 rounded-md w-1/4 font-bold">Send</button>
        </form>
    </main>
@include('.partials.__admin-footer')
