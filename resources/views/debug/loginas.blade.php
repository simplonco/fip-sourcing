<div id="debug-loginas">
    <button class="toggle">
        <i class="far fa-chess-pawn">#</i>
    </button>
    <aside id="users">
        @foreach(\User::all() as $u)
            <li><a href="/loginas/{{$u->id}}">{{$u->last_name}} {{$u->first_name}} ({{$u->email}}) {{$u->roles->implode('name', ', ')}}</a></li>
        @endforeach
    </aside>
</div>
<style>
    #debug-loginas {
        position: fixed;
        top:0;
        right:0;
        z-index:9999;
        list-style:none;

    }
    #debug-loginas .toggle {
        outline : solid red 1px;
    }
    #debug-loginas #users.active {
        display: block;
    }
    #debug-loginas #users {
        padding: 1em;
        display:none;
        overflow:auto;
        background: rgba(255,255,255,.9);
        max-height:85vh;

    }
</style>

<script>
    var d = document.querySelector("#debug-loginas button")
    d.addEventListener('click', function(e) {
        e.preventDefault()
        document.querySelector("#debug-loginas #users").classList.toggle('active')
    })
</script>