@extends('layouts/default')

@section('title', 'Home')

@section('content')

    <div class="wrapper">
        <section id="main">
            <div class="about">
                <h1>
                    Hey, i'm Max 
                </h1>
                <p>
                    A student currently studying computer science at the 
                    <a href="https://www.th-brandenburg.de/" target="_blank">THB</a>
                    in Germany, Brandenburg an der Havel.
                </p>
                <p>                    
                    You can find me spending a lot of free time 
                    doing a lot of stuff on my computer.    
                </p>
            </div>
            
            <nav>
                <ul>
                    <li class="nav-item">
                        <a href="#" class="link-disabled"> 3D Prints </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="link-disabled"> 3D Models </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="link-disabled"> Project Ideas </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="link-disabled"> Contact </a>
                    </li>
                </ul>
            </nav>
        </section>
        <section id="social-links">
            <div class="links">
                <a href="https://github.com/itCarl" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.thingiverse.com/" target="_blank">
                    <img src="images/thingiverse_icon.svg" width="26px" alt="">
                </a>                
                <a href="https://thangs.com/it.Carl" target="_blank">
                    <img src="images/thangs_logo.svg" width="26px" alt="">
                </a>
                <a href="https://codepen.io/itcarl" target="_blank">
                    <i class="fab fa-codepen"></i>
                </a>
                <a href="mailto:contact@maximilian-mewes.de" target="_blank">
                    <i class="far fa-envelope"></i>
                </a>
            </div>
        </section>
    </div>

    <section id="projects">
        <div class="project-container">
            <div class="project-item">
                <img src="images/projects/bac_mockup01.png" alt="">
            </div>
            <div class="project-item" style="grid-column: span 2;" >
                <img src="images/projects/lonleytunes.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/bac_mockup02.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/bac_mockup03_live.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/wifi_keys01.png" alt="">
            </div>  
            <div class="project-item" style="grid-column: span 2;">
                <img src="images/projects/hookah_coaster01.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/rc_idea01_thicker_rainbow_things.png" alt="">
            </div>  
            <div class="project-item" style="grid-column: span 2;">
                <img src="images/projects/hookah_coaster02.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/gadze01.png" alt="">
            </div>  
            <div class="project-item">
                <a href="https://pacala.blubber-lounge.de/" target="_blank" rel="noopener noreferrer">
                    <img src="images/projects/pacalaBlubberlounge01.png" alt="">
                </a>
            </div>
            <div class="project-item">
                <img src="images/projects/blubberLounge_logo.png" alt="">
            </div> 
            <div class="project-item">
                <a href="https://pacala.blubber-lounge.de/" target="_blank" rel="noopener noreferrer">
                    <img src="images/projects/PaCaLa_hex_round_V1.png" alt="">
                </a>
            </div>
            <div class="project-item">
                <img src="images/projects/rc_idea01_thicker_rainbow_things02.png" alt="">
            </div>
            <div class="project-item">
                <img src="images/projects/vcc_west_brb_logo.png" alt="">
            </div>  
            <div class="project-item">
                <img src="images/projects/controller.png" alt="">
            </div>
            <div class="project-item">
                <a href="https://github.com/Aircoookie/WLED/blob/main/usermods/Battery" target="_blank" rel="noopener noreferrer">
                    <img src="images/projects/wled_battery_usermod.png" alt="">
                </a>
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/ccc/000.png&text=empty+project" alt="">
            </div>
            <div class="project-item">
                <img src="https://dummyimage.com/600x4:3/3c3c3c/ccc.png&text=empty+project" alt="">
            </div>
            
        </div>
    </section>
@endsection
