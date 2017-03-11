<header>
    @include ('layout\auth')
    <?php $user = Illuminate\Support\Facades\Auth::user();?>
    <nav>
        <div id="menubar">
            <ul id="nav">
                <li class="current"><a href="/">Home</a></li>
                <li><a href="ourwork">Our Work</a></li>
                @if($user && $user->hasPermission("file.show")){
                <li><a href="uploadFile">Upload file</a></li>
                @endif
                @if($user && $user->hasPermission("branch.show")){
                <li><a href="branch">Branch</a></li>
                @endif
                @if($user && $user->hasPermission("permission.show")){
                <li><a href="permission">Permission</a></li>
                <li><a href="users">Users</a></li>
                @endif
            </ul>
        </div><!--close menubar-->	
    </nav>
    <div id="banner">
        <div id="welcome">
            <h3>Socio <span>Help your self by helping others</span></h3>
        </div><!--close welcome-->		
    </div><!--close banner-->
</header>