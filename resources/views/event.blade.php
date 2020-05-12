<html>
    <body>
        <div class="main">
        <span>All subscriptions for this event</span>
        @foreach ($subs as $sub)
            <p>This url us subscribed {{ $sub->url }}</p>
        @endforeach
        </div>
    </body>
</html>