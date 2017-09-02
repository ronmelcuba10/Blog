<nav class="navbar navbar-default">
   <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">Nurse Office</a>
     </div>

     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
         <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/nurseoffice/public/">Home</a></li>
         <li class="{{ Request::is('/blog') ? "active" : "" }}"><a href="/nurseoffice/public/blog">Blog</a></li>
         <li class="{{ Request::is('/about') ? "active" : "" }}"><a href="/nurseoffice/public/about">About</a></li>
         <li class="{{ Request::is('/contact') ? "active" : "" }}"><a href="/nurseoffice/public/contact">Contact me</a></li>
         
       </ul>
       <form class="navbar-form navbar-left" role="search">
         <div class="form-group">
           <input type="text" class="form-control" placeholder="Search">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
       </form>
       <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
         <li><a href="#">Link</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="{{ route('posts.index') }}">Posts</a></li>
             <li><a href="{{ route('categories.index') }}">Categories</a></li>
             <li><a href="{{ route('tags.index') }}">Tags</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="{{ route('logout') }}">Logout</a></li>
           </ul>
         </li>
          @else

          <a href="{{ route('login') }}" class="btn btn-default">Login</a>

          @endif

       </ul>
     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>